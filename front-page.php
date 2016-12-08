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
    
    <!--Get Sidebar2 with Calls to Action-->    
    <div class="widget" id="ctas">
            <?php dynamic_sidebar(2); //call the widgets ?>
    </div>
    <!--End Sidebar2-->

<!--Get Footer Function-->
<?php get_footer(); ?> 