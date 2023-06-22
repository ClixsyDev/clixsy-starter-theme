// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles

(function (modules, entry, mainEntry, parcelRequireName, globalName) {
  /* eslint-disable no-undef */
  var globalObject =
    typeof globalThis !== 'undefined'
      ? globalThis
      : typeof self !== 'undefined'
      ? self
      : typeof window !== 'undefined'
      ? window
      : typeof global !== 'undefined'
      ? global
      : {};
  /* eslint-enable no-undef */

  // Save the require from previous bundle to this closure if any
  var previousRequire =
    typeof globalObject[parcelRequireName] === 'function' &&
    globalObject[parcelRequireName];

  var cache = previousRequire.cache || {};
  // Do not use `require` to prevent Webpack from trying to bundle this call
  var nodeRequire =
    typeof module !== 'undefined' &&
    typeof module.require === 'function' &&
    module.require.bind(module);

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire =
          typeof globalObject[parcelRequireName] === 'function' &&
          globalObject[parcelRequireName];
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error("Cannot find module '" + name + "'");
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = (cache[name] = new newRequire.Module(name));

      modules[name][0].call(
        module.exports,
        localRequire,
        module,
        module.exports,
        this
      );
    }

    return cache[name].exports;

    function localRequire(x) {
      var res = localRequire.resolve(x);
      return res === false ? {} : newRequire(res);
    }

    function resolve(x) {
      var id = modules[name][1][x];
      return id != null ? id : x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [
      function (require, module) {
        module.exports = exports;
      },
      {},
    ];
  };

  Object.defineProperty(newRequire, 'root', {
    get: function () {
      return globalObject[parcelRequireName];
    },
  });

  globalObject[parcelRequireName] = newRequire;

  for (var i = 0; i < entry.length; i++) {
    newRequire(entry[i]);
  }

  if (mainEntry) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(mainEntry);

    // CommonJS
    if (typeof exports === 'object' && typeof module !== 'undefined') {
      module.exports = mainExports;

      // RequireJS
    } else if (typeof define === 'function' && define.amd) {
      define(function () {
        return mainExports;
      });

      // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }
})({"cljb4":[function(require,module,exports) {
"use strict";
var global = arguments[3];
var HMR_HOST = null;
var HMR_PORT = null;
var HMR_SECURE = false;
var HMR_ENV_HASH = "d6ea1d42532a7575";
module.bundle.HMR_BUNDLE_ID = "9cd2d0feeb818713";
/* global HMR_HOST, HMR_PORT, HMR_ENV_HASH, HMR_SECURE, chrome, browser, globalThis, __parcel__import__, __parcel__importScripts__, ServiceWorkerGlobalScope */ /*::
import type {
  HMRAsset,
  HMRMessage,
} from '@parcel/reporter-dev-server/src/HMRServer.js';
interface ParcelRequire {
  (string): mixed;
  cache: {|[string]: ParcelModule|};
  hotData: mixed;
  Module: any;
  parent: ?ParcelRequire;
  isParcelRequire: true;
  modules: {|[string]: [Function, {|[string]: string|}]|};
  HMR_BUNDLE_ID: string;
  root: ParcelRequire;
}
interface ParcelModule {
  hot: {|
    data: mixed,
    accept(cb: (Function) => void): void,
    dispose(cb: (mixed) => void): void,
    // accept(deps: Array<string> | string, cb: (Function) => void): void,
    // decline(): void,
    _acceptCallbacks: Array<(Function) => void>,
    _disposeCallbacks: Array<(mixed) => void>,
  |};
}
interface ExtensionContext {
  runtime: {|
    reload(): void,
    getURL(url: string): string;
    getManifest(): {manifest_version: number, ...};
  |};
}
declare var module: {bundle: ParcelRequire, ...};
declare var HMR_HOST: string;
declare var HMR_PORT: string;
declare var HMR_ENV_HASH: string;
declare var HMR_SECURE: boolean;
declare var chrome: ExtensionContext;
declare var browser: ExtensionContext;
declare var __parcel__import__: (string) => Promise<void>;
declare var __parcel__importScripts__: (string) => Promise<void>;
declare var globalThis: typeof self;
declare var ServiceWorkerGlobalScope: Object;
*/ var OVERLAY_ID = "__parcel__error__overlay__";
var OldModule = module.bundle.Module;
function Module(moduleName) {
    OldModule.call(this, moduleName);
    this.hot = {
        data: module.bundle.hotData,
        _acceptCallbacks: [],
        _disposeCallbacks: [],
        accept: function(fn) {
            this._acceptCallbacks.push(fn || function() {});
        },
        dispose: function(fn) {
            this._disposeCallbacks.push(fn);
        }
    };
    module.bundle.hotData = undefined;
}
module.bundle.Module = Module;
var checkedAssets, acceptedAssets, assetsToAccept /*: Array<[ParcelRequire, string]> */ ;
function getHostname() {
    return HMR_HOST || (location.protocol.indexOf("http") === 0 ? location.hostname : "localhost");
}
function getPort() {
    return HMR_PORT || location.port;
} // eslint-disable-next-line no-redeclare
var parent = module.bundle.parent;
if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== "undefined") {
    var hostname = getHostname();
    var port = getPort();
    var protocol = HMR_SECURE || location.protocol == "https:" && !/localhost|127.0.0.1|0.0.0.0/.test(hostname) ? "wss" : "ws";
    var ws = new WebSocket(protocol + "://" + hostname + (port ? ":" + port : "") + "/"); // Web extension context
    var extCtx = typeof chrome === "undefined" ? typeof browser === "undefined" ? null : browser : chrome; // Safari doesn't support sourceURL in error stacks.
    // eval may also be disabled via CSP, so do a quick check.
    var supportsSourceURL = false;
    try {
        (0, eval)('throw new Error("test"); //# sourceURL=test.js');
    } catch (err) {
        supportsSourceURL = err.stack.includes("test.js");
    } // $FlowFixMe
    ws.onmessage = async function(event) {
        checkedAssets = {} /*: {|[string]: boolean|} */ ;
        acceptedAssets = {} /*: {|[string]: boolean|} */ ;
        assetsToAccept = [];
        var data = JSON.parse(event.data);
        if (data.type === "update") {
            // Remove error overlay if there is one
            if (typeof document !== "undefined") removeErrorOverlay();
            let assets = data.assets.filter((asset)=>asset.envHash === HMR_ENV_HASH); // Handle HMR Update
            let handled = assets.every((asset)=>{
                return asset.type === "css" || asset.type === "js" && hmrAcceptCheck(module.bundle.root, asset.id, asset.depsByBundle);
            });
            if (handled) {
                console.clear(); // Dispatch custom event so other runtimes (e.g React Refresh) are aware.
                if (typeof window !== "undefined" && typeof CustomEvent !== "undefined") window.dispatchEvent(new CustomEvent("parcelhmraccept"));
                await hmrApplyUpdates(assets);
                for(var i = 0; i < assetsToAccept.length; i++){
                    var id = assetsToAccept[i][1];
                    if (!acceptedAssets[id]) hmrAcceptRun(assetsToAccept[i][0], id);
                }
            } else fullReload();
        }
        if (data.type === "error") {
            // Log parcel errors to console
            for (let ansiDiagnostic of data.diagnostics.ansi){
                let stack = ansiDiagnostic.codeframe ? ansiDiagnostic.codeframe : ansiDiagnostic.stack;
                console.error("\uD83D\uDEA8 [parcel]: " + ansiDiagnostic.message + "\n" + stack + "\n\n" + ansiDiagnostic.hints.join("\n"));
            }
            if (typeof document !== "undefined") {
                // Render the fancy html overlay
                removeErrorOverlay();
                var overlay = createErrorOverlay(data.diagnostics.html); // $FlowFixMe
                document.body.appendChild(overlay);
            }
        }
    };
    ws.onerror = function(e) {
        console.error(e.message);
    };
    ws.onclose = function() {
        console.warn("[parcel] \uD83D\uDEA8 Connection to the HMR server was lost");
    };
}
function removeErrorOverlay() {
    var overlay = document.getElementById(OVERLAY_ID);
    if (overlay) {
        overlay.remove();
        console.log("[parcel] ✨ Error resolved");
    }
}
function createErrorOverlay(diagnostics) {
    var overlay = document.createElement("div");
    overlay.id = OVERLAY_ID;
    let errorHTML = '<div style="background: black; opacity: 0.85; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; font-family: Menlo, Consolas, monospace; z-index: 9999;">';
    for (let diagnostic of diagnostics){
        let stack = diagnostic.frames.length ? diagnostic.frames.reduce((p, frame)=>{
            return `${p}
<a href="/__parcel_launch_editor?file=${encodeURIComponent(frame.location)}" style="text-decoration: underline; color: #888" onclick="fetch(this.href); return false">${frame.location}</a>
${frame.code}`;
        }, "") : diagnostic.stack;
        errorHTML += `
      <div>
        <div style="font-size: 18px; font-weight: bold; margin-top: 20px;">
          🚨 ${diagnostic.message}
        </div>
        <pre>${stack}</pre>
        <div>
          ${diagnostic.hints.map((hint)=>"<div>\uD83D\uDCA1 " + hint + "</div>").join("")}
        </div>
        ${diagnostic.documentation ? `<div>📝 <a style="color: violet" href="${diagnostic.documentation}" target="_blank">Learn more</a></div>` : ""}
      </div>
    `;
    }
    errorHTML += "</div>";
    overlay.innerHTML = errorHTML;
    return overlay;
}
function fullReload() {
    if ("reload" in location) location.reload();
    else if (extCtx && extCtx.runtime && extCtx.runtime.reload) extCtx.runtime.reload();
}
function getParents(bundle, id) /*: Array<[ParcelRequire, string]> */ {
    var modules = bundle.modules;
    if (!modules) return [];
    var parents = [];
    var k, d, dep;
    for(k in modules)for(d in modules[k][1]){
        dep = modules[k][1][d];
        if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) parents.push([
            bundle,
            k
        ]);
    }
    if (bundle.parent) parents = parents.concat(getParents(bundle.parent, id));
    return parents;
}
function updateLink(link) {
    var newLink = link.cloneNode();
    newLink.onload = function() {
        if (link.parentNode !== null) // $FlowFixMe
        link.parentNode.removeChild(link);
    };
    newLink.setAttribute("href", link.getAttribute("href").split("?")[0] + "?" + Date.now()); // $FlowFixMe
    link.parentNode.insertBefore(newLink, link.nextSibling);
}
var cssTimeout = null;
function reloadCSS() {
    if (cssTimeout) return;
    cssTimeout = setTimeout(function() {
        var links = document.querySelectorAll('link[rel="stylesheet"]');
        for(var i = 0; i < links.length; i++){
            // $FlowFixMe[incompatible-type]
            var href = links[i].getAttribute("href");
            var hostname = getHostname();
            var servedFromHMRServer = hostname === "localhost" ? new RegExp("^(https?:\\/\\/(0.0.0.0|127.0.0.1)|localhost):" + getPort()).test(href) : href.indexOf(hostname + ":" + getPort());
            var absolute = /^https?:\/\//i.test(href) && href.indexOf(location.origin) !== 0 && !servedFromHMRServer;
            if (!absolute) updateLink(links[i]);
        }
        cssTimeout = null;
    }, 50);
}
function hmrDownload(asset) {
    if (asset.type === "js") {
        if (typeof document !== "undefined") {
            let script = document.createElement("script");
            script.src = asset.url + "?t=" + Date.now();
            if (asset.outputFormat === "esmodule") script.type = "module";
            return new Promise((resolve, reject)=>{
                var _document$head;
                script.onload = ()=>resolve(script);
                script.onerror = reject;
                (_document$head = document.head) === null || _document$head === void 0 || _document$head.appendChild(script);
            });
        } else if (typeof importScripts === "function") {
            // Worker scripts
            if (asset.outputFormat === "esmodule") return import(asset.url + "?t=" + Date.now());
            else return new Promise((resolve, reject)=>{
                try {
                    importScripts(asset.url + "?t=" + Date.now());
                    resolve();
                } catch (err) {
                    reject(err);
                }
            });
        }
    }
}
async function hmrApplyUpdates(assets) {
    global.parcelHotUpdate = Object.create(null);
    let scriptsToRemove;
    try {
        // If sourceURL comments aren't supported in eval, we need to load
        // the update from the dev server over HTTP so that stack traces
        // are correct in errors/logs. This is much slower than eval, so
        // we only do it if needed (currently just Safari).
        // https://bugs.webkit.org/show_bug.cgi?id=137297
        // This path is also taken if a CSP disallows eval.
        if (!supportsSourceURL) {
            let promises = assets.map((asset)=>{
                var _hmrDownload;
                return (_hmrDownload = hmrDownload(asset)) === null || _hmrDownload === void 0 ? void 0 : _hmrDownload.catch((err)=>{
                    // Web extension bugfix for Chromium
                    // https://bugs.chromium.org/p/chromium/issues/detail?id=1255412#c12
                    if (extCtx && extCtx.runtime && extCtx.runtime.getManifest().manifest_version == 3) {
                        if (typeof ServiceWorkerGlobalScope != "undefined" && global instanceof ServiceWorkerGlobalScope) {
                            extCtx.runtime.reload();
                            return;
                        }
                        asset.url = extCtx.runtime.getURL("/__parcel_hmr_proxy__?url=" + encodeURIComponent(asset.url + "?t=" + Date.now()));
                        return hmrDownload(asset);
                    }
                    throw err;
                });
            });
            scriptsToRemove = await Promise.all(promises);
        }
        assets.forEach(function(asset) {
            hmrApply(module.bundle.root, asset);
        });
    } finally{
        delete global.parcelHotUpdate;
        if (scriptsToRemove) scriptsToRemove.forEach((script)=>{
            if (script) {
                var _document$head2;
                (_document$head2 = document.head) === null || _document$head2 === void 0 || _document$head2.removeChild(script);
            }
        });
    }
}
function hmrApply(bundle, asset) {
    var modules = bundle.modules;
    if (!modules) return;
    if (asset.type === "css") reloadCSS();
    else if (asset.type === "js") {
        let deps = asset.depsByBundle[bundle.HMR_BUNDLE_ID];
        if (deps) {
            if (modules[asset.id]) {
                // Remove dependencies that are removed and will become orphaned.
                // This is necessary so that if the asset is added back again, the cache is gone, and we prevent a full page reload.
                let oldDeps = modules[asset.id][1];
                for(let dep in oldDeps)if (!deps[dep] || deps[dep] !== oldDeps[dep]) {
                    let id = oldDeps[dep];
                    let parents = getParents(module.bundle.root, id);
                    if (parents.length === 1) hmrDelete(module.bundle.root, id);
                }
            }
            if (supportsSourceURL) // Global eval. We would use `new Function` here but browser
            // support for source maps is better with eval.
            (0, eval)(asset.output);
             // $FlowFixMe
            let fn = global.parcelHotUpdate[asset.id];
            modules[asset.id] = [
                fn,
                deps
            ];
        } else if (bundle.parent) hmrApply(bundle.parent, asset);
    }
}
function hmrDelete(bundle, id) {
    let modules = bundle.modules;
    if (!modules) return;
    if (modules[id]) {
        // Collect dependencies that will become orphaned when this module is deleted.
        let deps = modules[id][1];
        let orphans = [];
        for(let dep in deps){
            let parents = getParents(module.bundle.root, deps[dep]);
            if (parents.length === 1) orphans.push(deps[dep]);
        } // Delete the module. This must be done before deleting dependencies in case of circular dependencies.
        delete modules[id];
        delete bundle.cache[id]; // Now delete the orphans.
        orphans.forEach((id)=>{
            hmrDelete(module.bundle.root, id);
        });
    } else if (bundle.parent) hmrDelete(bundle.parent, id);
}
function hmrAcceptCheck(bundle, id, depsByBundle) {
    if (hmrAcceptCheckOne(bundle, id, depsByBundle)) return true;
     // Traverse parents breadth first. All possible ancestries must accept the HMR update, or we'll reload.
    let parents = getParents(module.bundle.root, id);
    let accepted = false;
    while(parents.length > 0){
        let v = parents.shift();
        let a = hmrAcceptCheckOne(v[0], v[1], null);
        if (a) // If this parent accepts, stop traversing upward, but still consider siblings.
        accepted = true;
        else {
            // Otherwise, queue the parents in the next level upward.
            let p = getParents(module.bundle.root, v[1]);
            if (p.length === 0) {
                // If there are no parents, then we've reached an entry without accepting. Reload.
                accepted = false;
                break;
            }
            parents.push(...p);
        }
    }
    return accepted;
}
function hmrAcceptCheckOne(bundle, id, depsByBundle) {
    var modules = bundle.modules;
    if (!modules) return;
    if (depsByBundle && !depsByBundle[bundle.HMR_BUNDLE_ID]) {
        // If we reached the root bundle without finding where the asset should go,
        // there's nothing to do. Mark as "accepted" so we don't reload the page.
        if (!bundle.parent) return true;
        return hmrAcceptCheck(bundle.parent, id, depsByBundle);
    }
    if (checkedAssets[id]) return true;
    checkedAssets[id] = true;
    var cached = bundle.cache[id];
    assetsToAccept.push([
        bundle,
        id
    ]);
    if (!cached || cached.hot && cached.hot._acceptCallbacks.length) return true;
}
function hmrAcceptRun(bundle, id) {
    var cached = bundle.cache[id];
    bundle.hotData = {};
    if (cached && cached.hot) cached.hot.data = bundle.hotData;
    if (cached && cached.hot && cached.hot._disposeCallbacks.length) cached.hot._disposeCallbacks.forEach(function(cb) {
        cb(bundle.hotData);
    });
    delete bundle.cache[id];
    bundle(id);
    cached = bundle.cache[id];
    if (cached && cached.hot && cached.hot._acceptCallbacks.length) cached.hot._acceptCallbacks.forEach(function(cb) {
        var assetsToAlsoAccept = cb(function() {
            return getParents(module.bundle.root, id);
        });
        if (assetsToAlsoAccept && assetsToAccept.length) // $FlowFixMe[method-unbinding]
        assetsToAccept.push.apply(assetsToAccept, assetsToAlsoAccept);
    });
    acceptedAssets[id] = true;
}

},{}],"4R5xk":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
var _menu = require("./menu");
var _header = require("./header");
var _headerDefault = parcelHelpers.interopDefault(_header);
var _utils = require("./utils");
var _sliders = require("./sliders");
var _formEntry = require("./form_entry");
var _buttonHover = require("./button-hover");
var _toc = require("./toc");
var _gclid = require("./gclid");
var _thankYouMessages = require("./thank-you-messages");
var _aosAnimations = require("./aos-animations");
var _smoothSiteScrolling = require("./smooth-site-scrolling");
var _modals = require("./modals");
// import { gaEventsCF7 } from './ga-events-cf7';
var _cf7Events = require("./cf7-events");
/* FAQ start */ const initFAQ = ()=>{
    const acc = (0, _utils.getElements)(".faq__header");
    if (acc && acc.length) for(let i = 0; i < acc.length; i++)acc[i].addEventListener("click", function() {
        if (this.parentNode.classList.contains("faq__position__active")) {
            this.nextElementSibling.style.maxHeight = null;
            this.parentNode.classList.remove("faq__position__active");
        } else {
            for(let j = 0; j < acc.length; j++){
                acc[j].parentNode.classList.remove("faq__position__active");
                acc[j].nextElementSibling.style.maxHeight = null;
            }
            this.parentNode.classList.add("faq__position__active");
            const panel = this.nextElementSibling;
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
    let moreBtn = (0, _utils.getElement)(".faq-without-image__btn");
    if ((0, _utils.ifSelectorExist)(moreBtn)) moreBtn.addEventListener("click", ()=>{
        let hiddenFaqImageLeft = (0, _utils.getElement)(".hidden_faq_image_left");
        moreBtn.textContent = "- show less";
        if (moreBtn.classList.contains("clicked")) {
            hiddenFaqImageLeft.classList.add("hidden");
            moreBtn.textContent = "+ show more...";
            moreBtn.classList.remove("clicked");
        } else if ((0, _utils.ifSelectorExist)(hiddenFaqImageLeft)) {
            moreBtn.classList.add("clicked");
            hiddenFaqImageLeft.classList.remove("hidden");
        }
    });
};
/* FAQ end */ // Show more FAQ item
const btnMore = ()=>{
    let hiddenBlock = document.querySelector(".hidden-text");
    let btn = document.querySelector(".more-btn");
    let faqMore = ()=>{
        let hiddenBlock = document.querySelector(".hidden-faqs");
        let btn = document.querySelector(".more-btn-faq");
        if (btn) btn.addEventListener("click", ()=>{
            hiddenBlock.classList.toggle("hidden");
            event.preventDefault();
            if (hiddenBlock.classList.contains("hidden")) btn.textContent = "read more...";
            else btn.textContent = "show less...";
        });
    };
};
// Text education btnMore
const btnMoreEducation = ()=>{
    let hiddenBlock = document.querySelector(".hidden-text-education");
    let btn = document.querySelector(".more-btn-education");
    if ((0, _utils.ifSelectorExist)(btn) && (0, _utils.ifSelectorExist)(hiddenBlock)) btn.addEventListener("click", (event1)=>{
        event1.preventDefault();
        hiddenBlock.classList.toggle("hidden");
        console.log("clicking");
        if (hiddenBlock.classList.contains("hidden")) btn.textContent = "read more...";
        else btn.textContent = "show less...";
    });
};
// Scroll to [data-go-to] attr
const nextArrow = ()=>{
    const arrows = Array.from(document.querySelectorAll("[data-go-to]"));
    arrows.map((arrow)=>{
        arrow.addEventListener("click", (e)=>{
            e.preventDefault();
            const selector = arrow.getAttribute("data-go-to");
            window.scrollTo({
                top: document.querySelector(selector).offsetTop - document.querySelector("header").offsetHeight,
                behavior: "smooth"
            });
        });
    });
};
// Show form after submit dropdown in <!-- welcome-banner-design__two.php -->
const secondStep = ()=>{
    let btnForm = document.querySelector(".send_form_btn");
    let secondStep = document.querySelector(".second-step-form");
    let nextStep = document.querySelector(".next_step");
    if ((0, _utils.ifSelectorExist)(nextStep)) nextStep.addEventListener("click", ()=>{
        nextStep.style.display = "none";
        secondStep.classList.remove("hidden");
        btnForm.classList.remove("hidden-btn");
    });
};
// Show more content in <!-- text-form-design__two--template.php -->
const btnMoreFormDesignTwo = ()=>{
    fixedHeightContainerSelector = (0, _utils.getElements)(".fixedHeightContainer");
    if ((0, _utils.ifSelectorExist)(fixedHeightContainerSelector)) Array.from(fixedHeightContainerSelector).forEach((item)=>{
        fixedHeightElemSelector = (0, _utils.getElement)(".fixedHeight", item);
        toggleFixedHeight = (0, _utils.getElement)(".toggleFixedHeight", item);
        innerContentHeight = (0, _utils.getElement)(".innerContentHeight", item);
        checkHeight = innerContentHeight.offsetHeight > parseInt(fixedHeightElemSelector.style.maxHeight);
        console.log(innerContentHeight.offsetHeight + " || " + parseInt(fixedHeightElemSelector.style.maxHeight));
        if ((0, _utils.ifSelectorExist)(fixedHeightContainerSelector) && (0, _utils.ifSelectorExist)(toggleFixedHeight) && checkHeight) {
            fixedHeightElemSelector.classList.add("overflow-hidden", "hidden-with-shadow");
            toggleFixedHeight.classList.remove("hidden");
            toggleFixedHeight.addEventListener("click", ()=>{
                if (fixedHeightElemSelector.classList.contains("overflow-hidden")) {
                    fixedHeightElemSelector.classList.remove("overflow-hidden", "hidden-with-shadow");
                    fixedHeightElemSelector.style.maxHeight = "1000000px";
                    console.log(fixedHeightElemSelector);
                    toggleFixedHeight.textContent = "Show less";
                    console.log("clicked 1");
                } else {
                    fixedHeightElemSelector.classList.add("overflow-hidden", "hidden-with-shadow");
                    fixedHeightElemSelector.style.maxHeight = "580px";
                    toggleFixedHeight.textContent = "Read more...";
                }
            });
        }
    });
};
const preventRelatedVideoYT = ()=>{
    document.addEventListener("DOMContentLoaded", function() {
        if (window.hideYTActivated) return;
        if (typeof YT === "undefined") {
            let tag = document.createElement("script");
            tag.src = "https://www.youtube.com/iframe_api";
            let firstScriptTag = document.getElementsByTagName("script")[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
        let onYouTubeIframeAPIReadyCallbacks = [];
        for (let playerWrap of document.querySelectorAll(".hytPlayerWrap")){
            let playerFrame = playerWrap.querySelector("iframe");
            let onPlayerStateChange = function(event1) {
                console.log(event1.data);
                console.log("console log from youtube event");
                if (event1.data == YT.PlayerState.ENDED) playerWrap.classList.add("ended");
                else if (event1.data == YT.PlayerState.PAUSED) playerWrap.classList.add("paused");
                else if (event1.data == YT.PlayerState.PLAYING) {
                    playerWrap.classList.remove("ended");
                    playerWrap.classList.remove("paused");
                }
            };
            let player;
            onYouTubeIframeAPIReadyCallbacks.push(function() {
                player = new YT.Player(playerFrame, {
                    events: {
                        "onStateChange": onPlayerStateChange
                    }
                });
            });
            playerWrap.addEventListener("click", function() {
                let playerState = player.getPlayerState();
                if (playerState == YT.PlayerState.ENDED) player.seekTo(0);
                else if (playerState == YT.PlayerState.PAUSED) player.playVideo();
            });
        }
        window.onYouTubeIframeAPIReady = function() {
            for (let callback of onYouTubeIframeAPIReadyCallbacks)callback();
        };
        window.hideYTActivated = true;
    });
};
(0, _utils.ready)(()=>{
    (0, _menu.mainMenu)();
    (0, _menu.dropdownMenu)();
    (0, _headerDefault.default)();
    (0, _formEntry.formEntry)();
    (0, _buttonHover.hoverOnButton)();
    btnMore();
    btnMoreEducation();
    initFAQ();
    (0, _toc.tocAnchor)();
    (0, _thankYouMessages.sentNewMessage)(".sidebar-form");
    (0, _thankYouMessages.sentNewMessage)(".attorney-group__form");
    (0, _thankYouMessages.sentNewMessage)(".form");
    (0, _thankYouMessages.sentNewMessage)(".how_can_help_form");
    (0, _thankYouMessages.sentNewMessage)(".big-auto-footer-form");
    (0, _gclid.gclid)();
    secondStep();
    nextArrow();
    btnMoreFormDesignTwo();
    (0, _aosAnimations.aosAnimations)();
    (0, _smoothSiteScrolling.smoothScrollFn)();
    (0, _modals.modalDialog)();
    // gaEventsCF7();
    (0, _sliders.initSliders)();
    (0, _cf7Events.cf7Events)();
});
preventRelatedVideoYT();

},{"./menu":"2uPGB","./header":"9ZRJh","./utils":"blFj3","./sliders":"8pa5Q","./form_entry":"1vUc0","./button-hover":"9maqa","./toc":"dp06E","./thank-you-messages":"9IJ1s","./gclid":"bvTDu","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3","./aos-animations":"3V3c2","./smooth-site-scrolling":"adhDo","./modals":"axBGC","./cf7-events":"3NM30"}],"2uPGB":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "mainMenu", ()=>mainMenu);
parcelHelpers.export(exports, "dropdownMenu", ()=>dropdownMenu);
// Main Menu
var _utils = require("./utils");
const mainMenu = ()=>{
    const menuButton = (0, _utils.getElement)("#main-menu-button");
    const menu = (0, _utils.getElement)("nav.main-menu");
    function menuOpen() {
        menu.classList.add("open");
        menuButton.classList.add("open");
        window.addEventListener("click", closeOnBackgroundClick);
    }
    function menuClose() {
        menuButton.classList.remove("open");
        menu.classList.remove("open");
        setMenuLevel(0);
        menuCloseSubmenus();
        menu.scrollTo(0, 0);
        (0, _utils.off)("click", window, closeOnBackgroundClick);
    }
    function setMenuLevel(n) {
        menu.classList.remove("active-level-1", "active-level-2", "active-level-3");
        function inArray(needle, haystack) {
            if (haystack.indexOf(needle) !== -1) return true;
            else return false;
        }
        if (inArray(n, [
            1,
            2,
            3
        ])) menu.classList.add("active-level-" + n);
    }
    function menuOpenSubmenu(submenuAlias) {
        var submenu = menu.querySelector("[data-alias=" + submenuAlias + "]");
        if (submenu.length !== null) {
            var levelBlock = submenu.closest("div[data-level]");
            levelBlock.classList.add("open");
            if (levelBlock.querySelector("ul.visible") !== null) levelBlock.querySelector("ul.visible").classList.remove("visible");
            submenu.classList.add("visible");
        }
    }
    function menuCloseSubmenus(closeLevels) {
        closeLevels = typeof closeLevels !== "undefined" ? closeLevels : 0;
        var levelBlocks = menu.querySelectorAll("[class*=level-]");
        Array.from(levelBlocks).forEach((elem)=>{
            var levelBlock = elem;
            if (closeLevels <= parseInt(levelBlock.getAttribute("data-level"))) {
                levelBlock.classList.remove("open");
                if (levelBlock.querySelector("ul.open") !== null) levelBlock.querySelector("ul.open").classList.remove("open");
                if (levelBlock.querySelector(".o-sub.open")) levelBlock.querySelector(".o-sub.open").classList.remove("open");
            }
        });
    }
    if ((0, _utils.ifSelectorExist)(menuButton)) menuButton.addEventListener("click", (e)=>{
        e.stopPropagation();
        e.preventDefault();
        if (menuButton.classList.contains("open")) menuClose();
        else {
            menuOpen();
            setMenuLevel(1);
        }
    });
    const subMenus = document.querySelectorAll(".o-sub[data-target-alias]");
    // click on subMenu
    if (subMenus !== null) Array.from(subMenus).forEach((link)=>{
        link.addEventListener("click", function(event) {
            let parentTitle = link.getAttribute("data-item-title");
            let parentUrl = link.getAttribute("data-url");
            if (parentTitle != null && parentTitle != undefined && parentUrl != undefined && parentUrl != null) {
                let parentAlias = link.getAttribute("data-target-alias");
                let levelTitle = document.querySelector(`[data-alias=${parentAlias}] .level-url`);
                levelTitle.textContent = parentTitle;
                levelTitle.setAttribute("href", parentUrl);
            }
            event.preventDefault();
            event.stopPropagation();
            let elementAlias = this.getAttribute("data-target-alias"), levelBlock = this.closest("div[class*=level-]");
            if (this.classList.contains("open")) {
                setMenuLevel(parseInt(levelBlock.getAttribute("data-level")));
                this.classList.remove("open");
                menuCloseSubmenus(parseInt(levelBlock.getAttribute("data-level")));
            } else {
                setMenuLevel(parseInt(levelBlock.getAttribute("data-level")) + 1);
                menuCloseSubmenus(parseInt(levelBlock.getAttribute("data-level")));
                menuOpenSubmenu(elementAlias);
                if (levelBlock.querySelector(".o-sub[data-target-alias].open") !== null) levelBlock.querySelector(".o-sub[data-target-alias].open").classList.remove("open");
                this.classList.add("open");
            }
        });
    });
    // Close menu by click on background
    function closeOnBackgroundClick(e) {
        if (e.target.closest("#main-menu-button") !== null && e.target.closest(".o-sub") !== null && e.target.closest("nav.main-menu") !== null || e.target.classList.contains("wrapper")) menuClose();
    }
    // Mobile back buttons
    if (menu != null && menu != undefined && menu.querySelector(".evt-close-level") != null) {
        let closeSubmenuArrowSelector = menu.querySelectorAll(".evt-close-level");
        Array.from(closeSubmenuArrowSelector).forEach((item)=>{
            item.addEventListener("click", function(e) {
                e.stopPropagation();
                e.preventDefault();
                var currentLevel = parseInt(item.getAttribute("data-current-level"));
                setMenuLevel(currentLevel - 1);
                menuCloseSubmenus(currentLevel - 1);
            });
        });
    }
};
const dropdownMenu = ()=>{
    let headerSelector = (0, _utils.getElement)("header");
    if ((0, _utils.ifSelectorExist)(headerSelector)) {
        let itemsHasChildren = (0, _utils.getElements)(".menu-item-has-children");
        if ((0, _utils.ifSelectorExist)(itemsHasChildren)) Array.from(itemsHasChildren).forEach((item)=>{
            let subMenuSelector = (0, _utils.getElement)(".sub-menu", item);
            if ((0, _utils.ifSelectorExist)(subMenuSelector)) subMenuSelector.style.top = headerSelector.clientHeight + "px";
        });
    }
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"blFj3":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "ifSelectorExist", ()=>ifSelectorExist);
parcelHelpers.export(exports, "getElement", ()=>getElement);
parcelHelpers.export(exports, "getElements", ()=>getElements);
parcelHelpers.export(exports, "style", ()=>style);
parcelHelpers.export(exports, "css", ()=>css);
parcelHelpers.export(exports, "ready", ()=>ready);
parcelHelpers.export(exports, "stopAndPrevent", ()=>stopAndPrevent);
parcelHelpers.export(exports, "slideUp", ()=>slideUp);
parcelHelpers.export(exports, "slideDown", ()=>slideDown);
parcelHelpers.export(exports, "slideToggle", ()=>slideToggle);
parcelHelpers.export(exports, "off", ()=>off);
parcelHelpers.export(exports, "humanDate", ()=>humanDate);
parcelHelpers.export(exports, "setCookie", ()=>setCookie);
parcelHelpers.export(exports, "getCookie", ()=>getCookie);
parcelHelpers.export(exports, "eraseCookie", ()=>eraseCookie);
parcelHelpers.export(exports, "windowsWidth", ()=>windowsWidth);
parcelHelpers.export(exports, "scrollTo", ()=>scrollTo);
parcelHelpers.export(exports, "fadeOut", ()=>fadeOut);
parcelHelpers.export(exports, "fadeIn", ()=>fadeIn);
parcelHelpers.export(exports, "listAllEventListeners", ()=>listAllEventListeners);
const ifSelectorExist = (selector)=>{
    if (selector !== null && selector !== undefined) return true;
    else return false;
};
const getElement = (el, wrap = document)=>{
    if (el == null) return undefined;
    if (typeof el === "string") try {
        return wrap.querySelector(el) || undefined;
    } catch ({ message  }) {
        console.error(message);
        return undefined;
    }
};
const getElements = (el, wrap = document)=>{
    if (el == null) return undefined;
    if (typeof el === "string") try {
        return wrap.querySelectorAll(el) || undefined;
    } catch ({ message  }) {
        console.error(message);
        return undefined;
    }
};
const style = (el, property)=>window.getComputedStyle(el).getPropertyValue(property);
const css = (el, css)=>{
    Object.keys(css).forEach((prop)=>{
        el.style[prop] = css[prop];
    });
};
const ready = (callback)=>{
    if (document.readyState !== "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
};
const stopAndPrevent = (e)=>{
    e.cancelable !== false && e.preventDefault();
    e.stopPropagation();
};
const slideUp = (target, duration = 500)=>{
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + "ms";
    target.style.boxSizing = "border-box";
    target.style.height = target.offsetHeight + "px";
    target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(()=>{
        target.style.display = "none";
        target.style.removeProperty("height");
        target.style.removeProperty("padding-top");
        target.style.removeProperty("padding-bottom");
        target.style.removeProperty("margin-top");
        target.style.removeProperty("margin-bottom");
        target.style.removeProperty("overflow");
        target.style.removeProperty("transition-duration");
        target.style.removeProperty("transition-property");
    //alert("!");
    }, duration);
};
const slideDown = (target, duration = 500, displayStyle = "block")=>{
    target.style.removeProperty("display");
    let display = window.getComputedStyle(target).display;
    if (display === "none") display = displayStyle;
    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = "hidden";
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = "border-box";
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + "ms";
    target.style.height = height + "px";
    target.style.removeProperty("padding-top");
    target.style.removeProperty("padding-bottom");
    target.style.removeProperty("margin-top");
    target.style.removeProperty("margin-bottom");
    window.setTimeout(()=>{
        target.style.removeProperty("height");
        target.style.removeProperty("overflow");
        target.style.removeProperty("transition-duration");
        target.style.removeProperty("transition-property");
    }, duration);
};
const slideToggle = (target, duration = 500, displayStyle = "block")=>{
    if (window.getComputedStyle(target).display === "none") return slideDown(target, duration, displayStyle);
    else return slideUp(target, duration);
};
const off = function(event, elem, callback, capture) {
    if (typeof elem === "function") {
        capture = callback;
        callback = elem;
        elem = window;
    }
    capture = capture ? true : false;
    elem = typeof elem === "string" ? document.querySelector(elem) : elem;
    if (!elem) return;
    elem.removeEventListener(event, callback, capture);
};
const humanDate = (date)=>{
    let dateObj = void 0;
    if (typeof date === "string") dateObj = new Date(date);
    else dateObj = date;
    let options = {
        month: "long",
        day: "numeric"
    };
    let dateYear = dateObj.toLocaleString("latn", {
        year: "numeric"
    });
    let dateMonth = dateObj.toLocaleString("latn", {
        month: "numeric"
    });
    let dateDay = dateObj.toLocaleString("latn", {
        day: "numeric"
    });
    let dateHour = dateObj.getHours();
    let dateMinute = dateObj.getMinutes();
    let now = new Date();
    let nowYear = now.toLocaleString("latn", {
        year: "numeric"
    });
    let nowMonth = now.toLocaleString("latn", {
        month: "numeric"
    });
    let nowDay = now.toLocaleString("latn", {
        day: "numeric"
    });
    let nowHour = now.getHours();
    let nowMinute = now.getMinutes();
    // set year only if not the same year as now
    if (dateYear !== nowYear) options.year = "numeric";
    // if today, display relative time
    if (dateYear === nowYear && dateMonth === nowMonth && dateDay === nowDay) {
        let diffHour = nowHour - dateHour;
        let diffMinute = Math.abs(nowMinute - dateMinute);
        if (diffHour === 0 && diffMinute > 30) return "1 h";
        else if (diffHour === 0) return diffMinute + " min";
        else if (diffMinute >= 30) return diffHour + 1 + " h";
        return diffHour + " h";
    }
    return dateObj.toLocaleString("latn", options);
};
const setCookie = (name, value, days)=>{
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 86400000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
};
const getCookie = (name)=>{
    let nameEQ = name + "=";
    let ca = document.cookie.split(";");
    for(let i = 0; i < ca.length; i++){
        let c = ca[i];
        while(c.charAt(0) == " ")c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
};
const eraseCookie = (name)=>{
    document.cookie = name + "=; Max-Age=-99999999;";
};
const windowsWidth = window.innerWidth;
const scrollTo = (element, to, duration)=>{
    if (duration <= 0) return;
    var difference = to - element.scrollTop;
    var perTick = difference / duration * 10;
    setTimeout(function() {
        element.scrollTop = element.scrollTop + perTick;
        if (element.scrollTop === to) return;
        scrollTo(element, to, duration - 10);
    }, 10);
};
const fadeOut = (el)=>{
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) el.style.display = "none";
        else requestAnimationFrame(fade);
    })();
};
const fadeIn = (el, display)=>{
    el.style.opacity = 0;
    el.style.display = display || "block";
    (function fade() {
        var val = parseFloat(el.style.opacity);
        if (!((val += 0.1) >= 1)) {
            if (!((val += 0.1) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        }
    })();
};
const listAllEventListeners = ()=>{
    const allElements = Array.prototype.slice.call(document.querySelectorAll("*"));
    allElements.push(document);
    allElements.push(window);
    const types = [];
    for(let ev in window)if (/^on/.test(ev)) types[types.length] = ev;
    let elements = [];
    for(let i = 0; i < allElements.length; i++){
        const currentElement = allElements[i];
        for(let j = 0; j < types.length; j++)if (typeof currentElement[types[j]] === "function") elements.push({
            node: currentElement,
            type: types[j],
            func: currentElement[types[j]].toString()
        });
    }
    return elements.sort(function(a, b) {
        return a.type.localeCompare(b.type);
    });
};
// homepage header bg animation
window.addEventListener("scroll", ()=>{
    let scroll = scrollY;
    // const section = getElement('.zoom-animation');
    // section.style.backgroundSize = `${100 + scroll * 0.05}%`;
    imageSelector = getElement(".animated-image");
    if (ifSelectorExist(imageSelector)) css(imageSelector, {
        // transform: `${this.collapseOffsetHeight}px`,
        transform: `translate3d(0px, ${scroll}px, 0px) scale(${1 + scroll * 0.001})`
    });
});

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"gkKU3":[function(require,module,exports) {
exports.interopDefault = function(a) {
    return a && a.__esModule ? a : {
        default: a
    };
};
exports.defineInteropFlag = function(a) {
    Object.defineProperty(a, "__esModule", {
        value: true
    });
};
exports.exportAll = function(source, dest) {
    Object.keys(source).forEach(function(key) {
        if (key === "default" || key === "__esModule" || dest.hasOwnProperty(key)) return;
        Object.defineProperty(dest, key, {
            enumerable: true,
            get: function() {
                return source[key];
            }
        });
    });
    return dest;
};
exports.export = function(dest, destName, get) {
    Object.defineProperty(dest, destName, {
        enumerable: true,
        get: get
    });
};

},{}],"9ZRJh":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
// Main Menu
var _utils = require("./utils");
function headerInit() {
    const header = (0, _utils.getElement)("header");
    let isSticked = false;
    document.addEventListener("scroll", (e)=>{
        if (!isSticked && window.scrollY >= 160) {
            header.classList.add("sticked");
            isSticked = true;
        }
        if (isSticked && window.scrollY <= 70) {
            header.classList.remove("sticked");
            isSticked = false;
        }
    });
}
exports.default = headerInit;

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"8pa5Q":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "initSliders", ()=>initSliders);
var _glide = require("@glidejs/glide");
var _glideDefault = parcelHelpers.interopDefault(_glide);
var _utils = require("./utils");
var _vanillaMarquee = require("vanilla-marquee");
var _vanillaMarqueeDefault = parcelHelpers.interopDefault(_vanillaMarquee);
const initSliders = ()=>{
    const testmonialsSlider = ".testmonialsSlider";
    if (document.querySelector(testmonialsSlider) != undefined && document.querySelector(testmonialsSlider) != null) Array.from((0, _utils.getElements)(testmonialsSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 1,
            type: "slider",
            autoplay: 3500,
            breakpoints: {}
        }).mount();
    });
    const awardsSlider = ".awardsSlider";
    if (document.querySelector(awardsSlider) != undefined && document.querySelector(awardsSlider) != null) Array.from((0, _utils.getElements)(awardsSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 5.2,
            type: "carousel",
            autoplay: 2500,
            breakpoints: {
                1024: {
                    perView: 4.5
                },
                768: {
                    perView: 3.5
                },
                540: {
                    perView: 2.5
                }
            }
        }).mount();
    });
    const awardsSlider2 = ".awards_slider";
    if (document.querySelector(awardsSlider2) != undefined && document.querySelector(awardsSlider2) != null) Array.from((0, _utils.getElements)(awardsSlider2)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 8,
            type: "carousel",
            autoplay: 3000,
            breakpoints: {
                1100: {
                    perView: 5
                },
                768: {
                    perView: 3
                }
            }
        }).mount();
    });
    const lifeSlider = ".lifeSlider";
    if (document.querySelector(lifeSlider) != undefined && document.querySelector(lifeSlider) != null) Array.from((0, _utils.getElements)(lifeSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(lifeSlider, {
            perView: 1,
            type: "carousel",
            breakpoints: {}
        }).mount();
    });
    const verdictsSlider = ".verdicts_slider";
    if (document.querySelector(verdictsSlider) != undefined && document.querySelector(verdictsSlider) != null) Array.from((0, _utils.getElements)(verdictsSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            type: "carousel",
            autoplay: 1,
            animationDuration: 4000,
            // animationTimingFunc: 'linear',
            perView: 4,
            breakpoints: {
                1400: {
                    perView: 3
                },
                1100: {
                    perView: 3
                },
                768: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            }
        }).mount();
    });
    const verdictsSliderBa = ".verdicts_slider_ba";
    if (document.querySelector(verdictsSliderBa) != undefined && document.querySelector(verdictsSliderBa) != null) Array.from((0, _utils.getElements)(verdictsSliderBa)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            type: "carousel",
            autoplay: 1,
            animationDuration: 4000,
            // animationTimingFunc: 'linear',
            perView: 5,
            breakpoints: {
                1496: {
                    perView: 4
                },
                1200: {
                    perView: 3
                },
                868: {
                    perView: 3
                },
                640: {
                    perView: 2
                }
            }
        }).mount();
    });
    const memorableSlider = ".memorableSlider";
    if (document.querySelector(memorableSlider) != undefined && document.querySelector(memorableSlider) != null) Array.from((0, _utils.getElements)(memorableSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 1,
            type: "slider",
            breakpoints: {}
        }).mount();
    });
    const grSlider = ".google_reviews_slider";
    if (document.querySelector(grSlider) != undefined && document.querySelector(grSlider) != null) Array.from((0, _utils.getElements)(grSlider)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 3,
            type: "carousel",
            breakpoints: {
                1100: {
                    perView: 2
                },
                768: {
                    perView: 1
                }
            }
        }).mount();
    });
    const awardsSliderAbout = ".awardsSliderAbout";
    if (document.querySelector(awardsSliderAbout) != undefined && document.querySelector(awardsSliderAbout) != null) Array.from((0, _utils.getElements)(awardsSliderAbout)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 8,
            type: "carousel",
            autoplay: 2500,
            breakpoints: {
                540: {
                    perView: 4.5
                }
            }
        }).mount();
    });
    const communitySliderAbout = ".communitySliderAbout";
    if (document.querySelector(communitySliderAbout) != undefined && document.querySelector(communitySliderAbout) != null) Array.from((0, _utils.getElements)(communitySliderAbout)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 2,
            type: "carousel",
            breakpoints: {
                540: {
                    perView: 1
                }
            }
        }).mount();
    });
    const marqueEl1 = (0, _utils.getElement)("#marquee");
    if ((0, _utils.ifSelectorExist)(marqueEl1)) {
        const marqueOne = new (0, _vanillaMarqueeDefault.default)(marqueEl1, {
            css3easing: "linear",
            speed: window.innerWidth < 768 ? 40 : 60,
            gap: 100,
            delayBeforeStart: 0,
            direction: "left",
            duplicated: true,
            duration: 5000,
            startVisible: true
        });
        marqueOne.resume();
    }
    const verdicts = document.querySelector(".verdicts-marquee");
    if ((0, _utils.ifSelectorExist)(verdicts)) {
        const verdictsMarquee = new (0, _vanillaMarqueeDefault.default)(verdicts, {
            css3easing: "linear",
            speed: window.innerWidth < 768 ? 60 : 100,
            gap: 100,
            delayBeforeStart: 0,
            direction: "left",
            duplicated: true,
            duration: 5000,
            startVisible: true
        });
        verdictsMarquee.resume();
    }
    // client 2
    const merits = ".merits";
    if (document.querySelector(merits) != undefined && document.querySelector(merits) != null) Array.from((0, _utils.getElements)(merits)).forEach((item)=>{
        new (0, _glideDefault.default)(item, {
            perView: 4,
            type: "carousel",
            animationDuration: 4000,
            autoplay: 1,
            breakpoints: {
                1496: {
                    perView: 3,
                    autoplay: 1
                },
                1200: {
                    perView: 2,
                    autoplay: 3000
                },
                640: {
                    perView: 1,
                    autoplay: 3000
                }
            }
        }).mount();
    });
};

},{"@glidejs/glide":"cS4lK","./utils":"blFj3","vanilla-marquee":"aRzML","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"cS4lK":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "default", ()=>Glide);
/*!
 * Glide.js v3.6.0
 * (c) 2013-2022 Jędrzej Chałubek (https://github.com/jedrzejchalubek/)
 * Released under the MIT License.
 */ function _typeof(obj) {
    "@babel/helpers - typeof";
    if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") _typeof = function(obj) {
        return typeof obj;
    };
    else _typeof = function(obj) {
        return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
    return _typeof(obj);
}
function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function");
}
function _defineProperties(target, props) {
    for(var i = 0; i < props.length; i++){
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ("value" in descriptor) descriptor.writable = true;
        Object.defineProperty(target, descriptor.key, descriptor);
    }
}
function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
}
function _inherits(subClass, superClass) {
    if (typeof superClass !== "function" && superClass !== null) throw new TypeError("Super expression must either be null or a function");
    subClass.prototype = Object.create(superClass && superClass.prototype, {
        constructor: {
            value: subClass,
            writable: true,
            configurable: true
        }
    });
    if (superClass) _setPrototypeOf(subClass, superClass);
}
function _getPrototypeOf(o) {
    _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) {
        return o.__proto__ || Object.getPrototypeOf(o);
    };
    return _getPrototypeOf(o);
}
function _setPrototypeOf(o, p) {
    _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) {
        o.__proto__ = p;
        return o;
    };
    return _setPrototypeOf(o, p);
}
function _isNativeReflectConstruct() {
    if (typeof Reflect === "undefined" || !Reflect.construct) return false;
    if (Reflect.construct.sham) return false;
    if (typeof Proxy === "function") return true;
    try {
        Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function() {}));
        return true;
    } catch (e) {
        return false;
    }
}
function _assertThisInitialized(self) {
    if (self === void 0) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
    return self;
}
function _possibleConstructorReturn(self, call) {
    if (call && (typeof call === "object" || typeof call === "function")) return call;
    else if (call !== void 0) throw new TypeError("Derived constructors may only return object or undefined");
    return _assertThisInitialized(self);
}
function _createSuper(Derived) {
    var hasNativeReflectConstruct = _isNativeReflectConstruct();
    return function _createSuperInternal() {
        var Super = _getPrototypeOf(Derived), result;
        if (hasNativeReflectConstruct) {
            var NewTarget = _getPrototypeOf(this).constructor;
            result = Reflect.construct(Super, arguments, NewTarget);
        } else result = Super.apply(this, arguments);
        return _possibleConstructorReturn(this, result);
    };
}
function _superPropBase(object, property) {
    while(!Object.prototype.hasOwnProperty.call(object, property)){
        object = _getPrototypeOf(object);
        if (object === null) break;
    }
    return object;
}
function _get() {
    if (typeof Reflect !== "undefined" && Reflect.get) _get = Reflect.get;
    else _get = function _get(target, property, receiver) {
        var base = _superPropBase(target, property);
        if (!base) return;
        var desc = Object.getOwnPropertyDescriptor(base, property);
        if (desc.get) return desc.get.call(arguments.length < 3 ? target : receiver);
        return desc.value;
    };
    return _get.apply(this, arguments);
}
var defaults = {
    /**
   * Type of the movement.
   *
   * Available types:
   * `slider` - Rewinds slider to the start/end when it reaches the first or last slide.
   * `carousel` - Changes slides without starting over when it reaches the first or last slide.
   *
   * @type {String}
   */ type: "slider",
    /**
   * Start at specific slide number defined with zero-based index.
   *
   * @type {Number}
   */ startAt: 0,
    /**
   * A number of slides visible on the single viewport.
   *
   * @type {Number}
   */ perView: 1,
    /**
   * Focus currently active slide at a specified position in the track.
   *
   * Available inputs:
   * `center` - Current slide will be always focused at the center of a track.
   * `0,1,2,3...` - Current slide will be focused on the specified zero-based index.
   *
   * @type {String|Number}
   */ focusAt: 0,
    /**
   * A size of the gap added between slides.
   *
   * @type {Number}
   */ gap: 10,
    /**
   * Change slides after a specified interval. Use `false` for turning off autoplay.
   *
   * @type {Number|Boolean}
   */ autoplay: false,
    /**
   * Stop autoplay on mouseover event.
   *
   * @type {Boolean}
   */ hoverpause: true,
    /**
   * Allow for changing slides with left and right keyboard arrows.
   *
   * @type {Boolean}
   */ keyboard: true,
    /**
   * Stop running `perView` number of slides from the end. Use this
   * option if you don't want to have an empty space after
   * a slider. Works only with `slider` type and a
   * non-centered `focusAt` setting.
   *
   * @type {Boolean}
   */ bound: false,
    /**
   * Minimal swipe distance needed to change the slide. Use `false` for turning off a swiping.
   *
   * @type {Number|Boolean}
   */ swipeThreshold: 80,
    /**
   * Minimal mouse drag distance needed to change the slide. Use `false` for turning off a dragging.
   *
   * @type {Number|Boolean}
   */ dragThreshold: 120,
    /**
   * A number of slides moved on single swipe.
   *
   * Available types:
   * `` - Moves slider by one slide per swipe
   * `|` - Moves slider between views per swipe (number of slides defined in `perView` options)
   *
   * @type {String}
   */ perSwipe: "",
    /**
   * Moving distance ratio of the slides on a swiping and dragging.
   *
   * @type {Number}
   */ touchRatio: 0.5,
    /**
   * Angle required to activate slides moving on swiping or dragging.
   *
   * @type {Number}
   */ touchAngle: 45,
    /**
   * Duration of the animation in milliseconds.
   *
   * @type {Number}
   */ animationDuration: 400,
    /**
   * Allows looping the `slider` type. Slider will rewind to the first/last slide when it's at the start/end.
   *
   * @type {Boolean}
   */ rewind: true,
    /**
   * Duration of the rewinding animation of the `slider` type in milliseconds.
   *
   * @type {Number}
   */ rewindDuration: 800,
    /**
   * Easing function for the animation.
   *
   * @type {String}
   */ animationTimingFunc: "cubic-bezier(.165, .840, .440, 1)",
    /**
   * Wait for the animation to finish until the next user input can be processed
   *
   * @type {boolean}
   */ waitForTransition: true,
    /**
   * Throttle costly events at most once per every wait milliseconds.
   *
   * @type {Number}
   */ throttle: 10,
    /**
   * Moving direction mode.
   *
   * Available inputs:
   * - 'ltr' - left to right movement,
   * - 'rtl' - right to left movement.
   *
   * @type {String}
   */ direction: "ltr",
    /**
   * The distance value of the next and previous viewports which
   * have to peek in the current view. Accepts number and
   * pixels as a string. Left and right peeking can be
   * set up separately with a directions object.
   *
   * For example:
   * `100` - Peek 100px on the both sides.
   * { before: 100, after: 50 }` - Peek 100px on the left side and 50px on the right side.
   *
   * @type {Number|String|Object}
   */ peek: 0,
    /**
   * Defines how many clones of current viewport will be generated.
   *
   * @type {Number}
   */ cloningRatio: 1,
    /**
   * Collection of options applied at specified media breakpoints.
   * For example: display two slides per view under 800px.
   * `{
   *   '800px': {
   *     perView: 2
   *   }
   * }`
   */ breakpoints: {},
    /**
   * Collection of internally used HTML classes.
   *
   * @todo Refactor `slider` and `carousel` properties to single `type: { slider: '', carousel: '' }` object
   * @type {Object}
   */ classes: {
        swipeable: "glide--swipeable",
        dragging: "glide--dragging",
        direction: {
            ltr: "glide--ltr",
            rtl: "glide--rtl"
        },
        type: {
            slider: "glide--slider",
            carousel: "glide--carousel"
        },
        slide: {
            clone: "glide__slide--clone",
            active: "glide__slide--active"
        },
        arrow: {
            disabled: "glide__arrow--disabled"
        },
        nav: {
            active: "glide__bullet--active"
        }
    }
};
/**
 * Outputs warning message to the bowser console.
 *
 * @param  {String} msg
 * @return {Void}
 */ function warn(msg) {
    console.error("[Glide warn]: ".concat(msg));
}
/**
 * Converts value entered as number
 * or string to integer value.
 *
 * @param {String} value
 * @returns {Number}
 */ function toInt(value) {
    return parseInt(value);
}
/**
 * Converts value entered as number
 * or string to flat value.
 *
 * @param {String} value
 * @returns {Number}
 */ function toFloat(value) {
    return parseFloat(value);
}
/**
 * Indicates whether the specified value is a string.
 *
 * @param  {*}   value
 * @return {Boolean}
 */ function isString(value) {
    return typeof value === "string";
}
/**
 * Indicates whether the specified value is an object.
 *
 * @param  {*} value
 * @return {Boolean}
 *
 * @see https://github.com/jashkenas/underscore
 */ function isObject(value) {
    var type = _typeof(value);
    return type === "function" || type === "object" && !!value; // eslint-disable-line no-mixed-operators
}
/**
 * Indicates whether the specified value is a function.
 *
 * @param  {*} value
 * @return {Boolean}
 */ function isFunction(value) {
    return typeof value === "function";
}
/**
 * Indicates whether the specified value is undefined.
 *
 * @param  {*} value
 * @return {Boolean}
 */ function isUndefined(value) {
    return typeof value === "undefined";
}
/**
 * Indicates whether the specified value is an array.
 *
 * @param  {*} value
 * @return {Boolean}
 */ function isArray(value) {
    return value.constructor === Array;
}
/**
 * Creates and initializes specified collection of extensions.
 * Each extension receives access to instance of glide and rest of components.
 *
 * @param {Object} glide
 * @param {Object} extensions
 *
 * @returns {Object}
 */ function mount(glide, extensions, events) {
    var components = {};
    for(var name in extensions)if (isFunction(extensions[name])) components[name] = extensions[name](glide, components, events);
    else warn("Extension must be a function");
    for(var _name in components)if (isFunction(components[_name].mount)) components[_name].mount();
    return components;
}
/**
 * Defines getter and setter property on the specified object.
 *
 * @param  {Object} obj         Object where property has to be defined.
 * @param  {String} prop        Name of the defined property.
 * @param  {Object} definition  Get and set definitions for the property.
 * @return {Void}
 */ function define(obj, prop, definition) {
    Object.defineProperty(obj, prop, definition);
}
/**
 * Sorts aphabetically object keys.
 *
 * @param  {Object} obj
 * @return {Object}
 */ function sortKeys(obj) {
    return Object.keys(obj).sort().reduce(function(r, k) {
        r[k] = obj[k];
        return r[k], r;
    }, {});
}
/**
 * Merges passed settings object with default options.
 *
 * @param  {Object} defaults
 * @param  {Object} settings
 * @return {Object}
 */ function mergeOptions(defaults, settings) {
    var options = Object.assign({}, defaults, settings); // `Object.assign` do not deeply merge objects, so we
    // have to do it manually for every nested object
    // in options. Although it does not look smart,
    // it's smaller and faster than some fancy
    // merging deep-merge algorithm script.
    if (settings.hasOwnProperty("classes")) {
        options.classes = Object.assign({}, defaults.classes, settings.classes);
        if (settings.classes.hasOwnProperty("direction")) options.classes.direction = Object.assign({}, defaults.classes.direction, settings.classes.direction);
        if (settings.classes.hasOwnProperty("type")) options.classes.type = Object.assign({}, defaults.classes.type, settings.classes.type);
        if (settings.classes.hasOwnProperty("slide")) options.classes.slide = Object.assign({}, defaults.classes.slide, settings.classes.slide);
        if (settings.classes.hasOwnProperty("arrow")) options.classes.arrow = Object.assign({}, defaults.classes.arrow, settings.classes.arrow);
        if (settings.classes.hasOwnProperty("nav")) options.classes.nav = Object.assign({}, defaults.classes.nav, settings.classes.nav);
    }
    if (settings.hasOwnProperty("breakpoints")) options.breakpoints = Object.assign({}, defaults.breakpoints, settings.breakpoints);
    return options;
}
var EventsBus = /*#__PURE__*/ function() {
    /**
   * Construct a EventBus instance.
   *
   * @param {Object} events
   */ function EventsBus() {
        var events = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
        _classCallCheck(this, EventsBus);
        this.events = events;
        this.hop = events.hasOwnProperty;
    }
    /**
   * Adds listener to the specifed event.
   *
   * @param {String|Array} event
   * @param {Function} handler
   */ _createClass(EventsBus, [
        {
            key: "on",
            value: function on(event, handler) {
                if (isArray(event)) {
                    for(var i = 0; i < event.length; i++)this.on(event[i], handler);
                    return;
                } // Create the event's object if not yet created
                if (!this.hop.call(this.events, event)) this.events[event] = [];
                 // Add the handler to queue
                var index = this.events[event].push(handler) - 1; // Provide handle back for removal of event
                return {
                    remove: function remove() {
                        delete this.events[event][index];
                    }
                };
            }
        },
        {
            key: "emit",
            value: function emit(event, context) {
                if (isArray(event)) {
                    for(var i = 0; i < event.length; i++)this.emit(event[i], context);
                    return;
                } // If the event doesn't exist, or there's no handlers in queue, just leave
                if (!this.hop.call(this.events, event)) return;
                 // Cycle through events queue, fire!
                this.events[event].forEach(function(item) {
                    item(context || {});
                });
            }
        }
    ]);
    return EventsBus;
}();
var Glide$1 = /*#__PURE__*/ function() {
    /**
   * Construct glide.
   *
   * @param  {String} selector
   * @param  {Object} options
   */ function Glide(selector) {
        var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
        _classCallCheck(this, Glide);
        this._c = {};
        this._t = [];
        this._e = new EventsBus();
        this.disabled = false;
        this.selector = selector;
        this.settings = mergeOptions(defaults, options);
        this.index = this.settings.startAt;
    }
    /**
   * Initializes glide.
   *
   * @param {Object} extensions Collection of extensions to initialize.
   * @return {Glide}
   */ _createClass(Glide, [
        {
            key: "mount",
            value: function mount$1() {
                var extensions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
                this._e.emit("mount.before");
                if (isObject(extensions)) this._c = mount(this, extensions, this._e);
                else warn("You need to provide a object on `mount()`");
                this._e.emit("mount.after");
                return this;
            }
        },
        {
            key: "mutate",
            value: function mutate() {
                var transformers = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];
                if (isArray(transformers)) this._t = transformers;
                else warn("You need to provide a array on `mutate()`");
                return this;
            }
        },
        {
            key: "update",
            value: function update() {
                var settings = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
                this.settings = mergeOptions(this.settings, settings);
                if (settings.hasOwnProperty("startAt")) this.index = settings.startAt;
                this._e.emit("update");
                return this;
            }
        },
        {
            key: "go",
            value: function go(pattern) {
                this._c.Run.make(pattern);
                return this;
            }
        },
        {
            key: "move",
            value: function move(distance) {
                this._c.Transition.disable();
                this._c.Move.make(distance);
                return this;
            }
        },
        {
            key: "destroy",
            value: function destroy() {
                this._e.emit("destroy");
                return this;
            }
        },
        {
            key: "play",
            value: function play() {
                var interval = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
                if (interval) this.settings.autoplay = interval;
                this._e.emit("play");
                return this;
            }
        },
        {
            key: "pause",
            value: function pause() {
                this._e.emit("pause");
                return this;
            }
        },
        {
            key: "disable",
            value: function disable() {
                this.disabled = true;
                return this;
            }
        },
        {
            key: "enable",
            value: function enable() {
                this.disabled = false;
                return this;
            }
        },
        {
            key: "on",
            value: function on(event, handler) {
                this._e.on(event, handler);
                return this;
            }
        },
        {
            key: "isType",
            value: function isType(name) {
                return this.settings.type === name;
            }
        },
        {
            key: "settings",
            get: function get() {
                return this._o;
            },
            set: function set(o) {
                if (isObject(o)) this._o = o;
                else warn("Options must be an `object` instance.");
            }
        },
        {
            key: "index",
            get: function get() {
                return this._i;
            },
            set: function set(i) {
                this._i = toInt(i);
            }
        },
        {
            key: "type",
            get: function get() {
                return this.settings.type;
            }
        },
        {
            key: "disabled",
            get: function get() {
                return this._d;
            },
            set: function set(status) {
                this._d = !!status;
            }
        }
    ]);
    return Glide;
}();
function Run(Glide, Components, Events) {
    var Run = {
        /**
     * Initializes autorunning of the glide.
     *
     * @return {Void}
     */ mount: function mount() {
            this._o = false;
        },
        /**
     * Makes glides running based on the passed moving schema.
     *
     * @param {String} move
     */ make: function make(move) {
            var _this = this;
            if (!Glide.disabled) {
                !Glide.settings.waitForTransition || Glide.disable();
                this.move = move;
                Events.emit("run.before", this.move);
                this.calculate();
                Events.emit("run", this.move);
                Components.Transition.after(function() {
                    if (_this.isStart()) Events.emit("run.start", _this.move);
                    if (_this.isEnd()) Events.emit("run.end", _this.move);
                    if (_this.isOffset()) {
                        _this._o = false;
                        Events.emit("run.offset", _this.move);
                    }
                    Events.emit("run.after", _this.move);
                    Glide.enable();
                });
            }
        },
        /**
     * Calculates current index based on defined move.
     *
     * @return {Number|Undefined}
     */ calculate: function calculate() {
            var move = this.move, length = this.length;
            var steps = move.steps, direction = move.direction; // By default assume that size of view is equal to one slide
            var viewSize = 1; // While direction is `=` we want jump to
            // a specified index described in steps.
            if (direction === "=") {
                // Check if bound is true, 
                // as we want to avoid whitespaces.
                if (Glide.settings.bound && toInt(steps) > length) {
                    Glide.index = length;
                    return;
                }
                Glide.index = steps;
                return;
            } // When pattern is equal to `>>` we want
            // fast forward to the last slide.
            if (direction === ">" && steps === ">") {
                Glide.index = length;
                return;
            } // When pattern is equal to `<<` we want
            // fast forward to the first slide.
            if (direction === "<" && steps === "<") {
                Glide.index = 0;
                return;
            } // pagination movement
            if (direction === "|") viewSize = Glide.settings.perView || 1;
             // we are moving forward
            if (direction === ">" || direction === "|" && steps === ">") {
                var index = calculateForwardIndex(viewSize);
                if (index > length) this._o = true;
                Glide.index = normalizeForwardIndex(index, viewSize);
                return;
            } // we are moving backward
            if (direction === "<" || direction === "|" && steps === "<") {
                var _index = calculateBackwardIndex(viewSize);
                if (_index < 0) this._o = true;
                Glide.index = normalizeBackwardIndex(_index, viewSize);
                return;
            }
            warn("Invalid direction pattern [".concat(direction).concat(steps, "] has been used"));
        },
        /**
     * Checks if we are on the first slide.
     *
     * @return {Boolean}
     */ isStart: function isStart() {
            return Glide.index <= 0;
        },
        /**
     * Checks if we are on the last slide.
     *
     * @return {Boolean}
     */ isEnd: function isEnd() {
            return Glide.index >= this.length;
        },
        /**
     * Checks if we are making a offset run.
     *
     * @param {String} direction
     * @return {Boolean}
     */ isOffset: function isOffset() {
            var direction = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : undefined;
            if (!direction) return this._o;
            if (!this._o) return false;
             // did we view to the right?
            if (direction === "|>") return this.move.direction === "|" && this.move.steps === ">";
             // did we view to the left?
            if (direction === "|<") return this.move.direction === "|" && this.move.steps === "<";
            return this.move.direction === direction;
        },
        /**
     * Checks if bound mode is active
     *
     * @return {Boolean}
     */ isBound: function isBound() {
            return Glide.isType("slider") && Glide.settings.focusAt !== "center" && Glide.settings.bound;
        }
    };
    /**
   * Returns index value to move forward/to the right
   *
   * @param viewSize
   * @returns {Number}
   */ function calculateForwardIndex(viewSize) {
        var index = Glide.index;
        if (Glide.isType("carousel")) return index + viewSize;
        return index + (viewSize - index % viewSize);
    }
    /**
   * Normalizes the given forward index based on glide settings, preventing it to exceed certain boundaries
   *
   * @param index
   * @param length
   * @param viewSize
   * @returns {Number}
   */ function normalizeForwardIndex(index, viewSize) {
        var length = Run.length;
        if (index <= length) return index;
        if (Glide.isType("carousel")) return index - (length + 1);
        if (Glide.settings.rewind) {
            // bound does funny things with the length, therefor we have to be certain
            // that we are on the last possible index value given by bound
            if (Run.isBound() && !Run.isEnd()) return length;
            return 0;
        }
        if (Run.isBound()) return length;
        return Math.floor(length / viewSize) * viewSize;
    }
    /**
   * Calculates index value to move backward/to the left
   *
   * @param viewSize
   * @returns {Number}
   */ function calculateBackwardIndex(viewSize) {
        var index = Glide.index;
        if (Glide.isType("carousel")) return index - viewSize;
         // ensure our back navigation results in the same index as a forward navigation
        // to experience a homogeneous paging
        var view = Math.ceil(index / viewSize);
        return (view - 1) * viewSize;
    }
    /**
   * Normalizes the given backward index based on glide settings, preventing it to exceed certain boundaries
   *
   * @param index
   * @param length
   * @param viewSize
   * @returns {*}
   */ function normalizeBackwardIndex(index, viewSize) {
        var length = Run.length;
        if (index >= 0) return index;
        if (Glide.isType("carousel")) return index + (length + 1);
        if (Glide.settings.rewind) {
            // bound does funny things with the length, therefor we have to be certain
            // that we are on first possible index value before we to rewind to the length given by bound
            if (Run.isBound() && Run.isStart()) return length;
            return Math.floor(length / viewSize) * viewSize;
        }
        return 0;
    }
    define(Run, "move", {
        /**
     * Gets value of the move schema.
     *
     * @returns {Object}
     */ get: function get() {
            return this._m;
        },
        /**
     * Sets value of the move schema.
     *
     * @returns {Object}
     */ set: function set(value) {
            var step = value.substr(1);
            this._m = {
                direction: value.substr(0, 1),
                steps: step ? toInt(step) ? toInt(step) : step : 0
            };
        }
    });
    define(Run, "length", {
        /**
     * Gets value of the running distance based
     * on zero-indexing number of slides.
     *
     * @return {Number}
     */ get: function get() {
            var settings = Glide.settings;
            var length = Components.Html.slides.length; // If the `bound` option is active, a maximum running distance should be
            // reduced by `perView` and `focusAt` settings. Running distance
            // should end before creating an empty space after instance.
            if (this.isBound()) return length - 1 - (toInt(settings.perView) - 1) + toInt(settings.focusAt);
            return length - 1;
        }
    });
    define(Run, "offset", {
        /**
     * Gets status of the offsetting flag.
     *
     * @return {Boolean}
     */ get: function get() {
            return this._o;
        }
    });
    return Run;
}
/**
 * Returns a current time.
 *
 * @return {Number}
 */ function now() {
    return new Date().getTime();
}
/**
 * Returns a function, that, when invoked, will only be triggered
 * at most once during a given window of time.
 *
 * @param {Function} func
 * @param {Number} wait
 * @param {Object=} options
 * @return {Function}
 *
 * @see https://github.com/jashkenas/underscore
 */ function throttle(func, wait, options) {
    var timeout, context, args, result;
    var previous = 0;
    if (!options) options = {};
    var later = function later() {
        previous = options.leading === false ? 0 : now();
        timeout = null;
        result = func.apply(context, args);
        if (!timeout) context = args = null;
    };
    var throttled = function throttled() {
        var at = now();
        if (!previous && options.leading === false) previous = at;
        var remaining = wait - (at - previous);
        context = this;
        args = arguments;
        if (remaining <= 0 || remaining > wait) {
            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }
            previous = at;
            result = func.apply(context, args);
            if (!timeout) context = args = null;
        } else if (!timeout && options.trailing !== false) timeout = setTimeout(later, remaining);
        return result;
    };
    throttled.cancel = function() {
        clearTimeout(timeout);
        previous = 0;
        timeout = context = args = null;
    };
    return throttled;
}
var MARGIN_TYPE = {
    ltr: [
        "marginLeft",
        "marginRight"
    ],
    rtl: [
        "marginRight",
        "marginLeft"
    ]
};
function Gaps(Glide, Components, Events) {
    var Gaps = {
        /**
     * Applies gaps between slides. First and last
     * slides do not receive it's edge margins.
     *
     * @param {HTMLCollection} slides
     * @return {Void}
     */ apply: function apply(slides) {
            for(var i = 0, len = slides.length; i < len; i++){
                var style = slides[i].style;
                var direction = Components.Direction.value;
                if (i !== 0) style[MARGIN_TYPE[direction][0]] = "".concat(this.value / 2, "px");
                else style[MARGIN_TYPE[direction][0]] = "";
                if (i !== slides.length - 1) style[MARGIN_TYPE[direction][1]] = "".concat(this.value / 2, "px");
                else style[MARGIN_TYPE[direction][1]] = "";
            }
        },
        /**
     * Removes gaps from the slides.
     *
     * @param {HTMLCollection} slides
     * @returns {Void}
    */ remove: function remove(slides) {
            for(var i = 0, len = slides.length; i < len; i++){
                var style = slides[i].style;
                style.marginLeft = "";
                style.marginRight = "";
            }
        }
    };
    define(Gaps, "value", {
        /**
     * Gets value of the gap.
     *
     * @returns {Number}
     */ get: function get() {
            return toInt(Glide.settings.gap);
        }
    });
    define(Gaps, "grow", {
        /**
     * Gets additional dimensions value caused by gaps.
     * Used to increase width of the slides wrapper.
     *
     * @returns {Number}
     */ get: function get() {
            return Gaps.value * Components.Sizes.length;
        }
    });
    define(Gaps, "reductor", {
        /**
     * Gets reduction value caused by gaps.
     * Used to subtract width of the slides.
     *
     * @returns {Number}
     */ get: function get() {
            var perView = Glide.settings.perView;
            return Gaps.value * (perView - 1) / perView;
        }
    });
    /**
   * Apply calculated gaps:
   * - after building, so slides (including clones) will receive proper margins
   * - on updating via API, to recalculate gaps with new options
   */ Events.on([
        "build.after",
        "update"
    ], throttle(function() {
        Gaps.apply(Components.Html.wrapper.children);
    }, 30));
    /**
   * Remove gaps:
   * - on destroying to bring markup to its inital state
   */ Events.on("destroy", function() {
        Gaps.remove(Components.Html.wrapper.children);
    });
    return Gaps;
}
/**
 * Finds siblings nodes of the passed node.
 *
 * @param  {Element} node
 * @return {Array}
 */ function siblings(node) {
    if (node && node.parentNode) {
        var n = node.parentNode.firstChild;
        var matched = [];
        for(; n; n = n.nextSibling)if (n.nodeType === 1 && n !== node) matched.push(n);
        return matched;
    }
    return [];
}
/**
 * Checks if passed node exist and is a valid element.
 *
 * @param  {Element} node
 * @return {Boolean}
 */ function exist(node) {
    if (node && node instanceof window.HTMLElement) return true;
    return false;
}
/**
 * Coerces a NodeList to an Array.
 *
 * @param  {NodeList} nodeList
 * @return {Array}
 */ function toArray(nodeList) {
    return Array.prototype.slice.call(nodeList);
}
var TRACK_SELECTOR = '[data-glide-el="track"]';
function Html(Glide, Components, Events) {
    var Html = {
        /**
     * Setup slider HTML nodes.
     *
     * @param {Glide} glide
     */ mount: function mount() {
            this.root = Glide.selector;
            this.track = this.root.querySelector(TRACK_SELECTOR);
            this.collectSlides();
        },
        /**
     * Collect slides
     */ collectSlides: function collectSlides() {
            this.slides = toArray(this.wrapper.children).filter(function(slide) {
                return !slide.classList.contains(Glide.settings.classes.slide.clone);
            });
        }
    };
    define(Html, "root", {
        /**
     * Gets node of the glide main element.
     *
     * @return {Object}
     */ get: function get() {
            return Html._r;
        },
        /**
     * Sets node of the glide main element.
     *
     * @return {Object}
     */ set: function set(r) {
            if (isString(r)) r = document.querySelector(r);
            if (exist(r)) Html._r = r;
            else warn("Root element must be a existing Html node");
        }
    });
    define(Html, "track", {
        /**
     * Gets node of the glide track with slides.
     *
     * @return {Object}
     */ get: function get() {
            return Html._t;
        },
        /**
     * Sets node of the glide track with slides.
     *
     * @return {Object}
     */ set: function set(t) {
            if (exist(t)) Html._t = t;
            else warn("Could not find track element. Please use ".concat(TRACK_SELECTOR, " attribute."));
        }
    });
    define(Html, "wrapper", {
        /**
     * Gets node of the slides wrapper.
     *
     * @return {Object}
     */ get: function get() {
            return Html.track.children[0];
        }
    });
    /**
   * Add/remove/reorder dynamic slides
   */ Events.on("update", function() {
        Html.collectSlides();
    });
    return Html;
}
function Peek(Glide, Components, Events) {
    var Peek = {
        /**
     * Setups how much to peek based on settings.
     *
     * @return {Void}
     */ mount: function mount() {
            this.value = Glide.settings.peek;
        }
    };
    define(Peek, "value", {
        /**
     * Gets value of the peek.
     *
     * @returns {Number|Object}
     */ get: function get() {
            return Peek._v;
        },
        /**
     * Sets value of the peek.
     *
     * @param {Number|Object} value
     * @return {Void}
     */ set: function set(value) {
            if (isObject(value)) {
                value.before = toInt(value.before);
                value.after = toInt(value.after);
            } else value = toInt(value);
            Peek._v = value;
        }
    });
    define(Peek, "reductor", {
        /**
     * Gets reduction value caused by peek.
     *
     * @returns {Number}
     */ get: function get() {
            var value = Peek.value;
            var perView = Glide.settings.perView;
            if (isObject(value)) return value.before / perView + value.after / perView;
            return value * 2 / perView;
        }
    });
    /**
   * Recalculate peeking sizes on:
   * - when resizing window to update to proper percents
   */ Events.on([
        "resize",
        "update"
    ], function() {
        Peek.mount();
    });
    return Peek;
}
function Move(Glide, Components, Events) {
    var Move = {
        /**
     * Constructs move component.
     *
     * @returns {Void}
     */ mount: function mount() {
            this._o = 0;
        },
        /**
     * Calculates a movement value based on passed offset and currently active index.
     *
     * @param  {Number} offset
     * @return {Void}
     */ make: function make() {
            var _this = this;
            var offset = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
            this.offset = offset;
            Events.emit("move", {
                movement: this.value
            });
            Components.Transition.after(function() {
                Events.emit("move.after", {
                    movement: _this.value
                });
            });
        }
    };
    define(Move, "offset", {
        /**
     * Gets an offset value used to modify current translate.
     *
     * @return {Object}
     */ get: function get() {
            return Move._o;
        },
        /**
     * Sets an offset value used to modify current translate.
     *
     * @return {Object}
     */ set: function set(value) {
            Move._o = !isUndefined(value) ? toInt(value) : 0;
        }
    });
    define(Move, "translate", {
        /**
     * Gets a raw movement value.
     *
     * @return {Number}
     */ get: function get() {
            return Components.Sizes.slideWidth * Glide.index;
        }
    });
    define(Move, "value", {
        /**
     * Gets an actual movement value corrected by offset.
     *
     * @return {Number}
     */ get: function get() {
            var offset = this.offset;
            var translate = this.translate;
            if (Components.Direction.is("rtl")) return translate + offset;
            return translate - offset;
        }
    });
    /**
   * Make movement to proper slide on:
   * - before build, so glide will start at `startAt` index
   * - on each standard run to move to newly calculated index
   */ Events.on([
        "build.before",
        "run"
    ], function() {
        Move.make();
    });
    return Move;
}
function Sizes(Glide, Components, Events) {
    var Sizes = {
        /**
     * Setups dimensions of slides.
     *
     * @return {Void}
     */ setupSlides: function setupSlides() {
            var width = "".concat(this.slideWidth, "px");
            var slides = Components.Html.slides;
            for(var i = 0; i < slides.length; i++)slides[i].style.width = width;
        },
        /**
     * Setups dimensions of slides wrapper.
     *
     * @return {Void}
     */ setupWrapper: function setupWrapper() {
            Components.Html.wrapper.style.width = "".concat(this.wrapperSize, "px");
        },
        /**
     * Removes applied styles from HTML elements.
     *
     * @returns {Void}
     */ remove: function remove() {
            var slides = Components.Html.slides;
            for(var i = 0; i < slides.length; i++)slides[i].style.width = "";
            Components.Html.wrapper.style.width = "";
        }
    };
    define(Sizes, "length", {
        /**
     * Gets count number of the slides.
     *
     * @return {Number}
     */ get: function get() {
            return Components.Html.slides.length;
        }
    });
    define(Sizes, "width", {
        /**
     * Gets width value of the slider (visible area).
     *
     * @return {Number}
     */ get: function get() {
            return Components.Html.track.offsetWidth;
        }
    });
    define(Sizes, "wrapperSize", {
        /**
     * Gets size of the slides wrapper.
     *
     * @return {Number}
     */ get: function get() {
            return Sizes.slideWidth * Sizes.length + Components.Gaps.grow + Components.Clones.grow;
        }
    });
    define(Sizes, "slideWidth", {
        /**
     * Gets width value of a single slide.
     *
     * @return {Number}
     */ get: function get() {
            return Sizes.width / Glide.settings.perView - Components.Peek.reductor - Components.Gaps.reductor;
        }
    });
    /**
   * Apply calculated glide's dimensions:
   * - before building, so other dimensions (e.g. translate) will be calculated propertly
   * - when resizing window to recalculate sildes dimensions
   * - on updating via API, to calculate dimensions based on new options
   */ Events.on([
        "build.before",
        "resize",
        "update"
    ], function() {
        Sizes.setupSlides();
        Sizes.setupWrapper();
    });
    /**
   * Remove calculated glide's dimensions:
   * - on destoting to bring markup to its inital state
   */ Events.on("destroy", function() {
        Sizes.remove();
    });
    return Sizes;
}
function Build(Glide, Components, Events) {
    var Build = {
        /**
     * Init glide building. Adds classes, sets
     * dimensions and setups initial state.
     *
     * @return {Void}
     */ mount: function mount() {
            Events.emit("build.before");
            this.typeClass();
            this.activeClass();
            Events.emit("build.after");
        },
        /**
     * Adds `type` class to the glide element.
     *
     * @return {Void}
     */ typeClass: function typeClass() {
            Components.Html.root.classList.add(Glide.settings.classes.type[Glide.settings.type]);
        },
        /**
     * Sets active class to current slide.
     *
     * @return {Void}
     */ activeClass: function activeClass() {
            var classes = Glide.settings.classes;
            var slide = Components.Html.slides[Glide.index];
            if (slide) {
                slide.classList.add(classes.slide.active);
                siblings(slide).forEach(function(sibling) {
                    sibling.classList.remove(classes.slide.active);
                });
            }
        },
        /**
     * Removes HTML classes applied at building.
     *
     * @return {Void}
     */ removeClasses: function removeClasses() {
            var _Glide$settings$class = Glide.settings.classes, type = _Glide$settings$class.type, slide = _Glide$settings$class.slide;
            Components.Html.root.classList.remove(type[Glide.settings.type]);
            Components.Html.slides.forEach(function(sibling) {
                sibling.classList.remove(slide.active);
            });
        }
    };
    /**
   * Clear building classes:
   * - on destroying to bring HTML to its initial state
   * - on updating to remove classes before remounting component
   */ Events.on([
        "destroy",
        "update"
    ], function() {
        Build.removeClasses();
    });
    /**
   * Remount component:
   * - on resizing of the window to calculate new dimensions
   * - on updating settings via API
   */ Events.on([
        "resize",
        "update"
    ], function() {
        Build.mount();
    });
    /**
   * Swap active class of current slide:
   * - after each move to the new index
   */ Events.on("move.after", function() {
        Build.activeClass();
    });
    return Build;
}
function Clones(Glide, Components, Events) {
    var Clones = {
        /**
     * Create pattern map and collect slides to be cloned.
     */ mount: function mount() {
            this.items = [];
            if (Glide.isType("carousel")) this.items = this.collect();
        },
        /**
     * Collect clones with pattern.
     *
     * @return {[]}
     */ collect: function collect() {
            var items = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];
            var slides = Components.Html.slides;
            var _Glide$settings = Glide.settings, perView = _Glide$settings.perView, classes = _Glide$settings.classes, cloningRatio = _Glide$settings.cloningRatio;
            if (slides.length !== 0) {
                var peekIncrementer = +!!Glide.settings.peek;
                var cloneCount = perView + peekIncrementer + Math.round(perView / 2);
                var append = slides.slice(0, cloneCount).reverse();
                var prepend = slides.slice(cloneCount * -1);
                for(var r = 0; r < Math.max(cloningRatio, Math.floor(perView / slides.length)); r++){
                    for(var i = 0; i < append.length; i++){
                        var clone = append[i].cloneNode(true);
                        clone.classList.add(classes.slide.clone);
                        items.push(clone);
                    }
                    for(var _i = 0; _i < prepend.length; _i++){
                        var _clone = prepend[_i].cloneNode(true);
                        _clone.classList.add(classes.slide.clone);
                        items.unshift(_clone);
                    }
                }
            }
            return items;
        },
        /**
     * Append cloned slides with generated pattern.
     *
     * @return {Void}
     */ append: function append() {
            var items = this.items;
            var _Components$Html = Components.Html, wrapper = _Components$Html.wrapper, slides = _Components$Html.slides;
            var half = Math.floor(items.length / 2);
            var prepend = items.slice(0, half).reverse();
            var append = items.slice(half * -1).reverse();
            var width = "".concat(Components.Sizes.slideWidth, "px");
            for(var i = 0; i < append.length; i++)wrapper.appendChild(append[i]);
            for(var _i2 = 0; _i2 < prepend.length; _i2++)wrapper.insertBefore(prepend[_i2], slides[0]);
            for(var _i3 = 0; _i3 < items.length; _i3++)items[_i3].style.width = width;
        },
        /**
     * Remove all cloned slides.
     *
     * @return {Void}
     */ remove: function remove() {
            var items = this.items;
            for(var i = 0; i < items.length; i++)Components.Html.wrapper.removeChild(items[i]);
        }
    };
    define(Clones, "grow", {
        /**
     * Gets additional dimensions value caused by clones.
     *
     * @return {Number}
     */ get: function get() {
            return (Components.Sizes.slideWidth + Components.Gaps.value) * Clones.items.length;
        }
    });
    /**
   * Append additional slide's clones:
   * - while glide's type is `carousel`
   */ Events.on("update", function() {
        Clones.remove();
        Clones.mount();
        Clones.append();
    });
    /**
   * Append additional slide's clones:
   * - while glide's type is `carousel`
   */ Events.on("build.before", function() {
        if (Glide.isType("carousel")) Clones.append();
    });
    /**
   * Remove clones HTMLElements:
   * - on destroying, to bring HTML to its initial state
   */ Events.on("destroy", function() {
        Clones.remove();
    });
    return Clones;
}
var EventsBinder = /*#__PURE__*/ function() {
    /**
   * Construct a EventsBinder instance.
   */ function EventsBinder() {
        var listeners = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
        _classCallCheck(this, EventsBinder);
        this.listeners = listeners;
    }
    /**
   * Adds events listeners to arrows HTML elements.
   *
   * @param  {String|Array} events
   * @param  {Element|Window|Document} el
   * @param  {Function} closure
   * @param  {Boolean|Object} capture
   * @return {Void}
   */ _createClass(EventsBinder, [
        {
            key: "on",
            value: function on(events, el, closure) {
                var capture = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
                if (isString(events)) events = [
                    events
                ];
                for(var i = 0; i < events.length; i++){
                    this.listeners[events[i]] = closure;
                    el.addEventListener(events[i], this.listeners[events[i]], capture);
                }
            }
        },
        {
            key: "off",
            value: function off(events, el) {
                var capture = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
                if (isString(events)) events = [
                    events
                ];
                for(var i = 0; i < events.length; i++)el.removeEventListener(events[i], this.listeners[events[i]], capture);
            }
        },
        {
            key: "destroy",
            value: function destroy() {
                delete this.listeners;
            }
        }
    ]);
    return EventsBinder;
}();
function Resize(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var Resize = {
        /**
     * Initializes window bindings.
     */ mount: function mount() {
            this.bind();
        },
        /**
     * Binds `rezsize` listener to the window.
     * It's a costly event, so we are debouncing it.
     *
     * @return {Void}
     */ bind: function bind() {
            Binder.on("resize", window, throttle(function() {
                Events.emit("resize");
            }, Glide.settings.throttle));
        },
        /**
     * Unbinds listeners from the window.
     *
     * @return {Void}
     */ unbind: function unbind() {
            Binder.off("resize", window);
        }
    };
    /**
   * Remove bindings from window:
   * - on destroying, to remove added EventListener
   */ Events.on("destroy", function() {
        Resize.unbind();
        Binder.destroy();
    });
    return Resize;
}
var VALID_DIRECTIONS = [
    "ltr",
    "rtl"
];
var FLIPED_MOVEMENTS = {
    ">": "<",
    "<": ">",
    "=": "="
};
function Direction(Glide, Components, Events) {
    var Direction = {
        /**
     * Setups gap value based on settings.
     *
     * @return {Void}
     */ mount: function mount() {
            this.value = Glide.settings.direction;
        },
        /**
     * Resolves pattern based on direction value
     *
     * @param {String} pattern
     * @returns {String}
     */ resolve: function resolve(pattern) {
            var token = pattern.slice(0, 1);
            if (this.is("rtl")) return pattern.split(token).join(FLIPED_MOVEMENTS[token]);
            return pattern;
        },
        /**
     * Checks value of direction mode.
     *
     * @param {String} direction
     * @returns {Boolean}
     */ is: function is(direction) {
            return this.value === direction;
        },
        /**
     * Applies direction class to the root HTML element.
     *
     * @return {Void}
     */ addClass: function addClass() {
            Components.Html.root.classList.add(Glide.settings.classes.direction[this.value]);
        },
        /**
     * Removes direction class from the root HTML element.
     *
     * @return {Void}
     */ removeClass: function removeClass() {
            Components.Html.root.classList.remove(Glide.settings.classes.direction[this.value]);
        }
    };
    define(Direction, "value", {
        /**
     * Gets value of the direction.
     *
     * @returns {Number}
     */ get: function get() {
            return Direction._v;
        },
        /**
     * Sets value of the direction.
     *
     * @param {String} value
     * @return {Void}
     */ set: function set(value) {
            if (VALID_DIRECTIONS.indexOf(value) > -1) Direction._v = value;
            else warn("Direction value must be `ltr` or `rtl`");
        }
    });
    /**
   * Clear direction class:
   * - on destroy to bring HTML to its initial state
   * - on update to remove class before reappling bellow
   */ Events.on([
        "destroy",
        "update"
    ], function() {
        Direction.removeClass();
    });
    /**
   * Remount component:
   * - on update to reflect changes in direction value
   */ Events.on("update", function() {
        Direction.mount();
    });
    /**
   * Apply direction class:
   * - before building to apply class for the first time
   * - on updating to reapply direction class that may changed
   */ Events.on([
        "build.before",
        "update"
    ], function() {
        Direction.addClass();
    });
    return Direction;
}
/**
 * Reflects value of glide movement.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function Rtl(Glide, Components) {
    return {
        /**
     * Negates the passed translate if glide is in RTL option.
     *
     * @param  {Number} translate
     * @return {Number}
     */ modify: function modify(translate) {
            if (Components.Direction.is("rtl")) return -translate;
            return translate;
        }
    };
}
/**
 * Updates glide movement with a `gap` settings.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function Gap(Glide, Components) {
    return {
        /**
     * Modifies passed translate value with number in the `gap` settings.
     *
     * @param  {Number} translate
     * @return {Number}
     */ modify: function modify(translate) {
            var multiplier = Math.floor(translate / Components.Sizes.slideWidth);
            return translate + Components.Gaps.value * multiplier;
        }
    };
}
/**
 * Updates glide movement with width of additional clones width.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function Grow(Glide, Components) {
    return {
        /**
     * Adds to the passed translate width of the half of clones.
     *
     * @param  {Number} translate
     * @return {Number}
     */ modify: function modify(translate) {
            return translate + Components.Clones.grow / 2;
        }
    };
}
/**
 * Updates glide movement with a `peek` settings.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function Peeking(Glide, Components) {
    return {
        /**
     * Modifies passed translate value with a `peek` setting.
     *
     * @param  {Number} translate
     * @return {Number}
     */ modify: function modify(translate) {
            if (Glide.settings.focusAt >= 0) {
                var peek = Components.Peek.value;
                if (isObject(peek)) return translate - peek.before;
                return translate - peek;
            }
            return translate;
        }
    };
}
/**
 * Updates glide movement with a `focusAt` settings.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function Focusing(Glide, Components) {
    return {
        /**
     * Modifies passed translate value with index in the `focusAt` setting.
     *
     * @param  {Number} translate
     * @return {Number}
     */ modify: function modify(translate) {
            var gap = Components.Gaps.value;
            var width = Components.Sizes.width;
            var focusAt = Glide.settings.focusAt;
            var slideWidth = Components.Sizes.slideWidth;
            if (focusAt === "center") return translate - (width / 2 - slideWidth / 2);
            return translate - slideWidth * focusAt - gap * focusAt;
        }
    };
}
/**
 * Applies diffrent transformers on translate value.
 *
 * @param  {Object} Glide
 * @param  {Object} Components
 * @return {Object}
 */ function mutator(Glide, Components, Events) {
    /**
   * Merge instance transformers with collection of default transformers.
   * It's important that the Rtl component be last on the list,
   * so it reflects all previous transformations.
   *
   * @type {Array}
   */ var TRANSFORMERS = [
        Gap,
        Grow,
        Peeking,
        Focusing
    ].concat(Glide._t, [
        Rtl
    ]);
    return {
        /**
     * Piplines translate value with registered transformers.
     *
     * @param  {Number} translate
     * @return {Number}
     */ mutate: function mutate(translate) {
            for(var i = 0; i < TRANSFORMERS.length; i++){
                var transformer = TRANSFORMERS[i];
                if (isFunction(transformer) && isFunction(transformer().modify)) translate = transformer(Glide, Components, Events).modify(translate);
                else warn("Transformer should be a function that returns an object with `modify()` method");
            }
            return translate;
        }
    };
}
function Translate(Glide, Components, Events) {
    var Translate = {
        /**
     * Sets value of translate on HTML element.
     *
     * @param {Number} value
     * @return {Void}
     */ set: function set(value) {
            var transform = mutator(Glide, Components).mutate(value);
            var translate3d = "translate3d(".concat(-1 * transform, "px, 0px, 0px)");
            Components.Html.wrapper.style.mozTransform = translate3d; // needed for supported Firefox 10-15
            Components.Html.wrapper.style.webkitTransform = translate3d; // needed for supported Chrome 10-35, Safari 5.1-8, and Opera 15-22
            Components.Html.wrapper.style.transform = translate3d;
        },
        /**
     * Removes value of translate from HTML element.
     *
     * @return {Void}
     */ remove: function remove() {
            Components.Html.wrapper.style.transform = "";
        },
        /**
     * @return {number}
     */ getStartIndex: function getStartIndex() {
            var length = Components.Sizes.length;
            var index = Glide.index;
            var perView = Glide.settings.perView;
            if (Components.Run.isOffset(">") || Components.Run.isOffset("|>")) return length + (index - perView);
             // "modulo length" converts an index that equals length to zero
            return (index + perView) % length;
        },
        /**
     * @return {number}
     */ getTravelDistance: function getTravelDistance() {
            var travelDistance = Components.Sizes.slideWidth * Glide.settings.perView;
            if (Components.Run.isOffset(">") || Components.Run.isOffset("|>")) // reverse travel distance so that we don't have to change subtract operations
            return travelDistance * -1;
            return travelDistance;
        }
    };
    /**
   * Set new translate value:
   * - on move to reflect index change
   * - on updating via API to reflect possible changes in options
   */ Events.on("move", function(context) {
        if (!Glide.isType("carousel") || !Components.Run.isOffset()) return Translate.set(context.movement);
        Components.Transition.after(function() {
            Events.emit("translate.jump");
            Translate.set(Components.Sizes.slideWidth * Glide.index);
        });
        var startWidth = Components.Sizes.slideWidth * Components.Translate.getStartIndex();
        return Translate.set(startWidth - Components.Translate.getTravelDistance());
    });
    /**
   * Remove translate:
   * - on destroying to bring markup to its inital state
   */ Events.on("destroy", function() {
        Translate.remove();
    });
    return Translate;
}
function Transition(Glide, Components, Events) {
    /**
   * Holds inactivity status of transition.
   * When true transition is not applied.
   *
   * @type {Boolean}
   */ var disabled = false;
    var Transition = {
        /**
     * Composes string of the CSS transition.
     *
     * @param {String} property
     * @return {String}
     */ compose: function compose(property) {
            var settings = Glide.settings;
            if (!disabled) return "".concat(property, " ").concat(this.duration, "ms ").concat(settings.animationTimingFunc);
            return "".concat(property, " 0ms ").concat(settings.animationTimingFunc);
        },
        /**
     * Sets value of transition on HTML element.
     *
     * @param {String=} property
     * @return {Void}
     */ set: function set() {
            var property = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "transform";
            Components.Html.wrapper.style.transition = this.compose(property);
        },
        /**
     * Removes value of transition from HTML element.
     *
     * @return {Void}
     */ remove: function remove() {
            Components.Html.wrapper.style.transition = "";
        },
        /**
     * Runs callback after animation.
     *
     * @param  {Function} callback
     * @return {Void}
     */ after: function after(callback) {
            setTimeout(function() {
                callback();
            }, this.duration);
        },
        /**
     * Enable transition.
     *
     * @return {Void}
     */ enable: function enable() {
            disabled = false;
            this.set();
        },
        /**
     * Disable transition.
     *
     * @return {Void}
     */ disable: function disable() {
            disabled = true;
            this.set();
        }
    };
    define(Transition, "duration", {
        /**
     * Gets duration of the transition based
     * on currently running animation type.
     *
     * @return {Number}
     */ get: function get() {
            var settings = Glide.settings;
            if (Glide.isType("slider") && Components.Run.offset) return settings.rewindDuration;
            return settings.animationDuration;
        }
    });
    /**
   * Set transition `style` value:
   * - on each moving, because it may be cleared by offset move
   */ Events.on("move", function() {
        Transition.set();
    });
    /**
   * Disable transition:
   * - before initial build to avoid transitioning from `0` to `startAt` index
   * - while resizing window and recalculating dimensions
   * - on jumping from offset transition at start and end edges in `carousel` type
   */ Events.on([
        "build.before",
        "resize",
        "translate.jump"
    ], function() {
        Transition.disable();
    });
    /**
   * Enable transition:
   * - on each running, because it may be disabled by offset move
   */ Events.on("run", function() {
        Transition.enable();
    });
    /**
   * Remove transition:
   * - on destroying to bring markup to its inital state
   */ Events.on("destroy", function() {
        Transition.remove();
    });
    return Transition;
}
/**
 * Test via a getter in the options object to see
 * if the passive property is accessed.
 *
 * @see https://github.com/WICG/EventListenerOptions/blob/gh-pages/explainer.md#feature-detection
 */ var supportsPassive = false;
