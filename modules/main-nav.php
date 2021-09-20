<nav class="navbar navbar-expand-sm" id="main-nav">
    <div class="container">
        <a href="<?= home_url(); ?>" class="logo-text d-flex align-items-center"><img class="mr-2 logo-img" src="<?= get_template_directory_uri() ?>/img//logo.png" alt=""> DAVID EDEVBIE</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a href="/meet-david.html" class="nav-link">Meet David</a>
            </li>
            <li class="nav-item">
            <a href="/on-the-issue.html" class="nav-link">On the Issues</a>
            </li>
            <li class="nav-item">
            <a href="/vote.html" class="nav-link">Vote</a>
            </li>
            <li class="nav-item">
                <div class="d-flex align-items-center">
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri() ?>/img/icons/facebook.svg" alt="" class="img-fluid social-icon" />
                </a>
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri() ?>/img//icons/instagram.svg" alt="" class="img-fluid social-icon" />
                </a>
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri() ?>/img//icons//twitter.svg" alt="" class="img-fluid social-icon" />
                </a>
                <a class="social-link" href="#">
                    <img src="<?= get_template_directory_uri() ?>/img/icons//linkedin.svg" alt="" class="img-fluid social-icon" />
                </a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav nav-donate ml-5">
            <li class="nav-item">
                <a href="#share-head-section" class="nav-link">Donate</a>
            </li>
            </ul>
        </div>
    </div>
</nav>