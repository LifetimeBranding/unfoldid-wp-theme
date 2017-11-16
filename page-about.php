<?php get_header(); ?>

  <!-- Section: Hero -->
  <div class="row hero" id="section__about-hero"></div>

  <!-- Section: Introduction -->
  <div class="row peach">
    <div class="col-12">
      <div class="mx-auto text-center py-5">
        <h1>There's something going on in your closet.</h1>
        <p class="text-darkgray mx-auto py-5" style="font-size: 1.1em; max-width: 800px">
          You walk in; eyes wide; and you witness the true state of your wardrobe. You pull out the jeans three deep in the stack.
          Wrinkled, bedazzled, and ready to whisk you back to the ‘80s faster than a DeLorean. And up there, on the hanger—there’s
          that dress you haven’t worn since your bridal shower. Why is it still in your closet and not in the Smithsonian?<br>
          <br> Time, time, time, see what it’s done to me...<br>
          <br> We get that while your lifestyle and body change, your wardrobe doesn’t always evolve with it. Maybe you just
          don’t have the time. Maybe with work, kids, a labradoodle, and barely 20 minutes for a workout, it’s just not a
          priority. Or maybe, you just really need someone to hold your hand and guide your way.
        </p>
      </div>
    </div>
  </div>

  <!-- Section: Informative Copy -->
  <div class="row navy">
    <div class="col-12 text-center">
      <div class="mx-auto py-5 text-white">
        <h1>Lab coat not Labradoodle.</h1>
        <p class="py-5 mx-auto" style="font-size: 1.1em; max-width: 800px">For men and women, whatever your reason, our team of professional stylists will be there to get you on track. We’ll
          break out our tape measure, conduct a full diagnosis of the situation, and use a blend of art and science to build
          a wardrobe that reflects who you are and how you live—now.</p>
      </div>
    </div>
  </div>
  <!-- Section: Biographies -->
  <div class="row">

    <div class="col-12">
      <div class="position: relative; height: 100%">
        <div id="about-arrow-left">
        <span onclick="$('.owl-carousel').trigger('prev.owl.carousel');" class="fa-stack fa-lg">
          <span class="fa fa-long-arrow-left fa-stack-1x"></span>
          <span class="fa fa-circle-thin fa-stack-2x"></span>
          </span>
        </div>
        <div id="about-arrow-right">
        <span onclick="$('.owl-carousel').trigger('next.owl.carousel');" class="fa-stack fa-lg">
          <span class="fa fa-long-arrow-right fa-stack-1x"></span>
          <span class="fa fa-circle-thin fa-stack-2x"></span>
          </span>
        </div>
      </div>
      <div class="row">
        <!-- start -->
        <div class="owl-carousel">
          <div class="item row">

            <div id="stylist-bio-jessica" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 gold text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px;">
                <h1 class="font__escrow-banner bigger">Jessica</h1>
                <h3 class="font__halcom">business manager</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/jessica.png" alt="Jessica" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">Jessica Bunting came to Unfoldid with a background in office management. Her experience working as an Executive
                  Assistant to the President of Prudential Insurance and later seamlessly managing a 21st century household
                  prepared her very well for managing the organized chaos of working with a team of creative minded stylists.</p>
                <button class="button__white-black" onclick="location.href='mailto: stylist@unfoldid.com'">contact Jessica</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-whitney" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 peach text-center py-5 stylist__bio">
              <div class="mx-auto text-darkgray" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Whitney</h1>
                <h3 class="font__halcom">senior stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/whitney.png" alt="Whitney" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                  Whitney Torgerson was born and raised in the Greater Boston Area, a true Bostonian at heart. She received her BS in Marketing
                  and Management from Merrimack College. From working and interning in retail management and operations for
                  TJX Company, Whitney found her creativity and interest in fashion early on.</p>
                <button class="button__white-black button__booknow">book Whitney</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-molly" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 olive text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Molly</h1>
                <h3 class="font__halcom">style manager</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/molly.png" alt="Molly" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                  Molly Foley brings a creative spirit and background in organizing to Unfoldid. With her Masters in Library Science from Simmons
                  College she uses her technological and organizational skills to create web-based apps and streamline systems.
                  Molly also holds a BA in Sociology from the University of Minnesota - Twin Cities, which she finds valuable
                  in understanding clients and their unique needs.</p>
                <button class="button__white-black" onclick="location.href='mailto: stylist@unfoldid.com'">contact Molly</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-amanda" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 gold text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Amanda</h1>
                <h3 class="font__halcom">senior stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/amanda.png" alt="Amanda" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                  Amanda Sanford Smith is a celebrated fashion and style expert as well as a design consultant for Best of Boston's Marrero
                  Events. Amanda is a well-respected fashion show designer and serves as a judge for many high-profile events
                  pageants and fundraisers. She dresses some of Boston's top rated media personalities such as WRKO's Kim
                  Carrigan and Lori Grande of WBZ news, as well as Candy O'Terry of Boston Women in Media and Entertainment.
                </p>
                <button class="button__white-black button__booknow">book Amanda</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-lisa" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 pink text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Lisa</h1>
                <h3 class="font__halcom">master stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/lisa.png" alt="Lisa" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                Lisa Mauriello received her BFA from MassArt where she studied Fashion Design and learned the technical nuts and bolts of designing, drafting and constructing beautiful unique garments. As a former private yoga instructor, she cultivated a sensitivity and passion for empowering others. Lisa learned fashion merchandising and buying while working at Louis Boston, New England’s most prestigious luxury boutique. Lisa utilizes her experiences, trained eye and dedication to connecting with her clients, to build a wardrobe that is timeless. 

                </p>
                <button class="button__white-black button__booknow">book Lisa</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-emily" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 gold text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Emily</h1>
                <h3 class="font__halcom">celebrity stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/emily.png" alt="Emily" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                Emily Loftis’s stand out southern charm, mixed with her love of fashion has sent her on a wild ride. As a Style and Beauty expert, Emily has appeared on several daytime talk shows from "The Steve Harvey Show," to "The Insider", and is a regular contributor on "Good Day LA". Emily's passion is helping real women of all sizes feel just as glamorous as the celebrities she styles for Hollywood's Red Carpets. 

                </p>
                <button class="button__white-black button__booknow">book Emily</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-aricia" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 olive text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Aricia</h1>
                <h3 class="font__halcom">Unfoldid founder &amp; master stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/aricia.png" alt="Aricia" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
                  Aricia Symes-Elmer was born in the heart of New England as the only girl of five. Touting a double degree in International
                  Business and Asian Studies from University of Vermont and MBA from New York University, Aricia has traveled the world
                  working on a variety of roles in fashion.
                </p>
                <button class="button__white-black button__booknow">book Aricia</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-amy" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 pink text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Amy</h1>
                <h3 class="font__halcom">stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/amy.jpg" alt="Amy" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
