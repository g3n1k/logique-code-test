<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo template_dir(); ?>img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo template_dir(); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo template_dir(); ?>css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo template_dir(); ?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo template_dir(); ?>css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo template_dir(); ?>css/style.css" rel="stylesheet">
  <link href="<?php echo template_dir(); ?>css/style-responsive.css" rel="stylesheet" />
  <script> function base_url() { return "<?php echo base_url();?>" }; </script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="<?php echo base_url()."logique/login/enter";?>" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-email"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-password"></i></span>
          <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <a class="btn btn-info btn-lg btn-block" href="<?php echo base_url()."register";?>">Register</a>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>
    <input type="hidden" value="<?php echo $status;?>" id="status">

  <script src="<?php echo template_dir(); ?>js/jquery.js"></script>
  <script src="<?php echo template_dir(); ?>js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo template_dir(); ?>js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo template_dir(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="<?php echo template_dir(); ?>js/scripts.js"></script>
  <?php echo @if_empty($include_script,'<meta name="noscript">'); ?>

</body>

</html>
