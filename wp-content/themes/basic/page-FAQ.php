<?php get_header();
/*
Template Name: FAQ Page
*/
?>

<?php $args = array(
        'posts_per_page' => '2',
        'cat' => 'FAQ',
        'post_type' => 'post',
        'orderby' => 'title',
    	);
		$query = new WP_Query( 'category_name=FAQ' );
		if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>


    <?php the_title(); ?>
    <?php the_content(); ?>


<?php endwhile; else: ?>
    <p>Sorry, no FAQs matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>