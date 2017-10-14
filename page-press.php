<?php 
  $image_root_path = get_template_directory_uri() . '/images/press/';

  // Title, URL, Image
  $press_content = array(
    array("CBS Boston WBZ-TV","#", "wbz-tv.jpg"),
    array("Northshore Mall", "#", "northshore-mall.jpg"),
    array("Fashion Show Production", "#", "fashion-show-production.png"),
    array("Style For Hire Certified", "#", "style-for-hired-certified.png")
  );
?>

<?php get_header(); ?>

<div class="row hero" id="section__press-hero">
  <div class="col-12">
    <div class="text-center">
      <h1 class="text-white header__hero mb-5 py-5">In <span class="text-small font__halcom d-block py-3">the</span> News.</h1>
    </div>
  </div>
</div>

<div class="container" style="max-width: 800px">
  <div class="text-center m-5">
    <h1 class="text-darkgray mb-5">Our work.</h1>

    <div class="row">
      <!-- Start Loop -->
      <?php for ($i = 0; $i < sizeof($press_content); $i++) : ?>
        <div class="col-sm-12 mx-auto col-md-6">
          <a href="<?php echo $press_content[$i][1] ?>">
            <img src="<?php echo $image_root_path . $press_content[$i][2] ?>"
            class="img-fluid" width="333" height="250">
          </a>
          <p style="font-size: 1.3em" class="text-gold my-1"><?php echo $press_content[$i][0] ?></p>
        </div>
      <?php endfor; ?>
      <!-- End Loop -->
    </div>

  </div>
</div>

<?php get_footer(); ?>