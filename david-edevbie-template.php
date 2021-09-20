<?php
    //  Template Name: David Edevbie Theme
    get_header();
?>

<header class="home">
      <?php include('modules/main-nav.php'); ?>
      <div class="container p-top-300">
        <div class="row">
          <div class="col-md-6">
            <h1>David Edevbie</h1>
            <div class="row">
              <div class="col-md-10">
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus libero dolor minus aut rem reiciendis itaque neque dolorum accusantium nostrum.
                </p>
                <form class="join-form">
                  <input type="email" placeholder="Your Email Address">
                  <input type="number" placeholder="Phone Number">
                  <button class="btn">Join Team David</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</header>

<section class="brief-description">
  <div class="container">
    <div class="row">
      <div class="col-md-10 bg-grey mx-auto">
        <div class="row">
          <div class="col-2 short-desc-img">
            <img src="./img//sect-2-img.png" alt="" class="img-fluid d-none">
          </div>
          <div class="col py-4 mb-3">
            <h2>Record of fighting for all deltains</h2>
            <p class="desc">David Edvbie is a lifelong Deltain who as worked tirelessly to protect and improve the Deltain's way of life. And if you want to know what he will
               do as Our Governor, just take a loook at what we have done in the past. Take a look at out interactive map of what we've accomplished by bringing
                people together to do what's right for Delta.</p>
              <a href="#" class="desc-link"> View interactive map</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="get-involved">
  <div class="container">
    <div class="row col-md-10 mx-auto">
      <div class="row">
        <div class="col-md-4 mb-5">
          <a href="/vote.html" class="card-link">
            <div class="card text-center">
              <img src="./img/ballot.svg" alt="plan-to-vote" class="img-fluid icons">
              <p class="involved-text">Make a plan to vote</p>
            </div>
          </a>
        </div>
        <div class="col-md-8 mb-5 pb-4">
          <h4>Get Involved</h4>
          <p class="desc">
            The way we win is by people talking to people all across Montana.
             There are lots of ways to help spread the word in your local community,
              even from the comfort of your home.
          </p>
          <a href="/get-involved.html" class="desc-link">Find out how to get involved</a>
        </div>
        <div class="col-md-4">
          <a href="#" class="card-link">
            <div class="card text-center">
              <img src="./img/calendar.svg" alt="plan-to-vote" class="img-fluid icons">
              <p class="involved-text">Find an event</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#" class="card-link">
            <div class="card text-center">
              <img src="./img/global-connection.svg" alt="plan-to-vote" class="img-fluid icons">
              <p class="involved-text">Share your story</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="/volunteer.html" class="card-link">
            <div class="card text-center">
              <img src="./img/heart.svg" alt="plan-to-vote" class="img-fluid icons">
              <p class="involved-text">Volunteer</p>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-4">
      </div>
    </div>
  </div>
</section>

<section class="issue">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2>On the issues</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 pr-0 pl-0">
        <div class="issues">
          <div class="header-excerpt-text">
            <h4>Economy</h4>
            <p>Lorem, ipsum dolorsknsakjsbdasds.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pr-0 pl-0">
        <div class="issues issues-2">
          <div class="header-excerpt-text">
            <h4>Security</h4>
            <p>Lorem, ipsum dolorsknsakjsbdasds.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 pr-0 pl-0">
        <div class="issues issues-3">
          <div class="header-excerpt-text">
            <h4>Energy</h4>
            <p>Lorem, ipsum dolorsknsakjsbdasds.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>


