<?php
/*
 * Template Name: iframe template page
 * Description: Custom template for the two pages which require iframes.
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
			<div style="background-color:#111" class="container">
			<p>inside .container</p>
				<div style="background-color:#333" class="sidebar_right clearfix">
					<p>inside .sidebar_right clearfix</p>
					<section style="background-color:#555" class="pagesection">
					<p>inside .pagesection</p>
						<div style="background-color:#777" class="gutter">
						<p>inside .gutter</p>
							<article style="background-color:#999" class="singlepost clearfix">
							<p>inside .singlepost clearfix</p>							
								<?php the_content(); ?>
								
								<div class="clear"></div>
								<hr class="space25">
								<p><?php posts_nav_link(); ?></p>
								<?php comments_template(); ?>
								<?php kage_paginate_page(); ?> 
							</article>
						</div>
					</section>					
				</div>
			</div>
		</div>
<?php endwhile; ?>		
<?php get_footer(); ?>