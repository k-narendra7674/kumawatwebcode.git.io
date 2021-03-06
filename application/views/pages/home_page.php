<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kumawat It Web</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="https://cdn.iconscout.com/icon/premium/png-256-thumb/k-11-833316.png" rel="icon">
    <link href="<?php echo base_url(); ?>project/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>project/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>project/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>project/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>project/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>project/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>project/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>project/assets/css/style.css" rel="stylesheet">

<!-- =======================================================
Theme Name: BizPage
Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/
======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">K_IT Web</a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="#intro">Home</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
Intro Section
============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>project/assets/img/intro-carousel/1.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>project/assets/img/intro-carousel/2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>project/assets/img/intro-carousel/3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>project/assets/img/intro-carousel/4.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url(); ?>project/assets/img/intro-carousel/5.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<!-- #intro -->

<!-- card open -->
<div class="container">
    <div class="row item">
        <?php foreach ($all_mobile as $key => $value) { ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card-icon rounded-circle">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <h3 id=""><?php echo $value->name; ?></h3>
                <p id=""><?php echo $value->content; ?></p>
            </div>
        </div> 

        <!-- <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card-icon rounded-circle">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <h3>Mobile</h3>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
        </div> 

        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card-icon rounded-circle">
                <i class="fa fa-wpbeginner" aria-hidden="true"></i>
                <h3>Teddy </h3>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
        </div> -->

       <?php } ?>

    </div>    
</div>

<!-- card end -->

<!-- about open -->

<div id="about-us" class="container-fluid top-3 title-about">
    <div class="container">
        <div class="head-title text-center"><h2><span>ABOUT US</span></h2>
            <p class="title-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="row">
                <?php foreach ($all_about as $key => $value) { ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="title-card text-center p-2 m-2">
                    <img src="<?php echo base_url() . 'public/uploads/' . $value->img; ?>" class="img-fluid" alt="">
                    <div class="about-bg">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <h3><?php echo $value->name; ?></h3>
                        <P><?php echo $value->content; ?></P>
                    </div>
                </div>
            </div>
<!-- 
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="title-card text-center p-2 m-2">
                    <img src="<?php echo base_url(); ?>project/assets/img/about-plan.jpg" class="img-fluid" alt="">
                    <div class="about-bg">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                        <h3>Our Plan</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</P>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="title-card text-center p-2 m-2">
                    <img src="<?php echo base_url(); ?>project/assets/img/about-vision.jpg" class="img-fluid" alt="">
                    <div class="about-bg">
                        <i class="fa fa-podcast" aria-hidden="true"></i>
                        <h3>Our vision</h3>
                        <P>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</P>
                    </div>
                </div>
            </div> -->
            <?php } ?>
        </div>
    </div>
</div>

<!-- ----about end -->


<!-- service open -->

<div id="services" class="container">
    <div class="head-title text-center service"><h2><span>SERVICES</span></h2>
        <p class="title-text text-dark my-3">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
        <div class="row">
            <?php foreach ($all_service as $key => $value) { ?>
          
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class="float-left  fa fa-bullseye mt-2" aria-hidden="true"></i>
                        <h5><a href="#"><?php echo $value->name; ?></a></h5>
                        <p class="service-text"><?php echo $value->content; ?></p>
                    </div>
                </div>
            </div>

<!--             <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class=" float-left fa fa-star-o mt-2" aria-hidden="true"></i>
                        <h5><a href="#">Dolor Sitema</a></h5>
                        <p class="service-text">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class=" float-left fa fa-bandcamp mt-2" aria-hidden="true"></i>
                        <h5><a href="#">Sed ut perspiciatis</a></h5>
                        <p class="service-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class=" float-left fa fa-eercast mt-2" aria-hidden="true"></i>
                        <h5><a href="#">Magni Dolores</a></h5>
                        <p class="service-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class=" float-left fa fa-grav mt-2" aria-hidden="true"></i>
                        <h5><a href="#">Nemo Enim</a></h5>
                        <p class="service-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-head">
                    <div class="service-icon p-3">
                        <i class=" float-left mt-2 fa fa-user-o" aria-hidden="true"></i>
                        <h5><a href="#">Eiusmod Tempor</a></h5>
                        <p class="service-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi </p>
                    </div>
                </div>
            </div> -->

        <?php  } ?>
        </div>
    </div>
</div>

<!-- service end -->

<!-- Our skills open -->

<div class="container  mb-5">
    <div class="head-title text-center"><h2><span>OUR SKILLS</span></h2>
        <p class="title-text text-dark my-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="progress mt-2 ">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <span class="skill">Html</span>
                <i class="h-text">100%</i>
            </div>

            <div class="progress mt-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                <span class="skill">css</span>
                <i class="c-text">90%</i>
            </div>

            <div class="progress mt-2">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                <span class="skill">JAVASCRIPT</span>
                <i class="js-text">75%</i>
            </div>


            <div class="progress mt-2">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55"></div>
                <span class="skill">photoshop</span>
                <i class="p-text">55%</i>
            </div>
        </div>        
    </div>
</div>

<!-- ----Our skills end -->


