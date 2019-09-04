<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,500,700,700italic' rel='stylesheet' type='text/css'>
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

        .row.content {
            border-top: 1px solid rgba(128, 128, 128, 0.24);

            overflow: hidden;
        }

        .row.content .col-md-9 h4 {
            margin-top: 15px;
        }

        .row.content .col-md-9 p{
            text-align: justify;
        }


        .row.content .col-md-3 > img {
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
<body>

<div class="container">


</div>
</div>


<!----------------------------Header-----------------------------------
------------------------------------------------------------------------->
<?php include'layouts/header.php'; ?>
<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-sm hidden-md hidden-lg">
    <div class="container">
        <ul class="text-center no-padding">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="active">Television Programmes</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->

<!-- Breadcrumbs -->
<div class="breadcrumbs style1 hidden-xs">
    <div class="container">
        <ul class="pull-left">
            <li class="active" >Television Programmes</li>
        </ul>
        <ul class="pull-right">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="active">Television Programmes</li>
        </ul>
    </div>
</div>
<!-- end Breadcrumbs -->


<!----------------------------Main-----------------------------------

------------------------------------------------------------------------->


<div id="content" class="no-padding">

    <!-- section begin -->
    <section class="no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <p class="intro-text">Television programme production and dissemination is one of the key areas of WMS. It has been continuing this task since its inception period. The organization has experiences working with dozens of TV channels of Nepal in this regard. Through these TV programmes the organizations has been contributing to aware, advocate and educate the people about various issues of development. The organization has long-term partnership with Nepal Television, Avenues Television and Sagarmatha Television. We are continuously producing and disseminating regular TV programmes.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-partner" class="">
        <!--<div class="container">-->

<?php $programinpages=getProgramInPage($conn);
    foreach ($programinpages as $key => $programinpage):
    ?>

        <div class="row content" id="<?php echo $programinpage['tv_title'];?>">
            
            <div class="container">
                <div class="col-md-3">
                <img src="admin/uploads/<?php echo $programinpage['image_path']; ?>" class="img-responsive" alt="" />
            </div>



                <div class="col-md-9">
                    <h4 class="blue"><?php echo $programinpage['tv_title'];?></h4>

                    <p><?php echo $programinpage['tv_description'];?></p>

                </div>

                 
            </div>
           
         
        </div>
 <?php endforeach;?>
        




</section>


</div>

<?php  include"layouts/footer.php";?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>