    <!-- inner-banner-section start -->
    <section class="inner-banner-section inner-banner-section--style bg-overlay-black bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/<?php echo $header_banner_img; ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="inner-banner-content">
                        <h1 class="title"><?php echo $i18n->contact->main_title; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-banner-section end -->


    <!-- contact-section-start -->
    <section class="contact-section bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="contact-area">
                        <div class="contact-header">
                            <h3 class="sub-title"><?php echo $i18n->contact->blue_title; ?></h3>
                            <h2 class="title"><?php echo $i18n->contact->sub_title; ?></h2>
                            <p ><?php echo $i18n->contact->text; ?></p>
                        </div>
                        <div class="contact-form-area">
                            <?php 
                            if($_GET) {
                                $sujet = $_GET['subject'];
                                $name = $_GET['name'];
                                $email = $_GET['email'];
                                $message = 'De :'.$name.' - '.$email.':'.$_GET['message'];
                                mail( 'contact@deussearch.fr' , $sujet , $message );
                                echo '<div class="deus_info success">'.$i18n->contact->form->success.'</div>';
                            } else {
                            ?>
                                <form class="contact-form" action="contact.php" method="get">
                                    <div class="row">
                                        <div class="col-lg-12 form-group text-left wow fadeIn" data-wow-delay="0.1s">
                                            <label ><?php echo $i18n->contact->form->label->nom; ?><span>*</span></label>
                                            <input type="text" name="name" required placeholder="<?php echo $i18n->contact->form->placeholder->nom; ?>">
                                        </div>
                                        <div class="col-lg-12 form-group text-left wow fadeIn" data-wow-delay="0.1s">
                                            <label ><?php echo $i18n->contact->form->label->email; ?><span>*</span></label>
                                            <input type="email" name="email" required placeholder="<?php echo $i18n->contact->form->placeholder->email; ?>">
                                        </div>
                                        <div class="col-lg-12 form-group text-left wow fadeIn" data-wow-delay="0.1s">
                                            <label ><?php echo $i18n->contact->form->label->sujet; ?> <span>*</span></label>
                                            <input type="text" name="subject" required placeholder="<?php echo $i18n->contact->form->placeholder->sujet; ?>">
                                        </div>
                                        <div class="col-lg-12 form-group text-left wow fadeIn" data-wow-delay="0.1s">
                                            <label ><?php echo $i18n->contact->form->label->message; ?><span>*</span></label>
                                            <textarea required  name="message" placeholder="<?php echo $i18n->contact->form->placeholder->email; ?>"></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group text-center wow fadeIn" data-wow-delay="0.1s">
                                            <input type="submit" class="cmn-btn" value="<?php echo $i18n->contact->form->button; ?>">
                                        </div>
                                    </div>
                                </form>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section-end -->
