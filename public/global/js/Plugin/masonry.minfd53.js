/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/masonry",["exports","jquery","Plugin"],factory);else if("undefined"!=typeof exports)factory(exports,require("jquery"),require("Plugin"));else{var mod={exports:{}};factory(mod.exports,global.jQuery,global.Plugin),global.PluginMasonry=mod.exports}}(this,function(exports,_jquery,_Plugin2){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _jquery2=babelHelpers.interopRequireDefault(_jquery),_Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Masonry=function(_Plugin){function Masonry(){return babelHelpers.classCallCheck(this,Masonry),babelHelpers.possibleConstructorReturn(this,(Masonry.__proto__||Object.getPrototypeOf(Masonry)).apply(this,arguments))}return babelHelpers.inherits(Masonry,_Plugin),babelHelpers.createClass(Masonry,[{key:"getName",value:function(){return"masonry"}},{key:"render",value:function(){if(void 0!==_jquery2.default.fn.masonry){var $el=this.$el;_jquery2.default.fn.imagesLoaded?$el.imagesLoaded(function(){$el.masonry(this.options)}):$el.masonry(this.options)}}}],[{key:"getDefaults",value:function(){return{itemSelector:".masonry-item"}}}]),Masonry}(_Plugin3.default);_Plugin3.default.register("masonry",Masonry),exports.default=Masonry});