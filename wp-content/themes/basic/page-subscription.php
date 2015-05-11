<?php get_header();
/*
Template Name: Subscription Page
*/
?>

	<div id="Subscription">
    <div class="row">
    <div class="col-xs-2">
    </div>
    <div class="col-xs-8">
    	<?php $query = new WP_Query( 'category_name=Subscription' );
		if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="col-xs-6">
        <div class="Subscription-section">
            <div class="Subscription-title">
                <?php the_title(); ?>
            </div>
            <div class="Subscription-info">
                <?php the_content(); ?>
            </div>
        </div>
        </div>
        <?php endwhile; else: ?>
    		<p>Sorry, no FAQs matched your criteria.</p>
		<?php endif; ?>
        <div class="clear"></div>
    </div>
    <div class="col-xs-2">
    </div>
    </div>
    <div class="row">
    <div class="col-xs-4">
    </div>
    <div class="col-xs-4">
        <a href="<?php bloginfo('url'); ?>/my-account/">
            <div class="get-started">
                Click Here to Get Started
            </div>
        </a>
    </div>
    <div class="col-xs-4">
    </div>
    </div>
	</div>


<?php get_footer(); ?>