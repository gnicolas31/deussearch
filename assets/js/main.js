!function(e){e(document).ready(function(){e(".preloader").delay(500).animate({opacity:"0"},500,function(){e(".preloader").css("display","none")}),e("select").niceSelect(),e(".bg_img").css("background-image",function(){var a="url("+e(this).data("background")+")";return a})});var a=e(window).width()>1199?80:0;e(".sidebar").length&&e(".sidebar").theiaStickySidebar({containerSelector:".blog-section",additionalMarginTop:a,minWidth:992}),setInterval(function(){e(".banner-group-shape").addClass("active")},1e3);var t=e(".header-section");e(window).on("scroll",function(){e(window).scrollTop()>500?t.addClass("animated fadeInDown header-fixed"):t.removeClass("animated fadeInDown header-fixed")}),e(".navbar li a").on("click",function(){var a=e(this).parent("li");a.hasClass("show")?(a.removeClass("show"),a.find("li").removeClass("show")):(a.addClass("show"),a.siblings("li").removeClass("show"),a.siblings("li").find("li").removeClass("show"))});var i=e(".scrollToTop");e(window).on("scroll",function(){e(this).scrollTop()<500?i.removeClass("active"):i.addClass("active")}),e(document).on("click",".search-bar, .skip",function(){e(".header-form").toggleClass("active")}),e(document).on("click",".ellipsis-bar",function(){e(".header-top-area").toggleClass("active"),e(".overlay").addClass("active")}),e(".header-bar").on("click",function(){e(this).toggleClass("active"),e(".header-btn-group").toggleClass("active wow")}),e(document).on("click",".overlay",function(){e(this).removeClass("active"),e(".header-bar").removeClass("active"),e(".menu").removeClass("active"),e(".header-top-area").removeClass("active")}),e(".faq-wrapper .faq-title").on("click",function(a){var t=e(this).parent(".faq-item");t.hasClass("open")?(t.removeClass("open"),t.find(".faq-content").removeClass("open"),t.find(".faq-content").slideUp(300,"swing")):(t.addClass("open"),t.children(".faq-content").slideDown(300,"swing"),t.siblings(".faq-item").children(".faq-content").slideUp(300,"swing"),t.siblings(".faq-item").removeClass("open"),t.siblings(".faq-item").find(".faq-title").removeClass("open"),t.siblings(".taq-item").find(".faq-content").slideUp(300,"swing"))}),e(".faq-wrapper--style .faq-title").on("click",function(a){var t=e(this).parent(".faq-item--style");t.hasClass("open")?(t.removeClass("open"),t.find(".faq-content--style").removeClass("open"),t.find(".faq-content--style").slideUp(300,"swing")):(t.addClass("open"),t.children(".faq-content--style").slideDown(300,"swing"),t.siblings(".faq-item--style").children(".faq-content--style").slideUp(300,"swing"),t.siblings(".faq-item--style").removeClass("open"),t.siblings(".faq-item--style").find(".faq-title").removeClass("open"),t.siblings(".taq-item--style").find(".faq-content--style").slideUp(300,"swing"))}),e(".filter-btn-group").on("click","button",function(){var a=e(this).attr("data-filter");$grid.isotope({filter:a})}),e(".filter-btn-group").on("click","button",function(){e(this).addClass("active").siblings().removeClass("active")}),e(window).on("load",function(){e(".filter-btn-group").on("click","button",function(){var a=e(this).attr("data-filter");a=filterFns[a]||a,$grid.isotope({filter:a})}),e(".filter-btn-group").each(function(a,t){var i=e(t);i.on("click","button",function(){i.find(".active").removeClass("active"),e(this).addClass("active")})})}),e(window).on("load",function(){e(".filter-btn-group").on("click","button",function(){var a=e(this).attr("data-filter");a=filterFns[a]||a,$grid.isotope({filter:a})}),e(".filter-btn-group").each(function(a,t){var i=e(t);i.on("click","button",function(){i.find(".active").removeClass("active"),e(this).addClass("active")})})}),e(".account-control-button").on("click",function(){e(".account-area").toggleClass("change-form")}),e(".progressbar").each(function(){e(this).find(".bar").animate({width:e(this).attr("data-perc")},8e3),e(this).find(".label").animate({left:e(this).attr("data-perc")},8e3)});var n=e(".faq-tab-wrapper"),s=n.find(".tab-menu li"),o=n.find(".tab-cont > .tab-item");o.not(":nth-child(1)").fadeOut(350),s.each(function(a){e(this).attr("data-tab","tab"+a)}),o.each(function(a){e(this).attr("data-tab","tab"+a)}),s.on("click",function(){var a=e(this).data("tab");n.find(o).fadeOut(350),n.find(o).filter("[data-tab="+a+"]").fadeIn(350)}),e(".tab-menu > li").on("click",function(){e(".tab-menu li.active").removeClass("active"),e(this).addClass("active")}),e(".remove-cart").on("click",function(a){a.preventDefault(),e(this).parent().parent().hide(300)}),e("#cart-button").on("click",function(a){a.preventDefault(),e(".cart-sidebar-area").addClass("active"),e(".body-overlay").addClass("active")}),e("#body-overlay").on("click",function(a){a.preventDefault(),e(".cart-sidebar-area").removeClass("active"),e(".body-overlay").removeClass("active")}),e(".side-sidebar-close-btn").on("click",function(a){a.preventDefault(),e(".cart-sidebar-area").removeClass("active"),e(".body-overlay").removeClass("active")}),e(".search-bar a").on("click",function(){e(".header-top-search-area").toggleClass("active")})}(jQuery);