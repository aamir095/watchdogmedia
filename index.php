<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="engine1/style.css"/>

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=59941d87ea00a30012ce6987&product=social-ab' async='async'></script>



    <title>WMS</title>

</head>
<body style="margin: auto;">


<!----------------------------Header-----------------------------------
------------------------------------------------------------------------->
<?php include'layouts/header.php'; 
      $images=getAllActiveImages($conn);
      foreach ($images as $key => $image)
?> 



<!----------------------------Carousel-----------------------------------

------------------------------------------------------------------------->

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">   
    <div class="ws_images">
        <ul>
        <?php foreach ($images as $key => $image): ?>
            
            <li><img src="admin/uploads/<?php echo $image['image_path'];?>" alt="<?php echo ++$key;?>"
                     title="<?php  echo $image['image_title']; ?>"
                     id="wows1_<?php echo ++$key;?>"/></li>
            

        
         <?php endforeach; ?>
         </ul>
    </div>
    <div class="ws_bullets">
      <div>
        <?php foreach ($images as $key => $image): ?>
            
            
                <a href="#" title="<?php echo ++$key;?>"><span><?php echo ++$key;?></span></a>
        
         <?php endforeach; ?>
      </div>  
       
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"></div>
    <div class="ws_shadow"></div>


</div>
<!-- End WOWSlider.com BODY section -->


<!----------------------------Main-----------------------------------

------------------------------------------------------------------------->


<div id="content" class="no-padding">

    <!-- section begin -->
    <section id="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--<iframe id="myVideo" width="100%" height="310px" src="http://www.youtube.com/embed/1D_tLbCi5h8?rel=0&amp&autoplay=1&showinfo=0&controls=0&enablejsapi=1">-->
                    <!--</iframe>-->
                    <!--<div class="youtube-element" style="">-->
                    <!--<div class="youtube-video" data-video-height="310"  data-autoplay="1" data-video-id="1D_tLbCi5h8">-->
                    <!--</div>-->
                    <!--</div>-->

                    <!-- 1. The <div> tag will contain the <iframe> (and video player) -->
                    <div id="player" style="margin-top: 40px;"></div>
                    <script>      // 2. This code loads the IFrame Player API code asynchronously.
                    var tag = document.createElement('script');
                    tag.src = "http://www.youtube.com/player_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    // 3. This function creates an <iframe> (and YouTube player)
                    //    after the API code downloads.
                    var player;
                    function onYouTubePlayerAPIReady() {
                        player = new YT.Player('player', {
                            playerVars: {'autoplay': 1, 'controls': 0, 'showinfo': 0, 'rel': 0},
                            videoId: '1D_tLbCi5h8',
                            height: '310',
                            width: '100%',
                            events: {
                                'onReady': onPlayerReady
                            }
                        });
                    }

                    // 4. The API will call this function when the video player is ready.
                    function onPlayerReady(event) {
                        event.target.mute();
                    }
                    </script>

                </div>
                <div class="col-md-6 col-sm-7">
                    <div class="about-box">

                        <div class="hidden-xs hidden-sm">
                            <h2 class="box-title">Welcome to Watchdog Media Services</h2>

                            <div class="tiny-border"></div>
                        </div>

                        <div class="hidden-lg hidden-md">
                            <h2 class="box-title">Welcome to <br> Watchdog Media Services</h2>

                            <div class="tiny-border"></div>
                        </div>


                        <p>Watchdog Media Services (WMS) Pvt. Ltd. is a legally registered private agency at Office of the Company Registrar, Kathmandu and was established by the enthusiastic group of young and dynamic development journalists in 2006. The organization is a prominent media institution contributing to the process of social transformation through development journalism.
 </p>
                        <ul class="list-style-1">
                            <li>Eleven years of experience
                            </li>
                            <li>Training to media professionals
                            </li>
                            <li>IEC/BCC materials designing and production
                            </li>
                            <li>Broad network with different stakeholders
                            </li>
                            <li>Media research
                            </li>
                            <li>Documentary Production, Radio Program Production & PSA/Jingle/TVC Production
</li>
                            <li>Production of three weekly Television Programmes and their dissemination via National Television Channels

                            </li>
                        </ul>
                        <div class="divider-single"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- section close -->

    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="text-center">

                    <h2 class="box-title">Our Services</h2>

                    <div class="tiny-border"></div>
                </div>
                <div class="feature-box">

                    <div class="feature col-md-4">

                        <div class="col-xs-2">
                            <i class="fa fa-bar-chart"></i>
                        </div>

                        <div class="col-xs-10" style="padding-left: 16px;">
                            <h3>Production and Outreach</h3>

                            <p>Radio/TV programmes, Documentary PSA/Jingle/TVC, IEC/BCC Materials and Animation</p>
                        </div>




                    </div>
                    <div class="feature col-md-4">

                        <div class="col-xs-2">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>

                        <div class="col-xs-10" style="padding-left: 16px;">

                            <h3>Research and Planning</h3>

                            <p>Designing communication plan/strategy, communication campaign and its implementation and
                                research</p>
                        </div>
                    </div>
                    <div class="feature col-md-4">
                        <div class="col-xs-2">
                            <i class="fa fa-bullhorn"></i>
                        </div>

                        <div class="col-xs-10" style="padding-left: 16px;">
                            <h3>Training</h3>

                            <p>Designing training curriculam and conducting training on communication, journalism and any
                                aspects of media</p>
                        </div>

                    </div>
                </div>
            </div>



    </section>



    <section id="section-tv">
        <div class="container">
            <div class="row">

                <div class="text-center">

                    <h2 class="box-title">Television Programmes</h2>

                    <div class="tiny-border"></div>
                </div>

                <?php  $imageprograms=getAllActiveListingProgram($conn);
                        foreach ($imageprograms as $key => $imageprogram):?>

                <div class="col-sm-4 col-md-4 col-xs-12 padd text-center" style="margin-left:100px;">
                    
                    <a href="televisionprogramme.php#<?php echo $imageprogram['tv_title'];?>">
                        <div class="television">
                            <div class="layer hidden-xs"></div>
                            <img src="admin/uploads/<?php echo$imageprogram['image_path'];?>" style="max-width: 100%;" alt="" width=350 px height=250 px>
                        </div><!-- end television -->
                    </a>
                    
                </div>


                 <?php endforeach; ?>
        </div>
    </div>
               
    </section>
    <section id="section-partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="box-title">Our Partners</h2>

                        <div class="tiny-border"></div>
                    </div>

                    
                    <div class="col-md-12">

                        <div class="owl-carousel owl-item-3">
                            <?php $partners=getAllActivePartners($conn);
                          foreach ($partners as $key => $partner): 
                     ?>
                            <a href="<?php echo $partner['website']; ?>">
                            <div class="item text-center">
                                <img src="admin/uploads/<?php echo $partner['image_path'];?>" alt="" width=200 px height=200 px/>
                            </div> </a>
                            <!-- end item -->
                             <?php endforeach; ?>
                        </div>
                        <!-- end owl-item-3 -->
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>




    <!-- main footer begin -->
    
<?php  include"layouts/footer.php";?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>


</body>
</html>