<style type="text/css">
  /* Absolute Center Spinner */
.loading {
  position: sticky;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 50%;
  left: 50%;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
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

<!DOCTYPE html>
<html lang="en">
<?php



$system_name  = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
?>


<script src="assets/js/jquery-1.11.0.min.js"></script>
<link rel="shortcut icon" href="assets/images/favicon.png">
<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/js/vertical-timeline/css/component.css">
<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
<link rel="stylesheet" href="assets/js/wysihtml5/bootstrap-wysihtml5.css">



<script src="<?php echo base_url();?>public/plugins/chartjs/Chart.min.js"></script>
<script src="<?php echo base_url();?>public/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>public/plugins/morris/morris.min.js"></script>



<script src="<?php echo base_url();?>assets/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/gauge.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/funnel.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/radar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
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

  <!-- iCheck -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/materialize.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
<!-- materialize icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Owl carousel -->
<link rel="stylesheet" href="<?php echo base_url();?>lib/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>lib/owlcarousel/assets/owl.theme.default.min.css">
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php echo base_url();?>lib/Magnific-Popup-master/dist/magnific-popup.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
  <div class="loading"><br/><br/><br/><br/></div>
<div id="student_dashboard">

 <?php include 'student_dashboard_ajax.php';?>
</div>

<div id="result"></div>

<p></p>
<!-- FOOTER  -->
<footer id="footer">
<div class="container">
  <div class="row row-footer-icon">
    <div class="col s12">
      <div class="footer-sosmed-icon ">
       


  <div class="row copyright">  <li class="fa fa-bank" aria-hidden="true" style="color: #EC2A2A;"></li> <span><?php echo $system_name; ?> APPLICATION</span>  <li class="fa fa-bank" aria-hidden="true" style="color: #EC2A2A;"></li><br/>
      Crafted by   &copy; <b><a href="" style="color: blue;" class="text-blue"><?php echo $this->db->get_where('settings', array('type' => 'website'))->row()->description;?></a></b>
  </div>
</div>
</footer>


  
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>




<script type="text/javascript">
 jQuery(document).ready(function($) {

      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
                back();
                return false;
            }
          }
        });

        window.history.pushState('<?php echo base_url();?>index.php?student/dashboard', null, null);
      }

    });
</script>
<script type="text/javascript">


$(document).ready(function(){
       $('div.loading').show();
    jQuery('div.loading').fadeOut(1000);
});


function back()
    {
        jQuery('div.loading').fadeIn(250);
        $('#back').hide();
         $('#back-icon').hide();
         $('#Wait').show();
         $('#Wait-icon').show();

         location.href = "<?php echo base_url();?>index.php?student/dashboard"
   
    }



 
      function diary()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_diary',


                 success: function(response)
            {
                  jQuery('div.loading').fadeOut(1000);
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Daily Homework Diary | <?php echo $system_name;?>");
                 NProgress.done();
            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }


function attendance()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_attendance',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Attendance Details | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }



function dues()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_dues',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Payment Details | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }



function marks()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_marks',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Mark Details | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }



function study_material()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_study_material',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Study Material | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }




function academic_syllabus()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_academic_syllabus',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Academic Syllabus | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }




function noticeboard()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_noticeboard',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "School Noticeboard | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }
  

function msg()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_msg',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Contact Us | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }


    function apply_leave()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_leave',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Request A Leave | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }

       function transport()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_transport',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Transport Details | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }



           function profile()
    {
        jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_profile',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "Change Password | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }


           function leave_status()
    {

           jQuery('div.loading').fadeIn(250);
   
        $.ajax({

            url: '<?php echo base_url();?>index.php?student/ajax_leave_status',


                 success: function(response)
            {
                 jQuery('div.loading').fadeOut(1000);
                  jQuery('#result').html(response);
                 $('#student_dashboard').hide();
                 $(document).attr("title", "All Leave Requests | <?php echo $system_name;?>");
                 NProgress.done();


            },

               error: function(response)
            {
              
              
                 jQuery('div.loading').fadeOut(1000);
                 toastr.error("<?php echo get_phrase('something_went_wrong...Please_try_again_later__!!!');?>")
            },


        });
              return false;

    }
               
</script>



    </body>
</html>
