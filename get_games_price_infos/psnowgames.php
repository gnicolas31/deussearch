<?php 

include '../connect.php';

$row = 1;
if (($handle = fopen("psnowgamelist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
        $index_psnowgames_construct = "SELECT * FROM deus_games WHERE game_name = '".$data[0]."'";
        $index_psnowgames_r = $conn->query($index_psnowgames_construct);
        $i = 0;
        $id = 0;
        while($videog_psnow = mysqli_fetch_array($index_psnowgames_r)) {
            $i++;
            $id = $videog_psnow['id'];
        }
        if($i != 0) {
            $update_psnowgames_construct = "UPDATE deus_games SET psnow = 1 WHERE id = ".$id;
            $update_psnowgames_r = $conn->query($update_psnowgames_construct);
            echo '<h1>'.$psnow_game.' - updated </h1> - '.$update_psnowgames_construct;

        } else {
            echo '<h1>'.$psnow_game.'</h1>';
        }
    }
    fclose($handle);
}

?>