<?php
/**
 * Template Name: Add Review Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="masheader" class="header-home full-width header-reviews">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php the_field('add_review_artwork_page'); ?>" alt="">
                </div>
                <!-- /.image-artwork-mob -->
                <h1><?php the_field('main_title_add_review_page'); ?></h1>
                <div class="row">
                    <div class="col-xl-11 offset-xl-1">
                        <div class="add-review-btn">
                            <a href="<?php the_field('button_link_add_review_page'); ?>"><?php the_field('button_label_add_review_page'); ?></a>
                        </div>
                        <!-- /.add-review-btn -->
                    </div>
                    <!-- /.col-xl-11 offset-xl-1 -->
                </div>
                <!-- /.row -->
                <div class="header-text">
                    <div class="orange-circle-sm">
                        <div class="black-circle"></div>
                        <!-- /.black-circle -->
                    </div>
                    <!-- /.orange-circle-sm -->   
                </div>
                <!-- /.header-text -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.caption -->
        <div class="image-artwork">
            <img src="<?php the_field('add_review_artwork_page'); ?>" alt="">
        </div>
        <!-- /.image-artwork -->
        
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->
    <div id="reviews-page" class="add-review">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="review-title">
                        <h2><?php the_field('main_title_form_add_page'); ?></h2>
                    </div>
                    <!-- /.review-title -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->    
        <div id="bottom-cta">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-10">
                        <h2><?php the_field('main_subtitle_add_revie_page'); ?></h2>
                    </div>
                    <!-- /.offset-lg-2 col-xl-10 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="offset-xl-1 col-xl-11">
                        <div class="bottom-cta-text">
                            <?php the_field('form_code_add_rev_page'); ?>
                        </div>
                        <!-- /.bottom-cta-text -->
                    </div>
                    <!-- /.offset-xl-1 col-xl-11 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="review-circles">
                            <img src="<?php bloginfo('template_directory'); ?>/img/bg/review-circles.svg" alt="">
                        </div>
                        <!-- /.review-circles -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="half-circle"></div>
            <!-- /.half-circle -->
        </div>
        <!-- /#bottom-cta -->
    </div>
    <!-- /#services-page -->

	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

