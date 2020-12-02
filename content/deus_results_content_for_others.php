<?php 
$get_a_search_c = "SELECT nouveaute, challenge, stimulation, harmonie, platform, tags, genres FROM sauvegarde_recherche WHERE u_id='".$_GET['id']."' LIMIT 1";                                
$get_a_search_r = $conn->query($get_a_search_c);
?>
<!-- inner-banner-section start -->
 <section class="inner-banner-section inner-banner-section--style bg-overlay-black bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/<?php echo $header_banner_img; ?>">
        <div class="container">
            
        </div>
    </section>
    <!-- inner-banner-section end -->

    <!-- contact-section-start -->
    <section class="contact-section bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="contact-area deus_version deus_bloc">
                        <h1 class="title_deus_test"> <?php echo $i18n->deus_results->title; ?></h1>
                        <div class="contact-form-area resultdiv mr-1 ml-1">
                            <div class="row justify-content-center mb-30-none" id="deus_result">
                                <?php 
                                    if(mysqli_num_rows($get_a_search_r) == 0) {
                                        echo '<p>Mauvais identifiant de recherche</p>';
                                    } else {
                                    if($_GET['id']) {
                                        $recherche = mysqli_fetch_array($get_a_search_r);
                                        $nouveaute_reference = $recherche['nouveaute'];
                                        $challenge_reference = $recherche['challenge'];
                                        $stimulation_reference = $recherche['stimulation'];
                                        $harmonie_reference = $recherche['harmonie'];
                                        $id_platform = $recherche['platform'];
                                        $genres_inclus_string = $recherche['genres'];
                                        $keywords = $recherche['tags'];
                                        $today_timestamp = time();
                                ?>
                                    <div class="col-md-3">
                                        <!-- Display Graph -->
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
                                        <div class="deus_canvas col-lg-12">
                                            <span class="text-left deus_notice deus_info mb-4"><?php echo $i18n->deus_results_others->notice; ?>
                                            </span>
                                            <h2 class="text-left"> <?php echo $i18n->deus_results->profile; ?> </h2> 
                                            <canvas id="myChart" width="770" height="650"></canvas>
                                            <section class="deus_meta_infos text-left">
                                                <div>
                                                    <span><?php echo $i18n->deus_results->genres; ?>   </span>
                                                    <ul class="deus_result_genres_sim">
                                                        <?php 
                                                        $genre_tab = explode(',', $genres_inclus_string);
                                                        foreach($genre_tab as $genre) { 
                                                            $get_a_search_genre = "SELECT name_genre FROM ponderation_genres WHERE id_rawg='".$genre."' LIMIT 1";
                                                            $get_a_search_genre_r = $conn->query($get_a_search_genre);
                                                            $genre = mysqli_fetch_array($get_a_search_genre_r);
                                                            echo '<li class="text-center li-deus_result_genres">'.$genre[0].'</li>';
                                                        } 
                                                        ?>
                                                    </ul>
                                                </div>
                                                <?php 
                                                if($keywords != '') {
                                                ?>
                                                    <div>
                                                        <span> <?php echo $i18n->deus_results->specificity; ?> </span>
                                                        <ul class="deus_result_genres_sim">
                                                            <?php 
                                                                $tags_tab = explode(',', $keywords);
                                                                foreach($tags_tab as $tag) { 
                                                                    $get_a_search_tag = "SELECT tag_name FROM tags_rawg WHERE id_rawg='".$tag."' LIMIT 1";
                                                                    $get_a_search_tag_r = $conn->query($get_a_search_tag);
                                                                    $tag = mysqli_fetch_array($get_a_search_tag_r);
                                                                    echo '<li class="text-center li-deus_result_genres">'.$tag[0].'</li>';
                                                                } 
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php 
                                                }
                                                ?>
                                            </section>
                                        </div>
                                        <script>
                                        //// 
                                        // pie chart at deus result

                                        var ctx = document.getElementById("myChart");
                                        var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['<?php echo $i18n->deus_results->decouverte; ?>', 'Challenge', 'Stimulation', 'Immersion'],
                                            datasets: [{
                                                data: [ <?php echo $nouveaute_reference; ?>,  <?php echo $challenge_reference; ?>,  <?php echo $stimulation_reference; ?>,  <?php echo $harmonie_reference; ?>],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        min:0,
                                                        display: false,
                                                        stepSize:0.5,
                                                        beginAtZero: true
                                                    },
                                                    gridLines: {
                                                        display:false
                                                    },
                                                    offset:true
                                                }],
                                                xAxes: [{
                                                    gridLines: {
                                                        display:false
                                                    }
                                                }]
                                            },
                                            tooltips: {
                                                enabled: false
                                            },
                                            legend:{display:false}
                                        }
                                        });
    

                                        // 2020 1577836800
                                        // 2017 1483228800 
                                        // 2015 1451606400
                                        // 2013 1356998400
                                    </script>
                                    </div>
                                    <div class="col-md-9">
                                        <section class="col-lg-12">
                                            <h3 class="text-left deus_result_titles">  <?php echo $i18n->deus_results->lastthreeyears; ?></h3> 
                                            <div class="row col-lg-12" id="thisyear">
                                                <script>
                                                    window.addEventListener("DOMContentLoaded", (event) => {
                                                        do_the_deus_magic("<?php echo $genres_inclus_string; ?>", <?php echo $id_platform; ?>,  <?php echo $today_timestamp; ?>,   1483228800 ,'thisyear', 6, "<?php echo $keywords; ?>", "<?php echo $_GET['id']; ?>", '<?php echo $cssandjsurlfix; ?>');
                                                    });
                                                </script>
                                            </div>
                                        </section>
                                        <section class="col-lg-12">
                                            <h3 class="text-left deus_result_titles"> <?php echo $i18n->deus_results->threetofiveyears; ?> </h3> 
                                            <div class="row" id="threetosevenyears">
                                                <script>
                                                    window.addEventListener("DOMContentLoaded", (event) => {
                                                        do_the_deus_magic("<?php echo $genres_inclus_string; ?>", <?php echo $id_platform; ?>,  1483228800  , 1451606400 ,'threetosevenyears', 3, "<?php echo $keywords; ?>", "<?php echo $_GET['id']; ?>", '<?php echo $cssandjsurlfix; ?>');
                                                    });
                                                </script>
                                            </div>
                                        </section>
                                        <section  class="col-lg-12">
                                            <h3 class="text-left deus_result_titles"> <?php echo $i18n->deus_results->fivetotenyears; ?>  </h3> 
                                            <div class="row col-lg-12" id="morethansevenyears">
                                                <script>
                                                    window.addEventListener("DOMContentLoaded", (event) => {
                                                        do_the_deus_magic("<?php echo $genres_inclus_string; ?>", <?php echo $id_platform; ?>,1356998400 , 1104537600  ,'morethansevenyears',3, "<?php echo $keywords; ?>", "<?php echo $_GET['id']; ?>", '<?php echo $cssandjsurlfix; ?>');
                                                    });
                                                </script>
                                            </div>
                                        </section>
                                    
                                        <span class="text-left deus_notice deus_info"><?php echo $i18n->deus_results->notice; ?>
                                        </span>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
    include 'game_modal.php'
    ?>
    <!-- contact-section-end -->

