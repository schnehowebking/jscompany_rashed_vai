/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!***********************************************************!*\
  !*** ./resources/assets/vendor/js/template-customizer.js ***!
  \***********************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "TemplateCustomizer": function() { return /* binding */ TemplateCustomizer; }
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module './_template-customizer/_template-customizer.scss'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module './_template-customizer/_template-customizer.html'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }


var CSS_FILENAME_PATTERN = '%name%.css';
var CONTROLS = ['rtl', 'style', 'layoutType', 'layoutMenuFlipped', 'showDropdownOnHover', 'layoutNavbarFixed', 'layoutFooterFixed', 'themes'];
var STYLES = ['light', 'dark'];
var cl = document.documentElement.classList;
var DISPLAY_CUSTOMIZER = true;
var DEFAULT_THEME = document.getElementsByTagName('HTML')[0].getAttribute('data-theme') || 0;
var DEFAULT_STYLE = cl.contains('dark-style') ? 'dark' : 'light';
var DEFAULT_TEXT_DIR = document.documentElement.getAttribute('dir') === 'rtl';
var DEFAULT_MENU_COLLAPSED = !!cl.contains('layout-menu-collapsed');
var DEFAULT_MENU_FLIPPED = !!cl.contains('layout-menu-flipped');
var DEFAULT_SHOW_DROPDOWN_ON_HOVER = undefined;
var DEFAULT_NAVBAR_FIXED = !!cl.contains('layout-navbar-fixed');
var DEFAULT_FOOTER_FIXED = !!cl.contains('layout-footer-fixed');
var layoutType;
if (cl.contains('layout-menu-offcanvas')) {
  layoutType = 'static-offcanvas';
} else if (cl.contains('layout-menu-fixed')) {
  layoutType = 'fixed';
} else if (cl.contains('layout-menu-fixed-offcanvas')) {
  layoutType = 'fixed-offcanvas';
} else {
  layoutType = 'static';
}
var DEFAULT_LAYOUT_TYPE = layoutType;
var TemplateCustomizer = /*#__PURE__*/function () {
  function TemplateCustomizer(_ref) {
    var cssPath = _ref.cssPath,
      themesPath = _ref.themesPath,
      cssFilenamePattern = _ref.cssFilenamePattern,
      displayCustomizer = _ref.displayCustomizer,
      controls = _ref.controls,
      defaultTextDir = _ref.defaultTextDir,
      defaultLayoutType = _ref.defaultLayoutType,
      defaultMenuCollapsed = _ref.defaultMenuCollapsed,
      defaultMenuFlipped = _ref.defaultMenuFlipped,
      defaultShowDropdownOnHover = _ref.defaultShowDropdownOnHover,
      defaultNavbarFixed = _ref.defaultNavbarFixed,
      defaultFooterFixed = _ref.defaultFooterFixed,
      styles = _ref.styles,
      defaultStyle = _ref.defaultStyle,
      availableThemes = _ref.availableThemes,
      defaultTheme = _ref.defaultTheme,
      pathResolver = _ref.pathResolver,
      onSettingsChange = _ref.onSettingsChange,
      lang = _ref.lang;
    _classCallCheck(this, TemplateCustomizer);
    if (this._ssr) return;
    if (!window.Helpers) throw new Error('window.Helpers required.');
    this.settings = {};
    this.settings.cssPath = cssPath;
    this.settings.themesPath = themesPath;
    this.settings.cssFilenamePattern = cssFilenamePattern || CSS_FILENAME_PATTERN;
    this.settings.displayCustomizer = typeof displayCustomizer !== 'undefined' ? displayCustomizer : DISPLAY_CUSTOMIZER;
    this.settings.controls = controls || CONTROLS;
    this.settings.defaultTextDir = defaultTextDir === 'rtl' ? true :  false || DEFAULT_TEXT_DIR;
    this.settings.defaultLayoutType = defaultLayoutType || DEFAULT_LAYOUT_TYPE;
    this.settings.defaultMenuCollapsed = typeof defaultMenuCollapsed !== 'undefined' ? defaultMenuCollapsed : DEFAULT_MENU_COLLAPSED;
    this.settings.defaultMenuFlipped = typeof defaultMenuFlipped !== 'undefined' ? defaultMenuFlipped : DEFAULT_MENU_FLIPPED;
    this.settings.defaultShowDropdownOnHover = typeof defaultShowDropdownOnHover !== 'undefined' ? defaultShowDropdownOnHover : DEFAULT_SHOW_DROPDOWN_ON_HOVER;
    this.settings.defaultNavbarFixed = typeof defaultNavbarFixed !== 'undefined' ? defaultNavbarFixed : DEFAULT_NAVBAR_FIXED;
    this.settings.defaultFooterFixed = typeof defaultFooterFixed !== 'undefined' ? defaultFooterFixed : DEFAULT_FOOTER_FIXED;
    this.settings.availableThemes = availableThemes || TemplateCustomizer.THEMES;
    this.settings.defaultTheme = this._getDefaultTheme(typeof defaultTheme !== 'undefined' ? defaultTheme : DEFAULT_THEME);
    this.settings.styles = styles || STYLES;
    this.settings.defaultStyle = defaultStyle || DEFAULT_STYLE;
    this.settings.lang = lang || 'en';
    this.pathResolver = pathResolver || function (p) {
      return p;
    };
    if (this.settings.styles.length < 2) {
      var i = this.settings.controls.indexOf('style');
      if (i !== -1) {
        this.settings.controls = this.settings.controls.slice(0, i).concat(this.settings.controls.slice(i + 1));
      }
    }
    this.settings.onSettingsChange = typeof onSettingsChange === 'function' ? onSettingsChange : function () {};
    this._loadSettings();
    this._listeners = [];
    this._controls = {};
    this._initDirection();
    this._initStyle();
    this._initTheme();
    this.setLayoutType(this.settings.layoutType, false);
    this.setLayoutMenuFlipped(this.settings.layoutMenuFlipped, false);
    this.setDropdownOnHover(this.settings.showDropdownOnHover, false);
    this.setLayoutNavbarFixed(this.settings.layoutNavbarFixed, false);
    this.setLayoutFooterFixed(this.settings.layoutFooterFixed, false);
    this._setup();
  }
  _createClass(TemplateCustomizer, [{
    key: "setRtl",
    value: function setRtl(rtl) {
      if (!this._hasControls('rtl')) return;
      this._setSetting('Rtl', String(rtl));
      window.location.reload();
    }
  }, {
    key: "setStyle",
    value: function setStyle(style) {
      if (!this._hasControls('style')) return;
      this._setSetting('Style', ['dark'].indexOf(style) === -1 ? 'light' : style);
      window.location.reload();
    }
  }, {
    key: "setTheme",
    value: function setTheme(themeName) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      var cb = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
      if (!this._hasControls('themes')) return;
      var theme = this._getThemeByName(themeName);
      if (!theme) return;
      this.settings.theme = theme;
      if (updateStorage) this._setSetting('Theme', themeName);
      var themeUrl = this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace('%name%', themeName + (this.settings.style !== 'light' ? "-".concat(this.settings.style) : '')));
      this._loadStylesheets(_defineProperty({}, themeUrl, document.querySelector('.template-customizer-theme-css')), cb || function () {});
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);
    }
  }, {
    key: "setLayoutType",
    value: function setLayoutType(pos) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      if (!this._hasControls('layoutType')) return;
      if (pos !== 'static' && pos !== 'static-offcanvas' && pos !== 'fixed' && pos !== 'fixed-offcanvas') return;
      this.settings.layoutType = pos;
      if (updateStorage) this._setSetting('LayoutType', pos);
      window.Helpers.setPosition(pos === 'fixed' || pos === 'fixed-offcanvas', pos === 'static-offcanvas' || pos === 'fixed-offcanvas');
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);

      // Perfectscrollbar change on Layout change
      var menuScroll = window.Helpers.menuPsScroll;
      var PerfectScrollbarLib = window.PerfectScrollbar;
      if (this.settings.layoutType === 'fixed' || this.settings.layoutType === 'fixed-offcanvas') {
        // Set perfectscrollbar wheelPropagation false for fixed layout
        if (PerfectScrollbarLib && menuScroll) {
          window.Helpers.menuPsScroll.destroy();
          menuScroll = new PerfectScrollbarLib(document.querySelector('.menu-inner'), {
            suppressScrollX: true,
            wheelPropagation: false
          });
          window.Helpers.menuPsScroll = menuScroll;
        }
      } else if (menuScroll) {
        // Destroy perfectscrollbar for static layout
        window.Helpers.menuPsScroll.destroy();
      }
    }
  }, {
    key: "setLayoutMenuFlipped",
    value: function setLayoutMenuFlipped(flipped) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      if (!this._hasControls('layoutMenuFlipped')) return;
      this.settings.layoutMenuFlipped = flipped;
      if (updateStorage) this._setSetting('MenuFlipped', flipped);
      window.Helpers.setFlipped(flipped);
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);
    }
  }, {
    key: "setDropdownOnHover",
    value: function setDropdownOnHover(open) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      if (!this._hasControls('showDropdownOnHover')) return;
      this.settings.showDropdownOnHover = open;
      if (updateStorage) this._setSetting('ShowDropdownOnHover', open);
      if (window.Helpers.mainMenu) {
        window.Helpers.mainMenu.destroy();
        config.showDropdownOnHover = open;
        var _window = window,
          Menu = _window.Menu;
        window.Helpers.mainMenu = new Menu(document.getElementById('layout-menu'), {
          orientation: 'horizontal',
          closeChildren: true,
          showDropdownOnHover: config.showDropdownOnHover
        });
      }
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);
    }
  }, {
    key: "setLayoutNavbarFixed",
    value: function setLayoutNavbarFixed(fixed) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      if (!this._hasControls('layoutNavbarFixed')) return;
      this.settings.layoutNavbarFixed = fixed;
      if (updateStorage) this._setSetting('FixedNavbar', fixed);
      window.Helpers.setNavbarFixed(fixed);
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);
    }
  }, {
    key: "setLayoutFooterFixed",
    value: function setLayoutFooterFixed(fixed) {
      var updateStorage = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
      if (!this._hasControls('layoutFooterFixed')) return;
      this.settings.layoutFooterFixed = fixed;
      if (updateStorage) this._setSetting('FixedFooter', fixed);
      window.Helpers.setFooterFixed(fixed);
      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings);
    }
  }, {
    key: "setLang",
    value: function setLang(lang) {
      var _this = this;
      var force = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      if (lang === this.settings.lang && !force) return;
      if (!TemplateCustomizer.LANGUAGES[lang]) throw new Error("Language \"".concat(lang, "\" not found!"));
      var t = TemplateCustomizer.LANGUAGES[lang];
      ['panel_header', 'panel_sub_header', 'theming_header', 'theme_header', 'style_label', 'style_switch_light', 'style_switch_dark', 'layout_header', 'layout_label', 'layout_static', 'layout_offcanvas', 'layout_fixed', 'layout_fixed_offcanvas', 'layout_flipped_label', 'layout_dd_open_label', 'layout_navbar_label', 'layout_footer_label', 'misc_header', 'theme_label', 'rtl_label'].forEach(function (key) {
        var el = _this.container.querySelector(".template-customizer-t-".concat(key));
        // eslint-disable-next-line no-unused-expressions
        el && (el.textContent = t[key]);
      });
      var tt = t.themes || {};
      var themes = this.container.querySelectorAll('.template-customizer-theme-item') || [];
      for (var i = 0, l = themes.length; i < l; i++) {
        var themeName = themes[i].querySelector('input[type="radio"]').value;
        themes[i].querySelector('.template-customizer-theme-name').textContent = tt[themeName] || this._getThemeByName(themeName).title;
      }
      this.settings.lang = lang;
    }

    // Update theme settings control
  }, {
    key: "update",
    value: function update() {
      if (this._ssr) return;
      var hasNavbar = !!document.querySelector('.layout-navbar');
      var hasMenu = !!document.querySelector('.layout-menu');
      var hasHorizontalMenu = !!document.querySelector('.layout-menu-horizontal.menu, .layout-menu-horizontal .menu');
      var isLayout1 = !!document.querySelector('.layout-wrapper.layout-navbar-full');
      var hasFooter = !!document.querySelector('.content-footer');
      if (this._controls.layoutMenuFlipped) {
        if (!hasMenu) {
          this._controls.layoutMenuFlipped.setAttribute('disabled', 'disabled');
          this._controls.layoutMenuFlipped.classList.add('disabled');
        } else {
          this._controls.layoutMenuFlipped.removeAttribute('disabled');
          this._controls.layoutMenuFlipped.classList.remove('disabled');
        }
      }
      if (this._controls.showDropdownOnHover) {
        if (hasMenu) {
          this._controls.showDropdownOnHover.setAttribute('disabled', 'disabled');
          this._controls.showDropdownOnHover.classList.add('disabled');
        } else {
          this._controls.showDropdownOnHover.removeAttribute('disabled');
          this._controls.showDropdownOnHover.classList.remove('disabled');
        }
      }
      if (this._controls.layoutNavbarFixed) {
        if (!hasNavbar) {
          this._controls.layoutNavbarFixed.setAttribute('disabled', 'disabled');
          this._controls.layoutNavbarFixedW.classList.add('disabled');
        } else {
          this._controls.layoutNavbarFixed.removeAttribute('disabled');
          this._controls.layoutNavbarFixedW.classList.remove('disabled');
        }

        //  Horizontal menu fixed layout - disabled fixed navbar switch
        if (hasHorizontalMenu && hasNavbar && this.settings.layoutType == 'fixed') {
          this._controls.layoutNavbarFixed.setAttribute('disabled', 'disabled');
          this._controls.layoutNavbarFixedW.classList.add('disabled');
        }
      }
      if (this._controls.layoutFooterFixed) {
        if (!hasFooter) {
          this._controls.layoutFooterFixed.setAttribute('disabled', 'disabled');
          this._controls.layoutFooterFixedW.classList.add('disabled');
        } else {
          this._controls.layoutFooterFixed.removeAttribute('disabled');
          this._controls.layoutFooterFixedW.classList.remove('disabled');
        }
      }
      if (this._controls.layoutType) {
        // ? Uncomment If using offcanvas layout
        /*
        if (!hasMenu) {
          this._controls.layoutType.querySelector('[value="static-offcanvas"]').setAttribute('disabled', 'disabled')
          this._controls.layoutType.querySelector('[value="fixed-offcanvas"]').setAttribute('disabled', 'disabled')
        } else {
          this._controls.layoutType.querySelector('[value="static-offcanvas"]').removeAttribute('disabled')
          this._controls.layoutType.querySelector('[value="fixed-offcanvas"]').removeAttribute('disabled')
        }
        */

        // Disable menu layouts options if menu (vertical or horizontal) is not there
        // if ((!hasNavbar && !hasMenu) || (!hasMenu && !isLayout1)) {
        if (hasMenu || hasHorizontalMenu) {
          // (Updated condition)
          this._controls.layoutType.removeAttribute('disabled');
        } else {
          this._controls.layoutType.setAttribute('disabled', 'disabled');
        }
      }
    }

    // Clear local storage
  }, {
    key: "clearLocalStorage",
    value: function clearLocalStorage() {
      if (this._ssr) return;
      this._setSetting('Theme', '');
      this._setSetting('Rtl', '');
      this._setSetting('Style', '');
      this._setSetting('MenuFlipped', '');
      this._setSetting('FixedNavbar', '');
      this._setSetting('FixedFooter', '');
      this._setSetting('LayoutType', '');
    }

    // Clear local storage
  }, {
    key: "destroy",
    value: function destroy() {
      if (this._ssr) return;
      this._cleanup();
      this.settings = null;
      this.container.parentNode.removeChild(this.container);
      this.container = null;
    }
  }, {
    key: "_loadSettings",
    value: function _loadSettings() {
      // Get settings

      // const cl = document.documentElement.classList;
      var rtl = this._getSetting('Rtl');
      var style = this._getSetting('Style');
      var collapsedMenu = this._getSetting('LayoutCollapsed'); // Value will be set from main.js
      var flippedMenu = this._getSetting('LayoutMenuFlipped');
      var dropdownOnHover = this._getSetting('ShowDropdownOnHover'); // Value will be set from main.js
      var fixedNavbar = this._getSetting('FixedNavbar');
      var fixedFooter = this._getSetting('FixedFooter');
      var lType = this._getSetting('LayoutType');
      var type;
      if (lType !== '' && ['static', 'static-offcanvas', 'fixed', 'fixed-offcanvas'].indexOf(lType) !== -1) {
        type = lType;
      } else {
        type = this.settings.defaultLayoutType;
      }
      this.settings.layoutType = type;

      // ! Set settings by following priority: Local Storage, Theme Config, HTML Classes
      this.settings.rtl = rtl !== '' ? rtl === 'true' : this.settings.defaultTextDir;
      this.settings.style = this.settings.styles.indexOf(style) !== -1 ? style : this.settings.defaultStyle;
      if (this.settings.styles.indexOf(this.settings.style) === -1) {
        // eslint-disable-next-line prefer-destructuring
        this.settings.style = this.settings.styles[0];
      }
      this.settings.layoutMenu = collapsedMenu !== '' ? collapsedMenu === 'true' : this.settings.defaultMenuCollapsed;
      this.settings.layoutMenuFlipped = flippedMenu !== '' ? flippedMenu === 'true' : this.settings.defaultMenuFlipped;
      this.settings.showDropdownOnHover = dropdownOnHover !== '' ? dropdownOnHover === 'true' : this.settings.defaultShowDropdownOnHover;
      this.settings.layoutNavbarFixed = fixedNavbar !== '' ? fixedNavbar === 'true' : this.settings.defaultNavbarFixed;
      this.settings.layoutFooterFixed = fixedFooter !== '' ? fixedFooter === 'true' : this.settings.defaultFooterFixed;
      this.settings.theme = this._getThemeByName(this._getSetting('Theme'), true);

      // Filter options depending on available controls
      if (!this._hasControls('rtl')) this.settings.rtl = document.documentElement.getAttribute('dir') === 'rtl';
      if (!this._hasControls('style')) this.settings.style = cl.contains('dark-style') ? 'dark' : 'light';
      if (!this._hasControls('layoutType')) this.settings.layoutType = null;
      if (!this._hasControls('layoutMenuFlipped')) this.settings.layoutMenuFlipped = null;
      if (!this._hasControls('showDropdownOnHover')) this.settings.showDropdownOnHover = null;
      if (!this._hasControls('layoutNavbarFixed')) this.settings.layoutNavbarFixed = null;
      if (!this._hasControls('layoutFooterFixed')) this.settings.layoutFooterFixed = null;
      if (!this._hasControls('themes')) this.settings.theme = null;
    }

    // Setup theme settings controls and events
  }, {
    key: "_setup",
    value: function _setup() {
      var _this2 = this;
      var _container = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : document;
      this._cleanup();
      this.container = this._getElementFromString(Object(function webpackMissingModule() { var e = new Error("Cannot find module './_template-customizer/_template-customizer.html'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));

      // Customizer visibility condition
      //
      var customizerW = this.container;
      if (this.settings.displayCustomizer) customizerW.setAttribute('style', 'visibility: visible');else customizerW.setAttribute('style', 'visibility: hidden');

      // Open btn
      //
      var openBtn = this.container.querySelector('.template-customizer-open-btn');
      var openBtnCb = function openBtnCb() {
        _this2.container.classList.add('template-customizer-open');
        _this2.update();
        if (_this2._updateInterval) clearInterval(_this2._updateInterval);
        _this2._updateInterval = setInterval(function () {
          _this2.update();
        }, 500);
      };
      openBtn.addEventListener('click', openBtnCb);
      this._listeners.push([openBtn, 'click', openBtnCb]);

      // Close btn
      //

      var closeBtn = this.container.querySelector('.template-customizer-close-btn');
      var closeBtnCb = function closeBtnCb() {
        _this2.container.classList.remove('template-customizer-open');
        if (_this2._updateInterval) {
          clearInterval(_this2._updateInterval);
          _this2._updateInterval = null;
        }
      };
      closeBtn.addEventListener('click', closeBtnCb);
      this._listeners.push([closeBtn, 'click', closeBtnCb]);

      // RTL
      //

      var rtlW = this.container.querySelector('.template-customizer-misc');
      // ? Hide RTL control in following 2 case
      if (!this._hasControls('rtl') || !rtlSupport) {
        rtlW.parentNode.removeChild(rtlW);
      } else {
        var rtl = rtlW.querySelector('input');
        if (this.settings.rtl) rtl.setAttribute('checked', 'checked');
        var rtlCb = function rtlCb(e) {
          _this2._loadingState(true);
          _this2.setRtl(e.target.checked);
        };
        rtl.addEventListener('change', rtlCb);
        this._listeners.push([rtl, 'change', rtlCb]);
      }

      // Style

      //

      var styleW = this.container.querySelector('.template-customizer-style');
      if (!this._hasControls('style')) {
        styleW.parentNode.removeChild(styleW);
      } else {
        var style = styleW.querySelector('input');
        if (this.settings.style === 'dark') style.setAttribute('checked', 'checked');
        var styleCb = function styleCb(e) {
          _this2._loadingState(true);
          if (e.target.checked) {
            _this2.setStyle('dark');
          } else {
            _this2.setStyle('light');
          }
        };
        style.addEventListener('change', styleCb);
        this._listeners.push([style, 'change', styleCb]);
      }

      // Theme

      var themesW = this.container.querySelector('.template-customizer-themes');
      if (!this._hasControls('themes')) {
        themesW.parentNode.removeChild(themesW);
      } else {
        var themesWInner = themesW.querySelector('.template-customizer-themes-options');
        this.settings.availableThemes.forEach(function (theme) {
          var themeEl = _this2._getElementFromString("<div class=\"col-12\"><div class=\"form-check\"><input class=\"form-check-input\" type=\"radio\" name=\"themeRadios\" id=\"themeRadios".concat(theme.name, "\" value=\"").concat(theme.name, "\"><label class=\"form-check-label\" for=\"themeRadios").concat(theme.name, "\">").concat(theme.title, "</label></div></div>"));
          themesWInner.appendChild(themeEl);
        });
        themesWInner.querySelector("input[value=\"".concat(this.settings.theme.name, "\"]")).setAttribute('checked', 'checked');
        var themeCb = function themeCb(e) {
          if (_this2._loading) return;
          _this2._loading = true;
          _this2._loadingState(true, true);
          _this2.setTheme(e.target.value, true, function () {
            _this2._loading = false;
            _this2._loadingState(false, true);
          });
        };
        themesWInner.addEventListener('change', themeCb);
        this._listeners.push([themesWInner, 'change', themeCb]);
      }
      var themingW = this.container.querySelector('.template-customizer-theming');
      if (!this._hasControls('style') && !this._hasControls('themes')) {
        themingW.parentNode.removeChild(themingW);
      }

      // Layout wrapper
      //

      var layoutW = this.container.querySelector('.template-customizer-layout');
      if (!this._hasControls('layoutType layoutNavbarFixed layoutFooterFixed layoutMenuFlipped showDropdownOnHover', true)) {
        layoutW.parentNode.removeChild(layoutW);
      } else {
        // Position
        //

        var layoutTypeW = this.container.querySelector('.template-customizer-layoutType');
        if (!this._hasControls('layoutType')) {
          layoutTypeW.parentNode.removeChild(layoutTypeW);
        } else {
          this._controls.layoutType = layoutTypeW.querySelector('.template-customizer-layouts-options');

          // this._controls.layoutType.value = this.settings.layoutType
          this._controls.layoutType.querySelector("input[value=\"".concat(this.settings.layoutType, "\"]")).setAttribute('checked', 'checked');
          var layoutTypeCb = function layoutTypeCb(e) {
            return _this2.setLayoutType(e.target.value);
          };
          this._controls.layoutType.addEventListener('change', layoutTypeCb);
          this._listeners.push([this._controls.layoutType, 'change', layoutTypeCb]);
        }

        // Menu flipped
        // ? Uncomment If needed

        /* this._controls.layoutMenuFlipped = this.container.querySelector('.template-customizer-layoutMenuFlipped')
          if (!this._hasControls('layoutMenuFlipped')) {
          this._controls.layoutMenuFlipped.parentNode.removeChild(this._controls.layoutMenuFlipped)
        } else {
          this._controls.layoutMenuFlipped = this._controls.layoutMenuFlipped.querySelector('input')
            if (this.settings.layoutMenuFlipped) this._controls.layoutMenuFlipped.setAttribute('checked', 'checked')
            const layoutMenuFlipped = e => this.setLayoutMenuFlipped(e.target.checked)
          this._controls.layoutMenuFlipped.addEventListener('change', layoutMenuFlipped)
          this._listeners.push([this._controls.layoutMenuFlipped, 'change', layoutMenuFlipped])
        } */

        // Menu open
        //

        this._controls.showDropdownOnHover = this.container.querySelector('.template-customizer-showDropdownOnHover');
        if (!this._hasControls('showDropdownOnHover')) {
          this._controls.showDropdownOnHover.parentNode.removeChild(this._controls.showDropdownOnHover);
        } else {
          this._controls.showDropdownOnHover = this._controls.showDropdownOnHover.querySelector('input');
          if (this.settings.showDropdownOnHover) this._controls.showDropdownOnHover.setAttribute('checked', 'checked');
          var showDropdownOnHover = function showDropdownOnHover(e) {
            return _this2.setDropdownOnHover(e.target.checked);
          };
          this._controls.showDropdownOnHover.addEventListener('change', showDropdownOnHover);
          this._listeners.push([this._controls.showDropdownOnHover, 'change', showDropdownOnHover]);
        }

        // Navbar
        //

        this._controls.layoutNavbarFixedW = this.container.querySelector('.template-customizer-layoutNavbarFixed');
        if (!this._hasControls('layoutNavbarFixed')) {
          this._controls.layoutNavbarFixedW.parentNode.removeChild(this._controls.layoutNavbarFixedW);
        } else {
          this._controls.layoutNavbarFixed = this._controls.layoutNavbarFixedW.querySelector('input');
          if (this.settings.layoutNavbarFixed) this._controls.layoutNavbarFixed.setAttribute('checked', 'checked');
          var layoutNavbarFixedCb = function layoutNavbarFixedCb(e) {
            return _this2.setLayoutNavbarFixed(e.target.checked);
          };
          this._controls.layoutNavbarFixed.addEventListener('change', layoutNavbarFixedCb);
          this._listeners.push([this._controls.layoutNavbarFixed, 'change', layoutNavbarFixedCb]);
        }

        // Footer
        //

        this._controls.layoutFooterFixedW = this.container.querySelector('.template-customizer-layoutFooterFixed');
        if (!this._hasControls('layoutFooterFixed')) {
          this._controls.layoutFooterFixedW.parentNode.removeChild(this._controls.layoutFooterFixedW);
        } else {
          this._controls.layoutFooterFixed = this._controls.layoutFooterFixedW.querySelector('input');
          if (this.settings.layoutFooterFixed) this._controls.layoutFooterFixed.setAttribute('checked', 'checked');
          var layoutFooterFixedCb = function layoutFooterFixedCb(e) {
            return _this2.setLayoutFooterFixed(e.target.checked);
          };
          this._controls.layoutFooterFixed.addEventListener('change', layoutFooterFixedCb);
          this._listeners.push([this._controls.layoutFooterFixed, 'change', layoutFooterFixedCb]);
        }
      }

      // Set language
      this.setLang(this.settings.lang, true);

      // Append container
      if (_container === document) {
        if (_container.body) {
          _container.body.appendChild(this.container);
        } else {
          window.addEventListener('DOMContentLoaded', function () {
            return _container.body.appendChild(_this2.container);
          });
        }
      } else {
        _container.appendChild(this.container);
      }
    }
  }, {
    key: "_initDirection",
    value: function _initDirection() {
      if (this._hasControls('rtl')) document.documentElement.setAttribute('dir', this.settings.rtl ? 'rtl' : 'ltr');
    }

    // Init template styles
  }, {
    key: "_initStyle",
    value: function _initStyle() {
      if (!this._hasControls('style')) return;
      var style = this.settings.style;
      this._insertStylesheet('template-customizer-core-css', this.pathResolver(this.settings.cssPath + this.settings.cssFilenamePattern.replace('%name%', "core".concat(style !== 'light' ? "-".concat(style) : ''))));
      // ? Uncomment if needed
      /*
      this._insertStylesheet(
        'template-customizer-bootstrap-css',
        this.pathResolver(
          this.settings.cssPath +
            this.settings.cssFilenamePattern.replace('%name%', `bootstrap${style !== 'light' ? `-${style}` : ''}`)
        )
      )
      this._insertStylesheet(
        'template-customizer-bsextended-css',
        this.pathResolver(
          this.settings.cssPath +
            this.settings.cssFilenamePattern.replace(
              '%name%',
              `bootstrap-extended${style !== 'light' ? `-${style}` : ''}`
            )
        )
      )
      this._insertStylesheet(
        'template-customizer-components-css',
        this.pathResolver(
          this.settings.cssPath +
            this.settings.cssFilenamePattern.replace('%name%', `components${style !== 'light' ? `-${style}` : ''}`)
        )
      )
      this._insertStylesheet(
        'template-customizer-colors-css',
        this.pathResolver(
          this.settings.cssPath +
            this.settings.cssFilenamePattern.replace('%name%', `colors${style !== 'light' ? `-${style}` : ''}`)
        )
      )
      */

      var classesToRemove = style === 'light' ? ['dark-style'] : ['light-style'];
      classesToRemove.forEach(function (cls) {
        document.documentElement.classList.remove(cls);
      });
      document.documentElement.classList.add("".concat(style, "-style"));
    }

    // Init theme style
  }, {
    key: "_initTheme",
    value: function _initTheme() {
      if (this._hasControls('themes')) {
        this._insertStylesheet('template-customizer-theme-css', this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace('%name%', this.settings.theme.name + (this.settings.style !== 'light' ? "-".concat(this.settings.style) : ''))));
      } else {
        // If theme control is not enabled, get the current theme from localstorage else display default theme
        var theme = this._getSetting('Theme');
        this._insertStylesheet('template-customizer-theme-css', this.pathResolver(this.settings.themesPath + this.settings.cssFilenamePattern.replace('%name%', theme ? theme : 'theme-default' + (this.settings.style !== 'light' ? "-".concat(this.settings.style) : ''))));
      }
    }
  }, {
    key: "_insertStylesheet",
    value: function _insertStylesheet(className, href) {
      var curLink = document.querySelector(".".concat(className));
      if (typeof document.documentMode === 'number' && document.documentMode < 11) {
        if (!curLink) return;
        if (href === curLink.getAttribute('href')) return;
        var link = document.createElement('link');
        link.setAttribute('rel', 'stylesheet');
        link.setAttribute('type', 'text/css');
        link.className = className;
        link.setAttribute('href', href);
        curLink.parentNode.insertBefore(link, curLink.nextSibling);
      } else {
        document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"".concat(href, "\" class=\"").concat(className, "\">"));
      }
      curLink.parentNode.removeChild(curLink);
    }
  }, {
    key: "_loadStylesheets",
    value: function _loadStylesheets(stylesheets, cb) {
      var paths = Object.keys(stylesheets);
      var count = paths.length;
      var loaded = 0;
      function loadStylesheet(path, curLink, _cb) {
        var link = document.createElement('link');
        link.setAttribute('href', path);
        link.setAttribute('rel', 'stylesheet');
        link.setAttribute('type', 'text/css');
        link.className = curLink.className;
        var sheet = 'sheet' in link ? 'sheet' : 'styleSheet';
        var cssRules = 'sheet' in link ? 'cssRules' : 'rules';
        var intervalId;
        var timeoutId = setTimeout(function () {
          clearInterval(intervalId);
          clearTimeout(timeoutId);
          curLink.parentNode.removeChild(link);
          _cb(false, path);
        }, 15000);
        intervalId = setInterval(function () {
          try {
            if (link[sheet] && link[sheet][cssRules].length) {
              clearInterval(intervalId);
              clearTimeout(timeoutId);
              curLink.parentNode.removeChild(curLink);
              _cb(true);
            }
          } catch (e) {
            // Catch error
          }
        }, 10);
        curLink.parentNode.insertBefore(link, curLink.nextSibling);
      }
      function stylesheetCallBack() {
        if ((loaded += 1) >= count) {
          cb();
        }
      }
      for (var i = 0; i < paths.length; i++) {
        loadStylesheet(paths[i], stylesheets[paths[i]], stylesheetCallBack());
      }
    }
  }, {
    key: "_loadingState",
    value: function _loadingState(enable, themes) {
      this.container.classList[enable ? 'add' : 'remove']("template-customizer-loading".concat(themes ? '-theme' : ''));
    }
  }, {
    key: "_getElementFromString",
    value: function _getElementFromString(str) {
      var wrapper = document.createElement('div');
      wrapper.innerHTML = str;
      return wrapper.firstChild;
    }

    // Set settings in LocalStorage with layout & key
  }, {
    key: "_getSetting",
    value: function _getSetting(key) {
      var result = null;
      var layoutName = this._getLayoutName();
      try {
        result = localStorage.getItem("templateCustomizer-".concat(layoutName, "--").concat(key));
      } catch (e) {
        // Catch error
      }
      return String(result || '');
    }

    // Set settings in LocalStorage with layout & key
  }, {
    key: "_setSetting",
    value: function _setSetting(key, val) {
      var layoutName = this._getLayoutName();
      try {
        localStorage.setItem("templateCustomizer-".concat(layoutName, "--").concat(key), String(val));
      } catch (e) {
        // Catch Error
      }
    }

    // Get layout name to set unique
  }, {
    key: "_getLayoutName",
    value: function _getLayoutName() {
      return document.getElementsByTagName('HTML')[0].getAttribute('data-template');
    }
  }, {
    key: "_removeListeners",
    value: function _removeListeners() {
      for (var i = 0, l = this._listeners.length; i < l; i++) {
        this._listeners[i][0].removeEventListener(this._listeners[i][1], this._listeners[i][2]);
      }
    }
  }, {
    key: "_cleanup",
    value: function _cleanup() {
      this._removeListeners();
      this._listeners = [];
      this._controls = {};
      if (this._updateInterval) {
        clearInterval(this._updateInterval);
        this._updateInterval = null;
      }
    }
  }, {
    key: "_ssr",
    get: function get() {
      return typeof window === 'undefined';
    }

    // Check controls availability
  }, {
    key: "_hasControls",
    value: function _hasControls(controls) {
      var _this3 = this;
      var oneOf = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      return controls.split(' ').reduce(function (result, control) {
        if (_this3.settings.controls.indexOf(control) !== -1) {
          if (oneOf || result !== false) result = true;
        } else if (!oneOf || result !== true) result = false;
        return result;
      }, null);
    }

    // Get the default theme
  }, {
    key: "_getDefaultTheme",
    value: function _getDefaultTheme(themeId) {
      var theme;
      //! Fix: If horizontal layout and selected layout is semi-dark then set layout default
      if (document.querySelector('[data-template="horizontal-menu-template"]')) {
        if (themeId === 1) {
          themeId = 0;
        }
      }
      if (typeof themeId === 'string') {
        theme = this._getThemeByName(themeId, false);
      } else {
        theme = this.settings.availableThemes[themeId];
      }
      if (!theme) {
        throw new Error("Theme ID \"".concat(themeId, "\" not found!"));
      }
      return theme;
    }

    // Get theme by themeId/themeName
  }, {
    key: "_getThemeByName",
    value: function _getThemeByName(themeName) {
      var returnDefault = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
      var themes = this.settings.availableThemes;
      for (var i = 0, l = themes.length; i < l; i++) {
        if (themes[i].name === themeName) return themes[i];
      }
      return returnDefault ? this.settings.defaultTheme : null;
    }
  }]);
  return TemplateCustomizer;
}(); // Themes
TemplateCustomizer.THEMES = [{
  name: 'theme-default',
  title: 'Default'
}, {
  name: 'theme-semi-dark',
  title: 'Semi Dark'
}, {
  name: 'theme-bordered',
  title: 'Bordered'
}];

