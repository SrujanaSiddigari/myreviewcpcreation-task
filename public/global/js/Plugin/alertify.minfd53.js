/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Plugin/alertify",["exports","Plugin"],factory);else if("undefined"!=typeof exports)factory(exports,require("Plugin"));else{var mod={exports:{}};factory(mod.exports,global.Plugin),global.PluginAlertify=mod.exports}}(this,function(exports,_Plugin2){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _Plugin3=babelHelpers.interopRequireDefault(_Plugin2),Alertify=function(_Plugin){function Alertify(){return babelHelpers.classCallCheck(this,Alertify),babelHelpers.possibleConstructorReturn(this,(Alertify.__proto__||Object.getPrototypeOf(Alertify)).apply(this,arguments))}return babelHelpers.inherits(Alertify,_Plugin),babelHelpers.createClass(Alertify,[{key:"getName",value:function(){return"alertify"}},{key:"render",value:function(){this.options.labelOk&&(this.options.okBtn=this.options.labelOk),this.options.labelCancel&&(this.options.cancelBtn=this.options.labelCancel),this.$el.data("alertifyWrapApi",this)}},{key:"show",value:function(){if("undefined"!=typeof alertify){var options=this.options;switch(void 0!==options.delay&&alertify.delay(options.delay),void 0!==options.theme&&alertify.theme(options.theme),void 0!==options.cancelBtn&&alertify.cancelBtn(options.cancelBtn),void 0!==options.okBtn&&alertify.okBtn(options.okBtn),void 0!==options.placeholder&&alertify.delay(options.placeholder),void 0!==options.defaultValue&&alertify.delay(options.defaultValue),void 0!==options.maxLogItems&&alertify.delay(options.maxLogItems),void 0!==options.closeLogOnClick&&alertify.delay(options.closeLogOnClick),options.type){case"confirm":alertify.confirm(options.confirmTitle,function(){alertify.success(options.successMessage)},function(){alertify.error(options.errorMessage)});break;case"prompt":alertify.prompt(options.promptTitle,function(str,ev){var message=options.successMessage.replace("%s",str);alertify.success(message)},function(ev){alertify.error(options.errorMessage)});break;case"log":alertify.log(options.logMessage);break;case"success":alertify.success(options.successMessage);break;case"error":alertify.error(options.errorMessage);break;default:alertify.alert(options.alertMessage)}}}}],[{key:"getDefaults",value:function(){return{type:"alert",delay:5e3,theme:"bootstrap"}}},{key:"api",value:function(){return"click|show"}}]),Alertify}(_Plugin3.default);_Plugin3.default.register("alertify",Alertify),exports.default=Alertify});