<?php get_header(); ?>
<?php include('modules/main-nav.php'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2><?php the_title(); ?></h2>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>