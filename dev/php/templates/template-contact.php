<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div class="page-title">
		<h2><?php the_title(); ?></h2>
	</div>
	
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">

			<div class="contactTop-bg">
				<div class="Content-entry u-gridContainer">
					<div class="Content-text">
	
						<div class="u-gridRow">					
							<div class="adress u-gridCol4">
								<div class="adress-info">
									<p>nieberding</p>
									<p>Haverstraat 91</p>
									<p>2153 GD Nieuw Vennep</p>
									<p>Email: info@gebrnieberding.nl</p>
									<p>Tel: 06-39114001</p>
								</div>
							</div>	
											
							<div class="adress-map u-gridCol8">
								<div id="map_canvas"></div>
							</div>
						</div> <!-- /gridRow -->

					</div>
				</div>					
			</div><!--  ContactTop-bg  -->
					
			<div class="Content-entry u-gridContainer">
				<div class="Content-text">

					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

