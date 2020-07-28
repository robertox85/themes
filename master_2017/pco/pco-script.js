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

  window.socialWindow = function (pageUrl, title, type) {
    // do whatever you want here
    var url = "";
    var left = (screen.width - 570) / 2;
    var top = (screen.height - 570) / 2;
    var params =
      "menubar=no,toolbar=no,status=no,width=570,height=570,top=" +
      top +
      ",left=" +
      left;

    switch (type) {
      case "facebook":
        url = "https://www.facebook.com/sharer.php?u=" + pageUrl;
        window.open(url, "NewWindow", params);
        break;

      case "twitter":
        url = "https://twitter.com/intent/tweet?url=" + pageUrl;
        window.open(url, "NewWindow", params);
        break;

      case "linkedin":
        url = "https://www.linkedin.com/sharing/share-offsite/?url=" + pageUrl;
        window.open(url, "NewWindow", params);
        break;

      case "link":
        url = pageUrl;
        copyToClipboard(url);
        break;

      default:
        break;
    }
  };

  window.copyToClipboard = function (url) {
    /* Get the text field */
    var $temp = jQuery("<input>");
    jQuery("body").append($temp);
    $temp.val(url).select();
    document.execCommand("copy");
    $temp.remove();
    $("#toast-container").addClass("in");
    setTimeout(function () {
      $("#toast-container").removeClass("in");
    }, 1500);
  };

  $('.select').on('change', function () {
      
      var url = $('option:selected', this).data('link');
      
      if (url) { // require a URL
          window.location = url; // redirect
      }
      return false;
  });

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });

});
