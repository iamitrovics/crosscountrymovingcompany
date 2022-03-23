<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="masheader" class="header-home moving-header">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php bloginfo('template_directory'); ?>/img/headers/moving-artwork.jpg" alt="">
                </div>
                <!-- /.image-artwork-mob -->
                <h1><?php the_field('main_title_service_single_header'); ?></h1>
                <div class="header-text">
                    <?php the_field('hero_text_services_single'); ?>
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
            <?php
            $imageID = get_field('featured_image_hero_service');
            $image = wp_get_attachment_image_src( $imageID, 'city-image' );
            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
            ?> 

            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
        </div>
        <!-- /.image-artwork -->
        
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->

    <div id="services-page">
        <section id="services-detailed" class="packing-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-detailed-in">

                        <?php if( have_rows('content_layout_service_single') ): ?>
                            <?php while( have_rows('content_layout_service_single') ): the_row(); ?>
                                <?php if( get_row_layout() == 'intro' ): ?>

                                    <h2><?php the_sub_field('main_title'); ?></h2>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="services-intro">
                                                <?php the_sub_field('intro_text_ws'); ?>
                                            </div>
                                            <!-- /.services-intro -->
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                <?php elseif( get_row_layout() == 'why_choose_us' ): ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="service-bottom-area-dc">
                                                <h2><?php the_sub_field('section_title'); ?></h2>
                                                <div class="row">

                                                    <?php if( have_rows('why_us') ): ?>
                                                        <?php while( have_rows('why_us') ): the_row(); ?>

                                                            <div class="col-lg-6">
                                                                <div class="sbac-box">
                                                                    <h3><?php the_sub_field('title'); ?></h3>
                                                                    <?php the_sub_field('content_block'); ?>
                                                                </div>
                                                                <!-- /.sbac-box -->
                                                            </div>
                                                            <!-- /.col-lg-6 -->

                                                        <?php endwhile; ?>
                                                    <?php endif; ?>

                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.service-bottom-area-dc -->
                                        </div>
                                        <!-- /.col-md-12 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.services-detailed-in -->       

                             <?php elseif( get_row_layout() == 'content_left_images_right' ): ?>          
                             
                                <div class="row">
                                    <div class="col-lg-7 col-xl-8">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- /.col-lg-7 col-xl-8 -->
                                    <div class="col-lg-5 col-xl-4">
                                        <div class="shipping-photos">
                                            <?php if( have_rows('images_list') ): ?>
                                                <?php while( have_rows('images_list') ): the_row(); ?>

                                                    <?php
                                                    $imageID = get_sub_field('featured_image');
                                                    $image = wp_get_attachment_image_src( $imageID, 'cityside-image' );
                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                    ?> 

                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-5 col-xl-4 -->
                                </div>
                                <!-- /.row -->              

                            <?php elseif( get_row_layout() == 'middle_content' ): ?>     
                            
                                <div class="row">
                                    <div class="col-xl-11 offset-xl-1">
                                        <div class="service-bottom-area-sc">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>
                                        <!-- /.service-bottom-area-sc -->
                                    </div>
                                    <!-- /.col-xl-9 offset-xl-3 -->
                                </div>
                                <!-- /.row -->                                                       

                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>          
                        
                                      

                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /#services -->
    </div>
    <!-- /#services-page -->    

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>

<?php
get_footer();
