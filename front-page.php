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
	<h1>Latest Postings</h1>
	<ul>
	    <!--Loop Two-->
	    <?php rewind_posts(); //stop loop one ?>
	    <?php query_posts('showposts=4')//give directions to loop two ?>
	    <?php while( have_posts() ) : the_post(); // start loop two ?>
	    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	    <?php endwhile; //end loop two ?> 
	</ul>
    </section>
    
    <section class="widget-item">
    </section>
    
    </div>
	    
<!--Get Footer Function-->
<?php get_footer(); ?> 