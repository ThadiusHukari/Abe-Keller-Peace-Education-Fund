<!DOCTYPE html>
<html>
<head>
    <title><?php get_my_title_tag(); ?></title>
    
    <!-- Begin Meta - Pulls from the pages Except Field -->
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <!-- End Meta -->
	
    <!--Begin Style-->
    	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	
    <!--End Style-->
     
    <?php wp_head(); ?>	 
    
</head>

<body <?php body_class(); ?>>

    <div id="header">

    <a href="<?php bloginfo('url'); ?>" class="logo"><img src=<?php echo get_template_directory_uri(); ?>/images/logo.png alt="<?php bloginfo('name'); ?>" id="logo" /></a>
        
    <h1>Abe Keller Peace Education Fund</h1>
    <nav id="utilities">
        <div class="utility" style="width: 65%;">
            <a href="#"><img src=<?php echo get_template_directory_uri(); ?>/images/mail.png alt="envalope graphic"/>join the mailing list</a>
        </div>
        <div class="utility" style="width: 35%;">
            <a href="https://www.facebook.com/Abe-Keller-Peace-Education-Fund-204425039587193/"><img src=<?php echo get_template_directory_uri(); ?>/images/facebook.png alt="facebook f logo"/>facebook</a>
        </div>
    </nav>
        
    <!--Begin Primary Navigation-->  
    <nav id="nav-main">
        <?php wp_nav_menu( array ('theme_location' => 'main-menu', 'container'=> 'div', 'container_id' => 'navigation',
            'items_wrap' => '<ul id="navigation-items" class=%2$s">%3$s</ul>', )); ?>
    </nav>
	<!--End Navigation-->
            
    </div>
    
    <!--Begin Content-->
    <div id="middle">