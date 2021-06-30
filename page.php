<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

    <header id="masheader" class="header-home header-regular">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php the_field('regular_artowrk_reg'); ?>" alt="">
                </div>
                <!-- /.image-artwork-mob -->

                <?php 
                $values = get_field('main_title_regular_header' );
                if ( $values ) { ?>
                    <h1><?php the_field('main_title_regular_header'); ?></h1>
                <?php 
                } else { ?> 
                    <h1><?php the_title(); ?></h1>
                <?php } ?>

                
                <div class="header-text">
                    <div class="orange-circle-sm">
                        <div class="black-circle"></div>
                    </div>
                    <!-- /.orange-circle-sm -->   
                </div>
                <!-- /.header-text -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.caption -->
        <div class="image-artwork">
            <img src="<?php the_field('regular_artowrk_reg'); ?>" alt="">
        </div>
        <!-- /.image-artwork -->
        
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->

    <div id="regular-page">

        <div class="container">

            <?php if( have_rows('content_sections_regular') ): ?>
                <?php while( have_rows('content_sections_regular') ): the_row(); ?>
                    <?php if( get_row_layout() == 'intro' ): ?>

                        <div class="row">
                            <div class="col-xl-11 offset-xl-1">
                                <div class="regular-page-intro">
                                    <?php the_sub_field('intro_content'); ?>
                                    <div class="regular-page-intro--circles">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/misc/regular-page-circles.svg" alt="">
                                    </div>
                                    <!-- /.regular-page-intro--circles -->
                                </div>
                                <!-- /.regular-page-intro -->
                            </div>
                            <!-- /.col-xl-11 offset-xl-1 -->
                        </div>
                        <!-- /.row -->                        

                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                        <div class="image-holder">
                            <?php
                            $imageID = get_sub_field('featured_image');
                            $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                            ?> 

                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                        </div>
                        <!-- // image  -->

                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                        <div class="row">
                            <div class="col-xl-11 offset-xl-1">
                                <div class="regular-page-body">
                                 
                                    <?php the_sub_field('content_block'); ?>

                                </div>
                                <!-- /.regular-page-body -->

                            </div>
                            <!-- /.col-xl-11 offset-xl-1 -->

                        </div>
                        <!-- /.row -->                        

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>        

        </div>
        <!-- /.container -->
    </div>
    <!-- /#regular-page -->

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>

<?php
get_footer();
