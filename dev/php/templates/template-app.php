<?php
/*
Template Name: App page
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
				<div class="Content-entry leftsidebar u-gridRow">
					<div class="u-gridCol4 coll-4">
						<p>.</p>
					</div>
					<div class="u-gridCol8 coll-8">
						<?php the_content(); ?>
						<p>Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.</p>
						<p>Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website.</p>

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone5.png" class="App-iphone" />

						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" class="App-google" />

						<a href="#">Download de app hier</a>
	
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
