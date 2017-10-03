<!-- style Unfoldid -->
<div class="owl-item w-100">
  <div class="palepeach section__getunfoldid-package text-darkgray">
    <h2 class="font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-name', true ); ?>
    </h2>
    <div class="d-inline-block my-3">
      <div class="px-3" style="float: left">
        <span class="align-middle text-center" style="line-height: 1.2em">
          <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-snippet', true ); ?>
        </span>
      </div>
      <div class="px-3" style="float: right; border-left: 2px solid #5B5C5F">
        <span class="align-middle">$</span><span class="align-middle" style="font-size: 2em">
          <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-price', true ); ?>
        </span>
      </div>
    </div>
    <div>
      <ul class="ul--left-aligned">
          <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'basic-package-features', true ); ?>
      </ul>

      <button class="button__white-navy button__booknow" style="border-width: 2px">book now</button>
    </div>
  </div>
</div>

<!-- style Insider -->
<div class="owl-item w-100">
  <div class="olive section__getunfoldid-package">

    <h2 class="text-center font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-name', true ); ?></h2>
    <div class="d-inline-block my-3">
      <div class="px-3" style="float: left">
        <span class="align-middle text-center" style="line-height: 1.2em">
            <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-snippet', true ); ?>
            </span>
      </div>
      <div class="px-3" style="float: right; border-left: 2px solid #fff">
        <span class="align-middle">$</span><span class="align-middle" style="font-size: 2em">
            <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-price', true ); ?>
        </span>
      </div>
    </div>
    <ul class="ul--left-aligned">
        <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'mid-package-features', true ); ?>
    </ul>
    <button class="button__white-gold button__booknow" style="border-width: 2px">book now</button>
  </div>
</div>

<!-- style ID -->
<div class="owl-item w-100">
  <div class="palenavy section__getunfoldid-package">
    <h2 class="font__halcom"><?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-name', true ); ?></h2>
    <div class="d-inline-block my-3">
      <div class="px-3" style="float: left">
        <span class="align-middle text-center" style="line-height: 1.2em">
          <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-snippet', true ); ?>
        </span>
      </div>
      <div class="px-3" style="float: right; border-left: 2px solid #fff">
        <span class="align-middle">$</span><span class="align-middle" style="font-size: 2em">
        <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-price', true ); ?>
        </span>
      </div>
    </div>
    <ul class="ul--left-aligned">
        <?php echo get_post_meta( UNFOLDID_PACKAGES_EDITOR_POST, 'premium-package-features', true ); ?>
    </ul>

    <button class="button__white-palepeach button__booknow" style="border-width: 2px">book now</button>
  </div>
</div>