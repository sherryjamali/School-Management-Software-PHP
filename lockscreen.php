<style type="text/css">
html { 
  background: url(uploads/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<!doctype html>
<?php
//$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$system_name  = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
?>

<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
        <?php echo get_phrase('System_locked'); ?> | <?php echo $system_name; ?>
      </title>
  <!-- Tell the browser to be responsive to screen width -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/login_page/img/favicon.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
    <script src="<?php echo base_url();?>assets/login_page/js/vendor/modernizr-2.8.3.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">


 
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



 
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

 <!-- /.login-logo -->

<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">

  <a href="<?php echo base_url();?>index.php?login" class="logo">
          </a>
  
    <b><?php echo $system_name; ?></b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name" style="font-size: 22px;" style="margin: 100px;"><center> <?php echo $name; ?></center></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo base_url();?>uploads/logo.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form method="post" role="form"  class="lockscreen-credentials" id="form_login"
            action="<?php echo base_url();?>index.php?login/lock">
    
      <div class="input-group">
        <input type="password" class="form-control" name="password" placeholder="password">
    
        <div class="input-group-btn">
          <button type="submit" class="btn"><i class="glyphicon glyphicon-chevron-right"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    <li style="color: white"</li>Enter your password to retrieve your session
  </div>

  
          <script type="text/javascript" language="JavaScript">
document.forms['form_login'].elements['password'].focus();
</script>

<!-- /.center -->


    <script src="<?php echo base_url();?>assets/login_page/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <?php if ($this->session->flashdata('reset_error') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('error');?>!!</strong>',
          message: '<?php echo $this->session->flashdata('reset_error');?>'
          },{
          // settings
          type: 'danger'
        });
      </script>
    <?php } ?>
    <?php if ($this->session->flashdata('reset_success') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('');?></strong>',
          message: '<?php echo $this->session->flashdata('reset_success');?>'
          },{
          // settings
          type: 'success'
        });
      </script>
    <?php } ?>

</html>
