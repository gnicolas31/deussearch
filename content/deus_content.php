<?php 

function afficher_responses($val_name, $i18n) {
    ?>
    <div class="container">
        <div class="radio-tile-group">
            <?php 
                $answers_responses = [$i18n->deus_search->answer->disagree_x, $i18n->deus_search->answer->disagree, $i18n->deus_search->answer->neutral, $i18n->deus_search->answer->agree, $i18n->deus_search->answer->agree_x];
                $i = 0;
                while($i < 5) {
                    ?>
                        <div class="input-container">
                            <input id="<?php echo $val_name.'_'.$i; ?>" class="radio-button" type="radio" name="<?php echo $val_name; ?>" value="<?php echo $i; ?>" />
                            <div class="radio-tile">
                        <!--   <div class="icon bike-icon">
                                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/>
                                </svg>
                            </div> -->
                            <label for="<?php echo $val_name.'_'.$i; ?>" class="radio-tile-label"><?php echo $answers_responses[$i]; ?></label>
                            </div>
                        </div>
                    <?php 
                    $i++;
                }
            ?>
        </div>
    </div>
    <?php 
}

function afficher_fin_de_step_buttons($i18n) {
    ?>
        <input type="button" name="next" href="#" class="next action-button" value="<?php echo $i18n->deus_search->steps->next; ?>" /> 

    <?php 
}

