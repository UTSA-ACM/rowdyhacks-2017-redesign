<!DOCTYPE html>
<html lang="en" id="top-section">

<head>
  <!-- Include Meta Tags and Global CSS Files -->
  <?php include('widgets/css_files.php'); ?>
</head>

<body>
<!-- Include Top, Side, and Bottom Navbars -->
<?php include('widgets/navbar.php'); ?>

<!-- Start of Page Content -->
<div class="container">
  <div class="card card-block">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3 text-xs-center">
        <br>
        <img src="img/big134.png" alt="RowdyHacks" id="rh-home-logo" class="img-rounded center-block img-fluid wow
            zoomInLeft">
      </div>
    </div>


    <div class="row text-xs-center" id="home-page-main-text">
      <div class="col-xs-12">
        <hr>
        <p class="text-fluid">It’s official! Come join us at RowdyHacks as we build apps, games, and any other neat projects in 24 hours.
          Whether you’re a seasoned hacker or new to the hackathon community, we’ve got your back through the whole hacking experience.
        </p>
      </div>
      <div class="col-xs-12">
        <p class="text-fluid">If you aren’t familiar, a hackathon is where you turn your crazy ideas into real projects. Plenty of your fellow peers gather
          to build something they’re passionate about so get involved in making incredible things.</p>
      </div>
    </div>

    <div class="row hidden-lg-up">
      <div class="col-xs-12 text-xs-center">
        <hr>
        <a href="schedule" class="btn rh-peach-rounded-outline waves-effect text-uppercase">Schedule</a>
        <a href="faq" class="btn rh-peach-rounded-outline waves-effect text-uppercase">FAQs</a>
      </div>
    </div>


    <div class="row">
      <div class="col-xs-12 text-xs-center">
        <hr>
        <h3 class="page-header">Sponsors</h3>
        <hr class="hr-custom-pink">
        <p>Sponsor info coming soon</p>
        <hr>
      </div>
    </div>

    <div class="row" id="countdown-clock">
      <?php include('widgets/countdown_clock.php'); ?>
    </div>

  </div>
</div>



<!-- Include Page Up Feauture -->
<?php include('widgets/page_up.php'); ?>

<!-- Include all necessary Javascript files -->
<?php include('widgets/scripts.php'); ?>

</body>
</html>
