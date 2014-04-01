<form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<fieldset>
		<input type="text" id="s" name="s" value="<?php _e('Search in site...','transcript'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
		<input type="image" id="searchsubmit" src="<?php bloginfo('template_url'); ?>/images/button_go.gif" alt="<?php _e('Search in site...','transcript'); ?>" /> 
	</fieldset>
</form>