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
var _menuDefault = parcelHelpers.interopDefault(_menu);
var _utils = require("./utils");
(0, _utils.ready)(()=>{
    (0, _menuDefault.default)();
});

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3","./utils":"blFj3","./menu":"2uPGB"}],"gkKU3":[function(require,module,exports) {
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

},{}],"blFj3":[function(require,module,exports) {
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

},{"@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}],"2uPGB":[function(require,module,exports) {
var parcelHelpers = require("@parcel/transformer-js/src/esmodule-helpers.js");
parcelHelpers.defineInteropFlag(exports);
// Main Menu
var _utils = require("./utils");
function mainMenu() {
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
    menuButton.addEventListener("click", (e)=>{
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
    if (menu.querySelector(".evt-close-level") !== null) {
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
}
exports.default = mainMenu;

},{"./utils":"blFj3","@parcel/transformer-js/src/esmodule-helpers.js":"gkKU3"}]},["cljb4","4R5xk"], "4R5xk", "parcelRequiree407")

//# sourceMappingURL=main.js.map
