!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}({"/RxM":function(e,t){},0:function(e,t,n){n("ntsY"),e.exports=n("/RxM")},ntsY:function(e,t){!function(e,t){var n=acf.models.SelectField.extend({type:"country"});function r(t){return t.id?e('<span class="acf-country-flag-icon famfamfam-flags '+t.id.toLowerCase()+'"></span> <span class="acf-country-flag-name">'+t.text+"</span>"):t.text}acf.registerFieldType(n),acf.registerConditionForFieldType("contains","country"),acf.registerConditionForFieldType("selectEqualTo","country"),acf.registerConditionForFieldType("selectNotEqualTo","country"),acf.addFilter("select2_args",function(t,n,o,c,a){return"country"!==a.data.field.get("type")?t:(e.extend(t,{templateResult:r,templateSelection:r}),t)})}(jQuery)}});