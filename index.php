<?php get_header(); ?>

<main id="main-content">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part('templates/content', get_post_type());
    endwhile;
  else :
    echo '<p>Nenhum conteúdo encontrado.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>