Amy Finegold has always had a passion for retail, which lead her to choose it as a career path while studying French and Art History at Tufts University. After mastering folding from working at Gap and graduating, Amy chose to work at specialty boutiques, exposing her to different aspects of sales, buying and owning a small business. She made her dreams a reality when she and her husband opened Dresscode in downtown Andover in September 2004. Building loyal clientele, winning numerous awards and expanding, Dresscodes’ goal was to create an experience by bringing unique and quality designers to each customer. In the search for more balance and to do more of what she loves, Amy closed her doors to share her love of clothing and the ability to empower women through dressing by joining the esteemed team at Unfoldid.
                </p>
                <button class="button__white-black button__booknow">book Amy</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-annette" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 navy text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Annette</h1>
                <h3 class="font__halcom">stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/annette.jpg" alt="Annette" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
Annette Najarian is a Boston girl born and raised. Graduating from Suffolk University with a BS in Communications, Annette worked in Marketing and Education before becoming a mom. Annette's first love has always been fashion, as she truly loves helping people look and feel their best. With her keen sense of style, Annette pieces together the perfect outfit for an event or finds that important addition to your wardrobe. After years spent raising her family, Annette has decided to finally pursue her love of fashion by joining the Unfoldid team. With an effortless style of her own, Annette will work with you to create a wardrobe that will express your own personal style to become the best version of you.
                </p>
                <button class="button__white-black button__booknow">book Annette</button>
              </div>
            </div>
          </div>

          <div class="item row">
            <div id="stylist-bio-nicole" class="col-xs-12 col-md-4 image__stylist">
            </div>
            <div class="col-xs-12 col-md-8 olive text-center py-5 stylist__bio">
              <div class="mx-auto text-white" style="max-width: 700px">
                <h1 class="font__escrow-banner bigger">Nicole</h1>
                <h3 class="font__halcom">stylist</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/stylist-photos/headshots/nicole.jpg" alt="Nicole" class="d-sm-none image__headshot">
                <p class="py-5" style="font-size: 1em;">
Nicole Jangro graduated from Bentley with a degree in Finance. With her own signature look, Nicole climbed the corporate ladder in finance and accounting. She held many high level executive roles and relied on her flawless classic style to express her confidence at work. After many years in corporate America, Nicole wanted a position where she could help women feel confident in the clothing they choose. She works to help her clients express their best self with a personalized, comfortable look that creates confidence and shows the world who you truly are, irreplaceable.
                </p>
                <button class="button__white-black button__booknow">book Nicole</button>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- Section: Contact Information -->
  <div class="row" id="section__about-contact" style="font-size: 1.4em">
    <div class="col-sm-12 col-md-6">
      <div class="text-white p-5">
      <div class="float-md-right">
        <dl>
          <dt>Selected partnerships</dt>
          <dd><a href="<?php echo get_home_url(); ?>/partners#partner-assembly-row">Assembly Row</a></dd>
          <dd><a href="<?php echo get_home_url(); ?>/partners#linden-square">Linden Square</a></dd>
        </dl>
        <dl>
          <dt>Follow us @Unfoldid</dt>
          <dd style="max-width: 300px"><a href="//facebook.com/unfoldid">facebook</a> / <a href="//pinterest.com/unfoldid/pins">pinterest</a> / <a href="//instagram.com/unfoldid">instagram</a> / <a href="/index.php/blog">blog</a> / <a href="//linkedin.com/company/unfoldid">linkedin</a></dd>
        </dl>
      </div>
      </div>
      </div>
    <div class="col-sm-12 col-md-6">
      <div class="text-white p-5">
        <dl>
          <dt>Tel</dt>
          <dd>978-886-0487</dd>
        </dl>
        <dl>
          <dt>Email</dt>
          <dd>stylist@unfoldid.com</dd>
        </dl>
      </div>
    </div>
  </div>

  <script>
    $(function () {

      $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 15,
        loop: true,
        mouseDrag: false,
      });
    });

  </script>
    <?php get_footer() ?>