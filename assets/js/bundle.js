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

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_focus_within__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__utils_accessibility__ = __webpack_require__(3);



// ----------------------------------------------------------------------
// Handles menu button click on mobile devices:
// * toggles aria-expanded attribute
// * toggles 'is-expanded' class for the toggle button
// * toggles 'is-visible' class for the menu
// ----------------------------------------------------------------------
const menuToggle = document.getElementById('js-menu-toggle');
const primaryMenu = document.getElementById('primary-menu');

if (menuToggle && primaryMenu) {
	menuToggle.addEventListener('click', function () {
		// eslint-disable-line func-names
		const that = this;
		Object(__WEBPACK_IMPORTED_MODULE_1__utils_accessibility__["b" /* toggleAriaAttribute */])(that);
		that.classList.toggle('is-expanded');
		primaryMenu.classList.toggle('is-visible');
	});
}

// ----------------------------------------------------------------------
// Helps with accessibility for keyboard only users.
// ----------------------------------------------------------------------
Object(__WEBPACK_IMPORTED_MODULE_1__utils_accessibility__["a" /* skipLinkFocusFix */])();

// -------------------------------------------------------------------------------------------------
// Focus Within lets target elements based on whether they are focused or contain a focused element,
// following the Selectors Level 4 specification.
// We are using it for improving keyboard navigation accessibility on sub-menus.
// -------------------------------------------------------------------------------------------------
Object(__WEBPACK_IMPORTED_MODULE_0_focus_within__["a" /* default */])(document, {
	attr: false,
	className: 'focus'
});

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
function focusWithin(document, opts) {
	var _Object = Object(opts),
	    _Object$className = _Object.className,
	    className = _Object$className === undefined ? '' : _Object$className,
	    _Object$attr = _Object.attr,
	    attr = _Object$attr === undefined ? 'focus-within' : _Object$attr;

	var lastElements = [];

	function onfocuschange() {
		var lastElement = void 0;

		while (lastElement = lastElements.pop()) {
			if (attr) {
				lastElement.removeAttribute(attr);
			}

			if (className) {
				lastElement.classList.remove(className);
			}
		}

		var activeElement = document.activeElement;

		// only add focus if it has not been added and is not the document element
		if (!/^(#document|HTML|BODY)$/.test(Object(activeElement).nodeName)) {
			while (activeElement && activeElement.nodeType === 1) {
				if (attr) {
					activeElement.setAttribute(attr, '');
				}

				if (className) {
					activeElement.classList.add(className);
				}

				lastElements.push(activeElement);

				activeElement = activeElement.parentNode;
			}
		}
	}

	function initialize() {
		document.addEventListener('focus', onfocuschange, true);
		document.addEventListener('blur', onfocuschange, true);
	}

	/**
  * Callback wrapper for check loaded state
  */
	/* eslint-disable */
	!function load() {
		if (/m/.test(document.readyState)) {
			document.removeEventListener('readystatechange', load) | initialize();
		} else {
			document.addEventListener('readystatechange', load);
		}
	}();
	/* eslint-enable */
}

/* harmony default export */ __webpack_exports__["a"] = (focusWithin);

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["b"] = toggleAriaAttribute;
/* harmony export (immutable) */ __webpack_exports__["a"] = skipLinkFocusFix;
function toggleAriaAttribute(button) {
  const aria = button.getAttribute('aria-expanded');
  const newAriaValue = 'true' !== aria;
  button.setAttribute('aria-expanded', newAriaValue);
}

/**
 * Helps with accessibility for keyboard only users.
 * Learn more: https://git.io/vWdr2
 */
function skipLinkFocusFix() {
  const isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', () => {
      const id = window.location.hash.substring(1);

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      const element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
}

/***/ })
/******/ ]);