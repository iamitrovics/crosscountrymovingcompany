<?php
/**
 * Template Name: Reviews Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="masheader" class="header-home full-width header-reviews">
		<div class="caption">
			<div class="container container-new">
				<div class="image-artwork-mob">
					<img src="<?php the_field('header_artwork_reviews_page'); ?>" alt="">
				</div>
				<!-- /.image-artwork-mob -->
				<h1><?php the_field('main_title_reviews_header'); ?></h1>
				<div class="row">
					<div class="col-xl-11 offset-xl-1">
						<div class="add-review-btn">
							<a href="<?php the_field('button_link_header_review'); ?>"><?php the_field('button_label_header_review'); ?></a>
						</div>
						<!-- /.add-review-btn -->
					</div>
					<!-- /.col-xl-11 offset-xl-1 -->
				</div>
				<!-- /.row -->
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
			<img src="<?php the_field('header_artwork_reviews_page'); ?>" alt="">
		</div>
		<!-- /.image-artwork -->
		
		<?php include(TEMPLATEPATH . '/inc/inc-quote-top.php'); ?>

	</header>
	<!-- /#masheader -->
	<div id="reviews-page">
		<div class="city-reviews">
			<div class="container container-new">
				<div class="row">
					<div class="col-md-12">
						<h2><?php the_field('main_title_all_reviews'); ?></h2>
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container container-new -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="review-list">
							<div class="row">

								<?php
								$loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 115) ); ?>  
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="col-lg-4 col-md-6">
										<div class="review-box">
											<div class="review-author">
												<div class="author-info">
													<div class="star-area">
														<span class="mr-star-rating"> 
															<?php if (get_field('score_review') == '5') { ?>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															<?php } elseif (get_field('score_review') == '4') { ?>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															<?php } elseif (get_field('score_review') == '3') { ?>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															<?php } elseif (get_field('score_review') == '2') { ?>
																<i class="fas fa-star"></i>
																<i class="fas fa-star"></i>
															<?php } elseif (get_field('score_review') == '1') { ?>
																<i class="fas fa-star"></i>
															<?php } ?>   														
	
														</span>
													</div>
													<span class="author"><?php the_title(); ?></span>
													<!-- /.author -->
												</div>
												<!-- /.author-info -->
											</div>
											<!-- /.review-author -->  
											<div class="review-text">
												<?php the_field('review_text_review'); ?>
											</div>
											<!-- /.review-text -->
										</div>
										<!-- /.review-box -->
									</div>
									<!-- /.col-lg-4 col-md-6 -->

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>      

							</div>
							<!-- /.row -->
						</div>
						<!-- /#review-list -->
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.city-review -->
		<div id="bottom-cta">
			<div class="container">
				<div class="row">
					<div class="offset-xl-2 col-xl-10">
						<h2><?php the_field('main_title_add_rev', 'options'); ?></h2>
					</div>
					<!-- /.offset-lg-2 col-xl-10 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="offset-xl-1 col-xl-11">
						<div class="bottom-cta-text">
							<?php the_field('form_code_add_rev', 'options'); ?>
						</div>
						<!-- /.bottom-cta-text -->
					</div>
					<!-- /.offset-xl-1 col-xl-11 -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="review-circles">
							<img src="<?php bloginfo('template_directory'); ?>/img/bg/review-circles.svg" alt="">
						</div>
						<!-- /.review-circles -->
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			<div class="half-circle"></div>
			<!-- /.half-circle -->
		</div>
		<!-- /#bottom-cta -->
	</div>
	<!-- /#services-page -->   

	<?php include(TEMPLATEPATH . '/inc/inc-bottom.php'); ?>
	
<?php get_footer(); ?>

