<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Kage
 */
?>
		<footer id="footer" class="clearfix">			
			<div class="footer_block footer-inner">
				<div class="container columnwrapp clearfix">
					<div class="footer-widget-wrap">
						<div class="column3">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-1'); ?>
								<?php else : ?>	
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Recent Posts', "kage" ); ?></h3>
										<ul>
											<?php wp_get_archives('type=postbypost&limit=10'); ?>
										</ul>
									</aside>
								<?php endif; ?>
							</div>	
						</div>
						<div class="column3">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-2'); ?>
								<?php else : ?>	
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Tag Cloud', "kage" ); ?></h3>
										<div class="tagcloud">
											<?php wp_tag_cloud(); ?>
										</div>
									</aside>
								<?php endif; ?>
							</div>	
						</div>
						<div class="column3">
							<div class="gutter">
								<?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
								<?php dynamic_sidebar('footer-widget-area-3'); ?>
								<?php else : ?>	
									<aside class="widget">
										<h3 class="widget-title"><?php _e( 'Pages', "kage" ); ?></h3>
										<ul>
											<?php wp_list_pages('title_li='); ?>
										</ul>
									</aside>
								<?php endif; ?>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="social_block">
			<div class="container">				
					
						<ul class="social">
						<li class="facebook"><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
						<li class="twitter"><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
						<li class="instagram"><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
						<li class="flickr"><a href="#"><i class="fa fa-flickr fa-lg"></i></a></li>
						<li class="youtube"><a href="#"><i class="fa fa-youtube-square fa-lg"></i></a></li>
						<li class="linkedin"><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
						</ul>				
						
			</div>
			</div>
			<div class="copyright_block">
				<div class="footer-bar">		
						<div class="wc3-wrap">
							<p><a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" ></a></p>
						</div>
						<div class="copyright-wrap">
							<p class="copyright"><?php  echo esc_html(of_get_option('footer_text_left')); ?></p>
						</div>
						<div class="social-wrap">
							<ul class="social">
								<li class="facebook"><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
								<li class="twitter"><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
								<li class="instagram"><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
								<li class="flickr"><a href="#"><i class="fa fa-flickr fa-lg"></i></a></li>
								<li class="youtube"><a href="#"><i class="fa fa-youtube-square fa-lg"></i></a></li>
								<li class="linkedin"><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
							</ul>
						</div>
						<!-- <p class="designby"><?php do_action( 'kage_display_credits' ); ?></p> -->					
				</div>
			</div>

			<!-- <section id="footer-container">	
				<div class="container footer-wrap">
					<div id="footer-1" class="footer-block">
		                <h3>Connect With Us</h3>
		                <ul class="social">
		                    <li class="facebook"><a href="http://facebook.com/" rel="ext">Facebook</a></li>
		                    <li class="twitter"><a href="http://twitter.com/" rel="ext">Twitter</a></li>
		                    <li class="youtube"><a href="http://youtube.com/" rel="ext">YouTube</a></li>
		                    <li class="linkedin"><a href="http://www.linkedin.com/" rel="ext">LinkedIn</a></li>
		                </ul>
		            </div>
					<div id="footer-2" class="footer-block">
		                <h3>Connect With Us</h3>
		                <ul class="social">
		                    <li class="facebook"><a href="http://facebook.com/" rel="ext">Facebook</a></li>
		                    <li class="twitter"><a href="http://twitter.com/" rel="ext">Twitter</a></li>
		                    <li class="youtube"><a href="http://youtube.com/" rel="ext">YouTube</a></li>
		                    <li class="linkedin"><a href="http://www.linkedin.com/" rel="ext">LinkedIn</a></li>
		                </ul>
		            </div>
					<div id="footer-3" class="footer-block">
		                <h3>Connect With Us</h3>
		                <ul class="social">
		                    <li class="facebook"><a href="http://facebook.com/" rel="ext">Facebook</a></li>
		                    <li class="twitter"><a href="http://twitter.com/" rel="ext">Twitter</a></li>
		                    <li class="youtube"><a href="http://youtube.com/" rel="ext">YouTube</a></li>
		                    <li class="linkedin"><a href="http://www.linkedin.com/" rel="ext">LinkedIn</a></li>
		                </ul>
		            </div>
	           </div>
	        </section> -->
	        	        
		</footer>
	</div>
<?php wp_footer(); ?>		
</body>
</html>