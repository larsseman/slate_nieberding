<?php
/*
Template Name: Page w/ sidebar on left
*/
?>

<?php get_header(); ?>
	<div class="page-title">
		<h2><?php the_title(); ?></h2>

		<div class="u-gridContainer">
			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	<div class="u-gridContainer">
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
				<div class="Content-entry u-gridRow">
					<div class="u-gridCol4">
						<p>.</p>
					</div>
					<div class="u-gridCol8">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