try {
    var opts = Object.defineProperty({}, "passive", {
        get: function get() {
            supportsPassive = true;
        }
    });
    window.addEventListener("testPassive", null, opts);
    window.removeEventListener("testPassive", null, opts);
} catch (e) {}
var supportsPassive$1 = supportsPassive;
var START_EVENTS = [
    "touchstart",
    "mousedown"
];
var MOVE_EVENTS = [
    "touchmove",
    "mousemove"
];
var END_EVENTS = [
    "touchend",
    "touchcancel",
    "mouseup",
    "mouseleave"
];
var MOUSE_EVENTS = [
    "mousedown",
    "mousemove",
    "mouseup",
    "mouseleave"
];
function Swipe(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var swipeSin = 0;
    var swipeStartX = 0;
    var swipeStartY = 0;
    var disabled = false;
    var capture = supportsPassive$1 ? {
        passive: true
    } : false;
    var Swipe = {
        /**
     * Initializes swipe bindings.
     *
     * @return {Void}
     */ mount: function mount() {
            this.bindSwipeStart();
        },
        /**
     * Handler for `swipestart` event. Calculates entry points of the user's tap.
     *
     * @param {Object} event
     * @return {Void}
     */ start: function start(event) {
            if (!disabled && !Glide.disabled) {
                this.disable();
                var swipe = this.touches(event);
                swipeSin = null;
                swipeStartX = toInt(swipe.pageX);
                swipeStartY = toInt(swipe.pageY);
                this.bindSwipeMove();
                this.bindSwipeEnd();
                Events.emit("swipe.start");
            }
        },
        /**
     * Handler for `swipemove` event. Calculates user's tap angle and distance.
     *
     * @param {Object} event
     */ move: function move(event) {
            if (!Glide.disabled) {
                var _Glide$settings = Glide.settings, touchAngle = _Glide$settings.touchAngle, touchRatio = _Glide$settings.touchRatio, classes = _Glide$settings.classes;
                var swipe = this.touches(event);
                var subExSx = toInt(swipe.pageX) - swipeStartX;
                var subEySy = toInt(swipe.pageY) - swipeStartY;
                var powEX = Math.abs(subExSx << 2);
                var powEY = Math.abs(subEySy << 2);
                var swipeHypotenuse = Math.sqrt(powEX + powEY);
                var swipeCathetus = Math.sqrt(powEY);
                swipeSin = Math.asin(swipeCathetus / swipeHypotenuse);
                if (swipeSin * 180 / Math.PI < touchAngle) {
                    event.stopPropagation();
                    Components.Move.make(subExSx * toFloat(touchRatio));
                    Components.Html.root.classList.add(classes.dragging);
                    Events.emit("swipe.move");
                } else return false;
            }
        },
        /**
     * Handler for `swipeend` event. Finitializes user's tap and decides about glide move.
     *
     * @param {Object} event
     * @return {Void}
     */ end: function end(event) {
            if (!Glide.disabled) {
                var _Glide$settings2 = Glide.settings, perSwipe = _Glide$settings2.perSwipe, touchAngle = _Glide$settings2.touchAngle, classes = _Glide$settings2.classes;
                var swipe = this.touches(event);
                var threshold = this.threshold(event);
                var swipeDistance = swipe.pageX - swipeStartX;
                var swipeDeg = swipeSin * 180 / Math.PI;
                this.enable();
                if (swipeDistance > threshold && swipeDeg < touchAngle) Components.Run.make(Components.Direction.resolve("".concat(perSwipe, "<")));
                else if (swipeDistance < -threshold && swipeDeg < touchAngle) Components.Run.make(Components.Direction.resolve("".concat(perSwipe, ">")));
                else // While swipe don't reach distance apply previous transform.
                Components.Move.make();
                Components.Html.root.classList.remove(classes.dragging);
                this.unbindSwipeMove();
                this.unbindSwipeEnd();
                Events.emit("swipe.end");
            }
        },
        /**
     * Binds swipe's starting event.
     *
     * @return {Void}
     */ bindSwipeStart: function bindSwipeStart() {
            var _this = this;
            var _Glide$settings3 = Glide.settings, swipeThreshold = _Glide$settings3.swipeThreshold, dragThreshold = _Glide$settings3.dragThreshold;
            if (swipeThreshold) Binder.on(START_EVENTS[0], Components.Html.wrapper, function(event) {
                _this.start(event);
            }, capture);
            if (dragThreshold) Binder.on(START_EVENTS[1], Components.Html.wrapper, function(event) {
                _this.start(event);
            }, capture);
        },
        /**
     * Unbinds swipe's starting event.
     *
     * @return {Void}
     */ unbindSwipeStart: function unbindSwipeStart() {
            Binder.off(START_EVENTS[0], Components.Html.wrapper, capture);
            Binder.off(START_EVENTS[1], Components.Html.wrapper, capture);
        },
        /**
     * Binds swipe's moving event.
     *
     * @return {Void}
     */ bindSwipeMove: function bindSwipeMove() {
            var _this2 = this;
            Binder.on(MOVE_EVENTS, Components.Html.wrapper, throttle(function(event) {
                _this2.move(event);
            }, Glide.settings.throttle), capture);
        },
        /**
     * Unbinds swipe's moving event.
     *
     * @return {Void}
     */ unbindSwipeMove: function unbindSwipeMove() {
            Binder.off(MOVE_EVENTS, Components.Html.wrapper, capture);
        },
        /**
     * Binds swipe's ending event.
     *
     * @return {Void}
     */ bindSwipeEnd: function bindSwipeEnd() {
            var _this3 = this;
            Binder.on(END_EVENTS, Components.Html.wrapper, function(event) {
                _this3.end(event);
            });
        },
        /**
     * Unbinds swipe's ending event.
     *
     * @return {Void}
     */ unbindSwipeEnd: function unbindSwipeEnd() {
            Binder.off(END_EVENTS, Components.Html.wrapper);
        },
        /**
     * Normalizes event touches points accorting to different types.
     *
     * @param {Object} event
     */ touches: function touches(event) {
            if (MOUSE_EVENTS.indexOf(event.type) > -1) return event;
            return event.touches[0] || event.changedTouches[0];
        },
        /**
     * Gets value of minimum swipe distance settings based on event type.
     *
     * @return {Number}
     */ threshold: function threshold(event) {
            var settings = Glide.settings;
            if (MOUSE_EVENTS.indexOf(event.type) > -1) return settings.dragThreshold;
            return settings.swipeThreshold;
        },
        /**
     * Enables swipe event.
     *
     * @return {self}
     */ enable: function enable() {
            disabled = false;
            Components.Transition.enable();
            return this;
        },
        /**
     * Disables swipe event.
     *
     * @return {self}
     */ disable: function disable() {
            disabled = true;
            Components.Transition.disable();
            return this;
        }
    };
    /**
   * Add component class:
   * - after initial building
   */ Events.on("build.after", function() {
        Components.Html.root.classList.add(Glide.settings.classes.swipeable);
    });
    /**
   * Remove swiping bindings:
   * - on destroying, to remove added EventListeners
   */ Events.on("destroy", function() {
        Swipe.unbindSwipeStart();
        Swipe.unbindSwipeMove();
        Swipe.unbindSwipeEnd();
        Binder.destroy();
    });
    return Swipe;
}
function Images(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var Images = {
        /**
     * Binds listener to glide wrapper.
     *
     * @return {Void}
     */ mount: function mount() {
            this.bind();
        },
        /**
     * Binds `dragstart` event on wrapper to prevent dragging images.
     *
     * @return {Void}
     */ bind: function bind() {
            Binder.on("dragstart", Components.Html.wrapper, this.dragstart);
        },
        /**
     * Unbinds `dragstart` event on wrapper.
     *
     * @return {Void}
     */ unbind: function unbind() {
            Binder.off("dragstart", Components.Html.wrapper);
        },
        /**
     * Event handler. Prevents dragging.
     *
     * @return {Void}
     */ dragstart: function dragstart(event) {
            event.preventDefault();
        }
    };
    /**
   * Remove bindings from images:
   * - on destroying, to remove added EventListeners
   */ Events.on("destroy", function() {
        Images.unbind();
        Binder.destroy();
    });
    return Images;
}
function Anchors(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    /**
   * Holds detaching status of anchors.
   * Prevents detaching of already detached anchors.
   *
   * @private
   * @type {Boolean}
   */ var detached = false;
    /**
   * Holds preventing status of anchors.
   * If `true` redirection after click will be disabled.
   *
   * @private
   * @type {Boolean}
   */ var prevented = false;
    var Anchors = {
        /**
     * Setups a initial state of anchors component.
     *
     * @returns {Void}
     */ mount: function mount() {
            /**
       * Holds collection of anchors elements.
       *
       * @private
       * @type {HTMLCollection}
       */ this._a = Components.Html.wrapper.querySelectorAll("a");
            this.bind();
        },
        /**
     * Binds events to anchors inside a track.
     *
     * @return {Void}
     */ bind: function bind() {
            Binder.on("click", Components.Html.wrapper, this.click);
        },
        /**
     * Unbinds events attached to anchors inside a track.
     *
     * @return {Void}
     */ unbind: function unbind() {
            Binder.off("click", Components.Html.wrapper);
        },
        /**
     * Handler for click event. Prevents clicks when glide is in `prevent` status.
     *
     * @param  {Object} event
     * @return {Void}
     */ click: function click(event) {
            if (prevented) {
                event.stopPropagation();
                event.preventDefault();
            }
        },
        /**
     * Detaches anchors click event inside glide.
     *
     * @return {self}
     */ detach: function detach() {
            prevented = true;
            if (!detached) {
                for(var i = 0; i < this.items.length; i++)this.items[i].draggable = false;
                detached = true;
            }
            return this;
        },
        /**
     * Attaches anchors click events inside glide.
     *
     * @return {self}
     */ attach: function attach() {
            prevented = false;
            if (detached) {
                for(var i = 0; i < this.items.length; i++)this.items[i].draggable = true;
                detached = false;
            }
            return this;
        }
    };
    define(Anchors, "items", {
        /**
     * Gets collection of the arrows HTML elements.
     *
     * @return {HTMLElement[]}
     */ get: function get() {
            return Anchors._a;
        }
    });
    /**
   * Detach anchors inside slides:
   * - on swiping, so they won't redirect to its `href` attributes
   */ Events.on("swipe.move", function() {
        Anchors.detach();
    });
    /**
   * Attach anchors inside slides:
   * - after swiping and transitions ends, so they can redirect after click again
   */ Events.on("swipe.end", function() {
        Components.Transition.after(function() {
            Anchors.attach();
        });
    });
    /**
   * Unbind anchors inside slides:
   * - on destroying, to bring anchors to its initial state
   */ Events.on("destroy", function() {
        Anchors.attach();
        Anchors.unbind();
        Binder.destroy();
    });
    return Anchors;
}
var NAV_SELECTOR = '[data-glide-el="controls[nav]"]';
var CONTROLS_SELECTOR = '[data-glide-el^="controls"]';
var PREVIOUS_CONTROLS_SELECTOR = "".concat(CONTROLS_SELECTOR, ' [data-glide-dir*="<"]');
var NEXT_CONTROLS_SELECTOR = "".concat(CONTROLS_SELECTOR, ' [data-glide-dir*=">"]');
function Controls(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var capture = supportsPassive$1 ? {
        passive: true
    } : false;
    var Controls = {
        /**
     * Inits arrows. Binds events listeners
     * to the arrows HTML elements.
     *
     * @return {Void}
     */ mount: function mount() {
            /**
       * Collection of navigation HTML elements.
       *
       * @private
       * @type {HTMLCollection}
       */ this._n = Components.Html.root.querySelectorAll(NAV_SELECTOR);
            /**
       * Collection of controls HTML elements.
       *
       * @private
       * @type {HTMLCollection}
       */ this._c = Components.Html.root.querySelectorAll(CONTROLS_SELECTOR);
            /**
       * Collection of arrow control HTML elements.
       *
       * @private
       * @type {Object}
       */ this._arrowControls = {
                previous: Components.Html.root.querySelectorAll(PREVIOUS_CONTROLS_SELECTOR),
                next: Components.Html.root.querySelectorAll(NEXT_CONTROLS_SELECTOR)
            };
            this.addBindings();
        },
        /**
     * Sets active class to current slide.
     *
     * @return {Void}
     */ setActive: function setActive() {
            for(var i = 0; i < this._n.length; i++)this.addClass(this._n[i].children);
        },
        /**
     * Removes active class to current slide.
     *
     * @return {Void}
     */ removeActive: function removeActive() {
            for(var i = 0; i < this._n.length; i++)this.removeClass(this._n[i].children);
        },
        /**
     * Toggles active class on items inside navigation.
     *
     * @param  {HTMLElement} controls
     * @return {Void}
     */ addClass: function addClass(controls) {
            var settings = Glide.settings;
            var item = controls[Glide.index];
            if (!item) return;
            if (item) {
                item.classList.add(settings.classes.nav.active);
                siblings(item).forEach(function(sibling) {
                    sibling.classList.remove(settings.classes.nav.active);
                });
            }
        },
        /**
     * Removes active class from active control.
     *
     * @param  {HTMLElement} controls
     * @return {Void}
     */ removeClass: function removeClass(controls) {
            var item = controls[Glide.index];
            if (item) item.classList.remove(Glide.settings.classes.nav.active);
        },
        /**
     * Calculates, removes or adds `Glide.settings.classes.disabledArrow` class on the control arrows
     */ setArrowState: function setArrowState() {
            if (Glide.settings.rewind) return;
            var next = Controls._arrowControls.next;
            var previous = Controls._arrowControls.previous;
            this.resetArrowState(next, previous);
            if (Glide.index === 0) this.disableArrow(previous);
            if (Glide.index === Components.Run.length) this.disableArrow(next);
        },
        /**
     * Removes `Glide.settings.classes.disabledArrow` from given NodeList elements
     *
     * @param {NodeList[]} lists
     */ resetArrowState: function resetArrowState() {
            var settings = Glide.settings;
            for(var _len = arguments.length, lists = new Array(_len), _key = 0; _key < _len; _key++)lists[_key] = arguments[_key];
            lists.forEach(function(list) {
                toArray(list).forEach(function(element) {
                    element.classList.remove(settings.classes.arrow.disabled);
                });
            });
        },
        /**
     * Adds `Glide.settings.classes.disabledArrow` to given NodeList elements
     *
     * @param {NodeList[]} lists
     */ disableArrow: function disableArrow() {
            var settings = Glide.settings;
            for(var _len2 = arguments.length, lists = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++)lists[_key2] = arguments[_key2];
            lists.forEach(function(list) {
                toArray(list).forEach(function(element) {
                    element.classList.add(settings.classes.arrow.disabled);
                });
            });
        },
        /**
     * Adds handles to the each group of controls.
     *
     * @return {Void}
     */ addBindings: function addBindings() {
            for(var i = 0; i < this._c.length; i++)this.bind(this._c[i].children);
        },
        /**
     * Removes handles from the each group of controls.
     *
     * @return {Void}
     */ removeBindings: function removeBindings() {
            for(var i = 0; i < this._c.length; i++)this.unbind(this._c[i].children);
        },
        /**
     * Binds events to arrows HTML elements.
     *
     * @param {HTMLCollection} elements
     * @return {Void}
     */ bind: function bind(elements) {
            for(var i = 0; i < elements.length; i++){
                Binder.on("click", elements[i], this.click);
                Binder.on("touchstart", elements[i], this.click, capture);
            }
        },
        /**
     * Unbinds events binded to the arrows HTML elements.
     *
     * @param {HTMLCollection} elements
     * @return {Void}
     */ unbind: function unbind(elements) {
            for(var i = 0; i < elements.length; i++)Binder.off([
                "click",
                "touchstart"
            ], elements[i]);
        },
        /**
     * Handles `click` event on the arrows HTML elements.
     * Moves slider in direction given via the
     * `data-glide-dir` attribute.
     *
     * @param {Object} event
     * @return {void}
     */ click: function click(event) {
            if (!supportsPassive$1 && event.type === "touchstart") event.preventDefault();
            var direction = event.currentTarget.getAttribute("data-glide-dir");
            Components.Run.make(Components.Direction.resolve(direction));
        }
    };
    define(Controls, "items", {
        /**
     * Gets collection of the controls HTML elements.
     *
     * @return {HTMLElement[]}
     */ get: function get() {
            return Controls._c;
        }
    });
    /**
   * Swap active class of current navigation item:
   * - after mounting to set it to initial index
   * - after each move to the new index
   */ Events.on([
        "mount.after",
        "move.after"
    ], function() {
        Controls.setActive();
    });
    /**
   * Add or remove disabled class of arrow elements
   */ Events.on([
        "mount.after",
        "run"
    ], function() {
        Controls.setArrowState();
    });
    /**
   * Remove bindings and HTML Classes:
   * - on destroying, to bring markup to its initial state
   */ Events.on("destroy", function() {
        Controls.removeBindings();
        Controls.removeActive();
        Binder.destroy();
    });
    return Controls;
}
function Keyboard(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var Keyboard = {
        /**
     * Binds keyboard events on component mount.
     *
     * @return {Void}
     */ mount: function mount() {
            if (Glide.settings.keyboard) this.bind();
        },
        /**
     * Adds keyboard press events.
     *
     * @return {Void}
     */ bind: function bind() {
            Binder.on("keyup", document, this.press);
        },
        /**
     * Removes keyboard press events.
     *
     * @return {Void}
     */ unbind: function unbind() {
            Binder.off("keyup", document);
        },
        /**
     * Handles keyboard's arrows press and moving glide foward and backward.
     *
     * @param  {Object} event
     * @return {Void}
     */ press: function press(event) {
            var perSwipe = Glide.settings.perSwipe;
            if (event.code === "ArrowRight") Components.Run.make(Components.Direction.resolve("".concat(perSwipe, ">")));
            if (event.code === "ArrowLeft") Components.Run.make(Components.Direction.resolve("".concat(perSwipe, "<")));
        }
    };
    /**
   * Remove bindings from keyboard:
   * - on destroying to remove added events
   * - on updating to remove events before remounting
   */ Events.on([
        "destroy",
        "update"
    ], function() {
        Keyboard.unbind();
    });
    /**
   * Remount component
   * - on updating to reflect potential changes in settings
   */ Events.on("update", function() {
        Keyboard.mount();
    });
    /**
   * Destroy binder:
   * - on destroying to remove listeners
   */ Events.on("destroy", function() {
        Binder.destroy();
    });
    return Keyboard;
}
function Autoplay(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    var Autoplay = {
        /**
     * Initializes autoplaying and events.
     *
     * @return {Void}
     */ mount: function mount() {
            this.enable();
            this.start();
            if (Glide.settings.hoverpause) this.bind();
        },
        /**
     * Enables autoplaying
     *
     * @returns {Void}
     */ enable: function enable() {
            this._e = true;
        },
        /**
     * Disables autoplaying.
     *
     * @returns {Void}
     */ disable: function disable() {
            this._e = false;
        },
        /**
     * Starts autoplaying in configured interval.
     *
     * @param {Boolean|Number} force Run autoplaying with passed interval regardless of `autoplay` settings
     * @return {Void}
     */ start: function start() {
            var _this = this;
            if (!this._e) return;
            this.enable();
            if (Glide.settings.autoplay) {
                if (isUndefined(this._i)) this._i = setInterval(function() {
                    _this.stop();
                    Components.Run.make(">");
                    _this.start();
                    Events.emit("autoplay");
                }, this.time);
            }
        },
        /**
     * Stops autorunning of the glide.
     *
     * @return {Void}
     */ stop: function stop() {
            this._i = clearInterval(this._i);
        },
        /**
     * Stops autoplaying while mouse is over glide's area.
     *
     * @return {Void}
     */ bind: function bind() {
            var _this2 = this;
            Binder.on("mouseover", Components.Html.root, function() {
                if (_this2._e) _this2.stop();
            });
            Binder.on("mouseout", Components.Html.root, function() {
                if (_this2._e) _this2.start();
            });
        },
        /**
     * Unbind mouseover events.
     *
     * @returns {Void}
     */ unbind: function unbind() {
            Binder.off([
                "mouseover",
                "mouseout"
            ], Components.Html.root);
        }
    };
    define(Autoplay, "time", {
        /**
     * Gets time period value for the autoplay interval. Prioritizes
     * times in `data-glide-autoplay` attrubutes over options.
     *
     * @return {Number}
     */ get: function get() {
            var autoplay = Components.Html.slides[Glide.index].getAttribute("data-glide-autoplay");
            if (autoplay) return toInt(autoplay);
            return toInt(Glide.settings.autoplay);
        }
    });
    /**
   * Stop autoplaying and unbind events:
   * - on destroying, to clear defined interval
   * - on updating via API to reset interval that may changed
   */ Events.on([
        "destroy",
        "update"
    ], function() {
        Autoplay.unbind();
    });
    /**
   * Stop autoplaying:
   * - before each run, to restart autoplaying
   * - on pausing via API
   * - on destroying, to clear defined interval
   * - while starting a swipe
   * - on updating via API to reset interval that may changed
   */ Events.on([
        "run.before",
        "swipe.start",
        "update"
    ], function() {
        Autoplay.stop();
    });
    Events.on([
        "pause",
        "destroy"
    ], function() {
        Autoplay.disable();
        Autoplay.stop();
    });
    /**
   * Start autoplaying:
   * - after each run, to restart autoplaying
   * - on playing via API
   * - while ending a swipe
   */ Events.on([
        "run.after",
        "swipe.end"
    ], function() {
        Autoplay.start();
    });
    /**
   * Start autoplaying:
   * - after each run, to restart autoplaying
   * - on playing via API
   * - while ending a swipe
   */ Events.on([
        "play"
    ], function() {
        Autoplay.enable();
        Autoplay.start();
    });
    /**
   * Remount autoplaying:
   * - on updating via API to reset interval that may changed
   */ Events.on("update", function() {
        Autoplay.mount();
    });
    /**
   * Destroy a binder:
   * - on destroying glide instance to clearup listeners
   */ Events.on("destroy", function() {
        Binder.destroy();
    });
    return Autoplay;
}
/**
 * Sorts keys of breakpoint object so they will be ordered from lower to bigger.
 *
 * @param {Object} points
 * @returns {Object}
 */ function sortBreakpoints(points) {
    if (isObject(points)) return sortKeys(points);
    else warn("Breakpoints option must be an object");
    return {};
}
function Breakpoints(Glide, Components, Events) {
    /**
   * Instance of the binder for DOM Events.
   *
   * @type {EventsBinder}
   */ var Binder = new EventsBinder();
    /**
   * Holds reference to settings.
   *
   * @type {Object}
   */ var settings = Glide.settings;
    /**
   * Holds reference to breakpoints object in settings. Sorts breakpoints
   * from smaller to larger. It is required in order to proper
   * matching currently active breakpoint settings.
   *
   * @type {Object}
   */ var points = sortBreakpoints(settings.breakpoints);
    /**
   * Cache initial settings before overwritting.
   *
   * @type {Object}
   */ var defaults = Object.assign({}, settings);
    var Breakpoints = {
        /**
     * Matches settings for currectly matching media breakpoint.
     *
     * @param {Object} points
     * @returns {Object}
     */ match: function match(points) {
            if (typeof window.matchMedia !== "undefined") {
                for(var point in points)if (points.hasOwnProperty(point)) {
                    if (window.matchMedia("(max-width: ".concat(point, "px)")).matches) return points[point];
                }
            }
            return defaults;
        }
    };
    /**
   * Overwrite instance settings with currently matching breakpoint settings.
   * This happens right after component initialization.
   */ Object.assign(settings, Breakpoints.match(points));
    /**
   * Update glide with settings of matched brekpoint:
   * - window resize to update slider
   */ Binder.on("resize", window, throttle(function() {
        Glide.settings = mergeOptions(settings, Breakpoints.match(points));
    }, Glide.settings.throttle));
    /**
   * Resort and update default settings:
   * - on reinit via API, so breakpoint matching will be performed with options
   */ Events.on("update", function() {
        points = sortBreakpoints(points);
        defaults = Object.assign({}, settings);
    });
    /**
   * Unbind resize listener:
   * - on destroying, to bring markup to its initial state
   */ Events.on("destroy", function() {
        Binder.off("resize", window);
    });
    return Breakpoints;
}
var COMPONENTS = {
    // Required
    Html: Html,
    Translate: Translate,
    Transition: Transition,
    Direction: Direction,
    Peek: Peek,
    Sizes: Sizes,
    Gaps: Gaps,
    Move: Move,
    Clones: Clones,
    Resize: Resize,
    Build: Build,
    Run: Run,
    // Optional
    Swipe: Swipe,
    Images: Images,
    Anchors: Anchors,
    Controls: Controls,
    Keyboard: Keyboard,
    Autoplay: Autoplay,
    Breakpoints: Breakpoints
};
var Glide = /*#__PURE__*/ function(_Core) {
    _inherits(Glide, _Core);
    var _super = _createSuper(Glide);
    function Glide() {
        _classCallCheck(this, Glide);
        return _super.apply(this, arguments);
    }
    _createClass(Glide, [
        {
            key: "mount",
            value: function mount() {
                var extensions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
                return _get(_getPrototypeOf(Glide.prototype), "mount", this).call(this, Object.assign({}, COMPONENTS, extensions));
            }
        }
    ]);
    return Glide;
}(Glide$1);

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"aRzML":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "default", ()=>marquee);
// @ts-check
/**
 * Shorthand for `document.getElementsByClassName`
 *
 * @param {String} selClass - The selector's class
 * @param {Element|HTMLElement|Document} [parent=document] - Parent element
 *
 * @returns {HTMLCollectionOf<Element>} - The selected elements
 */ function byClass(selClass, parent = document) {
    return parent.getElementsByClassName(selClass);
}
/**
 * Shorthand for `document.querySelector`
 *
 * @param {String} selector - Selector
 * @param {Element|HTMLElement|Document} [parent=document] - Parent element
 *
 * @returns {Element|HTMLElementTagNameMap|SVGElementTagNameMap|null} - The selected element
 */ function query(selector, parent = document) {
    return parent.querySelector(selector);
}
/**
 * Shorthand for `document.querySelectorAll`
 *
 * @param {String} selector - Selector
 * @param {Element|HTMLElement|Document} [parent=document] - Parent element
 *
 * @returns {NodeList} - The selected element
 */ function queryAll(selector, parent = document) {
    return parent.querySelectorAll(selector);
}
// @ts-check
/**
 * Foreach polyfill for NodeList and HTMLCollection
 * https://toddmotto.com/ditch-the-array-foreach-call-nodelist-hack/
 *
 * @param {Array<any>|NodeList|HTMLCollection} els - A list of elements
 * @param {foreachCB} fn - Callback containing ( value, index ) as arguments
 * @param {Function} [scope] - Scope
 */ function forEachHTML(els, fn, scope) {
    for(let i = 0, numEls = els.length; i < numEls; i++)fn.call(scope, els[i], i);
}
// @ts-check
/**
 * Shorthand for `element.classList.add`, works with multiple nodes
 *
 * @param {Element|HTMLElement|HTMLCollection|NodeList} el - A list of elements
 * @param {...String} classes - Classes to add
 */ function addClass(el, ...classes) {
    // @ts-ignore
    if (el.length === undefined) // @ts-ignore
    addClassEl(el, ...classes);
    else // @ts-ignore
    forEachHTML(el, (currEl)=>{
        addClassEl(currEl, ...classes);
    });
    /**
   * Adds classes to a single element
   *
   * @param {Element|HTMLElement} elem - An HTML element
   * @param {...String} remClass - Classes to add
   */ function addClassEl(elem, ...remClass) {
        remClass.forEach((singleClass)=>{
            elem.classList.add(singleClass);
        });
    }
}
// @ts-check
/**
 * Shorthand for `element.addEventListener`
 *
 * @param {Element|HTMLElement|Window|Document|MediaQueryList} el - A list of elements
 * @param {String} ev - Event's name
 * @param {EventListenerOrEventListenerObject} fn - Event's function
 * @param {Object} [opts] - Optional event options
 */ function addEvent(el, ev, fn, opts) {
    el.addEventListener(ev, fn, opts);
}
/**
 * Shorthand for `element.removeEventListener`
 *
 * @param {Element|HTMLElement|Window|Document|MediaQueryList} el - A list of elements
 * @param {String} ev - Event's name
 * @param {EventListenerOrEventListenerObject} fn - Event's function
 * @param {Object} [opts] - Optional event options
 */ function removeEvent(el, ev, fn, opts) {
    el.removeEventListener(ev, fn, opts);
}
// @ts-check
/**
 * Shorthand for `element.getAttribute`
 *
 * @param {Element|HTMLElement} el - An HTML element
 * @param {String} attr - The attribute to retrieve
 *
 * @returns {String|null} - The attribute's value
 */ function getAttr(el, attr) {
    return el.getAttribute(attr);
}
/**
 * Shorthand for `element.setAttribute`
 *
 * @param {Element|HTMLElement} el - An HTML element
 * @param {String} attr - The attribute to retrieve
 * @param {String} val - The value to set to the attribute
 */ function setAttr(el, attr, val) {
    el.setAttribute(attr, val);
}
/**
 * Shorthand for `element.removeAttribute`
 *
 * @param {Element|HTMLElement} el - An HTML element
 * @param {String} attr - The attribute to remove
 */ function remAttr(el, attr) {
    el.removeAttribute(attr);
}
/**
 * @typedef defaultOptions
 * @property {String} [css3easing='linear'] - A css3 transtion timing
 * @property {Number} [delayBeforeStart=1000] - Time in milliseconds before the marquee starts animating
 * @property {String} [direction='left'] - Direction towards which the marquee will animate ` 'left' | 'right' | 'up' | 'down'`
 * @property {Boolean} [duplicated=false] - Should the marquee be duplicated to show an effect of continuous flow. Use this only when the text is shorter than the container
 * @property {Number} [duration=5000] - Duration in milliseconds in which you want your element to travel
 * @property {Number} [gap=20] - Gap in pixels between the tickers. Will work only when the `duplicated` option is set to `true`
 * @property {Boolean} [pauseOnHover=false] - Pause the marquee on hover
 * @property {Boolean} [recalcResize=false] - Recalculate the marquee position on resize (breaks compatibility with jquery.marquee)
 * @property {Number} [speed=0] - Speed will override duration. Speed allows you to set a relatively constant marquee speed regardless of the width of the containing element. Speed is measured in pixels/second
 * @property {Boolean} [startVisible=false] - The marquee will be visible from the start if set to `true`
 */ const defOpts = {
    css3easing: "linear",
    delayBeforeStart: 1000,
    direction: "left",
    duplicated: false,
    duration: 5000,
    gap: 20,
    pauseOnHover: false,
    recalcResize: false,
    speed: 0,
    startVisible: false
};
let instances = 0;
/**
 * Vanilla js marquee based on jQuery.marquee
 * https://github.com/aamirafridi/jQuery.Marquee
 */ class marquee {
    /**
   * Constructor
   *
   * @param {Element} el - The element where the marquee is applied
   * @param {defaultOptions} opts - the options
   */ constructor(el, opts){
        if (typeof el === "undefined") throw new Error("el cannot be undefined");
        if (typeof el === "string") throw new Error("el cannot be just a selector");
        if (el === null) throw new Error("el cannot be null");
        opts = {
            ...defOpts,
            ...opts
        };
        this.el = el;
        this._loopCount = 3;
        // Check for data-option since they have top priority
        for(const option in defOpts){
            let currData = getAttr(el, `data-${defOpts[option]}`);
            if (currData !== null && currData !== "") {
                if (currData === "true" || currData === "false") currData = Boolean(currData);
                opts[option] = currData;
            }
        }
        // Reintroduce speed as an option. It calculates duration as a factor of the container width
        // measured in pixels per second.
        if (opts.speed) opts.duration = parseInt(el.clientWidth) / opts.speed * 1000;
        // no gap if not duplicated
        opts.gap = opts.duplicated ? parseInt(opts.gap) : 0;
        // wrap inner content into a div
        el.innerHTML = `<div class="js-marquee">${el.innerHTML}</div>`;
        // Make a copy of the element
        const marq = byClass("js-marquee", el)[0];
        marq.style.marginRight = `${opts.gap}px`;
        marq.style.willChange = "transform";
        marq.style.float = "left";
        if (opts.duplicated) el.appendChild(marq.cloneNode(true));
        // wrap both inner elements into one div
        el.innerHTML = `<div style="width:100000px" class="js-marquee-wrapper">${el.innerHTML}</div>`;
        // Save the reference of the wrapper
        const marqWrap = byClass("js-marquee-wrapper", el)[0], vertical = opts.direction === "up" || opts.direction === "down";
        this._marqWrap = marqWrap;
        this._vertical = vertical;
        this._duration = opts.duration;
        this._opts = opts;
        this._calcSizes();
        const animationName = `marqueeAnimation-${Math.floor(Math.random() * 10000000)}`, animStr = this._animationStr(animationName, opts.duration / 1000, opts.delayBeforeStart / 1000, "infinite");
        this._animName = animationName;
        this._animStr = animStr;
        // if duplicated option is set to true than position the wrapper
        if (opts.duplicated) {
            if (vertical) {
                if (opts.startVisible) this._marqWrap.style.transform = "translateY(0px)";
                else this._marqWrap.style.transform = `translateY(${opts.direction === "up" ? this._contHeight : -1 * (this._elHeight * 2 - opts.gap)}px)`;
            } else if (opts.startVisible) this._marqWrap.style.transform = "translateX(0px)";
            else this._marqWrap.style.transform = `translateX(${opts.direction === "left" ? this._contWidth : -1 * (this._elWidth * 2 - opts.gap)}px)`;
            // If the text starts out visible we can skip the two initial loops
            if (!opts.startVisible) this._loopCount = 1;
        } else if (opts.startVisible) // We only have two different loops if marquee is duplicated and starts visible
        this._loopCount = 2;
        else if (vertical) this._repositionVert();
        else this._repositionHor();
        addEvent(this.el, "pause", this.pause.bind(this));
        addEvent(this.el, "resume", this.resume.bind(this));
        if (opts.pauseOnHover) {
            addEvent(this.el, "mouseover", this.pause.bind(this));
            addEvent(this.el, "mouseout", this.resume.bind(this));
        }
        /**
     * Method for animation end event
     */ this._animEnd = ()=>{
            this._animate(vertical);
            this.el.dispatchEvent(new CustomEvent("finished"));
        };
        this._instance = instances;
        instances++;
        this._animate(vertical);
        if (opts.recalcResize) addEvent(window, "resize", this._recalcResize.bind(this));
    }
    /**
   * Build the css string for the animation
   *
   * @privte
   * @param {String} [name=''] - animation name
   * @param {Number} [duration=0] - Animation duration (in s)
   * @param {Number} [delay=0] - Animation delay before starting (in s)
   * @param {String} [loops=''] - Animation iterations
   *
   * @returns {String} css animation string
   */ _animationStr(name = "", duration = 0, delay = 0, loops = "") {
        return `${name} ${duration}s ${delay}s ${loops} ${this._opts.css3easing}`;
    }
    /**
   * Animation of the marquee
   *
   * @private
   * @param {Boolean} vertical - Vertical direction
   */ _animate(vertical = false) {
        const opts = this._opts;
        if (opts.duplicated) {
            // When duplicated, the first loop will be scroll longer so double the duration
            if (this._loopCount === 1) {
                let duration = opts.duration;
                if (vertical) duration = opts.direction === "up" ? duration + this._contHeight / (this._elHeight / duration) : duration * 2;
                else duration = opts.direction === "left" ? duration + this._contWidth / (this._elWidth / duration) : duration * 2;
                this._animStr = this._animationStr(this._animName, duration / 1000, opts.delayBeforeStart / 1000);
            // On 2nd loop things back to normal, normal duration for the rest of animations
            } else if (this._loopCount === 2) {
                this._animName = `${this._animName}0`;
                this._animStr = this._animationStr(this._animName, opts.duration / 1000, 0, "infinite");
            }
            this._loopCount++;
        }
        let animationCss = "";
        if (vertical) {
            if (opts.duplicated) {
                // Adjust the starting point of animation only when first loops finishes
                if (this._loopCount > 2) this._marqWrap.style.transform = `translateY(${opts.direction === "up" ? 0 : -1 * this._elHeight}px)`;
                animationCss = `translateY(${opts.direction === "up" ? -1 * this._elHeight : 0}px)`;
            } else if (opts.startVisible) {
                // This loop moves the marquee out of the container
                if (this._loopCount === 2) {
                    // Adjust the css3 animation as well
                    this._animStr = this._animationStr(this._animName, opts.duration / 1000, opts.delayBeforeStart / 1000);
                    animationCss = `translateY(${opts.direction === "up" ? -1 * this._elHeight : this._contHeight}px)`;
                    this._loopCount++;
                } else if (this._loopCount === 3) {
                    this._animName = `${this._animName}0`;
                    this._animStr = this._animationStr(this._animName, this._completeDuration / 1000, 0, "infinite");
                    this._repositionVert();
                }
            } else {
                this._repositionVert();
                animationCss = `translateY(${opts.direction === "up" ? -1 * this._marqWrap.clientHeight : this._contHeight}px)`;
            }
        } else {
            if (opts.duplicated) {
                // Adjust the starting point of animation only when first loops finishes
                if (this._loopCount > 2) this._marqWrap.style.transform = `translateX(${opts.direction === "left" ? 0 : -1 * this._elWidth}px)`;
                animationCss = `translateX(${opts.direction === "left" ? -1 * this._elWidth : 0}px)`;
            } else if (opts.startVisible) {
                // This loop moves the marquee out of the container
                if (this._loopCount === 2) {
                    // Adjust the css3 animation as well
                    this._animStr = this._animationStr(this._animName, opts.duration / 1000, opts.delayBeforeStart / 1000);
                    animationCss = `translateX(${opts.direction === "left" ? -1 * this._elWidth : this._contWidth}px)`;
                    this._loopCount++;
                } else if (this._loopCount === 3) {
                    // Adjust the animation
                    this._animName = `${this._animName}0`;
                    this._animStr = this._animationStr(this._animName, opts.duration / 1000, 0, "infinite");
                    this._repositionHor();
                }
            } else {
                this._repositionHor();
                animationCss = `translateX(${opts.direction === "left" ? -1 * this._elWidth : this._contWidth}px)`;
            }
        }
        // fire event
        this.el.dispatchEvent(new CustomEvent("beforeStarting"));
        // Append animation
        this._marqWrap.style.animation = this._animStr;
        const keyFrameCss = `@keyframes ${this._animName} {
        100% {
          transform: ${animationCss};
        }
      }`, styles = queryAll("style", this._marqWrap);
        if (styles.length) styles[styles.length - 1].innerHTML = keyFrameCss;
        else if (byClass(`marq-wrap-style-${this._instance}`).length) byClass(`marq-wrap-style-${this._instance}`)[0].innerHTML = keyFrameCss;
        else {
            const styleEl = document.createElement("style");
            addClass(styleEl, `marq-wrap-style-${this._instance}`);
            styleEl.innerHTML = keyFrameCss;
            query("head").appendChild(styleEl);
        }
        // Animation iteration event
        addEvent(this._marqWrap, "animationiteration", this._animIter.bind(this), {
            once: true
        });
        // Animation stopped
        addEvent(this._marqWrap, "animationend", this._animEnd.bind(this), {
            once: true
        });
        this._status = "running";
        setAttr(this.el, "data-runningStatus", "resumed");
    }
    /**
   * Event fired on Animation iteration
   *
   * @private
   */ _animIter() {
        this.el.dispatchEvent(new CustomEvent("finished"));
    }
    /**
   * Reposition the Wrapper vertically
   *
   * @private
   */ _repositionVert() {
        this._marqWrap.style.transform = `translateY(${this._opts.direction === "up" ? this._contHeight : this._elHeight * -1}px)`;
    }
    /**
   * Reposition the Wrapper horizontally
   *
   * @private
   */ _repositionHor() {
        this._marqWrap.style.transform = `translateX(${this._opts.direction === "left" ? this._contWidth : this._elWidth * -1}px)`;
    }
    /**
   * Calculates the speed and the dimension of the marquee
   *
   * @private
   */ _calcSizes() {
        const el = this.el, opts = this._opts;
        // If direction is up or down, get the height of main element
        if (this._vertical) {
            const contHeight = el.clientHeight;
            this._contHeight = contHeight;
            remAttr(this._marqWrap, "style");
            el.style.clientHeight = `${contHeight}px`;
            const marqs = byClass("js-marquee", el), marqNums = marqs.length - 1;
            // Change the CSS for js-marquee element
            forEachHTML(marqs, (currEl, ind)=>{
                currEl.style.float = "none";
                currEl.style.marginRight = "0px";
                // Remove bottom margin from 2nd element if duplicated
                if (opts.duplicated && ind === marqNums) currEl.style.marginBottom = "0px";
                else currEl.style.marginBottom = `${opts.gap}px`;
            });
            const elHeight = parseInt(marqs[0].clientHeight + opts.gap);
            this._elHeight = elHeight;
            // adjust the animation duration according to the text length
            if (opts.startVisible && !opts.duplicated) {
                // Compute the complete animation duration and save it for later reference
                // formula is to: (Height of the text node + height of the main container / Height of the main container) * duration;
                this._completeDuration = (elHeight + contHeight) / parseInt(contHeight) * this._duration; // eslint-disable-line max-len
                opts.duration = elHeight / parseInt(contHeight) * this._duration;
            } else opts.duration = elHeight / parseInt(contHeight) / parseInt(contHeight) * this._duration;
        } else {
            // Save the width of the each element so we can use it in animation
            const elWidth = parseInt(byClass("js-marquee", el)[0].clientWidth + opts.gap), contWidth = el.clientWidth;
            this._contWidth = contWidth;
            this._elWidth = elWidth;
            // adjust the animation duration according to the text length
            if (opts.startVisible && !opts.duplicated) {
                // Compute the complete animation duration and save it for later reference
                // formula is to: (Width of the text node + width of the main container / Width of the main container) * duration;
                this._completeDuration = (elWidth + contWidth) / parseInt(contWidth) * this._duration;
                // (Width of the text node / width of the main container) * duration
                opts.duration = elWidth / parseInt(contWidth) * this._duration;
            } else opts.duration = (elWidth + parseInt(contWidth)) / parseInt(contWidth) * this._duration; // eslint-disable-line max-len
        }
        // if duplicated then reduce the duration
        if (opts.duplicated) opts.duration = opts.duration / 2;
    }
    /**
   * Recalculates the dimensions and positon of the marquee on page resize
   *
   * @private
   */ _recalcResize() {
        this._calcSizes();
        this._loopCount = 2;
        this._animEnd();
    }
    /**
   * Pause the animation
   */ pause() {
        this._marqWrap.style.animationPlayState = "paused";
        this._status = "paused";
        setAttr(this.el, "data-runningStatus", "paused");
        this.el.dispatchEvent(new CustomEvent("paused"));
    }
    /**
   * Resume the animation
   */ resume() {
        this._marqWrap.style.animationPlayState = "running";
        this._status = "running";
        setAttr(this.el, "data-runningStatus", "resumed");
        this.el.dispatchEvent(new CustomEvent("resumed"));
    }
    /**
   * Toggle animation playing status
   */ toggle() {
        if (this._status === "paused") this.resume();
        else if (this._status === "running") this.pause();
    }
    /**
   * Destorys the instance and removes events
   */ destroy() {
        removeEvent(this.el, "pause", this.pause.bind(this));
        removeEvent(this.el, "resume", this.resume.bind(this));
        if (this._opts.pauseOnHover) {
            removeEvent(this.el, "mouseover", this.pause.bind(this));
            removeEvent(this.el, "mouseout", this.resume.bind(this));
        }
        removeEvent(this._marqWrap, "animationiteration", this._animIter.bind(this), {
            once: true
        });
        removeEvent(this._marqWrap, "animationend", this._animEnd.bind(this), {
            once: true
        });
        if (this._opts.recalcResize) removeEvent(window, "resize", this._recalcResize.bind(this));
    }
    /**
   * Forces a refresh (like recalcResize) but done manually
   */ refresh() {
        this._recalcResize();
    }
}

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"1vUc0":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "formEntry", ()=>formEntry);
const formEntry = (data)=>{
    // Success entry
    document.addEventListener("wpcf7mailsent", function(event) {
        var obj = event.detail.inputs;
        var result = Object.keys(obj).map((key)=>[
                Number(key),
                obj[key]
            ]);
        console.log("inputs = ", result);
        saveSuccessEntry(obj);
    }, false);
    async function saveSuccessEntry(inputsData) {
        let inputData = inputsData;
        let data = {
            method: "POST",
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            },
            body: JSON.stringify(inputData)
        };
        let response = await fetch(ajax_url.ajaxurl + "?action=form_entry_sucess", data);
    // let serverResponse = await response.text();
    }
    //   Fail Entry
    document.addEventListener("wpcf7mailfailed", function(event) {
        var obj = event.detail.inputs;
        var result = Object.keys(obj).map((key)=>[
                Number(key),
                obj[key]
            ]);
        saveFailEntry(obj);
    }, false);
    async function saveFailEntry(inputsData) {
        let inputData = inputsData;
        let data = {
            method: "POST",
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            },
            body: JSON.stringify(inputData)
        };
        let response = await fetch(ajax_url.ajaxurl + "?action=form_entry_fail", data);
    // let serverResponse = await response.text();
    }
};

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"9maqa":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "hoverOnButton", ()=>hoverOnButton);
var _utils = require("./utils");
const hoverOnButton = ()=>{
    let constBtns = (0, _utils.getElements)(".btn.no-text");
    if ((0, _utils.ifSelectorExist)(constBtns) && constBtns.length > 0) Array.from(constBtns).forEach((item)=>{
        item.addEventListener("mouseover", ()=>{
            let btnFadeIn = item.querySelector(".btn-fade-in");
            if ((0, _utils.ifSelectorExist)(btnFadeIn)) {
                btnFadeIn.classList.add("opacity-100");
                btnFadeIn.classList.remove("opacity-0");
                btnFadeIn.style.width = "28px";
                btnFadeIn.style.marginLeft = "8px";
            }
        });
        item.addEventListener("mouseout", ()=>{
            let btnFadeIn = item.querySelector(".btn-fade-in");
            if ((0, _utils.ifSelectorExist)(btnFadeIn)) {
                btnFadeIn.classList.remove("opacity-100");
                btnFadeIn.classList.add("opacity-0");
                btnFadeIn.style.width = "0px";
                btnFadeIn.style.marginLeft = "0px";
            }
        });
    });
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"dp06E":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "tocAnchor", ()=>tocAnchor);
var _utils = require("./utils");
const tocAnchor = ()=>{
    let tocLinks = (0, _utils.getElements)(".table_of_content a");
    if ((0, _utils.ifSelectorExist)(tocLinks)) Array.from(tocLinks).forEach((item)=>{
        item.addEventListener("click", (e)=>{
            e.preventDefault();
            const selector = item.getAttribute("href");
            const selectorItem = (0, _utils.getElement)(selector);
            selectorItem.style.backgroundColor = "#e3e3e3";
            selectorItem.style.transition = "0.5s all";
            setTimeout(()=>{
                selectorItem.style.backgroundColor = "transparent";
            }, 700);
            window.scrollTo({
                top: document.querySelector(selector).offsetTop - document.querySelector("header").offsetHeight,
                behavior: "smooth"
            });
        });
    });
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"9IJ1s":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "sentNewMessage", ()=>sentNewMessage);
var _utils = require("./utils");
const sentNewMessage = (formContainerSelector)=>{
    if ((0, _utils.ifSelectorExist)(document.querySelector(formContainerSelector))) {
        let submitButton = (0, _utils.getElement)("button", document.querySelector(formContainerSelector));
        submitButton.addEventListener("click", ()=>{
            document.addEventListener("wpcf7mailsent", function(event) {
                let contactSucessSelector = (0, _utils.getElement)(".contacts__success", document.querySelector(formContainerSelector));
                let formSelector = event.target;
                let disclaimerSelector = (0, _utils.getElement)(".disclaimer", document.querySelector(formContainerSelector));
                let formResponseOutputSelector = (0, _utils.getElement)(".wpcf7-response-output", document.querySelector(formContainerSelector));
                if (contactSucessSelector !== null && contactSucessSelector !== undefined) {
                    contactSucessSelector.style.display = "flex";
                    formSelector.style.display = "none";
                    formResponseOutputSelector.classList.toggle("hidden");
                    if ((0, _utils.ifSelectorExist)(disclaimerSelector)) disclaimerSelector.classList.add("hidden");
                }
            }, false);
            const wpcf7Elm = document.querySelector(".wpcf7");
            wpcf7Elm.addEventListener("wpcf7submit", function(event) {
                let acceptanceCheckbox = (0, _utils.getElement)(".wpcf7-acceptance input", document.querySelector(formContainerSelector));
                let acceptanceParent = (0, _utils.getElement)(".wpcf7-acceptance", document.querySelector(formContainerSelector));
                let disclaimerSelector = (0, _utils.getElement)(".disclaimer", document.querySelector(formContainerSelector));
                if ((0, _utils.ifSelectorExist)(acceptanceCheckbox)) {
                    if (!acceptanceCheckbox.checked) {
                        acceptanceParent.classList.add("acceptance-required");
                        if ((0, _utils.ifSelectorExist)(disclaimerSelector)) disclaimerSelector.classList.remove("hidden");
                    } else {
                        acceptanceParent.classList.remove("acceptance-required");
                        if ((0, _utils.ifSelectorExist)(disclaimerSelector)) disclaimerSelector.classList.add("hidden");
                    }
                }
            }, false);
            let acceptanceParent = (0, _utils.getElement)(".wpcf7-acceptance", document.querySelector(formContainerSelector));
            if ((0, _utils.ifSelectorExist)(acceptanceParent)) acceptanceParent.addEventListener("click", ()=>{
                acceptanceParent.classList.remove("acceptance-required");
            });
            let sentNewButtonSelector = (0, _utils.getElement)(".reset-form", document.querySelector(formContainerSelector));
            if ((0, _utils.ifSelectorExist)(sentNewButtonSelector)) sentNewButtonSelector.addEventListener("click", ()=>{
                let contactSucessSelector = (0, _utils.getElement)(".contacts__success", document.querySelector(formContainerSelector));
                let formSelector = (0, _utils.getElement)(".wpcf7-form", document.querySelector(formContainerSelector));
                let disclaimerSelector = (0, _utils.getElement)(".disclaimer", document.querySelector(formContainerSelector));
                if ((0, _utils.ifSelectorExist)(disclaimerSelector)) disclaimerSelector.classList.toggle("hidden");
                let formResponseOutputSelector = (0, _utils.getElement)(".wpcf7-response-output", document.querySelector(formContainerSelector));
                if ((0, _utils.ifSelectorExist)(formResponseOutputSelector)) formResponseOutputSelector.classList.add("hidden");
                if ((0, _utils.ifSelectorExist)(contactSucessSelector)) (0, _utils.slideUp)(contactSucessSelector);
                if ((0, _utils.ifSelectorExist)(formSelector)) (0, _utils.slideDown)(formSelector);
            });
        });
    }
    // Redirect after form submit
    document.addEventListener("wpcf7mailsent", function(event) {
        // Function to handle form submission
        function handleFormSubmission(formId) {
            // Loop through the array to find a match
            for(var i = 0; i < cf7RedirectToArray.length; i++)if (cf7RedirectToArray[i].select_form === formId) {
                // Redirect to the corresponding link
                window.location.href = cf7RedirectToArray[i].link_to_redirect_after_submit;
                break; // Exit the loop once a match is found
            }
        }
        var formId = event.detail.contactFormId;
        handleFormSubmission(formId);
    }, false);
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"bvTDu":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "gclid", ()=>gclid);
var _utils = require("./utils");
const gclid = ()=>{
    function getParam(p) {
        var match = RegExp("[?&]" + p + "=([^&]*)").exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, " "));
    }
    function getExpiryRecord(value) {
        var expiryPeriod = 7776000000; // 90 days
        var expiryDate = new Date().getTime() + expiryPeriod;
        return {
            value: value,
            expiryDate: expiryDate
        };
    }
    function addGclid() {
        var gclidParam = getParam("gclid");
        var gclidRecord = null;
        var gclsrcParam = getParam("gclsrc");
        var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf("aw") !== -1;
        if (gclidParam && isGclsrcValid) {
            gclidRecord = getExpiryRecord(gclidParam);
            localStorage.setItem("gclid", JSON.stringify(gclidRecord));
        }
        var gclid = gclidRecord || JSON.parse(localStorage.getItem("gclid"));
        var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;
        if (isGclidValid) {
            let formsSelector = (0, _utils.getElements)(".wpcf7-form");
            if ((0, _utils.ifSelectorExist)(formsSelector)) Array.from(formsSelector).forEach((item)=>{
                let itemSelector1 = (0, _utils.getElement)(".gclid_field", item);
                if ((0, _utils.ifSelectorExist)(itemSelector1)) itemSelector1.value = gclid.value;
                let itemSelector2 = (0, _utils.getElement)(".clixsy", item);
                if ((0, _utils.ifSelectorExist)(itemSelector2)) itemSelector2.value = gclid.value;
            });
        }
    }
    window.addEventListener("load", addGclid);
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"3V3c2":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "aosAnimations", ()=>aosAnimations);
var _aos = require("aos");
var _aosDefault = parcelHelpers.interopDefault(_aos);
const aosAnimations = ()=>{
    (0, _aosDefault.default).init({
        disable: false,
        startEvent: "DOMContentLoaded",
        initClassName: "aos-init",
        animatedClassName: "aos-animate",
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120,
        delay: 500,
        duration: 400,
        easing: "ease",
        once: false,
        mirror: false,
        anchorPlacement: "top-bottom"
    });
};

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3","aos":"eRzTM"}],"eRzTM":[function(require,module,exports) {
var global = arguments[3];
!function(e, t) {
    module.exports = t();
}(this, function() {
    "use strict";
    var e = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {}, t = "Expected a function", n = NaN, o = "[object Symbol]", i = /^\s+|\s+$/g, a = /^[-+]0x[0-9a-f]+$/i, r = /^0b[01]+$/i, c = /^0o[0-7]+$/i, s = parseInt, u = "object" == typeof e && e && e.Object === Object && e, d = "object" == typeof self && self && self.Object === Object && self, l = u || d || Function("return this")(), f = Object.prototype.toString, m = Math.max, p = Math.min, b = function() {
        return l.Date.now();
    };
    function v(e, n, o) {
        var i, a, r, c, s, u, d = 0, l = !1, f = !1, v = !0;
        if ("function" != typeof e) throw new TypeError(t);
        function y(t) {
            var n = i, o = a;
            return i = a = void 0, d = t, c = e.apply(o, n);
        }
        function h(e) {
            var t = e - u;
            return void 0 === u || t >= n || t < 0 || f && e - d >= r;
        }
        function k() {
            var e = b();
            if (h(e)) return x(e);
            s = setTimeout(k, function(e) {
                var t = n - (e - u);
                return f ? p(t, r - (e - d)) : t;
            }(e));
        }
        function x(e) {
            return s = void 0, v && i ? y(e) : (i = a = void 0, c);
        }
        function O() {
            var e = b(), t = h(e);
            if (i = arguments, a = this, u = e, t) {
                if (void 0 === s) return function(e) {
                    return d = e, s = setTimeout(k, n), l ? y(e) : c;
                }(u);
                if (f) return s = setTimeout(k, n), y(u);
            }
            return void 0 === s && (s = setTimeout(k, n)), c;
        }
        return n = w(n) || 0, g(o) && (l = !!o.leading, r = (f = "maxWait" in o) ? m(w(o.maxWait) || 0, n) : r, v = "trailing" in o ? !!o.trailing : v), O.cancel = function() {
            void 0 !== s && clearTimeout(s), d = 0, i = u = a = s = void 0;
        }, O.flush = function() {
            return void 0 === s ? c : x(b());
        }, O;
    }
    function g(e) {
        var t = typeof e;
        return !!e && ("object" == t || "function" == t);
    }
    function w(e) {
        if ("number" == typeof e) return e;
        if (function(e) {
            return "symbol" == typeof e || function(e) {
                return !!e && "object" == typeof e;
            }(e) && f.call(e) == o;
        }(e)) return n;
        if (g(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = g(t) ? t + "" : t;
        }
        if ("string" != typeof e) return 0 === e ? e : +e;
        e = e.replace(i, "");
        var u = r.test(e);
        return u || c.test(e) ? s(e.slice(2), u ? 2 : 8) : a.test(e) ? n : +e;
    }
    var y = function(e, n, o) {
        var i = !0, a = !0;
        if ("function" != typeof e) throw new TypeError(t);
        return g(o) && (i = "leading" in o ? !!o.leading : i, a = "trailing" in o ? !!o.trailing : a), v(e, n, {
            leading: i,
            maxWait: n,
            trailing: a
        });
    }, h = "Expected a function", k = NaN, x = "[object Symbol]", O = /^\s+|\s+$/g, j = /^[-+]0x[0-9a-f]+$/i, E = /^0b[01]+$/i, N = /^0o[0-7]+$/i, z = parseInt, C = "object" == typeof e && e && e.Object === Object && e, A = "object" == typeof self && self && self.Object === Object && self, q = C || A || Function("return this")(), L = Object.prototype.toString, T = Math.max, M = Math.min, S = function() {
        return q.Date.now();
    };
    function D(e) {
        var t = typeof e;
        return !!e && ("object" == t || "function" == t);
    }
    function H(e) {
        if ("number" == typeof e) return e;
        if (function(e) {
            return "symbol" == typeof e || function(e) {
                return !!e && "object" == typeof e;
            }(e) && L.call(e) == x;
        }(e)) return k;
        if (D(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = D(t) ? t + "" : t;
        }
        if ("string" != typeof e) return 0 === e ? e : +e;
        e = e.replace(O, "");
        var n = E.test(e);
        return n || N.test(e) ? z(e.slice(2), n ? 2 : 8) : j.test(e) ? k : +e;
    }
    var $ = function(e, t, n) {
        var o, i, a, r, c, s, u = 0, d = !1, l = !1, f = !0;
        if ("function" != typeof e) throw new TypeError(h);
        function m(t) {
            var n = o, a = i;
            return o = i = void 0, u = t, r = e.apply(a, n);
        }
        function p(e) {
            var n = e - s;
            return void 0 === s || n >= t || n < 0 || l && e - u >= a;
        }
        function b() {
            var e = S();
            if (p(e)) return v(e);
            c = setTimeout(b, function(e) {
                var n = t - (e - s);
                return l ? M(n, a - (e - u)) : n;
            }(e));
        }
        function v(e) {
            return c = void 0, f && o ? m(e) : (o = i = void 0, r);
        }
        function g() {
            var e = S(), n = p(e);
            if (o = arguments, i = this, s = e, n) {
                if (void 0 === c) return function(e) {
                    return u = e, c = setTimeout(b, t), d ? m(e) : r;
                }(s);
                if (l) return c = setTimeout(b, t), m(s);
            }
            return void 0 === c && (c = setTimeout(b, t)), r;
        }
        return t = H(t) || 0, D(n) && (d = !!n.leading, a = (l = "maxWait" in n) ? T(H(n.maxWait) || 0, t) : a, f = "trailing" in n ? !!n.trailing : f), g.cancel = function() {
            void 0 !== c && clearTimeout(c), u = 0, o = s = i = c = void 0;
        }, g.flush = function() {
            return void 0 === c ? r : v(S());
        }, g;
    }, W = function() {};
    function P(e) {
        e && e.forEach(function(e) {
            var t = Array.prototype.slice.call(e.addedNodes), n = Array.prototype.slice.call(e.removedNodes);
            if (function e(t) {
                var n = void 0, o = void 0;
                for(n = 0; n < t.length; n += 1){
                    if ((o = t[n]).dataset && o.dataset.aos) return !0;
                    if (o.children && e(o.children)) return !0;
                }
                return !1;
            }(t.concat(n))) return W();
        });
    }
    function Y() {
        return window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
    }
    var _ = {
        isSupported: function() {
            return !!Y();
        },
        ready: function(e, t) {
            var n = window.document, o = new (Y())(P);
            W = t, o.observe(n.documentElement, {
                childList: !0,
                subtree: !0,
                removedNodes: !0
            });
        }
    }, B = function(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
    }, F = function() {
        function e(e, t) {
            for(var n = 0; n < t.length; n++){
                var o = t[n];
                o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o);
            }
        }
        return function(t, n, o) {
            return n && e(t.prototype, n), o && e(t, o), t;
        };
    }(), I = Object.assign || function(e) {
        for(var t = 1; t < arguments.length; t++){
            var n = arguments[t];
            for(var o in n)Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o]);
        }
        return e;
    }, K = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i, G = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i, J = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i, Q = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i;
    function R() {
        return navigator.userAgent || navigator.vendor || window.opera || "";
    }
    var U = new (function() {
        function e() {
            B(this, e);
        }
        return F(e, [
            {
                key: "phone",
                value: function() {
                    var e = R();
                    return !(!K.test(e) && !G.test(e.substr(0, 4)));
                }
            },
            {
                key: "mobile",
                value: function() {
                    var e = R();
                    return !(!J.test(e) && !Q.test(e.substr(0, 4)));
                }
            },
            {
                key: "tablet",
                value: function() {
                    return this.mobile() && !this.phone();
                }
            },
            {
                key: "ie11",
                value: function() {
                    return "-ms-scroll-limit" in document.documentElement.style && "-ms-ime-align" in document.documentElement.style;
                }
            }
        ]), e;
    }()), V = function(e, t) {
        var n = void 0;
        return U.ie11() ? (n = document.createEvent("CustomEvent")).initCustomEvent(e, !0, !0, {
            detail: t
        }) : n = new CustomEvent(e, {
            detail: t
        }), document.dispatchEvent(n);
    }, X = function(e) {
        return e.forEach(function(e, t) {
            return function(e, t) {
                var n = e.options, o = e.position, i = e.node, a = (e.data, function() {
                    e.animated && (function(e, t) {
                        t && t.forEach(function(t) {
                            return e.classList.remove(t);
                        });
                    }(i, n.animatedClassNames), V("aos:out", i), e.options.id && V("aos:in:" + e.options.id, i), e.animated = !1);
                });
                n.mirror && t >= o.out && !n.once ? a() : t >= o.in ? e.animated || (function(e, t) {
                    t && t.forEach(function(t) {
                        return e.classList.add(t);
                    });
                }(i, n.animatedClassNames), V("aos:in", i), e.options.id && V("aos:in:" + e.options.id, i), e.animated = !0) : e.animated && !n.once && a();
            }(e, window.pageYOffset);
        });
    }, Z = function(e) {
        for(var t = 0, n = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);)t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0), n += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0), e = e.offsetParent;
        return {
            top: n,
            left: t
        };
    }, ee = function(e, t, n) {
        var o = e.getAttribute("data-aos-" + t);
        if (void 0 !== o) {
            if ("true" === o) return !0;
            if ("false" === o) return !1;
        }
        return o || n;
    }, te = function(e, t) {
        return e.forEach(function(e, n) {
            var o = ee(e.node, "mirror", t.mirror), i = ee(e.node, "once", t.once), a = ee(e.node, "id"), r = t.useClassNames && e.node.getAttribute("data-aos"), c = [
                t.animatedClassName
            ].concat(r ? r.split(" ") : []).filter(function(e) {
                return "string" == typeof e;
            });
            t.initClassName && e.node.classList.add(t.initClassName), e.position = {
                in: function(e, t, n) {
                    var o = window.innerHeight, i = ee(e, "anchor"), a = ee(e, "anchor-placement"), r = Number(ee(e, "offset", a ? 0 : t)), c = a || n, s = e;
                    i && document.querySelectorAll(i) && (s = document.querySelectorAll(i)[0]);
                    var u = Z(s).top - o;
                    switch(c){
                        case "top-bottom":
                            break;
                        case "center-bottom":
                            u += s.offsetHeight / 2;
                            break;
                        case "bottom-bottom":
                            u += s.offsetHeight;
                            break;
                        case "top-center":
                            u += o / 2;
                            break;
                        case "center-center":
                            u += o / 2 + s.offsetHeight / 2;
                            break;
                        case "bottom-center":
                            u += o / 2 + s.offsetHeight;
                            break;
                        case "top-top":
                            u += o;
                            break;
                        case "bottom-top":
                            u += o + s.offsetHeight;
                            break;
                        case "center-top":
                            u += o + s.offsetHeight / 2;
                    }
                    return u + r;
                }(e.node, t.offset, t.anchorPlacement),
                out: o && function(e, t) {
                    window.innerHeight;
                    var n = ee(e, "anchor"), o = ee(e, "offset", t), i = e;
                    return n && document.querySelectorAll(n) && (i = document.querySelectorAll(n)[0]), Z(i).top + i.offsetHeight - o;
                }(e.node, t.offset)
            }, e.options = {
                once: i,
                mirror: o,
                animatedClassNames: c,
                id: a
            };
        }), e;
    }, ne = function() {
        var e = document.querySelectorAll("[data-aos]");
        return Array.prototype.map.call(e, function(e) {
            return {
                node: e
            };
        });
    }, oe = [], ie = !1, ae = {
        offset: 120,
        delay: 0,
        easing: "ease",
        duration: 400,
        disable: !1,
        once: !1,
        mirror: !1,
        anchorPlacement: "top-bottom",
        startEvent: "DOMContentLoaded",
        animatedClassName: "aos-animate",
        initClassName: "aos-init",
        useClassNames: !1,
        disableMutationObserver: !1,
        throttleDelay: 99,
        debounceDelay: 50
    }, re = function() {
        return document.all && !window.atob;
    }, ce = function() {
        arguments.length > 0 && void 0 !== arguments[0] && arguments[0] && (ie = !0), ie && (oe = te(oe, ae), X(oe), window.addEventListener("scroll", y(function() {
            X(oe, ae.once);
        }, ae.throttleDelay)));
    }, se = function() {
        if (oe = ne(), de(ae.disable) || re()) return ue();
        ce();
    }, ue = function() {
        oe.forEach(function(e, t) {
            e.node.removeAttribute("data-aos"), e.node.removeAttribute("data-aos-easing"), e.node.removeAttribute("data-aos-duration"), e.node.removeAttribute("data-aos-delay"), ae.initClassName && e.node.classList.remove(ae.initClassName), ae.animatedClassName && e.node.classList.remove(ae.animatedClassName);
        });
    }, de = function(e) {
        return !0 === e || "mobile" === e && U.mobile() || "phone" === e && U.phone() || "tablet" === e && U.tablet() || "function" == typeof e && !0 === e();
    };
    return {
        init: function(e) {
            return ae = I(ae, e), oe = ne(), ae.disableMutationObserver || _.isSupported() || (console.info('\n      aos: MutationObserver is not supported on this browser,\n      code mutations observing has been disabled.\n      You may have to call "refreshHard()" by yourself.\n    '), ae.disableMutationObserver = !0), ae.disableMutationObserver || _.ready("[data-aos]", se), de(ae.disable) || re() ? ue() : (document.querySelector("body").setAttribute("data-aos-easing", ae.easing), document.querySelector("body").setAttribute("data-aos-duration", ae.duration), document.querySelector("body").setAttribute("data-aos-delay", ae.delay), -1 === [
                "DOMContentLoaded",
                "load"
            ].indexOf(ae.startEvent) ? document.addEventListener(ae.startEvent, function() {
                ce(!0);
            }) : window.addEventListener("load", function() {
                ce(!0);
            }), "DOMContentLoaded" === ae.startEvent && [
                "complete",
                "interactive"
            ].indexOf(document.readyState) > -1 && ce(!0), window.addEventListener("resize", $(ce, ae.debounceDelay, !0)), window.addEventListener("orientationchange", $(ce, ae.debounceDelay, !0)), oe);
        },
        refresh: ce,
        refreshHard: se
    };
});

},{}],"adhDo":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "smoothScrollFn", ()=>smoothScrollFn);
const smoothScrollFn = ()=>{
    //
    // SmoothScroll for websites v1.4.10 (Balazs Galambosi)
    // http://www.smoothscroll.net/
    //
    // Licensed under the terms of the MIT license.
    //
    // You may use it in your theme if you credit me.
    // It is also free to use on any individual website.
    //
    // Exception:
    // The only restriction is to not publish any
    // extension for browsers or native application
    // without getting a written permission first.
    //
    (function() {
        // Scroll Variables (tweakable)
        var defaultOptions = {
            // Scrolling Core
            frameRate: 150,
            animationTime: 800,
            stepSize: 90,
            // Pulse (less tweakable)
            // ratio of "tail" to "acceleration"
            pulseAlgorithm: true,
            pulseScale: 4,
            pulseNormalize: 1,
            // Acceleration
            accelerationDelta: 50,
            accelerationMax: 3,
            // Keyboard Settings
            keyboardSupport: true,
            arrowScroll: 50,
            // Other
            fixedBackground: true,
            excluded: ""
        };
        var options = defaultOptions;
        // Other Variables
        var isExcluded = false;
        var isFrame = false;
        var direction = {
            x: 0,
            y: 0
        };
        var initDone = false;
        var root = document.documentElement;
        var activeElement;
        var observer;
        var refreshSize;
        var deltaBuffer = [];
        var deltaBufferTimer;
        var isMac = /^Mac/.test(navigator.platform);
        var key = {
            left: 37,
            up: 38,
            right: 39,
            down: 40,
            spacebar: 32,
            pageup: 33,
            pagedown: 34,
            end: 35,
            home: 36
        };
        var arrowKeys = {
            37: 1,
            38: 1,
            39: 1,
            40: 1
        };
        /***********************************************
     * INITIALIZE
     ***********************************************/ /**
     * Tests if smooth scrolling is allowed. Shuts down everything if not.
     */ function initTest() {
            if (options.keyboardSupport) addEvent("keydown", keydown);
        }
        /**
     * Sets up scrolls array, determines if frames are involved.
     */ function init() {
            if (initDone || !document.body) return;
            initDone = true;
            var body = document.body;
            var html = document.documentElement;
            var windowHeight = window.innerHeight;
            var scrollHeight = body.scrollHeight;
            // check compat mode for root element
            root = document.compatMode.indexOf("CSS") >= 0 ? html : body;
            activeElement = body;
            initTest();
            // Checks if this script is running in a frame
            if (top != self) isFrame = true;
            else if (isOldSafari && scrollHeight > windowHeight && (body.offsetHeight <= windowHeight || html.offsetHeight <= windowHeight)) {
                /**
       * Safari 10 fixed it, Chrome fixed it in v45:
       * This fixes a bug where the areas left and right to
       * the content does not trigger the onmousewheel event
       * on some pages. e.g.: html, body { height: 100% }
       */ var fullPageElem = document.createElement("div");
                fullPageElem.style.cssText = "position:absolute; z-index:-10000; top:0; left:0; right:0; height:" + root.scrollHeight + "px";
                document.body.appendChild(fullPageElem);
                // DOM changed (throttled) to fix height
                var pendingRefresh;
                refreshSize = function() {
                    if (pendingRefresh) return; // could also be: clearTimeout(pendingRefresh);
                    pendingRefresh = setTimeout(function() {
                        if (isExcluded) return; // could be running after cleanup
                        fullPageElem.style.height = "0";
                        fullPageElem.style.height = root.scrollHeight + "px";
                        pendingRefresh = null;
                    }, 500); // act rarely to stay fast
                };
                setTimeout(refreshSize, 10);
                addEvent("resize", refreshSize);
                // TODO: attributeFilter?
                var config = {
                    attributes: true,
                    childList: true,
                    characterData: false
                };
                observer = new MutationObserver(refreshSize);
                observer.observe(body, config);
                if (root.offsetHeight <= windowHeight) {
                    var clearfix = document.createElement("div");
                    clearfix.style.clear = "both";
                    body.appendChild(clearfix);
                }
            }
            // disable fixed background
            if (!options.fixedBackground && !isExcluded) {
                body.style.backgroundAttachment = "scroll";
                html.style.backgroundAttachment = "scroll";
            }
        }
        /**
     * Removes event listeners and other traces left on the page.
     */ function cleanup() {
            observer && observer.disconnect();
            removeEvent(wheelEvent, wheel);
            removeEvent("mousedown", mousedown);
            removeEvent("keydown", keydown);
            removeEvent("resize", refreshSize);
            removeEvent("load", init);
        }
        /************************************************
     * SCROLLING
     ************************************************/ var que = [];
        var pending = false;
        var lastScroll = Date.now();
        /**
     * Pushes scroll actions to the scrolling queue.
     */ function scrollArray(elem, left, top1) {
            directionCheck(left, top1);
            if (options.accelerationMax != 1) {
                var now = Date.now();
                var elapsed = now - lastScroll;
                if (elapsed < options.accelerationDelta) {
                    var factor = (1 + 50 / elapsed) / 2;
                    if (factor > 1) {
                        factor = Math.min(factor, options.accelerationMax);
                        left *= factor;
                        top1 *= factor;
                    }
                }
                lastScroll = Date.now();
            }
            // push a scroll command
            que.push({
                x: left,
                y: top1,
                lastX: left < 0 ? 0.99 : -0.99,
                lastY: top1 < 0 ? 0.99 : -0.99,
                start: Date.now()
            });
            // don't act if there's a pending queue
            if (pending) return;
            var scrollRoot = getScrollRoot();
            var isWindowScroll = elem === scrollRoot || elem === document.body;
            // if we haven't already fixed the behavior,
            // and it needs fixing for this sesh
            if (elem.$scrollBehavior == null && isScrollBehaviorSmooth(elem)) {
                elem.$scrollBehavior = elem.style.scrollBehavior;
                elem.style.scrollBehavior = "auto";
            }
            var step = function(time) {
                var now = Date.now();
                var scrollX = 0;
                var scrollY = 0;
                for(var i = 0; i < que.length; i++){
                    var item = que[i];
                    var elapsed = now - item.start;
                    var finished = elapsed >= options.animationTime;
                    // scroll position: [0, 1]
                    var position = finished ? 1 : elapsed / options.animationTime;
                    // easing [optional]
                    if (options.pulseAlgorithm) position = pulse(position);
                    // only need the difference
                    var x = item.x * position - item.lastX >> 0;
                    var y = item.y * position - item.lastY >> 0;
                    // add this to the total scrolling
                    scrollX += x;
                    scrollY += y;
                    // update last values
                    item.lastX += x;
                    item.lastY += y;
                    // delete and step back if it's over
                    if (finished) {
                        que.splice(i, 1);
                        i--;
                    }
                }
                // scroll left and top
                if (isWindowScroll) window.scrollBy(scrollX, scrollY);
                else {
                    if (scrollX) elem.scrollLeft += scrollX;
                    if (scrollY) elem.scrollTop += scrollY;
                }
                // clean up if there's nothing left to do
                if (!left && !top1) que = [];
                if (que.length) requestFrame(step, elem, 1000 / options.frameRate + 1);
                else {
                    pending = false;
                    // restore default behavior at the end of scrolling sesh
                    if (elem.$scrollBehavior != null) {
                        elem.style.scrollBehavior = elem.$scrollBehavior;
                        elem.$scrollBehavior = null;
                    }
                }
            };
            // start a new queue of actions
            requestFrame(step, elem, 0);
            pending = true;
        }
        /***********************************************
     * EVENTS
     ***********************************************/ /**
     * Mouse wheel handler.
     * @param {Object} event
     */ function wheel(event) {
            if (!initDone) init();
            var target = event.target;
            // leave early if default action is prevented
            // or it's a zooming event with CTRL
            if (event.defaultPrevented || event.ctrlKey) return true;
            // leave embedded content alone (flash & pdf)
            if (isNodeName(activeElement, "embed") || isNodeName(target, "embed") && /\.pdf/i.test(target.src) || isNodeName(activeElement, "object") || target.shadowRoot) return true;
            var deltaX = -event.wheelDeltaX || event.deltaX || 0;
            var deltaY = -event.wheelDeltaY || event.deltaY || 0;
            if (isMac) {
                if (event.wheelDeltaX && isDivisible(event.wheelDeltaX, 120)) deltaX = -120 * (event.wheelDeltaX / Math.abs(event.wheelDeltaX));
                if (event.wheelDeltaY && isDivisible(event.wheelDeltaY, 120)) deltaY = -120 * (event.wheelDeltaY / Math.abs(event.wheelDeltaY));
            }
            // use wheelDelta if deltaX/Y is not available
            if (!deltaX && !deltaY) deltaY = -event.wheelDelta || 0;
            // line based scrolling (Firefox mostly)
            if (event.deltaMode === 1) {
                deltaX *= 40;
                deltaY *= 40;
            }
            var overflowing = overflowingAncestor(target);
            // nothing to do if there's no element that's scrollable
            if (!overflowing) {
                // except Chrome iframes seem to eat wheel events, which we need to
                // propagate up, if the iframe has nothing overflowing to scroll
                if (isFrame && isChrome) {
                    // change target to iframe element itself for the parent frame
                    Object.defineProperty(event, "target", {
                        value: window.frameElement
                    });
                    return parent.wheel(event);
                }
                return true;
            }
            // check if it's a touchpad scroll that should be ignored
            if (isTouchpad(deltaY)) return true;
            // scale by step size
            // delta is 120 most of the time
            // synaptics seems to send 1 sometimes
            if (Math.abs(deltaX) > 1.2) deltaX *= options.stepSize / 120;
            if (Math.abs(deltaY) > 1.2) deltaY *= options.stepSize / 120;
            scrollArray(overflowing, deltaX, deltaY);
            event.preventDefault();
            scheduleClearCache();
        }
        /**
     * Keydown event handler.
     * @param {Object} event
     */ function keydown(event) {
            var target = event.target;
            var modifier = event.ctrlKey || event.altKey || event.metaKey || event.shiftKey && event.keyCode !== key.spacebar;
            // our own tracked active element could've been removed from the DOM
            if (!document.body.contains(activeElement)) activeElement = document.activeElement;
            // do nothing if user is editing text
            // or using a modifier key (except shift)
            // or in a dropdown
            // or inside interactive elements
            var inputNodeNames = /^(textarea|select|embed|object)$/i;
            var buttonTypes = /^(button|submit|radio|checkbox|file|color|image)$/i;
            if (event.defaultPrevented || inputNodeNames.test(target.nodeName) || isNodeName(target, "input") && !buttonTypes.test(target.type) || isNodeName(activeElement, "video") || isInsideYoutubeVideo(event) || target.isContentEditable || modifier) return true;
            // [spacebar] should trigger button press, leave it alone
            if ((isNodeName(target, "button") || isNodeName(target, "input") && buttonTypes.test(target.type)) && event.keyCode === key.spacebar) return true;
            // [arrwow keys] on radio buttons should be left alone
            if (isNodeName(target, "input") && target.type == "radio" && arrowKeys[event.keyCode]) return true;
            var shift, x = 0, y = 0;
            var overflowing = overflowingAncestor(activeElement);
            if (!overflowing) // Chrome iframes seem to eat key events, which we need to
            // propagate up, if the iframe has nothing overflowing to scroll
            return isFrame && isChrome ? parent.keydown(event) : true;
            var clientHeight = overflowing.clientHeight;
            if (overflowing == document.body) clientHeight = window.innerHeight;
            switch(event.keyCode){
                case key.up:
                    y = -options.arrowScroll;
                    break;
                case key.down:
                    y = options.arrowScroll;
                    break;
                case key.spacebar:
                    shift = event.shiftKey ? 1 : -1;
                    y = -shift * clientHeight * 0.9;
                    break;
                case key.pageup:
                    y = -clientHeight * 0.9;
                    break;
                case key.pagedown:
                    y = clientHeight * 0.9;
                    break;
                case key.home:
                    if (overflowing == document.body && document.scrollingElement) overflowing = document.scrollingElement;
                    y = -overflowing.scrollTop;
                    break;
                case key.end:
                    var scroll = overflowing.scrollHeight - overflowing.scrollTop;
                    var scrollRemaining = scroll - clientHeight;
                    y = scrollRemaining > 0 ? scrollRemaining + 10 : 0;
                    break;
                case key.left:
                    x = -options.arrowScroll;
                    break;
                case key.right:
                    x = options.arrowScroll;
                    break;
                default:
                    return true; // a key we don't care about
            }
            scrollArray(overflowing, x, y);
            event.preventDefault();
            scheduleClearCache();
        }
        /**
     * Mousedown event only for updating activeElement
     */ function mousedown(event) {
            activeElement = event.target;
        }
        /***********************************************
     * OVERFLOW
     ***********************************************/ var uniqueID = function() {
            var i = 0;
            return function(el) {
                return el.uniqueID || (el.uniqueID = i++);
            };
        }();
        var cacheX = {}; // cleared out after a scrolling session
        var cacheY = {}; // cleared out after a scrolling session
        var clearCacheTimer;
        var smoothBehaviorForElement = {};
        //setInterval(function () { cache = {}; }, 10 * 1000);
        function scheduleClearCache() {
            clearTimeout(clearCacheTimer);
            clearCacheTimer = setInterval(function() {
                cacheX = cacheY = smoothBehaviorForElement = {};
            }, 1000);
        }
        function setCache(elems, overflowing, x) {
            var cache = x ? cacheX : cacheY;
            for(var i = elems.length; i--;)cache[uniqueID(elems[i])] = overflowing;
            return overflowing;
        }
        function getCache(el, x) {
            return (x ? cacheX : cacheY)[uniqueID(el)];
        }
        //  (body)                (root)
        //         | hidden | visible | scroll |  auto  |
        // hidden  |   no   |    no   |   YES  |   YES  |
        // visible |   no   |   YES   |   YES  |   YES  |
        // scroll  |   no   |   YES   |   YES  |   YES  |
        // auto    |   no   |   YES   |   YES  |   YES  |
        function overflowingAncestor(el) {
            var elems = [];
            var body = document.body;
            var rootScrollHeight = root.scrollHeight;
            do {
                var cached = getCache(el, false);
                if (cached) return setCache(elems, cached);
                elems.push(el);
                if (rootScrollHeight === el.scrollHeight) {
                    var topOverflowsNotHidden = overflowNotHidden(root) && overflowNotHidden(body);
                    var isOverflowCSS = topOverflowsNotHidden || overflowAutoOrScroll(root);
                    if (isFrame && isContentOverflowing(root) || !isFrame && isOverflowCSS) return setCache(elems, getScrollRoot());
                } else if (isContentOverflowing(el) && overflowAutoOrScroll(el)) return setCache(elems, el);
            }while (el = el.parentElement);
        }
        function isContentOverflowing(el) {
            return el.clientHeight + 10 < el.scrollHeight;
        }
        // typically for <body> and <html>
        function overflowNotHidden(el) {
            var overflow = getComputedStyle(el, "").getPropertyValue("overflow-y");
            return overflow !== "hidden";
        }
        // for all other elements
        function overflowAutoOrScroll(el) {
            var overflow = getComputedStyle(el, "").getPropertyValue("overflow-y");
            return overflow === "scroll" || overflow === "auto";
        }
        // for all other elements
        function isScrollBehaviorSmooth(el) {
            var id = uniqueID(el);
            if (smoothBehaviorForElement[id] == null) {
                var scrollBehavior = getComputedStyle(el, "")["scroll-behavior"];
                smoothBehaviorForElement[id] = "smooth" == scrollBehavior;
            }
            return smoothBehaviorForElement[id];
        }
        /***********************************************
     * HELPERS
     ***********************************************/ function addEvent(type, fn, arg) {
            window.addEventListener(type, fn, arg || false);
        }
        function removeEvent(type, fn, arg) {
            window.removeEventListener(type, fn, arg || false);
        }
        function isNodeName(el, tag) {
            return el && (el.nodeName || "").toLowerCase() === tag.toLowerCase();
        }
        function directionCheck(x, y) {
            x = x > 0 ? 1 : -1;
            y = y > 0 ? 1 : -1;
            if (direction.x !== x || direction.y !== y) {
                direction.x = x;
                direction.y = y;
                que = [];
                lastScroll = 0;
            }
        }
        if (window.localStorage && localStorage.SS_deltaBuffer) try {
            // #46 Safari throws in private browsing for localStorage
            deltaBuffer = localStorage.SS_deltaBuffer.split(",");
        } catch (e) {}
        function isTouchpad(deltaY) {
            if (!deltaY) return;
            if (!deltaBuffer.length) deltaBuffer = [
                deltaY,
                deltaY,
                deltaY
            ];
            deltaY = Math.abs(deltaY);
            deltaBuffer.push(deltaY);
            deltaBuffer.shift();
            clearTimeout(deltaBufferTimer);
            deltaBufferTimer = setTimeout(function() {
                try {
                    // #46 Safari throws in private browsing for localStorage
                    localStorage.SS_deltaBuffer = deltaBuffer.join(",");
                } catch (e) {}
            }, 1000);
            var dpiScaledWheelDelta = deltaY > 120 && allDeltasDivisableBy(deltaY); // win64
            var tp = !allDeltasDivisableBy(120) && !allDeltasDivisableBy(100) && !dpiScaledWheelDelta;
            if (deltaY < 50) return true;
            return tp;
        }
        function isDivisible(n, divisor) {
            return Math.floor(n / divisor) == n / divisor;
        }
        function allDeltasDivisableBy(divisor) {
            return isDivisible(deltaBuffer[0], divisor) && isDivisible(deltaBuffer[1], divisor) && isDivisible(deltaBuffer[2], divisor);
        }
        function isInsideYoutubeVideo(event) {
            var elem = event.target;
            var isControl = false;
            if (document.URL.indexOf("www.youtube.com/watch") != -1) do {
                isControl = elem.classList && elem.classList.contains("html5-video-controls");
                if (isControl) break;
            }while (elem = elem.parentNode);
            return isControl;
        }
        var requestFrame = function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback, element, delay) {
                window.setTimeout(callback, delay || 1000 / 60);
            };
        }();
        var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        var getScrollRoot = function() {
            var SCROLL_ROOT = document.scrollingElement;
            return function() {
                if (!SCROLL_ROOT) {
                    var dummy = document.createElement("div");
                    dummy.style.cssText = "height:10000px;width:1px;";
                    document.body.appendChild(dummy);
                    var bodyScrollTop = document.body.scrollTop;
                    var docElScrollTop = document.documentElement.scrollTop;
                    window.scrollBy(0, 3);
                    if (document.body.scrollTop != bodyScrollTop) SCROLL_ROOT = document.body;
                    else SCROLL_ROOT = document.documentElement;
                    window.scrollBy(0, -3);
                    document.body.removeChild(dummy);
                }
                return SCROLL_ROOT;
            };
        }();
        /***********************************************
     * PULSE (by Michael Herf)
     ***********************************************/ /**
     * Viscous fluid with a pulse for part and decay for the rest.
     * - Applies a fixed force over an interval (a damped acceleration), and
     * - Lets the exponential bleed away the velocity over a longer interval
     * - Michael Herf, http://stereopsis.com/stopping/
     */ function pulse_(x) {
            var val, start, expx;
            // test
            x = x * options.pulseScale;
            if (x < 1) // acceleartion
            val = x - (1 - Math.exp(-x));
            else {
                // tail
                // the previous animation ended here:
                start = Math.exp(-1);
                // simple viscous drag
                x -= 1;
                expx = 1 - Math.exp(-x);
                val = start + expx * (1 - start);
            }
            return val * options.pulseNormalize;
        }
        function pulse(x) {
            if (x >= 1) return 1;
            if (x <= 0) return 0;
            if (options.pulseNormalize == 1) options.pulseNormalize /= pulse_(1);
            return pulse_(x);
        }
        /***********************************************
     * FIRST RUN
     ***********************************************/ var userAgent = window.navigator.userAgent;
        var isEdge = /Edge/.test(userAgent); // thank you MS
        var isChrome = /chrome/i.test(userAgent) && !isEdge;
        var isSafari = /safari/i.test(userAgent) && !isEdge;
        var isMobile = /mobile/i.test(userAgent);
        var isIEWin7 = /Windows NT 6.1/i.test(userAgent) && /rv:11/i.test(userAgent);
        var isOldSafari = isSafari && (/Version\/8/i.test(userAgent) || /Version\/9/i.test(userAgent));
        var isEnabledForBrowser = (isChrome || isSafari || isIEWin7) && !isMobile;
        var supportsPassive = false;
        try {
            window.addEventListener("test", null, Object.defineProperty({}, "passive", {
                get: function() {
                    supportsPassive = true;
                }
            }));
        } catch (e1) {}
        var wheelOpt = supportsPassive ? {
            passive: false
        } : false;
        var wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";
        if (wheelEvent && isEnabledForBrowser) {
            addEvent(wheelEvent, wheel, wheelOpt);
            addEvent("mousedown", mousedown);
            addEvent("load", init);
        }
        /***********************************************
     * PUBLIC INTERFACE
     ***********************************************/ function SmoothScroll(optionsToSet) {
            for(var key in optionsToSet)if (defaultOptions.hasOwnProperty(key)) options[key] = optionsToSet[key];
        }
        SmoothScroll.destroy = cleanup;
        if (window.SmoothScrollOptions) // async API
        SmoothScroll(window.SmoothScrollOptions);
        if (typeof define === "function" && define.amd) define(function() {
            return SmoothScroll;
        });
        else module.exports = SmoothScroll;
    })();
};

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"axBGC":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "modalDialog", ()=>modalDialog);
var _a11YDialog = require("a11y-dialog");
var _a11YDialogDefault = parcelHelpers.interopDefault(_a11YDialog);
var _utils = require("./utils");
const modalDialog = ()=>{
    console.log("test");
    const dialogContainer = document.querySelector("#testimonialDialog");
    if ((0, _utils.ifSelectorExist)(dialogContainer)) {
        const videoReviewsDialog = new (0, _a11YDialogDefault.default)(dialogContainer);
        let fireTestimonialModalSelector = (0, _utils.getElements)(".fireTestimonialModal");
        if ((0, _utils.ifSelectorExist)(fireTestimonialModalSelector)) {
            console.log(fireTestimonialModalSelector);
            Array.from(fireTestimonialModalSelector).forEach((item)=>{
                item.addEventListener("click", ()=>{
                    let testimonialVideoIdSelector = (0, _utils.getElement)("#testimonialVideoIdSelector");
                    if ((0, _utils.ifSelectorExist)(testimonialVideoIdSelector)) {
                        let itemYtUrl = item.getAttribute("data-yt-url");
                        console.log(itemYtUrl);
                        testimonialVideoIdSelector.src = itemYtUrl;
                    }
                });
            });
        }
        videoReviewsDialog.on("hide", function(dialogEl, event) {
            dialogEl.querySelector("iframe").contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*");
        });
        videoReviewsDialog.on("show", function(dialogEl, event) {
            dialogEl.querySelector("iframe").onload = ()=>{
                dialogEl.querySelector("iframe").contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', "*");
            };
        });
    }
};

},{"a11y-dialog":"6Wzpm","./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"6Wzpm":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "default", ()=>A11yDialog);
var focusableSelectors = [
    'a[href]:not([tabindex^="-"])',
    'area[href]:not([tabindex^="-"])',
    'input:not([type="hidden"]):not([type="radio"]):not([disabled]):not([tabindex^="-"])',
    'input[type="radio"]:not([disabled]):not([tabindex^="-"])',
    'select:not([disabled]):not([tabindex^="-"])',
    'textarea:not([disabled]):not([tabindex^="-"])',
    'button:not([disabled]):not([tabindex^="-"])',
    'iframe:not([tabindex^="-"])',
    'audio[controls]:not([tabindex^="-"])',
    'video[controls]:not([tabindex^="-"])',
    '[contenteditable]:not([tabindex^="-"])',
    '[tabindex]:not([tabindex^="-"])', 
];
var TAB_KEY = "Tab";
var ESCAPE_KEY = "Escape";
/**
 * Define the constructor to instantiate a dialog
 *
 * @constructor
 * @param {Element} element
 */ function A11yDialog(element) {
    // Prebind the functions that will be bound in addEventListener and
    // removeEventListener to avoid losing references
    this._show = this.show.bind(this);
    this._hide = this.hide.bind(this);
    this._maintainFocus = this._maintainFocus.bind(this);
    this._bindKeypress = this._bindKeypress.bind(this);
    this.$el = element;
    this.shown = false;
    this._id = this.$el.getAttribute("data-a11y-dialog") || this.$el.id;
    this._previouslyFocused = null;
    this._listeners = {};
    // Initialise everything needed for the dialog to work properly
    this.create();
}
/**
 * Set up everything necessary for the dialog to be functioning
 *
 * @param {(NodeList | Element | string)} targets
 * @return {this}
 */ A11yDialog.prototype.create = function() {
    this.$el.setAttribute("aria-hidden", true);
    this.$el.setAttribute("aria-modal", true);
    this.$el.setAttribute("tabindex", -1);
    if (!this.$el.hasAttribute("role")) this.$el.setAttribute("role", "dialog");
    // Keep a collection of dialog openers, each of which will be bound a click
    // event listener to open the dialog
    this._openers = $$('[data-a11y-dialog-show="' + this._id + '"]');
    this._openers.forEach((function(opener) {
        opener.addEventListener("click", this._show);
    }).bind(this));
    // Keep a collection of dialog closers, each of which will be bound a click
    // event listener to close the dialog
    const $el = this.$el;
    this._closers = $$("[data-a11y-dialog-hide]", this.$el)// This filter is necessary in case there are nested dialogs, so that
    // only closers from the current dialog are retrieved and effective
    .filter(function(closer) {
        // Testing for `[aria-modal="true"]` is not enough since this attribute
        // and the collect of closers is done at instantation time, when nested
        // dialogs might not have yet been instantiated. Note that if the dialogs
        // are manually instantiated, this could still fail because none of these
        // selectors would match; this would cause closers to close all parent
        // dialogs instead of just the current one
        return closer.closest('[aria-modal="true"], [data-a11y-dialog]') === $el;
    }).concat($$('[data-a11y-dialog-hide="' + this._id + '"]'));
    this._closers.forEach((function(closer) {
        closer.addEventListener("click", this._hide);
    }).bind(this));
    // Execute all callbacks registered for the `create` event
    this._fire("create");
    return this;
};
/**
 * Show the dialog element, disable all the targets (siblings), trap the
 * current focus within it, listen for some specific key presses and fire all
 * registered callbacks for `show` event
 *
 * @param {CustomEvent} event
 * @return {this}
 */ A11yDialog.prototype.show = function(event) {
    // If the dialog is already open, abort
    if (this.shown) return this;
    // Keep a reference to the currently focused element to be able to restore
    // it later
    this._previouslyFocused = document.activeElement;
    this.$el.removeAttribute("aria-hidden");
    this.shown = true;
    // Set the focus to the dialog element
    moveFocusToDialog(this.$el);
    // Bind a focus event listener to the body element to make sure the focus
    // stays trapped inside the dialog while open, and start listening for some
    // specific key presses (TAB and ESC)
    document.body.addEventListener("focus", this._maintainFocus, true);
    document.addEventListener("keydown", this._bindKeypress);
    // Execute all callbacks registered for the `show` event
    this._fire("show", event);
    return this;
};
/**
 * Hide the dialog element, enable all the targets (siblings), restore the
 * focus to the previously active element, stop listening for some specific
 * key presses and fire all registered callbacks for `hide` event
 *
 * @param {CustomEvent} event
 * @return {this}
 */ A11yDialog.prototype.hide = function(event) {
    // If the dialog is already closed, abort
    if (!this.shown) return this;
    this.shown = false;
    this.$el.setAttribute("aria-hidden", "true");
    // If there was a focused element before the dialog was opened (and it has a
    // `focus` method), restore the focus back to it
    // See: https://github.com/KittyGiraudel/a11y-dialog/issues/108
    if (this._previouslyFocused && this._previouslyFocused.focus) this._previouslyFocused.focus();
    // Remove the focus event listener to the body element and stop listening
    // for specific key presses
    document.body.removeEventListener("focus", this._maintainFocus, true);
    document.removeEventListener("keydown", this._bindKeypress);
    // Execute all callbacks registered for the `hide` event
    this._fire("hide", event);
    return this;
};
/**
 * Destroy the current instance (after making sure the dialog has been hidden)
 * and remove all associated listeners from dialog openers and closers
 *
 * @return {this}
 */ A11yDialog.prototype.destroy = function() {
    // Hide the dialog to avoid destroying an open instance
    this.hide();
    // Remove the click event listener from all dialog openers
    this._openers.forEach((function(opener) {
        opener.removeEventListener("click", this._show);
    }).bind(this));
    // Remove the click event listener from all dialog closers
    this._closers.forEach((function(closer) {
        closer.removeEventListener("click", this._hide);
    }).bind(this));
    // Execute all callbacks registered for the `destroy` event
    this._fire("destroy");
    // Keep an object of listener types mapped to callback functions
    this._listeners = {};
    return this;
};
/**
 * Register a new callback for the given event type
 *
 * @param {string} type
 * @param {Function} handler
 */ A11yDialog.prototype.on = function(type, handler) {
    if (typeof this._listeners[type] === "undefined") this._listeners[type] = [];
    this._listeners[type].push(handler);
    return this;
};
/**
 * Unregister an existing callback for the given event type
 *
 * @param {string} type
 * @param {Function} handler
 */ A11yDialog.prototype.off = function(type, handler) {
    var index = (this._listeners[type] || []).indexOf(handler);
    if (index > -1) this._listeners[type].splice(index, 1);
    return this;
};
/**
 * Iterate over all registered handlers for given type and call them all with
 * the dialog element as first argument, event as second argument (if any). Also
 * dispatch a custom event on the DOM element itself to make it possible to
 * react to the lifecycle of auto-instantiated dialogs.
 *
 * @access private
 * @param {string} type
 * @param {CustomEvent} event
 */ A11yDialog.prototype._fire = function(type, event) {
    var listeners = this._listeners[type] || [];
    var domEvent = new CustomEvent(type, {
        detail: event
    });
    this.$el.dispatchEvent(domEvent);
    listeners.forEach((function(listener) {
        listener(this.$el, event);
    }).bind(this));
};
/**
 * Private event handler used when listening to some specific key presses
 * (namely ESCAPE and TAB)
 *
 * @access private
 * @param {Event} event
 */ A11yDialog.prototype._bindKeypress = function(event) {
    // This is an escape hatch in case there are nested dialogs, so the keypresses
    // are only reacted to for the most recent one
    const focused = document.activeElement;
    if (focused && focused.closest('[aria-modal="true"]') !== this.$el) return;
    // If the dialog is shown and the ESCAPE key is being pressed, prevent any
    // further effects from the ESCAPE key and hide the dialog, unless its role
    // is 'alertdialog', which should be modal
    if (this.shown && event.key === ESCAPE_KEY && this.$el.getAttribute("role") !== "alertdialog") {
        event.preventDefault();
        this.hide(event);
    }
    // If the dialog is shown and the TAB key is being pressed, make sure the
    // focus stays trapped within the dialog element
    if (this.shown && event.key === TAB_KEY) trapTabKey(this.$el, event);
};
/**
 * Private event handler used when making sure the focus stays within the
 * currently open dialog
 *
 * @access private
 * @param {Event} event
 */ A11yDialog.prototype._maintainFocus = function(event) {
    // If the dialog is shown and the focus is not within a dialog element (either
    // this one or another one in case of nested dialogs) or within an element
    // with the `data-a11y-dialog-focus-trap-ignore` attribute, move it back to
    // its first focusable child.
    // See: https://github.com/KittyGiraudel/a11y-dialog/issues/177
    if (this.shown && !event.target.closest('[aria-modal="true"]') && !event.target.closest("[data-a11y-dialog-ignore-focus-trap]")) moveFocusToDialog(this.$el);
};
/**
 * Convert a NodeList into an array
 *
 * @param {NodeList} collection
 * @return {Array<Element>}
 */ function toArray(collection) {
    return Array.prototype.slice.call(collection);
}
/**
 * Query the DOM for nodes matching the given selector, scoped to context (or
 * the whole document)
 *
 * @param {String} selector
 * @param {Element} [context = document]
 * @return {Array<Element>}
 */ function $$(selector, context) {
    return toArray((context || document).querySelectorAll(selector));
}
/**
 * Set the focus to the first element with `autofocus` with the element or the
 * element itself
 *
 * @param {Element} node
 */ function moveFocusToDialog(node) {
    var focused = node.querySelector("[autofocus]") || node;
    focused.focus();
}
/**
 * Get the focusable children of the given element
 *
 * @param {Element} node
 * @return {Array<Element>}
 */ function getFocusableChildren(node) {
    return $$(focusableSelectors.join(","), node).filter(function(child) {
        return !!(child.offsetWidth || child.offsetHeight || child.getClientRects().length);
    });
}
/**
 * Trap the focus inside the given element
 *
 * @param {Element} node
 * @param {Event} event
 */ function trapTabKey(node, event) {
    var focusableChildren = getFocusableChildren(node);
    var focusedItemIndex = focusableChildren.indexOf(document.activeElement);
    // If the SHIFT key is being pressed while tabbing (moving backwards) and
    // the currently focused item is the first one, move the focus to the last
    // focusable item from the dialog element
    if (event.shiftKey && focusedItemIndex === 0) {
        focusableChildren[focusableChildren.length - 1].focus();
        event.preventDefault();
    // If the SHIFT key is not being pressed (moving forwards) and the currently
    // focused item is the last one, move the focus to the first focusable item
    // from the dialog element
    } else if (!event.shiftKey && focusedItemIndex === focusableChildren.length - 1) {
        focusableChildren[0].focus();
        event.preventDefault();
    }
}
function instantiateDialogs() {
    $$("[data-a11y-dialog]").forEach(function(node) {
        new A11yDialog(node);
    });
}
if (typeof document !== "undefined") {
    if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", instantiateDialogs);
    else if (window.requestAnimationFrame) window.requestAnimationFrame(instantiateDialogs);
    else window.setTimeout(instantiateDialogs, 16);
}

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"3NM30":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
parcelHelpers.export(exports, "cf7Events", ()=>cf7Events);
var _utils = require("./utils");
const cf7Events = ()=>{
    // setup page id to the form
    let containerPostFields = (0, _utils.getElements)('input[name="post_id"]');
    if ((0, _utils.ifSelectorExist)(containerPostFields)) Array.from(containerPostFields).forEach((input)=>{
        input.value = ajax_url.page_id;
        console.log("page ID is == ", input.value);
    });
    var wpcf7Elm = (0, _utils.getElements)(".wpcf7");
    if ((0, _utils.ifSelectorExist)(wpcf7Elm)) Array.from(wpcf7Elm).forEach((item)=>{
        item.addEventListener("submit", (event)=>{
            let formSpinner = (0, _utils.getElement)(".wpcf7-spinner", event.target);
            let submitButton = (0, _utils.getElement)("button", event.target);
            submitButton.disabled = true;
            let submitButtonSpans = (0, _utils.getElements)("span", submitButton);
            // if (ifSelectorExist(submitButtonSpans)) {
            //   Array.from(submitButtonSpans).forEach(span => {
            //     span.classList.add('!opacity-50');
            //   })
            // }
            if ((0, _utils.ifSelectorExist)(formSpinner)) formSpinner.classList.add("active");
        });
        document.addEventListener("wpcf7invalid", function(event) {
            unblockBtn(event.target);
        }, false);
        document.addEventListener("wpcf7spam", function(event) {
            unblockBtn(event.target);
        }, false);
        document.addEventListener("wpcf7mailsent", function(event) {
            unblockBtn(event.target);
        }, false);
        document.addEventListener("wpcf7mailfailed", function(event) {
            unblockBtn(event.target);
        }, false);
    });
    let unblockBtn = (form)=>{
        let submitButton = (0, _utils.getElement)("button", form);
        let formSpinner = (0, _utils.getElement)(".wpcf7-spinner", form);
        // let submitButtonSpans = getElements('span', submitButton);
        // if (ifSelectorExist(submitButtonSpans)) {
        //   Array.from(submitButtonSpans).forEach(span => {
        //     span.classList.remove('!opacity-50');
        //   })
        // }
        submitButton.disabled = false;
        if ((0, _utils.ifSelectorExist)(formSpinner)) formSpinner.classList.remove("active");
    };
};

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}]},["cljb4","4R5xk"], "4R5xk", "parcelRequiree407")

//# sourceMappingURL=main.js.map
