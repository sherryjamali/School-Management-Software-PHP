
<!doctype html>

<style>

    .id-card-holder {
        width: 225px;
        padding: 4px;
        margin: 0 auto;
        background-color: #1f1f1f;
        border-radius: 5px;
        position: relative;
    }
    .id-card-holder:after {
        content: '';
        width: 7px;
        display: block;
        background-color: #0a0a0a;
        height: 100px;
        position: absolute;
        top: 105px;
        border-radius: 0 5px 5px 0;
    }
    .id-card-holder:before {
        content: '';
        width: 7px;
        display: block;
        background-color: #0a0a0a;
        height: 100px;
        position: absolute;
        top: 105px;
        left: 222px;
        border-radius: 5px 0 0 5px;
    }
    .id-card {

        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 1.5px 0px #b9b9b9;
    }
    .id-card img {
        margin: 0 auto;
    }
    .header img {
        width: 100px;
        margin-top: 15px;
    }
    .photo img {
        width: 80px;
        margin-top: 15px;
    }
    .id-card  h2 {
        font-size: 15px;
        margin: 5px 0;
    }
    .id-card h3 {
        font-size: 12px;
        margin: 2.5px 0;
        font-weight: 300;
    }
    .qr-code img {
        width: 50px;
    }
    .id-card  p {
        font-size: 5px;
        margin: 2px;
    }
    .id-card-hook {
        background-color: #000;
        width: 70px;
        margin: 0 auto;
        height: 15px;
        border-radius: 5px 5px 0 0;
    }
    .id-card-hook:after {
        content: '';
        background-color: #d7d6d3;
        width: 47px;
        height: 6px;
        display: block;
        margin: 0px auto;
        position: relative;
        top: 6px;
        border-radius: 4px;
    }
    .id-card-tag-strip {
        width: 45px;
        height: 40px;
        background-color: #0950ef;
        margin: 0 auto;
        border-radius: 5px;
        position: relative;
        top: 9px;
        z-index: 1;
        border: 1px solid #0041ad;
    }
    .id-card-tag-strip:after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        background-color: #c1c1c1;
        position: relative;
        top: 10px;
    }
    .id-card-tag {
        width: 0;
        height: 0;
        border-left: 100px solid transparent;
        border-right: 100px solid transparent;
        border-top: 100px solid #0958db;
        margin: -10px auto -30px auto;
    }
    .id-card-tag:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-top: 100px solid #d7d6d3;
        margin: -10px auto -30px auto;
        position: relative;
        top: -130px;
        left: -50px;
    }
</style>

<?php
//$system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$system_name  = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
foreach($student_information as $row):
    

                      $class_id = $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->class_id;


 $id = $row['student_id'];
    $student = $this->db->get_where('student',array('student_id'=>$id))->row();
    $class_id = $this->db->get_where('enroll',array('student_id'=>$id))->row()->class_id;

?>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>
        <?php echo get_phrase('payment_details'); ?> | <?php echo $system_name; ?>
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


    <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">


    <div class="login-box-body">
    <a  class="logo">

            <center><img src="<?php echo base_url();?>uploads/logo.png" height="110" alt=""></center>
          </a>
     <h3 class="login-box-msg"> <strong><?php echo $system_name; ?></strong></h3>
   </div>
  <div class="login-logo">
   
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
             
         <center> <div class="photo">
            <img class="img-circle" src="<?php echo $this->crud_model->get_image_url('student',$student->student_id);?>" class="img-circle" width="30" /> </div>
      
        <h2><?php echo $student->name;?></h2>
        <table class="">
                   <tr>
              <td>    <strong>Roll</strong> </td>
                    <td>: &nbsp;&nbsp;</td>
                    <td><strong><?php echo $student->student_code; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Parent    <strong></td>
                    <td>: &nbsp;&nbsp;</td>
                    <td><strong><?php echo $student->pname; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Class</strong></td>
                    <td>: &nbsp;&nbsp;</td>
                    
                    <td><strong><?php echo $this->db->get_where('class', array('class_id' => $class_id))->row()->name; ?></strong></td>
                </tr>
               
                </table></tr></center> 

          

            </div>
            <!-- /.box-header -->
          <hr />
            <center><p style="color: black">   <button class="btn btn-alert btn-xs"><h4>Due Invoices</h4></p></button></center> 
          <hr>

  <div class="tab-content">
            <br>
                        <table class="table table-bordered datatable example">
                    <thead>
                        <tr>
                           <th><div><?php echo get_phrase('#');?></div></th>
                            <th><div><?php echo get_phrase('fee_title');?></div></th>
                            <th><div><?php echo get_phrase('total_amount');?></div></th>
                            <th><div><?php echo get_phrase('amount_paid');?></div></th>
                            <th><div><?php echo get_phrase('discount');?></div></th>
                               <th><div><?php echo get_phrase('due_amount');?></div></th>
                            <th><div><?php echo get_phrase('status');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                date_default_timezone_set("Asia/Karachi");
