    <!-- inner-banner-section start -->
    <section class="inner-banner-section inner-banner-section--style bg-overlay-black bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/<?php echo $header_banner_img; ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="inner-banner-content">
                        <h1 class="title"><?php echo $i18n->presentation->main_title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-banner-section end -->

    <!-- contact-section-start -->
    <section class="contact-section bg presentation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="contact-area">
                        <?php 
                        if($lang == 'en') {
                            $content_page_id = '8';
                        } 
                        if($lang == 'fr') {
                            $content_page_id = '5';
                        }
                            $json = file_get_contents('https://blog.deussearch.fr/wp-json/wp/v2/pages/'.$content_page_id);
                            $obj = json_decode($json);
                            echo $obj->content->rendered;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section-end -->
