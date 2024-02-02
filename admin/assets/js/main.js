/**
* Template Name: Moderna - v4.11.0
* Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  $(window).on("load",function(){
    $(".custom-loader").fadeOut("slow");
});


// new Swiper('.testimonials-slider', {
//   speed: 600,
//   loop: true,
//   autoplay: {
//     delay: 5000,
//     disableOnInteraction: false
//   },
//   slidesPerView: 'auto',
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'bullets',
//     clickable: true
//   },
//   breakpoints: {
//     320: {
//       slidesPerView: 1,
//       spaceBetween: 20
//     },

//     1200: {
//       slidesPerView: 3,
//       spaceBetween: 20
//     }
//   }
// });

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Skills animation
   */
  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
      }, true);
    }

  });

    /**
   * Initiate portfolio lightbox 
   */
    var myLightbox = GLightbox({
      selector: '.awards-preview' 
  });
    /**
     * Portfolio details slider
     */
    // new Swiper('.portfolio-details-slider', {
    //   speed: 400,
    //   loop: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    //   },
    //   pagination: {
    //     el: '.swiper-pagination',
    //     type: 'bullets',
    //     clickable: true
    //   }
    // });
  
    /**
     * Initiate portfolio details lightbox 
     */
    const portfolioDetailsLightbox = GLightbox({
      selector: '.portfolio-details-lightbox',
      width: '90%',
      height: '90vh'
    });
  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

  var Waves = Waves || {};
  var $$ = document.querySelectorAll.bind(document);

  // Find exact position of element
  function isWindow(obj) {
      return obj !== null && obj === obj.window;
  }

  function getWindow(elem) {
      return isWindow(elem) ? elem : elem.nodeType === 9 && elem.defaultView;
  }

  function offset(elem) {
      var docElem, win,
          box = {top: 0, left: 0},
          doc = elem && elem.ownerDocument;

      docElem = doc.documentElement;

      if (typeof elem.getBoundingClientRect !== typeof undefined) {
          box = elem.getBoundingClientRect();
      }
      win = getWindow(doc);
      return {
          top: box.top + win.pageYOffset - docElem.clientTop,
          left: box.left + win.pageXOffset - docElem.clientLeft
      };
  }

  function convertStyle(obj) {
      var style = '';

      for (var a in obj) {
          if (obj.hasOwnProperty(a)) {
              style += (a + ':' + obj[a] + ';');
          }
      }

      return style;
  }

  var Effect = {

      // Effect delay
      duration: 750,

      show: function(e, element) {

          // Disable right click
          if (e.button === 2) {
              return false;
          }

          var el = element || this;

          // Create ripple
          var ripple = document.createElement('div');
          ripple.className = 'waves-ripple';
          el.appendChild(ripple);

          // Get click coordinate and element witdh
          var pos         = offset(el);
          var relativeY   = (e.pageY - pos.top);
          var relativeX   = (e.pageX - pos.left);
          var scale       = 'scale('+((el.clientWidth / 100) * 10)+')';

          // Support for touch devices
          if ('touches' in e) {
            relativeY   = (e.touches[0].pageY - pos.top);
            relativeX   = (e.touches[0].pageX - pos.left);
          }

          // Attach data to element
          ripple.setAttribute('data-hold', Date.now());
          ripple.setAttribute('data-scale', scale);
          ripple.setAttribute('data-x', relativeX);
          ripple.setAttribute('data-y', relativeY);

          // Set ripple position
          var rippleStyle = {
              'top': relativeY+'px',
              'left': relativeX+'px'
          };

          ripple.className = ripple.className + ' waves-notransition';
          ripple.setAttribute('style', convertStyle(rippleStyle));
          ripple.className = ripple.className.replace('waves-notransition', '');

          // Scale the ripple
          rippleStyle['-webkit-transform'] = scale;
          rippleStyle['-moz-transform'] = scale;
          rippleStyle['-ms-transform'] = scale;
          rippleStyle['-o-transform'] = scale;
          rippleStyle.transform = scale;
          rippleStyle.opacity   = '1';

          rippleStyle['-webkit-transition-duration'] = Effect.duration + 'ms';
          rippleStyle['-moz-transition-duration']    = Effect.duration + 'ms';
          rippleStyle['-o-transition-duration']      = Effect.duration + 'ms';
          rippleStyle['transition-duration']         = Effect.duration + 'ms';

          rippleStyle['-webkit-transition-timing-function'] = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
          rippleStyle['-moz-transition-timing-function']    = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
          rippleStyle['-o-transition-timing-function']      = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';
          rippleStyle['transition-timing-function']         = 'cubic-bezier(0.250, 0.460, 0.450, 0.940)';

          ripple.setAttribute('style', convertStyle(rippleStyle));
      },

      hide: function(e) {
          TouchHandler.touchup(e);

          var el = this;
          var width = el.clientWidth * 1.4;

          // Get first ripple
          var ripple = null;
          var ripples = el.getElementsByClassName('waves-ripple');
          if (ripples.length > 0) {
              ripple = ripples[ripples.length - 1];
          } else {
              return false;
          }

          var relativeX   = ripple.getAttribute('data-x');
          var relativeY   = ripple.getAttribute('data-y');
          var scale       = ripple.getAttribute('data-scale');

          // Get delay beetween mousedown and mouse leave
          var diff = Date.now() - Number(ripple.getAttribute('data-hold'));
          var delay = 350 - diff;

          if (delay < 0) {
              delay = 0;
          }

          // Fade out ripple after delay
          setTimeout(function() {
              var style = {
                  'top': relativeY+'px',
                  'left': relativeX+'px',
                  'opacity': '0',

                  // Duration
                  '-webkit-transition-duration': Effect.duration + 'ms',
                  '-moz-transition-duration': Effect.duration + 'ms',
                  '-o-transition-duration': Effect.duration + 'ms',
                  'transition-duration': Effect.duration + 'ms',
                  '-webkit-transform': scale,
                  '-moz-transform': scale,
                  '-ms-transform': scale,
                  '-o-transform': scale,
                  'transform': scale,
              };

              ripple.setAttribute('style', convertStyle(style));

              setTimeout(function() {
                  try {
                      el.removeChild(ripple);
                  } catch(e) {
                      return false;
                  }
              }, Effect.duration);
          }, delay);
      },

      // Little hack to make <input> can perform waves effect
      wrapInput: function(elements) {
          for (var a = 0; a < elements.length; a++) {
              var el = elements[a];

              if (el.tagName.toLowerCase() === 'input') {
                  var parent = el.parentNode;

                  // If input already have parent just pass through
                  if (parent.tagName.toLowerCase() === 'i' && parent.className.indexOf('waves-effect') !== -1) {
                      continue;
                  }

                  // Put element class and style to the specified parent
                  var wrapper = document.createElement('i');
                  wrapper.className = el.className + ' waves-input-wrapper';

                  var elementStyle = el.getAttribute('style');

                  if (!elementStyle) {
                      elementStyle = '';
                  }

                  wrapper.setAttribute('style', elementStyle);

                  el.className = 'waves-button-input';
                  el.removeAttribute('style');

                  // Put element as child
                  parent.replaceChild(wrapper, el);
                  wrapper.appendChild(el);
              }
          }
      }
  };


  /**
   * Disable mousedown event for 500ms during and after touch
   */
  var TouchHandler = {
      /* uses an integer rather than bool so there's no issues with
       * needing to clear timeouts if another touch event occurred
       * within the 500ms. Cannot mouseup between touchstart and
       * touchend, nor in the 500ms after touchend. */
      touches: 0,
      allowEvent: function(e) {
          var allow = true;

          if (e.type === 'touchstart') {
              TouchHandler.touches += 1; //push
          } else if (e.type === 'touchend' || e.type === 'touchcancel') {
              setTimeout(function() {
                  if (TouchHandler.touches > 0) {
                      TouchHandler.touches -= 1; //pop after 500ms
                  }
              }, 500);
          } else if (e.type === 'mousedown' && TouchHandler.touches > 0) {
              allow = false;
          }

          return allow;
      },
      touchup: function(e) {
          TouchHandler.allowEvent(e);
      }
  };


  /**
   * Delegated click handler for .waves-effect element.
   * returns null when .waves-effect element not in "click tree"
   */
  function getWavesEffectElement(e) {
      if (TouchHandler.allowEvent(e) === false) {
          return null;
      }

      var element = null;
      var target = e.target || e.srcElement;

      while (target.parentElement !== null) {
          if (!(target instanceof SVGElement) && target.className.indexOf('waves-effect') !== -1) {
              element = target;
              break;
          } else if (target.classList.contains('waves-effect')) {
              element = target;
              break;
          }
          target = target.parentElement;
      }

      return element;
  }

  /**
   * Bubble the click and show effect if .waves-effect elem was found
   */
  function showEffect(e) {
      var element = getWavesEffectElement(e);

      if (element !== null) {
          Effect.show(e, element);

          if ('ontouchstart' in window) {
              element.addEventListener('touchend', Effect.hide, false);
              element.addEventListener('touchcancel', Effect.hide, false);
          }

          element.addEventListener('mouseup', Effect.hide, false);
          element.addEventListener('mouseleave', Effect.hide, false);
      }
  }

  Waves.displayEffect = function(options) {
      options = options || {};

      if ('duration' in options) {
          Effect.duration = options.duration;
      }

      //Wrap input inside <i> tag
      Effect.wrapInput($$('.waves-effect'));

      if ('ontouchstart' in window) {
          document.body.addEventListener('touchstart', showEffect, false);
      }

      document.body.addEventListener('mousedown', showEffect, false);
  };

  /**
   * Attach Waves to an input element (or any element which doesn't
   * bubble mouseup/mousedown events).
   *   Intended to be used with dynamically loaded forms/inputs, or
   * where the user doesn't want a delegated click handler.
   */
  Waves.attach = function(element) {
      //FUTURE: automatically add waves classes and allow users
      // to specify them with an options param? Eg. light/classic/button
      if (element.tagName.toLowerCase() === 'input') {
          Effect.wrapInput([element]);
          element = element.parentElement;
      }

      if ('ontouchstart' in window) {
          element.addEventListener('touchstart', showEffect, false);
      }

      element.addEventListener('mousedown', showEffect, false);
  };

  window.Waves = Waves;

  document.addEventListener('DOMContentLoaded', function() {
      Waves.displayEffect();
  }, false);


  /**
   * Initiate Pure Counter 
   */
  // new PureCounter();



})();

