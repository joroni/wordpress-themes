<?php
function gabfire_add_admin(){
    global $_registered_pages;  
    $of_page = array();
    $of_page[] = add_menu_page(__('Gabfire Themes Options'), __('Gabfire Themes'), 'edit_theme_options', 'gabfire_theme', 'optionsframework_page', get_bloginfo('template_directory') . '/images/framework/gabfire-icon.png', 36 );
    $of_page[] = add_submenu_page( 'gabfire_theme', 'Gabfire Themes Options', 'Theme Options', 'edit_theme_options', 'gabfire_theme');
    $of_page[] = add_submenu_page( 'gabfire_theme', 'Gabfire Themes Updates', 'Updates', 'edit_theme_options', 'gabfire_update','gabfire_update');
    $of_page[] = add_submenu_page( 'gabfire_theme', 'Gabfire Blog', 'Gabfire Blog', 'edit_theme_options', 'gabfire_blog', 'gabfire_blog');
    $of_page[] = add_submenu_page( 'gabfire_theme', 'Gabfire New Themes', 'New Themes', 'edit_theme_options', 'gabfire_new', 'gabfire_new'); 
  
    //Adds hidden changelog page.
    $hookname = get_plugin_page_hookname('gabfire_changelog', 'admin.php');  
    if (!empty($hookname)) {  
        add_action($hookname, 'gabfire_changelog_page');
        add_action("admin_print_styles-$hookname",'optionsframework_load_styles');
        add_action("admin_print_scripts-$hookname", 'optionsframework_load_scripts');
    }  
    $_registered_pages[$hookname] = true; 
     
    // Adds actions to hook in the required css and javascript
    foreach($of_page as $page){
        add_action("admin_print_styles-$page",'optionsframework_load_styles');
        add_action("admin_print_scripts-$page", 'optionsframework_load_scripts');
    }
}
add_action('admin_menu','gabfire_add_admin');
  
add_action( 'wp_before_admin_bar_render', 'gabfire_adminbar' );
  
function gabfire_adminbar() {
     
    global $wp_admin_bar;
     
    $wp_admin_bar->add_menu( array(
        'id' => 'gabfire_theme',
        'title' => __( 'Gabfire Themes' ),
        'href' => '#'
  ));
        $wp_admin_bar->add_menu( array(
        'parent' => 'gabfire_theme',
        'id' => 'of_theme_options',
        'title' => __( 'Theme Options' ),
        'href' => admin_url( 'admin.php?page=gabfire_theme' )
  ));
        $wp_admin_bar->add_menu( array(
        'parent' => 'gabfire_theme',
        'id' => 'gf_update',
        'title' => __( 'Updates' ),
        'href' => admin_url( 'admin.php?page=gabfire_update' )
  ));
        $wp_admin_bar->add_menu( array(
        'parent' => 'gabfire_theme',
        'id' => 'gf_blog',
        'title' => __( 'Gabfire Blog' ),
        'href' => admin_url( 'admin.php?page=gabfire_blog' )
  ));
        $wp_admin_bar->add_menu( array(
        'parent' => 'gabfire_theme',
        'id' => 'gf_new',
        'title' => __( 'New Themes' ),
        'href' => admin_url( 'admin.php?page=gabfire_new' )
  ));        
}
  
function gabfire_update(){
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
    if(isset($_POST['remove_key'])){
            $key = $_POST['api_key'];
            $message = remove_key('http://versionupdate.net/api/index.php', $key);
            if(get_option('gabfire_api_key_' . $theme_data['Name']) == true){
                    delete_option('gabfire_api_key_' . $theme_data['Name']);
            }
    } elseif(isset($_POST['upgrade'])){
            gabfire_do_update();
    } elseif(isset($_POST['activate_key'])){
        if (preg_match('/^[a-f0-9]{32}$/i', $_POST['api_key'])){
            $key = $_POST['api_key'];
            $message = activate_key('http://versionupdate.net/api/index.php', $key);
            if(get_option('gabfire_api_key_' . $theme_data['Name']) == false){
                add_option('gabfire_api_key_' . $theme_data['Name'],$key);
            } else {
                update_option('gabfire_api_key_' . $theme_data['Name'],$key);
            }
        } else {
            $message = 'Please Enter Valid API Key';
        }
             
    }
?>
        <div class="wrap">
            <div class="metabox-holder">
          
                <?php /* gab_adminheader() is defined in inc/admin/admin-framework.php */
                gab_adminheader(); ?>
                  
                <div id="optionsframework" class="postbox">
                                  
                        <div class="clear"></div> 
                         
                        <form method="post" class="update-form" style="text-align:center">
                        <h2 class="up-title"><?php if (get_option('gabfire_api_key_' . $theme_data['Name']) != ""){ echo 'Registered'; } else { echo 'Unregistered';} ?></h2>
                            <label for="api_key" class="api-key">API Key:</label>      
                            <input type="password" value="<?php echo get_option('gabfire_api_key_' . $theme_data['Name']); ?>" name="api_key" class="of-input" />
                            <br /> 
  
                            <?php if (get_option('gabfire_api_key_' . $theme_data['Name']) == ""){
                                    echo '<div class="up-key">Please Enter your API Key</div>';
                            }                 
                            if (isset($message) ){
                                echo '<div class="up-key">' . $message . '</div>';
                            } ?>
  
                            <h1 class="update-msg">The theme update script is in BETA state. Please do not use this script to update your theme before Alpha release. We strongly suggest you to update your theme manually.</h1>
  
                            <p>
                                <input type="submit" class="button-primary alignright" name="activate_key" value="Activate Key" />
                                <input type="submit" class="button-secondary alignleft" name="remove_key" value="Remove Key" />
                                <div class="clear"></div>
                            </p>
                                 
                            <?php if (get_transient('gabfire_theme_' . $theme_data['Name']) && get_option('gabfire_api_key_' . $theme_data['Name']) != ""){ ?>
                                <input type="submit" class="button-secondary alignright" name="upgrade" value="Upgrade Theme" onclick="return confirm('Updating this theme will lose any customizations you have made.  \'Cancel\' to stop, \'OK\' to update');"/>
                            <?php } ?>
                        </form>
                        <div class="clear"></div>
                </div><!-- optionsframework .postbox -->
            </div><!-- metabox-holder -->
        </div><!-- wrap -->
<?php
   
}
  
