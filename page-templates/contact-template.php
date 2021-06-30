<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<div id="contact-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-in">
						<h1><?php the_field('main_title_header_contact'); ?></h1>
						<div class="contact-intro">
							<div class="row">
								<div class="col-xl-6">
									<span class="contact-title"><?php the_field('form_title_contact'); ?></span>
									<span class="contact-title"><?php the_field('form_subtitle_contact'); ?></span>
								</div>
								<!-- /.col-xl-6 -->
								<div class="col-xl-6">
									<div class="contact-icons">
										<a href="tel:<?php the_field('phone_number_contact_page'); ?>"><i class="far fa-phone-alt"></i> <?php the_field('phone_number_contact_page'); ?></a>
										<a href="mailto:<?php the_field('email_address_contact_page'); ?>"><i class="far fa-envelope"></i><?php the_field('email_address_contact_page'); ?></a>
									</div>
									<!-- /.contact-icons -->
								</div>
								<!-- /.col-xl-6 -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.contact-intro -->
						<div class="contact-form">
							<?php the_field('form_code_contact_page'); ?>
							<div class="abh-circles">
								<div class="orange-circle"></div>
								<!-- /.orange-circe -->
								<div class="white-circle"></div>
								<!-- /.white-circle -->     
							</div>
							<!-- /.abh-circles -->
						</div>
						<!-- /.contact-form -->
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
	
<?php get_footer(); ?>

