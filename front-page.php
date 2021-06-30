<?php 
/**
 * Homepage / Front Page
**/
get_header(); ?>

    <header id="masheader" class="header-home">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php the_field('hero_artwork'); ?>" alt="">
                </div>
                <!-- /.image-artwork-mob -->
                <h1><?php the_field('main_title_hero_home'); ?></h1>
                <div class="header-text">
                    <?php the_field('hero_text_home'); ?>
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
            <img src="<?php the_field('hero_artwork'); ?>" alt="">
        </div>
        <!-- /.image-artwork -->

        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

        <div class="orange-circle-big"></div>
        <!-- /.orange-circle-big -->
    </header>
    <!-- /#masheader -->
    <div id="top-cta" class="features">
        <div class="container">
            <div class="row">
                <div class="col-xl-2">
                    <span class="feature-title"><?php the_field('side_title_features_home'); ?></span>
                    <!-- /.feature-title -->
                    <a href="#services" class="go-down show-desk"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
                </div>
                <!-- /.col-xl-2 -->
                <div class="col-xl-10">
                    <div class="intro">
                        <h2><?php the_field('main_title_features_home'); ?></h2>
                        <div class="intro-text">
                            <?php the_field('intro_text_features_home'); ?>
                        </div>
                        <!-- /.intro-text -->
                    </div>
                    <!-- /.intro -->
                    <div class="features-list">
                        <div class="row">

                            <?php if( have_rows('features_list_home') ): ?>
                                <?php while( have_rows('features_list_home') ): the_row(); ?>

                                    <div class="col-md-4">
                                        <div class="feature-box">
                                            <img src="<?php the_sub_field('icon'); ?>" alt="">
                                            <h3><a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('block_title') ;?></a></h3>
                                            <p><?php the_sub_field('short_description'); ?></p>
                                            <a href="<?php the_sub_field('button_link'); ?>" class="find-more"><?php the_sub_field('button_label') ;?></a>
                                            <!-- /.find-more -->
                                        </div>
                                        <!-- /.feature-box -->
                                    </div>
                                    <!-- /.col-md-4 -->

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.features-list -->
                </div>
                <!-- /.col-xl-10 -->
            </div>
            <!-- /.row -->
            <div class="row show-mob">
                <div class="col-md-12">
                    <a href="#services" class="go-down"><img src="<?php bloginfo('template_directory'); ?>/img/ico/mouse-down.png" alt=""></a>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-cta -->
    <section id="services">
        <div class="silver-circle-sm"></div>
        <!-- /.silver-circle-sm -->
        <div class="black-circle-big"></div>
        <!-- /.black-circle-big -->
        <div class="container container-new">
            <div class="row">
                <div class="col-md-12">
                    <span class="title"><?php the_field('small_title_services_home'); ?></span>
                    <!-- /.title -->
                    <h2><?php the_field('main_title_services_home'); ?></h2>
                    <div class="services-list">

                        <?php if( have_rows('services_list_home') ): ?>
                            <?php while( have_rows('services_list_home') ): the_row(); ?>

                                <div class="service-box">
                                    <div class="service-box-in">
                                        <div class="service-ico">
                                            <img src="<?php the_sub_field('icon'); ?>" alt="">
                                        </div>
                                        <!-- /.service-ico -->
                                        <div class="service-text">
                                            <h3><a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('block_title'); ?></a></h3>
                                            <p><?php the_sub_field('short_description'); ?></p>
                                            <a href="<?php the_sub_field('button_link'); ?>" class="learn-more"><?php the_sub_field('button_label'); ?></a>
                                            <!-- /.learn-more -->
                                        </div>
                                        <!-- /.service-text -->
                                    </div>
                                    <!-- /.service-box-in -->
                                </div>
                                <!-- /.service-box -->

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- /.services-list -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container container-new -->
    </section>
    <!-- /#services -->
    <section id="whyus">
        <div id="relocation-box">
            <div id="relocation-box-in">
                <span class="relocation-box-title"><?php the_field('cta_title_home_middle'); ?></span>
                <!-- /.relocation-box-title -->
                <a href="<?php the_field('button_link_midddle_cta'); ?>" class="contact"><?php the_field('button_label_middle_cta'); ?></a>
                <!-- /.contact -->
            </div>
            <!-- /#relocation-box-in -->
        </div>
        <!-- /#relocation-box -->
        <div class="whyus-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="why-in">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="why-text">
                                        <h2><?php the_field('main_title_why_home'); ?></h2>
                                        <?php if( have_rows('why_list_home') ): ?>
                                            <?php while( have_rows('why_list_home') ): the_row(); ?>

                                                <div class="why-box">
                                                    <div class="why-ico">
                                                        <?php the_sub_field('icon_code'); ?>
                                                    </div>
                                                    <!-- /.why-ico -->
                                                    <span><?php the_sub_field('label'); ?></span>
                                                </div>
                                                <!-- /.why-box -->

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                    <!-- /.why-text -->
                                </div>
                                <!-- /.col-lg-7 -->
                                <div class="col-lg-5">
                                    <div class="why-photo">
                                        <?php
                                        $imageID = get_field('why_image_home');
                                        $image = wp_get_attachment_image_src( $imageID, 'why-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                    <!-- /.why-photo -->
                                </div>
                                <!-- /.col-lg-5 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.why-in -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.whyus-wrap -->
    </section>
    <!-- /#whyus -->
    <div id="portfolio">
        <div class="container container-new">
            <div class="row">
                <div class="col">
                    <h2><?php the_field('main_title_portfolio_home'); ?> <img src="<?php bloginfo('template_directory'); ?>/img/ico/portfolio-ico.png" alt=""></h2>
                </div>
                <!-- /.col-->
                <div class="col">
                    <div class="slider-nav">
                        <button type="button" class="prev-arrow"><i class="fal fa-long-arrow-left"></i></button>
                        <!-- /.prev-arrow -->
                        <button type="button" class="next-arrow"><i class="fal fa-long-arrow-right"></i></button>
                        <!-- /.next-arrow -->
                    </div>
                    <!-- /.slider-nav -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="portfolio-slider">

                        <?php 
                        $images = get_field('photo_gallery_home');
                        if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                                <div>
                                    <div class="portfolio-box">
                                        <a href="<?php echo $image['sizes']['full-image']; ?>" data-fancybox="portfolio">
                                        <span><i class="fal fa-search-plus"></i></span>
                                        <img src="<?php echo $image['sizes']['portfoliothumb-image']; ?>" alt="">
                                        </a>
                                    </div>
                                    <!-- /.portfolio-box -->
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>                

                    </div>
                    <!-- /#portfolio-slider -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container container-new -->
    </div>
    <!-- /#portfolio -->

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>

<?php get_footer(); ?>
