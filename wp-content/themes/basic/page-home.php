<?php get_header();
/*
Template Name: Home Page
*/
?>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
	<?php $bargs = array('post_type'=>'carousel'); ?>
    <?php 
      $carousels = new WP_Query( $bargs );
      if ($carousels->have_posts()) : while ($carousels->have_posts()) : $carousels->the_post(); 
    ?>
    <div class="item <?php the_field('display');?>">
      <img class="<?php the_field('position');?>-slide" src="<?php the_field('image');?>" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php the_field('heading');?></h1>
          <p><?php the_field('sub-heading');?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php the_field('link');?>" role="button"><?php the_field('button_caption');?></a></p>
        </div>
      </div>
    </div>
	<?php endwhile; else: ?>
        <p>Sorry, no hero images matched your criteria.</p>
    <?php endif; ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Carousel -->

<?php get_footer(); ?>

