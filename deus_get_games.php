<?php
include('connect.php');

$total_rating_count = $_POST['total_rating_count'];
$genres = $_POST['genres'];
$recent_date = $_POST['recent_date'];
$oldest_date = $_POST['oldest_date'];
$platform = $_POST['platform'];

if($_POST['keywords'] == '') {
    $tag_innerjoin = '';
    $tag_count = '';
    $tag_order_by = '';
    $tag_where = '';
} else {
    $tag_count = ',COUNT(distinct games_to_tags.tag_id)  as num_tags';
    $tag_innerjoin = ' INNER JOIN games_to_tags ON (deus_games.id_rawg = games_to_tags.game_id)';
    $tag_order_by = 'num_tags DESC,';
    $tag_where = 'AND games_to_tags.tag_id IN("'.$_POST['keywords'].'")';
}

$note_min = 3.5;
$nombre_note_min = 200;

$deus_request_construct = "SELECT *,id_rawg,COUNT(distinct games_to_genres.genre_id) as num_genres ".$tag_count." FROM deus_games INNER JOIN games_to_platforms ON (deus_games.id_rawg = games_to_platforms.game_id) INNER JOIN games_to_genres ON (deus_games.id_rawg = games_to_genres.game_id) ".$tag_innerjoin." WHERE released > ".$oldest_date." AND game_hidden IS NULL AND released < ".$recent_date." AND rating > ".$note_min." AND rating_count > ".$nombre_note_min." ".$tag_where." AND games_to_genres.genre_id IN(".$genres.")  AND games_to_platforms.platform_id IN(".$platform.") GROUP BY deus_games.id ORDER BY num_genres DESC, ".$tag_order_by." rating DESC LIMIT 150";


$deus_request_result = $conn->query($deus_request_construct);
$deus_results = [];
while($deus_result = mysqli_fetch_array($deus_request_result))
{
    $deus_results[] = $deus_result;
}
echo json_encode($deus_results);

?>