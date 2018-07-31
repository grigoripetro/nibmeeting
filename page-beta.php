<?php

    /**
     
     * Template Name: Beta Page
     
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
					<div class="col-md-6">
						
						<div class="containeras">
							<div class="row">
								<div class="col-sm-12">
									<div class="text-centers">
										<div class="title-box-icon" data-aos="fade-up">
											<h3 style="margin-bottom:10px; color:#4e83c9;" class="title"><?php the_field('main_title'); ?></h3>
											<p style="margin-bottom:10px;" ><?php the_field('sub_title'); ?></p>
										</div>
									</div>
								</div>
							</div>
							<!-- end row -->
							<div class="row">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="col-md-12" data-aos="flip-right">
									<div class="Contente">
										<?php the_content(); ?>
										<br/>
										<br/>
									</div>
								</div>
							<?php endwhile; endif; ?>	
							</div>
						</div>
						
					</div>
                    <div class="col-md-6">
					<img src="<?php bloginfo('template_url');?>/img/4Devices-Finals.png" alt="" class="img-responsive">
                        
                    </div>
                    <!-- end col -->
					<div class="col-md-12">
						<div class="home-wrapperd home-wrapper-altd">
							<div class="BannerButtons">
								<a class="BorderButtonss" href="<?php the_field('android_app_link'); ?>"><img src="<?php bloginfo('template_url');?>/img/android.png" alt="" class="img-responsive"></a>
								<a class="BorderButtonss" href="<?php the_field('ios_link'); ?>"><img src="<?php bloginfo('template_url');?>/img/en1.png" alt="" class="img-responsive"></a>
								<a class="BorderButtonss" href="<?php the_field('web_link'); ?>"><img src="<?php bloginfo('template_url');?>/img/web.png" alt="" class="img-responsive"></a>
							</div>
                        </div>
					</div>
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
    <section id="about" class="section" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-centers">
                        <div class="title-box-icon" data-aos="fade-up">
                            <h3 style="margin-bottom:10px; color:#4e83c9;" class="title">NibMeetings</h3>
							<p style="margin-bottom:50px;" >First comprehensive mobile solution for smart meetings, focused on productivity</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-5" data-aos="flip-right">
					<div class="Contente">
						<?php the_content(); ?>
						<br/>
						<br/>
					</div>
                </div>
                <div class="col-md-7 text-center" data-aos="flip-right">
                    <div class="icon-box">
                        <i class="fa fa-fire fa-3x" aria-hidden="true"></i>
                        <h4 class="service-heading"><?php the_field('problem_two_title'); ?></h4>
                        <p class=""><?php the_field('problem_two_description'); ?></p>
                    </div>
                </div>
			<?php endwhile; endif; ?>	
            </div>
        </div>
        
    </section>
    <!-- End About -->
	<!-- End 3sep-->
  
   
<style>
	.addtoany_share_save_container.addtoany_content_bottom{display:none !Important;}
	section#home {
		background-size: cover;
		
	}
	@media (max-width: 767px){
		section#home {
			background-attachment: unset !important;
			background-size: unset;
			background-position: -938px -150px;
		}
	}
	div#particles-js {
		display: none;
	}
	.home-sm{
		padding-bottom:0 !Important;
	}
	/*section#home.home-fullscreen {
		background-image: url("/wp-content/themes/nibmeeting/img/HeadBG.jpg");
	}*/
	<?php if(!(the_field('show_menu'))) { ?>
		#navbar-menu{
			display:none !Important;
		}
	<?php } ?>
</style>



<?php  get_footer(); ?>