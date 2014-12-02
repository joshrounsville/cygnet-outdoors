'use strict';

$(function() {

  //////// set booleans for window size
  var body = $('body');
  var isPhone = body.css('padding-bottom') === '1px';
  var isDesktop = body.css('margin-bottom') !== '1px';
  var notDesktop = body.css('margin-bottom') === '1px';

  $(window).resize(function() {
    isPhone = body.css('padding-bottom') === '1px';
    isDesktop = body.css('margin-bottom') !== '1px';
    notDesktop = body.css('margin-bottom') === '1px';
  });



  //////// svg fallback
  Modernizr.addTest('svgasimg', document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1'));

  if ( !Modernizr.svgasimg ) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }


  //////// setup request animation frame shim
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for( var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x ) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); }, timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
    }

    if (!window.cancelAnimationFrame) {
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
    }
  }());


  //////// Arc Text Plugin
  //var $curvedText = $('.curved-text');
  //$curvedText.arctext({radius: 1100});



  //////// Simple Parallax
  var parallax = $('.parallax');

  var activateParallax = function() {
    var windowPosition = $(window).scrollTop();
    var bgPositionOne = -windowPosition * 0.3;
    var bgPositionTwo = -windowPosition * 0.05;

    $(parallax).css('background-position', '-3% '+ bgPositionOne + '%' +', 104%' + bgPositionTwo + '%');

  };

  if ( isDesktop ) {
    activateParallax();

    $(window).on('scroll', function() {
      window.requestAnimationFrame(activateParallax);
    });
  }




  //////// carousel setup
  var slider = $('.slider');

  slider.owlCarousel({
    items : 4,
    navigation : true,
    mouseDrag : false,
    pagination : false,
    rewindNav : false,
    itemsMobile : [479,3]
  });


  //////// slider image grabber
  var imgGrabber = function() {
    var imgWrap = $('.post-slider-img-wrap');
    var img = $('.post-slider').find('img');
    var src;
    var firstImgSrc = $(img[0]).attr('src');

    $('<img>', {
      'src' : firstImgSrc,
      'alt' : 'Cygnet Outdoors'
    }).appendTo(imgWrap);

    $(img[0]).addClass('active');


    img.on('touchstart click', function(e) {
      e.stopPropagation();
      e.preventDefault();

      var currentImg = $(imgWrap).find('img');
      var currentImgSrc = currentImg.attr('src');
      src = $(this).attr('src');

      if ( src !== currentImgSrc ) {
        currentImg.remove();

        $('<img>', {
          'src' : src,
          'alt' : 'Cygnet Outdoors'
        }).appendTo(imgWrap);

        img.removeClass('active');
        $(this).addClass('active');
      }

    });
  };

  if ( $('.post-slider-img-wrap').length ) {
    imgGrabber();
  }



  //////// hide/show blog comments
  var toggleBlogComments = function() {
    var btn = $('.hide-show-link');

    btn.on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      var target = $(this).attr('data-target');

      $('.' + target).toggleClass('show');
    });

  };

  toggleBlogComments();


  var showBlogComments = function() {
    var btn = $('.scroll-link');
    var commentRespond = $('.comment-respond');

    btn.on('touchstart click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      if ( !$(commentRespond).hasClass('show') ) {
        $(commentRespond).addClass('show');
      }

      var target = $(this).attr('href');
      var position = $(target).offset().top;

      $('html, body').animate({
        scrollTop: position
      }, 500);

    });

  };

  showBlogComments();


  var replyCommentShow = function() {
    var hash = window.location.hash;
    var commentRespond = $('.comment-respond');

    if ( hash === '#respond' || hash === '#comments' ) {
      $(commentRespond).addClass('show');
    }

  };

  replyCommentShow();



  //////// sharrre plugin

  var shareGo = function() {

    $('#share').sharrre({
      share: {
        facebook: true,
        twitter: true,
        googlePlus: true
      },
      buttons: {
        facebook: {
          layout: 'button'
        },
        twitter: {
          count: 'none',
          via: 'CygnetOutdoors'
        },
        googlePlus: {
          size: 'standard',
          annotation: 'none',
          recommendations: 'false'
        }
      },
      enableCounter: false
    });

  };

  if ( body.hasClass('single') ) {
    shareGo();
  }




});