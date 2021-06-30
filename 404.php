<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

	<div id="contact-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="contact-in ermac-content">
                        
						<h1><?php the_field('main_title_ermac', 'options'); ?></h1>
                        <h2><?php the_field('subtitle_ermac', 'options'); ?></h2>
                        <?php the_field('content_block_ermac', 'options'); ?>

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back"><?php the_field('button_label_ermac', 'options'); ?></a>

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

<?php
get_footer();
