////////
// the fucking magic
/////
function do_the_deus_magic(array_genres, platform,today_timestamp, oldest_timestamp, dom_elem, limit_tab, keywords, unic_id_ofsave, urlfixer) {
    
    $('#deus_loader span').text('Filtrage par genres');
    $.ajax({
        method: "POST",
        url: urlfixer+"deus_get_games.php",
        //  ou platform, themes et genres correspondent, ou date est entre le filtre, un min rating adapté (sur pc trop de jeux) a la console, limit 3 et tri adapté (au nombre de vote sur pc, a la note sur les consoles) 

        data: {'genres' : array_genres, 'keywords' : keywords, 'platform' : platform, 'recent_date' : today_timestamp, 'oldest_date' : oldest_timestamp },

      //  data: "fields name, total_rating, url, id, slug, genres.name, videos.video_id, cover.image_id, websites.url, websites.category ; where platforms = "+platform+"  & genres = ("+array_genres+") & category = 0 & first_release_date <"+today_timestamp+" & first_release_date > "+oldest_timestamp+" "+param_added+"; limit 500; sort "+sort_by+" desc;",
        success:function( deus_results ) {
            deus_results = JSON.parse(deus_results);
            if(deus_results.length > 0) {
                var i_displayed=0;
                var deus_save_results = [];
                for (var i = 0; i < deus_results.length; i++) {
                    if(i_displayed < limit_tab) {
                        deus_save_results[i_displayed] = deus_results[i].id;
                        var rating = deus_results[i].rating;
                        var deus_result_game_id = deus_results[i].id;
                        var genre = '';
                        if(deus_results[i].genres) {
                            genre = deus_results[i].genres[0].name;
                        }
                        var cover = deus_results[i].img_url;
                        var video_bloc = '';
                        var tag_bloc = '';
                        // si rawg alors je prends
                        if(deus_results[i].clip_url.length > 1) {
                            video_bloc = '<video class="deus_video" id="video_player" loop muted width="250"><source src="'+deus_results[i].clip_url+'" type="video/mp4"> Sorry, your browser doesn\'t support embedded videos.</video>';
                        }
                        if(deus_results[i].num_tags) {
                            tag_bloc = '<p class="deus_same_val" ><span>'+deus_results[i].num_tags+'</span> spécificité(s) </p>';
                        }
                        // sinon rien
                        var bg_url = 'background-image:url("'+cover+'");';
                        $("#"+dom_elem).append('<div class="col-lg-4 col-md-6 col-sm-12 mb-30"> \
                        <div class="game-item deus_result" style='+bg_url+' game_id="'+deus_results[i].id+'" id="game"> \
                            <a class="game_url" target="_blank" href="https://rawg.io/games/'+deus_results[i].slug+'">\
                                <div class="game_deus_bg"></div>\
                                <a href="https://rawg.io/games/'+deus_results[i].slug+'" target="_blank" class="game_link"> \
                                    <div class="game-content"> \
                                        <div class="game-content-body"> \
                                            <h3 class="title">'+deus_results[i].game_name+'</h3>\
                                            <p class="deus_same_val" ><span>'+deus_results[i].num_genres+'</span> genre(s) </p>\
                                            '+tag_bloc+'\
                                            '+video_bloc+'\
                                        </div> \
                                    </div> \
                                    <i class="fas fa-long-arrow-alt-right deus_see_more" title="Plus d\'informations sur le jeu"></i>\
                                </a> \
                            </a>\
                            </div>\
                        </div>');
                        i_displayed++;
                    }
                }
                $.ajax({
                    method: "POST",
                    url: urlfixer+"saveresults.php",
                    data: { 'unic_id' : unic_id_ofsave, 'results' : deus_save_results}
                });
            } else {
                $("#"+dom_elem).append('<p> Aucun résultat sur cette tranche temporelle. </p>');
            }
        },          
        async: false // <- this turns it into synchronous
    });
   // return deus_returned;
}

$(document).ready(function() {
    // la boite de recherche en haut
    $("#searchbox").on("keyup", function() {
        var title = $(this).val();
        $.ajax({
            method: "POST",
            url: "simple_search.php",
            data : {'title': title},
            success:function(result_html) {
                $('#search_result').empty();
                $('#search_result').append(result_html);
            }
        });
    });


    // le formulaire deus search
    $('.deus_radio').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

});