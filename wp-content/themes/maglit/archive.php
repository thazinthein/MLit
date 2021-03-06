<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

 	<main id="content">
			
    	<div class="breandcrumb breadcurmb-bg-archive"></div>
			<div class="container">
				<div class="col-md-12 content">
					<div class="col-md-9">
    		

						<?php if (have_posts()) : ?>

				 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

							<?php /* If this is a category archive */ if (is_category()) { ?>
								

							<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
								<h2><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

							<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h2>

							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
								<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h2>

							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								<h2 class="pagetitle"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h2>

							<?php /* If this is an author archive */ } elseif (is_author()) { ?>
								<h2 class="pagetitle"><?php _e('Author Archive','html5reset'); ?></h2>

							<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
								<h2 class="pagetitle"><?php _e('Blog Archives','html5reset'); ?></h2>
							
							<?php } ?>

							<?php post_navigation(); ?>

							<?php while (have_posts()) : the_post(); ?>
							
								<article <?php post_class() ?>>
								
										<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
									
										<div class="post-stmp"><?php posted_on(); ?></div>

										<div class="entry">
											<p class = "recent-post"><?php the_excerpt(__('(more…)')); ?></p>
										</div>

								</article>

						<?php endwhile; ?>

						<?php post_navigation(); ?>
						
						<?php else : ?>

							<h2><?php _e('Nothing Found','html5reset'); ?></h2>

						<?php endif; ?>

					</div>

					<div class="col-md-3 right-wrapper">
						<div id="recent-posts-3" class="widget">		
								<h3 class="cate-title">Products Categories</h3>		
								<nav class="rightnav" role="navigation">
									<?php wp_nav_menu(array('menu'=> 'rightmenu'));?>
								</nav>
						</div>
						
						<div class="featured-col">                  
	                            <div id="recent-posts-3" class="widget">        
	                                <h3 class="cate-title">Top Rated Products</h3>     
	                                <?php echo do_shortcode('[featured_products per_page="4" columns="1"]');?>   
	                            </div> <!-- end .widget --><!-- end .widget -->                       

	                    </div>

	                    <div class="latestblog">
			              <article>
			              	<h3>Blog</h3>
			                <?php
			                    $temp = $wp_query;
			                    $wp_query= null;
			                    $wp_query = new WP_Query();     
			                    $wp_query->query('showposts=4'.'&paged='.$paged.'&category_name=blog');
			                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			                      
			                              <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(array(210,210), array ('class' => 'alignleft')); ?></a>                    
			                              <h4><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
			                <?php endwhile; ?>   
			              </article> 
			            </div><!-- end of latest blog-->

					</div>

				</div>
			</div>
		</div>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
