<?php





if(function_exists('register_sidebar'))

      register_sidebar(array(

      'name' => 'left', // The sidebar name to register

      'before_widget' => '<div class="widget">',

      'after_widget' => '</div>',

      'before_title' => '<h2>',

      'after_title' => '</h2>',

 ));





function top_nav() {

    add_theme_support( 'menus' );

}

add_action( 'after_setup_theme', 'top_nav' );


add_theme_support( 'post-thumbnails' );

next_posts_link();

previous_posts_link();

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Menu',
    'before_widget' => '<div class = "footMenu">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));




/**

 * Remove feed links from wp_head

 */

function wpse33072_wp_head()

{

    remove_action( 'wp_head', 'feed_links', 2 );

    remove_action( 'wp_head', 'feed_links_extra', 3 );

}

add_action( 'init', 'wpse33072_kill_feed_endpoint', 99 );

/**

 * Remove the `feed` endpoint

 */

function wpse33072_kill_feed_endpoint()

{

    // This is extremely brittle.

    // $wp_rewrite->feeds is public right now, but later versions of WP

    // might change that

    global $wp_rewrite;

    $wp_rewrite->feeds = array();

}

foreach( array( 'rdf', 'rss', 'rss2', 'atom' ) as $feed )

{

    add_action( 'do_feed_' . $feed, 'wpse33072_remove_feeds', 1 );

}

unset( $feed );

/**

 * prefect actions from firing on feeds when the `do_feed` function is 

 * called

 */

function wpse33072_remove_feeds()

{

    // redirect the feeds! don't just kill them

    wp_redirect( home_url(), 302 );

    exit();

}

register_activation_hook( __FILE__, 'wpse33072_activation' );

/**

 * Activation hook

 */

function wpse33072_activation()

{

    wpse33072_kill_feed_endpoint();

    flush_rewrite_rules();

}



if(function_exists('register_sidebar'))

      register_sidebar(array(

      'name' => 'social', // The sidebar name to register

      'before_widget' => '<div class="widget">',

      'after_widget' => '</div>',

      'before_title' => '<h2>',

      'after_title' => '</h2>',

 ));

