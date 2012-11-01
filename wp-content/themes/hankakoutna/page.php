<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package WordPress
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

	<?php if (!(is_home() || is_front_page())) { ?>
		<?php get_template_part( 'main', 'page' ); ?>
	<?php } else { ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php } ?>	

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>