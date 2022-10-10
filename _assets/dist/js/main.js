(()=>{const t=(t,e=document)=>{if(null!=t&&"string"==typeof t)try{return e.querySelector(t)||void 0}catch({message:t}){return void console.error(t)}},e=function(t,e,n,i){"function"==typeof e&&(i=n,n=e,e=window),i=!!i,(e="string"==typeof e?document.querySelector(e):e)&&e.removeEventListener(t,n,i)};window.innerWidth;function n(){const n=t("#main-menu-button"),i=t("nav.main-menu");function r(){n.classList.remove("open"),i.classList.remove("open"),o(0),s(),i.scrollTo(0,0),e("click",window,u)}function o(t){i.classList.remove("active-level-1","active-level-2","active-level-3"),-1!==[1,2,3].indexOf(t)&&i.classList.add("active-level-"+t)}function s(t){t=void 0!==t?t:0;var e=i.querySelectorAll("[class*=level-]");Array.from(e).forEach((e=>{var n=e;t<=parseInt(n.getAttribute("data-level"))&&(n.classList.remove("open"),null!==n.querySelector("ul.open")&&n.querySelector("ul.open").classList.remove("open"),n.querySelector(".o-sub.open")&&n.querySelector(".o-sub.open").classList.remove("open"))}))}n.addEventListener("click",(t=>{t.stopPropagation(),t.preventDefault(),n.classList.contains("open")?r():(i.classList.add("open"),n.classList.add("open"),window.addEventListener("click",u),o(1))}));const a=document.querySelectorAll(".o-sub[data-target-alias]");function u(t){(null!==t.target.closest("#main-menu-button")&&null!==t.target.closest(".o-sub")&&null!==t.target.closest("nav.main-menu")||t.target.classList.contains("wrapper"))&&r()}if(null!==a&&Array.from(a).forEach((t=>{t.addEventListener("click",(function(e){let n=t.getAttribute("data-item-title"),r=t.getAttribute("data-url");if(null!=n&&null!=n&&null!=r&&null!=r){let e=t.getAttribute("data-target-alias"),i=document.querySelector(`[data-alias=${e}] .level-url`);i.textContent=n,i.setAttribute("href",r)}e.preventDefault(),e.stopPropagation();let a=this.getAttribute("data-target-alias"),u=this.closest("div[class*=level-]");this.classList.contains("open")?(o(parseInt(u.getAttribute("data-level"))),this.classList.remove("open"),s(parseInt(u.getAttribute("data-level")))):(o(parseInt(u.getAttribute("data-level"))+1),s(parseInt(u.getAttribute("data-level"))),function(t){var e=i.querySelector("[data-alias="+t+"]");if(null!==e.length){var n=e.closest("div[data-level]");n.classList.add("open"),null!==n.querySelector("ul.visible")&&n.querySelector("ul.visible").classList.remove("visible"),e.classList.add("visible")}}(a),null!==u.querySelector(".o-sub[data-target-alias].open")&&u.querySelector(".o-sub[data-target-alias].open").classList.remove("open"),this.classList.add("open"))}))})),null!=i&&null!=i&&null!=i.querySelector(".evt-close-level")){let t=i.querySelectorAll(".evt-close-level");Array.from(t).forEach((t=>{t.addEventListener("click",(function(e){e.stopPropagation(),e.preventDefault();var n=parseInt(t.getAttribute("data-current-level"));o(n-1),s(n-1)}))}))}}
/*!
 * Glide.js v3.6.0
 * (c) 2013-2022 Jędrzej Chałubek (https://github.com/jedrzejchalubek/)
 * Released under the MIT License.
 */function i(t){return i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},i(t)}function r(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function o(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function s(t,e,n){return e&&o(t.prototype,e),n&&o(t,n),t}function a(t){return a=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)},a(t)}function u(t,e){return u=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t},u(t,e)}function l(t,e){if(e&&("object"==typeof e||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function c(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,i=a(t);if(e){var r=a(this).constructor;n=Reflect.construct(i,arguments,r)}else n=i.apply(this,arguments);return l(this,n)}}function f(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=a(t)););return t}function d(){return d="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,e,n){var i=f(t,e);if(i){var r=Object.getOwnPropertyDescriptor(i,e);return r.get?r.get.call(arguments.length<3?t:n):r.value}},d.apply(this,arguments)}var h={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,bound:!1,swipeThreshold:80,dragThreshold:120,perSwipe:"",touchRatio:.5,touchAngle:45,animationDuration:400,rewind:!0,rewindDuration:800,animationTimingFunc:"cubic-bezier(.165, .840, .440, 1)",waitForTransition:!0,throttle:10,direction:"ltr",peek:0,cloningRatio:1,breakpoints:{},classes:{swipeable:"glide--swipeable",dragging:"glide--dragging",direction:{ltr:"glide--ltr",rtl:"glide--rtl"},type:{slider:"glide--slider",carousel:"glide--carousel"},slide:{clone:"glide__slide--clone",active:"glide__slide--active"},arrow:{disabled:"glide__arrow--disabled"},nav:{active:"glide__bullet--active"}}};function v(t){console.error("[Glide warn]: ".concat(t))}function p(t){return parseInt(t)}function m(t){return"string"==typeof t}function g(t){var e=i(t);return"function"===e||"object"===e&&!!t}function y(t){return"function"==typeof t}function b(t){return void 0===t}function w(t){return t.constructor===Array}function S(t,e,n){var i={};for(var r in e)y(e[r])?i[r]=e[r](t,i,n):v("Extension must be a function");for(var o in i)y(i[o].mount)&&i[o].mount();return i}function _(t,e,n){Object.defineProperty(t,e,n)}function k(t,e){var n=Object.assign({},t,e);return e.hasOwnProperty("classes")&&(n.classes=Object.assign({},t.classes,e.classes),e.classes.hasOwnProperty("direction")&&(n.classes.direction=Object.assign({},t.classes.direction,e.classes.direction)),e.classes.hasOwnProperty("type")&&(n.classes.type=Object.assign({},t.classes.type,e.classes.type)),e.classes.hasOwnProperty("slide")&&(n.classes.slide=Object.assign({},t.classes.slide,e.classes.slide)),e.classes.hasOwnProperty("arrow")&&(n.classes.arrow=Object.assign({},t.classes.arrow,e.classes.arrow)),e.classes.hasOwnProperty("nav")&&(n.classes.nav=Object.assign({},t.classes.nav,e.classes.nav))),e.hasOwnProperty("breakpoints")&&(n.breakpoints=Object.assign({},t.breakpoints,e.breakpoints)),n}var L=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};r(this,t),this.events=e,this.hop=e.hasOwnProperty}return s(t,[{key:"on",value:function(t,e){if(!w(t)){this.hop.call(this.events,t)||(this.events[t]=[]);var n=this.events[t].push(e)-1;return{remove:function(){delete this.events[t][n]}}}for(var i=0;i<t.length;i++)this.on(t[i],e)}},{key:"emit",value:function(t,e){if(w(t))for(var n=0;n<t.length;n++)this.emit(t[n],e);else this.hop.call(this.events,t)&&this.events[t].forEach((function(t){t(e||{})}))}}]),t}(),A=function(){function t(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};r(this,t),this._c={},this._t=[],this._e=new L,this.disabled=!1,this.selector=e,this.settings=k(h,n),this.index=this.settings.startAt}return s(t,[{key:"mount",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this._e.emit("mount.before"),g(t)?this._c=S(this,t,this._e):v("You need to provide a object on `mount()`"),this._e.emit("mount.after"),this}},{key:"mutate",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return w(t)?this._t=t:v("You need to provide a array on `mutate()`"),this}},{key:"update",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this.settings=k(this.settings,t),t.hasOwnProperty("startAt")&&(this.index=t.startAt),this._e.emit("update"),this}},{key:"go",value:function(t){return this._c.Run.make(t),this}},{key:"move",value:function(t){return this._c.Transition.disable(),this._c.Move.make(t),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return t&&(this.settings.autoplay=t),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(t,e){return this._e.on(t,e),this}},{key:"isType",value:function(t){return this.settings.type===t}},{key:"settings",get:function(){return this._o},set:function(t){g(t)?this._o=t:v("Options must be an `object` instance.")}},{key:"index",get:function(){return this._i},set:function(t){this._i=p(t)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(t){this._d=!!t}}]),t}();function O(){return(new Date).getTime()}function H(t,e,n){var i,r,o,s,a=0;n||(n={});var u=function(){a=!1===n.leading?0:O(),i=null,s=t.apply(r,o),i||(r=o=null)},l=function(){var l=O();a||!1!==n.leading||(a=l);var c=e-(l-a);return r=this,o=arguments,c<=0||c>e?(i&&(clearTimeout(i),i=null),a=l,s=t.apply(r,o),i||(r=o=null)):i||!1===n.trailing||(i=setTimeout(u,c)),s};return l.cancel=function(){clearTimeout(i),a=0,i=r=o=null},l}var T={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]};function x(t){if(t&&t.parentNode){for(var e=t.parentNode.firstChild,n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}return[]}function q(t){return!!(t&&t instanceof window.HTMLElement)}function E(t){return Array.prototype.slice.call(t)}var R='[data-glide-el="track"]';var j=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};r(this,t),this.listeners=e}return s(t,[{key:"on",value:function(t,e,n){var i=arguments.length>3&&void 0!==arguments[3]&&arguments[3];m(t)&&(t=[t]);for(var r=0;r<t.length;r++)this.listeners[t[r]]=n,e.addEventListener(t[r],this.listeners[t[r]],i)}},{key:"off",value:function(t,e){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];m(t)&&(t=[t]);for(var i=0;i<t.length;i++)e.removeEventListener(t[i],this.listeners[t[i]],n)}},{key:"destroy",value:function(){delete this.listeners}}]),t}();var P=["ltr","rtl"],C={">":"<","<":">","=":"="};function M(t,e){return{modify:function(t){return e.Direction.is("rtl")?-t:t}}}function z(t,e){return{modify:function(t){var n=Math.floor(t/e.Sizes.slideWidth);return t+e.Gaps.value*n}}}function D(t,e){return{modify:function(t){return t+e.Clones.grow/2}}}function V(t,e){return{modify:function(n){if(t.settings.focusAt>=0){var i=e.Peek.value;return g(i)?n-i.before:n-i}return n}}}function B(t,e){return{modify:function(n){var i=e.Gaps.value,r=e.Sizes.width,o=t.settings.focusAt,s=e.Sizes.slideWidth;return"center"===o?n-(r/2-s/2):n-s*o-i*o}}}var I=!1;try{var W=Object.defineProperty({},"passive",{get:function(){I=!0}});window.addEventListener("testPassive",null,W),window.removeEventListener("testPassive",null,W)}catch(t){}var G=I,F=["touchstart","mousedown"],N=["touchmove","mousemove"],Y=["touchend","touchcancel","mouseup","mouseleave"],X=["mousedown","mousemove","mouseup","mouseleave"];var K='[data-glide-el^="controls"]',$="".concat(K,' [data-glide-dir*="<"]'),J="".concat(K,' [data-glide-dir*=">"]');function Q(t){return g(t)?(e=t,Object.keys(e).sort().reduce((function(t,n){return t[n]=e[n],t[n],t}),{})):(v("Breakpoints option must be an object"),{});var e}var U={Html:function(t,e,n){var i={mount:function(){this.root=t.selector,this.track=this.root.querySelector(R),this.collectSlides()},collectSlides:function(){this.slides=E(this.wrapper.children).filter((function(e){return!e.classList.contains(t.settings.classes.slide.clone)}))}};return _(i,"root",{get:function(){return i._r},set:function(t){m(t)&&(t=document.querySelector(t)),q(t)?i._r=t:v("Root element must be a existing Html node")}}),_(i,"track",{get:function(){return i._t},set:function(t){q(t)?i._t=t:v("Could not find track element. Please use ".concat(R," attribute."))}}),_(i,"wrapper",{get:function(){return i.track.children[0]}}),n.on("update",(function(){i.collectSlides()})),i},Translate:function(t,e,n){var i={set:function(n){var i=function(t,e,n){var i=[z,D,V,B].concat(t._t,[M]);return{mutate:function(r){for(var o=0;o<i.length;o++){var s=i[o];y(s)&&y(s().modify)?r=s(t,e,n).modify(r):v("Transformer should be a function that returns an object with `modify()` method")}return r}}}(t,e).mutate(n),r="translate3d(".concat(-1*i,"px, 0px, 0px)");e.Html.wrapper.style.mozTransform=r,e.Html.wrapper.style.webkitTransform=r,e.Html.wrapper.style.transform=r},remove:function(){e.Html.wrapper.style.transform=""},getStartIndex:function(){var n=e.Sizes.length,i=t.index,r=t.settings.perView;return e.Run.isOffset(">")||e.Run.isOffset("|>")?n+(i-r):(i+r)%n},getTravelDistance:function(){var n=e.Sizes.slideWidth*t.settings.perView;return e.Run.isOffset(">")||e.Run.isOffset("|>")?-1*n:n}};return n.on("move",(function(r){if(!t.isType("carousel")||!e.Run.isOffset())return i.set(r.movement);e.Transition.after((function(){n.emit("translate.jump"),i.set(e.Sizes.slideWidth*t.index)}));var o=e.Sizes.slideWidth*e.Translate.getStartIndex();return i.set(o-e.Translate.getTravelDistance())})),n.on("destroy",(function(){i.remove()})),i},Transition:function(t,e,n){var i=!1,r={compose:function(e){var n=t.settings;return i?"".concat(e," 0ms ").concat(n.animationTimingFunc):"".concat(e," ").concat(this.duration,"ms ").concat(n.animationTimingFunc)},set:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"transform";e.Html.wrapper.style.transition=this.compose(t)},remove:function(){e.Html.wrapper.style.transition=""},after:function(t){setTimeout((function(){t()}),this.duration)},enable:function(){i=!1,this.set()},disable:function(){i=!0,this.set()}};return _(r,"duration",{get:function(){var n=t.settings;return t.isType("slider")&&e.Run.offset?n.rewindDuration:n.animationDuration}}),n.on("move",(function(){r.set()})),n.on(["build.before","resize","translate.jump"],(function(){r.disable()})),n.on("run",(function(){r.enable()})),n.on("destroy",(function(){r.remove()})),r},Direction:function(t,e,n){var i={mount:function(){this.value=t.settings.direction},resolve:function(t){var e=t.slice(0,1);return this.is("rtl")?t.split(e).join(C[e]):t},is:function(t){return this.value===t},addClass:function(){e.Html.root.classList.add(t.settings.classes.direction[this.value])},removeClass:function(){e.Html.root.classList.remove(t.settings.classes.direction[this.value])}};return _(i,"value",{get:function(){return i._v},set:function(t){P.indexOf(t)>-1?i._v=t:v("Direction value must be `ltr` or `rtl`")}}),n.on(["destroy","update"],(function(){i.removeClass()})),n.on("update",(function(){i.mount()})),n.on(["build.before","update"],(function(){i.addClass()})),i},Peek:function(t,e,n){var i={mount:function(){this.value=t.settings.peek}};return _(i,"value",{get:function(){return i._v},set:function(t){g(t)?(t.before=p(t.before),t.after=p(t.after)):t=p(t),i._v=t}}),_(i,"reductor",{get:function(){var e=i.value,n=t.settings.perView;return g(e)?e.before/n+e.after/n:2*e/n}}),n.on(["resize","update"],(function(){i.mount()})),i},Sizes:function(t,e,n){var i={setupSlides:function(){for(var t="".concat(this.slideWidth,"px"),n=e.Html.slides,i=0;i<n.length;i++)n[i].style.width=t},setupWrapper:function(){e.Html.wrapper.style.width="".concat(this.wrapperSize,"px")},remove:function(){for(var t=e.Html.slides,n=0;n<t.length;n++)t[n].style.width="";e.Html.wrapper.style.width=""}};return _(i,"length",{get:function(){return e.Html.slides.length}}),_(i,"width",{get:function(){return e.Html.track.offsetWidth}}),_(i,"wrapperSize",{get:function(){return i.slideWidth*i.length+e.Gaps.grow+e.Clones.grow}}),_(i,"slideWidth",{get:function(){return i.width/t.settings.perView-e.Peek.reductor-e.Gaps.reductor}}),n.on(["build.before","resize","update"],(function(){i.setupSlides(),i.setupWrapper()})),n.on("destroy",(function(){i.remove()})),i},Gaps:function(t,e,n){var i={apply:function(t){for(var n=0,i=t.length;n<i;n++){var r=t[n].style,o=e.Direction.value;r[T[o][0]]=0!==n?"".concat(this.value/2,"px"):"",n!==t.length-1?r[T[o][1]]="".concat(this.value/2,"px"):r[T[o][1]]=""}},remove:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style;i.marginLeft="",i.marginRight=""}}};return _(i,"value",{get:function(){return p(t.settings.gap)}}),_(i,"grow",{get:function(){return i.value*e.Sizes.length}}),_(i,"reductor",{get:function(){var e=t.settings.perView;return i.value*(e-1)/e}}),n.on(["build.after","update"],H((function(){i.apply(e.Html.wrapper.children)}),30)),n.on("destroy",(function(){i.remove(e.Html.wrapper.children)})),i},Move:function(t,e,n){var i={mount:function(){this._o=0},make:function(){var t=this,i=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;this.offset=i,n.emit("move",{movement:this.value}),e.Transition.after((function(){n.emit("move.after",{movement:t.value})}))}};return _(i,"offset",{get:function(){return i._o},set:function(t){i._o=b(t)?0:p(t)}}),_(i,"translate",{get:function(){return e.Sizes.slideWidth*t.index}}),_(i,"value",{get:function(){var t=this.offset,n=this.translate;return e.Direction.is("rtl")?n+t:n-t}}),n.on(["build.before","run"],(function(){i.make()})),i},Clones:function(t,e,n){var i={mount:function(){this.items=[],t.isType("carousel")&&(this.items=this.collect())},collect:function(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],i=e.Html.slides,r=t.settings,o=r.perView,s=r.classes,a=r.cloningRatio;if(0!==i.length)for(var u=+!!t.settings.peek,l=o+u+Math.round(o/2),c=i.slice(0,l).reverse(),f=i.slice(-1*l),d=0;d<Math.max(a,Math.floor(o/i.length));d++){for(var h=0;h<c.length;h++){var v=c[h].cloneNode(!0);v.classList.add(s.slide.clone),n.push(v)}for(var p=0;p<f.length;p++){var m=f[p].cloneNode(!0);m.classList.add(s.slide.clone),n.unshift(m)}}return n},append:function(){for(var t=this.items,n=e.Html,i=n.wrapper,r=n.slides,o=Math.floor(t.length/2),s=t.slice(0,o).reverse(),a=t.slice(-1*o).reverse(),u="".concat(e.Sizes.slideWidth,"px"),l=0;l<a.length;l++)i.appendChild(a[l]);for(var c=0;c<s.length;c++)i.insertBefore(s[c],r[0]);for(var f=0;f<t.length;f++)t[f].style.width=u},remove:function(){for(var t=this.items,n=0;n<t.length;n++)e.Html.wrapper.removeChild(t[n])}};return _(i,"grow",{get:function(){return(e.Sizes.slideWidth+e.Gaps.value)*i.items.length}}),n.on("update",(function(){i.remove(),i.mount(),i.append()})),n.on("build.before",(function(){t.isType("carousel")&&i.append()})),n.on("destroy",(function(){i.remove()})),i},Resize:function(t,e,n){var i=new j,r={mount:function(){this.bind()},bind:function(){i.on("resize",window,H((function(){n.emit("resize")}),t.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",(function(){r.unbind(),i.destroy()})),r},Build:function(t,e,n){var i={mount:function(){n.emit("build.before"),this.typeClass(),this.activeClass(),n.emit("build.after")},typeClass:function(){e.Html.root.classList.add(t.settings.classes.type[t.settings.type])},activeClass:function(){var n=t.settings.classes,i=e.Html.slides[t.index];i&&(i.classList.add(n.slide.active),x(i).forEach((function(t){t.classList.remove(n.slide.active)})))},removeClasses:function(){var n=t.settings.classes,i=n.type,r=n.slide;e.Html.root.classList.remove(i[t.settings.type]),e.Html.slides.forEach((function(t){t.classList.remove(r.active)}))}};return n.on(["destroy","update"],(function(){i.removeClasses()})),n.on(["resize","update"],(function(){i.mount()})),n.on("move.after",(function(){i.activeClass()})),i},Run:function(t,e,n){var i={mount:function(){this._o=!1},make:function(i){var r=this;t.disabled||(!t.settings.waitForTransition||t.disable(),this.move=i,n.emit("run.before",this.move),this.calculate(),n.emit("run",this.move),e.Transition.after((function(){r.isStart()&&n.emit("run.start",r.move),r.isEnd()&&n.emit("run.end",r.move),r.isOffset()&&(r._o=!1,n.emit("run.offset",r.move)),n.emit("run.after",r.move),t.enable()})))},calculate:function(){var e=this.move,n=this.length,r=e.steps,o=e.direction,s=1;if("="===o)return t.settings.bound&&p(r)>n?void(t.index=n):void(t.index=r);if(">"!==o||">"!==r)if("<"!==o||"<"!==r){if("|"===o&&(s=t.settings.perView||1),">"===o||"|"===o&&">"===r){var a=function(e){var n=t.index;return t.isType("carousel")?n+e:n+(e-n%e)}(s);return a>n&&(this._o=!0),void(t.index=function(e,n){var r=i.length;if(e<=r)return e;if(t.isType("carousel"))return e-(r+1);if(t.settings.rewind)return i.isBound()&&!i.isEnd()?r:0;return i.isBound()?r:Math.floor(r/n)*n}(a,s))}if("<"===o||"|"===o&&"<"===r){var u=function(e){var n=t.index;return t.isType("carousel")?n-e:(Math.ceil(n/e)-1)*e}(s);return u<0&&(this._o=!0),void(t.index=function(e,n){var r=i.length;if(e>=0)return e;if(t.isType("carousel"))return e+(r+1);if(t.settings.rewind)return i.isBound()&&i.isStart()?r:Math.floor(r/n)*n;return 0}(u,s))}v("Invalid direction pattern [".concat(o).concat(r,"] has been used"))}else t.index=0;else t.index=n},isStart:function(){return t.index<=0},isEnd:function(){return t.index>=this.length},isOffset:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0;return t?!!this._o&&("|>"===t?"|"===this.move.direction&&">"===this.move.steps:"|<"===t?"|"===this.move.direction&&"<"===this.move.steps:this.move.direction===t):this._o},isBound:function(){return t.isType("slider")&&"center"!==t.settings.focusAt&&t.settings.bound}};return _(i,"move",{get:function(){return this._m},set:function(t){var e=t.substr(1);this._m={direction:t.substr(0,1),steps:e?p(e)?p(e):e:0}}}),_(i,"length",{get:function(){var n=t.settings,i=e.Html.slides.length;return this.isBound()?i-1-(p(n.perView)-1)+p(n.focusAt):i-1}}),_(i,"offset",{get:function(){return this._o}}),i},Swipe:function(t,e,n){var i=new j,r=0,o=0,s=0,a=!1,u=!!G&&{passive:!0},l={mount:function(){this.bindSwipeStart()},start:function(e){if(!a&&!t.disabled){this.disable();var i=this.touches(e);r=null,o=p(i.pageX),s=p(i.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),n.emit("swipe.start")}},move:function(i){if(!t.disabled){var a=t.settings,u=a.touchAngle,l=a.touchRatio,c=a.classes,f=this.touches(i),d=p(f.pageX)-o,h=p(f.pageY)-s,v=Math.abs(d<<2),m=Math.abs(h<<2),g=Math.sqrt(v+m),y=Math.sqrt(m);if(!(180*(r=Math.asin(y/g))/Math.PI<u))return!1;i.stopPropagation(),e.Move.make(d*parseFloat(l)),e.Html.root.classList.add(c.dragging),n.emit("swipe.move")}},end:function(i){if(!t.disabled){var s=t.settings,a=s.perSwipe,u=s.touchAngle,l=s.classes,c=this.touches(i),f=this.threshold(i),d=c.pageX-o,h=180*r/Math.PI;this.enable(),d>f&&h<u?e.Run.make(e.Direction.resolve("".concat(a,"<"))):d<-f&&h<u?e.Run.make(e.Direction.resolve("".concat(a,">"))):e.Move.make(),e.Html.root.classList.remove(l.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),n.emit("swipe.end")}},bindSwipeStart:function(){var n=this,r=t.settings,o=r.swipeThreshold,s=r.dragThreshold;o&&i.on(F[0],e.Html.wrapper,(function(t){n.start(t)}),u),s&&i.on(F[1],e.Html.wrapper,(function(t){n.start(t)}),u)},unbindSwipeStart:function(){i.off(F[0],e.Html.wrapper,u),i.off(F[1],e.Html.wrapper,u)},bindSwipeMove:function(){var n=this;i.on(N,e.Html.wrapper,H((function(t){n.move(t)}),t.settings.throttle),u)},unbindSwipeMove:function(){i.off(N,e.Html.wrapper,u)},bindSwipeEnd:function(){var t=this;i.on(Y,e.Html.wrapper,(function(e){t.end(e)}))},unbindSwipeEnd:function(){i.off(Y,e.Html.wrapper)},touches:function(t){return X.indexOf(t.type)>-1?t:t.touches[0]||t.changedTouches[0]},threshold:function(e){var n=t.settings;return X.indexOf(e.type)>-1?n.dragThreshold:n.swipeThreshold},enable:function(){return a=!1,e.Transition.enable(),this},disable:function(){return a=!0,e.Transition.disable(),this}};return n.on("build.after",(function(){e.Html.root.classList.add(t.settings.classes.swipeable)})),n.on("destroy",(function(){l.unbindSwipeStart(),l.unbindSwipeMove(),l.unbindSwipeEnd(),i.destroy()})),l},Images:function(t,e,n){var i=new j,r={mount:function(){this.bind()},bind:function(){i.on("dragstart",e.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",e.Html.wrapper)},dragstart:function(t){t.preventDefault()}};return n.on("destroy",(function(){r.unbind(),i.destroy()})),r},Anchors:function(t,e,n){var i=new j,r=!1,o=!1,s={mount:function(){this._a=e.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",e.Html.wrapper,this.click)},unbind:function(){i.off("click",e.Html.wrapper)},click:function(t){o&&(t.stopPropagation(),t.preventDefault())},detach:function(){if(o=!0,!r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!1;r=!0}return this},attach:function(){if(o=!1,r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!0;r=!1}return this}};return _(s,"items",{get:function(){return s._a}}),n.on("swipe.move",(function(){s.detach()})),n.on("swipe.end",(function(){e.Transition.after((function(){s.attach()}))})),n.on("destroy",(function(){s.attach(),s.unbind(),i.destroy()})),s},Controls:function(t,e,n){var i=new j,r=!!G&&{passive:!0},o={mount:function(){this._n=e.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'),this._c=e.Html.root.querySelectorAll(K),this._arrowControls={previous:e.Html.root.querySelectorAll($),next:e.Html.root.querySelectorAll(J)},this.addBindings()},setActive:function(){for(var t=0;t<this._n.length;t++)this.addClass(this._n[t].children)},removeActive:function(){for(var t=0;t<this._n.length;t++)this.removeClass(this._n[t].children)},addClass:function(e){var n=t.settings,i=e[t.index];i&&i&&(i.classList.add(n.classes.nav.active),x(i).forEach((function(t){t.classList.remove(n.classes.nav.active)})))},removeClass:function(e){var n=e[t.index];n&&n.classList.remove(t.settings.classes.nav.active)},setArrowState:function(){if(!t.settings.rewind){var n=o._arrowControls.next,i=o._arrowControls.previous;this.resetArrowState(n,i),0===t.index&&this.disableArrow(i),t.index===e.Run.length&&this.disableArrow(n)}},resetArrowState:function(){for(var e=t.settings,n=arguments.length,i=new Array(n),r=0;r<n;r++)i[r]=arguments[r];i.forEach((function(t){E(t).forEach((function(t){t.classList.remove(e.classes.arrow.disabled)}))}))},disableArrow:function(){for(var e=t.settings,n=arguments.length,i=new Array(n),r=0;r<n;r++)i[r]=arguments[r];i.forEach((function(t){E(t).forEach((function(t){t.classList.add(e.classes.arrow.disabled)}))}))},addBindings:function(){for(var t=0;t<this._c.length;t++)this.bind(this._c[t].children)},removeBindings:function(){for(var t=0;t<this._c.length;t++)this.unbind(this._c[t].children)},bind:function(t){for(var e=0;e<t.length;e++)i.on("click",t[e],this.click),i.on("touchstart",t[e],this.click,r)},unbind:function(t){for(var e=0;e<t.length;e++)i.off(["click","touchstart"],t[e])},click:function(t){G||"touchstart"!==t.type||t.preventDefault();var n=t.currentTarget.getAttribute("data-glide-dir");e.Run.make(e.Direction.resolve(n))}};return _(o,"items",{get:function(){return o._c}}),n.on(["mount.after","move.after"],(function(){o.setActive()})),n.on(["mount.after","run"],(function(){o.setArrowState()})),n.on("destroy",(function(){o.removeBindings(),o.removeActive(),i.destroy()})),o},Keyboard:function(t,e,n){var i=new j,r={mount:function(){t.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(n){var i=t.settings.perSwipe;"ArrowRight"===n.code&&e.Run.make(e.Direction.resolve("".concat(i,">"))),"ArrowLeft"===n.code&&e.Run.make(e.Direction.resolve("".concat(i,"<")))}};return n.on(["destroy","update"],(function(){r.unbind()})),n.on("update",(function(){r.mount()})),n.on("destroy",(function(){i.destroy()})),r},Autoplay:function(t,e,n){var i=new j,r={mount:function(){this.enable(),this.start(),t.settings.hoverpause&&this.bind()},enable:function(){this._e=!0},disable:function(){this._e=!1},start:function(){var i=this;this._e&&(this.enable(),t.settings.autoplay&&b(this._i)&&(this._i=setInterval((function(){i.stop(),e.Run.make(">"),i.start(),n.emit("autoplay")}),this.time)))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var t=this;i.on("mouseover",e.Html.root,(function(){t._e&&t.stop()})),i.on("mouseout",e.Html.root,(function(){t._e&&t.start()}))},unbind:function(){i.off(["mouseover","mouseout"],e.Html.root)}};return _(r,"time",{get:function(){var n=e.Html.slides[t.index].getAttribute("data-glide-autoplay");return p(n||t.settings.autoplay)}}),n.on(["destroy","update"],(function(){r.unbind()})),n.on(["run.before","swipe.start","update"],(function(){r.stop()})),n.on(["pause","destroy"],(function(){r.disable(),r.stop()})),n.on(["run.after","swipe.end"],(function(){r.start()})),n.on(["play"],(function(){r.enable(),r.start()})),n.on("update",(function(){r.mount()})),n.on("destroy",(function(){i.destroy()})),r},Breakpoints:function(t,e,n){var i=new j,r=t.settings,o=Q(r.breakpoints),s=Object.assign({},r),a={match:function(t){if(void 0!==window.matchMedia)for(var e in t)if(t.hasOwnProperty(e)&&window.matchMedia("(max-width: ".concat(e,"px)")).matches)return t[e];return s}};return Object.assign(r,a.match(o)),i.on("resize",window,H((function(){t.settings=k(r,a.match(o))}),t.settings.throttle)),n.on("update",(function(){o=Q(o),s=Object.assign({},r)})),n.on("destroy",(function(){i.off("resize",window)})),a}},Z=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&u(t,e)}(n,t);var e=c(n);function n(){return r(this,n),e.apply(this,arguments)}return s(n,[{key:"mount",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return d(a(n.prototype),"mount",this).call(this,Object.assign({},U,t))}}]),n}(A);const tt=".testmonialsSlider";null!=document.querySelector(tt)&&null!=document.querySelector(tt)&&new Z(tt,{perView:1,type:"slider",autoplay:3500,breakpoints:{}}).mount();const et=".awardsSlider";null!=document.querySelector(et)&&null!=document.querySelector(et)&&new Z(et,{perView:5.2,type:"carousel",autoplay:2500,breakpoints:{1024:{perView:4.5},768:{perView:3.5},540:{perView:2.5}}}).mount();const nt=".awards_slider";null!=document.querySelector(nt)&&null!=document.querySelector(nt)&&new Z(nt,{perView:8,type:"carousel",autoplay:3e3,breakpoints:{1100:{perView:5},768:{perView:3}}}).mount();const it=".lifeSlider";null!=document.querySelector(it)&&null!=document.querySelector(it)&&new Z(it,{perView:1,type:"carousel",breakpoints:{}}).mount();const rt=".verdicts_slider";null!=document.querySelector(rt)&&null!=document.querySelector(rt)&&new Z(rt,{perView:4,type:"carousel",autoplay:3e3,breakpoints:{1100:{perView:3},768:{perView:2},640:{perView:1}}}).mount();const ot=".memorableSlider";null!=document.querySelector(ot)&&null!=document.querySelector(ot)&&new Z(ot,{perView:1,type:"slider",breakpoints:{}}).mount();const st=".google_reviews_slider";var at;null!=document.querySelector(st)&&null!=document.querySelector(st)&&new Z(st,{perView:3,type:"carousel",autoplay:3e3,breakpoints:{1100:{perView:2},768:{perView:1}}}).mount(),at=()=>{n()},"loading"!==document.readyState?at():document.addEventListener("DOMContentLoaded",at);(()=>{let t=document.getElementsByClassName("faq-block");Array.from(t).forEach((t=>{t.addEventListener("click",(()=>{let e=t.querySelector(".hidden-part"),n=t.querySelector(".title-faq");e.classList.toggle("visible"),n.classList.toggle("open-faq"),e.classList.contains("hidden")?(e.classList.remove("hidden"),e.classList.add("visible")):(e.classList.add("hidden"),e.classList.remove("visible"))}))}))})()})();
//# sourceMappingURL=main.js.map
