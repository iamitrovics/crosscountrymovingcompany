<?php
/**
 * Template Name: Gallery Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="masheader" class="header-home gallery-header">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php the_field('gallery_artwork_header'); ?>" alt="">
                </div>
                <!-- /.image-artwork-mob -->
                <h1><?php the_field('main_title_header_gal'); ?></h1>
                <div class="header-text">
                    <p><?php the_field('main_subtitle_photo_header'); ?></p>
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
            <img src="<?php the_field('gallery_artwork_header'); ?>" alt="">
        </div>
        <!-- /.image-artwork -->

        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->
    <div id="galery-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-page-intro">
                        <h2><?php the_field('main_title_photo_gal'); ?></h2>
                        <?php the_field('intro_content_photo_gal'); ?>
                    </div>
                    <!-- /.gallery-page-intro -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <div class="photo-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('main_title_photo_galer'); ?></h2>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="gal-photos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <div class="gal-wrap">

                                <?php 
                                $images = get_field('photo_gallery_main_gal');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <div class="gal-box">
                                            <a href="<?php echo $image['url']; ?>" data-fancybox="gall">
                                                <span><i class="fal fa-search-plus"></i></span>
                                                <img src="<?php echo $image['sizes']['why-image']; ?>" alt="">
                                            </a>
                                        </div>
                                        <!-- /.gal-box -->
                                    <?php endforeach; ?>
                                <?php endif; ?>                

                            </div>
                            <!-- /.gal-wrap -->

                            <!-- <button class="galery-more">See more </button> -->
                            <!-- /.galery-more -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container --> 
            </div>
            <!-- /.gal-photos -->
        </div>
        <!-- /.photo-gallery -->
    </div>
    <!-- /#gallery-page -->

	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

