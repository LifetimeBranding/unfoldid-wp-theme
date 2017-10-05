<?php
get_header();
?>

<?php if (isset($_GET['referred'])) : ?>
<div class="modal fade" id="redirect-from-sys-modal"> 
<div class="modal-dialog modal-lg" role="document" style="padding-top: 5%">
<div class="text-center">
  <div class="modal-body">
    <div class="mx-auto" style="cursor: pointer" onclick="$('#redirect-from-sys-modal').modal('hide');">
      <img src="<?php echo get_template_directory_uri() ?>/images/redirect-pop-up.jpg" class="img-fluid">
    </div>
  </div>
</div>
</div>
</div>

<script>
  $(window).on('load',function(){
        $('#redirect-from-sys-modal').modal('show');
    });
</script>

<?php endif; ?>

  <!-- Section: HERO -->
  <div class="row hero" id="section__home-hero">
    <div class="col-12 mx-auto">
      <div class="text-center mt-5">
        <h1 class="text-navy header__hero mb-5">Opening up <span class="text-small font__halcom d-block py-3">the</span> clothes-minded.</h1>
        <button class="button__navy-gold button__booknow px-4" id="button__home--book-now">book now</button>
      </div>
    </div>
  </div>

  <!-- Section: Steps -->
  <div class="row" id="section__home-steps">
    <div class="col">
      <!-- owl carousel -->
      <div id="section__home--step-carousel" class="owl-carousel owl-theme owl-loaded mb-5">
        <div class="owl-item w-100">
          <h1 class="bigger text-gold">1</h1>
          <hr class="hr__decorator--underline gold">
          <h2 class="text-gold medium" style="max-width: 250px; margin: auto;"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-1-heading', true ); ?></h2>
          <p style="font-size: 1.3em;" class="py-3"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-1-instruction-snippet', true ); ?></p>
        </div>

        <div class="owl-item w-100">
          <h1 class="bigger text-navy">2</h1>
          <hr class="hr__decorator--underline navy d-inline-block">
          <hr class="mx-1 hr__decorator--underline navy d-inline-block">
          <h2 class="text-navy medium" style="max-width: 250px; margin: auto;"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-2-heading', true ); ?></h2>
          <p style="font-size: 1.3em;" class="py-3"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-2-instruction-snippet', true ); ?></p>
        </div>

        <div class="owl-item w-100">
          <h1 class="bigger text-pink">3</h1>
          <hr class="hr__decorator--underline pink d-inline-block">
          <hr class="mx-1 hr__decorator--underline pink d-inline-block">
          <hr class="hr__decorator--underline pink d-inline-block">
          <h2 class="text-pink medium" style="max-width: 250px; margin: auto;"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-3-heading', true ); ?></h2>
          <p style="font-size: 1.3em;" class="py-3"><?php echo get_post_meta( UNFOLDID_PROCESS_EDITOR_POST, 'process-step-3-instruction-snippet', true ); ?></p>
        </div>
      </div>

      <!-- get unfoldid button -->
      <div class="row text-center">
        <div class="col">
          <div class="mx-auto">
            <button class="button__gold-navy font__halcom" id="button__home--get-unfoldid">get unfoldid</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- packages -->
  <div class="row lightgray" id="section__home--packages">
    <div class="col-12 lightgray">
      <div id="section__home--packages-carousel" class="owl-carousel owl-theme text-white my-5 mx-auto">
        <?php get_template_part('content', 'package-carousel'); ?>
      </div>
    </div>
  </div>

  <!-- Section: Aricia's Bio -->
  <div class="row" style="min-height: 500px">
    <div class="col-md-12 col-lg-4" id="section__home-aricia--bg-image">
      <!-- image of Aricia!-->
    </div>
    <div class="col-md-12 col-lg-8 navy text-center py-5">
      <div class="mx-auto text-white" style="max-width: 700px">
        <h1 class="font__escrow-banner bigger">Aricia</h1>
        <h3 class="font__halcom">Unfoldid founder &amp; master stylist</h3>
        <p class="py-5" style="font-size: 1.2em;">Aricia Symes-Elmer was born in the heart of New England as the only girl of five. Touting a double degree in International
          Business and Asian Studies from University of Vermont and MBA from New York University, Aricia has traveled the
          world working on a variety of roles in fashion.</p>
        <button class="button__white-gold font__halcom-medium m-2 px-4" id="button__home--meet-the-stylists">meet the stylists</button>
        <button class="button__gold-white font__halcom-medium m-2 px-4" id="button__home--aricia-on-wbz">Aricia on WBZ-TV</button>
      </div>
    </div>
  </div>

  <!-- Section: Social Proof -->
  <div class="row" id="section__home-quote">
    <div class="col-12">
      <div class="mx-auto text-center py-5 my-5" style="max-width: 1500px">
        <blockquote class="font__escrow-banner" id="homepage-quote">“Even two days after the show, we have women seeking me out to tell me how much they loved it, how informative it
          was and how it has motivated them to make some changes! Simply said...WOW!” <span class="d-block font__halcom- text-tiny">— Meketa Investment Group</span></blockquote>
      </div>
    </div>
  </div>
  <div class="row" id="section__social">
    <div class="col-12">
      <div class="mx-auto text-center py-5">
        <div class="p-1">
          <h1 class="text-gold mx-auto" style="font-size: 3em">social unfoldid</h1>
          <!--<span class="text-darkgray font__halcom-light">@unfoldid</span>-->
        </div>
        <div id="curator-feed-default"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>

      </div>
    </div>
  </div>

  <script>
    // Owl Carousel
    $(function () {
      // CURATOR.io
      var i, e, d = document, s = "script"; i = d.createElement("script"); i.async = 1;
      i.src = "https://cdn.curator.io/published/a5d7ff03-491b-4e37-b845-188e939d.js";
      e = d.getElementsByTagName(s)[0]; e.parentNode.insertBefore(i, e);

      $('#section__home--step-carousel').owlCarousel({
        center: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
          0: {
            items: 1,
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

      $('#section__home--packages-carousel').owlCarousel({
        center: true,
        nav: true,
        margin: 10,
        stagePadding: 50,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
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

      $('#button__home--meet-the-stylists').on('click', function () {
        $(location).attr('href', '<?php echo get_permalink( get_page_by_title('About') ) ?>');
      })
      $('#button__home--aricia-on-wbz').on('click', function () {
        $(location).attr('href', '<?php echo get_permalink( get_page_by_title('Press') ) ?>');
      })
      $('#button__home--get-unfoldid').on('click', function () {
        $(location).attr('href', '<?php echo get_permalink( get_page_by_title('Get Unfoldid') ) ?>');
      })
    });
  </script>
    <?php get_footer() ?>
