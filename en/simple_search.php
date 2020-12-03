<?php 

include('../connect.php');

$title = $_POST['title'];

$simple_search_construct = "SELECT game_name,slug FROM deus_games WHERE game_name LIKE '%".$title."%' ORDER BY  rating DESC LIMIT 5";

//echo $simple_search_construct;
$simple_search_result = $conn->query($simple_search_construct);

echo '<ul>';

while ($simple_result = mysqli_fetch_array($simple_search_result)) {
      echo '<li> <a target="_blank" href="https://rawg.io/games/'.$simple_result['slug'].'">'.$simple_result['game_name'].'</a></li>';
}

if($lang == 'fr') { 
      $deus_test_url = 'test-de-personnalite-trouver-jeu-video';
} else {
      $deus_test_url = 'personnality-test-find-video-games';
} 

echo '<li class="deus_result_simple" > <a target="_blank" href="'.$deus_test_url.'"> Deus Search test </a></li>';
echo '</ul>';

?>