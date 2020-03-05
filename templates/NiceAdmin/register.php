<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo template_dir(); ?>img/favicon.png">

  <title>Register | Creative - Bootstrap 3 Responsive Admin Template</title>

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

    <div class="login-form">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>

        <div class="form-group">
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" id="inp_f_name" placeholder="First name" required>
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="inp_l_name" placeholder="Last name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" id="inp_email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Pass</label>
            <input type="text" class="form-control" id="inp_pass" placeholder="Password" required>
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Date Birth</label>
            <input type="text" class="form-control date" id="inp_dob" placeholder="Date Of Birth" required>
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Credit Card</label>
            <input type="text" class="form-control" id="inp_cc" placeholder="Credit Card" required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Member Type</label>
            <select class="form-control basic-select" id="inp_tipe">
<?php 
    $_member_type = ["Silver", "Gold", "Platinum", "Black", "VIP", "VVIP"];
    foreach($_member_type as $_type) echo "<option value='{$_type}'>{$_type}</option>";
?>
            </select>
        </div>

        <div id="big-div-address"></div>

        <button class="btn btn-success btn-sm btn-block" onclick="add_address();false;">Add More Address</button>

        <input type="checkbox" value="agred" id='termcondition'> Our Term And Condition
        <button class="btn btn-primary btn-lg btn-block" onclick="send_data();false;">Send</button>
      </div>
    </div>
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
