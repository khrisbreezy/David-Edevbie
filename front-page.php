<?php
    get_header();
?>

<?php if(have_rows('homepage_banner')) : while(have_rows('homepage_banner')) : the_row(); ?>
  <header class="home" style="background:url(<?= get_sub_field('background_image'); ?>);">
        <?php include('modules/main-nav.php'); ?>
        <div class="container p-top-300">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="header-title"><?= get_sub_field('title'); ?></h1>
              <div class="row">
                <div class="col-md-8">
                  <p class="description">
                  <?= get_sub_field('sub_title'); ?>
                  </p>

                  <div class="form-header">
                    <?= do_shortcode(get_sub_field('form_shortcode')); ?>
                  </div>

                  <!-- <form class="join-form">
                    <input type="email" placeholder="Your Email Address">
                    <input type="number" placeholder="Phone Number">
                    <button class="btn">Join Team David</button>
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
  </header>
<?php endwhile; endif; ?>

<?php if(have_rows('brief_description')) : while(have_rows('brief_description')) : the_row(); ?>
`  <section class="brief-description">
    <div class="container">
      <div class="row">
        <div class="col-md-10 bg-grey">
          <div class="row">
            <div class="col-2 short-desc-img" style="background:url(<?= get_sub_field('image'); ?>);">
              <img src="<?= get_sub_field('image'); ?>" alt="" class="img-fluid d-none">
            </div>
            <div class="col-lg-10 col-12 py-4 mb-3">
              <h2><?= get_sub_field('description_title'); ?></h2>
              <p class="desc"><?= get_sub_field('description_content'); ?></p>
              <?php if(have_rows('button')) : while(have_rows('button')) : the_row(); ?>
                <a href="<?= get_sub_field('button_link'); ?>" class="desc-link"><?= get_sub_field('button_text'); ?></a>
              <?php endwhile; endif; ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>`
<?php endwhile; endif; ?>

<?php if(have_rows('get_involved_section')) : while(have_rows('get_involved_section')) : the_row(); ?>
  <section class="get-involved" style="background-image:linear-gradient(to right, rgba(254, 217, 50, 0.5), rgba(254, 217, 50, 0.5)), url(<?= get_sub_field('background_image'); ?>);">
    <div class="container">
      <div class="row col-lg-8">
        <div class="row hide-involved-tab get-involved-row">
          <?php if(have_rows('vote_tab')) : while(have_rows('vote_tab')) : the_row(); ?>
            <div class="col-md-4 mb-5">
              <a href="<?= get_sub_field('link'); ?>" class="card-link">
                <div class="card text-center card-vote">
                  <img src="<?= get_sub_field('image'); ?>" alt="plan-to-vote" class="img-fluid icons">
                  <p class="involved-text"><?= get_sub_field('title'); ?></p>
                </div>
              </a>
            </div>
          <?php endwhile; endif; ?>

          <?php if(have_rows('get_involved_tab')) : while(have_rows('get_involved_tab')) : the_row(); ?>
            <div class="col-md-8 mb-5 pb-4">
              <h4><?= get_sub_field('title'); ?></h4>
              <p class="desc"><?= get_sub_field('description_content'); ?></p>
              <?php if(have_rows('button')) : while(have_rows('button')) : the_row(); ?>
                <a href="<?= get_sub_field('button_link'); ?>" class="desc-link"><?= get_sub_field('button_text'); ?></a>
              <?php endwhile; endif; ?>
            </div>
          <?php endwhile; endif; ?>

          <?php if(have_rows('tabs')) : while(have_rows('tabs')) : the_row(); ?>
            <div class="col-md-4 mb-sm-0 mb-3 card-tabs">
              <a href="<?= get_sub_field('link'); ?>" class="card-link">
                <div class="card text-center card-tab-color">
                  <img src="<?= get_sub_field('image'); ?>" alt="plan-to-vote" class="img-fluid icons">
                  <p class="involved-text"><?= get_sub_field('title'); ?></p>
                </div>
              </a>
            </div>
          <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php if(have_rows('on_the_issue_section')) : while(have_rows('on_the_issue_section')) : the_row(); ?>
  <section class="issue">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2><?= get_sub_field('title'); ?></h2>
        </div>
      </div>
      <div class="row">
        <?php $home_issues = get_sub_field('issues'); if( $home_issues ): ?>
          <?php foreach( $home_issues as $post ): setup_postdata($post); ?>
            <div class="col-md-4 pr-0 pl-0 mb-sm-0 mb-3">
              <a href="<?php the_permalink(); ?>">
                <div class="issues">
                  <img src="<?= get_field('background_image'); ?>" class="img-fluid img-issues" alt="">
                    <div class="header-excerpt-text">
                      <h4><?php the_title(); ?></h4>
                      <div class="content">
                        <?= get_field('content'); ?>
                      </div>
                    </div>
                    <!-- <div class="dark-overlay"></div> -->
                </div>
              </a>
            </div>
          <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="col-12 mt-5 text-center">
          <?php if(have_rows('button')) : while(have_rows('button')) : the_row(); ?>
          <a href="<?= get_sub_field('button_link'); ?>" class="btn"><?= get_sub_field('button_text'); ?></a>
          <?php endwhile; endif; ?>
        </div>
        <p class="text-center">
          You want to know more about David Edevbie, download his manifesto
          <?php if ( ( get_sub_field('upload_pdf') ) ) : ?>
            <a href="<?= get_sub_field('upload_pdf') ?>" class="download-manifeto" target="_blank">here.</a>
          <?php endif; ?>
        </p>

      </div>
    </div>
  </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>


