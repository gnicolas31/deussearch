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
                        <h1 class="title" data-i18n="indextitle"><?php echo $i18n->index->main_title; ?></h1>
                        <?php 
                        $number_of_games = $conn->query("SELECT id FROM deus_games");
                        ?>
                        <span class="sub-title" data-i18n="indexsubtitle"><?php echo $i18n->index->main_subtitle_1. ' '.$number_of_games->num_rows.' '.$i18n->index->main_subtitle_2; ?></span>
                        <div class="banner-btn-area">
                            <a href="deus.php" class="cmn-btn"><?php echo $i18n->index->deus_button1; ?><i class="fas fa-long-arrow-alt-right"></i></a>
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
        <div class="about-element-eight">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/icon-7.png" alt="icon">
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
                                    <h3 class="title" data-i18n="index_bloc_1_title"><?php  echo$i18n->index->about_bloc1_title; ?></h3>
                                    <p  data-i18n="index_bloc_1_p"><?php echo $i18n->index->about_bloc1_text; ?> </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item about-item--style text-center mt-30">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-2.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_2_title"><?php echo $i18n->index->about_bloc2_title; ?></h3>
                                    <p  data-i18n="index_bloc_2_p"> <?php echo $i18n->index->about_bloc2_text; ?>  </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item text-center">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-3.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_3_title"><?php  echo $i18n->index->about_bloc3_title; ?></h3>
                                    <p  data-i18n="index_bloc_3_p"><?php echo $i18n->index->about_bloc3_text; ?> </p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <div class="about-item about-item--style-two text-center mt-30">
                                    <div class="about-icon">
                                        <img src="<?php echo $cssandjsurlfix; ?>assets/images/about/about-4.png" alt="about">
                                    </div>
                                    <h3 class="title" data-i18n="index_bloc_4_title"><?php echo $i18n->index->about_bloc4_title; ?></h3>
                                    <p data-i18n="index_bloc_4_p"><?php echo $i18n->index->about_bloc4_text; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="about-content">
                        <h3 class="sub-title" data-i18n="index_side_subtitle"><?php echo $i18n->index->about_blue_title; ?></h3>
                        <h2 class="title" data-i18n="index_side_title"><?php echo $i18n->index->about_title; ?></h2>
                        <p ><?php echo $i18n->index->about_text; ?></p>
                        <div class="about-content-btn">
                            <a href="deus.php" class="cmn-btn"><?php echo $i18n->index->about_button; ?><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
