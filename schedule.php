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
      <div class="card card-block" id="schedule-card-block">
        <div class="row">
          <div class="col-xs-12 text-sm-center">
            <h3 class="card-title page-header">Schedule</h3>
            <hr class="hr-page-header">
          </div>

          <!-- Schedule tabs -->
          <div class="container">
            <ul class="col-xs-12 flex-center nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#friday" role="tab">Friday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#saturday" role="tab">Saturday</a>
              </li>
            </ul>
          </div>

          <!-- Tab panels -->
          <div class="tab-content text-xs-center">

            <!-- Friday -->
            <div class="tab-pane active" id="friday" role="tabpanel">
              <br>
              <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                  <dl class="row dl-horizontal">
                    <dt class="col-xs-5">5:00 - 6:00 pm</dt>
                    <dd class="col-xs-7">Check In/Registration</dd>
                    <br><br><br>
                    <dt class="col-xs-5">6:00 - 7:00 pm</dt>
                    <dd class="col-xs-7">Opening Ceremonies/Dinner</dd>
                    <br><br><br>
                    <dt class="col-xs-5">12:00 am</dt>
                    <dd class="col-xs-7">Midnight Snack</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!--/.Friday-->

            <!--Saturday-->
            <div class="tab-pane" id="saturday" role="tabpanel">
              <br>
              <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                  <dl class="row dl-horizontal">
                    <dt class="col-xs-5">7:00 am</dt>
                    <dd class="col-xs-7">Breakfast</dd>
                    <br><br><br>
                    <dt class="col-xs-5">12:00 pm</dt>
                    <dd class="col-xs-7">Project Submissions/Lunch</dd>
                    <br><br><br>
                    <dt class="col-xs-5">12:00 - 3:00 pm</dt>
                    <dd class="col-xs-7">Judging</dd>
                    <br><br><br>
                    <dt class="col-xs-5">3:00 - 5:00 pm</dt>
                    <dd class="col-xs-7">Presentations/Prizes</dd>
                    <br><br><br>
                    <dt class="col-xs-5">5:00 - 6:00 pm</dt>
                    <dd class="col-xs-7">Closing Ceremonies</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!--/.Saturday-->

          </div>

        </div>
    </div>

    <!-- Include all necessary Javascript files -->
    <?php include('widgets/scripts.php'); ?>

</body>
</html>
