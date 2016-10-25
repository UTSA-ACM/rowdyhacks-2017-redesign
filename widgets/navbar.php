<!--Top/Mobile Navbar-->
<nav class="navbar navbar-fixed-top navbar-light bg-faded">
  <div class="container">
    <!--Collapse button-->
    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fa fa-bars fa-lg black-text"></i></a>
    <a href="#" data-activates="mobile-menu" class="button-collapse rh-blue-text hidden-lg-up">RowdyHacks</a>
    <a data-activates="slide-out-right" class="button-collapse-register btn-flat pull-xs-right no-padding-x
    rh-peach-text" id="register-button"><i class="fa fa-terminal" aria-hidden="true"></i> Register</a>

    <!--Content for large and medium screens-->
    <div class="navbar-desktop">
        <!--Navbar Brand-->
        <a href="home" class="navbar-brand yellowtail rh-purple-text" href="#">RowdyHacks</a>
        <!--Links-->
        <ul class="nav navbar-nav">
            <li class="nav-item m-l-1">
                <a class="nav-link nav-top-link" href="schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-top-link" href="faq">Faq</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-top-link" data-toggle="modal" data-target="#contact-info">Contact</a>
            </li>
        </ul>
    </div>
  </div>

    <!-- Content for mobile devices-->
    <div class="navbar-mobile">
        <div class="side-nav" id="mobile-menu">
            <div class="row">
              <div class="col-xs-12">
                <img src="img/rh-mobile.png" alt="RowdyHacks" class="img-fluid">
              </div>
            </div>
            <div class="row text-xs-center">
              <div class="col-xs-12">
                <h4 class="event-details">Event Details</h4>
                <hr class="hr-custom-tan">
              </div>
            </div>
            <div class="row text-xs-center">
              <p><strong><span class="rh-blue-text">When</span></strong><br>
                5:00pm April 7th - 6:00pm April 8th</p>
            </div>
            <div class="row text-xs-center">
              <p><strong><span class="rh-blue-text">Where</span></strong><br>
                UTSA Main Campus (TBA)</p>
            </div>
            <div class="row text-xs-center">
              <p><strong><span class="rh-blue-text">Participants</span></strong><br>
                200</p>
            </div>

            <div class="row">
              <hr>
              <ul class="social">
                <li><a href="mailto:team@rowdyhacks.org?Subject=RowdyHacks%202017%20Information" class="icons-sm em-ic"><i class="fa fa-envelope-o fa-2x"> </i></a></li>
                <li><a href="https://www.facebook.com/acmutsa" class="icons-sm fb-ic"><i class="fa fa-facebook fa-2x"> </i></a></li>
                <li><a href="https://twitter.com/acm_utsa" class="icons-sm tw-ic"><i class="fa fa-twitter fa-2x"> </i></a></li>
                <li><a href="https://github.com/UTSA-ACM" class="icons-sm git-ic"><i class="fa fa-github fa-2x"> </i></a></li>
              </ul>
            </div>
            <div class="row text-xs-center">
              <p><strong><span class="rh-blue-text">Hosted by:</span></strong><br>
                ACM UTSA</p>
            </div>
        </div>
    </div>
</nav>
<!--/.Navbar-->


<!-- Bottom Navbar (mobile only) -->
<nav class="navbar navbar-fixed-bottom navbar-light bg-faded hidden-md-up">
  <div class="container">
    <div class="row" style="margin-top: 8px;">
      <div class="col-xs-3 text-xs-center">
        <a href="home"><i class="fa fa-home fa-lg"></i></a>
      </div>
      <div class="col-xs-3 text-xs-center">
        <a href="schedule"><i class="fa fa-calendar fa-lg"></i></a>
      </div>
      <div class="col-xs-3 text-xs-center">
        <a href="faq"><i class="fa fa-question-circle-o fa-lg"></i></a>
      </div>
      <div class="col-xs-3 text-xs-center">
        <a data-toggle="modal" data-target="#contact-info"><i class="fa fa-comments fa-lg"></i></a>
      </div>
    </div>
  </div>
</nav>


<!-- Registration Sidebar -->
<ul id="slide-out-right" class="side-nav default-side-nav light-side-nav" style="z-index: 1031;">
    <div class="row">
        <div class="col-xs-12" id="registration-links">
            <h3 class="rh-peach-text page-header p-l-2">Registration</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
            <a href="participants"><i class="fa fa-caret-right left" aria-hidden="true"></i> Participate</a>
            <a href="volunteer"><i class="fa fa-caret-right left" aria-hidden="true"></i> Volunteer</a>
            <a><i class="fa fa-caret-right left" aria-hidden="true"></i> Sponsor</a>
            <hr>
        </div>
    </div>
</ul>
<!--/. Registration Sidebar -->


<!-- Contact Modal -->
<div class="modal fade" id="contact-info" tabindex="-1" role="dialog" aria-labelledby="contact-info" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title page-header" id="myModalLabel">Contact Information</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="row text-xs-center">
                    <div class="col-xs-12">
                        <h5 class="contact-form-headers">Email Us</h5>
                        <p><a href="mailto:team@rowdyhacks.org?Subject=RowdyHacks%202017%20Information">team@rowdyhacks.org</a></p>
                    </div>
                </div>
                <hr>
                <div class="row text-xs-center">
                    <div class="col-xs-12">
                        <h5 class="contact-form-headers">The Association for Computing Machinery at UTSA</h5>
                    </div>
                </div>
                <div class="row text-xs-center" style="margin-top:5px;">
                    <div class="col-xs-12">
                        <a href="https://acm-utsa.org"><i class="fa fa-external-link fa-lg" aria-hidden="true"></i></a></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-12 text-xs-center">
                    <a href="faq.php" class="btn rh-peach-rounded-outline waves-effect text-uppercase">Frequently Asked Questions</a>
                  </div>
                </div>
                <hr>
                <div class="row text-xs-center">
                    <h5 class="contact-form-headers">Connect via Social Media</h5>
                    <ul class="inline-ul">
                        <li><a href="https://www.facebook.com/acmutsa" class="icons-sm fb-ic"><i class="fa fa-facebook fa-lg"> </i></a></li>
                        <li><a href="https://twitter.com/acm_utsa" class="icons-sm tw-ic"><i class="fa fa-twitter fa-lg"> </i></a></li>
                    </ul>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn rh-peach-bg" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
