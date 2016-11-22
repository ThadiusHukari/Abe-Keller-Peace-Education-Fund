<!--Get Header Function-->

<?php get_header(); ?>
	    
    <!-- Start Content -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(''); // get written page content ?>
     </article>
	<?php endwhile; endif; ?>
    <?php get_child_pages(); ?>
        
</div>
<!-- End Content -->

<!-- Apply & Donate Buttons -->
<div clas="buttons">
<a class="button" href="http://www.abekeller.tzaccara.com/grants/apply/">Apply</a>

<a class="button" href="http://www.abekeller.tzaccara.com/donate/">Donate</a>
</div>

<!--Get Sidebar Function-->
<?php get_sidebar(); ?>

<!--Get Footer Function-->
<?php get_footer(); ?> 