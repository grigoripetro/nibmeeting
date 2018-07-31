 <!-- FOOTER -->
    <footer class="section footer">
        <div class="container" data-aos="fade-up-down">
    
    
    <div class="footer-alt text-center">
	<?php $image = get_field('logo', 4); ?>
    <a href="#"><img class="footlogo" src="<?php echo $image['url']; ?>" style="height:100px;" alt="" title=""/></a>
	<p class="text-muted m-b-0"><?php echo get_bloginfo('description');  ?></p>
	<div class="clear"></div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Menu") ) : ?><?php endif;?>
    <div class="clear"></div>
	<div class="Icons">
		<a href="<?php the_field('facebook_url', 4); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<a href="<?php the_field('twitter_url', 4); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		<a href="<?php the_field('google_plus_url', 4); ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
		<a href="<?php the_field('youtube_url', 4); ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
	</div>
    </div>
           
            
        </div>
        <!-- end container -->
    </footer>
	
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title"><?php the_field('sign_up_title'); ?></h4>
			  <p style="width:100%;" class="SubCount"><span><?php the_field('subscription_counter'); ?></span><?php echo " "; the_field('subscribe_text'); ?></p>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode('[mc4wp_form id="80"]'); ?>
			</div>
		  </div>
		  
		</div>
	  </div>
	
    <!-- END FOOTER -->
    <!-- Back to top -->
    <div class="scroll-indicator go-top" id="back-to-top"> <a href="#darya"><i class="fa fa-bug"></i></a></div>
    <!-- jQuery -->
    <script src="<?php bloginfo('template_url');?>/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <!-- Jquery easing -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.min.js"></script>
    <!--sticky header-->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.sticky.js"></script>
    <!-- OWL Carousel -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script>
    <!--Magnific popup-->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.magnific-popup.min.js"></script>
    <!-- contact form -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jqBootstrapValidation.js"></script>
    <!-- Particles js -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/particles.js"></script>
    <!-- Typedjs -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/typed.min.js"></script>
    <!-- Aos Animation -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/aos.js"></script>
    <!--common script for all pages-->
    <script src="<?php bloginfo('template_url');?>/js/custom.js"></script>	
    <script type="text/javascript">
    $(function() {
		
        $("head").append('<link id="skin-css" rel="stylesheet">');

        $('.skin-colors li').on('click', function() {
            $('.skins li').removeClass('active');
            $(this).addClass('active');
            $('#skin-css').attr('href', 'css/colors/' + $(this).data('skin') + '.css');
        });

    });	

		$(".animated-text").typed({
			strings: ["<?php the_field('text_no.1'); ?>", "<?php the_field('text_no.2'); ?>", "<?php the_field('text_no.3'); ?>"],
			typeSpeed: 50,
			loop: true,
		});
	
	$(".mysubbtn").click(function(){
		$( "#PopBtn" ).trigger( "click" );
	});
	
    </script>
<?php wp_footer(); ?>
</body>
</html>
