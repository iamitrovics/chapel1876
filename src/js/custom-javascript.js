(function($) {

	jQuery(document).ready(function() {

      $('#hero-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        fade:true,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnFocus: false,
        pauseOnHover:false,
        pauseOnDotsHover: false,   
    });

    $('#reviews-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 4000,
      pauseOnFocus: false,
      pauseOnHover:false,
      pauseOnDotsHover: false,   
      adaptiveHeight: true
  });    

      jQuery(window).scroll(function () {
          if ($(this).scrollTop() > 0) {
              $('#top-bar').addClass("sticky");
          } else {
              $('#top-bar').removeClass("sticky");
          }
      });    

        // Menu
        $('#mobile-menu--btn a').click(function(){
          $('.main-menu-sidebar').addClass("menu-active");
          $('.menu-overlay').addClass("active-overlay");
          $(this).toggleClass('open');
      });

      // Menu
      $('.close-menu-btn').click(function(){
          $('.main-menu-sidebar').removeClass("menu-active");
          $('.menu-overlay').removeClass("active-overlay");
      });

          $(function() {

          var menu_ul = $('.nav-links > li.has-menu  ul'),
              menu_a  = $('.nav-links > li.has-menu  small');
          
          menu_ul.hide();
          
          menu_a.click(function(e) {
              e.preventDefault();
              if(!$(this).hasClass('active')) {
              menu_a.removeClass('active');
              menu_ul.filter(':visible').slideUp('normal');
              $(this).addClass('active').next().stop(true,true).slideDown('normal');
              } else {
              $(this).removeClass('active');
              $(this).next().stop(true,true).slideUp('normal');
              }
          });
          
          });
          
      $(".nav-links > li.has-menu  small ").attr("href","javascript:;");

      var $menu = $('#menu');

      $(document).mouseup(function (e) {
        if (!$menu.is(e.target) // if the target of the click isn't the container...
        && $menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
          $menu.removeClass('menu-active');
          $('.menu-overlay').removeClass("active-overlay");
        }
      });        

  });

  $(function() {
    $('#float-cta a').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 50
          }, 1000);
          return false;
        }
      }
    });
  });    
  
  $(function() {
    $('.header-services .container .hero-content .btn-down').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 50
          }, 1000);
          return false;
        }
      }
    });
  });   

  $(function() {
    $('#pricing-wrapper .pricing-card').matchHeight();
  });

  $().fancybox({
    selector : '.wp-block-image a'
  });
    
  
})(jQuery);
