<div class="modal fade" id="game_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <a target="_blank" class="modal_link" title="<?php echo $i18n->deus_results->modal->website_link; ?>">
                    <i class="mr-2 fas fa-link ml-2 mt-2"></i>
                </a>
                <span title="<?php echo $i18n->deus_results->modal->note_title; ?> " class="modal_note"> <span id="note"> </span> <i class="fas fa-star"></i> </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="genres">
                </div>
                <div id="game_description_modal" class="description mt-2">
                </div>
                <p id="modal_descr" class="pb-0 mb-3" title="Cliquez pour plus de description"> <i class="mr-2 fas fa-plus"></i>description </p>
                <h3> <?php echo $i18n->deus_results->modal->available_title; ?> </h3>
                <div id="game_stores">
                </div>
                <h3 class='mt-4 video_title'> <?php echo $i18n->deus_results->modal->videos_title; ?>  </h3>
                <div id="video">
                </div>
            </div>
        </div>
    </div>
</div>