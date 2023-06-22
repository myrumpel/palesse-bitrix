
; /* Start:"a:4:{s:4:"full";s:62:"/local/templates/palesse/assets/js/app.min.js?1687354475329809";s:6:"source";s:45:"/local/templates/palesse/assets/js/app.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
;(() => {
	'use strict'
	function e(e) {
		if (void 0 === e)
			throw new ReferenceError(
				"this hasn't been initialised - super() hasn't been called"
			)
		return e
	}
	function t(e, t) {
		;(e.prototype = Object.create(t.prototype)),
			(e.prototype.constructor = e),
			(e.__proto__ = t)
	}
	/*!
	 * GSAP 3.11.5
	 * https://greensock.com
	 *
	 * @license Copyright 2008-2023, GreenSock. All rights reserved.
	 * Subject to the terms at https://greensock.com/standard-license or for
	 * Club GreenSock members, the agreement issued with that membership.
	 * @author: Jack Doyle, jack@greensock.com
	 */ var n,
		r,
		i,
		s,
		a,
		o,
		l,
		c,
		u,
		d,
		p,
		f,
		h,
		m,
		g,
		v = {
			autoSleep: 120,
			force3D: 'auto',
			nullTargetWarn: 1,
			units: { lineHeight: '' },
		},
		_ = { duration: 0.5, overwrite: !1, delay: 0 },
		y = 1e8,
		b = 1e-8,
		w = 2 * Math.PI,
		x = w / 4,
		T = 0,
		S = Math.sqrt,
		C = Math.cos,
		E = Math.sin,
		k = function (e) {
			return 'string' == typeof e
		},
		M = function (e) {
			return 'function' == typeof e
		},
		A = function (e) {
			return 'number' == typeof e
		},
		P = function (e) {
			return void 0 === e
		},
		O = function (e) {
			return 'object' == typeof e
		},
		L = function (e) {
			return !1 !== e
		},
		D = function () {
			return 'undefined' != typeof window
		},
		z = function (e) {
			return M(e) || k(e)
		},
		$ =
			('function' == typeof ArrayBuffer && ArrayBuffer.isView) ||
			function () {},
		I = Array.isArray,
		B = /(?:-?\.?\d|\.)+/gi,
		q = /[-+=.]*\d+[.e\-+]*\d*[e\-+]*\d*/g,
		R = /[-+=.]*\d+[.e-]*\d*[a-z%]*/g,
		F = /[-+=.]*\d+\.?\d*(?:e-|e\+)?\d*/gi,
		N = /[+-]=-?[.\d]+/,
		j = /[^,'"\[\]\s]+/gi,
		G = /^[+\-=e\s\d]*\d+[.\d]*([a-z]*|%)\s*$/i,
		Y = {},
		V = {},
		H = function (e) {
			return (V = we(e, Y)) && xn
		},
		W = function (e, t) {
			return console.warn(
				'Invalid property',
				e,
				'set to',
				t,
				'Missing plugin? gsap.registerPlugin()'
			)
		},
		X = function (e, t) {
			return !t && console.warn(e)
		},
		U = function (e, t) {
			return (e && (Y[e] = t) && V && (V[e] = t)) || Y
		},
		K = function () {
			return 0
		},
		Q = { suppressEvents: !0, isStart: !0, kill: !1 },
		Z = { suppressEvents: !0, kill: !1 },
		J = { suppressEvents: !0 },
		ee = {},
		te = [],
		ne = {},
		re = {},
		ie = {},
		se = 30,
		ae = [],
		oe = '',
		le = function (e) {
			var t,
				n,
				r = e[0]
			if ((O(r) || M(r) || (e = [e]), !(t = (r._gsap || {}).harness))) {
				for (n = ae.length; n-- && !ae[n].targetTest(r); );
				t = ae[n]
			}
			for (n = e.length; n--; )
				(e[n] && (e[n]._gsap || (e[n]._gsap = new It(e[n], t)))) ||
					e.splice(n, 1)
			return e
		},
		ce = function (e) {
			return e._gsap || le(Je(e))[0]._gsap
		},
		ue = function (e, t, n) {
			return (n = e[t]) && M(n)
				? e[t]()
				: (P(n) && e.getAttribute && e.getAttribute(t)) || n
		},
		de = function (e, t) {
			return (e = e.split(',')).forEach(t) || e
		},
		pe = function (e) {
			return Math.round(1e5 * e) / 1e5 || 0
		},
		fe = function (e) {
			return Math.round(1e7 * e) / 1e7 || 0
		},
		he = function (e, t) {
			var n = t.charAt(0),
				r = parseFloat(t.substr(2))
			return (
				(e = parseFloat(e)),
				'+' === n ? e + r : '-' === n ? e - r : '*' === n ? e * r : e / r
			)
		},
		me = function (e, t) {
			for (var n = t.length, r = 0; e.indexOf(t[r]) < 0 && ++r < n; );
			return r < n
		},
		ge = function () {
			var e,
				t,
				n = te.length,
				r = te.slice(0)
			for (ne = {}, te.length = 0, e = 0; e < n; e++)
				(t = r[e]) &&
					t._lazy &&
					(t.render(t._lazy[0], t._lazy[1], !0)._lazy = 0)
		},
		ve = function (e, t, n, i) {
			te.length && !r && ge(),
				e.render(t, n, i || (r && t < 0 && (e._initted || e._startAt))),
				te.length && !r && ge()
		},
		_e = function (e) {
			var t = parseFloat(e)
			return (t || 0 === t) && (e + '').match(j).length < 2
				? t
				: k(e)
				? e.trim()
				: e
		},
		ye = function (e) {
			return e
		},
		be = function (e, t) {
			for (var n in t) n in e || (e[n] = t[n])
			return e
		},
		we = function (e, t) {
			for (var n in t) e[n] = t[n]
			return e
		},
		xe = function e(t, n) {
			for (var r in n)
				'__proto__' !== r &&
					'constructor' !== r &&
					'prototype' !== r &&
					(t[r] = O(n[r]) ? e(t[r] || (t[r] = {}), n[r]) : n[r])
			return t
		},
		Te = function (e, t) {
			var n,
				r = {}
			for (n in e) n in t || (r[n] = e[n])
			return r
		},
		Se = function (e) {
			var t,
				n = e.parent || s,
				r = e.keyframes
					? ((t = I(e.keyframes)),
					  function (e, n) {
							for (var r in n)
								r in e ||
									('duration' === r && t) ||
									'ease' === r ||
									(e[r] = n[r])
					  })
					: be
			if (L(e.inherit))
				for (; n; ) r(e, n.vars.defaults), (n = n.parent || n._dp)
			return e
		},
		Ce = function (e, t, n, r, i) {
			void 0 === n && (n = '_first'), void 0 === r && (r = '_last')
			var s,
				a = e[r]
			if (i) for (s = t[i]; a && a[i] > s; ) a = a._prev
			return (
				a
					? ((t._next = a._next), (a._next = t))
					: ((t._next = e[n]), (e[n] = t)),
				t._next ? (t._next._prev = t) : (e[r] = t),
				(t._prev = a),
				(t.parent = t._dp = e),
				t
			)
		},
		Ee = function (e, t, n, r) {
			void 0 === n && (n = '_first'), void 0 === r && (r = '_last')
			var i = t._prev,
				s = t._next
			i ? (i._next = s) : e[n] === t && (e[n] = s),
				s ? (s._prev = i) : e[r] === t && (e[r] = i),
				(t._next = t._prev = t.parent = null)
		},
		ke = function (e, t) {
			e.parent && (!t || e.parent.autoRemoveChildren) && e.parent.remove(e),
				(e._act = 0)
		},
		Me = function (e, t) {
			if (e && (!t || t._end > e._dur || t._start < 0))
				for (var n = e; n; ) (n._dirty = 1), (n = n.parent)
			return e
		},
		Ae = function (e, t, n, i) {
			return (
				e._startAt &&
				(r
					? e._startAt.revert(Z)
					: (e.vars.immediateRender && !e.vars.autoRevert) ||
					  e._startAt.render(t, !0, i))
			)
		},
		Pe = function e(t) {
			return !t || (t._ts && e(t.parent))
		},
		Oe = function (e) {
			return e._repeat ? Le(e._tTime, (e = e.duration() + e._rDelay)) * e : 0
		},
		Le = function (e, t) {
			var n = Math.floor((e /= t))
			return e && n === e ? n - 1 : n
		},
		De = function (e, t) {
			return (
				(e - t._start) * t._ts +
				(t._ts >= 0 ? 0 : t._dirty ? t.totalDuration() : t._tDur)
			)
		},
		ze = function (e) {
			return (e._end = fe(
				e._start + (e._tDur / Math.abs(e._ts || e._rts || b) || 0)
			))
		},
		$e = function (e, t) {
			var n = e._dp
			return (
				n &&
					n.smoothChildTiming &&
					e._ts &&
					((e._start = fe(
						n._time -
							(e._ts > 0
								? t / e._ts
								: ((e._dirty ? e.totalDuration() : e._tDur) - t) / -e._ts)
					)),
					ze(e),
					n._dirty || Me(n, e)),
				e
			)
		},
		Ie = function (e, t) {
			var n
			if (
				((t._time || (t._initted && !t._dur)) &&
					((n = De(e.rawTime(), t)),
					(!t._dur || Xe(0, t.totalDuration(), n) - t._tTime > b) &&
						t.render(n, !0)),
				Me(e, t)._dp && e._initted && e._time >= e._dur && e._ts)
			) {
				if (e._dur < e.duration())
					for (n = e; n._dp; )
						n.rawTime() >= 0 && n.totalTime(n._tTime), (n = n._dp)
				e._zTime = -1e-8
			}
		},
		Be = function (e, t, n, r) {
			return (
				t.parent && ke(t),
				(t._start = fe(
					(A(n) ? n : n || e !== s ? Ve(e, n, t) : e._time) + t._delay
				)),
				(t._end = fe(
					t._start + (t.totalDuration() / Math.abs(t.timeScale()) || 0)
				)),
				Ce(e, t, '_first', '_last', e._sort ? '_start' : 0),
				Ne(t) || (e._recent = t),
				r || Ie(e, t),
				e._ts < 0 && $e(e, e._tTime),
				e
			)
		},
		qe = function (e, t) {
			return (
				(Y.ScrollTrigger || W('scrollTrigger', t)) &&
				Y.ScrollTrigger.create(t, e)
			)
		},
		Re = function (e, t, n, i, s) {
			return (
				Yt(e, t, s),
				e._initted
					? !n &&
					  e._pt &&
					  !r &&
					  ((e._dur && !1 !== e.vars.lazy) || (!e._dur && e.vars.lazy)) &&
					  u !== Tt.frame
						? (te.push(e), (e._lazy = [s, i]), 1)
						: void 0
					: 1
			)
		},
		Fe = function e(t) {
			var n = t.parent
			return n && n._ts && n._initted && !n._lock && (n.rawTime() < 0 || e(n))
		},
		Ne = function (e) {
			var t = e.data
			return 'isFromStart' === t || 'isStart' === t
		},
		je = function (e, t, n, r) {
			var i = e._repeat,
				s = fe(t) || 0,
				a = e._tTime / e._tDur
			return (
				a && !r && (e._time *= s / e._dur),
				(e._dur = s),
				(e._tDur = i ? (i < 0 ? 1e10 : fe(s * (i + 1) + e._rDelay * i)) : s),
				a > 0 && !r && $e(e, (e._tTime = e._tDur * a)),
				e.parent && ze(e),
				n || Me(e.parent, e),
				e
			)
		},
		Ge = function (e) {
			return e instanceof qt ? Me(e) : je(e, e._dur)
		},
		Ye = { _start: 0, endTime: K, totalDuration: K },
		Ve = function e(t, n, r) {
			var i,
				s,
				a,
				o = t.labels,
				l = t._recent || Ye,
				c = t.duration() >= y ? l.endTime(!1) : t._dur
			return k(n) && (isNaN(n) || n in o)
				? ((s = n.charAt(0)),
				  (a = '%' === n.substr(-1)),
				  (i = n.indexOf('=')),
				  '<' === s || '>' === s
						? (i >= 0 && (n = n.replace(/=/, '')),
						  ('<' === s ? l._start : l.endTime(l._repeat >= 0)) +
								(parseFloat(n.substr(1)) || 0) *
									(a ? (i < 0 ? l : r).totalDuration() / 100 : 1))
						: i < 0
						? (n in o || (o[n] = c), o[n])
						: ((s = parseFloat(n.charAt(i - 1) + n.substr(i + 1))),
						  a && r && (s = (s / 100) * (I(r) ? r[0] : r).totalDuration()),
						  i > 1 ? e(t, n.substr(0, i - 1), r) + s : c + s))
				: null == n
				? c
				: +n
		},
		He = function (e, t, n) {
			var r,
				i,
				s = A(t[1]),
				a = (s ? 2 : 1) + (e < 2 ? 0 : 1),
				o = t[a]
			if ((s && (o.duration = t[1]), (o.parent = n), e)) {
				for (r = o, i = n; i && !('immediateRender' in r); )
					(r = i.vars.defaults || {}), (i = L(i.vars.inherit) && i.parent)
				;(o.immediateRender = L(r.immediateRender)),
					e < 2 ? (o.runBackwards = 1) : (o.startAt = t[a - 1])
			}
			return new Ut(t[0], o, t[a + 1])
		},
		We = function (e, t) {
			return e || 0 === e ? t(e) : t
		},
		Xe = function (e, t, n) {
			return n < e ? e : n > t ? t : n
		},
		Ue = function (e, t) {
			return k(e) && (t = G.exec(e)) ? t[1] : ''
		},
		Ke = [].slice,
		Qe = function (e, t) {
			return (
				e &&
				O(e) &&
				'length' in e &&
				((!t && !e.length) || (e.length - 1 in e && O(e[0]))) &&
				!e.nodeType &&
				e !== a
			)
		},
		Ze = function (e, t, n) {
			return (
				void 0 === n && (n = []),
				e.forEach(function (e) {
					var r
					return (k(e) && !t) || Qe(e, 1)
						? (r = n).push.apply(r, Je(e))
						: n.push(e)
				}) || n
			)
		},
		Je = function (e, t, n) {
			return i && !t && i.selector
				? i.selector(e)
				: !k(e) || n || (!o && St())
				? I(e)
					? Ze(e, n)
					: Qe(e)
					? Ke.call(e, 0)
					: e
					? [e]
					: []
				: Ke.call((t || l).querySelectorAll(e), 0)
		},
		et = function (e) {
			return (
				(e = Je(e)[0] || X('Invalid scope') || {}),
				function (t) {
					var n = e.current || e.nativeElement || e
					return Je(
						t,
						n.querySelectorAll
							? n
							: n === e
							? X('Invalid scope') || l.createElement('div')
							: e
					)
				}
			)
		},
		tt = function (e) {
			return e.sort(function () {
				return 0.5 - Math.random()
			})
		},
		nt = function (e) {
			if (M(e)) return e
			var t = O(e) ? e : { each: e },
				n = Ot(t.ease),
				r = t.from || 0,
				i = parseFloat(t.base) || 0,
				s = {},
				a = r > 0 && r < 1,
				o = isNaN(r) || a,
				l = t.axis,
				c = r,
				u = r
			return (
				k(r)
					? (c = u = { center: 0.5, edges: 0.5, end: 1 }[r] || 0)
					: !a && o && ((c = r[0]), (u = r[1])),
				function (e, a, d) {
					var p,
						f,
						h,
						m,
						g,
						v,
						_,
						b,
						w,
						x = (d || t).length,
						T = s[x]
					if (!T) {
						if (!(w = 'auto' === t.grid ? 0 : (t.grid || [1, y])[1])) {
							for (
								_ = -y;
								_ < (_ = d[w++].getBoundingClientRect().left) && w < x;

							);
							w--
						}
						for (
							T = s[x] = [],
								p = o ? Math.min(w, x) * c - 0.5 : r % w,
								f = w === y ? 0 : o ? (x * u) / w - 0.5 : (r / w) | 0,
								_ = 0,
								b = y,
								v = 0;
							v < x;
							v++
						)
							(h = (v % w) - p),
								(m = f - ((v / w) | 0)),
								(T[v] = g = l ? Math.abs('y' === l ? m : h) : S(h * h + m * m)),
								g > _ && (_ = g),
								g < b && (b = g)
						'random' === r && tt(T),
							(T.max = _ - b),
							(T.min = b),
							(T.v = x =
								(parseFloat(t.amount) ||
									parseFloat(t.each) *
										(w > x
											? x - 1
											: l
											? 'y' === l
												? x / w
												: w
											: Math.max(w, x / w)) ||
									0) * ('edges' === r ? -1 : 1)),
							(T.b = x < 0 ? i - x : i),
							(T.u = Ue(t.amount || t.each) || 0),
							(n = n && x < 0 ? At(n) : n)
					}
					return (
						(x = (T[e] - T.min) / T.max || 0),
						fe(T.b + (n ? n(x) : x) * T.v) + T.u
					)
				}
			)
		},
		rt = function (e) {
			var t = Math.pow(10, ((e + '').split('.')[1] || '').length)
			return function (n) {
				var r = fe(Math.round(parseFloat(n) / e) * e * t)
				return (r - (r % 1)) / t + (A(n) ? 0 : Ue(n))
			}
		},
		it = function (e, t) {
			var n,
				r,
				i = I(e)
			return (
				!i &&
					O(e) &&
					((n = i = e.radius || y),
					e.values
						? ((e = Je(e.values)), (r = !A(e[0])) && (n *= n))
						: (e = rt(e.increment))),
				We(
					t,
					i
						? M(e)
							? function (t) {
									return (r = e(t)), Math.abs(r - t) <= n ? r : t
							  }
							: function (t) {
									for (
										var i,
											s,
											a = parseFloat(r ? t.x : t),
											o = parseFloat(r ? t.y : 0),
											l = y,
											c = 0,
											u = e.length;
										u--;

									)
										(i = r
											? (i = e[u].x - a) * i + (s = e[u].y - o) * s
											: Math.abs(e[u] - a)) < l && ((l = i), (c = u))
									return (
										(c = !n || l <= n ? e[c] : t),
										r || c === t || A(t) ? c : c + Ue(t)
									)
							  }
						: rt(e)
				)
			)
		},
		st = function (e, t, n, r) {
			return We(I(e) ? !t : !0 === n ? !!(n = 0) : !r, function () {
				return I(e)
					? e[~~(Math.random() * e.length)]
					: (n = n || 1e-5) &&
							(r = n < 1 ? Math.pow(10, (n + '').length - 2) : 1) &&
							Math.floor(
								Math.round(
									(e - n / 2 + Math.random() * (t - e + 0.99 * n)) / n
								) *
									n *
									r
							) / r
			})
		},
		at = function (e, t, n) {
			return We(n, function (n) {
				return e[~~t(n)]
			})
		},
		ot = function (e) {
			for (var t, n, r, i, s = 0, a = ''; ~(t = e.indexOf('random(', s)); )
				(r = e.indexOf(')', t)),
					(i = '[' === e.charAt(t + 7)),
					(n = e.substr(t + 7, r - t - 7).match(i ? j : B)),
					(a +=
						e.substr(s, t - s) +
						st(i ? n : +n[0], i ? 0 : +n[1], +n[2] || 1e-5)),
					(s = r + 1)
			return a + e.substr(s, e.length - s)
		},
		lt = function (e, t, n, r, i) {
			var s = t - e,
				a = r - n
			return We(i, function (t) {
				return n + (((t - e) / s) * a || 0)
			})
		},
		ct = function (e, t, n) {
			var r,
				i,
				s,
				a = e.labels,
				o = y
			for (r in a)
				(i = a[r] - t) < 0 == !!n &&
					i &&
					o > (i = Math.abs(i)) &&
					((s = r), (o = i))
			return s
		},
		ut = function (e, t, n) {
			var r,
				s,
				a,
				o = e.vars,
				l = o[t],
				c = i,
				u = e._ctx
			if (l)
				return (
					(r = o[t + 'Params']),
					(s = o.callbackScope || e),
					n && te.length && ge(),
					u && (i = u),
					(a = r ? l.apply(s, r) : l.call(s)),
					(i = c),
					a
				)
		},
		dt = function (e) {
			return (
				ke(e),
				e.scrollTrigger && e.scrollTrigger.kill(!!r),
				e.progress() < 1 && ut(e, 'onInterrupt'),
				e
			)
		},
		pt = [],
		ft = function (e) {
			if (D()) {
				var t = (e = (!e.name && e.default) || e).name,
					n = M(e),
					r =
						t && !n && e.init
							? function () {
									this._props = []
							  }
							: e,
					i = {
						init: K,
						render: sn,
						add: jt,
						kill: on,
						modifier: an,
						rawVars: 0,
					},
					s = { targetTest: 0, get: 0, getSetter: en, aliases: {}, register: 0 }
				if ((St(), e !== r)) {
					if (re[t]) return
					be(r, be(Te(e, i), s)),
						we(r.prototype, we(i, Te(e, s))),
						(re[(r.prop = t)] = r),
						e.targetTest && (ae.push(r), (ee[t] = 1)),
						(t =
							('css' === t ? 'CSS' : t.charAt(0).toUpperCase() + t.substr(1)) +
							'Plugin')
				}
				U(t, r), e.register && e.register(xn, r, un)
			} else pt.push(e)
		},
		ht = 255,
		mt = {
			aqua: [0, ht, ht],
			lime: [0, ht, 0],
			silver: [192, 192, 192],
			black: [0, 0, 0],
			maroon: [128, 0, 0],
			teal: [0, 128, 128],
			blue: [0, 0, ht],
			navy: [0, 0, 128],
			white: [ht, ht, ht],
			olive: [128, 128, 0],
			yellow: [ht, ht, 0],
			orange: [ht, 165, 0],
			gray: [128, 128, 128],
			purple: [128, 0, 128],
			green: [0, 128, 0],
			red: [ht, 0, 0],
			pink: [ht, 192, 203],
			cyan: [0, ht, ht],
			transparent: [ht, ht, ht, 0],
		},
		gt = function (e, t, n) {
			return (
				((6 * (e += e < 0 ? 1 : e > 1 ? -1 : 0) < 1
					? t + (n - t) * e * 6
					: e < 0.5
					? n
					: 3 * e < 2
					? t + (n - t) * (2 / 3 - e) * 6
					: t) *
					ht +
					0.5) |
				0
			)
		},
		vt = function (e, t, n) {
			var r,
				i,
				s,
				a,
				o,
				l,
				c,
				u,
				d,
				p,
				f = e ? (A(e) ? [e >> 16, (e >> 8) & ht, e & ht] : 0) : mt.black
			if (!f) {
				if ((',' === e.substr(-1) && (e = e.substr(0, e.length - 1)), mt[e]))
					f = mt[e]
				else if ('#' === e.charAt(0)) {
					if (
						(e.length < 6 &&
							((r = e.charAt(1)),
							(i = e.charAt(2)),
							(s = e.charAt(3)),
							(e =
								'#' +
								r +
								r +
								i +
								i +
								s +
								s +
								(5 === e.length ? e.charAt(4) + e.charAt(4) : ''))),
						9 === e.length)
					)
						return [
							(f = parseInt(e.substr(1, 6), 16)) >> 16,
							(f >> 8) & ht,
							f & ht,
							parseInt(e.substr(7), 16) / 255,
						]
					f = [(e = parseInt(e.substr(1), 16)) >> 16, (e >> 8) & ht, e & ht]
				} else if ('hsl' === e.substr(0, 3))
					if (((f = p = e.match(B)), t)) {
						if (~e.indexOf('='))
							return (f = e.match(q)), n && f.length < 4 && (f[3] = 1), f
					} else
						(a = (+f[0] % 360) / 360),
							(o = +f[1] / 100),
							(r =
								2 * (l = +f[2] / 100) -
								(i = l <= 0.5 ? l * (o + 1) : l + o - l * o)),
							f.length > 3 && (f[3] *= 1),
							(f[0] = gt(a + 1 / 3, r, i)),
							(f[1] = gt(a, r, i)),
							(f[2] = gt(a - 1 / 3, r, i))
				else f = e.match(B) || mt.transparent
				f = f.map(Number)
			}
			return (
				t &&
					!p &&
					((r = f[0] / ht),
					(i = f[1] / ht),
					(s = f[2] / ht),
					(l = ((c = Math.max(r, i, s)) + (u = Math.min(r, i, s))) / 2),
					c === u
						? (a = o = 0)
						: ((d = c - u),
						  (o = l > 0.5 ? d / (2 - c - u) : d / (c + u)),
						  (a =
								c === r
									? (i - s) / d + (i < s ? 6 : 0)
									: c === i
									? (s - r) / d + 2
									: (r - i) / d + 4),
						  (a *= 60)),
					(f[0] = ~~(a + 0.5)),
					(f[1] = ~~(100 * o + 0.5)),
					(f[2] = ~~(100 * l + 0.5))),
				n && f.length < 4 && (f[3] = 1),
				f
			)
		},
		_t = function (e) {
			var t = [],
				n = [],
				r = -1
			return (
				e.split(bt).forEach(function (e) {
					var i = e.match(R) || []
					t.push.apply(t, i), n.push((r += i.length + 1))
				}),
				(t.c = n),
				t
			)
		},
		yt = function (e, t, n) {
			var r,
				i,
				s,
				a,
				o = '',
				l = (e + o).match(bt),
				c = t ? 'hsla(' : 'rgba(',
				u = 0
			if (!l) return e
			if (
				((l = l.map(function (e) {
					return (
						(e = vt(e, t, 1)) &&
						c +
							(t
								? e[0] + ',' + e[1] + '%,' + e[2] + '%,' + e[3]
								: e.join(',')) +
							')'
					)
				})),
				n && ((s = _t(e)), (r = n.c).join(o) !== s.c.join(o)))
			)
				for (a = (i = e.replace(bt, '1').split(R)).length - 1; u < a; u++)
					o +=
						i[u] +
						(~r.indexOf(u)
							? l.shift() || c + '0,0,0,0)'
							: (s.length ? s : l.length ? l : n).shift())
			if (!i)
				for (a = (i = e.split(bt)).length - 1; u < a; u++) o += i[u] + l[u]
			return o + i[a]
		},
		bt = (function () {
			var e,
				t =
					'(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3,4}){1,2}\\b'
			for (e in mt) t += '|' + e + '\\b'
			return new RegExp(t + ')', 'gi')
		})(),
		wt = /hsl[a]?\(/,
		xt = function (e) {
			var t,
				n = e.join(' ')
			if (((bt.lastIndex = 0), bt.test(n)))
				return (
					(t = wt.test(n)),
					(e[1] = yt(e[1], t)),
					(e[0] = yt(e[0], t, _t(e[1]))),
					!0
				)
		},
		Tt = (function () {
			var e,
				t,
				n,
				r,
				i,
				s,
				u = Date.now,
				d = 500,
				f = 33,
				h = u(),
				m = h,
				g = 1e3 / 240,
				v = g,
				_ = [],
				y = function n(a) {
					var o,
						l,
						c,
						p,
						y = u() - m,
						b = !0 === a
					if (
						(y > d && (h += y - f),
						((o = (c = (m += y) - h) - v) > 0 || b) &&
							((p = ++r.frame),
							(i = c - 1e3 * r.time),
							(r.time = c /= 1e3),
							(v += o + (o >= g ? 4 : g - o)),
							(l = 1)),
						b || (e = t(n)),
						l)
					)
						for (s = 0; s < _.length; s++) _[s](c, i, p, a)
				}
			return (
				(r = {
					time: 0,
					frame: 0,
					tick: function () {
						y(!0)
					},
					deltaRatio: function (e) {
						return i / (1e3 / (e || 60))
					},
					wake: function () {
						c &&
							(!o &&
								D() &&
								((a = o = window),
								(l = a.document || {}),
								(Y.gsap = xn),
								(a.gsapVersions || (a.gsapVersions = [])).push(xn.version),
								H(V || a.GreenSockGlobals || (!a.gsap && a) || {}),
								(n = a.requestAnimationFrame),
								pt.forEach(ft)),
							e && r.sleep(),
							(t =
								n ||
								function (e) {
									return setTimeout(e, (v - 1e3 * r.time + 1) | 0)
								}),
							(p = 1),
							y(2))
					},
					sleep: function () {
						;(n ? a.cancelAnimationFrame : clearTimeout)(e), (p = 0), (t = K)
					},
					lagSmoothing: function (e, t) {
						;(d = e || 1 / 0), (f = Math.min(t || 33, d))
					},
					fps: function (e) {
						;(g = 1e3 / (e || 240)), (v = 1e3 * r.time + g)
					},
					add: function (e, t, n) {
						var i = t
							? function (t, n, s, a) {
									e(t, n, s, a), r.remove(i)
							  }
							: e
						return r.remove(e), _[n ? 'unshift' : 'push'](i), St(), i
					},
					remove: function (e, t) {
						~(t = _.indexOf(e)) && _.splice(t, 1) && s >= t && s--
					},
					_listeners: _,
				}),
				r
			)
		})(),
		St = function () {
			return !p && Tt.wake()
		},
		Ct = {},
		Et = /^[\d.\-M][\d.\-,\s]/,
		kt = /["']/g,
		Mt = function (e) {
			for (
				var t,
					n,
					r,
					i = {},
					s = e.substr(1, e.length - 3).split(':'),
					a = s[0],
					o = 1,
					l = s.length;
				o < l;
				o++
			)
				(n = s[o]),
					(t = o !== l - 1 ? n.lastIndexOf(',') : n.length),
					(r = n.substr(0, t)),
					(i[a] = isNaN(r) ? r.replace(kt, '').trim() : +r),
					(a = n.substr(t + 1).trim())
			return i
		},
		At = function (e) {
			return function (t) {
				return 1 - e(1 - t)
			}
		},
		Pt = function e(t, n) {
			for (var r, i = t._first; i; )
				i instanceof qt
					? e(i, n)
					: !i.vars.yoyoEase ||
					  (i._yoyo && i._repeat) ||
					  i._yoyo === n ||
					  (i.timeline
							? e(i.timeline, n)
							: ((r = i._ease),
							  (i._ease = i._yEase),
							  (i._yEase = r),
							  (i._yoyo = n))),
					(i = i._next)
		},
		Ot = function (e, t) {
			return (
				(e &&
					(M(e)
						? e
						: Ct[e] ||
						  (function (e) {
								var t = (e + '').split('('),
									n = Ct[t[0]]
								return n && t.length > 1 && n.config
									? n.config.apply(
											null,
											~e.indexOf('{')
												? [Mt(t[1])]
												: (function (e) {
														var t = e.indexOf('(') + 1,
															n = e.indexOf(')'),
															r = e.indexOf('(', t)
														return e.substring(
															t,
															~r && r < n ? e.indexOf(')', n + 1) : n
														)
												  })(e)
														.split(',')
														.map(_e)
									  )
									: Ct._CE && Et.test(e)
									? Ct._CE('', e)
									: n
						  })(e))) ||
				t
			)
		},
		Lt = function (e, t, n, r) {
			void 0 === n &&
				(n = function (e) {
					return 1 - t(1 - e)
				}),
				void 0 === r &&
					(r = function (e) {
						return e < 0.5 ? t(2 * e) / 2 : 1 - t(2 * (1 - e)) / 2
					})
			var i,
				s = { easeIn: t, easeOut: n, easeInOut: r }
			return (
				de(e, function (e) {
					for (var t in ((Ct[e] = Y[e] = s),
					(Ct[(i = e.toLowerCase())] = n),
					s))
						Ct[
							i + ('easeIn' === t ? '.in' : 'easeOut' === t ? '.out' : '.inOut')
						] = Ct[e + '.' + t] = s[t]
				}),
				s
			)
		},
		Dt = function (e) {
			return function (t) {
				return t < 0.5 ? (1 - e(1 - 2 * t)) / 2 : 0.5 + e(2 * (t - 0.5)) / 2
			}
		},
		zt = function e(t, n, r) {
			var i = n >= 1 ? n : 1,
				s = (r || (t ? 0.3 : 0.45)) / (n < 1 ? n : 1),
				a = (s / w) * (Math.asin(1 / i) || 0),
				o = function (e) {
					return 1 === e ? 1 : i * Math.pow(2, -10 * e) * E((e - a) * s) + 1
				},
				l =
					'out' === t
						? o
						: 'in' === t
						? function (e) {
								return 1 - o(1 - e)
						  }
						: Dt(o)
			return (
				(s = w / s),
				(l.config = function (n, r) {
					return e(t, n, r)
				}),
				l
			)
		},
		$t = function e(t, n) {
			void 0 === n && (n = 1.70158)
			var r = function (e) {
					return e ? --e * e * ((n + 1) * e + n) + 1 : 0
				},
				i =
					'out' === t
						? r
						: 'in' === t
						? function (e) {
								return 1 - r(1 - e)
						  }
						: Dt(r)
			return (
				(i.config = function (n) {
					return e(t, n)
				}),
				i
			)
		}
	de('Linear,Quad,Cubic,Quart,Quint,Strong', function (e, t) {
		var n = t < 5 ? t + 1 : t
		Lt(
			e + ',Power' + (n - 1),
			t
				? function (e) {
						return Math.pow(e, n)
				  }
				: function (e) {
						return e
				  },
			function (e) {
				return 1 - Math.pow(1 - e, n)
			},
			function (e) {
				return e < 0.5
					? Math.pow(2 * e, n) / 2
					: 1 - Math.pow(2 * (1 - e), n) / 2
			}
		)
	}),
		(Ct.Linear.easeNone = Ct.none = Ct.Linear.easeIn),
		Lt('Elastic', zt('in'), zt('out'), zt()),
		(f = 7.5625),
		(m = 1 / (h = 2.75)),
		Lt(
			'Bounce',
			function (e) {
				return 1 - g(1 - e)
			},
			(g = function (e) {
				return e < m
					? f * e * e
					: e < 0.7272727272727273
					? f * Math.pow(e - 1.5 / h, 2) + 0.75
					: e < 0.9090909090909092
					? f * (e -= 2.25 / h) * e + 0.9375
					: f * Math.pow(e - 2.625 / h, 2) + 0.984375
			})
		),
		Lt('Expo', function (e) {
			return e ? Math.pow(2, 10 * (e - 1)) : 0
		}),
		Lt('Circ', function (e) {
			return -(S(1 - e * e) - 1)
		}),
		Lt('Sine', function (e) {
			return 1 === e ? 1 : 1 - C(e * x)
		}),
		Lt('Back', $t('in'), $t('out'), $t()),
		(Ct.SteppedEase =
			Ct.steps =
			Y.SteppedEase =
				{
					config: function (e, t) {
						void 0 === e && (e = 1)
						var n = 1 / e,
							r = e + (t ? 0 : 1),
							i = t ? 1 : 0
						return function (e) {
							return (((r * Xe(0, 0.99999999, e)) | 0) + i) * n
						}
					},
				}),
		(_.ease = Ct['quad.out']),
		de(
			'onComplete,onUpdate,onStart,onRepeat,onReverseComplete,onInterrupt',
			function (e) {
				return (oe += e + ',' + e + 'Params,')
			}
		)
	var It = function (e, t) {
			;(this.id = T++),
				(e._gsap = this),
				(this.target = e),
				(this.harness = t),
				(this.get = t ? t.get : ue),
				(this.set = t ? t.getSetter : en)
		},
		Bt = (function () {
			function e(e) {
				;(this.vars = e),
					(this._delay = +e.delay || 0),
					(this._repeat = e.repeat === 1 / 0 ? -2 : e.repeat || 0) &&
						((this._rDelay = e.repeatDelay || 0),
						(this._yoyo = !!e.yoyo || !!e.yoyoEase)),
					(this._ts = 1),
					je(this, +e.duration, 1, 1),
					(this.data = e.data),
					i && ((this._ctx = i), i.data.push(this)),
					p || Tt.wake()
			}
			var t = e.prototype
			return (
				(t.delay = function (e) {
					return e || 0 === e
						? (this.parent &&
								this.parent.smoothChildTiming &&
								this.startTime(this._start + e - this._delay),
						  (this._delay = e),
						  this)
						: this._delay
				}),
				(t.duration = function (e) {
					return arguments.length
						? this.totalDuration(
								this._repeat > 0 ? e + (e + this._rDelay) * this._repeat : e
						  )
						: this.totalDuration() && this._dur
				}),
				(t.totalDuration = function (e) {
					return arguments.length
						? ((this._dirty = 0),
						  je(
								this,
								this._repeat < 0
									? e
									: (e - this._repeat * this._rDelay) / (this._repeat + 1)
						  ))
						: this._tDur
				}),
				(t.totalTime = function (e, t) {
					if ((St(), !arguments.length)) return this._tTime
					var n = this._dp
					if (n && n.smoothChildTiming && this._ts) {
						for (
							$e(this, e), !n._dp || n.parent || Ie(n, this);
							n && n.parent;

						)
							n.parent._time !==
								n._start +
									(n._ts >= 0
										? n._tTime / n._ts
										: (n.totalDuration() - n._tTime) / -n._ts) &&
								n.totalTime(n._tTime, !0),
								(n = n.parent)
						!this.parent &&
							this._dp.autoRemoveChildren &&
							((this._ts > 0 && e < this._tDur) ||
								(this._ts < 0 && e > 0) ||
								(!this._tDur && !e)) &&
							Be(this._dp, this, this._start - this._delay)
					}
					return (
						(this._tTime !== e ||
							(!this._dur && !t) ||
							(this._initted && Math.abs(this._zTime) === b) ||
							(!e && !this._initted && (this.add || this._ptLookup))) &&
							(this._ts || (this._pTime = e), ve(this, e, t)),
						this
					)
				}),
				(t.time = function (e, t) {
					return arguments.length
						? this.totalTime(
								Math.min(this.totalDuration(), e + Oe(this)) %
									(this._dur + this._rDelay) || (e ? this._dur : 0),
								t
						  )
						: this._time
				}),
				(t.totalProgress = function (e, t) {
					return arguments.length
						? this.totalTime(this.totalDuration() * e, t)
						: this.totalDuration()
						? Math.min(1, this._tTime / this._tDur)
						: this.ratio
				}),
				(t.progress = function (e, t) {
					return arguments.length
						? this.totalTime(
								this.duration() *
									(!this._yoyo || 1 & this.iteration() ? e : 1 - e) +
									Oe(this),
								t
						  )
						: this.duration()
						? Math.min(1, this._time / this._dur)
						: this.ratio
				}),
				(t.iteration = function (e, t) {
					var n = this.duration() + this._rDelay
					return arguments.length
						? this.totalTime(this._time + (e - 1) * n, t)
						: this._repeat
						? Le(this._tTime, n) + 1
						: 1
				}),
				(t.timeScale = function (e) {
					if (!arguments.length) return -1e-8 === this._rts ? 0 : this._rts
					if (this._rts === e) return this
					var t =
						this.parent && this._ts ? De(this.parent._time, this) : this._tTime
					return (
						(this._rts = +e || 0),
						(this._ts = this._ps || -1e-8 === e ? 0 : this._rts),
						this.totalTime(Xe(-Math.abs(this._delay), this._tDur, t), !0),
						ze(this),
						(function (e) {
							for (var t = e.parent; t && t.parent; )
								(t._dirty = 1), t.totalDuration(), (t = t.parent)
							return e
						})(this)
					)
				}),
				(t.paused = function (e) {
					return arguments.length
						? (this._ps !== e &&
								((this._ps = e),
								e
									? ((this._pTime =
											this._tTime || Math.max(-this._delay, this.rawTime())),
									  (this._ts = this._act = 0))
									: (St(),
									  (this._ts = this._rts),
									  this.totalTime(
											this.parent && !this.parent.smoothChildTiming
												? this.rawTime()
												: this._tTime || this._pTime,
											1 === this.progress() &&
												Math.abs(this._zTime) !== b &&
												(this._tTime -= b)
									  ))),
						  this)
						: this._ps
				}),
				(t.startTime = function (e) {
					if (arguments.length) {
						this._start = e
						var t = this.parent || this._dp
						return (
							t && (t._sort || !this.parent) && Be(t, this, e - this._delay),
							this
						)
					}
					return this._start
				}),
				(t.endTime = function (e) {
					return (
						this._start +
						(L(e) ? this.totalDuration() : this.duration()) /
							Math.abs(this._ts || 1)
					)
				}),
				(t.rawTime = function (e) {
					var t = this.parent || this._dp
					return t
						? e &&
						  (!this._ts ||
								(this._repeat && this._time && this.totalProgress() < 1))
							? this._tTime % (this._dur + this._rDelay)
							: this._ts
							? De(t.rawTime(e), this)
							: this._tTime
						: this._tTime
				}),
				(t.revert = function (e) {
					void 0 === e && (e = J)
					var t = r
					return (
						(r = e),
						(this._initted || this._startAt) &&
							(this.timeline && this.timeline.revert(e),
							this.totalTime(-0.01, e.suppressEvents)),
						'nested' !== this.data && !1 !== e.kill && this.kill(),
						(r = t),
						this
					)
				}),
				(t.globalTime = function (e) {
					for (var t = this, n = arguments.length ? e : t.rawTime(); t; )
						(n = t._start + n / (t._ts || 1)), (t = t._dp)
					return !this.parent && this._sat
						? this._sat.vars.immediateRender
							? -1
							: this._sat.globalTime(e)
						: n
				}),
				(t.repeat = function (e) {
					return arguments.length
						? ((this._repeat = e === 1 / 0 ? -2 : e), Ge(this))
						: -2 === this._repeat
						? 1 / 0
						: this._repeat
				}),
				(t.repeatDelay = function (e) {
					if (arguments.length) {
						var t = this._time
						return (this._rDelay = e), Ge(this), t ? this.time(t) : this
					}
					return this._rDelay
				}),
				(t.yoyo = function (e) {
					return arguments.length ? ((this._yoyo = e), this) : this._yoyo
				}),
				(t.seek = function (e, t) {
					return this.totalTime(Ve(this, e), L(t))
				}),
				(t.restart = function (e, t) {
					return this.play().totalTime(e ? -this._delay : 0, L(t))
				}),
				(t.play = function (e, t) {
					return null != e && this.seek(e, t), this.reversed(!1).paused(!1)
				}),
				(t.reverse = function (e, t) {
					return (
						null != e && this.seek(e || this.totalDuration(), t),
						this.reversed(!0).paused(!1)
					)
				}),
				(t.pause = function (e, t) {
					return null != e && this.seek(e, t), this.paused(!0)
				}),
				(t.resume = function () {
					return this.paused(!1)
				}),
				(t.reversed = function (e) {
					return arguments.length
						? (!!e !== this.reversed() &&
								this.timeScale(-this._rts || (e ? -1e-8 : 0)),
						  this)
						: this._rts < 0
				}),
				(t.invalidate = function () {
					return (this._initted = this._act = 0), (this._zTime = -1e-8), this
				}),
				(t.isActive = function () {
					var e,
						t = this.parent || this._dp,
						n = this._start
					return !(
						t &&
						!(
							this._ts &&
							this._initted &&
							t.isActive() &&
							(e = t.rawTime(!0)) >= n &&
							e < this.endTime(!0) - b
						)
					)
				}),
				(t.eventCallback = function (e, t, n) {
					var r = this.vars
					return arguments.length > 1
						? (t
								? ((r[e] = t),
								  n && (r[e + 'Params'] = n),
								  'onUpdate' === e && (this._onUpdate = t))
								: delete r[e],
						  this)
						: r[e]
				}),
				(t.then = function (e) {
					var t = this
					return new Promise(function (n) {
						var r = M(e) ? e : ye,
							i = function () {
								var e = t.then
								;(t.then = null),
									M(r) && (r = r(t)) && (r.then || r === t) && (t.then = e),
									n(r),
									(t.then = e)
							}
						;(t._initted && 1 === t.totalProgress() && t._ts >= 0) ||
						(!t._tTime && t._ts < 0)
							? i()
							: (t._prom = i)
					})
				}),
				(t.kill = function () {
					dt(this)
				}),
				e
			)
		})()
	be(Bt.prototype, {
		_time: 0,
		_start: 0,
		_end: 0,
		_tTime: 0,
		_tDur: 0,
		_dirty: 0,
		_repeat: 0,
		_yoyo: !1,
		parent: null,
		_initted: !1,
		_rDelay: 0,
		_ts: 1,
		_dp: 0,
		ratio: 0,
		_zTime: -1e-8,
		_prom: 0,
		_ps: !1,
		_rts: 1,
	})
	var qt = (function (n) {
		function i(t, r) {
			var i
			return (
				void 0 === t && (t = {}),
				((i = n.call(this, t) || this).labels = {}),
				(i.smoothChildTiming = !!t.smoothChildTiming),
				(i.autoRemoveChildren = !!t.autoRemoveChildren),
				(i._sort = L(t.sortChildren)),
				s && Be(t.parent || s, e(i), r),
				t.reversed && i.reverse(),
				t.paused && i.paused(!0),
				t.scrollTrigger && qe(e(i), t.scrollTrigger),
				i
			)
		}
		t(i, n)
		var a = i.prototype
		return (
			(a.to = function (e, t, n) {
				return He(0, arguments, this), this
			}),
			(a.from = function (e, t, n) {
				return He(1, arguments, this), this
			}),
			(a.fromTo = function (e, t, n, r) {
				return He(2, arguments, this), this
			}),
			(a.set = function (e, t, n) {
				return (
					(t.duration = 0),
					(t.parent = this),
					Se(t).repeatDelay || (t.repeat = 0),
					(t.immediateRender = !!t.immediateRender),
					new Ut(e, t, Ve(this, n), 1),
					this
				)
			}),
			(a.call = function (e, t, n) {
				return Be(this, Ut.delayedCall(0, e, t), n)
			}),
			(a.staggerTo = function (e, t, n, r, i, s, a) {
				return (
					(n.duration = t),
					(n.stagger = n.stagger || r),
					(n.onComplete = s),
					(n.onCompleteParams = a),
					(n.parent = this),
					new Ut(e, n, Ve(this, i)),
					this
				)
			}),
			(a.staggerFrom = function (e, t, n, r, i, s, a) {
				return (
					(n.runBackwards = 1),
					(Se(n).immediateRender = L(n.immediateRender)),
					this.staggerTo(e, t, n, r, i, s, a)
				)
			}),
			(a.staggerFromTo = function (e, t, n, r, i, s, a, o) {
				return (
					(r.startAt = n),
					(Se(r).immediateRender = L(r.immediateRender)),
					this.staggerTo(e, t, r, i, s, a, o)
				)
			}),
			(a.render = function (e, t, n) {
				var i,
					a,
					o,
					l,
					c,
					u,
					d,
					p,
					f,
					h,
					m,
					g,
					v = this._time,
					_ = this._dirty ? this.totalDuration() : this._tDur,
					y = this._dur,
					w = e <= 0 ? 0 : fe(e),
					x = this._zTime < 0 != e < 0 && (this._initted || !y)
				if (
					(this !== s && w > _ && e >= 0 && (w = _),
					w !== this._tTime || n || x)
				) {
					if (
						(v !== this._time &&
							y &&
							((w += this._time - v), (e += this._time - v)),
						(i = w),
						(f = this._start),
						(u = !(p = this._ts)),
						x && (y || (v = this._zTime), (e || !t) && (this._zTime = e)),
						this._repeat)
					) {
						if (
							((m = this._yoyo),
							(c = y + this._rDelay),
							this._repeat < -1 && e < 0)
						)
							return this.totalTime(100 * c + e, t, n)
						if (
							((i = fe(w % c)),
							w === _
								? ((l = this._repeat), (i = y))
								: ((l = ~~(w / c)) && l === w / c && ((i = y), l--),
								  i > y && (i = y)),
							(h = Le(this._tTime, c)),
							!v &&
								this._tTime &&
								h !== l &&
								this._tTime - h * c - this._dur <= 0 &&
								(h = l),
							m && 1 & l && ((i = y - i), (g = 1)),
							l !== h && !this._lock)
						) {
							var T = m && 1 & h,
								S = T === (m && 1 & l)
							if (
								(l < h && (T = !T),
								(v = T ? 0 : y),
								(this._lock = 1),
								(this.render(v || (g ? 0 : fe(l * c)), t, !y)._lock = 0),
								(this._tTime = w),
								!t && this.parent && ut(this, 'onRepeat'),
								this.vars.repeatRefresh && !g && (this.invalidate()._lock = 1),
								(v && v !== this._time) ||
									u !== !this._ts ||
									(this.vars.onRepeat && !this.parent && !this._act))
							)
								return this
							if (
								((y = this._dur),
								(_ = this._tDur),
								S &&
									((this._lock = 2),
									(v = T ? y : -1e-4),
									this.render(v, !0),
									this.vars.repeatRefresh && !g && this.invalidate()),
								(this._lock = 0),
								!this._ts && !u)
							)
								return this
							Pt(this, g)
						}
					}
					if (
						(this._hasPause &&
							!this._forcing &&
							this._lock < 2 &&
							((d = (function (e, t, n) {
								var r
								if (n > t)
									for (r = e._first; r && r._start <= n; ) {
										if ('isPause' === r.data && r._start > t) return r
										r = r._next
									}
								else
									for (r = e._last; r && r._start >= n; ) {
										if ('isPause' === r.data && r._start < t) return r
										r = r._prev
									}
							})(this, fe(v), fe(i))),
							d && (w -= i - (i = d._start))),
						(this._tTime = w),
						(this._time = i),
						(this._act = !p),
						this._initted ||
							((this._onUpdate = this.vars.onUpdate),
							(this._initted = 1),
							(this._zTime = e),
							(v = 0)),
						!v && i && !t && !l && (ut(this, 'onStart'), this._tTime !== w))
					)
						return this
					if (i >= v && e >= 0)
						for (a = this._first; a; ) {
							if (
								((o = a._next), (a._act || i >= a._start) && a._ts && d !== a)
							) {
								if (a.parent !== this) return this.render(e, t, n)
								if (
									(a.render(
										a._ts > 0
											? (i - a._start) * a._ts
											: (a._dirty ? a.totalDuration() : a._tDur) +
													(i - a._start) * a._ts,
										t,
										n
									),
									i !== this._time || (!this._ts && !u))
								) {
									;(d = 0), o && (w += this._zTime = -1e-8)
									break
								}
							}
							a = o
						}
					else {
						a = this._last
						for (var C = e < 0 ? e : i; a; ) {
							if (
								((o = a._prev), (a._act || C <= a._end) && a._ts && d !== a)
							) {
								if (a.parent !== this) return this.render(e, t, n)
								if (
									(a.render(
										a._ts > 0
											? (C - a._start) * a._ts
											: (a._dirty ? a.totalDuration() : a._tDur) +
													(C - a._start) * a._ts,
										t,
										n || (r && (a._initted || a._startAt))
									),
									i !== this._time || (!this._ts && !u))
								) {
									;(d = 0), o && (w += this._zTime = C ? -1e-8 : b)
									break
								}
							}
							a = o
						}
					}
					if (
						d &&
						!t &&
						(this.pause(),
						(d.render(i >= v ? 0 : -1e-8)._zTime = i >= v ? 1 : -1),
						this._ts)
					)
						return (this._start = f), ze(this), this.render(e, t, n)
					this._onUpdate && !t && ut(this, 'onUpdate', !0),
						((w === _ && this._tTime >= this.totalDuration()) || (!w && v)) &&
							((f !== this._start && Math.abs(p) === Math.abs(this._ts)) ||
								this._lock ||
								((e || !y) &&
									((w === _ && this._ts > 0) || (!w && this._ts < 0)) &&
									ke(this, 1),
								t ||
									(e < 0 && !v) ||
									(!w && !v && _) ||
									(ut(
										this,
										w === _ && e >= 0 ? 'onComplete' : 'onReverseComplete',
										!0
									),
									this._prom &&
										!(w < _ && this.timeScale() > 0) &&
										this._prom())))
				}
				return this
			}),
			(a.add = function (e, t) {
				var n = this
				if ((A(t) || (t = Ve(this, t, e)), !(e instanceof Bt))) {
					if (I(e))
						return (
							e.forEach(function (e) {
								return n.add(e, t)
							}),
							this
						)
					if (k(e)) return this.addLabel(e, t)
					if (!M(e)) return this
					e = Ut.delayedCall(0, e)
				}
				return this !== e ? Be(this, e, t) : this
			}),
			(a.getChildren = function (e, t, n, r) {
				void 0 === e && (e = !0),
					void 0 === t && (t = !0),
					void 0 === n && (n = !0),
					void 0 === r && (r = -y)
				for (var i = [], s = this._first; s; )
					s._start >= r &&
						(s instanceof Ut
							? t && i.push(s)
							: (n && i.push(s),
							  e && i.push.apply(i, s.getChildren(!0, t, n)))),
						(s = s._next)
				return i
			}),
			(a.getById = function (e) {
				for (var t = this.getChildren(1, 1, 1), n = t.length; n--; )
					if (t[n].vars.id === e) return t[n]
			}),
			(a.remove = function (e) {
				return k(e)
					? this.removeLabel(e)
					: M(e)
					? this.killTweensOf(e)
					: (Ee(this, e),
					  e === this._recent && (this._recent = this._last),
					  Me(this))
			}),
			(a.totalTime = function (e, t) {
				return arguments.length
					? ((this._forcing = 1),
					  !this._dp &&
							this._ts &&
							(this._start = fe(
								Tt.time -
									(this._ts > 0
										? e / this._ts
										: (this.totalDuration() - e) / -this._ts)
							)),
					  n.prototype.totalTime.call(this, e, t),
					  (this._forcing = 0),
					  this)
					: this._tTime
			}),
			(a.addLabel = function (e, t) {
				return (this.labels[e] = Ve(this, t)), this
			}),
			(a.removeLabel = function (e) {
				return delete this.labels[e], this
			}),
			(a.addPause = function (e, t, n) {
				var r = Ut.delayedCall(0, t || K, n)
				return (
					(r.data = 'isPause'), (this._hasPause = 1), Be(this, r, Ve(this, e))
				)
			}),
			(a.removePause = function (e) {
				var t = this._first
				for (e = Ve(this, e); t; )
					t._start === e && 'isPause' === t.data && ke(t), (t = t._next)
			}),
			(a.killTweensOf = function (e, t, n) {
				for (var r = this.getTweensOf(e, n), i = r.length; i--; )
					Rt !== r[i] && r[i].kill(e, t)
				return this
			}),
			(a.getTweensOf = function (e, t) {
				for (var n, r = [], i = Je(e), s = this._first, a = A(t); s; )
					s instanceof Ut
						? me(s._targets, i) &&
						  (a
								? (!Rt || (s._initted && s._ts)) &&
								  s.globalTime(0) <= t &&
								  s.globalTime(s.totalDuration()) > t
								: !t || s.isActive()) &&
						  r.push(s)
						: (n = s.getTweensOf(i, t)).length && r.push.apply(r, n),
						(s = s._next)
				return r
			}),
			(a.tweenTo = function (e, t) {
				t = t || {}
				var n,
					r = this,
					i = Ve(r, e),
					s = t,
					a = s.startAt,
					o = s.onStart,
					l = s.onStartParams,
					c = s.immediateRender,
					u = Ut.to(
						r,
						be(
							{
								ease: t.ease || 'none',
								lazy: !1,
								immediateRender: !1,
								time: i,
								overwrite: 'auto',
								duration:
									t.duration ||
									Math.abs(
										(i - (a && 'time' in a ? a.time : r._time)) / r.timeScale()
									) ||
									b,
								onStart: function () {
									if ((r.pause(), !n)) {
										var e =
											t.duration ||
											Math.abs(
												(i - (a && 'time' in a ? a.time : r._time)) /
													r.timeScale()
											)
										u._dur !== e && je(u, e, 0, 1).render(u._time, !0, !0),
											(n = 1)
									}
									o && o.apply(u, l || [])
								},
							},
							t
						)
					)
				return c ? u.render(0) : u
			}),
			(a.tweenFromTo = function (e, t, n) {
				return this.tweenTo(t, be({ startAt: { time: Ve(this, e) } }, n))
			}),
			(a.recent = function () {
				return this._recent
			}),
			(a.nextLabel = function (e) {
				return void 0 === e && (e = this._time), ct(this, Ve(this, e))
			}),
			(a.previousLabel = function (e) {
				return void 0 === e && (e = this._time), ct(this, Ve(this, e), 1)
			}),
			(a.currentLabel = function (e) {
				return arguments.length
					? this.seek(e, !0)
					: this.previousLabel(this._time + b)
			}),
			(a.shiftChildren = function (e, t, n) {
				void 0 === n && (n = 0)
				for (var r, i = this._first, s = this.labels; i; )
					i._start >= n && ((i._start += e), (i._end += e)), (i = i._next)
				if (t) for (r in s) s[r] >= n && (s[r] += e)
				return Me(this)
			}),
			(a.invalidate = function (e) {
				var t = this._first
				for (this._lock = 0; t; ) t.invalidate(e), (t = t._next)
				return n.prototype.invalidate.call(this, e)
			}),
			(a.clear = function (e) {
				void 0 === e && (e = !0)
				for (var t, n = this._first; n; ) (t = n._next), this.remove(n), (n = t)
				return (
					this._dp && (this._time = this._tTime = this._pTime = 0),
					e && (this.labels = {}),
					Me(this)
				)
			}),
			(a.totalDuration = function (e) {
				var t,
					n,
					r,
					i = 0,
					a = this,
					o = a._last,
					l = y
				if (arguments.length)
					return a.timeScale(
						(a._repeat < 0 ? a.duration() : a.totalDuration()) /
							(a.reversed() ? -e : e)
					)
				if (a._dirty) {
					for (r = a.parent; o; )
						(t = o._prev),
							o._dirty && o.totalDuration(),
							(n = o._start) > l && a._sort && o._ts && !a._lock
								? ((a._lock = 1), (Be(a, o, n - o._delay, 1)._lock = 0))
								: (l = n),
							n < 0 &&
								o._ts &&
								((i -= n),
								((!r && !a._dp) || (r && r.smoothChildTiming)) &&
									((a._start += n / a._ts), (a._time -= n), (a._tTime -= n)),
								a.shiftChildren(-n, !1, -Infinity),
								(l = 0)),
							o._end > i && o._ts && (i = o._end),
							(o = t)
					je(a, a === s && a._time > i ? a._time : i, 1, 1), (a._dirty = 0)
				}
				return a._tDur
			}),
			(i.updateRoot = function (e) {
				if ((s._ts && (ve(s, De(e, s)), (u = Tt.frame)), Tt.frame >= se)) {
					se += v.autoSleep || 120
					var t = s._first
					if ((!t || !t._ts) && v.autoSleep && Tt._listeners.length < 2) {
						for (; t && !t._ts; ) t = t._next
						t || Tt.sleep()
					}
				}
			}),
			i
		)
	})(Bt)
	be(qt.prototype, { _lock: 0, _hasPause: 0, _forcing: 0 })
	var Rt,
		Ft,
		Nt = function (e, t, n, r, i, s, a) {
			var o,
				l,
				c,
				u,
				d,
				p,
				f,
				h,
				m = new un(this._pt, e, t, 0, 1, rn, null, i),
				g = 0,
				v = 0
			for (
				m.b = n,
					m.e = r,
					n += '',
					(f = ~(r += '').indexOf('random(')) && (r = ot(r)),
					s && (s((h = [n, r]), e, t), (n = h[0]), (r = h[1])),
					l = n.match(F) || [];
				(o = F.exec(r));

			)
				(u = o[0]),
					(d = r.substring(g, o.index)),
					c ? (c = (c + 1) % 5) : 'rgba(' === d.substr(-5) && (c = 1),
					u !== l[v++] &&
						((p = parseFloat(l[v - 1]) || 0),
						(m._pt = {
							_next: m._pt,
							p: d || 1 === v ? d : ',',
							s: p,
							c: '=' === u.charAt(1) ? he(p, u) - p : parseFloat(u) - p,
							m: c && c < 4 ? Math.round : 0,
						}),
						(g = F.lastIndex))
			return (
				(m.c = g < r.length ? r.substring(g, r.length) : ''),
				(m.fp = a),
				(N.test(r) || f) && (m.e = 0),
				(this._pt = m),
				m
			)
		},
		jt = function (e, t, n, r, i, s, a, o, l, c) {
			M(r) && (r = r(i || 0, e, s))
			var u,
				d = e[t],
				p =
					'get' !== n
						? n
						: M(d)
						? l
							? e[
									t.indexOf('set') || !M(e['get' + t.substr(3)])
										? t
										: 'get' + t.substr(3)
							  ](l)
							: e[t]()
						: d,
				f = M(d) ? (l ? Zt : Qt) : Kt
			if (
				(k(r) &&
					(~r.indexOf('random(') && (r = ot(r)),
					'=' === r.charAt(1) &&
						((u = he(p, r) + (Ue(p) || 0)) || 0 === u) &&
						(r = u)),
				!c || p !== r || Ft)
			)
				return isNaN(p * r) || '' === r
					? (!d && !(t in e) && W(t, r),
					  Nt.call(this, e, t, p, r, f, o || v.stringFilter, l))
					: ((u = new un(
							this._pt,
							e,
							t,
							+p || 0,
							r - (p || 0),
							'boolean' == typeof d ? nn : tn,
							0,
							f
					  )),
					  l && (u.fp = l),
					  a && u.modifier(a, this, e),
					  (this._pt = u))
		},
		Gt = function (e, t, n, r, i, s) {
			var a, o, l, c
			if (
				re[e] &&
				!1 !==
					(a = new re[e]()).init(
						i,
						a.rawVars
							? t[e]
							: (function (e, t, n, r, i) {
									if (
										(M(e) && (e = Ht(e, i, t, n, r)),
										!O(e) || (e.style && e.nodeType) || I(e) || $(e))
									)
										return k(e) ? Ht(e, i, t, n, r) : e
									var s,
										a = {}
									for (s in e) a[s] = Ht(e[s], i, t, n, r)
									return a
							  })(t[e], r, i, s, n),
						n,
						r,
						s
					) &&
				((n._pt = o = new un(n._pt, i, e, 0, 1, a.render, a, 0, a.priority)),
				n !== d)
			)
				for (l = n._ptLookup[n._targets.indexOf(i)], c = a._props.length; c--; )
					l[a._props[c]] = o
			return a
		},
		Yt = function e(t, i, a) {
			var o,
				l,
				c,
				u,
				d,
				p,
				f,
				h,
				m,
				g,
				v,
				w,
				x,
				T = t.vars,
				S = T.ease,
				C = T.startAt,
				E = T.immediateRender,
				k = T.lazy,
				M = T.onUpdate,
				A = T.onUpdateParams,
				P = T.callbackScope,
				O = T.runBackwards,
				D = T.yoyoEase,
				z = T.keyframes,
				$ = T.autoRevert,
				I = t._dur,
				B = t._startAt,
				q = t._targets,
				R = t.parent,
				F = R && 'nested' === R.data ? R.vars.targets : q,
				N = 'auto' === t._overwrite && !n,
				j = t.timeline
			if (
				(j && (!z || !S) && (S = 'none'),
				(t._ease = Ot(S, _.ease)),
				(t._yEase = D ? At(Ot(!0 === D ? S : D, _.ease)) : 0),
				D &&
					t._yoyo &&
					!t._repeat &&
					((D = t._yEase), (t._yEase = t._ease), (t._ease = D)),
				(t._from = !j && !!T.runBackwards),
				!j || (z && !T.stagger))
			) {
				if (
					((w = (h = q[0] ? ce(q[0]).harness : 0) && T[h.prop]),
					(o = Te(T, ee)),
					B &&
						(B._zTime < 0 && B.progress(1),
						i < 0 && O && E && !$ ? B.render(-1, !0) : B.revert(O && I ? Z : Q),
						(B._lazy = 0)),
					C)
				) {
					if (
						(ke(
							(t._startAt = Ut.set(
								q,
								be(
									{
										data: 'isStart',
										overwrite: !1,
										parent: R,
										immediateRender: !0,
										lazy: !B && L(k),
										startAt: null,
										delay: 0,
										onUpdate: M,
										onUpdateParams: A,
										callbackScope: P,
										stagger: 0,
									},
									C
								)
							))
						),
						(t._startAt._dp = 0),
						(t._startAt._sat = t),
						i < 0 && (r || (!E && !$)) && t._startAt.revert(Z),
						E && I && i <= 0 && a <= 0)
					)
						return void (i && (t._zTime = i))
				} else if (O && I && !B)
					if (
						(i && (E = !1),
						(c = be(
							{
								overwrite: !1,
								data: 'isFromStart',
								lazy: E && !B && L(k),
								immediateRender: E,
								stagger: 0,
								parent: R,
							},
							o
						)),
						w && (c[h.prop] = w),
						ke((t._startAt = Ut.set(q, c))),
						(t._startAt._dp = 0),
						(t._startAt._sat = t),
						i < 0 && (r ? t._startAt.revert(Z) : t._startAt.render(-1, !0)),
						(t._zTime = i),
						E)
					) {
						if (!i) return
					} else e(t._startAt, b, b)
				for (
					t._pt = t._ptCache = 0, k = (I && L(k)) || (k && !I), l = 0;
					l < q.length;
					l++
				) {
					if (
						((f = (d = q[l])._gsap || le(q)[l]._gsap),
						(t._ptLookup[l] = g = {}),
						ne[f.id] && te.length && ge(),
						(v = F === q ? l : F.indexOf(d)),
						h &&
							!1 !== (m = new h()).init(d, w || o, t, v, F) &&
							((t._pt = u =
								new un(t._pt, d, m.name, 0, 1, m.render, m, 0, m.priority)),
							m._props.forEach(function (e) {
								g[e] = u
							}),
							m.priority && (p = 1)),
						!h || w)
					)
						for (c in o)
							re[c] && (m = Gt(c, o, t, v, d, F))
								? m.priority && (p = 1)
								: (g[c] = u =
										jt.call(t, d, c, 'get', o[c], v, F, 0, T.stringFilter))
					t._op && t._op[l] && t.kill(d, t._op[l]),
						N &&
							t._pt &&
							((Rt = t),
							s.killTweensOf(d, g, t.globalTime(i)),
							(x = !t.parent),
							(Rt = 0)),
						t._pt && k && (ne[f.id] = 1)
				}
				p && cn(t), t._onInit && t._onInit(t)
			}
			;(t._onUpdate = M),
				(t._initted = (!t._op || t._pt) && !x),
				z && i <= 0 && j.render(y, !0, !0)
		},
		Vt = function (e, t, n, r) {
			var i,
				s,
				a = t.ease || r || 'power1.inOut'
			if (I(t))
				(s = n[e] || (n[e] = [])),
					t.forEach(function (e, n) {
						return s.push({ t: (n / (t.length - 1)) * 100, v: e, e: a })
					})
			else
				for (i in t)
					(s = n[i] || (n[i] = [])),
						'ease' === i || s.push({ t: parseFloat(e), v: t[i], e: a })
		},
		Ht = function (e, t, n, r, i) {
			return M(e)
				? e.call(t, n, r, i)
				: k(e) && ~e.indexOf('random(')
				? ot(e)
				: e
		},
		Wt = oe + 'repeat,repeatDelay,yoyo,repeatRefresh,yoyoEase,autoRevert',
		Xt = {}
	de(Wt + ',id,stagger,delay,duration,paused,scrollTrigger', function (e) {
		return (Xt[e] = 1)
	})
	var Ut = (function (i) {
		function a(t, r, a, o) {
			var l
			'number' == typeof r && ((a.duration = r), (r = a), (a = null))
			var c,
				u,
				d,
				p,
				f,
				h,
				m,
				g,
				_ = (l = i.call(this, o ? r : Se(r)) || this).vars,
				y = _.duration,
				b = _.delay,
				w = _.immediateRender,
				x = _.stagger,
				T = _.overwrite,
				S = _.keyframes,
				C = _.defaults,
				E = _.scrollTrigger,
				k = _.yoyoEase,
				M = r.parent || s,
				P = (I(t) || $(t) ? A(t[0]) : 'length' in r) ? [t] : Je(t)
			if (
				((l._targets = P.length
					? le(P)
					: X(
							'GSAP target ' + t + ' not found. https://greensock.com',
							!v.nullTargetWarn
					  ) || []),
				(l._ptLookup = []),
				(l._overwrite = T),
				S || x || z(y) || z(b))
			) {
				if (
					((r = l.vars),
					(c = l.timeline =
						new qt({
							data: 'nested',
							defaults: C || {},
							targets: M && 'nested' === M.data ? M.vars.targets : P,
						})).kill(),
					(c.parent = c._dp = e(l)),
					(c._start = 0),
					x || z(y) || z(b))
				) {
					if (((p = P.length), (m = x && nt(x)), O(x)))
						for (f in x) ~Wt.indexOf(f) && (g || (g = {}), (g[f] = x[f]))
					for (u = 0; u < p; u++)
						((d = Te(r, Xt)).stagger = 0),
							k && (d.yoyoEase = k),
							g && we(d, g),
							(h = P[u]),
							(d.duration = +Ht(y, e(l), u, h, P)),
							(d.delay = (+Ht(b, e(l), u, h, P) || 0) - l._delay),
							!x &&
								1 === p &&
								d.delay &&
								((l._delay = b = d.delay), (l._start += b), (d.delay = 0)),
							c.to(h, d, m ? m(u, h, P) : 0),
							(c._ease = Ct.none)
					c.duration() ? (y = b = 0) : (l.timeline = 0)
				} else if (S) {
					Se(be(c.vars.defaults, { ease: 'none' })),
						(c._ease = Ot(S.ease || r.ease || 'none'))
					var D,
						B,
						q,
						R = 0
					if (I(S))
						S.forEach(function (e) {
							return c.to(P, e, '>')
						}),
							c.duration()
					else {
						for (f in ((d = {}), S))
							'ease' === f || 'easeEach' === f || Vt(f, S[f], d, S.easeEach)
						for (f in d)
							for (
								D = d[f].sort(function (e, t) {
									return e.t - t.t
								}),
									R = 0,
									u = 0;
								u < D.length;
								u++
							)
								((q = {
									ease: (B = D[u]).e,
									duration: ((B.t - (u ? D[u - 1].t : 0)) / 100) * y,
								})[f] = B.v),
									c.to(P, q, R),
									(R += q.duration)
						c.duration() < y && c.to({}, { duration: y - c.duration() })
					}
				}
				y || l.duration((y = c.duration()))
			} else l.timeline = 0
			return (
				!0 !== T || n || ((Rt = e(l)), s.killTweensOf(P), (Rt = 0)),
				Be(M, e(l), a),
				r.reversed && l.reverse(),
				r.paused && l.paused(!0),
				(w ||
					(!y &&
						!S &&
						l._start === fe(M._time) &&
						L(w) &&
						Pe(e(l)) &&
						'nested' !== M.data)) &&
					((l._tTime = -1e-8), l.render(Math.max(0, -b) || 0)),
				E && qe(e(l), E),
				l
			)
		}
		t(a, i)
		var o = a.prototype
		return (
			(o.render = function (e, t, n) {
				var i,
					s,
					a,
					o,
					l,
					c,
					u,
					d,
					p,
					f = this._time,
					h = this._tDur,
					m = this._dur,
					g = e < 0,
					v = e > h - b && !g ? h : e < b ? 0 : e
				if (m) {
					if (
						v !== this._tTime ||
						!e ||
						n ||
						(!this._initted && this._tTime) ||
						(this._startAt && this._zTime < 0 !== g)
					) {
						if (((i = v), (d = this.timeline), this._repeat)) {
							if (((o = m + this._rDelay), this._repeat < -1 && g))
								return this.totalTime(100 * o + e, t, n)
							if (
								((i = fe(v % o)),
								v === h
									? ((a = this._repeat), (i = m))
									: ((a = ~~(v / o)) && a === v / o && ((i = m), a--),
									  i > m && (i = m)),
								(c = this._yoyo && 1 & a) && ((p = this._yEase), (i = m - i)),
								(l = Le(this._tTime, o)),
								i === f && !n && this._initted)
							)
								return (this._tTime = v), this
							a !== l &&
								(d && this._yEase && Pt(d, c),
								!this.vars.repeatRefresh ||
									c ||
									this._lock ||
									((this._lock = n = 1),
									(this.render(fe(o * a), !0).invalidate()._lock = 0)))
						}
						if (!this._initted) {
							if (Re(this, g ? e : i, n, t, v)) return (this._tTime = 0), this
							if (f !== this._time) return this
							if (m !== this._dur) return this.render(e, t, n)
						}
						if (
							((this._tTime = v),
							(this._time = i),
							!this._act && this._ts && ((this._act = 1), (this._lazy = 0)),
							(this.ratio = u = (p || this._ease)(i / m)),
							this._from && (this.ratio = u = 1 - u),
							i && !f && !t && !a && (ut(this, 'onStart'), this._tTime !== v))
						)
							return this
						for (s = this._pt; s; ) s.r(u, s.d), (s = s._next)
						;(d &&
							d.render(
								e < 0 ? e : !i && c ? -1e-8 : d._dur * d._ease(i / this._dur),
								t,
								n
							)) ||
							(this._startAt && (this._zTime = e)),
							this._onUpdate &&
								!t &&
								(g && Ae(this, e, 0, n), ut(this, 'onUpdate')),
							this._repeat &&
								a !== l &&
								this.vars.onRepeat &&
								!t &&
								this.parent &&
								ut(this, 'onRepeat'),
							(v !== this._tDur && v) ||
								this._tTime !== v ||
								(g && !this._onUpdate && Ae(this, e, 0, !0),
								(e || !m) &&
									((v === this._tDur && this._ts > 0) ||
										(!v && this._ts < 0)) &&
									ke(this, 1),
								t ||
									(g && !f) ||
									!(v || f || c) ||
									(ut(this, v === h ? 'onComplete' : 'onReverseComplete', !0),
									this._prom &&
										!(v < h && this.timeScale() > 0) &&
										this._prom()))
					}
				} else
					!(function (e, t, n, i) {
						var s,
							a,
							o,
							l = e.ratio,
							c =
								t < 0 ||
								(!t &&
									((!e._start && Fe(e) && (e._initted || !Ne(e))) ||
										((e._ts < 0 || e._dp._ts < 0) && !Ne(e))))
									? 0
									: 1,
							u = e._rDelay,
							d = 0
						if (
							(u &&
								e._repeat &&
								((d = Xe(0, e._tDur, t)),
								(a = Le(d, u)),
								e._yoyo && 1 & a && (c = 1 - c),
								a !== Le(e._tTime, u) &&
									((l = 1 - c),
									e.vars.repeatRefresh && e._initted && e.invalidate())),
							c !== l || r || i || e._zTime === b || (!t && e._zTime))
						) {
							if (!e._initted && Re(e, t, i, n, d)) return
							for (
								o = e._zTime,
									e._zTime = t || (n ? b : 0),
									n || (n = t && !o),
									e.ratio = c,
									e._from && (c = 1 - c),
									e._time = 0,
									e._tTime = d,
									s = e._pt;
								s;

							)
								s.r(c, s.d), (s = s._next)
							t < 0 && Ae(e, t, 0, !0),
								e._onUpdate && !n && ut(e, 'onUpdate'),
								d && e._repeat && !n && e.parent && ut(e, 'onRepeat'),
								(t >= e._tDur || t < 0) &&
									e.ratio === c &&
									(c && ke(e, 1),
									n ||
										r ||
										(ut(e, c ? 'onComplete' : 'onReverseComplete', !0),
										e._prom && e._prom()))
						} else e._zTime || (e._zTime = t)
					})(this, e, t, n)
				return this
			}),
			(o.targets = function () {
				return this._targets
			}),
			(o.invalidate = function (e) {
				return (
					(!e || !this.vars.runBackwards) && (this._startAt = 0),
					(this._pt = this._op = this._onUpdate = this._lazy = this.ratio = 0),
					(this._ptLookup = []),
					this.timeline && this.timeline.invalidate(e),
					i.prototype.invalidate.call(this, e)
				)
			}),
			(o.resetTo = function (e, t, n, r) {
				p || Tt.wake(), this._ts || this.play()
				var i = Math.min(this._dur, (this._dp._time - this._start) * this._ts)
				return (
					this._initted || Yt(this, i),
					(function (e, t, n, r, i, s, a) {
						var o,
							l,
							c,
							u,
							d = ((e._pt && e._ptCache) || (e._ptCache = {}))[t]
						if (!d)
							for (
								d = e._ptCache[t] = [], c = e._ptLookup, u = e._targets.length;
								u--;

							) {
								if ((o = c[u][t]) && o.d && o.d._pt)
									for (o = o.d._pt; o && o.p !== t && o.fp !== t; ) o = o._next
								if (!o)
									return (Ft = 1), (e.vars[t] = '+=0'), Yt(e, a), (Ft = 0), 1
								d.push(o)
							}
						for (u = d.length; u--; )
							((o = (l = d[u])._pt || l).s =
								(!r && 0 !== r) || i ? o.s + (r || 0) + s * o.c : r),
								(o.c = n - o.s),
								l.e && (l.e = pe(n) + Ue(l.e)),
								l.b && (l.b = o.s + Ue(l.b))
					})(this, e, t, n, r, this._ease(i / this._dur), i)
						? this.resetTo(e, t, n, r)
						: ($e(this, 0),
						  this.parent ||
								Ce(
									this._dp,
									this,
									'_first',
									'_last',
									this._dp._sort ? '_start' : 0
								),
						  this.render(0))
				)
			}),
			(o.kill = function (e, t) {
				if ((void 0 === t && (t = 'all'), !(e || (t && 'all' !== t))))
					return (this._lazy = this._pt = 0), this.parent ? dt(this) : this
				if (this.timeline) {
					var n = this.timeline.totalDuration()
					return (
						this.timeline.killTweensOf(e, t, Rt && !0 !== Rt.vars.overwrite)
							._first || dt(this),
						this.parent &&
							n !== this.timeline.totalDuration() &&
							je(this, (this._dur * this.timeline._tDur) / n, 0, 1),
						this
					)
				}
				var r,
					i,
					s,
					a,
					o,
					l,
					c,
					u = this._targets,
					d = e ? Je(e) : u,
					p = this._ptLookup,
					f = this._pt
				if (
					(!t || 'all' === t) &&
					(function (e, t) {
						for (
							var n = e.length, r = n === t.length;
							r && n-- && e[n] === t[n];

						);
						return n < 0
					})(u, d)
				)
					return 'all' === t && (this._pt = 0), dt(this)
				for (
					r = this._op = this._op || [],
						'all' !== t &&
							(k(t) &&
								((o = {}),
								de(t, function (e) {
									return (o[e] = 1)
								}),
								(t = o)),
							(t = (function (e, t) {
								var n,
									r,
									i,
									s,
									a = e[0] ? ce(e[0]).harness : 0,
									o = a && a.aliases
								if (!o) return t
								for (r in ((n = we({}, t)), o))
									if ((r in n))
										for (i = (s = o[r].split(',')).length; i--; ) n[s[i]] = n[r]
								return n
							})(u, t))),
						c = u.length;
					c--;

				)
					if (~d.indexOf(u[c]))
						for (o in ((i = p[c]),
						'all' === t
							? ((r[c] = t), (a = i), (s = {}))
							: ((s = r[c] = r[c] || {}), (a = t)),
						a))
							(l = i && i[o]) &&
								(('kill' in l.d && !0 !== l.d.kill(o)) || Ee(this, l, '_pt'),
								delete i[o]),
								'all' !== s && (s[o] = 1)
				return this._initted && !this._pt && f && dt(this), this
			}),
			(a.to = function (e, t) {
				return new a(e, t, arguments[2])
			}),
			(a.from = function (e, t) {
				return He(1, arguments)
			}),
			(a.delayedCall = function (e, t, n, r) {
				return new a(t, 0, {
					immediateRender: !1,
					lazy: !1,
					overwrite: !1,
					delay: e,
					onComplete: t,
					onReverseComplete: t,
					onCompleteParams: n,
					onReverseCompleteParams: n,
					callbackScope: r,
				})
			}),
			(a.fromTo = function (e, t, n) {
				return He(2, arguments)
			}),
			(a.set = function (e, t) {
				return (t.duration = 0), t.repeatDelay || (t.repeat = 0), new a(e, t)
			}),
			(a.killTweensOf = function (e, t, n) {
				return s.killTweensOf(e, t, n)
			}),
			a
		)
	})(Bt)
	be(Ut.prototype, { _targets: [], _lazy: 0, _startAt: 0, _op: 0, _onInit: 0 }),
		de('staggerTo,staggerFrom,staggerFromTo', function (e) {
			Ut[e] = function () {
				var t = new qt(),
					n = Ke.call(arguments, 0)
				return n.splice('staggerFromTo' === e ? 5 : 4, 0, 0), t[e].apply(t, n)
			}
		})
	var Kt = function (e, t, n) {
			return (e[t] = n)
		},
		Qt = function (e, t, n) {
			return e[t](n)
		},
		Zt = function (e, t, n, r) {
			return e[t](r.fp, n)
		},
		Jt = function (e, t, n) {
			return e.setAttribute(t, n)
		},
		en = function (e, t) {
			return M(e[t]) ? Qt : P(e[t]) && e.setAttribute ? Jt : Kt
		},
		tn = function (e, t) {
			return t.set(t.t, t.p, Math.round(1e6 * (t.s + t.c * e)) / 1e6, t)
		},
		nn = function (e, t) {
			return t.set(t.t, t.p, !!(t.s + t.c * e), t)
		},
		rn = function (e, t) {
			var n = t._pt,
				r = ''
			if (!e && t.b) r = t.b
			else if (1 === e && t.e) r = t.e
			else {
				for (; n; )
					(r =
						n.p +
						(n.m
							? n.m(n.s + n.c * e)
							: Math.round(1e4 * (n.s + n.c * e)) / 1e4) +
						r),
						(n = n._next)
				r += t.c
			}
			t.set(t.t, t.p, r, t)
		},
		sn = function (e, t) {
			for (var n = t._pt; n; ) n.r(e, n.d), (n = n._next)
		},
		an = function (e, t, n, r) {
			for (var i, s = this._pt; s; )
				(i = s._next), s.p === r && s.modifier(e, t, n), (s = i)
		},
		on = function (e) {
			for (var t, n, r = this._pt; r; )
				(n = r._next),
					(r.p === e && !r.op) || r.op === e
						? Ee(this, r, '_pt')
						: r.dep || (t = 1),
					(r = n)
			return !t
		},
		ln = function (e, t, n, r) {
			r.mSet(e, t, r.m.call(r.tween, n, r.mt), r)
		},
		cn = function (e) {
			for (var t, n, r, i, s = e._pt; s; ) {
				for (t = s._next, n = r; n && n.pr > s.pr; ) n = n._next
				;(s._prev = n ? n._prev : i) ? (s._prev._next = s) : (r = s),
					(s._next = n) ? (n._prev = s) : (i = s),
					(s = t)
			}
			e._pt = r
		},
		un = (function () {
			function e(e, t, n, r, i, s, a, o, l) {
				;(this.t = t),
					(this.s = r),
					(this.c = i),
					(this.p = n),
					(this.r = s || tn),
					(this.d = a || this),
					(this.set = o || Kt),
					(this.pr = l || 0),
					(this._next = e),
					e && (e._prev = this)
			}
			return (
				(e.prototype.modifier = function (e, t, n) {
					;(this.mSet = this.mSet || this.set),
						(this.set = ln),
						(this.m = e),
						(this.mt = n),
						(this.tween = t)
				}),
				e
			)
		})()
	de(
		oe +
			'parent,duration,ease,delay,overwrite,runBackwards,startAt,yoyo,immediateRender,repeat,repeatDelay,data,paused,reversed,lazy,callbackScope,stringFilter,id,yoyoEase,stagger,inherit,repeatRefresh,keyframes,autoRevert,scrollTrigger',
		function (e) {
			return (ee[e] = 1)
		}
	),
		(Y.TweenMax = Y.TweenLite = Ut),
		(Y.TimelineLite = Y.TimelineMax = qt),
		(s = new qt({
			sortChildren: !1,
			defaults: _,
			autoRemoveChildren: !0,
			id: 'root',
			smoothChildTiming: !0,
		})),
		(v.stringFilter = xt)
	var dn = [],
		pn = {},
		fn = [],
		hn = 0,
		mn = function (e) {
			return (pn[e] || fn).map(function (e) {
				return e()
			})
		},
		gn = function () {
			var e = Date.now(),
				t = []
			e - hn > 2 &&
				(mn('matchMediaInit'),
				dn.forEach(function (e) {
					var n,
						r,
						i,
						s,
						o = e.queries,
						l = e.conditions
					for (r in o)
						(n = a.matchMedia(o[r]).matches) && (i = 1),
							n !== l[r] && ((l[r] = n), (s = 1))
					s && (e.revert(), i && t.push(e))
				}),
				mn('matchMediaRevert'),
				t.forEach(function (e) {
					return e.onMatch(e)
				}),
				(hn = e),
				mn('matchMedia'))
		},
		vn = (function () {
			function e(e, t) {
				;(this.selector = t && et(t)),
					(this.data = []),
					(this._r = []),
					(this.isReverted = !1),
					e && this.add(e)
			}
			var t = e.prototype
			return (
				(t.add = function (e, t, n) {
					M(e) && ((n = t), (t = e), (e = M))
					var r = this,
						s = function () {
							var e,
								s = i,
								a = r.selector
							return (
								s && s !== r && s.data.push(r),
								n && (r.selector = et(n)),
								(i = r),
								(e = t.apply(r, arguments)),
								M(e) && r._r.push(e),
								(i = s),
								(r.selector = a),
								(r.isReverted = !1),
								e
							)
						}
					return (r.last = s), e === M ? s(r) : e ? (r[e] = s) : s
				}),
				(t.ignore = function (e) {
					var t = i
					;(i = null), e(this), (i = t)
				}),
				(t.getTweens = function () {
					var t = []
					return (
						this.data.forEach(function (n) {
							return n instanceof e
								? t.push.apply(t, n.getTweens())
								: n instanceof Ut &&
										!(n.parent && 'nested' === n.parent.data) &&
										t.push(n)
						}),
						t
					)
				}),
				(t.clear = function () {
					this._r.length = this.data.length = 0
				}),
				(t.kill = function (e, t) {
					var n = this
					if (e) {
						var r = this.getTweens()
						this.data.forEach(function (e) {
							'isFlip' === e.data &&
								(e.revert(),
								e.getChildren(!0, !0, !1).forEach(function (e) {
									return r.splice(r.indexOf(e), 1)
								}))
						}),
							r
								.map(function (e) {
									return { g: e.globalTime(0), t: e }
								})
								.sort(function (e, t) {
									return t.g - e.g || -1
								})
								.forEach(function (t) {
									return t.t.revert(e)
								}),
							this.data.forEach(function (t) {
								return !(t instanceof Bt) && t.revert && t.revert(e)
							}),
							this._r.forEach(function (t) {
								return t(e, n)
							}),
							(this.isReverted = !0)
					} else
						this.data.forEach(function (e) {
							return e.kill && e.kill()
						})
					if ((this.clear(), t)) {
						var i = dn.indexOf(this)
						~i && dn.splice(i, 1)
					}
				}),
				(t.revert = function (e) {
					this.kill(e || {})
				}),
				e
			)
		})(),
		_n = (function () {
			function e(e) {
				;(this.contexts = []), (this.scope = e)
			}
			var t = e.prototype
			return (
				(t.add = function (e, t, n) {
					O(e) || (e = { matches: e })
					var r,
						i,
						s,
						o = new vn(0, n || this.scope),
						l = (o.conditions = {})
					for (i in (this.contexts.push(o),
					(t = o.add('onMatch', t)),
					(o.queries = e),
					e))
						'all' === i
							? (s = 1)
							: (r = a.matchMedia(e[i])) &&
							  (dn.indexOf(o) < 0 && dn.push(o),
							  (l[i] = r.matches) && (s = 1),
							  r.addListener
									? r.addListener(gn)
									: r.addEventListener('change', gn))
					return s && t(o), this
				}),
				(t.revert = function (e) {
					this.kill(e || {})
				}),
				(t.kill = function (e) {
					this.contexts.forEach(function (t) {
						return t.kill(e, !0)
					})
				}),
				e
			)
		})(),
		yn = {
			registerPlugin: function () {
				for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++)
					t[n] = arguments[n]
				t.forEach(function (e) {
					return ft(e)
				})
			},
			timeline: function (e) {
				return new qt(e)
			},
			getTweensOf: function (e, t) {
				return s.getTweensOf(e, t)
			},
			getProperty: function (e, t, n, r) {
				k(e) && (e = Je(e)[0])
				var i = ce(e || {}).get,
					s = n ? ye : _e
				return (
					'native' === n && (n = ''),
					e
						? t
							? s(((re[t] && re[t].get) || i)(e, t, n, r))
							: function (t, n, r) {
									return s(((re[t] && re[t].get) || i)(e, t, n, r))
							  }
						: e
				)
			},
			quickSetter: function (e, t, n) {
				if ((e = Je(e)).length > 1) {
					var r = e.map(function (e) {
							return xn.quickSetter(e, t, n)
						}),
						i = r.length
					return function (e) {
						for (var t = i; t--; ) r[t](e)
					}
				}
				e = e[0] || {}
				var s = re[t],
					a = ce(e),
					o = (a.harness && (a.harness.aliases || {})[t]) || t,
					l = s
						? function (t) {
								var r = new s()
								;(d._pt = 0),
									r.init(e, n ? t + n : t, d, 0, [e]),
									r.render(1, r),
									d._pt && sn(1, d)
						  }
						: a.set(e, o)
				return s
					? l
					: function (t) {
							return l(e, o, n ? t + n : t, a, 1)
					  }
			},
			quickTo: function (e, t, n) {
				var r,
					i = xn.to(
						e,
						we((((r = {})[t] = '+=0.1'), (r.paused = !0), r), n || {})
					),
					s = function (e, n, r) {
						return i.resetTo(t, e, n, r)
					}
				return (s.tween = i), s
			},
			isTweening: function (e) {
				return s.getTweensOf(e, !0).length > 0
			},
			defaults: function (e) {
				return e && e.ease && (e.ease = Ot(e.ease, _.ease)), xe(_, e || {})
			},
			config: function (e) {
				return xe(v, e || {})
			},
			registerEffect: function (e) {
				var t = e.name,
					n = e.effect,
					r = e.plugins,
					i = e.defaults,
					s = e.extendTimeline
				;(r || '').split(',').forEach(function (e) {
					return (
						e && !re[e] && !Y[e] && X(t + ' effect requires ' + e + ' plugin.')
					)
				}),
					(ie[t] = function (e, t, r) {
						return n(Je(e), be(t || {}, i), r)
					}),
					s &&
						(qt.prototype[t] = function (e, n, r) {
							return this.add(ie[t](e, O(n) ? n : (r = n) && {}, this), r)
						})
			},
			registerEase: function (e, t) {
				Ct[e] = Ot(t)
			},
			parseEase: function (e, t) {
				return arguments.length ? Ot(e, t) : Ct
			},
			getById: function (e) {
				return s.getById(e)
			},
			exportRoot: function (e, t) {
				void 0 === e && (e = {})
				var n,
					r,
					i = new qt(e)
				for (
					i.smoothChildTiming = L(e.smoothChildTiming),
						s.remove(i),
						i._dp = 0,
						i._time = i._tTime = s._time,
						n = s._first;
					n;

				)
					(r = n._next),
						(!t &&
							!n._dur &&
							n instanceof Ut &&
							n.vars.onComplete === n._targets[0]) ||
							Be(i, n, n._start - n._delay),
						(n = r)
				return Be(s, i, 0), i
			},
			context: function (e, t) {
				return e ? new vn(e, t) : i
			},
			matchMedia: function (e) {
				return new _n(e)
			},
			matchMediaRefresh: function () {
				return (
					dn.forEach(function (e) {
						var t,
							n,
							r = e.conditions
						for (n in r) r[n] && ((r[n] = !1), (t = 1))
						t && e.revert()
					}) || gn()
				)
			},
			addEventListener: function (e, t) {
				var n = pn[e] || (pn[e] = [])
				~n.indexOf(t) || n.push(t)
			},
			removeEventListener: function (e, t) {
				var n = pn[e],
					r = n && n.indexOf(t)
				r >= 0 && n.splice(r, 1)
			},
			utils: {
				wrap: function e(t, n, r) {
					var i = n - t
					return I(t)
						? at(t, e(0, t.length), n)
						: We(r, function (e) {
								return ((i + ((e - t) % i)) % i) + t
						  })
				},
				wrapYoyo: function e(t, n, r) {
					var i = n - t,
						s = 2 * i
					return I(t)
						? at(t, e(0, t.length - 1), n)
						: We(r, function (e) {
								return t + ((e = (s + ((e - t) % s)) % s || 0) > i ? s - e : e)
						  })
				},
				distribute: nt,
				random: st,
				snap: it,
				normalize: function (e, t, n) {
					return lt(e, t, 0, 1, n)
				},
				getUnit: Ue,
				clamp: function (e, t, n) {
					return We(n, function (n) {
						return Xe(e, t, n)
					})
				},
				splitColor: vt,
				toArray: Je,
				selector: et,
				mapRange: lt,
				pipe: function () {
					for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++)
						t[n] = arguments[n]
					return function (e) {
						return t.reduce(function (e, t) {
							return t(e)
						}, e)
					}
				},
				unitize: function (e, t) {
					return function (n) {
						return e(parseFloat(n)) + (t || Ue(n))
					}
				},
				interpolate: function e(t, n, r, i) {
					var s = isNaN(t + n)
						? 0
						: function (e) {
								return (1 - e) * t + e * n
						  }
					if (!s) {
						var a,
							o,
							l,
							c,
							u,
							d = k(t),
							p = {}
						if ((!0 === r && (i = 1) && (r = null), d))
							(t = { p: t }), (n = { p: n })
						else if (I(t) && !I(n)) {
							for (l = [], c = t.length, u = c - 2, o = 1; o < c; o++)
								l.push(e(t[o - 1], t[o]))
							c--,
								(s = function (e) {
									e *= c
									var t = Math.min(u, ~~e)
									return l[t](e - t)
								}),
								(r = n)
						} else i || (t = we(I(t) ? [] : {}, t))
						if (!l) {
							for (a in n) jt.call(p, t, a, 'get', n[a])
							s = function (e) {
								return sn(e, p) || (d ? t.p : t)
							}
						}
					}
					return We(r, s)
				},
				shuffle: tt,
			},
			install: H,
			effects: ie,
			ticker: Tt,
			updateRoot: qt.updateRoot,
			plugins: re,
			globalTimeline: s,
			core: {
				PropTween: un,
				globals: U,
				Tween: Ut,
				Timeline: qt,
				Animation: Bt,
				getCache: ce,
				_removeLinkedListItem: Ee,
				reverting: function () {
					return r
				},
				context: function (e) {
					return e && i && (i.data.push(e), (e._ctx = i)), i
				},
				suppressOverwrites: function (e) {
					return (n = e)
				},
			},
		}
	de('to,from,fromTo,delayedCall,set,killTweensOf', function (e) {
		return (yn[e] = Ut[e])
	}),
		Tt.add(qt.updateRoot),
		(d = yn.to({}, { duration: 0 }))
	var bn = function (e, t) {
			for (var n = e._pt; n && n.p !== t && n.op !== t && n.fp !== t; )
				n = n._next
			return n
		},
		wn = function (e, t) {
			return {
				name: e,
				rawVars: 1,
				init: function (e, n, r) {
					r._onInit = function (e) {
						var r, i
						if (
							(k(n) &&
								((r = {}),
								de(n, function (e) {
									return (r[e] = 1)
								}),
								(n = r)),
							t)
						) {
							for (i in ((r = {}), n)) r[i] = t(n[i])
							n = r
						}
						!(function (e, t) {
							var n,
								r,
								i,
								s = e._targets
							for (n in t)
								for (r = s.length; r--; )
									(i = e._ptLookup[r][n]) &&
										(i = i.d) &&
										(i._pt && (i = bn(i, n)),
										i && i.modifier && i.modifier(t[n], e, s[r], n))
						})(e, n)
					}
				},
			}
		},
		xn =
			yn.registerPlugin(
				{
					name: 'attr',
					init: function (e, t, n, r, i) {
						var s, a, o
						for (s in ((this.tween = n), t))
							(o = e.getAttribute(s) || ''),
								((a = this.add(
									e,
									'setAttribute',
									(o || 0) + '',
									t[s],
									r,
									i,
									0,
									0,
									s
								)).op = s),
								(a.b = o),
								this._props.push(s)
					},
					render: function (e, t) {
						for (var n = t._pt; n; )
							r ? n.set(n.t, n.p, n.b, n) : n.r(e, n.d), (n = n._next)
					},
				},
				{
					name: 'endArray',
					init: function (e, t) {
						for (var n = t.length; n--; )
							this.add(e, n, e[n] || 0, t[n], 0, 0, 0, 0, 0, 1)
					},
				},
				wn('roundProps', rt),
				wn('modifiers'),
				wn('snap', it)
			) || yn
	;(Ut.version = qt.version = xn.version = '3.11.5'), (c = 1), D() && St()
	Ct.Power0, Ct.Power1, Ct.Power2, Ct.Power3
	var Tn,
		Sn,
		Cn,
		En,
		kn,
		Mn,
		An,
		Pn,
		On = Ct.Power4,
		Ln =
			(Ct.Linear,
			Ct.Quad,
			Ct.Cubic,
			Ct.Quart,
			Ct.Quint,
			Ct.Strong,
			Ct.Elastic,
			Ct.Back,
			Ct.SteppedEase,
			Ct.Bounce,
			Ct.Sine,
			Ct.Expo,
			Ct.Circ,
			{}),
		Dn = 180 / Math.PI,
		zn = Math.PI / 180,
		$n = Math.atan2,
		In = /([A-Z])/g,
		Bn = /(left|right|width|margin|padding|x)/i,
		qn = /[\s,\(]\S/,
		Rn = {
			autoAlpha: 'opacity,visibility',
			scale: 'scaleX,scaleY',
			alpha: 'opacity',
		},
		Fn = function (e, t) {
			return t.set(t.t, t.p, Math.round(1e4 * (t.s + t.c * e)) / 1e4 + t.u, t)
		},
		Nn = function (e, t) {
			return t.set(
				t.t,
				t.p,
				1 === e ? t.e : Math.round(1e4 * (t.s + t.c * e)) / 1e4 + t.u,
				t
			)
		},
		jn = function (e, t) {
			return t.set(
				t.t,
				t.p,
				e ? Math.round(1e4 * (t.s + t.c * e)) / 1e4 + t.u : t.b,
				t
			)
		},
		Gn = function (e, t) {
			var n = t.s + t.c * e
			t.set(t.t, t.p, ~~(n + (n < 0 ? -0.5 : 0.5)) + t.u, t)
		},
		Yn = function (e, t) {
			return t.set(t.t, t.p, e ? t.e : t.b, t)
		},
		Vn = function (e, t) {
			return t.set(t.t, t.p, 1 !== e ? t.b : t.e, t)
		},
		Hn = function (e, t, n) {
			return (e.style[t] = n)
		},
		Wn = function (e, t, n) {
			return e.style.setProperty(t, n)
		},
		Xn = function (e, t, n) {
			return (e._gsap[t] = n)
		},
		Un = function (e, t, n) {
			return (e._gsap.scaleX = e._gsap.scaleY = n)
		},
		Kn = function (e, t, n, r, i) {
			var s = e._gsap
			;(s.scaleX = s.scaleY = n), s.renderTransform(i, s)
		},
		Qn = function (e, t, n, r, i) {
			var s = e._gsap
			;(s[t] = n), s.renderTransform(i, s)
		},
		Zn = 'transform',
		Jn = Zn + 'Origin',
		er = function e(t, n) {
			var r = this,
				i = this.target,
				s = i.style
			if (t in Ln) {
				if (((this.tfm = this.tfm || {}), 'transform' === t))
					return Rn.transform.split(',').forEach(function (t) {
						return e.call(r, t, n)
					})
				if (
					(~(t = Rn[t] || t).indexOf(',')
						? t.split(',').forEach(function (e) {
								return (r.tfm[e] = _r(i, e))
						  })
						: (this.tfm[t] = i._gsap.x ? i._gsap[t] : _r(i, t)),
					this.props.indexOf(Zn) >= 0)
				)
					return
				i._gsap.svg &&
					((this.svgo = i.getAttribute('data-svg-origin')),
					this.props.push(Jn, n, '')),
					(t = Zn)
			}
			;(s || n) && this.props.push(t, n, s[t])
		},
		tr = function (e) {
			e.translate &&
				(e.removeProperty('translate'),
				e.removeProperty('scale'),
				e.removeProperty('rotate'))
		},
		nr = function () {
			var e,
				t,
				n = this.props,
				r = this.target,
				i = r.style,
				s = r._gsap
			for (e = 0; e < n.length; e += 3)
				n[e + 1]
					? (r[n[e]] = n[e + 2])
					: n[e + 2]
					? (i[n[e]] = n[e + 2])
					: i.removeProperty(
							'--' === n[e].substr(0, 2)
								? n[e]
								: n[e].replace(In, '-$1').toLowerCase()
					  )
			if (this.tfm) {
				for (t in this.tfm) s[t] = this.tfm[t]
				s.svg &&
					(s.renderTransform(),
					r.setAttribute('data-svg-origin', this.svgo || '')),
					((e = An()) && e.isStart) || i[Zn] || (tr(i), (s.uncache = 1))
			}
		},
		rr = function (e, t) {
			var n = { target: e, props: [], revert: nr, save: er }
			return (
				e._gsap || xn.core.getCache(e),
				t &&
					t.split(',').forEach(function (e) {
						return n.save(e)
					}),
				n
			)
		},
		ir = function (e, t) {
			var n = Sn.createElementNS
				? Sn.createElementNS(
						(t || 'http://www.w3.org/1999/xhtml').replace(/^https/, 'http'),
						e
				  )
				: Sn.createElement(e)
			return n.style ? n : Sn.createElement(e)
		},
		sr = function e(t, n, r) {
			var i = getComputedStyle(t)
			return (
				i[n] ||
				i.getPropertyValue(n.replace(In, '-$1').toLowerCase()) ||
				i.getPropertyValue(n) ||
				(!r && e(t, or(n) || n, 1)) ||
				''
			)
		},
		ar = 'O,Moz,ms,Ms,Webkit'.split(','),
		or = function (e, t, n) {
			var r = (t || kn).style,
				i = 5
			if (e in r && !n) return e
			for (
				e = e.charAt(0).toUpperCase() + e.substr(1);
				i-- && !(ar[i] + e in r);

			);
			return i < 0 ? null : (3 === i ? 'ms' : i >= 0 ? ar[i] : '') + e
		},
		lr = function () {
			'undefined' != typeof window &&
				window.document &&
				((Tn = window),
				(Sn = Tn.document),
				(Cn = Sn.documentElement),
				(kn = ir('div') || { style: {} }),
				ir('div'),
				(Zn = or(Zn)),
				(Jn = Zn + 'Origin'),
				(kn.style.cssText =
					'border-width:0;line-height:0;position:absolute;padding:0'),
				(Pn = !!or('perspective')),
				(An = xn.core.reverting),
				(En = 1))
		},
		cr = function e(t) {
			var n,
				r = ir(
					'svg',
					(this.ownerSVGElement &&
						this.ownerSVGElement.getAttribute('xmlns')) ||
						'http://www.w3.org/2000/svg'
				),
				i = this.parentNode,
				s = this.nextSibling,
				a = this.style.cssText
			if (
				(Cn.appendChild(r),
				r.appendChild(this),
				(this.style.display = 'block'),
				t)
			)
				try {
					;(n = this.getBBox()),
						(this._gsapBBox = this.getBBox),
						(this.getBBox = e)
				} catch (e) {}
			else this._gsapBBox && (n = this._gsapBBox())
			return (
				i && (s ? i.insertBefore(this, s) : i.appendChild(this)),
				Cn.removeChild(r),
				(this.style.cssText = a),
				n
			)
		},
		ur = function (e, t) {
			for (var n = t.length; n--; )
				if (e.hasAttribute(t[n])) return e.getAttribute(t[n])
		},
		dr = function (e) {
			var t
			try {
				t = e.getBBox()
			} catch (n) {
				t = cr.call(e, !0)
			}
			return (
				(t && (t.width || t.height)) ||
					e.getBBox === cr ||
					(t = cr.call(e, !0)),
				!t || t.width || t.x || t.y
					? t
					: {
							x: +ur(e, ['x', 'cx', 'x1']) || 0,
							y: +ur(e, ['y', 'cy', 'y1']) || 0,
							width: 0,
							height: 0,
					  }
			)
		},
		pr = function (e) {
			return !(!e.getCTM || (e.parentNode && !e.ownerSVGElement) || !dr(e))
		},
		fr = function (e, t) {
			if (t) {
				var n = e.style
				t in Ln && t !== Jn && (t = Zn),
					n.removeProperty
						? (('ms' !== t.substr(0, 2) && 'webkit' !== t.substr(0, 6)) ||
								(t = '-' + t),
						  n.removeProperty(t.replace(In, '-$1').toLowerCase()))
						: n.removeAttribute(t)
			}
		},
		hr = function (e, t, n, r, i, s) {
			var a = new un(e._pt, t, n, 0, 1, s ? Vn : Yn)
			return (e._pt = a), (a.b = r), (a.e = i), e._props.push(n), a
		},
		mr = { deg: 1, rad: 1, turn: 1 },
		gr = { grid: 1, flex: 1 },
		vr = function e(t, n, r, i) {
			var s,
				a,
				o,
				l,
				c = parseFloat(r) || 0,
				u = (r + '').trim().substr((c + '').length) || 'px',
				d = kn.style,
				p = Bn.test(n),
				f = 'svg' === t.tagName.toLowerCase(),
				h = (f ? 'client' : 'offset') + (p ? 'Width' : 'Height'),
				m = 100,
				g = 'px' === i,
				v = '%' === i
			return i === u || !c || mr[i] || mr[u]
				? c
				: ('px' !== u && !g && (c = e(t, n, r, 'px')),
				  (l = t.getCTM && pr(t)),
				  (!v && '%' !== u) || (!Ln[n] && !~n.indexOf('adius'))
						? ((d[p ? 'width' : 'height'] = m + (g ? u : i)),
						  (a =
								~n.indexOf('adius') || ('em' === i && t.appendChild && !f)
									? t
									: t.parentNode),
						  l && (a = (t.ownerSVGElement || {}).parentNode),
						  (a && a !== Sn && a.appendChild) || (a = Sn.body),
						  (o = a._gsap) &&
						  v &&
						  o.width &&
						  p &&
						  o.time === Tt.time &&
						  !o.uncache
								? pe((c / o.width) * m)
								: ((v || '%' === u) &&
										!gr[sr(a, 'display')] &&
										(d.position = sr(t, 'position')),
								  a === t && (d.position = 'static'),
								  a.appendChild(kn),
								  (s = kn[h]),
								  a.removeChild(kn),
								  (d.position = 'absolute'),
								  p && v && (((o = ce(a)).time = Tt.time), (o.width = a[h])),
								  pe(g ? (s * c) / m : s && c ? (m / s) * c : 0)))
						: ((s = l ? t.getBBox()[p ? 'width' : 'height'] : t[h]),
						  pe(v ? (c / s) * m : (c / 100) * s)))
		},
		_r = function (e, t, n, r) {
			var i
			return (
				En || lr(),
				t in Rn &&
					'transform' !== t &&
					~(t = Rn[t]).indexOf(',') &&
					(t = t.split(',')[0]),
				Ln[t] && 'transform' !== t
					? ((i = Pr(e, r)),
					  (i =
							'transformOrigin' !== t
								? i[t]
								: i.svg
								? i.origin
								: Or(sr(e, Jn)) + ' ' + i.zOrigin + 'px'))
					: (!(i = e.style[t]) ||
							'auto' === i ||
							r ||
							~(i + '').indexOf('calc(')) &&
					  (i =
							(Tr[t] && Tr[t](e, t, n)) ||
							sr(e, t) ||
							ue(e, t) ||
							('opacity' === t ? 1 : 0)),
				n && !~(i + '').trim().indexOf(' ') ? vr(e, t, i, n) + n : i
			)
		},
		yr = function (e, t, n, r) {
			if (!n || 'none' === n) {
				var i = or(t, e, 1),
					s = i && sr(e, i, 1)
				s && s !== n
					? ((t = i), (n = s))
					: 'borderColor' === t && (n = sr(e, 'borderTopColor'))
			}
			var a,
				o,
				l,
				c,
				u,
				d,
				p,
				f,
				h,
				m,
				g,
				_ = new un(this._pt, e.style, t, 0, 1, rn),
				y = 0,
				b = 0
			if (
				((_.b = n),
				(_.e = r),
				(n += ''),
				'auto' === (r += '') &&
					((e.style[t] = r), (r = sr(e, t) || r), (e.style[t] = n)),
				xt((a = [n, r])),
				(r = a[1]),
				(l = (n = a[0]).match(R) || []),
				(r.match(R) || []).length)
			) {
				for (; (o = R.exec(r)); )
					(p = o[0]),
						(h = r.substring(y, o.index)),
						u
							? (u = (u + 1) % 5)
							: ('rgba(' !== h.substr(-5) && 'hsla(' !== h.substr(-5)) ||
							  (u = 1),
						p !== (d = l[b++] || '') &&
							((c = parseFloat(d) || 0),
							(g = d.substr((c + '').length)),
							'=' === p.charAt(1) && (p = he(c, p) + g),
							(f = parseFloat(p)),
							(m = p.substr((f + '').length)),
							(y = R.lastIndex - m.length),
							m ||
								((m = m || v.units[t] || g),
								y === r.length && ((r += m), (_.e += m))),
							g !== m && (c = vr(e, t, d, m) || 0),
							(_._pt = {
								_next: _._pt,
								p: h || 1 === b ? h : ',',
								s: c,
								c: f - c,
								m: (u && u < 4) || 'zIndex' === t ? Math.round : 0,
							}))
				_.c = y < r.length ? r.substring(y, r.length) : ''
			} else _.r = 'display' === t && 'none' === r ? Vn : Yn
			return N.test(r) && (_.e = 0), (this._pt = _), _
		},
		br = {
			top: '0%',
			bottom: '100%',
			left: '0%',
			right: '100%',
			center: '50%',
		},
		wr = function (e) {
			var t = e.split(' '),
				n = t[0],
				r = t[1] || '50%'
			return (
				('top' !== n && 'bottom' !== n && 'left' !== r && 'right' !== r) ||
					((e = n), (n = r), (r = e)),
				(t[0] = br[n] || n),
				(t[1] = br[r] || r),
				t.join(' ')
			)
		},
		xr = function (e, t) {
			if (t.tween && t.tween._time === t.tween._dur) {
				var n,
					r,
					i,
					s = t.t,
					a = s.style,
					o = t.u,
					l = s._gsap
				if ('all' === o || !0 === o) (a.cssText = ''), (r = 1)
				else
					for (i = (o = o.split(',')).length; --i > -1; )
						(n = o[i]),
							Ln[n] && ((r = 1), (n = 'transformOrigin' === n ? Jn : Zn)),
							fr(s, n)
				r &&
					(fr(s, Zn),
					l &&
						(l.svg && s.removeAttribute('transform'),
						Pr(s, 1),
						(l.uncache = 1),
						tr(a)))
			}
		},
		Tr = {
			clearProps: function (e, t, n, r, i) {
				if ('isFromStart' !== i.data) {
					var s = (e._pt = new un(e._pt, t, n, 0, 0, xr))
					return (s.u = r), (s.pr = -10), (s.tween = i), e._props.push(n), 1
				}
			},
		},
		Sr = [1, 0, 0, 1, 0, 0],
		Cr = {},
		Er = function (e) {
			return 'matrix(1, 0, 0, 1, 0, 0)' === e || 'none' === e || !e
		},
		kr = function (e) {
			var t = sr(e, Zn)
			return Er(t) ? Sr : t.substr(7).match(q).map(pe)
		},
		Mr = function (e, t) {
			var n,
				r,
				i,
				s,
				a = e._gsap || ce(e),
				o = e.style,
				l = kr(e)
			return a.svg && e.getAttribute('transform')
				? '1,0,0,1,0,0' ===
				  (l = [
						(i = e.transform.baseVal.consolidate().matrix).a,
						i.b,
						i.c,
						i.d,
						i.e,
						i.f,
				  ]).join(',')
					? Sr
					: l
				: (l !== Sr ||
						e.offsetParent ||
						e === Cn ||
						a.svg ||
						((i = o.display),
						(o.display = 'block'),
						((n = e.parentNode) && e.offsetParent) ||
							((s = 1), (r = e.nextElementSibling), Cn.appendChild(e)),
						(l = kr(e)),
						i ? (o.display = i) : fr(e, 'display'),
						s &&
							(r
								? n.insertBefore(e, r)
								: n
								? n.appendChild(e)
								: Cn.removeChild(e))),
				  t && l.length > 6 ? [l[0], l[1], l[4], l[5], l[12], l[13]] : l)
		},
		Ar = function (e, t, n, r, i, s) {
			var a,
				o,
				l,
				c = e._gsap,
				u = i || Mr(e, !0),
				d = c.xOrigin || 0,
				p = c.yOrigin || 0,
				f = c.xOffset || 0,
				h = c.yOffset || 0,
				m = u[0],
				g = u[1],
				v = u[2],
				_ = u[3],
				y = u[4],
				b = u[5],
				w = t.split(' '),
				x = parseFloat(w[0]) || 0,
				T = parseFloat(w[1]) || 0
			n
				? u !== Sr &&
				  (o = m * _ - g * v) &&
				  ((l = x * (-g / o) + T * (m / o) - (m * b - g * y) / o),
				  (x = x * (_ / o) + T * (-v / o) + (v * b - _ * y) / o),
				  (T = l))
				: ((x = (a = dr(e)).x + (~w[0].indexOf('%') ? (x / 100) * a.width : x)),
				  (T =
						a.y + (~(w[1] || w[0]).indexOf('%') ? (T / 100) * a.height : T))),
				r || (!1 !== r && c.smooth)
					? ((y = x - d),
					  (b = T - p),
					  (c.xOffset = f + (y * m + b * v) - y),
					  (c.yOffset = h + (y * g + b * _) - b))
					: (c.xOffset = c.yOffset = 0),
				(c.xOrigin = x),
				(c.yOrigin = T),
				(c.smooth = !!r),
				(c.origin = t),
				(c.originIsAbsolute = !!n),
				(e.style[Jn] = '0px 0px'),
				s &&
					(hr(s, c, 'xOrigin', d, x),
					hr(s, c, 'yOrigin', p, T),
					hr(s, c, 'xOffset', f, c.xOffset),
					hr(s, c, 'yOffset', h, c.yOffset)),
				e.setAttribute('data-svg-origin', x + ' ' + T)
		},
		Pr = function (e, t) {
			var n = e._gsap || new It(e)
			if ('x' in n && !t && !n.uncache) return n
			var r,
				i,
				s,
				a,
				o,
				l,
				c,
				u,
				d,
				p,
				f,
				h,
				m,
				g,
				_,
				y,
				b,
				w,
				x,
				T,
				S,
				C,
				E,
				k,
				M,
				A,
				P,
				O,
				L,
				D,
				z,
				$,
				I = e.style,
				B = n.scaleX < 0,
				q = 'px',
				R = 'deg',
				F = getComputedStyle(e),
				N = sr(e, Jn) || '0'
			return (
				(r = i = s = l = c = u = d = p = f = 0),
				(a = o = 1),
				(n.svg = !(!e.getCTM || !pr(e))),
				F.translate &&
					(('none' === F.translate &&
						'none' === F.scale &&
						'none' === F.rotate) ||
						(I[Zn] =
							('none' !== F.translate
								? 'translate3d(' +
								  (F.translate + ' 0 0').split(' ').slice(0, 3).join(', ') +
								  ') '
								: '') +
							('none' !== F.rotate ? 'rotate(' + F.rotate + ') ' : '') +
							('none' !== F.scale
								? 'scale(' + F.scale.split(' ').join(',') + ') '
								: '') +
							('none' !== F[Zn] ? F[Zn] : '')),
					(I.scale = I.rotate = I.translate = 'none')),
				(g = Mr(e, n.svg)),
				n.svg &&
					(n.uncache
						? ((M = e.getBBox()),
						  (N = n.xOrigin - M.x + 'px ' + (n.yOrigin - M.y) + 'px'),
						  (k = ''))
						: (k = !t && e.getAttribute('data-svg-origin')),
					Ar(e, k || N, !!k || n.originIsAbsolute, !1 !== n.smooth, g)),
				(h = n.xOrigin || 0),
				(m = n.yOrigin || 0),
				g !== Sr &&
					((w = g[0]),
					(x = g[1]),
					(T = g[2]),
					(S = g[3]),
					(r = C = g[4]),
					(i = E = g[5]),
					6 === g.length
						? ((a = Math.sqrt(w * w + x * x)),
						  (o = Math.sqrt(S * S + T * T)),
						  (l = w || x ? $n(x, w) * Dn : 0),
						  (d = T || S ? $n(T, S) * Dn + l : 0) &&
								(o *= Math.abs(Math.cos(d * zn))),
						  n.svg && ((r -= h - (h * w + m * T)), (i -= m - (h * x + m * S))))
						: (($ = g[6]),
						  (D = g[7]),
						  (P = g[8]),
						  (O = g[9]),
						  (L = g[10]),
						  (z = g[11]),
						  (r = g[12]),
						  (i = g[13]),
						  (s = g[14]),
						  (c = (_ = $n($, L)) * Dn),
						  _ &&
								((k = C * (y = Math.cos(-_)) + P * (b = Math.sin(-_))),
								(M = E * y + O * b),
								(A = $ * y + L * b),
								(P = C * -b + P * y),
								(O = E * -b + O * y),
								(L = $ * -b + L * y),
								(z = D * -b + z * y),
								(C = k),
								(E = M),
								($ = A)),
						  (u = (_ = $n(-T, L)) * Dn),
						  _ &&
								((y = Math.cos(-_)),
								(z = S * (b = Math.sin(-_)) + z * y),
								(w = k = w * y - P * b),
								(x = M = x * y - O * b),
								(T = A = T * y - L * b)),
						  (l = (_ = $n(x, w)) * Dn),
						  _ &&
								((k = w * (y = Math.cos(_)) + x * (b = Math.sin(_))),
								(M = C * y + E * b),
								(x = x * y - w * b),
								(E = E * y - C * b),
								(w = k),
								(C = M)),
						  c &&
								Math.abs(c) + Math.abs(l) > 359.9 &&
								((c = l = 0), (u = 180 - u)),
						  (a = pe(Math.sqrt(w * w + x * x + T * T))),
						  (o = pe(Math.sqrt(E * E + $ * $))),
						  (_ = $n(C, E)),
						  (d = Math.abs(_) > 2e-4 ? _ * Dn : 0),
						  (f = z ? 1 / (z < 0 ? -z : z) : 0)),
					n.svg &&
						((k = e.getAttribute('transform')),
						(n.forceCSS = e.setAttribute('transform', '') || !Er(sr(e, Zn))),
						k && e.setAttribute('transform', k))),
				Math.abs(d) > 90 &&
					Math.abs(d) < 270 &&
					(B
						? ((a *= -1),
						  (d += l <= 0 ? 180 : -180),
						  (l += l <= 0 ? 180 : -180))
						: ((o *= -1), (d += d <= 0 ? 180 : -180))),
				(t = t || n.uncache),
				(n.x =
					r -
					((n.xPercent =
						r &&
						((!t && n.xPercent) ||
							(Math.round(e.offsetWidth / 2) === Math.round(-r) ? -50 : 0)))
						? (e.offsetWidth * n.xPercent) / 100
						: 0) +
					q),
				(n.y =
					i -
					((n.yPercent =
						i &&
						((!t && n.yPercent) ||
							(Math.round(e.offsetHeight / 2) === Math.round(-i) ? -50 : 0)))
						? (e.offsetHeight * n.yPercent) / 100
						: 0) +
					q),
				(n.z = s + q),
				(n.scaleX = pe(a)),
				(n.scaleY = pe(o)),
				(n.rotation = pe(l) + R),
				(n.rotationX = pe(c) + R),
				(n.rotationY = pe(u) + R),
				(n.skewX = d + R),
				(n.skewY = p + R),
				(n.transformPerspective = f + q),
				(n.zOrigin = parseFloat(N.split(' ')[2]) || 0) && (I[Jn] = Or(N)),
				(n.xOffset = n.yOffset = 0),
				(n.force3D = v.force3D),
				(n.renderTransform = n.svg ? qr : Pn ? Br : Dr),
				(n.uncache = 0),
				n
			)
		},
		Or = function (e) {
			return (e = e.split(' '))[0] + ' ' + e[1]
		},
		Lr = function (e, t, n) {
			var r = Ue(t)
			return pe(parseFloat(t) + parseFloat(vr(e, 'x', n + 'px', r))) + r
		},
		Dr = function (e, t) {
			;(t.z = '0px'),
				(t.rotationY = t.rotationX = '0deg'),
				(t.force3D = 0),
				Br(e, t)
		},
		zr = '0deg',
		$r = '0px',
		Ir = ') ',
		Br = function (e, t) {
			var n = t || this,
				r = n.xPercent,
				i = n.yPercent,
				s = n.x,
				a = n.y,
				o = n.z,
				l = n.rotation,
				c = n.rotationY,
				u = n.rotationX,
				d = n.skewX,
				p = n.skewY,
				f = n.scaleX,
				h = n.scaleY,
				m = n.transformPerspective,
				g = n.force3D,
				v = n.target,
				_ = n.zOrigin,
				y = '',
				b = ('auto' === g && e && 1 !== e) || !0 === g
			if (_ && (u !== zr || c !== zr)) {
				var w,
					x = parseFloat(c) * zn,
					T = Math.sin(x),
					S = Math.cos(x)
				;(x = parseFloat(u) * zn),
					(w = Math.cos(x)),
					(s = Lr(v, s, T * w * -_)),
					(a = Lr(v, a, -Math.sin(x) * -_)),
					(o = Lr(v, o, S * w * -_ + _))
			}
			m !== $r && (y += 'perspective(' + m + Ir),
				(r || i) && (y += 'translate(' + r + '%, ' + i + '%) '),
				(b || s !== $r || a !== $r || o !== $r) &&
					(y +=
						o !== $r || b
							? 'translate3d(' + s + ', ' + a + ', ' + o + ') '
							: 'translate(' + s + ', ' + a + Ir),
				l !== zr && (y += 'rotate(' + l + Ir),
				c !== zr && (y += 'rotateY(' + c + Ir),
				u !== zr && (y += 'rotateX(' + u + Ir),
				(d === zr && p === zr) || (y += 'skew(' + d + ', ' + p + Ir),
				(1 === f && 1 === h) || (y += 'scale(' + f + ', ' + h + Ir),
				(v.style[Zn] = y || 'translate(0, 0)')
		},
		qr = function (e, t) {
			var n,
				r,
				i,
				s,
				a,
				o = t || this,
				l = o.xPercent,
				c = o.yPercent,
				u = o.x,
				d = o.y,
				p = o.rotation,
				f = o.skewX,
				h = o.skewY,
				m = o.scaleX,
				g = o.scaleY,
				v = o.target,
				_ = o.xOrigin,
				y = o.yOrigin,
				b = o.xOffset,
				w = o.yOffset,
				x = o.forceCSS,
				T = parseFloat(u),
				S = parseFloat(d)
			;(p = parseFloat(p)),
				(f = parseFloat(f)),
				(h = parseFloat(h)) && ((f += h = parseFloat(h)), (p += h)),
				p || f
					? ((p *= zn),
					  (f *= zn),
					  (n = Math.cos(p) * m),
					  (r = Math.sin(p) * m),
					  (i = Math.sin(p - f) * -g),
					  (s = Math.cos(p - f) * g),
					  f &&
							((h *= zn),
							(a = Math.tan(f - h)),
							(i *= a = Math.sqrt(1 + a * a)),
							(s *= a),
							h &&
								((a = Math.tan(h)), (n *= a = Math.sqrt(1 + a * a)), (r *= a))),
					  (n = pe(n)),
					  (r = pe(r)),
					  (i = pe(i)),
					  (s = pe(s)))
					: ((n = m), (s = g), (r = i = 0)),
				((T && !~(u + '').indexOf('px')) || (S && !~(d + '').indexOf('px'))) &&
					((T = vr(v, 'x', u, 'px')), (S = vr(v, 'y', d, 'px'))),
				(_ || y || b || w) &&
					((T = pe(T + _ - (_ * n + y * i) + b)),
					(S = pe(S + y - (_ * r + y * s) + w))),
				(l || c) &&
					((a = v.getBBox()),
					(T = pe(T + (l / 100) * a.width)),
					(S = pe(S + (c / 100) * a.height))),
				(a =
					'matrix(' +
					n +
					',' +
					r +
					',' +
					i +
					',' +
					s +
					',' +
					T +
					',' +
					S +
					')'),
				v.setAttribute('transform', a),
				x && (v.style[Zn] = a)
		},
		Rr = function (e, t, n, r, i) {
			var s,
				a,
				o = 360,
				l = k(i),
				c = parseFloat(i) * (l && ~i.indexOf('rad') ? Dn : 1) - r,
				u = r + c + 'deg'
			return (
				l &&
					('short' === (s = i.split('_')[1]) &&
						(c %= o) !== c % 180 &&
						(c += c < 0 ? o : -360),
					'cw' === s && c < 0
						? (c = ((c + 36e9) % o) - ~~(c / o) * o)
						: 'ccw' === s && c > 0 && (c = ((c - 36e9) % o) - ~~(c / o) * o)),
				(e._pt = a = new un(e._pt, t, n, r, c, Nn)),
				(a.e = u),
				(a.u = 'deg'),
				e._props.push(n),
				a
			)
		},
		Fr = function (e, t) {
			for (var n in t) e[n] = t[n]
			return e
		},
		Nr = function (e, t, n) {
			var r,
				i,
				s,
				a,
				o,
				l,
				c,
				u = Fr({}, n._gsap),
				d = n.style
			for (i in (u.svg
				? ((s = n.getAttribute('transform')),
				  n.setAttribute('transform', ''),
				  (d[Zn] = t),
				  (r = Pr(n, 1)),
				  fr(n, Zn),
				  n.setAttribute('transform', s))
				: ((s = getComputedStyle(n)[Zn]),
				  (d[Zn] = t),
				  (r = Pr(n, 1)),
				  (d[Zn] = s)),
			Ln))
				(s = u[i]) !== (a = r[i]) &&
					'perspective,force3D,transformOrigin,svgOrigin'.indexOf(i) < 0 &&
					((o = Ue(s) !== (c = Ue(a)) ? vr(n, i, s, c) : parseFloat(s)),
					(l = parseFloat(a)),
					(e._pt = new un(e._pt, r, i, o, l - o, Fn)),
					(e._pt.u = c || 0),
					e._props.push(i))
			Fr(r, u)
		}
	de('padding,margin,Width,Radius', function (e, t) {
		var n = 'Top',
			r = 'Right',
			i = 'Bottom',
			s = 'Left',
			a = (t < 3 ? [n, r, i, s] : [n + s, n + r, i + r, i + s]).map(function (
				n
			) {
				return t < 2 ? e + n : 'border' + n + e
			})
		Tr[t > 1 ? 'border' + e : e] = function (e, t, n, r, i) {
			var s, o
			if (arguments.length < 4)
				return (
					(s = a.map(function (t) {
						return _r(e, t, n)
					})),
					5 === (o = s.join(' ')).split(s[0]).length ? s[0] : o
				)
			;(s = (r + '').split(' ')),
				(o = {}),
				a.forEach(function (e, t) {
					return (o[e] = s[t] = s[t] || s[((t - 1) / 2) | 0])
				}),
				e.init(t, o, i)
		}
	})
	var jr,
		Gr,
		Yr,
		Vr = {
			name: 'css',
			register: lr,
			targetTest: function (e) {
				return e.style && e.nodeType
			},
			init: function (e, t, n, r, i) {
				var s,
					a,
					o,
					l,
					c,
					u,
					d,
					p,
					f,
					h,
					m,
					g,
					_,
					y,
					b,
					w,
					x = this._props,
					T = e.style,
					S = n.vars.startAt
				for (d in (En || lr(),
				(this.styles = this.styles || rr(e)),
				(w = this.styles.props),
				(this.tween = n),
				t))
					if (
						'autoRound' !== d &&
						((a = t[d]), !re[d] || !Gt(d, t, n, r, e, i))
					)
						if (
							((c = typeof a),
							(u = Tr[d]),
							'function' === c && (c = typeof (a = a.call(n, r, e, i))),
							'string' === c && ~a.indexOf('random(') && (a = ot(a)),
							u)
						)
							u(this, e, d, a, n) && (b = 1)
						else if ('--' === d.substr(0, 2))
							(s = (getComputedStyle(e).getPropertyValue(d) + '').trim()),
								(a += ''),
								(bt.lastIndex = 0),
								bt.test(s) || ((p = Ue(s)), (f = Ue(a))),
								f ? p !== f && (s = vr(e, d, s, f) + f) : p && (a += p),
								this.add(T, 'setProperty', s, a, r, i, 0, 0, d),
								x.push(d),
								w.push(d, 0, T[d])
						else if ('undefined' !== c) {
							if (
								(S && d in S
									? ((s =
											'function' == typeof S[d] ? S[d].call(n, r, e, i) : S[d]),
									  k(s) && ~s.indexOf('random(') && (s = ot(s)),
									  Ue(s + '') || (s += v.units[d] || Ue(_r(e, d)) || ''),
									  '=' === (s + '').charAt(1) && (s = _r(e, d)))
									: (s = _r(e, d)),
								(l = parseFloat(s)),
								(h = 'string' === c && '=' === a.charAt(1) && a.substr(0, 2)) &&
									(a = a.substr(2)),
								(o = parseFloat(a)),
								d in Rn &&
									('autoAlpha' === d &&
										(1 === l &&
											'hidden' === _r(e, 'visibility') &&
											o &&
											(l = 0),
										w.push('visibility', 0, T.visibility),
										hr(
											this,
											T,
											'visibility',
											l ? 'inherit' : 'hidden',
											o ? 'inherit' : 'hidden',
											!o
										)),
									'scale' !== d &&
										'transform' !== d &&
										~(d = Rn[d]).indexOf(',') &&
										(d = d.split(',')[0])),
								(m = d in Ln))
							)
								if (
									(this.styles.save(d),
									g ||
										(((_ = e._gsap).renderTransform && !t.parseTransform) ||
											Pr(e, t.parseTransform),
										(y = !1 !== t.smoothOrigin && _.smooth),
										((g = this._pt =
											new un(
												this._pt,
												T,
												Zn,
												0,
												1,
												_.renderTransform,
												_,
												0,
												-1
											)).dep = 1)),
									'scale' === d)
								)
									(this._pt = new un(
										this._pt,
										_,
										'scaleY',
										_.scaleY,
										(h ? he(_.scaleY, h + o) : o) - _.scaleY || 0,
										Fn
									)),
										(this._pt.u = 0),
										x.push('scaleY', d),
										(d += 'X')
								else {
									if ('transformOrigin' === d) {
										w.push(Jn, 0, T[Jn]),
											(a = wr(a)),
											_.svg
												? Ar(e, a, 0, y, 0, this)
												: ((f = parseFloat(a.split(' ')[2]) || 0) !==
														_.zOrigin && hr(this, _, 'zOrigin', _.zOrigin, f),
												  hr(this, T, d, Or(s), Or(a)))
										continue
									}
									if ('svgOrigin' === d) {
										Ar(e, a, 1, y, 0, this)
										continue
									}
									if (d in Cr) {
										Rr(this, _, d, l, h ? he(l, h + a) : a)
										continue
									}
									if ('smoothOrigin' === d) {
										hr(this, _, 'smooth', _.smooth, a)
										continue
									}
									if ('force3D' === d) {
										_[d] = a
										continue
									}
									if ('transform' === d) {
										Nr(this, a, e)
										continue
									}
								}
							else d in T || (d = or(d) || d)
							if (
								m ||
								((o || 0 === o) && (l || 0 === l) && !qn.test(a) && d in T)
							)
								o || (o = 0),
									(p = (s + '').substr((l + '').length)) !==
										(f = Ue(a) || (d in v.units ? v.units[d] : p)) &&
										(l = vr(e, d, s, f)),
									(this._pt = new un(
										this._pt,
										m ? _ : T,
										d,
										l,
										(h ? he(l, h + o) : o) - l,
										m || ('px' !== f && 'zIndex' !== d) || !1 === t.autoRound
											? Fn
											: Gn
									)),
									(this._pt.u = f || 0),
									p !== f && '%' !== f && ((this._pt.b = s), (this._pt.r = jn))
							else if (d in T) yr.call(this, e, d, s, h ? h + a : a)
							else if (d in e) this.add(e, d, s || e[d], h ? h + a : a, r, i)
							else if ('parseTransform' !== d) {
								W(d, a)
								continue
							}
							m || (d in T ? w.push(d, 0, T[d]) : w.push(d, 1, s || e[d])),
								x.push(d)
						}
				b && cn(this)
			},
			render: function (e, t) {
				if (t.tween._time || !An())
					for (var n = t._pt; n; ) n.r(e, n.d), (n = n._next)
				else t.styles.revert()
			},
			get: _r,
			aliases: Rn,
			getSetter: function (e, t, n) {
				var r = Rn[t]
				return (
					r && r.indexOf(',') < 0 && (t = r),
					t in Ln && t !== Jn && (e._gsap.x || _r(e, 'x'))
						? n && Mn === n
							? 'scale' === t
								? Un
								: Xn
							: (Mn = n || {}) && ('scale' === t ? Kn : Qn)
						: e.style && !P(e.style[t])
						? Hn
						: ~t.indexOf('-')
						? Wn
						: en(e, t)
				)
			},
			core: { _removeProperty: fr, _getMatrix: Mr },
		}
	;(xn.utils.checkPrefix = or),
		(xn.core.getStyleSaver = rr),
		(Yr = de(
			(jr = 'x,y,z,scale,scaleX,scaleY,xPercent,yPercent') +
				',' +
				(Gr = 'rotation,rotationX,rotationY,skewX,skewY') +
				',transform,transformOrigin,svgOrigin,force3D,smoothOrigin,transformPerspective',
			function (e) {
				Ln[e] = 1
			}
		)),
		de(Gr, function (e) {
			;(v.units[e] = 'deg'), (Cr[e] = 1)
		}),
		(Rn[Yr[13]] = jr + ',' + Gr),
		de(
			'0:translateX,1:translateY,2:translateZ,8:rotate,8:rotationZ,8:rotateZ,9:rotateX,10:rotateY',
			function (e) {
				var t = e.split(':')
				Rn[t[1]] = Yr[t[0]]
			}
		),
		de(
			'x,y,z,top,right,bottom,left,width,height,fontSize,padding,margin,perspective',
			function (e) {
				v.units[e] = 'px'
			}
		),
		xn.registerPlugin(Vr)
	var Hr = xn.registerPlugin(Vr) || xn
	Hr.core.Tween
	function Wr(e, t) {
		for (var n = 0; n < t.length; n++) {
			var r = t[n]
			;(r.enumerable = r.enumerable || !1),
				(r.configurable = !0),
				'value' in r && (r.writable = !0),
				Object.defineProperty(e, r.key, r)
		}
	}
	/*!
	 * Observer 3.11.5
	 * https://greensock.com
	 *
	 * @license Copyright 2008-2023, GreenSock. All rights reserved.
	 * Subject to the terms at https://greensock.com/standard-license or for
	 * Club GreenSock members, the agreement issued with that membership.
	 * @author: Jack Doyle, jack@greensock.com
	 */
	var Xr,
		Ur,
		Kr,
		Qr,
		Zr,
		Jr,
		ei,
		ti,
		ni,
		ri,
		ii,
		si,
		ai,
		oi = function () {
			return (
				Xr ||
				('undefined' != typeof window &&
					(Xr = window.gsap) &&
					Xr.registerPlugin &&
					Xr)
			)
		},
		li = 1,
		ci = [],
		ui = [],
		di = [],
		pi = Date.now,
		fi = function (e, t) {
			return t
		},
		hi = function (e, t) {
			return ~di.indexOf(e) && di[di.indexOf(e) + 1][t]
		},
		mi = function (e) {
			return !!~ri.indexOf(e)
		},
		gi = function (e, t, n, r, i) {
			return e.addEventListener(t, n, { passive: !r, capture: !!i })
		},
		vi = function (e, t, n, r) {
			return e.removeEventListener(t, n, !!r)
		},
		_i = 'scrollLeft',
		yi = 'scrollTop',
		bi = function () {
			return (ii && ii.isPressed) || ui.cache++
		},
		wi = function (e, t) {
			var n = function n(r) {
				if (r || 0 === r) {
					li && (Kr.history.scrollRestoration = 'manual')
					var i = ii && ii.isPressed
					;(r = n.v = Math.round(r) || (ii && ii.iOS ? 1 : 0)),
						e(r),
						(n.cacheID = ui.cache),
						i && fi('ss', r)
				} else
					(t || ui.cache !== n.cacheID || fi('ref')) &&
						((n.cacheID = ui.cache), (n.v = e()))
				return n.v + n.offset
			}
			return (n.offset = 0), e && n
		},
		xi = {
			s: _i,
			p: 'left',
			p2: 'Left',
			os: 'right',
			os2: 'Right',
			d: 'width',
			d2: 'Width',
			a: 'x',
			sc: wi(function (e) {
				return arguments.length
					? Kr.scrollTo(e, Ti.sc())
					: Kr.pageXOffset || Qr[_i] || Zr[_i] || Jr[_i] || 0
			}),
		},
		Ti = {
			s: yi,
			p: 'top',
			p2: 'Top',
			os: 'bottom',
			os2: 'Bottom',
			d: 'height',
			d2: 'Height',
			a: 'y',
			op: xi,
			sc: wi(function (e) {
				return arguments.length
					? Kr.scrollTo(xi.sc(), e)
					: Kr.pageYOffset || Qr[yi] || Zr[yi] || Jr[yi] || 0
			}),
		},
		Si = function (e) {
			return (
				Xr.utils.toArray(e)[0] ||
				('string' == typeof e && !1 !== Xr.config().nullTargetWarn
					? console.warn('Element not found:', e)
					: null)
			)
		},
		Ci = function (e, t) {
			var n = t.s,
				r = t.sc
			mi(e) && (e = Qr.scrollingElement || Zr)
			var i = ui.indexOf(e),
				s = r === Ti.sc ? 1 : 2
			!~i && (i = ui.push(e) - 1), ui[i + s] || e.addEventListener('scroll', bi)
			var a = ui[i + s],
				o =
					a ||
					(ui[i + s] =
						wi(hi(e, n), !0) ||
						(mi(e)
							? r
							: wi(function (t) {
									return arguments.length ? (e[n] = t) : e[n]
							  })))
			return (
				(o.target = e),
				a || (o.smooth = 'smooth' === Xr.getProperty(e, 'scrollBehavior')),
				o
			)
		},
		Ei = function (e, t, n) {
			var r = e,
				i = e,
				s = pi(),
				a = s,
				o = t || 50,
				l = Math.max(500, 3 * o),
				c = function (e, t) {
					var l = pi()
					t || l - s > o
						? ((i = r), (r = e), (a = s), (s = l))
						: n
						? (r += e)
						: (r = i + ((e - i) / (l - a)) * (s - a))
				}
			return {
				update: c,
				reset: function () {
					;(i = r = n ? 0 : r), (a = s = 0)
				},
				getVelocity: function (e) {
					var t = a,
						o = i,
						u = pi()
					return (
						(e || 0 === e) && e !== r && c(e),
						s === a || u - a > l
							? 0
							: ((r + (n ? o : -o)) / ((n ? u : s) - t)) * 1e3
					)
				},
			}
		},
		ki = function (e, t) {
			return (
				t && !e._gsapAllow && e.preventDefault(),
				e.changedTouches ? e.changedTouches[0] : e
			)
		},
		Mi = function (e) {
			var t = Math.max.apply(Math, e),
				n = Math.min.apply(Math, e)
			return Math.abs(t) >= Math.abs(n) ? t : n
		},
		Ai = function () {
			;(ni = Xr.core.globals().ScrollTrigger) &&
				ni.core &&
				(function () {
					var e = ni.core,
						t = e.bridge || {},
						n = e._scrollers,
						r = e._proxies
					n.push.apply(n, ui),
						r.push.apply(r, di),
						(ui = n),
						(di = r),
						(fi = function (e, n) {
							return t[e](n)
						})
				})()
		},
		Pi = function (e) {
			return (
				(Xr = e || oi()) &&
					'undefined' != typeof document &&
					document.body &&
					((Kr = window),
					(Qr = document),
					(Zr = Qr.documentElement),
					(Jr = Qr.body),
					(ri = [Kr, Qr, Zr, Jr]),
					Xr.utils.clamp,
					(ai = Xr.core.context || function () {}),
					(ti = 'onpointerenter' in Jr ? 'pointer' : 'mouse'),
					(ei = Oi.isTouch =
						Kr.matchMedia &&
						Kr.matchMedia('(hover: none), (pointer: coarse)').matches
							? 1
							: 'ontouchstart' in Kr ||
							  navigator.maxTouchPoints > 0 ||
							  navigator.msMaxTouchPoints > 0
							? 2
							: 0),
					(si = Oi.eventTypes =
						(
							'ontouchstart' in Zr
								? 'touchstart,touchmove,touchcancel,touchend'
								: 'onpointerdown' in Zr
								? 'pointerdown,pointermove,pointercancel,pointerup'
								: 'mousedown,mousemove,mouseup,mouseup'
						).split(',')),
					setTimeout(function () {
						return (li = 0)
					}, 500),
					Ai(),
					(Ur = 1)),
				Ur
			)
		}
	;(xi.op = Ti), (ui.cache = 0)
	var Oi = (function () {
		function e(e) {
			this.init(e)
		}
		var t, n, r
		return (
			(e.prototype.init = function (e) {
				Ur || Pi(Xr) || console.warn('Please gsap.registerPlugin(Observer)'),
					ni || Ai()
				var t = e.tolerance,
					n = e.dragMinimum,
					r = e.type,
					i = e.target,
					s = e.lineHeight,
					a = e.debounce,
					o = e.preventDefault,
					l = e.onStop,
					c = e.onStopDelay,
					u = e.ignore,
					d = e.wheelSpeed,
					p = e.event,
					f = e.onDragStart,
					h = e.onDragEnd,
					m = e.onDrag,
					g = e.onPress,
					v = e.onRelease,
					_ = e.onRight,
					y = e.onLeft,
					b = e.onUp,
					w = e.onDown,
					x = e.onChangeX,
					T = e.onChangeY,
					S = e.onChange,
					C = e.onToggleX,
					E = e.onToggleY,
					k = e.onHover,
					M = e.onHoverEnd,
					A = e.onMove,
					P = e.ignoreCheck,
					O = e.isNormalizer,
					L = e.onGestureStart,
					D = e.onGestureEnd,
					z = e.onWheel,
					$ = e.onEnable,
					I = e.onDisable,
					B = e.onClick,
					q = e.scrollSpeed,
					R = e.capture,
					F = e.allowClicks,
					N = e.lockAxis,
					j = e.onLockAxis
				;(this.target = i = Si(i) || Zr),
					(this.vars = e),
					u && (u = Xr.utils.toArray(u)),
					(t = t || 1e-9),
					(n = n || 0),
					(d = d || 1),
					(q = q || 1),
					(r = r || 'wheel,touch,pointer'),
					(a = !1 !== a),
					s || (s = parseFloat(Kr.getComputedStyle(Jr).lineHeight) || 22)
				var G,
					Y,
					V,
					H,
					W,
					X,
					U,
					K = this,
					Q = 0,
					Z = 0,
					J = Ci(i, xi),
					ee = Ci(i, Ti),
					te = J(),
					ne = ee(),
					re =
						~r.indexOf('touch') &&
						!~r.indexOf('pointer') &&
						'pointerdown' === si[0],
					ie = mi(i),
					se = i.ownerDocument || Qr,
					ae = [0, 0, 0],
					oe = [0, 0, 0],
					le = 0,
					ce = function () {
						return (le = pi())
					},
					ue = function (e, t) {
						return (
							((K.event = e) && u && ~u.indexOf(e.target)) ||
							(t && re && 'touch' !== e.pointerType) ||
							(P && P(e, t))
						)
					},
					de = function () {
						var e = (K.deltaX = Mi(ae)),
							n = (K.deltaY = Mi(oe)),
							r = Math.abs(e) >= t,
							i = Math.abs(n) >= t
						S && (r || i) && S(K, e, n, ae, oe),
							r &&
								(_ && K.deltaX > 0 && _(K),
								y && K.deltaX < 0 && y(K),
								x && x(K),
								C && K.deltaX < 0 != Q < 0 && C(K),
								(Q = K.deltaX),
								(ae[0] = ae[1] = ae[2] = 0)),
							i &&
								(w && K.deltaY > 0 && w(K),
								b && K.deltaY < 0 && b(K),
								T && T(K),
								E && K.deltaY < 0 != Z < 0 && E(K),
								(Z = K.deltaY),
								(oe[0] = oe[1] = oe[2] = 0)),
							(H || V) && (A && A(K), V && (m(K), (V = !1)), (H = !1)),
							X && !(X = !1) && j && j(K),
							W && (z(K), (W = !1)),
							(G = 0)
					},
					pe = function (e, t, n) {
						;(ae[n] += e),
							(oe[n] += t),
							K._vx.update(e),
							K._vy.update(t),
							a ? G || (G = requestAnimationFrame(de)) : de()
					},
					fe = function (e, t) {
						N &&
							!U &&
							((K.axis = U = Math.abs(e) > Math.abs(t) ? 'x' : 'y'), (X = !0)),
							'y' !== U && ((ae[2] += e), K._vx.update(e, !0)),
							'x' !== U && ((oe[2] += t), K._vy.update(t, !0)),
							a ? G || (G = requestAnimationFrame(de)) : de()
					},
					he = function (e) {
						if (!ue(e, 1)) {
							var t = (e = ki(e, o)).clientX,
								r = e.clientY,
								i = t - K.x,
								s = r - K.y,
								a = K.isDragging
							;(K.x = t),
								(K.y = r),
								(a ||
									Math.abs(K.startX - t) >= n ||
									Math.abs(K.startY - r) >= n) &&
									(m && (V = !0),
									a || (K.isDragging = !0),
									fe(i, s),
									a || (f && f(K)))
						}
					},
					me = (K.onPress = function (e) {
						ue(e, 1) ||
							(e && e.button) ||
							((K.axis = U = null),
							Y.pause(),
							(K.isPressed = !0),
							(e = ki(e)),
							(Q = Z = 0),
							(K.startX = K.x = e.clientX),
							(K.startY = K.y = e.clientY),
							K._vx.reset(),
							K._vy.reset(),
							gi(O ? i : se, si[1], he, o, !0),
							(K.deltaX = K.deltaY = 0),
							g && g(K))
					}),
					ge = (K.onRelease = function (e) {
						if (!ue(e, 1)) {
							vi(O ? i : se, si[1], he, !0)
							var t = !isNaN(K.y - K.startY),
								n =
									K.isDragging &&
									(Math.abs(K.x - K.startX) > 3 ||
										Math.abs(K.y - K.startY) > 3),
								r = ki(e)
							!n &&
								t &&
								(K._vx.reset(),
								K._vy.reset(),
								o &&
									F &&
									Xr.delayedCall(0.08, function () {
										if (pi() - le > 300 && !e.defaultPrevented)
											if (e.target.click) e.target.click()
											else if (se.createEvent) {
												var t = se.createEvent('MouseEvents')
												t.initMouseEvent(
													'click',
													!0,
													!0,
													Kr,
													1,
													r.screenX,
													r.screenY,
													r.clientX,
													r.clientY,
													!1,
													!1,
													!1,
													!1,
													0,
													null
												),
													e.target.dispatchEvent(t)
											}
									})),
								(K.isDragging = K.isGesturing = K.isPressed = !1),
								l && !O && Y.restart(!0),
								h && n && h(K),
								v && v(K, n)
						}
					}),
					ve = function (e) {
						return (
							e.touches &&
							e.touches.length > 1 &&
							(K.isGesturing = !0) &&
							L(e, K.isDragging)
						)
					},
					_e = function () {
						return (K.isGesturing = !1) || D(K)
					},
					ye = function (e) {
						if (!ue(e)) {
							var t = J(),
								n = ee()
							pe((t - te) * q, (n - ne) * q, 1),
								(te = t),
								(ne = n),
								l && Y.restart(!0)
						}
					},
					be = function (e) {
						if (!ue(e)) {
							;(e = ki(e, o)), z && (W = !0)
							var t =
								(1 === e.deltaMode
									? s
									: 2 === e.deltaMode
									? Kr.innerHeight
									: 1) * d
							pe(e.deltaX * t, e.deltaY * t, 0), l && !O && Y.restart(!0)
						}
					},
					we = function (e) {
						if (!ue(e)) {
							var t = e.clientX,
								n = e.clientY,
								r = t - K.x,
								i = n - K.y
							;(K.x = t), (K.y = n), (H = !0), (r || i) && fe(r, i)
						}
					},
					xe = function (e) {
						;(K.event = e), k(K)
					},
					Te = function (e) {
						;(K.event = e), M(K)
					},
					Se = function (e) {
						return ue(e) || (ki(e, o) && B(K))
					}
				;(Y = K._dc =
					Xr.delayedCall(c || 0.25, function () {
						K._vx.reset(), K._vy.reset(), Y.pause(), l && l(K)
					}).pause()),
					(K.deltaX = K.deltaY = 0),
					(K._vx = Ei(0, 50, !0)),
					(K._vy = Ei(0, 50, !0)),
					(K.scrollX = J),
					(K.scrollY = ee),
					(K.isDragging = K.isGesturing = K.isPressed = !1),
					ai(this),
					(K.enable = function (e) {
						return (
							K.isEnabled ||
								(gi(ie ? se : i, 'scroll', bi),
								r.indexOf('scroll') >= 0 && gi(ie ? se : i, 'scroll', ye, o, R),
								r.indexOf('wheel') >= 0 && gi(i, 'wheel', be, o, R),
								((r.indexOf('touch') >= 0 && ei) ||
									r.indexOf('pointer') >= 0) &&
									(gi(i, si[0], me, o, R),
									gi(se, si[2], ge),
									gi(se, si[3], ge),
									F && gi(i, 'click', ce, !1, !0),
									B && gi(i, 'click', Se),
									L && gi(se, 'gesturestart', ve),
									D && gi(se, 'gestureend', _e),
									k && gi(i, ti + 'enter', xe),
									M && gi(i, ti + 'leave', Te),
									A && gi(i, ti + 'move', we)),
								(K.isEnabled = !0),
								e && e.type && me(e),
								$ && $(K)),
							K
						)
					}),
					(K.disable = function () {
						K.isEnabled &&
							(ci.filter(function (e) {
								return e !== K && mi(e.target)
							}).length || vi(ie ? se : i, 'scroll', bi),
							K.isPressed &&
								(K._vx.reset(), K._vy.reset(), vi(O ? i : se, si[1], he, !0)),
							vi(ie ? se : i, 'scroll', ye, R),
							vi(i, 'wheel', be, R),
							vi(i, si[0], me, R),
							vi(se, si[2], ge),
							vi(se, si[3], ge),
							vi(i, 'click', ce, !0),
							vi(i, 'click', Se),
							vi(se, 'gesturestart', ve),
							vi(se, 'gestureend', _e),
							vi(i, ti + 'enter', xe),
							vi(i, ti + 'leave', Te),
							vi(i, ti + 'move', we),
							(K.isEnabled = K.isPressed = K.isDragging = !1),
							I && I(K))
					}),
					(K.kill = K.revert =
						function () {
							K.disable()
							var e = ci.indexOf(K)
							e >= 0 && ci.splice(e, 1), ii === K && (ii = 0)
						}),
					ci.push(K),
					O && mi(i) && (ii = K),
					K.enable(p)
			}),
			(t = e),
			(n = [
				{
					key: 'velocityX',
					get: function () {
						return this._vx.getVelocity()
					},
				},
				{
					key: 'velocityY',
					get: function () {
						return this._vy.getVelocity()
					},
				},
			]) && Wr(t.prototype, n),
			r && Wr(t, r),
			e
		)
	})()
	;(Oi.version = '3.11.5'),
		(Oi.create = function (e) {
			return new Oi(e)
		}),
		(Oi.register = Pi),
		(Oi.getAll = function () {
			return ci.slice()
		}),
		(Oi.getById = function (e) {
			return ci.filter(function (t) {
				return t.vars.id === e
			})[0]
		}),
		oi() && Xr.registerPlugin(Oi)
	/*!
	 * ScrollTrigger 3.11.5
	 * https://greensock.com
	 *
	 * @license Copyright 2008-2023, GreenSock. All rights reserved.
	 * Subject to the terms at https://greensock.com/standard-license or for
	 * Club GreenSock members, the agreement issued with that membership.
	 * @author: Jack Doyle, jack@greensock.com
	 */
	var Li,
		Di,
		zi,
		$i,
		Ii,
		Bi,
		qi,
		Ri,
		Fi,
		Ni,
		ji,
		Gi,
		Yi,
		Vi,
		Hi,
		Wi,
		Xi,
		Ui,
		Ki,
		Qi,
		Zi,
		Ji,
		es,
		ts,
		ns,
		rs,
		is,
		ss,
		as,
		os,
		ls,
		cs,
		us,
		ds,
		ps = 1,
		fs = Date.now,
		hs = fs(),
		ms = 0,
		gs = 0,
		vs = function e() {
			return gs && requestAnimationFrame(e)
		},
		_s = function () {
			return (Vi = 1)
		},
		ys = function () {
			return (Vi = 0)
		},
		bs = function (e) {
			return e
		},
		ws = function (e) {
			return Math.round(1e5 * e) / 1e5 || 0
		},
		xs = function () {
			return 'undefined' != typeof window
		},
		Ts = function () {
			return Li || (xs() && (Li = window.gsap) && Li.registerPlugin && Li)
		},
		Ss = function (e) {
			return !!~qi.indexOf(e)
		},
		Cs = function (e) {
			return (
				hi(e, 'getBoundingClientRect') ||
				(Ss(e)
					? function () {
							return (
								(Ia.width = zi.innerWidth), (Ia.height = zi.innerHeight), Ia
							)
					  }
					: function () {
							return Qs(e)
					  })
			)
		},
		Es = function (e, t) {
			var n = t.s,
				r = t.d2,
				i = t.d,
				s = t.a
			return Math.max(
				0,
				(n = 'scroll' + r) && (s = hi(e, n))
					? s() - Cs(e)()[i]
					: Ss(e)
					? (Ii[n] || Bi[n]) -
					  (zi['inner' + r] || Ii['client' + r] || Bi['client' + r])
					: e[n] - e['offset' + r]
			)
		},
		ks = function (e, t) {
			for (var n = 0; n < Ki.length; n += 3)
				(!t || ~t.indexOf(Ki[n + 1])) && e(Ki[n], Ki[n + 1], Ki[n + 2])
		},
		Ms = function (e) {
			return 'string' == typeof e
		},
		As = function (e) {
			return 'function' == typeof e
		},
		Ps = function (e) {
			return 'number' == typeof e
		},
		Os = function (e) {
			return 'object' == typeof e
		},
		Ls = function (e, t, n) {
			return e && e.progress(t ? 0 : 1) && n && e.pause()
		},
		Ds = function (e, t) {
			if (e.enabled) {
				var n = t(e)
				n && n.totalTime && (e.callbackAnimation = n)
			}
		},
		zs = Math.abs,
		$s = 'left',
		Is = 'right',
		Bs = 'bottom',
		qs = 'width',
		Rs = 'height',
		Fs = 'Right',
		Ns = 'Left',
		js = 'Top',
		Gs = 'Bottom',
		Ys = 'padding',
		Vs = 'margin',
		Hs = 'Width',
		Ws = 'Height',
		Xs = 'px',
		Us = function (e) {
			return zi.getComputedStyle(e)
		},
		Ks = function (e, t) {
			for (var n in t) n in e || (e[n] = t[n])
			return e
		},
		Qs = function (e, t) {
			var n =
					t &&
					'matrix(1, 0, 0, 1, 0, 0)' !== Us(e)[Hi] &&
					Li.to(e, {
						x: 0,
						y: 0,
						xPercent: 0,
						yPercent: 0,
						rotation: 0,
						rotationX: 0,
						rotationY: 0,
						scale: 1,
						skewX: 0,
						skewY: 0,
					}).progress(1),
				r = e.getBoundingClientRect()
			return n && n.progress(0).kill(), r
		},
		Zs = function (e, t) {
			var n = t.d2
			return e['offset' + n] || e['client' + n] || 0
		},
		Js = function (e) {
			var t,
				n = [],
				r = e.labels,
				i = e.duration()
			for (t in r) n.push(r[t] / i)
			return n
		},
		ea = function (e) {
			var t = Li.utils.snap(e),
				n =
					Array.isArray(e) &&
					e.slice(0).sort(function (e, t) {
						return e - t
					})
			return n
				? function (e, r, i) {
						var s
						if ((void 0 === i && (i = 0.001), !r)) return t(e)
						if (r > 0) {
							for (e -= i, s = 0; s < n.length; s++) if (n[s] >= e) return n[s]
							return n[s - 1]
						}
						for (s = n.length, e += i; s--; ) if (n[s] <= e) return n[s]
						return n[0]
				  }
				: function (n, r, i) {
						void 0 === i && (i = 0.001)
						var s = t(n)
						return !r || Math.abs(s - n) < i || s - n < 0 == r < 0
							? s
							: t(r < 0 ? n - e : n + e)
				  }
		},
		ta = function (e, t, n, r) {
			return n.split(',').forEach(function (n) {
				return e(t, n, r)
			})
		},
		na = function (e, t, n, r, i) {
			return e.addEventListener(t, n, { passive: !r, capture: !!i })
		},
		ra = function (e, t, n, r) {
			return e.removeEventListener(t, n, !!r)
		},
		ia = function (e, t, n) {
			;(n = n && n.wheelHandler) && (e(t, 'wheel', n), e(t, 'touchmove', n))
		},
		sa = {
			startColor: 'green',
			endColor: 'red',
			indent: 0,
			fontSize: '16px',
			fontWeight: 'normal',
		},
		aa = { toggleActions: 'play', anticipatePin: 0 },
		oa = { top: 0, left: 0, center: 0.5, bottom: 1, right: 1 },
		la = function (e, t) {
			if (Ms(e)) {
				var n = e.indexOf('='),
					r = ~n ? +(e.charAt(n - 1) + 1) * parseFloat(e.substr(n + 1)) : 0
				~n && (e.indexOf('%') > n && (r *= t / 100), (e = e.substr(0, n - 1))),
					(e =
						r +
						(e in oa
							? oa[e] * t
							: ~e.indexOf('%')
							? (parseFloat(e) * t) / 100
							: parseFloat(e) || 0))
			}
			return e
		},
		ca = function (e, t, n, r, i, s, a, o) {
			var l = i.startColor,
				c = i.endColor,
				u = i.fontSize,
				d = i.indent,
				p = i.fontWeight,
				f = $i.createElement('div'),
				h = Ss(n) || 'fixed' === hi(n, 'pinType'),
				m = -1 !== e.indexOf('scroller'),
				g = h ? Bi : n,
				v = -1 !== e.indexOf('start'),
				_ = v ? l : c,
				y =
					'border-color:' +
					_ +
					';font-size:' +
					u +
					';color:' +
					_ +
					';font-weight:' +
					p +
					';pointer-events:none;white-space:nowrap;font-family:sans-serif,Arial;z-index:1000;padding:4px 8px;border-width:0;border-style:solid;'
			return (
				(y += 'position:' + ((m || o) && h ? 'fixed;' : 'absolute;')),
				(m || o || !h) &&
					(y += (r === Ti ? Is : Bs) + ':' + (s + parseFloat(d)) + 'px;'),
				a &&
					(y +=
						'box-sizing:border-box;text-align:left;width:' +
						a.offsetWidth +
						'px;'),
				(f._isStart = v),
				f.setAttribute('class', 'gsap-marker-' + e + (t ? ' marker-' + t : '')),
				(f.style.cssText = y),
				(f.innerText = t || 0 === t ? e + '-' + t : e),
				g.children[0] ? g.insertBefore(f, g.children[0]) : g.appendChild(f),
				(f._offset = f['offset' + r.op.d2]),
				ua(f, 0, r, v),
				f
			)
		},
		ua = function (e, t, n, r) {
			var i = { display: 'block' },
				s = n[r ? 'os2' : 'p2'],
				a = n[r ? 'p2' : 'os2']
			;(e._isFlipped = r),
				(i[n.a + 'Percent'] = r ? -100 : 0),
				(i[n.a] = r ? '1px' : 0),
				(i['border' + s + Hs] = 1),
				(i['border' + a + Hs] = 0),
				(i[n.p] = t + 'px'),
				Li.set(e, i)
		},
		da = [],
		pa = {},
		fa = function () {
			return fs() - ms > 34 && (ls || (ls = requestAnimationFrame(Aa)))
		},
		ha = function () {
			;(!es || !es.isPressed || es.startX > Bi.clientWidth) &&
				(ui.cache++,
				es ? ls || (ls = requestAnimationFrame(Aa)) : Aa(),
				ms || ba('scrollStart'),
				(ms = fs()))
		},
		ma = function () {
			;(rs = zi.innerWidth), (ns = zi.innerHeight)
		},
		ga = function () {
			ui.cache++,
				!Yi &&
					!Ji &&
					!$i.fullscreenElement &&
					!$i.webkitFullscreenElement &&
					(!ts ||
						rs !== zi.innerWidth ||
						Math.abs(zi.innerHeight - ns) > 0.25 * zi.innerHeight) &&
					Ri.restart(!0)
		},
		va = {},
		_a = [],
		ya = function e() {
			return ra(ja, 'scrollEnd', e) || Ea(!0)
		},
		ba = function (e) {
			return (
				(va[e] &&
					va[e].map(function (e) {
						return e()
					})) ||
				_a
			)
		},
		wa = [],
		xa = function (e) {
			for (var t = 0; t < wa.length; t += 5)
				(!e || (wa[t + 4] && wa[t + 4].query === e)) &&
					((wa[t].style.cssText = wa[t + 1]),
					wa[t].getBBox && wa[t].setAttribute('transform', wa[t + 2] || ''),
					(wa[t + 3].uncache = 1))
		},
		Ta = function (e, t) {
			var n
			for (Wi = 0; Wi < da.length; Wi++)
				!(n = da[Wi]) ||
					(t && n._ctx !== t) ||
					(e ? n.kill(1) : n.revert(!0, !0))
			t && xa(t), t || ba('revert')
		},
		Sa = function (e, t) {
			ui.cache++,
				(t || !cs) &&
					ui.forEach(function (e) {
						return As(e) && e.cacheID++ && (e.rec = 0)
					}),
				Ms(e) && (zi.history.scrollRestoration = as = e)
		},
		Ca = 0,
		Ea = function (e, t) {
			if (!ms || e) {
				;(cs = ja.isRefreshing = !0),
					ui.forEach(function (e) {
						return As(e) && e.cacheID++ && (e.rec = e())
					})
				var n = ba('refreshInit')
				Qi && ja.sort(),
					t || Ta(),
					ui.forEach(function (e) {
						As(e) &&
							(e.smooth && (e.target.style.scrollBehavior = 'auto'), e(0))
					}),
					da.slice(0).forEach(function (e) {
						return e.refresh()
					}),
					da.forEach(function (e, t) {
						if (e._subPinOffset && e.pin) {
							var n = e.vars.horizontal ? 'offsetWidth' : 'offsetHeight',
								r = e.pin[n]
							e.revert(!0, 1), e.adjustPinSpacing(e.pin[n] - r), e.refresh()
						}
					}),
					da.forEach(function (e) {
						return (
							'max' === e.vars.end &&
							e.setPositions(
								e.start,
								Math.max(e.start + 1, Es(e.scroller, e._dir))
							)
						)
					}),
					n.forEach(function (e) {
						return e && e.render && e.render(-1)
					}),
					ui.forEach(function (e) {
						As(e) &&
							(e.smooth &&
								requestAnimationFrame(function () {
									return (e.target.style.scrollBehavior = 'smooth')
								}),
							e.rec && e(e.rec))
					}),
					Sa(as, 1),
					Ri.pause(),
					Ca++,
					(cs = 2),
					Aa(2),
					da.forEach(function (e) {
						return As(e.vars.onRefresh) && e.vars.onRefresh(e)
					}),
					(cs = ja.isRefreshing = !1),
					ba('refresh')
			} else na(ja, 'scrollEnd', ya)
		},
		ka = 0,
		Ma = 1,
		Aa = function (e) {
			if (!cs || 2 === e) {
				;(ja.isUpdating = !0), ds && ds.update(0)
				var t = da.length,
					n = fs(),
					r = n - hs >= 50,
					i = t && da[0].scroll()
				if (
					((Ma = ka > i ? -1 : 1),
					cs || (ka = i),
					r &&
						(ms && !Vi && n - ms > 200 && ((ms = 0), ba('scrollEnd')),
						(ji = hs),
						(hs = n)),
					Ma < 0)
				) {
					for (Wi = t; Wi-- > 0; ) da[Wi] && da[Wi].update(0, r)
					Ma = 1
				} else for (Wi = 0; Wi < t; Wi++) da[Wi] && da[Wi].update(0, r)
				ja.isUpdating = !1
			}
			ls = 0
		},
		Pa = [
			$s,
			'top',
			Bs,
			Is,
			Vs + Gs,
			Vs + Fs,
			Vs + js,
			Vs + Ns,
			'display',
			'flexShrink',
			'float',
			'zIndex',
			'gridColumnStart',
			'gridColumnEnd',
			'gridRowStart',
			'gridRowEnd',
			'gridArea',
			'justifySelf',
			'alignSelf',
			'placeSelf',
			'order',
		],
		Oa = Pa.concat([
			qs,
			Rs,
			'boxSizing',
			'max' + Hs,
			'max' + Ws,
			'position',
			Vs,
			Ys,
			Ys + js,
			Ys + Fs,
			Ys + Gs,
			Ys + Ns,
		]),
		La = function (e, t, n, r) {
			if (!e._gsap.swappedIn) {
				for (var i, s = Pa.length, a = t.style, o = e.style; s--; )
					a[(i = Pa[s])] = n[i]
				;(a.position = 'absolute' === n.position ? 'absolute' : 'relative'),
					'inline' === n.display && (a.display = 'inline-block'),
					(o[Bs] = o[Is] = 'auto'),
					(a.flexBasis = n.flexBasis || 'auto'),
					(a.overflow = 'visible'),
					(a.boxSizing = 'border-box'),
					(a[qs] = Zs(e, xi) + Xs),
					(a[Rs] = Zs(e, Ti) + Xs),
					(a[Ys] = o[Vs] = o.top = o[$s] = '0'),
					za(r),
					(o[qs] = o['max' + Hs] = n[qs]),
					(o[Rs] = o['max' + Ws] = n[Rs]),
					(o[Ys] = n[Ys]),
					e.parentNode !== t &&
						(e.parentNode.insertBefore(t, e), t.appendChild(e)),
					(e._gsap.swappedIn = !0)
			}
		},
		Da = /([A-Z])/g,
		za = function (e) {
			if (e) {
				var t,
					n,
					r = e.t.style,
					i = e.length,
					s = 0
				for ((e.t._gsap || Li.core.getCache(e.t)).uncache = 1; s < i; s += 2)
					(n = e[s + 1]),
						(t = e[s]),
						n
							? (r[t] = n)
							: r[t] && r.removeProperty(t.replace(Da, '-$1').toLowerCase())
			}
		},
		$a = function (e) {
			for (var t = Oa.length, n = e.style, r = [], i = 0; i < t; i++)
				r.push(Oa[i], n[Oa[i]])
			return (r.t = e), r
		},
		Ia = { left: 0, top: 0 },
		Ba = function (e, t, n, r, i, s, a, o, l, c, u, d, p) {
			As(e) && (e = e(o)),
				Ms(e) &&
					'max' === e.substr(0, 3) &&
					(e = d + ('=' === e.charAt(4) ? la('0' + e.substr(3), n) : 0))
			var f,
				h,
				m,
				g = p ? p.time() : 0
			if ((p && p.seek(0), Ps(e)))
				p &&
					(e = Li.utils.mapRange(
						p.scrollTrigger.start,
						p.scrollTrigger.end,
						0,
						d,
						e
					)),
					a && ua(a, n, r, !0)
			else {
				As(t) && (t = t(o))
				var v,
					_,
					y,
					b,
					w = (e || '0').split(' ')
				;(m = Si(t) || Bi),
					((v = Qs(m) || {}) && (v.left || v.top)) ||
						'none' !== Us(m).display ||
						((b = m.style.display),
						(m.style.display = 'block'),
						(v = Qs(m)),
						b ? (m.style.display = b) : m.style.removeProperty('display')),
					(_ = la(w[0], v[r.d])),
					(y = la(w[1] || '0', n)),
					(e = v[r.p] - l[r.p] - c + _ + i - y),
					a && ua(a, y, r, n - y < 20 || (a._isStart && y > 20)),
					(n -= n - y)
			}
			if (s) {
				var x = e + n,
					T = s._isStart
				;(f = 'scroll' + r.d2),
					ua(
						s,
						x,
						r,
						(T && x > 20) ||
							(!T && (u ? Math.max(Bi[f], Ii[f]) : s.parentNode[f]) <= x + 1)
					),
					u &&
						((l = Qs(a)),
						u && (s.style[r.op.p] = l[r.op.p] - r.op.m - s._offset + Xs))
			}
			return (
				p &&
					m &&
					((f = Qs(m)),
					p.seek(d),
					(h = Qs(m)),
					(p._caScrollDist = f[r.p] - h[r.p]),
					(e = (e / p._caScrollDist) * d)),
				p && p.seek(g),
				p ? e : Math.round(e)
			)
		},
		qa = /(webkit|moz|length|cssText|inset)/i,
		Ra = function (e, t, n, r) {
			if (e.parentNode !== t) {
				var i,
					s,
					a = e.style
				if (t === Bi) {
					for (i in ((e._stOrig = a.cssText), (s = Us(e))))
						+i ||
							qa.test(i) ||
							!s[i] ||
							'string' != typeof a[i] ||
							'0' === i ||
							(a[i] = s[i])
					;(a.top = n), (a.left = r)
				} else a.cssText = e._stOrig
				;(Li.core.getCache(e).uncache = 1), t.appendChild(e)
			}
		},
		Fa = function (e, t, n) {
			var r = t,
				i = r
			return function (t) {
				var s = Math.round(e())
				return (
					s !== r &&
						s !== i &&
						Math.abs(s - r) > 3 &&
						Math.abs(s - i) > 3 &&
						((t = s), n && n()),
					(i = r),
					(r = t),
					t
				)
			}
		},
		Na = function (e, t) {
			var n = Ci(e, t),
				r = '_scroll' + t.p2,
				i = function t(i, s, a, o, l) {
					var c = t.tween,
						u = s.onComplete,
						d = {}
					a = a || n()
					var p = Fa(n, a, function () {
						c.kill(), (t.tween = 0)
					})
					return (
						(l = (o && l) || 0),
						(o = o || i - a),
						c && c.kill(),
						Math.round(a),
						(s[r] = i),
						(s.modifiers = d),
						(d[r] = function () {
							return p(a + o * c.ratio + l * c.ratio * c.ratio)
						}),
						(s.onUpdate = function () {
							ui.cache++, Aa()
						}),
						(s.onComplete = function () {
							;(t.tween = 0), u && u.call(c)
						}),
						(c = t.tween = Li.to(e, s))
					)
				}
			return (
				(e[r] = n),
				(n.wheelHandler = function () {
					return i.tween && i.tween.kill() && (i.tween = 0)
				}),
				na(e, 'wheel', n.wheelHandler),
				ja.isTouch && na(e, 'touchmove', n.wheelHandler),
				i
			)
		},
		ja = (function () {
			function e(t, n) {
				Di ||
					e.register(Li) ||
					console.warn('Please gsap.registerPlugin(ScrollTrigger)'),
					this.init(t, n)
			}
			return (
				(e.prototype.init = function (t, n) {
					if (
						((this.progress = this.start = 0),
						this.vars && this.kill(!0, !0),
						gs)
					) {
						var r,
							i,
							s,
							a,
							o,
							l,
							c,
							u,
							d,
							p,
							f,
							h,
							m,
							g,
							v,
							_,
							y,
							b,
							w,
							x,
							T,
							S,
							C,
							E,
							k,
							M,
							A,
							P,
							O,
							L,
							D,
							z,
							$,
							I,
							B,
							q,
							R,
							F,
							N,
							j,
							G,
							Y,
							V = (t = Ks(
								Ms(t) || Ps(t) || t.nodeType ? { trigger: t } : t,
								aa
							)),
							H = V.onUpdate,
							W = V.toggleClass,
							X = V.id,
							U = V.onToggle,
							K = V.onRefresh,
							Q = V.scrub,
							Z = V.trigger,
							J = V.pin,
							ee = V.pinSpacing,
							te = V.invalidateOnRefresh,
							ne = V.anticipatePin,
							re = V.onScrubComplete,
							ie = V.onSnapComplete,
							se = V.once,
							ae = V.snap,
							oe = V.pinReparent,
							le = V.pinSpacer,
							ce = V.containerAnimation,
							ue = V.fastScrollEnd,
							de = V.preventOverlaps,
							pe =
								t.horizontal || (t.containerAnimation && !1 !== t.horizontal)
									? xi
									: Ti,
							fe = !Q && 0 !== Q,
							he = Si(t.scroller || zi),
							me = Li.core.getCache(he),
							ge = Ss(he),
							ve =
								'fixed' ===
								('pinType' in t
									? t.pinType
									: hi(he, 'pinType') || (ge && 'fixed')),
							_e = [t.onEnter, t.onLeave, t.onEnterBack, t.onLeaveBack],
							ye = fe && t.toggleActions.split(' '),
							be = 'markers' in t ? t.markers : aa.markers,
							we = ge ? 0 : parseFloat(Us(he)['border' + pe.p2 + Hs]) || 0,
							xe = this,
							Te =
								t.onRefreshInit &&
								function () {
									return t.onRefreshInit(xe)
								},
							Se = (function (e, t, n) {
								var r = n.d,
									i = n.d2,
									s = n.a
								return (s = hi(e, 'getBoundingClientRect'))
									? function () {
											return s()[r]
									  }
									: function () {
											return (t ? zi['inner' + i] : e['client' + i]) || 0
									  }
							})(he, ge, pe),
							Ce = (function (e, t) {
								return !t || ~di.indexOf(e)
									? Cs(e)
									: function () {
											return Ia
									  }
							})(he, ge),
							Ee = 0,
							ke = 0,
							Me = Ci(he, pe)
						if (
							(ss(xe),
							(xe._dir = pe),
							(ne *= 45),
							(xe.scroller = he),
							(xe.scroll = ce ? ce.time.bind(ce) : Me),
							(a = Me()),
							(xe.vars = t),
							(n = n || t.animation),
							'refreshPriority' in t &&
								((Qi = 1), -9999 === t.refreshPriority && (ds = xe)),
							(me.tweenScroll = me.tweenScroll || {
								top: Na(he, Ti),
								left: Na(he, xi),
							}),
							(xe.tweenTo = r = me.tweenScroll[pe.p]),
							(xe.scrubDuration = function (e) {
								;(z = Ps(e) && e)
									? D
										? D.duration(e)
										: (D = Li.to(n, {
												ease: 'expo',
												totalProgress: '+=0.001',
												duration: z,
												paused: !0,
												onComplete: function () {
													return re && re(xe)
												},
										  }))
									: (D && D.progress(1).kill(), (D = 0))
							}),
							n &&
								((n.vars.lazy = !1),
								n._initted ||
									(!1 !== n.vars.immediateRender &&
										!1 !== t.immediateRender &&
										n.duration() &&
										n.render(0, !0, !0)),
								(xe.animation = n.pause()),
								(n.scrollTrigger = xe),
								xe.scrubDuration(Q),
								D && D.resetTo && D.resetTo('totalProgress', 0),
								(O = 0),
								X || (X = n.vars.id)),
							da.push(xe),
							ae &&
								((Os(ae) && !ae.push) || (ae = { snapTo: ae }),
								'scrollBehavior' in Bi.style &&
									Li.set(ge ? [Bi, Ii] : he, { scrollBehavior: 'auto' }),
								ui.forEach(function (e) {
									return (
										As(e) &&
										e.target === (ge ? $i.scrollingElement || Ii : he) &&
										(e.smooth = !1)
									)
								}),
								(s = As(ae.snapTo)
									? ae.snapTo
									: 'labels' === ae.snapTo
									? (function (e) {
											return function (t) {
												return Li.utils.snap(Js(e), t)
											}
									  })(n)
									: 'labelsDirectional' === ae.snapTo
									? ((j = n),
									  function (e, t) {
											return ea(Js(j))(e, t.direction)
									  })
									: !1 !== ae.directional
									? function (e, t) {
											return ea(ae.snapTo)(e, fs() - ke < 500 ? 0 : t.direction)
									  }
									: Li.utils.snap(ae.snapTo)),
								($ = ae.duration || { min: 0.1, max: 2 }),
								($ = Os($) ? Ni($.min, $.max) : Ni($, $)),
								(I = Li.delayedCall(ae.delay || z / 2 || 0.1, function () {
									var e = Me(),
										t = fs() - ke < 500,
										i = r.tween
									if (
										!(t || Math.abs(xe.getVelocity()) < 10) ||
										i ||
										Vi ||
										Ee === e
									)
										xe.isActive && Ee !== e && I.restart(!0)
									else {
										var a = (e - l) / m,
											o = n && !fe ? n.totalProgress() : a,
											u = t ? 0 : ((o - L) / (fs() - ji)) * 1e3 || 0,
											d = Li.utils.clamp(-a, 1 - a, (zs(u / 2) * u) / 0.185),
											p = a + (!1 === ae.inertia ? 0 : d),
											f = Ni(0, 1, s(p, xe)),
											h = Math.round(l + f * m),
											g = ae,
											v = g.onStart,
											_ = g.onInterrupt,
											y = g.onComplete
										if (e <= c && e >= l && h !== e) {
											if (i && !i._initted && i.data <= zs(h - e)) return
											!1 === ae.inertia && (d = f - a),
												r(
													h,
													{
														duration: $(
															zs(
																(0.185 * Math.max(zs(p - o), zs(f - o))) /
																	u /
																	0.05 || 0
															)
														),
														ease: ae.ease || 'power3',
														data: zs(h - e),
														onInterrupt: function () {
															return I.restart(!0) && _ && _(xe)
														},
														onComplete: function () {
															xe.update(),
																(Ee = Me()),
																(O = L =
																	n && !fe ? n.totalProgress() : xe.progress),
																ie && ie(xe),
																y && y(xe)
														},
													},
													e,
													d * m,
													h - e - d * m
												),
												v && v(xe, r.tween)
										}
									}
								}).pause())),
							X && (pa[X] = xe),
							(N =
								(Z = xe.trigger = Si(Z || J)) && Z._gsap && Z._gsap.stRevert) &&
								(N = N(xe)),
							(J = !0 === J ? Z : Si(J)),
							Ms(W) && (W = { targets: Z, className: W }),
							J &&
								(!1 === ee ||
									ee === Vs ||
									(ee =
										!(
											!ee &&
											J.parentNode &&
											J.parentNode.style &&
											'flex' === Us(J.parentNode).display
										) && Ys),
								(xe.pin = J),
								(i = Li.core.getCache(J)).spacer
									? (g = i.pinState)
									: (le &&
											((le = Si(le)) &&
												!le.nodeType &&
												(le = le.current || le.nativeElement),
											(i.spacerIsNative = !!le),
											le && (i.spacerState = $a(le))),
									  (i.spacer = y = le || $i.createElement('div')),
									  y.classList.add('pin-spacer'),
									  X && y.classList.add('pin-spacer-' + X),
									  (i.pinState = g = $a(J))),
								!1 !== t.force3D && Li.set(J, { force3D: !0 }),
								(xe.spacer = y = i.spacer),
								(P = Us(J)),
								(C = P[ee + pe.os2]),
								(w = Li.getProperty(J)),
								(x = Li.quickSetter(J, pe.a, Xs)),
								La(J, y, P),
								(_ = $a(J))),
							be)
						) {
							;(h = Os(be) ? Ks(be, sa) : sa),
								(p = ca('scroller-start', X, he, pe, h, 0)),
								(f = ca('scroller-end', X, he, pe, h, 0, p)),
								(b = p['offset' + pe.op.d2])
							var Ae = Si(hi(he, 'content') || he)
							;(u = this.markerStart = ca('start', X, Ae, pe, h, b, 0, ce)),
								(d = this.markerEnd = ca('end', X, Ae, pe, h, b, 0, ce)),
								ce && (F = Li.quickSetter([u, d], pe.a, Xs)),
								ve ||
									(di.length && !0 === hi(he, 'fixedMarkers')) ||
									((Y = Us((G = ge ? Bi : he)).position),
									(G.style.position =
										'absolute' === Y || 'fixed' === Y ? Y : 'relative'),
									Li.set([p, f], { force3D: !0 }),
									(k = Li.quickSetter(p, pe.a, Xs)),
									(A = Li.quickSetter(f, pe.a, Xs)))
						}
						if (ce) {
							var Pe = ce.vars.onUpdate,
								Oe = ce.vars.onUpdateParams
							ce.eventCallback('onUpdate', function () {
								xe.update(0, 0, 1), Pe && Pe.apply(ce, Oe || [])
							})
						}
						;(xe.previous = function () {
							return da[da.indexOf(xe) - 1]
						}),
							(xe.next = function () {
								return da[da.indexOf(xe) + 1]
							}),
							(xe.revert = function (e, t) {
								if (!t) return xe.kill(!0)
								var r = !1 !== e || !xe.enabled,
									i = Yi
								r !== xe.isReverted &&
									(r &&
										((q = Math.max(Me(), xe.scroll.rec || 0)),
										(B = xe.progress),
										(R = n && n.progress())),
									u &&
										[u, d, p, f].forEach(function (e) {
											return (e.style.display = r ? 'none' : 'block')
										}),
									r && ((Yi = xe), xe.update(r)),
									!J ||
										(oe && xe.isActive) ||
										(r
											? (function (e, t, n) {
													za(n)
													var r = e._gsap
													if (r.spacerIsNative) za(r.spacerState)
													else if (e._gsap.swappedIn) {
														var i = t.parentNode
														i && (i.insertBefore(e, t), i.removeChild(t))
													}
													e._gsap.swappedIn = !1
											  })(J, y, g)
											: La(J, y, Us(J), E)),
									r || xe.update(r),
									(Yi = i),
									(xe.isReverted = r))
							}),
							(xe.refresh = function (i, s) {
								if ((!Yi && xe.enabled) || s)
									if (J && i && ms) na(e, 'scrollEnd', ya)
									else {
										!cs && Te && Te(xe),
											(Yi = xe),
											(ke = fs()),
											r.tween && (r.tween.kill(), (r.tween = 0)),
											D && D.pause(),
											te && n && n.revert({ kill: !1 }).invalidate(),
											xe.isReverted || xe.revert(!0, !0),
											(xe._subPinOffset = !1)
										for (
											var h,
												b,
												x,
												C,
												k,
												A,
												P,
												O,
												L,
												z,
												$,
												F = Se(),
												N = Ce(),
												j = ce ? ce.duration() : Es(he, pe),
												G = m <= 0.01,
												Y = 0,
												V = 0,
												H = t.end,
												W = t.endTrigger || Z,
												X =
													t.start ||
													(0 !== t.start && Z ? (J ? '0 0' : '0 100%') : 0),
												U = (xe.pinnedContainer =
													t.pinnedContainer && Si(t.pinnedContainer)),
												Q = (Z && Math.max(0, da.indexOf(xe))) || 0,
												ne = Q;
											ne--;

										)
											(A = da[ne]).end || A.refresh(0, 1) || (Yi = xe),
												!(P = A.pin) ||
													(P !== Z && P !== J && P !== U) ||
													A.isReverted ||
													(z || (z = []), z.unshift(A), A.revert(!0, !0)),
												A !== da[ne] && (Q--, ne--)
										for (
											As(X) && (X = X(xe)),
												l =
													Ba(X, Z, F, pe, Me(), u, p, xe, N, we, ve, j, ce) ||
													(J ? -0.001 : 0),
												As(H) && (H = H(xe)),
												Ms(H) &&
													!H.indexOf('+=') &&
													(~H.indexOf(' ')
														? (H = (Ms(X) ? X.split(' ')[0] : '') + H)
														: ((Y = la(H.substr(2), F)),
														  (H = Ms(X)
																? X
																: (ce
																		? Li.utils.mapRange(
																				0,
																				ce.duration(),
																				ce.scrollTrigger.start,
																				ce.scrollTrigger.end,
																				l
																		  )
																		: l) + Y),
														  (W = Z))),
												c =
													Math.max(
														l,
														Ba(
															H || (W ? '100% 0' : j),
															W,
															F,
															pe,
															Me() + Y,
															d,
															f,
															xe,
															N,
															we,
															ve,
															j,
															ce
														)
													) || -0.001,
												m = c - l || ((l -= 0.01) && 0.001),
												Y = 0,
												ne = Q;
											ne--;

										)
											(P = (A = da[ne]).pin) &&
												A.start - A._pinPush <= l &&
												!ce &&
												A.end > 0 &&
												((h = A.end - A.start),
												((P === Z && A.start - A._pinPush < l) || P === U) &&
													!Ps(X) &&
													(Y += h * (1 - A.progress)),
												P === J && (V += h))
										if (
											((l += Y),
											(c += Y),
											G &&
												(B = Li.utils.clamp(0, 1, Li.utils.normalize(l, c, q))),
											(xe._pinPush = V),
											u &&
												Y &&
												(((h = {})[pe.a] = '+=' + Y),
												U && (h[pe.p] = '-=' + Me()),
												Li.set([u, d], h)),
											J)
										)
											(h = Us(J)),
												(C = pe === Ti),
												(x = Me()),
												(T = parseFloat(w(pe.a)) + V),
												!j &&
													c > 1 &&
													(($ = {
														style: ($ = (ge ? $i.scrollingElement || Ii : he)
															.style),
														value: $['overflow' + pe.a.toUpperCase()],
													}).style['overflow' + pe.a.toUpperCase()] = 'scroll'),
												La(J, y, h),
												(_ = $a(J)),
												(b = Qs(J, !0)),
												(O = ve && Ci(he, C ? xi : Ti)()),
												ee &&
													(((E = [ee + pe.os2, m + V + Xs]).t = y),
													(ne = ee === Ys ? Zs(J, pe) + m + V : 0) &&
														E.push(pe.d, ne + Xs),
													za(E),
													U &&
														da.forEach(function (e) {
															e.pin === U &&
																!1 !== e.vars.pinSpacing &&
																(e._subPinOffset = !0)
														}),
													ve && Me(q)),
												ve &&
													(((k = {
														top: b.top + (C ? x - l : O) + Xs,
														left: b.left + (C ? O : x - l) + Xs,
														boxSizing: 'border-box',
														position: 'fixed',
													})[qs] = k['max' + Hs] =
														Math.ceil(b.width) + Xs),
													(k[Rs] = k['max' + Ws] = Math.ceil(b.height) + Xs),
													(k[Vs] =
														k[Vs + js] =
														k[Vs + Fs] =
														k[Vs + Gs] =
														k[Vs + Ns] =
															'0'),
													(k[Ys] = h[Ys]),
													(k[Ys + js] = h[Ys + js]),
													(k[Ys + Fs] = h[Ys + Fs]),
													(k[Ys + Gs] = h[Ys + Gs]),
													(k[Ys + Ns] = h[Ys + Ns]),
													(v = (function (e, t, n) {
														for (
															var r, i = [], s = e.length, a = n ? 8 : 0;
															a < s;
															a += 2
														)
															(r = e[a]), i.push(r, r in t ? t[r] : e[a + 1])
														return (i.t = e.t), i
													})(g, k, oe)),
													cs && Me(0)),
												n
													? ((L = n._initted),
													  Zi(1),
													  n.render(n.duration(), !0, !0),
													  (S = w(pe.a) - T + m + V),
													  (M = Math.abs(m - S) > 1),
													  ve && M && v.splice(v.length - 2, 2),
													  n.render(0, !0, !0),
													  L || n.invalidate(!0),
													  n.parent || n.totalTime(n.totalTime()),
													  Zi(0))
													: (S = m),
												$ &&
													($.value
														? ($.style['overflow' + pe.a.toUpperCase()] =
																$.value)
														: $.style.removeProperty('overflow-' + pe.a))
										else if (Z && Me() && !ce)
											for (b = Z.parentNode; b && b !== Bi; )
												b._pinOffset &&
													((l -= b._pinOffset), (c -= b._pinOffset)),
													(b = b.parentNode)
										z &&
											z.forEach(function (e) {
												return e.revert(!1, !0)
											}),
											(xe.start = l),
											(xe.end = c),
											(a = o = cs ? q : Me()),
											ce || cs || (a < q && Me(q), (xe.scroll.rec = 0)),
											xe.revert(!1, !0),
											I &&
												((Ee = -1),
												xe.isActive && Me(l + m * B),
												I.restart(!0)),
											(Yi = 0),
											n &&
												fe &&
												(n._initted || R) &&
												n.progress() !== R &&
												n.progress(R, !0).render(n.time(), !0, !0),
											(G || B !== xe.progress || ce) &&
												(n &&
													!fe &&
													n.totalProgress(
														ce && l < -0.001 && !B
															? Li.utils.normalize(l, c, 0)
															: B,
														!0
													),
												(xe.progress = (a - l) / m === B ? 0 : B)),
											J && ee && (y._pinOffset = Math.round(xe.progress * S)),
											D && D.invalidate(),
											K && !cs && K(xe)
									}
							}),
							(xe.getVelocity = function () {
								return ((Me() - o) / (fs() - ji)) * 1e3 || 0
							}),
							(xe.endAnimation = function () {
								Ls(xe.callbackAnimation),
									n &&
										(D
											? D.progress(1)
											: n.paused()
											? fe || Ls(n, xe.direction < 0, 1)
											: Ls(n, n.reversed()))
							}),
							(xe.labelToScroll = function (e) {
								return (
									(n &&
										n.labels &&
										(l || xe.refresh() || l) +
											(n.labels[e] / n.duration()) * m) ||
									0
								)
							}),
							(xe.getTrailing = function (e) {
								var t = da.indexOf(xe),
									n =
										xe.direction > 0
											? da.slice(0, t).reverse()
											: da.slice(t + 1)
								return (
									Ms(e)
										? n.filter(function (t) {
												return t.vars.preventOverlaps === e
										  })
										: n
								).filter(function (e) {
									return xe.direction > 0 ? e.end <= l : e.start >= c
								})
							}),
							(xe.update = function (e, t, i) {
								if (!ce || i || e) {
									var s,
										u,
										d,
										f,
										h,
										g,
										b,
										w = !0 === cs ? q : xe.scroll(),
										E = e ? 0 : (w - l) / m,
										P = E < 0 ? 0 : E > 1 ? 1 : E || 0,
										z = xe.progress
									if (
										(t &&
											((o = a),
											(a = ce ? Me() : w),
											ae && ((L = O), (O = n && !fe ? n.totalProgress() : P))),
										ne &&
											!P &&
											J &&
											!Yi &&
											!ps &&
											ms &&
											l < w + ((w - o) / (fs() - ji)) * ne &&
											(P = 1e-4),
										P !== z && xe.enabled)
									) {
										if (
											((f =
												(h =
													(s = xe.isActive = !!P && P < 1) !==
													(!!z && z < 1)) || !!P != !!z),
											(xe.direction = P > z ? 1 : -1),
											(xe.progress = P),
											f &&
												!Yi &&
												((u = P && !z ? 0 : 1 === P ? 1 : 1 === z ? 2 : 3),
												fe &&
													((d =
														(!h && 'none' !== ye[u + 1] && ye[u + 1]) || ye[u]),
													(b =
														n &&
														('complete' === d || 'reset' === d || d in n)))),
											de &&
												(h || b) &&
												(b || Q || !n) &&
												(As(de)
													? de(xe)
													: xe.getTrailing(de).forEach(function (e) {
															return e.endAnimation()
													  })),
											fe ||
												(!D || Yi || ps
													? n && n.totalProgress(P, !!Yi)
													: (D._dp._time - D._start !== D._time &&
															D.render(D._dp._time - D._start),
													  D.resetTo
															? D.resetTo(
																	'totalProgress',
																	P,
																	n._tTime / n._tDur
															  )
															: ((D.vars.totalProgress = P),
															  D.invalidate().restart()))),
											J)
										)
											if ((e && ee && (y.style[ee + pe.os2] = C), ve)) {
												if (f) {
													if (
														((g =
															!e && P > z && c + 1 > w && w + 1 >= Es(he, pe)),
														oe)
													)
														if (e || (!s && !g)) Ra(J, y)
														else {
															var $ = Qs(J, !0),
																B = w - l
															Ra(
																J,
																Bi,
																$.top + (pe === Ti ? B : 0) + Xs,
																$.left + (pe === Ti ? 0 : B) + Xs
															)
														}
													za(s || g ? v : _),
														(M && P < 1 && s) || x(T + (1 !== P || g ? 0 : S))
												}
											} else x(ws(T + S * P))
										ae && !r.tween && !Yi && !ps && I.restart(!0),
											W &&
												(h || (se && P && (P < 1 || !os))) &&
												Fi(W.targets).forEach(function (e) {
													return e.classList[s || se ? 'add' : 'remove'](
														W.className
													)
												}),
											H && !fe && !e && H(xe),
											f && !Yi
												? (fe &&
														(b &&
															('complete' === d
																? n.pause().totalProgress(1)
																: 'reset' === d
																? n.restart(!0).pause()
																: 'restart' === d
																? n.restart(!0)
																: n[d]()),
														H && H(xe)),
												  (!h && os) ||
														(U && h && Ds(xe, U),
														_e[u] && Ds(xe, _e[u]),
														se && (1 === P ? xe.kill(!1, 1) : (_e[u] = 0)),
														h || (_e[(u = 1 === P ? 1 : 3)] && Ds(xe, _e[u]))),
												  ue &&
														!s &&
														Math.abs(xe.getVelocity()) > (Ps(ue) ? ue : 2500) &&
														(Ls(xe.callbackAnimation),
														D
															? D.progress(1)
															: Ls(n, 'reverse' === d ? 1 : !P, 1)))
												: fe && H && !Yi && H(xe)
									}
									if (A) {
										var R = ce
											? (w / ce.duration()) * (ce._caScrollDist || 0)
											: w
										k(R + (p._isFlipped ? 1 : 0)), A(R)
									}
									F && F((-w / ce.duration()) * (ce._caScrollDist || 0))
								}
							}),
							(xe.enable = function (t, n) {
								xe.enabled ||
									((xe.enabled = !0),
									na(he, 'resize', ga),
									na(ge ? $i : he, 'scroll', ha),
									Te && na(e, 'refreshInit', Te),
									!1 !== t && ((xe.progress = B = 0), (a = o = Ee = Me())),
									!1 !== n && xe.refresh())
							}),
							(xe.getTween = function (e) {
								return e && r ? r.tween : D
							}),
							(xe.setPositions = function (e, t) {
								J &&
									((T += e - l),
									(S += t - e - m),
									ee === Ys && xe.adjustPinSpacing(t - e - m)),
									(xe.start = l = e),
									(xe.end = c = t),
									(m = t - e),
									xe.update()
							}),
							(xe.adjustPinSpacing = function (e) {
								if (E && e) {
									var t = E.indexOf(pe.d) + 1
									;(E[t] = parseFloat(E[t]) + e + Xs),
										(E[1] = parseFloat(E[1]) + e + Xs),
										za(E)
								}
							}),
							(xe.disable = function (t, n) {
								if (
									xe.enabled &&
									(!1 !== t && xe.revert(!0, !0),
									(xe.enabled = xe.isActive = !1),
									n || (D && D.pause()),
									(q = 0),
									i && (i.uncache = 1),
									Te && ra(e, 'refreshInit', Te),
									I && (I.pause(), r.tween && r.tween.kill() && (r.tween = 0)),
									!ge)
								) {
									for (var s = da.length; s--; )
										if (da[s].scroller === he && da[s] !== xe) return
									ra(he, 'resize', ga), ra(he, 'scroll', ha)
								}
							}),
							(xe.kill = function (e, r) {
								xe.disable(e, r), D && !r && D.kill(), X && delete pa[X]
								var s = da.indexOf(xe)
								s >= 0 && da.splice(s, 1),
									s === Wi && Ma > 0 && Wi--,
									(s = 0),
									da.forEach(function (e) {
										return e.scroller === xe.scroller && (s = 1)
									}),
									s || cs || (xe.scroll.rec = 0),
									n &&
										((n.scrollTrigger = null),
										e && n.revert({ kill: !1 }),
										r || n.kill()),
									u &&
										[u, d, p, f].forEach(function (e) {
											return e.parentNode && e.parentNode.removeChild(e)
										}),
									ds === xe && (ds = 0),
									J &&
										(i && (i.uncache = 1),
										(s = 0),
										da.forEach(function (e) {
											return e.pin === J && s++
										}),
										s || (i.spacer = 0)),
									t.onKill && t.onKill(xe)
							}),
							xe.enable(!1, !1),
							N && N(xe),
							n && n.add && !m
								? Li.delayedCall(0.01, function () {
										return l || c || xe.refresh()
								  }) &&
								  (m = 0.01) &&
								  (l = c = 0)
								: xe.refresh(),
							J &&
								(function () {
									if (us !== Ca) {
										var e = (us = Ca)
										requestAnimationFrame(function () {
											return e === Ca && Ea(!0)
										})
									}
								})()
					} else this.update = this.refresh = this.kill = bs
				}),
				(e.register = function (t) {
					return (
						Di ||
							((Li = t || Ts()),
							xs() && window.document && e.enable(),
							(Di = gs)),
						Di
					)
				}),
				(e.defaults = function (e) {
					if (e) for (var t in e) aa[t] = e[t]
					return aa
				}),
				(e.disable = function (e, t) {
					;(gs = 0),
						da.forEach(function (n) {
							return n[t ? 'kill' : 'disable'](e)
						}),
						ra(zi, 'wheel', ha),
						ra($i, 'scroll', ha),
						clearInterval(Gi),
						ra($i, 'touchcancel', bs),
						ra(Bi, 'touchstart', bs),
						ta(ra, $i, 'pointerdown,touchstart,mousedown', _s),
						ta(ra, $i, 'pointerup,touchend,mouseup', ys),
						Ri.kill(),
						ks(ra)
					for (var n = 0; n < ui.length; n += 3)
						ia(ra, ui[n], ui[n + 1]), ia(ra, ui[n], ui[n + 2])
				}),
				(e.enable = function () {
					if (
						((zi = window),
						($i = document),
						(Ii = $i.documentElement),
						(Bi = $i.body),
						Li &&
							((Fi = Li.utils.toArray),
							(Ni = Li.utils.clamp),
							(ss = Li.core.context || bs),
							(Zi = Li.core.suppressOverwrites || bs),
							(as = zi.history.scrollRestoration || 'auto'),
							(ka = zi.pageYOffset),
							Li.core.globals('ScrollTrigger', e),
							Bi))
					) {
						;(gs = 1),
							vs(),
							Oi.register(Li),
							(e.isTouch = Oi.isTouch),
							(is =
								Oi.isTouch &&
								/(iPad|iPhone|iPod|Mac)/g.test(navigator.userAgent)),
							na(zi, 'wheel', ha),
							(qi = [zi, $i, Ii, Bi]),
							Li.matchMedia
								? ((e.matchMedia = function (e) {
										var t,
											n = Li.matchMedia()
										for (t in e) n.add(t, e[t])
										return n
								  }),
								  Li.addEventListener('matchMediaInit', function () {
										return Ta()
								  }),
								  Li.addEventListener('matchMediaRevert', function () {
										return xa()
								  }),
								  Li.addEventListener('matchMedia', function () {
										Ea(0, 1), ba('matchMedia')
								  }),
								  Li.matchMedia('(orientation: portrait)', function () {
										return ma(), ma
								  }))
								: console.warn('Requires GSAP 3.11.0 or later'),
							ma(),
							na($i, 'scroll', ha)
						var t,
							n,
							r = Bi.style,
							i = r.borderTopStyle,
							s = Li.core.Animation.prototype
						for (
							s.revert ||
								Object.defineProperty(s, 'revert', {
									value: function () {
										return this.time(-0.01, !0)
									},
								}),
								r.borderTopStyle = 'solid',
								t = Qs(Bi),
								Ti.m = Math.round(t.top + Ti.sc()) || 0,
								xi.m = Math.round(t.left + xi.sc()) || 0,
								i
									? (r.borderTopStyle = i)
									: r.removeProperty('border-top-style'),
								Gi = setInterval(fa, 250),
								Li.delayedCall(0.5, function () {
									return (ps = 0)
								}),
								na($i, 'touchcancel', bs),
								na(Bi, 'touchstart', bs),
								ta(na, $i, 'pointerdown,touchstart,mousedown', _s),
								ta(na, $i, 'pointerup,touchend,mouseup', ys),
								Hi = Li.utils.checkPrefix('transform'),
								Oa.push(Hi),
								Di = fs(),
								Ri = Li.delayedCall(0.2, Ea).pause(),
								Ki = [
									$i,
									'visibilitychange',
									function () {
										var e = zi.innerWidth,
											t = zi.innerHeight
										$i.hidden
											? ((Xi = e), (Ui = t))
											: (Xi === e && Ui === t) || ga()
									},
									$i,
									'DOMContentLoaded',
									Ea,
									zi,
									'load',
									Ea,
									zi,
									'resize',
									ga,
								],
								ks(na),
								da.forEach(function (e) {
									return e.enable(0, 1)
								}),
								n = 0;
							n < ui.length;
							n += 3
						)
							ia(ra, ui[n], ui[n + 1]), ia(ra, ui[n], ui[n + 2])
					}
				}),
				(e.config = function (t) {
					'limitCallbacks' in t && (os = !!t.limitCallbacks)
					var n = t.syncInterval
					;(n && clearInterval(Gi)) || ((Gi = n) && setInterval(fa, n)),
						'ignoreMobileResize' in t &&
							(ts = 1 === e.isTouch && t.ignoreMobileResize),
						'autoRefreshEvents' in t &&
							(ks(ra) || ks(na, t.autoRefreshEvents || 'none'),
							(Ji = -1 === (t.autoRefreshEvents + '').indexOf('resize')))
				}),
				(e.scrollerProxy = function (e, t) {
					var n = Si(e),
						r = ui.indexOf(n),
						i = Ss(n)
					~r && ui.splice(r, i ? 6 : 2),
						t && (i ? di.unshift(zi, t, Bi, t, Ii, t) : di.unshift(n, t))
				}),
				(e.clearMatchMedia = function (e) {
					da.forEach(function (t) {
						return t._ctx && t._ctx.query === e && t._ctx.kill(!0, !0)
					})
				}),
				(e.isInViewport = function (e, t, n) {
					var r = (Ms(e) ? Si(e) : e).getBoundingClientRect(),
						i = r[n ? qs : Rs] * t || 0
					return n
						? r.right - i > 0 && r.left + i < zi.innerWidth
						: r.bottom - i > 0 && r.top + i < zi.innerHeight
				}),
				(e.positionInViewport = function (e, t, n) {
					Ms(e) && (e = Si(e))
					var r = e.getBoundingClientRect(),
						i = r[n ? qs : Rs],
						s =
							null == t
								? i / 2
								: t in oa
								? oa[t] * i
								: ~t.indexOf('%')
								? (parseFloat(t) * i) / 100
								: parseFloat(t) || 0
					return n ? (r.left + s) / zi.innerWidth : (r.top + s) / zi.innerHeight
				}),
				(e.killAll = function (e) {
					if (
						(da.slice(0).forEach(function (e) {
							return 'ScrollSmoother' !== e.vars.id && e.kill()
						}),
						!0 !== e)
					) {
						var t = va.killAll || []
						;(va = {}),
							t.forEach(function (e) {
								return e()
							})
					}
				}),
				e
			)
		})()
	;(ja.version = '3.11.5'),
		(ja.saveStyles = function (e) {
			return e
				? Fi(e).forEach(function (e) {
						if (e && e.style) {
							var t = wa.indexOf(e)
							t >= 0 && wa.splice(t, 5),
								wa.push(
									e,
									e.style.cssText,
									e.getBBox && e.getAttribute('transform'),
									Li.core.getCache(e),
									ss()
								)
						}
				  })
				: wa
		}),
		(ja.revert = function (e, t) {
			return Ta(!e, t)
		}),
		(ja.create = function (e, t) {
			return new ja(e, t)
		}),
		(ja.refresh = function (e) {
			return e ? ga() : (Di || ja.register()) && Ea(!0)
		}),
		(ja.update = function (e) {
			return ++ui.cache && Aa(!0 === e ? 2 : 0)
		}),
		(ja.clearScrollMemory = Sa),
		(ja.maxScroll = function (e, t) {
			return Es(e, t ? xi : Ti)
		}),
		(ja.getScrollFunc = function (e, t) {
			return Ci(Si(e), t ? xi : Ti)
		}),
		(ja.getById = function (e) {
			return pa[e]
		}),
		(ja.getAll = function () {
			return da.filter(function (e) {
				return 'ScrollSmoother' !== e.vars.id
			})
		}),
		(ja.isScrolling = function () {
			return !!ms
		}),
		(ja.snapDirectional = ea),
		(ja.addEventListener = function (e, t) {
			var n = va[e] || (va[e] = [])
			~n.indexOf(t) || n.push(t)
		}),
		(ja.removeEventListener = function (e, t) {
			var n = va[e],
				r = n && n.indexOf(t)
			r >= 0 && n.splice(r, 1)
		}),
		(ja.batch = function (e, t) {
			var n,
				r = [],
				i = {},
				s = t.interval || 0.016,
				a = t.batchMax || 1e9,
				o = function (e, t) {
					var n = [],
						r = [],
						i = Li.delayedCall(s, function () {
							t(n, r), (n = []), (r = [])
						}).pause()
					return function (e) {
						n.length || i.restart(!0),
							n.push(e.trigger),
							r.push(e),
							a <= n.length && i.progress(1)
					}
				}
			for (n in t)
				i[n] =
					'on' === n.substr(0, 2) && As(t[n]) && 'onRefreshInit' !== n
						? o(0, t[n])
						: t[n]
			return (
				As(a) &&
					((a = a()),
					na(ja, 'refresh', function () {
						return (a = t.batchMax())
					})),
				Fi(e).forEach(function (e) {
					var t = {}
					for (n in i) t[n] = i[n]
					;(t.trigger = e), r.push(ja.create(t))
				}),
				r
			)
		})
	var Ga,
		Ya = function (e, t, n, r) {
			return (
				t > r ? e(r) : t < 0 && e(0),
				n > r ? (r - t) / (n - t) : n < 0 ? t / (t - n) : 1
			)
		},
		Va = function e(t, n) {
			!0 === n
				? t.style.removeProperty('touch-action')
				: (t.style.touchAction =
						!0 === n
							? 'auto'
							: n
							? 'pan-' + n + (Oi.isTouch ? ' pinch-zoom' : '')
							: 'none'),
				t === Ii && e(Bi, n)
		},
		Ha = { auto: 1, scroll: 1 },
		Wa = function (e) {
			var t,
				n = e.event,
				r = e.target,
				i = e.axis,
				s = (n.changedTouches ? n.changedTouches[0] : n).target,
				a = s._gsap || Li.core.getCache(s),
				o = fs()
			if (!a._isScrollT || o - a._isScrollT > 2e3) {
				for (
					;
					s &&
					s !== Bi &&
					((s.scrollHeight <= s.clientHeight &&
						s.scrollWidth <= s.clientWidth) ||
						(!Ha[(t = Us(s)).overflowY] && !Ha[t.overflowX]));

				)
					s = s.parentNode
				;(a._isScroll =
					s &&
					s !== r &&
					!Ss(s) &&
					(Ha[(t = Us(s)).overflowY] || Ha[t.overflowX])),
					(a._isScrollT = o)
			}
			;(a._isScroll || 'x' === i) && (n.stopPropagation(), (n._gsapAllow = !0))
		},
		Xa = function (e, t, n, r) {
			return Oi.create({
				target: e,
				capture: !0,
				debounce: !1,
				lockAxis: !0,
				type: t,
				onWheel: (r = r && Wa),
				onPress: r,
				onDrag: r,
				onScroll: r,
				onEnable: function () {
					return n && na($i, Oi.eventTypes[0], Ka, !1, !0)
				},
				onDisable: function () {
					return ra($i, Oi.eventTypes[0], Ka, !0)
				},
			})
		},
		Ua = /(input|label|select|textarea)/i,
		Ka = function (e) {
			var t = Ua.test(e.target.tagName)
			;(t || Ga) && ((e._gsapAllow = !0), (Ga = t))
		},
		Qa = function (e) {
			Os(e) || (e = {}),
				(e.preventDefault = e.isNormalizer = e.allowClicks = !0),
				e.type || (e.type = 'wheel,touch'),
				(e.debounce = !!e.debounce),
				(e.id = e.id || 'normalizer')
			var t,
				n,
				r,
				i,
				s,
				a,
				o,
				l,
				c = e,
				u = c.normalizeScrollX,
				d = c.momentum,
				p = c.allowNestedScroll,
				f = c.onRelease,
				h = Si(e.target) || Ii,
				m = Li.core.globals().ScrollSmoother,
				g = m && m.get(),
				v =
					is &&
					((e.content && Si(e.content)) ||
						(g && !1 !== e.content && !g.smooth() && g.content())),
				_ = Ci(h, Ti),
				y = Ci(h, xi),
				b = 1,
				w =
					(Oi.isTouch && zi.visualViewport
						? zi.visualViewport.scale * zi.visualViewport.width
						: zi.outerWidth) / zi.innerWidth,
				x = 0,
				T = As(d)
					? function () {
							return d(t)
					  }
					: function () {
							return d || 2.8
					  },
				S = Xa(h, e.type, !0, p),
				C = function () {
					return (i = !1)
				},
				E = bs,
				k = bs,
				M = function () {
					;(n = Es(h, Ti)),
						(k = Ni(is ? 1 : 0, n)),
						u && (E = Ni(0, Es(h, xi))),
						(r = Ca)
				},
				A = function () {
					;(v._gsap.y = ws(parseFloat(v._gsap.y) + _.offset) + 'px'),
						(v.style.transform =
							'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, ' +
							parseFloat(v._gsap.y) +
							', 0, 1)'),
						(_.offset = _.cacheID = 0)
				},
				P = function () {
					M(),
						s.isActive() &&
							s.vars.scrollY > n &&
							(_() > n ? s.progress(1) && _(n) : s.resetTo('scrollY', n))
				}
			return (
				v && Li.set(v, { y: '+=0' }),
				(e.ignoreCheck = function (e) {
					return (
						(is &&
							'touchmove' === e.type &&
							(function () {
								if (i) {
									requestAnimationFrame(C)
									var e = ws(t.deltaY / 2),
										n = k(_.v - e)
									if (v && n !== _.v + _.offset) {
										_.offset = n - _.v
										var r = ws((parseFloat(v && v._gsap.y) || 0) - _.offset)
										;(v.style.transform =
											'matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, ' +
											r +
											', 0, 1)'),
											(v._gsap.y = r + 'px'),
											(_.cacheID = ui.cache),
											Aa()
									}
									return !0
								}
								_.offset && A(), (i = !0)
							})()) ||
						(b > 1.05 && 'touchstart' !== e.type) ||
						t.isGesturing ||
						(e.touches && e.touches.length > 1)
					)
				}),
				(e.onPress = function () {
					i = !1
					var e = b
					;(b = ws(((zi.visualViewport && zi.visualViewport.scale) || 1) / w)),
						s.pause(),
						e !== b && Va(h, b > 1.01 || (!u && 'x')),
						(a = y()),
						(o = _()),
						M(),
						(r = Ca)
				}),
				(e.onRelease = e.onGestureStart =
					function (e, t) {
						if ((_.offset && A(), t)) {
							ui.cache++
							var r,
								i,
								a = T()
							u &&
								((i = (r = y()) + (0.05 * a * -e.velocityX) / 0.227),
								(a *= Ya(y, r, i, Es(h, xi))),
								(s.vars.scrollX = E(i))),
								(i = (r = _()) + (0.05 * a * -e.velocityY) / 0.227),
								(a *= Ya(_, r, i, Es(h, Ti))),
								(s.vars.scrollY = k(i)),
								s.invalidate().duration(a).play(0.01),
								((is && s.vars.scrollY >= n) || r >= n - 1) &&
									Li.to({}, { onUpdate: P, duration: a })
						} else l.restart(!0)
						f && f(e)
					}),
				(e.onWheel = function () {
					s._ts && s.pause(), fs() - x > 1e3 && ((r = 0), (x = fs()))
				}),
				(e.onChange = function (e, t, n, i, s) {
					if (
						(Ca !== r && M(),
						t && u && y(E(i[2] === t ? a + (e.startX - e.x) : y() + t - i[1])),
						n)
					) {
						_.offset && A()
						var l = s[2] === n,
							c = l ? o + e.startY - e.y : _() + n - s[1],
							d = k(c)
						l && c !== d && (o += d - c), _(d)
					}
					;(n || t) && Aa()
				}),
				(e.onEnable = function () {
					Va(h, !u && 'x'),
						ja.addEventListener('refresh', P),
						na(zi, 'resize', P),
						_.smooth &&
							((_.target.style.scrollBehavior = 'auto'),
							(_.smooth = y.smooth = !1)),
						S.enable()
				}),
				(e.onDisable = function () {
					Va(h, !0),
						ra(zi, 'resize', P),
						ja.removeEventListener('refresh', P),
						S.kill()
				}),
				(e.lockAxis = !1 !== e.lockAxis),
				((t = new Oi(e)).iOS = is),
				is && !_() && _(1),
				is && Li.ticker.add(bs),
				(l = t._dc),
				(s = Li.to(t, {
					ease: 'power4',
					paused: !0,
					scrollX: u ? '+=0.1' : '+=0',
					scrollY: '+=0.1',
					modifiers: {
						scrollY: Fa(_, _(), function () {
							return s.pause()
						}),
					},
					onUpdate: Aa,
					onComplete: l.vars.onComplete,
				})),
				t
			)
		}
	;(ja.sort = function (e) {
		return da.sort(
			e ||
				function (e, t) {
					return (
						-1e6 * (e.vars.refreshPriority || 0) +
						e.start -
						(t.start + -1e6 * (t.vars.refreshPriority || 0))
					)
				}
		)
	}),
		(ja.observe = function (e) {
			return new Oi(e)
		}),
		(ja.normalizeScroll = function (e) {
			if (void 0 === e) return es
			if (!0 === e && es) return es.enable()
			if (!1 === e) return es && es.kill()
			var t = e instanceof Oi ? e : Qa(e)
			return (
				es && es.target === t.target && es.kill(), Ss(t.target) && (es = t), t
			)
		}),
		(ja.core = {
			_getVelocityProp: Ei,
			_inputObserver: Xa,
			_scrollers: ui,
			_proxies: di,
			bridge: {
				ss: function () {
					ms || ba('scrollStart'), (ms = fs())
				},
				ref: function () {
					return Yi
				},
			},
		}),
		Ts() && Li.registerPlugin(ja),
		(function () {
			if (document.querySelector('.about-leaders__content')) {
				const e = document.querySelector('.about-leaders__content'),
					t =
						(document.querySelector('.about-leaders__inner'),
						document.querySelector('.mob-container')),
					n = e.parentNode
				window.innerWidth < 951
					? t.insertAdjacentElement('afterbegin', e)
					: n.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 951
							? t.insertAdjacentElement('afterbegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})(),
		(function () {
			if (document.querySelector('.map__content')) {
				const e = document.querySelector('.map__content'),
					t = document.querySelector('.map'),
					n = e.parentNode
				window.innerWidth < 1100
					? (e.classList.add('contacts-content'),
					  t.insertAdjacentElement('beforebegin', e))
					: (e.classList.remove('contacts-content'),
					  n.insertAdjacentElement('afterbegin', e)),
					window.addEventListener('resize', r => {
						window.innerWidth < 1100
							? (e.classList.add('contacts-content'),
							  t.insertAdjacentElement('beforebegin', e))
							: (e.classList.remove('contacts-content'),
							  n.insertAdjacentElement('afterbegin', e))
					})
			}
		})(),
		(function () {
			if (document.querySelector('.index-about__content')) {
				const e = document.querySelector('.index-about__content'),
					t = document.querySelector('.index-about-numbers__inner'),
					n = e.parentNode
				window.innerWidth < 618
					? t.insertAdjacentElement('beforebegin', e)
					: n.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 618
							? t.insertAdjacentElement('beforebegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})(),
		(function () {
			if (document.querySelector('.feedback')) {
				const e = document.querySelector('.feedback__content'),
					t = document.querySelector('.feedback-container_target'),
					n = e.parentNode
				window.innerWidth < 625 && t.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 625
							? t.insertAdjacentElement('afterbegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})(),
		(function () {
			if (document.querySelector('.how-buy__link')) {
				const e = document.querySelector('.how-buy__link'),
					t = document.querySelector('.how-buy__title-link'),
					n = document.querySelector('.how-buy__list')
				window.innerWidth < 625 &&
					(n.insertAdjacentElement('afterend', e),
					(e.style.marginTop = '32px'),
					(e.style.justifyContent = 'center')),
					window.addEventListener('resize', r => {
						window.innerWidth < 625
							? (n.insertAdjacentElement('afterend', e),
							  (e.style.marginTop = '32px'),
							  (e.style.justifyContent = 'center'))
							: (t.insertAdjacentElement('beforeend', e),
							  (e.style.marginTop = '0'))
					})
			}
		})(),
		(function () {
			if (document.querySelector('.feedback-tech__title')) {
				const e = document.querySelector('.feedback-tech__title'),
					t = document.querySelector('.feedback-tech__form'),
					n = e.parentNode
				window.innerWidth < 960
					? t.insertAdjacentElement('beforebegin', e)
					: n.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 960
							? t.insertAdjacentElement('beforebegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})(),
		(function () {
			if (document.querySelector('.service-trust__content')) {
				const e = document.querySelector('.service-trust__content'),
					t = document.querySelector('.mob-container'),
					n = e.parentNode
				window.innerWidth < 701
					? t.insertAdjacentElement('afterbegin', e)
					: n.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 701
							? t.insertAdjacentElement('afterbegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})(),
		(function () {
			if (document.querySelector('.ways__face-title')) {
				const e = document.querySelector('.ways__face-title'),
					t = document.querySelector('.ways__face'),
					n = e.parentNode
				window.innerWidth < 1020
					? t.insertAdjacentElement('beforebegin', e)
					: n.insertAdjacentElement('afterbegin', e),
					window.addEventListener('resize', r => {
						window.innerWidth < 1020
							? t.insertAdjacentElement('beforebegin', e)
							: n.insertAdjacentElement('afterbegin', e)
					})
			}
		})()
	document.querySelectorAll('.contacts-accordion__btn').forEach(e => {
		const t = e.nextElementSibling
		window.addEventListener('orientationchange', n => {
			console.log('q'),
				e.children[0].classList.add('accordion-cross-active'),
				Hr.to(e.children[0], {
					rotate: -45,
					background: '#f24957',
					duration: 0.5,
					ease: 'easeOut',
				}),
				t.classList.add('accor-active'),
				Hr.to(t, { height: t.scrollHeight })
		}),
			e.addEventListener('click', n => {
				if (!t.classList.contains('accor-active'))
					return (
						e.children[0].classList.add('accordion-cross-active'),
						Hr.to(e.children[0], {
							rotate: -45,
							background: '#f24957',
							duration: 0.5,
							ease: 'easeOut',
						}),
						t.classList.add('accor-active'),
						void Hr.to(t, { height: t.scrollHeight })
					)
				e.children[0].classList.remove('accordion-cross-active'),
					t.classList.remove('accor-active'),
					Hr.to(e.children[0], {
						rotate: 0,
						background: 'transparent',
						duration: 0.7,
						ease: On.easeOut,
					}),
					Hr.to(t, { height: 0, duration: 0.5, ease: On.easeOut })
			})
	})
	/*!
	 * ScrollToPlugin 3.11.5
	 * https://greensock.com
	 *
	 * @license Copyright 2008-2023, GreenSock. All rights reserved.
	 * Subject to the terms at https://greensock.com/standard-license or for
	 * Club GreenSock members, the agreement issued with that membership.
	 * @author: Jack Doyle, jack@greensock.com
	 */
	var Za,
		Ja,
		eo,
		to,
		no,
		ro,
		io,
		so,
		ao = function () {
			return 'undefined' != typeof window
		},
		oo = function () {
			return Za || (ao() && (Za = window.gsap) && Za.registerPlugin && Za)
		},
		lo = function (e) {
			return 'string' == typeof e
		},
		co = function (e) {
			return 'function' == typeof e
		},
		uo = function (e, t) {
			var n = 'x' === t ? 'Width' : 'Height',
				r = 'scroll' + n,
				i = 'client' + n
			return e === eo || e === to || e === no
				? Math.max(to[r], no[r]) - (eo['inner' + n] || to[i] || no[i])
				: e[r] - e['offset' + n]
		},
		po = function (e, t) {
			var n = 'scroll' + ('x' === t ? 'Left' : 'Top')
			return (
				e === eo &&
					(null != e.pageXOffset
						? (n = 'page' + t.toUpperCase() + 'Offset')
						: (e = null != to[n] ? to : no)),
				function () {
					return e[n]
				}
			)
		},
		fo = function (e, t) {
			if (!(e = ro(e)[0]) || !e.getBoundingClientRect)
				return (
					console.warn("scrollTo target doesn't exist. Using 0") || {
						x: 0,
						y: 0,
					}
				)
			var n = e.getBoundingClientRect(),
				r = !t || t === eo || t === no,
				i = r
					? {
							top:
								to.clientTop -
								(eo.pageYOffset || to.scrollTop || no.scrollTop || 0),
							left:
								to.clientLeft -
								(eo.pageXOffset || to.scrollLeft || no.scrollLeft || 0),
					  }
					: t.getBoundingClientRect(),
				s = { x: n.left - i.left, y: n.top - i.top }
			return !r && t && ((s.x += po(t, 'x')()), (s.y += po(t, 'y')())), s
		},
		ho = function (e, t, n, r, i) {
			return isNaN(e) || 'object' == typeof e
				? lo(e) && '=' === e.charAt(1)
					? parseFloat(e.substr(2)) * ('-' === e.charAt(0) ? -1 : 1) + r - i
					: 'max' === e
					? uo(t, n) - i
					: Math.min(uo(t, n), fo(e, t)[n] - i)
				: parseFloat(e) - i
		},
		mo = function () {
			;(Za = oo()),
				ao() &&
					Za &&
					'undefined' != typeof document &&
					document.body &&
					((eo = window),
					(no = document.body),
					(to = document.documentElement),
					(ro = Za.utils.toArray),
					Za.config({ autoKillThreshold: 7 }),
					(io = Za.config()),
					(Ja = 1))
		},
		go = {
			version: '3.11.5',
			name: 'scrollTo',
			rawVars: 1,
			register: function (e) {
				;(Za = e), mo()
			},
			init: function (e, t, n, r, i) {
				Ja || mo()
				var s = this,
					a = Za.getProperty(e, 'scrollSnapType')
				;(s.isWin = e === eo),
					(s.target = e),
					(s.tween = n),
					(t = (function (e, t, n, r) {
						if ((co(e) && (e = e(t, n, r)), 'object' != typeof e))
							return lo(e) && 'max' !== e && '=' !== e.charAt(1)
								? { x: e, y: e }
								: { y: e }
						if (e.nodeType) return { y: e, x: e }
						var i,
							s = {}
						for (i in e)
							s[i] = 'onAutoKill' !== i && co(e[i]) ? e[i](t, n, r) : e[i]
						return s
					})(t, r, e, i)),
					(s.vars = t),
					(s.autoKill = !!t.autoKill),
					(s.getX = po(e, 'x')),
					(s.getY = po(e, 'y')),
					(s.x = s.xPrev = s.getX()),
					(s.y = s.yPrev = s.getY()),
					so || (so = Za.core.globals().ScrollTrigger),
					'smooth' === Za.getProperty(e, 'scrollBehavior') &&
						Za.set(e, { scrollBehavior: 'auto' }),
					a &&
						'none' !== a &&
						((s.snap = 1),
						(s.snapInline = e.style.scrollSnapType),
						(e.style.scrollSnapType = 'none')),
					null != t.x
						? (s.add(s, 'x', s.x, ho(t.x, e, 'x', s.x, t.offsetX || 0), r, i),
						  s._props.push('scrollTo_x'))
						: (s.skipX = 1),
					null != t.y
						? (s.add(s, 'y', s.y, ho(t.y, e, 'y', s.y, t.offsetY || 0), r, i),
						  s._props.push('scrollTo_y'))
						: (s.skipY = 1)
			},
			render: function (e, t) {
				for (
					var n,
						r,
						i,
						s,
						a,
						o = t._pt,
						l = t.target,
						c = t.tween,
						u = t.autoKill,
						d = t.xPrev,
						p = t.yPrev,
						f = t.isWin,
						h = t.snap,
						m = t.snapInline;
					o;

				)
					o.r(e, o.d), (o = o._next)
				;(n = f || !t.skipX ? t.getX() : d),
					(i = (r = f || !t.skipY ? t.getY() : p) - p),
					(s = n - d),
					(a = io.autoKillThreshold),
					t.x < 0 && (t.x = 0),
					t.y < 0 && (t.y = 0),
					u &&
						(!t.skipX && (s > a || s < -a) && n < uo(l, 'x') && (t.skipX = 1),
						!t.skipY && (i > a || i < -a) && r < uo(l, 'y') && (t.skipY = 1),
						t.skipX &&
							t.skipY &&
							(c.kill(),
							t.vars.onAutoKill &&
								t.vars.onAutoKill.apply(c, t.vars.onAutoKillParams || []))),
					f
						? eo.scrollTo(t.skipX ? n : t.x, t.skipY ? r : t.y)
						: (t.skipY || (l.scrollTop = t.y), t.skipX || (l.scrollLeft = t.x)),
					!h ||
						(1 !== e && 0 !== e) ||
						((r = l.scrollTop),
						(n = l.scrollLeft),
						m
							? (l.style.scrollSnapType = m)
							: l.style.removeProperty('scroll-snap-type'),
						(l.scrollTop = r + 1),
						(l.scrollLeft = n + 1),
						(l.scrollTop = r),
						(l.scrollLeft = n)),
					(t.xPrev = t.x),
					(t.yPrev = t.y),
					so && so.update()
			},
			kill: function (e) {
				var t = 'scrollTo' === e
				;(t || 'scrollTo_x' === e) && (this.skipX = 1),
					(t || 'scrollTo_y' === e) && (this.skipY = 1)
			},
		}
	;(go.max = uo),
		(go.getOffset = fo),
		(go.buildGetter = po),
		oo() && Za.registerPlugin(go)
	const vo = 'catalog-filter__buttons-spoller--active'
	function _o(e, t) {
		Hr.to(e, { rotate: t })
	}
	function yo(e, t) {
		'turnOn' === t
			? (e.classList.add(vo), Hr.to(e, { height: e.scrollHeight }))
			: (e.classList.remove(vo), Hr.to(e, { height: 0 }))
	}
	!(function () {
		const e = document.querySelector('.select-mob'),
			t = document.querySelector('.select-mob__list')
		function n(e, n) {
			Hr.to(t, { autoAlpha: e, height: n, ease: On })
		}
		document.querySelectorAll('.select-mob__btn').forEach(e => {
			e.addEventListener('click', e => {
				const t = e.currentTarget
				if (t.classList.contains('select-mob__btn')) {
					const e = t.closest('.select-mob__list').previousElementSibling,
						r = e.querySelector('svg')
					n(0, 0), _o(r, '0'), e.classList.remove('select-mob--active')
				}
			})
		}),
			document.querySelector('.select-mob') &&
				e.addEventListener('touchstart', e => {
					const r = e.currentTarget,
						i = r.querySelector('svg')
					if (!r.classList.contains('select-mob--active'))
						return (
							r.classList.add('select-mob--active'),
							_o(i, '-180deg'),
							void n(1, t.scrollHeight)
						)
					n(0, 0), _o(i, '0'), r.classList.remove('select-mob--active')
				})
	})(),
		Hr.registerPlugin(ja, go)
	const bo = Hr.from('.header', {
		yPercent: -200,
		paused: !0,
		duration: 0.2,
	}).progress(1)
	ja.create({
		start: 'top top',
		end: 99999,
		onUpdate: e => {
			const t = document.querySelector('.select-mob__list'),
				n = document.querySelector('.svg-list-select'),
				r = document.querySelector('.select-mob'),
				i = document.querySelector('.select-mob__list')
			;-1 === e.direction
				? bo.play()
				: (document.querySelector('.select-mob') &&
						(r.classList.remove('select-mob--active'),
						(i.style.opacity = '0'),
						yo(t, 'turnOff'),
						_o(n, '0')),
				  bo.reverse())
		},
	}),
		window.addEventListener('scroll', e => {
			window.scrollY < 50
				? (document.querySelector('.header').style.backgroundColor =
						'transparent')
				: (document.querySelector('.header').style.backgroundColor = '#f1f4ff')
		})
	const wo = document.querySelector('.btn-to-top')
	document.querySelector('.btn-to-top').addEventListener('click', e => {
		Hr.to(window, { scrollTo: 0, duration: 0.1, ease: 'ease-in-out' })
	}),
		Hr.fromTo(
			wo,
			{ yPercent: -50, autoAlpha: 0 },
			{
				yPercent: 50,
				autoAlpha: 1,
				scrollTrigger: { start: 250, toggleActions: 'play none none reverse' },
			}
		),
		(function () {
			const e = document.querySelector('.header')
			let t = 0
			if (document.querySelector('.catalog__select-wrapper')) {
				const n = document.querySelector('.catalog__select-wrapper'),
					r = n.parentNode
				window.addEventListener('scroll', function () {
					let i = window.scrollY || document.documentElement.scrollTop
					i > 300 &&
						(e.insertAdjacentElement('beforeend', n),
						Hr.to(n, 0, { position: 'fixed', y: 16, marginLeft: '3rem' }))
					i < 400 &&
						(r.insertAdjacentElement('afterbegin', n),
						Hr.to(n, 0, {
							position: 'absolute',
							width: '100%',
							marginLeft: '0',
						})),
						(t = i)
				})
			}
		})(),
		(function () {
			const e = document.querySelector('.header')
			let t = 0
			if (document.querySelector('.details-select-mob')) {
				const n = document.querySelector('.details-select-mob'),
					r = n.parentNode
				window.addEventListener('scroll', function () {
					let i = window.scrollY || document.documentElement.scrollTop
					i > 1100 &&
						(e.insertAdjacentElement('beforeend', n),
						Hr.to(n, 0, { position: 'fixed', y: 16, marginLeft: '3rem' })),
						i - t < 0 &&
							i < 1100 &&
							(r.insertAdjacentElement('afterend', n),
							Hr.to(n, 0, {
								position: 'absolute',
								y: '-7rem',
								width: '100%',
								marginLeft: '0',
							})),
						(t = i)
				})
			}
		})()
	const xo = Hr.from('.catalog-filter__buttons', {
		paused: !0,
		duration: 0.2,
	}).progress(1)
	ja.create({
		trigger: '.catalog-filter__buttons',
		endTrigger: '.end-trigger',
		start: 'top top+=68',
		end: '.footer',
		pin: !0,
		scrub: 0.5,
		end: 'top bottom',
		pinSpacing: !1,
		onUpdate: e => {
			;-1 === e.direction ? xo.play() : xo.reverse()
		},
	})
	let To = !1
	const So = document.querySelector('.mob-menu-btn'),
		Co = document.querySelector('.mobile-menu'),
		Eo = document.querySelector('.header'),
		ko = So.children[0],
		Mo = So.children[1],
		Ao = So.children[2],
		Po = Hr.timeline(),
		Oo = Hr.timeline(),
		Lo = e => {
			document.body.style.overflow = e
		}
	So.addEventListener('touchstart', e => {
		Lo('hidden'),
			To
				? (Hr.to(Eo, 0.2, { backgroundColor: '' }),
				  Lo('visible'),
				  $o(),
				  Eo.classList.contains('headerShow') ||
						Hr.to(Eo, 0.2, { backgroundColor: '#f1f4ff' }),
				  Hr.to(Co, 0.2, { autoAlpha: 0 }, '-=.2'),
				  (To = !1))
				: (zo(), Do(), (To = !0))
	})
	const Do = () => {
			Oo.to(Eo, 0.2, { backgroundColor: '#2D2D2D' })
				.fromTo(
					Co,
					0.2,
					{ display: 'none', autoAlpha: 0, y: '-50%' },
					{ display: 'flex', y: '0', autoAlpha: 1 },
					'-=.2'
				)
				.fromTo(
					'.mobile-menu__item',
					{ autoAlpha: 0, stagger: 0.05 },
					{ autoAlpha: 1, stagger: 0.05 }
				)
				.fromTo(
					'.mobile-menu__phone-keeper',
					{ autoAlpha: 0, stagger: 0.05 },
					{ autoAlpha: 1, stagger: 0.05 },
					'-=.4'
				)
				.fromTo(
					'.mobile-menu__copy',
					{ autoAlpha: 0, stagger: 0.05 },
					{ autoAlpha: 1, stagger: 0.05 },
					'-=.4'
				)
		},
		zo = () => {
			Po.to(ko, 0.2, { y: 8 })
				.to(Mo, 0.2, { autoAlpha: 0, y: 0 }, '-=.2')
				.to(Ao, 0.2, { y: -8 }, '-=.2')
				.to(So, 0.4, { backgroundColor: '#fff', ease: On })
				.to(ko, { backgroundColor: '#f24957' }, '-=.5')
				.to(Mo, { backgroundColor: '#f24957' }, '-=.5')
				.to(Ao, { backgroundColor: '#f24957' }, '-=.5')
				.to(ko, 0.2, { rotate: '765px' }, '-=.4')
				.to(Ao, 0.2, { rotate: '675px' }, '-=.4')
				.to(Eo, 0.2, { backgroundColor: '#2D2D2D' })
		},
		$o = () => {
			Po.to(ko, 0.2, { rotate: '90px' })
				.to(Ao, 0.2, { rotate: '90px' }, '-=.2')
				.to(So, 0.4, { backgroundColor: '#f24957', ease: On })
				.to(ko, { backgroundColor: '#fff' }, '-=.5')
				.to(Mo, { backgroundColor: '#fff' }, '-=.5')
				.to(Ao, { backgroundColor: '#fff' }, '-=.5')
				.to(Mo, 0.2, { autoAlpha: 1, y: 0 }, '-=.2')
				.to(ko, 0.2, { y: 0 }, '-=.2')
				.to(Ao, 0.2, { y: 0 }, '-=.2')
				.to(Eo, 0.2, { backgroundColor: '#f1f4ff' })
		}
	Hr.timeline('')
	window.addEventListener('DOMContentLoaded', e => {
		Hr.to('.site-mini-load', { autoAlpha: 1, transition: 0.5, ease: On })
	}),
		window.addEventListener('load', e => {
			Hr.to('.site', { autoAlpha: 1, transition: 1, ease: On })
			const t = Hr.timeline(),
				n = Hr.timeline()
			t
				.from('.header-item', { y: -100, autoAlpha: 1, ease: On })
				.from(
					'.header__menu-item',
					{ y: -100, autoAlpha: 1, stagger: 0.1, ease: On },
					'-=.5'
				),
				document.querySelector('.main-part__title') &&
					(n
						.from('.main-part__title', {
							autoAlpha: 0,
							x: -30,
							delay: 0.7,
							ease: On,
						})
						.from(
							'.main-part__subtitle',
							{ autoAlpha: 0, x: -30, ease: On },
							'-=.2'
						)
						.from(
							'.main-part__leave-bid',
							{ autoAlpha: 0, y: 30, ease: On },
							'-=.2'
						)
						.from(
							'.swiper-slide',
							1.5,
							{ autoAlpha: 0, x: '50%', ease: 'elastic.out(3, 1)' },
							'-=.2.5'
						)
						.from(
							'.index-swiper-nav__keeper',
							{ autoAlpha: 0, x: '50%', ease: On },
							'-=2.5'
						),
					Hr.from('.how-buy__title-link', {
						scrollTrigger: {
							trigger: '.how-buy__title-link',
							start: 'bottom bottom-=20%',
							end: '+=300',
						},
						autoAlpha: 0,
						yPercent: 30,
					}),
					Hr.from('.how-buy__item', {
						scrollTrigger: {
							trigger: '.how-buy__title-link',
							start: 'bottom bottom-=20%',
							end: '+=300',
						},
						autoAlpha: 0,
						xPercent: -30,
						stagger: 0.5,
					}),
					Hr.from('.index-about__bg', 1, {
						scrollTrigger: {
							trigger: '.index-about',
							start: 'top center',
							end: '+=300',
						},
						autoAlpha: 0,
					}),
					Hr.from('.index-about__content', {
						scrollTrigger: {
							trigger: '.index-about__bg',
							start: 'bottom bottom',
							end: '+=300',
						},
						autoAlpha: 0,
						y: '30%',
					}),
					Hr.from('.about__number-run', {
						scrollTrigger: {
							trigger: '.index-about__bg',
							start: 'bottom bottom+=40%',
							end: '+=300',
							onEnter: () => {
								if (
									document.querySelectorAll('.about__number-run').length > 0
								) {
									const e = document.querySelectorAll('.about__number-run')
									function t(e, t, n, r) {
										let i = 0,
											s = setInterval(() => {
												;(i += n),
													i === t && clearInterval(s),
													(e.textContent = i)
											}, r)
									}
									let n = e[0],
										r = e[1],
										i = e[2]
									t(n, +n.dataset.numberrun, 20, 5),
										t(r, +r.dataset.numberrun, 10, 5),
										t(i, +i.dataset.numberrun, 1, 400)
								}
							},
						},
					}),
					Hr.from('.benefit__item', {
						scrollTrigger: {
							trigger: '.index-about-numbers',
							start: 'bottom bottom-=40%',
							end: '+=300',
						},
						autoAlpha: 0,
						xPercent: -30,
						stagger: 0.5,
					}))
		})
	const Io = Hr.timeline()
	document.querySelectorAll('.feedback__input').forEach(e => {
		e.onfocus = e => {
			const t = e.target.nextElementSibling
			Io.to(t, { top: 0, left: 16, duration: 0.2, fontSize: 14 })
		}
	})
	if (
		(Hr.registerPlugin(ja),
		(function () {
			const e = window.localStorage,
				t = 'turnOn',
				n = 'turnOff',
				r = '-180deg',
				i = window.innerWidth > 1181,
				s = document.querySelectorAll('.catalog-filter__buttons-item-btn'),
				a = document.querySelectorAll('.catalog-filter__contents-item'),
				o = document.querySelectorAll('.catalog-filter__buttons-spoller'),
				l = document.querySelectorAll('.select-mob__btn')
			let c = document.querySelector('.select-mob span')
			document.querySelectorAll('.catalog-filter__spoller-content')
			const u = document.querySelectorAll('.catalog-filter__spoller'),
				d = 'catalog-filter__btn--active',
				p = 'select-mob__item--active'
			//! Start of workplace
			if (document.querySelector('.catalog-filter')) {
				//! Functions
				function f(e, t) {
					e.forEach(n => {
						n.addEventListener('click', n => {
							n &&
								document.documentElement.scrollTop > 300 &&
								n &&
								window.scrollTo({ top: 0, behavior: 'instant' }),
								ja.refresh(!0),
								e.forEach(e => e.classList.remove(t)),
								h(n)
						})
					})
				}
				function h(e) {
					a.forEach(e => (e.style.display = 'none'))
					const t = e.currentTarget
					i ? m(t) : g(t)
				}
				function m(e) {
					if (null != e) {
						e.classList.add(d)
						const n = e.closest('.catalog-filter__spoller'),
							r = e.dataset.catalog
						if ((n && yo(n, t), null !== n)) {
							v(r, n.previousElementSibling.querySelector('svg'))
						}
						v(r)
					}
				}
				function g(e) {
					if (e) {
						e.classList.add(p)
						const t = e.dataset.catalogmob,
							n = e.textContent
						;(c.textContent = n), v(t)
					}
				}
				function v(e, t) {
					;(document.querySelector(`#${e}`).style.display = 'grid'), _o(t, r)
				}
				function _(t, n) {
					if (n) {
						if (i) {
							m(document.querySelector(`[data-catalog='${n}']`))
						} else {
							g(document.querySelector(`[data-catalogmob='${n}']`))
						}
						e.clear()
					} else
						!(function () {
							for (let e = 0; e < 1; e++) {
								const n = t[e]
								i ? m(n) : g(n)
							}
						})()
				}
				//! WorkPlace
				f(i ? s : l, i ? d : p),
					o.forEach(e => {
						e.addEventListener('click', e => {
							const i = e.currentTarget,
								s = i.nextElementSibling,
								a = '0px' === window.getComputedStyle(s).height,
								o = i.querySelector('svg')
							u.forEach(e => {
								e !== s &&
									(e.parentNode.querySelectorAll('svg').forEach(e => _o(e, 0)),
									yo(e, n))
							}),
								a ? (_o(o, r), yo(s, t)) : (_o(o, 0), yo(s, n))
						})
					}),
					_(i ? s : l, e.getItem(1))
			}
			document.querySelectorAll('.catalog-filter__item').forEach(e => {
				e.addEventListener('click', e => {
					const t = e.currentTarget.closest('.catalog-filter__contents-item').id
					window.localStorage.setItem(1, t)
				})
			})
		})(),
		document.querySelector('.detail'))
	) {
		const ec = document.querySelectorAll('.spoller-content'),
			tc = document.querySelectorAll('.detail-content-mob h2'),
			nc = document.querySelector('.table-headline__td-first'),
			rc = 'on',
			ic = 'off'
		function sc(e, t, n) {
			const r = e.parentNode.removeChild(e)
			t.insertAdjacentElement(n, r)
		}
		function ac(e) {
			e == rc
				? ((nc.textContent = ''),
				  tc.forEach(e => {
						for (let t = ec.length - 1; t >= 0; t--) {
							const n = ec[t]
							console.log(n.dataset.mobdetailx),
								console.log(e.dataset.mobdetail),
								n.dataset.mobdetail === e.dataset.mobdetail &&
									sc(n, e, 'afterend')
						}
				  }))
				: ((nc.textContent = 'Характеристики'),
				  tc.forEach(e => {
						for (let e = ec.length - 1; e >= 0; e--) {
							const t = ec[e],
								n = t.dataset.mobdetail,
								r = document.querySelector(`#${n}`)
							n === r.id && sc(t, r, 'beforeend')
						}
				  }))
		}
		window.addEventListener('resize', e => {
			const t = e.currentTarget.innerWidth
			t < 600 && ac(rc), t > 600 && ac(ic)
		}),
			window.innerWidth <= 600 && ac(rc)
	}
	if (document.querySelector('.detailSpollerScroll')) {
		document.querySelectorAll('.detailSpollerScroll').forEach(e => {
			e.addEventListener('click', e => {
				const t = e.currentTarget.dataset.detailspoller
				document
					.querySelector(`#${t}`)
					.scrollIntoView({ block: 'feedback' === t ? 'start' : 'center' })
			})
		})
	}
	function Bo(e) {
		return (
			null !== e &&
			'object' == typeof e &&
			'constructor' in e &&
			e.constructor === Object
		)
	}
	function qo(e = {}, t = {}) {
		Object.keys(t).forEach(n => {
			void 0 === e[n]
				? (e[n] = t[n])
				: Bo(t[n]) && Bo(e[n]) && Object.keys(t[n]).length > 0 && qo(e[n], t[n])
		})
	}
	const Ro = {
		body: {},
		addEventListener() {},
		removeEventListener() {},
		activeElement: { blur() {}, nodeName: '' },
		querySelector: () => null,
		querySelectorAll: () => [],
		getElementById: () => null,
		createEvent: () => ({ initEvent() {} }),
		createElement: () => ({
			children: [],
			childNodes: [],
			style: {},
			setAttribute() {},
			getElementsByTagName: () => [],
		}),
		createElementNS: () => ({}),
		importNode: () => null,
		location: {
			hash: '',
			host: '',
			hostname: '',
			href: '',
			origin: '',
			pathname: '',
			protocol: '',
			search: '',
		},
	}
	function Fo() {
		const e = 'undefined' != typeof document ? document : {}
		return qo(e, Ro), e
	}
	const No = {
		document: Ro,
		navigator: { userAgent: '' },
		location: {
			hash: '',
			host: '',
			hostname: '',
			href: '',
			origin: '',
			pathname: '',
			protocol: '',
			search: '',
		},
		history: { replaceState() {}, pushState() {}, go() {}, back() {} },
		CustomEvent: function () {
			return this
		},
		addEventListener() {},
		removeEventListener() {},
		getComputedStyle: () => ({ getPropertyValue: () => '' }),
		Image() {},
		Date() {},
		screen: {},
		setTimeout() {},
		clearTimeout() {},
		matchMedia: () => ({}),
		requestAnimationFrame: e =>
			'undefined' == typeof setTimeout ? (e(), null) : setTimeout(e, 0),
		cancelAnimationFrame(e) {
			'undefined' != typeof setTimeout && clearTimeout(e)
		},
	}
	function jo() {
		const e = 'undefined' != typeof window ? window : {}
		return qo(e, No), e
	}
	class Go extends Array {
		constructor(e) {
			'number' == typeof e
				? super(e)
				: (super(...(e || [])),
				  (function (e) {
						const t = e.__proto__
						Object.defineProperty(e, '__proto__', {
							get: () => t,
							set(e) {
								t.__proto__ = e
							},
						})
				  })(this))
		}
	}
	function Yo(e = []) {
		const t = []
		return (
			e.forEach(e => {
				Array.isArray(e) ? t.push(...Yo(e)) : t.push(e)
			}),
			t
		)
	}
	function Vo(e, t) {
		return Array.prototype.filter.call(e, t)
	}
	function Ho(e, t) {
		const n = jo(),
			r = Fo()
		let i = []
		if (!t && e instanceof Go) return e
		if (!e) return new Go(i)
		if ('string' == typeof e) {
			const n = e.trim()
			if (n.indexOf('<') >= 0 && n.indexOf('>') >= 0) {
				let e = 'div'
				0 === n.indexOf('<li') && (e = 'ul'),
					0 === n.indexOf('<tr') && (e = 'tbody'),
					(0 !== n.indexOf('<td') && 0 !== n.indexOf('<th')) || (e = 'tr'),
					0 === n.indexOf('<tbody') && (e = 'table'),
					0 === n.indexOf('<option') && (e = 'select')
				const t = r.createElement(e)
				t.innerHTML = n
				for (let e = 0; e < t.childNodes.length; e += 1) i.push(t.childNodes[e])
			} else
				i = (function (e, t) {
					if ('string' != typeof e) return [e]
					const n = [],
						r = t.querySelectorAll(e)
					for (let e = 0; e < r.length; e += 1) n.push(r[e])
					return n
				})(e.trim(), t || r)
		} else if (e.nodeType || e === n || e === r) i.push(e)
		else if (Array.isArray(e)) {
			if (e instanceof Go) return e
			i = e
		}
		return new Go(
			(function (e) {
				const t = []
				for (let n = 0; n < e.length; n += 1)
					-1 === t.indexOf(e[n]) && t.push(e[n])
				return t
			})(i)
		)
	}
	Ho.fn = Go.prototype
	const Wo = 'resize scroll'.split(' ')
	function Xo(e) {
		return function (...t) {
			if (void 0 === t[0]) {
				for (let t = 0; t < this.length; t += 1)
					Wo.indexOf(e) < 0 &&
						(e in this[t] ? this[t][e]() : Ho(this[t]).trigger(e))
				return this
			}
			return this.on(e, ...t)
		}
	}
	Xo('click'),
		Xo('blur'),
		Xo('focus'),
		Xo('focusin'),
		Xo('focusout'),
		Xo('keyup'),
		Xo('keydown'),
		Xo('keypress'),
		Xo('submit'),
		Xo('change'),
		Xo('mousedown'),
		Xo('mousemove'),
		Xo('mouseup'),
		Xo('mouseenter'),
		Xo('mouseleave'),
		Xo('mouseout'),
		Xo('mouseover'),
		Xo('touchstart'),
		Xo('touchend'),
		Xo('touchmove'),
		Xo('resize'),
		Xo('scroll')
	const Uo = {
		addClass: function (...e) {
			const t = Yo(e.map(e => e.split(' ')))
			return (
				this.forEach(e => {
					e.classList.add(...t)
				}),
				this
			)
		},
		removeClass: function (...e) {
			const t = Yo(e.map(e => e.split(' ')))
			return (
				this.forEach(e => {
					e.classList.remove(...t)
				}),
				this
			)
		},
		hasClass: function (...e) {
			const t = Yo(e.map(e => e.split(' ')))
			return (
				Vo(this, e => t.filter(t => e.classList.contains(t)).length > 0)
					.length > 0
			)
		},
		toggleClass: function (...e) {
			const t = Yo(e.map(e => e.split(' ')))
			this.forEach(e => {
				t.forEach(t => {
					e.classList.toggle(t)
				})
			})
		},
		attr: function (e, t) {
			if (1 === arguments.length && 'string' == typeof e)
				return this[0] ? this[0].getAttribute(e) : void 0
			for (let n = 0; n < this.length; n += 1)
				if (2 === arguments.length) this[n].setAttribute(e, t)
				else
					for (const t in e) (this[n][t] = e[t]), this[n].setAttribute(t, e[t])
			return this
		},
		removeAttr: function (e) {
			for (let t = 0; t < this.length; t += 1) this[t].removeAttribute(e)
			return this
		},
		transform: function (e) {
			for (let t = 0; t < this.length; t += 1) this[t].style.transform = e
			return this
		},
		transition: function (e) {
			for (let t = 0; t < this.length; t += 1)
				this[t].style.transitionDuration = 'string' != typeof e ? `${e}ms` : e
			return this
		},
		on: function (...e) {
			let [t, n, r, i] = e
			function s(e) {
				const t = e.target
				if (!t) return
				const i = e.target.dom7EventData || []
				if ((i.indexOf(e) < 0 && i.unshift(e), Ho(t).is(n))) r.apply(t, i)
				else {
					const e = Ho(t).parents()
					for (let t = 0; t < e.length; t += 1)
						Ho(e[t]).is(n) && r.apply(e[t], i)
				}
			}
			function a(e) {
				const t = (e && e.target && e.target.dom7EventData) || []
				t.indexOf(e) < 0 && t.unshift(e), r.apply(this, t)
			}
			'function' == typeof e[1] && (([t, r, i] = e), (n = void 0)),
				i || (i = !1)
			const o = t.split(' ')
			let l
			for (let e = 0; e < this.length; e += 1) {
				const t = this[e]
				if (n)
					for (l = 0; l < o.length; l += 1) {
						const e = o[l]
						t.dom7LiveListeners || (t.dom7LiveListeners = {}),
							t.dom7LiveListeners[e] || (t.dom7LiveListeners[e] = []),
							t.dom7LiveListeners[e].push({ listener: r, proxyListener: s }),
							t.addEventListener(e, s, i)
					}
				else
					for (l = 0; l < o.length; l += 1) {
						const e = o[l]
						t.dom7Listeners || (t.dom7Listeners = {}),
							t.dom7Listeners[e] || (t.dom7Listeners[e] = []),
							t.dom7Listeners[e].push({ listener: r, proxyListener: a }),
							t.addEventListener(e, a, i)
					}
			}
			return this
		},
		off: function (...e) {
			let [t, n, r, i] = e
			'function' == typeof e[1] && (([t, r, i] = e), (n = void 0)),
				i || (i = !1)
			const s = t.split(' ')
			for (let e = 0; e < s.length; e += 1) {
				const t = s[e]
				for (let e = 0; e < this.length; e += 1) {
					const s = this[e]
					let a
					if (
						(!n && s.dom7Listeners
							? (a = s.dom7Listeners[t])
							: n && s.dom7LiveListeners && (a = s.dom7LiveListeners[t]),
						a && a.length)
					)
						for (let e = a.length - 1; e >= 0; e -= 1) {
							const n = a[e]
							;(r && n.listener === r) ||
							(r &&
								n.listener &&
								n.listener.dom7proxy &&
								n.listener.dom7proxy === r)
								? (s.removeEventListener(t, n.proxyListener, i), a.splice(e, 1))
								: r ||
								  (s.removeEventListener(t, n.proxyListener, i), a.splice(e, 1))
						}
				}
			}
			return this
		},
		trigger: function (...e) {
			const t = jo(),
				n = e[0].split(' '),
				r = e[1]
			for (let i = 0; i < n.length; i += 1) {
				const s = n[i]
				for (let n = 0; n < this.length; n += 1) {
					const i = this[n]
					if (t.CustomEvent) {
						const n = new t.CustomEvent(s, {
							detail: r,
							bubbles: !0,
							cancelable: !0,
						})
						;(i.dom7EventData = e.filter((e, t) => t > 0)),
							i.dispatchEvent(n),
							(i.dom7EventData = []),
							delete i.dom7EventData
					}
				}
			}
			return this
		},
		transitionEnd: function (e) {
			const t = this
			return (
				e &&
					t.on('transitionend', function n(r) {
						r.target === this && (e.call(this, r), t.off('transitionend', n))
					}),
				this
			)
		},
		outerWidth: function (e) {
			if (this.length > 0) {
				if (e) {
					const e = this.styles()
					return (
						this[0].offsetWidth +
						parseFloat(e.getPropertyValue('margin-right')) +
						parseFloat(e.getPropertyValue('margin-left'))
					)
				}
				return this[0].offsetWidth
			}
			return null
		},
		outerHeight: function (e) {
			if (this.length > 0) {
				if (e) {
					const e = this.styles()
					return (
						this[0].offsetHeight +
						parseFloat(e.getPropertyValue('margin-top')) +
						parseFloat(e.getPropertyValue('margin-bottom'))
					)
				}
				return this[0].offsetHeight
			}
			return null
		},
		styles: function () {
			const e = jo()
			return this[0] ? e.getComputedStyle(this[0], null) : {}
		},
		offset: function () {
			if (this.length > 0) {
				const e = jo(),
					t = Fo(),
					n = this[0],
					r = n.getBoundingClientRect(),
					i = t.body,
					s = n.clientTop || i.clientTop || 0,
					a = n.clientLeft || i.clientLeft || 0,
					o = n === e ? e.scrollY : n.scrollTop,
					l = n === e ? e.scrollX : n.scrollLeft
				return { top: r.top + o - s, left: r.left + l - a }
			}
			return null
		},
		css: function (e, t) {
			const n = jo()
			let r
			if (1 === arguments.length) {
				if ('string' != typeof e) {
					for (r = 0; r < this.length; r += 1)
						for (const t in e) this[r].style[t] = e[t]
					return this
				}
				if (this[0])
					return n.getComputedStyle(this[0], null).getPropertyValue(e)
			}
			if (2 === arguments.length && 'string' == typeof e) {
				for (r = 0; r < this.length; r += 1) this[r].style[e] = t
				return this
			}
			return this
		},
		each: function (e) {
			return e
				? (this.forEach((t, n) => {
						e.apply(t, [t, n])
				  }),
				  this)
				: this
		},
		html: function (e) {
			if (void 0 === e) return this[0] ? this[0].innerHTML : null
			for (let t = 0; t < this.length; t += 1) this[t].innerHTML = e
			return this
		},
		text: function (e) {
			if (void 0 === e) return this[0] ? this[0].textContent.trim() : null
			for (let t = 0; t < this.length; t += 1) this[t].textContent = e
			return this
		},
		is: function (e) {
			const t = jo(),
				n = Fo(),
				r = this[0]
			let i, s
			if (!r || void 0 === e) return !1
			if ('string' == typeof e) {
				if (r.matches) return r.matches(e)
				if (r.webkitMatchesSelector) return r.webkitMatchesSelector(e)
				if (r.msMatchesSelector) return r.msMatchesSelector(e)
				for (i = Ho(e), s = 0; s < i.length; s += 1) if (i[s] === r) return !0
				return !1
			}
			if (e === n) return r === n
			if (e === t) return r === t
			if (e.nodeType || e instanceof Go) {
				for (i = e.nodeType ? [e] : e, s = 0; s < i.length; s += 1)
					if (i[s] === r) return !0
				return !1
			}
			return !1
		},
		index: function () {
			let e,
				t = this[0]
			if (t) {
				for (e = 0; null !== (t = t.previousSibling); )
					1 === t.nodeType && (e += 1)
				return e
			}
		},
		eq: function (e) {
			if (void 0 === e) return this
			const t = this.length
			if (e > t - 1) return Ho([])
			if (e < 0) {
				const n = t + e
				return Ho(n < 0 ? [] : [this[n]])
			}
			return Ho([this[e]])
		},
		append: function (...e) {
			let t
			const n = Fo()
			for (let r = 0; r < e.length; r += 1) {
				t = e[r]
				for (let e = 0; e < this.length; e += 1)
					if ('string' == typeof t) {
						const r = n.createElement('div')
						for (r.innerHTML = t; r.firstChild; )
							this[e].appendChild(r.firstChild)
					} else if (t instanceof Go)
						for (let n = 0; n < t.length; n += 1) this[e].appendChild(t[n])
					else this[e].appendChild(t)
			}
			return this
		},
		prepend: function (e) {
			const t = Fo()
			let n, r
			for (n = 0; n < this.length; n += 1)
				if ('string' == typeof e) {
					const i = t.createElement('div')
					for (i.innerHTML = e, r = i.childNodes.length - 1; r >= 0; r -= 1)
						this[n].insertBefore(i.childNodes[r], this[n].childNodes[0])
				} else if (e instanceof Go)
					for (r = 0; r < e.length; r += 1)
						this[n].insertBefore(e[r], this[n].childNodes[0])
				else this[n].insertBefore(e, this[n].childNodes[0])
			return this
		},
		next: function (e) {
			return this.length > 0
				? e
					? this[0].nextElementSibling && Ho(this[0].nextElementSibling).is(e)
						? Ho([this[0].nextElementSibling])
						: Ho([])
					: this[0].nextElementSibling
					? Ho([this[0].nextElementSibling])
					: Ho([])
				: Ho([])
		},
		nextAll: function (e) {
			const t = []
			let n = this[0]
			if (!n) return Ho([])
			for (; n.nextElementSibling; ) {
				const r = n.nextElementSibling
				e ? Ho(r).is(e) && t.push(r) : t.push(r), (n = r)
			}
			return Ho(t)
		},
		prev: function (e) {
			if (this.length > 0) {
				const t = this[0]
				return e
					? t.previousElementSibling && Ho(t.previousElementSibling).is(e)
						? Ho([t.previousElementSibling])
						: Ho([])
					: t.previousElementSibling
					? Ho([t.previousElementSibling])
					: Ho([])
			}
			return Ho([])
		},
		prevAll: function (e) {
			const t = []
			let n = this[0]
			if (!n) return Ho([])
			for (; n.previousElementSibling; ) {
				const r = n.previousElementSibling
				e ? Ho(r).is(e) && t.push(r) : t.push(r), (n = r)
			}
			return Ho(t)
		},
		parent: function (e) {
			const t = []
			for (let n = 0; n < this.length; n += 1)
				null !== this[n].parentNode &&
					(e
						? Ho(this[n].parentNode).is(e) && t.push(this[n].parentNode)
						: t.push(this[n].parentNode))
			return Ho(t)
		},
		parents: function (e) {
			const t = []
			for (let n = 0; n < this.length; n += 1) {
				let r = this[n].parentNode
				for (; r; ) e ? Ho(r).is(e) && t.push(r) : t.push(r), (r = r.parentNode)
			}
			return Ho(t)
		},
		closest: function (e) {
			let t = this
			return void 0 === e ? Ho([]) : (t.is(e) || (t = t.parents(e).eq(0)), t)
		},
		find: function (e) {
			const t = []
			for (let n = 0; n < this.length; n += 1) {
				const r = this[n].querySelectorAll(e)
				for (let e = 0; e < r.length; e += 1) t.push(r[e])
			}
			return Ho(t)
		},
		children: function (e) {
			const t = []
			for (let n = 0; n < this.length; n += 1) {
				const r = this[n].children
				for (let n = 0; n < r.length; n += 1)
					(e && !Ho(r[n]).is(e)) || t.push(r[n])
			}
			return Ho(t)
		},
		filter: function (e) {
			return Ho(Vo(this, e))
		},
		remove: function () {
			for (let e = 0; e < this.length; e += 1)
				this[e].parentNode && this[e].parentNode.removeChild(this[e])
			return this
		},
	}
	Object.keys(Uo).forEach(e => {
		Object.defineProperty(Ho.fn, e, { value: Uo[e], writable: !0 })
	})
	const Ko = Ho
	function Qo(e, t = 0) {
		return setTimeout(e, t)
	}
	function Zo() {
		return Date.now()
	}
	function Jo(e, t = 'x') {
		const n = jo()
		let r, i, s
		const a = (function (e) {
			const t = jo()
			let n
			return (
				t.getComputedStyle && (n = t.getComputedStyle(e, null)),
				!n && e.currentStyle && (n = e.currentStyle),
				n || (n = e.style),
				n
			)
		})(e)
		return (
			n.WebKitCSSMatrix
				? ((i = a.transform || a.webkitTransform),
				  i.split(',').length > 6 &&
						(i = i
							.split(', ')
							.map(e => e.replace(',', '.'))
							.join(', ')),
				  (s = new n.WebKitCSSMatrix('none' === i ? '' : i)))
				: ((s =
						a.MozTransform ||
						a.OTransform ||
						a.MsTransform ||
						a.msTransform ||
						a.transform ||
						a
							.getPropertyValue('transform')
							.replace('translate(', 'matrix(1, 0, 0, 1,')),
				  (r = s.toString().split(','))),
			'x' === t &&
				(i = n.WebKitCSSMatrix
					? s.m41
					: 16 === r.length
					? parseFloat(r[12])
					: parseFloat(r[4])),
			'y' === t &&
				(i = n.WebKitCSSMatrix
					? s.m42
					: 16 === r.length
					? parseFloat(r[13])
					: parseFloat(r[5])),
			i || 0
		)
	}
	function el(e) {
		return (
			'object' == typeof e &&
			null !== e &&
			e.constructor &&
			'Object' === Object.prototype.toString.call(e).slice(8, -1)
		)
	}
	function tl(...e) {
		const t = Object(e[0]),
			n = ['__proto__', 'constructor', 'prototype']
		for (let i = 1; i < e.length; i += 1) {
			const s = e[i]
			if (
				null != s &&
				((r = s),
				!('undefined' != typeof window && void 0 !== window.HTMLElement
					? r instanceof HTMLElement
					: r && (1 === r.nodeType || 11 === r.nodeType)))
			) {
				const e = Object.keys(Object(s)).filter(e => n.indexOf(e) < 0)
				for (let n = 0, r = e.length; n < r; n += 1) {
					const r = e[n],
						i = Object.getOwnPropertyDescriptor(s, r)
					void 0 !== i &&
						i.enumerable &&
						(el(t[r]) && el(s[r])
							? s[r].__swiper__
								? (t[r] = s[r])
								: tl(t[r], s[r])
							: !el(t[r]) && el(s[r])
							? ((t[r] = {}), s[r].__swiper__ ? (t[r] = s[r]) : tl(t[r], s[r]))
							: (t[r] = s[r]))
				}
			}
		}
		var r
		return t
	}
	function nl(e, t, n) {
		e.style.setProperty(t, n)
	}
	function rl({ swiper: e, targetPosition: t, side: n }) {
		const r = jo(),
			i = -e.translate
		let s,
			a = null
		const o = e.params.speed
		;(e.wrapperEl.style.scrollSnapType = 'none'),
			r.cancelAnimationFrame(e.cssModeFrameID)
		const l = t > i ? 'next' : 'prev',
			c = (e, t) => ('next' === l && e >= t) || ('prev' === l && e <= t),
			u = () => {
				;(s = new Date().getTime()), null === a && (a = s)
				const l = Math.max(Math.min((s - a) / o, 1), 0),
					d = 0.5 - Math.cos(l * Math.PI) / 2
				let p = i + d * (t - i)
				if ((c(p, t) && (p = t), e.wrapperEl.scrollTo({ [n]: p }), c(p, t)))
					return (
						(e.wrapperEl.style.overflow = 'hidden'),
						(e.wrapperEl.style.scrollSnapType = ''),
						setTimeout(() => {
							;(e.wrapperEl.style.overflow = ''),
								e.wrapperEl.scrollTo({ [n]: p })
						}),
						void r.cancelAnimationFrame(e.cssModeFrameID)
					)
				e.cssModeFrameID = r.requestAnimationFrame(u)
			}
		u()
	}
	let il, sl, al
	function ol() {
		return (
			il ||
				(il = (function () {
					const e = jo(),
						t = Fo()
					return {
						smoothScroll:
							t.documentElement && 'scrollBehavior' in t.documentElement.style,
						touch: !!(
							'ontouchstart' in e ||
							(e.DocumentTouch && t instanceof e.DocumentTouch)
						),
						passiveListener: (function () {
							let t = !1
							try {
								const n = Object.defineProperty({}, 'passive', {
									get() {
										t = !0
									},
								})
								e.addEventListener('testPassiveListener', null, n)
							} catch (e) {}
							return t
						})(),
						gestures: 'ongesturestart' in e,
					}
				})()),
			il
		)
	}
	function ll(e = {}) {
		return (
			sl ||
				(sl = (function ({ userAgent: e } = {}) {
					const t = ol(),
						n = jo(),
						r = n.navigator.platform,
						i = e || n.navigator.userAgent,
						s = { ios: !1, android: !1 },
						a = n.screen.width,
						o = n.screen.height,
						l = i.match(/(Android);?[\s\/]+([\d.]+)?/)
					let c = i.match(/(iPad).*OS\s([\d_]+)/)
					const u = i.match(/(iPod)(.*OS\s([\d_]+))?/),
						d = !c && i.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
						p = 'Win32' === r
					let f = 'MacIntel' === r
					return (
						!c &&
							f &&
							t.touch &&
							[
								'1024x1366',
								'1366x1024',
								'834x1194',
								'1194x834',
								'834x1112',
								'1112x834',
								'768x1024',
								'1024x768',
								'820x1180',
								'1180x820',
								'810x1080',
								'1080x810',
							].indexOf(`${a}x${o}`) >= 0 &&
							((c = i.match(/(Version)\/([\d.]+)/)),
							c || (c = [0, 1, '13_0_0']),
							(f = !1)),
						l && !p && ((s.os = 'android'), (s.android = !0)),
						(c || d || u) && ((s.os = 'ios'), (s.ios = !0)),
						s
					)
				})(e)),
			sl
		)
	}
	function cl() {
		return (
			al ||
				(al = (function () {
					const e = jo()
					return {
						isSafari: (function () {
							const t = e.navigator.userAgent.toLowerCase()
							return (
								t.indexOf('safari') >= 0 &&
								t.indexOf('chrome') < 0 &&
								t.indexOf('android') < 0
							)
						})(),
						isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(
							e.navigator.userAgent
						),
					}
				})()),
			al
		)
	}
	const ul = {
		on(e, t, n) {
			const r = this
			if (!r.eventsListeners || r.destroyed) return r
			if ('function' != typeof t) return r
			const i = n ? 'unshift' : 'push'
			return (
				e.split(' ').forEach(e => {
					r.eventsListeners[e] || (r.eventsListeners[e] = []),
						r.eventsListeners[e][i](t)
				}),
				r
			)
		},
		once(e, t, n) {
			const r = this
			if (!r.eventsListeners || r.destroyed) return r
			if ('function' != typeof t) return r
			function i(...n) {
				r.off(e, i), i.__emitterProxy && delete i.__emitterProxy, t.apply(r, n)
			}
			return (i.__emitterProxy = t), r.on(e, i, n)
		},
		onAny(e, t) {
			const n = this
			if (!n.eventsListeners || n.destroyed) return n
			if ('function' != typeof e) return n
			const r = t ? 'unshift' : 'push'
			return (
				n.eventsAnyListeners.indexOf(e) < 0 && n.eventsAnyListeners[r](e), n
			)
		},
		offAny(e) {
			const t = this
			if (!t.eventsListeners || t.destroyed) return t
			if (!t.eventsAnyListeners) return t
			const n = t.eventsAnyListeners.indexOf(e)
			return n >= 0 && t.eventsAnyListeners.splice(n, 1), t
		},
		off(e, t) {
			const n = this
			return !n.eventsListeners || n.destroyed
				? n
				: n.eventsListeners
				? (e.split(' ').forEach(e => {
						void 0 === t
							? (n.eventsListeners[e] = [])
							: n.eventsListeners[e] &&
							  n.eventsListeners[e].forEach((r, i) => {
									;(r === t || (r.__emitterProxy && r.__emitterProxy === t)) &&
										n.eventsListeners[e].splice(i, 1)
							  })
				  }),
				  n)
				: n
		},
		emit(...e) {
			const t = this
			if (!t.eventsListeners || t.destroyed) return t
			if (!t.eventsListeners) return t
			let n, r, i
			'string' == typeof e[0] || Array.isArray(e[0])
				? ((n = e[0]), (r = e.slice(1, e.length)), (i = t))
				: ((n = e[0].events), (r = e[0].data), (i = e[0].context || t)),
				r.unshift(i)
			return (
				(Array.isArray(n) ? n : n.split(' ')).forEach(e => {
					t.eventsAnyListeners &&
						t.eventsAnyListeners.length &&
						t.eventsAnyListeners.forEach(t => {
							t.apply(i, [e, ...r])
						}),
						t.eventsListeners &&
							t.eventsListeners[e] &&
							t.eventsListeners[e].forEach(e => {
								e.apply(i, r)
							})
				}),
				t
			)
		},
	}
	const dl = {
		updateSize: function () {
			const e = this
			let t, n
			const r = e.$el
			;(t =
				void 0 !== e.params.width && null !== e.params.width
					? e.params.width
					: r[0].clientWidth),
				(n =
					void 0 !== e.params.height && null !== e.params.height
						? e.params.height
						: r[0].clientHeight),
				(0 === t && e.isHorizontal()) ||
					(0 === n && e.isVertical()) ||
					((t =
						t -
						parseInt(r.css('padding-left') || 0, 10) -
						parseInt(r.css('padding-right') || 0, 10)),
					(n =
						n -
						parseInt(r.css('padding-top') || 0, 10) -
						parseInt(r.css('padding-bottom') || 0, 10)),
					Number.isNaN(t) && (t = 0),
					Number.isNaN(n) && (n = 0),
					Object.assign(e, {
						width: t,
						height: n,
						size: e.isHorizontal() ? t : n,
					}))
		},
		updateSlides: function () {
			const e = this
			function t(t) {
				return e.isHorizontal()
					? t
					: {
							width: 'height',
							'margin-top': 'margin-left',
							'margin-bottom ': 'margin-right',
							'margin-left': 'margin-top',
							'margin-right': 'margin-bottom',
							'padding-left': 'padding-top',
							'padding-right': 'padding-bottom',
							marginRight: 'marginBottom',
					  }[t]
			}
			function n(e, n) {
				return parseFloat(e.getPropertyValue(t(n)) || 0)
			}
			const r = e.params,
				{ $wrapperEl: i, size: s, rtlTranslate: a, wrongRTL: o } = e,
				l = e.virtual && r.virtual.enabled,
				c = l ? e.virtual.slides.length : e.slides.length,
				u = i.children(`.${e.params.slideClass}`),
				d = l ? e.virtual.slides.length : u.length
			let p = []
			const f = [],
				h = []
			let m = r.slidesOffsetBefore
			'function' == typeof m && (m = r.slidesOffsetBefore.call(e))
			let g = r.slidesOffsetAfter
			'function' == typeof g && (g = r.slidesOffsetAfter.call(e))
			const v = e.snapGrid.length,
				_ = e.slidesGrid.length
			let y = r.spaceBetween,
				b = -m,
				w = 0,
				x = 0
			if (void 0 === s) return
			'string' == typeof y &&
				y.indexOf('%') >= 0 &&
				(y = (parseFloat(y.replace('%', '')) / 100) * s),
				(e.virtualSize = -y),
				a
					? u.css({ marginLeft: '', marginBottom: '', marginTop: '' })
					: u.css({ marginRight: '', marginBottom: '', marginTop: '' }),
				r.centeredSlides &&
					r.cssMode &&
					(nl(e.wrapperEl, '--swiper-centered-offset-before', ''),
					nl(e.wrapperEl, '--swiper-centered-offset-after', ''))
			const T = r.grid && r.grid.rows > 1 && e.grid
			let S
			T && e.grid.initSlides(d)
			const C =
				'auto' === r.slidesPerView &&
				r.breakpoints &&
				Object.keys(r.breakpoints).filter(
					e => void 0 !== r.breakpoints[e].slidesPerView
				).length > 0
			for (let i = 0; i < d; i += 1) {
				S = 0
				const a = u.eq(i)
				if (
					(T && e.grid.updateSlide(i, a, d, t), 'none' !== a.css('display'))
				) {
					if ('auto' === r.slidesPerView) {
						C && (u[i].style[t('width')] = '')
						const s = getComputedStyle(a[0]),
							o = a[0].style.transform,
							l = a[0].style.webkitTransform
						if (
							(o && (a[0].style.transform = 'none'),
							l && (a[0].style.webkitTransform = 'none'),
							r.roundLengths)
						)
							S = e.isHorizontal() ? a.outerWidth(!0) : a.outerHeight(!0)
						else {
							const e = n(s, 'width'),
								t = n(s, 'padding-left'),
								r = n(s, 'padding-right'),
								i = n(s, 'margin-left'),
								o = n(s, 'margin-right'),
								l = s.getPropertyValue('box-sizing')
							if (l && 'border-box' === l) S = e + i + o
							else {
								const { clientWidth: n, offsetWidth: s } = a[0]
								S = e + t + r + i + o + (s - n)
							}
						}
						o && (a[0].style.transform = o),
							l && (a[0].style.webkitTransform = l),
							r.roundLengths && (S = Math.floor(S))
					} else
						(S = (s - (r.slidesPerView - 1) * y) / r.slidesPerView),
							r.roundLengths && (S = Math.floor(S)),
							u[i] && (u[i].style[t('width')] = `${S}px`)
					u[i] && (u[i].swiperSlideSize = S),
						h.push(S),
						r.centeredSlides
							? ((b = b + S / 2 + w / 2 + y),
							  0 === w && 0 !== i && (b = b - s / 2 - y),
							  0 === i && (b = b - s / 2 - y),
							  Math.abs(b) < 0.001 && (b = 0),
							  r.roundLengths && (b = Math.floor(b)),
							  x % r.slidesPerGroup == 0 && p.push(b),
							  f.push(b))
							: (r.roundLengths && (b = Math.floor(b)),
							  (x - Math.min(e.params.slidesPerGroupSkip, x)) %
									e.params.slidesPerGroup ==
									0 && p.push(b),
							  f.push(b),
							  (b = b + S + y)),
						(e.virtualSize += S + y),
						(w = S),
						(x += 1)
				}
			}
			if (
				((e.virtualSize = Math.max(e.virtualSize, s) + g),
				a &&
					o &&
					('slide' === r.effect || 'coverflow' === r.effect) &&
					i.css({ width: `${e.virtualSize + r.spaceBetween}px` }),
				r.setWrapperSize &&
					i.css({ [t('width')]: `${e.virtualSize + r.spaceBetween}px` }),
				T && e.grid.updateWrapperSize(S, p, t),
				!r.centeredSlides)
			) {
				const t = []
				for (let n = 0; n < p.length; n += 1) {
					let i = p[n]
					r.roundLengths && (i = Math.floor(i)),
						p[n] <= e.virtualSize - s && t.push(i)
				}
				;(p = t),
					Math.floor(e.virtualSize - s) - Math.floor(p[p.length - 1]) > 1 &&
						p.push(e.virtualSize - s)
			}
			if ((0 === p.length && (p = [0]), 0 !== r.spaceBetween)) {
				const n = e.isHorizontal() && a ? 'marginLeft' : t('marginRight')
				u.filter((e, t) => !r.cssMode || t !== u.length - 1).css({
					[n]: `${y}px`,
				})
			}
			if (r.centeredSlides && r.centeredSlidesBounds) {
				let e = 0
				h.forEach(t => {
					e += t + (r.spaceBetween ? r.spaceBetween : 0)
				}),
					(e -= r.spaceBetween)
				const t = e - s
				p = p.map(e => (e < 0 ? -m : e > t ? t + g : e))
			}
			if (r.centerInsufficientSlides) {
				let e = 0
				if (
					(h.forEach(t => {
						e += t + (r.spaceBetween ? r.spaceBetween : 0)
					}),
					(e -= r.spaceBetween),
					e < s)
				) {
					const t = (s - e) / 2
					p.forEach((e, n) => {
						p[n] = e - t
					}),
						f.forEach((e, n) => {
							f[n] = e + t
						})
				}
			}
			if (
				(Object.assign(e, {
					slides: u,
					snapGrid: p,
					slidesGrid: f,
					slidesSizesGrid: h,
				}),
				r.centeredSlides && r.cssMode && !r.centeredSlidesBounds)
			) {
				nl(e.wrapperEl, '--swiper-centered-offset-before', -p[0] + 'px'),
					nl(
						e.wrapperEl,
						'--swiper-centered-offset-after',
						e.size / 2 - h[h.length - 1] / 2 + 'px'
					)
				const t = -e.snapGrid[0],
					n = -e.slidesGrid[0]
				;(e.snapGrid = e.snapGrid.map(e => e + t)),
					(e.slidesGrid = e.slidesGrid.map(e => e + n))
			}
			if (
				(d !== c && e.emit('slidesLengthChange'),
				p.length !== v &&
					(e.params.watchOverflow && e.checkOverflow(),
					e.emit('snapGridLengthChange')),
				f.length !== _ && e.emit('slidesGridLengthChange'),
				r.watchSlidesProgress && e.updateSlidesOffset(),
				!(l || r.cssMode || ('slide' !== r.effect && 'fade' !== r.effect)))
			) {
				const t = `${r.containerModifierClass}backface-hidden`,
					n = e.$el.hasClass(t)
				d <= r.maxBackfaceHiddenSlides
					? n || e.$el.addClass(t)
					: n && e.$el.removeClass(t)
			}
		},
		updateAutoHeight: function (e) {
			const t = this,
				n = [],
				r = t.virtual && t.params.virtual.enabled
			let i,
				s = 0
			'number' == typeof e
				? t.setTransition(e)
				: !0 === e && t.setTransition(t.params.speed)
			const a = e =>
				r
					? t.slides.filter(
							t => parseInt(t.getAttribute('data-swiper-slide-index'), 10) === e
					  )[0]
					: t.slides.eq(e)[0]
			if ('auto' !== t.params.slidesPerView && t.params.slidesPerView > 1)
				if (t.params.centeredSlides)
					(t.visibleSlides || Ko([])).each(e => {
						n.push(e)
					})
				else
					for (i = 0; i < Math.ceil(t.params.slidesPerView); i += 1) {
						const e = t.activeIndex + i
						if (e > t.slides.length && !r) break
						n.push(a(e))
					}
			else n.push(a(t.activeIndex))
			for (i = 0; i < n.length; i += 1)
				if (void 0 !== n[i]) {
					const e = n[i].offsetHeight
					s = e > s ? e : s
				}
			;(s || 0 === s) && t.$wrapperEl.css('height', `${s}px`)
		},
		updateSlidesOffset: function () {
			const e = this,
				t = e.slides
			for (let n = 0; n < t.length; n += 1)
				t[n].swiperSlideOffset = e.isHorizontal()
					? t[n].offsetLeft
					: t[n].offsetTop
		},
		updateSlidesProgress: function (e = (this && this.translate) || 0) {
			const t = this,
				n = t.params,
				{ slides: r, rtlTranslate: i, snapGrid: s } = t
			if (0 === r.length) return
			void 0 === r[0].swiperSlideOffset && t.updateSlidesOffset()
			let a = -e
			i && (a = e),
				r.removeClass(n.slideVisibleClass),
				(t.visibleSlidesIndexes = []),
				(t.visibleSlides = [])
			for (let e = 0; e < r.length; e += 1) {
				const o = r[e]
				let l = o.swiperSlideOffset
				n.cssMode && n.centeredSlides && (l -= r[0].swiperSlideOffset)
				const c =
						(a + (n.centeredSlides ? t.minTranslate() : 0) - l) /
						(o.swiperSlideSize + n.spaceBetween),
					u =
						(a - s[0] + (n.centeredSlides ? t.minTranslate() : 0) - l) /
						(o.swiperSlideSize + n.spaceBetween),
					d = -(a - l),
					p = d + t.slidesSizesGrid[e]
				;((d >= 0 && d < t.size - 1) ||
					(p > 1 && p <= t.size) ||
					(d <= 0 && p >= t.size)) &&
					(t.visibleSlides.push(o),
					t.visibleSlidesIndexes.push(e),
					r.eq(e).addClass(n.slideVisibleClass)),
					(o.progress = i ? -c : c),
					(o.originalProgress = i ? -u : u)
			}
			t.visibleSlides = Ko(t.visibleSlides)
		},
		updateProgress: function (e) {
			const t = this
			if (void 0 === e) {
				const n = t.rtlTranslate ? -1 : 1
				e = (t && t.translate && t.translate * n) || 0
			}
			const n = t.params,
				r = t.maxTranslate() - t.minTranslate()
			let { progress: i, isBeginning: s, isEnd: a } = t
			const o = s,
				l = a
			0 === r
				? ((i = 0), (s = !0), (a = !0))
				: ((i = (e - t.minTranslate()) / r), (s = i <= 0), (a = i >= 1)),
				Object.assign(t, { progress: i, isBeginning: s, isEnd: a }),
				(n.watchSlidesProgress || (n.centeredSlides && n.autoHeight)) &&
					t.updateSlidesProgress(e),
				s && !o && t.emit('reachBeginning toEdge'),
				a && !l && t.emit('reachEnd toEdge'),
				((o && !s) || (l && !a)) && t.emit('fromEdge'),
				t.emit('progress', i)
		},
		updateSlidesClasses: function () {
			const e = this,
				{
					slides: t,
					params: n,
					$wrapperEl: r,
					activeIndex: i,
					realIndex: s,
				} = e,
				a = e.virtual && n.virtual.enabled
			let o
			t.removeClass(
				`${n.slideActiveClass} ${n.slideNextClass} ${n.slidePrevClass} ${n.slideDuplicateActiveClass} ${n.slideDuplicateNextClass} ${n.slideDuplicatePrevClass}`
			),
				(o = a
					? e.$wrapperEl.find(
							`.${n.slideClass}[data-swiper-slide-index="${i}"]`
					  )
					: t.eq(i)),
				o.addClass(n.slideActiveClass),
				n.loop &&
					(o.hasClass(n.slideDuplicateClass)
						? r
								.children(
									`.${n.slideClass}:not(.${n.slideDuplicateClass})[data-swiper-slide-index="${s}"]`
								)
								.addClass(n.slideDuplicateActiveClass)
						: r
								.children(
									`.${n.slideClass}.${n.slideDuplicateClass}[data-swiper-slide-index="${s}"]`
								)
								.addClass(n.slideDuplicateActiveClass))
			let l = o.nextAll(`.${n.slideClass}`).eq(0).addClass(n.slideNextClass)
			n.loop && 0 === l.length && ((l = t.eq(0)), l.addClass(n.slideNextClass))
			let c = o.prevAll(`.${n.slideClass}`).eq(0).addClass(n.slidePrevClass)
			n.loop &&
				0 === c.length &&
				((c = t.eq(-1)), c.addClass(n.slidePrevClass)),
				n.loop &&
					(l.hasClass(n.slideDuplicateClass)
						? r
								.children(
									`.${n.slideClass}:not(.${
										n.slideDuplicateClass
									})[data-swiper-slide-index="${l.attr(
										'data-swiper-slide-index'
									)}"]`
								)
								.addClass(n.slideDuplicateNextClass)
						: r
								.children(
									`.${n.slideClass}.${
										n.slideDuplicateClass
									}[data-swiper-slide-index="${l.attr(
										'data-swiper-slide-index'
									)}"]`
								)
								.addClass(n.slideDuplicateNextClass),
					c.hasClass(n.slideDuplicateClass)
						? r
								.children(
									`.${n.slideClass}:not(.${
										n.slideDuplicateClass
									})[data-swiper-slide-index="${c.attr(
										'data-swiper-slide-index'
									)}"]`
								)
								.addClass(n.slideDuplicatePrevClass)
						: r
								.children(
									`.${n.slideClass}.${
										n.slideDuplicateClass
									}[data-swiper-slide-index="${c.attr(
										'data-swiper-slide-index'
									)}"]`
								)
								.addClass(n.slideDuplicatePrevClass)),
				e.emitSlidesClasses()
		},
		updateActiveIndex: function (e) {
			const t = this,
				n = t.rtlTranslate ? t.translate : -t.translate,
				{
					slidesGrid: r,
					snapGrid: i,
					params: s,
					activeIndex: a,
					realIndex: o,
					snapIndex: l,
				} = t
			let c,
				u = e
			if (void 0 === u) {
				for (let e = 0; e < r.length; e += 1)
					void 0 !== r[e + 1]
						? n >= r[e] && n < r[e + 1] - (r[e + 1] - r[e]) / 2
							? (u = e)
							: n >= r[e] && n < r[e + 1] && (u = e + 1)
						: n >= r[e] && (u = e)
				s.normalizeSlideIndex && (u < 0 || void 0 === u) && (u = 0)
			}
			if (i.indexOf(n) >= 0) c = i.indexOf(n)
			else {
				const e = Math.min(s.slidesPerGroupSkip, u)
				c = e + Math.floor((u - e) / s.slidesPerGroup)
			}
			if ((c >= i.length && (c = i.length - 1), u === a))
				return void (c !== l && ((t.snapIndex = c), t.emit('snapIndexChange')))
			const d = parseInt(
				t.slides.eq(u).attr('data-swiper-slide-index') || u,
				10
			)
			Object.assign(t, {
				snapIndex: c,
				realIndex: d,
				previousIndex: a,
				activeIndex: u,
			}),
				t.emit('activeIndexChange'),
				t.emit('snapIndexChange'),
				o !== d && t.emit('realIndexChange'),
				(t.initialized || t.params.runCallbacksOnInit) && t.emit('slideChange')
		},
		updateClickedSlide: function (e) {
			const t = this,
				n = t.params,
				r = Ko(e).closest(`.${n.slideClass}`)[0]
			let i,
				s = !1
			if (r)
				for (let e = 0; e < t.slides.length; e += 1)
					if (t.slides[e] === r) {
						;(s = !0), (i = e)
						break
					}
			if (!r || !s)
				return (t.clickedSlide = void 0), void (t.clickedIndex = void 0)
			;(t.clickedSlide = r),
				t.virtual && t.params.virtual.enabled
					? (t.clickedIndex = parseInt(
							Ko(r).attr('data-swiper-slide-index'),
							10
					  ))
					: (t.clickedIndex = i),
				n.slideToClickedSlide &&
					void 0 !== t.clickedIndex &&
					t.clickedIndex !== t.activeIndex &&
					t.slideToClickedSlide()
		},
	}
	const pl = {
		getTranslate: function (e = this.isHorizontal() ? 'x' : 'y') {
			const { params: t, rtlTranslate: n, translate: r, $wrapperEl: i } = this
			if (t.virtualTranslate) return n ? -r : r
			if (t.cssMode) return r
			let s = Jo(i[0], e)
			return n && (s = -s), s || 0
		},
		setTranslate: function (e, t) {
			const n = this,
				{
					rtlTranslate: r,
					params: i,
					$wrapperEl: s,
					wrapperEl: a,
					progress: o,
				} = n
			let l,
				c = 0,
				u = 0
			n.isHorizontal() ? (c = r ? -e : e) : (u = e),
				i.roundLengths && ((c = Math.floor(c)), (u = Math.floor(u))),
				i.cssMode
					? (a[n.isHorizontal() ? 'scrollLeft' : 'scrollTop'] = n.isHorizontal()
							? -c
							: -u)
					: i.virtualTranslate ||
					  s.transform(`translate3d(${c}px, ${u}px, 0px)`),
				(n.previousTranslate = n.translate),
				(n.translate = n.isHorizontal() ? c : u)
			const d = n.maxTranslate() - n.minTranslate()
			;(l = 0 === d ? 0 : (e - n.minTranslate()) / d),
				l !== o && n.updateProgress(e),
				n.emit('setTranslate', n.translate, t)
		},
		minTranslate: function () {
			return -this.snapGrid[0]
		},
		maxTranslate: function () {
			return -this.snapGrid[this.snapGrid.length - 1]
		},
		translateTo: function (e = 0, t = this.params.speed, n = !0, r = !0, i) {
			const s = this,
				{ params: a, wrapperEl: o } = s
			if (s.animating && a.preventInteractionOnTransition) return !1
			const l = s.minTranslate(),
				c = s.maxTranslate()
			let u
			if (
				((u = r && e > l ? l : r && e < c ? c : e),
				s.updateProgress(u),
				a.cssMode)
			) {
				const e = s.isHorizontal()
				if (0 === t) o[e ? 'scrollLeft' : 'scrollTop'] = -u
				else {
					if (!s.support.smoothScroll)
						return (
							rl({ swiper: s, targetPosition: -u, side: e ? 'left' : 'top' }),
							!0
						)
					o.scrollTo({ [e ? 'left' : 'top']: -u, behavior: 'smooth' })
				}
				return !0
			}
			return (
				0 === t
					? (s.setTransition(0),
					  s.setTranslate(u),
					  n &&
							(s.emit('beforeTransitionStart', t, i), s.emit('transitionEnd')))
					: (s.setTransition(t),
					  s.setTranslate(u),
					  n &&
							(s.emit('beforeTransitionStart', t, i),
							s.emit('transitionStart')),
					  s.animating ||
							((s.animating = !0),
							s.onTranslateToWrapperTransitionEnd ||
								(s.onTranslateToWrapperTransitionEnd = function (e) {
									s &&
										!s.destroyed &&
										e.target === this &&
										(s.$wrapperEl[0].removeEventListener(
											'transitionend',
											s.onTranslateToWrapperTransitionEnd
										),
										s.$wrapperEl[0].removeEventListener(
											'webkitTransitionEnd',
											s.onTranslateToWrapperTransitionEnd
										),
										(s.onTranslateToWrapperTransitionEnd = null),
										delete s.onTranslateToWrapperTransitionEnd,
										n && s.emit('transitionEnd'))
								}),
							s.$wrapperEl[0].addEventListener(
								'transitionend',
								s.onTranslateToWrapperTransitionEnd
							),
							s.$wrapperEl[0].addEventListener(
								'webkitTransitionEnd',
								s.onTranslateToWrapperTransitionEnd
							))),
				!0
			)
		},
	}
	function fl({ swiper: e, runCallbacks: t, direction: n, step: r }) {
		const { activeIndex: i, previousIndex: s } = e
		let a = n
		if (
			(a || (a = i > s ? 'next' : i < s ? 'prev' : 'reset'),
			e.emit(`transition${r}`),
			t && i !== s)
		) {
			if ('reset' === a) return void e.emit(`slideResetTransition${r}`)
			e.emit(`slideChangeTransition${r}`),
				'next' === a
					? e.emit(`slideNextTransition${r}`)
					: e.emit(`slidePrevTransition${r}`)
		}
	}
	const hl = {
		setTransition: function (e, t) {
			const n = this
			n.params.cssMode || n.$wrapperEl.transition(e),
				n.emit('setTransition', e, t)
		},
		transitionStart: function (e = !0, t) {
			const n = this,
				{ params: r } = n
			r.cssMode ||
				(r.autoHeight && n.updateAutoHeight(),
				fl({ swiper: n, runCallbacks: e, direction: t, step: 'Start' }))
		},
		transitionEnd: function (e = !0, t) {
			const n = this,
				{ params: r } = n
			;(n.animating = !1),
				r.cssMode ||
					(n.setTransition(0),
					fl({ swiper: n, runCallbacks: e, direction: t, step: 'End' }))
		},
	}
	const ml = {
		slideTo: function (e = 0, t = this.params.speed, n = !0, r, i) {
			if ('number' != typeof e && 'string' != typeof e)
				throw new Error(
					`The 'index' argument cannot have type other than 'number' or 'string'. [${typeof e}] given.`
				)
			if ('string' == typeof e) {
				const t = parseInt(e, 10)
				if (!isFinite(t))
					throw new Error(
						`The passed-in 'index' (string) couldn't be converted to 'number'. [${e}] given.`
					)
				e = t
			}
			const s = this
			let a = e
			a < 0 && (a = 0)
			const {
				params: o,
				snapGrid: l,
				slidesGrid: c,
				previousIndex: u,
				activeIndex: d,
				rtlTranslate: p,
				wrapperEl: f,
				enabled: h,
			} = s
			if ((s.animating && o.preventInteractionOnTransition) || (!h && !r && !i))
				return !1
			const m = Math.min(s.params.slidesPerGroupSkip, a)
			let g = m + Math.floor((a - m) / s.params.slidesPerGroup)
			g >= l.length && (g = l.length - 1)
			const v = -l[g]
			if (o.normalizeSlideIndex)
				for (let e = 0; e < c.length; e += 1) {
					const t = -Math.floor(100 * v),
						n = Math.floor(100 * c[e]),
						r = Math.floor(100 * c[e + 1])
					void 0 !== c[e + 1]
						? t >= n && t < r - (r - n) / 2
							? (a = e)
							: t >= n && t < r && (a = e + 1)
						: t >= n && (a = e)
				}
			if (s.initialized && a !== d) {
				if (!s.allowSlideNext && v < s.translate && v < s.minTranslate())
					return !1
				if (
					!s.allowSlidePrev &&
					v > s.translate &&
					v > s.maxTranslate() &&
					(d || 0) !== a
				)
					return !1
			}
			let _
			if (
				(a !== (u || 0) && n && s.emit('beforeSlideChangeStart'),
				s.updateProgress(v),
				(_ = a > d ? 'next' : a < d ? 'prev' : 'reset'),
				(p && -v === s.translate) || (!p && v === s.translate))
			)
				return (
					s.updateActiveIndex(a),
					o.autoHeight && s.updateAutoHeight(),
					s.updateSlidesClasses(),
					'slide' !== o.effect && s.setTranslate(v),
					'reset' !== _ && (s.transitionStart(n, _), s.transitionEnd(n, _)),
					!1
				)
			if (o.cssMode) {
				const e = s.isHorizontal(),
					n = p ? v : -v
				if (0 === t) {
					const t = s.virtual && s.params.virtual.enabled
					t &&
						((s.wrapperEl.style.scrollSnapType = 'none'),
						(s._immediateVirtual = !0)),
						(f[e ? 'scrollLeft' : 'scrollTop'] = n),
						t &&
							requestAnimationFrame(() => {
								;(s.wrapperEl.style.scrollSnapType = ''),
									(s._swiperImmediateVirtual = !1)
							})
				} else {
					if (!s.support.smoothScroll)
						return (
							rl({ swiper: s, targetPosition: n, side: e ? 'left' : 'top' }), !0
						)
					f.scrollTo({ [e ? 'left' : 'top']: n, behavior: 'smooth' })
				}
				return !0
			}
			return (
				s.setTransition(t),
				s.setTranslate(v),
				s.updateActiveIndex(a),
				s.updateSlidesClasses(),
				s.emit('beforeTransitionStart', t, r),
				s.transitionStart(n, _),
				0 === t
					? s.transitionEnd(n, _)
					: s.animating ||
					  ((s.animating = !0),
					  s.onSlideToWrapperTransitionEnd ||
							(s.onSlideToWrapperTransitionEnd = function (e) {
								s &&
									!s.destroyed &&
									e.target === this &&
									(s.$wrapperEl[0].removeEventListener(
										'transitionend',
										s.onSlideToWrapperTransitionEnd
									),
									s.$wrapperEl[0].removeEventListener(
										'webkitTransitionEnd',
										s.onSlideToWrapperTransitionEnd
									),
									(s.onSlideToWrapperTransitionEnd = null),
									delete s.onSlideToWrapperTransitionEnd,
									s.transitionEnd(n, _))
							}),
					  s.$wrapperEl[0].addEventListener(
							'transitionend',
							s.onSlideToWrapperTransitionEnd
					  ),
					  s.$wrapperEl[0].addEventListener(
							'webkitTransitionEnd',
							s.onSlideToWrapperTransitionEnd
					  )),
				!0
			)
		},
		slideToLoop: function (e = 0, t = this.params.speed, n = !0, r) {
			if ('string' == typeof e) {
				const t = parseInt(e, 10)
				if (!isFinite(t))
					throw new Error(
						`The passed-in 'index' (string) couldn't be converted to 'number'. [${e}] given.`
					)
				e = t
			}
			const i = this
			let s = e
			return i.params.loop && (s += i.loopedSlides), i.slideTo(s, t, n, r)
		},
		slideNext: function (e = this.params.speed, t = !0, n) {
			const r = this,
				{ animating: i, enabled: s, params: a } = r
			if (!s) return r
			let o = a.slidesPerGroup
			'auto' === a.slidesPerView &&
				1 === a.slidesPerGroup &&
				a.slidesPerGroupAuto &&
				(o = Math.max(r.slidesPerViewDynamic('current', !0), 1))
			const l = r.activeIndex < a.slidesPerGroupSkip ? 1 : o
			if (a.loop) {
				if (i && a.loopPreventsSlide) return !1
				r.loopFix(), (r._clientLeft = r.$wrapperEl[0].clientLeft)
			}
			return a.rewind && r.isEnd
				? r.slideTo(0, e, t, n)
				: r.slideTo(r.activeIndex + l, e, t, n)
		},
		slidePrev: function (e = this.params.speed, t = !0, n) {
			const r = this,
				{
					params: i,
					animating: s,
					snapGrid: a,
					slidesGrid: o,
					rtlTranslate: l,
					enabled: c,
				} = r
			if (!c) return r
			if (i.loop) {
				if (s && i.loopPreventsSlide) return !1
				r.loopFix(), (r._clientLeft = r.$wrapperEl[0].clientLeft)
			}
			function u(e) {
				return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e)
			}
			const d = u(l ? r.translate : -r.translate),
				p = a.map(e => u(e))
			let f = a[p.indexOf(d) - 1]
			if (void 0 === f && i.cssMode) {
				let e
				a.forEach((t, n) => {
					d >= t && (e = n)
				}),
					void 0 !== e && (f = a[e > 0 ? e - 1 : e])
			}
			let h = 0
			if (
				(void 0 !== f &&
					((h = o.indexOf(f)),
					h < 0 && (h = r.activeIndex - 1),
					'auto' === i.slidesPerView &&
						1 === i.slidesPerGroup &&
						i.slidesPerGroupAuto &&
						((h = h - r.slidesPerViewDynamic('previous', !0) + 1),
						(h = Math.max(h, 0)))),
				i.rewind && r.isBeginning)
			) {
				const i =
					r.params.virtual && r.params.virtual.enabled && r.virtual
						? r.virtual.slides.length - 1
						: r.slides.length - 1
				return r.slideTo(i, e, t, n)
			}
			return r.slideTo(h, e, t, n)
		},
		slideReset: function (e = this.params.speed, t = !0, n) {
			return this.slideTo(this.activeIndex, e, t, n)
		},
		slideToClosest: function (e = this.params.speed, t = !0, n, r = 0.5) {
			const i = this
			let s = i.activeIndex
			const a = Math.min(i.params.slidesPerGroupSkip, s),
				o = a + Math.floor((s - a) / i.params.slidesPerGroup),
				l = i.rtlTranslate ? i.translate : -i.translate
			if (l >= i.snapGrid[o]) {
				const e = i.snapGrid[o]
				l - e > (i.snapGrid[o + 1] - e) * r && (s += i.params.slidesPerGroup)
			} else {
				const e = i.snapGrid[o - 1]
				l - e <= (i.snapGrid[o] - e) * r && (s -= i.params.slidesPerGroup)
			}
			return (
				(s = Math.max(s, 0)),
				(s = Math.min(s, i.slidesGrid.length - 1)),
				i.slideTo(s, e, t, n)
			)
		},
		slideToClickedSlide: function () {
			const e = this,
				{ params: t, $wrapperEl: n } = e,
				r =
					'auto' === t.slidesPerView
						? e.slidesPerViewDynamic()
						: t.slidesPerView
			let i,
				s = e.clickedIndex
			if (t.loop) {
				if (e.animating) return
				;(i = parseInt(Ko(e.clickedSlide).attr('data-swiper-slide-index'), 10)),
					t.centeredSlides
						? s < e.loopedSlides - r / 2 ||
						  s > e.slides.length - e.loopedSlides + r / 2
							? (e.loopFix(),
							  (s = n
									.children(
										`.${t.slideClass}[data-swiper-slide-index="${i}"]:not(.${t.slideDuplicateClass})`
									)
									.eq(0)
									.index()),
							  Qo(() => {
									e.slideTo(s)
							  }))
							: e.slideTo(s)
						: s > e.slides.length - r
						? (e.loopFix(),
						  (s = n
								.children(
									`.${t.slideClass}[data-swiper-slide-index="${i}"]:not(.${t.slideDuplicateClass})`
								)
								.eq(0)
								.index()),
						  Qo(() => {
								e.slideTo(s)
						  }))
						: e.slideTo(s)
			} else e.slideTo(s)
		},
	}
	const gl = {
		loopCreate: function () {
			const e = this,
				t = Fo(),
				{ params: n, $wrapperEl: r } = e,
				i = r.children().length > 0 ? Ko(r.children()[0].parentNode) : r
			i.children(`.${n.slideClass}.${n.slideDuplicateClass}`).remove()
			let s = i.children(`.${n.slideClass}`)
			if (n.loopFillGroupWithBlank) {
				const e = n.slidesPerGroup - (s.length % n.slidesPerGroup)
				if (e !== n.slidesPerGroup) {
					for (let r = 0; r < e; r += 1) {
						const e = Ko(t.createElement('div')).addClass(
							`${n.slideClass} ${n.slideBlankClass}`
						)
						i.append(e)
					}
					s = i.children(`.${n.slideClass}`)
				}
			}
			'auto' !== n.slidesPerView ||
				n.loopedSlides ||
				(n.loopedSlides = s.length),
				(e.loopedSlides = Math.ceil(
					parseFloat(n.loopedSlides || n.slidesPerView, 10)
				)),
				(e.loopedSlides += n.loopAdditionalSlides),
				e.loopedSlides > s.length &&
					e.params.loopedSlidesLimit &&
					(e.loopedSlides = s.length)
			const a = [],
				o = []
			s.each((e, t) => {
				Ko(e).attr('data-swiper-slide-index', t)
			})
			for (let t = 0; t < e.loopedSlides; t += 1) {
				const e = t - Math.floor(t / s.length) * s.length
				o.push(s.eq(e)[0]), a.unshift(s.eq(s.length - e - 1)[0])
			}
			for (let e = 0; e < o.length; e += 1)
				i.append(Ko(o[e].cloneNode(!0)).addClass(n.slideDuplicateClass))
			for (let e = a.length - 1; e >= 0; e -= 1)
				i.prepend(Ko(a[e].cloneNode(!0)).addClass(n.slideDuplicateClass))
		},
		loopFix: function () {
			const e = this
			e.emit('beforeLoopFix')
			const {
				activeIndex: t,
				slides: n,
				loopedSlides: r,
				allowSlidePrev: i,
				allowSlideNext: s,
				snapGrid: a,
				rtlTranslate: o,
			} = e
			let l
			;(e.allowSlidePrev = !0), (e.allowSlideNext = !0)
			const c = -a[t] - e.getTranslate()
			if (t < r) {
				;(l = n.length - 3 * r + t), (l += r)
				e.slideTo(l, 0, !1, !0) &&
					0 !== c &&
					e.setTranslate((o ? -e.translate : e.translate) - c)
			} else if (t >= n.length - r) {
				;(l = -n.length + t + r), (l += r)
				e.slideTo(l, 0, !1, !0) &&
					0 !== c &&
					e.setTranslate((o ? -e.translate : e.translate) - c)
			}
			;(e.allowSlidePrev = i), (e.allowSlideNext = s), e.emit('loopFix')
		},
		loopDestroy: function () {
			const { $wrapperEl: e, params: t, slides: n } = this
			e
				.children(
					`.${t.slideClass}.${t.slideDuplicateClass},.${t.slideClass}.${t.slideBlankClass}`
				)
				.remove(),
				n.removeAttr('data-swiper-slide-index')
		},
	}
	const vl = {
		setGrabCursor: function (e) {
			const t = this
			if (
				t.support.touch ||
				!t.params.simulateTouch ||
				(t.params.watchOverflow && t.isLocked) ||
				t.params.cssMode
			)
				return
			const n = 'container' === t.params.touchEventsTarget ? t.el : t.wrapperEl
			;(n.style.cursor = 'move'), (n.style.cursor = e ? 'grabbing' : 'grab')
		},
		unsetGrabCursor: function () {
			const e = this
			e.support.touch ||
				(e.params.watchOverflow && e.isLocked) ||
				e.params.cssMode ||
				(e[
					'container' === e.params.touchEventsTarget ? 'el' : 'wrapperEl'
				].style.cursor = '')
		},
	}
	function _l(e) {
		const t = this,
			n = Fo(),
			r = jo(),
			i = t.touchEventsData,
			{ params: s, touches: a, enabled: o } = t
		if (!o) return
		if (t.animating && s.preventInteractionOnTransition) return
		!t.animating && s.cssMode && s.loop && t.loopFix()
		let l = e
		l.originalEvent && (l = l.originalEvent)
		let c = Ko(l.target)
		if ('wrapper' === s.touchEventsTarget && !c.closest(t.wrapperEl).length)
			return
		if (
			((i.isTouchEvent = 'touchstart' === l.type),
			!i.isTouchEvent && 'which' in l && 3 === l.which)
		)
			return
		if (!i.isTouchEvent && 'button' in l && l.button > 0) return
		if (i.isTouched && i.isMoved) return
		const u = !!s.noSwipingClass && '' !== s.noSwipingClass,
			d = e.composedPath ? e.composedPath() : e.path
		u && l.target && l.target.shadowRoot && d && (c = Ko(d[0]))
		const p = s.noSwipingSelector
				? s.noSwipingSelector
				: `.${s.noSwipingClass}`,
			f = !(!l.target || !l.target.shadowRoot)
		if (
			s.noSwiping &&
			(f
				? (function (e, t = this) {
						return (function t(n) {
							if (!n || n === Fo() || n === jo()) return null
							n.assignedSlot && (n = n.assignedSlot)
							const r = n.closest(e)
							return r || n.getRootNode ? r || t(n.getRootNode().host) : null
						})(t)
				  })(p, c[0])
				: c.closest(p)[0])
		)
			return void (t.allowClick = !0)
		if (s.swipeHandler && !c.closest(s.swipeHandler)[0]) return
		;(a.currentX =
			'touchstart' === l.type ? l.targetTouches[0].pageX : l.pageX),
			(a.currentY =
				'touchstart' === l.type ? l.targetTouches[0].pageY : l.pageY)
		const h = a.currentX,
			m = a.currentY,
			g = s.edgeSwipeDetection || s.iOSEdgeSwipeDetection,
			v = s.edgeSwipeThreshold || s.iOSEdgeSwipeThreshold
		if (g && (h <= v || h >= r.innerWidth - v)) {
			if ('prevent' !== g) return
			e.preventDefault()
		}
		if (
			(Object.assign(i, {
				isTouched: !0,
				isMoved: !1,
				allowTouchCallbacks: !0,
				isScrolling: void 0,
				startMoving: void 0,
			}),
			(a.startX = h),
			(a.startY = m),
			(i.touchStartTime = Zo()),
			(t.allowClick = !0),
			t.updateSize(),
			(t.swipeDirection = void 0),
			s.threshold > 0 && (i.allowThresholdMove = !1),
			'touchstart' !== l.type)
		) {
			let e = !0
			c.is(i.focusableElements) &&
				((e = !1), 'SELECT' === c[0].nodeName && (i.isTouched = !1)),
				n.activeElement &&
					Ko(n.activeElement).is(i.focusableElements) &&
					n.activeElement !== c[0] &&
					n.activeElement.blur()
			const r = e && t.allowTouchMove && s.touchStartPreventDefault
			;(!s.touchStartForcePreventDefault && !r) ||
				c[0].isContentEditable ||
				l.preventDefault()
		}
		t.params.freeMode &&
			t.params.freeMode.enabled &&
			t.freeMode &&
			t.animating &&
			!s.cssMode &&
			t.freeMode.onTouchStart(),
			t.emit('touchStart', l)
	}
	function yl(e) {
		const t = Fo(),
			n = this,
			r = n.touchEventsData,
			{ params: i, touches: s, rtlTranslate: a, enabled: o } = n
		if (!o) return
		let l = e
		if ((l.originalEvent && (l = l.originalEvent), !r.isTouched))
			return void (
				r.startMoving &&
				r.isScrolling &&
				n.emit('touchMoveOpposite', l)
			)
		if (r.isTouchEvent && 'touchmove' !== l.type) return
		const c =
				'touchmove' === l.type &&
				l.targetTouches &&
				(l.targetTouches[0] || l.changedTouches[0]),
			u = 'touchmove' === l.type ? c.pageX : l.pageX,
			d = 'touchmove' === l.type ? c.pageY : l.pageY
		if (l.preventedByNestedSwiper) return (s.startX = u), void (s.startY = d)
		if (!n.allowTouchMove)
			return (
				Ko(l.target).is(r.focusableElements) || (n.allowClick = !1),
				void (
					r.isTouched &&
					(Object.assign(s, { startX: u, startY: d, currentX: u, currentY: d }),
					(r.touchStartTime = Zo()))
				)
			)
		if (r.isTouchEvent && i.touchReleaseOnEdges && !i.loop)
			if (n.isVertical()) {
				if (
					(d < s.startY && n.translate <= n.maxTranslate()) ||
					(d > s.startY && n.translate >= n.minTranslate())
				)
					return (r.isTouched = !1), void (r.isMoved = !1)
			} else if (
				(u < s.startX && n.translate <= n.maxTranslate()) ||
				(u > s.startX && n.translate >= n.minTranslate())
			)
				return
		if (
			r.isTouchEvent &&
			t.activeElement &&
			l.target === t.activeElement &&
			Ko(l.target).is(r.focusableElements)
		)
			return (r.isMoved = !0), void (n.allowClick = !1)
		if (
			(r.allowTouchCallbacks && n.emit('touchMove', l),
			l.targetTouches && l.targetTouches.length > 1)
		)
			return
		;(s.currentX = u), (s.currentY = d)
		const p = s.currentX - s.startX,
			f = s.currentY - s.startY
		if (n.params.threshold && Math.sqrt(p ** 2 + f ** 2) < n.params.threshold)
			return
		if (void 0 === r.isScrolling) {
			let e
			;(n.isHorizontal() && s.currentY === s.startY) ||
			(n.isVertical() && s.currentX === s.startX)
				? (r.isScrolling = !1)
				: p * p + f * f >= 25 &&
				  ((e = (180 * Math.atan2(Math.abs(f), Math.abs(p))) / Math.PI),
				  (r.isScrolling = n.isHorizontal()
						? e > i.touchAngle
						: 90 - e > i.touchAngle))
		}
		if (
			(r.isScrolling && n.emit('touchMoveOpposite', l),
			void 0 === r.startMoving &&
				((s.currentX === s.startX && s.currentY === s.startY) ||
					(r.startMoving = !0)),
			r.isScrolling)
		)
			return void (r.isTouched = !1)
		if (!r.startMoving) return
		;(n.allowClick = !1),
			!i.cssMode && l.cancelable && l.preventDefault(),
			i.touchMoveStopPropagation && !i.nested && l.stopPropagation(),
			r.isMoved ||
				(i.loop && !i.cssMode && n.loopFix(),
				(r.startTranslate = n.getTranslate()),
				n.setTransition(0),
				n.animating &&
					n.$wrapperEl.trigger('webkitTransitionEnd transitionend'),
				(r.allowMomentumBounce = !1),
				!i.grabCursor ||
					(!0 !== n.allowSlideNext && !0 !== n.allowSlidePrev) ||
					n.setGrabCursor(!0),
				n.emit('sliderFirstMove', l)),
			n.emit('sliderMove', l),
			(r.isMoved = !0)
		let h = n.isHorizontal() ? p : f
		;(s.diff = h),
			(h *= i.touchRatio),
			a && (h = -h),
			(n.swipeDirection = h > 0 ? 'prev' : 'next'),
			(r.currentTranslate = h + r.startTranslate)
		let m = !0,
			g = i.resistanceRatio
		if (
			(i.touchReleaseOnEdges && (g = 0),
			h > 0 && r.currentTranslate > n.minTranslate()
				? ((m = !1),
				  i.resistance &&
						(r.currentTranslate =
							n.minTranslate() -
							1 +
							(-n.minTranslate() + r.startTranslate + h) ** g))
				: h < 0 &&
				  r.currentTranslate < n.maxTranslate() &&
				  ((m = !1),
				  i.resistance &&
						(r.currentTranslate =
							n.maxTranslate() +
							1 -
							(n.maxTranslate() - r.startTranslate - h) ** g)),
			m && (l.preventedByNestedSwiper = !0),
			!n.allowSlideNext &&
				'next' === n.swipeDirection &&
				r.currentTranslate < r.startTranslate &&
				(r.currentTranslate = r.startTranslate),
			!n.allowSlidePrev &&
				'prev' === n.swipeDirection &&
				r.currentTranslate > r.startTranslate &&
				(r.currentTranslate = r.startTranslate),
			n.allowSlidePrev ||
				n.allowSlideNext ||
				(r.currentTranslate = r.startTranslate),
			i.threshold > 0)
		) {
			if (!(Math.abs(h) > i.threshold || r.allowThresholdMove))
				return void (r.currentTranslate = r.startTranslate)
			if (!r.allowThresholdMove)
				return (
					(r.allowThresholdMove = !0),
					(s.startX = s.currentX),
					(s.startY = s.currentY),
					(r.currentTranslate = r.startTranslate),
					void (s.diff = n.isHorizontal()
						? s.currentX - s.startX
						: s.currentY - s.startY)
				)
		}
		i.followFinger &&
			!i.cssMode &&
			(((i.freeMode && i.freeMode.enabled && n.freeMode) ||
				i.watchSlidesProgress) &&
				(n.updateActiveIndex(), n.updateSlidesClasses()),
			n.params.freeMode &&
				i.freeMode.enabled &&
				n.freeMode &&
				n.freeMode.onTouchMove(),
			n.updateProgress(r.currentTranslate),
			n.setTranslate(r.currentTranslate))
	}
	function bl(e) {
		const t = this,
			n = t.touchEventsData,
			{ params: r, touches: i, rtlTranslate: s, slidesGrid: a, enabled: o } = t
		if (!o) return
		let l = e
		if (
			(l.originalEvent && (l = l.originalEvent),
			n.allowTouchCallbacks && t.emit('touchEnd', l),
			(n.allowTouchCallbacks = !1),
			!n.isTouched)
		)
			return (
				n.isMoved && r.grabCursor && t.setGrabCursor(!1),
				(n.isMoved = !1),
				void (n.startMoving = !1)
			)
		r.grabCursor &&
			n.isMoved &&
			n.isTouched &&
			(!0 === t.allowSlideNext || !0 === t.allowSlidePrev) &&
			t.setGrabCursor(!1)
		const c = Zo(),
			u = c - n.touchStartTime
		if (t.allowClick) {
			const e = l.path || (l.composedPath && l.composedPath())
			t.updateClickedSlide((e && e[0]) || l.target),
				t.emit('tap click', l),
				u < 300 &&
					c - n.lastClickTime < 300 &&
					t.emit('doubleTap doubleClick', l)
		}
		if (
			((n.lastClickTime = Zo()),
			Qo(() => {
				t.destroyed || (t.allowClick = !0)
			}),
			!n.isTouched ||
				!n.isMoved ||
				!t.swipeDirection ||
				0 === i.diff ||
				n.currentTranslate === n.startTranslate)
		)
			return (n.isTouched = !1), (n.isMoved = !1), void (n.startMoving = !1)
		let d
		if (
			((n.isTouched = !1),
			(n.isMoved = !1),
			(n.startMoving = !1),
			(d = r.followFinger
				? s
					? t.translate
					: -t.translate
				: -n.currentTranslate),
			r.cssMode)
		)
			return
		if (t.params.freeMode && r.freeMode.enabled)
			return void t.freeMode.onTouchEnd({ currentPos: d })
		let p = 0,
			f = t.slidesSizesGrid[0]
		for (
			let e = 0;
			e < a.length;
			e += e < r.slidesPerGroupSkip ? 1 : r.slidesPerGroup
		) {
			const t = e < r.slidesPerGroupSkip - 1 ? 1 : r.slidesPerGroup
			void 0 !== a[e + t]
				? d >= a[e] && d < a[e + t] && ((p = e), (f = a[e + t] - a[e]))
				: d >= a[e] && ((p = e), (f = a[a.length - 1] - a[a.length - 2]))
		}
		let h = null,
			m = null
		r.rewind &&
			(t.isBeginning
				? (m =
						t.params.virtual && t.params.virtual.enabled && t.virtual
							? t.virtual.slides.length - 1
							: t.slides.length - 1)
				: t.isEnd && (h = 0))
		const g = (d - a[p]) / f,
			v = p < r.slidesPerGroupSkip - 1 ? 1 : r.slidesPerGroup
		if (u > r.longSwipesMs) {
			if (!r.longSwipes) return void t.slideTo(t.activeIndex)
			'next' === t.swipeDirection &&
				(g >= r.longSwipesRatio
					? t.slideTo(r.rewind && t.isEnd ? h : p + v)
					: t.slideTo(p)),
				'prev' === t.swipeDirection &&
					(g > 1 - r.longSwipesRatio
						? t.slideTo(p + v)
						: null !== m && g < 0 && Math.abs(g) > r.longSwipesRatio
						? t.slideTo(m)
						: t.slideTo(p))
		} else {
			if (!r.shortSwipes) return void t.slideTo(t.activeIndex)
			t.navigation &&
			(l.target === t.navigation.nextEl || l.target === t.navigation.prevEl)
				? l.target === t.navigation.nextEl
					? t.slideTo(p + v)
					: t.slideTo(p)
				: ('next' === t.swipeDirection && t.slideTo(null !== h ? h : p + v),
				  'prev' === t.swipeDirection && t.slideTo(null !== m ? m : p))
		}
	}
	function wl() {
		const e = this,
			{ params: t, el: n } = e
		if (n && 0 === n.offsetWidth) return
		t.breakpoints && e.setBreakpoint()
		const { allowSlideNext: r, allowSlidePrev: i, snapGrid: s } = e
		;(e.allowSlideNext = !0),
			(e.allowSlidePrev = !0),
			e.updateSize(),
			e.updateSlides(),
			e.updateSlidesClasses(),
			('auto' === t.slidesPerView || t.slidesPerView > 1) &&
			e.isEnd &&
			!e.isBeginning &&
			!e.params.centeredSlides
				? e.slideTo(e.slides.length - 1, 0, !1, !0)
				: e.slideTo(e.activeIndex, 0, !1, !0),
			e.autoplay && e.autoplay.running && e.autoplay.paused && e.autoplay.run(),
			(e.allowSlidePrev = i),
			(e.allowSlideNext = r),
			e.params.watchOverflow && s !== e.snapGrid && e.checkOverflow()
	}
	function xl(e) {
		const t = this
		t.enabled &&
			(t.allowClick ||
				(t.params.preventClicks && e.preventDefault(),
				t.params.preventClicksPropagation &&
					t.animating &&
					(e.stopPropagation(), e.stopImmediatePropagation())))
	}
	function Tl() {
		const e = this,
			{ wrapperEl: t, rtlTranslate: n, enabled: r } = e
		if (!r) return
		let i
		;(e.previousTranslate = e.translate),
			e.isHorizontal()
				? (e.translate = -t.scrollLeft)
				: (e.translate = -t.scrollTop),
			0 === e.translate && (e.translate = 0),
			e.updateActiveIndex(),
			e.updateSlidesClasses()
		const s = e.maxTranslate() - e.minTranslate()
		;(i = 0 === s ? 0 : (e.translate - e.minTranslate()) / s),
			i !== e.progress && e.updateProgress(n ? -e.translate : e.translate),
			e.emit('setTranslate', e.translate, !1)
	}
	let Sl = !1
	function Cl() {}
	const El = (e, t) => {
		const n = Fo(),
			{
				params: r,
				touchEvents: i,
				el: s,
				wrapperEl: a,
				device: o,
				support: l,
			} = e,
			c = !!r.nested,
			u = 'on' === t ? 'addEventListener' : 'removeEventListener',
			d = t
		if (l.touch) {
			const t = !(
				'touchstart' !== i.start ||
				!l.passiveListener ||
				!r.passiveListeners
			) && { passive: !0, capture: !1 }
			s[u](i.start, e.onTouchStart, t),
				s[u](
					i.move,
					e.onTouchMove,
					l.passiveListener ? { passive: !1, capture: c } : c
				),
				s[u](i.end, e.onTouchEnd, t),
				i.cancel && s[u](i.cancel, e.onTouchEnd, t)
		} else
			s[u](i.start, e.onTouchStart, !1),
				n[u](i.move, e.onTouchMove, c),
				n[u](i.end, e.onTouchEnd, !1)
		;(r.preventClicks || r.preventClicksPropagation) &&
			s[u]('click', e.onClick, !0),
			r.cssMode && a[u]('scroll', e.onScroll),
			r.updateOnWindowResize
				? e[d](
						o.ios || o.android
							? 'resize orientationchange observerUpdate'
							: 'resize observerUpdate',
						wl,
						!0
				  )
				: e[d]('observerUpdate', wl, !0)
	}
	const kl = {
			attachEvents: function () {
				const e = this,
					t = Fo(),
					{ params: n, support: r } = e
				;(e.onTouchStart = _l.bind(e)),
					(e.onTouchMove = yl.bind(e)),
					(e.onTouchEnd = bl.bind(e)),
					n.cssMode && (e.onScroll = Tl.bind(e)),
					(e.onClick = xl.bind(e)),
					r.touch && !Sl && (t.addEventListener('touchstart', Cl), (Sl = !0)),
					El(e, 'on')
			},
			detachEvents: function () {
				El(this, 'off')
			},
		},
		Ml = (e, t) => e.grid && t.grid && t.grid.rows > 1
	const Al = {
		setBreakpoint: function () {
			const e = this,
				{
					activeIndex: t,
					initialized: n,
					loopedSlides: r = 0,
					params: i,
					$el: s,
				} = e,
				a = i.breakpoints
			if (!a || (a && 0 === Object.keys(a).length)) return
			const o = e.getBreakpoint(a, e.params.breakpointsBase, e.el)
			if (!o || e.currentBreakpoint === o) return
			const l = (o in a ? a[o] : void 0) || e.originalParams,
				c = Ml(e, i),
				u = Ml(e, l),
				d = i.enabled
			c && !u
				? (s.removeClass(
						`${i.containerModifierClass}grid ${i.containerModifierClass}grid-column`
				  ),
				  e.emitContainerClasses())
				: !c &&
				  u &&
				  (s.addClass(`${i.containerModifierClass}grid`),
				  ((l.grid.fill && 'column' === l.grid.fill) ||
						(!l.grid.fill && 'column' === i.grid.fill)) &&
						s.addClass(`${i.containerModifierClass}grid-column`),
				  e.emitContainerClasses()),
				['navigation', 'pagination', 'scrollbar'].forEach(t => {
					const n = i[t] && i[t].enabled,
						r = l[t] && l[t].enabled
					n && !r && e[t].disable(), !n && r && e[t].enable()
				})
			const p = l.direction && l.direction !== i.direction,
				f = i.loop && (l.slidesPerView !== i.slidesPerView || p)
			p && n && e.changeDirection(), tl(e.params, l)
			const h = e.params.enabled
			Object.assign(e, {
				allowTouchMove: e.params.allowTouchMove,
				allowSlideNext: e.params.allowSlideNext,
				allowSlidePrev: e.params.allowSlidePrev,
			}),
				d && !h ? e.disable() : !d && h && e.enable(),
				(e.currentBreakpoint = o),
				e.emit('_beforeBreakpoint', l),
				f &&
					n &&
					(e.loopDestroy(),
					e.loopCreate(),
					e.updateSlides(),
					e.slideTo(t - r + e.loopedSlides, 0, !1)),
				e.emit('breakpoint', l)
		},
		getBreakpoint: function (e, t = 'window', n) {
			if (!e || ('container' === t && !n)) return
			let r = !1
			const i = jo(),
				s = 'window' === t ? i.innerHeight : n.clientHeight,
				a = Object.keys(e).map(e => {
					if ('string' == typeof e && 0 === e.indexOf('@')) {
						const t = parseFloat(e.substr(1))
						return { value: s * t, point: e }
					}
					return { value: e, point: e }
				})
			a.sort((e, t) => parseInt(e.value, 10) - parseInt(t.value, 10))
			for (let e = 0; e < a.length; e += 1) {
				const { point: s, value: o } = a[e]
				'window' === t
					? i.matchMedia(`(min-width: ${o}px)`).matches && (r = s)
					: o <= n.clientWidth && (r = s)
			}
			return r || 'max'
		},
	}
	const Pl = {
		addClasses: function () {
			const e = this,
				{ classNames: t, params: n, rtl: r, $el: i, device: s, support: a } = e,
				o = (function (e, t) {
					const n = []
					return (
						e.forEach(e => {
							'object' == typeof e
								? Object.keys(e).forEach(r => {
										e[r] && n.push(t + r)
								  })
								: 'string' == typeof e && n.push(t + e)
						}),
						n
					)
				})(
					[
						'initialized',
						n.direction,
						{ 'pointer-events': !a.touch },
						{ 'free-mode': e.params.freeMode && n.freeMode.enabled },
						{ autoheight: n.autoHeight },
						{ rtl: r },
						{ grid: n.grid && n.grid.rows > 1 },
						{
							'grid-column':
								n.grid && n.grid.rows > 1 && 'column' === n.grid.fill,
						},
						{ android: s.android },
						{ ios: s.ios },
						{ 'css-mode': n.cssMode },
						{ centered: n.cssMode && n.centeredSlides },
						{ 'watch-progress': n.watchSlidesProgress },
					],
					n.containerModifierClass
				)
			t.push(...o), i.addClass([...t].join(' ')), e.emitContainerClasses()
		},
		removeClasses: function () {
			const { $el: e, classNames: t } = this
			e.removeClass(t.join(' ')), this.emitContainerClasses()
		},
	}
	const Ol = {
		loadImage: function (e, t, n, r, i, s) {
			const a = jo()
			let o
			function l() {
				s && s()
			}
			Ko(e).parent('picture')[0] || (e.complete && i)
				? l()
				: t
				? ((o = new a.Image()),
				  (o.onload = l),
				  (o.onerror = l),
				  r && (o.sizes = r),
				  n && (o.srcset = n),
				  t && (o.src = t))
				: l()
		},
		preloadImages: function () {
			const e = this
			function t() {
				null != e &&
					e &&
					!e.destroyed &&
					(void 0 !== e.imagesLoaded && (e.imagesLoaded += 1),
					e.imagesLoaded === e.imagesToLoad.length &&
						(e.params.updateOnImagesReady && e.update(), e.emit('imagesReady')))
			}
			e.imagesToLoad = e.$el.find('img')
			for (let n = 0; n < e.imagesToLoad.length; n += 1) {
				const r = e.imagesToLoad[n]
				e.loadImage(
					r,
					r.currentSrc || r.getAttribute('src'),
					r.srcset || r.getAttribute('srcset'),
					r.sizes || r.getAttribute('sizes'),
					!0,
					t
				)
			}
		},
	}
	const Ll = {
			checkOverflow: function () {
				const e = this,
					{ isLocked: t, params: n } = e,
					{ slidesOffsetBefore: r } = n
				if (r) {
					const t = e.slides.length - 1,
						n = e.slidesGrid[t] + e.slidesSizesGrid[t] + 2 * r
					e.isLocked = e.size > n
				} else e.isLocked = 1 === e.snapGrid.length
				!0 === n.allowSlideNext && (e.allowSlideNext = !e.isLocked),
					!0 === n.allowSlidePrev && (e.allowSlidePrev = !e.isLocked),
					t && t !== e.isLocked && (e.isEnd = !1),
					t !== e.isLocked && e.emit(e.isLocked ? 'lock' : 'unlock')
			},
		},
		Dl = {
			init: !0,
			direction: 'horizontal',
			touchEventsTarget: 'wrapper',
			initialSlide: 0,
			speed: 300,
			cssMode: !1,
			updateOnWindowResize: !0,
			resizeObserver: !0,
			nested: !1,
			createElements: !1,
			enabled: !0,
			focusableElements:
				'input, select, option, textarea, button, video, label',
			width: null,
			height: null,
			preventInteractionOnTransition: !1,
			userAgent: null,
			url: null,
			edgeSwipeDetection: !1,
			edgeSwipeThreshold: 20,
			autoHeight: !1,
			setWrapperSize: !1,
			virtualTranslate: !1,
			effect: 'slide',
			breakpoints: void 0,
			breakpointsBase: 'window',
			spaceBetween: 0,
			slidesPerView: 1,
			slidesPerGroup: 1,
			slidesPerGroupSkip: 0,
			slidesPerGroupAuto: !1,
			centeredSlides: !1,
			centeredSlidesBounds: !1,
			slidesOffsetBefore: 0,
			slidesOffsetAfter: 0,
			normalizeSlideIndex: !0,
			centerInsufficientSlides: !1,
			watchOverflow: !0,
			roundLengths: !1,
			touchRatio: 1,
			touchAngle: 45,
			simulateTouch: !0,
			shortSwipes: !0,
			longSwipes: !0,
			longSwipesRatio: 0.5,
			longSwipesMs: 300,
			followFinger: !0,
			allowTouchMove: !0,
			threshold: 0,
			touchMoveStopPropagation: !1,
			touchStartPreventDefault: !0,
			touchStartForcePreventDefault: !1,
			touchReleaseOnEdges: !1,
			uniqueNavElements: !0,
			resistance: !0,
			resistanceRatio: 0.85,
			watchSlidesProgress: !1,
			grabCursor: !1,
			preventClicks: !0,
			preventClicksPropagation: !0,
			slideToClickedSlide: !1,
			preloadImages: !0,
			updateOnImagesReady: !0,
			loop: !1,
			loopAdditionalSlides: 0,
			loopedSlides: null,
			loopedSlidesLimit: !0,
			loopFillGroupWithBlank: !1,
			loopPreventsSlide: !0,
			rewind: !1,
			allowSlidePrev: !0,
			allowSlideNext: !0,
			swipeHandler: null,
			noSwiping: !0,
			noSwipingClass: 'swiper-no-swiping',
			noSwipingSelector: null,
			passiveListeners: !0,
			maxBackfaceHiddenSlides: 10,
			containerModifierClass: 'swiper-',
			slideClass: 'swiper-slide',
			slideBlankClass: 'swiper-slide-invisible-blank',
			slideActiveClass: 'swiper-slide-active',
			slideDuplicateActiveClass: 'swiper-slide-duplicate-active',
			slideVisibleClass: 'swiper-slide-visible',
			slideDuplicateClass: 'swiper-slide-duplicate',
			slideNextClass: 'swiper-slide-next',
			slideDuplicateNextClass: 'swiper-slide-duplicate-next',
			slidePrevClass: 'swiper-slide-prev',
			slideDuplicatePrevClass: 'swiper-slide-duplicate-prev',
			wrapperClass: 'swiper-wrapper',
			runCallbacksOnInit: !0,
			_emitClasses: !1,
		}
	function zl(e, t) {
		return function (n = {}) {
			const r = Object.keys(n)[0],
				i = n[r]
			'object' == typeof i && null !== i
				? (['navigation', 'pagination', 'scrollbar'].indexOf(r) >= 0 &&
						!0 === e[r] &&
						(e[r] = { auto: !0 }),
				  r in e && 'enabled' in i
						? (!0 === e[r] && (e[r] = { enabled: !0 }),
						  'object' != typeof e[r] ||
								'enabled' in e[r] ||
								(e[r].enabled = !0),
						  e[r] || (e[r] = { enabled: !1 }),
						  tl(t, n))
						: tl(t, n))
				: tl(t, n)
		}
	}
	const $l = {
			eventsEmitter: ul,
			update: dl,
			translate: pl,
			transition: hl,
			slide: ml,
			loop: gl,
			grabCursor: vl,
			events: kl,
			breakpoints: Al,
			checkOverflow: Ll,
			classes: Pl,
			images: Ol,
		},
		Il = {}
	class Bl {
		constructor(...e) {
			let t, n
			if (
				(1 === e.length &&
				e[0].constructor &&
				'Object' === Object.prototype.toString.call(e[0]).slice(8, -1)
					? (n = e[0])
					: ([t, n] = e),
				n || (n = {}),
				(n = tl({}, n)),
				t && !n.el && (n.el = t),
				n.el && Ko(n.el).length > 1)
			) {
				const e = []
				return (
					Ko(n.el).each(t => {
						const r = tl({}, n, { el: t })
						e.push(new Bl(r))
					}),
					e
				)
			}
			const r = this
			;(r.__swiper__ = !0),
				(r.support = ol()),
				(r.device = ll({ userAgent: n.userAgent })),
				(r.browser = cl()),
				(r.eventsListeners = {}),
				(r.eventsAnyListeners = []),
				(r.modules = [...r.__modules__]),
				n.modules && Array.isArray(n.modules) && r.modules.push(...n.modules)
			const i = {}
			r.modules.forEach(e => {
				e({
					swiper: r,
					extendParams: zl(n, i),
					on: r.on.bind(r),
					once: r.once.bind(r),
					off: r.off.bind(r),
					emit: r.emit.bind(r),
				})
			})
			const s = tl({}, Dl, i)
			return (
				(r.params = tl({}, s, Il, n)),
				(r.originalParams = tl({}, r.params)),
				(r.passedParams = tl({}, n)),
				r.params &&
					r.params.on &&
					Object.keys(r.params.on).forEach(e => {
						r.on(e, r.params.on[e])
					}),
				r.params && r.params.onAny && r.onAny(r.params.onAny),
				(r.$ = Ko),
				Object.assign(r, {
					enabled: r.params.enabled,
					el: t,
					classNames: [],
					slides: Ko(),
					slidesGrid: [],
					snapGrid: [],
					slidesSizesGrid: [],
					isHorizontal: () => 'horizontal' === r.params.direction,
					isVertical: () => 'vertical' === r.params.direction,
					activeIndex: 0,
					realIndex: 0,
					isBeginning: !0,
					isEnd: !1,
					translate: 0,
					previousTranslate: 0,
					progress: 0,
					velocity: 0,
					animating: !1,
					allowSlideNext: r.params.allowSlideNext,
					allowSlidePrev: r.params.allowSlidePrev,
					touchEvents: (function () {
						const e = ['touchstart', 'touchmove', 'touchend', 'touchcancel'],
							t = ['pointerdown', 'pointermove', 'pointerup']
						return (
							(r.touchEventsTouch = {
								start: e[0],
								move: e[1],
								end: e[2],
								cancel: e[3],
							}),
							(r.touchEventsDesktop = { start: t[0], move: t[1], end: t[2] }),
							r.support.touch || !r.params.simulateTouch
								? r.touchEventsTouch
								: r.touchEventsDesktop
						)
					})(),
					touchEventsData: {
						isTouched: void 0,
						isMoved: void 0,
						allowTouchCallbacks: void 0,
						touchStartTime: void 0,
						isScrolling: void 0,
						currentTranslate: void 0,
						startTranslate: void 0,
						allowThresholdMove: void 0,
						focusableElements: r.params.focusableElements,
						lastClickTime: Zo(),
						clickTimeout: void 0,
						velocities: [],
						allowMomentumBounce: void 0,
						isTouchEvent: void 0,
						startMoving: void 0,
					},
					allowClick: !0,
					allowTouchMove: r.params.allowTouchMove,
					touches: { startX: 0, startY: 0, currentX: 0, currentY: 0, diff: 0 },
					imagesToLoad: [],
					imagesLoaded: 0,
				}),
				r.emit('_swiper'),
				r.params.init && r.init(),
				r
			)
		}
		enable() {
			const e = this
			e.enabled ||
				((e.enabled = !0),
				e.params.grabCursor && e.setGrabCursor(),
				e.emit('enable'))
		}
		disable() {
			const e = this
			e.enabled &&
				((e.enabled = !1),
				e.params.grabCursor && e.unsetGrabCursor(),
				e.emit('disable'))
		}
		setProgress(e, t) {
			const n = this
			e = Math.min(Math.max(e, 0), 1)
			const r = n.minTranslate(),
				i = (n.maxTranslate() - r) * e + r
			n.translateTo(i, void 0 === t ? 0 : t),
				n.updateActiveIndex(),
				n.updateSlidesClasses()
		}
		emitContainerClasses() {
			const e = this
			if (!e.params._emitClasses || !e.el) return
			const t = e.el.className
				.split(' ')
				.filter(
					t =>
						0 === t.indexOf('swiper') ||
						0 === t.indexOf(e.params.containerModifierClass)
				)
			e.emit('_containerClasses', t.join(' '))
		}
		getSlideClasses(e) {
			const t = this
			return t.destroyed
				? ''
				: e.className
						.split(' ')
						.filter(
							e =>
								0 === e.indexOf('swiper-slide') ||
								0 === e.indexOf(t.params.slideClass)
						)
						.join(' ')
		}
		emitSlidesClasses() {
			const e = this
			if (!e.params._emitClasses || !e.el) return
			const t = []
			e.slides.each(n => {
				const r = e.getSlideClasses(n)
				t.push({ slideEl: n, classNames: r }), e.emit('_slideClass', n, r)
			}),
				e.emit('_slideClasses', t)
		}
		slidesPerViewDynamic(e = 'current', t = !1) {
			const {
				params: n,
				slides: r,
				slidesGrid: i,
				slidesSizesGrid: s,
				size: a,
				activeIndex: o,
			} = this
			let l = 1
			if (n.centeredSlides) {
				let e,
					t = r[o].swiperSlideSize
				for (let n = o + 1; n < r.length; n += 1)
					r[n] &&
						!e &&
						((t += r[n].swiperSlideSize), (l += 1), t > a && (e = !0))
				for (let n = o - 1; n >= 0; n -= 1)
					r[n] &&
						!e &&
						((t += r[n].swiperSlideSize), (l += 1), t > a && (e = !0))
			} else if ('current' === e)
				for (let e = o + 1; e < r.length; e += 1) {
					;(t ? i[e] + s[e] - i[o] < a : i[e] - i[o] < a) && (l += 1)
				}
			else
				for (let e = o - 1; e >= 0; e -= 1) {
					i[o] - i[e] < a && (l += 1)
				}
			return l
		}
		update() {
			const e = this
			if (!e || e.destroyed) return
			const { snapGrid: t, params: n } = e
			function r() {
				const t = e.rtlTranslate ? -1 * e.translate : e.translate,
					n = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate())
				e.setTranslate(n), e.updateActiveIndex(), e.updateSlidesClasses()
			}
			let i
			n.breakpoints && e.setBreakpoint(),
				e.updateSize(),
				e.updateSlides(),
				e.updateProgress(),
				e.updateSlidesClasses(),
				e.params.freeMode && e.params.freeMode.enabled
					? (r(), e.params.autoHeight && e.updateAutoHeight())
					: ((i =
							('auto' === e.params.slidesPerView ||
								e.params.slidesPerView > 1) &&
							e.isEnd &&
							!e.params.centeredSlides
								? e.slideTo(e.slides.length - 1, 0, !1, !0)
								: e.slideTo(e.activeIndex, 0, !1, !0)),
					  i || r()),
				n.watchOverflow && t !== e.snapGrid && e.checkOverflow(),
				e.emit('update')
		}
		changeDirection(e, t = !0) {
			const n = this,
				r = n.params.direction
			return (
				e || (e = 'horizontal' === r ? 'vertical' : 'horizontal'),
				e === r ||
					('horizontal' !== e && 'vertical' !== e) ||
					(n.$el
						.removeClass(`${n.params.containerModifierClass}${r}`)
						.addClass(`${n.params.containerModifierClass}${e}`),
					n.emitContainerClasses(),
					(n.params.direction = e),
					n.slides.each(t => {
						'vertical' === e ? (t.style.width = '') : (t.style.height = '')
					}),
					n.emit('changeDirection'),
					t && n.update()),
				n
			)
		}
		changeLanguageDirection(e) {
			const t = this
			;(t.rtl && 'rtl' === e) ||
				(!t.rtl && 'ltr' === e) ||
				((t.rtl = 'rtl' === e),
				(t.rtlTranslate = 'horizontal' === t.params.direction && t.rtl),
				t.rtl
					? (t.$el.addClass(`${t.params.containerModifierClass}rtl`),
					  (t.el.dir = 'rtl'))
					: (t.$el.removeClass(`${t.params.containerModifierClass}rtl`),
					  (t.el.dir = 'ltr')),
				t.update())
		}
		mount(e) {
			const t = this
			if (t.mounted) return !0
			const n = Ko(e || t.params.el)
			if (!(e = n[0])) return !1
			e.swiper = t
			const r = () =>
				`.${(t.params.wrapperClass || '').trim().split(' ').join('.')}`
			let i = (() => {
				if (e && e.shadowRoot && e.shadowRoot.querySelector) {
					const t = Ko(e.shadowRoot.querySelector(r()))
					return (t.children = e => n.children(e)), t
				}
				return n.children ? n.children(r()) : Ko(n).children(r())
			})()
			if (0 === i.length && t.params.createElements) {
				const e = Fo().createElement('div')
				;(i = Ko(e)),
					(e.className = t.params.wrapperClass),
					n.append(e),
					n.children(`.${t.params.slideClass}`).each(e => {
						i.append(e)
					})
			}
			return (
				Object.assign(t, {
					$el: n,
					el: e,
					$wrapperEl: i,
					wrapperEl: i[0],
					mounted: !0,
					rtl: 'rtl' === e.dir.toLowerCase() || 'rtl' === n.css('direction'),
					rtlTranslate:
						'horizontal' === t.params.direction &&
						('rtl' === e.dir.toLowerCase() || 'rtl' === n.css('direction')),
					wrongRTL: '-webkit-box' === i.css('display'),
				}),
				!0
			)
		}
		init(e) {
			const t = this
			if (t.initialized) return t
			return (
				!1 === t.mount(e) ||
					(t.emit('beforeInit'),
					t.params.breakpoints && t.setBreakpoint(),
					t.addClasses(),
					t.params.loop && t.loopCreate(),
					t.updateSize(),
					t.updateSlides(),
					t.params.watchOverflow && t.checkOverflow(),
					t.params.grabCursor && t.enabled && t.setGrabCursor(),
					t.params.preloadImages && t.preloadImages(),
					t.params.loop
						? t.slideTo(
								t.params.initialSlide + t.loopedSlides,
								0,
								t.params.runCallbacksOnInit,
								!1,
								!0
						  )
						: t.slideTo(
								t.params.initialSlide,
								0,
								t.params.runCallbacksOnInit,
								!1,
								!0
						  ),
					t.attachEvents(),
					(t.initialized = !0),
					t.emit('init'),
					t.emit('afterInit')),
				t
			)
		}
		destroy(e = !0, t = !0) {
			const n = this,
				{ params: r, $el: i, $wrapperEl: s, slides: a } = n
			return (
				void 0 === n.params ||
					n.destroyed ||
					(n.emit('beforeDestroy'),
					(n.initialized = !1),
					n.detachEvents(),
					r.loop && n.loopDestroy(),
					t &&
						(n.removeClasses(),
						i.removeAttr('style'),
						s.removeAttr('style'),
						a &&
							a.length &&
							a
								.removeClass(
									[
										r.slideVisibleClass,
										r.slideActiveClass,
										r.slideNextClass,
										r.slidePrevClass,
									].join(' ')
								)
								.removeAttr('style')
								.removeAttr('data-swiper-slide-index')),
					n.emit('destroy'),
					Object.keys(n.eventsListeners).forEach(e => {
						n.off(e)
					}),
					!1 !== e &&
						((n.$el[0].swiper = null),
						(function (e) {
							const t = e
							Object.keys(t).forEach(e => {
								try {
									t[e] = null
								} catch (e) {}
								try {
									delete t[e]
								} catch (e) {}
							})
						})(n)),
					(n.destroyed = !0)),
				null
			)
		}
		static extendDefaults(e) {
			tl(Il, e)
		}
		static get extendedDefaults() {
			return Il
		}
		static get defaults() {
			return Dl
		}
		static installModule(e) {
			Bl.prototype.__modules__ || (Bl.prototype.__modules__ = [])
			const t = Bl.prototype.__modules__
			'function' == typeof e && t.indexOf(e) < 0 && t.push(e)
		}
		static use(e) {
			return Array.isArray(e)
				? (e.forEach(e => Bl.installModule(e)), Bl)
				: (Bl.installModule(e), Bl)
		}
	}
	Object.keys($l).forEach(e => {
		Object.keys($l[e]).forEach(t => {
			Bl.prototype[t] = $l[e][t]
		})
	}),
		Bl.use([
			function ({ swiper: e, on: t, emit: n }) {
				const r = jo()
				let i = null,
					s = null
				const a = () => {
						e &&
							!e.destroyed &&
							e.initialized &&
							(n('beforeResize'), n('resize'))
					},
					o = () => {
						e && !e.destroyed && e.initialized && n('orientationchange')
					}
				t('init', () => {
					e.params.resizeObserver && void 0 !== r.ResizeObserver
						? e &&
						  !e.destroyed &&
						  e.initialized &&
						  ((i = new ResizeObserver(t => {
								s = r.requestAnimationFrame(() => {
									const { width: n, height: r } = e
									let i = n,
										s = r
									t.forEach(
										({ contentBoxSize: t, contentRect: n, target: r }) => {
											;(r && r !== e.el) ||
												((i = n ? n.width : (t[0] || t).inlineSize),
												(s = n ? n.height : (t[0] || t).blockSize))
										}
									),
										(i === n && s === r) || a()
								})
						  })),
						  i.observe(e.el))
						: (r.addEventListener('resize', a),
						  r.addEventListener('orientationchange', o))
				}),
					t('destroy', () => {
						s && r.cancelAnimationFrame(s),
							i && i.unobserve && e.el && (i.unobserve(e.el), (i = null)),
							r.removeEventListener('resize', a),
							r.removeEventListener('orientationchange', o)
					})
			},
			function ({ swiper: e, extendParams: t, on: n, emit: r }) {
				const i = [],
					s = jo(),
					a = (e, t = {}) => {
						const n = new (s.MutationObserver || s.WebkitMutationObserver)(
							e => {
								if (1 === e.length) return void r('observerUpdate', e[0])
								const t = function () {
									r('observerUpdate', e[0])
								}
								s.requestAnimationFrame
									? s.requestAnimationFrame(t)
									: s.setTimeout(t, 0)
							}
						)
						n.observe(e, {
							attributes: void 0 === t.attributes || t.attributes,
							childList: void 0 === t.childList || t.childList,
							characterData: void 0 === t.characterData || t.characterData,
						}),
							i.push(n)
					}
				t({ observer: !1, observeParents: !1, observeSlideChildren: !1 }),
					n('init', () => {
						if (e.params.observer) {
							if (e.params.observeParents) {
								const t = e.$el.parents()
								for (let e = 0; e < t.length; e += 1) a(t[e])
							}
							a(e.$el[0], { childList: e.params.observeSlideChildren }),
								a(e.$wrapperEl[0], { attributes: !1 })
						}
					}),
					n('destroy', () => {
						i.forEach(e => {
							e.disconnect()
						}),
							i.splice(0, i.length)
					})
			},
		])
	const ql = Bl
	function Rl(e, t, n, r) {
		const i = Fo()
		return (
			e.params.createElements &&
				Object.keys(r).forEach(s => {
					if (!n[s] && !0 === n.auto) {
						let a = e.$el.children(`.${r[s]}`)[0]
						a ||
							((a = i.createElement('div')),
							(a.className = r[s]),
							e.$el.append(a)),
							(n[s] = a),
							(t[s] = a)
					}
				}),
			n
		)
	}
	function Fl({ swiper: e, extendParams: t, on: n, emit: r }) {
		function i(t) {
			let n
			return (
				t &&
					((n = Ko(t)),
					e.params.uniqueNavElements &&
						'string' == typeof t &&
						n.length > 1 &&
						1 === e.$el.find(t).length &&
						(n = e.$el.find(t))),
				n
			)
		}
		function s(t, n) {
			const r = e.params.navigation
			t &&
				t.length > 0 &&
				(t[n ? 'addClass' : 'removeClass'](r.disabledClass),
				t[0] && 'BUTTON' === t[0].tagName && (t[0].disabled = n),
				e.params.watchOverflow &&
					e.enabled &&
					t[e.isLocked ? 'addClass' : 'removeClass'](r.lockClass))
		}
		function a() {
			if (e.params.loop) return
			const { $nextEl: t, $prevEl: n } = e.navigation
			s(n, e.isBeginning && !e.params.rewind), s(t, e.isEnd && !e.params.rewind)
		}
		function o(t) {
			t.preventDefault(),
				(!e.isBeginning || e.params.loop || e.params.rewind) &&
					(e.slidePrev(), r('navigationPrev'))
		}
		function l(t) {
			t.preventDefault(),
				(!e.isEnd || e.params.loop || e.params.rewind) &&
					(e.slideNext(), r('navigationNext'))
		}
		function c() {
			const t = e.params.navigation
			if (
				((e.params.navigation = Rl(
					e,
					e.originalParams.navigation,
					e.params.navigation,
					{ nextEl: 'swiper-button-next', prevEl: 'swiper-button-prev' }
				)),
				!t.nextEl && !t.prevEl)
			)
				return
			const n = i(t.nextEl),
				r = i(t.prevEl)
			n && n.length > 0 && n.on('click', l),
				r && r.length > 0 && r.on('click', o),
				Object.assign(e.navigation, {
					$nextEl: n,
					nextEl: n && n[0],
					$prevEl: r,
					prevEl: r && r[0],
				}),
				e.enabled ||
					(n && n.addClass(t.lockClass), r && r.addClass(t.lockClass))
		}
		function u() {
			const { $nextEl: t, $prevEl: n } = e.navigation
			t &&
				t.length &&
				(t.off('click', l), t.removeClass(e.params.navigation.disabledClass)),
				n &&
					n.length &&
					(n.off('click', o), n.removeClass(e.params.navigation.disabledClass))
		}
		t({
			navigation: {
				nextEl: null,
				prevEl: null,
				hideOnClick: !1,
				disabledClass: 'swiper-button-disabled',
				hiddenClass: 'swiper-button-hidden',
				lockClass: 'swiper-button-lock',
				navigationDisabledClass: 'swiper-navigation-disabled',
			},
		}),
			(e.navigation = {
				nextEl: null,
				$nextEl: null,
				prevEl: null,
				$prevEl: null,
			}),
			n('init', () => {
				!1 === e.params.navigation.enabled ? d() : (c(), a())
			}),
			n('toEdge fromEdge lock unlock', () => {
				a()
			}),
			n('destroy', () => {
				u()
			}),
			n('enable disable', () => {
				const { $nextEl: t, $prevEl: n } = e.navigation
				t &&
					t[e.enabled ? 'removeClass' : 'addClass'](
						e.params.navigation.lockClass
					),
					n &&
						n[e.enabled ? 'removeClass' : 'addClass'](
							e.params.navigation.lockClass
						)
			}),
			n('click', (t, n) => {
				const { $nextEl: i, $prevEl: s } = e.navigation,
					a = n.target
				if (e.params.navigation.hideOnClick && !Ko(a).is(s) && !Ko(a).is(i)) {
					if (
						e.pagination &&
						e.params.pagination &&
						e.params.pagination.clickable &&
						(e.pagination.el === a || e.pagination.el.contains(a))
					)
						return
					let t
					i
						? (t = i.hasClass(e.params.navigation.hiddenClass))
						: s && (t = s.hasClass(e.params.navigation.hiddenClass)),
						r(!0 === t ? 'navigationShow' : 'navigationHide'),
						i && i.toggleClass(e.params.navigation.hiddenClass),
						s && s.toggleClass(e.params.navigation.hiddenClass)
				}
			})
		const d = () => {
			e.$el.addClass(e.params.navigation.navigationDisabledClass), u()
		}
		Object.assign(e.navigation, {
			enable: () => {
				e.$el.removeClass(e.params.navigation.navigationDisabledClass), c(), a()
			},
			disable: d,
			update: a,
			init: c,
			destroy: u,
		})
	}
	function Nl(e = '') {
		return `.${e
			.trim()
			.replace(/([\.:!\/])/g, '\\$1')
			.replace(/ /g, '.')}`
	}
	function jl({ swiper: e, extendParams: t, on: n, emit: r }) {
		const i = 'swiper-pagination'
		let s
		t({
			pagination: {
				el: null,
				bulletElement: 'span',
				clickable: !1,
				hideOnClick: !1,
				renderBullet: null,
				renderProgressbar: null,
				renderFraction: null,
				renderCustom: null,
				progressbarOpposite: !1,
				type: 'bullets',
				dynamicBullets: !1,
				dynamicMainBullets: 1,
				formatFractionCurrent: e => e,
				formatFractionTotal: e => e,
				bulletClass: `${i}-bullet`,
				bulletActiveClass: `${i}-bullet-active`,
				modifierClass: `${i}-`,
				currentClass: `${i}-current`,
				totalClass: `${i}-total`,
				hiddenClass: `${i}-hidden`,
				progressbarFillClass: `${i}-progressbar-fill`,
				progressbarOppositeClass: `${i}-progressbar-opposite`,
				clickableClass: `${i}-clickable`,
				lockClass: `${i}-lock`,
				horizontalClass: `${i}-horizontal`,
				verticalClass: `${i}-vertical`,
				paginationDisabledClass: `${i}-disabled`,
			},
		}),
			(e.pagination = { el: null, $el: null, bullets: [] })
		let a = 0
		function o() {
			return (
				!e.params.pagination.el ||
				!e.pagination.el ||
				!e.pagination.$el ||
				0 === e.pagination.$el.length
			)
		}
		function l(t, n) {
			const { bulletActiveClass: r } = e.params.pagination
			t[n]().addClass(`${r}-${n}`)[n]().addClass(`${r}-${n}-${n}`)
		}
		function c() {
			const t = e.rtl,
				n = e.params.pagination
			if (o()) return
			const i =
					e.virtual && e.params.virtual.enabled
						? e.virtual.slides.length
						: e.slides.length,
				c = e.pagination.$el
			let u
			const d = e.params.loop
				? Math.ceil((i - 2 * e.loopedSlides) / e.params.slidesPerGroup)
				: e.snapGrid.length
			if (
				(e.params.loop
					? ((u = Math.ceil(
							(e.activeIndex - e.loopedSlides) / e.params.slidesPerGroup
					  )),
					  u > i - 1 - 2 * e.loopedSlides && (u -= i - 2 * e.loopedSlides),
					  u > d - 1 && (u -= d),
					  u < 0 && 'bullets' !== e.params.paginationType && (u = d + u))
					: (u = void 0 !== e.snapIndex ? e.snapIndex : e.activeIndex || 0),
				'bullets' === n.type &&
					e.pagination.bullets &&
					e.pagination.bullets.length > 0)
			) {
				const r = e.pagination.bullets
				let i, o, d
				if (
					(n.dynamicBullets &&
						((s = r.eq(0)[e.isHorizontal() ? 'outerWidth' : 'outerHeight'](!0)),
						c.css(
							e.isHorizontal() ? 'width' : 'height',
							s * (n.dynamicMainBullets + 4) + 'px'
						),
						n.dynamicMainBullets > 1 &&
							void 0 !== e.previousIndex &&
							((a += u - (e.previousIndex - e.loopedSlides || 0)),
							a > n.dynamicMainBullets - 1
								? (a = n.dynamicMainBullets - 1)
								: a < 0 && (a = 0)),
						(i = Math.max(u - a, 0)),
						(o = i + (Math.min(r.length, n.dynamicMainBullets) - 1)),
						(d = (o + i) / 2)),
					r.removeClass(
						['', '-next', '-next-next', '-prev', '-prev-prev', '-main']
							.map(e => `${n.bulletActiveClass}${e}`)
							.join(' ')
					),
					c.length > 1)
				)
					r.each(e => {
						const t = Ko(e),
							r = t.index()
						r === u && t.addClass(n.bulletActiveClass),
							n.dynamicBullets &&
								(r >= i && r <= o && t.addClass(`${n.bulletActiveClass}-main`),
								r === i && l(t, 'prev'),
								r === o && l(t, 'next'))
					})
				else {
					const t = r.eq(u),
						s = t.index()
					if ((t.addClass(n.bulletActiveClass), n.dynamicBullets)) {
						const t = r.eq(i),
							a = r.eq(o)
						for (let e = i; e <= o; e += 1)
							r.eq(e).addClass(`${n.bulletActiveClass}-main`)
						if (e.params.loop)
							if (s >= r.length) {
								for (let e = n.dynamicMainBullets; e >= 0; e -= 1)
									r.eq(r.length - e).addClass(`${n.bulletActiveClass}-main`)
								r.eq(r.length - n.dynamicMainBullets - 1).addClass(
									`${n.bulletActiveClass}-prev`
								)
							} else l(t, 'prev'), l(a, 'next')
						else l(t, 'prev'), l(a, 'next')
					}
				}
				if (n.dynamicBullets) {
					const i = Math.min(r.length, n.dynamicMainBullets + 4),
						a = (s * i - s) / 2 - d * s,
						o = t ? 'right' : 'left'
					r.css(e.isHorizontal() ? o : 'top', `${a}px`)
				}
			}
			if (
				('fraction' === n.type &&
					(c.find(Nl(n.currentClass)).text(n.formatFractionCurrent(u + 1)),
					c.find(Nl(n.totalClass)).text(n.formatFractionTotal(d))),
				'progressbar' === n.type)
			) {
				let t
				t = n.progressbarOpposite
					? e.isHorizontal()
						? 'vertical'
						: 'horizontal'
					: e.isHorizontal()
					? 'horizontal'
					: 'vertical'
				const r = (u + 1) / d
				let i = 1,
					s = 1
				'horizontal' === t ? (i = r) : (s = r),
					c
						.find(Nl(n.progressbarFillClass))
						.transform(`translate3d(0,0,0) scaleX(${i}) scaleY(${s})`)
						.transition(e.params.speed)
			}
			'custom' === n.type && n.renderCustom
				? (c.html(n.renderCustom(e, u + 1, d)), r('paginationRender', c[0]))
				: r('paginationUpdate', c[0]),
				e.params.watchOverflow &&
					e.enabled &&
					c[e.isLocked ? 'addClass' : 'removeClass'](n.lockClass)
		}
		function u() {
			const t = e.params.pagination
			if (o()) return
			const n =
					e.virtual && e.params.virtual.enabled
						? e.virtual.slides.length
						: e.slides.length,
				i = e.pagination.$el
			let s = ''
			if ('bullets' === t.type) {
				let r = e.params.loop
					? Math.ceil((n - 2 * e.loopedSlides) / e.params.slidesPerGroup)
					: e.snapGrid.length
				e.params.freeMode &&
					e.params.freeMode.enabled &&
					!e.params.loop &&
					r > n &&
					(r = n)
				for (let n = 0; n < r; n += 1)
					t.renderBullet
						? (s += t.renderBullet.call(e, n, t.bulletClass))
						: (s += `<${t.bulletElement} class="${t.bulletClass}"></${t.bulletElement}>`)
				i.html(s), (e.pagination.bullets = i.find(Nl(t.bulletClass)))
			}
			'fraction' === t.type &&
				((s = t.renderFraction
					? t.renderFraction.call(e, t.currentClass, t.totalClass)
					: `<span class="${t.currentClass}"></span> / <span class="${t.totalClass}"></span>`),
				i.html(s)),
				'progressbar' === t.type &&
					((s = t.renderProgressbar
						? t.renderProgressbar.call(e, t.progressbarFillClass)
						: `<span class="${t.progressbarFillClass}"></span>`),
					i.html(s)),
				'custom' !== t.type && r('paginationRender', e.pagination.$el[0])
		}
		function d() {
			e.params.pagination = Rl(
				e,
				e.originalParams.pagination,
				e.params.pagination,
				{ el: 'swiper-pagination' }
			)
			const t = e.params.pagination
			if (!t.el) return
			let n = Ko(t.el)
			0 !== n.length &&
				(e.params.uniqueNavElements &&
					'string' == typeof t.el &&
					n.length > 1 &&
					((n = e.$el.find(t.el)),
					n.length > 1 &&
						(n = n.filter(t => Ko(t).parents('.swiper')[0] === e.el))),
				'bullets' === t.type && t.clickable && n.addClass(t.clickableClass),
				n.addClass(t.modifierClass + t.type),
				n.addClass(e.isHorizontal() ? t.horizontalClass : t.verticalClass),
				'bullets' === t.type &&
					t.dynamicBullets &&
					(n.addClass(`${t.modifierClass}${t.type}-dynamic`),
					(a = 0),
					t.dynamicMainBullets < 1 && (t.dynamicMainBullets = 1)),
				'progressbar' === t.type &&
					t.progressbarOpposite &&
					n.addClass(t.progressbarOppositeClass),
				t.clickable &&
					n.on('click', Nl(t.bulletClass), function (t) {
						t.preventDefault()
						let n = Ko(this).index() * e.params.slidesPerGroup
						e.params.loop && (n += e.loopedSlides), e.slideTo(n)
					}),
				Object.assign(e.pagination, { $el: n, el: n[0] }),
				e.enabled || n.addClass(t.lockClass))
		}
		function p() {
			const t = e.params.pagination
			if (o()) return
			const n = e.pagination.$el
			n.removeClass(t.hiddenClass),
				n.removeClass(t.modifierClass + t.type),
				n.removeClass(e.isHorizontal() ? t.horizontalClass : t.verticalClass),
				e.pagination.bullets &&
					e.pagination.bullets.removeClass &&
					e.pagination.bullets.removeClass(t.bulletActiveClass),
				t.clickable && n.off('click', Nl(t.bulletClass))
		}
		n('init', () => {
			!1 === e.params.pagination.enabled ? f() : (d(), u(), c())
		}),
			n('activeIndexChange', () => {
				;(e.params.loop || void 0 === e.snapIndex) && c()
			}),
			n('snapIndexChange', () => {
				e.params.loop || c()
			}),
			n('slidesLengthChange', () => {
				e.params.loop && (u(), c())
			}),
			n('snapGridLengthChange', () => {
				e.params.loop || (u(), c())
			}),
			n('destroy', () => {
				p()
			}),
			n('enable disable', () => {
				const { $el: t } = e.pagination
				t &&
					t[e.enabled ? 'removeClass' : 'addClass'](
						e.params.pagination.lockClass
					)
			}),
			n('lock unlock', () => {
				c()
			}),
			n('click', (t, n) => {
				const i = n.target,
					{ $el: s } = e.pagination
				if (
					e.params.pagination.el &&
					e.params.pagination.hideOnClick &&
					s &&
					s.length > 0 &&
					!Ko(i).hasClass(e.params.pagination.bulletClass)
				) {
					if (
						e.navigation &&
						((e.navigation.nextEl && i === e.navigation.nextEl) ||
							(e.navigation.prevEl && i === e.navigation.prevEl))
					)
						return
					const t = s.hasClass(e.params.pagination.hiddenClass)
					r(!0 === t ? 'paginationShow' : 'paginationHide'),
						s.toggleClass(e.params.pagination.hiddenClass)
				}
			})
		const f = () => {
			e.$el.addClass(e.params.pagination.paginationDisabledClass),
				e.pagination.$el &&
					e.pagination.$el.addClass(
						e.params.pagination.paginationDisabledClass
					),
				p()
		}
		Object.assign(e.pagination, {
			enable: () => {
				e.$el.removeClass(e.params.pagination.paginationDisabledClass),
					e.pagination.$el &&
						e.pagination.$el.removeClass(
							e.params.pagination.paginationDisabledClass
						),
					d(),
					u(),
					c()
			},
			disable: f,
			render: u,
			update: c,
			init: d,
			destroy: p,
		})
	}
	function Gl({ swiper: e, extendParams: t, on: n }) {
		t({
			thumbs: {
				swiper: null,
				multipleActiveThumbs: !0,
				autoScrollOffset: 0,
				slideThumbActiveClass: 'swiper-slide-thumb-active',
				thumbsContainerClass: 'swiper-thumbs',
			},
		})
		let r = !1,
			i = !1
		function s() {
			const t = e.thumbs.swiper
			if (!t || t.destroyed) return
			const n = t.clickedIndex,
				r = t.clickedSlide
			if (r && Ko(r).hasClass(e.params.thumbs.slideThumbActiveClass)) return
			if (null == n) return
			let i
			if (
				((i = t.params.loop
					? parseInt(Ko(t.clickedSlide).attr('data-swiper-slide-index'), 10)
					: n),
				e.params.loop)
			) {
				let t = e.activeIndex
				e.slides.eq(t).hasClass(e.params.slideDuplicateClass) &&
					(e.loopFix(),
					(e._clientLeft = e.$wrapperEl[0].clientLeft),
					(t = e.activeIndex))
				const n = e.slides
						.eq(t)
						.prevAll(`[data-swiper-slide-index="${i}"]`)
						.eq(0)
						.index(),
					r = e.slides
						.eq(t)
						.nextAll(`[data-swiper-slide-index="${i}"]`)
						.eq(0)
						.index()
				i = void 0 === n ? r : void 0 === r ? n : r - t < t - n ? r : n
			}
			e.slideTo(i)
		}
		function a() {
			const { thumbs: t } = e.params
			if (r) return !1
			r = !0
			const n = e.constructor
			if (t.swiper instanceof n)
				(e.thumbs.swiper = t.swiper),
					Object.assign(e.thumbs.swiper.originalParams, {
						watchSlidesProgress: !0,
						slideToClickedSlide: !1,
					}),
					Object.assign(e.thumbs.swiper.params, {
						watchSlidesProgress: !0,
						slideToClickedSlide: !1,
					})
			else if (el(t.swiper)) {
				const r = Object.assign({}, t.swiper)
				Object.assign(r, { watchSlidesProgress: !0, slideToClickedSlide: !1 }),
					(e.thumbs.swiper = new n(r)),
					(i = !0)
			}
			return (
				e.thumbs.swiper.$el.addClass(e.params.thumbs.thumbsContainerClass),
				e.thumbs.swiper.on('tap', s),
				!0
			)
		}
		function o(t) {
			const n = e.thumbs.swiper
			if (!n || n.destroyed) return
			const r =
				'auto' === n.params.slidesPerView
					? n.slidesPerViewDynamic()
					: n.params.slidesPerView
			let i = 1
			const s = e.params.thumbs.slideThumbActiveClass
			if (
				(e.params.slidesPerView > 1 &&
					!e.params.centeredSlides &&
					(i = e.params.slidesPerView),
				e.params.thumbs.multipleActiveThumbs || (i = 1),
				(i = Math.floor(i)),
				n.slides.removeClass(s),
				n.params.loop || (n.params.virtual && n.params.virtual.enabled))
			)
				for (let t = 0; t < i; t += 1)
					n.$wrapperEl
						.children(`[data-swiper-slide-index="${e.realIndex + t}"]`)
						.addClass(s)
			else
				for (let t = 0; t < i; t += 1) n.slides.eq(e.realIndex + t).addClass(s)
			const a = e.params.thumbs.autoScrollOffset,
				o = a && !n.params.loop
			if (e.realIndex !== n.realIndex || o) {
				let i,
					s,
					l = n.activeIndex
				if (n.params.loop) {
					n.slides.eq(l).hasClass(n.params.slideDuplicateClass) &&
						(n.loopFix(),
						(n._clientLeft = n.$wrapperEl[0].clientLeft),
						(l = n.activeIndex))
					const t = n.slides
							.eq(l)
							.prevAll(`[data-swiper-slide-index="${e.realIndex}"]`)
							.eq(0)
							.index(),
						r = n.slides
							.eq(l)
							.nextAll(`[data-swiper-slide-index="${e.realIndex}"]`)
							.eq(0)
							.index()
					;(i =
						void 0 === t
							? r
							: void 0 === r
							? t
							: r - l == l - t
							? n.params.slidesPerGroup > 1
								? r
								: l
							: r - l < l - t
							? r
							: t),
						(s = e.activeIndex > e.previousIndex ? 'next' : 'prev')
				} else (i = e.realIndex), (s = i > e.previousIndex ? 'next' : 'prev')
				o && (i += 'next' === s ? a : -1 * a),
					n.visibleSlidesIndexes &&
						n.visibleSlidesIndexes.indexOf(i) < 0 &&
						(n.params.centeredSlides
							? (i =
									i > l ? i - Math.floor(r / 2) + 1 : i + Math.floor(r / 2) - 1)
							: i > l && n.params.slidesPerGroup,
						n.slideTo(i, t ? 0 : void 0))
			}
		}
		;(e.thumbs = { swiper: null }),
			n('beforeInit', () => {
				const { thumbs: t } = e.params
				t && t.swiper && (a(), o(!0))
			}),
			n('slideChange update resize observerUpdate', () => {
				o()
			}),
			n('setTransition', (t, n) => {
				const r = e.thumbs.swiper
				r && !r.destroyed && r.setTransition(n)
			}),
			n('beforeDestroy', () => {
				const t = e.thumbs.swiper
				t && !t.destroyed && i && t.destroy()
			}),
			Object.assign(e.thumbs, { init: a, update: o })
	}
	function Yl({ swiper: e, extendParams: t, emit: n, once: r }) {
		t({
			freeMode: {
				enabled: !1,
				momentum: !0,
				momentumRatio: 1,
				momentumBounce: !0,
				momentumBounceRatio: 1,
				momentumVelocityRatio: 1,
				sticky: !1,
				minimumVelocity: 0.02,
			},
		}),
			Object.assign(e, {
				freeMode: {
					onTouchStart: function () {
						const t = e.getTranslate()
						e.setTranslate(t),
							e.setTransition(0),
							(e.touchEventsData.velocities.length = 0),
							e.freeMode.onTouchEnd({
								currentPos: e.rtl ? e.translate : -e.translate,
							})
					},
					onTouchMove: function () {
						const { touchEventsData: t, touches: n } = e
						0 === t.velocities.length &&
							t.velocities.push({
								position: n[e.isHorizontal() ? 'startX' : 'startY'],
								time: t.touchStartTime,
							}),
							t.velocities.push({
								position: n[e.isHorizontal() ? 'currentX' : 'currentY'],
								time: Zo(),
							})
					},
					onTouchEnd: function ({ currentPos: t }) {
						const {
								params: i,
								$wrapperEl: s,
								rtlTranslate: a,
								snapGrid: o,
								touchEventsData: l,
							} = e,
							c = Zo() - l.touchStartTime
						if (t < -e.minTranslate()) e.slideTo(e.activeIndex)
						else if (t > -e.maxTranslate())
							e.slides.length < o.length
								? e.slideTo(o.length - 1)
								: e.slideTo(e.slides.length - 1)
						else {
							if (i.freeMode.momentum) {
								if (l.velocities.length > 1) {
									const t = l.velocities.pop(),
										n = l.velocities.pop(),
										r = t.position - n.position,
										s = t.time - n.time
									;(e.velocity = r / s),
										(e.velocity /= 2),
										Math.abs(e.velocity) < i.freeMode.minimumVelocity &&
											(e.velocity = 0),
										(s > 150 || Zo() - t.time > 300) && (e.velocity = 0)
								} else e.velocity = 0
								;(e.velocity *= i.freeMode.momentumVelocityRatio),
									(l.velocities.length = 0)
								let t = 1e3 * i.freeMode.momentumRatio
								const c = e.velocity * t
								let u = e.translate + c
								a && (u = -u)
								let d,
									p = !1
								const f =
									20 * Math.abs(e.velocity) * i.freeMode.momentumBounceRatio
								let h
								if (u < e.maxTranslate())
									i.freeMode.momentumBounce
										? (u + e.maxTranslate() < -f && (u = e.maxTranslate() - f),
										  (d = e.maxTranslate()),
										  (p = !0),
										  (l.allowMomentumBounce = !0))
										: (u = e.maxTranslate()),
										i.loop && i.centeredSlides && (h = !0)
								else if (u > e.minTranslate())
									i.freeMode.momentumBounce
										? (u - e.minTranslate() > f && (u = e.minTranslate() + f),
										  (d = e.minTranslate()),
										  (p = !0),
										  (l.allowMomentumBounce = !0))
										: (u = e.minTranslate()),
										i.loop && i.centeredSlides && (h = !0)
								else if (i.freeMode.sticky) {
									let t
									for (let e = 0; e < o.length; e += 1)
										if (o[e] > -u) {
											t = e
											break
										}
									;(u =
										Math.abs(o[t] - u) < Math.abs(o[t - 1] - u) ||
										'next' === e.swipeDirection
											? o[t]
											: o[t - 1]),
										(u = -u)
								}
								if (
									(h &&
										r('transitionEnd', () => {
											e.loopFix()
										}),
									0 !== e.velocity)
								) {
									if (
										((t = a
											? Math.abs((-u - e.translate) / e.velocity)
											: Math.abs((u - e.translate) / e.velocity)),
										i.freeMode.sticky)
									) {
										const n = Math.abs((a ? -u : u) - e.translate),
											r = e.slidesSizesGrid[e.activeIndex]
										t =
											n < r
												? i.speed
												: n < 2 * r
												? 1.5 * i.speed
												: 2.5 * i.speed
									}
								} else if (i.freeMode.sticky) return void e.slideToClosest()
								i.freeMode.momentumBounce && p
									? (e.updateProgress(d),
									  e.setTransition(t),
									  e.setTranslate(u),
									  e.transitionStart(!0, e.swipeDirection),
									  (e.animating = !0),
									  s.transitionEnd(() => {
											e &&
												!e.destroyed &&
												l.allowMomentumBounce &&
												(n('momentumBounce'),
												e.setTransition(i.speed),
												setTimeout(() => {
													e.setTranslate(d),
														s.transitionEnd(() => {
															e && !e.destroyed && e.transitionEnd()
														})
												}, 0))
									  }))
									: e.velocity
									? (n('_freeModeNoMomentumRelease'),
									  e.updateProgress(u),
									  e.setTransition(t),
									  e.setTranslate(u),
									  e.transitionStart(!0, e.swipeDirection),
									  e.animating ||
											((e.animating = !0),
											s.transitionEnd(() => {
												e && !e.destroyed && e.transitionEnd()
											})))
									: e.updateProgress(u),
									e.updateActiveIndex(),
									e.updateSlidesClasses()
							} else {
								if (i.freeMode.sticky) return void e.slideToClosest()
								i.freeMode && n('_freeModeNoMomentumRelease')
							}
							;(!i.freeMode.momentum || c >= i.longSwipesMs) &&
								(e.updateProgress(),
								e.updateActiveIndex(),
								e.updateSlidesClasses())
						}
					},
				},
			})
	}
	var Vl = new ql('.mySwiper', {
		modules: [Fl, jl, Yl, Gl],
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: !0,
		watchSlidesProgress: !0,
		breakpoints: {
			320: { slidesPerView: 2 },
			500: { slidesPerView: 2.5 },
			800: { slidesPerView: 4 },
		},
	})
	new ql('.mySwiper2', {
		modules: [Fl, jl, Yl, Gl],
		slidesPerView: 1,
		spaceBetween: 10,
		navigation: {
			nextEl: '.detail-swiper-button-next',
			prevEl: '.detail-swiper-button-prev',
		},
		thumbs: { swiper: Vl },
	})
	if (document.querySelector('.detail-box__title')) {
		const oc = document.querySelectorAll('.detail-content__btn-spoller'),
			lc = document.querySelectorAll('.detail-content__item')
		oc.forEach(e => {
			e.addEventListener('click', e => {
				oc.forEach(e => e.classList.remove('btn-spoller--active')),
					lc.forEach(e => e.classList.remove('detail-item--active'))
				const t = e.currentTarget,
					n = t.dataset.tabsdetail,
					r = document.querySelector(`#${n}`)
				t.classList.add('btn-spoller--active'),
					r.classList.add('detail-item--active')
			})
		})
	}
	if (document.querySelectorAll('.local-index')) {
		document.querySelectorAll('.local-index').forEach(e => {
			e.addEventListener('click', t => {
				const n = e.dataset.slider
				window.localStorage.setItem(1, n)
			})
		})
	}
	if (document.querySelector('.feedback__form')) {
		const cc = document.querySelector('.feedback__btn'),
			uc = document.querySelector('.feedback__form'),
			dc = uc.querySelectorAll('.input-field-index')
		function pc(e) {
			Hr.timeline()
				.to(e, { x: -3, duration: 0.1 })
				.to(e, { x: 3, duration: 0.1 })
				.to(e, { x: -2, duration: 0.1 })
				.to(e, { x: 0, duration: 0.1 })
		}
		function fc(e, t, n) {
			;(e.textContent = `${n}`),
				e.classList.add('span-error'),
				t.classList.add('input-error'),
				pc(t)
		}
		function hc(e, t, n) {
			pc(t),
				(t.placeholder = 'Обязательное поле'),
				t.classList.add('input-error'),
				e.classList.add('span-error'),
				(e.style.top = '0'),
				(e.style.left = '16px'),
				(e.style.fontSize = '14px'),
				(e.textContent = `${n}`)
		}
		function mc(e, t, n) {
			t.classList.remove('input-error'),
				e.classList.remove('span-error'),
				(e.textContent = `${n}`)
		}
		uc.addEventListener('submit', e => {
			e.preventDefault()
			let t = !0
			dc.forEach(e => {
				const n = e.nextElementSibling
				if (
					(mc(n, e),
					'Name' === e.name &&
						(mc(n, e, 'Имя'),
						e.value.length > 0 &&
							e.value.length < 2 &&
							(fc(n, e, 'Некорректное Имя'), (t = !1)),
						!e.value && hc(n, e, 'Имя')),
					'Phone' === e.name)
				) {
					const r = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(
						e.value
					)
					mc(n, e, 'Телефон'),
						e.value.length > 0 &&
							!r &&
							(fc(n, e, 'Некорректный телефон'), (t = !1)),
						!e.value && hc(n, e, 'Телефон')
				}
				'Topic' === e.name &&
					(mc(n, e, 'Тема сообщения'),
					e.value.length < 8 &&
						(fc(n, e, 'Тема сообщения (от 8 символов)'), (t = !1)),
					e.value || (hc(n, e, 'Тема сообщения'), (t = !1))),
					'tech-kind' === e.name &&
						(mc(n, e, 'Вид техники'),
						e.value || (hc(n, e, 'Вид техники'), (t = !1))),
					'tech-date' === e.name &&
						(mc(n, e, 'Год техники'),
						e.value || (hc(n, e, 'Год техники'), (t = !1))),
					'tech-work' === e.name &&
						(mc(n, e, 'Необходимые работы'),
						e.value || (hc(n, e, 'Необходимые работы'), (t = !1))),
					'tech-farm' === e.name &&
						(mc(n, e, 'Название хозяйства'),
						e.value || (hc(n, e, 'Название хозяйства'), (t = !1)))
			}),
				t && (cc.textContent = 'Обращение отправлено')
		})
	}
	const Hl = window.matchMedia('(orientation:portrait)'),
		Wl = () => {
			new ql('.index-swiper', {
				modules: [Fl, jl, Yl],
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				freeMode: !0,
				breakpoints: {
					320: { slidesPerView: 3, spaceBetween: 16, slidesPerGroup: 2 },
					700: { slidesPerView: 4, spaceBetween: 16 },
					1e3: { slidesPerView: 4, spaceBetween: 30, slidesPerGroup: 5 },
				},
			})
		},
		Xl = () => {
			new ql('.index-swiper', {
				modules: [Fl, jl, Yl],
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				freeMode: !0,
				breakpoints: {
					320: { slidesPerView: 1.7, spaceBetween: 16, slidesPerGroup: 2 },
					700: { slidesPerView: 3, spaceBetween: 16 },
					1e3: { slidesPerView: 4, spaceBetween: 30, slidesPerGroup: 3 },
				},
			})
		}
	Hl.matches ? Xl() : Wl(),
		window.addEventListener('orientationchange', e => {
			Hl.matches ? Xl() : Wl()
		})
	const Ul = Hr.timeline()
	window.addEventListener('load', e => {
		Ul.from('.about__title', { x: -50, autoAlpha: 0, ease: On, delay: 1 })
			.from('.about__subtitle', { x: 50, autoAlpha: 0, ease: On }, '-=.3')
			.from('.about-leaders__bg', { autoAlpha: 0, y: 50, ease: On }, '-=.3')
			.from(
				'.about-leaders__content',
				{ autoAlpha: 0, y: 150, ease: On },
				'-=.1'
			),
			Hr.from('.what-do__title', {
				scrollTrigger: {
					trigger: '.what-do',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				x: -50,
				ease: On,
			}),
			Hr.from('.what-do__item', {
				scrollTrigger: {
					trigger: '.what-do',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				x: -150,
				ease: On,
				delay: 0.5,
				stagger: 0.3,
			}),
			Hr.from('.banks__title', {
				scrollTrigger: {
					trigger: '.banks',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 50,
				ease: On,
				delay: 0.5,
			}),
			Hr.from('.banks__img', {
				scrollTrigger: {
					trigger: '.banks',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 50,
				ease: On,
				delay: 0.5,
				stagger: 0.1,
			}),
			Hr.from('.news__title', {
				scrollTrigger: {
					trigger: '.news',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 50,
				ease: On,
			}),
			Hr.from('.news__item', {
				scrollTrigger: {
					trigger: '.news',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 100,
				ease: On,
				delay: 0.5,
				stagger: 0.1,
			}),
			Hr.from('.feedback__content', {
				scrollTrigger: {
					trigger: '.feedback__form',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				ease: On,
				delay: 0.5,
			}),
			Hr.from('.form-item', {
				scrollTrigger: {
					trigger: '.feedback__form',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 30,
				ease: On,
				delay: 0.5,
				stagger: 0.1,
			})
	})
	Hr.timeline()
	window.addEventListener('load', e => {
		Hr.from('.map__right-content', {
			scrollTrigger: {
				trigger: '.map__content',
				start: 'top center+=30%',
				end: '+=30',
			},
			autoAlpha: 0,
			x: 50,
			delay: 0.2,
			stagger: 0.4,
		}),
			Hr.from('.map__left-title', {
				scrollTrigger: {
					trigger: '.map__content',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				x: -50,
				stagger: 0.4,
			})
	})
	const Kl = Hr.timeline()
	window.addEventListener('load', e => {
		Kl.from('.service__headline-title', {
			y: 50,
			autoAlpha: 0,
			ease: On,
			delay: 1,
		})
			.from(
				'.service__headline-subtitle',
				{ y: 50, autoAlpha: 0, ease: On },
				'-=.3'
			)
			.from('.service-btn', { autoAlpha: 0, y: 50, ease: On }, '-=.3')
			.from('.service__main-bg-one', { autoAlpha: 0, x: 150, ease: On }, '-=.1')
			.from(
				'.service__main-bg-two',
				{ autoAlpha: 0, x: -150, ease: On },
				'-=.5'
			)
		Hr.timeline()
		Hr.from('.service-trust__content', {
			scrollTrigger: {
				trigger: '.service-trust__content',
				start: 'top center+=30%',
				end: '+=30',
			},
			autoAlpha: 0,
			y: 50,
			ease: On,
		}),
			Hr.from('.service-fomr-item', {
				scrollTrigger: {
					trigger: '.feedback-tech__form',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 50,
				ease: On,
				stagger: 0.15,
			})
	})
	const Ql = Hr.timeline()
	window.addEventListener('load', e => {
		if (
			(Ql.from('.ways__face-title', {
				x: -100,
				autoAlpha: 0,
				ease: On,
				delay: 1,
			})
				.from('.ways__face-photo', { y: 50, autoAlpha: 0, ease: On }, '-=.2')
				.from('.ways__face-list', {
					autoAlpha: 0,
					delay: 0.2,
					height: 0,
					ease: On,
				})
				.from('.ways__face-item', {
					autoAlpha: 0,
					delay: 0.2,
					stagger: 0.3,
					y: 40,
					ease: On,
				}),
			document.querySelector('.ways__face-list'))
		) {
			const e = document.querySelector('.ways__face-list')
			window.addEventListener('orientationchange', t => {
				Hr.to(e, { height: e.scrollHeight })
			})
		}
		Hr.from('.scheme__title', {
			scrollTrigger: {
				trigger: '.scheme',
				start: 'top center+=30%',
				end: '+=30',
			},
			autoAlpha: 0,
			x: -50,
		}),
			Hr.from('.scheme__item', {
				scrollTrigger: {
					trigger: '.scheme',
					start: 'top center+=30%',
					end: '+=30',
				},
				autoAlpha: 0,
				x: -20,
				stagger: 0.2,
			}),
			Hr.from('.scheme__center-link-keeper', {
				scrollTrigger: {
					trigger: '.scheme__center-link-keeper',
					start: 'top center+=90%',
					end: '+=30',
				},
				autoAlpha: 0,
				y: 50,
				delay: 1,
			})
	}),
		Hr.registerPlugin(ja)
	const Zl =
			'<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aff806e80fc5c84423687a5f4dd3a107c494deb401766c908e4ec8fadfeb9610c&amp;source=constructor" width="100%" height="535" frameborder="0"></iframe>',
		Jl =
			'<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A75188678872af15c6d861a3d42842845a2019d114caa9b335155134775ca1f7c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>'
	if (document.querySelector('.map')) {
		const gc = document.querySelector('.yandex-map'),
			vc = document.querySelector('.yandex-map-mobile')
		window.innerWidth > 1100
			? (gc.insertAdjacentHTML('afterbegin', Zl), console.log('true'))
			: vc.insertAdjacentHTML('afterbegin', Jl),
			window.addEventListener('resize', e => {
				window.innerWidth > 1100
					? gc.children.length < 1 && gc.insertAdjacentHTML('afterbegin', Zl)
					: vc.children.length < 1 && vc.insertAdjacentHTML('afterbegin', Jl)
			})
	}
	!(function (e) {
		let t = new Image()
		;(t.onload = t.onerror =
			function () {
				e(2 === t.height)
			}),
			(t.src =
				'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA')
	})(function (e) {
		let t = !0 === e ? 'webp' : 'no-webp'
		document.documentElement.classList.add(t)
	})
})()

/* End */
;; /* /local/templates/palesse/assets/js/app.min.js?1687354475329809*/
