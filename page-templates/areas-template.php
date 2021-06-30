<?php
/**
 * Template Name: Areas Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header id="masheader" class="header-home full-width">
    <div class="caption">
        <div class="container container-new">
            <div class="image-artwork-mob">
                <img src="<?php bloginfo('template_directory'); ?>/img/headers/areas-artwork-mob.jpg" alt="">
            </div>
            <!-- /.image-artwork-mob -->
            <h1><?php the_field('main_title_hero_areas'); ?></h1>
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
        <img src="<?php bloginfo('template_directory'); ?>/img/headers/areas-artwork.jpg" alt="">
    </div>
    <!-- /.image-artwork -->
    
    <?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

</header>
<!-- /#masheader -->
<div id="areas-page">
    <section id="services-detailed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-detailed-in areas-in">
                        <h2><?php the_field('block_title_areas_intro'); ?></h2>
                        <div class="services-intro">
                            <?php the_field('intro_content_areas_intro'); ?>
                        </div>
                        <!-- /.services-intro -->
                        <div class="row areas-list">

                            <?php if( have_rows('areas_list_areas') ): ?>
                                <?php while( have_rows('areas_list_areas') ): the_row(); ?>

                                    <div class="col-lg-4">
                                        <div class="area-box">
                                            <span class="area-title"><?php the_sub_field('area_name'); ?></span>
                                            <!-- /.area-title -->
                                            <ul>

                                            <?php if( have_rows('states_list') ): ?>
                                                <?php while( have_rows('states_list') ): the_row(); ?>

                                                    <li class="dropdown">
                                                        <a class="dropdown-togglex" href="<?php the_sub_field('state_link'); ?>" role="button" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="false"><?php the_sub_field('state_name'); ?></a>
                                                        <ul class="dropdown-menu fade">
                                                            <?php if( have_rows('list_of_cities') ): ?>
                                                            <?php while( have_rows('list_of_cities') ): the_row(); ?>
                                                                <li><a href="<?php the_sub_field('city_link'); ?>"><?php the_sub_field('city_name'); ?></a></li>
                                                            <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </li>

                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                            </ul>
                                        </div>
                                        <!-- /.area-box -->
                                    </div>
                                    <!-- /.col-lg-4 -->

                                <?php endwhile; ?>
                            <?php endif; ?>

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
</div>
<!-- /#areas-page -->


	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

