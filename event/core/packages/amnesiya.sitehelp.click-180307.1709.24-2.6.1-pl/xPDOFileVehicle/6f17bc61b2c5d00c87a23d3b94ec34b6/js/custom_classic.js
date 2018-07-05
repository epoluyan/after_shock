/*------------------------------------------------------------------
Project:        Wolfram
Author:         Yevgeny Simzikov
URL:            http://simpleqode.com/
                https://twitter.com/YevSim
                https://www.facebook.com/simpleqode
Version:        2.2.0
Created:        18/08/2014
Last change:    30/04/2015
-------------------------------------------------------------------*/

/**
 * Make navbar active 
 */

$("body").waypoint(function() {
    $(".navbar").toggleClass("navbar__initial");
    return false;
}, { offset: "-20px" });

/**
 * Change sidebar link color
 */

$("body").waypoint(function() {
    $(".sidebar__btn").toggleClass("sidebar__btn_alt");
    return false;
}, { offset: "-100%" });

/**
 * Smooth scroll to anchor
 */


$(document).ready(function(){
   $('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
});

