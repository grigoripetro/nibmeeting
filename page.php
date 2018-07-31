<?php 
/****************************
Theme Name:    janslawncare.com
Theme URI: janslawncare.com
Description: janslawncare; This theme is not for public use and have exclusive rights by janslawncare.com.
Version: 1.0.1 (released 2016-07-17)
Author: Manoj K. Sharma
Author URI: designer.manojk@gmail.com
****************************/
 get_header(); ?>
 
 <!-- baner and form -->
    <section class="bannerSectionInner">
        <div class="container">
            <div class="row banner-text-inner">
                <h1 class="mT35"><?php the_title(); ?></h1>
            </div>

        </div>
    </section>
    <!-- //banner and form -->




<!-- #############  need Loop  here ###################-->
    <!-- Location -->
    <section class="locationSection welcome">
        <div class="container">
            <div class="row mB15 mT15">
                <div class="row mB15 mT10">
                    <div class="col-md-9">
                        <h4>Popular Car Rental Locations in - <?php the_title(); ?></h4>
                        <p class="p_tagline">Top Car Rental locations</p>
                    </div>
                    
                </div>
                <div id="" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                               
                             <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo"> <!-- ##### For Image #### -->  
                                    <?php 

                                    $image = get_field('image_one');

                                    if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-9">
                                                    <h5><?php the_field('heading_one'); ?></h5>
                                                    <p class="price-text-color"><?php the_field('sub_heading_one'); ?></p>
                                                </div>
                                                <div class="rating col-md-3">
                                                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/btn_arrow.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo"> <!-- ##### For Image #### -->  
                                    <?php 

                                    $image = get_field('image_two');

                                    if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-9">
                                                    <h5><?php the_field('heading_two'); ?></h5>
                                                    <p class="price-text-color"><?php the_field('sub_heading_two'); ?></p>
                                                </div>
                                                <div class="rating col-md-3">
                                                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/btn_arrow.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">  <!-- ##### For Image #### -->  
                                    <?php 

                                    $image = get_field('image_three');

                                    if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-9">
                                                    <h5><?php the_field('heading_three'); ?></h5>
                                                    <p class="price-text-color"><?php the_field('sub_heading_three'); ?></p>
                                                </div>
                                                <div class="rating col-md-3">
                                                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/btn_arrow.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">  <!-- ##### For Image #### -->  
                                    <?php 

                                    $image = get_field('image_four');

                                    if( !empty($image) ): ?>

                                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>

                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-9">
                                                    <h5><?php the_field('heading_four'); ?></h5>
                                                    <p class="price-text-color"><?php the_field('sub_heading_four'); ?></p>
                                                </div>
                                                <div class="rating col-md-3">
                                                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/btn_arrow.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Location -->


  
<?php  get_footer(); ?>    