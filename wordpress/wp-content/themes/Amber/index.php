<?php
get_header();
?>

<?php if(have_posts()) :
				while(have_posts()) : the_post(); ?>
				
				Hello


<?php		endwhile;

			else:
				echo '<p>No content found</p>';

endif;

get_footer();

?>