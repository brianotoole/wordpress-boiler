// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles

// eslint-disable-next-line no-global-assign
parcelRequire = (function (modules, cache, entry, globalName) {
  // Save the require from previous bundle to this closure if any
  var previousRequire = typeof parcelRequire === 'function' && parcelRequire;
  var nodeRequire = typeof require === 'function' && require;

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire = typeof parcelRequire === 'function' && parcelRequire;
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error('Cannot find module \'' + name + '\'');
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;

      var module = cache[name] = new newRequire.Module(name);

      modules[name][0].call(module.exports, localRequire, module, module.exports, this);
    }

    return cache[name].exports;

    function localRequire(x){
      return newRequire(localRequire.resolve(x));
    }

    function resolve(x){
      return modules[name][1][x] || x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [function (require, module) {
      module.exports = exports;
    }, {}];
  };

  for (var i = 0; i < entry.length; i++) {
    newRequire(entry[i]);
  }

  if (entry.length) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(entry[entry.length - 1]);

    // CommonJS
    if (typeof exports === "object" && typeof module !== "undefined") {
      module.exports = mainExports;

    // RequireJS
    } else if (typeof define === "function" && define.amd) {
     define(function () {
       return mainExports;
     });

    // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }

  // Override the current require with this new one
  return newRequire;
})({"src/js/global/events.js":[function(require,module,exports) {
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
},{}],"src/js/components/nav.js":[function(require,module,exports) {
// Nav

var trigger = $('#js-nav-toggle');
trigger.click(function () {
  $('#js-nav-mobile').toggleClass('nav-open');
  $('#js-nav-toggle').toggleClass('active');
  $('body').toggleClass('nav-open');
});
},{}],"src/js/components/social-sharing.js":[function(require,module,exports) {
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
},{}],"src/js/components/modal.js":[function(require,module,exports) {
'use strict';

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
},{}],"src/js/main.js":[function(require,module,exports) {
'use strict';

var _modal = require('./components/modal');

var _modal2 = _interopRequireDefault(_modal);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/*********************************************************
  Main JS Entry Point
*********************************************************/

// GLOBAL
require('./global/events.js');

// COMPONENTS
// @TODO: convert to es6
require('./components/nav.js');
require('./components/social-sharing.js');

var modal = new _modal2.default();

// TEMPLATES
//require('./templates/about.js');
},{"./global/events.js":"src/js/global/events.js","./components/nav.js":"src/js/components/nav.js","./components/social-sharing.js":"src/js/components/social-sharing.js","./components/modal":"src/js/components/modal.js"}]},{},["src/js/main.js"], null)
//# sourceMappingURL=/main.map