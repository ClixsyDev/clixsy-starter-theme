/*! For license information please see script.js.LICENSE.txt */
(()=>{var t,e={827:(t,e,r)=>{"use strict";var a=r(59),o=r.n(a),n=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document;if(null!=t&&"string"==typeof t)try{return e.querySelector(t)||void 0}catch(t){var r=t.message;return void console.error(r)}};window.innerWidth;function i(){var t=n("#main-menu-button"),e=n("nav.main-menu");function r(){var r,n,i,s;t.classList.remove("open"),e.classList.remove("open"),a(0),o(),e.scrollTo(0,0),r="click",n=window,i=l,"function"==typeof n&&(s=i,i=n,n=window),s=!!s,(n="string"==typeof n?document.querySelector(n):n)&&n.removeEventListener(r,i,s)}function a(t){e.classList.remove("active-level-1","active-level-2","active-level-3"),-1!==[1,2,3].indexOf(t)&&e.classList.add("active-level-"+t)}function o(t){t=void 0!==t?t:0;var r=e.querySelectorAll("[class*=level-]");Array.from(r).forEach((function(e){var r=e;t<=parseInt(r.getAttribute("data-level"))&&(r.classList.remove("open"),null!==r.querySelector("ul.open")&&r.querySelector("ul.open").classList.remove("open"),r.querySelector(".o-sub.open")&&r.querySelector(".o-sub.open").classList.remove("open"))}))}t.addEventListener("click",(function(o){o.stopPropagation(),o.preventDefault(),t.classList.contains("open")?r():(e.classList.add("open"),t.classList.add("open"),window.addEventListener("click",l),a(1))}));var i=document.querySelectorAll(".o-sub[data-target-alias]");function l(t){(null!==t.target.closest("#main-menu-button")&&null!==t.target.closest(".o-sub")&&null!==t.target.closest("nav.main-menu")||t.target.classList.contains("wrapper"))&&r()}if(null!==i&&(console.log(i),Array.from(i).forEach((function(t){t.addEventListener("click",(function(r){console.log(t);var n=t.getAttribute("data-item-title"),i=t.getAttribute("data-url");if(null!=n&&null!=n&&null!=i&&null!=i){var l=t.getAttribute("data-target-alias"),s=document.querySelector("[data-alias=".concat(l,"] .level-url"));s.textContent=n,s.setAttribute("href",i),console.log(i)}r.preventDefault(),r.stopPropagation();var u=this.getAttribute("data-target-alias"),c=this.closest("div[class*=level-]");this.classList.contains("open")?(a(parseInt(c.getAttribute("data-level"))),this.classList.remove("open"),o(parseInt(c.getAttribute("data-level")))):(a(parseInt(c.getAttribute("data-level"))+1),o(parseInt(c.getAttribute("data-level"))),function(t){var r=e.querySelector("[data-alias="+t+"]");if(null!==r.length){var a=r.closest("div[data-level]");a.classList.add("open"),null!==a.querySelector("ul.visible")&&a.querySelector("ul.visible").classList.remove("visible"),r.classList.add("visible")}}(u),null!==c.querySelector(".o-sub[data-target-alias].open")&&c.querySelector(".o-sub[data-target-alias].open").classList.remove("open"),this.classList.add("open"))}))}))),null!==e.querySelector(".evt-close-level")){var s=e.querySelectorAll(".evt-close-level");Array.from(s).forEach((function(t){t.addEventListener("click",(function(e){e.stopPropagation(),e.preventDefault();var r=parseInt(t.getAttribute("data-current-level"));a(r-1),o(r-1)}))}))}}o()().observe();var l;l=function(){i(),window.addEventListener("scroll",(function(){document.querySelector("header").classList.toggle("sticky",window.scrollY>150)}))},"loading"!==document.readyState?l():document.addEventListener("DOMContentLoaded",l)},59:function(t){t.exports=function(){"use strict";var t="undefined"!=typeof document&&document.documentMode,e={rootMargin:"0px",threshold:0,load:function(e){if("picture"===e.nodeName.toLowerCase()){var r=e.querySelector("img"),a=!1;null===r&&(r=document.createElement("img"),a=!0),t&&e.getAttribute("data-iesrc")&&(r.src=e.getAttribute("data-iesrc")),e.getAttribute("data-alt")&&(r.alt=e.getAttribute("data-alt")),a&&e.append(r)}if("video"===e.nodeName.toLowerCase()&&!e.getAttribute("data-src")&&e.children){for(var o=e.children,n=void 0,i=0;i<=o.length-1;i++)(n=o[i].getAttribute("data-src"))&&(o[i].src=n);e.load()}e.getAttribute("data-poster")&&(e.poster=e.getAttribute("data-poster")),e.getAttribute("data-src")&&(e.src=e.getAttribute("data-src")),e.getAttribute("data-srcset")&&e.setAttribute("srcset",e.getAttribute("data-srcset"));var l=",";if(e.getAttribute("data-background-delimiter")&&(l=e.getAttribute("data-background-delimiter")),e.getAttribute("data-background-image"))e.style.backgroundImage="url('"+e.getAttribute("data-background-image").split(l).join("'),url('")+"')";else if(e.getAttribute("data-background-image-set")){var s=e.getAttribute("data-background-image-set").split(l),u=s[0].substr(0,s[0].indexOf(" "))||s[0];u=-1===u.indexOf("url(")?"url("+u+")":u,1===s.length?e.style.backgroundImage=u:e.setAttribute("style",(e.getAttribute("style")||"")+"background-image: "+u+"; background-image: -webkit-image-set("+s+"); background-image: image-set("+s+")")}e.getAttribute("data-toggle-class")&&e.classList.toggle(e.getAttribute("data-toggle-class"))},loaded:function(){}};function r(t){t.setAttribute("data-loaded",!0)}var a=function(t){return"true"===t.getAttribute("data-loaded")},o=function(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return t instanceof Element?[t]:t instanceof NodeList?t:e.querySelectorAll(t)};return function(){var t,n,i=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",l=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},s=Object.assign({},e,l),u=s.root,c=s.rootMargin,d=s.threshold,g=s.load,v=s.loaded,b=void 0;"undefined"!=typeof window&&window.IntersectionObserver&&(b=new IntersectionObserver((t=g,n=v,function(e,o){e.forEach((function(e){(0<e.intersectionRatio||e.isIntersecting)&&(o.unobserve(e.target),a(e.target)||(t(e.target),r(e.target),n(e.target)))}))}),{root:u,rootMargin:c,threshold:d}));for(var f,p=o(i,u),m=0;m<p.length;m++)(f=p[m]).getAttribute("data-placeholder-background")&&(f.style.background=f.getAttribute("data-placeholder-background"));return{observe:function(){for(var t=o(i,u),e=0;e<t.length;e++)a(t[e])||(b?b.observe(t[e]):(g(t[e]),r(t[e]),v(t[e])))},triggerLoad:function(t){a(t)||(g(t),r(t),v(t))},observer:b}}}()},414:()=>{},184:()=>{}},r={};function a(t){var o=r[t];if(void 0!==o)return o.exports;var n=r[t]={exports:{}};return e[t].call(n.exports,n,n.exports,a),n.exports}a.m=e,t=[],a.O=(e,r,o,n)=>{if(!r){var i=1/0;for(u=0;u<t.length;u++){for(var[r,o,n]=t[u],l=!0,s=0;s<r.length;s++)(!1&n||i>=n)&&Object.keys(a.O).every((t=>a.O[t](r[s])))?r.splice(s--,1):(l=!1,n<i&&(i=n));l&&(t.splice(u--,1),e=o())}return e}n=n||0;for(var u=t.length;u>0&&t[u-1][2]>n;u--)t[u]=t[u-1];t[u]=[r,o,n]},a.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return a.d(e,{a:e}),e},a.d=(t,e)=>{for(var r in e)a.o(e,r)&&!a.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},a.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{var t={587:0,384:0,122:0};a.O.j=e=>0===t[e];var e=(e,r)=>{var o,n,[i,l,s]=r,u=0;for(o in l)a.o(l,o)&&(a.m[o]=l[o]);for(s&&s(a),e&&e(r);u<i.length;u++)n=i[u],a.o(t,n)&&t[n]&&t[n][0](),t[i[u]]=0;a.O()},r=self.webpackChunkstarter_theme=self.webpackChunkstarter_theme||[];r.forEach(e.bind(null,0)),r.push=e.bind(null,r.push.bind(r))})(),a.O(void 0,[384,122],(()=>a(827))),a.O(void 0,[384,122],(()=>a(414)));var o=a.O(void 0,[384,122],(()=>a(184)));o=a.O(o)})();