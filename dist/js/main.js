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
/******/ 	__webpack_require__.p = "../../";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/components/modal.js":
/*!************************************!*\
  !*** ./src/js/components/modal.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n  value: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\n/**\n  * MODAL\n  */\n\nvar Modal = function () {\n  function Modal() {\n    _classCallCheck(this, Modal);\n\n    this.modalTrigger = $('.js-modal-trigger');\n    this.modal = $('.modal');\n    this.modalClose = $('.modal__close');\n    this.events();\n  }\n\n  _createClass(Modal, [{\n    key: 'events',\n    value: function events() {\n      // click on open modal\n      this.modalTrigger.click(this.openModal.bind(this)); //bind 'this' keyword to what it is set to\n\n      // click on x close btn\n      this.modalClose.click(this.closeModal.bind(this));\n\n      // keyup event\n      $(document).keyup(this.keyPressHandler.bind(this));\n    }\n  }, {\n    key: 'keyPressHandler',\n    value: function keyPressHandler(e) {\n      if (e.keyCode == 27) {\n        this.closeModal();\n      }\n    }\n  }, {\n    key: 'openModal',\n    value: function openModal() {\n      this.modal.addClass('modal--is-open');\n      return false; //prevent default behavior of link click\n    }\n  }, {\n    key: 'closeModal',\n    value: function closeModal() {\n      this.modal.removeClass('modal--is-open');\n    }\n  }]);\n\n  return Modal;\n}(); //Modal\n\nexports.default = Modal;\n\n//# sourceURL=webpack:///./src/js/components/modal.js?");

/***/ }),

/***/ "./src/js/components/nav.js":
/*!**********************************!*\
  !*** ./src/js/components/nav.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n// Nav\n\nvar trigger = $('#js-nav-toggle');\ntrigger.click(function () {\n  $('#js-nav-mobile').toggleClass('nav-open');\n  $('#js-nav-toggle').toggleClass('active');\n  $('body').toggleClass('nav-open');\n});\n\n//# sourceURL=webpack:///./src/js/components/nav.js?");

/***/ }),

/***/ "./src/js/components/social-sharing.js":
/*!*********************************************!*\
  !*** ./src/js/components/social-sharing.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n/**\n  * Social Sharing Links\n  */\n$('.js-social-share').click(function (e) {\n  // we're not going to go to the link, just pull data from it\n  e.preventDefault();\n\n  // decide what social share url string to use based on 'data-social' value\n  var social = $(this).data('social');\n\n  // pull the a href value\n  var url = $(this).attr('href');\n  // pop window parameters\n  var window_args = \"menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\";\n  var share_link = void 0;\n\n  if (url === '' || url === '#') {\n    url = window.location.href;\n  }\n\n  if (social === 'facebook') {\n    share_link = \"https://www.facebook.com/sharer/sharer.php?u=\" + url;\n  } else if (social === 'twitter') {\n    share_link = \"https://twitter.com/intent/tweet?url=\" + url;\n  } else {\n    share_link = \"https://www.linkedin.com/shareArticle?mini=true&url=\" + url;\n  }\n\n  window.open(share_link, \"\", window_args);\n});\n\n//# sourceURL=webpack:///./src/js/components/social-sharing.js?");

/***/ }),

/***/ "./src/js/global/events.js":
/*!*********************************!*\
  !*** ./src/js/global/events.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n/**\n * -- EVENTS\n */\n\n//import { fitText } from \"./components/fit-text\";\n\n/**\n  * These functions execute in order.\n  */\n(function () {})();\n\n/**\n  * Events that fire when the page is loaded.\n  */\n$(document).ready(function () {\n  /*\n  $('.carousel').slick({\n    adaptiveHeight: true\n  });\n  */\n}); // /.ready\n\n\n/**\n * Events that fire on Window Scroll\n */\n$(window).scroll(function () {}); // /.scroll\n\n//# sourceURL=webpack:///./src/js/global/events.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar _modal = __webpack_require__(/*! ./components/modal */ \"./src/js/components/modal.js\");\n\nvar _modal2 = _interopRequireDefault(_modal);\n\nfunction _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }\n\n/*********************************************************\n  Main JS Entry Point\n*********************************************************/\n\n// GLOBAL\n__webpack_require__(/*! ./global/events.js */ \"./src/js/global/events.js\");\n\n// COMPONENTS\n// @TODO: convert to es6\n__webpack_require__(/*! ./components/nav.js */ \"./src/js/components/nav.js\");\n__webpack_require__(/*! ./components/social-sharing.js */ \"./src/js/components/social-sharing.js\");\n\nvar modal = new _modal2.default();\n\n// TEMPLATES\n//require('./templates/about.js');\n\n//# sourceURL=webpack:///./src/js/main.js?");

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin\n\n//# sourceURL=webpack:///./src/scss/main.scss?");

/***/ }),

/***/ 0:
/*!***************************************************!*\
  !*** multi ./src/js/main.js ./src/scss/main.scss ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/js/main.js */\"./src/js/main.js\");\nmodule.exports = __webpack_require__(/*! ./src/scss/main.scss */\"./src/scss/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/js/main.js_./src/scss/main.scss?");

/***/ })

/******/ });