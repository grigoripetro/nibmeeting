<?php

    /**
     
     * Template Name: home
     
     *
     
     */
    
    get_header(); ?>
    <!-- Body Starts -->
    
	<?php 
		if($_GET['subscribed'] == 1)
		{
			$count = (int)get_field('subscription_counter'); $count++;
			update_field('subscription_counter', $count);
		}
	?>
	
    <!-- Home -->
    <section class="bg-custom home-fullscreen home" id="home">
        <div class="home-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="home-wrapper home-wrapper-alt">
							 <button id="PopBtn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                            <h1 class="h1 font-light text-white w-full"><?php the_field('welcome_meeting'); ?></h1>
                            <p class="up-type-title"><span class="animated-text"></span></p>
                            <br>
                            <div class="header-info">
                                 <?php the_field('slider_three_point'); ?>
								 
<a style="display:none;" class="subscribe-btn bannerbtn" href="http://tools.us11.list-manage.com/subscribe?u=f106e63474bac5a8de5d4e1e4&id=0f18e96938"><?php the_field('sign_up_title'); ?></a>
<a class="subscribe-btn bannerbtn mysubbtn" href="#"><?php the_field('sign_up_title'); ?></a>
<div class="clear"></div>
						<p class="SubCount"><span><?php the_field('subscription_counter'); ?></span><?php echo " "; the_field('subscribe_text'); ?></p>
                                <a href="<?php the_field('video_url'); ?>" class="pull-left video-btn btn popup-video">
                                    <i class="fa fa-play"></i><?php the_field( 'video_button_text' ); ?>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-5 text-center">
				<?php 
                              $image = get_field('header_left_side_image');
                                if( !empty($image) ): ?>
                                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive header-mobile"  />
                          <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <!-- End Home -->
    <!-- New About -->
	<!-- New 3sep -->
 <!-- About -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="title-box-icon" data-aos="fade-up">
                            <i class="fa fa-question-circle-o"></i>
                            <h3 class="title">The Problems With Meetings</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-3 text-center" data-aos="flip-right">
                    <div class="icon-box">
                        <i class="fa fa-bullhorn fa-3x" aria-hidden="true"></i>
                        <h4 class="service-heading"><?php the_field('problem_one_title'); ?></h4>
                        <p class=""><?php the_field('problem_one_description'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="flip-right">
                    <div class="icon-box">
                        <i class="fa fa-fire fa-3x" aria-hidden="true"></i>
                        <h4 class="service-heading"><?php the_field('problem_two_title'); ?></h4>
                        <p class=""><?php the_field('problem_two_description'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="flip-right">
                    <div class="icon-box">
                        <i class="fa fa fa-info-circle fa-3x" aria-hidden="true"></i>
                        <h4 class="service-heading"><?php the_field('problem_three_title'); ?></h4>
                        <p class=""><?php the_field('problem_three_description'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center" data-aos="flip-right">
                    <div class="icon-box">
                        <i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                        <h4 class="service-heading"><?php the_field('problem_four_title'); ?></h4>
                        <p class=""><?php the_field('problem_four_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- End About -->
	<!-- End 3sep-->

<section id="features" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="title-box-icon" data-aos="fade-up">
                            <i class="fa fa-lightbulb-o fa-4x"></i>
                            <h3 class="title">Why NibMeetings?</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- LEFT FEATURES -->
                <div class="col-sm-4">
                    <!-- FEATURE ONE -->
                    <div class="block text-icon-right" data-aos="slide-right">
                        <div class="text">
                            <h3><?php the_field('whynib_one_title'); ?></h3>
                            <p><?php the_field('whynib_one_description'); ?></p>
                        </div>
                        <i class="fa fa-question-circle-o"></i>
                    </div>
                    <!-- FEATURE TWO -->
                    <div class="block text-icon-right" data-aos="slide-right">
                        <div class="text">
                             <h3><?php the_field('whynib_two_title'); ?></h3>
                            <p><?php the_field('whynib_two_description'); ?></p>
                        </div>
                        <i class="fa fa-fire fa-3x"></i>
                    </div>
                </div>
                <!-- RIGHT FEATURES -->
                <div class="col-sm-4 col-sm-push-4">
                    <!-- FEATURE ONE -->
                    <div class="block text-icon-left" data-aos="slide-left">
                        <i class="fa fa fa-info-circle fa-3x"></i>
                        <div class="text">
                             <h3><?php the_field('whynib_three_title'); ?></h3>
                            <p><?php the_field('whynib_three_description'); ?></p>
                        </div>
                    </div>
                    <!-- FEATURE TWO -->
                    <div class="block text-icon-left" data-aos="slide-left">
                        <i class="fa fa-exclamation-triangle fa-3x"></i>
                        <div class="text">
                             <h3><?php the_field('whynib_four_title'); ?></h3>
                            <p><?php the_field('whynib_four_description'); ?></p>
                        </div>
                    </div>
                </div>
                <!-- PHONE IMAGE -->
                <div class="col-sm-4 col-sm-pull-4" data-aos="zoom-in">
<?php 
                              $image = get_field('why_nib_image');
                                if( !empty($image) ): ?>
                                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive feature-image"  />
                          <?php endif; ?> 

                </div>
            </div>
        </div>
    </section>
    
    <!-- screenshot -->
    <section id="screenshots" class="section">
        <!-- screenshot heading -->
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <div class="title-box-icon" data-aos="fade-up">
                        <i class="fa fa-rocket fa-4x"></i>
                        <h3 class="title">App Screenshots</h3>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end screenshot heading -->
        <div class="container">
            <div class="slider" data-aos="zoom-in">
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/01.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/02.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/03.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/04.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/05.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/06.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/07.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/08.png" alt="" class="img-responsive"></a>
                </div>
                <div class="clients-content">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/img/screenshots/09.png" alt="" class="img-responsive"></a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end screenshot -->
  
  
  
  <!-- TEAM -->
    <section id="subscribe-us" class="section">
        <!-- TEAM HEADING -->
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-box-icon" data-aos="fade-up">
                    <i class="fa fa-rocket fa-4x"></i>
                    <h3 class="title2">Subscribe</h3>
                    
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- END TEAM HEADING -->
        <div class="container">
            <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="enterprise-section">
        <h1><?php the_field('subscribe_title'); ?></h1>
        <p><?php the_field('subscribe_description'); ?></p>
<div class="clear20"></div>
<a style="display:none" href="http://tools.us11.list-manage.com/subscribe?u=f106e63474bac5a8de5d4e1e4&amp;id=0f18e96938" class="subscribe-btn"> <?php the_field('sign_up_title'); ?></a>
<a href="#" class="subscribe-btn mysubbtn"> <?php the_field('sign_up_title'); ?></a>
<div class="clear"></div>
<p class="SubCount"><span><?php the_field('subscription_counter'); ?></span><?php echo " "; the_field('subscribe_text'); ?></p>
        </div>
        </div>
        
        
            </div>
        </div>
    </section>
    <!-- END TEAM -->
    
   
    
    <!--Body Ends  -->
<?php  get_footer(); ?>