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

    <div id="blog-detailed">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <div class="blog-detailed--intro">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="blog-info">
                                    <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                    <span class="author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
                                </div>
                                <!-- /.blog-info -->
                                <h1><?php the_title(); ?></h1>
                                <?php the_sub_field('intro_content'); ?>
                            </div>
                            <!-- /.col-md-8 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.blog-detailed--intro -->
                                

                    <div class="blog-detailed--body">    

                        <?php if( have_rows('content_layout_blog') ): ?>
                            <?php while( have_rows('content_layout_blog') ): the_row(); ?>

                                <?php if( get_row_layout() == 'intro_text' ): ?>

                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="intro">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>
                                        <!-- /.intro -->
                                    </div>
                                    <!-- /.col-lg-7 -->
                                    <div class="col-lg-5">
                                        <div class="blog-intro-circle"></div>
                                        <!-- /.blog-intro-circle -->
                                    </div>
                                    <!-- /.col-lg-5 -->
                                </div>
                                <!-- /.row-->                            

                                <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                    <div class="blog-content">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- // content  -->
                                    
                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>
                                    
                                        <div class="blog-photo">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <span class="blog-photo--description"><?php the_sub_field('caption'); ?></span>
                                        </div>
                                        <!-- /.blog-photo -->  

                                    <?php elseif( get_row_layout() == 'video' ): ?>                              
                    
                                        <div class="blog-video">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>
                                        <!-- // video  -->

                                    <?php elseif( get_row_layout() == 'accordion' ): ?> 

                                        <div class="row blog-detailed--accordion-wrap">
                                            <div class="col-xl-12">
                                                <h3><?php the_sub_field('accordion_title'); ?></h3>
                                                <div class="blog-detailed--accordion">

                                                    <?php if( have_rows('accordion_list') ): ?>
                                                        <?php while( have_rows('accordion_list') ): the_row(); ?>

                                                            <div class="wrap">
                                                                <h4><?php the_sub_field('heading'); ?></h4>
                                                                <div>
                                                                    <?php the_sub_field('content'); ?>
                                                                </div>
                                                            </div>
                                                            <!-- /.wrap -->

                                                        <?php endwhile; ?>
                                                    <?php endif; ?>

                                                </div>
                                                <!-- /.blog-detailed--accordion -->
                                            </div>
                                            <!-- /.col-xl-8 -->
                                        </div>
                                        <!-- /.row -->                                    

                                <?php endif; ?>
                                
                            <?php endwhile; ?>

                        <?php endif; ?>    


                    </div>
                    <!-- /.blog-detailed--body -->

                </div>
            </div>
        
        </div>
        <!-- // container  -->

    </div>
    <!-- /.blog-detailed -->   

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
   
<?php
get_footer();
