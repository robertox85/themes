var siteurl = '//businessschool.luiss.it/';

requirejs.config({
    "baseUrl": siteurl +"wp-content/themes/lbs_2015/js",
    "shim" : {
        "bootstrap" : { "deps" :['jquery'] },
    },
    "paths": {
      "app": siteurl +"wp-content/themes/lbs_2015/js",
      "jquery": siteurl +"wp-content/themes/lbs_2015/js/jquery-3.1.1.min",
      font: siteurl +"wp-content/themes/lbs_2015/js/plugins/font",
      propertyParser : siteurl +"wp-content/themes/lbs_2015/js/plugins/propertyParser.min",
      "bootstrap" :  siteurl +"wp-content/themes/lbs_2015/js/bootstrap.min",
    },
    


});



requirejs(["main.min","bootstrap"]);


