 </div>
    <!--End Content-->
	
    
    
    <footer>
    <img src="http://localhost:8888/wordpress/wp-content/themes/Abe-Keller-Peace-Education-Fund/images/logo.png"  alt="Logo" id="logo-footer"/>

	
	<!--Start WP Footer-->
	<?php wp_footer(); ?>
	<!--End WP Footer-->
        

    <!--Begin Navigation-->
	<?php wp_nav_menu( array ('theme_location' => 'secondary', 'container'=> 'div', 'container_id' => 'footer-nav',
	    'items_wrap' => '<ul id="footer-nav" class=%2$s">%3$s</ul>', 
                             )); ?>
	<!--End Navigation-->
    <p>Wilda Luttermoser PO Box 3594 Redmond, WA 98073 ~ abekellerfund@gmail.com</p>
    </footer>


</body>
</html>