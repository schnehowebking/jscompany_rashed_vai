/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************************!*\
  !*** ./resources/assets/vendor/js/dropdown-hover.js ***!
  \******************************************************/
// Add onHover event for dropdowns

;
(function ($) {
  if (!$ || !$.fn) return;
  var SELECTOR = '[data-bs-toggle=dropdown][data-trigger=hover]';
  var TIMEOUT = 150;
  function openDropdown($i) {
    var t = $i.data('dd-timeout');
    if (t) {
      clearTimeout(t);
      t = null;
      $i.data('dd-timeout', t);
    }
    if ($i.attr('aria-expanded') !== 'true') $i.dropdown('toggle');
  }
  function closeDropdown($i) {
    var t = $i.data('dd-timeout');
    if (t) clearTimeout(t);
    t = setTimeout(function () {
      var t2 = $i.data('dd-timeout');
      if (t2) {
        clearTimeout(t2);
        t2 = null;
        $i.data('dd-timeout', t2);
      }
      if ($i.attr('aria-expanded') === 'true') $i.dropdown('toggle');
    }, TIMEOUT);
    $i.data('dd-timeout', t);
  }
  $(function () {
    $('body').on('mouseenter', "".concat(SELECTOR, ", ").concat(SELECTOR, " ~ .dropdown-menu"), function () {
      var $toggle = $(this).hasClass('dropdown-toggle') ? $(this) : $(this).prev('.dropdown-toggle');
      var $dropdown = $(this).hasClass('dropdown-menu') ? $(this) : $(this).next('.dropdown-menu');
      if (window.getComputedStyle($dropdown[0], null).getPropertyValue('position') === 'static') return;

      // Set hovered flag
      if ($(this).is(SELECTOR)) {
        $(this).data('hovered', true);
      }
      openDropdown($(this).hasClass('dropdown-toggle') ? $(this) : $(this).prev('.dropdown-toggle'));
    }).on('mouseleave', "".concat(SELECTOR, ", ").concat(SELECTOR, " ~ .dropdown-menu"), function () {
      var $toggle = $(this).hasClass('dropdown-toggle') ? $(this) : $(this).prev('.dropdown-toggle');
      var $dropdown = $(this).hasClass('dropdown-menu') ? $(this) : $(this).next('.dropdown-menu');
      if (window.getComputedStyle($dropdown[0], null).getPropertyValue('position') === 'static') return;

      // Remove hovered flag
      if ($(this).is(SELECTOR)) {
        $(this).data('hovered', false);
      }
      closeDropdown($(this).hasClass('dropdown-toggle') ? $(this) : $(this).prev('.dropdown-toggle'));
    }).on('hide.bs.dropdown', function (e) {
      if ($(this).find(SELECTOR).data('hovered')) e.preventDefault();
    });
  });
})(window.jQuery);
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;