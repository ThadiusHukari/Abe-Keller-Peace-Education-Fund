<!--Get Header Function-->

<?php get_header(); ?>
	    
    <!-- Start Content -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail();?>
    <?php the_content(''); // get written page content ?>
     </article>
	<?php endwhile; endif; ?>
    <?php get_child_pages(); ?>
        
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