$d = date('m');
                              $this->db->where('student_id' , $row['student_id']);
                              $this->db->where('amount_paid' , '0');
                            $invoices = $this->db->get('invoice')->result_array();
                            foreach($invoices as $row3):
                        ?>
                        <tr>
                       
                            <td><b><?php echo $row3['invoice_id'];?><b></td>
                            <td><b><?php echo $row3['title'];?><b></td>
                            <td style="color: red"><?php echo $row3['amount'];?></td>
                            <td style="color: green"><?php echo $row3['amount_paid'];?></td>
                             <td><?php echo $row3['discount'];?></td>
                            <td><?php echo $row3['amount'] - $row3['amount_paid']- $row3['discount'];?></td>
                           

                            <?php if($row3['amount'] - $row3['amount_paid']- $row3['discount'] == 0):?>
                                <td>
                                    <button class="btn btn-success btn-s"><?php echo get_phrase('paid');?></button>
                                </td>
                            <?php endif;?>
                              <?php if($row3['amount'] - $row3['amount_paid']- $row3['discount'] < 0):?>
                                <td>
                                    <button class="btn btn-warning btn-s"><?php echo get_phrase('over_paid');?></button>
                                </td>
                            <?php endif;?>
                            <?php if($row3['amount'] - $row3['amount_paid']- $row3['discount'] > 0):?>
                                <td>
                                    <button class="btn btn-danger btn-s"><?php echo get_phrase('unpaid');?></button>
                                </td>
                            <?php endif;?>
                            
    
                        <?php endforeach; ?>




              </tr>
           
          </tbody>
      </table>
  <center><td height="30" colspan="4" class="small paddingleft5" id="bordercell4">
                              <p style="color: red">  PLEASE PAY YOUR DUES WITHIN DUE DATE</p>
   <!-- /.box-header -->
          <hr />
          <center><p style="color: black">   <button class="btn btn-alert btn-xs"><h4>Payment History</h4></p></button></center> 
          <hr>

  <div class="tab-content">
            <br>
                        <table class="table table-bordered datatable example">
                    <thead>
                        <tr>
                            <th><div><?php echo get_phrase('#');?></div></th>
                            <th><div><?php echo get_phrase('fee_title');?></div></th>
                            <th><div><?php echo get_phrase('amount_paid');?></div></th>
                            <th><div><?php echo get_phrase('discount');?></div></th>
                            <th><div><?php echo get_phrase('payment_date_&_time');?></div></th>
                            <th><div><?php echo get_phrase('received_by');?></div></th>
                            <th><div><?php echo get_phrase('status');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                date_default_timezone_set("Asia/Karachi");
$d = date('m');
                              $this->db->where('student_id' , $row['student_id']);
                            $invoices = $this->db->get('payment')->result_array();
                            foreach($invoices as $row4):
                        ?>
                        <tr>
                       
                            <td><b><?php echo $row4['invoice_id'];?><b></td>
                            <td><b><?php echo $row4['title'];?><b></td>
                            <td style="color: green"><?php echo $row4['amount'];?></td>
                             <td><?php echo $row4['discount'];?></td>
                                <td><?php echo $row4['date']; ?> &nbsp; <?php echo $row4['time'];?></td>
                                   <td><?php echo $row4['user'];?></td>
                                <td>
                                    <button class="btn btn-success btn-s"><?php echo get_phrase('paid');?></button>
                                </td>
                        
    
                        <?php endforeach; ?>




              </tr>
              <?php endforeach;?>
          </tbody>
      </table>
    </div>
                
        <br>
        <br>
        <hr>
          <a href="<?php echo base_url();?>" class="btn btn-success ">Go Back 
<i class="glyphicon glyphicon-ok-sign"></i></a> &nbsp;&nbsp;
<a  onclick="myFunction()"class="btn btn-primary ">Print Information 
<i class="glyphicon glyphicon-print"></i></a> &nbsp;&nbsp;
<script>
function myFunction() {
    window.print();
}
</script>
        <br>
        <br>
        
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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
          title: '<strong><?php echo get_phrase('success');?>!!</strong>',
          message: '<?php echo $this->session->flashdata('reset_success');?>'
          },{
          // settings
          type: 'success'
        });
      </script>
    <?php } ?>

    </body>
</html>
    <!-- /.social-auth-links -->
</html>
<!DOCTYPE html>
<html>
<head>
<hr>

  
  <div class="lockscreen-footer text-center">
    Copyright &copy; <b><a href="https://www.ourschool.online" class="text-blue">www.ourschool.online</a></b>

  </div>
</head>
<body>

</body>

</html>
