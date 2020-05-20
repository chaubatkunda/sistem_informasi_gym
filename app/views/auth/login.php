<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('public/assets/icon/'); ?>/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url('public/assets/icon/'); ?>apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo base_url('public/assets/icon/'); ?>favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo base_url('public/assets/icon/'); ?>favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo base_url('public/assets/icon/'); ?>favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo base_url('public/assets/icon/'); ?>favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo base_url('public/assets/icon/'); ?>favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />



  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/normalize.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/form/all-type-forms.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/'); ?>css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
  <div class="error-pagewrap">
    <div class="error-page-int">
      <div class="text-center m-b-md custom-login">
        <h3>EGY GYM <strong class="text-primary">MALANG</strong></h3>
        <!-- <h3>LOGIN</h3> -->
      </div>
      <div class="content-error">
        <div class="hpanel">
          <div class="panel-body">
            <?php echo $this->session->flashdata('login'); ?>
            <form action="" method="POST" id="loginForm">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="Username" title="Please enter you username" value="" name="username" id="username" class="form-control" autocomplete="off" autofocus>
                <?php echo form_error('username', '<span class="help-block small text-danger">', '</span>'); ?>
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" value="" name="password" id="password" class="form-control">
                <?php echo form_error('password', '<span class="help-block small text-danger">', '</span>'); ?>
              </div>
              <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
              <a class="btn btn-default btn-block" href="<?php echo base_url('calon-member'); ?>">Register</a>
            </form>
          </div>
        </div>
      </div>
      <div class="text-center login-footer">

      </div>
    </div>
  </div>
  <!-- jquery
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo base_url('public/assets/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/metisMenu/metisMenu.min.js"></script>
  <script src="<?php echo base_url('public/assets/'); ?>js/metisMenu/metisMenu-active.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/tab.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/icheck/icheck.min.js"></script>
  <script src="<?php echo base_url('public/assets/'); ?>js/icheck/icheck-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="<?php echo base_url('public/assets/'); ?>js/main.js"></script>
</body>

</html>