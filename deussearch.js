////////
// the fucking magic
/////
function do_the_deus_magic(array_genres, platform,today_timestamp, oldest_timestamp, dom_elem, limit_tab, keywords, unic_id_ofsave, urlfixer, price_max) {
    
    $('#deus_loader span').text('Patientez quelques instants, on recherche les jeux vidéo qui vous correspondent.');
    $.ajax({
        method: "POST",
        url: urlfixer+"deus_get_games.php",
        //  ou platform, themes et genres correspondent, ou date est entre le filtre, un min rating adapté (sur pc trop de jeux) a la console, limit 3 et tri adapté (au nombre de vote sur pc, a la note sur les consoles) 

        data: {'genres' : array_genres, 'price_max' : price_max, 'keywords' : keywords, 'platform' : platform, 'recent_date' : today_timestamp, 'oldest_date' : oldest_timestamp },

      //  data: "fields name, total_rating, url, id, slug, genres.name, videos.video_id, cover.image_id, websites.url, websites.category ; where platforms = "+platform+"  & genres = ("+array_genres+") & category = 0 & first_release_date <"+today_timestamp+" & first_release_date > "+oldest_timestamp+" "+param_added+"; limit 500; sort "+sort_by+" desc;",
        success:function( deus_results ) {
            deus_results = JSON.parse(deus_results);
            if(deus_results.length > 0) {
                var i_displayed=0;
                var deus_save_results = [];
                for (var i = 0; i < deus_results.length; i++) {

                    // pour tous les resultats
                    if(i_displayed < limit_tab) {
                        // et pour le nombre de resultat max affichés
                            // je construit le bloc
                        deus_save_results[i_displayed] = deus_results[i].id;
                        var rating = deus_results[i].rating;
                        var genre = '';
                        if(deus_results[i].genres) {
                            genre = deus_results[i].genres[0].name;
                        }
                        var cover = deus_results[i].img_url;
                        var video_bloc = '';
                        var gamepass_bloc = '';
                        var psnow_bloc = '';
                        var price_bloc = '<p class="deus_result_price m-0 p-0 pl-2 pr-2" data-toggle="tooltip" data-placement="top" title="Prix non définitif">';
                        var tag_bloc = '';
                        if(deus_results[i].clip_url.length > 1) {
                            video_bloc = '<video class="deus_video" id="video_player" controls loop muted width="250"><source src="'+deus_results[i].clip_url+'" type="video/mp4"> Sorry, your browser doesn\'t support embedded videos.</video>';
                        }
                        if(deus_results[i].num_tags) {
                            tag_bloc = '<p class="deus_same_val pb-0" ><span>'+deus_results[i].num_tags+'</span> préférence(s) </p>';
                        }
                        if(deus_results[i].gamepass != 1) {
                        } else {
                            gamepass_bloc = '<p class="deus_result_price gmp m-0 p-0 pl-2 pr-2"> GamePass </p>';
                        }
                        if(deus_results[i].psnow != 1) {
                        } else {
                            psnow_bloc = '<p class="deus_result_price gmp psn m-0 p-0 pl-2 pr-2"> GamePass </p>';
                        }
                        if(deus_results[i].deal_url === null) {
                            price_bloc = price_bloc+' ?? € </p>';
                        } else {
                            price_bloc = price_bloc+'≈ '+deus_results[i].deal_price+' €</p>';
                        }
                        var id_rawg = deus_results[i].id_rawg;
                        var bg_url = 'background-image:url("'+cover+'");';

                        var deal_info = '';
                        if(deus_results[i].deal_url !== null) {
                            deal_info =  'game_best_price="'+deus_results[i].deal_price+'" game_best_url="'+deus_results[i].deal_url+'"';
                        }


                        // j'ajoute le bloc
                        $("#"+dom_elem).append('<div class="game-item deus_result" style='+bg_url+' game_id="'+id_rawg+'"  data-toggle="modal" data-target="#game_modal" '+deal_info+' id="game"> \
                            <a class="game_url">\
                                <div class="game_deus_bg"></div>\
                                <a class="game_link"> \
                                    <div class="game-content"> \
                                        <div class="game-content-body"> \
                                            <h3 class="title">'+deus_results[i].game_name+'</h3>\
                                            <p class="deus_same_val pb-0" ><span>'+deus_results[i].num_genres+'</span> genre(s) </p>\
                                            '+tag_bloc+'\
                                        </div> \
                                    </div> \
                                    <i class="fas fa-long-arrow-alt-right deus_see_more" title="Plus d\'informations sur le jeu"></i>\
                                    <span class="deus_see_more game_rating" title="Note du jeu">' + parseInt(rating*20)+'<i class="fas fa-star"></i> </span>\
                                    '+price_bloc+'\
                                    '+video_bloc+'\
                                    '+gamepass_bloc+'\
                                    '+psnow_bloc+'\
                                </a> \
                            </a>\
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

    // le prix des jeux dans le formulaire 
    $('#price_max').change(function() {
        $('#price_container').text($(this).val()+' €');
    });

    // limiter le nombre de mots clés
    var keyw_cloud = 4; // real limit is this number - 1
    $('.key_cloud_check').on('change', function(evt) {
    if($('.key_cloud_check:checked').length >= keyw_cloud) {
        this.checked = false;
    }
    });    


    $('#platform').change(function() {
        if($('#platform').val() == 4) {
            $('.pc_price').show();
        }     
        else {
            $('.pc_price').hide();
        } 
    });

    /// open game modal on click
    $('.deus_results_page #game, .home #game').click(function() {
        var game_id = $(this).attr('game_id');
        var game_best_url = "";
        if($(this).attr('game_best_url')) {
            game_best_url = $(this).attr('game_best_url');
        }
        var game_price = 0;
        if($(this).attr('game_best_price')) {
            game_price = $(this).attr('game_best_price');
        }
        $.ajax({
            method: "GET",
            url: "https://api.rawg.io/api/games/"+game_id,
          //  data: "fields name, total_rating, url, id, slug, genres.name, videos.video_id, cover.image_id, websites.url, websites.category ; where platforms = "+platform+"  & genres = ("+array_genres+") & category = 0 & first_release_date <"+today_timestamp+" & first_release_date > "+oldest_timestamp+" "+param_added+"; limit 500; sort "+sort_by+" desc;",
            success:function( game_info ) {
                $('#modal_descr i').addClass('fa-plus').removeClass('fa-minus');
                /* je nettoie toute la modal */
                $('#game_modal #genres,#game_modal .description, #game_stores, #game_modal #video').empty();
               
                $('.modal-content #game_description_modal').removeClass('active');
                /* header */
                $('#game_modal .modal-title').text(game_info.name);
                $('#game_modal .modal_link').attr('href', game_info.website);

                var rating = game_info.rating*20;
                $('#game_modal #note').text(Math.round( rating ));

                /* body */

                $('#game_modal .modal-body').css("background-image", "url(" + game_info.background_image + ")");
                for(i_genres = 0; i_genres < game_info.genres.length; i_genres++) {
                    $('#game_modal #genres').append('<span class="badge badge-primary mr-2">'+game_info.genres[i_genres].name+'</span>');
                }

                // translate the text
                var curr_lang = $('html').attr('lang');
                const data = JSON.stringify({
                    "q": game_info.description,
                    "source": "en",
                    "target": curr_lang
                });
                
                const xhr = new XMLHttpRequest();
                xhr.withCredentials = true;
                
                xhr.addEventListener("readystatechange", function () {
                    if (this.readyState === this.DONE) {
                        var descr_translated = JSON.parse(this.responseText);
                        $('#game_modal .modal-body #game_description_modal').html(descr_translated.data.translations.translatedText);
                    }
                });
                
                xhr.open("POST", "https://deep-translate1.p.rapidapi.com/language/translate/v2");
                xhr.setRequestHeader("content-type", "application/json");
                xhr.setRequestHeader("x-rapidapi-key", "4d829797f8msh43a17d4bae9eaecp1bc4edjsn3331d3d707d0");
                xhr.setRequestHeader("x-rapidapi-host", "deep-translate1.p.rapidapi.com");
                
                xhr.send(data);

                $('#game_modal .modal-body #game_description_modal').html(game_info.description);
                for(i_link = 0; i_link < game_info.stores.length; i_link++) {
                    $('#game_modal .modal-body #game_stores').append('<a class="btn mb-1 btn-sm g_link btn-dark" target="_blank" href="'+game_info.stores[i_link].url+' "> '+game_info.stores[i_link].store.name+' </a>');
                }
            //    $('#game_modal .modal-body #game_stores').append('<a class="btn mb-1 btn-sm g_link btn-dark" target="_blank" href="'+game_info.website+'"> Site officiel </a>');
                if(game_best_url.length > 1) {
                    $('#game_modal .modal-body #game_stores').append('<a class="golden btn mb-1 btn-sm g_link btn-dark" target="_blank" href="'+game_best_url+' "> ≈ '+game_price+' €</a>');
                } 
               
                if(game_info.clip !== null) {
                    $('#game_modal .modal-body #video').append('<video controls><source src="'+game_info.clip.clip+'" type="video/mp4"> Sorry, your browser doesn\'t support embedded videos.</video>');
                    
                    game_have_video = true;
                    if(game_info.clip.video !== null) {
                        $('#game_modal .modal-body #video').append('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+game_info.clip.video+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
                    } 
                } else {
                    $('#game_modal .modal-body #video').append(' 0 Media ');
                }

            }
        });

    });
    $('.deus_results_page #game_modal').on('hidden.bs.modal', function (e) {
        $('#game_modal #video').empty();
    });


    // open profile slide on mobile
    $('#mobile_profile_button_slider').click(function() {
        $('#mobile_profile_slider').toggleClass('active');
    });

});



$('.modal-content #modal_descr').click(function() { 
    $('.modal-content #game_description_modal').toggleClass('active');
    if($('.modal-content #game_description_modal').hasClass('active')) {
        $('#modal_descr i').removeClass('fa-plus').addClass('fa-minus');
    } else {
        $('#modal_descr i').addClass('fa-plus').removeClass('fa-minus');
    }
});

function share_fb(url,quote) {
    window.open('https://www.facebook.com/sharer/sharer.php?u='+url+'&quote='+quote,'facebook-share-dialog',"width=626, height=436");
}

