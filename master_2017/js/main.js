$(function() {


//back to top

	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 300;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav#breadcrumb-top').addClass('fixed');
				 $('#site-canvas').addClass('notransform');
				 
			 }
			 else {
				 $('nav#breadcrumb-top').removeClass('fixed');
				 $('#site-canvas').removeClass('notransform');
			 }
		});
		
		
		$('#backtotop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	

// Search Box
$( ".sb-icon-search" ).click(function() {
  $( "#sb-search" ).toggle( "slow");
  $('.searchbar').toggleClass('drop-open');
  if($("#mobile-menu-trigger" ).css('display') !== 'none') { 
  $("#menu-main-container" ).hide();
  $('.main-menu-toggle').removeClass('main-menu-toggle-active');
  } 
});

// Mobile menu
  $( ".main-menu-toggle" ).click(function() {
  $( "#sb-search" ).hide();
  $('.searchbar').removeClass('drop-open')
  $("#menu-main-container" ).slideToggle( "fast");
  $('.main-menu-toggle').toggleClass('main-menu-toggle-active');
});

// lcoal menu
  $( ".menu-local-toggle" ).click(function() {
  $( "#menu-local-menu" ).toggle( "slow");
  $(this).toggleClass('drop-open');
});




// offcavnvas actions

// menu

$('.toggle-off-canvas-menu').click(function() {
toggleNav();
});

// LUISS network

$('#network-offcanvas-trigger, #network-container-offcanvas button.close-menu').click(function() {
toggleNetwork();
});






});


function toggleNav() {
if ($('#site-wrapper').hasClass('show-nav')) {
// Do things on Nav Close
$('#site-wrapper').removeClass('show-nav');
} else {
// Do things on Nav Open
$('#site-wrapper').addClass('show-nav');
}

//$('#site-wrapper').toggleClass('show-nav');
}

function toggleNetwork() {
if ($('#site-wrapper').hasClass('show-network')) {
$('#site-wrapper').removeClass('show-network');
$('#site-canvas').removeClass('show-network');
} else {
$('#site-wrapper').addClass('show-network');
$('#site-canvas').addClass('show-network');
}
}

sfHover = function() {
	var sfEls = document.getElementById("menu-main").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" hover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" hover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);