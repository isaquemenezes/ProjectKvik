/**
 *
 * ANIMATION ON NAVBAR
 *
 */
var scroll = false;
var scrollTop = $(window).scrollTop();
if(scrollTop >= 600) {
	$('#mainnavbar').addClass(
		'fixed-top'
	);
	scroll=true;
}
$(document).ready(function(){

  var scrollTop = 0;
  $(window).scroll(function(){

    scrollTop = $(window).scrollTop();
    if(scrollTop >= 600) {
      if(scroll===false) {
				$('#mainnavbar').addClass(
					'fixed-top animated fadeInDownBig slow'
				);
				$('body').css('padding-top','65px');
				scroll=true;
			}
    } else if (scrollTop < 600) {
			if(scroll===true) {
	      $('#mainnavbar').removeClass(
					'fixed-top animated fadeInDownBig slow'
				);
				// $('#mainnavbar').addClass(
				// 	'fixed-top animated fadeOutUpBig slow'
				// );
				$('body').css('padding-top','0');
				scroll=false;
			}
    }

  });

});




/**
 *
 * OTHERS
 *
 */
// AFFICHAGE DES COMMENTAIRES DES VIDEOS
$("#p1").click(function(){
  $("#paragraphe3,#paragraphe2").hide();
  $("#paragraphe1").show();
});

$("#p2").click(function(){
  $("#paragraphe1,#paragraphe3").hide();
  $("#paragraphe2").show();
});

$("#p3").click(function(){
  $("#paragraphe1,#paragraphe2").hide();
  $("#paragraphe3").show();
});
