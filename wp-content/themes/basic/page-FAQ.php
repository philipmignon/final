<?php get_header();
/*
Template Name: FAQ Page
*/
?>
	<div id="FAQ">
    	<div id="FAQ-heading">
        	Frequently Asked Questions (FAQ)
        </div>
    	<?php $query = new WP_Query( 'category_name=FAQ' );
		if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="FAQ-section">
            <div class="FAQ-title">
                <?php the_title(); ?>
            </div>
            <div class="FAQ-info">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; else: ?>
    		<p>Sorry, no FAQs matched your criteria.</p>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>