<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */
  
 get_header();  ?>

     <header id="masheader" class="header-home">
        <div class="caption">
            <div class="container container-new">

                <div class="image-artwork-mob city-image-mob">
                    <?php
                    $imageID = get_field('header_image_feat_article');
                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                </div>
                <!-- /.image-artwork-mob -->
         
                <?php 
                $values = get_field( 'custom_title_feat_article' );
                if ( $values ) { ?>
                    <h1><?php the_field('custom_title_feat_article'); ?></h1>
                <?php 
                } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>

                <div class="blog-info blog-metas">
                    <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                    <span class="cat-link">
                        Posted in
            
                        <?php
                        global $post;
                        $categories = get_the_category($post->ID);
                        $cat_link = get_category_link($categories[0]->cat_ID);
                        echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                        ?> 
                    </span>
                    <span class="author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
                </div>
                <!-- /.blog-info -->                       


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
            $imageID = get_field('header_image_feat_article');
            $image = wp_get_attachment_image_src( $imageID, 'city-image' );
            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
            ?> 

            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
        </div>
        <!-- /.image-artwork -->
        
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->

    <div id="featured-main">

       <div class="nav-holder">
            <div id="side-nav">
            <h4><?php the_field('sidebar_title_toc'); ?></h4>
            <ul>
                <?php if( have_rows('toc_elements') ): ?>
                    <?php while( have_rows('toc_elements') ): the_row(); ?>

                        <li><a href="#<?php the_sub_field('anchor'); ?>"><?php the_sub_field('label'); ?></a></li>

                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>    
       </div>

        <?php if( have_rows('content_layout_featured') ): ?>
            <?php while( have_rows('content_layout_featured') ): the_row(); ?>
                <?php if( get_row_layout() == 'intro_content' ): ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="intro-content">
                                    <div class="blog-intro-circle"></div>
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- // intro content  -->
                            </div>
                            <!-- // col  -->
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // container  -->

                <?php elseif( get_row_layout() == 'content_dark_background' ): ?>

                <div  class="content-dark" id="<?php the_sub_field('section_id'); ?>">
                    <div class="container">

                        <div class="orange-circle-big"></div>

                        <div class="row">


                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="intro">
                                    <div class="content-text">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- /.intro-text -->
                                </div>
                                <!-- /.intro -->
                            </div>
                            <!-- /.col-xl-10 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#top-cta -->        
                
                <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="image-holder">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php the_sub_field('alt_text'); ?>" src="<?php echo $image[0]; ?>" /> 
                                    <small class="caption"><?php the_sub_field('caption'); ?></small>
                                </div>
                            </div>
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // image holder  -->

                 <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                    <div class="container" id="<?php the_sub_field('section_id_full'); ?>">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="text-holder">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // image holder  -->       
                    
                <?php elseif( get_row_layout() == 'video' ): ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="video-holder">
                                    <?php the_sub_field('video_code'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- // row  -->
                    </div>
                    <!-- // image holder  -->        
                    
                 <?php elseif( get_row_layout() == 'content_light_background' ): ?>
                    
                    <div class="text-light" id="<?php the_sub_field('section_id_light'); ?>">
                        <div class="container">
                            <div class="circles">
                            <img src="<?php bloginfo('template_directory'); ?>/img/misc/about-more-circles.svg" alt="">
                            </div>
                            <!-- // circles  -->
                            <div class="row">

                                <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                    <div class="text-holder--light">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- // col  -->
                                </div>
                                <!-- // cok  -->                           

                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // video light  -->

                <?php elseif( get_row_layout() == 'pros_and_cons' ): ?>

                    <div class="pros-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pros-card">
                                                <?php the_sub_field('left_column_content'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pros-card">
                                                <?php the_sub_field('right_column_content'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // row  -->

                                </div>
                                <!-- // col wrapper  -->
                            </div>
                            <!-- // row wrapper  -->

                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // pros wrapper  -->

                <?php elseif( get_row_layout() == 'content_with_side_images' ): ?>

                    <div class="side-wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">


                                        <div class="row">

                                            <div class="col-lg-8">
                                                <div class="content-block">
                                                    <?php the_sub_field('content_block'); ?>
                                                </div>
                                            </div>
                                            <!-- // content  -->

                                            <div class="col-lg-4">
                                                <div class="side-images">
                                                    <?php if( have_rows('side_images_content') ): ?>
                                                        <?php while( have_rows('side_images_content') ): the_row(); ?>

                                                            <div class="image">
                                                                <?php
                                                                $imageID = get_sub_field('featured_image');
                                                                $image = wp_get_attachment_image_src( $imageID, 'cityside-image' );
                                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                ?> 

                                                                <img class="img-responsive" alt="<?php the_sub_field('alt_text'); ?>" src="<?php echo $image[0]; ?>" /> 
                                                                <small class="caption">
                                                                    <?php the_sub_field('caption'); ?>
                                                                </small>                                                                
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <!-- // images  -->

                                        </div>
                                        <!-- // row  -->

                                </div>
                                <!-- // col wrapper  -->
                            </div>
                            <!-- // row wrapper  -->                                

                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // side wrapper  -->

                <?php elseif( get_row_layout() == 'content_blocks' ): ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">

                                <?php if( have_rows('blocks') ): ?>
                                    <?php while( have_rows('blocks') ): the_row(); ?>

                                        <div class="content-wrapper">
                                            <div class="content-left">
                                                <?php the_sub_field('left_content'); ?>
                                            </div>
                                            <div class="content-right">
                                                <?php the_sub_field('right_content'); ?>
                                            </div>
                                        </div>
                                        <!-- // wrapper  -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <!-- // container  -->

                <?php elseif( get_row_layout() == 'accordion' ): ?>

                    <div class="container">

                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <h3><?php the_sub_field('main_heading'); ?></h3>
                                <div class="blog-detailed--accordion">

                                    <?php if( have_rows('accordion_list') ): ?>
                                        <?php while( have_rows('accordion_list') ): the_row(); ?>

                                            <div class="wrap">
                                                <h4><?php the_sub_field('question'); ?></h4>
                                                <div>
                                                    <?php the_sub_field('answer'); ?>
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

                    </div>
                    <!-- // container  -->


                <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                                <div class="quote-cta--single">
                                    <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                    <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                </div>
                                <!-- // single  -->                                    
                            </div>
                        </div> 
                    </div>                   

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- // featured main  -->

    <div id="bottom-form">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-3 col-lg-9 offset-lg-3">
                    
                    <div id="quote-intro">
                        <div class="quote-intro-in">
                            <h2>QUICK MOVING ESTIMATE</h2>
                            <?php echo do_shortcode('[contact-form-7 id="62855" title="Quick Quote"]'); ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // bottom form  -->    

<?php
get_footer();
    