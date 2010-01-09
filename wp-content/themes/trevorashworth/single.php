<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div class="post">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<?php previous_post_link('&laquo; %link') ?>
			<?php next_post_link('%link &raquo;') ?>
		</div>

    <h2><?php the_title(); ?></h2>
    <small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>

    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
