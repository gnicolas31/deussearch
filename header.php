<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Répondez à un test de personnalité et découvrez des jeux adaptés.Profitez de votre confinement pour jouer à de nouvelles licences XBOX, Playstation ou PC."> <!-- Meta Description -->
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/banner/fav.png" type="image/x-icon">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:site_name" content="Deus Search" />
    <meta property="og:description" content="Répondez à un test de personnalité et découvrez des jeux adaptés.Profitez de votre confinement pour jouer à de nouvelles licences XBOX, Playstation ou PC." />
    <meta property="og:image" content="https://deussearch.fr/assets/images/banner/banner.png" />


    <meta name="theme-color" content="#171744" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XGNBVJEK2R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XGNBVJEK2R');
    </script>
</head>
<body class="<?php echo $class_page; ?>">
    <?php 
        $header_banner_img = "header_dofus.png";
    ?>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div><!-- /preloader-icon -->
        <div id="deus_loader"><span></span></div>
        </div><!-- /preloader-inner -->
    </div><!-- /preloader -->

    <div class="cursor"></div>


    <!-- header-section start -->
    <header class="header-section">
        <div class="header">
            <div class="header-top-area">
                <div class="container">
                    <div class="header-top-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="header-logo">
                            <a class="site-logo site-title" href="index.php"><img src="assets/images/banner/logo.png" alt="site-logo"></a>
                        </div>
                        <div class="header-right d-flex flex-wrap align-items-center">
                            <div class="language-select-list d-flex flex-wrap">
                                <div class="language-thumb">
                                    <img src="assets/images/lang.png" alt="language">
                                </div>
                                <div class="language-select">
                                    <select class="select-bar">
                                        <option value="1">Languages</option>
                                        <option>Francais</option>
                                      <!--  <option>English</option>-->
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="site-logo site-title d-lg-none" href="index.php"><img src="assets/images/banner/logo.png" alt="site-logo"></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu">
                                <li active_meta="home"><a href="index.php" data-i18n="homepage">Accueil</a></li>
                                <li class="deus_class" active_meta="deus"><a href="deus.php">Deus Search</a></li>
                                <!-- <li class="menu_has_children"><a href="#0">Les jeux</a>  
                                    <ul class="sub-menu">
                                        <li><a href="#">Par catégories</a></li>
                                        <li><a href="#">Par consoles</a></li>
                                        <li active_meta="deus"><a href="#">Deus Search </a></li>
                                    </ul>
                                <li class="menu_has_children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Articles</a></li>
                                    </ul>
                                </li>
                                <li><a href="#0">A propos</a></li> -->
                                <li active_meta="contact"><a href="contact.php">Contact</a></li>
                            </ul>                 
                        </div>
                        <div class="header-search-bar">
                           <form method="get" id="searchsimpleform" action="#">
                                <input id="searchbox" type="text" name="s" placeholder="Recherche par titre">
                                <button class="header-search-btn"><i class="fas fa-search"></i></button>
                                <div id="search_result">
                                    Faîtes une recherche
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->