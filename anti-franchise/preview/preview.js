/* -------------------- *\
    #PREVIEW SETUP (TO BE REMOVED ON A PRODUCTION SITE)
\* -------------------- */

/**
 * Preloader
 */

$(window).load(function() {
    $('.preloader-alt__img').fadeOut(500);
    $('.preloader_alt').delay(1000).fadeOut(500);
});


/**
 * Menu position
 */

$(".preview-setup > #menu_top > a").on('click', function() {
  $(".navbar").removeClass("hidden show").addClass("show");
  $(".sidebar__btn").removeClass("hidden show").addClass("hidden");
  $(".sidebar__menu").removeClass("sidebar__menu_hidden").addClass("sidebar__menu_hidden");
});

$(".preview-setup > #menu_side > a").on('click', function() {
  $(".navbar").removeClass("hidden show").addClass("hidden");
  $(".sidebar__btn").removeClass("hidden show").addClass("show");
});