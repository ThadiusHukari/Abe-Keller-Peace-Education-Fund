<!--Get Header Function-->
<?php get_header(); ?>


    <!--Begin Text-->
		<div id="content">
		
		<!--The Standard loop--> 
		<?php if ( have_posts() ): while ( have_posts()):the_post(); //start the loop?>
		
		<article class="post-excerpt">
		    <!--The Post Thumbnail FUNction--> 
		    <h2>
			<a href="<?php the_permalink();//link to the page or posting?>">
			<?php the_title();//get the page or posting ?> </a>
		    </h2>
		    
		    <!--The Time, Author and Category FUNctions--> 
		    <!--<small>
			Posted on <?php the_time('F j, Y'); ?>
		    </small>-->
            
            <a href="<?php the_permalink(); ?>">
		    <?php the_post_thumbnail( 'thumbnail' ); ?>
		    </a>

		    <!--The Except FUNction, gets the posting's except-->
		    <?php the_excerpt(); ?>
		    
		    <p class="read-more">
			<a href="<?php the_permalink(); ?>">Read More</a>
		    </p>
		
		</article>
       	<?php endwhile; ?>
		
		<nav class="post-nav">
            <p class="alignleft"><?php previous_posts_link('&laquo; Previous posts') ?></p>
            <p class="alignright"><?php next_posts_link('Recent posts &raquo;') ?></p>
		</nav>
		<?php endif; //end the loop?>
		
		</div>
    <!--End Text-->
	    
<!--Get Sidebar Function-->
<?php get_sidebar(); ?>

<!-- Apply & Donate Buttons -->
<div clas="buttons">
<a class="button" href="http://www.abekeller.tzaccara.com/grants/apply/">Apply</a>

<a class="button" href="http://www.abekeller.tzaccara.com/donate/">Donate</a>
</div>

<!--Get Footer Function-->
<?php get_footer(); ?> 