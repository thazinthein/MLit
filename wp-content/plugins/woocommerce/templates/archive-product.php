<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>
	<div class="container">
		<div class="col-md-12 content">
		<div class="col-md-9 productarchive">
			
			<?php
				/**
				 * woocommerce_before_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				do_action( 'woocommerce_before_main_content' );
			?>

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			
				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( have_posts() ) : ?>
			
				<?php
					/**
					 * woocommerce_before_shop_loop hook
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>

				<?php woocommerce_product_loop_start(); ?>
				
					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php
					/**
					 * woocommerce_after_shop_loop hook
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>

				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

				<?php endif; ?>

			<?php
				/**
				 * woocommerce_after_main_content hook
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );
			?>

			
		</div>

		<div class="col-md-3 right-wrapper right-wrapper-archive">
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
			                    $wp_query->query('showposts=2'.'&page='.$paged.'&category_name=blog');
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