?>

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
                    <!-- progressbar -->
                   
                    <form  method="post" action="deus_result.php" id="msform" class="contact-form mt-5">    
                        <fieldset>
                            <div class="deus_platform col-lg-12 form-group">
                                <div class="deus_form">
                                    <legend> <?php echo $i18n->deus_search->question1; ?> </legend>
                                    <select class="element select medium" id="platform" name="platform"> 
                                    <option value="" selected="selected"><?php echo $i18n->deus_search->answer->select->holder; ?></option>
                                        <option value="7" >Nintendo Switch </option> 
                                        <option value="4" ><?php echo $i18n->deus_search->platform->pc; ?></option>
                                        <option value="5" >MacOs</option>
                                        <option value="18" >Playstation 4</option>
                                        <option value="1" >Xbox One</option>
                                    </select>
                                </div>
                            </div>
                            <span class="steps"><?php echo $i18n->deus_search->steps->step; ?> 1 - 4</span>
                            <input type="button" name="next" class="next action-button" value="<?php echo $i18n->deus_search->steps->next; ?>" />
                        </fieldset>
                        <fieldset>
                            <div class="deus_form">
                                <legend> <?php echo $i18n->deus_search->question2; ?> </legend>
                                <?php afficher_responses('extraversion_val_1', $i18n); ?>
                           </div>

                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question3; ?> </legend>
                                <?php afficher_responses('conscencieux_val_1', $i18n); ?>
                            </div>

                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question4; ?> </legend>
                                <?php afficher_responses('extraversion_val_2', $i18n); ?>
                            </div>

                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question5; ?> </legend>
                                <?php afficher_responses('ouverture_val_1', $i18n); ?>
                            </div>
                            <span class="steps"><?php echo $i18n->deus_search->steps->step; ?> 2 - 4</span>
                            <?php afficher_fin_de_step_buttons($i18n); ?>
                        </fieldset>
                        <fieldset>
                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question6; ?> </legend>
                                <?php afficher_responses('agreabilite_val_2', $i18n); ?>
                            </div>
                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question7; ?> </legend>
                                <?php afficher_responses('conscencieux_val_2', $i18n); ?>
                            </div>

                            <div class="deus_form">
                                <legend><?php echo $i18n->deus_search->question8; ?> </legend>
                                <?php afficher_responses('ouverture_val_2', $i18n); ?>
                            </div>

                            <div class="deus_form" >
                                <legend><?php echo $i18n->deus_search->question9; ?> </legend>
                                <?php afficher_responses('agreabilite_val_1', $i18n); ?>
                            </div>
                            <span class="steps"><?php echo $i18n->deus_search->steps->step; ?> 3 - 4</span>
                            <?php afficher_fin_de_step_buttons($i18n); ?>
                        </fieldset>
                        <fieldset>
                                <div class="deus_form" >
                                    <legend><?php echo $i18n->deus_search->question10; ?> </legend>
                                    <div class="container">
                                        <div class="radio-tile-group">
                                            <div class="input-container">
                                                <input id="solo" class="radio-button" type="checkbox" name="mode_id[]" value="31" />
                                                <div class="radio-tile">
                                                <!--   <div class="icon bike-icon">
                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/>
                                                        </svg>
                                                    </div> -->
                                                    <label for="solo" class="radio-tile-label"><?php echo $i18n->deus_search->answer->mode->solo; ?></label>
                                                </div>
                                            </div>
                                            <div class="input-container">
                                                <input id="multi" class="radio-button" type="checkbox" name="mode_id[]" value="7" />
                                                <div class="radio-tile">
                                                <!--   <div class="icon bike-icon">
                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/>
                                                        </svg>
                                                    </div> -->
                                                    <label for="multi" class="radio-tile-label"><?php echo $i18n->deus_search->answer->mode->multi; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <?php
                                    $keywords_cloud = [$i18n->deus_search->keyword_1 => 36, 
                                    $i18n->deus_search->keyword_2 => 4, 
                                    $i18n->deus_search->keyword_3 => 32,  
                                    $i18n->deus_search->keyword_4 => 111, 
                                    $i18n->deus_search->keyword_5 => 6, 
                                    $i18n->deus_search->keyword_6 => 118,
                                    $i18n->deus_search->keyword_7 => 165, 
                                    $i18n->deus_search->keyword_8 => 41,
                                    $i18n->deus_search->keyword_9 => 15
                                ];
                                ?>
                                <div class="deus_form" >
                                    <legend> <?php echo $i18n->deus_search->question_specificites; ?></legend>

                                    <div class="container">
                                            <div class="radio-tile-group">
                                            <?php 
                                                $i = 0;
                                                foreach($keywords_cloud as $key_option => $value_option) {
                                            ?>
                                            <div class="input-container">
                                                <input id="<?php echo $value_option.'_'.$i; ?>" class="radio-button key_cloud_check" type="checkbox" name="key_cloud[]" value="<?php echo $value_option; ?>" />
                                                <div class="radio-tile">
                                                <!--   <div class="icon bike-icon">
                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M15.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM5 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm5.8-10l2.4-2.4.8.8c1.3 1.3 3 2.1 5.1 2.1V9c-1.5 0-2.7-.6-3.6-1.5l-1.9-1.9c-.5-.4-1-.6-1.6-.6s-1.1.2-1.4.6L7.8 8.4c-.4.4-.6.9-.6 1.4 0 .6.2 1.1.6 1.4L11 14v5h2v-6.2l-2.2-2.3zM19 12c-2.8 0-5 2.2-5 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 8.5c-1.9 0-3.5-1.6-3.5-3.5s1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5z"/>
                                                        </svg>
                                                    </div> -->
                                                    <label for="<?php echo $value_option.'_'.$i; ?>" class="radio-tile-label"><?php echo $key_option ?></label>
                                                </div>
                                            </div>
                                        <?php 
                                            $i++;
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>    


                                <div class="col-lg-12 form-group text-center submit_field">
                                    <input type="submit" class="cmn-btn" value="<?php echo $i18n->deus_search->button; ?>">
                                    <div class="deus_info error notice deus_issue">
                                    </div>
                                </div>
                        </fieldset> 
                    </form>	   
                    <ul id="progressbar">
                        <li class="active" id="account"><strong><?php echo $i18n->deus_search->steps->step1; ?></strong></li>
                        <li id="question1"><strong><?php echo $i18n->deus_search->steps->step2; ?></strong></li>
                        <li id="question2"><strong><?php echo $i18n->deus_search->steps->step3; ?></strong></li>
                        <li id="payment"><strong><?php echo $i18n->deus_search->steps->step4; ?></strong></li>

                    </ul>
                    <div class="progress mb-5">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
          
                    <p class="text-left deus_info mt-5" > <?php echo $i18n->deus_search->text; ?></p> <br />   
                </div>
            </div>
        </div>
    </div>
</section>
