<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Kage
 */
?>
<div class="pagesidebar">
	<div class="gutter">
		<?php if ( is_active_sidebar('sidebar-widget-area') ) : ?>
			<?php dynamic_sidebar('sidebar-widget-area'); ?>
		<?php else : ?>	
			<aside class="widget">
				<h3 class="widget-title"><?php _e( 'Recent Posts', "kage" ); ?></h3><hr />
				<ul>
					<?php wp_get_archives('type=postbypost&limit=10'); ?>
				</ul>
			</aside>
			<aside class="widget">
				<h3 class="widget-title"><?php _e( 'Pages', "kage" ); ?></h3><hr />
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</aside>
			<aside class="widget">
				<h3 class="widget-title"><?php _e( 'Tag Cloud', "kage" ); ?></h3><hr />
				<div class="tagcloud">
					<?php wp_tag_cloud(); ?>
				</div>
			</aside>
			<aside class="widget">
				<h3 class="widget-title"><?php _e( 'Categories', "kage" ); ?></h3><hr />
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</aside>		
		<?php endif; ?>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>
	</div>
</div>