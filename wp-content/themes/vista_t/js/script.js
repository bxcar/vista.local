jQuery(function(){

objectFitImages(null, {watchMQ: true});

/*** Header Functions ***/

//--- Menu
$('.topBar-menu-btn').on('click', function(event) {
  $('.topBar-menu-btn').not(event.target).closest('li').find('.topBar-menu-submenu-wrap').addClass('is-hidden');
  if ( $(event.target).closest('li').find('.topBar-menu-submenu-wrap').hasClass('is-hidden') ) {
    $(event.target).closest('li').find('.topBar-menu-submenu-wrap').removeClass('is-hidden');
    $(event.target).closest('li').find('.topBar-menu-submenu').addClass('slideInUp');
    setTimeout(function() {
      $(event.target).closest('li').find('.topBar-menu-submenu').removeClass('slideInUp');
    }, 500);
  } else {
    $(event.target).closest('li').find('.topBar-menu-submenu').addClass('slideOutDown');
    setTimeout(function() {
      $(event.target).closest('li').find('.topBar-menu-submenu').removeClass('slideOutDown');
      $(event.target).closest('li').find('.topBar-menu-submenu-wrap').addClass('is-hidden');
    }, 500);
  }
});

//--- Mobile inner menu
$('.topBar-innermenu-btn').on('click', function() {
  $('.topBar-innermenu-wrap').removeClass('is-hidden');
  $('.topBar-innermenu').addClass('slide-in-right');
  setTimeout(function() {
    $('.topBar-innermenu').removeClass('slide-in-right');
  }, 500);
});

$('.topBar-innermenu-close').on('click', function() {
  $('.topBar-innermenu').addClass('slide-out-left');
  setTimeout(function() {
    $('.topBar-innermenu').removeClass('slide-out-left');
    $('.topBar-innermenu-wrap').addClass('is-hidden');
  }, 500);
});

$('.topBar-innermenu-list').tabs({
  show: {effect: 'slide', direction: 'right', duration: 300},
  hide: {effect: 'slide', direction: 'left', duration: 300},
  classes: {
    'ui-tabs': 'topBar-innermenu-list-wrap',
    'ui-tabs-nav': 'topBar-innermenu-categories-list',
    'ui-tabs-tab': 'topBar-innermenu-category',
    'ui-tabs-active': 'topBar-innermenu-category-active',
    'ui-tabs-anchor': 'topBar-innermenu-category-anchor',
    'ui-tabs-panel': 'topBar-innermenu-category-list',
  },
});

//--- Title inner
if ( $('.header-title-inner .title-page').text().length > 35 ) {
  $('.header-title-inner .title-page').addClass('small');
}

if ( $('.breadcrumbs .current').text().length > 35 ) {
  $('.breadcrumbs .current').text( $('.breadcrumbs .current').text().slice(0, 15) + "..." );
}

/*** Footer Functions ***/

$('.up-button').on('click', function() {
  $('body, html').animate({scrollTop: 0}, 500);
});

setResponsiveFunction({
  maxWidth: 1024,
  func: function() {
    $('.footer-link-main-btn').parent().addClass('spoiler-wrap');
    $('.footer-link-main-btn').addClass('spoiler-btn');
    $('.footer-link-subitems').addClass('spoiler-content');
  },
  funcAlternate: function() {
    $('.footer-link-main-btn').parent().removeClass('spoiler-wrap');
    $('.footer-link-main-btn').removeClass('spoiler-btn');
    $('.footer-link-subitems').removeClass('spoiler-content').removeAttr('style');
  },
});

/*** Form Functions ***/

/*** General Widgets Functions ***/

//--- On-page Links
$('.on-page-link').on('click', function(event) {
  event.preventDefault();

  var scrollTo = $( $(event.currentTarget).attr('href') ).offset().top;
  $('body, html').animate({scrollTop: scrollTo}, 500);
});

//--- Spoiler
$('.spoiler-btn').on('click', function(event) {
  $(event.currentTarget).closest('.spoiler-wrap').find('.spoiler-content').slideToggle(400);
  $(event.currentTarget).closest('.spoiler-wrap').find('.spoiler-icon').toggleClass('rotate-icon');
});

/*** Block Functions ***/

//--- Home - Description list tabs
$('.description-list, .deposit-methods').tabs({
  show: 300,
  hide: 300,
  classes: {
    'ui-tabs': 'tabs-general',
    'ui-tabs-nav': 'tabs-general-nav',
    'ui-tabs-tab': 'tabs-general-tab',
    'ui-tabs-active': 'tabs-general-active',
    'ui-tabs-anchor': 'tabs-general-anchor',
    'ui-tabs-panel': 'tabs-general-panel',
  },
});

//--- Home - Description Subitems carousel mobile
var descriptionSubitemsCarousel;
setResponsiveFunction({
  maxWidth: 640,
  func: function() {
    if (!descriptionSubitemsCarousel) {
      $('.description-list-item-innerwrap').addClass('owl-carousel');
      descriptionSubitemsCarousel = $('.description-list-item-innerwrap').owlCarousel({
        items: 1,
        dotsClass: 'carousel-general-dots',
        dotClass: 'carousel-general-dot',
      });
    }
  },
  funcAlternate: function() {
    if (descriptionSubitemsCarousel) {
      descriptionSubitemsCarousel.trigger('destroy.owl.carousel');
      descriptionSubitemsCarousel = null;
      $('.description-list-item-innerwrap').removeClass('owl-carousel');
    }
  },
});

//--- Home - We accept logos carousel mobile
var weAcceptCarousel;
setResponsiveFunction({
  maxWidth: 640,
  func: function() {
    if ( !weAcceptCarousel ) {
      $('.weAccept-logos').addClass('owl-carousel');
      weAcceptCarousel = $('.weAccept-logos').owlCarousel({
        items: 2,
        autoWidth: true,
        dotsEach: 2,
        dotsClass: 'carousel-general-dots',
        dotClass: 'carousel-general-dot',
      })
    }
  },
  funcAlternate: function() {
    if ( weAcceptCarousel ) {
      weAcceptCarousel.trigger('destroy.owl.carousel');
      weAcceptCarousel = null;
      $('.weAccept-logos').removeClass('owl-carousel');
    }
  }
})

//--- FAQ
$('.faq-question').on('click', function(event) {
  $(event.currentTarget).toggleClass('is-opened');
});

/*** Animation Functions ***/

});

