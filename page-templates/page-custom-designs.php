<?php
/*
 * Description: Custom page-template for the Custom Designs Page (Dakota Collectibles iframe).
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
   		<div id="content">
			<div class="pagetitle pagetitle_blog">
				<div class="container">
					<div class="gutter clearfix">
						<h5><?php the_title(); ?></h5>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="clearfix">
					<section class="pagesection fullwidthpage">
						<div class="gutter">
							<article class="singlepost clearfix">
								<?php the_content(); ?>
								<iframe src="http://www.dakotacollectibles.com/dc_catalog/default.aspx" width="100%" height="1800" frameborder="0"> </iframe>
								<div class="clear"></div>
								<hr class="space25">								
								<?php kage_paginate_page(); ?> 
							</article>
						</div>
					</section>
				</div>
			</div>
		</div>
<?php endwhile; ?>
<?php get_footer(); ?>