<!------conuter open -->
<div class="container-fluid counter-main top-bottom ">
    <div class="container">
        <div class="head-title text-center"><h2><span>FACTS</span></h2>
            <p class="title-text text-white my-5 mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row ">

            <div class="col-sm-12 col-md-6 col-lg-3 text-center mb-5 mt-2">
                <div class="wrapper">
                    <div class="counter col_fourth">
                        <h2 class="timer count-title count-number" data-to="274" data-speed="1500"></h2>
                        <p class="count-text ">Clients</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mt-2">
                <div class="wrapper">
                    <div class="counter col_fourth">
                        <h2 class="timer count-title count-number" data-to="421" data-speed="1500"></h2>
                        <p class="count-text ">Projects</p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mt-2">
                <div class="wrapper">
                    <div class="counter col_fourth">
                        <h2 class="timer count-title count-number" data-to="1364" data-speed="1500"></h2>
                        <p class="count-text ">Hours Of Support</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 mb-5 mt-2">
                <div class="wrapper">
                    <div class="counter col_fourth end">
                        <h2 class="timer count-title count-number" data-to="18" data-speed="1500"></h2>
                        <p class="count-text ">Hard Workers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>        

<!-- counter end -->

<!-- our  portfolio -->


<section id="portfolio" class="section-bg">
    <div class="container">
        <div class="head-title text-center"><h2><span> PORTFOLIO</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        
        </div>
        <div class="row portfolio-container" style="position: relative; height: 1080px;">
            <?php foreach ($all_apps as $key => $value) { ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url() . 'public/uploads/apps/' . $value->img; ?>" class="img-fluid" alt="">
                        <a href="<?php echo base_url() . 'public/uploads/apps/' . $value->img; ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#"><?php echo $value->name; ?></a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

<!--             <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 639px; top: 0px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">App 2</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 639px; top: 360px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">App 3</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div> -->
<?php } ?>

            <?php foreach ($all_cards as $key => $value) { ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" style="position: absolute; left: 0px; top: 720px; visibility: hidden; animation-name: none;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url() . 'public/uploads/cards/' . $value->img; ?>" class="img-fluid" alt="">
                        <a href="<?php echo base_url() . 'public/uploads/cards/' . $value->img; ?>" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#"><?php echo $value->name; ?></a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

<!--             <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" style="position: absolute; left: 0px; top: 360px; visibility: visible; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Card 2</a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 319px; top: 720px; visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Card 3</a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div> -->
<?php } ?>

            <?php foreach ($all_webs as $key => $value) { ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 639px; top: 720px; visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url() . 'public/uploads/webs/' . $value->img; ?>" class="img-fluid" alt="">
                        <a href="<?php echo base_url() . 'public/uploads/webs/' . $value->img; ?>" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#"><?php echo $value->name; ?></a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>        

            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 319px; top: 360px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Web 2</a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>
 

            <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 319px; top: 0px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="<?php echo base_url(); ?>project/assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                        <a href="<?php echo base_url(); ?>project/assets/img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="#">Web 3</a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>
 -->
    <?php   } ?>
        </div>
    </div>
</section>

<!-- portfolio end -->


<!------owl carousel open-1 -->

<div class="container top-bottom">
    <div class="head-title text-center"><h2><span>CLIENTS</span></h2>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="owl-carousel owl-theme top-bottom">
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-1.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-2.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-3.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-4.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-5.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-6.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-7.png" alt=""></div>
                <div class="item"><img src="<?php echo base_url(); ?>project/assets/img/clients/client-8.png" alt=""></div>
            </div>            
        </div>        
    </div>    
</div>

<!------owl carousel end-1 -->


<!-- team open -->



<div id="team" class="container mb-5">
    <div class="head-title text-center"><h2><span> OUR TEAM</span></h2>
    </div>

    <div class="row">
        <?php foreach ($all_teams as $key => $value) { ?>
        <div class="col-md-6 col-sm-12 col-lg-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?php echo base_url(). 'public/uploads/'. $value->img; ?>" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hi There !</h4>
                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5><?php echo $value->name; ?></h5>
                <span><?php echo $value->designation; ?></span>
            </div>
        </div>
        <!-- <div class="col-md-6 col-sm-12 col-lg-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?php echo base_url(); ?>project/assets/img/team-2.jpg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Hello World</h4>
                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Franklin Harbet</h5>
                <span>HR Manager</span>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?php echo base_url(); ?>project/assets/img/team-3.jpg" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>I love to design</h4>
                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h5>Linda Anderson</h5>
                <span>Marketing Manager</span>
            </div>
        </div> -->

    <?php  } ?>
    </div>

</div>

<!-- team end -->


<!-- form open -->

<section id="contact" class="section-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <div class="head-title text-center"><h2><span>CONTACT US</span></h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div>

        <div class="form" id="customer_feedback">
            <form action="" method="post" role="form" class="contactForm" id="contactUs_form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control rounded" id="customer_name" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control rounded" name="email" id="customer_email" placeholder="Your Email">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control rounded" name="subject" id="msg_subject" placeholder="Subject" data-msg="Please enter at least 8 chars of subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded" name="message" rows="5" id="customer_message" placeholder="Message"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-outline-success rounded" type="submit" id="submitMsg">Send Message</button></div>
                </div>
            </form>
        </div>

    </div>
</section>
<!-- form end -->
<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>BizPage</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
        </div>
        <div class="credits">
<!--
All the links in the footer should remain intact.
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
-->
Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- online js -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript Libraries -->
<!-- <script src="<?php echo base_url(); ?>project/assets/lib/jquery/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>project/assets/lib/jquery/jquery-migrate.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>project/assets/lib/bootstrap/js/bootstrap.min.js"></script> -->
<script src="<?php echo base_url(); ?>project/assets/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/superfish/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/superfish/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>project/assets/lib/isotope/isotope.pkgd.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>project/assets/lib/lightbox/js/lightbox.min.js"></script> -->
<script src="<?php echo base_url(); ?>project/assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->

<!-- Template Main Javascript File -->
<script src="<?php echo base_url(); ?>project/assets/js/main.js"></script>


<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:1000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

</script>



</body>
</html>