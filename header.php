<!DOCTYPE HTML>
<html>
	<head>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php echo wp_site_icon(); ?>
		<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/font-awesome.css">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	</head>
	<body>
		<div class="header">
			<?php			
			wp_nav_menu(array(
				'theme_location' => 'my-header-menu',
				'container_class' => 'header-menu'
			));
			?>
			<h1><a href="<?php echo bloginfo('siteurl'); ?>"><?php echo bloginfo('name'); ?></a></h1>
			<h2><?php echo bloginfo('description') ?></h2>
			<div>
			<!--<?php get_search_form(); ?>-->
			</div>
		</div>