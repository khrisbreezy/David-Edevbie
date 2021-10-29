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


<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-center">
               <h2><?= get_field('title'); ?></h2>
            </div>
            <div class="col-md-9 mx-auto">
                <?= get_field('about_david'); ?>
                <div class="mb-5">
                    <?php if ( get_field('video_url') ) : ?>
                        <iframe width="100%" height="500" src="  <?= get_field('video_url'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php endif;  ?>
                </div>
                <?= get_field('about_david_continue'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
