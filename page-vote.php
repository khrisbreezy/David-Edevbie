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

<section class="vote-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3><?= get_field('title'); ?></h3>
            </div>
        </div>
        <div class="row mt-5">
          <?php if(have_rows('voting_tabs')) : while(have_rows('voting_tabs')) : the_row(); ?>
            <?php
                $Title=preg_replace('/\s/','',get_sub_field('title'));
                // Removes all special characters from a string
                $theTitle1=preg_replace('/[^A-Za-z0-9\-]/', '', $Title);
            ?>
            <div class="col-md-6 mb-5">
              <a class="cursor-pointer" href="<?= get_sub_field('link') ?>" target="_blank">
                  <div class="vote-sec-container">
                      <div class="dark-overlay"></div>
                      <img src="<?= get_sub_field('image'); ?>" alt="" class="vote-img img-fluid">
                      <div class="description">
                          <h4><?= get_sub_field('title'); ?></h4>
                          <div class="content">
                            <p><?= get_sub_field('description'); ?></p>
                          </div>
                      </div>
                      <img class="icon-right" src="<?= get_template_directory_uri() ?>/img/icons/right.svg" alt="">
                  </div>
              </a>
            </div>
          <?php endwhile; endif; ?>
        </div>
    </div>

    <?php if(have_rows('voting_tabs')) : while(have_rows('voting_tabs')) : the_row(); ?>
      <?php
          $Title=preg_replace('/\s/','',get_sub_field('title'));
          // Removes all special characters from a string
          $theTitle1=preg_replace('/[^A-Za-z0-9\-]/', '', $Title);
      ?>
        <div class="modal fade" id="<?php echo $theTitle1 ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $theTitle1 ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?php echo $theTitle1 ?>"><?= get_sub_field('title'); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-image-container">
                            <img src="<?= get_sub_field('image'); ?>" alt="" class="img-fluid w-100">
                        </div>
                        <div class="modal-content-body">
                          <?= get_sub_field('description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
