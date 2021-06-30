<?php
/**
 * Template Name: Shipment Tracking Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
   
	<header id="quote-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="quote-intro-in">
						<h1><?php the_field('main_title_track'); ?></h1>
                        <h2><?php the_field('main_subtitle_hero_track'); ?></h2>

                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <?php the_field('form_code_tracker'); ?>
                            </div>
                        </div>

					</div>
					<!-- /.quote-intro-in -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
		<div class="orange-circle-big"></div>
		<!-- /.orange-circle-big -->
	</header>
	<!-- /#quote-intro -->
	<div id="top-cta" class="features">
		<div class="container">
			<div class="row">
				<div class="col-xl-2">
					<a href="#quote-info" class="go-down show-desk"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
				</div>
				<!-- /.col-xl-2 -->
				<div class="col-xl-10">
					<div class="intro">

                        <div class="intro-text">
                        <?php the_field('content_block_main_tracker'); ?>
                        </div>

					</div>
					<!-- /.intro -->
				</div>
				<!-- /.col-xl-10 -->
			</div>
			<!-- /.row -->
			<div class="row show-mob">
				<div class="col-md-12">
					<a href="#quote-info" class="go-down"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /#top-cta -->

	

<?php get_footer(); ?>

