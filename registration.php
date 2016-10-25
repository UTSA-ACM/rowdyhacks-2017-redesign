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
              <div class="col-xs-12">
                <h4 id="faq-main-text" class="card-title rh-peach-text">Registration</h4>
                <hr>
              </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                <!--Accordion wrapper-->
                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                    <!--First panel-->
                    <div class="panel panel-default">

                        <!--Panel heading-->
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Participants
                                </a>
                            </h4>
                        </div>

                        <!--Panel body-->
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            Form coming soon
                        </div>
                    </div>
                    <!--/.First panel-->

                    <!--Second panel-->
                    <div class="panel panel-default">

                        <!--Panel heading-->
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Volunteers
                                </a>
                            </h4>
                        </div>

                        <!--Panel body-->
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            Form Coming Soon
                        </div>
                    </div>
                    <!--/.Second panel-->

                    <!--Third panel-->
                    <div class="panel panel-default">

                        <!--Panel heading-->
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Mentors
                                </a>
                            </h4>
                        </div>

                        <!--Panel body-->
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            Form coming soon
                        </div>
                    </div>
                    <!--/.Third panel-->

                    <!--Fourth panel-->
                    <div class="panel panel-default">

                        <!--Panel heading-->
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Sponsors
                                </a>
                            </h4>
                        </div>

                        <!--Panel body-->
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            Form coming soon
                        </div>
                    </div>
                    <!--/.Fourth panel-->

                </div>
                <!--/.Accordion wrapper-->

                </div>

            </div>
        </div>
    </div>

    <!-- Include Page Up Feauture -->
    <?php include('widgets/page_up.php'); ?>

    <!-- Include all necessary Javascript files -->
    <?php include('widgets/scripts.php'); ?>

</body>
</html>
