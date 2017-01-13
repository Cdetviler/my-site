$(document).ready(function() {
  $('.drawer').drawer({
    showOverlay: false
  });
  $('.drawer').on('drawer.opened', function(){
    $(".wrapper").off('click');
    $(".wrapper").on('click', function(){
        $('.drawer').drawer('close');
    });

  });
  //event handler for accordian skill bars
  $('.skill-bar').click(function(){
    var clicked = $(this);
    $('.skill-bar').each(function(){
      current = $(this);
      console.log(current.context.id);
      console.log(clicked.context.id)
      $(this).children('.fa-caret-right').toggleClass('fa-rotate-90')

      if(clicked.context.id == current.context.id){

      }
      else{
        $(this).parent().siblings('.skill-content').hide("slow");
        $(this).children('.fa-caret-right').removeClass('fa-rotate-90')
      }
    });
    $(this).parent().siblings('.skill-content').slideToggle();

  });
});

//  snippet from:
//  https://css-tricks.com/snippets/jquery/smooth-scrolling/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    var that = $(this);
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      console.log(that.parent().attr("class"));

      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top-20
        }, 1000);
        return false;
      }
    }
  });
});

$(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop(); // how many pixels you've scrolled
        var aboutos = $('#about-me').offset().top-50; // pixels to the top of div1
        var projectsos = $('#my-projects').offset().top-50;
        var skillsos = $('#skill-set').offset().top-50;
        var skillsos1 = $('#skill-set').offset().top-$(window).height();
        var contactos = $('#contact').offset().top-200;
        // if you've scrolled further than the top of div1 plus it's height
        // change the color. either by adding a class or setting a css property
        if(scroll < aboutos){
          $(".nav-tab").removeClass("active-menu");
          $(".draw-nav-li").removeClass("active-menu");
          $('#home-drawer-tab').addClass('active-menu');
          $('#home-tab').addClass("active-menu");
        }
        if(scroll > aboutos){
          $(".nav-tab").removeClass("active-menu");
          $(".draw-nav-li").removeClass("active-menu");
          $('#about-drawer-tab').addClass('active-menu');
          $('#about-tab').addClass("active-menu");
        }
        if(scroll > projectsos){
          $(".nav-tab").removeClass("active-menu");
          $(".draw-nav-li").removeClass("active-menu");
          $('#projects-drawer-tab').addClass('active-menu');
          $('#projects-tab').addClass("active-menu");
        }
        if(scroll > skillsos1){
          $(".width-90").css("width","90%");
          $(".width-70").css("width","70%");
          $(".width-80").css("width","80%");

        }
        if(scroll > skillsos){
          $(".nav-tab").removeClass("active-menu");
          $(".draw-nav-li").removeClass("active-menu");
          $('#skills-drawer-tab').addClass('active-menu');
          $('#skills-tab').addClass("active-menu");
        }
        if(scroll > contactos){
          $(".nav-tab").removeClass("active-menu");
          $(".draw-nav-li").removeClass("active-menu");
          $('#contact-drawer-tab').addClass('active-menu');
          $('#contact-tab').addClass("active-menu");
        }
    });
});
