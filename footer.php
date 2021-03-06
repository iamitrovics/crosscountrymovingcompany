<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer id="page-footer">
		<div class="container container-new">
			<div class="row footer-top">
				<div class="col">
					<div class="footer-logo">
						<img src="<?php the_field('footer_logo_footer', 'options'); ?>" alt="">
						<div class="socials">
							<ul>
								<?php if( have_rows('social_networks_general', 'options') ): ?>
									<?php while( have_rows('social_networks_general', 'options') ): the_row(); ?>

										<li><a href="<?php the_sub_field('link_to_network'); ?>" target="_blank"><?php the_sub_field('icon_code'); ?></a></li>

									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
						<!-- // socials  -->
					</div>
					<!-- /.footer-logo -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'sitemapmenu' ) ); ?>
					</div>
					<!-- /.footer-sitemap -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-sitemap">
						<span class="footer-title"><?php the_field('block_title_services_footer', 'options'); ?></span>
						<?php wp_nav_menu( array( 'theme_location' => 'servicesmenu' ) ); ?>
					</div>
					<!-- /.footer-sitemap -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-sitemap">
						<?php wp_nav_menu( array( 'theme_location' => 'quickmenu' ) ); ?>
					</div>
					<!-- /.footer-sitemap -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-sitemap">
						<span class="footer-title"><?php the_field('block_title_contact_footer', 'options'); ?></span>
						<p><?php the_field('phone_label_footer', 'options'); ?> <a href="tel:8778880708"><?php the_field('phone_number_footer', 'options'); ?></a></p>
					</div>
					<!-- /.footer-sitemap -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<div class="footer-cities">
						<?php wp_nav_menu( array( 'theme_location' => 'citymenu' ) ); ?>
					</div>
					<!-- /.footer-cities -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row footer-cities -->
			<div class="row copy-bar">
				<div class="col-lg-6">
					<div class="copyright-area">
						<small>&copy; <?php echo date("Y"); ?> <?php the_field('copyright_notice_footer', 'options'); ?></small>
					</div>
					<!-- /.copyright-area -->
				</div>	
				<!-- /.col-lg-6 -->	
				<div class="col-lg-6">
					<div class="copy-bar--links">
						<small>Created by <a href="https://madeonline.com/" target="_blank">Made Online <img src="<?php bloginfo('template_directory'); ?>/img/ico/md-logo.webp" alt=""></a></small>
					</div>
					<!-- /.copy-bar--links -->	
				</div>
				<!-- /.col-lg-6 -->	
			</div>
			<!-- /.row copy-bar -->		

			<div class="footer-certs">

				<?php if( have_rows('certifications_list_footer', 'options') ): ?>
					<?php while( have_rows('certifications_list_footer', 'options') ): the_row(); ?>

						<div class="cert">
							<?php if (get_sub_field('cert_type') == 'Image') { ?>
								<a href="<?php the_sub_field('cert_link'); ?>" target="_blank"><img src="<?php the_sub_field('cert_image'); ?>" alt=""></a>
							<?php } elseif (get_sub_field('cert_type') == 'Code') { ?>
								<?php the_sub_field('cert_code'); ?>
							<?php } ?>   						
						</div>
						<!-- // cert  -->

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
			<!-- // certs  -->

		</div>
		<!-- /.container container-new -->
	</footer>
	<!-- /#page-footer -->

	</div>
	<!-- /.page-wrapper -->

	<div id="cookie-notice">
		<div id="cookie-notice-in">
			<div class="notice-text">
				<?php the_field('notice_text_cookies', 'options'); ?>
			</div>
			<!-- /.notice-text -->
			<div class="notice-btns">
				<a href="#" id="accept-cookie"><?php the_field('button_1_label_cookies', 'options'); ?></a>
				<a href="<?php the_field('button_link_cooke_2', 'options'); ?>" target="_blank" id="more-info-cookie"><?php the_field('button_2_label_cooki', 'options'); ?></a>
			</div>
			<!-- /.notice-btns -->
			<a href="javascript:void(0);" id="close-notice"></a>
		</div>
		<!-- /#cookie-notice-in -->
	</div>
	<!-- /#cookie-notice -->

	<?php 
	$values = get_field( 'small_title_float_cta_side' );
	if ( $values ) { ?>
	
	<div class="fixed-pdf">
		<a href="<?php the_field('pdf_file_side_cta_pdf'); ?>" target="_blank">
			<em><img src="<?php bloginfo('template_directory'); ?>/img/ico/check.png" alt=""></em>
			<div class="cta-text">
				<small><?php the_field('small_title_float_cta_side'); ?></small>
				<span class="title"><?php the_field('cta_title_side_cta'); ?></span>
			</div>
		</a>
	</div>
	
	<?php 
	} else { ?>
		
	<div class="fixed-pdf">
		<a href="<?php the_field('pdf_file_cta_float', 'options'); ?>" target="_blank">
			<em><img src="<?php bloginfo('template_directory'); ?>/img/ico/check.png" alt=""></em>
			<div class="cta-text">
				<small><?php the_field('small_title_pdf_cta', 'options'); ?></small>
				<span class="title"><?php the_field('cta_title_float_pdf', 'options'); ?></span>
			</div>
		</a>
	</div>

	<?php } ?>


	<div id="fixed-cta">
		
		<?php 
		$values = get_field( 'phone_number_city' );
		if ( $values ) { ?>

			<a href="tel:<?php the_field('phone_number_city') ?>">
				<em><i class="fal fa-phone-alt"></i></em>
				<div class="phone-text">
					<small class="label">Get a Free Estimate</small>
					<span><?php the_field('phone_number_city') ?></span>
				</div>
				<!-- // text  -->
			</a>

		<?php 
		} else { ?>

			<a href="tel:<?php the_field('phone_number_general_cta', 'options') ?>">
				<em><i class="fal fa-phone-alt"></i></em>
				<div class="phone-text">
					<small class="label">Get a Free Estimate</small>
					<span><?php the_field('phone_number_general_cta', 'options') ?></span>
				</div>
				<!-- // text  -->
			</a>
			
		<?php } ?>


	</div>
	<!-- // fixed cta  -->	

	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

  <script>
    if (!sessionStorage.alreadyClicked) {
        jQuery('#cookie-notice').addClass('slide-up');
        sessionStorage.alreadyClicked = 1;
    }
  </script> 	

</body>
</html>

