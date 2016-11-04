<!--Get Header Function-->
<?php get_header(); ?>

	<!--Begin Flexslider-->
    <?php do_action('slideshow_deploy', '127'); ?>
    <!--End Flexslider-->
    
    <!--Begin Wigets-->
    <div class="ctacontainer">
       		 	<div class="widget" id="ctaOne">
                    <a href="<?php bloginfo('url'); ?>/about-the-fund">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/square300.png" alt="Square1" />
                   	<h2>About the Fund</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
                    </a>
                </div>
         
                <div class="widget" id="ctaTwo">
                    <a href="<?php bloginfo('url'); ?>/apply">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/square300.png" alt="Square2" />
                   	<h2>Apply for a grant</h2>
                    <p>Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae </p>
                    </a>
                </div>
                
                <div class="widget" id="ctaThree">
                    <a href="<?php bloginfo('url'); ?>/donate">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/square300.png" alt="Square3" />
                    <h2>Donate now</h2>
                    <p>Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
                    </a>
                </div>
     


<!--Get Footer Function-->
<?php get_footer(); ?> 