// Theme setting language
TemplateCustomizer.LANGUAGES = {
  en: {
    panel_header: 'TEMPLATE CUSTOMIZER',
    panel_sub_header: 'Customize and preview in real time',
    theming_header: 'THEMING',
    theme_header: 'THEME',
    theme_label: 'Themes',
    style_label: 'Style (Mode)',
    style_switch_light: 'Light',
    style_switch_dark: 'Dark',
    layout_header: 'LAYOUT',
    layout_label: 'Layout (Menu)',
    layout_static: 'Static',
    layout_offcanvas: 'Offcanvas',
    layout_fixed: 'Fixed',
    layout_fixed_offcanvas: 'Fixed offcanvas',
    layout_flipped_label: 'Menu flipped',
    layout_dd_open_label: 'Dropdown on hover',
    layout_navbar_label: 'Fixed navbar',
    layout_footer_label: 'Fixed footer',
    misc_header: 'MISC',
    rtl_label: 'RTL direction'
  },
  fr: {
    panel_header: 'MODÈLE DE PERSONNALISATION',
    panel_sub_header: 'Personnalisez et prévisualisez en temps réel',
    theming_header: 'THÉMATISATION',
    theme_header: 'THÈME',
    theme_label: 'Thèmes',
    style_label: 'Style (Mode)',
    style_switch_light: 'Léger',
    style_switch_dark: 'Sombre',
    layout_header: 'DISPOSITION',
    layout_label: 'Mise en page (Menu)',
    layout_static: 'Statique',
    layout_offcanvas: 'Hors toile',
    layout_fixed: 'Fixé',
    layout_fixed_offcanvas: 'Fixe hors toile',
    layout_flipped_label: 'Menu inversé',
    layout_dd_open_label: 'Liste déroulante au survol',
    layout_navbar_label: 'Barre de navigation fixe',
    layout_footer_label: 'Pied de page fixe',
    misc_header: 'DIVERS',
    rtl_label: 'Sens RTL'
  },
  de: {
    panel_header: 'VORLAGEN-ANPASSER',
    panel_sub_header: 'Anpassen und Vorschau in Echtzeit',
    theming_header: 'THEMEN',
    theme_header: 'THEMA',
    theme_label: 'Themen',
    style_label: 'Stil (Modus)',
    style_switch_light: 'Hell',
    style_switch_dark: 'Dunkel',
    layout_header: 'LAYOUT',
    layout_label: 'Layout (Speisekarte)',
    layout_static: 'Statisch',
    layout_offcanvas: 'Leinwand',
    layout_fixed: 'Fest',
    layout_fixed_offcanvas: 'Außerhalb der Leinwand behoben',
    layout_flipped_label: 'Menü umgedreht',
    layout_dd_open_label: 'Dropdown beim Hover',
    layout_navbar_label: 'Navigationsleiste behoben',
    layout_footer_label: 'Feste Fußzeile',
    misc_header: 'VERSCHIEDENES',
    rtl_label: 'RTL-Regie'
  },
  pt: {
    panel_header: 'PERSONALIZADOR DE MODELO',
    panel_sub_header: 'Personalize e visualize em tempo real',
    theming_header: 'TEMAS',
    theme_header: 'TEMA',
    theme_label: 'Temas',
    style_label: 'Estilo (Modo)',
    style_switch_light: 'Luz',
    style_switch_dark: 'Escuro',
    layout_header: 'ESQUEMA',
    layout_label: 'Esquema (Cardápio)',
    layout_static: 'Estático',
    layout_offcanvas: 'Offcanvas',
    layout_fixed: 'Fixo',
    layout_fixed_offcanvas: 'Offscreen fixo',
    layout_flipped_label: 'Menu invertido',
    layout_dd_open_label: 'Suspensão ao passar o mouse',
    layout_navbar_label: 'Barra de navegação fixa',
    layout_footer_label: 'Rodapé fixo',
    misc_header: 'DIVERSOS',
    rtl_label: 'Direção RTL'
  }
};

var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;