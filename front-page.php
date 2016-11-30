<!--Get Header Function-->
<?php get_header(); ?>

	<!--Begin Flexslider-->
    <?php do_action('slideshow_deploy', '127'); ?>
    <div class="herobox"><span>Welcome</span> to<br>
        the Abe Keller Peace Education Fund</div>
    <!--End Flexslider-->

    <div id="mobilehero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mobilehero.jpg" alt="Welcome to the Abe Keller Peace Education Fund" />
        <h1><span>Welcome</span> to the<br>
        Abe Keller Peace Education Fund</h1>
    </div>
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
                    <p>Any individual or group may seek financial assistance for a peace or justice education project. The Board may also solicit proposals consistent with its peace and justice education objectives</p>
                    </a>
                </div>
       		 	<div class="widget" id="ctaTwo">
                    <a href="<?php bloginfo('url'); ?>/about-the-fund"><img src="<?php echo get_template_directory_uri();?>/images/abeKeller.png" alt="About the Fund" />
                   	<h2>About the Fund</h2>
                    <p>The Abe Keller Peace Education Fund is a non-profit organization, achieving 501C(3) status in 2000. The Fund plays a unique role of providing financial support for peace and justice education in the Pacific Northwest</p>
                    </a>
                </div>
                <div class="widget" id="ctaThree">
                    <a href="<?php bloginfo('url'); ?>/donate">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/donate_icon.png" alt="Donate" />
                    <h2>Donate now</h2>
                    <p>Please help support the promotion of peace and justice by making a tax-deductible donation to the Abe Keller Peace Education Fund today!</p>
                    </a>
                </div>
</div>
    
<!--Get Footer Function-->
<?php get_footer(); ?> 