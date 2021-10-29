<nav class="navbar navbar-expand-sm navbar-dark" id="main-nav">
    <div class="container-fluid px-sm-5">
        <a href="<?= home_url(); ?>" class="logo-text d-flex align-items-center"><img class="me-2 logo-img" src="<?= get_template_directory_uri() ?>/img//logo.png" alt=""> DAVID EDEVBIE</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

        <?php
            $args = array(
                'theme_location' => 'main-menu',
                'menu' => 'main-menu',
                'menu_class' => 'navbar-nav ms-auto',
                'container' => 'false',
                'menu_id' => false,
                'depth' => 2,
                'walker' => new bs4navwalker(),
                'fallback_cb' => 'bs4navwalker::fallback',
            );

            wp_nav_menu($args);
        ?>
        <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a href="/meet-david.html" class="nav-link">Meet David</a>
            </li>
            <li class="nav-item">
            <a href="/on-the-issue.html" class="nav-link">On the Issues</a>
            </li>
            <li class="nav-item">
            <a href="/vote.html" class="nav-link">Vote</a>
            </li>
        </ul> -->
        <?php $navSocial = get_field('social_media_icons', 'option'); if($navSocial): ?>
            <ul class="navbar-nav mb-2 mb-sm-0">
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <?php $social_media = $navSocial['social_media']; foreach($social_media as $social):?>
                            <a class="social-link" href="<?= $social['icon_url']; ?>">
                                <img src="<?= $social['icon_image']; ?>" alt="" class="img-fluid social-icon" />
                            </a>
                        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
        <?php endif; ?>

        <?php
            $args = array(
                'theme_location' => 'right-menu-image',
                'menu' => 'right-menu-image',
                'menu_class' => 'navbar-nav nav-donate ml-5',
                'container' => 'false',
                'menu_id' => false,
                'depth' => 2,
                'walker' => new bs4navwalker(),
                'fallback_cb' => 'bs4navwalker::fallback',
            );

            wp_nav_menu($args);
        ?>

        <!-- <ul class="navbar-nav nav-donate ml-5">
            <li class="nav-item">
                <a href="#share-head-section" class="nav-link">Donate</a>
            </li>
            </ul>
        </div> -->
    </div>
</nav>