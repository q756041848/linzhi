/* Modernizr 2.7.1 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-inlinesvg-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes
 */
;
window.Modernizr = function (a, b, c) {
    function B(a) {
        j.cssText = a
    }

    function C(a, b) {
        return B(m.join(a + ";") + (b || ""))
    }

    function D(a, b) {
        return typeof a === b
    }

    function E(a, b) {
        return !!~("" + a).indexOf(b)
    }

    function F(a, b) {
        for (var d in a) {
            var e = a[d];
            if (!E(e, "-") && j[e] !== c) return b == "pfx" ? e : !0
        }
        return !1
    }

    function G(a, b, d) {
        for (var e in a) {
            var f = b[a[e]];
            if (f !== c) return d === !1 ? a[e] : D(f, "function") ? f.bind(d || b) : f
        }
        return !1
    }

    function H(a, b, c) {
        var d = a.charAt(0).toUpperCase() + a.slice(1),
            e = (a + " " + o.join(d + " ") + d).split(" ");
        return D(b, "string") || D(b, "undefined") ? F(e, b) : (e = (a + " " + p.join(d + " ") + d).split(" "), G(e, b, c))
    }
    var d = "2.7.1",
        e = {},
        f = !0,
        g = b.documentElement,
        h = "modernizr",
        i = b.createElement(h),
        j = i.style,
        k, l = {}.toString,
        m = " -webkit- -moz- -o- -ms- ".split(" "),
        n = "Webkit Moz O ms",
        o = n.split(" "),
        p = n.toLowerCase().split(" "),
        q = {
            svg: "http://www.w3.org/2000/svg"
        },
        r = {},
        s = {},
        t = {},
        u = [],
        v = u.slice,
        w, x = function (a, c, d, e) {
            var f, i, j, k, l = b.createElement("div"),
                m = b.body,
                n = m || b.createElement("body");
            if (parseInt(d, 10))
                while (d--) j = b.createElement("div"), j.id = e ? e[d] : h + (d + 1), l.appendChild(j);
            return f = ["&#173;", '<style id="s', h, '">', a, "</style>"].join(""), l.id = h, (m ? l : n).innerHTML += f, n.appendChild(l), m || (n.style.background = "", n.style.overflow = "hidden", k = g.style.overflow, g.style.overflow = "hidden", g.appendChild(n)), i = c(l, a), m ? l.parentNode.removeChild(l) : (n.parentNode.removeChild(n), g.style.overflow = k), !!i
        },
        y = function () {
            function d(d, e) {
                e = e || b.createElement(a[d] || "div"), d = "on" + d;
                var f = d in e;
                return f || (e.setAttribute || (e = b.createElement("div")), e.setAttribute && e.removeAttribute && (e.setAttribute(d, ""), f = D(e[d], "function"), D(e[d], "undefined") || (e[d] = c), e.removeAttribute(d))), e = null, f
            }
            var a = {
                select: "input",
                change: "input",
                submit: "form",
                reset: "form",
                error: "img",
                load: "img",
                abort: "img"
            };
            return d
        }(),
        z = {}.hasOwnProperty,
        A;
    !D(z, "undefined") && !D(z.call, "undefined") ? A = function (a, b) {
        return z.call(a, b)
    } : A = function (a, b) {
        return b in a && D(a.constructor.prototype[b], "undefined")
    }, Function.prototype.bind || (Function.prototype.bind = function (b) {
        var c = this;
        if (typeof c != "function") throw new TypeError;
        var d = v.call(arguments, 1),
            e = function () {
                if (this instanceof e) {
                    var a = function () {};
                    a.prototype = c.prototype;
                    var f = new a,
                        g = c.apply(f, d.concat(v.call(arguments)));
                    return Object(g) === g ? g : f
                }
                return c.apply(b, d.concat(v.call(arguments)))
            };
        return e
    }), r.inlinesvg = function () {
        var a = b.createElement("div");
        return a.innerHTML = "<svg/>", (a.firstChild && a.firstChild.namespaceURI) == q.svg
    };
    for (var I in r) A(r, I) && (w = I.toLowerCase(), e[w] = r[I](), u.push((e[w] ? "" : "no-") + w));
    return e.addTest = function (a, b) {
            if (typeof a == "object")
                for (var d in a) A(a, d) && e.addTest(d, a[d]);
            else {
                a = a.toLowerCase();
                if (e[a] !== c) return e;
                b = typeof b == "function" ? b() : b, typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), e[a] = b
            }
            return e
        }, B(""), i = k = null,
        function (a, b) {
            function l(a, b) {
                var c = a.createElement("p"),
                    d = a.getElementsByTagName("head")[0] || a.documentElement;
                return c.innerHTML = "x<style>" + b + "</style>", d.insertBefore(c.lastChild, d.firstChild)
            }

            function m() {
                var a = s.elements;
                return typeof a == "string" ? a.split(" ") : a
            }

            function n(a) {
                var b = j[a[h]];
                return b || (b = {}, i++, a[h] = i, j[i] = b), b
            }

            function o(a, c, d) {
                c || (c = b);
                if (k) return c.createElement(a);
                d || (d = n(c));
                var g;
                return d.cache[a] ? g = d.cache[a].cloneNode() : f.test(a) ? g = (d.cache[a] = d.createElem(a)).cloneNode() : g = d.createElem(a), g.canHaveChildren && !e.test(a) && !g.tagUrn ? d.frag.appendChild(g) : g
            }

            function p(a, c) {
                a || (a = b);
                if (k) return a.createDocumentFragment();
                c = c || n(a);
                var d = c.frag.cloneNode(),
                    e = 0,
                    f = m(),
                    g = f.length;
                for (; e < g; e++) d.createElement(f[e]);
                return d
            }

            function q(a, b) {
                b.cache || (b.cache = {}, b.createElem = a.createElement, b.createFrag = a.createDocumentFragment, b.frag = b.createFrag()), a.createElement = function (c) {
                    return s.shivMethods ? o(c, a, b) : b.createElem(c)
                }, a.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + m().join().replace(/[\w\-]+/g, function (a) {
                    return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")'
                }) + ");return n}")(s, b.frag)
            }

            function r(a) {
                a || (a = b);
                var c = n(a);
                return s.shivCSS && !g && !c.hasCSS && (c.hasCSS = !!l(a, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), k || q(a, c), a
            }
            var c = "3.7.0",
                d = a.html5 || {},
                e = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                g, h = "_html5shiv",
                i = 0,
                j = {},
                k;
            (function () {
                try {
                    var a = b.createElement("a");
                    a.innerHTML = "<xyz></xyz>", g = "hidden" in a, k = a.childNodes.length == 1 || function () {
                        b.createElement("a");
                        var a = b.createDocumentFragment();
                        return typeof a.cloneNode == "undefined" || typeof a.createDocumentFragment == "undefined" || typeof a.createElement == "undefined"
                    }()
                } catch (c) {
                    g = !0, k = !0
                }
            })();
            var s = {
                elements: d.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
                version: c,
                shivCSS: d.shivCSS !== !1,
                supportsUnknownElements: k,
                shivMethods: d.shivMethods !== !1,
                type: "default",
                shivDocument: r,
                createElement: o,
                createDocumentFragment: p
            };
            a.html5 = s, r(b)
        }(this, b), e._version = d, e._prefixes = m, e._domPrefixes = p, e._cssomPrefixes = o, e.hasEvent = y, e.testProp = function (a) {
            return F([a])
        }, e.testAllProps = H, e.testStyles = x, e.prefixed = function (a, b, c) {
            return b ? H(a, b, c) : H(a, "pfx")
        }, g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + u.join(" ") : ""), e
}(this, this.document);
// personal center
function g(o) {
    return document.getElementById(o);
}

function hoverli(n) {
    for (var i = 1; i <=9; i++) {
        g('tb_' + i).className = 'layui-nav-item';
        g('tbc_0' + i).className = 'undis';
    }
    g('tbc_0' + n).className = 'layui-card';
    g('tb_' + n).className = 'layui-nav-item layui-this';
}

function fun() {
    hoverli(3);
}

function hoverli2(n) {
    for (var i = 1; i <= 9; i++) {
        g('js_' + i).className = 'layui-nav-item';
        g('jsc_0' + i).className = 'undis';
    }
    g('jsc_0' + n).className = 'layui-card';
    g('js_' + n).className = 'layui-nav-item layui-this';
}

function fun2() {
    hoverli2(3);
}

function hoverli3(n) {
    for (var i = 1; i <= 9; i++) {
        g('be_' + i).className = 'layui-nav-item';
        g('bec_0' + i).className = 'undis';
    }
    g('bec_0' + n).className = 'layui-card';
    g('be_' + n).className = 'layui-nav-item layui-this';
}

function fun3() {
    hoverli2(3);
}
//如果要做成点击后再转到请将<li>中的onmouseover 改成 onclick;