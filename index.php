<?php 
    $class_page = "home";
    $title = "Deus Search - Le moteur de recherche des jeux vidéos";
    include 'header.php';
    include 'connect.php';
?>
    <!-- banner-section start -->
    <section class="banner-section bg bg_img" data-background="assets/images/banner/banner.png">
        <div class="banner-element-one my-paroller" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/ship1.png" alt="element">
        </div>
        <div class="banner-element-two my-paroller" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/man1.png" alt="element">
        </div>
        <div class="banner-element-three my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/man3.png" alt="element">
        </div>
        <div class="banner-element-four my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/man2.png" alt="element">
        </div>
        <div class="banner-element-five my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/ship2.png" alt="element">
        </div>
        <div class="banner-element-six my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/Robot.png" alt="element">
        </div>
        <div class="banner-element-seven my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="assets/images/banner/ship3.png" alt="element">
        </div>
        <div class="banner-element-eight">
            <img src="assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-nine">
            <img src="assets/images/banner/line4.png" alt="element">
        </div>
        <div class="banner-element-ten">
            <img src="assets/images/banner/circle2.png" alt="element">
        </div>
        <div class="banner-element-eleven">
            <img src="assets/images/banner/circle1.png" alt="element">
        </div>
        <div class="banner-element-twelve">
            <img src="assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-thirteen">
            <img src="assets/images/banner/line6.png" alt="element">
        </div>
        <div class="banner-element-fourteen">
            <img src="assets/images/banner/line6.png" alt="element">
        </div>
        <div class="banner-element-fifteen">
            <img src="assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-sixteen">
            <img src="assets/images/banner/line7.png" alt="element">
        </div>
        <div class="banner-element-seventeen">
            <img src="assets/images/banner/line1.png" alt="element">
        </div>
        <div class="banner-element-eightteen">
            <img src="assets/images/banner/manyline.png" alt="element">
        </div>
        <div class="banner-element-nineteen">
            <img src="assets/images/banner/whitedot.png" alt="element">
        </div>
        <div class="container">
            <div class="row align-items-center mb-30-none">
                <div class="col-lg-8 mb-30">
                    <div class="banner-content">
                        <h2 class="title" data-i18n="indextitle">Trouves le jeu qui te correspond</h2>
                        <?php 
                        $number_of_games = $conn->query("SELECT id FROM deus_games");
                        ?>
                        <span class="sub-title" data-i18n="indexsubtitle">En seulement 10 questions, notre algorithme vous propose une liste de jeux adaptée à vos envies parmis les <?php echo $number_of_games->num_rows; ?> disponibles.</span>
                        <div class="banner-btn-area">
                            <a href="deus.php" class="cmn-btn">Recherche Deus Search<i class="fas fa-long-arrow-alt-right"></i></a>
                       <!--      <a href="#0" class="cmn-btn-border">En savoir plus</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- about-section start -->
    <section class="about-section bg pb-120" id="about">
        <div class="about-element-one">
            <img src="assets/images/about/icon-1.png" alt="icon">
        </div>
        <div class="about-element-two">
            <img src="assets/images/about/icon-2.png" alt="icon">
        </div>
        <div class="about-element-three">
            <img src="assets/images/about/icon-3.png" alt="icon">
        </div>
        <div class="about-element-four">
            <img src="assets/images/about/icon-4.png" alt="icon">
        </div>
        <div class="about-element-five">
            <img src="assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-six">
            <img src="assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-seven">
            <img src="assets/images/about/icon-6.png" alt="icon">
        </div>
        <div class="about-element-eight">
            <img src="assets/images/about/icon-7.png" alt="icon">
        </div>
        <div class="about-element-nine">
            <img src="assets/images/about/icon-8.png" alt="icon">
        </div>
        <div class="about-element-ten">
            <img src="assets/images/about/icon-9.png" alt="icon">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-lg-6 mb-30">
                    <div class="about-item-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-lg-6">
                                <div class="about-item text-center">
                                    <div class="about-icon">
                                        <img src="assets/images/about/about-1.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_1_title">Des jeux uniques</h3>
                                    <p  data-i18n="index_bloc_1_p">Découvrez de nouvelles licences qui sortent du lot. </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item about-item--style text-center mt-30">
                                    <div class="about-icon">
                                        <img src="assets/images/about/about-2.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_2_title">Une expérience sans égale</h3>
                                    <p  data-i18n="index_bloc_2_p"> Faîtes vous plaisir sur le jeu qui vous correspond parmis les <?php echo $number_of_games->num_rows; ?> disponibles. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item text-center">
                                    <div class="about-icon">
                                        <img src="assets/images/about/about-3.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_3_title">Pour les gamers</h3>
                                    <p  data-i18n="index_bloc_3_p">Un outil poussé fournissant une nouvelle approche de la recherche de jeux vidéos. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item about-item--style-two text-center mt-30">
                                    <div class="about-icon">
                                        <img src="assets/images/about/about-4.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_4_title">Par des gamers</h3>
                                    <p data-i18n="index_bloc_4_p">Parce-que nous aussi nous avons passé trop de temps à chercher un bon jeu. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content">
                        <h3 class="sub-title" data-i18n="index_side_subtitle">Une recherche unique</h3>
                        <h2 class="title" data-i18n="index_side_title">Découvrez des jeux adaptés à votre personnalité</h2>
                        <p >Notre algorithme trouve le jeux vidéo qui correspond à vos envies et votre matériel et votre personnalité en un rien de temps. </p>
                        <p> Découvrez ou redécouvrez des licences que vous avez ratées ! N'attendez plus pour découvrir des jeux indépendants ou triple A qui correspondent à votre envie ! </p>
                        <div class="about-content-btn">
                            <a href="deus.php" class="cmn-btn">Je trouve mon jeu<i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-section end -->
<?php     
    include 'footer.php';
?>
