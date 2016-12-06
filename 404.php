<!--Get Header Function-->

<?php get_header(); ?>
	    
    <!-- Start Content -->
<div id="content" >

	<h2>Error 404</h2>
    <p>Sorry, the page you're looking for doesn't exist.</p>
    <p> You can go to the <a href="<?php bloginfo('url'); ?>">home page</a> or try a search.</p>
    <?php get_search_form();?>
        
</div>
<!-- End Content -->

<!--Get Sidebar Function-->
<?php // if page has custom field called disableSidebar = true, remove sidebar
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);
	if ($disableSidebar !== 'true') { get_sidebar(); }
?>

<!-- Apply & Donate Buttons -->
<div class="buttons">
<a class="button" href="http://www.abekeller.tzaccara.com/grants/apply/">Apply</a>

<a class="button" href="http://www.abekeller.tzaccara.com/donate/">Donate</a>
</div>

<!--Get Footer Function-->
<?php get_footer(); ?> 

