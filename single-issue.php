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

              </div>
          </div>
      </div>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
