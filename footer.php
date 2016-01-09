<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Kage
 */
?>
		<footer id="footer" class="clearfix">
			<div class="footer_block">
				<div class="container columnwrapp clearfix">
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
			<div class="copyright_block">
				<div class="container">
					<div class="gutter clearfix">
						<p class="copyright"><?php  echo esc_html(of_get_option('footer_text_left')); ?></p>
						<!-- <p class="designby"><?php do_action( 'kage_display_credits' ); ?></p> -->
					</div>
				</div>
			</div>

			<section id="footer-container">	
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
	        </section>

		</footer>
	</div>
<?php wp_footer(); ?>		
</body>
</html>