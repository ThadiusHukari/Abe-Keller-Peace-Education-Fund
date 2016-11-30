<!--Get Header Function-->
<?php get_header(); ?>
	    
    <!--Begin Text-->
		<div id="content">
		    <?php if ( have_posts() ): while ( have_posts()):the_post(); //start the loop?>
		    
			<article id="post-<?php the_ID(); ?>" class="post">
			<h2>
			    <a href="<?php the_permalink();//link to the page or posting?>">
			    <?php the_title();//get the page or posting ?>
			    </a>
			</h2>
			
			<!--Begin Byline with time, author and category-->
			<small>
			    Posted on <?php the_time ('F j, Y'); ?> by
			    <?php the_author (); ?> in
			    <?php the_category(', '); ?>
			</small>
			<!--End Byline-->
			
			<?php the_post_thumbnail();//get the featured image ?>
			
			<?php the_content(''); //get the page or posting written content ?>
			<?php endwhile; endif; //end the loop ?>
		    
		    </article>
		    <!--<small>single.php</small>-->
		</div>
    <!--End Text-->
	    
<!--Get Sidebar Function-->
<?php get_sidebar(); ?>

<!--Get Footer Function-->
<?php get_footer(); ?> 