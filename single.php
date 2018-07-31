<?php 
/****************************
Theme Name:janslawncare.com
Theme URI: janslawncare.com
****************************/
 get_header(); ?>

 <!-- baner and form -->
    <section class="bannerSectionInner">
        <div class="container inner-bg">
            <div class="row banner-text-inner pT30 content">
                <span class="mT35 catHeadingSec"><?php foreach((get_the_category()) as $category) if ($category->cat_ID == 3) { ?>Latest Events<?php } else { ?>Latest Blog<?php } ?>


</span>
            </div>

        </div>
    </section>
    <!-- //banner and form -->

<div class="container blogContainer pB30">
   

  <div class="blogFullDes">


    

    <div class="blogInfoMini">
 
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <h1><?php echo the_title(); ?></h1>
            <div class="pubDate">Posted On: <?php the_time('jS F Y') ?> | Category: <a href="<?php print $_SERVER['HTTP_REFERER'];?>"><?php foreach((get_the_category()) as $category) if ($category->cat_ID == 3) { ?><a href="latest-event/">Latest Events</a><?php } else { ?><a href="latest-blog/">Blogs</a><?php } ?>
            </div>
            <div class="largeImg">
              <?php
                // Output the featured image.
                if ( has_post_thumbnail() ) :
                  if ( 'grid' == get_theme_mod( 'featured_content_layout' ) ) {
                    the_post_thumbnail();
                  } else {
                    the_post_thumbnail( 'twentyfourteen-full-width' );
                  }
                endif;
              ?>
            </div>
            <?php the_content(); ?>
            <?php next_post_link('%link', '<span class="btn btn-more btn-green pull-right">Next Post</span>', TRUE); ?>
            <?php previous_post_link('%link', '<span class="btn btn-more btn-green pull-left">Previous Post</span>', TRUE); ?>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
<div class="clear50"></div>
  </div>
</div>

<?php  get_footer(); ?>    