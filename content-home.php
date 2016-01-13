<?php 
/**
 * 
 * @package Kage 
 */
get_header(); ?>

<!-- #content -->
<div id="content">
	<!-- .main-wrap -->
	<div id="main-wrap" class="main-wrap">
		
		<section id="main-slider" class="home-section"><!-- #intro -->
			<div id="main-slider-container" class="section-container">		

				<?php if ( of_get_option('main_slider_image_1') ) { ?>	
				<div class="container">
					<div class="main-slider">		
						<?php if ( of_get_option('main_slider_image_1') ) { ?><div><img src="<?php echo esc_url(of_get_option('main_slider_image_1')); ?>"></a></div><?php } ?>
						<?php if ( of_get_option('main_slider_image_2') ) { ?><div><img src="<?php echo esc_url(of_get_option('main_slider_image_2')); ?>"></a></div><?php } ?>
						<?php if ( of_get_option('main_slider_image_3') ) { ?><div><img src="<?php echo esc_url(of_get_option('main_slider_image_3')); ?>"></a></div><?php } ?>
						<?php if ( of_get_option('main_slider_image_4') ) { ?><div><img src="<?php echo esc_url(of_get_option('main_slider_image_4')); ?>"></a></div><?php } ?>						    
					</div><!-- END .main-slider -->
				</div><!-- .container -->	
				<?php } ?>

			    <?php if ( of_get_option('top_image') ) { ?>
				<div class="mainslider">
					<div class="container">
						<div class="gutter clearfix">
							<div class="imgbox">
								<img class="fullwidth" src="<?php echo esc_url(of_get_option('top_image')); ?>" alt="" />
							</div>
						</div>
					</div>	
				</div>
				<?php } ?>
			</div><!-- END .section-container -->
		</section><!-- END Intro -->

		<!-- #welcome -->			
		<section id="welcome" class="home-section">
			<div id="welcome-container" class="section-container">
				<div id="welcome-section" class="section-inner welcome_block indent_old">			    
					<?php if ( of_get_option('welcome_title') ) { ?>
					<div class="container">
						<div class="columnwrapp clearfix">
							<div class="column-wrap">
							    <?php if ( of_get_option('welcome_image') ) { ?>
								<div class="column2 column2-indent">						
									<div class="gutter">
									<figure>
										<img class="fullwidth" src="<?php echo esc_url(of_get_option('welcome_image')); ?>" alt="" />
									</figure>
									</div>
								</div>
								<?php } ?>
								<div class="column2 column2a">						
									<div class="gutter">
										<div class="welcome_text">
											<h4><span>Welcome to</span><?php echo esc_html(of_get_option('welcome_title')); ?><span><?php echo esc_html(of_get_option('welcome_title2')); ?></span></h4>
											<p><?php echo esc_html(of_get_option('welcome_content')); ?></p>
											<a class="button" href="<?php echo esc_url(of_get_option('welcome_button_link')); ?>"><?php echo esc_html(of_get_option('welcome_button_text')); ?></a>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<?php } ?>
					<?php if ( of_get_option('blue_title') ) { ?>
					<div class="advertisement_block">
						<div class="container">
							<div class="gutter">
								<div class="advertisement">
									<table>
										<tbody>
											<tr>
												<td class="tdw1">
													<p class="adv_title"><?php echo esc_html(of_get_option('blue_title')); ?></p>
												</td>
												<td class="tdw2">
													<p><?php echo esc_html(of_get_option('blue_content')); ?></p>
												</td>
												<td class="tdw3">
													<a class="adv_button" href="<?php echo esc_url(of_get_option('blue_button_link')); ?>"><?php echo esc_html(of_get_option('blue_button_text')); ?></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!-- .welcome_block -->
			</div><!-- END .section-container -->
		</section><!-- END #welcome -->

		<!-- #portfolio-slider -->
		<section id="portfolio-slider" class="home-section">
			<div id="portfolio-slider-container" class="section-container">
				<?php if ( of_get_option('title_area_2') ) { ?>
				<div class="my-portfolio-section section-inner">
					<div class="container">
						<h1><span><?php echo esc_html(of_get_option('title_area_2')); ?></span></h1>

						<div class="gallery gallery-responsive my-portfolio-slider">
						   	<?php if ( of_get_option('box_1_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_1_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_1_image')); ?>"><div class="overlay"></div></a></div>
						   	<?php } ?>
						   	<?php if ( of_get_option('box_2_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_2_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_2_image')); ?>"><div class="overlay"></div></a></div>
						  	<?php } ?>
						    <?php if ( of_get_option('box_3_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_3_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_3_image')); ?>"><div class="overlay"></div></a></div>
						    <?php } ?>
						    <?php if ( of_get_option('box_4a_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_4a_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_4a_image')); ?>"><div class="overlay"></div></a></div>
						    <?php } ?>
						    <?php if ( of_get_option('box_5_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_5_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_5_image')); ?>"><div class="overlay"></div></a></div>
						    <?php } ?>
						    <?php if ( of_get_option('box_6_image') ) { ?>
						   	<div class="inner"><a class="image-link" href="<?php echo esc_url(of_get_option('box_6_image')); ?>"><img src="<?php echo esc_url(of_get_option('box_6_image')); ?>"><div class="overlay"></div></a></div>
						    <?php } ?>				    
						</div>

						<a class="hyperlink" href="http://islandembroidery.ckschmieder.com/gallery/"><h3>See the full gallery <i class="fa fa-arrow-right"></i></h3></a>

					</div><!-- .container -->
				</div><!-- .my-portfolio-section -->
			</div><!-- END .section-container -->
		</section><!-- END #portfolio-slider -->


		<section id="services_2"> 
			<div id="services_2-container" class="section-container">
		        <div class="indent_services">
		        	<?php if ( of_get_option('top_title') ) { ?>
					<h1><span><?php echo esc_html(of_get_option('top_title')); ?></span></h1>

		            <ul class="services_2">
		                <div class="row">
		                    <li class="test col-xs-12 col-sm-6 col-md-3">
			                    <a class="service_item" href="<?php echo esc_url(of_get_option('top_box_1_link')); ?>">
									<?php if ( of_get_option('top_box_1_icon') ) { ?>
			                        <figure class="testimonial-thumb">
			                            <img class="img-responsive center-block" src="<?php echo esc_url(of_get_option('top_box_1_icon')); ?>" alt="">
			                        </figure>
			                        <?php } ?>
			                        <aside class="testimonial-text">
			                            <h3 class="testimonial-title text-center"><?php echo esc_html(of_get_option('top_box_1_title')); ?></h3>
				                        <div class="testimonial-excerpt">
				                        <?php echo esc_html(of_get_option('top_box_1_content')); ?>
				                        </div>
			                        </aside>
			                     </a>
		                    </li>
		                    <li class="test col-xs-12 col-sm-6 col-md-3">
			                    <a class="service_item" href="<?php echo esc_url(of_get_option('top_box_2_link')); ?>">
									<?php if ( of_get_option('top_box_2_icon') ) { ?>
			                        <figure class="testimonial-thumb">
			                            <img class="img-responsive center-block" src="<?php echo esc_url(of_get_option('top_box_2_icon')); ?>" alt="">
			                        </figure>
			                        <?php } ?>
			                        <aside class="testimonial-text">
			                            <h3 class="testimonial-title text-center"><?php echo esc_html(of_get_option('top_box_2_title')); ?></h3>
				                        <div class="testimonial-excerpt">
				                        <?php echo esc_html(of_get_option('top_box_2_content')); ?>
				                        </div>
			                        </aside>
			                     </a>
		                    </li>
		                    <li class="test col-xs-12 col-sm-6 col-md-3">
			                    <a class="service_item" href="<?php echo esc_url(of_get_option('top_box_3_link')); ?>">
									<?php if ( of_get_option('top_box_3_icon') ) { ?>
			                        <figure class="testimonial-thumb">
			                            <img class="img-responsive center-block" src="<?php echo esc_url(of_get_option('top_box_3_icon')); ?>" alt="">
			                        </figure>
			                        <?php } ?>
			                        <aside class="testimonial-text">
			                            <h3 class="testimonial-title text-center"><?php echo esc_html(of_get_option('top_box_3_title')); ?></h3>
				                        <div class="testimonial-excerpt">
				                        <?php echo esc_html(of_get_option('top_box_3_content')); ?>
				                        </div>
			                        </aside>
			                     </a>
		                    </li>
		                    <li class="test col-xs-12 col-sm-6 col-md-3">
			                    <a class="service_item" href="<?php echo esc_url(of_get_option('top_box_4_link')); ?>">
									<?php if ( of_get_option('top_box_4_icon') ) { ?>
			                        <figure class="testimonial-thumb">
			                            <img class="img-responsive center-block" src="<?php echo esc_url(of_get_option('top_box_4_icon')); ?>" alt="">
			                        </figure>
			                        <?php } ?>
			                        <aside class="testimonial-text">
			                            <h3 class="testimonial-title text-center"><?php echo esc_html(of_get_option('top_box_4_title')); ?></h3>
				                        <div class="testimonial-excerpt">
				                        <?php echo esc_html(of_get_option('top_box_4_content')); ?>
				                        </div>
			                        </aside>
			                     </a>
		                    </li>
		                </div><!-- .row -->
		            </ul><!-- .services_2 -->
		            <?php } ?>
		        </div><!-- .indent_services -->
		        </div><!-- END .section-container -->
	    </section><!-- END #services_2 -->

		<section id="testimonials" class="home-section">
			<div id="testimonials-container" class="section-container">
				<?php if ( of_get_option('testimonial_box_text') ) { ?>
				<div class="testimonial_block">
					<div class="container">
						<div class="testimonial_slider">
							<ul>
								<li>
									<p class="quote"><?php echo esc_html(of_get_option('testimonial_box_text')); ?></p>
									<p class="testimonial_auth"><?php echo esc_html(of_get_option('testimonial_box_name')); ?></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>
			</div><!-- END .section-container -->
		</section><!-- END #portfolio-slider -->

	</div><!-- END #main-wrap  -->
</div><!-- END #content -->
<?php } ?>
<?php get_footer(); ?>