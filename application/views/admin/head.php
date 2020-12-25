<!-- LICENSE SPAS
Alwi Bastomi & Alfian Jufri
IG alwi.bastomi & al_alfian77
 -->
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="<?php echo site_url('img/favicons/lili.png'); ?>"/>

  <title>SPAS <?php if($this->session->userdata('iduser') != "guest"){ echo "| Administrator"; } ?></title>

  <!-- CSS -->

  <!-- Bootstrap -->

  <link href="<?php echo site_url('assets2/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo site_url('assets2/css/jquery-ui.css'); ?>" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo site_url('assets2/plugins/dropify/dist/css/dropify.min.css'); ?>">
  <link href="<?php echo site_url('assets2/plugins/toast-master/css/jquery.toast.css'); ?>" rel="stylesheet">

  <link href="<?php echo site_url('assets2/plugins/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="<?php echo site_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo site_url('assets2/plugins/chartist-js/dist/chartist-init.css'); ?>" rel="stylesheet">

  <link href="<?php echo site_url('assets2/plugins/chartist-js/dist/chartist.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo site_url('assets2/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="<?php echo site_url('assets/css/custom.css'); ?>" rel="stylesheet">

  <link href="<?php echo site_url('assets2/plugins/c3-master/c3.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo site_url('assets2/colors/blue.css'); ?>" rel="stylesheet">
  <!-- SweetAlert -->
  <link href="<?php echo site_url('assets/vendors/sweetalert/dist/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Datatable -->
  <link href="<?php echo site_url('assets/vendors/datatables/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- JS -->
  <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>
  <!-- jQuery -->
  <script src="<?php echo site_url('assets2/plugins/chartist-js/dist/chartist.min.js'); ?>"></script>
<script src="<?php echo site_url('assets2/plugins/Chart.js/Chart.min.js'); ?>"></script>
  
  <script src="<?php echo site_url('assets2/plugins/jquery/jquery.min.js'); ?>"></script>
  <!-- Bootstrap -->

  <script src="<?php echo site_url('assets2/plugins/bootstrap/js/popper.min.js'); ?>"></script>


  <script src="<?php echo site_url('assets2/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>


  <script src="<?php echo site_url('assets2/plugins/sticky-kit-master/dist/sticky-kit.min.js'); ?>"></script>
  <script src="<?php echo site_url('assets2/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/js/jquery.slimscroll.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/toast-master/js/jquery.toast.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/custom_txt2.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/js/waves.js'); ?>"></script>


  <script src="<?php echo site_url('assets2/js/sidebarmenu.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/js/custom.min.js'); ?>"></script>


  <!-- <script src="<?php echo site_url('assets2/js/dashboard1.js'); ?>"></script> -->

  <script src="<?php echo site_url('assets2/plugins/d3/d3.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/c3-master/c3.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/styleswitcher/jQuery.style.switcher.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/dropify/dist/js/dropify.min.js'); ?>"></script>
  <!-- Parsley -->
  <script src="<?php echo site_url('assets/vendors/parsleyjs/dist/parsley.min.js'); ?>"></script>
  <!-- SweetAlert -->
  <script src="<?php echo site_url('assets/vendors/sweetalert/dist/sweetalert.min.js'); ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo site_url('assets/vendors/iCheck/icheck.min.js'); ?>"></script>
  <!-- Custom Alert -->
  <script src="<?php echo site_url('assets/js/custom_alert3.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/chart.js'); ?>"></script>
  <!-- Moment JS -->
  <script src="<?php echo site_url('assets/vendors/momentJS/moment.js'); ?>"></script>
  <!-- Datatable JS -->
  <script src="<?php echo site_url('assets/vendors/datatables/jquery.dataTables.min.js'); ?>"></script>
  <!-- Datatable Bootstrap -->
  <script src="<?php echo site_url('assets/vendors/datatables/dataTables.bootstrap.min.js'); ?>"></script>
  <!-- CKEditor -->
  <!-- <script src="<?php echo site_url('assets/vendors/ckeditor/ckeditor.js'); ?>"></script> -->
  <!-- Chart JS -->
  <script src="<?php echo site_url('assets/vendors/chartjs/dist/chart.min.js'); ?>"></script>
  <!-- Gauge JS -->
  <script src="<?php echo site_url('assets/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>


  <script src="<?php echo site_url('assets/vendors/gauge.js/dist/gauge.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>

  <script src="<?php echo site_url('assets2/plugins/vectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/**
 * Table Of Content
 *
 *  1. Globals
 *  2. Headers
 *  3. Navigations
 *  4. Banners
 *  5. Footers
 *  6. app
 *  7. Widgets
 *  8. Custom Templates
 */
/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
/*Theme Colors*/
/*bootstrap Color*/
/*Light colors*/
/*Normal Color*/
/*Extra Variable*/
/*Preloader*/

@import url(<?php echo site_url('assets2/scss/icons/font-awesome/css/font-awesome.min.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/simple-line-icons/css/simple-line-icons.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/weather-icons/css/weather-icons.min.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/linea-icons/linea.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/themify-icons/themify-icons.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/flag-icon-css/flag-icon.min.css'); ?>);
@import url(<?php echo site_url('assets2/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css'); ?>);
@import url(<?php echo site_url('assets2/css/animate.css'); ?>);
@import url(<?php echo site_url('assets2/css/spinners.css'); ?>);
@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
.preloader {
  width: 100%;
  height: 100%;
  top: 0px;
  position: fixed;
  z-index: 99999;
  background: #fff; }
  .preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px); }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/**
 * Table Of Content
 *
 *  1. Globals
 *  2. Headers
 *  3. Navigations
 *  4. Banners
 *  5. Footers
 *  6. Posts
 *  7. Widgets
 *  8. Custom Templates
 */
