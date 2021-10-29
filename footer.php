<?php $footer1 = get_field('secondary_footer', 'option'); if($footer1): ?>
<section class="sec-footer" style="background: #fff url(<?= $footer1['background_image'] ?>) no-repeat 85% top !important;background-size: 500px !important;">
  <div class="container">
    <div class="row <?php if ( get_the_ID() === 6 ): echo 'hide-footer-form footer-form' ?> <?php endif; ?>">
      <div class="col-md-6">
        <h4><?= $footer1['title_one'] ?></h4>
        <h1><?= $footer1['title_two'] ?></h1>
          <div class="row">
            <div class="col-md-8">
              <?= do_shortcode($footer1['form_shortcode']); ?>
              <!-- <form class="join-form join-form-invert">
                <input type="email" placeholder="Your Email Address">
                <input type="number" placeholder="Phone Number">
                <button class="btn">Join Team David</button>
              </form> -->
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php $footer2 = get_field('primary_footer', 'option'); if($footer2): ?>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center z-index">
        <?php $donate_btn = $footer2['donate_button']; foreach($donate_btn as $btn):?>
          <a href="<?= $btn['button_link']; ?>">
            <button class="btn"><?= $btn['button_text']; ?></button>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="row mt-5 pt-5">
      <div class="col-12 text-center">
        <a class="d-flex align-items-center justify-content-center logo-footer-link" href="<?= site_url(); ?>">
          <img src="<?= get_template_directory_uri() ?>/img/black-logo.png" alt="" class="logo-footer img-fluid">
          David Edevbie
        </a>
        <ul class="d-flex align-items-center justify-content-center flex-wrap">
          <?php $footer_links = $footer2['footer_links']; foreach($footer_links as $links):?>
            <li>
              <a href="<?= $links['link_location']; ?>"><?= $links['link_text']; ?></a>
            </li>
          <?php endforeach; ?>
          <!-- <li>
            <a href="">On the Issue</a>
          </li>
          <li>
            <a href="">Vote</a>
          </li> -->
        </ul>
        <div class="footer-social d-flex align-items-center justify-content-center">
          <?php $social_media = $footer2['social_icon']; foreach($social_media as $social):?>
            <a href="<?= $social['icon_url']; ?>"> <img src="<?= $social['icon_image']; ?>" alt=""></a>
          <?php endforeach; ?>
          <!-- <a href=""> <img src="./img/icons/instagram-black.svg" alt=""></a>
          <a href=""> <img src="./img/icons/twitter-black.svg" alt=""></a>
          <a href=""> <img src="./img/icons/linkedin-black.svg" alt=""></a> -->
        </div>

        <div class="mt-3">
           <!-- <?= $footer2['footer_address_map'] ?> -->
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3571105586893!2d6.689397164769117!3d6.216548345499858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1043f242086d10a7%3A0x8a7b705ea7df83e8!2sDDPA%20Housing%20Estate%2C%20Central%20Area%20320108%2C%20Asaba!5e0!3m2!1sen!2sng!4v1634149942181!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
          </div>
          <p class="mt-3 black-color d-flex align-items-center justify-content-center flex-wrap">
            <img class="map-icon" src="<?= get_template_directory_uri() ?>/img/icons/maps-and-flags.png ?>" alt="">
            <a href="<?= $footer2['footer_address_link'] ?>" target="_blank">
              <?= $footer2['footer_address'] ?>
            </a>
          </p>

      </div>
    </div>
  </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>
