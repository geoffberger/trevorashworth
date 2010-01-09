<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

  <ol class="hatom">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<li>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>

        <?php the_content('Read the rest of this entry &raquo;'); ?>

        <div class="postmetadata">
          <ul>
            <li><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></li>
            <li class="last"><a title="Post a Comment for <?php the_title(); ?>" href="<?php the_permalink() ?>#respond">Post a Comment</a></li>
            <?php edit_post_link('Edit', '', '', '<li>'); ?>
          </ul>
          <?php the_tags('Tags: ', ', ', ''); ?> 
        </div>
			</li>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</ol>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
