// materlizz shit js enableri
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.tabs').tabs();
  });
  
  //scrollin navbar 
  var OFFSET_TOP = 50;
  $(window).scroll(function() {
          $("div.navbar nav div.nav-wrapper").length && ($("div.navbar nav div.nav-wrapper").offset().top > OFFSET_TOP ? $("nav").addClass("top-nav-collapse") : $("nav").removeClass("top-nav-collapse"))
      });