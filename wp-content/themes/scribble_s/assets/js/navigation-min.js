"use strict";function _unsupportedIterableToArray(e,t){if(e){if("string"==typeof e)return _arrayLikeToArray(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?_arrayLikeToArray(e,t):void 0}}function _arrayLikeToArray(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function _createForOfIteratorHelper(e,t){var r="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!r){if(Array.isArray(e)||(r=_unsupportedIterableToArray(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,a=function(){};return{s:a,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,i=!0,l=!1;return{s:function(){r=r.call(e)},n:function(){var e=r.next();return i=e.done,e},e:function(e){l=!0,o=e},f:function(){try{i||null==r.return||r.return()}finally{if(l)throw o}}}}!function(){var e=document.getElementById("site-navigation"),t=document.getElementById("mobile-nav");if(e||t){var r=e.getElementsByTagName("button")[0];if(void 0!==r){var n=e.getElementsByTagName("ul")[0];if(void 0!==n){n.classList.contains("nav-menu")||n.classList.add("nav-menu"),r.addEventListener("click",(function(){e.classList.toggle("toggled"),"true"===r.getAttribute("aria-expanded")?r.setAttribute("aria-expanded","false"):r.setAttribute("aria-expanded","true")})),document.addEventListener("click",(function(t){e.contains(t.target)||(e.classList.remove("toggled"),r.setAttribute("aria-expanded","false"))}));var a,o=n.getElementsByTagName("a"),i=n.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a"),l=_createForOfIteratorHelper(o);try{for(l.s();!(a=l.n()).done;){var s=a.value;s.addEventListener("focus",f,!0),s.addEventListener("blur",f,!0)}}catch(e){l.e(e)}finally{l.f()}var u,c=_createForOfIteratorHelper(i);try{for(c.s();!(u=c.n()).done;){u.value.addEventListener("touchstart",f,!1)}}catch(e){c.e(e)}finally{c.f()}}else r.style.display="none"}}function f(){if("focus"===event.type||"blur"===event.type)for(var e=this;!e.classList.contains("nav-menu");)"li"===e.tagName.toLowerCase()&&e.classList.toggle("focus"),e=e.parentNode;if("touchstart"===event.type){var t=this.parentNode;event.preventDefault();var r,n=_createForOfIteratorHelper(t.parentNode.children);try{for(n.s();!(r=n.n()).done;){var a=r.value;t!==a&&a.classList.remove("focus")}}catch(e){n.e(e)}finally{n.f()}t.classList.toggle("focus")}}}();
//# sourceMappingURL=navigation-min.js.map