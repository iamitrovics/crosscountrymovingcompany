<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="masheader" class="header-about">
		<div class="caption">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-4">
						<div class="image-artwork-mob">
							<img src="<?php the_field('header_artwork_about'); ?>" alt="">
						</div>
						<!-- /.image-artwork-mob -->
						<h1><?php the_field('main_title_header_about'); ?></h1>
						<div class="header-text">
							<div class="orange-circle-sm">
								<div class="black-circle"></div>
								<!-- /.black-circle -->
							</div>
							<!-- /.orange-circle-sm --> 
							<h2><?php the_field('subtitle_header_about'); ?></h2>
							<?php the_field('header_text_header_about'); ?>
							<div class="abh-circles">
								<div class="orange-circle"></div>
								<!-- /.orange-circe -->
								<div class="white-circle"></div>
								<!-- /.white-circle -->     
							</div>
							<!-- /.abh-circles -->
						</div>
						<!-- /.header-text -->
					</div>
					<!-- /.col-xl-4 -->
					<div class="col-md-6 col-xl-8">
						<div class="image-artwork">
							<img src="<?php the_field('header_artwork_about'); ?>" alt="">
						</div>
						<!-- /.image-artwork -->
					</div>
					<!-- /.col-xl-8 -->     

					<?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.caption -->
		<div class="orange-circle-big"></div>
		<!-- /.orange-circle-big -->
	</header>
	<!-- /#masheader -->
	<div id="top-cta" class="about-top-cta">
		<div class="container">
			<div class="row">
				<div class="col-xl-2">
					<!-- /.feature-title -->
					<a href="#about-more" class="go-down show-desk"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
				</div>
				<!-- /.col-xl-2 -->
				<div class="col-xl-10">
					<div class="intro">
						<h2><?php the_field('main_title_intro_about'); ?></h2>
						<div class="intro-text">
							<?php the_field('content_block_intro_about'); ?>
						</div>
						<!-- /.intro-text -->
					</div>
					<!-- /.intro -->
				</div>
				<!-- /.col-xl-10 -->
			</div>
			<!-- /.row -->
			<div class="row show-mob">
				<div class="col-md-12">
					<a href="#about-more" class="go-down"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /#top-cta -->
	<section id="about-more">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xl-7">
					<h2><?php the_field('main_title_about_page'); ?></h2>
					<?php the_field('content_block_about_page'); ?>
				</div>
				<!-- /.col-lg-8 col-xl-7 -->
				<div class="col-lg-4 offset-xl-2 col-xl-3">

					<!-- /.circles -->
					<div class="quote-photo">
						<?php
						$imageID = get_field('featured_image_about_page');
						$image = wp_get_attachment_image_src( $imageID, 'portfoliothumb-image' );
						$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
						?> 

						<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
					</div>
					<!-- /.quote-info-photo -->
				</div>
				<!-- /.col-lg-4 col-xl-3 -->
			</div>
			<!-- /.row -->
			<div class="circles"><img src="<?php bloginfo('template_directory'); ?>/img/misc/about-more-circles.svg" alt=""></div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /#about-more -->

	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

