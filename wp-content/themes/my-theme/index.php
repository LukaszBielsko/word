<?php get_header(); 

  while(have_posts()){
    the_post(); ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
    <hr>
    <p><?php the_content();?></p>
    <hr>
      <?php
      echo get_stylesheet_uri();
      ?>
  <?php
  }
  get_footer();
?>

