/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Site",["exports","jquery","Base","Menubar","Sidebar","PageAside"],factory);else if("undefined"!=typeof exports)factory(exports,require("jquery"),require("Base"),require("Menubar"),require("Sidebar"),require("PageAside"));else{var mod={exports:{}};factory(mod.exports,global.jQuery,global.Base,global.SectionMenubar,global.SectionSidebar,global.SectionPageAside),global.Site=mod.exports}}(this,function(exports,_jquery,_Base2,_Menubar,_Sidebar,_PageAside){"use strict";function getInstance(){return instance||(instance=new Site),instance}Object.defineProperty(exports,"__esModule",{value:!0}),exports.getInstance=exports.run=exports.Site=void 0;var _jquery2=babelHelpers.interopRequireDefault(_jquery),_Base3=babelHelpers.interopRequireDefault(_Base2),_Menubar2=babelHelpers.interopRequireDefault(_Menubar),_Sidebar2=babelHelpers.interopRequireDefault(_Sidebar),_PageAside2=babelHelpers.interopRequireDefault(_PageAside),DOC=document,$DOC=(0,_jquery2.default)(document),$BODY=(0,_jquery2.default)("body"),Site=function(_Base){function Site(){return babelHelpers.classCallCheck(this,Site),babelHelpers.possibleConstructorReturn(this,(Site.__proto__||Object.getPrototypeOf(Site)).apply(this,arguments))}return babelHelpers.inherits(Site,_Base),babelHelpers.createClass(Site,[{key:"initialize",value:function(){this.startLoading(),this.initializePluginAPIs(),this.initializePlugins(),this.initComponents()}},{key:"process",value:function(){this.polyfillIEWidth(),this.initBootstrap(),this.setupMenubar(),this.setupFullScreen(),this.setupMegaNavbar(),this.setupTour(),this.setupNavbarCollpase(),this.$el.on("click",".dropdown-menu-media",function(e){e.stopPropagation()})}},{key:"_getDefaultMeunbarType",value:function(){return"hide"}},{key:"menubarType",value:function(type){(0,_jquery2.default)('[data-toggle="menubar"]').each(function(){var $this=(0,_jquery2.default)(this),$hamburger=(0,_jquery2.default)(this).find(".hamburger");$hamburger.length>0?$hamburger.toggleClass("hided",!("open"===type)):$this.toggleClass("hided",!("open"===type))})}},{key:"initComponents",value:function(){this.menubar=new _Menubar2.default({$el:(0,_jquery2.default)(".site-menubar")}),this.sidebar=new _Sidebar2.default;var $aside=(0,_jquery2.default)(".page-aside");$aside.length>0&&(this.aside=new _PageAside2.default({$el:$aside}),this.aside.run()),this.menubar.run(),this.sidebar.run()}},{key:"getCurrentBreakpoint",value:function(){var bp=Breakpoints.current();return bp?bp.name:"lg"}},{key:"initBootstrap",value:function(){$DOC.tooltip({selector:"[data-tooltip=true]",container:"body"}),(0,_jquery2.default)('[data-toggle="tooltip"]').tooltip(),(0,_jquery2.default)('[data-toggle="popover"]').popover()}},{key:"polyfillIEWidth",value:function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var msViewportStyle=DOC.createElement("style");msViewportStyle.appendChild(DOC.createTextNode("@-ms-viewport{width:auto!important}")),DOC.querySelector("head").appendChild(msViewportStyle)}}},{key:"setupFullScreen",value:function(){"undefined"!=typeof screenfull&&($DOC.on("click",'[data-toggle="fullscreen"]',function(){return screenfull.enabled&&screenfull.toggle(),!1}),screenfull.enabled&&DOC.addEventListener(screenfull.raw.fullscreenchange,function(){(0,_jquery2.default)('[data-toggle="fullscreen"]').toggleClass("active",screenfull.isFullscreen)}))}},{key:"setupMegaNavbar",value:function(){$DOC.on("click",".navbar-mega .dropdown-menu",function(e){e.stopPropagation()}).on("show.bs.dropdown",function(e){var $target=(0,_jquery2.default)(e.target),animation=(e.relatedTarget?(0,_jquery2.default)(e.relatedTarget):$target.children('[data-toggle="dropdown"]')).data("animation");if(animation){var $menu=$target.children(".dropdown-menu");$menu.addClass("animation-"+animation).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$menu.removeClass("animation-"+animation)})}}).on("shown.bs.dropdown",function(e){var $menu=(0,_jquery2.default)(e.target).find(".dropdown-menu-media > .list-group");if($menu.length>0){var api=$menu.data("asScrollable");api?api.update():$menu.asScrollable({namespace:"scrollable",contentSelector:"> [data-role='content']",containerSelector:"> [data-role='container']"})}})}},{key:"setupMenubar",value:function(){var _this2=this;(0,_jquery2.default)(document).on("click",'[data-toggle="menubar"]',function(){var type=_this2.menubar.type;switch(type){case"open":type="hide";break;case"hide":type="open"}return _this2.menubar.change(type),_this2.menubarType(type),!1}),(0,_jquery2.default)(document).on("collapsed.site.menu expanded.site.menu",function(){"open"===_this2.menubar.type&&_this2.menubar&&_this2.menubar.scrollable&&_this2.menubar.scrollable.update()}),Breakpoints.on("change",function(){_this2.menubar.type=_this2._getDefaultMeunbarType(),_this2.menubar.change(_this2.menubar.type)})}},{key:"setupNavbarCollpase",value:function(){(0,_jquery2.default)(document).on("click","[data-target='#site-navbar-collapse']",function(e){var isClose=(0,_jquery2.default)(this).hasClass("collapsed");$BODY.addClass("site-navbar-collapsing"),$BODY.toggleClass("site-navbar-collapse-show",!isClose),setTimeout(function(){$BODY.removeClass("site-navbar-collapsing")},350)})}},{key:"startLoading",value:function(){if(void 0===_jquery2.default.fn.animsition)return!1;$BODY.animsition({inClass:"fade-in",inDuration:800,loading:!0,loadingClass:"loader-overlay",loadingParentElement:"html",loadingInner:'\n      <div class="loader-content">\n        <div class="loader-index">\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n          <div></div>\n        </div>\n      </div>',onLoadEvent:!0})}},{key:"setupTour",value:function(flag){if(void 0===this.tour){if("undefined"==typeof introJs)return;var overflow=(0,_jquery2.default)("body").css("overflow"),self=this,tourOptions=Config.get("tour");this.tour=introJs(),this.tour.onbeforechange(function(){(0,_jquery2.default)("body").css("overflow","hidden")}),this.tour.oncomplete(function(){(0,_jquery2.default)("body").css("overflow",overflow)}),this.tour.onexit(function(){(0,_jquery2.default)("body").css("overflow",overflow)}),this.tour.setOptions(tourOptions),(0,_jquery2.default)(".site-tour-trigger").on("click",function(){self.tour.start()})}}}]),Site}(_Base3.default),instance=null;exports.default=Site,exports.Site=Site,exports.run=function(){getInstance().run()},exports.getInstance=getInstance});