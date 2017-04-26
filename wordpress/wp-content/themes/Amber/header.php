<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header class="site-header clearfix">
			<div class="utilities clearfix">
				<div class="hd-search">
					<?php get_search_form(); ?>
				</div>
				<div class="site-login">					
					<p><?php wp_login_form('login_form_top'); ?></p>
					<p>Register</p>					
				</div>
			</div>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			
			<nav class="site-nav header-nav">
				<?php 
					$args = array(
						'theme_location' => 'primary'
					);
				?>
				<?php wp_nav_menu( $args ); ?>				
			</nav>
		</header>