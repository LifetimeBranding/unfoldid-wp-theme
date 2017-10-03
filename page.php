<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : ?>

  <!-- Section: HERO -->
  <div class="row page-template-hero">
    <div class="col-12 mx-auto">
      <div class="text-center mt-5">
        <h1 class="text-gold header__hero mb-5"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>

  <?php the_post(); the_content(); ?>

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>