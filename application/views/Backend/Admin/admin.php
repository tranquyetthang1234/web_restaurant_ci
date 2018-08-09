<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat &amp; Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo admin_url()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo admin_url()?>/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo admin_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo admin_url()?>/css/style.css" rel="stylesheet">
    <link href="<?php echo admin_url()?>/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-body" style="">

    <div class="container">
       <?php if($this->session->flashdata('message')):?>
                <div class="col-xs-12 thang">
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong><?php echo  $this->session->flashdata('message');?>  </strong>
                 </div>
                 <?php endif;?>
            </div>
      <form class="form-signin" action="<?php echo base_url()?>Backend/LoginController/index" method="POST">
        <h2 class="form-signin-heading">Đăng nhập hệ thống</h2>
         
        <div class="login-wrap">

            <input type="text" name="username" class="form-control" placeholder="Username ..." autofocus="">
            <input type="password" name="password" class="form-control" placeholder="Passowrd...">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
           
           

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo admin_url()?>/js/jquery.js"></script>
    <script src="<?php echo admin_url()?>/js/bootstrap.min.js"></script>


  

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:57 GMT -->

</body>