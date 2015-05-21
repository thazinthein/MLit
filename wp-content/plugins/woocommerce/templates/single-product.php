<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
<div class="breandcrumb breadcurmb-bg-archive"></div>
	<div class="container">
		<div class="col-md-12 content">
			<div class="col-md-9 singleproduct">
				<?php
					/**
					 * woocommerce_before_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'single-product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php
					/**
					 * woocommerce_after_main_content hook
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );
				?>
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
	
<?php get_footer( 'shop' ); ?>