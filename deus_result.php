<?php 
    $class_page = "deus";
    $title = "Deus Search - Résultats du test";
    $lang = "fr";
    include 'connect.php';
    include 'header.php';
    if($_GET['id']) {
        include 'content/deus_results_content_for_others.php';  
    } else {
        include 'content/deus_results_content.php';    
    }
    include 'footer.php';
?>