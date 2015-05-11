<?php get_header();
/*
Template Name: Dessert Gallery Page
*/
?>

<div class="gallery">
    <div class="col-xs-4">
        <h1 id="gallery-title"><?php the_title(); ?></h1>
        <div class="col-xs-12 gallery-selections">
			<?php $bargs = array('post_type'=>'selection', 'posts_per_page'=>'5', 'orderby'=>'rand'); ?>
            <?php 
              $selections = new WP_Query( $bargs );
              if ($selections->have_posts()) : while ($selections->have_posts()) : $selections->the_post(); 
            ?>
        	<a href="<?php bloginfo('url'); ?><?php the_field('selection_link');?>">
                <div class="gallery-selection-image">
                	<div class="gallery-selection-name">
                        <h3><?php the_field('selection_name');?></h3>
                    </div>
                    <img src="<?php the_field('selection_image');?>" alt="Gallery Selections">
                </div>
            </a>
			<?php endwhile; else: ?>
                <p>Sorry, no other galleries are available.</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-xs-8 gallery_post">
        <?php $args = array(
        'posts_per_page' => '20',
        'product_cat' => 'dessert',
        'post_type' => 'product',
        'orderby' => 'title',
    	);
		$query = new WP_Query( $args );
		if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post();
		echo '<div class="col-xs-4 product_gallery">';
		echo '<a rel="' .get_permalink(). '" href="' .get_permalink(). ' ">'; the_post_thumbnail( 'medium' );
		echo '</a>';
		echo '</div>';
		endwhile;
		endif;
		wp_reset_postdata();
	?>
    </div>
</div>
<?php get_footer(); ?>

