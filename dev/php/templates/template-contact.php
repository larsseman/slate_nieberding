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
							<div class="adress-map u-gridCol12 ">
								<div id="map_canvas"></div>
							</div>

							<div class="adress">
								<div class="u-gridCol6 coll-9">
									<div class="adress-info">
										<p>Gebr. Nieberding Installatietechniek</p>
										<p>Haverstraat 91</p>
										<p>2153 GD Nieuw Vennep</p>
									</div>
								</div>
								<div class="u-gridCol6 coll-9">
									<div class="adress-info">
										<p>Tel. M. Nieberding : 06 - 391 14 001</p>
										<p>Tel. S. Nieberding : 06 - 487 77 749</p>
										<p>Fax.nr. 0252 - 348 867</p>
										<p>E-mail: info@gebrnieberding.nl</p>
									</div>
								</div>
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

