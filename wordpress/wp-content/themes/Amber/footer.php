<nav class="site-nav">
	<?php 
		$args = array(
			'theme_location' => 'footer'
		);
	?>
	<?php wp_nav_menu( $args ); ?>				
</nav>
<?php wp_footer(); ?>
</body>
</html>