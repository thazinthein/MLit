<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Contact-Us
*/
?>
<?php get_header();  ?>

            
  <div class="post" id="post-<?php the_ID(); ?>">
        <div class="contactform-bg">     
                  
                  <div class="container">

                        <div class="col-md-12"> 
                              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7977.488650357726!2d103.70313469999998!3d1.3294499000000093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s3+Soon+Lee+Street+Pioneer+Junction!5e0!3m2!1sen!2ssg!4v1416849929639" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                        </div>   

                        <div class="col-md-3"> 
                          
                          <div class="address1"> 
                            <h4>MAG LIT PTE LTD</h4>   
                            <address>
                              <?php $id =63; $page_data = get_page($id);?>                                                                   
                              <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>
                            </address>
                            <div class="phone">  65-6684 1807 </div>
                            <div class="fax">  65-6684 5622  </div>
                            <div class="email">  sales@metech.com.sg </div>
                          </div>

                        </div>
                        
                        <div class="col-md-9"> 
                              <?php echo do_shortcode('[xyz-cfm-form id=1]')  ?>
                        </div>

                  


        </div>
                      
                     

  </div>
                
                 
             



 <?php get_footer();  ?>
 