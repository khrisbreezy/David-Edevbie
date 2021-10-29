<?php get_header(); ?>

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


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2><?php the_title(); ?></h2>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>