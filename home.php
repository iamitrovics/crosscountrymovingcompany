<?php get_header(); ?>

    <div id="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_blog_page', get_option('page_for_posts')); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-filters">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>/blog/" class="active">All</a></li>
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </div>
                <!-- /.blog-filters -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div id="blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="blog-listing-in">
                        <div class="row">

                            <?php
                                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                                $args = array(
                                    'posts_per_page' => 10, // the value from Settings > Reading by default
                                    'paged'          => $current_page // current page
                                );
                                query_posts( $args );
                                
                                $wp_query->is_archive = true;
                                $wp_query->is_home = false;
                                
                                while(have_posts()): the_post();
                                    ?>
                                                    
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="blog-photo">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <span><i class="fal fa-long-arrow-right"></i></span>
                                                        <?php
                                                        $imageID = get_field('featured_image_blog');
                                                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                        ?> 

                                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                </a>
                                            </div>
                                            <!-- /.blog-photo -->
                                            <div class="blog-content">
                                                <div class="blog-content--in">
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_field('excerpt_text'); ?>
                                                    <div class="read-more">
                                                        <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                    </div>
                                                    <!-- /.read-more -->
                                                </div>
                                                <!-- /.blog-content--in -->
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.blog-box -->
                                    </div>
                                    <!-- /.col-md-6 -->                           
                                
                                <?php
                            endwhile;
                            ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /#blog-listing-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                    </div>
                    <!-- /.custom-pagination -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing -->

<?php get_footer(); ?>
