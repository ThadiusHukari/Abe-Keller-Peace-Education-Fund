<!--Get Header Function-->
<?php get_header(); ?>


    <!--Begin Text-->
		<div id="content">
		
		<!--The Standard loop--> 
		<?php if ( have_posts() ): while ( have_posts()):the_post(); //start the loop?>
		
		<article class="post-excerpt">
		    <h2>
			<a href="<?php the_permalink();//link to the page or posting?>">
			<?php the_title();//get the page or posting ?> </a>
		    </h2>
		    
		    <!--The Time, Author and Category FUNctions--> 
		    <small>
			Posted on <?php the_time('l, F j, Y'); ?> by
			<?php the_author(); ?> in
			<?php the_category (', '); ?> 
		    </small>

		    <!--The Post Thumbnail FUNction--> 
		    <a href="<?php the_permalink(); ?>">
		    <?php the_post_thumbnail( 'thumbnail' ); ?>
		    </a>
		    
		    <!--The Except FUNction, gets the posting's except-->
		    <?php the_excerpt(); ?>
		    
		    <p class="read-more">
			<a href="<?php the_permalink(); ?>">Read More</a>
		    </p>
		
		</article>
		
		<?php endwhile; endif; //end the loop?>
		
		<small>index.php</small>
		
		</div>
    <!--End Text-->
            
<!--Get Sidebar Function-->
<?php get_sidebar(); ?> 
	    
<!--Get Footer Function-->
<?php get_footer(); ?> 