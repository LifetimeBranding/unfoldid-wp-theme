<?php
get_header();
?>

<!-- Section: Packages -->
<div class="row" id="section__getunfoldid-packages">
  <div class="col-12">
    <div class="owl-carousel owl-theme owl-loaded text-white my-5">
      <?php get_template_part('content', 'package-carousel'); ?>
    </div>
</div>
</div>

<!-- Section: Step 1 -->
<div class="row gold" id="section__getunfoldid-step-1">
  <div class="col-12 text-center text-white">
    <div class="mx-auto py-5 my-lg-5">
      <h1 class="bigger text-white">1</h1>
      <hr class="hr__decorator--underline white">
      <h2><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-1-heading', true ); ?></h2>
      <p style="max-width: 700px" class="mx-auto">
        <?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-1-copy', true ); ?>
      </p>
    </div>
  </div>
</div>

<!-- Section: Step 2 -->
<div class="row navy" id="section__getunfoldid-step-2">
  <div class="col-12 text-center text-white">
    <div class="mx-auto py-5 my-lg-5">
      <h1 class="bigger text-white">2</h1>
      <hr class="hr__decorator--underline white d-inline-block">
      <hr class="ml-1 hr__decorator--underline white d-inline-block">
      <h2><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-2-heading', true ); ?></h2>
      <p style="max-width: 700px" class="mx-auto">
        <?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-2-copy', true ); ?>
      </p>
    </div>
  </div>
</div>

<!-- Section: Step 3 -->
<div class="row palepeach" id="section__getunfoldid-step-3">
  <div class="col-12 text-center text-darkgray">
    <div class="mx-auto py-5 my-lg-5">
      <h1 class="bigger text-darkgray">3</h1>
      <hr class="hr__decorator--underline darkgray d-inline-block">
      <hr class="ml-1 hr__decorator--underline darkgray d-inline-block">
      <hr class="ml-1 d-inline-block hr__decorator--underline darkgray">
      <h2><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-3-heading', true ); ?></h2>
      <p style="max-width: 700px" class="mx-auto">
        <?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-3-copy', true ); ?>
      </p>
    </div>
  </div>
</div>

<script>
  $(function () {
    $('.owl-carousel').owlCarousel({
      center: true,
      stagePadding: 50,
      margin: 10,
      nav: true,
      navText : ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],
      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        768: {
          items: 1,
        },
        1024: {
          items: 3,
          center: false,
        }
      }
    });
  });
</script>

<?php get_footer() ?>