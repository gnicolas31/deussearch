<?php 

include '../connect.php';
?>

<div class="container deus_list_index">
    <div class="deus_index_row_games">
        <?php 
            $games_price_clean_construct = "UPDATE deus_games SET deal_url = NULL, deal_price = 0";
            $games_price_clean_r = $conn->query($games_price_clean_construct);
            $index_videogames_construct = "SELECT id,slug,game_name FROM deus_games WHERE rating >= 3 AND rating_count >= 100 LIMIT 1688";
            $index_videogames_r = $conn->query($index_videogames_construct);
            $i = 0;
            while($index_videogames = mysqli_fetch_array($index_videogames_r)) {
                echo '<h1>'.$i.' __ '.$index_videogames['slug'].'</h1>';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://cheapshark-game-deals.p.rapidapi.com/games?limit=60&title=".$index_videogames['slug']."&exact=1",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => [
                        "x-rapidapi-host: cheapshark-game-deals.p.rapidapi.com",
                        "x-rapidapi-key: 4d829797f8msh43a17d4bae9eaecp1bc4edjsn3331d3d707d0"
                    ],
                ]);
                
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {

                    $response = json_decode($response);
                    $prix = 0;
                    $id = $index_videogames['id'];
                    $steamappid = $response[0]->steamAppID;
                    if($response[0]) {
                        $prix = $response[0]->cheapest;
                        $url = 'https://www.cheapshark.com/redirect?dealID='.$response[0]->cheapestDealID;
                        $update_game_price_r = "UPDATE deus_games SET deal_price = ".floatval($prix).", deal_url = '".$url."', steamappid = ".$steamappid." WHERE id = ".$id;
                    } else {
                    }
                    

                    $update_game_price = $conn->query($update_game_price_r);
                    echo '<p> mis a jour, prix :'.$prix.' dispo ici : '.$url;
                }
                sleep(3);
                ?>
             <?php
             $i++;       
            }
        ?>
        
    </div>
    
</div>

