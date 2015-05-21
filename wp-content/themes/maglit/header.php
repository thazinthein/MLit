<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>


	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">   
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/sliderstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/hide-menu.css" />

   	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.2.min.js"></script>
   	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
   	<script src="<?php bloginfo('template_url'); ?>/js/jquery.catslider.js"></script>	
	
	<script src="<?php bloginfo('template_url'); ?>/js/fade-bg.js"></script>
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	
	<div class="wrapper">

		<header class="header">    			
          
	        <div class="container">
	            <div class="col-md-12 top">
	              
	              <div class="col-md-6 top-left">  
	                <div class="col-md-5 col-sm-5 col-xs-5 logo">
	                	<a href="<?php echo get_option('home'); ?>/">
	                  		<img src="<?php bloginfo('template_directory');?>/images/mag-lit.gif" class="img-responsive">
	                  	</a>
	                </div>
	                <div class="col-md-7 col-sm-7 col-xs-7 logotext">
	                  <a href="<?php echo get_option('home'); ?>/">
	                  	<img src="<?php bloginfo('template_directory');?>/images/logo-text.jpg" class="img-responsive">
	                  </a>
	                </div>
	              </div>

	              <div class="col-md-6 top-right">  
	                <div class="col-md-12 search-wrapper">
		                <div class="searchrow">	
		                	<?php  
				                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
				                endif; 
				            ?>
				        </div>
	                </div>
	                <div class="col-md-12 quote-wrapper">
	                <div class="col-md-7"></div>	                	
	                	<div class="col-md-5 quote">
			           		<?php echo do_shortcode('[WooCommerceWooCartPro]'); ?>
			                    
			            </div>
	                </div>
	              </div>

	            </div>
	        </div>


            <div class="line1"></div>
            <div class="line2"></div>
            <div class="container">
                <div class="col-md-12 topmenu">
                	<div class="hidenav-wrapper">            
			            <div id="dl-menu" class="dl-menuwrapper">
			                <button class="dl-trigger"></button>
			                    <ul class="dl-menu">
			                        <?php wp_nav_menu(array('menu'=> 'topmenu'));?>
			                    </ul>
			            </div>  
			       	</div> 

			       	<div class="hormenu">
	                    <nav class="nav" role="navigation">
							<?php wp_nav_menu(array('menu'=> 'topmenu'));?>
						</nav>
					</div>
                </div>
            </div>         			
    			
		</header>			
         
          			
    			

	    	
	    <div class="container">
				<div class="col-md-12">
					<?php woocommerce_breadcrumb(); ?>
				</div>
		</div> 
		

			
		

