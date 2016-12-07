<!DOCTYPE html>
<html>
<head>
    <title><?php get_my_title_tag(); ?></title>
    
    <!-- Begin Meta - Pulls from the pages Except Field -->
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <meta name="viewport" content="width=device-width">
    <!-- End Meta -->
	
    <!--Begin Style-->
    	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	
    <!--End Style-->
     
    <?php wp_head(); ?>	 
</head>

<body <?php body_class(); ?>>

    <div id="header">
        
    <img id="mobiledove" src="<?php echo get_template_directory_uri(); ?>/images/mobiledove.png"/>
                
    <a href="<?php bloginfo('url'); ?>" class="logo"><img src=<?php echo get_template_directory_uri(); ?>/images/logo.png alt="<?php bloginfo('name'); ?>" id="logo" /></a>
        
    <h1>Abe Keller Peace Education Fund</h1>
    <nav id="utilities">
        <div class="utility" id="utltylft">
            <a href="<?php bloginfo('url'); ?>/join-mail-list"><img src=<?php echo get_template_directory_uri(); ?>/images/mail-logoandword.png alt="envelope graphic"/></a>
        </div>
        <div class="utility" id="utltyrgt">
            <a href="https://www.facebook.com/Abe-Keller-Peace-Education-Fund-204425039587193/"><img src=<?php echo get_template_directory_uri(); ?>/images/fb-logoandword.png alt="facebook f logo"/></a>
        </div>
        
    </nav>

        
    <!--Begin Primary Navigation-->  
        
        
    <button id="menubtn" onclick="myMenu()">&#9776; menu</button>
    <nav id="nav-main">
        <?php wp_nav_menu( array ('theme_location' => 'main-menu', 'container'=> 'div', 'container_id' => 'navigation',
            'items_wrap' => '<ul id="navigation-items" class=%2$s">%3$s</ul>', )); ?>
    </nav>
    
    <script>
        function myMenu() {
            var x = document.getElementById('nav-main');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
            }
        }
    </script>
	<!--End Navigation-->  
    </div>
        
    <!--Begin Content-->
    <div id="middle">
    
    <!--Breadcrumbs Start-->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </div>
    <!--Breadcrumbs End-->