/*** Base Functions ***/

/// options = {maxWidth: maxWidth(number), minWidth: minWidth(number), changedElem: changedElem(selector), sampleElem: sampleElem(selector),}
function setResponsiveHeight(options) {
  var changedElem = options.changedElem;
  var sampleElem = options.sampleElem;

  setResponsiveFunction({
    minWidth: options.minWidth,
    maxWidth: options.maxWidth,
    func: function() {
      jQuery(changedElem).height( $(sampleElem).innerHeight() );
    },
    funcAlternate: function() {
      jQuery(changedElem).removeAttr('style');
    },
  });
}

/// options = {minWidth: (number), maxWidth: (number), func: (function), funcAlternate: (function)};
/// options = [{minWidth: minWidth, maxWidth: maxWidth, func: func, funcAlternate: funcAlternate(function)}, {minWidth: minWidth, maxWidth: maxWidth, func: func, funcAlternate: funcAlternate(function)}];
function setResponsiveFunction(options) {
  respondFunction();
  jQuery(window).on('resize', respondFunction);

  function respondFunction() {
    if ( Array.isArray(options) ) {
      for (var i = 0; i < options.length; i++) {
        var minWidth = options[i].minWidth || 0;
        var maxWidth = options[i].maxWidth || Infinity;
        var func = options[i].func;
        var funcAlternate = options[i].funcAlternate;
        goFunc();
      }
    } else {
      var minWidth = options.minWidth || 0;
      var maxWidth = options.maxWidth || Infinity;
      var func = options.func;
      var funcAlternate = options.funcAlternate;
      goFunc();
    }

    function goFunc() {
      if ( jQuery(window).width() >= minWidth && jQuery(window).width() < maxWidth ) {
        func();
      } else if (funcAlternate) {
        funcAlternate();
      }
    }
  }
}
