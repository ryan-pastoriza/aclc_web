<?php

/**
 * @Author: JEEan
 * @Date:   2018-01-25 15:46:45
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-08-20 14:35:10
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACLC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/css/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/css/styles.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/toastr/toastr.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

  <script src="<?= base_url() ?>plugins/js/jquery.min.js"></script>	
  <link rel="stylesheet" href="<?= base_url() ?>plugins/plugins/DataTables/datatables.css">
  <script type="text/javascript" src="<?= base_url() ?>plugins/plugins/DataTables/datatables.js"></script>
  <script src="<?= base_url() ?>plugins/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>plugins/plugins/owl_carousel/docs/assets/owlcarousel/owl.carousel.js"></script>
  <script src="<?= base_url() ?>plugins/tinymce/jquery.tinymce.min.js"></script>
  <script src="<?= base_url() ?>plugins/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>plugins/js/dropzone.js"></script>
  <script src="<?= base_url() ?>plugins/js/jqueryForm.min.js"></script>
  <script src="<?= base_url() ?>plugins/plugins/toastr/toastr.min.js"></script>



  <script>
    $(function(){
      time();
      var start = new Date;
      tinyMCE.baseURL = "<?= base_url('plugins/tinymce') ?>";
      tinymce.init({
                    selector: 'textarea',
                    setup: function (editor) {
                        editor.on('change', function () {
                            editor.save();
                        });
                    },
                    height: 600,
                    resize: false,
                    theme: 'modern',
                    plugins: [
                              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                              'searchreplace wordcount visualblocks visualchars code fullscreen',
                              'insertdatetime media nonbreaking save table contextmenu directionality',
                              'emoticons template paste textcolor colorpicker textpattern imagetools'
                    ],
                    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist   numlist outdent indent | link image',
                    toolbar2: 'print preview media | forecolor backcolor',
                    image_advtab: true,
                    templates: [
                        { title: 'Test template 1', content: 'Test 1' },
                        { title: 'Test template 2', content: 'Test 2' }
                    ],

                    content_css: [
                        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                        '//www.tinymce.com/css/codepen.min.css'
                    ]
      });
    });

    function time(){
      var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','','Saturday'];
      var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      var date  = new Date();
      var ampm = date.getHours() < 12 ? 'AM' : 'PM';
      var hours = date.getHours() == 0 ? 12 :     date.getHours() > 12 ? '0'+(date.getHours() - 12) : date.getHours();
      var minutes = date.getMinutes() < 10 ?  '0' + date.getMinutes() : date.getMinutes();
      var seconds = date.getSeconds() < 10 ?  '0' + date.getSeconds() : date.getSeconds();
      var dayOfWeek = days[date.getDay()];
      var month = months[date.getMonth()];
      var day = date.getDate();
      var year = date.getFullYear();

      var dateString = dayOfWeek +", &nbsp;"+month + " "+day+", "+year + " &nbsp;"+hours+":"+minutes+":"+seconds + " "+ampm;
      $('.Timer').html(dateString);
    }
    window.setInterval(time, 1000);

  </script>
</head>
<body>
  <nav class="navbar box-edge no-margin">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="fa fa-bars c-white f-30"></span>                
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="<?= base_url() ?>plugins/images/logo.png" alt="" style="margin-top:10px;">
          </a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right pr-20">
            <li>
              <a href="#" class="c-white f-12 top-head" style="color:#FFF;">
                <div style="font-size:19px;padding-top:13px;" class="Timer"></div>
              </a>
          </li>
            <li>
              <a href="#" class="c-white f-12 top-head" style="color:#FFF;">
                <div style="height: 40px;border-left:1px solid #FFF;"></div>
              </a>
            </li>
            <li>
              <a href="#" class="c-white f-12 top-head" style="color:#FFF;">
                <ul class="a">
                  <li> 
                    <span>Welcome</span>: &nbsp;
                    <span style="font-size:19px;">Administrator</span>
                  </li>
                  <li> 
                    <span style="margin-left:63px;">System Administrator</span>
                  </li>
                </ul>
              </a>
            </li>
            <li>
              <div style="padding-top:5px;">
                <img src="<?= base_url() ?>plugins/images/profile.png" style="width:60px; border-radius:100%;">
              </div>
            </li>
          </ul>       
        </div>
      </div>
  </nav>

  <nav class="main-nav hidden-xs mb-10">
    <div class="container-fluid">
      <ul class="center-text inline-block">
        <li><a href="<?= base_url()?>index.php/admin/main/main_page">Main</a></li>
        <li><a href="<?= base_url()?>index.php/admin/about_us/about">About Us</a></li>
        <li><a href="<?= base_url()?>index.php/admin/admission/enrollment_flow" style="color:#ff003b8a !important;" >Admission</a></li>
        <li><a href="<?= base_url()?>index.php/admin/academics/academic_calendar">Academics</a></li>
        <li><a href="<?= base_url()?>index.php/admin/office_and_resources/office_of_the_school_director">Offices and Resources</a></li>
        <li><a href="<?= base_url()?>index.php/admin/research/capstone">Research</a></li>
        <li><a href="<?= base_url()?>index.php/admin/campus_life/school_activities">Campus Life</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
        <li><a href="<?= base_url()?>index.php/admin/pre_registration/pre_registration">Pre-Registration</a></li>
        <li><a href="queuing.html">Queuing</a></li>
        <li><a href="career.html">Careers</a></li>
      </ul>
    </div>
  </nav>

  