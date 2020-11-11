<?php     include('connect.php');
    $numero_page = 1;
    if($_GET['nb']) {
        $numero_page = $_GET['nb']+1;
    }
    $json = file_get_contents('https://api.rawg.io/api/tags?page='.$numero_page.'&ordering=-rating&page_size=10&key=1a07bf406da8478d952155742cde59ce');
    $tags = json_decode($json);
    foreach($tags->results as $tag) {
        $deus_check_if_tag_already_exist_request = "SELECT id FROM tags_rawg WHERE id_rawg = ".$tag->id." LIMIT 1";
   
        $deus_check_if_tag_already_exist_result = $conn->query($deus_check_if_tag_already_exist_request);
        if ($deus_check_if_game_already_exist_result->num_rows == 0) {
            $name = mysqli_real_escape_string($conn,$tag->name);

            $save_tag_in_bdd_req = "INSERT INTO tags_rawg (id_rawg, game_count, tag_name) VALUES (".$tag->id.",".$tag->games_count.",'".$name."')";

            $save_tag_in_bdd = $conn->query($save_tag_in_bdd_req); 
        }
    }
    header('Location: http://localhost/gamefinder/demo/getrawgtags.php?nb='.$numero_page);

  ?>