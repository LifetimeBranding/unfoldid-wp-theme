<?php
get_header();
?>

<?php
  $eventsActive = isset($_GET['events']);
  $category = $eventsActive ? 9 : 3 ; // events post ID : blog post ID
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $query_args = array (
    'category__in' => $category,
    'paged' => $paged,
    'posts_per_page' => 3
  );

  $the_query = new WP_Query( $query_args ); 
?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <!-- Section: Most Recent Blog Post -->
  <?php if ($the_query->current_post === 0) : ?>

<!-- First blog post doubles as HERO -->
<div class="row blog-hero pink" style="background-image: url('<?php echo wp_get_attachment_url(the_post_thumbnail_url()); ?>')">
  <div class="col-12 mx-auto">
    <div class="text-center mt-5 mb-5">
      <h1 class="text-gold header__hero mb-5">Updates <span class="text-small font__halcom d-block py-3">and</span> events</h1>
      <button class="button__white-gold <?php if (!$eventsActive) echo 'btn__blog--active' ?>" onclick="location.href = '?posts'">blog</button>
      <button class="button__navy-white text-pink <?php if ($eventsActive) echo 'btn__blog--active' ?>" onclick="location.href = '?events'">events</button>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-12 py-5">
    <div class="mx-auto text-center">
    <h1><?php the_title() ?></h1>
    <hr class="hr__decorator--underline gold">
    <span>blog | <?php echo the_time('F j, Y') ?> | <?php the_time() ?> | <?php comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
    <div class="m-5 mx-auto" style="max-width: 800px">
    <div class="text-darkgray mx-auto">
        <?php the_excerpt(); ?>
</div>
    </div>
    <button class="button__navy-gold text-white px-5" data-toggle="modal" data-target="#modal-blog-post-<?php echo $the_query->current_post?>" title="Coming Soon">read more</button>
    </div>
  </div>
</div>

<!-- BLOG POST CONTENT -->
<div class="modal fade" id="modal-blog-post-<?php echo $the_query->current_post ?>">
<div class="modal-dialog modal-lg" role="document" style="padding-top: 0px">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title mx-auto"> <?php the_title() ?> </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
  </div>
  <div class="modal-body">
    <div style="max-height: 700px; overflow: scroll" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content() ?>
    </div>
  </div>
  <div class="modal-footer">
  <span><?php echo the_time('F j, Y') ?> | <?php the_time() ?> | <?php comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
</div>
</div>
</div>
</div>
  <?php endif; ?>

  <!-- Section: Second Most Recent Blog Post -->
  <?php if ($the_query->current_post === 1): ?>
  <div class="row">
  <div class="col-sm-12 col-md-4 p-0" style="background-image: url('<?php echo wp_get_attachment_url(the_post_thumbnail_url()); ?>'); background-size: cover; min-height: 500px;">
    
    </div>
  <div class="col-sm-12 col-md-8 gold">
    <div class="mx-auto text-center text-white py-5">
    <h1><?php echo the_title() ?></h1>
    <hr class="hr__decorator--underline white">
    <span>blog | <?php echo the_time('F j, Y'); ?> | <?php echo the_time() ?> | <?php echo comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
    <div class="my-5" >
    <div class="text-white mx-auto" style="max-width: 700px">
      <?php echo the_excerpt(); ?>
    </div>
</div>
    <button class="button__white-navy text-darkgray px-5" data-toggle="modal" data-target="#modal-blog-post-<?php echo $the_query->current_post?>" title="Coming Soon">read more</button>
    </div>
  </div>
</div>
<!-- BLOG POST CONTENT -->
<div class="modal fade" id="modal-blog-post-<?php echo $the_query->current_post ?>">
<div class="modal-dialog modal-lg" role="document" style="padding-top: 0px">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title mx-auto"> <?php the_title() ?> </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
  </div>
  <div class="modal-body">
    <div style="max-height: 700px; overflow: scroll" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content() ?>
    </div>
  </div>
  <div class="modal-footer">
  <span><?php echo the_time('F j, Y') ?> | <?php the_time() ?> | <?php comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
</div>
</div>
</div>
</div>
  <?php endif;?>

  <!-- Section: Third Most Recent Blog Post -->
  <?php if ($the_query->current_post === 2): ?>

  <div class="row">
  <div class="col-12 py-5">
    <div class="mx-auto text-center text-darkgray">
    <div class="mw-100" style="overflow: hidden">
    <img src="<?php echo wp_get_attachment_url(the_post_thumbnail_url()); ?>" width="1366" style="pb-5" alt="Featured image">
</div>
    <h1 class="mt-5"><?php echo the_title() ?></h1>
      <hr class="hr__decorator--underline gold">
      <span>blog | <?php echo the_time('F j, Y'); ?> | <?php echo the_time() ?> | <?php echo comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
      <div class="m-5 mx-auto" style="max-width: 800px">
        <?php echo the_excerpt(); ?>
      </div>
      <button class="button__navy-gold text-white px-5" data-toggle="modal" data-target="#modal-blog-post-<?php echo $the_query->current_post?>" title="Coming Soon">read more</button>
    </div>
  </div>
</div>

<!-- BLOG POST CONTENT -->
<div class="modal fade" id="modal-blog-post-<?php echo $the_query->current_post ?>">
<div class="modal-dialog modal-lg" role="document" style="padding-top: 0px">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title mx-auto"> <?php the_title() ?> </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
  </div>
  <div class="modal-body">
    <div style="max-height: 700px; overflow: scroll" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content() ?>
    </div>
  </div>
  <div class="modal-footer">
  <span><?php echo the_time('F j, Y') ?> | <?php the_time() ?> | <?php comments_number( '0 comments', '1 comment', '% responses' ); ?></span>
</div>
</div>
</div>
</div>
  <?php endif;?>

<?php endwhile; ?>


<div class="row">
<div class="col-12 mx-auto text-center">
<?php previous_posts_link( '&laquo; Prev' ); ?> 
<?php next_posts_link( 'Next &raquo;', $the_query->max_num_pages ); ?>

<?php wp_reset_postdata(); ?>
</div>
</div>

<?php get_footer() ?>