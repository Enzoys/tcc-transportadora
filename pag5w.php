<!doctype html>
<html>

<head>
    <title>Vintage Car Garage Website Template | WIX</title>

    <!-- BEGIN SENTRY -->
    <script src="https://browser.sentry-cdn.com/5.10.2/bundle.min.js" integrity="sha384-ssBfXiBvlVC7bdA/VX03S88B5MwXQWdnpJRbUYFPgswlOBwETwTp6F3SMUNpo9M9" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.Sentry.init({
            dsn: "https://b4e7a2b423b54000ac2058644c76f718@sentry.wixpress.com/217",
            release: "1.429.0",
            environment: "production"
        });
        window.Sentry.configureScope(function(scope) {
            scope.setUser({
                id: "0a2b28b1-550c-43fe-8dec-d234e963c815",
                clientId: "849d4f33-4fb4-4761-b62e-f32a8e3ec043"
            });
            scope.setExtra("sessionId", "c2887551-a101-4531-a513-53b6f4be248b");
        });
    </script>
    <!-- END SENTRY -->

    <script type='text/javascript'>
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "agent": "",
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "c99d7f1ab0",
            "applicationID": "31527391,43022637",
            "applicationTime": 3.500757,
            "transactionName": "ZFAHNkNYXUBQVEUKXF0aIBpBS1ZAQl1CTHR2YUpNXFhBWFRDWA1UHkEAD0FVUkdUGkcKVkRQF01FXF5DXVZFBkAcDxEHXElfUkVSeAc=",
            "queueTime": 0,
            "ttGuid": "53e1c2bb2489fbad",
            "agentToken": null
        };
        (window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "c99d7f1ab0",
            applicationID: "31527391"
        };
        window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var i = n[t] = {
                        exports: {}
                    };
                    e[t][0].call(i.exports, function(n) {
                        var i = e[t][1][n];
                        return r(i || n)
                    }, i, i.exports)
                }
                return n[t].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < t.length; i++) r(t[i]);
            return r
        }({
            1: [function(e, n, t) {
                function r() {}

                function i(e, n, t) {
                    return function() {
                        return o(e, [u.now()].concat(f(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }
                var o = e("handle"),
                    a = e(4),
                    f = e(5),
                    c = e("ee").get("tracer"),
                    u = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    d = l + "ixn-";
                a(p, function(e, n) {
                    s[n] = i(l + n, !0, "api")
                }), s.addPageAction = i(l + "addPageAction", !0), s.setCurrentRouteName = i(l + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, n) {
                        var t = {},
                            r = this,
                            i = "function" == typeof n;
                        return o(d + "tracer", [u.now(), e, t], r),
                            function() {
                                if (c.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], t), i) try {
                                    return n.apply(this, arguments)
                                } catch (e) {
                                    throw c.emit("fn-err", [arguments, this, e], t), e
                                } finally {
                                    c.emit("fn-end", [u.now()], t)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                    m[n] = i(d + n)
                }), newrelic.noticeError = function(e, n) {
                    "string" == typeof e && (e = new Error(e)), o("err", [e, u.now(), !1, n])
                }
            }, {}],
            2: [function(e, n, t) {
                function r(e, n) {
                    var t = e.getEntries();
                    t.forEach(function(e) {
                        "first-paint" === e.name ? c("timing", ["fp", Math.floor(e.startTime)]) : "first-contentful-paint" === e.name && c("timing", ["fcp", Math.floor(e.startTime)])
                    })
                }

                function i(e, n) {
                    var t = e.getEntries();
                    t.length > 0 && c("lcp", [t[t.length - 1]])
                }

                function o(e) {
                    if (e instanceof s && !l) {
                        var n, t = Math.round(e.timeStamp);
                        n = t > 1e12 ? Date.now() - t : u.now() - t, l = !0, c("timing", ["fi", t, {
                            type: e.type,
                            fid: n
                        }])
                    }
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var a, f, c = e("handle"),
                        u = e("loader"),
                        s = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        a = new PerformanceObserver(r), f = new PerformanceObserver(i);
                        try {
                            a.observe({
                                entryTypes: ["paint"]
                            }), f.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (p) {}
                    }
                    if ("addEventListener" in document) {
                        var l = !1,
                            d = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        d.forEach(function(e) {
                            document.addEventListener(e, o, !1)
                        })
                    }
                }
            }, {}],
            3: [function(e, n, t) {
                function r(e, n) {
                    if (!i) return !1;
                    if (e !== i) return !1;
                    if (!n) return !0;
                    if (!o) return !1;
                    for (var t = o.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== t[a]) return !1;
                    return !0
                }
                var i = null,
                    o = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var f = navigator.userAgent,
                        c = f.match(a);
                    c && f.indexOf("Chrome") === -1 && f.indexOf("Chromium") === -1 && (i = "Safari", o = c[1])
                }
                n.exports = {
                    agent: i,
                    version: o,
                    match: r
                }
            }, {}],
            4: [function(e, n, t) {
                function r(e, n) {
                    var t = [],
                        r = "",
                        o = 0;
                    for (r in e) i.call(e, r) && (t[o] = n(r, e[r]), o += 1);
                    return t
                }
                var i = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            5: [function(e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, i = t - n || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = e[n + r];
                    return o
                }
                n.exports = r
            }, {}],
            6: [function(e, n, t) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, n, t) {
                function r() {}

                function i(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? c(e, f, o) : o()
                    }

                    function t(t, r, i, o) {
                        if (!l.aborted || o) {
                            e && e(t, r, i);
                            for (var a = n(i), f = v(t), c = f.length, u = 0; u < c; u++) f[u].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function d(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t)
                            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || i(t)
                    }

                    function w(e, n) {
                        u(e, function(e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }
                    var h = {},
                        y = {},
                        b = {
                            on: d,
                            addEventListener: d,
                            removeEventListener: m,
                            emit: t,
                            get: g,
                            listeners: v,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function o() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (l.aborted = !0, s = l.backlog = {})
                }
                var f = "nr@context",
                    c = e("gos"),
                    u = e(4),
                    s = {},
                    p = {},
                    l = n.exports = i();
                l.backlog = s
            }, {}],
            gos: [function(e, n, t) {
                function r(e, n, t) {
                    if (i.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (o) {}
                    return e[n] = r, r
                }
                var i = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(e, n, t) {
                function r(e, n, t, r) {
                    i.buffer([e], r), i.emit(e, n, t)
                }
                var i = e("ee").get("handle");
                n.exports = r, r.ee = i
            }, {}],
            id: [function(e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, o, function() {
                        return i++
                    })
                }
                var i = 1,
                    o = "nr@id",
                    a = e("gos");
                n.exports = r
            }, {}],
            loader: [function(e, n, t) {
                function r() {
                    if (!x++) {
                        var e = E.info = NREUM.info,
                            n = d.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        u(y, function(n, t) {
                            e[n] || (e[n] = t)
                        }), c("mark", ["onload", a() + E.offset], null, "api");
                        var t = d.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function i() {
                    "complete" === d.readyState && o()
                }

                function o() {
                    c("mark", ["domContent", a() + E.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (f = Math.max((new Date).getTime(), f)) - E.offset
                }
                var f = (new Date).getTime(),
                    c = e("handle"),
                    u = e(4),
                    s = e("ee"),
                    p = e(3),
                    l = window,
                    d = l.document,
                    m = "addEventListener",
                    v = "attachEvent",
                    g = l.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: l.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: l.Request,
                    EV: l.Event,
                    PR: l.Promise,
                    MO: l.MutationObserver
                };
                var h = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1167.min.js"
                    },
                    b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    E = n.exports = {
                        offset: f,
                        now: a,
                        origin: h,
                        features: {},
                        xhrWrappable: b,
                        userAgent: p
                    };
                e(1), e(2), d[m] ? (d[m]("DOMContentLoaded", o, !1), l[m]("load", r, !1)) : (d[v]("onreadystatechange", i), l[v]("onload", r)), c("mark", ["firstbyte", f], null, "api");
                var x = 0,
                    O = e(6)
            }, {}],
            "wrap-function": [function(e, n, t) {
                function r(e) {
                    return !(e && e instanceof Function && e.apply && !e[a])
                }
                var i = e("ee"),
                    o = e(5),
                    a = "nr@original",
                    f = Object.prototype.hasOwnProperty,
                    c = !1;
                n.exports = function(e, n) {
                    function t(e, n, t, i) {
                        function nrWrapper() {
                            var r, a, f, c;
                            try {
                                a = this, r = o(arguments), f = "function" == typeof t ? t(r, a) : t || {}
                            } catch (u) {
                                l([u, "", [r, a, i], f])
                            }
                            s(n + "start", [r, a, i], f);
                            try {
                                return c = e.apply(a, r)
                            } catch (p) {
                                throw s(n + "err", [r, a, p], f), p
                            } finally {
                                s(n + "end", [r, a, c], f)
                            }
                        }
                        return r(e) ? e : (n || (n = ""), nrWrapper[a] = e, p(e, nrWrapper), nrWrapper)
                    }

                    function u(e, n, i, o) {
                        i || (i = "");
                        var a, f, c, u = "-" === i.charAt(0);
                        for (c = 0; c < n.length; c++) f = n[c], a = e[f], r(a) || (e[f] = t(a, u ? f + i : i, o, f))
                    }

                    function s(t, r, i) {
                        if (!c || n) {
                            var o = c;
                            c = !0;
                            try {
                                e.emit(t, r, i, n)
                            } catch (a) {
                                l([a, t, r, i])
                            }
                            c = o
                        }
                    }

                    function p(e, n) {
                        if (Object.defineProperty && Object.keys) try {
                            var t = Object.keys(e);
                            return t.forEach(function(t) {
                                Object.defineProperty(n, t, {
                                    get: function() {
                                        return e[t]
                                    },
                                    set: function(n) {
                                        return e[t] = n, n
                                    }
                                })
                            }), n
                        } catch (r) {
                            l([r])
                        }
                        for (var i in e) f.call(e, i) && (n[i] = e[i]);
                        return n
                    }

                    function l(n) {
                        try {
                            e.emit("internal-error", n)
                        } catch (t) {}
                    }
                    return e || (e = i), t.inPlace = u, t.flag = a, t
                }
            }, {}]
        }, {}, ["loader"]);
    </script>
    <script type="text/javascript">
        var initialTime = new Date().getTime();
        (function() {
            var appName = 'marketing-template-viewer';
            window.appStartLoadTime = window.performance && window.performance.now();
            window.fedops = window.fedops || {};
            window.fedops.apps = window.fedops.apps || {};
            window.fedops.apps[appName] = {
                startLoadTime: window.appStartLoadTime
            };
            try {
                window.fedops.sessionId = window.localStorage.getItem('fedops.logger.sessionId');
            } catch (e) {};
            window.fedops.sessionId = window.fedops.sessionId || 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
            (new Image()).src = '//frog.wix.com/fed?appName=' + appName + '&src=72&evid=14&session_id=' + window.fedops.sessionId;
        })();
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link type="image/png" href="//www.wix.com/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="https://static.parastorage.com/services/third-party/fonts/Helvetica/fontFace.css">
    <link rel="stylesheet" href="//static.parastorage.com/services/marketing-template-viewer/1.429.0/app.min.css">

    <meta name="description" content="Attract customers to your garage with this vintage website template, perfect for car, motorcycle and automotive specialists. With parallax scrolling and a slick gallery, this template is ready-to-go. Simply click edit to customize the text and images and create a website that reflects the tone of your garage. Start editing today to build your online presence.">
    <meta name="author" content="Wixpress">
    <meta http-equiv="content-language" content="en" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <meta property="og:title" content="Vintage Car Garage Website Template | WIX" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.wix.com/website-template/view/html/1732" />
    <meta property="og:image" content="//static.wixstatic.com/media/bb2140d03a054ab3ae7829f7a5c0fff1.jpg" />
    <meta content="Wix" property="og:site_name">
    <meta property="og:description" content="Attract customers to your garage with this vintage website template, perfect for car, motorcycle and automotive specialists. With parallax scrolling and a slick gallery, this template is ready-to-go. Simply click edit to customize the text and images and create a website that reflects the tone of your garage. Start editing today to build your online presence." />
    <meta property="fb:admins" content="731184828" />
    <meta name="fb:app_id" content="236335823061286" />
    <meta name="google-site-verification" content="QXhlrY-V2PWOmnGUb8no0L-fKzG48uJ5ozW0ukU7Rpo" />

    <link rel="canonical" href="https://www.wix.com/website-template/view/html/1732" />

    <link rel="alternate" hreflang="fr" href="https://fr.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="pt" href="https://pt.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="cs" href="https://cs.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="it" href="https://it.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="nl" href="https://nl.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="ko" href="https://ko.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="de" href="https://de.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="ru" href="https://ru.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="sv" href="https://sv.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="tr" href="https://tr.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="da" href="https://da.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="en" href="https://www.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="es" href="https://es.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="hi" href="https://hi.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="ja" href="https://ja.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="no" href="https://no.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="pl" href="https://pl.wix.com/website-template/view/html/1732" />
    <link rel="alternate" hreflang="x-default" href="https://www.wix.com/website-template/view/html/1732" />

</head>

<body>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDD5C4" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script type="text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MDD5C4');
    </script>
    <!-- End Google Tag Manager -->
    <div id="root">
        <div data-hooks="app" data-reactroot="" data-reactid="1" data-react-checksum="671448873">
            <div data-hooks="tool-bar" class="_3yYlx" data-reactid="2">
                <div class="_2niqx" data-reactid="3"><a data-hooks="logo" href="https://www.wix.com" class="_3oARm _1Ovqs" data-reactid="4"><span class="eFDrj" data-reactid="5">wix.com</span></a>
                    <div class="_2niqx" data-reactid="6">
                        <button data-hooks="desktop-view" class="_3auGo utNMm" data-reactid="7"><span class="_2Ygqo" data-reactid="8">show desktop view</span></button>
                        <hr class="q83pv" data-reactid="9" />
                        <button data-hooks="mobile-view" class="_2mKdn " data-reactid="10"><span class="_2Ygqo" data-reactid="11">show mobile view</span></button>
                    </div>
                </div>
                <div class="_2niqx _2J9NU" data-reactid="12">
                    <p data-hooks="tool-bar-title" class="_2Jn5b" data-reactid="13">Click Edit and create your own amazing website</p><a data-hooks="info-view" class="_1JERd " tabindex="0" role="dialog" href="#" data-reactid="14">Read More</a><a class="_2tj5k" data-hooks="editor-link" href="https://editor.wix.com/html/editor/web/renderer/new?metaSiteId=cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c&amp;siteId=648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3&amp;editorSessionId=45F95EB7-61CF-495E-39D8-0D143F4E9E22" target="_blank" tabindex="0" data-reactid="15">Edit this site</a>
                    <label data-hooks="price" class="_2sxoU" data-reactid="16">
                        <!-- react-text: 17 -->Price:
                        <!-- /react-text -->
                        <!-- react-text: 18 -->
                        <!-- /react-text -->
                        <!-- react-text: 19 -->Free
                        <!-- /react-text -->
                    </label>
                </div>
            </div>
            <div data-hooks="template-demo" class="_1qF-6 " data-reactid="20">
                <div data-hooks="desktop-view" class="_3W_Qh" data-reactid="21">
                    <iframe data-hooks="desktop-iframe" src="https://www.wix.com/demone2/vintage-car-garage" width="100%" height="100%" class="_2oDbB" data-reactid="22"></iframe>
                </div>
            </div>
            <div data-hooks="info-pop-up" class="moyRL " data-reactid="23">
                <div class="_3sdF3" data-reactid="24">
                    <button data-hooks="card-close" class="_3nPGC" data-reactid="25"><span class="b6lR7" data-reactid="26">close info popup</span></button>
                    <div class="_3G2Wr" data-reactid="27">
                        <h1 data-hooks="card-title" class="_36ndT" data-reactid="28">Vintage Car Garage - Website Template</h1>
                        <div class="_3C1IB" data-reactid="29">
                            <h3 data-hooks="card-good-for-title" class="_3wC-t" data-reactid="30">Good For:</h3>
                            <p data-hooks="card-good-for" class="_25OEI" data-reactid="31">Car, motorcycle and automotive specialists.</p>
                        </div>
                        <div class="_3C1IB" data-reactid="32">
                            <h3 class="_3wC-t" data-reactid="33">Description:</h3>
                            <p data-hooks="card-description" class="_25OEI" data-reactid="34">Attract customers to your garage with this vintage website template, perfect for car, motorcycle and automotive specialists. With parallax scrolling and a slick gallery, this template is ready-to-go. Simply click edit to customize the text and images and create a website that reflects the tone of your garage. Start editing today to build your online presence.</p>
                        </div>
                        <p class="_25OEI _3C1IB _1favE" data-reactid="35"><span class="_3wC-t" data-reactid="36">Price:</span>
                            <!-- react-text: 37 -->
                            <!-- /react-text -->
                            <!-- react-text: 38 -->Free
                            <!-- /react-text -->
                        </p>
                    </div>
                    <div class="_8CQO7" data-reactid="39"><a data-hooks="card-editor-url" class="_15Xoe _2VXta" target="_blank" href="https://editor.wix.com/html/editor/web/renderer/new?metaSiteId=cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c&amp;siteId=648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3&amp;editorSessionId=45F95EB7-61CF-495E-39D8-0D143F4E9E22" data-reactid="40">Edit Now</a></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.__BASEURL__ = '/website-template/view/html/';
        window.__INITIAL_I18N__ = {
            "locale": "en",
            "resources": {
                "Price": "Price",
                "Edit Template": "",
                "About This Template": "",
                "Description": "",
                "Good For": "",
                "template.viewer.page.title": "{{- title}} Website Template | WIX",
                "template_button_label": "Edit Website",
                "template_seeFeatures_label": "See All Features",
                "template_expand_examples_text": "Great for",
                "template_expand_header": "Template Features",
                "template.viewer.title": "Click Edit and create your own amazing website",
                "template.viewer.edit.button": "Edit this site",
                "template.viewer.read.more": "Read More",
                "template.viewer.back": "Back",
                "template.viewer.info.edit.button": "Edit Now",
                "template.viewer.price": "Price:",
                "template.viewer.info.title": "{{- title}} - Website Template",
                "template.viewer.info.goodFor": "Good For:",
                "template.viewer.info.description": "Description:",
                "template.viewer.info.desktop.only.notice": "Edit this template by going to Wix.com from your desktop, where you can customise any of our beautiful templates.",
                "template.viewer.see.all.templates": "See All Templates",
                "template.viewer.features": "Features",
                "template.viewer.allFeatures": "All Features",
                "template.viewer.templates": "Templates",
                "template.viewer.allTemplates": "All Templates",
                "template.viewer.tutorials": "Tutorials",
                "template.viewer.requestBetaAccess": "Request Beta Access",
                "template.viewer.updatesAndReleases": "Updates & Releases",
                "template.viewer.comingSoon": "Coming soon",
                "template.viewer.academy": "Academy",
                "template.viewer.editTemplate": "Edit Template",
                "a11y.desktop.button": "show desktop view",
                "a11y.mobile.button": "show mobile view",
                "a11y.close.popup.button": "close info popup",
                "messages_test": "test"
            }
        }
        window.__INITIAL_STATE__ = {
            "view": {
                "selected": "desktop"
            },
            "loading": {
                "active": false
            },
            "template": {
                "title": "Vintage Car Garage",
                "description": "Attract customers to your garage with this vintage website template, perfect for car, motorcycle and automotive specialists. With parallax scrolling and a slick gallery, this template is ready-to-go. Simply click edit to customize the text and images and create a website that reflects the tone of your garage. Start editing today to build your online presence.",
                "image": "bb2140d03a054ab3ae7829f7a5c0fff1.jpg",
                "id": "1732",
                "lng": "en",
                "price": "Free",
                "docUrl": "https:\u002F\u002Fwww.wix.com\u002Fdemone2\u002Fvintage-car-garage",
                "editorUrl": "https:\u002F\u002Feditor.wix.com\u002Fhtml\u002Feditor\u002Fweb\u002Frenderer\u002Fnew?metaSiteId=cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c&siteId=648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3&editorSessionId=45F95EB7-61CF-495E-39D8-0D143F4E9E22",
                "goodFor": "Car, motorcycle and automotive specialists.",
                "siteId": "648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3",
                "metaSiteId": "cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c",
                "editorSessionId": "45F95EB7-61CF-495E-39D8-0D143F4E9E22",
                "isResponsive": false,
                "url": "https:\u002F\u002Fwww.wix.com\u002Fdemone2\u002Fvintage-car-garage"
            },
            "info": {
                "show": false
            },
            "experiments": {
                "active": ["EnableAnonMainFunnelIntro", "MarketingSubmissionsUseEncryptedDb", "TemplatesGallerySearchToCMS", "TemplatesGalleryDatasourceToCMS", "TemplateViewerUseNewLightboxDealer", "TemplateViewerDatasourceToCMS", "TemplatesViewerEmbedChat", "TemplateViewerResponsiveHeader"]
            },
            "originUrl": "https:\u002F\u002Fwww.wix.com\u002Fwebsite\u002Ftemplates\u002Fhtml\u002Fbusiness",
            "config": {
                "locale": "en",
                "dealerCmsTranslationsUrl": "\u002F\u002Fstatic.parastorage.com\u002Fservices\u002Fdealer-cms-translations\u002F1.2152.0\u002F",
                "dealerLightboxUrl": "\u002F\u002Fstatic.parastorage.com\u002Fservices\u002Fdealer-lightbox\u002F1.427.0\u002F"
            }
        };
        window.__BI__ = {
            "siteId": "648ae4f3-0bc8-46c6-becc-8bbf3ccc2ab3",
            "metaSiteId": "cb21959b-8635-4fa8-9fd7-b85fe6cd7f3c",
            "originUrl": "https:\u002F\u002Fwww.wix.com\u002Fwebsite\u002Ftemplates\u002Fhtml\u002Fbusiness"
        };
        window.__BI__.initialTime = initialTime;
        window.__DEVICE__ = 'desktop';
    </script>
    <script src="https://static.parastorage.com/unpkg/react@15.6.2/dist/react.min.js" crossorigin></script>
    <script src="https://static.parastorage.com/unpkg/react-dom@15.6.2/dist/react-dom.min.js" crossorigin></script>
    <script src="https://static.parastorage.com/unpkg/@wix/marketing-cookie-notification@1.0.429/dist/statics/app.bundle.min.js"></script>

    <script src="//static.parastorage.com/services/dealer-lightbox/1.427.0/dealer-lightbox.bundle.min.js"></script>

    <script src="//static.parastorage.com/services/marketing-template-viewer/1.429.0/app.bundle.min.js"></script>
</body>

</html>