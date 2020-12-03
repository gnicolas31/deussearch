<!DOCTYPE html>
<?php 
    if($lang == 'fr') {
        include('languages/fr.php');
    } else {
        include('languages/en.php');
    }
?>
<html lang="<?php echo $lang; ?>" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $i18n->general->description; ?>"> <!-- Meta Description -->
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo $cssandjsurlfix; ?>assets/images/banner/fav.png" type="image/x-icon">
    <!-- responsive css link -->
    <link rel="stylesheet" href="<?php echo $cssandjsurlfix; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $cssandjsurlfix; ?>assets/css/responsive.css">


    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:site_name" content="Deus Search" />
    <meta property="og:type"       content="website" />
    <meta property="og:description" content="<?php echo $i18n->general->description; ?>" />
    <meta property="og:image" content="https://deussearch.fr/assets/images/banner/share_new.png" />

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
    <header class="header-section deus_head">
        <div class="header">
            <div class="header-top-area">
                <div class="container">
                    <div class="header-top-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="header-logo">
                            <a class="site-logo site-title" href="./"><img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/logo.png" alt="site-logo"></a>
                            <p class="deus_subtitle"> <?php echo $i18n->general->subtitle; ?> </p>
                        </div>
                        <div class="header-right d-flex flex-wrap align-items-center">
                            <ul class="blog-social blog-header-social">
                                <li><a href="https://www.facebook.com/DeusSearch" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/DeusSearch" target="_blank" class="active"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                            <div class="language-select-list d-flex flex-wrap">
                                <div class="language-thumb">
                                    <img src="<?php echo $cssandjsurlfix; ?>assets/images/lang.png" alt="language">
                                </div>
                                <div class="language-select">
                                    <ul class="lang_select">
                                        <?php
                                        $fr_url = "#";
                                        $en_url = 'en/';
                                        if($lang == 'en') {
                                            $fr_url = '../';
                                            $en_url = "#";
                                        }
                                        ?>
                                        <li><a href="<?php echo $fr_url; ?>">Francais</a></li>
                                        <li><a href="<?php echo $en_url; ?>">English</a></li>
                                      <!--  <option>English</option>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="site-logo site-title d-lg-none" href="./"><img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/logo.png" alt="site-logo"></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu">
                                <li active_meta="home"><a href="./"><?php echo $i18n->menu->accueil; ?></a></li>
                                <?php 
                                if($lang == 'fr') { ?>
                                    <li class="deus_class" active_meta="deus"><a href="test-de-personnalite-trouver-jeu-video"><?php echo $i18n->menu->deus; ?></a></li>
                                <?php } else {
                                ?>
                                    <li class="deus_class" active_meta="deus"><a href="personnality-test-find-video-games"><?php echo $i18n->menu->deus; ?></a></li>
                                <?php 
                                }
                                ?>
                                <li active_meta="presentation"><a href="presentation"><?php echo $i18n->menu->presentation; ?></a></li>
                                <li active_meta="contact"><a href="contact"><?php echo $i18n->menu->contact; ?></a></li>
                            </ul>                 
                        </div>
                        <div class="header-search-bar">
                           <form method="get" id="searchsimpleform" action="#">
                                <input id="searchbox" type="text" name="s" placeholder="<?php echo $i18n->general->search_placeholder; ?>">
                                <button class="header-search-btn"><i class="fas fa-search"></i></button>
                                <div id="search_result">
                                    <?php echo $i18n->general->search_result_holder; ?>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->