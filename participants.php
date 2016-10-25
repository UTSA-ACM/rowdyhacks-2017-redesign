<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

  <?php include('widgets/css_files.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


  <!--CSS styles that ensure your typeform takes up all the available screen space (DO NOT EDIT!)-->
  <style type="text/css">
    html{
      margin: 0;
      height: 100%;
      overflow: hidden;
    }
    iframe{
      position: absolute;
      left:0;
      right:0;
      bottom:0;
      top: 0;
      border:0;
    }
  </style>
</head>
<body>

    <!-- Include Top, Side, and Bottom Navbars -->
    <?php include('widgets/navbar_return.php'); ?>

    <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://rowdyhacks1.typeform.com/to/DOmnFw"></iframe>
    <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>

    <!-- Include all necessary Javascript files -->
    <?php include('widgets/scripts.php'); ?>

</body>
</html>