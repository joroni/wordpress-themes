<?php
   
add_filter( 'extra_theme_headers', 'gabfire_extra_theme_headers' );
  
function gabfire_extra_theme_headers( $headers ) {
    if ( !in_array( 'MD5', $headers ) )
        $headers[] = 'MD5';
    return $headers;
}
  
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ){
   
add_action( 'admin_notices', 'gabfire_show_notice' );  // Shows custom theme activation notice with links to option page and changelog
   
function gabfire_show_notice() { ?>
    <div id="message" class="updated fade">
        <p>Your theme is not registered, please enter an API key to upgrade your theme.</p>
    </div>
    <?php
}
   
}
  
add_action('admin_init', 'gabfire_ignore');
  
function gabfire_ignore() {
    global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['gabfire_ignore']) && '0' == $_GET['gabfire_ignore'] ) {
             add_user_meta($user_id, 'gabfire_ignore_notice', 'true', true);
    }
}
$theme_data = get_theme_data(OF_FILEPATH . '/style.css');
if ( is_admin() && get_transient('gabfire_theme_' . $theme_data['Name'])){
add_action( 'admin_notices', 'gabfire_show_update' );  // Shows custom theme activation notice with links to option page and changelog
   
function gabfire_show_update() { 
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css'); 
    global $current_user ;
    $user_id = $current_user->ID;
    /* Check that the user hasn't already clicked to ignore the message */
    if ( ! get_user_meta($user_id, 'gabfire_ignore_notice') ) { ?>
    <div id="message" class="updated fade">
        <p>There is an update available for <?php echo ucwords($theme_data['Title']); ?>. <a href="<?php echo get_bloginfo('url'); ?>/wp-admin/admin.php?page=gabfire_changelog">View Details</a> | <a href="?gabfire_ignore=0">Hide Notice</a></p>
    </div>
    <?php } ?>
<?php
}
}
function gabfire_errors($code, $key, $url){
$gabfire_errors = array(
    'sucess' =>  "Key <code>" . $key . "</code> Successfully Activated For <code>" . $url . "</code>",
    'prev_activated' => "Key Previously Activated For This Domain",
    'removed' => "Key <code>" . $key . "</code> Successfully Removed For <code>" . $url . "</code>",
    'key_expired' =>  "Key <code>" . $key . "</code> Has Expired",
    'wrong_theme_key' => "Key <code>" . $key . "</code> Not Valid for This Theme",
    'key_limit' => "Key <code>" . $key . "</code> Activations Reached",
    'not_activated' => "Key Not Activated For This Domain"
);
return $gabfire_errors[$code];
}
function activate_key($url, $key){
   $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
   $response = wp_remote_post($url, array(
       'method'=>'POST',
       'timeout'=>'45',
       'body'=> array('action'=>'activate_key','key'=>$key,'url'=>site_url(),'theme'=>$theme_data['Name'])
   ));
    if( is_wp_error( $response ) ) {
        $error_string = $response->get_error_message();
        return '<div id="message" class="error"><p>' . $error_string . '</p></div>';
    } else {
        if ($response['response']['code'] == '200'){
            return gabfire_errors($response['body'],$key, site_url());
        } else{
            return 'An unknown error occured, please try again later';
        }
    }
}
   
function remove_key($url, $key){
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
   $response = wp_remote_post($url, array(
       'method'=>'POST',
       'timeout'=>'45',
       'body'=> array('action'=>'remove_key','key'=>$key,'url'=>site_url(),'theme'=>$theme_data['Name'])
   ));
    if( is_wp_error( $response ) ) {
        $error_string = $response->get_error_message();
        return '<div id="message" class="error"><p>' . $error_string . '</p></div>';
    } else {
        if ($response['response']['code'] == '200'){
            return gabfire_errors($response['body'],$key, site_url());
        } else{
            return 'An error occured, please try again later';
        }
    }
}
   
function gabfire_get_update($file = 'false'){
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
    $url = 'http://versionupdate.net/api/index.php';
    if (get_option('gabfire_api_key')){
        $key = get_option('gabfire_api_key_' . $theme_data['Name']);
    } else {
        $key = 'unknown';
    }
    $response = wp_remote_post($url, array(
       'method'=>'POST',
       'timeout'=>'45',
       'body'=> array('action'=>'update_check','key'=>$key,'url'=>site_url(),'theme'=>$theme_data['Name'],'version'=>$theme_data['Version'],'file'=>$file,'md5'=>$theme_data['MD5'])
   ));
    if( is_wp_error( $response ) ) {
        return;
    } else {
        if ($response['response']['code'] == '200'){
            return $response['body'];
        } else{
            return;
        }
    }
}
  
function gabfire_do_update(){
    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    $file = gabfire_get_update($file = 'true');
    $file = unserialize($file);
    $upgrader = new WP_Upgrader;
    $upgrader->run(array(
          'package' => $file['package'], //this should be the name of your plugin
          'destination' => get_template_directory(), //this should be defined to the directory you want to install the plugin to
          'clear_destination' => true, //set this if you want to remove the old version first
          'clear_working' => true, //change this if you want to leave a copy of the zip file
          'is_multi' => false, //only change this if you're calling the function multiple times
    ));
}
   
add_action('gabfire_check', 'gabfire_update_themes');
  
function gabfire_update_themes(){
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
    $response = gabfire_get_update();
    if ($response != ""){
        set_transient('gabfire_theme_' . $theme_data['Name'], $response);
    } elseif(get_transient('gabfire_theme_' . $theme_data['Name'])){
        delete_transient('gabfire_theme_' . $theme_data['Name']);
    }
}
function gabfire_schedule_update(){
     if ( !wp_next_scheduled('gabfire_check'))
      wp_schedule_event(time(), 'daily', 'gabfire_check');
}
add_action('wp', 'gabfire_schedule_update');
?>