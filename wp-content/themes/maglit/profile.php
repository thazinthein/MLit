<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Profile
*/
?>
<?php get_header();  ?>

  
    <main id="content">          
              <div class="post" id="post-<?php the_ID(); ?>">
                    
                  
                  <div class="container">                      
                      <div class="col-md-12 content">                     
                        
                        <div class="col-md-9">
                          <div class="col-md-6 about">
                            <?php //$id =11; $page_data = get_page($id);?>                                                                   
                            <?php //$post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
                            <h3>Our Team</h3>
                              <div class="about-text span4">  
                                <?php $id =70; $page_data = get_page($id);?>                                                                   
                                <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
                              </div>

                          </div>

                          <div class="col-md-6">
                            <h3>Our Team Work</h3>                            
                              <div class="about-text span4">  
                                <?php $id =72; $page_data = get_page($id);?>                                                                   
                                <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
                              </div>                         
                          </div>

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
                                                  <?php echo do_shortcode('[top_rated_products per_page="4" columns="1"]');?>   
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
                      
                     

               
              </div><!--end of  content-->    
                 
             
    </main>



 <?php get_footer();  ?>
 