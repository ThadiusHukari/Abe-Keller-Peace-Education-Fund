<!DOCTYPE html>
<html>
<head>

    <!-- Begin JavaScript for Flexslider - Woohoo Themes -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
	
	<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
	    $('.flexslider').flexslider();
	});
	</script>
     <!-- End JavaScript for Flexslider - Woohoo Themes -->
	
	
	
    <title><?php get_my_title_tag(); ?></title>
    
    <!-- Begin Meta - Pulls from the pages Except Field -->
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <!-- End Meta -->
	
    <!--Begin Style-->
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	
    <!--End Style-->
     
    <?php wp_head(); ?>	 
    
</head>

<body <?php body_class(); ?>>

    <div id="header">
            
	<!--Begin Navigation-->
    <nav id="nav-main">
    	<h1><a href="<?php bloginfo('url'); ?>" class="logo"><span><?php bloginfo('name'); ?></span><img src=<?php echo get_template_directory_uri(); ?>/images/logo.png alt="<?php bloginfo('name'); ?>" id="logo" /></a></h1>
        <?php wp_nav_menu( array ('theme_location' => 'main-menu', 'container'=> 'div', 'container_id' => 'navigation',
            'items_wrap' => '<ul id="navigation-items" class=%2$s">%3$s</ul>', )); ?>
    </nav>
	<!--End Navigation-->
            
    </div>
    


    <!--Begin Content-->
    <div id="middle">