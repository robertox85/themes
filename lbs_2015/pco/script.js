jQuery(document).ready(function ($) {


  var key_facts = $(".colonna_key_facts");

  var row_default = $(".row-default");
  var row_fixed = $(".row-fixed");

  var target_position = key_facts.position().top;
  var target_height = key_facts.outerHeight();
  var main = $(".colonna_main");

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if ($(window).width() >= 992) {
      if (scroll >= target_position) {
        row_default.addClass("row-hidden");
        row_fixed.removeClass("row-hidden");
        key_facts.addClass("fixed");
        main.css("padding-top", target_height + "px");
      }

      if (scroll < target_position) {
        row_default.removeClass("row-hidden");
        row_fixed.addClass("row-hidden");
        key_facts.removeClass("fixed");
        main.css("padding-top", "");
      }
    }
  });

  
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
      $hamburger.toggleClass("is-active");
      // Do something else, like open/close menu
    });
  
  });
  