<?php
//$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$system_name  = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
?>

<html class="no-js" lang="">
    <head>

      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
        <?php echo get_phrase('login'); ?> | <?php echo $system_name; ?>
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
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
    <script src="<?php echo base_url();?>assets/login_page/js/vendor/modernizr-2.8.3.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>



<style type="text/css">
html { 
  background: url(uploads/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>


<div class="login-box">
  
  <div class="login-logo">
   
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <a href="<?php echo base_url();?>index.php?login" class="logo">
            <center><img src="<?php echo base_url();?>uploads/logo.png" height="110" alt=""></center>
          </a>
     <h3 class="login-box-msg"> <strong><?php echo $system_name; ?></strong></h3>
    <p class="login-box-msg">Sign in to start your session</p>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />




<div class="alert success" id="success" style="display: none;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;</span> Login Successfull... Please Wait..!!
                </div>


<div class="alert" id="alert" style="display: none;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
   <i class="fa fa-warning" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;</span> Password Or Email Is Wrong, Try Again..!!
                </div>



<div class="alert" id="alert-req" style="display: none;">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
   <i class="fa fa-warning" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;</span>Please Enter Your Email & Password..!!
                </div>

 <form  id="formadd" enctype="multipart/form-data">


      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo get_phrase('student_code/Email');?>" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo get_phrase('password');?>" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>



      </div>

<br/>
        <button  type="button" style="width: 100%"  onclick="login_button()" class="btn btn-primary">Sign In&nbsp;&nbsp;



          <i id="icon" class="glyphicon glyphicon-send"></i>&nbsp;&nbsp;<img src="https://www.prepsos.com/wp-content/plugins/red-olive-woocommerce/assets/img/giphy.gif" width="15" height="15" id="img" style="display:none" /></button>
        </i>

<p></p>

           <a href="<?php echo base_url();?>index.php?login/forgot_password"><botton style="width: 100%" class="btn btn-danger">I forgot my password&nbsp;&nbsp;<i class="glyphicon glyphicon-chevron-right"></i></a>
        </botton>

</form>
   
<hr/>
  
  <div class="lockscreen-footer text-center">
    Copyright &copy; <b><a href="" class="text-blue"><?php echo $this->db->get_where('settings', array('type' => 'website'))->row()->description;?></a></b>

  </div> 
   </body>
    <!-- /.social-auth-links -->
</html>
<script type="text/javascript">
    
    function login_button()
    {


      $('#img').show();
      $('#icon').hide();



        email            = $("#email").val();
        password         = $("#password").val();

        if ( email == "" || password == "") {
          $( "#alert-req" ).slideDown( 300 ).delay( 3000 ).slideUp( 400 );
           $('#img').hide();
            $('#icon').show();
            return false;

        }


        
        var data = $('#formadd').serialize();
     
        $.ajax({

             url: '<?php echo base_url();?>index.php?login/validate_login',
             type:'POST',
             data:data,
             async: true,
             cache: false,
             timeout: 0, 





           

                 success: function(data) {


                   if (data == "admin-success") {
  
      $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
      $('#img').hide();
       $('#icon').show();
      $("#loader-wrapper").delay(4000).fadeIn();



      $("#studentaddbtn").attr("disabled", false);
      location.href = "<?php echo base_url();?>index.php?admin/dashboard"

      } 

   if (data == "accountant-success") {
  
      $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
      $('#img').hide();
       $('#icon').show();
      location.href = "<?php echo base_url();?>index.php?accountant/dashboard"

      } 

         if (data == "parent-success") {
  
      $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
      $('#img').hide();
       $('#icon').show();
      location.href = "<?php echo base_url();?>index.php?parents/dashboard"

      } 

         if (data == "student-success") {
  
      $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
      $('#img').hide();
       $('#icon').show();
      location.href = "<?php echo base_url();?>index.php?student/dashboard"

      } 

        if (data == "librarian-success") {
  
       $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
       $('#img').hide();
        $('#icon').show();
       location.href = "<?php echo base_url();?>index.php?librarian/dashboard"

      } 

        if (data == "teacher-success") {
  
      $( "#success" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
      $('#img').hide();
       $('#icon').show();
      location.href = "<?php echo base_url();?>index.php?teacher/dashboard"

      } 

       if (data == "error") {
    
       $( "#alert" ).slideDown( 300 ).delay( 4000 ).slideUp( 400 );
       $('#img').hide();
        $('#icon').show();
       $("#studentaddbtn").attr("disabled", false);
  } 



            }

        });

        return false;
    }

</script>



<script src="<?php echo base_url();?>assets/css/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/css/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/css/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
 <script src="<?php echo base_url();?>assets/login_page/js/vendor/jquery-1.12.0.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>



    <?php if ($this->session->flashdata('login_error') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('wrong_email or password');?>!!</strong>',
          message: '<?php echo $this->session->flashdata('');?>'
          },{
          // settings
          type: 'danger'
        });
      </script>
    <?php } ?>


 <?php if ($this->session->flashdata('error_message') != '') { ?>
      <script type="text/javascript">
        $.notify({
          // options
          title: '<strong><?php echo get_phrase('We Are Unable To Verify You...</strong> Please Login Again..');?>!!',
          message: '<?php echo $this->session->flashdata('');?>'
          },{
          // settings
          type: 'danger'
        });
      </script>
    <?php } ?>

   

