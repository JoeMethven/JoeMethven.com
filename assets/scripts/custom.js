$(document).ready(function(){

	// DISABLE NOTIFCATION ON CROSS CLICK

	$('.notification-close').click(function() {
	  $('.notification-wrapper').addClass('notificationOff');
	});

	if ($('.notification-wrapper').hasClass('notificationOff')) {
	  $(this).removeClass('notificationOn');
	}

  $('.triangle').animate({
    "-webkit-transform": "skewX(45deg);"}, 0);

  // NO IMAGE DRAGGING

	$('img').on('dragstart', function(event) { event.preventDefault(); });

  // IMAGE FADE ON HOVER

	$(".logo img").hover(function() {
		$(this).fadeTo('fast', 0.5);
	}, function() {
		$(this).fadeTo('fast', 1.0);
	});

  // START IMAGE CHANGE ON HOVER

	$(".logo img").mouseover(function(){
        var src = $(this).attr("src").match() + "assets/img/logo-code-web.png";
        $(this).attr("src", src);
    }) .mouseout(function(){
        var src = $(this).attr("src").match() + ("assets/img/logo.png");
        $(this).attr("src", src);
    });

  // MENU IMAGE CHANGE ON HOVER

  $(".logo-image img, .logo-image-mobile img").mouseover(function(){
        var src = $(this).attr("src").match() + "assets/img/logo-code-web.png";
        $(this).attr("src", src);
    }) .mouseout(function(){
        var src = $(this).attr("src").match() + ("assets/img/logo-ext-bold.png");
        $(this).attr("src", src);
    });



  // LOGO FADE IN ON LOAD

	$(".logo").hide().fadeIn(1000);

  // #start BACKGROUND CHANGE COLOUR ON SCROLL

    var scroll_pos = 0;
        var animation_begin_pos = 0; //where you want the animation to begin
        var animation_end_pos = 1000; //where you want the animation to stop
        var beginning_color = new $.Color( 'rgb(96,81,163)' ); //we can set this here, but it'd probably be better to get it from the CSS; for the example we're setting it here.
        var ending_color = new $.Color( 'rgb(256,256,256)' ); //what color we want to use in the end
        $(document).scroll(function() {
            scroll_pos = $(this).scrollTop(); 
            if(scroll_pos >= animation_begin_pos && scroll_pos <= animation_end_pos ) { 
               // console.log( 'scrolling and animating' );
                //we want to calculate the relevant transitional rgb value
                var percentScrolled = scroll_pos / ( animation_end_pos - animation_begin_pos );
                var newRed = beginning_color.red() + ( ( ending_color.red() - beginning_color.red() ) * percentScrolled );
                var newGreen = beginning_color.green() + ( ( ending_color.green() - beginning_color.green() ) * percentScrolled );
                var newBlue = beginning_color.blue() + ( ( ending_color.blue() - beginning_color.blue() ) * percentScrolled );
                var newColor = new $.Color( newRed, newGreen, newBlue );
                //console.log( newColor.red(), newColor.green(), newColor.blue() );
                $('.start-wrapper').animate({ backgroundColor: newColor }, 0);
            } else if ( scroll_pos > animation_end_pos ) {
                 $('.start-wrapper').animate({ backgroundColor: ending_color }, 0);
            } else if ( scroll_pos < animation_begin_pos ) {
                 $('.start-wrapper').animate({ backgroundColor: beginning_color }, 0);
            } else { }
        });

    // ARROW LOOP & SCROLL

    setInterval(function() {
        $('.arrow-wrapper i').effect('drop', {direction: "down"},1500);
    }, 1000);

    // MENU APPEAR & ACTIVE SCROLLING

    $('#navigation li a').on('click', function(e) {
        e.preventDefault();
      });
      
      $(window).on('scroll',function() {
        var scrolltop = $(this).scrollTop();

        var $home = $("#home");
        var $about = $("#about");
        var $portfolio = $("#learning");
        var $nav = $(".start-wrapper");
        if(scrolltop >= $nav.offset().top + $nav.height()) {
          $('#navigation').fadeIn(250);
          $('#navigation li:nth-child(1) a').addClass('current');

          $('.notification-wrapper').fadeIn(300).addClass('notificationOn');
        }
        else {
          $('#navigation').fadeOut(250);
          $('.notification-wrapper').fadeOut(300).removeClass('notificationOn');
        }

        // REMOVE HOME ADD ABOUT
        if(scrolltop >= $home.offset().top + $home.height() - 75) {
          $('#navigation .main-navigation li:nth-child(1) a').removeClass('current');
          $('#navigation .main-navigation li:nth-child(2) a').addClass('current');
        }
        // REMOVE ABOUT IF ABOVE
        if(scrolltop < $home.offset().top + $home.height() - 76) {
          $('#navigation .main-navigation li:nth-child(2) a').removeClass('current');
        }
        // REMOVE ABOUT ADD PORTFOLIO
        if(scrolltop > $about.offset().top + $about.height() - 75) {
          $('#navigation .main-navigation li:nth-child(2) a').removeClass('current');
          $('#navigation .main-navigation li:nth-child(4) a').addClass('current');
        }
        // REMOVE PORTFOLIO IF ABOVE
        if(scrolltop <= $about.offset().top + $about.height() - 76) {
          $('#navigation .main-navigation li:nth-child(4) a').removeClass('current');
        }
        // ADD CONTACT REMOVE PORTFOLIO
        if(scrolltop > $portfolio.offset().top + $portfolio.height() - 75) {
          $('#navigation .main-navigation li:nth-child(4) a').removeClass('current');
          $('#navigation .main-navigation li:nth-child(5) a').addClass('current');
        }
        // IF CONTACT IS ABOVE
        if(scrolltop <= $portfolio.offset().top + $portfolio.height() - 76) {
          $('#navigation .main-navigation li:nth-child(5) a').removeClass('current');
        }
      });

  // HOME: FADE IN IMAGES ON SCROLL

    /* Every time the window is scrolled ... */
      $(window).scroll( function(){
      
          /* Check the location of each desired element */
          $('#website1').each( function(){
              
              var bottom_of_object = $('#website1').offset().top + $('.fadepoint1').outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it in */
              if( bottom_of_window > bottom_of_object ){
                  
                  $('#website1 img').fadeTo(2000, 1.0);
                      
              }
          });

          $('#website2').each( function(){
              
              var bottom_of_object2 = $('#website2').offset().top + $('.fadepoint2').outerHeight();
              var bottom_of_window2 = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it in */
              if( bottom_of_window2 > bottom_of_object2 ){
                  
                  $('#website2 img').fadeTo(2000, 1.0);
                      
              }
          });

          $('#website3').each( function(){
              
              var bottom_of_object2 = $('#website3').offset().top + $('.fadepoint3').outerHeight();
              var bottom_of_window2 = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it in */
              if( bottom_of_window2 > bottom_of_object2 ){
                  
                  $('#website3 img').fadeTo(2000, 1.0);
                      
              }
          });

          $('#website4').each( function(){
              
              var bottom_of_object2 = $('#website4').offset().top + $('.fadepoint4').outerHeight();
              var bottom_of_window2 = $(window).scrollTop() + $(window).height();
              
              /* If the object is completely visible in the window, fade it in */
              if( bottom_of_window2 > bottom_of_object2 ){
                  
                  $('#website4 img').fadeTo(2000, 1.0);
                      
              }
          });

      });

  // MENU APPEAR & ACTIVE SCROLLING

  $('#website1').on('click', function(e) {
      e.preventDefault();
    });
    
    $(window).on('scroll',function() {
      var scrolltop = $(this).scrollTop();
      var $home = $("#home");
      var $nav = $(".start-wrapper");

      if(scrolltop >= $nav.offset().top + $home.height() - 800) {
        $( "website1" ).effect( "bounce", "slow" );
      }

    });

  // ANIMATE CALL TO ACTION

  $(window).on('scroll',function() {
    var scrolltop = $(this).scrollTop();

    var $start = $("#start");
    var $action = $('#calltoaction-wrapper');

    if (scrolltop >= $action.offset().top + $start.height() - 1300 ) {
      $('#good-website').stop().animate({
        top: "-255px"},
        500);    
    } else {
      $('#good-website').stop().animate({
        top: "280px"},
        500);  
    }

  });


  // FADE IN STAGES

    // FADE IN STAGE 1
      $('.stage-1').hover(function() {
        $('.overlay-1').fadeIn(200);
      }, function() {
        $('.overlay-1').fadeOut(0);
      });

    // FADE IN STAGE 2
    $('.stage-2').hover(function() {
      $('.overlay-2').fadeIn(200);
    }, function() {
      $('.overlay-2').fadeOut(0);
    });

    // FADE IN STAGE 3
    $('.stage-3').hover(function() {
      $('.overlay-3').fadeIn(200);
    }, function() {
      $('.overlay-3').fadeOut(0);
    });

  //DROPDOWN MENU FUNCTIONALITY

    $('.dropdown').click(function() {
      $('#mobileNavigation').addClass('mobileNavigationOn');
    });

    $('.close img').click(function() {
      $('#mobileNavigation').removeClass('mobileNavigationOn');
    });

    $('#mobileNavigation li').click(function() {
      $('#mobileNavigation').removeClass('mobileNavigationOn');
    });

  // PORTFOLIO ITEM 1 FUNCTIONALITY

  $('#portfolio-item1').click(function() {
    $('#portfolioItem1').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 2 FUNCTIONALITY

  $('#portfolio-item2').click(function() {
    $('#portfolioItem2').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 3 FUNCTIONALITY

  $('#portfolio-item3').click(function() {
    $('#portfolioItem3').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 4 FUNCTIONALITY

  $('#portfolio-item4').click(function() {
    $('#portfolioItem4').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 5 FUNCTIONALITY

  $('#portfolio-item5').click(function() {
    $('#portfolioItem5').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 6 FUNCTIONALITY

  $('#portfolio-item6').click(function() {
    $('#portfolioItem6').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 7 FUNCTIONALITY

  $('#portfolio-item7').click(function() {
    $('#portfolioItem7').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO ITEM 8 FUNCTIONALITY

  $('#portfolio-item8').click(function() {
    $('#portfolioItem8').addClass('portfolioItemOn');

    $('body').css({
      'overflow-y': 'hidden'
    });
  });

  // PORTFOLIO CLOSE FUNCTIONALITY

  $('.portfolioClose').children('img').click(function() {
    $('.portfolioItem').removeClass('portfolioItemOn');
    $('body').css({
      'overflow-y': 'scroll'
    });
  });

  // ESCAPE KEY PORTOLIO CLOSE

  $(document).keyup(function(e) {
    if (e.keyCode === 27) {
      $('.portfolioItem').removeClass('portfolioItemOn');

      $('body').css({
        'overflow-y': 'scroll'
      });
    }   // escape key maps to keycode `27`
  });


  // CONTACT FORM VALIDATION

  $(function() {
      $('#contactForm').validate({
          rules: {
              name: {
                  required: true,
                  minlength: 2
              },
              email: {
                  required: true,
                  email: true
              },
              message: {
                  required: true,
                  minlength: 40
              }
          },
          messages: {
              name: {
                  required: "Please enter your name!",
                  minlength: "Your name must consist of at least 2 characters"
              },
              email: {
                  required: "I need an email so I can reply back to you!"
              },
              message: {
                  required: "You forgot to enter the message!",
                  minlength: "Your message needs to be longer!"
              }
          },
          submitHandler: function(form) {
              $(form).ajaxSubmit({
                  type:"POST",
                  data: $(form).serialize(),
                  url:"/php/mail.php",
                  success: function() {
                      $('#contactForm :input').attr('disabled', 'disabled');
                      $('#contactForm').fadeTo( "slow", 0.15, function() {
                          $(this).find(':input').attr('disabled', 'disabled');
                          $(this).find('label').css('cursor','default');
                          $('#success').fadeIn();
                      });
                  },
                  error: function() {
                      $('#contactForm').fadeTo( "slow", 0.15, function() {
                          $('#error').fadeIn();
                      });
                  }
              });
            }
        });
    });
  
});