/******************* 
Global Styles 
*******************/
* {
  outline: none; }

  body {
    background: #fff;
    font-family: "Poppins", sans-serif;
    margin: 0;
    overflow-x: hidden;
    color: #67757c;
    font-weight: 300; }

    html {
      position: relative;
      min-height: 100%;
      background: #ffffff; }

      a:hover, a:focus {
        text-decoration: none; }

        a.link {
          color: #455a64; }
          a.link:hover, a.link:focus {
            color: #009efb; }

            .img-responsive {
              width: 100%;
              height: auto;
              display: inline-block; }

              .img-rounded {
                border-radius: 4px; }
                .datatable-ku{
                  width: 100% !important;
                }


                html body .mdi:before, html body .mdi-set {
                  line-height: initial; }

/*******************
Headings
*******************/
h1,
h2,
h3,
h4,
h5,
h6 {
  color: #455a64;
  font-family: "Poppins", sans-serif;
  font-weight: 400; }

  h1 {
    line-height: 40px;
    font-size: 36px; }

    h2 {
      line-height: 36px;
      font-size: 24px; }

      h3 {
        line-height: 30px;
        font-size: 21px; }

        h4 {
          line-height: 22px;
          font-size: 18px; }

          h5 {
            line-height: 18px;
            font-size: 16px;
            font-weight: 400; }

            h6 {
              line-height: 16px;
              font-size: 14px;
              font-weight: 400; }

              .display-5 {
                font-size: 3rem; }

                .display-6 {
                  font-size: 36px; }

                  .box {
                    border-radius: 4px;
                    padding: 10px; }

                    html body .dl {
                      display: inline-block; }

                      html body .db {
                        display: block; }

                        .no-wrap td, .no-wrap th {
                          white-space: nowrap; }

/*******************
Blockquote
*******************/
html body blockquote {
  border-left: 5px solid #009efb;
  border: 1px solid rgba(120, 130, 140, 0.13);
  padding: 15px; }

  .clear {
    clear: both; }

    ol li {
      margin: 5px 0; }

/*******************
Paddings
*******************/
html body .p-0 {
  padding: 0px; }

  html body .p-10 {
    padding: 10px; }

    html body .p-20 {
      padding: 20px; }

      html body .p-30 {
        padding: 30px; }

        html body .p-l-0 {
          padding-left: 0px; }

          html body .p-l-10 {
            padding-left: 10px; }

            html body .p-l-20 {
              padding-left: 20px; }

              html body .p-r-0 {
                padding-right: 0px; }

                html body .p-r-10 {
                  padding-right: 10px; }

                  html body .p-r-20 {
                    padding-right: 20px; }

                    html body .p-r-30 {
                      padding-right: 30px; }

                      html body .p-r-40 {
                        padding-right: 40px; }

                        html body .p-t-0 {
                          padding-top: 0px; }

                          html body .p-t-10 {
                            padding-top: 10px; }

                            html body .p-t-20 {
                              padding-top: 20px; }

                              html body .p-t-30 {
                                padding-top: 30px; }

                                html body .p-b-0 {
                                  padding-bottom: 0px; }

                                  html body .p-b-5 {
                                    padding-bottom: 5px; }

                                    html body .p-b-10 {
                                      padding-bottom: 10px; }

                                      html body .p-b-20 {
                                        padding-bottom: 20px; }

                                        html body .p-b-30 {
                                          padding-bottom: 30px; }

                                          html body .p-b-40 {
                                            padding-bottom: 40px; }

/*******************
Margin
*******************/
html body .m-0 {
  margin: 0px; }

  html body .m-l-5 {
    margin-left: 5px; }

    html body .m-l-10 {
      margin-left: 10px; }

      html body .m-l-15 {
        margin-left: 15px; }

        html body .m-l-20 {
          margin-left: 20px; }

          html body .m-l-30 {
            margin-left: 30px; }

            html body .m-l-40 {
              margin-left: 40px; }

              html body .m-r-5 {
                margin-right: 5px; }

                html body .m-r-10 {
                  margin-right: 10px; }

                  html body .m-r-15 {
                    margin-right: 15px; }

                    html body .m-r-20 {
                      margin-right: 20px; }

                      html body .m-r-30 {
                        margin-right: 30px; }

                        html body .m-r-40 {
                          margin-right: 40px; }

                          html body .m-t-0 {
                            margin-top: 0px; }

                            html body .m-t-5 {
                              margin-top: 5px; }

                              html body .m-t-10 {
                                margin-top: 10px; }

                                html body .m-t-15 {
                                  margin-top: 15px; }

                                  html body .m-t-20 {
                                    margin-top: 20px; }

                                    html body .m-t-30 {
                                      margin-top: 30px; }

                                      html body .m-t-40 {
                                        margin-top: 40px; }

                                        html body .m-b-0 {
                                          margin-bottom: 0px; }

                                          html body .m-b-5 {
                                            margin-bottom: 5px; }

                                            html body .m-b-10 {
                                              margin-bottom: 10px; }

                                              html body .m-b-15 {
                                                margin-bottom: 15px; }

                                                html body .m-b-20 {
                                                  margin-bottom: 20px; }

                                                  html body .m-b-30 {
                                                    margin-bottom: 30px; }

                                                    html body .m-b-40 {
                                                      margin-bottom: 40px; }

/*******************
vertical alignment
*******************/
html body .vt {
  vertical-align: top; }

  html body .vm {
    vertical-align: middle; }

    html body .vb {
      vertical-align: bottom; }

/*******************
Opacity
*******************/
.op-5 {
  opacity: 0.5; }

/*******************
font weight
*******************/
html body .font-bold {
  font-weight: 700; }

  html body .font-normal {
    font-weight: normal; }

    html body .font-light {
      font-weight: 300; }

      html body .font-medium {
        font-weight: 500; }

        html body .font-16 {
          font-size: 16px; }

          html body .font-14 {
            font-size: 14px; }

            html body .font-10 {
              font-size: 10px; }

              html body .font-18 {
                font-size: 18px; }

                html body .font-20 {
                  font-size: 20px; }

/*******************
Border
*******************/
html body .b-0 {
  border: none; }

  html body .b-r {
    border-right: 1px solid rgba(120, 130, 140, 0.13); }

    html body .b-l {
      border-left: 1px solid rgba(120, 130, 140, 0.13); }

      html body .b-b {
        border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

        html body .b-t {
          border-top: 1px solid rgba(120, 130, 140, 0.13); }

          html body .b-all {
            border: 1px solid rgba(120, 130, 140, 0.13); }

/*******************
Thumb size
*******************/
.thumb-sm {
  height: 32px;
  width: 32px; }

  .thumb-md {
    height: 48px;
    width: 48px; }

    .thumb-lg {
      height: 88px;
      width: 88px; }

      .hide {
        display: none; }

        .img-circle {
          border-radius: 100%; }

          .radius {
            border-radius: 4px; }

/*******************
Text Colors
*******************/
.text-white {
  color: #ffffff !important; }

  .text-danger {
    color: #fc4b6c !important; }

    .text-muted {
      color: #99abb4 !important; }

      .text-warning {
        color: #ffb22b !important; }

        .text-success {
          color: #26c6da !important; }

          .text-info {
            color: #1e88e5 !important; }

            .text-inverse {
              color: #2f3d4a !important; }

              html body .text-blue {
                color: #02bec9; }

                html body .text-purple {
                  color: #7460ee; }

                  html body .text-primary {
                    color: #7460ee; }

                    html body .text-megna {
                      color: #00897b; }

                      html body .text-dark {
                        color: #67757c; }

                        html body .text-themecolor {
                          color: #009efb; }

/*******************
Background Colors
*******************/
.bg-primary {
  background-color: #7460ee !important; }

  .bg-success {
    background-color: #26c6da !important; }

    .bg-info {
      background-color: #1e88e5 !important; }

      .bg-warning {
        background-color: #ffb22b !important; }

        .bg-danger {
          background-color: #fc4b6c !important; }

          html body .bg-megna {
            background-color: #00897b; }

            html body .bg-theme {
              background-color: #009efb; }

              html body .bg-inverse {
                background-color: #2f3d4a; }

                html body .bg-purple {
                  background-color: #7460ee; }

                  html body .bg-light-primary {
                    background-color: #f1effd; }

                    html body .bg-light-success {
                      background-color: #e8fdeb; }

                      html body .bg-light-info {
                        background-color: #cfecfe; }

                        html body .bg-light-extra {
                          background-color: #ebf3f5; }

                          html body .bg-light-warning {
                            background-color: #fff8ec; }

                            html body .bg-light-danger {
                              background-color: #f9e7eb; }

                              html body .bg-light-inverse {
                                background-color: #f6f6f6; }

                                html body .bg-light {
                                  background-color: #f2f4f8; }

                                  html body .bg-white {
                                    background-color: #ffffff; }

/*******************
Rounds
*******************/
.round {
  line-height: 48px;
  color: #ffffff;
  width: 45px;
  height: 45px;
  display: inline-block;
  font-weight: 400;
  text-align: center;
  border-radius: 100%;
  background: #1e88e5; }
  .round img {
    border-radius: 100%; }

    .round-lg {
      line-height: 65px;
      width: 60px;
      height: 60px;
      font-size: 30px; }

      .round.round-info {
        background: #1e88e5; }

        .round.round-warning {
          background: #ffb22b; }

          .round.round-danger {
            background: #fc4b6c; }

            .round.round-success {
              background: #26c6da; }

              .round.round-primary {
                background: #7460ee; }

/*******************
Labels
*******************/
.label {
  padding: 3px 10px;
  line-height: 13px;
  color: #ffffff;
  font-weight: 400;
  border-radius: 4px;
  font-size: 75%; }

  .label-rounded {
    border-radius: 60px; }

    .label-custom {
      background-color: #00897b; }

      .label-success {
        background-color: #26c6da; }

        .label-info {
          background-color: #1e88e5; }

          .label-warning {
            background-color: #ffb22b; }

            .label-danger {
              background-color: #fc4b6c; }

              .label-megna {
                background-color: #00897b; }

                .label-primary {
                  background-color: #7460ee; }

                  .label-purple {
                    background-color: #7460ee; }

                    .label-red {
                      background-color: #fb3a3a; }

                      .label-inverse {
                        background-color: #2f3d4a; }

                        .label-default {
                          background-color: #f2f4f8; }

                          .label-white {
                            background-color: #ffffff; }

                            .label-light-success {
                              background-color: #e8fdeb;
                              color: #26c6da; }

                              .label-light-info {
                                background-color: #cfecfe;
                                color: #1e88e5; }

                                .label-light-warning {
                                  background-color: #fff8ec;
                                  color: #ffb22b; }

                                  .label-light-danger {
                                    background-color: #f9e7eb;
                                    color: #fc4b6c; }

                                    .label-light-megna {
                                      background-color: #e0f2f4;
                                      color: #00897b; }

                                      .label-light-primary {
                                        background-color: #f1effd;
                                        color: #7460ee; }

                                        .label-light-inverse {
                                          background-color: #f6f6f6;
                                          color: #2f3d4a; }

/*******************
Pagination
*******************/



.pagination > li > a,
.pagination > li > span {
  color: #263238; }

  .pagination > li > a:hover,
  .pagination > li > span:hover,
  .pagination > li > a:focus,
  .pagination > li > span:focus {
    background-color: #f2f4f8; }

    .pagination-split li {
      margin-left: 5px;
      display: inline-block;
      float: left; }

      .pagination-split li:first-child {
        margin-left: 0; }

        .pagination-split li a {
          -moz-border-radius: 4px;
          -webkit-border-radius: 4px;
          border-radius: 4px; }

          .pagination > .active > a,
          .pagination > .active > span,
          .pagination > .active > a:hover,
          .pagination > .active > span:hover,
          .pagination > .active > a:focus,
          .pagination > .active > span:focus {
            background-color: #009efb;
            border-color: #009efb; }

            .pager li > a,
            .pager li > span {
              -moz-border-radius: 4px;
              -webkit-border-radius: 4px;
              border-radius: 4px;
              color: #263238; }

/*******************
Table Cell
*******************/
.table-box {
  display: table;
  width: 100%; }

  .table.no-border tbody td {
    border: 0px; }

    .cell {
      display: table-cell;
      vertical-align: middle; }

      .table td, .table th {
        border-color: #f3f1f1; }

        .table thead th, .table th {
          font-weight: 500; }

          .table-hover tbody tr:hover {
            background: #f2f4f8; }

            .v-middle td, .v-middle th {
              vertical-align: middle; }

              .table-responsive {

                width: 100%;
                overflow-x: auto;
                -ms-overflow-style: -ms-autohiding-scrollbar; }

/*******************
Wave Effects
*******************/
.waves-effect {
  position: relative;
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  vertical-align: middle;
  z-index: 1;
  will-change: opacity, transform;
  -webkit-transition: all 0.1s ease-out;
  -moz-transition: all 0.1s ease-out;
  -o-transition: all 0.1s ease-out;
  -ms-transition: all 0.1s ease-out;
  transition: all 0.1s ease-out; }
  .waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    opacity: 0;
    background: rgba(0, 0, 0, 0.2);
    -webkit-transition: all 0.7s ease-out;
    -moz-transition: all 0.7s ease-out;
    -o-transition: all 0.7s ease-out;
    -ms-transition: all 0.7s ease-out;
    transition: all 0.7s ease-out;
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    -webkit-transition-property: opacity, -webkit-transform;
    transition-property: opacity, -webkit-transform;
    -o-transition-property: transform, opacity;
    transition-property: transform, opacity;
    transition-property: transform, opacity, -webkit-transform;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    pointer-events: none; }

    .waves-effect.waves-light .waves-ripple {
      background-color: rgba(255, 255, 255, 0.45); }

      .waves-effect.waves-red .waves-ripple {
        background-color: rgba(244, 67, 54, 0.7); }

        .waves-effect.waves-yellow .waves-ripple {
          background-color: rgba(255, 235, 59, 0.7); }

          .waves-effect.waves-orange .waves-ripple {
            background-color: rgba(255, 152, 0, 0.7); }

            .waves-effect.waves-purple .waves-ripple {
              background-color: rgba(156, 39, 176, 0.7); }

              .waves-effect.waves-green .waves-ripple {
                background-color: rgba(76, 175, 80, 0.7); }

                .waves-effect.waves-teal .waves-ripple {
                  background-color: rgba(0, 150, 136, 0.7); }

                  html body .waves-notransition {
                    -webkit-transition: none;
                    -moz-transition: none;
                    -o-transition: none;
                    -ms-transition: none;
                    transition: none; }

                    .waves-circle {
                      -webkit-transform: translateZ(0);
                      -moz-transform: translateZ(0);
                      -ms-transform: translateZ(0);
                      -o-transform: translateZ(0);
                      transform: translateZ(0);
                      text-align: center;
                      width: 2.5em;
                      height: 2.5em;
                      line-height: 2.5em;
                      border-radius: 50%;
                      -webkit-mask-image: none; }

                      .waves-input-wrapper {
                        border-radius: 0.2em;
                        vertical-align: bottom; }
                        .waves-input-wrapper .waves-button-input {
                          position: relative;
                          top: 0;
                          left: 0;
                          z-index: 1; }

                          .waves-block {
                            display: block; }

                            /*Badge*/
                            .badge {
                              font-weight: 400; }

                              .badge-xs {
                                font-size: 9px; }

                                .badge-xs,
                                .badge-sm {
                                  -webkit-transform: translate(0, -2px);
                                  -ms-transform: translate(0, -2px);
                                  -o-transform: translate(0, -2px);
                                  transform: translate(0, -2px); }

                                  .badge-success {
                                    background-color: #26c6da; }

                                    .badge-info {
                                      background-color: #1e88e5; }

                                      .badge-primary {
                                        background-color: #7460ee; }

                                        .badge-warning {
                                          background-color: #ffb22b;
                                          color: #ffffff; }

                                          .badge-danger {
                                            background-color: #fc4b6c; }

                                            .badge-purple {
                                              background-color: #7460ee; }

                                              .badge-red {
                                                background-color: #fb3a3a; }

                                                .badge-inverse {
                                                  background-color: #2f3d4a; }

/*******************
Buttons
******************/
.btn {
  padding: 7px 12px;
  font-size: 14px;
  cursor: pointer; }

  .btn-group label {
    color: #ffffff !important;
    margin-bottom: 0px; }
    .btn-group label.btn-secondary {
      color: #67757c !important; }

      .btn-lg {
        padding: .75rem 1.5rem;
        font-size: 1.25rem; }

        .btn-md {
          padding: 12px 55px;
          font-size: 16px; }

          .btn-circle {
            border-radius: 100%;
            width: 40px;
            height: 40px;
            padding: 10px; }

            .btn-circle.btn-sm {
              width: 35px;
              height: 35px;
              padding: 8px 10px;
              font-size: 14px; }

              .btn-circle.btn-lg {
                width: 50px;
                height: 50px;
                padding: 14px 15px;
                font-size: 18px; }

                .btn-circle.btn-xl {
                  width: 70px;
                  height: 70px;
                  padding: 14px 15px;
                  font-size: 24px; }

                  .btn-sm {
                    padding: .25rem .5rem;
                    font-size: 12px; }

                    .btn-xs {
                      padding: .25rem .5rem;
                      font-size: 10px; }

                      .button-list button, .button-list a {
                        margin: 5px 12px 5px 0; }

                        .btn-outline {
                          color: inherit;
                          background-color: transparent;
                          -webkit-transition: all .5s;
                          -o-transition: all .5s;
                          transition: all .5s; }

                          .btn-rounded {
                            border-radius: 60px;
                            padding: 7px 18px; }
                            .btn-rounded.btn-lg {
                              padding: .75rem 1.5rem; }
                              .btn-rounded.btn-sm {
                                padding: .25rem .5rem;
                                font-size: 12px; }
                                .btn-rounded.btn-xs {
                                  padding: .25rem .5rem;
                                  font-size: 10px; }
                                  .btn-rounded.btn-md {
                                    padding: 12px 35px;
                                    font-size: 16px; }

                                    .btn-secondary,
                                    .btn-secondary.disabled {
                                      -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
                                      box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
                                      -webkit-transition: 0.2s ease-in;
                                      -o-transition: 0.2s ease-in;
                                      transition: 0.2s ease-in;
                                      background-color: #ffffff;
                                      color: #67757c; }
                                      .btn-secondary:hover,
                                      .btn-secondary.disabled:hover {
                                        -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                        box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                        color: #ffffff !important; }
                                        .btn-secondary.active, .btn-secondary:focus,
                                        .btn-secondary.disabled.active,
                                        .btn-secondary.disabled:focus {
                                          -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                          box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                          color: #ffffff !important; }

                                          .btn-primary,
                                          .btn-primary.disabled {
                                            background: #7460ee;
                                            border: 1px solid #7460ee;
                                            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
                                            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
                                            -webkit-transition: 0.2s ease-in;
                                            -o-transition: 0.2s ease-in;
                                            transition: 0.2s ease-in; }
                                            .btn-primary:hover,
                                            .btn-primary.disabled:hover {
                                              background: #7460ee;
                                              -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                              box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                              border: 1px solid #7460ee; }
                                              .btn-primary.active, .btn-primary:focus,
                                              .btn-primary.disabled.active,
                                              .btn-primary.disabled:focus {
                                                background: #6352ce;
                                                -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                                box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2); }

                                                .btn-themecolor,
                                                .btn-themecolor.disabled {
                                                  background: #009efb;
                                                  color: #ffffff;
                                                  border: 1px solid #009efb; }
                                                  .btn-themecolor:hover,
                                                  .btn-themecolor.disabled:hover {
                                                    background: #009efb;
                                                    opacity: 0.7;
                                                    border: 1px solid #009efb; }
                                                    .btn-themecolor.active, .btn-themecolor:focus,
                                                    .btn-themecolor.disabled.active,
                                                    .btn-themecolor.disabled:focus {
                                                      background: #028ee1; }

                                                      .btn-success,
                                                      .btn-success.disabled {
                                                        background: #26c6da;
                                                        border: 1px solid #26c6da;
                                                        -webkit-box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                                                        box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                                                        -webkit-transition: 0.2s ease-in;
                                                        -o-transition: 0.2s ease-in;
                                                        transition: 0.2s ease-in; }
                                                        .btn-success:hover,
                                                        .btn-success.disabled:hover {
                                                          background: #26c6da;
                                                          -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                                                          box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                                                          border: 1px solid #26c6da; }
                                                          .btn-success.active, .btn-success:focus,
                                                          .btn-success.disabled.active,
                                                          .btn-success.disabled:focus {
                                                            background: #1eacbe;
                                                            -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                                                            box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2); }

                                                            .btn-info,
                                                            .btn-info.disabled {
                                                              background: #1e88e5;
                                                              border: 1px solid #1e88e5;
                                                              -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                                                              box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                                                              -webkit-transition: 0.2s ease-in;
                                                              -o-transition: 0.2s ease-in;
                                                              transition: 0.2s ease-in; }
                                                              .btn-info:hover,
                                                              .btn-info.disabled:hover {
                                                                background: #1e88e5;
                                                                border: 1px solid #1e88e5;
                                                                -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
                                                                box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }
                                                                .btn-info.active, .btn-info:focus,
                                                                .btn-info.disabled.active,
                                                                .btn-info.disabled:focus {
                                                                  background: #028ee1;
                                                                  -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
                                                                  box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }

                                                                  .btn-warning,
                                                                  .btn-warning.disabled {
                                                                    background: #ffb22b;
                                                                    color: #ffffff;
                                                                    -webkit-box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
                                                                    box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
                                                                    border: 1px solid #ffb22b;
                                                                    -webkit-transition: 0.2s ease-in;
                                                                    -o-transition: 0.2s ease-in;
                                                                    transition: 0.2s ease-in; }
                                                                    .btn-warning:hover,
                                                                    .btn-warning.disabled:hover {
                                                                      background: #ffb22b;
                                                                      color: #ffffff;
                                                                      -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
                                                                      box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
                                                                      border: 1px solid #ffb22b; }
                                                                      .btn-warning.active, .btn-warning:focus,
                                                                      .btn-warning.disabled.active,
                                                                      .btn-warning.disabled:focus {
                                                                        background: #e9ab2e;
                                                                        -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
                                                                        box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2); }

                                                                        .btn-danger,
                                                                        .btn-danger.disabled {
                                                                          background: #fc4b6c;
                                                                          border: 1px solid #fc4b6c;
                                                                          -webkit-box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
                                                                          box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
                                                                          -webkit-transition: 0.2s ease-in;
                                                                          -o-transition: 0.2s ease-in;
                                                                          transition: 0.2s ease-in; }
                                                                          .btn-danger:hover,
                                                                          .btn-danger.disabled:hover {
                                                                            background: #fc4b6c;
                                                                            -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                            box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                            border: 1px solid #fc4b6c; }
                                                                            .btn-danger.active, .btn-danger:focus,
                                                                            .btn-danger.disabled.active,
                                                                            .btn-danger.disabled:focus {
                                                                              background: #e6294b;
                                                                              -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                              box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2); }

                                                                              .btn-inverse,
                                                                              .btn-inverse.disabled {
                                                                                background: #2f3d4a;
                                                                                border: 1px solid #2f3d4a;
                                                                                color: #ffffff; }
                                                                                .btn-inverse:hover,
                                                                                .btn-inverse.disabled:hover {
                                                                                  background: #2f3d4a;
                                                                                  opacity: 0.7;
                                                                                  color: #ffffff;
                                                                                  border: 1px solid #2f3d4a; }
                                                                                  .btn-inverse.active, .btn-inverse:focus,
                                                                                  .btn-inverse.disabled.active,
                                                                                  .btn-inverse.disabled:focus {
                                                                                    background: #232a37;
                                                                                    color: #ffffff; }

                                                                                    .btn-red,
                                                                                    .btn-red.disabled {
                                                                                      background: #fb3a3a;
                                                                                      border: 1px solid #fb3a3a;
                                                                                      color: #ffffff; }
                                                                                      .btn-red:hover,
                                                                                      .btn-red.disabled:hover {
                                                                                        opacity: 0.7;
                                                                                        border: 1px solid #fb3a3a;
                                                                                        background: #fb3a3a; }
                                                                                        .btn-red.active, .btn-red:focus,
                                                                                        .btn-red.disabled.active,
                                                                                        .btn-red.disabled:focus {
                                                                                          background: #e6294b; }

                                                                                          .btn-outline-secondary {
                                                                                            background-color: #ffffff;
                                                                                            -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
                                                                                            box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
                                                                                            -webkit-transition: 0.2s ease-in;
                                                                                            -o-transition: 0.2s ease-in;
                                                                                            transition: 0.2s ease-in; }
                                                                                            .btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary.focus {
                                                                                              -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                                                                              box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2); }
                                                                                              .btn-outline-secondary.active, .btn-outline-secondary:focus {
                                                                                                -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
                                                                                                box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2); }

                                                                                                .btn-outline-primary {
                                                                                                  color: #7460ee;
                                                                                                  background-color: #ffffff;
                                                                                                  border-color: #7460ee;
                                                                                                  -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
                                                                                                  box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
                                                                                                  -webkit-transition: 0.2s ease-in;
                                                                                                  -o-transition: 0.2s ease-in;
                                                                                                  transition: 0.2s ease-in; }
                                                                                                  .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary.focus {
                                                                                                    background: #7460ee;
                                                                                                    -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                                                                                    box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                                                                                    color: #ffffff;
                                                                                                    border-color: #7460ee; }
                                                                                                    .btn-outline-primary.active, .btn-outline-primary:focus {
                                                                                                      -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
                                                                                                      box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2); }

                                                                                                      .btn-outline-success {
                                                                                                        color: #26c6da;
                                                                                                        background-color: transparent;
                                                                                                        border-color: #26c6da;
                                                                                                        -webkit-box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                                                                                                        box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
                                                                                                        -webkit-transition: 0.2s ease-in;
                                                                                                        -o-transition: 0.2s ease-in;
                                                                                                        transition: 0.2s ease-in; }
                                                                                                        .btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success.focus {
                                                                                                          background: #26c6da;
                                                                                                          border-color: #26c6da;
                                                                                                          color: #ffffff;
                                                                                                          -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                                                                                                          box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2); }
                                                                                                          .btn-outline-success.active, .btn-outline-success:focus {
                                                                                                            -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
                                                                                                            box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2); }

                                                                                                            .btn-outline-info {
                                                                                                              color: #1e88e5;
                                                                                                              background-color: transparent;
                                                                                                              border-color: #1e88e5;
                                                                                                              -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                                                                                                              box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
                                                                                                              -webkit-transition: 0.2s ease-in;
                                                                                                              -o-transition: 0.2s ease-in;
                                                                                                              transition: 0.2s ease-in; }
                                                                                                              .btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info.focus {
                                                                                                                background: #1e88e5;
                                                                                                                border-color: #1e88e5;
                                                                                                                color: #ffffff;
                                                                                                                -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
                                                                                                                box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }
                                                                                                                .btn-outline-info.active, .btn-outline-info:focus {
                                                                                                                  -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
                                                                                                                  box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }

                                                                                                                  .btn-outline-warning {
                                                                                                                    color: #ffb22b;
                                                                                                                    background-color: transparent;
                                                                                                                    border-color: #ffb22b;
                                                                                                                    -webkit-box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
                                                                                                                    box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
                                                                                                                    -webkit-transition: 0.2s ease-in;
                                                                                                                    -o-transition: 0.2s ease-in;
                                                                                                                    transition: 0.2s ease-in; }
                                                                                                                    .btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning.focus {
                                                                                                                      background: #ffb22b;
                                                                                                                      border-color: #ffb22b;
                                                                                                                      color: #ffffff;
                                                                                                                      -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
                                                                                                                      box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2); }
                                                                                                                      .btn-outline-warning.active, .btn-outline-warning:focus {
                                                                                                                        -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
                                                                                                                        box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2); }

                                                                                                                        .btn-outline-danger {
                                                                                                                          color: #fc4b6c;
                                                                                                                          background-color: transparent;
                                                                                                                          border-color: #fc4b6c;
                                                                                                                          -webkit-box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
                                                                                                                          box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
                                                                                                                          -webkit-transition: 0.2s ease-in;
                                                                                                                          -o-transition: 0.2s ease-in;
                                                                                                                          transition: 0.2s ease-in; }
                                                                                                                          .btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger.focus {
                                                                                                                            background: #fc4b6c;
                                                                                                                            border-color: #fc4b6c;
                                                                                                                            color: #ffffff;
                                                                                                                            -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                                                                            box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2); }
                                                                                                                            .btn-outline-danger.active, .btn-outline-danger:focus {
                                                                                                                              -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                                                                              box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2); }

                                                                                                                              .btn-outline-red {
                                                                                                                                color: #fb3a3a;
                                                                                                                                background-color: transparent;
                                                                                                                                border-color: #fb3a3a; }
                                                                                                                                .btn-outline-red:hover, .btn-outline-red:focus, .btn-outline-red.focus {
                                                                                                                                  background: #fb3a3a;
                                                                                                                                  border-color: #fb3a3a;
                                                                                                                                  color: #ffffff;
                                                                                                                                  -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                                                                                  box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2); }
                                                                                                                                  .btn-outline-red.active, .btn-outline-red:focus {
                                                                                                                                    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
                                                                                                                                    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2); }

                                                                                                                                    .btn-outline-inverse {
                                                                                                                                      color: #2f3d4a;
                                                                                                                                      background-color: transparent;
                                                                                                                                      border-color: #2f3d4a; }
                                                                                                                                      .btn-outline-inverse:hover, .btn-outline-inverse:focus, .btn-outline-inverse.focus {
                                                                                                                                        background: #2f3d4a;
                                                                                                                                        border-color: #2f3d4a;
                                                                                                                                        color: #ffffff; }

                                                                                                                                        .btn-primary.active.focus,
                                                                                                                                        .btn-primary.active:focus,
                                                                                                                                        .btn-primary.active:hover,
                                                                                                                                        .btn-primary.focus:active,
                                                                                                                                        .btn-primary:active:focus,
                                                                                                                                        .btn-primary:active:hover,
                                                                                                                                        .open > .dropdown-toggle.btn-primary.focus,
                                                                                                                                        .open > .dropdown-toggle.btn-primary:focus,
                                                                                                                                        .open > .dropdown-toggle.btn-primary:hover,
                                                                                                                                        .btn-primary.focus,
                                                                                                                                        .btn-primary:focus {
                                                                                                                                          background-color: #6352ce;
                                                                                                                                          border: 1px solid #6352ce; }

                                                                                                                                          .btn-success.active.focus,
                                                                                                                                          .btn-success.active:focus,
                                                                                                                                          .btn-success.active:hover,
                                                                                                                                          .btn-success.focus:active,
                                                                                                                                          .btn-success:active:focus,
                                                                                                                                          .btn-success:active:hover,
                                                                                                                                          .open > .dropdown-toggle.btn-success.focus,
                                                                                                                                          .open > .dropdown-toggle.btn-success:focus,
                                                                                                                                          .open > .dropdown-toggle.btn-success:hover,
                                                                                                                                          .btn-success.focus,
                                                                                                                                          .btn-success:focus {
                                                                                                                                            background-color: #1eacbe;
                                                                                                                                            border: 1px solid #1eacbe; }

                                                                                                                                            .btn-info.active.focus,
                                                                                                                                            .btn-info.active:focus,
                                                                                                                                            .btn-info.active:hover,
                                                                                                                                            .btn-info.focus:active,
                                                                                                                                            .btn-info:active:focus,
                                                                                                                                            .btn-info:active:hover,
                                                                                                                                            .open > .dropdown-toggle.btn-info.focus,
                                                                                                                                            .open > .dropdown-toggle.btn-info:focus,
                                                                                                                                            .open > .dropdown-toggle.btn-info:hover,
                                                                                                                                            .btn-info.focus,
                                                                                                                                            .btn-info:focus {
                                                                                                                                              background-color: #028ee1;
                                                                                                                                              border: 1px solid #028ee1; }

                                                                                                                                              .btn-warning.active.focus,
                                                                                                                                              .btn-warning.active:focus,
                                                                                                                                              .btn-warning.active:hover,
                                                                                                                                              .btn-warning.focus:active,
                                                                                                                                              .btn-warning:active:focus,
                                                                                                                                              .btn-warning:active:hover,
                                                                                                                                              .open > .dropdown-toggle.btn-warning.focus,
                                                                                                                                              .open > .dropdown-toggle.btn-warning:focus,
                                                                                                                                              .open > .dropdown-toggle.btn-warning:hover,
                                                                                                                                              .btn-warning.focus,
                                                                                                                                              .btn-warning:focus {
                                                                                                                                                background-color: #e9ab2e;
                                                                                                                                                border: 1px solid #e9ab2e; }

                                                                                                                                                .btn-danger.active.focus,
                                                                                                                                                .btn-danger.active:focus,
                                                                                                                                                .btn-danger.active:hover,
                                                                                                                                                .btn-danger.focus:active,
                                                                                                                                                .btn-danger:active:focus,
                                                                                                                                                .btn-danger:active:hover,
                                                                                                                                                .open > .dropdown-toggle.btn-danger.focus,
                                                                                                                                                .open > .dropdown-toggle.btn-danger:focus,
                                                                                                                                                .open > .dropdown-toggle.btn-danger:hover,
                                                                                                                                                .btn-danger.focus,
                                                                                                                                                .btn-danger:focus {
                                                                                                                                                  background-color: #e6294b;
                                                                                                                                                  border: 1px solid #e6294b; }

                                                                                                                                                  .btn-inverse:hover,
                                                                                                                                                  .btn-inverse:focus,
                                                                                                                                                  .btn-inverse:active,
                                                                                                                                                  .btn-inverse.active,
                                                                                                                                                  .btn-inverse.focus,
                                                                                                                                                  .btn-inverse:active,
                                                                                                                                                  .btn-inverse:focus,
                                                                                                                                                  .btn-inverse:hover,
                                                                                                                                                  .open > .dropdown-toggle.btn-inverse {
                                                                                                                                                    background-color: #232a37;
                                                                                                                                                    border: 1px solid #232a37; }

                                                                                                                                                    .btn-red:hover,
                                                                                                                                                    .btn-red:focus,
                                                                                                                                                    .btn-red:active,
                                                                                                                                                    .btn-red.active,
                                                                                                                                                    .btn-red.focus,
                                                                                                                                                    .btn-red:active,
                                                                                                                                                    .btn-red:focus,
                                                                                                                                                    .btn-red:hover,
                                                                                                                                                    .open > .dropdown-toggle.btn-red {
                                                                                                                                                      background-color: #d61f1f;
                                                                                                                                                      border: 1px solid #d61f1f;
                                                                                                                                                      color: #ffffff; }

                                                                                                                                                      .button-box .btn {
                                                                                                                                                        margin: 0 8px 8px 0px; }

                                                                                                                                                        .btn-label {
                                                                                                                                                          background: rgba(0, 0, 0, 0.05);
                                                                                                                                                          display: inline-block;
                                                                                                                                                          margin: -6px 12px -6px -14px;
                                                                                                                                                          padding: 7px 15px; }

                                                                                                                                                          .btn-facebook {
                                                                                                                                                            color: #ffffff;
                                                                                                                                                            background-color: #3b5998; }

                                                                                                                                                            .btn-twitter {
                                                                                                                                                              color: #ffffff;
                                                                                                                                                              background-color: #55acee; }

                                                                                                                                                              .btn-linkedin {
                                                                                                                                                                color: #ffffff;
                                                                                                                                                                background-color: #007bb6; }

                                                                                                                                                                .btn-dribbble {
                                                                                                                                                                  color: #ffffff;
                                                                                                                                                                  background-color: #ea4c89; }

                                                                                                                                                                  .btn-googleplus {
                                                                                                                                                                    color: #ffffff;
                                                                                                                                                                    background-color: #dd4b39; }

                                                                                                                                                                    .btn-instagram {
                                                                                                                                                                      color: #ffffff;
                                                                                                                                                                      background-color: #3f729b; }

                                                                                                                                                                      .btn-pinterest {
                                                                                                                                                                        color: #ffffff;
                                                                                                                                                                        background-color: #cb2027; }

                                                                                                                                                                        .btn-dropbox {
                                                                                                                                                                          color: #ffffff;
                                                                                                                                                                          background-color: #007ee5; }

                                                                                                                                                                          .btn-flickr {
                                                                                                                                                                            color: #ffffff;
                                                                                                                                                                            background-color: #ff0084; }

                                                                                                                                                                            .btn-tumblr {
                                                                                                                                                                              color: #ffffff;
                                                                                                                                                                              background-color: #32506d; }

                                                                                                                                                                              .btn-skype {
                                                                                                                                                                                color: #ffffff;
                                                                                                                                                                                background-color: #00aff0; }

                                                                                                                                                                                .btn-youtube {
                                                                                                                                                                                  color: #ffffff;
                                                                                                                                                                                  background-color: #bb0000; }

                                                                                                                                                                                  .btn-github {
                                                                                                                                                                                    color: #ffffff;
                                                                                                                                                                                    background-color: #171515; }

/*******************
Notify
*******************/
.notify {
  position: relative;
  top: -25px;
  right: -7px; }
  .notify .heartbit {
    position: absolute;
    top: -20px;
    right: -4px;
    height: 25px;
    width: 25px;
    z-index: 10;
    border: 5px solid #fc4b6c;
    border-radius: 70px;
    -moz-animation: heartbit 1s ease-out;
    -moz-animation-iteration-count: infinite;
    -o-animation: heartbit 1s ease-out;
    -o-animation-iteration-count: infinite;
    -webkit-animation: heartbit 1s ease-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite; }
    .notify .point {
      width: 6px;
      height: 6px;
      -webkit-border-radius: 30px;
      -moz-border-radius: 30px;
      border-radius: 30px;
      background-color: #fc4b6c;
      position: absolute;
      right: 6px;
      top: -10px; }

      @-moz-keyframes heartbit {
        0% {
          -moz-transform: scale(0);
          opacity: 0.0; }
          25% {
            -moz-transform: scale(0.1);
            opacity: 0.1; }
            50% {
              -moz-transform: scale(0.5);
              opacity: 0.3; }
              75% {
                -moz-transform: scale(0.8);
                opacity: 0.5; }
                100% {
                  -moz-transform: scale(1);
                  opacity: 0.0; } }

                  @-webkit-keyframes heartbit {
                    0% {
                      -webkit-transform: scale(0);
                      opacity: 0.0; }
                      25% {
                        -webkit-transform: scale(0.1);
                        opacity: 0.1; }
                        50% {
                          -webkit-transform: scale(0.5);
                          opacity: 0.3; }
                          75% {
                            -webkit-transform: scale(0.8);
                            opacity: 0.5; }
                            100% {
                              -webkit-transform: scale(1);
                              opacity: 0.0; } }

/*******************
File Upload 
******************/
.fileupload {
  overflow: hidden;
  position: relative; }
  .fileupload input.upload {
    cursor: pointer;
    filter: alpha(opacity=0);
    font-size: 20px;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0; }

/*******************
Megamenu
******************/
.mega-dropdown {
  position: static;
  width: 100%; }
  .mega-dropdown .dropdown-menu {
    width: 100%;
    padding: 30px;
    margin-top: 0px; }
    .mega-dropdown ul {
      padding: 0px; }
      .mega-dropdown ul li {
        list-style: none; }
        .mega-dropdown .carousel-item .container {
          padding: 0px; }
          .mega-dropdown .nav-accordion .card {
            margin-bottom: 1px; }
            .mega-dropdown .nav-accordion .card-header {
              background: #ffffff; }
              .mega-dropdown .nav-accordion .card-header h5 {
                margin: 0px; }
                .mega-dropdown .nav-accordion .card-header h5 a {
                  text-decoration: none;
                  color: #67757c; }

/*******************
List-style-none
******************/
ul.list-style-none {
  margin: 0px;
  padding: 0px; }
  ul.list-style-none li {
    list-style: none; }
    ul.list-style-none li a {
      color: #67757c;
      padding: 8px 0px;
      display: block;
      text-decoration: none; }
      ul.list-style-none li a:hover {
        color: #009efb; }

/*******************
dropdown-item
******************/
.dropdown-item {
  padding: 8px 1rem;
  color: #67757c; }

/*******************
Custom-select
******************/
.custom-select {
  background: url(../../assets/images/custom-select.png) right 0.75rem center no-repeat; }

/*******************
textarea
******************/
textarea {
  resize: none; }

/*******************
Form-control
******************/
.form-control {
  color: #67757c;
  min-height: 38px;
  display: initial; }

  .form-control-sm {
    min-height: 20px; }

    .form-control:disabled, .form-control[readonly] {
      opacity: 0.7; }

      .custom-control-input:focus ~ .custom-control-indicator {
        -webkit-box-shadow: none;
        box-shadow: none; }

        .custom-control-input:checked ~ .custom-control-indicator {
          background-color: #26c6da; }

          form label {
            font-weight: 400; }

            .form-group {
              margin-bottom: 25px; }

              .form-horizontal label {
                margin-bottom: 0px; }

                .form-control-static {
                  padding-top: 0px; }

                  .form-bordered .form-group {
                    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
                    padding-bottom: 20px; }

/*******************
Layouts
******************/
/*Card-noborders*/
.card-no-border .card {
  border-color: #d7dfe3;
  border-radius: 4px;
  -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05); }

  .card-no-border .sidebar-footer {
    background: #f2f6f8; }

    .card-no-border .sidebar-nav > ul > li > a.active {
      background: #ffffff; }

      .card-no-border .shadow-none {
        -webkit-box-shadow: none;
        box-shadow: none; }

        .card-outline-danger, .card-outline-info, .card-outline-warning, .card-outline-success, .card-outline-primary {
          background: #ffffff; }

          .card-fullscreen {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            overflow: auto; }

            .card .card-header {
              background: #ffffff;
              border-bottom: 0px; }

              /*******************/
              /*widgets -app*/
              /*******************/
              .css-bar:after {
                z-index: 1; }

                .css-bar > i {
                  z-index: 10; }

                  /*******************/
                  /*single column*/
                  /*******************/
                  .single-column .left-sidebar {
                    display: none; }

                    .single-column .page-wrapper {
                      margin-left: 0px; }

                      .fix-width {
                        width: 100%;
                        max-width: 1170px;
                        margin: 0 auto; }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*============================================================== 
 For all pages 
 ============================================================== */
 #main-wrapper {
  width: 100%; }

  .boxed #main-wrapper {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
    -webkit-box-shadow: 0 0 60px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 60px rgba(0, 0, 0, 0.1); }
    .boxed #main-wrapper .sidebar-footer {
      position: absolute; }
      .boxed #main-wrapper .footer {
        display: none; }

        .page-wrapper {
          background: #eef5f9;
          padding-bottom: 60px; }

          .container-fluid {
            padding: 0 30px 25px 30px; }

/*******************
 Topbar
 *******************/
 .topbar {
  position: relative;
  z-index: 50;
  -webkit-box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.5);
  box-shadow: 5px 0px 10px rgba(0, 0, 0, 0.5); }
  .topbar .top-navbar {
    min-height: 70px;
    padding: 0px 15px 0 0; }
    .topbar .top-navbar .dropdown-toggle::after {
      display: none; }
      .topbar .top-navbar .navbar-header {
        line-height: 65px;
        text-align: center; }
        .topbar .top-navbar .navbar-header .navbar-brand {
          margin-right: 0px;
          padding-bottom: 0px;
          padding-top: 0px; }
          .topbar .top-navbar .navbar-header .navbar-brand .light-logo {
            display: none; }
            .topbar .top-navbar .navbar-header .navbar-brand b {
              line-height: 70px;
              display: inline-block; }
              .topbar .top-navbar .navbar-nav > .nav-item > .nav-link {
                padding-left: .75rem;
                padding-right: .75rem;
                font-size: 19px;
                line-height: 50px; }
                .topbar .top-navbar .navbar-nav > .nav-item.show {
                  background: rgba(0, 0, 0, 0.05); }
                  .topbar .profile-pic {
                    width: 30px;
                    border-radius: 100%; }
                    .topbar .dropdown-menu {
                      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
                      -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
                      -moz-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
                      border-color: rgba(120, 130, 140, 0.13); }
                      .topbar .dropdown-menu .dropdown-item {
                        padding: 7px 1.5rem; }
                        .topbar ul.dropdown-user {
                          padding: 0px;
                          width: 270px; }
                          .topbar ul.dropdown-user li {
                            list-style: none;
                            padding: 0px;
                            margin: 0px; }
                            .topbar ul.dropdown-user li.divider {
                              height: 1px;
                              margin: 9px 0;
                              overflow: hidden;
                              background-color: rgba(120, 130, 140, 0.13); }
                              .topbar ul.dropdown-user li .dw-user-box {
                                padding: 10px 15px; }
                                .topbar ul.dropdown-user li .dw-user-box .u-img {
                                  width: 80px;
                                  display: inline-block;
                                  vertical-align: top; }
                                  .topbar ul.dropdown-user li .dw-user-box .u-img img {
                                    width: 100%;
                                    border-radius: 5px; }
                                    .topbar ul.dropdown-user li .dw-user-box .u-text {
                                      display: inline-block;
                                      padding-left: 10px; }
                                      .topbar ul.dropdown-user li .dw-user-box .u-text h4 {
                                        margin: 0px; }
                                        .topbar ul.dropdown-user li .dw-user-box .u-text p {
                                          margin-bottom: 2px;
                                          font-size: 14px; }
                                          .topbar ul.dropdown-user li .dw-user-box .u-text .btn {
                                            color: #ffffff;
                                            padding: 5px 10px;
                                            display: inline-block; }
                                            .topbar ul.dropdown-user li .dw-user-box .u-text .btn:hover {
                                              background: #e6294b; }
                                              .topbar ul.dropdown-user li a {
                                                padding: 9px 15px;
                                                display: block;
                                                color: #67757c; }
                                                .topbar ul.dropdown-user li a:hover {
                                                  background: #f2f4f8;
                                                  color: #009efb;
                                                  text-decoration: none; }

                                                  .search-box .app-search {
                                                    position: absolute;
                                                    margin: 0px;
                                                    display: block;
                                                    z-index: 110;
                                                    width: 100%;
                                                    top: -1px;
                                                    -webkit-box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
                                                    box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
                                                    display: none;
                                                    left: 0px; }
                                                    .search-box .app-search input {
                                                      width: 100%;
                                                      padding: 25px 40px 25px 20px;
                                                      border-radius: 0px;
                                                      font-size: 17px;
                                                      -webkit-transition: 0.5s ease-in;
                                                      -o-transition: 0.5s ease-in;
                                                      transition: 0.5s ease-in; }
                                                      .search-box .app-search .srh-btn {
                                                        position: absolute;
                                                        top: 23px;
                                                        cursor: pointer;
                                                        background: #ffffff;
                                                        width: 15px;
                                                        height: 15px;
                                                        right: 20px;
                                                        font-size: 14px; }

                                                        .mini-sidebar .top-navbar .navbar-header {
                                                          width: 60px;
                                                          text-align: center; }

                                                          .logo-center .top-navbar .navbar-header {
                                                            position: absolute;
                                                            left: 0;
                                                            right: 0;
                                                            margin: 0 auto; }

/*******************
 Breadcrumb and page title
 *******************/
 .page-titles {
  background: #ffffff;
  margin: 0 -30px 30px;
  padding: 15px;
  -webkit-box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1); }
  .page-titles h3 {
    margin-bottom: 0px;
    margin-top: 8px; }
    .page-titles .breadcrumb {
      padding: 0px;
      background: transparent;
      font-size: 14px; }
      .page-titles .breadcrumb li {
        margin-top: 0px;
        margin-bottom: 0px; }
        .page-titles .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
          content: "\e649";
          font-family: themify;
          color: #a6b7bf;
          font-size: 11px; }
          .page-titles .breadcrumb .breadcrumb-item.active {
            color: #99abb4; }

/*******************
 Right side toggle
 *******************/
 @-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg); }
    to {
      -webkit-transform: rotate(360deg); } }

      @-moz-keyframes rotate {
        from {
          -moz-transform: rotate(0deg); }
          to {
            -moz-transform: rotate(360deg); } }

            @keyframes rotate {
              from {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg); }
                to {
                  -webkit-transform: rotate(360deg);
                  transform: rotate(360deg); } }

                  .right-side-toggle {
                    position: relative; }

                    .right-side-toggle i {
                      -webkit-transition-property: -webkit-transform;
                      -webkit-transition-duration: 1s;
                      -moz-transition-property: -moz-transform;
                      -moz-transition-duration: 1s;
                      transition-property: -webkit-transform;
                      -o-transition-property: transform;
                      transition-property: transform;
                      transition-property: transform, -webkit-transform;
                      -o-transition-duration: 1s;
                      transition-duration: 1s;
                      -webkit-animation-name: rotate;
                      -webkit-animation-duration: 2s;
                      -webkit-animation-iteration-count: infinite;
                      -webkit-animation-timing-function: linear;
                      -moz-animation-name: rotate;
                      -moz-animation-duration: 2s;
                      -moz-animation-iteration-count: infinite;
                      -moz-animation-timing-function: linear;
                      animation-name: rotate;
                      animation-duration: 2s;
                      animation-iteration-count: infinite;
                      animation-timing-function: linear;
                      position: absolute;
                      top: 18px;
                      left: 18px; }

                      .right-sidebar {
                        position: fixed;
                        right: -240px;
                        width: 240px;
                        display: none;
                        z-index: 1100;
                        background: #ffffff;
                        top: 0px;
                        padding-bottom: 20px;
                        height: 100%;
                        -webkit-box-shadow: 5px 1px 40px rgba(0, 0, 0, 0.1);
                        box-shadow: 5px 1px 40px rgba(0, 0, 0, 0.1);
                        -webkit-transition: all 0.3s ease;
                        -o-transition: all 0.3s ease;
                        transition: all 0.3s ease; }
                        .right-sidebar .rpanel-title {
                          display: block;
                          padding: 24px 20px;
                          color: #ffffff;
                          text-transform: uppercase;
                          font-size: 15px;
                          background: #009efb; }
                          .right-sidebar .rpanel-title span {
                            float: right;
                            cursor: pointer;
                            font-size: 11px; }
                            .right-sidebar .rpanel-title span:hover {
                              color: #ffffff; }
                              .right-sidebar .r-panel-body {
                                padding: 20px; }
                                .right-sidebar .r-panel-body ul {
                                  margin: 0px;
                                  padding: 0px; }
                                  .right-sidebar .r-panel-body ul li {
                                    list-style: none;
                                    padding: 5px 0; }

                                    .shw-rside {
                                      right: 0px;
                                      width: 240px;
                                      display: block; }

                                      .chatonline img {
                                        margin-right: 10px;
                                        float: left;
                                        width: 30px; }

                                        .chatonline li a {
                                          padding: 13px 0;
                                          float: left;
                                          width: 100%; }
                                          .chatonline li a span {
                                            color: #67757c; }
                                            .chatonline li a span small {
                                              display: block;
                                              font-size: 10px; }

/*******************
 Right side toggle
 *******************/
 ul#themecolors {
  display: block; }
  ul#themecolors li {
    display: inline-block; }
    ul#themecolors li:first-child {
      display: block; }
      ul#themecolors li a {
        width: 50px;
        height: 50px;
        display: inline-block;
        margin: 5px;
        color: transparent;
        position: relative; }
        ul#themecolors li a.working:before {
          content: "\f00c";
          font-family: "FontAwesome";
          font-size: 18px;
          line-height: 50px;
          width: 50px;
          height: 50px;
          position: absolute;
          top: 0;
          left: 0;
          color: #ffffff;
          text-align: center; }

          .default-theme {
            background: #99abb4; }

            .green-theme {
              background: #26c6da; }

              .yellow-theme {
                background: #ffb22b; }

                .red-theme {
                  background: #fc4b6c; }

                  .blue-theme {
                    background: #1e88e5; }

                    .purple-theme {
                      background: #7460ee; }

                      .megna-theme {
                        background: #00897b; }

                        .default-dark-theme {
                          background: #263238;
                          /* Old browsers */
                          background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
                          /* FF3.6-15 */
                          background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
                          /* Chrome10-25,Safari5.1-6 */
                          background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #99abb4), color-stop(99%, #99abb4));
                          background: -o-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
                          background: linear-gradient(to right, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%); }

                          .green-dark-theme {
                            background: #263238;
                            /* Old browsers */
                            background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #26c6da 23%, #26c6da 99%);
                            /* FF3.6-15 */
                            background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #00c292 23%, #26c6da 99%);
                            /* Chrome10-25,Safari5.1-6 */
                            background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #26c6da), color-stop(99%, #26c6da));
                            background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #26c6da 23%, #26c6da 99%);
                            background: -o-linear-gradient(left, #263238 0%, #263238 23%, #26c6da 23%, #26c6da 99%);
                            background: linear-gradient(to right, #263238 0%, #263238 23%, #26c6da 23%, #26c6da 99%); }

                            .yellow-dark-theme {
                              background: #263238;
                              /* Old browsers */
                              background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                              /* FF3.6-15 */
                              background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                              /* Chrome10-25,Safari5.1-6 */
                              background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #fc4b6c), color-stop(99%, #fc4b6c));
                              background: -o-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                              background: linear-gradient(to right, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%); }

                              .blue-dark-theme {
                                background: #263238;
                                /* Old browsers */
                                background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #1e88e5 23%, #1e88e5 99%);
                                /* FF3.6-15 */
                                background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #1e88e5 23%, #1e88e5 99%);
                                /* Chrome10-25,Safari5.1-6 */
                                background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #1e88e5), color-stop(99%, #1e88e5));
                                background: -o-linear-gradient(left, #263238 0%, #263238 23%, #1e88e5 23%, #1e88e5 99%);
                                background: linear-gradient(to right, #263238 0%, #263238 23%, #1e88e5 23%, #1e88e5 99%); }

                                .purple-dark-theme {
                                  background: #263238;
                                  /* Old browsers */
                                  background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
                                  /* FF3.6-15 */
                                  background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
                                  /* Chrome10-25,Safari5.1-6 */
                                  background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #7460ee), color-stop(99%, #7460ee));
                                  background: -o-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
                                  background: linear-gradient(to right, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%); }

                                  .megna-dark-theme {
                                    background: #263238;
                                    /* Old browsers */
                                    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
                                    /* FF3.6-15 */
                                    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
                                    /* Chrome10-25,Safari5.1-6 */
                                    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #00897b), color-stop(99%, #00897b));
                                    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
                                    background: linear-gradient(to right, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%); }

                                    .red-dark-theme {
                                      background: #263238;
                                      /* Old browsers */
                                      background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                                      /* FF3.6-15 */
                                      background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                                      /* Chrome10-25,Safari5.1-6 */
                                      background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #fc4b6c), color-stop(99%, #fc4b6c));
                                      background: -o-linear-gradient(left, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%);
                                      background: linear-gradient(to right, #263238 0%, #263238 23%, #fc4b6c 23%, #fc4b6c 99%); }

/*******************
 page title
 *******************/
 .page-titles {
  padding-bottom: 20px; }

/*******************
 Footer
 *******************/
 .footer {
  bottom: 0;
  color: #67757c;
  left: 0px;
  padding: 17px 15px;
  position: absolute;
  right: 0;
  border-top: 1px solid rgba(120, 130, 140, 0.13);
  background: #ffffff; }

/*******************
 Card title
 *******************/
 .card {
  margin-bottom: 30px; }
  .card .card-subtitle {
    font-weight: 300;
    margin-bottom: 15px;
    color: #99abb4; }

    .card-inverse .card-blockquote .blockquote-footer,
    .card-inverse .card-link,
    .card-inverse .card-subtitle,
    .card-inverse .card-text {
      color: rgba(255, 255, 255, 0.65); }

      .card-success {
        background: #26c6da;
        border-color: #26c6da; }

        .card-danger {
          background: #fc4b6c;
          border-color: #fc4b6c; }

          .card-warning {
            background: #ffb22b;
            border-color: #ffb22b; }

            .card-info {
              background: #1e88e5;
              border-color: #1e88e5; }

              .card-primary {
                background: #7460ee;
                border-color: #7460ee; }

                .card-dark {
                  background: #2f3d4a;
                  border-color: #2f3d4a; }

                  .card-megna {
                    background: #00897b;
                    border-color: #00897b; }

/*============================================================== 
 Buttons page
 ============================================================== */
 .button-group .btn {
  margin-bottom: 5px;
  margin-right: 5px; }

  .no-button-group .btn {
    margin-bottom: 5px;
    margin-right: 0px; }

    .btn .text-active {
      display: none; }

      .btn.active .text-active {
        display: inline-block; }

        .btn.active .text {
          display: none; }

/*============================================================== 
 Cards page
 ============================================================== */
 .card-actions {
  float: right; }
  .card-actions a {
    cursor: pointer;
    color: #67757c;
    opacity: 0.7;
    padding-left: 7px;
    font-size: 13px; }
    .card-actions a:hover {
      opacity: 1; }

      .card-columns .card {
        margin-bottom: 20px; }

        .collapsing {
          -webkit-transition: height .08s ease;
          -o-transition: height .08s ease;
          transition: height .08s ease; }

          .card-info {
            background: #1e88e5;
            border-color: #1e88e5; }

            .card-primary {
              background: #7460ee;
              border-color: #7460ee; }

              .card-outline-info {
                border-color: #1e88e5; }
                .card-outline-info .card-header {
                  background: #1e88e5;
                  border-color: #1e88e5; }

                  .card-outline-inverse {
                    border-color: #2f3d4a; }
                    .card-outline-inverse .card-header {
                      background: #2f3d4a;
                      border-color: #2f3d4a; }

                      .card-outline-warning {
                        border-color: #ffb22b; }
                        .card-outline-warning .card-header {
                          background: #ffb22b;
                          border-color: #ffb22b; }

                          .card-outline-success {
                            border-color: #26c6da; }
                            .card-outline-success .card-header {
                              background: #26c6da;
                              border-color: #26c6da; }

                              .card-outline-danger {
                                border-color: #fc4b6c; }
                                .card-outline-danger .card-header {
                                  background: #fc4b6c;
                                  border-color: #fc4b6c; }

                                  .card-outline-primary {
                                    border-color: #7460ee; }
                                    .card-outline-primary .card-header {
                                      background: #7460ee;
                                      border-color: #7460ee; }

/*============================================================== 
Breadcrumb
============================================================== */
.bc-colored .breadcrumb-item,
.bc-colored .breadcrumb-item a {
  color: #ffffff; }
  .bc-colored .breadcrumb-item.active,
  .bc-colored .breadcrumb-item a.active {
    opacity: 0.7; }

    .bc-colored .breadcrumb-item + .breadcrumb-item::before {
      color: rgba(255, 255, 255, 0.4); }

      .breadcrumb {
        margin-bottom: 0px; }

/*============================================================== 
 Ui-bootstrap
 ============================================================== */
 ul.list-icons {
  margin: 0px;
  padding: 0px; }
  ul.list-icons li {
    list-style: none;
    line-height: 30px;
    margin: 5px 0;
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in; }
    ul.list-icons li a {
      color: #67757c; }
      ul.list-icons li a:hover {
        color: #009efb; }
        ul.list-icons li i {
          font-size: 13px;
          padding-right: 8px; }

          ul.list-inline li {
            display: inline-block;
            padding: 0 8px; }

            ul.two-part {
              margin: 0px; }
              ul.two-part li {
                width: 48.8%; }

                /*Accordion*/
                html body .accordion .card {
                  margin-bottom: 0px; }

/*============================================================== 
 flot chart
 ============================================================== */
 .flot-chart {
  display: block;
  height: 400px; }

  .flot-chart-content {
    width: 100%;
    height: 100%; }

    html body .jqstooltip,
    html body .flotTip {
      width: auto !important;
      height: auto !important;
      background: #263238;
      color: #ffffff;
      padding: 5px 10px; }

/*============================================================== 
Easy pie chart 
============================================================== */
.chart {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 100px;
  margin-top: 20px;
  margin-bottom: 20px;
  text-align: center; }
  .chart canvas {
    position: absolute;
    top: 0;
    left: 0; }

    .chart.chart-widget-pie {
      margin-top: 5px;
      margin-bottom: 5px; }

      .pie-chart > span {
        left: 0;
        margin-top: -2px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%); }

        .chart > span > img {
          left: 0;
          margin-top: -2px;
          position: absolute;
          right: 0;
          text-align: center;
          top: 50%;
          width: 60%;
          height: 60%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          margin: 0 auto; }

          .percent {
            display: inline-block;
            line-height: 100px;
            z-index: 2;
            font-weight: 600;
            font-size: 18px;
            color: #263238; }
            .percent:after {
              content: '%';
              margin-left: 0.1em;
              font-size: .8em; }

/*============================================================== 
Dashboard1 chart
============================================================== */
.ct-charts {
  position: relative; }

  .amp-pxl {
    position: relative; }
    .amp-pxl .ct-series-a .ct-bar {
      stroke: #1e88e5; }
      .amp-pxl .ct-series-b .ct-bar {
        stroke: #26c6da; }

        .c3-chart-arcs-title, .c3-legend-item {
          font-family: "Poppins", sans-serif;
          fill: #67757c; }

          html body #visitor .c3-chart-arcs-title {
            font-size: 18px;
            fill: #99abb4; }

            .stylish-table thead th {
              font-weight: 400;
              color: #99abb4;
              border: 0px;
              border-bottom: 1px; }

              .stylish-table tbody tr {
                border-left: 4px solid #ffffff; }
                .stylish-table tbody tr:hover, .stylish-table tbody tr.active {
                  border-left: 4px solid #009efb; }

                  .stylish-table tbody td {
                    vertical-align: middle; }
                    .stylish-table tbody td h6 {
                      font-weight: 500;
                      margin-bottom: 0px;
                      white-space: nowrap; }
                      .stylish-table tbody td small {
                        line-height: 12px;
                        white-space: nowrap; }

/*============================================================== 
Dashboard2 chart
============================================================== */
.campaign {
  height: 280px; }
  .campaign .ct-series-a .ct-area {
    fill-opacity: 0.2;
    fill: url(#gradient); }
    .campaign .ct-series-a .ct-line, .campaign .ct-series-a .ct-point {
      stroke: #26c6da;
      stroke-width: 2px; }
      .campaign .ct-series-b .ct-area {
        fill: #1e88e5;
        fill-opacity: 0.1; }
        .campaign .ct-series-b .ct-line, .campaign .ct-series-b .ct-point {
          stroke: #1e88e5;
          stroke-width: 2px; }
          .campaign .ct-series-a .ct-point, .campaign .ct-series-b .ct-point {
            stroke-width: 6px; }

            .campaign2 .ct-series-a .ct-area {
              fill-opacity: 0.2;
              fill: url(#gradient); }

              .campaign2 .ct-series-a .ct-line, .campaign2 .ct-series-a .ct-point {
                stroke: #26c6da;
                stroke-width: 2px; }

                .campaign2 .ct-series-b .ct-area {
                  fill: #1e88e5;
                  fill-opacity: 0.1; }

                  .campaign2 .ct-series-b .ct-line, .campaign2 .ct-series-b .ct-point {
                    stroke: #1e88e5;
                    stroke-width: 2px; }

                    .campaign2 .ct-series-a .ct-point, .campaign2 .ct-series-b .ct-point {
                      stroke-width: 6px; }

                      .usage .ct-series-a .ct-line {
                        stroke-width: 3px;
                        stroke: rgba(255, 255, 255, 0.5); }

/*============================================================== 
Dashboard3 chart
============================================================== */
.total-sales {
  position: relative; }
  .total-sales .chartist-tooltip {
    background: #2f3d4a; }
    .total-sales .ct-series-a .ct-bar {
      stroke: #1e88e5; }
      .total-sales .ct-series-b .ct-bar {
        stroke: #26c6da; }
        .total-sales .ct-series-c .ct-bar {
          stroke: #fc4b6c; }

          .ct-chart {
            position: relative; }
            .ct-chart .ct-series-a .ct-slice-donut {
              stroke: #26c6da; }
              .ct-chart .ct-series-b .ct-slice-donut {
                stroke: #f2f4f8; }
                .ct-chart .ct-series-c .ct-slice-donut {
                  stroke: #1e88e5; }

                  #visitfromworld path.jvectormap-region.jvectormap-element {
                    stroke-width: 1px;
                    stroke: #99abb4; }

                    .jvectormap-zoomin,
                    .jvectormap-zoomout,
                    .jvectormap-goback {
                      background: #99abb4; }

                      .browser td {
                        vertical-align: middle;
                        padding-left: 0px; }

                        #calendar .fc-today-button {
                          display: none; }

                          .calendar-events {
                            padding: 8px 10px;
                            border: 1px solid #ffffff;
                            cursor: move; }
                            .calendar-events:hover {
                              border: 1px dashed rgba(120, 130, 140, 0.13); }
                              .calendar-events i {
                                margin-right: 8px; }

/*============================================================== 
Dashboard4 chart
============================================================== */
.total-revenue4 {
  position: relative; }
  .total-revenue4 .ct-series-a .ct-line {
    stroke: #1e88e5;
    stroke-width: 1px; }
    .total-revenue4 .ct-series-a .ct-point {
      stroke: #1e88e5;
      stroke-width: 5px; }
      .total-revenue4 .ct-series-b .ct-line {
        stroke: #26c6da;
        stroke-width: 1px; }
        .total-revenue4 .ct-series-b .ct-point {
          stroke: #26c6da;
          stroke-width: 5px; }
          .total-revenue4 .ct-series-a .ct-area {
            fill: #1e88e5;
            fill-opacity: 0.2; }
            .total-revenue4 .ct-series-b .ct-area {
              fill: #26c6da;
              fill-opacity: 0.2; }

/*============================================================== 
Dashboard6 chart
============================================================== */
.product-overview.table tbody tr td {
  vertical-align: middle; }

/*============================================================== 
Widget-data
============================================================== */
.sparkchart {
  margin-bottom: -2px; }

/*============================================================== 
File upload
============================================================== */
.btn-file {
  overflow: hidden;
  position: relative;
  vertical-align: middle; }
  .btn-file > input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    font-size: 23px;
    height: 100%;
    width: 100%;
    direction: ltr;
    cursor: pointer;
    border-radius: 0px; }

    .fileinput .input-group-addon {
      border: none;
      border-bottom: 1px solid #d9d9d9;
      background: #ffffff;
      margin-bottom: 1px; }

      .fileinput .form-control {
        padding-top: 7px;
        padding-bottom: 5px;
        display: inline-block;
        margin-bottom: 0px;
        vertical-align: middle;
        cursor: text; }

        .fileinput .thumbnail {
          overflow: hidden;
          display: inline-block;
          margin-bottom: 5px;
          vertical-align: middle;
          text-align: center; }

          .fileinput .thumbnail > img {
            max-height: 100%; }

            .fileinput .btn {
              vertical-align: middle; }

              .fileinput-exists .fileinput-new,
              .fileinput-new .fileinput-exists {
                display: none; }

                .fileinput-inline .fileinput-controls {
                  display: inline; }

                  .fileinput-filename {
                    vertical-align: middle;
                    display: inline-block;
                    overflow: hidden; }

                    .form-control .fileinput-filename {
                      vertical-align: bottom; }

                      .fileinput.input-group > * {
                        position: relative;
                        z-index: 2; }

                        .fileinput.input-group > .btn-file {
                          z-index: 1; }

/*============================================================== 
widget-chart-page product review
============================================================== */
.product-review {
  margin: 0px;
  padding: 25px; }
  .product-review li {
    display: block;
    padding: 20px 0;
    list-style: none; }
    .product-review li .font,
    .product-review li span {
      display: inline-block;
      margin-left: 10px; }

      .social-profile {
        text-align: center;
        background: rgba(7, 10, 43, 0.8); }

        .profile-tab li a.nav-link, .customtab li a.nav-link {
          border: 0px;
          padding: 15px 20px;
          color: #67757c; }
          .profile-tab li a.nav-link.active, .customtab li a.nav-link.active {
            border-bottom: 2px solid #009efb;
            color: #009efb; }
            .profile-tab li a.nav-link:hover, .customtab li a.nav-link:hover {
              color: #009efb; }

/*============================================================== 
Form addons page
============================================================== */
/*Bootstrap select*/
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
  width: 100%; }

  .bootstrap-select .dropdown-menu li a {
    display: block;
    padding: 7px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #67757c;
    white-space: nowrap; }
    .bootstrap-select .dropdown-menu li a:hover, .bootstrap-select .dropdown-menu li a:focus {
      color: #009efb;
      background: #f2f4f8; }

      .bootstrap-select .show > .dropdown-menu {
        display: block; }

        .bootstrap-touchspin .input-group-btn-vertical > .btn {
          padding: 9px 10px; }

          .select2-container--default .select2-selection--single {
            border-color: #d9d9d9;
            height: 38px; }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
              line-height: 38px; }

              .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 33px; }

                .input-form .btn {
                  padding: 10px 12px; }

/*============================================================== 
Form Material page
============================================================== */
/*Material inputs*/
.form-material .form-group {
  overflow: hidden; }

  .form-material .form-control {
    background-color: transparent;
    background-position: center bottom, center calc(100% - 1px);
    background-repeat: no-repeat;
    background-size: 0 2px, 100% 1px;
    padding: 0;
    -webkit-transition: background 0s ease-out 0s;
    -o-transition: background 0s ease-out 0s;
    transition: background 0s ease-out 0s; }

    .form-material .form-control, .form-material .form-control.focus, .form-material .form-control:focus {
      background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
      background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
      background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
      background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
      border: 0 none;
      border-radius: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
      float: none; }

      .form-material .form-control.focus, .form-material .form-control:focus {
        background-size: 100% 2px, 100% 1px;
        outline: 0 none;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s; }

        .form-control-line .form-group {
          overflow: hidden; }

          .form-control-line .form-control {
            border: 0px;
            border-radius: 0px;
            padding-left: 0px;
            border-bottom: 1px solid #d9d9d9; }
            .form-control-line .form-control:focus {
              border-bottom: 1px solid #009efb; }

              /*******************/
              /*Floating Label*/
              /*******************/
              .floating-labels .form-group {
                position: relative; }

                .floating-labels .form-control {
                  padding: 10px 10px 10px 0;
                  display: block;
                  border: none;
                  font-family: "Poppins", sans-serif;
                  border-radius: 0px;
                  border-bottom: 1px solid #d9d9d9; }

                  .floating-labels select.form-control > option {
                    font-size: 14px; }

                    .floating-labels .has-error .form-control {
                      border-bottom: 1px solid #fc4b6c; }

                      .floating-labels .has-warning .form-control {
                        border-bottom: 1px solid #ffb22b; }

                        .floating-labels .has-success .form-control {
                          border-bottom: 1px solid #26c6da; }

                          .floating-labels .form-control:focus {
                            outline: none;
                            border: none; }

                            .floating-labels label {
                              color: #67757c;
                              position: absolute;
                              cursor: auto;
                              top: 5px;
                              -o-transition: 0.2s ease all;
                              transition: 0.2s ease all;
                              -moz-transition: 0.2s ease all;
                              -webkit-transition: 0.2s ease all; }

                              .floating-labels .focused label {
                                top: -20px;
                                font-size: 12px;
                                color: #263238; }

                                .floating-labels .bar {
                                  position: relative;
                                  display: block; }

                                  .floating-labels .bar:before,
                                  .floating-labels .bar:after {
                                    content: '';
                                    height: 2px;
                                    width: 0;
                                    bottom: 1px;
                                    position: absolute;
                                    background: #009efb;
                                    -o-transition: 0.2s ease all;
                                    transition: 0.2s ease all;
                                    -moz-transition: 0.2s ease all;
                                    -webkit-transition: 0.2s ease all; }

                                    .floating-labels .bar:before {
                                      left: 50%; }

                                      .floating-labels .bar:after {
                                        right: 50%; }

                                        .floating-labels .form-control:focus ~ .bar:before,
                                        .floating-labels .form-control:focus ~ .bar:after {
                                          width: 50%; }

                                          .floating-labels .highlight {
                                            position: absolute;
                                            height: 60%;
                                            width: 100px;
                                            top: 25%;
                                            left: 0;
                                            pointer-events: none;
                                            opacity: 0.5; }

                                            .floating-labels .input-lg ~ label,
                                            .floating-labels .input-lg {
                                              font-size: 24px; }

                                              .floating-labels .input-sm ~ label,
                                              .floating-labels .input-sm {
                                                font-size: 16px; }

                                                .has-warning .bar:before,
                                                .has-warning .bar:after {
                                                  background: #ffb22b; }

                                                  .has-success .bar:before,
                                                  .has-success .bar:after {
                                                    background: #26c6da; }

                                                    .has-error .bar:before,
                                                    .has-error .bar:after {
                                                      background: #fc4b6c; }

                                                      .has-warning .form-control:focus ~ label,
                                                      .has-warning .form-control:valid ~ label {
                                                        color: #ffb22b; }

                                                        .has-success .form-control:focus ~ label,
                                                        .has-success .form-control:valid ~ label {
                                                          color: #26c6da; }

                                                          .has-error .form-control:focus ~ label,
                                                          .has-error .form-control:valid ~ label {
                                                            color: #fc4b6c; }

                                                            .has-feedback label ~ .t-0 {
                                                              top: 0; }

                                                              .form-group.error input, .form-group.error select, .form-group.error textarea {
                                                                border: 1px solid #fc4b6c; }

                                                                .form-group.validate input, .form-group.validate select, .form-group.validate textarea {
                                                                  border: 1px solid #26c6da; }

                                                                  .form-group.error .help-block ul {
                                                                    padding: 0px;
                                                                    color: #fc4b6c; }
                                                                    .form-group.error .help-block ul li {
                                                                      list-style: none; }

                                                                      .form-group.issue .help-block ul {
                                                                        padding: 0px;
                                                                        color: #ffb22b; }
                                                                        .form-group.issue .help-block ul li {
                                                                          list-style: none; }

/*******************
Pagination
******************/
.pagination-circle li.active a {
  background: #26c6da; }

  .pagination-circle li a {
    width: 40px;
    height: 40px;
    background: #f2f4f8;
    border: 0px;
    text-align: center;
    border-radius: 100%; }
    .pagination-circle li a:first-child, .pagination-circle li a:last-child {
      border-radius: 100%; }
      .pagination-circle li a:hover {
        background: #26c6da;
        color: #ffffff; }

        .pagination-circle li.disabled a {
          background: #f2f4f8;
          color: rgba(120, 130, 140, 0.13); }

/*******************
Form Dropzone
******************/
.dropzone {
  border: 1px dashed #d9d9d9; }
  .dropzone .dz-message {
    padding: 5% 0;
    margin: 0px; }

/*******************
Form Pickers
******************/
.asColorPicker-dropdown {
  max-width: 260px; }

  .asColorPicker-trigger {
    position: absolute;
    top: 0;
    right: -35px;
    height: 38px;
    width: 37px;
    border: 0; }

    .asColorPicker-clear {
      display: none;
      position: absolute;
      top: 5px;
      right: 10px;
      text-decoration: none; }

      table th {
        font-weight: 400; }

        .daterangepicker td.active, .daterangepicker td.active:hover {
          background-color: #009efb; }

          .datepicker table tr td.today, .datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:hover, .datepicker table tr td.today:hover {
            background: #009efb;
            color: #ffffff; }

            .datepicker td, .datepicker th {
              padding: 5px 10px; }

/*******************
Form icheck
******************/
.icolors,
.icheck-list {
  padding: 0;
  margin: 0;
  list-style: none; }

  .icolors > li {
    padding: 0;
    margin: 2px;
    float: left;
    display: inline-block;
    height: 30px;
    width: 30px;
    background: #263238;
    text-align: center; }

    .icolors > li.active:after {
      content: "\2713 ";
      color: #ffffff;
      line-height: 30px; }

      .icolors > li:first-child {
        margin-left: 0; }

        .icolors > li.orange {
          background: #fc4b6c; }

          .icolors > li.yellow {
            background: #ffb22b; }

            .icolors > li.info {
              background: #1e88e5; }

              .icolors > li.green {
                background: #26c6da; }

                .icolors > li.red {
                  background: #fb3a3a; }

                  .icolors > li.purple {
                    background: #7460ee; }

                    .icolors > li.blue {
                      background: #02bec9; }

                      .icheck-list {
                        float: left;
                        padding-right: 50px;
                        padding-top: 10px; }

                        .icheck-list li {
                          padding-bottom: 5px; }

                          .icheck-list li label {
                            padding-left: 10px; }

/*******************
Form summernote
******************/
.note-popover, .note-icon-caret {
  display: none; }

  .note-editor.note-frame {
    border: 1px solid #d9d9d9; }
    .note-editor.note-frame .panel-heading {
      padding: 6px 10px 10px;
      border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

      .label {
        display: inline-block; }

/*******************
Table-Layout
******************/
.table thead th, .table th {
  border: 0px; }

  .color-table.primary-table thead th {
    background-color: #7460ee;
    color: #ffffff; }

    .table-striped tbody tr:nth-of-type(odd) {
      background: #f2f4f8; 
    }
    .color-table.success-table thead th {
      background-color: #26c6da;
      color: #ffffff; }

      .color-table.info-table thead th {
        background-color: #1e88e5;
        color: #ffffff; }

        .color-table.warning-table thead th {
          background-color: #ffb22b;
          color: #ffffff; }

          .color-table.danger-table thead th {
            background-color: #fc4b6c;
            color: #ffffff; }

            .color-table.inverse-table thead th {
              background-color: #2f3d4a;
              color: #ffffff; }

              .color-table.dark-table thead th {
                background-color: #263238;
                color: #ffffff; }

                .color-table.red-table thead th {
                  background-color: #fb3a3a;
                  color: #ffffff; }

                  .color-table.purple-table thead th {
                    background-color: #7460ee;
                    color: #ffffff; }

                    .color-table.muted-table thead th {
                      background-color: #99abb4;
                      color: #ffffff; }

                      .color-bordered-table.primary-bordered-table {
                        border: 2px solid #7460ee; }
                        .color-bordered-table.primary-bordered-table thead th {
                          background-color: #7460ee;
                          color: #ffffff; }

                          .color-bordered-table.success-bordered-table {
                            border: 2px solid #26c6da; }
                            .color-bordered-table.success-bordered-table thead th {
                              background-color: #26c6da;
                              color: #ffffff; }

                              .color-bordered-table.info-bordered-table {
                                border: 2px solid #1e88e5; }
                                .color-bordered-table.info-bordered-table thead th {
                                  background-color: #1e88e5;
                                  color: #ffffff; }

                                  .color-bordered-table.warning-bordered-table {
                                    border: 2px solid #ffb22b; }
                                    .color-bordered-table.warning-bordered-table thead th {
                                      background-color: #ffb22b;
                                      color: #ffffff; }

                                      .color-bordered-table.danger-bordered-table {
                                        border: 2px solid #fc4b6c; }
                                        .color-bordered-table.danger-bordered-table thead th {
                                          background-color: #fc4b6c;
                                          color: #ffffff; }

                                          .color-bordered-table.inverse-bordered-table {
                                            border: 2px solid #2f3d4a; }
                                            .color-bordered-table.inverse-bordered-table thead th {
                                              background-color: #2f3d4a;
                                              color: #ffffff; }

                                              .color-bordered-table.dark-bordered-table {
                                                border: 2px solid #263238; }
                                                .color-bordered-table.dark-bordered-table thead th {
                                                  background-color: #263238;
                                                  color: #ffffff; }

                                                  .color-bordered-table.red-bordered-table {
                                                    border: 2px solid #fb3a3a; }
                                                    .color-bordered-table.red-bordered-table thead th {
                                                      background-color: #fb3a3a;
                                                      color: #ffffff; }

                                                      .color-bordered-table.purple-bordered-table {
                                                        border: 2px solid #7460ee; }
                                                        .color-bordered-table.purple-bordered-table thead th {
                                                          background-color: #7460ee;
                                                          color: #ffffff; }

                                                          .color-bordered-table.muted-bordered-table {
                                                            border: 2px solid #99abb4; }
                                                            .color-bordered-table.muted-bordered-table thead th {
                                                              background-color: #99abb4;
                                                              color: #ffffff; }

                                                              .full-color-table.full-primary-table {
                                                                background-color: #f1effd; }
                                                                .full-color-table.full-primary-table thead th {
                                                                  background-color: #7460ee;
                                                                  border: 0;
                                                                  color: #ffffff; }
                                                                  .full-color-table.full-primary-table tbody td {
                                                                    border: 0; }
                                                                    .full-color-table.full-primary-table tr:hover {
                                                                      background-color: #7460ee;
                                                                      color: #ffffff; }

                                                                      .full-color-table.full-success-table {
                                                                        background-color: #e8fdeb; }
                                                                        .full-color-table.full-success-table thead th {
                                                                          background-color: #26c6da;
                                                                          border: 0;
                                                                          color: #ffffff; }
                                                                          .full-color-table.full-success-table tbody td {
                                                                            border: 0; }
                                                                            .full-color-table.full-success-table tr:hover {
                                                                              background-color: #26c6da;
                                                                              color: #ffffff; }

                                                                              .full-color-table.full-info-table {
                                                                                background-color: #cfecfe; }
                                                                                .full-color-table.full-info-table thead th {
                                                                                  background-color: #1e88e5;
                                                                                  border: 0;
                                                                                  color: #ffffff; }
                                                                                  .full-color-table.full-info-table tbody td {
                                                                                    border: 0; }
                                                                                    .full-color-table.full-info-table tr:hover {
                                                                                      background-color: #1e88e5;
                                                                                      color: #ffffff; }

                                                                                      .full-color-table.full-warning-table {
                                                                                        background-color: #fff8ec; }
                                                                                        .full-color-table.full-warning-table thead th {
                                                                                          background-color: #ffb22b;
                                                                                          border: 0;
                                                                                          color: #ffffff; }
                                                                                          .full-color-table.full-warning-table tbody td {
                                                                                            border: 0; }
                                                                                            .full-color-table.full-warning-table tr:hover {
                                                                                              background-color: #ffb22b;
                                                                                              color: #ffffff; }

                                                                                              .full-color-table.full-danger-table {
                                                                                                background-color: #f9e7eb; }
                                                                                                .full-color-table.full-danger-table thead th {
                                                                                                  background-color: #fc4b6c;
                                                                                                  border: 0;
                                                                                                  color: #ffffff; }
                                                                                                  .full-color-table.full-danger-table tbody td {
                                                                                                    border: 0; }
                                                                                                    .full-color-table.full-danger-table tr:hover {
                                                                                                      background-color: #fc4b6c;
                                                                                                      color: #ffffff; }

                                                                                                      .full-color-table.full-inverse-table {
                                                                                                        background-color: #f6f6f6; }
                                                                                                        .full-color-table.full-inverse-table thead th {
                                                                                                          background-color: #2f3d4a;
                                                                                                          border: 0;
                                                                                                          color: #ffffff; }
                                                                                                          .full-color-table.full-inverse-table tbody td {
                                                                                                            border: 0; }
                                                                                                            .full-color-table.full-inverse-table tr:hover {
                                                                                                              background-color: #2f3d4a;
                                                                                                              color: #ffffff; }

                                                                                                              .full-color-table.full-dark-table {
                                                                                                                background-color: rgba(43, 43, 43, 0.8); }
                                                                                                                .full-color-table.full-dark-table thead th {
                                                                                                                  background-color: #263238;
                                                                                                                  border: 0;
                                                                                                                  color: #ffffff; }
                                                                                                                  .full-color-table.full-dark-table tbody td {
                                                                                                                    border: 0;
                                                                                                                    color: #ffffff; }
                                                                                                                    .full-color-table.full-dark-table tr:hover {
                                                                                                                      background-color: #263238;
                                                                                                                      color: #ffffff; }

                                                                                                                      .full-color-table.full-red-table {
                                                                                                                        background-color: #f9e7eb; }
                                                                                                                        .full-color-table.full-red-table thead th {
                                                                                                                          background-color: #fb3a3a;
                                                                                                                          border: 0;
                                                                                                                          color: #ffffff; }
                                                                                                                          .full-color-table.full-red-table tbody td {
                                                                                                                            border: 0; }
                                                                                                                            .full-color-table.full-red-table tr:hover {
                                                                                                                              background-color: #fb3a3a;
                                                                                                                              color: #ffffff; }

                                                                                                                              .full-color-table.full-purple-table {
                                                                                                                                background-color: #f1effd; }
                                                                                                                                .full-color-table.full-purple-table thead th {
                                                                                                                                  background-color: #7460ee;
                                                                                                                                  border: 0;
                                                                                                                                  color: #ffffff; }
                                                                                                                                  .full-color-table.full-purple-table tbody td {
                                                                                                                                    border: 0; }
                                                                                                                                    .full-color-table.full-purple-table tr:hover {
                                                                                                                                      background-color: #7460ee;
                                                                                                                                      color: #ffffff; }

                                                                                                                                      .full-color-table.full-muted-table {
                                                                                                                                        background-color: rgba(152, 166, 173, 0.2); }
                                                                                                                                        .full-color-table.full-muted-table thead th {
                                                                                                                                          background-color: #99abb4;
                                                                                                                                          border: 0;
                                                                                                                                          color: #ffffff; }
                                                                                                                                          .full-color-table.full-muted-table tbody td {
                                                                                                                                            border: 0; }
                                                                                                                                            .full-color-table.full-muted-table tr:hover {
                                                                                                                                              background-color: #99abb4;
                                                                                                                                              color: #ffffff; }

/*******************
Table-Data Table
******************/
.dataTables_wrapper {
  padding-top: 10px;
}

.dt-buttons {
  display: inline-block;
  padding-top: 5px;
  margin-bottom: 15px; }
  .dt-buttons .dt-button {
    padding: 5px 15px;
    border-radius: 4px;
    background: #009efb;
    color: #ffffff;
    margin-right: 3px; }
    .dt-buttons .dt-button:hover {
      background: #2f3d4a; }

      .dataTables_info, .dataTables_length {
        display: inline-block; }

        .dataTables_length {
          margin-top: 10px; }
          .dataTables_length select {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
            background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
            background-size: 0 2px, 100% 1px;
            background-repeat: no-repeat;
            background-position: center bottom, center calc(100% - 1px);
            background-color: transparent;
            -webkit-transition: background 0s ease-out;
            -o-transition: background 0s ease-out;
            transition: background 0s ease-out;
            padding-bottom: 5px; }
            .dataTables_length select:focus {
              outline: none;
              background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
              background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
              background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
              background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
              background-size: 100% 2px, 100% 1px;
              -webkit-box-shadow: none;
              box-shadow: none;
              -webkit-transition-duration: 0.3s;
              -o-transition-duration: 0.3s;
              transition-duration: 0.3s; }

              .dataTables_filter {
                float: right;
                margin-top: 10px; }
                .dataTables_filter input {

                  background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
                  background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
                  background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
                  background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
                  background-size: 0 2px, 100% 1px;
                  background-repeat: no-repeat;
                  background-position: center bottom, center calc(100% - 1px);
                  background-color: transparent;
                  -webkit-transition: background 0s ease-out;
                  -o-transition: background 0s ease-out;
                  transition: background 0s ease-out;
                  float: none;
                  -webkit-box-shadow: none;
                  box-shadow: none;
                  border-radius: 0;
                  margin-left: 10px; }
                  .dataTables_filter input:focus {
                    outline: none;
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
                    background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
                    background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
                    background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
                    background-size: 100% 2px, 100% 1px;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    -webkit-transition-duration: 0.3s;
                    -o-transition-duration: 0.3s;
                    transition-duration: 0.3s; }

                    table.dataTable thead .sorting,
                    table.dataTable thead .sorting_asc,
                    table.dataTable thead .sorting_desc,
                    table.dataTable thead .sorting_asc_disabled,
                    table.dataTable thead .sorting_desc_disabled {
                      background: transparent; }

                      table.dataTable thead .sorting_asc:after {
                        content: "\f0de";
                        margin-left: 10px;
                        font-family: fontawesome;
                        cursor: pointer; }

                        table.dataTable thead .sorting_desc:after {
                          content: "\f0dd";
                          margin-left: 10px;
                          font-family: fontawesome;
                          cursor: pointer; }

                          table.dataTable thead .sorting:after {
                            content: "\f0dc";
                            margin-left: 10px;
                            font-family: fontawesome !important;
                            cursor: pointer;
                            color: rgba(50, 50, 50, 0.5); }

                            .dataTables_wrapper .dataTables_paginate {
                              float: right;
                              text-align: right;
                              padding-top: 0.25em; }

                              .dataTables_wrapper .dataTables_paginate .paginate_button {
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                display: inline-block;
                                min-width: 1.5em;
                                padding: 0.5em 1em;
                                text-align: center;
                                text-decoration: none;
                                cursor: pointer;
                                *cursor: hand;
                                color: #67757c;
                                border: 1px solid #ddd; }

                                .dataTables_wrapper .dataTables_paginate .paginate_button.current,
                                .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                                  color: #ffffff !important;
                                  border: 1px solid #009efb;
                                  background-color: #009efb; }

                                  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
                                  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
                                  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
                                    cursor: default;
                                    color: #67757c;
                                    border: 1px solid #ddd;
                                    background: transparent;
                                    -webkit-box-shadow: none;
                                    box-shadow: none; }

                                    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                                      color: white;
                                      border: 1px solid #009efb;
                                      background-color: #009efb; }

                                      .dataTables_wrapper .dataTables_paginate .paginate_button:active {
                                        outline: none;
                                        background-color: #67757c; }

                                        .dataTables_wrapper .dataTables_paginate .ellipsis {
                                          padding: 0 1em; }

/*******************
Table- responsive
******************/
.tablesaw-bar .btn-group label {
  color: #67757c !important; }

/*******************
Table- editable table
******************/
.dt-bootstrap {
  display: block; }

  .paging_simple_numbers .pagination .paginate_button {
    padding: 0px;
    background: #ffffff; }
    .paging_simple_numbers .pagination .paginate_button:hover {
      background: #ffffff; }
      .paging_simple_numbers .pagination .paginate_button a {
        padding: 5px 10px;
        border-radius: 4px;
        border: 0px; }
        .paging_simple_numbers .pagination .paginate_button.active a, .paging_simple_numbers .pagination .paginate_button:hover a {
          background: #1e88e5;
          color: #ffffff; }

/*******************
Table- Footable
******************/
#demo-show-entries {
  border: 0;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
  background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
  background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
  background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
  background-size: 0 2px, 100% 1px;
  background-repeat: no-repeat;
  background-position: center bottom, center calc(100% - 1px);
  background-color: transparent;
  -webkit-transition: background 0s ease-out;
  -o-transition: background 0s ease-out;
  transition: background 0s ease-out;
  padding-bottom: 5px;
  color: #67757c; }
  #demo-show-entries:focus {
    outline: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
    background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
    background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
    background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s; }

    #demo-input-search2 {
      border: 0;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
      background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
      background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
      background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
      background-size: 0 2px, 100% 1px;
      background-repeat: no-repeat;
      background-position: center bottom, center calc(100% - 1px);
      background-color: transparent;
      -webkit-transition: background 0s ease-out;
      -o-transition: background 0s ease-out;
      transition: background 0s ease-out;
      float: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      border-radius: 0;
      margin-left: 10px;
      color: #67757c; }
      #demo-input-search2:focus {
        outline: none;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
        background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
        background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
        background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
        background-size: 100% 2px, 100% 1px;
        -webkit-box-shadow: none;
        box-shadow: none;
        -webkit-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s; }

        .footable .pagination li a {
          position: relative;
          display: block;
          padding: .5rem .75rem;
          margin-left: -1px;
          line-height: 1.25;
          color: #0275d8;
          background-color: #ffffff;
          border: 1px solid #ddd; }

          .footable .pagination li.active a {
            z-index: 2;
            color: #fff;
            background-color: #0275d8;
            border-color: #0275d8; }

            .footable .pagination li.disabled a {
              color: #636c72;
              pointer-events: none;
              cursor: not-allowed;
              background-color: #ffffff;
              border-color: #ddd; }

              .footable .pagination li:first-child a {
                margin-left: 0;
                border-bottom-left-radius: .25rem;
                border-top-left-radius: .25rem; }

                .footable-odd {
                  background: #f2f4f8; }

/*******************
Icon list fontawesom
******************/
.icon-list-demo div {
  cursor: pointer;
  line-height: 60px;
  white-space: nowrap;
  color: #67757c; }
  .icon-list-demo div:hover {
    color: #263238; }
    .icon-list-demo div p {
      margin: 10px 0;
      padding: 5px 0; }

      .icon-list-demo i {
        -webkit-transition: all 0.2s;
        -webkit-transition: font-size .2s;
        display: inline-block;
        font-size: 18px;
        margin: 0 15px 0 10px;
        text-align: left;
        -o-transition: all 0.2s;
        transition: all 0.2s;
        -o-transition: font-size .2s;
        transition: font-size .2s;
        vertical-align: middle;
        -webkit-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s; }

        .icon-list-demo .col-md-4, .icon-list-demo .col-3 {
          border-radius: 4px; }
          .icon-list-demo .col-md-4:hover, .icon-list-demo .col-3:hover {
            background-color: #ebf3f5; }

            .icon-list-demo .div:hover i {
              font-size: 2em; }

/*******************
Icon list material icon
******************/
.material-icon-list-demo .mdi {
  font-size: 21px; }

/*******************
Gridstack Dragable portlet
******************/
.grid-stack-item-content {
  background: #fff;
  color: #2b2b2b;
  text-align: center;
  font-size: 20px; }

  .grid-stack > .grid-stack-item > .grid-stack-item-content {
    border: 1px solid rgba(120, 130, 140, 0.13); }

/*******************
Bootstrap Switch
******************/
.bootstrap-switch,
.bootstrap-switch .bootstrap-switch-container {
  border-radius: 2px; }

  .bootstrap-switch .bootstrap-switch-handle-on {
    border-bottom-left-radius: 2px;
    border-top-left-radius: 2px; }

    .bootstrap-switch .bootstrap-switch-handle-off {
      border-bottom-right-radius: 2px;
      border-top-right-radius: 2px; }

      .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary,
      .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary {
        color: #ffffff;
        background: #7460ee; }

        .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info,
        .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info {
          color: #ffffff;
          background: #1e88e5; }

          .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success,
          .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success {
            color: #ffffff;
            background: #26c6da; }

            .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning,
            .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning {
              color: #ffffff;
              background: #ffb22b; }

              .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger,
              .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger {
                color: #ffffff;
                background: #fc4b6c; }

                .bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default,
                .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default {
                  color: #263238;
                  background: #f2f4f8; }

                  .onoffswitch {
                    position: relative;
                    width: 90px;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none; }

                    .onoffswitch-checkbox {
                      display: none; }

                      .onoffswitch-label {
                        display: block;
                        overflow: hidden;
                        cursor: pointer;
                        border: 2px solid #26c6da;
                        border-radius: 20px; }

                        .onoffswitch-inner {
                          display: block;
                          width: 200%;
                          margin-left: -100%;
                          -webkit-transition: margin 0.3s ease-in 0s;
                          -o-transition: margin 0.3s ease-in 0s;
                          transition: margin 0.3s ease-in 0s; }

                          .onoffswitch-inner:before, .onoffswitch-inner:after {
                            display: block;
                            float: left;
                            width: 50%;
                            height: 30px;
                            padding: 0;
                            line-height: 30px;
                            font-size: 14px;
                            color: white;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box; }

                            .onoffswitch-inner:before {
                              content: "ON";
                              padding-left: 27px;
                              background-color: #26c6da;
                              color: #FFFFFF; }

                              .onoffswitch-inner:after {
                                content: "OFF";
                                padding-right: 24px;
                                background-color: #EEEEEE;
                                color: #999999;
                                text-align: right; }

                                .onoffswitch-switch {
                                  display: block;
                                  width: 23px;
                                  margin: 6px;
                                  background: #FFFFFF;
                                  position: absolute;
                                  top: 0;
                                  bottom: 0;
                                  right: 56px;
                                  border: 2px solid #26c6da;
                                  border-radius: 20px;
                                  -webkit-transition: all 0.3s ease-in 0s;
                                  -o-transition: all 0.3s ease-in 0s;
                                  transition: all 0.3s ease-in 0s; }

                                  .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
                                    margin-left: 0; }

                                    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
                                      right: 0px; }

/*******************
Date paginator page
******************/
.dp-selected[style] {
  background-color: #009efb !important; }

  .datepaginator-sm .pagination li a, .datepaginator-lg .pagination li a, .datepaginator .pagination li a {
    padding: 0 5px;
    height: 60px;
    border: 1px solid rgba(120, 130, 140, 0.13);
    float: left;
    position: relative; }

/*******************
sweet alert page
******************/
.model_img {
  cursor: pointer; }

/*******************
Grid page
******************/
.show-grid {
  margin-bottom: 10px;
  padding: 0 15px; }

  .show-grid [class^=col-] {
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid #d9d9d9;
    background-color: #f2f4f8; }

/*******************
Vertical tabs
******************/
.vtabs {
  display: table; }
  .vtabs .tabs-vertical {
    width: 150px;
    border-bottom: 0px;
    border-right: 1px solid rgba(120, 130, 140, 0.13);
    display: table-cell;
    vertical-align: top; }
    .vtabs .tabs-vertical li .nav-link {
      color: #263238;
      margin-bottom: 10px;
      border: 0px;
      border-radius: 4px 0 0 4px; }
      .vtabs .tab-content {
        display: table-cell;
        padding: 20px;
        vertical-align: top; }

        .tabs-vertical li .nav-link.active, .tabs-vertical li .nav-link:hover, .tabs-vertical li .nav-link.active:focus {
          background: #009efb;
          border: 0px;
          color: #ffffff; }

          /*Custom vertical tab*/
          .customvtab .tabs-vertical li .nav-link.active, .customvtab .tabs-vertical li .nav-link:hover, .customvtab .tabs-vertical li .nav-link:focus {
            background: #ffffff;
            border: 0px;
            border-right: 2px solid #009efb;
            margin-right: -1px;
            color: #009efb; }

            .tabcontent-border {
              border: 1px solid #ddd;
              border-top: 0px; }

              .customtab2 li a.nav-link {
                border: 0px;
                margin-right: 3px;
                color: #67757c; }
                .customtab2 li a.nav-link.active {
                  background: #009efb;
                  color: #ffffff; }
                  .customtab2 li a.nav-link:hover {
                    color: #ffffff;
                    background: #009efb; }

/*******************
Progress bar
******************/
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite; }

  .progress-vertical {
    min-height: 250px;
    height: 250px;
    position: relative;
    display: inline-block;
    margin-bottom: 0;
    margin-right: 20px; }

    .progress-vertical-bottom {
      min-height: 250px;
      height: 250px;
      position: relative;
      display: inline-block;
      margin-bottom: 0;
      margin-right: 20px;
      -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
      transform: rotate(180deg); }

      .progress-animated {
        -webkit-animation-duration: 5s;
        -webkit-animation-name: myanimation;
        -webkit-transition: 5s all;
        animation-duration: 5s;
        animation-name: myanimation;
        -o-transition: 5s all;
        transition: 5s all; }

        @-webkit-keyframes myanimation {
          from {
            width: 0; } }

            @keyframes myanimation {
              from {
                width: 0; } }

/*******************
Notification page Jquery toaster
******************/
.jq-icon-info {
  background-color: #1e88e5;
  color: #ffffff; }

  .jq-icon-success {
    background-color: #26c6da;
    color: #ffffff; }

    .jq-icon-error {
      background-color: #fc4b6c;
      color: #ffffff; }

      .jq-icon-warning {
        background-color: #ffb22b;
        color: #ffffff; }

        .alert-rounded {
          border-radius: 60px; }

/*******************
list and media
******************/
.list-group a.list-group-item:hover {
  background: #f2f4f8; }

  .list-group-item.active, .list-group .list-group-item.active:hover {
    background: #009efb;
    border-color: #009efb; }

    .list-group-item.disabled {
      color: #99abb4;
      background: #f2f4f8; }

      .media {
        border: 1px solid rgba(120, 130, 140, 0.13);
        margin-bottom: 10px;
        padding: 15px; }

/*******************
User card page
******************/
.el-element-overlay .white-box {
  padding: 0px; }

  .el-element-overlay .el-card-item {
    position: relative;
    padding-bottom: 25px; }
    .el-element-overlay .el-card-item .el-card-avatar {
      margin-bottom: 15px; }
      .el-element-overlay .el-card-item .el-card-content {
        text-align: center; }
        .el-element-overlay .el-card-item .el-card-content h3 {
          margin: 0px; }
          .el-element-overlay .el-card-item .el-card-content a {
            color: #67757c; }
            .el-element-overlay .el-card-item .el-card-content a:hover {
              color: #009efb; }
              .el-element-overlay .el-card-item .el-overlay-1 {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: relative;
                text-align: center;
                cursor: default; }
                .el-element-overlay .el-card-item .el-overlay-1 img {
                  display: block;
                  position: relative;
                  -webkit-transition: all .4s linear;
                  -o-transition: all .4s linear;
                  transition: all .4s linear;
                  width: 100%;
                  height: auto; }
                  .el-element-overlay .el-card-item .el-overlay-1:hover img {
                    -ms-transform: scale(1.2) translateZ(0);
                    -webkit-transform: scale(1.2) translateZ(0);
                  /* transform: scale(1.2) translateZ(0); */ }
                  .el-element-overlay .el-card-item .el-overlay-1 .el-info {
                    text-decoration: none;
                    display: inline-block;
                    text-transform: uppercase;
                    color: #ffffff;
                    background-color: transparent;
                    filter: alpha(opacity=0);
                    -webkit-transition: all .2s ease-in-out;
                    -o-transition: all .2s ease-in-out;
                    transition: all .2s ease-in-out;
                    padding: 0;
                    margin: auto;
                    position: absolute;
                    top: 50%;
                    left: 0;
                    right: 0;
                    transform: translateY(-50%) translateZ(0);
                    -webkit-transform: translateY(-50%) translateZ(0);
                    -ms-transform: translateY(-50%) translateZ(0); }
                    .el-element-overlay .el-card-item .el-overlay-1 .el-info > li {
                      list-style: none;
                      display: inline-block;
                      margin: 0 3px; }
                      .el-element-overlay .el-card-item .el-overlay-1 .el-info > li a {
                        border-color: #ffffff;
                        color: #ffffff;
                        padding: 12px 15px 10px; }
                        .el-element-overlay .el-card-item .el-overlay-1 .el-info > li a:hover {
                          background: #009efb;
                          border-color: #009efb; }
                          .el-element-overlay .el-card-item .el-overlay {
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            overflow: hidden;
                            top: 0;
                            left: 0;
                            opacity: 0;
                            background-color: rgba(0, 0, 0, 0.7);
                            -webkit-transition: all .4s ease-in-out;
                            -o-transition: all .4s ease-in-out;
                            transition: all .4s ease-in-out; }
                            .el-element-overlay .el-card-item .el-overlay-1:hover .el-overlay {
                              opacity: 1;
                              filter: alpha(opacity=100);
                              -webkit-transform: translateZ(0);
                              -ms-transform: translateZ(0);
                              transform: translateZ(0); }
                              .el-element-overlay .el-card-item .el-overlay-1 .scrl-dwn {
                                top: -100%; }
                                .el-element-overlay .el-card-item .el-overlay-1 .scrl-up {
                                  top: 100%;
                                  height: 0px; }
                                  .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-dwn {
                                    top: 0px; }
                                    .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-up {
                                      top: 0px;
                                      height: 100%; }

/*******************
Timeline page
******************/
.timeline {
  position: relative;
  padding: 20px 0 20px;
  list-style: none;
  max-width: 1200px;
  margin: 0 auto; }

  .timeline:before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 3px;
    margin-left: -1.5px;
    background-color: #f2f4f8; }

    .timeline > li {
      position: relative;
      margin-bottom: 20px; }

      .timeline > li:before,
      .timeline > li:after {
        content: " ";
        display: table; }

        .timeline > li:after {
          clear: both; }

          .timeline > li:before,
          .timeline > li:after {
            content: " ";
            display: table; }

            .timeline > li:after {
              clear: both; }

              .timeline > li > .timeline-panel {
                float: left;
                position: relative;
                width: 46%;
                padding: 20px;
                border: 1px solid rgba(120, 130, 140, 0.13);
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
                box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05); }

                .timeline > li > .timeline-panel:before {
                  content: " ";
                  display: inline-block;
                  position: absolute;
                  top: 26px;
                  right: -8px;
                  border-top: 8px solid transparent;
                  border-right: 0 solid rgba(120, 130, 140, 0.13);
                  border-bottom: 8px solid transparent;
                  border-left: 8px solid rgba(120, 130, 140, 0.13); }

                  .timeline > li > .timeline-panel:after {
                    content: " ";
                    display: inline-block;
                    position: absolute;
                    top: 27px;
                    right: -7px;
                    border-top: 7px solid transparent;
                    border-right: 0 solid #ffffff;
                    border-bottom: 7px solid transparent;
                    border-left: 7px solid #ffffff; }

                    .timeline > li > .timeline-badge {
                      z-index: 10;
                      position: absolute;
                      top: 16px;
                      left: 50%;
                      width: 50px;
                      height: 50px;
                      margin-left: -25px;
                      border-radius: 50% 50% 50% 50%;
                      text-align: center;
                      font-size: 1.4em;
                      line-height: 50px;
                      color: #fff;
                      overflow: hidden; }

                      .timeline > li.timeline-inverted > .timeline-panel {
                        float: right; }

                        .timeline > li.timeline-inverted > .timeline-panel:before {
                          right: auto;
                          left: -8px;
                          border-right-width: 8px;
                          border-left-width: 0; }

                          .timeline > li.timeline-inverted > .timeline-panel:after {
                            right: auto;
                            left: -7px;
                            border-right-width: 7px;
                            border-left-width: 0; }

                            .timeline-badge.primary {
                              background-color: #7460ee; }

                              .timeline-badge.success {
                                background-color: #26c6da; }

                                .timeline-badge.warning {
                                  background-color: #ffb22b; }

                                  .timeline-badge.danger {
                                    background-color: #fc4b6c; }

                                    .timeline-badge.info {
                                      background-color: #1e88e5; }

                                      .timeline-title {
                                        margin-top: 0;
                                        color: inherit;
                                        font-weight: 400; }

                                        .timeline-body > p,
                                        .timeline-body > ul {
                                          margin-bottom: 0; }

                                          .timeline-body > p + p {
                                            margin-top: 5px; }

/*******************
Horizontal Timeline page
******************/
.cd-horizontal-timeline .events a {
  padding-bottom: 6px;
  color: #009efb; }

  .cd-horizontal-timeline .filling-line, .cd-horizontal-timeline .events a.selected::after {
    background: #009efb; }

    .cd-horizontal-timeline .events a.selected::after {
      border-color: #009efb; }

      .myadmin-dd .dd-list .dd-item .dd-handle {
        background: #ffffff;
        border: 1px solid rgba(120, 130, 140, 0.13);
        padding: 8px 16px;
        height: auto;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        border-radius: 0; }

        .myadmin-dd-empty .dd-list .dd3-content {
          height: auto;
          border: 1px solid rgba(120, 130, 140, 0.13);
          padding: 8px 16px 8px 46px;
          background: #ffffff;
          font-weight: 400; }

          .myadmin-dd-empty .dd-list .dd3-handle {
            border: 1px solid rgba(120, 130, 140, 0.13);
            border-bottom: 0;
            background: #ffffff;
            height: 36px;
            width: 36px; }

            .dd3-handle:before {
              color: #67757c;
              top: 7px; }

/*******************
ribbons page
******************/
.ribbon-wrapper,
.ribbon-wrapper-reverse,
.ribbon-wrapper-bottom,
.ribbon-wrapper-right-bottom {
  position: relative;
  padding: 50px 15px 15px 15px; }

  .ribbon-vwrapper {
    padding: 15px 15px 15px 50px;
    position: relative; }

    .ribbon-overflow {
      overflow: hidden; }

      .ribbon-vwrapper-reverse {
        padding: 15px 50px 15px 15px; }

        .ribbon-wrapper-bottom {
          padding: 15px 15px 50px 50px; }

          .ribbon-wrapper-right-bottom {
            padding: 15px 50px 50px 15px; }

            .ribbon-content {
              margin-bottom: 0px; }

              .ribbon {
                padding: 0 20px;
                height: 30px;
                line-height: 30px;
                clear: left;
                position: absolute;
                top: 12px;
                left: -2px;
                color: #ffffff; }

                .ribbon-bookmark:before {
                  position: absolute;
                  top: 0;
                  left: 100%;
                  display: block;
                  width: 0;
                  height: 0;
                  content: '';
                  border: 15px solid #263238;
                  border-right: 10px solid transparent; }

                  .ribbon-right {
                    left: auto;
                    right: -2px; }

                    .ribbon-bookmark.ribbon-right:before {
                      right: 100%;
                      left: auto;
                      border-right: 15px solid #263238;
                      border-left: 10px solid transparent; }

                      .ribbon-vertical-l,
                      .ribbon-vertical-r {
                        clear: none;
                        padding: 0 5px;
                        height: 70px;
                        width: 30px;
                        line-height: 70px;
                        text-align: center;
                        left: 12px;
                        top: -2px; }

                        .ribbon-vertical-r {
                          left: auto;
                          right: 12px; }

                          .ribbon-bookmark.ribbon-vertical-l:before,
                          .ribbon-bookmark.ribbon-vertical-r:before {
                            top: 100%;
                            left: 0;
                            margin-top: -14px;
                            border-right: 15px solid #263238;
                            border-bottom: 10px solid transparent; }

                            .ribbon-badge {
                              top: 15px;
                              overflow: hidden;
                              left: -90px;
                              width: 100%;
                              text-align: center;
                              -webkit-transform: rotate(-45deg);
                              -ms-transform: rotate(-45deg);
                              -o-transform: rotate(-45deg);
                              transform: rotate(-45deg); }

                              .ribbon-badge.ribbon-right {
                                left: auto;
                                right: -90px;
                                -webkit-transform: rotate(45deg);
                                -ms-transform: rotate(45deg);
                                -o-transform: rotate(45deg);
                                transform: rotate(45deg); }

                                .ribbon-badge.ribbon-bottom {
                                  top: auto;
                                  bottom: 15px;
                                  -webkit-transform: rotate(45deg);
                                  -ms-transform: rotate(45deg);
                                  -o-transform: rotate(45deg);
                                  transform: rotate(45deg); }

                                  .ribbon-badge.ribbon-right.ribbon-bottom {
                                    -webkit-transform: rotate(-45deg);
                                    -ms-transform: rotate(-45deg);
                                    -o-transform: rotate(-45deg);
                                    transform: rotate(-45deg); }

                                    .ribbon-corner {
                                      top: 0;
                                      left: 0;
                                      background-color: transparent !important;
                                      padding: 6px 0 0 10px; }

                                      .ribbon-corner i {
                                        position: relative; }

                                        .ribbon-corner:before {
                                          position: absolute;
                                          top: 0;
                                          left: 0;
                                          width: 0;
                                          height: 0;
                                          content: '';
                                          border: 30px solid transparent;
                                          border-top-color: #009efb;
                                          border-left-color: #009efb; }

                                          .ribbon-corner.ribbon-right:before {
                                            right: 0;
                                            left: auto;
                                            border-right-color: #526069;
                                            border-left-color: transparent; }

                                            .ribbon-corner.ribbon-right {
                                              right: 0;
                                              left: auto;
                                              padding: 6px 10px 0 0; }

                                              .ribbon-corner.ribbon-bottom:before {
                                                top: auto;
                                                bottom: 0;
                                                border-top-color: transparent;
                                                border-bottom-color: #526069; }

                                                .ribbon-corner.ribbon-bottom {
                                                  bottom: 0;
                                                  top: auto;
                                                  padding: 0 10px 6px 10px; }

                                                  .ribbon-custom {
                                                    background: #009efb; }

                                                    .ribbon-bookmark.ribbon-right.ribbon-custom:before {
                                                      border-right-color: #009efb;
                                                      border-left-color: transparent; }

                                                      .ribbon-bookmark.ribbon-vertical-l.ribbon-custom:before,
                                                      .ribbon-bookmark.ribbon-vertical-r.ribbon-custom:before {
                                                        border-right-color: #009efb;
                                                        border-bottom-color: transparent; }

                                                        .ribbon-primary {
                                                          background: #7460ee; }

                                                          .ribbon-bookmark.ribbon-primary:before {
                                                            border-color: #7460ee;
                                                            border-right-color: transparent; }

                                                            .ribbon-bookmark.ribbon-right.ribbon-primary:before {
                                                              border-right-color: #7460ee;
                                                              border-left-color: transparent; }

                                                              .ribbon-bookmark.ribbon-vertical-l.ribbon-primary:before,
                                                              .ribbon-bookmark.ribbon-vertical-r.ribbon-primary:before {
                                                                border-right-color: #7460ee;
                                                                border-bottom-color: transparent; }

                                                                .ribbon-primary.ribbon-corner:before {
                                                                  border-top-color: #7460ee;
                                                                  border-left-color: #7460ee; }

                                                                  .ribbon-primary.ribbon-corner.ribbon-right:before {
                                                                    border-right-color: #7460ee;
                                                                    border-left-color: transparent; }

                                                                    .ribbon-primary.ribbon-corner.ribbon-bottom:before {
                                                                      border-top-color: transparent;
                                                                      border-bottom-color: #7460ee; }

                                                                      .ribbon-success {
                                                                        background: #26c6da; }

                                                                        .ribbon-bookmark.ribbon-success:before {
                                                                          border-color: #26c6da;
                                                                          border-right-color: transparent; }

                                                                          .ribbon-bookmark.ribbon-right.ribbon-success:before {
                                                                            border-right-color: #26c6da;
                                                                            border-left-color: transparent; }

                                                                            .ribbon-bookmark.ribbon-vertical-l.ribbon-success:before,
                                                                            .ribbon-bookmark.ribbon-vertical-r.ribbon-success:before {
                                                                              border-right-color: #26c6da;
                                                                              border-bottom-color: transparent; }

                                                                              .ribbon-success.ribbon-corner:before {
                                                                                border-top-color: #26c6da;
                                                                                border-left-color: #26c6da; }

                                                                                .ribbon-success.ribbon-corner.ribbon-right:before {
                                                                                  border-right-color: #26c6da;
                                                                                  border-left-color: transparent; }

                                                                                  .ribbon-success.ribbon-corner.ribbon-bottom:before {
                                                                                    border-top-color: transparent;
                                                                                    border-bottom-color: #26c6da; }

                                                                                    .ribbon-info {
                                                                                      background: #1e88e5; }

                                                                                      .ribbon-bookmark.ribbon-info:before {
                                                                                        border-color: #1e88e5;
                                                                                        border-right-color: transparent; }

                                                                                        .ribbon-bookmark.ribbon-right.ribbon-info:before {
                                                                                          border-right-color: #1e88e5;
                                                                                          border-left-color: transparent; }

                                                                                          .ribbon-bookmark.ribbon-vertical-l.ribbon-info:before,
                                                                                          .ribbon-bookmark.ribbon-vertical-r.ribbon-info:before {
                                                                                            border-right-color: #1e88e5;
                                                                                            border-bottom-color: transparent; }

                                                                                            .ribbon-info.ribbon-corner:before {
                                                                                              border-top-color: #1e88e5;
                                                                                              border-left-color: #1e88e5; }

                                                                                              .ribbon-info.ribbon-corner.ribbon-right:before {
                                                                                                border-right-color: #1e88e5;
                                                                                                border-left-color: transparent; }

                                                                                                .ribbon-info.ribbon-corner.ribbon-bottom:before {
                                                                                                  border-top-color: transparent;
                                                                                                  border-bottom-color: #1e88e5; }

                                                                                                  .ribbon-warning {
                                                                                                    background: #ffb22b; }

                                                                                                    .ribbon-bookmark.ribbon-warning:before {
                                                                                                      border-color: #ffb22b;
                                                                                                      border-right-color: transparent; }

                                                                                                      .ribbon-bookmark.ribbon-right.ribbon-warning:before {
                                                                                                        border-right-color: #ffb22b;
                                                                                                        border-left-color: transparent; }

                                                                                                        .ribbon-bookmark.ribbon-vertical-l.ribbon-warning:before,
                                                                                                        .ribbon-bookmark.ribbon-vertical-r.ribbon-warning:before {
                                                                                                          border-right-color: #ffb22b;
                                                                                                          border-bottom-color: transparent; }

                                                                                                          .ribbon-warning.ribbon-corner:before {
                                                                                                            border-top-color: #ffb22b;
                                                                                                            border-left-color: #ffb22b; }

                                                                                                            .ribbon-warning.ribbon-corner.ribbon-right:before {
                                                                                                              border-right-color: #ffb22b;
                                                                                                              border-left-color: transparent; }

                                                                                                              .ribbon-warning.ribbon-corner.ribbon-bottom:before {
                                                                                                                border-top-color: transparent;
                                                                                                                border-bottom-color: #ffb22b; }

                                                                                                                .ribbon-danger {
                                                                                                                  background: #fc4b6c; }

                                                                                                                  .ribbon-bookmark.ribbon-danger:before {
                                                                                                                    border-color: #fc4b6c;
                                                                                                                    border-right-color: transparent; }

                                                                                                                    .ribbon-bookmark.ribbon-right.ribbon-danger:before {
                                                                                                                      border-right-color: #fc4b6c;
                                                                                                                      border-left-color: transparent; }

                                                                                                                      .ribbon-bookmark.ribbon-vertical-l.ribbon-danger:before,
                                                                                                                      .ribbon-bookmark.ribbon-vertical-r.ribbon-danger:before {
                                                                                                                        border-right-color: #fc4b6c;
                                                                                                                        border-bottom-color: transparent; }

                                                                                                                        .ribbon-danger.ribbon-corner:before {
                                                                                                                          border-top-color: #fc4b6c;
                                                                                                                          border-left-color: #fc4b6c; }

                                                                                                                          .ribbon-danger.ribbon-corner.ribbon-right:before {
                                                                                                                            border-right-color: #fc4b6c;
                                                                                                                            border-left-color: transparent; }

                                                                                                                            .ribbon-danger.ribbon-corner.ribbon-bottom:before {
                                                                                                                              border-top-color: transparent;
                                                                                                                              border-bottom-color: #fc4b6c; }

                                                                                                                              .ribbon-default {
                                                                                                                                background: #263238; }

                                                                                                                                .ribbon-bookmark.ribbon-default:before {
                                                                                                                                  border-color: #263238;
                                                                                                                                  border-right-color: transparent; }

                                                                                                                                  .ribbon-bookmark.ribbon-right.ribbon-default:before {
                                                                                                                                    border-right-color: #263238;
                                                                                                                                    border-left-color: transparent; }

                                                                                                                                    .ribbon-bookmark.ribbon-vertical-l.ribbon-default:before,
                                                                                                                                    .ribbon-bookmark.ribbon-vertical-r.ribbon-default:before {
                                                                                                                                      border-right-color: #263238;
                                                                                                                                      border-bottom-color: transparent; }

                                                                                                                                      .ribbon-default.ribbon-corner:before {
                                                                                                                                        border-top-color: #263238;
                                                                                                                                        border-left-color: #263238; }

                                                                                                                                        .ribbon-default.ribbon-corner.ribbon-right:before {
                                                                                                                                          border-right-color: #263238;
                                                                                                                                          border-left-color: transparent; }

                                                                                                                                          .ribbon-default.ribbon-corner.ribbon-bottom:before {
                                                                                                                                            border-top-color: transparent;
                                                                                                                                            border-bottom-color: #263238; }

/*******************
session ideal timeout page
******************/
#idletimeout {
  background: #009efb;
  border: 3px solid #009efb;
  color: #fff;
  font-family: arial, sans-serif;
  text-align: center;
  font-size: 12px;
  padding: 10px;
  position: relative;
  top: 0px;
  left: 0;
  right: 0;
  z-index: 100000;
  display: none; }

  #idletimeout a {
    color: #ffffff;
    font-weight: bold; }

    #idletimeout span {
      font-weight: bold; }

/*******************
Stylish tooltip
******************/
.mytooltip:hover .tooltip-content2, .mytooltip:hover .tooltip-content2 i {
  opacity: 1;
  font-size: 18px;
  pointer-events: auto;
  -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
  transform: translate3d(0, 0, 0) scale3d(1, 1, 1); }

  .mytooltip:hover .tooltip-content4, .mytooltip:hover .tooltip-text2 {
    pointer-events: auto;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0); }

    .mytooltip {
      display: inline;
      position: relative;
      z-index: 9999; }
      .mytooltip:hover .tooltip-item::after {
        pointer-events: auto; }
        .mytooltip:hover .tooltip-content {
          pointer-events: auto;
          opacity: 1;
          -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0);
          transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0); }
          .mytooltip:hover .tooltip-content3 {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1); }
            .mytooltip:hover .tooltip-item2 {
              color: #ffffff;
              -webkit-transform: translate3d(0, -0.5em, 0);
              transform: translate3d(0, -0.5em, 0); }
              .mytooltip:hover .tooltip-content5 {
                opacity: 1;
                pointer-events: auto;
                -webkit-transition-delay: 0s;
                -o-transition-delay: 0s;
                transition-delay: 0s; }
                .mytooltip:hover .tooltip-text3 {
                  -webkit-transition-delay: 0s;
                  -o-transition-delay: 0s;
                  transition-delay: 0s;
                  -webkit-transform: scale3d(1, 1, 1);
                  transform: scale3d(1, 1, 1); }
                  .mytooltip:hover .tooltip-inner2 {
                    -webkit-transition-delay: 0.3s;
                    -o-transition-delay: 0.3s;
                    transition-delay: 0.3s;
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0); }

                    .tooltip-item {
                      background: rgba(0, 0, 0, 0.1);
                      cursor: pointer;
                      display: inline-block;
                      font-weight: 500;
                      padding: 0 10px; }

                      .tooltip-item::after {
                        content: '';
                        position: absolute;
                        width: 360px;
                        height: 20px;
                        bottom: 100%;
                        left: 50%;
                        pointer-events: none;
                        -webkit-transform: translateX(-50%);
                        -ms-transform: translateX(-50%);
                        transform: translateX(-50%); }

                        .tooltip-content {
                          position: absolute;
                          z-index: 9999;
                          width: 360px;
                          left: 50%;
                          margin: 0 0 20px -180px;
                          bottom: 100%;
                          text-align: left;
                          font-size: 14px;
                          line-height: 30px;
                          -webkit-box-shadow: -5px -5px 15px rgba(48, 54, 61, 0.2);
                          box-shadow: -5px -5px 15px rgba(48, 54, 61, 0.2);
                          background: #2b2b2b;
                          opacity: 0;
                          cursor: default;
                          pointer-events: none; }
                          .tooltip-content img {
                            position: relative;
                            height: 140px;
                            display: block;
                            float: left;
                            margin-right: 1em; }

                            .tooltip-effect-5 .tooltip-content {
                              width: 180px;
                              margin-left: -90px;
                              -webkit-transform-origin: 50% calc(106%);
                              -ms-transform-origin: 50% calc(106%);
                              transform-origin: 50% calc(106%);
                              -webkit-transform: rotate3d(0, 0, 1, 15deg);
                              transform: rotate3d(0, 0, 1, 15deg);
                              -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
                              transition: opacity 0.2s, -webkit-transform 0.2s;
                              -o-transition: opacity 0.2s, transform 0.2s;
                              transition: opacity 0.2s, transform 0.2s;
                              transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s;
                              -webkit-transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39);
                              -o-transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39);
                              transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39); }

                              .tooltip-effect-5 .tooltip-text {
                                padding: 1.4em; }

                                .tooltip-content::after {
                                  content: '';
                                  top: 100%;
                                  left: 50%;
                                  border: solid transparent;
                                  height: 0;
                                  width: 0;
                                  position: absolute;
                                  pointer-events: none;
                                  border-color: transparent;
                                  border-top-color: #2a3035;
                                  border-width: 10px;
                                  margin-left: -10px; }

                                  .tooltip-text {
                                    font-size: 14px;
                                    line-height: 24px;
                                    display: block;
                                    padding: 1.31em 1.21em 1.21em 0;
                                    color: #ffffff; }

                                    .tooltip-content2 {
                                      position: absolute;
                                      z-index: 9999;
                                      width: 80px;
                                      height: 80px;
                                      padding-top: 25px;
                                      left: 50%;
                                      margin-left: -40px;
                                      bottom: 100%;
                                      border-radius: 50%;
                                      text-align: center;
                                      background: #009efb;
                                      color: #ffffff;
                                      opacity: 0;
                                      margin-bottom: 20px;
                                      cursor: default;
                                      pointer-events: none; }
                                      .tooltip-content2 i {
                                        opacity: 0; }

                                        .tooltip-effect-6 .tooltip-content2 {
                                          -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
                                          transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
                                          -webkit-transform-origin: 50% 100%;
                                          -ms-transform-origin: 50% 100%;
                                          transform-origin: 50% 100%;
                                          -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                          transition: opacity 0.3s, -webkit-transform 0.3s;
                                          -o-transition: opacity 0.3s, transform 0.3s;
                                          transition: opacity 0.3s, transform 0.3s;
                                          transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }
                                          .tooltip-effect-6 .tooltip-content2 i {
                                            -webkit-transform: scale3d(0, 0, 1);
                                            transform: scale3d(0, 0, 1);
                                            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                            transition: opacity 0.3s, -webkit-transform 0.3s;
                                            -o-transition: opacity 0.3s, transform 0.3s;
                                            transition: opacity 0.3s, transform 0.3s;
                                            transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                            .tooltip-effect-6:hover .tooltip-content2 i {
                                              -webkit-transform: rotate3d(1, 1, 1, 0);
                                              transform: rotate3d(1, 1, 1, 0); }

                                              .tooltip-content2::after {
                                                content: '';
                                                position: absolute;
                                                top: 100%;
                                                left: 50%;
                                                margin: -7px 0 0 -15px;
                                                width: 30px;
                                                height: 20px;
                                                background: url(../../assets/images/tooltip/tooltip1.svg) no-repeat center center;
                                                background-size: 100%; }

                                                .tooltip-content3 {
                                                  position: absolute;
                                                  background: url(../../assets/images/tooltip/shape1.svg) no-repeat center bottom;
                                                  background-size: 100% 100%;
                                                  z-index: 9999;
                                                  width: 200px;
                                                  bottom: 100%;
                                                  left: 50%;
                                                  margin-left: -100px;
                                                  padding: 50px 30px;
                                                  text-align: center;
                                                  color: #ffffff;
                                                  opacity: 0;
                                                  cursor: default;
                                                  font-size: 14;
                                                  line-height: 27px;
                                                  pointer-events: none;
                                                  -webkit-transform: scale3d(0.1, 0.2, 1);
                                                  transform: scale3d(0.1, 0.2, 1);
                                                  -webkit-transform-origin: 50% 120%;
                                                  -ms-transform-origin: 50% 120%;
                                                  transform-origin: 50% 120%;
                                                  -webkit-transition: opacity 0.4s, -webkit-transform 0.4s;
                                                  transition: opacity 0.4s, -webkit-transform 0.4s;
                                                  -o-transition: opacity 0.4s, transform 0.4s;
                                                  transition: opacity 0.4s, transform 0.4s;
                                                  transition: opacity 0.4s, transform 0.4s, -webkit-transform 0.4s;
                                                  -webkit-transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1);
                                                  -o-transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1);
                                                  transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1); }

                                                  .tooltip-content3::after {
                                                    content: '';
                                                    position: absolute;
                                                    width: 16px;
                                                    height: 16px;
                                                    left: 50%;
                                                    margin-left: -8px;
                                                    top: 100%;
                                                    background: #00aeef;
                                                    -webkit-transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg);
                                                    transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg); }

                                                    .tooltip-item2 {
                                                      color: #00aeef;
                                                      cursor: pointer;
                                                      z-index: 100;
                                                      position: relative;
                                                      display: inline-block;
                                                      font-weight: 500;
                                                      -webkit-transition: background-color 0.3s, color 0.3s, -webkit-transform 0.3s;
                                                      transition: background-color 0.3s, color 0.3s, -webkit-transform 0.3s;
                                                      -o-transition: background-color 0.3s, color 0.3s, transform 0.3s;
                                                      transition: background-color 0.3s, color 0.3s, transform 0.3s;
                                                      transition: background-color 0.3s, color 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                                      .tooltip-content4 {
                                                        position: absolute;
                                                        z-index: 99;
                                                        width: 360px;
                                                        left: 50%;
                                                        margin-left: -180px;
                                                        bottom: -5px;
                                                        text-align: left;
                                                        background: #00aeef;
                                                        opacity: 0;
                                                        font-size: 14px;
                                                        line-height: 27px;
                                                        padding: 1.5em;
                                                        color: #ffffff;
                                                        border-bottom: 55px solid #2b2b2b;
                                                        cursor: default;
                                                        pointer-events: none;
                                                        border-radius: 5px;
                                                        -webkit-transform: translate3d(0, -0.5em, 0);
                                                        transform: translate3d(0, -0.5em, 0);
                                                        -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                        transition: opacity 0.3s, -webkit-transform 0.3s;
                                                        -o-transition: opacity 0.3s, transform 0.3s;
                                                        transition: opacity 0.3s, transform 0.3s;
                                                        transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }
                                                        .tooltip-content4 a {
                                                          color: #2b2b2b; }

                                                          .tooltip-text2 {
                                                            opacity: 0;
                                                            -webkit-transform: translate3d(0, 1.5em, 0);
                                                            transform: translate3d(0, 1.5em, 0);
                                                            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                            transition: opacity 0.3s, -webkit-transform 0.3s;
                                                            -o-transition: opacity 0.3s, transform 0.3s;
                                                            transition: opacity 0.3s, transform 0.3s;
                                                            transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                                            .tooltip-content5 {
                                                              position: absolute;
                                                              z-index: 9999;
                                                              width: 300px;
                                                              left: 50%;
                                                              bottom: 100%;
                                                              font-size: 20px;
                                                              line-height: 1.4;
                                                              text-align: center;
                                                              font-weight: 400;
                                                              color: #ffffff;
                                                              background: transparent;
                                                              opacity: 0;
                                                              margin: 0 0 20px -150px;
                                                              cursor: default;
                                                              pointer-events: none;
                                                              -webkit-transition: opacity 0.3s 0.3s;
                                                              -o-transition: opacity 0.3s 0.3s;
                                                              transition: opacity 0.3s 0.3s; }
                                                              .tooltip-content5 span {
                                                                display: block; }

                                                                .tooltip-text3 {
                                                                  border-bottom: 10px solid #009efb;
                                                                  overflow: hidden;
                                                                  -webkit-transform: scale3d(0, 1, 1);
                                                                  transform: scale3d(0, 1, 1);
                                                                  -webkit-transition: -webkit-transform 0.3s 0.3s;
                                                                  transition: -webkit-transform 0.3s 0.3s;
                                                                  -o-transition: transform 0.3s 0.3s;
                                                                  transition: transform 0.3s 0.3s;
                                                                  transition: transform 0.3s 0.3s, -webkit-transform 0.3s 0.3s; }

                                                                  .tooltip-inner2 {
                                                                    background: #2b2b2b;
                                                                    padding: 40px;
                                                                    -webkit-transform: translate3d(0, 100%, 0);
                                                                    transform: translate3d(0, 100%, 0);
                                                                    -webkit-transition: -webkit-transform 0.3s;
                                                                    transition: -webkit-transform 0.3s;
                                                                    -o-transition: transform 0.3s;
                                                                    transition: transform 0.3s;
                                                                    transition: transform 0.3s, -webkit-transform 0.3s; }

                                                                    .tooltip-content5::after {
                                                                      content: '';
                                                                      bottom: -20px;
                                                                      left: 50%;
                                                                      border: solid transparent;
                                                                      height: 0;
                                                                      width: 0;
                                                                      position: absolute;
                                                                      pointer-events: none;
                                                                      border-color: transparent;
                                                                      border-top-color: #009efb;
                                                                      border-width: 10px;
                                                                      margin-left: -10px; }

                                                                      .tooltip-effect-1 .tooltip-content {
                                                                        -webkit-transform: translate3d(0, -10px, 0);
                                                                        transform: translate3d(0, -10px, 0);
                                                                        -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                        transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                        -o-transition: opacity 0.3s, transform 0.3s;
                                                                        transition: opacity 0.3s, transform 0.3s;
                                                                        transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
                                                                        color: #ffffff; }

                                                                        .tooltip-effect-2 .tooltip-content {
                                                                          -webkit-transform-origin: 50% calc(110%);
                                                                          -ms-transform-origin: 50% calc(110%);
                                                                          transform-origin: 50% calc(110%);
                                                                          -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
                                                                          transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
                                                                          -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
                                                                          transition: opacity 0.2s, -webkit-transform 0.2s;
                                                                          -o-transition: opacity 0.2s, transform 0.2s;
                                                                          transition: opacity 0.2s, transform 0.2s;
                                                                          transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s; }

                                                                          .tooltip-effect-3 .tooltip-content {
                                                                            -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
                                                                            transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
                                                                            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                            transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                            -o-transition: opacity 0.3s, transform 0.3s;
                                                                            transition: opacity 0.3s, transform 0.3s;
                                                                            transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                                                            .tooltip-effect-4 .tooltip-content {
                                                                              -webkit-transform-origin: 50% 100%;
                                                                              -ms-transform-origin: 50% 100%;
                                                                              transform-origin: 50% 100%;
                                                                              -webkit-transform: scale3d(0.7, 0.3, 1);
                                                                              transform: scale3d(0.7, 0.3, 1);
                                                                              -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
                                                                              transition: opacity 0.2s, -webkit-transform 0.2s;
                                                                              -o-transition: opacity 0.2s, transform 0.2s;
                                                                              transition: opacity 0.2s, transform 0.2s;
                                                                              transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s; }

                                                                              .tooltip.tooltip-effect-2:hover .tooltip-content {
                                                                                -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 0deg);
                                                                                transform: perspective(1000px) rotate3d(1, 0, 0, 0deg); }

                                                                                a.mytooltip {
                                                                                  font-weight: 500;
                                                                                  color: #009efb; }

                                                                                  .tooltip-effect-7 .tooltip-content2 {
                                                                                    -webkit-transform: translate3d(0, 10px, 0);
                                                                                    transform: translate3d(0, 10px, 0);
                                                                                    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                    transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                    -o-transition: opacity 0.3s, transform 0.3s;
                                                                                    transition: opacity 0.3s, transform 0.3s;
                                                                                    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }
                                                                                    .tooltip-effect-7 .tooltip-content2 i {
                                                                                      -webkit-transform: translate3d(0, 15px, 0);
                                                                                      transform: translate3d(0, 15px, 0);
                                                                                      -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                      transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                      -o-transition: opacity 0.3s, transform 0.3s;
                                                                                      transition: opacity 0.3s, transform 0.3s;
                                                                                      transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                                                                      .tooltip-effect-8 .tooltip-content2 {
                                                                                        -webkit-transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
                                                                                        transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
                                                                                        -webkit-transform-origin: 50% 100%;
                                                                                        -ms-transform-origin: 50% 100%;
                                                                                        transform-origin: 50% 100%;
                                                                                        -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                        transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                        -o-transition: opacity 0.3s, transform 0.3s;
                                                                                        transition: opacity 0.3s, transform 0.3s;
                                                                                        transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }
                                                                                        .tooltip-effect-8 .tooltip-content2 i {
                                                                                          -webkit-transform: scale3d(0, 0, 1);
                                                                                          transform: scale3d(0, 0, 1);
                                                                                          -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                          transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                          -o-transition: opacity 0.3s, transform 0.3s;
                                                                                          transition: opacity 0.3s, transform 0.3s;
                                                                                          transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

                                                                                          .tooltip-effect-9 .tooltip-content2 {
                                                                                            -webkit-transform: translate3d(0, -20px, 0);
                                                                                            transform: translate3d(0, -20px, 0);
                                                                                            -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                            transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                            -o-transition: opacity 0.3s, transform 0.3s;
                                                                                            transition: opacity 0.3s, transform 0.3s;
                                                                                            transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }
                                                                                            .tooltip-effect-9 .tooltip-content2 i {
                                                                                              -webkit-transform: translate3d(0, 20px, 0);
                                                                                              transform: translate3d(0, 20px, 0);
                                                                                              -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                              transition: opacity 0.3s, -webkit-transform 0.3s;
                                                                                              -o-transition: opacity 0.3s, transform 0.3s;
                                                                                              transition: opacity 0.3s, transform 0.3s;
                                                                                              transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s; }

/*******************
Error Page
******************/
.error-box {
  height: 100%;
  position: fixed;
  background: url(../../assets/images/background/error-bg.jpg) no-repeat center center #fff;
  width: 100%; }
  .error-box .footer {
    width: 100%;
    left: 0px;
    right: 0px; }

    .error-body {
      padding-top: 5%; }
      .error-body h1 {
        font-size: 210px;
        font-weight: 900;
        line-height: 210px; }

/*******************
google map Page
******************/
.gmaps, .gmaps-panaroma {
  height: 300px; }

  .gmaps, .gmaps-panaroma {
    height: 300px;
    background: #f2f4f8;
    border-radius: 3px; }

    .gmaps-overlay {
      display: block;
      text-align: center;
      color: #ffffff;
      font-size: 16px;
      line-height: 40px;
      background: #7460ee;
      border-radius: 4px;
      padding: 10px 20px; }

      .gmaps-overlay_arrow {
        left: 50%;
        margin-left: -16px;
        width: 0;
        height: 0;
        position: absolute; }

        .gmaps-overlay_arrow.above {
          bottom: -15px;
          border-left: 16px solid transparent;
          border-right: 16px solid transparent;
          border-top: 16px solid #7460ee; }

          .gmaps-overlay_arrow.below {
            top: -15px;
            border-left: 16px solid transparent;
            border-right: 16px solid transparent;
            border-bottom: 16px solid #7460ee; }

/*******************
vector map Page
******************/
.jvectormap-zoomin, .jvectormap-zoomout {
  width: 10px;
  height: 10px;
  line-height: 10px; }

  .jvectormap-zoomout {
    top: 40px; }

/*******************
Seach listing Page
******************/
.search-listing {
  padding: 0px;
  margin: 0px; }
  .search-listing li {
    list-style: none;
    padding: 15px 0;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13); }
    .search-listing li h3 {
      margin: 0px;
      font-size: 18px; }
      .search-listing li h3 a {
        color: #1e88e5; }
        .search-listing li h3 a:hover {
          text-decoration: underline; }
          .search-listing li a {
            color: #26c6da; }

/*******************
Login register and recover password Page
******************/
.login-register {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: 100%;
  width: 100%;
  padding: 10% 0;
  position: fixed; }

  .login-box {
    width: 400px;
    margin: 0 auto; }
    .login-box .footer {
      width: 100%;
      left: 0px;
      right: 0px; }
      .login-box .social {
        display: block;
        margin-bottom: 30px; }

        #recoverform {
          display: none; }

          .login-sidebar {
            padding: 0px;
            margin-top: 0px; }
            .login-sidebar .login-box {
              right: 0px;
              position: absolute;
              height: 100%; }

/*******************
FAQs Page
******************/
.minimal-faq .card {
  border: 0px; }
  .minimal-faq .card .card-header {
    background: #ffffff;
    padding: 20px 0;
    margin-top: 10px; }
    .minimal-faq .card .card-block {
      padding: 15px 0px; }

/*******************
Pricing Page
******************/
.pricing-box {
  position: relative;
  text-align: center;
  margin-top: 30px; }

  .featured-plan {
    margin-top: 0px; }
    .featured-plan .pricing-body {
      padding: 60px 0;
      background: #ebf3f5;
      border: 1px solid #ddd; }
      .featured-plan .price-table-content .price-row {
        border-top: 1px solid rgba(120, 130, 140, 0.13); }

        .pricing-body {
          border-radius: 0px;
          border-top: 1px solid rgba(120, 130, 140, 0.13);
          border-bottom: 5px solid rgba(120, 130, 140, 0.13);
          vertical-align: middle;
          padding: 30px 0;
          position: relative; }

          .pricing-body h2 {
            position: relative;
            font-size: 56px;
            margin: 20px 0 10px;
            font-weight: 500; }
            .pricing-body h2 span {
              position: absolute;
              font-size: 15px;
              top: -10px;
              margin-left: -10px; }

              .price-table-content .price-row {
                padding: 20px 0;
                border-top: 1px solid rgba(120, 130, 140, 0.13); }

                .pricing-plan {
                  padding: 0 15px; }
                  .pricing-plan .no-padding {
                    padding: 0px; }

                    .price-lable {
                      position: absolute;
                      top: -10px;
                      padding: 5px 10px;
                      margin: 0 auto;
                      display: inline-block;
                      width: 100px;
                      left: 0px;
                      right: 0px; }

/*******************
chat application Page
******************/
.chat-main-box {
  position: relative;
  overflow: hidden; }
  .chat-main-box .chat-left-aside {
    position: relative;
    width: 250px;
    float: left;
    z-index: 9;
    top: 0px;
    border-right: 1px solid rgba(120, 130, 140, 0.13); }
    .chat-main-box .chat-left-aside .open-panel {
      display: none;
      cursor: pointer;
      position: absolute;
      left: -webkit-calc(100% - 1px);
      top: 50%;
      z-index: 100;
      background-color: #fff;
      -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.2);
      box-shadow: 1px 0 3px rgba(0, 0, 0, 0.2);
      border-radius: 0 100px 100px 0;
      line-height: 1;
      padding: 15px 8px 15px 4px; }
      .chat-main-box .chat-left-aside .chat-left-inner {
        position: relative; }
        .chat-main-box .chat-left-aside .chat-left-inner .form-control {
          height: 60px;
          padding: 15px;
          background-image: -webkit-gradient(linear, left top, left bottom, from(#1e88e5), to(#1e88e5)), -webkit-gradient(linear, left top, left bottom, from(rgba(120, 130, 140, 0.13)), to(rgba(120, 130, 140, 0.13)));
          background-image: -webkit-linear-gradient(#1e88e5, #1e88e5), -webkit-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
          background-image: -o-linear-gradient(#1e88e5, #1e88e5), -o-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
          background-image: linear-gradient(#1e88e5, #1e88e5), linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13)); }
          .chat-main-box .chat-left-aside .chat-left-inner .style-none {
            padding: 0px; }
            .chat-main-box .chat-left-aside .chat-left-inner .style-none li {
              list-style: none;
              overflow: hidden; }
              .chat-main-box .chat-left-aside .chat-left-inner .style-none li a {
                padding: 20px; }
                .chat-main-box .chat-left-aside .chat-left-inner .style-none li a:hover, .chat-main-box .chat-left-aside .chat-left-inner .style-none li a.active {
                  background: #ebf3f5; }
                  .chat-main-box .chat-right-aside {
                    width: calc(100% - 250px);
                    float: left; }
                    .chat-main-box .chat-right-aside .chat-list {
                      max-height: none;
                      height: 100%;
                      padding-top: 40px; }
                      .chat-main-box .chat-right-aside .chat-list .chat-text {
                        border-radius: 6px; }
                        .chat-main-box .chat-right-aside .send-chat-box {
                          position: relative; }
                          .chat-main-box .chat-right-aside .send-chat-box .form-control {
                            border: none;
                            border-top: 1px solid rgba(120, 130, 140, 0.13);
                            resize: none;
                            height: 80px;
                            padding-right: 180px; }
                            .chat-main-box .chat-right-aside .send-chat-box .form-control:focus {
                              border-color: rgba(120, 130, 140, 0.13); }
                              .chat-main-box .chat-right-aside .send-chat-box .custom-send {
                                position: absolute;
                                right: 20px;
                                bottom: 10px; }
                                .chat-main-box .chat-right-aside .send-chat-box .custom-send .cst-icon {
                                  color: #67757c;
                                  margin-right: 10px; }

/*******************
Email inbox Page
******************/
.inbox-panel .list-group .list-group-item {
  border: 0px;
  border-radius: 0px;
  border-left: 3px solid transparent; }
  .inbox-panel .list-group .list-group-item a {
    color: #67757c; }
    .inbox-panel .list-group .list-group-item.active, .inbox-panel .list-group .list-group-item:hover {
      background: #f2f4f8;
      border-left: 3px solid #009efb; }

      .inbox-center .unread td {
        font-weight: 400; }

        .inbox-center td {
          vertical-align: middle;
          white-space: nowrap; }

          .inbox-center a {
            color: #67757c;
            padding: 2px 0 3px 0;
            overflow: hidden;
            vertical-align: middle;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-block; }

            .inbox-center .checkbox {
              margin-top: -13px;
              height: 20px; }

/*******************
Contact app Page
******************/
/*left-aside-column*/
.contact-page-aside {
  position: relative; }

  .left-aside {
    position: absolute;
    border-right: 1px solid rgba(120, 130, 140, 0.13);
    padding: 20px;
    width: 250px;
    height: 100%; }

    .right-aside {
      padding: 20px;
      margin-left: 250px; }

      .contact-list td {
        vertical-align: middle;
        padding: 25px 10px; }
        .contact-list td img {
          width: 30px; }

          .list-style-none {
            margin: 0px;
            padding: 0px; }
            .list-style-none li {
              list-style: none;
              margin: 0px; }
              .list-style-none li.box-label a {
                font-weight: 500; }
                .list-style-none li.divider {
                  margin: 10px 0;
                  height: 1px;
                  background: rgba(120, 130, 140, 0.13); }
                  .list-style-none li a {
                    padding: 15px 10px;
                    display: block;
                    color: #67757c; }
                    .list-style-none li a:hover {
                      color: #009efb; }
                      .list-style-none li a span {
                        float: right; }

                        .slimScrollBar {
                          z-index: 10 !important; }

                          .carousel-item-next, .carousel-item-prev, .carousel-item.active {
                            display: block; }

                            /*Documentation page*/
                            .plugin-details {
                              display: none; }

                              .plugin-details-active {
                                display: block; }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*******************
Main sidebar
******************/
.left-sidebar {
  position: absolute;
  width: 240px;
  height: 100%;
  top: 0px;
  z-index: 20;
  padding-top: 70px;
  background: #fff;
  -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
  box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08); }

  .fix-sidebar .left-sidebar {
    position: fixed; }

/*******************
use profile section
******************/
.user-profile {
  position: relative;
  background-size: cover; }
  .user-profile .profile-img {
    width: 50px;
    margin-left: 30px;
    padding: 35px 0;
    border-radius: 100%; }
    .user-profile .profile-img::before {
      -webkit-animation: 2.5s blow 0s linear infinite;
      animation: 2.5s blow 0s linear infinite;
      position: absolute;
      content: '';
      width: 50px;
      height: 50px;
      top: 35px;
      margin: 0 auto;
      border-radius: 50%;
      z-index: 0; }

      @-webkit-keyframes blow {
        0% {
          -webkit-box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
          opacity: 1;
          -webkit-transform: scale3d(1, 1, 0.5);
          transform: scale3d(1, 1, 0.5); }
          50% {
            -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 0.5);
            transform: scale3d(1, 1, 0.5); }
            100% {
              -webkit-box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.1);
              box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.1);
              opacity: 0;
              -webkit-transform: scale3d(1, 1, 0.5);
              transform: scale3d(1, 1, 0.5); } }

              @keyframes blow {
                0% {
                  -webkit-box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
                  box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
                  opacity: 1;
                  -webkit-transform: scale3d(1, 1, 0.5);
                  transform: scale3d(1, 1, 0.5); }
                  50% {
                    -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
                    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
                    opacity: 1;
                    -webkit-transform: scale3d(1, 1, 0.5);
                    transform: scale3d(1, 1, 0.5); }
                    100% {
                      -webkit-box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.1);
                      box-shadow: 0 0 0 20px rgba(0, 0, 0, 0.1);
                      opacity: 0;
                      -webkit-transform: scale3d(1, 1, 0.5);
                      transform: scale3d(1, 1, 0.5); } }
                      .user-profile .profile-img img {
                        width: 100%;
                        border-radius: 100%; }
                        .user-profile .profile-text {
                          padding: 5px 0px;
                          position: relative; }
                          .user-profile .profile-text > a {
                            color: #ffffff !important;
                            width: 100%;
                            padding: 6px 30px;
                            background: rgba(0, 0, 0, 0.5);
                            display: block; }
                            .user-profile .profile-text > a:after {
                              position: absolute;
                              right: 20px;
                              top: 20px; }
                              .user-profile .dropdown-menu {
                                left: 0px;
                                right: 0px;
                                width: 180px;
                                margin: 0 auto; }

/*******************
sidebar footer
******************/
.sidebar-footer {
  position: fixed;
  z-index: 10;
  bottom: 0px;
  left: 0px;
  -webkit-transition: 0.2s ease-out;
  -o-transition: 0.2s ease-out;
  transition: 0.2s ease-out;
  width: 240px;
  background: #fff;
  border-top: 1px solid rgba(120, 130, 140, 0.13); }
  .sidebar-footer a {
    padding: 15px;
    width: 33.333337%;
    float: left;
    text-align: center;
    font-size: 18px; }

/*******************
sidebar navigation
******************/
.scroll-sidebar {
  padding-bottom: 60px; }

  .collapse.in {
    display: block; }

    .sidebar-nav {
      background: #fff;
      padding: 15px; }
      .sidebar-nav ul {
        margin: 0px;
        padding: 0px; }
        .sidebar-nav ul li {
          list-style: none; }
          .sidebar-nav ul li a {
            color: #607d8b;
            padding: 8px 35px 8px 15px;
            display: block;
            font-size: 15px;
            border-radius: 4px;
            white-space: nowrap; }
            .sidebar-nav ul li a.active, .sidebar-nav ul li a:hover {
              color: #26c6da; }
              .sidebar-nav ul li a.active {
                font-weight: 500;
                color: #263238; }
                .sidebar-nav ul li ul {
                  padding-left: 5px;
                  padding-top: 10px; }
                  .sidebar-nav ul li ul li a {
                    padding: 10px 35px 10px 15px; }
                    .sidebar-nav ul li ul ul {
                      padding-left: 15px; }
                      .sidebar-nav ul li.nav-small-cap {
                        font-size: 12px;
                        margin-bottom: 0px;
                        padding: 14px 14px 14px 20px;
                        color: #263238;
                        font-weight: 500; }
                        .sidebar-nav ul li.nav-devider {
                          height: 1px;
                          background: rgba(120, 130, 140, 0.13);
                          display: block;
                          margin: 20px 0; }
                          .sidebar-nav > ul > li {
                            margin-bottom: 10px; }
                            .sidebar-nav > ul > li.active > a {
                              color: #ffffff;
                              font-weight: 500;
                              -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                              box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); }
                              .sidebar-nav > ul > li.active > a i {
                                color: #26c6da; }
                                .sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li > a:hover i {
                                  color: #26c6da; }
                                  .sidebar-nav > ul > li > a i {
                                    width: 27px;
                                    height: 27px;
                                    font-size: 21px;
                                    line-height: 27px;
                                    display: inline-block;
                                    vertical-align: middle;
                                    color: #99abb4; }
                                    .sidebar-nav > ul > li > a .label {
                                      float: right;
                                      margin-top: 6px; }
                                      .sidebar-nav > ul > li > a.active {
                                        font-weight: 400;
                                        background: #ffffff;
                                        color: #26c6da; }

                                        .sidebar-nav .has-arrow {
                                          position: relative; }
                                          .sidebar-nav .has-arrow::after {
                                            position: absolute;
                                            content: '';
                                            width: .55em;
                                            height: .55em;
                                            border-width: 1px 0 0 1px;
                                            border-style: solid;
                                            border-color: #607d8b;
                                            right: 1em;
                                            -webkit-transform: rotate(-45deg) translate(0, -50%);
                                            -ms-transform: rotate(-45deg) translate(0, -50%);
                                            -o-transform: rotate(-45deg) translate(0, -50%);
                                            transform: rotate(-45deg) translate(0, -50%);
                                            -webkit-transform-origin: top;
                                            -ms-transform-origin: top;
                                            -o-transform-origin: top;
                                            transform-origin: top;
                                            top: 47%;
                                            -webkit-transition: all .3s ease-out;
                                            -o-transition: all .3s ease-out;
                                            transition: all .3s ease-out; }

                                            .sidebar-nav .active > .has-arrow::after,
                                            .sidebar-nav li > .has-arrow.active::after,
                                            .sidebar-nav .has-arrow[aria-expanded="true"]::after {
                                              -webkit-transform: rotate(-135deg) translate(0, -50%);
                                              -ms-transform: rotate(-135deg) translate(0, -50%);
                                              -o-transform: rotate(-135deg) translate(0, -50%);
                                              top: 45%;
                                              width: .58em;
                                              transform: rotate(-135deg) translate(0, -50%); }

/****************
When click on sidebar toggler and also for tablet
*****************/
@media (min-width: 768px) {
  .mini-sidebar .sidebar-nav #sidebarnav li {
    position: relative; }
    .mini-sidebar .sidebar-nav #sidebarnav > li > ul {
      position: absolute;
      left: 60px;
      top: 45px;
      width: 200px;
      z-index: 1001;
      background: #f2f6f8;
      display: none;
      padding-left: 1px; }
      .mini-sidebar .sidebar-nav {
        padding: 5px; }
        .mini-sidebar.fix-sidebar .left-sidebar {
          position: absolute; }
          .mini-sidebar .sidebar-nav #sidebarnav > li:hover > ul {
            height: auto !important;
            overflow: auto; }
            .mini-sidebar .sidebar-nav #sidebarnav > li:hover > ul,
            .mini-sidebar .sidebar-nav #sidebarnav > li:hover > ul.collapse {
              display: block; }
              .mini-sidebar .sidebar-nav #sidebarnav > li > a.has-arrow:after {
                display: none; }
                .mini-sidebar .left-sidebar {
                  width: 60px; }
                  .mini-sidebar .user-profile {
                    padding-bottom: 15px;
                    width: 60px;
                    margin-bottom: 7px; }
                    .mini-sidebar .user-profile .profile-img {
                      padding: 15px 0 0 0;
                      margin: 0px 0 0 6px; }
                      .mini-sidebar .user-profile .profile-img:before {
                        top: 15px; }
                        .mini-sidebar .scroll-sidebar {
                          padding-bottom: 0px;
                          position: absolute; }
                          .mini-sidebar .hide-menu,
                          .mini-sidebar .nav-small-cap,
                          .mini-sidebar .sidebar-footer,
                          .mini-sidebar .user-profile .profile-text {
                            display: none; }
                            .mini-sidebar .nav-devider {
                              width: 50px; }
                              .mini-sidebar .sidebar-nav {
                                background: transparent; }
                                .mini-sidebar .sidebar-nav #sidebarnav > li > a {
                                  padding: 9px 15px;
                                  width: 50px; }
                                  .mini-sidebar .sidebar-nav #sidebarnav > li:hover > a {
                                    width: 260px;
                                    background: #26c6da;
                                    color: #ffffff;
                                    border-color: #009efb; }
                                    .mini-sidebar .sidebar-nav #sidebarnav > li:hover > a i {
                                      color: #ffffff; }
                                      .mini-sidebar .sidebar-nav #sidebarnav > li:hover > a .hide-menu {
                                        display: inline; }
                                        .mini-sidebar .sidebar-nav #sidebarnav > li.active > a {
                                          border-color: transparent; }
                                          .mini-sidebar .sidebar-nav #sidebarnav > li.active > a.active {
                                            border-color: #009efb; } }

                                            @media (max-width: 767px) {
                                              .mini-sidebar .left-sidebar {
                                                position: fixed; }
                                                .mini-sidebar .left-sidebar, .mini-sidebar .sidebar-footer {
                                                  left: -240px; }
                                                  .mini-sidebar.show-sidebar .left-sidebar, .mini-sidebar.show-sidebar .sidebar-footer {
                                                    left: 0px; } }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*******************
/*User mail widgets*/
/*******************/
.topbar .top-navbar .mailbox {
  width: 300px; }
  .topbar .top-navbar .mailbox ul {
    padding: 0px; }
    .topbar .top-navbar .mailbox ul li {
      list-style: none; }

      .mailbox ul li .drop-title {
        font-weight: 500;
        padding: 11px 20px 15px;
        border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

        .mailbox ul li .nav-link {
          border-top: 1px solid rgba(120, 130, 140, 0.13);
          padding-top: 15px; }

          .mailbox .message-center {
            height: 200px;
            overflow: auto;
            position: relative; }
            .mailbox .message-center a {
              border-bottom: 1px solid rgba(120, 130, 140, 0.13);
              display: block;
              text-decoration: none;
              padding: 9px 15px; }
              .mailbox .message-center a:hover {
                background: #f2f4f8; }
                .mailbox .message-center a div {
                  white-space: normal; }
                  .mailbox .message-center a .user-img {
                    width: 40px;
                    position: relative;
                    display: inline-block;
                    margin: 0 10px 15px 0; }
                    .mailbox .message-center a .user-img img {
                      width: 100%; }
                      .mailbox .message-center a .user-img .profile-status {
                        border: 2px solid #ffffff;
                        border-radius: 50%;
                        display: inline-block;
                        height: 10px;
                        left: 30px;
                        position: absolute;
                        top: 1px;
                        width: 10px; }
                        .mailbox .message-center a .user-img .online {
                          background: #26c6da; }
                          .mailbox .message-center a .user-img .busy {
                            background: #fc4b6c; }
                            .mailbox .message-center a .user-img .away {
                              background: #ffb22b; }
                              .mailbox .message-center a .user-img .offline {
                                background: #ffb22b; }
                                .mailbox .message-center a .mail-contnet {
                                  display: inline-block;
                                  width: 75%;
                                  vertical-align: middle; }
                                  .mailbox .message-center a .mail-contnet h5 {
                                    margin: 5px 0px 0; }
                                    .mailbox .message-center a .mail-contnet .mail-desc,
                                    .mailbox .message-center a .mail-contnet .time {
                                      font-size: 12px;
                                      display: block;
                                      margin: 1px 0;
                                      -o-text-overflow: ellipsis;
                                      text-overflow: ellipsis;
                                      overflow: hidden;
                                      color: #67757c;
                                      white-space: nowrap; }

/*******************
/*Analytic info sparkline chart page*/
/*******************/
.analytics-info li span {
  font-size: 24px;
  vertical-align: middle; }

/*******************
/*States row*/
/*******************/
.stats-row {
  margin-bottom: 20px; }
  .stats-row .stat-item {
    display: inline-block;
    padding-right: 15px; }
    .stats-row .stat-item + .stat-item {
      padding-left: 15px;
      border-left: 1px solid rgba(120, 130, 140, 0.13); }

      /*******************/
      /*Dashboard1 Weather*/
      /*******************/
      .city-weather-days {
        margin: 0px; }
        .city-weather-days li {
          text-align: center;
          padding: 15px 0; }
          .city-weather-days li span {
            display: block;
            padding: 10px 0 0;
            color: #99abb4; }
            .city-weather-days li i {
              display: block;
              font-size: 20px;
              color: #009efb; }
              .city-weather-days li h3 {
                font-weight: 300;
                margin-top: 5px; }

                /*******************/
                /*Comment widgets*/
                /*******************/
                .comment-widgets {
                  position: relative;
                  margin-bottom: 10px; }
                  .comment-widgets .comment-row {
                    border-left: 3px solid #ffffff;
                    padding: 15px; }
                    .comment-widgets .comment-row:hover, .comment-widgets .comment-row.active {
                      border-color: #009efb; }

                      .comment-text {
                        padding: 15px 15px 15px 20px; }
                        .comment-text:hover .comment-footer .action-icons,
                        .comment-text.active .comment-footer .action-icons {
                          visibility: visible; }
                          .comment-text p {
                            max-height: 50px;
                            overflow: hidden; }

                            .comment-footer .action-icons {
                              visibility: hidden; }
                              .comment-footer .action-icons a {
                                padding-left: 15px;
                                vertical-align: middle;
                                color: #99abb4; }
                                .comment-footer .action-icons a:hover, .comment-footer .action-icons a.active {
                                  color: #1e88e5; }

                                  /*******************/
                                  /*To do widgets*/
                                  /*******************/
                                  .todo-list li {
                                    border: 0px;
                                    margin-bottom: 0px;
                                    padding: 20px 15px 15px 0px; }
                                    .todo-list li .checkbox {
                                      width: 100%; }
                                      .todo-list li .checkbox label {
                                        font-weight: 400;
                                        color: #455a64; }
                                        .todo-list li:last-child {
                                          border-bottom: 0px; }
                                          .todo-list li .assignedto {
                                            padding: 0px 0 0 27px;
                                            margin: 0px; }
                                            .todo-list li .assignedto li {
                                              list-style: none;
                                              padding: 0px;
                                              display: inline-block;
                                              border: 0px;
                                              margin-right: 2px; }
                                              .todo-list li .assignedto li img {
                                                width: 30px;
                                                border-radius: 100%; }
                                                .todo-list li .item-date {
                                                  padding-left: 25px;
                                                  font-size: 12px;
                                                  display: inline-block; }

                                                  .list-task .task-done span {
                                                    text-decoration: line-through; }

                                                    /*******************/
                                                    /*Chat widget*/
                                                    /*******************/
                                                    .chat-list {
                                                      margin: 0px;
                                                      padding: 0px; }
                                                      .chat-list li {
                                                        list-style: none;
                                                        margin-top: 30px; }
                                                        .chat-list li .chat-img {
                                                          display: inline-block;
                                                          width: 45px;
                                                          vertical-align: top; }
                                                          .chat-list li .chat-img img {
                                                            width: 45px;
                                                            border-radius: 100%; }
                                                            .chat-list li .chat-content {
                                                              width: calc(100% - 140px);
                                                              display: inline-block;
                                                              padding-left: 15px; }
                                                              .chat-list li .chat-content h5 {
                                                                color: #99abb4; }
                                                                .chat-list li .chat-content .box {
                                                                  display: inline-block;
                                                                  margin-bottom: 10px;
                                                                  color: #263238; }
                                                                  .chat-list li .chat-time {
                                                                    display: inline-block;
                                                                    text-align: right;
                                                                    width: 80px;
                                                                    font-size: 13px;
                                                                    color: #99abb4; }
                                                                    .chat-list li.odd .chat-content {
                                                                      text-align: right;
                                                                      width: calc(100% - 90px); }
                                                                      .chat-list li.odd .box {
                                                                        clear: both; }
                                                                        .chat-list li.odd + .odd {
                                                                          margin-top: 0px; }
                                                                          .chat-list li.reverse {
                                                                            text-align: right; }
                                                                            .chat-list li.reverse .chat-time {
                                                                              text-align: left; }
                                                                              .chat-list li.reverse .chat-content {
                                                                                padding-left: 0px;
                                                                                padding-right: 15px; }

                                                                                /*******************/
                                                                                /*Chat widget*/
                                                                                /*******************/
                                                                                .message-box ul li .drop-title {
                                                                                  font-weight: 500;
                                                                                  padding: 11px 20px 15px;
                                                                                  border-bottom: 1px solid rgba(120, 130, 140, 0.13); }

                                                                                  .message-box ul li .nav-link {
                                                                                    border-top: 1px solid rgba(120, 130, 140, 0.13);
                                                                                    padding-top: 15px; }

                                                                                    .message-box .message-widget {
                                                                                      position: relative; }
                                                                                      .message-box .message-widget a {
                                                                                        border-bottom: 1px solid rgba(120, 130, 140, 0.13);
                                                                                        display: block;
                                                                                        text-decoration: none;
                                                                                        padding: 9px 15px; }
                                                                                        .message-box .message-widget a:hover {
                                                                                          background: #f2f4f8; }
                                                                                          .message-box .message-widget a:last-child {
                                                                                            border-bottom: 0px; }
                                                                                            .message-box .message-widget a div {
                                                                                              white-space: normal; }
                                                                                              .message-box .message-widget a .user-img {
                                                                                                width: 45px;
                                                                                                position: relative;
                                                                                                display: inline-block;
                                                                                                margin: 0 10px 15px 0; }
                                                                                                .message-box .message-widget a .user-img img {
                                                                                                  width: 100%; }
                                                                                                  .message-box .message-widget a .user-img .profile-status {
                                                                                                    border: 2px solid #ffffff;
                                                                                                    border-radius: 50%;
                                                                                                    display: inline-block;
                                                                                                    height: 10px;
                                                                                                    left: 33px;
                                                                                                    position: absolute;
                                                                                                    top: -1px;
                                                                                                    width: 10px; }
                                                                                                    .message-box .message-widget a .user-img .online {
                                                                                                      background: #26c6da; }
                                                                                                      .message-box .message-widget a .user-img .busy {
                                                                                                        background: #fc4b6c; }
                                                                                                        .message-box .message-widget a .user-img .away {
                                                                                                          background: #ffb22b; }
                                                                                                          .message-box .message-widget a .user-img .offline {
                                                                                                            background: #ffb22b; }
                                                                                                            .message-box .message-widget a .mail-contnet {
                                                                                                              display: inline-block;
                                                                                                              width: 75%;
                                                                                                              vertical-align: middle; }
                                                                                                              .message-box .message-widget a .mail-contnet h5 {
                                                                                                                margin: 5px 0px 0; }
                                                                                                                .message-box .message-widget a .mail-contnet .mail-desc,
                                                                                                                .message-box .message-widget a .mail-contnet .time {
                                                                                                                  font-size: 12px;
                                                                                                                  display: block;
                                                                                                                  margin: 1px 0;
                                                                                                                  -o-text-overflow: ellipsis;
                                                                                                                  text-overflow: ellipsis;
                                                                                                                  overflow: hidden;
                                                                                                                  color: #67757c;
                                                                                                                  white-space: nowrap; }

                                                                                                                  /*******************/
                                                                                                                  /*Calendar widget*/
                                                                                                                  /*******************/
                                                                                                                  .calendar {
                                                                                                                    float: left;
                                                                                                                    margin-bottom: 0px; }

                                                                                                                    .fc-view {
                                                                                                                      margin-top: 30px; }

                                                                                                                      .none-border .modal-footer {
                                                                                                                        border-top: none; }

                                                                                                                        .fc-toolbar {
                                                                                                                          margin-bottom: 5px;
                                                                                                                          margin-top: 15px; }
                                                                                                                          .fc-toolbar h2 {
                                                                                                                            font-size: 18px;
                                                                                                                            font-weight: 500;
                                                                                                                            line-height: 30px;
                                                                                                                            text-transform: uppercase; }

                                                                                                                            .fc-day {
                                                                                                                              background: #ffffff; }

                                                                                                                              .fc-toolbar .fc-state-active,
                                                                                                                              .fc-toolbar .ui-state-active,
                                                                                                                              .fc-toolbar button:focus,
                                                                                                                              .fc-toolbar button:hover,
                                                                                                                              .fc-toolbar .ui-state-hover {
                                                                                                                                z-index: 0; }

                                                                                                                                .fc-widget-header {
                                                                                                                                  border: 0px !important; }

                                                                                                                                  .fc-widget-content {
                                                                                                                                    border-color: rgba(120, 130, 140, 0.13) !important; }

                                                                                                                                    .fc th.fc-widget-header {
                                                                                                                                      color: #67757c;
                                                                                                                                      font-size: 13px;
                                                                                                                                      font-weight: 300;
                                                                                                                                      line-height: 20px;
                                                                                                                                      padding: 7px 0px;
                                                                                                                                      text-transform: uppercase; }

                                                                                                                                      .fc th.fc-sun,
                                                                                                                                      .fc th.fc-tue,
                                                                                                                                      .fc th.fc-thu,
                                                                                                                                      .fc th.fc-sat {
                                                                                                                                        background: #f2f7f8; }

                                                                                                                                        .fc th.fc-mon,
                                                                                                                                        .fc th.fc-wed,
                                                                                                                                        .fc th.fc-fri {
                                                                                                                                          background: #f2f7f8; }

                                                                                                                                          .fc-view {
                                                                                                                                            margin-top: 0px; }

                                                                                                                                            .fc-toolbar {
                                                                                                                                              margin: 0px;
                                                                                                                                              padding: 24px 0px; }

                                                                                                                                              .fc-button {
                                                                                                                                                background: #ffffff;
                                                                                                                                                border: 1px solid rgba(120, 130, 140, 0.13);
                                                                                                                                                color: #67757c;
                                                                                                                                                text-transform: capitalize; }
                                                                                                                                                .fc-button:hover {
                                                                                                                                                  background: #f2f4f8;
                                                                                                                                                  opacity: 0.8; }

                                                                                                                                                  .fc-text-arrow {
                                                                                                                                                    font-family: inherit;
                                                                                                                                                    font-size: 16px; }

                                                                                                                                                    .fc-state-hover {
                                                                                                                                                      background: #F5F5F5; }

                                                                                                                                                      .fc-unthemed .fc-today {
                                                                                                                                                        border: 1px solid #fc4b6c;
                                                                                                                                                        background: #f2f4f8 !important; }

                                                                                                                                                        .fc-state-highlight {
                                                                                                                                                          background: #f0f0f0; }

                                                                                                                                                          .fc-cell-overlay {
                                                                                                                                                            background: #f0f0f0; }

                                                                                                                                                            .fc-unthemed .fc-today {
                                                                                                                                                              background: #ffffff; }

                                                                                                                                                              .fc-event {
                                                                                                                                                                border-radius: 0px;
                                                                                                                                                                border: none;
                                                                                                                                                                cursor: move;
                                                                                                                                                                color: #ffffff !important;
                                                                                                                                                                font-size: 13px;
                                                                                                                                                                margin: 1px -1px 0 -1px;
                                                                                                                                                                padding: 5px 5px;
                                                                                                                                                                text-align: center;
                                                                                                                                                                background: #1e88e5; }

                                                                                                                                                                .calendar-event {
                                                                                                                                                                  cursor: move;
                                                                                                                                                                  margin: 10px 5px 0 0;
                                                                                                                                                                  padding: 6px 10px;
                                                                                                                                                                  display: inline-block;
                                                                                                                                                                  color: #ffffff;
                                                                                                                                                                  min-width: 140px;
                                                                                                                                                                  text-align: center;
                                                                                                                                                                  background: #1e88e5; }
                                                                                                                                                                  .calendar-event a {
                                                                                                                                                                    float: right;
                                                                                                                                                                    opacity: 0.6;
                                                                                                                                                                    font-size: 10px;
                                                                                                                                                                    margin: 4px 0 0 10px;
                                                                                                                                                                    color: #ffffff; }

                                                                                                                                                                    .fc-basic-view td.fc-week-number span {
                                                                                                                                                                      padding-right: 5px; }

                                                                                                                                                                      .fc-basic-view .fc-day-number {
                                                                                                                                                                        padding: 10px 15px;
                                                                                                                                                                        display: inline-block; }

                                                                                                                                                                        /*******************/
                                                                                                                                                                        /*Steam line widget*/
                                                                                                                                                                        /*******************/
                                                                                                                                                                        .steamline {
                                                                                                                                                                          position: relative;
                                                                                                                                                                          border-left: 1px solid rgba(120, 130, 140, 0.13);
                                                                                                                                                                          margin-left: 20px; }
                                                                                                                                                                          .steamline .sl-left {
                                                                                                                                                                            float: left;
                                                                                                                                                                            margin-left: -20px;
                                                                                                                                                                            z-index: 1;
                                                                                                                                                                            width: 40px;
                                                                                                                                                                            line-height: 40px;
                                                                                                                                                                            text-align: center;
                                                                                                                                                                            height: 40px;
                                                                                                                                                                            border-radius: 100%;
                                                                                                                                                                            color: #ffffff;
                                                                                                                                                                            background: #263238;
                                                                                                                                                                            margin-right: 15px; }
                                                                                                                                                                            .steamline .sl-left img {
                                                                                                                                                                              max-width: 40px; }

                                                                                                                                                                              .steamline .sl-right {
                                                                                                                                                                                padding-left: 50px; }
                                                                                                                                                                                .steamline .sl-right .desc,
                                                                                                                                                                                .steamline .sl-right .inline-photos {
                                                                                                                                                                                  margin-bottom: 30px; }

                                                                                                                                                                                  .steamline .sl-item {
                                                                                                                                                                                    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
                                                                                                                                                                                    margin: 20px 0; }

                                                                                                                                                                                    .sl-date {
                                                                                                                                                                                      font-size: 10px;
                                                                                                                                                                                      color: #99abb4; }

                                                                                                                                                                                      .time-item {
                                                                                                                                                                                        border-color: rgba(120, 130, 140, 0.13);
                                                                                                                                                                                        padding-bottom: 1px;
                                                                                                                                                                                        position: relative; }
                                                                                                                                                                                        .time-item:before {
                                                                                                                                                                                          content: " ";
                                                                                                                                                                                          display: table; }
                                                                                                                                                                                          .time-item:after {
                                                                                                                                                                                            background-color: #ffffff;
                                                                                                                                                                                            border-color: rgba(120, 130, 140, 0.13);
                                                                                                                                                                                            border-radius: 10px;
                                                                                                                                                                                            border-style: solid;
                                                                                                                                                                                            border-width: 2px;
                                                                                                                                                                                            bottom: 0;
                                                                                                                                                                                            content: '';
                                                                                                                                                                                            height: 14px;
                                                                                                                                                                                            left: 0;
                                                                                                                                                                                            margin-left: -8px;
                                                                                                                                                                                            position: absolute;
                                                                                                                                                                                            top: 5px;
                                                                                                                                                                                            width: 14px; }

                                                                                                                                                                                            .time-item-item:after {
                                                                                                                                                                                              content: " ";
                                                                                                                                                                                              display: table; }

                                                                                                                                                                                              .item-info {
                                                                                                                                                                                                margin-bottom: 15px;
                                                                                                                                                                                                margin-left: 15px; }
                                                                                                                                                                                                .item-info p {
                                                                                                                                                                                                  margin-bottom: 10px !important; }

                                                                                                                                                                                                  /*******************/
                                                                                                                                                                                                  /*Feed widget*/
                                                                                                                                                                                                  /*******************/
                                                                                                                                                                                                  .feeds {
                                                                                                                                                                                                    margin: 0px;
                                                                                                                                                                                                    padding: 0px; }
                                                                                                                                                                                                    .feeds li {
                                                                                                                                                                                                      list-style: none;
                                                                                                                                                                                                      padding: 10px;
                                                                                                                                                                                                      display: block; }
                                                                                                                                                                                                      .feeds li:hover {
                                                                                                                                                                                                        background: #ebf3f5; }
                                                                                                                                                                                                        .feeds li > div {
                                                                                                                                                                                                          width: 40px;
                                                                                                                                                                                                          height: 40px;
                                                                                                                                                                                                          margin-right: 5px;
                                                                                                                                                                                                          display: inline-block;
                                                                                                                                                                                                          text-align: center;
                                                                                                                                                                                                          vertical-align: middle;
                                                                                                                                                                                                          border-radius: 100%; }
                                                                                                                                                                                                          .feeds li > div i {
                                                                                                                                                                                                            line-height: 40px; }
                                                                                                                                                                                                            .feeds li span {
                                                                                                                                                                                                              float: right;
                                                                                                                                                                                                              width: auto;
                                                                                                                                                                                                              font-size: 12px; }

                                                                                                                                                                                                              /*******************/
                                                                                                                                                                                                              /*Vertical carousel*/
                                                                                                                                                                                                              /*******************/
                                                                                                                                                                                                              .vert .carousel-item-next.carousel-item-left,
                                                                                                                                                                                                              .vert .carousel-item-prev.carousel-item-right {
                                                                                                                                                                                                                -webkit-transform: translate3d(0, 0, 0);
                                                                                                                                                                                                                transform: translate3d(0, 0, 0); }

                                                                                                                                                                                                                .vert .carousel-item-next,
                                                                                                                                                                                                                .vert .active.carousel-item-right {
                                                                                                                                                                                                                  -webkit-transform: translate3d(0, 100%, 0);
                                                                                                                                                                                                                  transform: translate3d(0, 100% 0); }

                                                                                                                                                                                                                  .vert .carousel-item-prev,
                                                                                                                                                                                                                  .vert .active.carousel-item-left {
                                                                                                                                                                                                                    -webkit-transform: translate3d(0, -100%, 0);
                                                                                                                                                                                                                    transform: translate3d(0, -100%, 0); }

                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                    /*social-widgets*/
                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                    .social-widget .soc-header {
                                                                                                                                                                                                                      padding: 15px;
                                                                                                                                                                                                                      text-align: center;
                                                                                                                                                                                                                      font-size: 36px;
                                                                                                                                                                                                                      color: #fff; }
                                                                                                                                                                                                                      .social-widget .soc-header.box-facebook {
                                                                                                                                                                                                                        background: #3b5998; }
                                                                                                                                                                                                                        .social-widget .soc-header.box-twitter {
                                                                                                                                                                                                                          background: #00aced; }
                                                                                                                                                                                                                          .social-widget .soc-header.box-google {
                                                                                                                                                                                                                            background: #f86c6b; }
                                                                                                                                                                                                                            .social-widget .soc-header.box-linkedin {
                                                                                                                                                                                                                              background: #4875b4; }

                                                                                                                                                                                                                              .social-widget .soc-content {
                                                                                                                                                                                                                                display: -webkit-box;
                                                                                                                                                                                                                                display: -webkit-flex;
                                                                                                                                                                                                                                display: -ms-flexbox;
                                                                                                                                                                                                                                display: flex;
                                                                                                                                                                                                                                text-align: center; }
                                                                                                                                                                                                                                .social-widget .soc-content div {
                                                                                                                                                                                                                                  padding: 10px; }
                                                                                                                                                                                                                                  .social-widget .soc-content div h3 {
                                                                                                                                                                                                                                    margin-bottom: 0px; }

                                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                                    /*Guage chart*/
                                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                                    .gaugejs-box {
                                                                                                                                                                                                                                      position: relative;
                                                                                                                                                                                                                                      margin: 0 auto; }

                                                                                                                                                                                                                                      .gaugejs-box canvas.gaugejs {
                                                                                                                                                                                                                                        width: 100% !important;
                                                                                                                                                                                                                                        height: auto !important; }

                                                                                                                                                                                                                                        /*******************/
                                                                                                                                                                                                                                        /*social-profile-first*/
                                                                                                                                                                                                                                        /*******************/
                                                                                                                                                                                                                                        .social-profile-first {
                                                                                                                                                                                                                                          text-align: center;
                                                                                                                                                                                                                                          padding-top: 22%;
                                                                                                                                                                                                                                          margin-bottom: 96px; }
                                                                                                                                                                                                                                          .social-profile-first.bg-over {
                                                                                                                                                                                                                                            background: rgba(56, 83, 161, 0.7); }
                                                                                                                                                                                                                                            .social-profile-first .middle {
                                                                                                                                                                                                                                              vertical-align: middle; }

                                                                                                                                                                                                                                              /*******************/
                                                                                                                                                                                                                                              /*country-state*/
                                                                                                                                                                                                                                              /*******************/
                                                                                                                                                                                                                                              .country-state {
                                                                                                                                                                                                                                                list-style: none;
                                                                                                                                                                                                                                                margin: 0;
                                                                                                                                                                                                                                                padding: 0 0 0 10px; }
                                                                                                                                                                                                                                                .country-state li {
                                                                                                                                                                                                                                                  margin-top: 30px;
                                                                                                                                                                                                                                                  margin-bottom: 10px; }
                                                                                                                                                                                                                                                  .country-state h2 {
                                                                                                                                                                                                                                                    margin-bottom: 0px;
                                                                                                                                                                                                                                                    font-weight: 400; }

                                                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                                                    /*profile timeline widget*/
                                                                                                                                                                                                                                                    /*******************/
                                                                                                                                                                                                                                                    .profiletimeline {
                                                                                                                                                                                                                                                      position: relative;
                                                                                                                                                                                                                                                      margin-left: 70px;
                                                                                                                                                                                                                                                      margin-right: 10px; }
                                                                                                                                                                                                                                                      .profiletimeline .sl-left {
                                                                                                                                                                                                                                                        float: left;
                                                                                                                                                                                                                                                        margin-left: -60px;
                                                                                                                                                                                                                                                        z-index: 1;
                                                                                                                                                                                                                                                        margin-right: 15px; }
                                                                                                                                                                                                                                                        .profiletimeline .sl-left img {
                                                                                                                                                                                                                                                          max-width: 40px; }

                                                                                                                                                                                                                                                          .profiletimeline .sl-item {
                                                                                                                                                                                                                                                            margin-top: 8px;
                                                                                                                                                                                                                                                            margin-bottom: 30px; }

                                                                                                                                                                                                                                                            .profiletimeline .sl-date {
                                                                                                                                                                                                                                                              font-size: 12px;
                                                                                                                                                                                                                                                              color: #99abb4; }

                                                                                                                                                                                                                                                              .profiletimeline .time-item {
                                                                                                                                                                                                                                                                border-color: rgba(120, 130, 140, 0.13);
                                                                                                                                                                                                                                                                padding-bottom: 1px;
                                                                                                                                                                                                                                                                position: relative; }
                                                                                                                                                                                                                                                                .profiletimeline .time-item:before {
                                                                                                                                                                                                                                                                  content: " ";
                                                                                                                                                                                                                                                                  display: table; }
                                                                                                                                                                                                                                                                  .profiletimeline .time-item:after {
                                                                                                                                                                                                                                                                    background-color: #ffffff;
                                                                                                                                                                                                                                                                    border-color: rgba(120, 130, 140, 0.13);
                                                                                                                                                                                                                                                                    border-radius: 10px;
                                                                                                                                                                                                                                                                    border-style: solid;
                                                                                                                                                                                                                                                                    border-width: 2px;
                                                                                                                                                                                                                                                                    bottom: 0;
                                                                                                                                                                                                                                                                    content: '';
                                                                                                                                                                                                                                                                    height: 14px;
                                                                                                                                                                                                                                                                    left: 0;
                                                                                                                                                                                                                                                                    margin-left: -8px;
                                                                                                                                                                                                                                                                    position: absolute;
                                                                                                                                                                                                                                                                    top: 5px;
                                                                                                                                                                                                                                                                    width: 14px; }

                                                                                                                                                                                                                                                                    .profiletimeline .time-item-item:after {
                                                                                                                                                                                                                                                                      content: " ";
                                                                                                                                                                                                                                                                      display: table; }

                                                                                                                                                                                                                                                                      .profiletimeline .item-info {
                                                                                                                                                                                                                                                                        margin-bottom: 15px;
                                                                                                                                                                                                                                                                        margin-left: 15px; }
                                                                                                                                                                                                                                                                        .profiletimeline .item-info p {
                                                                                                                                                                                                                                                                          margin-bottom: 10px !important; }

                                                                                                                                                                                                                                                                          /*Blog widgets*/
                                                                                                                                                                                                                                                                          .blog-widget {
                                                                                                                                                                                                                                                                            margin-top: 30px; }
                                                                                                                                                                                                                                                                            .blog-widget .blog-image img {
                                                                                                                                                                                                                                                                              border-radius: 4px;
                                                                                                                                                                                                                                                                              margin-top: -45px;
                                                                                                                                                                                                                                                                              margin-bottom: 20px;
                                                                                                                                                                                                                                                                              -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                                                                                                                                                                                                                                                                              box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); }

                                                                                                                                                                                                                                                                              /*Weather smal;*/
                                                                                                                                                                                                                                                                              .weather-small h1 {
                                                                                                                                                                                                                                                                                line-height: 30px; }

                                                                                                                                                                                                                                                                                .weather-small sup {
                                                                                                                                                                                                                                                                                  font-size: 60%; }

                                                                                                                                                                                                                                                                                  /*little-profile*/
                                                                                                                                                                                                                                                                                  .little-profile .pro-img {
                                                                                                                                                                                                                                                                                    margin-top: -80px;
                                                                                                                                                                                                                                                                                    margin-bottom: 20px; }
                                                                                                                                                                                                                                                                                    .little-profile .pro-img img {
                                                                                                                                                                                                                                                                                      width: 128px;
                                                                                                                                                                                                                                                                                      height: 128px;
                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                                                                                                                                                                                                                                                                                      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                                                                                                                                                                                                                                                                                      border-radius: 100%; }

                                                                                                                                                                                                                                                                                      .contact-box {
                                                                                                                                                                                                                                                                                        position: relative; }
                                                                                                                                                                                                                                                                                        .contact-box .add-ct-btn {
                                                                                                                                                                                                                                                                                          position: absolute;
                                                                                                                                                                                                                                                                                          right: 4px;
                                                                                                                                                                                                                                                                                          top: -46px; }
                                                                                                                                                                                                                                                                                          .contact-box .contact-widget > a {
                                                                                                                                                                                                                                                                                            padding: 15px 10px; }
                                                                                                                                                                                                                                                                                            .contact-box .contact-widget > a .user-img {
                                                                                                                                                                                                                                                                                              margin-bottom: 0px !important; }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
@media (min-width: 1600px) {
  .col-xlg-1,
  .col-xlg-10,
  .col-xlg-11,
  .col-xlg-12,
  .col-xlg-2,
  .col-xlg-3,
  .col-xlg-4,
  .col-xlg-5,
  .col-xlg-6,
  .col-xlg-7,
  .col-xlg-8,
  .col-xlg-9 {
    float: left; }
    .col-xlg-12 {
      -webkit-box-flex: 0;
      -webkit-flex: 0 0 100%;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%; }
      .col-xlg-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.66666667%;
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%; }
        .col-xlg-10 {
          -webkit-box-flex: 0;
          -webkit-flex: 0 0 83.33333333%;
          -ms-flex: 0 0 83.33333333%;
          flex: 0 0 83.33333333%;
          max-width: 83.33333333%; }
          .col-xlg-9 {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 75%;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
            .col-xlg-8 {
              -webkit-box-flex: 0;
              -webkit-flex: 0 0 66.66666667%;
              -ms-flex: 0 0 66.66666667%;
              flex: 0 0 66.66666667%;
              max-width: 66.66666667%; }
              .col-xlg-7 {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 58.33333333%;
                -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%; }
                .col-xlg-6 {
                  -webkit-box-flex: 0;
                  -webkit-flex: 0 0 50%;
                  -ms-flex: 0 0 50%;
                  flex: 0 0 50%;
                  max-width: 50%; }
                  .col-xlg-5 {
                    -webkit-box-flex: 0;
                    -webkit-flex: 0 0 41.66666667%;
                    -ms-flex: 0 0 41.66666667%;
                    flex: 0 0 41.66666667%;
                    max-width: 41.66666667%; }
                    .col-xlg-4 {
                      -webkit-box-flex: 0;
                      -webkit-flex: 0 0 33.33333333%;
                      -ms-flex: 0 0 33.33333333%;
                      flex: 0 0 33.33333333%;
                      max-width: 33.33333333%; }
                      .col-xlg-3 {
                        -webkit-box-flex: 0;
                        -webkit-flex: 0 0 25%;
                        -ms-flex: 0 0 25%;
                        flex: 0 0 25%;
                        max-width: 25%; }
                        .col-xlg-2 {
                          -webkit-box-flex: 0;
                          -webkit-flex: 0 0 16.66666667%;
                          -ms-flex: 0 0 16.66666667%;
                          flex: 0 0 16.66666667%;
                          max-width: 16.66666667%; }
                          .col-xlg-1 {
                            -webkit-box-flex: 0;
                            -webkit-flex: 0 0 8.33333333%;
                            -ms-flex: 0 0 8.33333333%;
                            flex: 0 0 8.33333333%;
                            max-width: 8.33333333%; }
                            .col-xlg-pull-12 {
                              right: 100%; }
                              .col-xlg-pull-11 {
                                right: 91.66666667%; }
                                .col-xlg-pull-10 {
                                  right: 83.33333333%; }
                                  .col-xlg-pull-9 {
                                    right: 75%; }
                                    .col-xlg-pull-8 {
                                      right: 66.66666667%; }
                                      .col-xlg-pull-7 {
                                        right: 58.33333333%; }
                                        .col-xlg-pull-6 {
                                          right: 50%; }
                                          .col-xlg-pull-5 {
                                            right: 41.66666667%; }
                                            .col-xlg-pull-4 {
                                              right: 33.33333333%; }
                                              .col-xlg-pull-3 {
                                                right: 25%; }
                                                .col-xlg-pull-2 {
                                                  right: 16.66666667%; }
                                                  .col-xlg-pull-1 {
                                                    right: 8.33333333%; }
                                                    .col-xlg-pull-0 {
                                                      right: auto; }
                                                      .col-xlg-push-12 {
                                                        left: 100%; }
                                                        .col-xlg-push-11 {
                                                          left: 91.66666667%; }
                                                          .col-xlg-push-10 {
                                                            left: 83.33333333%; }
                                                            .col-xlg-push-9 {
                                                              left: 75%; }
                                                              .col-xlg-push-8 {
                                                                left: 66.66666667%; }
                                                                .col-xlg-push-7 {
                                                                  left: 58.33333333%; }
                                                                  .col-xlg-push-6 {
                                                                    left: 50%; }
                                                                    .col-xlg-push-5 {
                                                                      left: 41.66666667%; }
                                                                      .col-xlg-push-4 {
                                                                        left: 33.33333333%; }
                                                                        .col-xlg-push-3 {
                                                                          left: 25%; }
                                                                          .col-xlg-push-2 {
                                                                            left: 16.66666667%; }
                                                                            .col-xlg-push-1 {
                                                                              left: 8.33333333%; }
                                                                              .col-xlg-push-0 {
                                                                                left: auto; }
                                                                                .offset-xlg-12 {
                                                                                  margin-left: 100%; }
                                                                                  .offset-xlg-11 {
                                                                                    margin-left: 91.66666667%; }
                                                                                    .offset-xlg-10 {
                                                                                      margin-left: 83.33333333%; }
                                                                                      .offset-xlg-9 {
                                                                                        margin-left: 75%; }
                                                                                        .offset-xlg-8 {
                                                                                          margin-left: 66.66666667%; }
                                                                                          .offset-xlg-7 {
                                                                                            margin-left: 58.33333333%; }
                                                                                            .offset-xlg-6 {
                                                                                              margin-left: 50%; }
                                                                                              .offset-xlg-5 {
                                                                                                margin-left: 41.66666667%; }
                                                                                                .offset-xlg-4 {
                                                                                                  margin-left: 33.33333333%; }
                                                                                                  .offset-xlg-3 {
                                                                                                    margin-left: 25%; }
                                                                                                    .offset-xlg-2 {
                                                                                                      margin-left: 16.66666667%; }
                                                                                                      .offset-xlg-1 {
                                                                                                        margin-left: 8.33333333%; }
                                                                                                        .offset-xlg-0 {
                                                                                                          margin-left: 0; } }

                                                                                                          .col-xlg-1,
                                                                                                          .col-xlg-10,
                                                                                                          .col-xlg-11,
                                                                                                          .col-xlg-12,
                                                                                                          .col-xlg-2,
                                                                                                          .col-xlg-3,
                                                                                                          .col-xlg-4,
                                                                                                          .col-xlg-5,
                                                                                                          .col-xlg-6,
                                                                                                          .col-xlg-7,
                                                                                                          .col-xlg-8,
                                                                                                          .col-xlg-9 {
                                                                                                            position: relative;
                                                                                                            min-height: 1px;
                                                                                                            padding-right: 15px;
                                                                                                            padding-left: 15px; }

                                                                                                            /*-------------------*/
                                                                                                            /*Bootstrap 4 hack*/
                                                                                                            /*-------------------*/
                                                                                                            .bootstrap-touchspin .input-group-btn {
                                                                                                              -webkit-box-align: normal;
                                                                                                              -webkit-align-items: normal;
                                                                                                              -ms-flex-align: normal;
                                                                                                              align-items: normal; }

                                                                                                              .form-control-line .form-control.form-control-success:focus {
                                                                                                                border-bottom: 1px solid #26c6da; }

                                                                                                                .form-control-line .form-control.form-control-warning:focus {
                                                                                                                  border-bottom: 1px solid #ffb22b; }

                                                                                                                  .form-control-line .form-control.form-control-danger:focus {
                                                                                                                    border-bottom: 1px solid #fc4b6c; }

                                                                                                                    .form-control-danger,
                                                                                                                    .form-control-success,
                                                                                                                    .form-control-warning {
                                                                                                                      padding-right: 2.25rem;
                                                                                                                      background-repeat: no-repeat;
                                                                                                                      background-position: center right .5625rem;
                                                                                                                      -webkit-background-size: 1.125rem 1.125rem;
                                                                                                                      background-size: 1.125rem 1.125rem; }

                                                                                                                      .has-success .col-form-label,
                                                                                                                      .has-success .custom-control,
                                                                                                                      .has-success .form-check-label,
                                                                                                                      .has-success .form-control-feedback,
                                                                                                                      .has-success .form-control-label {
                                                                                                                        color: #26c6da; }

                                                                                                                        .has-success .form-control-success {
                                                                                                                          background-image: url(../../assets/images/icon/success.svg); }

                                                                                                                          .has-success .form-control {
                                                                                                                            border-color: #26c6da; }

                                                                                                                            .has-warning .col-form-label,
                                                                                                                            .has-warning .custom-control,
                                                                                                                            .has-warning .form-check-label,
                                                                                                                            .has-warning .form-control-feedback,
                                                                                                                            .has-warning .form-control-label {
                                                                                                                              color: #ffb22b; }

                                                                                                                              .has-warning .form-control-warning {
                                                                                                                                background-image: url(../../assets/images/icon/warning.svg); }

                                                                                                                                .has-warning .form-control {
                                                                                                                                  border-color: #ffb22b; }

                                                                                                                                  .has-danger .col-form-label,
                                                                                                                                  .has-danger .custom-control,
                                                                                                                                  .has-danger .form-check-label,
                                                                                                                                  .has-danger .form-control-feedback,
                                                                                                                                  .has-danger .form-control-label {
                                                                                                                                    color: #fc4b6c; }

                                                                                                                                    .has-danger .form-control-danger {
                                                                                                                                      background-image: url(../../assets/images/icon/danger.svg); }

                                                                                                                                      .has-danger .form-control {
                                                                                                                                        border-color: #fc4b6c; }

                                                                                                                                        .input-group-addon [type="radio"]:not(:checked),
                                                                                                                                        .input-group-addon [type="radio"]:checked,
                                                                                                                                        .input-group-addon [type="checkbox"]:not(:checked),
                                                                                                                                        .input-group-addon [type="checkbox"]:checked {
                                                                                                                                          position: initial;
                                                                                                                                          opacity: 1; }

                                                                                                                                          .invisible {
                                                                                                                                            visibility: hidden !important; }

                                                                                                                                            .hidden-xs-up {
                                                                                                                                              display: none !important; }

                                                                                                                                              @media (max-width: 575px) {
                                                                                                                                                .hidden-xs-down {
                                                                                                                                                  display: none !important; } }

                                                                                                                                                  @media (min-width: 576px) {
                                                                                                                                                    .hidden-sm-up {
                                                                                                                                                      display: none !important; } }

                                                                                                                                                      @media (max-width: 767px) {
                                                                                                                                                        .hidden-sm-down {
                                                                                                                                                          display: none !important; } }

                                                                                                                                                          @media (min-width: 768px) {
                                                                                                                                                            .hidden-md-up {
                                                                                                                                                              display: none !important; } }

                                                                                                                                                              @media (max-width: 991px) {
                                                                                                                                                                .hidden-md-down {
                                                                                                                                                                  display: none !important; } }

                                                                                                                                                                  @media (min-width: 992px) {
                                                                                                                                                                    .hidden-lg-up {
                                                                                                                                                                      display: none !important; } }

                                                                                                                                                                      @media (max-width: 1199px) {
                                                                                                                                                                        .hidden-lg-down {
                                                                                                                                                                          display: none !important; } }

                                                                                                                                                                          @media (min-width: 1200px) {
                                                                                                                                                                            .hidden-xl-up {
                                                                                                                                                                              display: none !important; } }

                                                                                                                                                                              .hidden-xl-down {
                                                                                                                                                                                display: none !important; }

                                                                                                                                                                                .card-inverse .card-blockquote,
                                                                                                                                                                                .card-inverse .card-footer,
                                                                                                                                                                                .card-inverse .card-header,
                                                                                                                                                                                .card-inverse .card-title {
                                                                                                                                                                                  color: #ffffff; }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*============================================================== 
 For Laptop & above all (1650px) 
 ============================================================== */
 @media (min-width: 1650px) {
  .widget-app-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3; }
    .campaign {
      height: 365px !important; } }

/*============================================================== 
 For Laptop & above all (1370px) 
 ============================================================== */
 @media (max-width: 1370px) {
  .widget-app-columns {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2; } }

/*-- ============================================================== 
 Small Desktop & above all (1024px) 
 ============================================================== */
 @media (min-width: 1024px) {
  .page-wrapper {
    margin-left: 240px; }
    .footer {
      left: 240px; } }

      @media (max-width: 1023px) {
        .page-wrapper {
          margin-left: 60px;
          -webkit-transition: 0.2s ease-in;
          -o-transition: 0.2s ease-in;
          transition: 0.2s ease-in; }
          .footer {
            left: 60px; }
            .widget-app-columns {
              -webkit-column-count: 1;
              -moz-column-count: 1;
              column-count: 1; }
              .inbox-center a {
                width: 200px; } }

/*-- ============================================================== 
 Ipad & above all(768px) 
 ============================================================== */
 @media (min-width: 768px) {
  .navbar-header {
    width: 240px;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0; }
    .navbar-header .navbar-brand {
      padding-top: 0px; }
      .material-icon-list-demo .icons div {
        width: 33%;
        padding: 15px;
        display: inline-block;
        line-height: 40px; }
        .mini-sidebar .page-wrapper {
          margin-left: 60px; }
          .mini-sidebar .footer {
            left: 60px; }
            .flex-wrap {
              -ms-flex-wrap: nowrap !important;
              flex-wrap: nowrap !important;
              -webkit-flex-wrap: nowrap !important; } }

/*-- ============================================================== 
 Phone and below ipad(767px) 
 ============================================================== */
 @media (max-width: 767px) {
  /*Header*/
  .topbar {
    position: fixed;
    width: 100%; }
    .topbar .top-navbar {
      padding-right: 15px;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: nowrap;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -webkit-align-items: center; }
      .topbar .top-navbar .navbar-collapse {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%; }
        .topbar .top-navbar .navbar-nav {
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal;
          -webkit-flex-direction: row;
          -ms-flex-direction: row;
          flex-direction: row; }
          .topbar .top-navbar .navbar-nav > .nav-item.show {
            position: static; }
            .topbar .top-navbar .navbar-nav > .nav-item.show .dropdown-menu {
              width: 100%;
              margin-top: 0px; }
              .topbar .top-navbar .navbar-nav > .nav-item > .nav-link {
                padding-left: .50rem;
                padding-right: .50rem; }
                .topbar .top-navbar .navbar-nav .dropdown-menu {
                  position: absolute; }
                  .mega-dropdown .dropdown-menu {
                    height: 480px;
                    overflow: auto; }
                    /*Sidebar and wrapper*/
                    .mini-sidebar .page-wrapper {
                      margin-left: 0px;
                      padding-top: 70px; }
                      .comment-text .comment-footer .action-icons {
                        display: block;
                        padding: 10px 0; }
                        .vtabs .tabs-vertical {
                          width: auto; }
                          /*Footer*/
                          .footer {
                            left: 0px; }
                            .material-icon-list-demo .icons div {
                              width: 100%; }
                              .error-page .footer {
                                position: fixed;
                                bottom: 0px;
                                z-index: 10; }
                                .error-box {
                                  position: relative;
                                  padding-bottom: 60px; }
                                  .error-body {
                                    padding-top: 10%; }
                                    .error-body h1 {
                                      font-size: 100px;
                                      font-weight: 600;
                                      line-height: 100px; }
                                      .login-register {
                                        position: relative;
                                        overflow: hidden; }
                                        .login-box {
                                          width: 90%; }
                                          .login-sidebar {
                                            padding: 10% 0; }
                                            .login-sidebar .login-box {
                                              position: relative; }
                                              /*This is for chat page*/
                                              .chat-main-box .chat-left-aside {
                                                left: -250px;
                                                position: absolute;
                                                -webkit-transition: 0.5s ease-in;
                                                -o-transition: 0.5s ease-in;
                                                transition: 0.5s ease-in;
                                                background: #ffffff; }
                                                .chat-main-box .chat-left-aside.open-pnl {
                                                  left: 0px; }
                                                  .chat-main-box .chat-left-aside .open-panel {
                                                    display: block; }
                                                    .chat-main-box .chat-right-aside {
                                                      width: 100%; }
                                                      /*Timeline*/
                                                      ul.timeline:before {
                                                        left: 40px; }
                                                        ul.timeline > li > .timeline-panel {
                                                          width: calc(100% - 90px); }
                                                          ul.timeline > li > .timeline-badge {
                                                            top: 16px;
                                                            left: 15px;
                                                            margin-left: 0; }
                                                            ul.timeline > li > .timeline-panel {
                                                              float: right; }
                                                              ul.timeline > li > .timeline-panel:before {
                                                                right: auto;
                                                                left: -15px;
                                                                border-right-width: 15px;
                                                                border-left-width: 0; }
                                                                ul.timeline > li > .timeline-panel:after {
                                                                  right: auto;
                                                                  left: -14px;
                                                                  border-right-width: 14px;
                                                                  border-left-width: 0; }
                                                                  /*Contact app page*/
                                                                  .left-aside {
                                                                    width: 100%;
                                                                    position: relative;
                                                                    border: 0px; }
                                                                    .right-aside {
                                                                      margin-left: 0px; }
                                                                      .flex-wrap {
                                                                        -ms-flex-wrap: wrap !important;
                                                                        flex-wrap: wrap !important;
                                                                        -webkit-flex-wrap: wrap !important; }
                                                                        .chat-list li .chat-content {
                                                                          width: calc(100% - 80px); } }

/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: scss
*/
/*Theme Colors*/
/*bootstrap Color*/
/*Light colors*/
/*Normal Color*/
/*Extra Variable*/
/*Preloader*/
.preloader {
  width: 100%;
  height: 100%;
  top: 0px;
  position: fixed;
  z-index: 99999;
  background: #fff; }
  .preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px); }

/* Radio Buttons
========================================================================== */
[type="radio"]:not(:checked),
[type="radio"]:checked {
  position: absolute;
  left: -9999px;
  opacity: 0; }

  [type="radio"]:not(:checked) + label,
  [type="radio"]:checked + label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1rem;
    -webkit-transition: .28s ease;
    -o-transition: .28s ease;
    transition: .28s ease;
    /* webkit (konqueror) browsers */
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }

    [type="radio"] + label:before,
    [type="radio"] + label:after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      margin: 4px;
      width: 16px;
      height: 16px;
      z-index: 0;
      -webkit-transition: .28s ease;
      -o-transition: .28s ease;
      transition: .28s ease; }

      /* Unchecked styles */
      [type="radio"]:not(:checked) + label:before,
      [type="radio"]:not(:checked) + label:after,
      [type="radio"]:checked + label:before,
      [type="radio"]:checked + label:after,
      [type="radio"].with-gap:checked + label:before,
      [type="radio"].with-gap:checked + label:after {
        border-radius: 50%; }

        [type="radio"]:not(:checked) + label:before,
        [type="radio"]:not(:checked) + label:after {
          border: 2px solid #5a5a5a; }

          [type="radio"]:not(:checked) + label:after {
            z-index: -1;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0); }

            /* Checked styles */
            [type="radio"]:checked + label:before {
              border: 2px solid transparent;
              -webkit-animation: ripple 0.2s linear forwards;
              animation: ripple 0.2s linear forwards; }

              [type="radio"]:checked + label:after,
              [type="radio"].with-gap:checked + label:before,
              [type="radio"].with-gap:checked + label:after {
                border: 2px solid #26a69a; }

                [type="radio"]:checked + label:after,
                [type="radio"].with-gap:checked + label:after {
                  background-color: #26a69a;
                  z-index: 0; }

                  [type="radio"]:checked + label:after {
                    -webkit-transform: scale(1.02);
                    -ms-transform: scale(1.02);
                    transform: scale(1.02); }

                    /* Radio With gap */
                    [type="radio"].with-gap:checked + label:after {
                      -webkit-transform: scale(0.5);
                      -ms-transform: scale(0.5);
                      transform: scale(0.5); }

                      /* Focused styles */
                      [type="radio"].tabbed:focus + label:before {
                        -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
                        box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
                        -webkit-animation: ripple 0.2s linear forwards;
                        animation: ripple 0.2s linear forwards; }

                        /* Disabled Radio With gap */
                        [type="radio"].with-gap:disabled:checked + label:before {
                          border: 2px solid rgba(0, 0, 0, 0.26);
                          -webkit-animation: ripple 0.2s linear forwards;
                          animation: ripple 0.2s linear forwards; }

                          [type="radio"].with-gap:disabled:checked + label:after {
                            border: none;
                            background-color: rgba(0, 0, 0, 0.26); }

                            /* Disabled style */
                            [type="radio"]:disabled:not(:checked) + label:before,
                            [type="radio"]:disabled:checked + label:before {
                              background-color: transparent;
                              border-color: rgba(0, 0, 0, 0.26);
                              -webkit-animation: ripple 0.2s linear forwards;
                              animation: ripple 0.2s linear forwards; }

                              [type="radio"]:disabled + label {
                                color: rgba(0, 0, 0, 0.26); }

                                [type="radio"]:disabled:not(:checked) + label:before {
                                  border-color: rgba(0, 0, 0, 0.26); }

                                  [type="radio"]:disabled:checked + label:after {
                                    background-color: rgba(0, 0, 0, 0.26);
                                    border-color: #BDBDBD; }

/* Checkboxes
========================================================================== */
/* CUSTOM CSS CHECKBOXES */
form p {
  margin-bottom: 10px;
  text-align: left; }

  form p:last-child {
    margin-bottom: 0; }

    /* Remove default checkbox */
    [type="checkbox"]:not(:checked),
    [type="checkbox"]:checked {
      position: absolute;
      left: -9999px;
      opacity: 0; }

      [type="checkbox"] {
      /* checkbox aspect */ }

      [type="checkbox"] + label {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        display: inline-block;
        height: 25px;
        line-height: 25px;
        font-size: 1rem;
        -webkit-user-select: none;
        /* webkit (safari, chrome) browsers */
        -moz-user-select: none;
        /* mozilla browsers */
        -khtml-user-select: none;
        /* webkit (konqueror) browsers */
        -ms-user-select: none;
      /* IE10+ */ }

      [type="checkbox"] + label:before,
      [type="checkbox"]:not(.filled-in) + label:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        height: 18px;
        z-index: 0;
        border: 2px solid #5a5a5a;
        border-radius: 1px;
        margin-top: 2px;
        -webkit-transition: .2s;
        -o-transition: .2s;
        transition: .2s; }

        [type="checkbox"]:not(.filled-in) + label:after {
          border: 0;
          -webkit-transform: scale(0);
          -ms-transform: scale(0);
          transform: scale(0); }

          [type="checkbox"]:not(:checked):disabled + label:before {
            border: none;
            background-color: rgba(0, 0, 0, 0.26); }

            [type="checkbox"].tabbed:focus + label:after {
              -webkit-transform: scale(1);
              -ms-transform: scale(1);
              transform: scale(1);
              border: 0;
              border-radius: 50%;
              -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
              box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
              background-color: rgba(0, 0, 0, 0.1); }

              [type="checkbox"]:checked + label:before {
                top: -4px;
                left: -5px;
                width: 12px;
                height: 22px;
                border-top: 2px solid transparent;
                border-left: 2px solid transparent;
                border-right: 2px solid #26a69a;
                border-bottom: 2px solid #26a69a;
                -webkit-transform: rotate(40deg);
                -ms-transform: rotate(40deg);
                transform: rotate(40deg);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transform-origin: 100% 100%;
                -ms-transform-origin: 100% 100%;
                transform-origin: 100% 100%; }

                [type="checkbox"]:checked:disabled + label:before {
                  border-right: 2px solid rgba(0, 0, 0, 0.26);
                  border-bottom: 2px solid rgba(0, 0, 0, 0.26); }

                  /* Indeterminate checkbox */
                  [type="checkbox"]:indeterminate + label:before {
                    top: -11px;
                    left: -12px;
                    width: 10px;
                    height: 22px;
                    border-top: none;
                    border-left: none;
                    border-right: 2px solid #26a69a;
                    border-bottom: none;
                    -webkit-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    transform: rotate(90deg);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-origin: 100% 100%;
                    -ms-transform-origin: 100% 100%;
                    transform-origin: 100% 100%; }

                    [type="checkbox"]:indeterminate:disabled + label:before {
                      border-right: 2px solid rgba(0, 0, 0, 0.26);
                      background-color: transparent; }

                      [type="checkbox"].filled-in + label:after {
                        border-radius: 2px; }

                        [type="checkbox"].filled-in + label:before,
                        [type="checkbox"].filled-in + label:after {
                          content: '';
                          left: 0;
                          position: absolute;
                          /* .1s delay is for check animation */
                          -webkit-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
                          -o-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
                          transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
                          z-index: 1; }

                          [type="checkbox"].filled-in:not(:checked) + label:before {
                            width: 0;
                            height: 0;
                            border: 3px solid transparent;
                            left: 6px;
                            top: 10px;
                            -webkit-transform: rotateZ(37deg);
                            -ms-transform: rotate(37deg);
                            transform: rotateZ(37deg);
                            -webkit-transform-origin: 20% 40%;
                            -ms-transform-origin: 100% 100%;
                            transform-origin: 100% 100%; }

                            [type="checkbox"].filled-in:not(:checked) + label:after {
                              height: 20px;
                              width: 20px;
                              background-color: transparent;
                              border: 2px solid #5a5a5a;
                              top: 0px;
                              z-index: 0; }

                              [type="checkbox"].filled-in:checked + label:before {
                                top: 0;
                                left: 1px;
                                width: 8px;
                                height: 13px;
                                border-top: 2px solid transparent;
                                border-left: 2px solid transparent;
                                border-right: 2px solid #fff;
                                border-bottom: 2px solid #fff;
                                -webkit-transform: rotateZ(37deg);
                                -ms-transform: rotate(37deg);
                                transform: rotateZ(37deg);
                                -webkit-transform-origin: 100% 100%;
                                -ms-transform-origin: 100% 100%;
                                transform-origin: 100% 100%; }

                                [type="checkbox"].filled-in:checked + label:after {
                                  top: 0;
                                  width: 20px;
                                  height: 20px;
                                  border: 2px solid #26a69a;
                                  background-color: #26a69a;
                                  z-index: 0; }

                                  [type="checkbox"].filled-in.tabbed:focus + label:after {
                                    border-radius: 2px;
                                    border-color: #5a5a5a;
                                    background-color: rgba(0, 0, 0, 0.1); }

                                    [type="checkbox"].filled-in.tabbed:checked:focus + label:after {
                                      border-radius: 2px;
                                      background-color: #26a69a;
                                      border-color: #26a69a; }

                                      [type="checkbox"].filled-in:disabled:not(:checked) + label:before {
                                        background-color: transparent;
                                        border: 2px solid transparent; }

                                        [type="checkbox"].filled-in:disabled:not(:checked) + label:after {
                                          border-color: transparent;
                                          background-color: #BDBDBD; }

                                          [type="checkbox"].filled-in:disabled:checked + label:before {
                                            background-color: transparent; }

                                            [type="checkbox"].filled-in:disabled:checked + label:after {
                                              background-color: #BDBDBD;
                                              border-color: #BDBDBD; }

/* Switch
========================================================================== */
.switch,
.switch * {
  -webkit-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -ms-user-select: none; }

  .switch label {
    cursor: pointer; }

    .switch label input[type=checkbox] {
      opacity: 0;
      width: 0;
      height: 0; }

      .switch label input[type=checkbox]:checked + .lever {
        background-color: #84c7c1; }

        .switch label input[type=checkbox]:checked + .lever:after {
          background-color: #26a69a;
          left: 24px; }

          .switch label .lever {
            content: "";
            display: inline-block;
            position: relative;
            width: 40px;
            height: 15px;
            background-color: #818181;
            border-radius: 15px;
            margin-right: 10px;
            -webkit-transition: background 0.3s ease;
            -o-transition: background 0.3s ease;
            transition: background 0.3s ease;
            vertical-align: middle;
            margin: 0 16px; }

            .switch label .lever:after {
              content: "";
              position: absolute;
              display: inline-block;
              width: 21px;
              height: 21px;
              background-color: #F1F1F1;
              border-radius: 21px;
              -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
              box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
              left: -5px;
              top: -3px;
              -webkit-transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
              transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
              -o-transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
              transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
              transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease, -webkit-box-shadow 0.1s ease; }

              input[type=checkbox]:checked:not(:disabled) ~ .lever:active::after,
              input[type=checkbox]:checked:not(:disabled).tabbed:focus ~ .lever::after {
                -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1); }

                input[type=checkbox]:not(:disabled) ~ .lever:active:after,
                input[type=checkbox]:not(:disabled).tabbed:focus ~ .lever::after {
                  -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
                  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08); }

                  .switch input[type=checkbox][disabled] + .lever {
                    cursor: default; }

                    .switch label input[type=checkbox][disabled] + .lever:after,
                    .switch label input[type=checkbox][disabled]:checked + .lever:after {
                      background-color: #BDBDBD; }

                      .scale-up {
                        -webkit-transition: all 0.3s ease;
                        -o-transition: all 0.3s ease;
                        transition: all 0.3s ease;
                        -webkit-transform: scale(0);
                        -ms-transform: scale(0);
                        transform: scale(0);
                        display: inline-block;
                        -webkit-transform-origin: right 0px;
                        -ms-transform-origin: right 0px;
                        transform-origin: right 0px; }

                        .scale-up-left {
                          -webkit-transition: all 0.3s ease;
                          -o-transition: all 0.3s ease;
                          transition: all 0.3s ease;
                          -webkit-transform: scale(0);
                          -ms-transform: scale(0);
                          transform: scale(0);
                          display: inline-block;
                          -webkit-transform-origin: left 0px;
                          -ms-transform-origin: left 0px;
                          transform-origin: left 0px; }

                          .show > .scale-up {
                            -webkit-transform: scale(1);
                            -ms-transform: scale(1);
                            transform: scale(1);
                            -webkit-transform-origin: right 0px;
                            -ms-transform-origin: right 0px;
                            transform-origin: right 0px; }

                            .show > .scale-up-left {
                              -webkit-transform: scale(1);
                              -ms-transform: scale(1);
                              transform: scale(1);
                              -webkit-transform-origin: left 0px;
                              -ms-transform-origin: left 0px;
                              transform-origin: left 0px; }

                              /*panels*/
                              .card {
                                -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
                                box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
                                border-radius: 4px; }

                                .well, pre {
                                  -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
                                  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1); }

                                  .page-titles .justify-content-end:last-child .d-flex {
                                    margin-right: 10px; }

                                    .btn-circle.right-side-toggle {
                                      position: fixed;
                                      bottom: 20px;
                                      right: 20px;
                                      padding: 25px; }

                                      /*Radio button*/
                                      @-webkit-keyframes ripple {
                                        0% {
                                          -webkit-box-shadow: 0px 0px 0px 1px transparent;
                                          box-shadow: 0px 0px 0px 1px transparent; }
                                          50% {
                                            -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
                                            box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1); }
                                            100% {
                                              -webkit-box-shadow: 0px 0px 0px 15px transparent;
                                              box-shadow: 0px 0px 0px 15px transparent; } }
                                              @keyframes ripple {
                                                0% {
                                                  -webkit-box-shadow: 0px 0px 0px 1px transparent;
                                                  box-shadow: 0px 0px 0px 1px transparent; }
                                                  50% {
                                                    -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
                                                    box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1); }
                                                    100% {
                                                      -webkit-box-shadow: 0px 0px 0px 15px transparent;
                                                      box-shadow: 0px 0px 0px 15px transparent; } }

                                                      /*Bootstrap Select*/
                                                      .bootstrap-select.btn-group .dropdown-menu {
                                                        margin-top: -40px;
                                                        -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
                                                        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1); }

                                                        .demo-checkbox label, .demo-radio-button label {
                                                          min-width: 200px;
                                                          margin-bottom: 20px; }

                                                          .demo-swtich .demo-switch-title, .demo-swtich .switch {
                                                            width: 150px;
                                                            margin-bottom: 10px;
                                                            display: inline-block; }

                                                            [type="checkbox"] + label {
                                                              padding-left: 26px;
                                                              height: 25px;
                                                              line-height: 21px;
                                                              font-weight: normal; }

                                                              [type="checkbox"]:checked + label:before {
                                                                top: -4px;
                                                                left: -2px;
                                                                width: 11px;
                                                                height: 19px; }

                                                                [type="checkbox"]:checked.chk-col-red + label:before {
                                                                  border-right: 2px solid #fb3a3a;
                                                                  border-bottom: 2px solid #fb3a3a; }

                                                                  [type="checkbox"]:checked.chk-col-pink + label:before {
                                                                    border-right: 2px solid #E91E63;
                                                                    border-bottom: 2px solid #E91E63; }

                                                                    [type="checkbox"]:checked.chk-col-purple + label:before {
                                                                      border-right: 2px solid #7460ee;
                                                                      border-bottom: 2px solid #7460ee; }

                                                                      [type="checkbox"]:checked.chk-col-deep-purple + label:before {
                                                                        border-right: 2px solid #673AB7;
                                                                        border-bottom: 2px solid #673AB7; }

                                                                        [type="checkbox"]:checked.chk-col-indigo + label:before {
                                                                          border-right: 2px solid #3F51B5;
                                                                          border-bottom: 2px solid #3F51B5; }

                                                                          [type="checkbox"]:checked.chk-col-blue + label:before {
                                                                            border-right: 2px solid #02bec9;
                                                                            border-bottom: 2px solid #02bec9; }

                                                                            [type="checkbox"]:checked.chk-col-light-blue + label:before {
                                                                              border-right: 2px solid #03A9F4;
                                                                              border-bottom: 2px solid #03A9F4; }

                                                                              [type="checkbox"]:checked.chk-col-cyan + label:before {
                                                                                border-right: 2px solid #00BCD4;
                                                                                border-bottom: 2px solid #00BCD4; }

                                                                                [type="checkbox"]:checked.chk-col-teal + label:before {
                                                                                  border-right: 2px solid #009688;
                                                                                  border-bottom: 2px solid #009688; }

                                                                                  [type="checkbox"]:checked.chk-col-green + label:before {
                                                                                    border-right: 2px solid #26c6da;
                                                                                    border-bottom: 2px solid #26c6da; }

                                                                                    [type="checkbox"]:checked.chk-col-light-green + label:before {
                                                                                      border-right: 2px solid #8BC34A;
                                                                                      border-bottom: 2px solid #8BC34A; }

                                                                                      [type="checkbox"]:checked.chk-col-lime + label:before {
                                                                                        border-right: 2px solid #CDDC39;
                                                                                        border-bottom: 2px solid #CDDC39; }

                                                                                        [type="checkbox"]:checked.chk-col-yellow + label:before {
                                                                                          border-right: 2px solid #ffe821;
                                                                                          border-bottom: 2px solid #ffe821; }

                                                                                          [type="checkbox"]:checked.chk-col-amber + label:before {
                                                                                            border-right: 2px solid #FFC107;
                                                                                            border-bottom: 2px solid #FFC107; }

                                                                                            [type="checkbox"]:checked.chk-col-orange + label:before {
                                                                                              border-right: 2px solid #FF9800;
                                                                                              border-bottom: 2px solid #FF9800; }

                                                                                              [type="checkbox"]:checked.chk-col-deep-orange + label:before {
                                                                                                border-right: 2px solid #FF5722;
                                                                                                border-bottom: 2px solid #FF5722; }

                                                                                                [type="checkbox"]:checked.chk-col-brown + label:before {
                                                                                                  border-right: 2px solid #795548;
                                                                                                  border-bottom: 2px solid #795548; }

                                                                                                  [type="checkbox"]:checked.chk-col-grey + label:before {
                                                                                                    border-right: 2px solid #9E9E9E;
                                                                                                    border-bottom: 2px solid #9E9E9E; }

                                                                                                    [type="checkbox"]:checked.chk-col-blue-grey + label:before {
                                                                                                      border-right: 2px solid #607D8B;
                                                                                                      border-bottom: 2px solid #607D8B; }

                                                                                                      [type="checkbox"]:checked.chk-col-black + label:before {
                                                                                                        border-right: 2px solid #000000;
                                                                                                        border-bottom: 2px solid #000000; }

                                                                                                        [type="checkbox"]:checked.chk-col-white + label:before {
                                                                                                          border-right: 2px solid #ffffff;
                                                                                                          border-bottom: 2px solid #ffffff; }

                                                                                                          [type="checkbox"].filled-in:checked + label:after {
                                                                                                            top: 0;
                                                                                                            width: 20px;
                                                                                                            height: 20px;
                                                                                                            border: 2px solid #26a69a;
                                                                                                            background-color: #26a69a;
                                                                                                            z-index: 0; }

                                                                                                            [type="checkbox"].filled-in:checked + label:before {
                                                                                                              border-right: 2px solid #fff !important;
                                                                                                              border-bottom: 2px solid #fff !important; }

                                                                                                              [type="checkbox"].filled-in:checked.chk-col-red + label:after {
                                                                                                                border: 2px solid #fb3a3a;
                                                                                                                background-color: #fb3a3a; }

                                                                                                                [type="checkbox"].filled-in:checked.chk-col-pink + label:after {
                                                                                                                  border: 2px solid #E91E63;
                                                                                                                  background-color: #E91E63; }

                                                                                                                  [type="checkbox"].filled-in:checked.chk-col-purple + label:after {
                                                                                                                    border: 2px solid #7460ee;
                                                                                                                    background-color: #7460ee; }

                                                                                                                    [type="checkbox"].filled-in:checked.chk-col-deep-purple + label:after {
                                                                                                                      border: 2px solid #673AB7;
                                                                                                                      background-color: #673AB7; }

                                                                                                                      [type="checkbox"].filled-in:checked.chk-col-indigo + label:after {
                                                                                                                        border: 2px solid #3F51B5;
                                                                                                                        background-color: #3F51B5; }

                                                                                                                        [type="checkbox"].filled-in:checked.chk-col-blue + label:after {
                                                                                                                          border: 2px solid #02bec9;
                                                                                                                          background-color: #02bec9; }

                                                                                                                          [type="checkbox"].filled-in:checked.chk-col-light-blue + label:after {
                                                                                                                            border: 2px solid #03A9F4;
                                                                                                                            background-color: #03A9F4; }

                                                                                                                            [type="checkbox"].filled-in:checked.chk-col-cyan + label:after {
                                                                                                                              border: 2px solid #00BCD4;
                                                                                                                              background-color: #00BCD4; }

                                                                                                                              [type="checkbox"].filled-in:checked.chk-col-teal + label:after {
                                                                                                                                border: 2px solid #009688;
                                                                                                                                background-color: #009688; }

                                                                                                                                [type="checkbox"].filled-in:checked.chk-col-green + label:after {
                                                                                                                                  border: 2px solid #26c6da;
                                                                                                                                  background-color: #26c6da; }

                                                                                                                                  [type="checkbox"].filled-in:checked.chk-col-light-green + label:after {
                                                                                                                                    border: 2px solid #8BC34A;
                                                                                                                                    background-color: #8BC34A; }

                                                                                                                                    [type="checkbox"].filled-in:checked.chk-col-lime + label:after {
                                                                                                                                      border: 2px solid #CDDC39;
                                                                                                                                      background-color: #CDDC39; }

                                                                                                                                      [type="checkbox"].filled-in:checked.chk-col-yellow + label:after {
                                                                                                                                        border: 2px solid #ffe821;
                                                                                                                                        background-color: #ffe821; }

                                                                                                                                        [type="checkbox"].filled-in:checked.chk-col-amber + label:after {
                                                                                                                                          border: 2px solid #FFC107;
                                                                                                                                          background-color: #FFC107; }

                                                                                                                                          [type="checkbox"].filled-in:checked.chk-col-orange + label:after {
                                                                                                                                            border: 2px solid #FF9800;
                                                                                                                                            background-color: #FF9800; }

                                                                                                                                            [type="checkbox"].filled-in:checked.chk-col-deep-orange + label:after {
                                                                                                                                              border: 2px solid #FF5722;
                                                                                                                                              background-color: #FF5722; }

                                                                                                                                              [type="checkbox"].filled-in:checked.chk-col-brown + label:after {
                                                                                                                                                border: 2px solid #795548;
                                                                                                                                                background-color: #795548; }

                                                                                                                                                [type="checkbox"].filled-in:checked.chk-col-grey + label:after {
                                                                                                                                                  border: 2px solid #9E9E9E;
                                                                                                                                                  background-color: #9E9E9E; }

                                                                                                                                                  [type="checkbox"].filled-in:checked.chk-col-blue-grey + label:after {
                                                                                                                                                    border: 2px solid #607D8B;
                                                                                                                                                    background-color: #607D8B; }

                                                                                                                                                    [type="checkbox"].filled-in:checked.chk-col-black + label:after {
                                                                                                                                                      border: 2px solid #000000;
                                                                                                                                                      background-color: #000000; }

                                                                                                                                                      [type="checkbox"].filled-in:checked.chk-col-white + label:after {
                                                                                                                                                        border: 2px solid #ffffff;
                                                                                                                                                        background-color: #ffffff; }

                                                                                                                                                        [type="radio"]:not(:checked) + label {
                                                                                                                                                          padding-left: 26px;
                                                                                                                                                          height: 25px;
                                                                                                                                                          line-height: 25px;
                                                                                                                                                          font-weight: normal; }

                                                                                                                                                          [type="radio"]:checked + label {
                                                                                                                                                            padding-left: 26px;
                                                                                                                                                            height: 25px;
                                                                                                                                                            line-height: 25px;
                                                                                                                                                            font-weight: normal; }

                                                                                                                                                            [type="radio"].radio-col-red:checked + label:after {
                                                                                                                                                              background-color: #fb3a3a;
                                                                                                                                                              border-color: #fb3a3a;
                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                              [type="radio"].radio-col-pink:checked + label:after {
                                                                                                                                                                background-color: #E91E63;
                                                                                                                                                                border-color: #E91E63;
                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                [type="radio"].radio-col-purple:checked + label:after {
                                                                                                                                                                  background-color: #7460ee;
                                                                                                                                                                  border-color: #7460ee;
                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                  [type="radio"].radio-col-deep-purple:checked + label:after {
                                                                                                                                                                    background-color: #673AB7;
                                                                                                                                                                    border-color: #673AB7;
                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                    [type="radio"].radio-col-indigo:checked + label:after {
                                                                                                                                                                      background-color: #3F51B5;
                                                                                                                                                                      border-color: #3F51B5;
                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                      [type="radio"].radio-col-blue:checked + label:after {
                                                                                                                                                                        background-color: #02bec9;
                                                                                                                                                                        border-color: #02bec9;
                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                        [type="radio"].radio-col-light-blue:checked + label:after {
                                                                                                                                                                          background-color: #03A9F4;
                                                                                                                                                                          border-color: #03A9F4;
                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                          [type="radio"].radio-col-cyan:checked + label:after {
                                                                                                                                                                            background-color: #00BCD4;
                                                                                                                                                                            border-color: #00BCD4;
                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                            [type="radio"].radio-col-teal:checked + label:after {
                                                                                                                                                                              background-color: #009688;
                                                                                                                                                                              border-color: #009688;
                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                              [type="radio"].radio-col-green:checked + label:after {
                                                                                                                                                                                background-color: #26c6da;
                                                                                                                                                                                border-color: #26c6da;
                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                [type="radio"].radio-col-light-green:checked + label:after {
                                                                                                                                                                                  background-color: #8BC34A;
                                                                                                                                                                                  border-color: #8BC34A;
                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                  [type="radio"].radio-col-lime:checked + label:after {
                                                                                                                                                                                    background-color: #CDDC39;
                                                                                                                                                                                    border-color: #CDDC39;
                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                    [type="radio"].radio-col-yellow:checked + label:after {
                                                                                                                                                                                      background-color: #ffe821;
                                                                                                                                                                                      border-color: #ffe821;
                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                      [type="radio"].radio-col-amber:checked + label:after {
                                                                                                                                                                                        background-color: #FFC107;
                                                                                                                                                                                        border-color: #FFC107;
                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                        [type="radio"].radio-col-orange:checked + label:after {
                                                                                                                                                                                          background-color: #FF9800;
                                                                                                                                                                                          border-color: #FF9800;
                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                          [type="radio"].radio-col-deep-orange:checked + label:after {
                                                                                                                                                                                            background-color: #FF5722;
                                                                                                                                                                                            border-color: #FF5722;
                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                            [type="radio"].radio-col-brown:checked + label:after {
                                                                                                                                                                                              background-color: #795548;
                                                                                                                                                                                              border-color: #795548;
                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                              [type="radio"].radio-col-grey:checked + label:after {
                                                                                                                                                                                                background-color: #9E9E9E;
                                                                                                                                                                                                border-color: #9E9E9E;
                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                [type="radio"].radio-col-blue-grey:checked + label:after {
                                                                                                                                                                                                  background-color: #607D8B;
                                                                                                                                                                                                  border-color: #607D8B;
                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                  [type="radio"].radio-col-black:checked + label:after {
                                                                                                                                                                                                    background-color: #000000;
                                                                                                                                                                                                    border-color: #000000;
                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                    [type="radio"].radio-col-white:checked + label:after {
                                                                                                                                                                                                      background-color: #ffffff;
                                                                                                                                                                                                      border-color: #ffffff;
                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-red:checked + label:before {
                                                                                                                                                                                                        border: 2px solid #fb3a3a;
                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-red:checked + label:after {
                                                                                                                                                                                                          background-color: #fb3a3a;
                                                                                                                                                                                                          border: 2px solid #fb3a3a;
                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                          [type="radio"].with-gap.radio-col-pink:checked + label:before {
                                                                                                                                                                                                            border: 2px solid #E91E63;
                                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                            [type="radio"].with-gap.radio-col-pink:checked + label:after {
                                                                                                                                                                                                              background-color: #E91E63;
                                                                                                                                                                                                              border: 2px solid #E91E63;
                                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                              [type="radio"].with-gap.radio-col-purple:checked + label:before {
                                                                                                                                                                                                                border: 2px solid #7460ee;
                                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                [type="radio"].with-gap.radio-col-purple:checked + label:after {
                                                                                                                                                                                                                  background-color: #7460ee;
                                                                                                                                                                                                                  border: 2px solid #7460ee;
                                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                  [type="radio"].with-gap.radio-col-deep-purple:checked + label:before {
                                                                                                                                                                                                                    border: 2px solid #673AB7;
                                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                    [type="radio"].with-gap.radio-col-deep-purple:checked + label:after {
                                                                                                                                                                                                                      background-color: #673AB7;
                                                                                                                                                                                                                      border: 2px solid #673AB7;
                                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-indigo:checked + label:before {
                                                                                                                                                                                                                        border: 2px solid #3F51B5;
                                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-indigo:checked + label:after {
                                                                                                                                                                                                                          background-color: #3F51B5;
                                                                                                                                                                                                                          border: 2px solid #3F51B5;
                                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                          [type="radio"].with-gap.radio-col-blue:checked + label:before {
                                                                                                                                                                                                                            border: 2px solid #02bec9;
                                                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                            [type="radio"].with-gap.radio-col-blue:checked + label:after {
                                                                                                                                                                                                                              background-color: #02bec9;
                                                                                                                                                                                                                              border: 2px solid #02bec9;
                                                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                              [type="radio"].with-gap.radio-col-light-blue:checked + label:before {
                                                                                                                                                                                                                                border: 2px solid #03A9F4;
                                                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                [type="radio"].with-gap.radio-col-light-blue:checked + label:after {
                                                                                                                                                                                                                                  background-color: #03A9F4;
                                                                                                                                                                                                                                  border: 2px solid #03A9F4;
                                                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                  [type="radio"].with-gap.radio-col-cyan:checked + label:before {
                                                                                                                                                                                                                                    border: 2px solid #00BCD4;
                                                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                    [type="radio"].with-gap.radio-col-cyan:checked + label:after {
                                                                                                                                                                                                                                      background-color: #00BCD4;
                                                                                                                                                                                                                                      border: 2px solid #00BCD4;
                                                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-teal:checked + label:before {
                                                                                                                                                                                                                                        border: 2px solid #009688;
                                                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-teal:checked + label:after {
                                                                                                                                                                                                                                          background-color: #009688;
                                                                                                                                                                                                                                          border: 2px solid #009688;
                                                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                          [type="radio"].with-gap.radio-col-green:checked + label:before {
                                                                                                                                                                                                                                            border: 2px solid #26c6da;
                                                                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                            [type="radio"].with-gap.radio-col-green:checked + label:after {
                                                                                                                                                                                                                                              background-color: #26c6da;
                                                                                                                                                                                                                                              border: 2px solid #26c6da;
                                                                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                              [type="radio"].with-gap.radio-col-light-green:checked + label:before {
                                                                                                                                                                                                                                                border: 2px solid #8BC34A;
                                                                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                [type="radio"].with-gap.radio-col-light-green:checked + label:after {
                                                                                                                                                                                                                                                  background-color: #8BC34A;
                                                                                                                                                                                                                                                  border: 2px solid #8BC34A;
                                                                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                  [type="radio"].with-gap.radio-col-lime:checked + label:before {
                                                                                                                                                                                                                                                    border: 2px solid #CDDC39;
                                                                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                    [type="radio"].with-gap.radio-col-lime:checked + label:after {
                                                                                                                                                                                                                                                      background-color: #CDDC39;
                                                                                                                                                                                                                                                      border: 2px solid #CDDC39;
                                                                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-yellow:checked + label:before {
                                                                                                                                                                                                                                                        border: 2px solid #ffe821;
                                                                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-yellow:checked + label:after {
                                                                                                                                                                                                                                                          background-color: #ffe821;
                                                                                                                                                                                                                                                          border: 2px solid #ffe821;
                                                                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                          [type="radio"].with-gap.radio-col-amber:checked + label:before {
                                                                                                                                                                                                                                                            border: 2px solid #FFC107;
                                                                                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                            [type="radio"].with-gap.radio-col-amber:checked + label:after {
                                                                                                                                                                                                                                                              background-color: #FFC107;
                                                                                                                                                                                                                                                              border: 2px solid #FFC107;
                                                                                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                              [type="radio"].with-gap.radio-col-orange:checked + label:before {
                                                                                                                                                                                                                                                                border: 2px solid #FF9800;
                                                                                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                [type="radio"].with-gap.radio-col-orange:checked + label:after {
                                                                                                                                                                                                                                                                  background-color: #FF9800;
                                                                                                                                                                                                                                                                  border: 2px solid #FF9800;
                                                                                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                  [type="radio"].with-gap.radio-col-deep-orange:checked + label:before {
                                                                                                                                                                                                                                                                    border: 2px solid #FF5722;
                                                                                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                    [type="radio"].with-gap.radio-col-deep-orange:checked + label:after {
                                                                                                                                                                                                                                                                      background-color: #FF5722;
                                                                                                                                                                                                                                                                      border: 2px solid #FF5722;
                                                                                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-brown:checked + label:before {
                                                                                                                                                                                                                                                                        border: 2px solid #795548;
                                                                                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-brown:checked + label:after {
                                                                                                                                                                                                                                                                          background-color: #795548;
                                                                                                                                                                                                                                                                          border: 2px solid #795548;
                                                                                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                          [type="radio"].with-gap.radio-col-grey:checked + label:before {
                                                                                                                                                                                                                                                                            border: 2px solid #9E9E9E;
                                                                                                                                                                                                                                                                            -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                            animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                            [type="radio"].with-gap.radio-col-grey:checked + label:after {
                                                                                                                                                                                                                                                                              background-color: #9E9E9E;
                                                                                                                                                                                                                                                                              border: 2px solid #9E9E9E;
                                                                                                                                                                                                                                                                              -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                              animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                              [type="radio"].with-gap.radio-col-blue-grey:checked + label:before {
                                                                                                                                                                                                                                                                                border: 2px solid #607D8B;
                                                                                                                                                                                                                                                                                -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                [type="radio"].with-gap.radio-col-blue-grey:checked + label:after {
                                                                                                                                                                                                                                                                                  background-color: #607D8B;
                                                                                                                                                                                                                                                                                  border: 2px solid #607D8B;
                                                                                                                                                                                                                                                                                  -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                  animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                  [type="radio"].with-gap.radio-col-black:checked + label:before {
                                                                                                                                                                                                                                                                                    border: 2px solid #000000;
                                                                                                                                                                                                                                                                                    -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                    animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                    [type="radio"].with-gap.radio-col-black:checked + label:after {
                                                                                                                                                                                                                                                                                      background-color: #000000;
                                                                                                                                                                                                                                                                                      border: 2px solid #000000;
                                                                                                                                                                                                                                                                                      -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                      animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                      [type="radio"].with-gap.radio-col-white:checked + label:before {
                                                                                                                                                                                                                                                                                        border: 2px solid #ffffff;
                                                                                                                                                                                                                                                                                        -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                        animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                        [type="radio"].with-gap.radio-col-white:checked + label:after {
                                                                                                                                                                                                                                                                                          background-color: #ffffff;
                                                                                                                                                                                                                                                                                          border: 2px solid #ffffff;
                                                                                                                                                                                                                                                                                          -webkit-animation: ripple 0.2s linear forwards;
                                                                                                                                                                                                                                                                                          animation: ripple 0.2s linear forwards; }

                                                                                                                                                                                                                                                                                          .switch label {
                                                                                                                                                                                                                                                                                            font-weight: normal;
                                                                                                                                                                                                                                                                                            font-size: 13px; }
                                                                                                                                                                                                                                                                                            .switch label .lever {
                                                                                                                                                                                                                                                                                              margin: 0 14px; }
                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-red:active:after {
                                                                                                                                                                                                                                                                                                -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(251, 58, 58, 0.1);
                                                                                                                                                                                                                                                                                                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(251, 58, 58, 0.1); }
                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked + .lever.switch-col-red {
                                                                                                                                                                                                                                                                                                  background-color: rgba(251, 58, 58, 0.5); }
                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-red:after {
                                                                                                                                                                                                                                                                                                    background-color: #fb3a3a; }
                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-pink:active:after {
                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1);
                                                                                                                                                                                                                                                                                                      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1); }
                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked + .lever.switch-col-pink {
                                                                                                                                                                                                                                                                                                        background-color: rgba(233, 30, 99, 0.5); }
                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-pink:after {
                                                                                                                                                                                                                                                                                                          background-color: #E91E63; }
                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-purple:active:after {
                                                                                                                                                                                                                                                                                                            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(116, 96, 238, 0.1);
                                                                                                                                                                                                                                                                                                            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(116, 96, 238, 0.1); }
                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked + .lever.switch-col-purple {
                                                                                                                                                                                                                                                                                                              background-color: rgba(116, 96, 238, 0.5); }
                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked + .lever.switch-col-purple:after {
                                                                                                                                                                                                                                                                                                                background-color: #7460ee; }
                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-deep-purple:active:after {
                                                                                                                                                                                                                                                                                                                  -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1);
                                                                                                                                                                                                                                                                                                                  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1); }
                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-deep-purple {
                                                                                                                                                                                                                                                                                                                    background-color: rgba(103, 58, 183, 0.5); }
                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked + .lever.switch-col-deep-purple:after {
                                                                                                                                                                                                                                                                                                                      background-color: #673AB7; }
                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-indigo:active:after {
                                                                                                                                                                                                                                                                                                                        -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1);
                                                                                                                                                                                                                                                                                                                        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1); }
                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-indigo {
                                                                                                                                                                                                                                                                                                                          background-color: rgba(63, 81, 181, 0.5); }
                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked + .lever.switch-col-indigo:after {
                                                                                                                                                                                                                                                                                                                            background-color: #3F51B5; }
                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-blue:active:after {
                                                                                                                                                                                                                                                                                                                              -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(2, 190, 201, 0.1);
                                                                                                                                                                                                                                                                                                                              box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(2, 190, 201, 0.1); }
                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked + .lever.switch-col-blue {
                                                                                                                                                                                                                                                                                                                                background-color: rgba(2, 190, 201, 0.5); }
                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked + .lever.switch-col-blue:after {
                                                                                                                                                                                                                                                                                                                                  background-color: #02bec9; }
                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-light-blue:active:after {
                                                                                                                                                                                                                                                                                                                                    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1);
                                                                                                                                                                                                                                                                                                                                    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1); }
                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked + .lever.switch-col-light-blue {
                                                                                                                                                                                                                                                                                                                                      background-color: rgba(3, 169, 244, 0.5); }
                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked + .lever.switch-col-light-blue:after {
                                                                                                                                                                                                                                                                                                                                        background-color: #03A9F4; }
                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-cyan:active:after {
                                                                                                                                                                                                                                                                                                                                          -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1);
                                                                                                                                                                                                                                                                                                                                          box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1); }
                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked + .lever.switch-col-cyan {
                                                                                                                                                                                                                                                                                                                                            background-color: rgba(0, 188, 212, 0.5); }
                                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked + .lever.switch-col-cyan:after {
                                                                                                                                                                                                                                                                                                                                              background-color: #00BCD4; }
                                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-teal:active:after {
                                                                                                                                                                                                                                                                                                                                                -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1);
                                                                                                                                                                                                                                                                                                                                                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1); }
                                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked + .lever.switch-col-teal {
                                                                                                                                                                                                                                                                                                                                                  background-color: rgba(0, 150, 136, 0.5); }
                                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-teal:after {
                                                                                                                                                                                                                                                                                                                                                    background-color: #009688; }
                                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-green:active:after {
                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 198, 218, 0.1);
                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 198, 218, 0.1); }
                                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked + .lever.switch-col-green {
                                                                                                                                                                                                                                                                                                                                                        background-color: rgba(38, 198, 218, 0.5); }
                                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-green:after {
                                                                                                                                                                                                                                                                                                                                                          background-color: #26c6da; }
                                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-light-green:active:after {
                                                                                                                                                                                                                                                                                                                                                            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1);
                                                                                                                                                                                                                                                                                                                                                            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1); }
                                                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked + .lever.switch-col-light-green {
                                                                                                                                                                                                                                                                                                                                                              background-color: rgba(139, 195, 74, 0.5); }
                                                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked + .lever.switch-col-light-green:after {
                                                                                                                                                                                                                                                                                                                                                                background-color: #8BC34A; }
                                                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-lime:active:after {
                                                                                                                                                                                                                                                                                                                                                                  -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1);
                                                                                                                                                                                                                                                                                                                                                                  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-lime {
                                                                                                                                                                                                                                                                                                                                                                    background-color: rgba(205, 220, 57, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked + .lever.switch-col-lime:after {
                                                                                                                                                                                                                                                                                                                                                                      background-color: #CDDC39; }
                                                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-yellow:active:after {
                                                                                                                                                                                                                                                                                                                                                                        -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1);
                                                                                                                                                                                                                                                                                                                                                                        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-yellow {
                                                                                                                                                                                                                                                                                                                                                                          background-color: rgba(255, 232, 33, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked + .lever.switch-col-yellow:after {
                                                                                                                                                                                                                                                                                                                                                                            background-color: #ffe821; }
                                                                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-amber:active:after {
                                                                                                                                                                                                                                                                                                                                                                              -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1);
                                                                                                                                                                                                                                                                                                                                                                              box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked + .lever.switch-col-amber {
                                                                                                                                                                                                                                                                                                                                                                                background-color: rgba(255, 193, 7, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked + .lever.switch-col-amber:after {
                                                                                                                                                                                                                                                                                                                                                                                  background-color: #FFC107; }
                                                                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-orange:active:after {
                                                                                                                                                                                                                                                                                                                                                                                    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked + .lever.switch-col-orange {
                                                                                                                                                                                                                                                                                                                                                                                      background-color: rgba(255, 152, 0, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked + .lever.switch-col-orange:after {
                                                                                                                                                                                                                                                                                                                                                                                        background-color: #FF9800; }
                                                                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-deep-orange:active:after {
                                                                                                                                                                                                                                                                                                                                                                                          -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                          box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked + .lever.switch-col-deep-orange {
                                                                                                                                                                                                                                                                                                                                                                                            background-color: rgba(255, 87, 34, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked + .lever.switch-col-deep-orange:after {
                                                                                                                                                                                                                                                                                                                                                                                              background-color: #FF5722; }
                                                                                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-brown:active:after {
                                                                                                                                                                                                                                                                                                                                                                                                -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked + .lever.switch-col-brown {
                                                                                                                                                                                                                                                                                                                                                                                                  background-color: rgba(121, 85, 72, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-brown:after {
                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #795548; }
                                                                                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-grey:active:after {
                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked + .lever.switch-col-grey {
                                                                                                                                                                                                                                                                                                                                                                                                        background-color: rgba(158, 158, 158, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-grey:after {
                                                                                                                                                                                                                                                                                                                                                                                                          background-color: #9E9E9E; }
                                                                                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-blue-grey:active:after {
                                                                                                                                                                                                                                                                                                                                                                                                            -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                            box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                                            .switch label input[type=checkbox]:checked + .lever.switch-col-blue-grey {
                                                                                                                                                                                                                                                                                                                                                                                                              background-color: rgba(96, 125, 139, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                                              .switch label input[type=checkbox]:checked + .lever.switch-col-blue-grey:after {
                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #607D8B; }
                                                                                                                                                                                                                                                                                                                                                                                                                .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-black:active:after {
                                                                                                                                                                                                                                                                                                                                                                                                                  -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                  box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                                                  .switch label input[type=checkbox]:checked + .lever.switch-col-black {
                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: rgba(0, 0, 0, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                                                    .switch label input[type=checkbox]:checked + .lever.switch-col-black:after {
                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: #000000; }
                                                                                                                                                                                                                                                                                                                                                                                                                      .switch label input[type=checkbox]:checked:not(:disabled) ~ .lever.switch-col-white:active:after {
                                                                                                                                                                                                                                                                                                                                                                                                                        -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1); }
                                                                                                                                                                                                                                                                                                                                                                                                                        .switch label input[type=checkbox]:checked + .lever.switch-col-white {
                                                                                                                                                                                                                                                                                                                                                                                                                          background-color: rgba(255, 255, 255, 0.5); }
                                                                                                                                                                                                                                                                                                                                                                                                                          .switch label input[type=checkbox]:checked + .lever.switch-col-white:after {

                                                                                                                                                                                                                                                                                                                                                                                                                            background-color: #ffffff; }
                                                                                                                                                                                                                                                                                                                                                                                                                            .sidebar-nav > ul > li > a.active {
                                                                                                                                                                                                                                                                                                                                                                                                                              font-weight: 400;
                                                                                                                                                                                                                                                                                                                                                                                                                              color: #ffffff;
                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                            .user-profile .profile-img img {
                                                                                                                                                                                                                                                                                                                                                                                                                              width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                              height: 50px;
                                                                                                                                                                                                                                                                                                                                                                                                                              border-radius: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                            .sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li > a:hover i {
                                                                                                                                                                                                                                                                                                                                                                                                                              color: #f1f8f9;
                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                            .topbar .top-navbar .navbar-header .navbar-brand .dark-logo {
                                                                                                                                                                                                                                                                                                                                                                                                                              display: inline-block;
                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                            .sidebar-nav > ul > li.active > a i {
                                                                                                                                                                                                                                                                                                                                                                                                                              color: #f0f4f5;
                                                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                                                            @media (min-width: 768px){
                                                                                                                                                                                                                                                                                                                                                                                                                              .mini-sidebar .sidebar-nav #sidebarnav > li > ul {
                                                                                                                                                                                                                                                                                                                                                                                                                                position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                left: 60px;
                                                                                                                                                                                                                                                                                                                                                                                                                                top: 45px;
                                                                                                                                                                                                                                                                                                                                                                                                                                width: 200px;
                                                                                                                                                                                                                                                                                                                                                                                                                                z-index: 1001;
                                                                                                                                                                                                                                                                                                                                                                                                                                background: #8ce4e4;
                                                                                                                                                                                                                                                                                                                                                                                                                                display: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                padding-left: 1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                }}
                                                                                                                                                                                                                                                                                                                                                                                                                                a.link {
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: #e5eaec;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .topbar .profile-pic {
                                                                                                                                                                                                                                                                                                                                                                                                                                  width: 40px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  height: 40px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  border-radius: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .sidebar-nav > ul > li > a:hover i {
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: #26c6da;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                  text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: #26c6da;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .sidebar-nav ul li a {
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: #607d8b;
                                                                                                                                                                                                                                                                                                                                                                                                                                  /* padding: 8px 35px 8px 15px; */
                                                                                                                                                                                                                                                                                                                                                                                                                                  display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-size: 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  text-align: left;
                                                                                                                                                                                                                                                                                                                                                                                                                                  border-radius: 4px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  white-space: normal;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .table-responsive {
                                                                                                                                                                                                                                                                                                                                                                                                                                  width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                  overflow-x: unset;
                                                                                                                                                                                                                                                                                                                                                                                                                                  -ms-overflow-style: -ms-autohiding-scrollbar;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .paging_simple_numbers .pagination .paginate_button a {
                                                                                                                                                                                                                                                                                                                                                                                                                                  /* padding: 5px 10px; */
                                                                                                                                                                                                                                                                                                                                                                                                                                  border-radius: 4px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  border: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .pagination > li > a, .pagination > li > span {
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: #ffffff;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                .dataTables_paginate a {
                                                                                                                                                                                                                                                                                                                                                                                                                                  padding: 6px 9px !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                  background: #1e88e5 !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                  border-color: #1d1818 !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                table.dataTable thead .sorting:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                  content: "\f0dc";
                                                                                                                                                                                                                                                                                                                                                                                                                                  margin-left: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-family: fontawesome !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                  /* font-size: 10px; */
                                                                                                                                                                                                                                                                                                                                                                                                                                  cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                  color: rgba(23, 14, 14, 0.5);
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                  position: absolute;
                                                                                                                                                                                                                                                                                                                                                                                                                                  bottom: 13px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  right: 8px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-family: 'Glyphicons Halflings';
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-size: 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  /* opacity: 0.5; */
                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                table.dataTable thead .sorting_asc:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                  content: "\f0de";
                                                                                                                                                                                                                                                                                                                                                                                                                                  margin-left: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-family: fontawesome;
                                                                                                                                                                                                                                                                                                                                                                                                                                  cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                table.dataTable thead .sorting_desc:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                  content: "\f0dd";
                                                                                                                                                                                                                                                                                                                                                                                                                                  margin-left: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                  font-family: fontawesome;
                                                                                                                                                                                                                                                                                                                                                                                                                                  cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                                                                                                                @media (min-width: 576px){
                                                                                                                                                                                                                                                                                                                                                                                                                                  .form-inline label {
                                                                                                                                                                                                                                                                                                                                                                                                                                    display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }}
                                                                                                                                                                                                                                                                                                                                                                                                                                    .sidebar-nav ul li a.active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: 500;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #26c6da;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .sidebar-nav ul li .lala.active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: 500;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #ffffff;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.link {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #181819;

                                                                                                                                                                                                                                                                                                                                                                                                                                      background: #f2f6f8;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .sidebar-footer a:hover {

                                                                                                                                                                                                                                                                                                                                                                                                                                      background: #f2f6f8;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px rgba(0, 0, 0, 0.01);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px rgba(0, 0, 0, 0.01);
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block .block,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .side-content .block {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-header {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 15px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-header:before,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-header:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                      content: " ";
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: table;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-header:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                      clear: both;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-title {
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-size: 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-transform: uppercase;
                                                                                                                                                                                                                                                                                                                                                                                                                                      line-height: 1.2;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-title.text-normal {
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-transform: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-title small {
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-size: 13px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: normal;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-transform: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content {

                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: 0 auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 20px 20px 1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      max-width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                      overflow-x: visible;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content p,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .push,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .block,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .items-push > div {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .items-push-2x > div {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 40px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .items-push-3x > div {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 60px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content.block-content-full {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content.block-content-full .pull-b {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: -20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .pull-t {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-top: -20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .pull-r-l {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-right: -20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-left: -20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content .pull-b {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: -1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content.block-content-mini {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-top: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content.block-content-mini.block-content-full {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    @media screen and (min-width: 1200px) {
                                                                                                                                                                                                                                                                                                                                                                                                                                      .block-content.block-content-narrow {
                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-left: 10%;
                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-right: 10%;
                                                                                                                                                                                                                                                                                                                                                                                                                                      }
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-full .block-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-full .block-content.block-content-mini {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-table {
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-table td {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      vertical-align: middle;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-bordered {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 1px solid #e9e9e9;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-bordered > .block-header {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-bottom: 1px solid #e9e9e9;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-rounded {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-radius: 4px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-rounded > .block-header {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top-right-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top-left-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-rounded > .block-content:first-child {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top-right-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top-left-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-rounded > .block-content:last-child {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-bottom-right-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-bottom-left-radius: 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #646464;
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: normal;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: all 0.15s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: all 0.15s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #646464;
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: .9;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover1:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover1:active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px rgba(0, 0, 0, 0.01);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px rgba(0, 0, 0, 0.01);
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover2:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: translateY(-2px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover2:active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transform: translateY(-1px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-transform: translateY(-1px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      transform: translateY(-1px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.05);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.05);
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover3:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: #1e88e51f;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 0 12px rgba(0, 0, 0, 0.75);
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 10;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    a.block.block-link-hover3:active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs {
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: #f9f9f9;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-bottom: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-right > li {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-justified > li > a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-bottom: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li > a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-right: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-top: 12px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 12px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #646464;
                                                                                                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 1px solid transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-radius: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li > a:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #5c90d2;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li.active > a,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li.active > a:hover,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs > li.active > a:focus {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #646464;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt {
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-bottom: 1px solid #e9e9e9;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt > li > a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: all 0.15s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: all 0.15s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt > li > a:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px #5c90d2;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px #5c90d2;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt > li.active > a,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt > li.active > a:hover,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block > .nav-tabs.nav-tabs-alt > li.active > a:focus {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 0 2px #5c90d2;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 0 2px #5c90d2;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block .block-content.tab-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                      overflow: hidden;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options-simple {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: -3px 0 -3px 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 1px 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      min-height: 24px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options-simple.block-options-simple-left {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: left;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-right: 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options-simple.block-options-simple-left + .block-title {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: -3px 0 -3px 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      height: 24px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      list-style: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options:before,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                      content: " ";
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: table;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options:after {
                                                                                                                                                                                                                                                                                                                                                                                                                                      clear: both;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options.block-options-left {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: left;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-right: 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options.block-options-left + .block-title {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li {
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: inline-block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: 0 2px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > a,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > button {
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 2px 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #999999;
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: .6;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-themed > .block-header .block-options > li > a,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-themed > .block-header .block-options > li > button {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > a:hover,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > button:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > a:active,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > button:active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: .6;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > span {
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 2px 3px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block.block-themed > .block-header .block-options > li > span {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > a:focus {
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li > button {
                                                                                                                                                                                                                                                                                                                                                                                                                                      background: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li.active > a,
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-options > li.open > button {
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      opacity: 1;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .asas {
                                                                                                                                                                                                                                                                                                                                                                                                                                      vertical-align: middle;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-style: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 64px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      height: 64px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .block-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: 0 auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 30px 20px 1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      max-width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                      overflow-x: visible;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: opacity 0.2s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_filter input {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-right: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-size: 0 2px, 100% 1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-position: center bottom, center calc(100% - 1px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -o-transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-radius: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-left: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_length select {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-right: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -webkit-gradient(linear, left top, left bottom, from(#009efb), to(#009efb)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -webkit-linear-gradient(#009efb, #009efb), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: -o-linear-gradient(#009efb, #009efb), -o-linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-image: linear-gradient(#009efb, #009efb), linear-gradient(#d9d9d9, #d9d9d9);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-size: 0 2px, 100% 1px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-position: center bottom, center calc(100% - 1px);
                                                                                                                                                                                                                                                                                                                                                                                                                                      background-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -o-transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      transition: background 0s ease-out;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .navbar-right {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-right: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-top: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    @media (max-width: 767px){
                                                                                                                                                                                                                                                                                                                                                                                                                                      .topbar ul.dropdown-user {
                                                                                                                                                                                                                                                                                                                                                                                                                                        padding: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                        width: 100%;

                                                                                                                                                                                                                                                                                                                                                                                                                                      }
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    table {
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-collapse: separate;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 1px solid #80808030;
                                                                                                                                                                                                                                                                                                                                                                                                                                      /* border: 20px; */
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
                                                                                                                                                                                                                                                                                                                                                                                                                                      cursor: default;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #67757c;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 1px solid #ddd;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_wrapper .dataTables_paginate .paginate_button {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-sizing: border-box;
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-sizing: border-box;
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: inline-block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      min-width: 1.5em;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 0.5em 1em;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-align: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #67757c;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 1px solid #ddd;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    [role=button], a, area, button, input, label, select, summary, textarea {
                                                                                                                                                                                                                                                                                                                                                                                                                                      -ms-touch-action: manipulation;
                                                                                                                                                                                                                                                                                                                                                                                                                                      touch-action: manipulation;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_wrapper .dataTables_paginate {
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-align: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-top: 0.25em;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    div.dataTables_wrapper div.dataTables_filter input {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-left: 0.5em;
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: inline-block;
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 180px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      /* width: auto; */
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .paging_simple_numbers .pagination .paginate_button a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      /* padding: 5px 10px; */
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-radius: 4px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #67757c;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_paginate a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 6px 9px !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                      background: #ffffff !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-color: #1d1818 !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .paging_simple_numbers .pagination .paginate_button.active a, .paging_simple_numbers .pagination .paginate_button:hover a {
                                                                                                                                                                                                                                                                                                                                                                                                                                      color: #1e88e5;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .page-titles {
                                                                                                                                                                                                                                                                                                                                                                                                                                      background: #ffffff;
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin: 0 -30px 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 0px 30px 10px 30px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      -webkit-box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                      box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .container-fluid {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding: 0 10px 25px 15px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dataTables_wrapper {
                                                                                                                                                                                                                                                                                                                                                                                                                                      margin-top: -30px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-top: 0px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-sm-12"]:last-child {
                                                                                                                                                                                                                                                                                                                                                                                                                                      padding-right: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                      overflow-x: scroll;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .img-responsive {
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                      height: 400px;
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: inline-block;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .btn-group-justified>.btn, .btn-group-justified>.btn-group {
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: table-cell;
                                                                                                                                                                                                                                                                                                                                                                                                                                      float: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 1%;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .btn-group-justified {
                                                                                                                                                                                                                                                                                                                                                                                                                                      display: table;
                                                                                                                                                                                                                                                                                                                                                                                                                                      width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                      table-layout: fixed;
                                                                                                                                                                                                                                                                                                                                                                                                                                      border-collapse: separate;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                    .dropify-wrapper {
                                                                                                                                                                                                                                                                                                                                                                                                                                      height: 120px;
                                                                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                                                                  </style>
                                                                                                                                                                                                                                                                                                                                                                                                                                </head>
