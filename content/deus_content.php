<?php
    ////// 
    // créer les tableaux de classifications des genres, des jeux, des mots clés
    /////

    // tableaux des reponses à la question "joueur régulier ?'

    // tableaux generaux
    // tableau RPG based (Role playing , Hack and Slash, Adventure)
    $joueur_rpg= '12,25,31';

    /// si oui
        // tableau strategy (Tactical, Turn-based Strategy, Real Time strategy, MOBA, Hack And Slash.Beath em up)
        $joueur_regulier_strategy = '24,16,11,15,36,25';
        // tableau PVP (Figthing, Shooter, Racing, Arcade)
        $joueur_regulier_pvp = '4,5,10,33';
        // j'assemble les deux tableaux
                                                                         // NEEED DEBUG  $tableau_joueur_regulier = $joueur_regulier_strategy.','.$joueur_regulier_pvp + $joueur_rpg;
        $tableau_joueur_regulier = '24,16,11,15,36,25,4,5,10,33,12,25,31';

    // si non
        // tableau PVE (Platform, Simulator, Arcade)
        $joueur_non_regulier_pve = '8,13,33';
        // Tableau Puzzle like (Quiz, Puzzle, Visual novel, Point n click)
        $joueur_non_regulier_puzzle= '26,9,34,2';
        // j'assemble les deux tableaux
        
                                                                                  // NEEED DEBUG  $tableau_joueur_non_regulier = $joueur_non_regulier_pve+','+$joueur_rpg+','+$joueur_non_regulier_puzzle;
        $tableau_joueur_non_regulier = '8,13,33,12,25,31,26,9,34,2';
    
    // Si moyen
        $tableau_joueur_moyen = '4,5,10,33,8,13,33';



    // tableaux des reponses à la question personnalité (mots clés)

        //// REVEUR (fantasy, sci-fi, role playing, adventure, magic, abstract, action)
            $personnalite_reveur = '6671,5937,4942,5788,1242,1235,1';

        //// REBELLE (shooter, horror, first person shooter, action games)
            $personnalite_rebelle = '2661,2105,1720,2898';

        //// PROMOTEURS (strategy, simulation, sports)
            $personnalite_promoteur = '5301,4942,4590,2791';

        /// PERSEVERANT (role playing, simulation, strategy, mini games, high score)
            $personnalite_perseverant_travaillomane = '4942,4590,5301,1232,1797, 41';

        ///EMPATHIQUE (death, fantasy, horror, comedy)
            $personnalite_empathique = '1770, 6671, 2105, 2728';


    // test de tableaux des reponses à la question personnalité (themes)
        //// REVEUR (Mystery, sci fi, fantasy, open world)
            $personnalite_reveur = '43,18,17,38';

        //// REBELLE (Action, party,Warfare, thriller)
            $personnalite_rebelle = '1,40,39,20';

        //// PROMOTEURS (4x, non fiction, business, sandbox)
            $personnalite_promoteur = '41,32,28,33';

        /// PERSEVERANT (Stealth, horro, survival, sandbox, 4x)
            $personnalite_perseverant_travaillomane = '23, 19, 21, 33, 41';

        ///EMPATHIQUE (Romance, historical, drama, comedy, 4x, fantasy)
            $personnalite_empathique = '44,22,31,27,41, 17';




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
                        <form  method="post" action="deus_result.php" id="deus_form" class="contact-form">                 
                                <div class="deus_platform col-lg-12 form-group  text-center">
                                    <fieldset class="deus_form">
                                        <legend> <?php echo $i18n->deus_search->question1; ?> </legend>
                                        <select class="element select medium" id="platform" name="platform"> 
                                        <option value="" selected="selected"><?php echo $i18n->deus_search->answer->select->holder; ?></option>
                                    <!--     <option value="20" >Nintendo DS</option> -->
                                            <option value="7" >Nintendo Switch </option> 
                                    <!--     <option value="5" >Nintendo Wii</option> -->
                                    <!--     <option value="41" >Nintendo Wii U</option> -->
                                           <option value="4" >Ordinateur</option>
                                           <option value="5" >MacOs</option>
                                           <option value="18" >Playstation 4</option>
                                        <!--    <option value="9" >Playstation 3</option> -->
                                         <!--   <option value="8" >Playstation 2</option>-->
                                           <option value="1" >Xbox One</option>
                                    <!--     <option value="12" >Xbox 360</option> -->
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 form-group text-left">

                                    <!--
                                        ///////
                                        //  FILTRES DE GENRES (IGDB) PAR PONDERATION 
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
                                        <label for="ouvval1_1" class="deus_radio"><input type="radio" name="ouverture_val_1" value="0" id="ouvval1_1">Pas du tout</label>
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
                                        //  FILTRES DE MOTS CLES (RAWG) 
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
                                

<!--
                                           <fieldset class="deus_form" >
                                        <legend>Graphique préférés</legend>
                                        <label for="graphic_1" class="deus_radio"><input type="radio" name="graphic_id" value="45" id="graphic_1">2D</label>
                                        <label for="graphic_2" class="deus_radio"><input type="radio" name="graphic_id" value="" id="graphic_2">Sans importance</label>
                                        <label for="graphic_3" class="deus_radio"><input type="radio" name="graphic_id" value="571" id="graphic_3">3D</label>
                                    </fieldset> 
                                  <fieldset class="deus_form" >
                                        <legend>Univers</legend>
                                        <label for="univers_1" class="deus_radio"><input type="radio" name="univers_id" value="32" id="univers_1">Sci-fi</label>
                                        <label for="univers_2" class="deus_radio"><input type="radio" name="univers_id" value="66" id="univers_2">Medieval</label>
                                        <label for="univers_3" class="deus_radio"><input type="radio" name="univers_id" value="64" id="univers_3">Fantasy</label>
                                    </fieldset>

                                   <fieldset class="deus_form" >
                                        <legend>Rythme</legend>
                                        <label for="rythme_1" class="deus_radio"><input type="radio" name="rythme_id" value="131" id="rythme_1">Fast-Paced</label>
                                        <label for="rythme_2" class="deus_radio"><input type="radio" name="rythme_id" value="138" id="rythme_2">Relaxing</label>
                                    </fieldset>

                                    <fieldset class="deus_form" >
                                        <legend>Immersion graphique</legend>
                                        <label for="imme_graph_1" class="deus_radio"><input type="radio" name="imme_graph_id" value="13" id="imme_graph_1">Atmospheric</label>
                                        <label for="imme_graph_2" class="deus_radio"><input type="radio" name="imme_graph_id" value="112" id="imme_graph_2">Minimalist</label>
                                    </fieldset> -->


                                </div>
                               
                                <div class="col-lg-12 form-group text-center submit_field">
                                    <input type="submit" class="cmn-btn" value="<?php echo $i18n->deus_search->button; ?>">
                                    <div class="deus_info error notice deus_issue">
                                    </div>
                                </div>
                                <p class="text-left deus_info"  data-i18n="deus_form_notice_preform"> <?php echo $i18n->deus_search->text; ?></p> <br />
                            </div>
                        </form>	   
                    </div>
                </div>
            </div>
        </div>
    </section>
