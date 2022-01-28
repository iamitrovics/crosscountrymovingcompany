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

    <header id="masheader" class="header-home">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob city-image-mob">
                    <?php
                    $imageID = get_field('featured_image_city_single');
                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                </div>
                <!-- /.image-artwork-mob -->
                <?php 
                $values = get_field( 'custom_title_override' );
                if ( $values ) { ?>
                    <h1><?php the_field('custom_title_override'); ?></h1>
                <?php 
                } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>
                <div class="city-hero--text">
                    <?php the_field('hero_text_intro_city'); ?>
                </div>
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
        <div class="image-artwork city-artwork">
            <?php
            $imageID = get_field('featured_image_city_single');
            $image = wp_get_attachment_image_src( $imageID, 'city-image' );
            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
            ?> 

            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
        </div>
        <!-- /.image-artwork -->
        
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->
    <div id="services-page" class="cities-page">

    <?php if( have_rows('content_layout_city_page') ): ?>
        <?php while( have_rows('content_layout_city_page') ): the_row(); ?>
            <?php if( get_row_layout() == 'full_width_content' ): ?>

                <section id="services-detailed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="services-detailed-in">
                                    <h2><?php the_sub_field('section_title_block'); ?></h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>
                                        <!-- /.col-lg-8 -->
                                        <div class="col-lg-4 city-images">
                                            <?php if( have_rows('featured_images') ): ?>
                                                <?php while( have_rows('featured_images') ): the_row(); ?>

                                                    <?php
                                                    $imageID = get_sub_field('image');
                                                    $image = wp_get_attachment_image_src( $imageID, 'cityside-image' );
                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                    ?> 

                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.services-detailed-in -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#services -->

            <?php elseif( get_row_layout() == 'content_on_dark_background' ): ?>

                <div id="bottom-cta">
                    <div class="container">
                        <div class="row">
                            <div class="offset-xl-1 col-xl-10">
                                <div class="bottom-cta-text">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- /.bottom-cta-text -->
                            </div>
                            <!-- /.offset-xl-2 col-xl-10 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#bottom-cta -->

            <?php elseif( get_row_layout() == 'full_width_content_wit' ): ?>

                <section id="services-detailed">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="services-detailed-in city-detailed">
                                    <h2><?php the_sub_field('section_title'); ?></h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <?php the_sub_field('content_blocks'); ?>
                                        </div>
                                        <!-- /.col-lg-8 -->
                                        <div class="col-lg-4 city-images">
                                            <?php if( have_rows('featured_images') ): ?>
                                                <?php while( have_rows('featured_images') ): the_row(); ?>

                                                    <?php
                                                    $imageID = get_sub_field('image');
                                                    $image = wp_get_attachment_image_src( $imageID, 'cityside-image' );
                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                    ?> 

                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.services-detailed-in -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#services -->                

            <?php elseif( get_row_layout() == 'reviews' ): ?>


                <div class="city-reviews">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php the_sub_field('block_title'); ?></h2>
                                <div id="review-list">
                                    <div class="row">

                                    <?php
                                        $post_objects = get_sub_field('list_of_reviews');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>

                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="review-box">
                                                            <div class="review-author">
                                                                <img src="<?php bloginfo('template_directory'); ?>/img/misc/avatar.jpg" alt="">
                                                                <div class="author-info">
                                                                    <div class="star-area">
                                                                        <span class="mr-star-rating"> 
                                                                            <?php if (get_field('score_review') == '5') { ?>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            <?php } elseif (get_field('score_review') == '4') { ?>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            <?php } elseif (get_field('score_review') == '3') { ?>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            <?php } elseif (get_field('score_review') == '2') { ?>
                                                                                <i class="fas fa-star"></i>
                                                                                <i class="fas fa-star"></i>
                                                                            <?php } elseif (get_field('score_review') == '1') { ?>
                                                                                <i class="fas fa-star"></i>
                                                                            <?php } ?>   
                                                                        </span>
                                                                    </div>
                                                                    <span class="author"><?php the_title(); ?></span>
                                                                    <!-- /.author -->
                                                                </div>
                                                                <!-- /.author-info -->
                                                            </div>
                                                            <!-- /.review-author -->  
                                                            <div class="review-text">
                                                                <?php the_field('review_text_review'); ?>
                                                            </div>
                                                            <!-- /.review-text -->
                                                        </div>
                                                        <!-- /.review-box -->
                                                    </div>
                                                    <!-- /.col-lg-4 col-md-6 -->

                                            <?php endforeach; ?>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>


                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /#review-list -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.city-review -->                

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>    

    </div>
    <!-- /#services-page -->  

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
   
<?php
get_footer();
