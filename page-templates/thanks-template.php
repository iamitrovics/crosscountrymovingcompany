<?php
/**
 * Template Name: Thank You Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<div id="contact-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="contact-in ermac-content">
                        
						<h1><?php the_field('main_title_tnx'); ?></h1>
                        <h2><?php the_field('subtitle_tnx'); ?></h2>
                        <?php the_field('content_block_tnx'); ?>

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back"><?php the_field('button_label_tnx'); ?></a>

					</div>
					<!-- /.contact-in -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /#contact-inner -->

    <?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>

<?php get_footer(); ?>

