$(document).ready(function(){
// test navbar

  $(".form_edit_click").click(function(){
    alert($(this).parent().text());
  })

$(window).scroll(function(){
// $("#mainnavbar").css({ 'opacity': calc });
   // console.log($(window).scrollTop())
    if($(window).scrollTop()>600){

        $("#mainnavbar").removeClass("navtransparente");
         // $("#mainnavbar").css({ 'opacity': 1 });
    } else{
        $("#mainnavbar").addClass("navtransparente");
         // $("#mainnavbar").css({ 'opacity': 0 });
    }
});




});
