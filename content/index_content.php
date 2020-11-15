  <!-- banner-section start -->
  <section class="banner-section bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/banner/banner.png">
        <div class="banner-element-one my-paroller" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/ship1.png" alt="element">
        </div>
        <div class="banner-element-two my-paroller" data-paroller-factor="0.05" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/man1.png" alt="element">
        </div>
        <div class="banner-element-three my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/man3.png" alt="element">
        </div>
        <div class="banner-element-four my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/man2.png" alt="element">
        </div>
        <div class="banner-element-five my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/ship2.png" alt="element">
        </div>
        <div class="banner-element-six my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/Robot.png" alt="element">
        </div>
        <div class="banner-element-seven my-paroller" data-paroller-factor="0.07" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/ship3.png" alt="element">
        </div>
        <div class="banner-element-eight">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-nine">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line4.png" alt="element">
        </div>
        <div class="banner-element-ten">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/circle2.png" alt="element">
        </div>
        <div class="banner-element-eleven">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/circle1.png" alt="element">
        </div>
        <div class="banner-element-twelve">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-thirteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line6.png" alt="element">
        </div>
        <div class="banner-element-fourteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line6.png" alt="element">
        </div>
        <div class="banner-element-fifteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line3.png" alt="element">
        </div>
        <div class="banner-element-sixteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line7.png" alt="element">
        </div>
        <div class="banner-element-seventeen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/line1.png" alt="element">
        </div>
        <div class="banner-element-eightteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/manyline.png" alt="element">
        </div>
        <div class="banner-element-nineteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/whitedot.png" alt="element">
        </div>
        <div class="container">
            <div class="row align-items-center mb-30-none">
                <div class="col-lg-8 mb-30">
                    <div class="banner-content">
                        <h1 class="title deus_main_title" ><?php echo $i18n->index->main_title; ?></h1>
                        <?php 
                        $number_of_games = $conn->query("SELECT id FROM deus_games");
                        ?>
                        <span class="sub-title"><?php echo $i18n->index->main_subtitle_1. ' '.$number_of_games->num_rows.' '.$i18n->index->main_subtitle_2; ?></span>
                        <div class="banner-btn-area">
                            <a href="deus.php" title="<?php echo $i18n->index->deus_button_to_test_title; ?>" class="cmn-btn"><?php echo $i18n->index->deus_button1; ?><i class="fas fa-long-arrow-alt-right"></i></a>
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
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-1.png" alt="icon">
        </div>
        <div class="about-element-two">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-2.png" alt="icon">
        </div>
        <div class="about-element-three">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-3.png" alt="icon">
        </div>
        <div class="about-element-four">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-4.png" alt="icon">
        </div>
        <div class="about-element-five">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-six">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-seven">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-6.png" alt="icon">
        </div>
        <div class="about-element-nine">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-8.png" alt="icon">
        </div>
        <div class="about-element-ten">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-9.png" alt="icon">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-lg-6 mb-30">
                    <div class="about-item-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-lg-6">
                                <div class="about-item text-center">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-1.png" alt="about">
                                    </div>
                                    <h3 class="title" ><?php echo $i18n->index->about_bloc1_title; ?></h3>
                                    <p ><?php echo $i18n->index->about_bloc1_text; ?> </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item about-item--style text-center mt-30">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-2.png" alt="about">
                                    </div>
                                    <h3 class="title" ><?php echo $i18n->index->about_bloc2_title; ?></h3>
                                    <p > <?php echo $i18n->index->about_bloc2_text; ?>  </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item text-center">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-3.png" alt="about">
                                    </div>
                                    <h3 class="title" ><?php  echo $i18n->index->about_bloc3_title; ?></h3>
                                    <p ><?php echo $i18n->index->about_bloc3_text; ?> </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item about-item--style-two text-center mt-30">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-4.png" alt="about">
                                    </div>
                                    <h3 class="title" ><?php echo $i18n->index->about_bloc4_title; ?></h3>
                                    <p ><?php echo $i18n->index->about_bloc4_text; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content">
                        <h3 class="sub-title" ><?php echo $i18n->index->about_blue_title; ?></h3>
                        <h2 class="title" ><?php echo $i18n->index->about_title; ?></h2>
                        <p ><?php echo $i18n->index->about_text; ?></p>
                        <div class="about-content-btn">
                            <a href="deus.php" title="<?php echo $i18n->index->deus_button_to_test_title; ?>" class="cmn-btn"><?php echo $i18n->index->about_button; ?><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-section start -->
    <section class="about-section bg pb-120" id="about">
        <div class="about-element-one">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-1.png" alt="icon">
        </div>
        <div class="about-element-two">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-2.png" alt="icon">
        </div>
        <div class="about-element-three">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-3.png" alt="icon">
        </div>
        <div class="about-element-four">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-4.png" alt="icon">
        </div>
        <div class="about-element-five">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-six">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-5.png" alt="icon">
        </div>
        <div class="about-element-seven">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-6.png" alt="icon">
        </div>
        <div class="about-element-eight">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-7.png" alt="icon">
        </div>
        <div class="about-element-ten">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-9.png" alt="icon">
        </div>
        <div class="container deus_list_index">
                <h2> <?php echo $i18n->index->last_results->title; ?></h2>
                <h3> <?php echo $i18n->index->last_results->blue_title; ?> </h3>
                <div class="deus_index_row_games">
                    <?php 
                        $index_videogames_construct = "SELECT game_name, clip_url, img_url, id_rawg FROM deus_games WHERE rating > 4 AND clip_url != '' ORDER BY RAND() LIMIT 4";
                        $index_videogames_r = $conn->query($index_videogames_construct);
                        while($index_videogames = mysqli_fetch_array($index_videogames_r)) {
                            ?>
                            <div class="game-item deus_result" style='background:url("<?php echo $index_videogames['img_url']; ?>")' game_id="<?php echo $index_videogames['id_rawg']; ?>"> 
                                <a class="game_url" target="_blank" href="#">
                                    <div class="game_deus_bg"></div>
                                    <a href="#" target="_blank" class="game_link"> 
                                        <div class="game-content"> 
                                            <div class="game-content-body"> 
                                                <h4 class="title"> <?php echo $index_videogames['game_name']; ?></h4>
                                                <video class="deus_video" id="video_player" loop muted width="250"><source src="<?php echo $index_videogames['clip_url']; ?>" type="video/mp4"> Sorry, your browser doesn\'t support embedded videos.</video>                                    </div> 
                                        </div> 
                                    </a> 
                                </a>
                            </div>
                            <?php 
                        }
                    ?>
                    
                </div>
                <div class="about-content-btn">
                    <p>  <?php echo $i18n->index->last_results->notice; ?></p>
                    <a href="deus.php" class="cmn-btn"  title="<?php echo $i18n->index->deus_button_to_test_title; ?>"> <?php echo $i18n->index->last_results->button; ?><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </section>