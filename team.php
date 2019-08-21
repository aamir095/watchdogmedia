<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <title>WMS</title>

    <style>

        .row.content{
            border-top: 1px solid rgba(128, 128, 128, 0.24);

            overflow: hidden;
        }

        @media only screen and (max-width: 768px) {

            .row.content{
                text-align: justify;
            }



            .row.content div.team-title{
                text-align: center;
                margin-top: 15px;
            }
            


        }


        /*.row.content .col-md-3,.col-md-9{*/
            /*padding-bottom: 1000px;*/
            /*margin-bottom: -1000px;*/
            /*height: 100%;*/
        /*}*/


        .row.content .col-md-3 > img{
            margin-top: 10%;
        }




        p.intro-text {
            font-family: 'Droid Serif', Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 30px;
            font-weight: normal;
            font-style: italic;
        }


    </style>




</head>
<body  onLoad="checkStart('vid');">





<!----------------------------Header-----------------------------------
------------------------------------------------------------------------->

<?php include'layouts/header.php'; ?> 

<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-sm hidden-md hidden-lg">
    <div class="container">
        <ul class="text-center no-padding">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><a href="">About Us</a></li>
            <li>/</li>
            <li class="active">Staff Members</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->


<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-xs">
    <div class="container">
        <ul class="pull-left">
            <li class="active" >Staff Members</li>
        </ul>
        <ul class="pull-right">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><a href="television_programme.html">About Us</a></li>
            <li>/</li>
            <li class="active">Staff Members</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->


  <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>404 error</h2>
          </div>
  
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

    <!-- End Header -->
    
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">
          <div class="error-page">
            <h1>404</h1>
            <h3>File not Found</h3>
            <p>We're sorry, but the page you were looking for doesn't exist.</p>
            <div class="text-center"><a href="index.html" class="btn-system btn-small">Back To Home</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
<?php  include"layouts/footer.php";?>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/video.js"></script>



</body>
</html>