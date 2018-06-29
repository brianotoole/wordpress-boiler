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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(6);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _modal = __webpack_require__(2);

var _modal2 = _interopRequireDefault(_modal);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/*********************************************************
  Main JS Entry Point
*********************************************************/

// GLOBAL
__webpack_require__(3);

// COMPONENTS
// @TODO: convert to es6
__webpack_require__(4);
__webpack_require__(5);

var modal = new _modal2.default();

// TEMPLATES
//require('./templates/about.js');

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
  * MODAL
  */

var Modal = function () {
  function Modal() {
    _classCallCheck(this, Modal);

    this.modalTrigger = $('.js-modal-trigger');
    this.modal = $('.modal');
    this.modalClose = $('.modal__close');
    this.events();
  }

  _createClass(Modal, [{
    key: 'events',
    value: function events() {
      // click on open modal
      this.modalTrigger.click(this.openModal.bind(this)); //bind 'this' keyword to what it is set to

      // click on x close btn
      this.modalClose.click(this.closeModal.bind(this));

      // keyup event
      $(document).keyup(this.keyPressHandler.bind(this));
    }
  }, {
    key: 'keyPressHandler',
    value: function keyPressHandler(e) {
      if (e.keyCode == 27) {
        this.closeModal();
      }
    }
  }, {
    key: 'openModal',
    value: function openModal() {
      this.modal.addClass('modal--is-open');
      return false; //prevent default behavior of link click
    }
  }, {
    key: 'closeModal',
    value: function closeModal() {
      this.modal.removeClass('modal--is-open');
    }
  }]);

  return Modal;
}(); //Modal

exports.default = Modal;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * -- EVENTS
 */

//import { fitText } from "./components/fit-text";

/**
  * These functions execute in order.
  */
(function () {})();

/**
  * Events that fire when the page is loaded.
  */
$(document).ready(function () {
  /*
  $('.carousel').slick({
    adaptiveHeight: true
  });
  */
}); // /.ready


/**
 * Events that fire on Window Scroll
 */
$(window).scroll(function () {}); // /.scroll

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// Nav

var trigger = $('#js-nav-toggle');
trigger.click(function () {
  $('#js-nav-mobile').toggleClass('nav-open');
  $('#js-nav-toggle').toggleClass('active');
  $('body').toggleClass('nav-open');
});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
  * Social Sharing Links
  */
$('.js-social-share').click(function (e) {
  // we're not going to go to the link, just pull data from it
  e.preventDefault();

  // decide what social share url string to use based on 'data-social' value
  var social = $(this).data('social');

  // pull the a href value
  var url = $(this).attr('href');
  // pop window parameters
  var window_args = "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600";
  var share_link = void 0;

  if (url === '' || url === '#') {
    url = window.location.href;
  }

  if (social === 'facebook') {
    share_link = "https://www.facebook.com/sharer/sharer.php?u=" + url;
  } else if (social === 'twitter') {
    share_link = "https://twitter.com/intent/tweet?url=" + url;
  } else {
    share_link = "https://www.linkedin.com/shareArticle?mini=true&url=" + url;
  }

  window.open(share_link, "", window_args);
});

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);