<?php
get_header();
?>

  <!-- Section: HERO -->
  <div class="row hero" id="section__services-hero">
    <div class="col-12">
      <div class="v-center text-center">
        <h1 class="text-white header__hero mb-5 py-5">For him <span class="text-small font__halcom d-block py-3">or</span> for her.</h1>
      </div>
    </div>
  </div>

  <!-- Section: Services Introduction + Service Descriptions -->
  <div class="row" id="section__services-content">
    <!-- Featured Services -->
    <div class="col-12 py-5">
      <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
          <h1 class="big text-darkgray text-center">Featured Services.</h1>
          <p class="text-center mx-auto" style="max-width: 700px">
            For men or women, whatever your reason, our team of professional stylists will be there to get you on track. We’ll break
            out our tape measure, conduct a full diagnosis of the situation, and use a blend of art and science to build
            a wardrobe that reflects who you are and how you live—now.</p>
          <!-- packages -->
          <div id="section__services--minipackages" class="owl-carousel owl-theme text-white my-5 d-block">
            <!-- style Unfoldid -->
            <div class="owl-item w-100">
              <div class="palepeach section__getunfoldid-package-mini text-darkgray">
                <h2 class="font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-name', true ); ?>
                </h2>
                <div class="d-inline-block my-3">
                  <div class="px-3" style="float: left">
                    <span class="align-middle text-center" style="line-height: 1.2em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-snippet', true ); ?></span>
                  </div>
                  <div class="px-3" style="float: right; border-left: 2px solid #5B5C5F">
                    <span class="align-middle">$</span><span class="align-middle" style="font-size: 1em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-price', true ); ?></span>
                  </div>
                </div>
                <div id="toggle-style-unfoldid" class="collapse">
                  <hr>
                  <p>
                  <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-details', true ); ?>
                  </p>
                  <button class="button__white-black font__halcolm button__booknow mt-3">book now</button>
                  <hr>
                </div>
                <p data-toggle="collapse" data-target="#toggle-style-unfoldid"><span class="fa fa-chevron-down"></span></p>
              </div>
            </div>

            <!-- style Insider -->
            <div class="owl-item w-100">
              <div class="olive section__getunfoldid-package-mini">

                <h2 class="text-center font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-name', true ); ?></h2>
                <div class="d-inline-block my-3">
                  <div class="px-3" style="float: left">
                    <span class="align-middle text-center" style="line-height: 1.2em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-snippet', true ); ?></span>
                  </div>
                  <div class="px-3" style="float: right; border-left: 2px solid #fff">
                    <span class="align-middle">$</span><span class="align-middle" style="font-size: 1em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-price', true ); ?></span>
                  </div>
                </div>
                <div id="toggle-style-insider" class="collapse">
                  <hr>
                  <p>
                  <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-details', true ); ?>
                  </p>
                  <button class="button__white-black font__halcolm button__booknow mt-3">book now</button>
                  <hr>
                </div>
                <p data-toggle="collapse" data-target="#toggle-style-insider"><span class="fa fa-chevron-down"></span></p>
              </div>
            </div>

            <!-- style ID -->
            <div class="owl-item w-100">
              <div class="palenavy section__getunfoldid-package-mini">
                <h2 class="font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-name', true ); ?></h2>
                <div class="d-inline-block my-3">
                  <div class="px-3" style="float: left">
                    <span class="align-middle text-center" style="line-height: 1.2em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-snippet', true ); ?></span>
                  </div>
                  <div class="px-3" style="float: right; border-left: 2px solid #fff">
                    <span class="align-middle">$</span><span class="align-middle" style="font-size: 1em"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-price', true ); ?></span>
                  </div>
                </div>
                <div id="toggle-style-id" class="collapse">
                  <hr>
                  <p>
                  <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-details', true ); ?>
                  </p>
                  <button class="button__white-black font__halcolm button__booknow mt-3">book now</button>
                  <hr>
                </div>
                <p data-toggle="collapse" data-target="#toggle-style-id"><span class="fa fa-chevron-down"></span></p>
              </div>
            </div>
          </div>

        </div>
        <!-- additional services -->
        <div class="col-12">
          <div class="row mx-auto">
            <div class="col-12 text-center">
              <div class="mx-auto text-darkgray" style="max-width: 700px">
                <h1>Additional Services.</h1>
              </div>
            </div>
          </div>

          <div class="col-12 my-3">
            <div class="row mx-auto">
              <div class="col-12">
                <div class="mx-auto">
                  <!-- Services accordian-->
                  <div class="mx-auto" id="our-services" data-children=".item" style="max-width: 700px">
                    <div class="row" data-children=".item">
                      <div class="col-sm-12 col-md-6" data-children=".item">
                        <div class="item py-2">
                          <div class="text-center">
                            <a class="services-link collapsed" data-toggle="collapse" data-parent="#our-services" href="#shoppingPackages">Shopping packages</a>
                          </div>
                          <div id="shoppingPackages" class="collapse" role="tabpanel">
                            <div class="mb-3 py-2" style="max-width: 750px; margin: auto">
                              Shop with Unfoldid! Meet your professional Stylist at your select location and shop
                              the best stores, pieces, and hidden treasures. <br><br> Your
                              shopping session begins with a consultation to analyze your style, shopping needs and goals,
                              define your silhouette, and discuss your budget.

                              <br><br> Next, hit the stores with your Unfoldid Stylist as they handpick the perfect pieces
                              for you! Whether its a few items for the new season or a look for a special event, we help
                              you find it while learning about current trends, and how to shop smart for quality pieces and
                              fun finds, to create the ultimate look.
                            </div>
                            <div class="text-center">
                              <button class="button__white-black font__halcolm button__booknow">book now</button>
                            </div>
                          </div>
                        </div>
                        <div class="item py-2">
                          <div class="text-center">
                            <a class="services-link collapsed" data-toggle="collapse" data-parent="#our-services" href="#eventDressing">Event dressing</a>
                          </div>
                          <div id="eventDressing" class="collapse" role="tabpanel">
                            <div class="mb-3 py-2" style="max-width: 750px; margin: auto">
                              Do you have a special event coming up? A new job, party or special date? Let us take the stress out of finding and deciphering
                              the appropriate style wear. <br><br>Our Unfoldid Stylists consult
                              with you on the event, the social etiquette involved and your comfort level with dressing
                              up, so that you look and feel great making your entrance!
                              <br><br>Work together with your Unfoldid Stylist to:

                              <ul class="ul__ul-no-style ul--left-aligned">
                                <li>Shop and find just the right dress, suit or outfit for your special occasion.</li>
                                <li>Create an event-perfect outfit from pieces you already own.</li>
                                <li>Add the finishing touches by finding the best shoes, purses, accessories and outerwear to
                                  complement your outfit.</li>
                              </ul>
                            </div>
                            <div class="text-center">
                              <button class="button__white-black font__halcolm button__booknow">book now</button>
                            </div>
                          </div>
                        </div>
                        <div class="item py-2">
                          <div class="text-center">
                            <a class="services-link collapsed" data-toggle="collapse" data-parent="#our-services" href="#shopYourCloset">Shop your closet</a>
                          </div>
                          <div id="shopYourCloset" class="collapse" role="tabpanel">
                            <div class="mb-3 py-3" style="max-width: 750px; margin: auto">
                              Do you have some great clothes and accessories, but still can't figure out what to wear or how to style them? We can help!
                              With a little creativity, your current closet can be transformed into a wardrobe of stylish
                              outfits.
                              <br><br>Our Unfoldid Stylists analyze your current items, from favorites to basics, to:

                              <ul class="ul__ul-no-style ul--left-aligned">
                                <li>Explore fashionable new ways to wear and pair items you already own.</li>
                                <li>Maximize your wardrobe by creating outfits that are easily transitional from day to night
                                  wear.
                                </li>
                                <li>Learn how to use seasonal items to keep you looking stylish and on trend.</li>
                                <li>Demonstrate how to update and express your style through simple accessories.</li>
                                <li>Recommend a "smart purchases" shopping list of items that will add impact to your current
                                  wardrobe.
                                </li>
                              </ul>
                            </div>
                            <div class="text-center">
                              <button class="button__white-black font__halcolm button__booknow">book now</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6" data-children=".item">
                        <div class="item py-2">
                          <div class="text-center">
                            <a class="services-link collapsed" data-toggle="collapse" data-parent="#our-services" href="#parties-and-corporate-events">Parties &amp; Corporate events</a>
                          </div>
                          <div id="parties-and-corporate-events" class="collapse" role="tabpanel">
                            <div class="mb-3 py-3" style="max-width: 750px; margin: auto">
                              Let us help you plan the perfect party for friends & family, favorite charity or business. We provide personalized planning
                              to help you create the event that works for you!
                              <br><br>Unfoldid can help you plan:
                              <ul class="ul__ul-no-style ul--left-aligned">
                                <li>Shopping Outings: Boutique hop, on your favorite shopping street with special discounts, presentations
                                  and light bites. We will even plan your transportation in style.</li>
                                <li>Host a Girls Night-In: Our stylists will create a specialized presentation to fit your needs
                                  and level of fun! Receive an individual style consult for each guest and Style Presentations
                                  on trends, silhouette, accessories even fun style games.</li>
                                <li>Private Parties.</li>
                                <li>Personalized events and presentations for your business, club, group or favorite charity.</li>
                                <li>Corporate presentations, fashion show production, photo shoot styling and custom events.
                                  </li>
                              </ul>
                              Contact us to set up a consultation and let us bring your vision to life!
                            </div>
                            <div class="text-center">
                              <button class="button__white-black font__halcolm button__booknow">book now</button>
                            </div>
                          </div>
                        </div>

                        <div class="item py-2">
                          <div class="text-center">
                            <a class="services-link collapsed" data-toggle="collapse" data-parent="#our-services" href="#closetEditing">Closet editing</a>
                          </div>
                          <div id="closetEditing" class="collapse" role="tabpanel">
                            <div class="mb-3 py-3" style="max-width: 750px; margin: auto">
                              Do you have a closet full of clothes that you never wear, unsure of how to style or whether you should keep them? Let us
                              help you refine your wardrobe!
                              <br><br>Work together with your Unfoldid Stylist to:
                              <ul class="ul__ul-no-style ul--left-aligned">
                                <li>Ensure your wardrobe contains the Top 20 essentials you need for any outfit.</li>
                                <li>Uncover habits that may be holding you back, such as buying the wrong cuts for your silhouette
                                  or garments for your lifestyle.</li>
                                <li>Learn which clothes to have tailored and which to give away.</li>
                                <li>Develop a comprehensive shopping list for adding to and updating your look.</li>
                                <li>Learn to plan smart purchases so you will continue to love and wear everything in your closet.</li>
                              </ul>
                            </div>
                            <div class="text-center">
                              <button class="button__white-black font__halcolm button__booknow">book now</button>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Partners -->
        <div class="col-12">
          <div class="row mx-auto">
            <div class="col-12 text-center">
              <div class="mx-auto text-darkgray" style="max-width: 700px">
                <h1>Partners.</h1>
                <p><br><a class="services-link" href="<?php echo get_permalink( get_page_by_title('Partners') ) ?>">Shop our Special Packages</a><br><br> Brought to you exclusively through our Partners</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <script>
    $('.owl-carousel').owlCarousel({
      nav: true,
      margin: 10,
      navText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
      responsive: {
        0: {
          items: 1,
          center: true,
        },
        600: {
          items: 3,
          center: false,
        }
      }
    });
  </script>
  <?php get_footer() ?>