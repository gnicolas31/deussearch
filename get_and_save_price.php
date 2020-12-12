<?php 

$cssandjsurlfix = '../';
include '../connect.php';

include '../header.php';
include '../footer.php';
$limit = $_GET['l'];
$offset = $_GET['o'];
?>

<div class="container deus_list_index">
    <div class="deus_index_row_games">
        <?php 
            $index_videogames_construct = "SELECT id,slug,game_name FROM deus_games WHERE rating > 4 LIMIT ".$limit." OFFSET ".$offset;
            $index_videogames_r = $conn->query($index_videogames_construct);
            while($index_videogames = mysqli_fetch_array($index_videogames_r)) {
               
                ?>
                    <script>
                        $( document ).ready(function() {
                            settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "https://cheapshark-game-deals.p.rapidapi.com/games?title=<?php echo $index_videogames['slug']; ?>&exact=0&limit=10",
                                "method": "GET",
                                "headers": {
                                    "x-rapidapi-key": "4d829797f8msh43a17d4bae9eaecp1bc4edjsn3331d3d707d0",
                                    "x-rapidapi-host": "cheapshark-game-deals.p.rapidapi.com"
                                }
                            };

                            jQuery.ajax(settings).done(function (response) {
                                if(response[0]) {
                                    var cheapest = response[0].cheapest;
                                    var title = response[0].external;
                                    //console.log(response[0]);
                                    var dealID = response[0].cheapestDealID;
                                    console.log(title+ ' - '+cheapest+' - https://www.cheapshark.com/redirect?dealID='+dealID);

                                    var deal_url = 'https://www.cheapshark.com/redirect?dealID='+dealID
                                    jQuery.ajax({
                                        method: "POST",
                                        url: "../saveprice.php",
                                        data: {'id':<?php echo $index_videogames['id']; ?>, 'price':cheapest, 'url':deal_url },
                                        success:function( response ) {
                                            console.log(response);       
                                        }
                                    });

                                } else {

                                }

                            });
                        });
                       
                    </script>
                    <h4 class="title"> <?php echo $index_videogames['game_name']; ?></h4>
             <?php       
            }
        ?>
        
    </div>
    
</div>

