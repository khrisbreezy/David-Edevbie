<?php
    get_header();
?>

<?php if ( have_rows('page_banner') ) : ?>
    <?php if(have_rows('page_banner')) : while(have_rows('page_banner')) : the_row(); ?>
        <?php if( get_row_layout() == 'page_banner' ): ?>
            <header class="home header-banner issue-banner" style="background:url(<?= get_sub_field('background_image'); ?>);">
                <?php include('modules/main-nav.php'); ?>
                <div class="dark-overlay"></div>
                <div class="header-desc-container">
                    <h3><?= get_sub_field('sub_title'); ?></h3>
                    <h1 class="header-title"><?= get_sub_field('title'); ?></h1>
                </div>
            </header>
        <?php endif; ?>
    <?php endwhile; endif; ?>
<?php else : ?>
    <?php include('modules/main-nav.php'); ?>
<?php endif;  ?>

<section class="vote-section share-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3><?= get_field('title'); ?></h3>
            </div>
        </div>
        <div class="row">
            <?php if(have_rows('post_on_social_section')) : while(have_rows('post_on_social_section')) : the_row(); ?>
                <div class="col-12 mb-5">
                    <p class="share-head-text"><?= get_sub_field('title'); ?></p>
                    <p><?= get_sub_field('sub_title'); ?></p>
                </div>
            <?php endwhile; endif; ?>

            <?php if(have_rows('text_section')) : while(have_rows('text_section')) : the_row(); ?>
              <div class="col-12 mb-5">
                  <p class="share-head-text"><?= get_sub_field('title'); ?></p>
                  <p><?= get_sub_field('sub_title'); ?></p>
                  <div class="row">
                      <?php if(have_rows('text_share')) : while(have_rows('text_share')) : the_row(); ?>
                          <div class="col-md-6 mb-sm-0 mb-4">
                              <a href="#">
                                  <div class="text-share">
                                      <img src="<?= get_template_directory_uri() ?>/img/icons/phone.svg" alt="" class="img-fluid icon">
                                      <p><?= get_sub_field('text_messages'); ?></p>
                                      <?= do_shortcode(get_sub_field('copy_shortcode')); ?>
                                  </div>
                              </a>
                          </div>
                      <?php endwhile; endif; ?>
                  </div>
              </div>
            <?php endwhile; endif; ?>

            <?php if(have_rows('email_section')) : while(have_rows('email_section')) : the_row(); ?>
              <div class="col-12 mb-5">
                  <p class="share-head-text"><?= get_sub_field('title'); ?></p>
                  <p><?= get_sub_field('sub_title'); ?></p>
                  <div class="row">
                      <?php if(have_rows('email_share')) : while(have_rows('email_share')) : the_row(); ?>
                          <div class="col col-12 mb-sm-0 mb-4">
                              <a href="mailto:''">
                                  <div class="text-share">
                                      <img src="<?= get_template_directory_uri() ?>/img/icons/envelope.svg" alt="" class="img-fluid icon">
                                      <p>
                                        <?= get_sub_field('email'); ?>
                                      </p>
                                      <?= do_shortcode(get_sub_field('copy_shortcode')); ?>
                                  </div>
                              </a>
                          </div>
                      <?php endwhile; endif; ?>
                  </div>
              </div>
            <?php endwhile; endif; ?>

            <?php if(have_rows('share_on_social_media_section')) : while(have_rows('share_on_social_media_section')) : the_row(); ?>
            <div class="col-12 mb-5">
                <p class="share-head-text">Share on social media</p>
                <div class="row">
                    <?php if(have_rows('share_images')) : while(have_rows('share_images')) : the_row(); ?>
                        <div class="col-md-6 mb-sm-0 mb-4">
                            <a class="socail-share-link" href="#">
                                <img src="<?= get_sub_field('image'); ?>" alt="" class="img-fluid">
                                <?php echo sharethis_inline_buttons(); ?>
                            </a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>