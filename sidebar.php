<!--Begin Sidebar -->
<div id="sidebar">  
<!--Begin Subnavigation-->
    <div id="sub-navigation" class="widget">
        <!--The Is Page Function-->
		<?php if (is_page())://if we are in pages...?>
		
	<!--The Get Title and List Page Functions-->
        <h3 class="sub-navigation-title">
            <?php echo get_the_title($post->post_parent); //get the gateway page title
	    ?>
        </h3>
        
        <ul class="sub-navigation-items">
            <?php
                if ($post->post_parent)
		{ //if the page has a parent...
		    
                    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
                    //...then list the subpages w/ no title
		    
                } else { // if the page does not have a parent....
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
                    //...list the subpages with no title
                }
            ?>
        </ul>
        <?php endif; // end if we are in pages ...?>
        
	
        <?php if(!(is_page( ))) : // if we are not in pages... ?>
			<h3 class="sub-navigation-title">News</h3>
			<ul class="sub-navigation-items">
				<!--List Latest Posts-->
	        <?php $args = array( 'numberposts' => '5' );
				  $recent_posts = wp_get_recent_posts( $args );
				  foreach( $recent_posts as $recent ){
				  echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent[		"post_title"].'</a> </li> ';
	}
	wp_reset_query();?>
                    
                    
                    
                    
                    
	<?php endif; ?> 
				
			</ul>
    </div>
<!--End Subnavigation-->

<!--Begin Quote-->
    <?php if (get_post_meta($post->ID, 'Quote', true)):
	//check to see if there is a quote
    ?>
    <blockquote>
	<?php echo get_post_meta($post->ID, 'Quote', true);
	    //write the quote
	?>
    </blockquote>
    
    <?php endif; ?>
<!--End Quote-->

</div>
<!--End Sidebar -->