<!DOCTYPE html>
<html lang="ru-Ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9, IE=edge" />
    <meta name='robots' content='noindex,follow' />

    <link rel='stylesheet' id='bootstrap-css'  href='/assets/css/bootstrap.min.css?ver=4.4.1' type='text/css' media='screen' />
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,devanagari,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='fontawesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ver=4.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='/assets/css/new-style.css' type='text/css' media='all' />
    <link rel="stylesheet" href="/assets/css/animate.css" type='text/css' media='all'>
    <script type='text/javascript' src='/assets/js/jquery.js'></script>         
    
    <link type="text/css" rel="stylesheet" id="flexible-switch" href="/assets/css/new-style-blue.css" /> 
</head>
    
<body>
     <style>
        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #fff;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #0785f2;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        }
        .option-toggle i {
            top: 5px;
            position: relative;
        }
        .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
            color:  #0785f2;
            text-decoration: none;
            outline: none;
        }
        .fa-2x {
        font-size: 1.5em;
    }
    </style>
    <!-- End demo purposes only -->    
    <div class="hero-image">
        <div id="home">
            <div class="hero-overlay">
                <header id="site-header">
                    <div class="row">
                        <nav id="top-nav" class="navbar navbar-default navbar-fixed-top navbar-scroll-changed">    
                            <div class="container">
                                <div class="col-md-2 col-sm-1 col-xs-12">
                                    <div class="branding">
                                      <a href="#" title="Home is where the heart is" rel="home"><img id="logo" src="assets/images/flexible-logo.png" alt="Home is where the heart is"></a>
                                    </div><!--end branding-->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div><!--end navbar-header-->
                                </div><!--end col-md-2 col-sm-2 col-xs-12-->
                                <div class="col-md-10 col-sm-11 col-xs-12">
                                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="true" style="height: 1px;" role="navigation">    
                                        <div class="menu-primary-menu-container">
                                            <ul id="menu-main-top-navigation" class="menu nav navbar-nav navbar-right">
                                                <li><a href="/">Главная</a></li>
                                                <li><a href="/?page=services.php">Файлы</a></li>
                                            </ul>
                                        </div><!--end menu-->
                                    </div><!--end navbar-collapse--> 
                                </div><!--end col-md-10 col-sm-10 col-xs-12-->             
                            </div><!--end container-->
                        </nav>
                    </div>    
                </header>
            </div><!--end hero-overlay-->
        </div><!--end acasa-->
    </div><!--end hero-image-->

    <div style="padding-bottom: 50px;" class="container">

    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        
        if (!isset($_GET['page'])) {
            $page = 'main.php';
        } else {
            $page = $_GET['page'];
        }

        include($page);
    ?>
        <br>
        <?php
            if($page == "services.php"){

            } else {
               echo '<a href="?page=services.php" style="float: right; margin: 0 5px;" class="btn btn-primary">Ваши файлы</a>';
            }
        ?>
    </div>

    <div id="footer">
       <div class="container">
            <div class="row">
                <div class="footer-section col-md-1">
                    <a href="#" title="Home is where the heart is" rel="home"><img src='assets/images/flexible-logo-footer.png' class="logo-footer flex fadeInUp animated" alt="Home is where the heart is"></a>
                </div><!--end footer-section-->     
                <div class="footer-section col-md-8 col-sm-9 col-xs-12">
                        <p class="copyright flex fadeInUp animated">&#169; Copyright 2016 <strong>Flexible.</strong>&nbsp;All rights reserved.</p>
                </div><!--end footer-section-->     
                <div class="footer-section col-md-3 col-xs-12">    
                    <div class="social copyright flex fadeInUp animated">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div><!--end social-->
                </div><!--end col-md-3-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end footer-->
        			<!-- For demo purposes Only ( You may delete this anytime :-) -->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery-mobile.js?ver=1.0'></script>
<script type='text/javascript' src="/assets/js/wow.min.js"></script>
<script type='text/javascript' src="/assets/js/main.js"></script>
<script>
    //jQuery transitions init(wow + animated)
    wow = new WOW(
        {
            boxClass: 'flex',
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: true        // default
        }
        )
    wow.init();
</script>

</body>