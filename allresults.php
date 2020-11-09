<?php 
    $class_page = "deus_all_results";
    include 'connect.php';
    include 'header.php';
?>

 <!-- inner-banner-section start -->
 <section class="inner-banner-section inner-banner-section--style bg-overlay-black bg bg_img" data-background="assets/images/<?php echo $header_banner_img; ?>">
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
                        <div class="contact-form-area">
                            <div class="row justify-content-center mb-30-none" id="deus_result">

                            <h2> Recherches </h2>
                            <?php 
                                $get_all_recherches_r = "SELECT * FROM sauvegarde_recherche ORDER BY created DESC";
                                $get_all_recherches_q = $conn->query($get_all_recherches_r);

                                echo '<table class="deus_allsearch_table">';
                                echo '<tr><th scope="col">Created</th><th scope="col">Nouveaute</th><th scope="col">Challenge</th><th scope="col">Stimulation</th><th scope="col">Harmonie</th><th scope="col">genres</th><th scope="col">tags</th><th scope="col">Link</th></tr>';
                                while($recherche = mysqli_fetch_array($get_all_recherches_q)) {
                                    $created = date("Y-m-d H:i:s", $recherche['created']);
                                    echo '<tr><td>'.$created.'</td><td>'.$recherche['nouveaute'].'</td><td>'.$recherche['challenge'].'</td><td>'.$recherche['stimulation'].'</td><td>'.$recherche['harmonie'].'</td><td>'.$recherche['genres'].'</td><td>'.$recherche['tags'].'</td><td><a href="?id='.$recherche['u_id'].'">#'.$recherche['u_id'].'</a></td></tr>';
                                }
                                echo '</table>';
                            ?>

                                <h2> Résultats </h2>
                                <?php 
                                if($_GET['id']) {
                                    $get_results_for_a_search_r = "SELECT * FROM sauvegarde_resultats WHERE u_id = '".$_GET['id']."'";
                                    $get_results_for_a_search_q = $conn->query($get_results_for_a_search_r);
                                    echo '<table class="deus_allsearch_table">';
                                    echo '<tr><th scope="col">Jeu 1</th><th scope="col">Jeu 2</th><th scope="col">Jeu 3</th><th scope="col">Jeu 4</th><th scope="col">Jeu 5</th><th scope="col">Jeu 6</th></tr>';
                                    while($resultats = mysqli_fetch_array($get_results_for_a_search_q)) {
                                        echo '<tr><td>'.$resultats["jeu1"].'</td><td>'.$resultats["jeu2"].'</td><td>'.$resultats["jeu3"].'</td><td>'.$resultats["jeu4"].'</td><td>'.$resultats["jeu5"].'</td><td>';
                                    }
                                    echo '</table>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section-end -->


<?php     
    include 'footer.php';
?>