<?php get_header(); ?>
  <!-- Section: HERO -->
  <div class="row page-template-hero">
    <div class="col-12 mx-auto">
      <div class="text-center mt-5">
        <h1 class="text-navy header__hero mb-5">404</h1>
        <h1 class="text-gold font__halcom">Page does not exist </h1>
      </div>
    </div>
  </div>

  <?php the_post(); the_content(); ?>

<?php get_footer(); ?>