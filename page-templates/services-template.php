<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="masheader" class="header-home">
        <div class="caption">
            <div class="container container-new">
                <div class="image-artwork-mob">
                    <img src="<?php bloginfo('template_directory'); ?>/img/headers/homepage-artwork.png" alt="">
                </div>
                <!-- /.image-artwork-mob -->
                <h1><?php the_field('main_title_hero_services_page'); ?></h1>
                <div class="header-text">
                    <?php the_field('hero_text_serv_page_hero'); ?>
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
            <img src="<?php bloginfo('template_directory'); ?>/img/headers/homepage-artwork.png" alt="">
        </div>
        <!-- /.image-artwork -->
    
        <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

    </header>
    <!-- /#masheader -->
    <div id="services-page">
        <section id="services">
            <div class="container container-new">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('section_title_serviecs_page_list'); ?></h2>
                        <div class="services-list">

                            <?php
                                $post_objects = get_field('services_list_serv_page');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>

                                        <div class="service-box">
                                            <div class="service-box-in">
                                                <div class="service-ico">
                                                    <img src="<?php the_field('icon'); ?>" alt="">
                                                </div>
                                                <!-- /.service-ico -->
                                                <div class="service-text">
                                                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <?php the_field('service_description_list'); ?>
                                                    <a href="<?php echo get_permalink(); ?>" class="learn-more">Learn more</a>
                                                    <!-- /.learn-more -->
                                                </div>
                                                <!-- /.service-text -->
                                            </div>
                                            <!-- /.service-box-in -->
                                        </div>
                                        <!-- /.service-box -->

                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
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
    </div>
    <!-- /#services-page -->

	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

