<?php 
  $image_root_path = get_template_directory_uri() . '/images/press/';

  // Title, URL, Image
  $press_content = array(
    array("CBS Boston WBZ-TV","#", "our-work/wbz-tv.jpg"),
    array("Style Contributor for Northshore Magazine", "http://www.nshoremag.com/January-February-2012/Shift-Your-Style-With-Aricia-Symes-Elmer/", "our-work/northshore-magazine.jpg"),
    array("Fashion Show Production", "#", "our-work/fashion-show-production.png"),
    array("Style For Hire Certified", "#", "our-work/style-for-hire-certified.png"),
    //array("Exclusive Stylists at Linden Square, Assembly Row & Northshore Mall", "#", "our-work/exclusive-stylist.png"),
    array("Corporate Presentations & Events", "http://unfoldid.dev/services/#parties-and-corporate-events", "our-work/corporate-presentations-and-events.jpg")
  );

  // Name, URL, Image
  $collaborators = array (
    array("Nordstrom", "#", "collaborators/nordstrom.svg"),
    array("Ann Taylor", "#", "collaborators/ann-taylor.svg"),
    array("Northshore Mall", "#", "collaborators/northshore-mall.svg"),
    array("Sara Campbell", "#", "collaborators/sara-campbell.png"),
    array("Sperry", "#", "collaborators/sperry.svg"),
    array("Stride Rite", "#", "collaborators/stride-rite.svg"),
    array("Boston Consulting Group", "#", "collaborators/bcg.svg"),
    array("Tripadvisor", "#", "collaborators/tripadvisor.svg"),
    array("Northshore Magazine", "#", "collaborators/northshore-magazine.png"),
    array("Coldwell Banker", "#", "collaborators/coldwell-banker.svg"),
    array("Gulf", "#", "collaborators/gulf.svg"),
    array("CBS Boston", "#", "collaborators/cbs-boston.jpg"),
    array("NH1 News", "#", "collaborators/nh1-news.jpg"),
    array("WBZ 4", "#", "collaborators/wbz-4.svg"),
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

    <!-- PRESS ARTICLES -->
    <h1 class="text-darkgray mb-5">Our work.</h1>
    <div class="row">
      <!-- Start Loop -->
      <?php for ($i = 0; $i < sizeof($press_content); $i++) : ?>
        <div class="col-sm-12 mx-auto col-md-6 my-3">
          <a href="<?php echo $press_content[$i][1] ?>">
            <img src="<?php echo $image_root_path . $press_content[$i][2] ?>"
            width="333" height="250" class="img-fluid" alt="<?php echo $press_content[$i][0] ?>">
          </a>
          <p style="font-size: 1.3em" class="text-gold my-1"><?php echo $press_content[$i][0] ?></p>
        </div>
      <?php endfor; ?>
      <!-- End Loop -->
    </div>

    <!-- COLLABORATORS -->
    <h1 class="text-darkgray mt-5">In collaboration with</h1>
      <div class="row">
        <?php for ($i = 0; $i < sizeof($collaborators); $i ++) : ?>
        <div class="col-sm-4 col-md-4 my-2">
          <!--<a href="<?php echo $collaborators[$i][1] ?>">-->
            <img src="<?php echo $image_root_path . $collaborators[$i][2] ?>" 
            width="200" height="125" alt="<?php echo $collaborators[$i][0] ?>">
          <!--</a>-->
        </div>
      <?php endfor; ?>
      </div>

  </div>
</div>

<?php get_footer(); ?>