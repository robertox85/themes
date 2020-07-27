jQuery(document).ready(function ($) {
  

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
    $("#toast-container").addClass('in');
    setTimeout(function(){
        $("#toast-container").removeClass('in');
    },1500)
  };

});
