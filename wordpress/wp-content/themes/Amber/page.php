<?php
get_header();
?>

<?php if(have_posts()) :
				while(have_posts()) : the_post(); ?>
				
				<article class="page">
					<section class="page-title-area clearfix">
						<h2><?php the_title() ?></h2>
						<ul>
							<li><span class="dashicons dashicons-admin-users"></span> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('nickname'); ?></a></li>
							<li><span class="dashicons dashicons-clock"></span> <?php the_time('F j'); ?></li>
							<li><span class="dashicons dashicons-editor-quote"></span> <?php echo get_comments_number('ID'); ?> comments</li>
						</ul>
						<p><?php get_breadcrumb(); ?></p>
					</section>
					<section class="page-content">
								<?php the_content() ?>
					</section>
				
				</article>


<?php		endwhile;

			else:
				echo '<p>No content found</p>';

endif;

get_footer();

?>