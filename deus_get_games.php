<?php
include('connect.php');

$total_rating_count = $_POST['total_rating_count'];
$genres = $_POST['genres'];

$prix_max = $_POST['price_max'];

$recent_date = $_POST['recent_date'];
$oldest_date = $_POST['oldest_date'];
$platform = $_POST['platform'];

if($_POST['keywords'] == '') {
    $tag_innerjoin = '';
    $tag_count = '';
    $tag_order_by = '';
    $tag_where = '';
} else {
    $tag_count = ',SUM(case WHEN games_to_tags.tag_id IN('.$_POST['keywords'].') AND games_to_tags.game_id = deus_games.id_rawg THEN 1 ELSE 0 END) as num_tags';
    $tag_innerjoin = ' INNER JOIN games_to_tags ON (deus_games.id_rawg = games_to_tags.game_id)';
    $tag_order_by = 'num_tags DESC,';
    $tag_where = 'AND games_to_tags.tag_id IN('.$_POST['keywords'].')';
}

$note_min = 3;
$nombre_note_min = 100;

$deus_request_construct = "SELECT *,id_rawg,COUNT(distinct games_to_genres.genre_id) as num_genres ".$tag_count.", (CAST(COUNT(distinct games_to_genres.genre_id)as decimal)*1.3 + CAST(SUM(case WHEN games_to_tags.tag_id IN(".$_POST['keywords'].") AND games_to_tags.game_id = deus_games.id_rawg THEN 1 ELSE 0 END) as decimal)) as ratio_deus FROM deus_games INNER JOIN games_to_platforms ON (deus_games.id_rawg = games_to_platforms.game_id) INNER JOIN games_to_genres ON (deus_games.id_rawg = games_to_genres.game_id) ".$tag_innerjoin." WHERE released > ".$oldest_date." AND game_hidden IS NULL AND released < ".$recent_date." AND rating > ".$note_min." AND rating_count >= ".$nombre_note_min." AND games_to_genres.genre_id IN(".$genres.") AND deal_price < ".$prix_max." AND games_to_platforms.platform_id IN(".$platform.") GROUP BY deus_games.id ORDER BY ratio_deus DESC, rating DESC LIMIT 6";



//echo $deus_request_construct;

$deus_results = [];

$deus_request_result = $conn->query($deus_request_construct);
while($deus_result = mysqli_fetch_array($deus_request_result))
{

//    $deus_result['3'] = str_replace("'", " ", $deus_result['3']);
//    $deus_result['game_name'] = str_replace("'", " ", $deus_result['game_name']);
    $deus_result['3'] = utf8_encode($deus_result['3']);
    $deus_result['game_name'] = utf8_encode( $deus_result['game_name']); 
  
      
    $deus_results[] = $deus_result; 
}

echo json_encode($deus_results);
// switch (json_last_error()) {
//     case JSON_ERROR_NONE:
//         echo ' - Aucune erreur';
//     break;
//     case JSON_ERROR_DEPTH:
//         echo ' - Profondeur maximale atteinte';
//     break;
//     case JSON_ERROR_STATE_MISMATCH:
//         echo ' - Inadéquation des modes ou underflow';
//     break;
//     case JSON_ERROR_CTRL_CHAR:
//         echo ' - Erreur lors du contrôle des caractères';
//     break;
//     case JSON_ERROR_SYNTAX:
//         echo ' - Erreur de syntaxe ; JSON malformé';
//     break;
//     case JSON_ERROR_UTF8:
//         echo ' - Caractères UTF-8 malformés, probablement une erreur d\'encodage';
//     break;
//     default:
//         echo ' - Erreur inconnue';
//     break;
//} 


?>