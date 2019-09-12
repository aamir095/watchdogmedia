<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
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


    </style>
</head>
<body>


<!----------------------------Header-----------------------------------
------------------------------------------------------------------------->
<?php include'layouts/header.php'; 
      if (isset($_POST['submit']))
    {
      $msg='Name:' . $_POST['name']."\n"
        .'Email:'.$_POST['email']."\n"
        .'Message:'.$_POST['message'];
mail('info@watchdogmedia.com.np','Sample header',$msg);
      if(insertMessage($conn,$_POST))
      {
      showMsg('We received your query.','success');
      displayMsg();
      }  
    }
?> 
<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-sm hidden-md hidden-lg">
    <div class="container">
        <ul class="text-center no-padding">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->


<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-xs">
    <div class="container">
        <ul class="pull-left">
            <li class="active">Contact Us</li>
        </ul>
        <ul class="pull-right">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="active">Contact</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->

<!----------------------------Main-----------------------------------

------------------------------------------------------------------------->



<div id="content" class="no-padding">

    <section class="maring-top-80 margin-bottom-80">

        <div class="container">
            <div class="row">

                <div class="container">



                <div class="col-md-8">

                    <h2 class="box-title">Contact us</h2>
                    <div class="tiny-border"></div>


                        <form action="" class="wpcf7-form margin-bottom-30" method="POST">
                            <div class="col-one-third">
                                <input type="text" name="name" required placeholder="Your Name">
                            </div>
                            <div class="col-one-third margin-one-third">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-one-third">
                                <input type="text" name="telephone" required placeholder="Your Phone">
                                </div>
                                    
                            <div class="col-full"><textarea name="message" placeholder="Your Message"></textarea></div>
                            <div class="clearfix"></div>
                            <input type="hidden" name="view" value="1">
                            <div class="text-center">
                                <div class="divider-single"></div>
                                <button value="submit" name="submit"class="btn btn-primary btn-big">Send Email</button>
                            </div>
                        </form>
                    </div>

                <div class="col-md-4">
                    <img src="assets/img/madhuri_sadan.jpg" class="img-responsive" alt=""/>
                </div>


                </div>

            </div>
        </div>

    </section>


</div>


<section class="map" style="padding: 0;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.710191545514!2d85.28940031462628!3d27.695350732626846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1867a1f1ebb9%3A0x3fe38bd95263dcf8!2sWatchdog+Media+Services+Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1464067579128"  frameborder="0" style="border:0; width: 100%; height: 350px; padding: 0;" allowfullscreen></iframe>
</section>

<?php  include"layouts/footer.php";?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>