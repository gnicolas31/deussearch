

    


    <!-- footer-section start -->
    <section class="footer-section bg bg_img" data-background="<?php echo $cssandjsurlfix; ?>assets/images/footer-bg.png">
        <div class="footer-element-one">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/footer-element-one.png" alt="element">
        </div>
        <div class="footer-element-two">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/footer-element-two.png" alt="element">
        </div>
        <div class="footer-element-three">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line1.png" alt="element">
        </div>
        <div class="footer-element-four">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line1.png" alt="element">
        </div>
        <div class="footer-element-five">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line9.png" alt="element">
        </div>
        <div class="footer-element-six">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line9.png" alt="element">
        </div>
        <div class="footer-element-seven">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line3.png" alt="element">
        </div>
        <div class="footer-element-eight">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-nine">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-ten">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-eleven">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-twelve">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-thirteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/manyline.png" alt="element">
        </div>
        <div class="footer-element-fourteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-fifteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-sixteen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/line5.png" alt="element">
        </div>
        <div class="footer-element-seventeen">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/circle3.png" alt="element">
        </div>
        <div class="footer-shape">
            <img src="<?php echo $cssandjsurlfix; ?>assets/images/footer/dotline.png" alt="element">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content">
                      </div>
                    <div class="footer-bottom d-flex flex-wrap justify-content-between align-items-center">
                        <div class="footer-logo">
                            <a href="#0"><img src="<?php echo $cssandjsurlfix; ?>assets/images/banner/logo.png" alt="logo"></a>
                            <p class="deus_footer_p"> <?php echo $i18n->general->subtitle; ?></p>
                            <p class="deus_footer_p"> <?php echo $i18n->general->footer_subtitle; ?> </p>
                        </div>
                    </div>
                    <div class="copyright-area d-flex flex-wrap justify-content-between">
                        <div class="copyright-content">
                            <p>V0.9.3 - Copyright © <?php echo date(Y); ?>.<span>All Rights Reserved By </span><a href="#">DeusSearch</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- footer-section end -->
    




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 

<script>
$('#deus_form').submit(function () {
    $('.deus_issue').empty();
    var mode = $('#mode_id').val();
    var extra_val_1 = $('input[name=extraversion_val_1]:checked').val();
    var extra_val_2 = $('input[name=extraversion_val_2]:checked').val();
    var conscencieux_val_1 = $('input[name=conscencieux_val_1]:checked').val();
    var conscencieux_val_2 = $('input[name=conscencieux_val_2]:checked').val();
    var ouverture_val_1 = $('input[name=ouverture_val_1]:checked').val();
    var ouverture_val_2 = $('input[name=ouverture_val_2]:checked').val();
    var agreabilite_val_1 = $('input[name=agreabilite_val_1]:checked').val();
    var agreabilite_val_2 = $('input[name=agreabilite_val_2]:checked').val();
    var platform = $('#platform').val();
   // if(extra_val_1 === undefined || extra_val_2 === undefined || conscencieux_val_1 === undefined || conscencieux_val_2 === undefined || ouverture_val_1 === undefined || ouverture_val_2 === undefined || agreabilite_val_1 === undefined || agreabilite_val_2 === undefined) {
    //    $('.deus_issue').show();
    //    $('.deus_issue').append('<span><?php echo $i18n->deus_search->form_error_genres; ?>  </span><br />');
    //    if(platform != '') {
    //        return false;
    //    }
   // }

    if(platform == '') {
        $('.deus_issue').show();
        $('.deus_issue').append('<span><?php echo $i18n->deus_search->form_error_platform; ?> </span>');
        return false;
    }
});
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo $cssandjsurlfix; ?>deussearch.js"></script>
<!-- migarate-jquery -->
<script src="<?php echo $cssandjsurlfix; ?>assets/js/jquery-migrate-3.0.0.js"></script>
<!-- bootstrap js -->
<script src="<?php echo $cssandjsurlfix; ?>assets/js/bootstrap.min.js"></script>
<!-- nice-select js-->
<script src="<?php echo $cssandjsurlfix; ?>assets/js/jquery.nice-select.js"></script>
<!-- wow js file -->
<script src="<?php echo $cssandjsurlfix; ?>assets/js/wow.min.js"></script>
<!-- main -->
<script src="<?php echo $cssandjsurlfix; ?>assets/js/main.js"></script>

<script>
    //////////
    // trick for the menu, set active the good one with the class page
    /////
    $( document ).ready(function() {
        $('.main-menu li[active_meta="<?php echo $class_page; ?>"]').addClass('active');
        $('video').each(function( index ) {
            $(this).get(0).play();
        });  
        
        $("head").append($('<link rel="stylesheet" href="<?php echo $cssandjsurlfix; ?>assets/css/keyframes.css">'));
        $("head").append($('<link rel="stylesheet" href="<?php echo $cssandjsurlfix; ?>assets/css/nice-select.css">'));
        $("head").append($('<link rel="stylesheet" href="<?php echo $cssandjsurlfix; ?>assets/css/bootstrap.min.css">'));
        $("head").append($('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">'));
    });
</script>
</body>
</html>