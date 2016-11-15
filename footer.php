 </div>
    <!--End Content-->
	
    
    
    <footer>
    <img src=<?php echo get_template_directory_uri(); ?>/images/logo.png alt="<?php bloginfo('name'); ?>" id="logo-footer"/>

	
	<!--Start WP Footer-->
	<?php wp_footer(); ?>
	<!--End WP Footer-->
        

    <!--Begin Navigation-->
	<?php wp_nav_menu( array ('theme_location' => 'secondary', 'container'=> 'div', 'container_id' => 'footer-nav',
	    'items_wrap' => '<ul id="footer-nav" class=%2$s">%3$s</ul>', 
                             )); ?>
	<!--End Navigation-->
    <p>PO Box 3594 Redmond, WA 98073 ~ abekellerfund@gmail.com</p>
    </footer>


</body>
</html>