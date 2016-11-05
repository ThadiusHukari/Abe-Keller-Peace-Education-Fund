<?php
/*
Theme Name: Abe Keller Peace Fund
Author: Alycia Cahill
Author URI: www.alyciacahill.com
Description: Theme for Abe Keller Peace Education FUNd
Version: 1.0
*/

//Create Post thumbnails
add_theme_support( 'post-thumbnails' );


function get_child_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt  
		$childImg = wp_get_attachment_url(get_post_thumbnail_id($post->ID )); // post img      	
		
		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<img src=" '.$childImg. '" class="gateway">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.'</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'"></a></p>';
		echo '</article>';
        
	endwhile;
	
	wp_reset_query(); // reset query
        
}

//Get My Title Tag
function get_my_title_tag(){
    
    global $post;
    
    if ( is_front_page() ){ //for site's front page
        
        bloginfo('description'); //retrieve the site tagline
        
    }
    
    elseif ( is_page() || is_single()){ //for site's Pages or Postings 
        
        the_title(); //retrieve the page or posting title
        
    }
    
    else{ //for everything else
        
        bloginfo('description'); //retrive the sites tagline 
        
    }
    
    if ($post->post_parent){ //for your site's parent pages aka category 
        echo ' | '; //seperator
        echo get_the_title($post->post_parent); //retrive the parent title 
    }
    
    
    //this is for everypage 
    echo ' | '; //seperator
    bloginfo('name'); //retrive the site name
    echo ' | '; //seperator
    echo 'Seattle, WA'; 
}
// Enables excepts for pages, allows us to pull excerpt from all pages and postings
add_post_type_support('page', 'excerpt' );
//Register Sidedar 
register_sidebar(array (  
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>', 
));
//
//register my menu 
register_nav_menus(array(
    'main-menu' => __ ('Main'), 
    'secondary' => __ ('Footer-menu')
));
//

//
?>