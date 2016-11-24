<!--Get Header Function-->
<?php get_header(); ?>

	<!--Begin Flexslider-->
    <?php do_action('slideshow_deploy', '127'); ?>
    <div class="herobox"><span>Welcome</span> to<br>
        the Abe Keller Peace Education Fund</div>
    <!--End Flexslider-->
    
    <!-- START CONTENT -->
    <div id="content" class="seo">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>">    
                <?php the_content('<p class="serif">More &raquo;</p>'); ?>
            </div> 
        <?php endwhile; endif; ?>  
    </div>
	<!-- END CONTENT -->
    
    <!--Begin Wigets-->
    <div class="ctacontainer">
    
    			<div class="widget" id="ctaOne">
                    <a href="<?php bloginfo('url'); ?>/apply">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/apply_icon.png" alt="Apply now" />
                   	<h2>Apply for a grant</h2>
                    <p>Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae</p>
                    </a>
                </div>
       		 	<div class="widget" id="ctaTwo">
                    <a href="<?php bloginfo('url'); ?>/about-the-fund">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/abeKeller.png" alt="About the Fund" />
                   	<h2>About the Fund</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
                    </a>
                </div>
                <div class="widget" id="ctaThree">
                    <a href="<?php bloginfo('url'); ?>/donate">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/donate_icon.png" alt="Donate" />
                    <h2>Donate now</h2>
                    <p>Ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper</p>
                    </a>
                </div>
    
<!--Get Footer Function-->
<?php get_footer(); ?> 