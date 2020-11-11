<!-- inner-banner-section start -->
<section class="inner-banner-section inner-banner-section--style bg-overlay-black bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/<?php echo $header_banner_img; ?>">
    <div class="container">
    </div>
</section>
<!-- inner-banner-section end -->
<section class="contact-section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="contact-area deus_bloc">
                    <?php $date_today_for_form = new DateTime(); ?>
                    <h1 class="title_deus_test"> <?php echo $i18n->deus_search->title; ?></h1>
                    <form  method="post" action="deus_result.php" id="deus_form" class="contact-form">                 
                            <div class="deus_platform col-lg-12 form-group  text-center">
                                <fieldset class="deus_form">
                                    <legend> <?php echo $i18n->deus_search->question1; ?> </legend>
                                    <select class="element select medium" id="platform" name="platform"> 
                                    <option value="" selected="selected"><?php echo $i18n->deus_search->answer->select->holder; ?></option>
                                        <option value="7" >Nintendo Switch </option> 
                                        <option value="4" >Ordinateur</option>
                                        <option value="5" >MacOs</option>
                                        <option value="18" >Playstation 4</option>
                                        <option value="1" >Xbox One</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 form-group text-left">

                                <!--
                                    ///////
                                    //  FILTRES DE GENRES PAR PONDERATION 
                                    ///////
                                -->

                                <fieldset class="deus_form">
                                    <legend> <?php echo $i18n->deus_search->question2; ?> </legend>
                                    <label for="extraval1_1" class="deus_radio"><input type="radio" name="extraversion_val_1" value="0" id="extraval1_1" ><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="extraval1_2" class="deus_radio"><input type="radio" name="extraversion_val_1" value="1" id="extraval1_2"> <?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="extraval1_3" class="deus_radio"><input type="radio" name="extraversion_val_1" value="2" id="extraval1_3"> <?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="extraval1_4 "class="deus_radio"><input type="radio" name="extraversion_val_1" value="3" id="extraval1_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="extraval1_5 "class="deus_radio"><input type="radio" name="extraversion_val_1" value="4" id="extraval1_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question3; ?> </legend>
                                    <label for="consval1_1" class="deus_radio"><input type="radio" name="conscencieux_val_1" value="0" id="consval1_1"> <?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="consval1_2" class="deus_radio"><input type="radio" name="conscencieux_val_1" value="1" id="consval1_2"> <?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="consval1_3" class="deus_radio"><input type="radio" name="conscencieux_val_1" value="2" id="consval1_3"> <?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="consval1_4" class="deus_radio"><input type="radio" name="conscencieux_val_1" value="3" id="consval1_4"> <?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="consval1_5" class="deus_radio"><input type="radio" name="conscencieux_val_1" value="4" id="consval1_5"> <?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question4; ?> </legend>
                                    <label for="extraval2_1" class="deus_radio"><input type="radio" name="extraversion_val_2" value="0" id="extraval2_1"><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="extraval2_2" class="deus_radio"><input type="radio" name="extraversion_val_2" value="1" id="extraval2_2"><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="extraval2_3" class="deus_radio"><input type="radio" name="extraversion_val_2" value="2" id="extraval2_3"><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="extraval2_4" class="deus_radio"><input type="radio" name="extraversion_val_2" value="3" id="extraval2_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="extraval2_5" class="deus_radio"><input type="radio" name="extraversion_val_2" value="4" id="extraval2_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question5; ?> </legend>
                                    <label for="ouvval1_1" class="deus_radio"><input type="radio" name="ouverture_val_1" value="0" id="ouvval1_1"><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="ouvval1_2" class="deus_radio"><input type="radio" name="ouverture_val_1" value="1" id="ouvval1_2"><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="ouvval1_3" class="deus_radio"><input type="radio" name="ouverture_val_1" value="2" id="ouvval1_3"><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="ouvval1_4" class="deus_radio"><input type="radio" name="ouverture_val_1" value="3" id="ouvval1_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="ouvval1_5" class="deus_radio"><input type="radio" name="ouverture_val_1" value="4" id="ouvval1_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question6; ?> </legend>
                                    <label for="agreabval2_1" class="deus_radio"><input type="radio" name="agreabilite_val_2" value="0" id="agreabval2_1"><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="agreabval2_2" class="deus_radio"><input type="radio" name="agreabilite_val_2" value="1" id="agreabval2_2"><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="agreabval2_3" class="deus_radio"><input type="radio" name="agreabilite_val_2" value="2" id="agreabval2_3"><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="agreabval2_4" class="deus_radio"><input type="radio" name="agreabilite_val_2" value="3" id="agreabval2_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="agreabval2_5" class="deus_radio"><input type="radio" name="agreabilite_val_2" value="4" id="agreabval2_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                
                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question7; ?> </legend>
                                    <label for="consval2_1" class="deus_radio"><input type="radio" name="conscencieux_val_2" value="0" id="consval2_1"> <?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="consval2_2" class="deus_radio"><input type="radio" name="conscencieux_val_2" value="1" id="consval2_2" ><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="consval2_3" class="deus_radio"><input type="radio" name="conscencieux_val_2" value="2" id="consval2_3" ><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="consval2_4" class="deus_radio"><input type="radio" name="conscencieux_val_2" value="3" id="consval2_4"> <?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="consval2_5" class="deus_radio"><input type="radio" name="conscencieux_val_2" value="4" id="consval2_5"> <?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form">
                                    <legend><?php echo $i18n->deus_search->question8; ?> </legend>
                                    <label for="ouvval2_1" class="deus_radio"><input type="radio" name="ouverture_val_2" value="0" id="ouvval2_1"><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="ouvval2_2" class="deus_radio"><input type="radio" name="ouverture_val_2" value="1" id="ouvval2_2"><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="ouvval2_3" class="deus_radio"><input type="radio" name="ouverture_val_2" value="2" id="ouvval2_3"><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="ouvval2_4" class="deus_radio"><input type="radio" name="ouverture_val_2" value="3" id="ouvval2_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="ouvval2_5" class="deus_radio"><input type="radio" name="ouverture_val_2" value="4" id="ouvval2_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>

                                <fieldset class="deus_form" >
                                    <legend><?php echo $i18n->deus_search->question9; ?> </legend>
                                    <label for="agreabval1_1" class="deus_radio"><input type="radio" name="agreabilite_val_1" value="0" id="agreabval1_1"><?php echo $i18n->deus_search->answer->disagree_x; ?></label>
                                    <label for="agreabval1_2" class="deus_radio"><input type="radio" name="agreabilite_val_1" value="1" id="agreabval1_2"><?php echo $i18n->deus_search->answer->disagree; ?></label>
                                    <label for="agreabval1_3" class="deus_radio"><input type="radio" name="agreabilite_val_1" value="2" id="agreabval1_3"><?php echo $i18n->deus_search->answer->neutral; ?></label>
                                    <label for="agreabval1_4" class="deus_radio"><input type="radio" name="agreabilite_val_1" value="3" id="agreabval1_4"><?php echo $i18n->deus_search->answer->agree; ?></label>
                                    <label for="agreabval1_5" class="deus_radio"><input type="radio" name="agreabilite_val_1" value="4" id="agreabval1_5"><?php echo $i18n->deus_search->answer->agree_x; ?></label>
                                </fieldset>



                                <!--
                                    ///////
                                    //  FILTRES DE MOTS CLES
                                    ///////
                                -->

                                <fieldset class="deus_form" >
                                    <legend><?php echo $i18n->deus_search->question10; ?> </legend>
                                    <label for="mode_1" class="deus_radio"><input type="radio" name="mode_id" value="31" id="mode_1"><?php echo $i18n->deus_search->answer->mode->solo; ?></label>
                                    <label for="mode_2" class="deus_radio"><input type="radio" name="mode_id" value="" id="mode_2"><?php echo $i18n->deus_search->answer->mode->neutral; ?></label>
                                    <label for="mode_3" class="deus_radio"><input type="radio" name="mode_id" value="7" id="mode_3"><?php echo $i18n->deus_search->answer->mode->multi; ?></label>
                                    <span class="deus_mode_info deus_notice text-right deus_infos"><?php echo $i18n->deus_search->notice; ?></span>
                                </fieldset>    
                            

                                <fieldset class="deus_form" >
                                    <legend><?php echo $i18n->deus_search->question11; ?></legend>
                                    <label for="atout_1" class="deus_radio"><input type="radio" name="atout_id" value="118" id="atout_1"><?php echo $i18n->deus_search->answer->atout->story; ?></label>
                                    <label for="atout_2" class="deus_radio"><input type="radio" name="atout_id" value="" id="atout_2"><?php echo $i18n->deus_search->answer->atout->neutral; ?></label>
                                    <label for="atout_3" class="deus_radio"><input type="radio" name="atout_id" value="42" id="atout_3"><?php echo $i18n->deus_search->answer->atout->sound; ?></label>
                                    <span class="deus_mode_info deus_notice text-right deus_infos"><?php echo $i18n->deus_search->notice; ?></span>
                                </fieldset>   
                            </div>
                            
                            <div class="col-lg-12 form-group text-center submit_field">
                                <input type="submit" class="cmn-btn" value="<?php echo $i18n->deus_search->button; ?>">
                                <div class="deus_info error notice deus_issue">
                                </div>
                            </div>
                            <br />
                            <p class="text-left deus_info"  data-i18n="deus_form_notice_preform"> <?php echo $i18n->deus_search->text; ?></p> <br />
                        </div>
                    </form>	   
                </div>
            </div>
        </div>
    </div>
</section>
