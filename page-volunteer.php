<?php
    get_header();
?>

<?php if(have_rows('volunteer_banner')) : while(have_rows('volunteer_banner')) : the_row(); ?>
  <header class="home volunteer" style="background: #CECECE url(<?= get_sub_field('image'); ?>) no-repeat !important;background-size: 650px !important;">
        <?php include('modules/main-nav.php'); ?>
        <div class="container-fluid p-top-300">
          <div class="row">
            <div class="col-md-12 z-index">
              <div class="row">
                <div class="col-md-7 ms-lg-auto">
                  <h3><?= get_sub_field('sub_title'); ?></h3>
                  <h1><?= the_title(); ?></h1>
                  <p class="policy">
                    <?= get_sub_field('description'); ?>
                  </p>
                  <div class="row">
                      <div class="col-md-6">
                        <?= do_shortcode(get_sub_field('form_shortcode')); ?>
                      </div>
                  </div>
                  <p class="policy"> <?= get_sub_field('policy_text'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dark-overlay"></div>
  </header>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
