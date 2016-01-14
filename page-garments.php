<?php 
/**
 * Template Name: Graments
 * 
 * @package Kage 
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
								<iframe src="http://www.4logowearables.com/islandembroidery" width="100%" height="2400px" frameborder="0" name="products"> </iframe>
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