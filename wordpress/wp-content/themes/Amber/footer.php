	<nav class="site-nav footer-nav">
		<?php 
			$args = array(
				'theme_location' => 'footer'
			);
		?>
		<?php wp_nav_menu( $args ); ?>				
	</nav>
</div>
<?php wp_footer(); ?>
</body>
</html>