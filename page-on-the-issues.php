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

<section class="issue about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Below are the issues david stands on</h2>
            </div>
        </div>
        <div class="row">
          <?php
          $issues = new WP_Query([
          'paged' => get_query_var('paged', 1),
          'posts_per_page' => 3,
          'post_type' => 'issues'
          ]);

          if ( $issues->have_posts() ): while ( $issues->have_posts() ) : $issues->the_post(); ?>
            <div class="col-md-4 mb-5">
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
          <?php endwhile; endif;  wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="pagination__container">
                    <?php
                        wp_pagenavi([
                            'query' => $issues
                        ]);
                    ?>
                </div>
            </div>
        </div>
        <?php if ( ( get_field('upload_manifesto') ) ) : ?>
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="text-center">
                        You want to know more about David Edevbie, download his manifesto
                        <?php if ( ( get_field('upload_manifesto') ) ) : ?>
                            <a href="<?= get_field('upload_manifesto') ?>" class="download-manifeto" target="_blank">here.</a>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>