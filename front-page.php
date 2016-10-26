<!--Get Header Function-->
<?php get_header(); ?>


    <!--Begin Flexslider-->
    <div  class="flexslider">
        <ul class="slides">
        </ul>
    </div>
    <!--End Flexslider-->
    
    <!--Begin Wigets-->
    <div id="widgets">
    <section class="widget-item">
	<h1>Title</h1>
	    <!--Loop One-->
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
	    <?php the_content(''); //get the home page's content ?>
	    <?php endwhile; endif; // end loop one ?>
    </section>
    
    
    <section class="widget-item">
    </section>
    
    </div>
	    
<!--Get Footer Function-->
<?php get_footer(); ?> 