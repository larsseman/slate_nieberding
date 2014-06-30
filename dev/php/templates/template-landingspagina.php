<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			
			<div class="Content-entry leftsidebar u-gridRow">
				<div class="u-gridCol4 coll-4">
					<p>.</p>
				</div>
				<div class="u-gridCol8 coll-8">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
