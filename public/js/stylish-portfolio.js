/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/stylish-portfolio.js":
/*!*******************************************!*\
  !*** ./resources/js/stylish-portfolio.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Start of use strict
  // Closes the sidebar menu

  $(".menu-toggle").click(function (e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  }); // Smooth scrolling using jQuery easing

  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  }); // Closes responsive menu when a scroll trigger link is clicked

  $('#sidebar-wrapper .js-scroll-trigger').click(function () {
    $("#sidebar-wrapper").removeClass("active");
    $(".menu-toggle").removeClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  }); // Scroll to top button appear

  $(document).scroll(function () {
    var scrollDistance = $(this).scrollTop();

    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
})(jQuery); // End of use strict
// Disable Google Maps scrolling
// See http://stackoverflow.com/a/25904582/1607849
// Disable scroll zooming and bind back the click event


var onMapMouseleaveHandler = function onMapMouseleaveHandler(event) {
  var that = $(this);
  that.on('click', onMapClickHandler);
  that.off('mouseleave', onMapMouseleaveHandler);
  that.find('iframe').css("pointer-events", "none");
};

var onMapClickHandler = function onMapClickHandler(event) {
  var that = $(this); // Disable the click handler until the user leaves the map area

  that.off('click', onMapClickHandler); // Enable scrolling zoom

  that.find('iframe').css("pointer-events", "auto"); // Handle the mouse leave event

  that.on('mouseleave', onMapMouseleaveHandler);
}; // Enable map zooming with mouse scroll when the user clicks the map


$('.map').on('click', onMapClickHandler);

/***/ }),

/***/ "./resources/js/stylish-portfolio.min.js":
/*!***********************************************!*\
  !*** ./resources/js/stylish-portfolio.min.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

ss;
/*!
* Start Bootstrap - Stylish Portfolio v5.0.7 (https://startbootstrap.com/template-overviews/stylish-portfolio)
* Copyright 2013-2019 Start Bootstrap
* Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-stylish-portfolio/blob/master/LICENSE)
*/

!function (a) {
  "use strict";

  a(".menu-toggle").click(function (e) {
    e.preventDefault(), a("#sidebar-wrapper").toggleClass("active"), a(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times"), a(this).toggleClass("active");
  }), a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
      var e = a(this.hash);
      if ((e = e.length ? e : a("[name=" + this.hash.slice(1) + "]")).length) return a("html, body").animate({
        scrollTop: e.offset().top
      }, 1e3, "easeInOutExpo"), !1;
    }
  }), a("#sidebar-wrapper .js-scroll-trigger").click(function () {
    a("#sidebar-wrapper").removeClass("active"), a(".menu-toggle").removeClass("active"), a(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  }), a(document).scroll(function () {
    100 < a(this).scrollTop() ? a(".scroll-to-top").fadeIn() : a(".scroll-to-top").fadeOut();
  });
}(jQuery);

var onMapMouseleaveHandler = function onMapMouseleaveHandler(e) {
  var a = $(this);
  a.on("click", onMapClickHandler), a.off("mouseleave", onMapMouseleaveHandler), a.find("iframe").css("pointer-events", "none");
},
    onMapClickHandler = function onMapClickHandler(e) {
  var a = $(this);
  a.off("click", onMapClickHandler), a.find("iframe").css("pointer-events", "auto"), a.on("mouseleave", onMapMouseleaveHandler);
};

$(".map").on("click", onMapClickHandler);

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************************************************************************!*\
  !*** multi ./resources/js/stylish-portfolio.js ./resources/js/stylish-portfolio.min.js ./resources/sass/app.scss ***!
  \*******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/dramecheikh/www/projet/projet/resources/js/stylish-portfolio.js */"./resources/js/stylish-portfolio.js");
__webpack_require__(/*! /home/dramecheikh/www/projet/projet/resources/js/stylish-portfolio.min.js */"./resources/js/stylish-portfolio.min.js");
module.exports = __webpack_require__(/*! /home/dramecheikh/www/projet/projet/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });