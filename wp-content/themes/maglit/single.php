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

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
								
								<h1 class="entry-title"><?php the_title(); ?></h1>

								<div class="entry-content">
									
									<?php the_content(); ?>

									<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
									
									<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>
								
									<?php posted_on(); ?>

								</div>
								
								<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
								
							</article>

						<?php comments_template(); ?>

						<?php endwhile; endif; ?>
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

<?php //post_navigation(); ?>
	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>