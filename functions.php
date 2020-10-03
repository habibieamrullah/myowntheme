<?php

function mywp_theme_settings_page(){
	?>
	<h1>Theme Settings Page</h1>
	<form method="post" action="options.php">
		<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
		?>
	</form>
	
	<p>Current saved data: <?php echo get_option('facebook_url'); ?></p>
	
	<?php
}

function display_theme_pannel_fields(){
	add_settings_section('section', 'All Settings', null, 'theme-options');
	add_settings_field('facebook_url', 'Facebook Profile Url', 'display_facebook_element', 'theme-options', 'section');
	register_setting('section', 'facebook_url');
}

add_action('admin_init', 'display_theme_pannel_fields');

function display_facebook_element(){
	?>
	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/>
	<?php
}

function mywp_theme_settings(){
	add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'mywp_theme_settings_page', null, 99);
}

add_action('admin_menu', 'mywp_theme_settings');

function mywp_custom_new_menu(){
	register_nav_menu('my-header-menu',__('My Header Menu'));
}

add_action('init', 'mywp_custom_new_menu');

function mywp_custom_widgetarea(){
	register_sidebar(array(
		'name' 			=> 'Home right sidebar',
		'id'			=> 'home_right_sidebar',
		'before_widget'	=> '<div class="widget-right-sidebar">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'mywp_custom_widgetarea');

function mywp_custom_footerwidgetarea(){
	register_sidebar(array(
		'name' 			=> 'Home footer widget',
		'id'			=> 'home_footer_widget',
		'before_widget'	=> '<div class="widget-footer">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	));
}

add_action('widgets_init', 'mywp_custom_footerwidgetarea');