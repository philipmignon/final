<?php get_header(); 
/*
Template Name: Login Page
*/
?>

<div class="login-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-xs-12">
		<?php the_content(); ?>
	</div>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>