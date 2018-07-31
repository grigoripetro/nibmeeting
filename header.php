 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta name="google-site-verification" content="yUM1grBYNvOzNi7Z7Oqh6l_pxaPxsgnPla_02vCKD74" /> 
    <title><?php if ( is_home() ) { ?><?php bloginfo('description'); ?><?php } ?>
        <?php if ( is_search() ) { ?><?php echo $s; ?> <?php } ?>
        <?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } ?>
        <?php if ( is_page() ) { ?><?php wp_title(''); ?> <?php } ?>
        <?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> <?php } ?>
        <?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?><?php } ?>
        <?php if ( is_tag() ) { ?><?php single_tag_title();?> <?php } ?>
        <?php if ( is_404() ) { ?>Sorry, not found! <?php } ?>
  </title>
 <?php wp_head(); ?>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>    
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/magnific-popup.css">
    <!-- Aos Animation 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/aos.css">-->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <!-- Color style -->
    <!-- <link href="css/colors/pink.css" rel="stylesheet" id="color-opt"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    <!-- Favicon  -->
    <link rel="icon" href="img/favicon.ico">
    <!-- Skin switcher -->
    <!-- Manually link your desire skin -->
    <style type="text/css">
    .skins {
        position: fixed;
        top: 190px;
        left: -222px;
        transition: .3s ease-in-out;
        z-index: 1000;
    }
    
    .skins:hover {
        left: 0;
    }
    
    .skin-colors {
        list-style: none;
        padding: 20px;
        margin: 0;
        background-color: #fff;
        width: 222px;
        border: 1px solid #e7e7e7;
    }
    
    .skin-colors li {
        position: relative;
        display: inline-block;
        width: 34px;
        height: 34px;
        cursor: pointer;
        margin: 4px;
        transition: .3s ease-in-out;
    }
    
    .skin-colors li:hover {
        opacity: .7;
    }
    
    .skin-colors li.active::before {
        content: "\f00c";
        font-family: FontAwesome;
        font-size: 20px;
        width: 34px;
        line-height: 34px;
        text-align: center;
        position: absolute;
        color: #fff;
    }
    
    .skin-toggler {
        position: absolute;
        display: inline-block;
        width: 50px;
        height: 50px;
        right: -49px;
        top: 0;
        background-color: #fff;
        font-size: 30px;
        text-align: center;
        line-height: 50px;
        color: #888;
        border: 1px solid #e7e7e7;
        border-left: 0;
    }
    </style>
      

</head>

<body data-spy="scroll" data-target="#navbar-menu" id="darya" <?php if (!is_front_page()) body_class('innerPage'); ?><?php if (is_front_page()) body_class('mainPage'); ?>>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Navbar -->
    <div class="navbar navbar-custom sticky" role="navigation" id="sticky-nav">
        <div class="container">
            <!-- Navbar-header -->
            <div class="navbar-header">
                <!-- Responsive menu button -->
                <button hidden id="PopupBox" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="logo" href="http://nibmeetings.com/">
			 <?php 
                              $image = get_field('logo', 4);
                                if( !empty($image) ): ?>
                                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="navbar-brand img-responsive"  />
                          <?php endif; ?>

                </a>
            </div>
            <!-- end navbar-header -->
            <!-- menu -->
            <div class="navbar-collapse collapse" id="navbar-menu">
                <!-- Navbar left -->
		<?php wp_nav_menu(array('container'=>false, 'menu'=>'header-menu', 'items_wrap' => '<ul class="nav navbar-nav nav-custom-left pull-right"><li id="item-id" class="nav-link"><a href=""></a></li>%3$s</ul>'));?>	
                
                <!-- Navbar right -->
               
            </div>
            <!--/Menu -->
        </div>
        <!-- end container -->
    </div>
    <!-- End navbar-custom -->
