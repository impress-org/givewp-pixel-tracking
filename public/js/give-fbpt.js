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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/Domain/resources/js/frontend/give-fbpt.js":
/*!*******************************************************!*\
  !*** ./src/Domain/resources/js/frontend/give-fbpt.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("console.log('FBPT script loaded!');\n\nif (typeof window.fbq !== \"undefined\") {\n  console.log('An FB Pixel was detected! The GiveWP Donation Pixel can now fire!'); // const form = document.querySelector('form[id*=\"give-form\"]');\n  // const amount = document.querySelector('.give-final-total-amount');\n  // var donateclick = document.getElementById(\"give-purchase-button\");\n  // donateclick.onclick(\n  //     fbq('track', 'Purchase', {currency: form.dataset.currency_code, value: amount}),\n  //     console.log('The GiveWP Pixel fired with a value of:' + form.dataset.currency_code + ' ' + amount)\n  // );\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvRG9tYWluL3Jlc291cmNlcy9qcy9mcm9udGVuZC9naXZlLWZicHQuanM/MDUxMiJdLCJuYW1lcyI6WyJjb25zb2xlIiwibG9nIiwid2luZG93IiwiZmJxIl0sIm1hcHBpbmdzIjoiQUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVkscUJBQVo7O0FBQ0EsSUFBSSxPQUFPQyxNQUFNLENBQUNDLEdBQWQsS0FBc0IsV0FBMUIsRUFBdUM7QUFDbkNILFNBQU8sQ0FBQ0MsR0FBUixDQUFZLG1FQUFaLEVBRG1DLENBRW5DO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0giLCJmaWxlIjoiLi9zcmMvRG9tYWluL3Jlc291cmNlcy9qcy9mcm9udGVuZC9naXZlLWZicHQuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zb2xlLmxvZygnRkJQVCBzY3JpcHQgbG9hZGVkIScpXG5pZiAodHlwZW9mIHdpbmRvdy5mYnEgIT09IFwidW5kZWZpbmVkXCIpIHsgXG4gICAgY29uc29sZS5sb2coJ0FuIEZCIFBpeGVsIHdhcyBkZXRlY3RlZCEgVGhlIEdpdmVXUCBEb25hdGlvbiBQaXhlbCBjYW4gbm93IGZpcmUhJyk7XG4gICAgLy8gY29uc3QgZm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2Zvcm1baWQqPVwiZ2l2ZS1mb3JtXCJdJyk7XG4gICAgLy8gY29uc3QgYW1vdW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmdpdmUtZmluYWwtdG90YWwtYW1vdW50Jyk7XG4gICAgLy8gdmFyIGRvbmF0ZWNsaWNrID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJnaXZlLXB1cmNoYXNlLWJ1dHRvblwiKTtcbiAgICBcbiAgICAvLyBkb25hdGVjbGljay5vbmNsaWNrKFxuICAgIC8vICAgICBmYnEoJ3RyYWNrJywgJ1B1cmNoYXNlJywge2N1cnJlbmN5OiBmb3JtLmRhdGFzZXQuY3VycmVuY3lfY29kZSwgdmFsdWU6IGFtb3VudH0pLFxuICAgIC8vICAgICBjb25zb2xlLmxvZygnVGhlIEdpdmVXUCBQaXhlbCBmaXJlZCB3aXRoIGEgdmFsdWUgb2Y6JyArIGZvcm0uZGF0YXNldC5jdXJyZW5jeV9jb2RlICsgJyAnICsgYW1vdW50KVxuICAgIC8vICk7XG59Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/Domain/resources/js/frontend/give-fbpt.js\n");

/***/ }),

/***/ 1:
/*!*************************************************************!*\
  !*** multi ./src/Domain/resources/js/frontend/give-fbpt.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/work/Documents/GitHub/givewp-facebook-pixel-tracking/src/Domain/resources/js/frontend/give-fbpt.js */"./src/Domain/resources/js/frontend/give-fbpt.js");


/***/ })

/******/ });