<?php
  get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <header class="home header-banner arhive-banner" style="background:url(<?= get_field('background_image'); ?>);">
      <?php include('modules/main-nav.php'); ?>
      <div class="dark-overlay"></div>
      <div class="header-desc-container">
          <h3><?= get_field('page_title'); ?></h3>
          <h1 class="header-title"><?php the_title(); ?></h1>
      </div>
  </header>

  <section class="issue about">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                  <h2><?= get_field('content_title'); ?></h2>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                <?= get_field('content'); ?>
                <div class="d-flex align-items-center justify-content-between">
                    <?php if(get_field('upload_manifesto_pdf')) : ?>
                        <a href="<?= get_field('upload_manifesto_pdf') ?>">Download my manifesto</a>
                    <?php endif; ?>

                    <a href="<?= home_url(); ?>/on-the-issue">View all issues</a>
                </div>
              </div>
          </div>
      </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
