 </div>
    <!--End Content-->
	
    
    
    <footer>

	
	<!--Start WP Footer-->
	<?php wp_footer(); ?>
	<!--End WP Footer-->
        

    <!--Begin Navigation-->
	<?php wp_nav_menu( array ('theme_location' => 'secondary', 'container'=> 'div', 'container_id' => 'footer-nav',
	    'items_wrap' => '<ul id="footer-nav" class=%2$s">%3$s</ul>', 
                             )); ?>
	<!--End Navigation-->
    </footer>


</body>
</html>