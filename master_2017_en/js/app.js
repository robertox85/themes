var siteurl = 'http://lgs.luiss.it/';

requirejs.config({
    "baseUrl": siteurl +"wp-content/themes/lbs_2015/js",
    "paths": {
      "app": siteurl +"wp-content/themes/lbs_2015/js",
      "jquery": siteurl +"wp-content/themes/lbs_2015/js/jquery-3.1.1.min",
	  font: siteurl +"wp-content/themes/lbs_2015/js/plugins/font",
	  propertyParser : siteurl +"wp-content/themes/lbs_2015/js/plugins/propertyParser.min",
    },
	
	shim:{

        deps:["jquery"], 
       

   }
	
});





requirejs(["main.min"]);
define([
    'font!google,families:[Oswald]'
  ]);

