<?php

    /**
     * Template Name: Privacy template
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
<div class="container innerText">
	<h1><?php the_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>	
</div>

<?php  get_footer(); ?>