function gabfire_changelog_page(){
    $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
    $update = get_transient('gabfire_theme_' . $theme_data['Name']);
    $update = unserialize($update);
    ?>
        <div class="wrap">
            <div class="metabox-holder">
         
				<?php /* gab_adminheader() is defined in inc/admin/admin-framework.php */
				gab_adminheader(); ?>
             
				<div id="optionsframework" class="postbox">
						<?php if (!get_option('gabfire_api_key_' . $theme_data['Name'])){ ?>
							<div class="warning">There is a new version of available. <a href="<?php echo get_bloginfo('url'); ?>/wp-admin/admin.php?page=gabfire_update">Register</a> your copy of <?php echo ucwords($theme_data['Title']); ?> to receive access to automatic updates and support. Need a license key? Purchase one now.</div>
						<?php } else { ?>
							<div class="update-link"><a href="<?php echo get_bloginfo('url'); ?>/wp-admin/admin.php?page=gabfire_update">Update Now</a></div>
						<?php } ?>
						<div class="theme_changelog">
							<div id="icon-tools" class="icon32"><br /></div>
							<?php $theme_data = get_theme_data(OF_FILEPATH . '/style.css');
							$t_name = $theme_data['Title'];
							$t_name = str_replace("-", " ", $t_name); ?>
							<h2><?php echo ucwords($t_name) . '&nbsp;' . $update['version']; ?></h2>					
							<?php echo $update['changelog'];?>
						</div>
				</div>
			</div>
		</div>
<?php
  
}
  
function gabfire_blog(){
?>
    <div class="wrap">
        <div class="metabox-holder">
             
                <?php gab_adminheader(); ?>
                 
                <div id="optionsframework" class="postbox">
  
                                            <div class="group" id="of-option-gabfire">
                                                    <h3>Stay Updated and Get Social with Gabfire Themes</h3>
                                                    <div class="section section-text" style="margin-bottom:10px">                             
                                                        <div class="gab_subscribe">
                                                            <h4 class="heading">STAY CONNECTED</h4>
                                                            <ul>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/feed/" class="gab_rss">Subscribe to RSS</a></li>
                                                                <li><a target="_blank" href="http://eepurl.com/dknlQ" class="gab_email">Subscribe to our newsletter</a></li>
                                                                <li><a target="_blank" href="http://www.twitter.com/gabfirethemes" class="gab_twit">Follow on Twitter</a></li>
                                                                <li><a target="_blank" href="http://www.facebook.com/pages/Gabfire-Premium-Themes/330773148827" class="gab_fb">Friend Us on Facebook</a></li>
                                                                <li><a target="_blank" href="http://www.linkedin.com/company/gabfire-themes" class="gab_linkedin">Connect on LinkedIn</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="gab_explore">
                                                            <h4 class="heading">EXPLORE GABFIRE THEMES</h4>
                                                            <ul>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/category/themes">See All Themes</a></li>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/services/">Our Services</a></li>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/faq/">Frequently Asked Qeustions</a></li>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/affiliate-program/">Become an Affiliate</a></li>
                                                                <li><a target="_blank" href="http://www.gabfirethemes.com/contact/">Contact</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                             
                                                    <div style="padding:0 15px 0">
                                                        <?php gabfire_dashboard_widget_function(); ?>
                                                    </div>
             
                                                    <div class="clear"></div>
                                            </div>                        
  
                </div>
        </div>
    </div>
<?php
}
function gabfire_new(){ ?>
<div class="wrap">
    <div class="metabox-holder">
        <?php gab_adminheader(); ?>
         
        <div id="optionsframework" class="postbox" style="height:600px;overflow-x:auto;overflow-y:hidden">
            <iframe src="http://www.gabfirethemes.com/gabfire-all-themes.php" frameborder="0" height="100%" width="100%" scrolling="auto"></iframe> 
        </div>
    </div>
</div>
  
<?php }