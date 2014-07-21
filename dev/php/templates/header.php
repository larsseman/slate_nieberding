<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

<!-- Main navigation -->
	<div class="Nav-wrap">	
		<div class="Nav-top">
			<div class="u-gridContainer">
				<div class="logo-top">
					<a href="/home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-top.jpg"></home>
				</div>
				
				<div class="Nav-tel">
					<a href="tel:0639114001"><p>06 - 391 14 001</p></a>
					<a href="tel:0252348867"><p>0252 - 34 88 67</p></a>
				</div>
				
				<div class="Nav-tel-ico">
					<a href="tel:0639114001">
						<img class="ico-mob" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobiel.png">
					</a>
					<a href="tel:0252348867">
						<img class="ico-fax" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tel+fax.png">
					</a>
				</div>
			</div>
		</div>

		<div class="Nav-bot">
			<div class="u-gridContainer">
				<div class="logo-bot">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-bot.jpg">
				</div>
				
				<div class="Nav-toggle">
					<a class="Navigation-menuToggle" id="js-navCollapse">
						<svg class="Icon Icon--inline" viewBox="0 0 128 128">
							<use xlink:href="#icon-menu2"></use>
						</svg>
					</a>
				</div>

				<?php include 'includes/navigation.php'; ?>
			</div>
		</div>
	</div>
	
	
<!-- Main header -->
	<div class="Header">
		<div class="Slider">
			<ul class="Slider-slider bxslider">

                <li class="Slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-1.jpg" /></li>

                <li class="Slider-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-2.jpg" /></li>

                <li class="Slider-img three"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide-3.jpg" /></li>
			</ul>
		</div>
	</div>


<?php if(is_front_page() || is_page_template('template-landingspagina.php')) { ?>

	<div class="page-title">
		<h2>Welkom bij installatie- en loodgietersbedrijf Gebr. Nieberding</h2>
	
		<div class="u-gridContainer">
			<div class="Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- pagetitle -->
	
	
	<div class="good-points-wrap">
		<div class="u-gridContainer">
			<div class="good-points">
				<h3>Gebr. Nieberding is gespecialiseerd in</h3>
				<div class="points-box">
					<ul class="Usp-list">
						<li class="icon check">Centrale verwarming</li>
						<li class="icon check">Loodgieterswerk</li>
						<li class="icon check">Lood- en zinkwerk</li>
					</ul>
				</div>

				<div class="points-box">
					<ul class="Usp-list">
						<li class="icon check">24uurs service & onderhoud</li>
						<li class="icon check">Dakbedekking</li>
						<li class="icon check">Mechanische ventilatie</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>

<?php } ?>
