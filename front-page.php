<!--Get Header Function-->
<?php get_header(); ?>


    <!--Begin Flexslider-->
    <div  class="flexslider">
        <ul class="slides">
            <li>
              <img src="images/black_square.jpg" />
              <p class="flex-caption"></p>
            </li>
            <li>
              <img src="images/black_square.jpg" />
              <p class="flex-caption"></p>
            </li>
            <li>
              <img src="images/black_square.jpg" />
              <p class="flex-caption"></p>
            </li>
            <li>
              <img src="images/black_square.jpg" />
              <p class="flex-caption"></p>
            </li>
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
	    
<!--Get Sidebar Function-->
<?php get_sidebar(); ?>

<!--Get Footer Function-->
<?php get_footer(); ?> 