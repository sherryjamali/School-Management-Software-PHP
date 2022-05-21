

      <?php

        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

        { 
            ?>

<style type="text/css">

table {
 margin: auto;
  border-collapse: collapse;
  overflow-x: auto;
  display: block;
  width: fit-content;
  max-width: 100%;
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, .1);
}



th {
  background-color: rgb(190, 220, 250);
  text-transform: uppercase;
  padding-top: 1rem;
  padding-bottom: 1rem;
  border-bottom: rgb(50, 50, 100) solid 2px;
  border-top: none;
}



td:first-of-type, th:first-of-type {
  border-left: none;
}

td:last-of-type, th:last-of-type {
  border-right: none;
}
</style>
<?php
        }
        else{
        }
?>


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
        <?php echo get_phrase('noticeboard'); ?> | <?php echo $system_name; ?>
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


  
  <div class="login-logo">
   
  </div> 
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <a href="<?php echo base_url();?>index.php?login" class="logo">
            <center><img src="<?php echo base_url();?>uploads/logo.png" height="110" alt=""></center>
          </a>
              <center><h3> <?php echo $system_name; ?> Noticeboard</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Notice Id</th>
                  <th>Notice</th>
                  <th>Campus</th>
                   <th>Date Added</th>
                   <th>Running</th>
                </tr>
                </thead>
                <tbody>
            <?php 
             $this->db->where('status', "1");
             $this->db->limit(10);
            $notices = $this->db->get_where('noticeboard')->result_array();
        foreach ($notices as $row):?>
                <tr>
                  <td><?php echo $row['notice_id']; ?></td>
                  <td><b><span style="color: red"><?php echo $row['notice_title']; ?></span></b><br><?php echo $row['notice']; ?></td>
                  <td><?php echo $this->db->get_where('campus', array('campus_id' => $row['campus']))->row()->campus_name; ?></td>
                   <td>  <?php

//define date and time
$create_timestamp = $row['create_timestamp'];


// output
echo date('d M Y',$create_timestamp);

?></td>


                 



                   <td><?php if($row['status'] == 1);?><span class="label label-success" style="font-size: 10px;" style="width: 1px;"> YES </span></td>
                </tr>
              
                 <?php endforeach; ?>
                </tbody>
               
              </table>
                
        <br>
        <br>
           <a href="<?php echo base_url();?>">&nbsp;<botton class="label label-success" style="font-size: 11px;" style="width: 2px;"> <i class="glyphicon glyphicon-ok-sign"></i>&nbsp;&nbsp; RETRUN TO MENU&nbsp;&nbsp;</a>
        </botton>
            </div>
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

                 
               