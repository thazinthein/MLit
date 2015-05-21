<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer>
        <div class="container">
          <div class="col-md-12">
            <div class="copyright col-md-10">
              <p>
                Copyright © 2014 MAG LIT PTE LTD - All Right Reserved.<br>
                designed by <a href="http://www.exhibitmedia.sg/" target="_blank">Exhibit Media Pte. Ltd.</a>
              </p>
            </div>
            <div class="social col-md-2">
              <a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"></a>
              <a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"></a>
              <a href="#" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/googleplus.png"></a>
            </div>
        </div>
      </footer>

	</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->


<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

  
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.catslider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
    <script>
      $(function() {
        $( '#dl-menu' ).dlmenu();
      });
    </script>
    <script>
      $(function() {

        $( '#mi-slider' ).catslider();

      });
    </script>
	<script type="text/javascript">
    $(window).ready(function() {
    $('#background').fadeIn(3700); /*fadeIn rate in milliseconds. A higher number = slower fadeIn*/
    });
</script>
</body>

</html>
