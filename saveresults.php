<?php
include('connect.php');

$unic_id = $_POST['unic_id'];
$jeu1 = $_POST['results'][0];
$jeu2 = $_POST['results'][1];
$jeu3 = $_POST['results'][2];
$jeu4 = $_POST['results'][3];
$jeu5 = $_POST['results'][4];
$jeu6 = $_POST['results'][5];

$sql_first = "INSERT INTO sauvegarde_resultats (jeu1,jeu2,jeu3,jeu4,jeu5,jeu6, u_id) VALUES ('".$jeu1."','".$jeu2."','".$jeu3."','".$jeu4."','".$jeu5."','".$jeu6."','".$unic_id."')";
echo $sql_first;
$result_first = $conn->query($sql_first);


?>