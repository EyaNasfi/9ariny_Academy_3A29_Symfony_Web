<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* lib/owlcarousel/owl.carousel.js */
class __TwigTemplate_527d53d6dd146740697ef5da197596f2eca8b5a4b0b7b2d0713a87bb398c3a5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lib/owlcarousel/owl.carousel.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lib/owlcarousel/owl.carousel.js"));

        // line 1
        echo "/**
 * Owl Carousel v2.2.1
 * Copyright 2013-2017 David Deutsch
 * Licensed under  ()
 */
/**
 * Owl carousel
 * @version 2.1.6
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 * @todo Lazy Load Icon
 * @todo prevent animationend bubling
 * @todo itemsScaleUp
 * @todo Test Zepto
 * @todo stagePadding calculate wrong active classes
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates a carousel.
\t * @class The Owl Carousel.
\t * @public
\t * @param {HTMLElement|jQuery} element - The element to create the carousel for.
\t * @param {Object} [options] - The options
\t */
\tfunction Owl(element, options) {

\t\t/**
\t\t * Current settings for the carousel.
\t\t * @public
\t\t */
\t\tthis.settings = null;

\t\t/**
\t\t * Current options set by the caller including defaults.
\t\t * @public
\t\t */
\t\tthis.options = \$.extend({}, Owl.Defaults, options);

\t\t/**
\t\t * Plugin element.
\t\t * @public
\t\t */
\t\tthis.\$element = \$(element);

\t\t/**
\t\t * Proxied event handlers.
\t\t * @protected
\t\t */
\t\tthis._handlers = {};

\t\t/**
\t\t * References to the running plugins of this carousel.
\t\t * @protected
\t\t */
\t\tthis._plugins = {};

\t\t/**
\t\t * Currently suppressed events to prevent them from beeing retriggered.
\t\t * @protected
\t\t */
\t\tthis._supress = {};

\t\t/**
\t\t * Absolute current position.
\t\t * @protected
\t\t */
\t\tthis._current = null;

\t\t/**
\t\t * Animation speed in milliseconds.
\t\t * @protected
\t\t */
\t\tthis._speed = null;

\t\t/**
\t\t * Coordinates of all items in pixel.
\t\t * @todo The name of this member is missleading.
\t\t * @protected
\t\t */
\t\tthis._coordinates = [];

\t\t/**
\t\t * Current breakpoint.
\t\t * @todo Real media queries would be nice.
\t\t * @protected
\t\t */
\t\tthis._breakpoint = null;

\t\t/**
\t\t * Current width of the plugin element.
\t\t */
\t\tthis._width = null;

\t\t/**
\t\t * All real items.
\t\t * @protected
\t\t */
\t\tthis._items = [];

\t\t/**
\t\t * All cloned items.
\t\t * @protected
\t\t */
\t\tthis._clones = [];

\t\t/**
\t\t * Merge values of all items.
\t\t * @todo Maybe this could be part of a plugin.
\t\t * @protected
\t\t */
\t\tthis._mergers = [];

\t\t/**
\t\t * Widths of all items.
\t\t */
\t\tthis._widths = [];

\t\t/**
\t\t * Invalidated parts within the update process.
\t\t * @protected
\t\t */
\t\tthis._invalidated = {};

\t\t/**
\t\t * Ordered list of workers for the update process.
\t\t * @protected
\t\t */
\t\tthis._pipe = [];

\t\t/**
\t\t * Current state information for the drag operation.
\t\t * @todo #261
\t\t * @protected
\t\t */
\t\tthis._drag = {
\t\t\ttime: null,
\t\t\ttarget: null,
\t\t\tpointer: null,
\t\t\tstage: {
\t\t\t\tstart: null,
\t\t\t\tcurrent: null
\t\t\t},
\t\t\tdirection: null
\t\t};

\t\t/**
\t\t * Current state information and their tags.
\t\t * @type {Object}
\t\t * @protected
\t\t */
\t\tthis._states = {
\t\t\tcurrent: {},
\t\t\ttags: {
\t\t\t\t'initializing': [ 'busy' ],
\t\t\t\t'animating': [ 'busy' ],
\t\t\t\t'dragging': [ 'interacting' ]
\t\t\t}
\t\t};

\t\t\$.each([ 'onResize', 'onThrottledResize' ], \$.proxy(function(i, handler) {
\t\t\tthis._handlers[handler] = \$.proxy(this[handler], this);
\t\t}, this));

\t\t\$.each(Owl.Plugins, \$.proxy(function(key, plugin) {
\t\t\tthis._plugins[key.charAt(0).toLowerCase() + key.slice(1)]
\t\t\t\t= new plugin(this);
\t\t}, this));

\t\t\$.each(Owl.Workers, \$.proxy(function(priority, worker) {
\t\t\tthis._pipe.push({
\t\t\t\t'filter': worker.filter,
\t\t\t\t'run': \$.proxy(worker.run, this)
\t\t\t});
\t\t}, this));

\t\tthis.setup();
\t\tthis.initialize();
\t}

\t/**
\t * Default options for the carousel.
\t * @public
\t */
\tOwl.Defaults = {
\t\titems: 3,
\t\tloop: false,
\t\tcenter: false,
\t\trewind: false,

\t\tmouseDrag: true,
\t\ttouchDrag: true,
\t\tpullDrag: true,
\t\tfreeDrag: false,

\t\tmargin: 0,
\t\tstagePadding: 0,

\t\tmerge: false,
\t\tmergeFit: true,
\t\tautoWidth: false,

\t\tstartPosition: 0,
\t\trtl: false,

\t\tsmartSpeed: 250,
\t\tfluidSpeed: false,
\t\tdragEndSpeed: false,

\t\tresponsive: {},
\t\tresponsiveRefreshRate: 200,
\t\tresponsiveBaseElement: window,

\t\tfallbackEasing: 'swing',

\t\tinfo: false,

\t\tnestedItemSelector: false,
\t\titemElement: 'div',
\t\tstageElement: 'div',

\t\trefreshClass: 'owl-refresh',
\t\tloadedClass: 'owl-loaded',
\t\tloadingClass: 'owl-loading',
\t\trtlClass: 'owl-rtl',
\t\tresponsiveClass: 'owl-responsive',
\t\tdragClass: 'owl-drag',
\t\titemClass: 'owl-item',
\t\tstageClass: 'owl-stage',
\t\tstageOuterClass: 'owl-stage-outer',
\t\tgrabClass: 'owl-grab'
\t};

\t/**
\t * Enumeration for width.
\t * @public
\t * @readonly
\t * @enum {String}
\t */
\tOwl.Width = {
\t\tDefault: 'default',
\t\tInner: 'inner',
\t\tOuter: 'outer'
\t};

\t/**
\t * Enumeration for types.
\t * @public
\t * @readonly
\t * @enum {String}
\t */
\tOwl.Type = {
\t\tEvent: 'event',
\t\tState: 'state'
\t};

\t/**
\t * Contains all registered plugins.
\t * @public
\t */
\tOwl.Plugins = {};

\t/**
\t * List of workers involved in the update process.
\t */
\tOwl.Workers = [ {
\t\tfilter: [ 'width', 'settings' ],
\t\trun: function() {
\t\t\tthis._width = this.\$element.width();
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tcache.current = this._items && this._items[this.relative(this._current)];
\t\t}
\t}, {
\t\tfilter: [ 'items', 'settings' ],
\t\trun: function() {
\t\t\tthis.\$stage.children('.cloned').remove();
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar margin = this.settings.margin || '',
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\trtl = this.settings.rtl,
\t\t\t\tcss = {
\t\t\t\t\t'width': 'auto',
\t\t\t\t\t'margin-left': rtl ? margin : '',
\t\t\t\t\t'margin-right': rtl ? '' : margin
\t\t\t\t};

\t\t\t!grid && this.\$stage.children().css(css);

\t\t\tcache.css = css;
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar width = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
\t\t\t\tmerge = null,
\t\t\t\titerator = this._items.length,
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\twidths = [];

\t\t\tcache.items = {
\t\t\t\tmerge: false,
\t\t\t\twidth: width
\t\t\t};

\t\t\twhile (iterator--) {
\t\t\t\tmerge = this._mergers[iterator];
\t\t\t\tmerge = this.settings.mergeFit && Math.min(merge, this.settings.items) || merge;

\t\t\t\tcache.items.merge = merge > 1 || cache.items.merge;

\t\t\t\twidths[iterator] = !grid ? this._items[iterator].width() : width * merge;
\t\t\t}

\t\t\tthis._widths = widths;
\t\t}
\t}, {
\t\tfilter: [ 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar clones = [],
\t\t\t\titems = this._items,
\t\t\t\tsettings = this.settings,
\t\t\t\t// TODO: Should be computed from number of min width items in stage
\t\t\t\tview = Math.max(settings.items * 2, 4),
\t\t\t\tsize = Math.ceil(items.length / 2) * 2,
\t\t\t\trepeat = settings.loop && items.length ? settings.rewind ? view : Math.max(view, size) : 0,
\t\t\t\tappend = '',
\t\t\t\tprepend = '';

\t\t\trepeat /= 2;

\t\t\twhile (repeat--) {
\t\t\t\t// Switch to only using appended clones
\t\t\t\tclones.push(this.normalize(clones.length / 2, true));
\t\t\t\tappend = append + items[clones[clones.length - 1]][0].outerHTML;
\t\t\t\tclones.push(this.normalize(items.length - 1 - (clones.length - 1) / 2, true));
\t\t\t\tprepend = items[clones[clones.length - 1]][0].outerHTML + prepend;
\t\t\t}

\t\t\tthis._clones = clones;

\t\t\t\$(append).addClass('cloned').appendTo(this.\$stage);
\t\t\t\$(prepend).addClass('cloned').prependTo(this.\$stage);
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar rtl = this.settings.rtl ? 1 : -1,
\t\t\t\tsize = this._clones.length + this._items.length,
\t\t\t\titerator = -1,
\t\t\t\tprevious = 0,
\t\t\t\tcurrent = 0,
\t\t\t\tcoordinates = [];

\t\t\twhile (++iterator < size) {
\t\t\t\tprevious = coordinates[iterator - 1] || 0;
\t\t\t\tcurrent = this._widths[this.relative(iterator)] + this.settings.margin;
\t\t\t\tcoordinates.push(previous + current * rtl);
\t\t\t}

\t\t\tthis._coordinates = coordinates;
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar padding = this.settings.stagePadding,
\t\t\t\tcoordinates = this._coordinates,
\t\t\t\tcss = {
\t\t\t\t\t'width': Math.ceil(Math.abs(coordinates[coordinates.length - 1])) + padding * 2,
\t\t\t\t\t'padding-left': padding || '',
\t\t\t\t\t'padding-right': padding || ''
\t\t\t\t};

\t\t\tthis.\$stage.css(css);
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar iterator = this._coordinates.length,
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\titems = this.\$stage.children();

\t\t\tif (grid && cache.items.merge) {
\t\t\t\twhile (iterator--) {
\t\t\t\t\tcache.css.width = this._widths[this.relative(iterator)];
\t\t\t\t\titems.eq(iterator).css(cache.css);
\t\t\t\t}
\t\t\t} else if (grid) {
\t\t\t\tcache.css.width = cache.items.width;
\t\t\t\titems.css(cache.css);
\t\t\t}
\t\t}
\t}, {
\t\tfilter: [ 'items' ],
\t\trun: function() {
\t\t\tthis._coordinates.length < 1 && this.\$stage.removeAttr('style');
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tcache.current = cache.current ? this.\$stage.children().index(cache.current) : 0;
\t\t\tcache.current = Math.max(this.minimum(), Math.min(this.maximum(), cache.current));
\t\t\tthis.reset(cache.current);
\t\t}
\t}, {
\t\tfilter: [ 'position' ],
\t\trun: function() {
\t\t\tthis.animate(this.coordinates(this._current));
\t\t}
\t}, {
\t\tfilter: [ 'width', 'position', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar rtl = this.settings.rtl ? 1 : -1,
\t\t\t\tpadding = this.settings.stagePadding * 2,
\t\t\t\tbegin = this.coordinates(this.current()) + padding,
\t\t\t\tend = begin + this.width() * rtl,
\t\t\t\tinner, outer, matches = [], i, n;

\t\t\tfor (i = 0, n = this._coordinates.length; i < n; i++) {
\t\t\t\tinner = this._coordinates[i - 1] || 0;
\t\t\t\touter = Math.abs(this._coordinates[i]) + padding * rtl;

\t\t\t\tif ((this.op(inner, '<=', begin) && (this.op(inner, '>', end)))
\t\t\t\t\t|| (this.op(outer, '<', begin) && this.op(outer, '>', end))) {
\t\t\t\t\tmatches.push(i);
\t\t\t\t}
\t\t\t}

\t\t\tthis.\$stage.children('.active').removeClass('active');
\t\t\tthis.\$stage.children(':eq(' + matches.join('), :eq(') + ')').addClass('active');

\t\t\tif (this.settings.center) {
\t\t\t\tthis.\$stage.children('.center').removeClass('center');
\t\t\t\tthis.\$stage.children().eq(this.current()).addClass('center');
\t\t\t}
\t\t}
\t} ];

\t/**
\t * Initializes the carousel.
\t * @protected
\t */
\tOwl.prototype.initialize = function() {
\t\tthis.enter('initializing');
\t\tthis.trigger('initialize');

\t\tthis.\$element.toggleClass(this.settings.rtlClass, this.settings.rtl);

\t\tif (this.settings.autoWidth && !this.is('pre-loading')) {
\t\t\tvar imgs, nestedSelector, width;
\t\t\timgs = this.\$element.find('img');
\t\t\tnestedSelector = this.settings.nestedItemSelector ? '.' + this.settings.nestedItemSelector : undefined;
\t\t\twidth = this.\$element.children(nestedSelector).width();

\t\t\tif (imgs.length && width <= 0) {
\t\t\t\tthis.preloadAutoWidthImages(imgs);
\t\t\t}
\t\t}

\t\tthis.\$element.addClass(this.options.loadingClass);

\t\t// create stage
\t\tthis.\$stage = \$('<' + this.settings.stageElement + ' class=\"' + this.settings.stageClass + '\"/>')
\t\t\t.wrap('<div class=\"' + this.settings.stageOuterClass + '\"/>');

\t\t// append stage
\t\tthis.\$element.append(this.\$stage.parent());

\t\t// append content
\t\tthis.replace(this.\$element.children().not(this.\$stage.parent()));

\t\t// check visibility
\t\tif (this.\$element.is(':visible')) {
\t\t\t// update view
\t\t\tthis.refresh();
\t\t} else {
\t\t\t// invalidate width
\t\t\tthis.invalidate('width');
\t\t}

\t\tthis.\$element
\t\t\t.removeClass(this.options.loadingClass)
\t\t\t.addClass(this.options.loadedClass);

\t\t// register event handlers
\t\tthis.registerEventHandlers();

\t\tthis.leave('initializing');
\t\tthis.trigger('initialized');
\t};

\t/**
\t * Setups the current settings.
\t * @todo Remove responsive classes. Why should adaptive designs be brought into IE8?
\t * @todo Support for media queries by using `matchMedia` would be nice.
\t * @public
\t */
\tOwl.prototype.setup = function() {
\t\tvar viewport = this.viewport(),
\t\t\toverwrites = this.options.responsive,
\t\t\tmatch = -1,
\t\t\tsettings = null;

\t\tif (!overwrites) {
\t\t\tsettings = \$.extend({}, this.options);
\t\t} else {
\t\t\t\$.each(overwrites, function(breakpoint) {
\t\t\t\tif (breakpoint <= viewport && breakpoint > match) {
\t\t\t\t\tmatch = Number(breakpoint);
\t\t\t\t}
\t\t\t});

\t\t\tsettings = \$.extend({}, this.options, overwrites[match]);
\t\t\tif (typeof settings.stagePadding === 'function') {
\t\t\t\tsettings.stagePadding = settings.stagePadding();
\t\t\t}
\t\t\tdelete settings.responsive;

\t\t\t// responsive class
\t\t\tif (settings.responsiveClass) {
\t\t\t\tthis.\$element.attr('class',
\t\t\t\t\tthis.\$element.attr('class').replace(new RegExp('(' + this.options.responsiveClass + '-)\\\\S+\\\\s', 'g'), '\$1' + match)
\t\t\t\t);
\t\t\t}
\t\t}

\t\tthis.trigger('change', { property: { name: 'settings', value: settings } });
\t\tthis._breakpoint = match;
\t\tthis.settings = settings;
\t\tthis.invalidate('settings');
\t\tthis.trigger('changed', { property: { name: 'settings', value: this.settings } });
\t};

\t/**
\t * Updates option logic if necessery.
\t * @protected
\t */
\tOwl.prototype.optionsLogic = function() {
\t\tif (this.settings.autoWidth) {
\t\t\tthis.settings.stagePadding = false;
\t\t\tthis.settings.merge = false;
\t\t}
\t};

\t/**
\t * Prepares an item before add.
\t * @todo Rename event parameter `content` to `item`.
\t * @protected
\t * @returns {jQuery|HTMLElement} - The item container.
\t */
\tOwl.prototype.prepare = function(item) {
\t\tvar event = this.trigger('prepare', { content: item });

\t\tif (!event.data) {
\t\t\tevent.data = \$('<' + this.settings.itemElement + '/>')
\t\t\t\t.addClass(this.options.itemClass).append(item)
\t\t}

\t\tthis.trigger('prepared', { content: event.data });

\t\treturn event.data;
\t};

\t/**
\t * Updates the view.
\t * @public
\t */
\tOwl.prototype.update = function() {
\t\tvar i = 0,
\t\t\tn = this._pipe.length,
\t\t\tfilter = \$.proxy(function(p) { return this[p] }, this._invalidated),
\t\t\tcache = {};

\t\twhile (i < n) {
\t\t\tif (this._invalidated.all || \$.grep(this._pipe[i].filter, filter).length > 0) {
\t\t\t\tthis._pipe[i].run(cache);
\t\t\t}
\t\t\ti++;
\t\t}

\t\tthis._invalidated = {};

\t\t!this.is('valid') && this.enter('valid');
\t};

\t/**
\t * Gets the width of the view.
\t * @public
\t * @param {Owl.Width} [dimension=Owl.Width.Default] - The dimension to return.
\t * @returns {Number} - The width of the view in pixel.
\t */
\tOwl.prototype.width = function(dimension) {
\t\tdimension = dimension || Owl.Width.Default;
\t\tswitch (dimension) {
\t\t\tcase Owl.Width.Inner:
\t\t\tcase Owl.Width.Outer:
\t\t\t\treturn this._width;
\t\t\tdefault:
\t\t\t\treturn this._width - this.settings.stagePadding * 2 + this.settings.margin;
\t\t}
\t};

\t/**
\t * Refreshes the carousel primarily for adaptive purposes.
\t * @public
\t */
\tOwl.prototype.refresh = function() {
\t\tthis.enter('refreshing');
\t\tthis.trigger('refresh');

\t\tthis.setup();

\t\tthis.optionsLogic();

\t\tthis.\$element.addClass(this.options.refreshClass);

\t\tthis.update();

\t\tthis.\$element.removeClass(this.options.refreshClass);

\t\tthis.leave('refreshing');
\t\tthis.trigger('refreshed');
\t};

\t/**
\t * Checks window `resize` event.
\t * @protected
\t */
\tOwl.prototype.onThrottledResize = function() {
\t\twindow.clearTimeout(this.resizeTimer);
\t\tthis.resizeTimer = window.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate);
\t};

\t/**
\t * Checks window `resize` event.
\t * @protected
\t */
\tOwl.prototype.onResize = function() {
\t\tif (!this._items.length) {
\t\t\treturn false;
\t\t}

\t\tif (this._width === this.\$element.width()) {
\t\t\treturn false;
\t\t}

\t\tif (!this.\$element.is(':visible')) {
\t\t\treturn false;
\t\t}

\t\tthis.enter('resizing');

\t\tif (this.trigger('resize').isDefaultPrevented()) {
\t\t\tthis.leave('resizing');
\t\t\treturn false;
\t\t}

\t\tthis.invalidate('width');

\t\tthis.refresh();

\t\tthis.leave('resizing');
\t\tthis.trigger('resized');
\t};

\t/**
\t * Registers event handlers.
\t * @todo Check `msPointerEnabled`
\t * @todo #261
\t * @protected
\t */
\tOwl.prototype.registerEventHandlers = function() {
\t\tif (\$.support.transition) {
\t\t\tthis.\$stage.on(\$.support.transition.end + '.owl.core', \$.proxy(this.onTransitionEnd, this));
\t\t}

\t\tif (this.settings.responsive !== false) {
\t\t\tthis.on(window, 'resize', this._handlers.onThrottledResize);
\t\t}

\t\tif (this.settings.mouseDrag) {
\t\t\tthis.\$element.addClass(this.options.dragClass);
\t\t\tthis.\$stage.on('mousedown.owl.core', \$.proxy(this.onDragStart, this));
\t\t\tthis.\$stage.on('dragstart.owl.core selectstart.owl.core', function() { return false });
\t\t}

\t\tif (this.settings.touchDrag){
\t\t\tthis.\$stage.on('touchstart.owl.core', \$.proxy(this.onDragStart, this));
\t\t\tthis.\$stage.on('touchcancel.owl.core', \$.proxy(this.onDragEnd, this));
\t\t}
\t};

\t/**
\t * Handles `touchstart` and `mousedown` events.
\t * @todo Horizontal swipe threshold as option
\t * @todo #261
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragStart = function(event) {
\t\tvar stage = null;

\t\tif (event.which === 3) {
\t\t\treturn;
\t\t}

\t\tif (\$.support.transform) {
\t\t\tstage = this.\$stage.css('transform').replace(/.*\\(|\\)| /g, '').split(',');
\t\t\tstage = {
\t\t\t\tx: stage[stage.length === 16 ? 12 : 4],
\t\t\t\ty: stage[stage.length === 16 ? 13 : 5]
\t\t\t};
\t\t} else {
\t\t\tstage = this.\$stage.position();
\t\t\tstage = {
\t\t\t\tx: this.settings.rtl ?
\t\t\t\t\tstage.left + this.\$stage.width() - this.width() + this.settings.margin :
\t\t\t\t\tstage.left,
\t\t\t\ty: stage.top
\t\t\t};
\t\t}

\t\tif (this.is('animating')) {
\t\t\t\$.support.transform ? this.animate(stage.x) : this.\$stage.stop()
\t\t\tthis.invalidate('position');
\t\t}

\t\tthis.\$element.toggleClass(this.options.grabClass, event.type === 'mousedown');

\t\tthis.speed(0);

\t\tthis._drag.time = new Date().getTime();
\t\tthis._drag.target = \$(event.target);
\t\tthis._drag.stage.start = stage;
\t\tthis._drag.stage.current = stage;
\t\tthis._drag.pointer = this.pointer(event);

\t\t\$(document).on('mouseup.owl.core touchend.owl.core', \$.proxy(this.onDragEnd, this));

\t\t\$(document).one('mousemove.owl.core touchmove.owl.core', \$.proxy(function(event) {
\t\t\tvar delta = this.difference(this._drag.pointer, this.pointer(event));

\t\t\t\$(document).on('mousemove.owl.core touchmove.owl.core', \$.proxy(this.onDragMove, this));

\t\t\tif (Math.abs(delta.x) < Math.abs(delta.y) && this.is('valid')) {
\t\t\t\treturn;
\t\t\t}

\t\t\tevent.preventDefault();

\t\t\tthis.enter('dragging');
\t\t\tthis.trigger('drag');
\t\t}, this));
\t};

\t/**
\t * Handles the `touchmove` and `mousemove` events.
\t * @todo #261
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragMove = function(event) {
\t\tvar minimum = null,
\t\t\tmaximum = null,
\t\t\tpull = null,
\t\t\tdelta = this.difference(this._drag.pointer, this.pointer(event)),
\t\t\tstage = this.difference(this._drag.stage.start, delta);

\t\tif (!this.is('dragging')) {
\t\t\treturn;
\t\t}

\t\tevent.preventDefault();

\t\tif (this.settings.loop) {
\t\t\tminimum = this.coordinates(this.minimum());
\t\t\tmaximum = this.coordinates(this.maximum() + 1) - minimum;
\t\t\tstage.x = (((stage.x - minimum) % maximum + maximum) % maximum) + minimum;
\t\t} else {
\t\t\tminimum = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum());
\t\t\tmaximum = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum());
\t\t\tpull = this.settings.pullDrag ? -1 * delta.x / 5 : 0;
\t\t\tstage.x = Math.max(Math.min(stage.x, minimum + pull), maximum + pull);
\t\t}

\t\tthis._drag.stage.current = stage;

\t\tthis.animate(stage.x);
\t};

\t/**
\t * Handles the `touchend` and `mouseup` events.
\t * @todo #261
\t * @todo Threshold for click event
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragEnd = function(event) {
\t\tvar delta = this.difference(this._drag.pointer, this.pointer(event)),
\t\t\tstage = this._drag.stage.current,
\t\t\tdirection = delta.x > 0 ^ this.settings.rtl ? 'left' : 'right';

\t\t\$(document).off('.owl.core');

\t\tthis.\$element.removeClass(this.options.grabClass);

\t\tif (delta.x !== 0 && this.is('dragging') || !this.is('valid')) {
\t\t\tthis.speed(this.settings.dragEndSpeed || this.settings.smartSpeed);
\t\t\tthis.current(this.closest(stage.x, delta.x !== 0 ? direction : this._drag.direction));
\t\t\tthis.invalidate('position');
\t\t\tthis.update();

\t\t\tthis._drag.direction = direction;

\t\t\tif (Math.abs(delta.x) > 3 || new Date().getTime() - this._drag.time > 300) {
\t\t\t\tthis._drag.target.one('click.owl.core', function() { return false; });
\t\t\t}
\t\t}

\t\tif (!this.is('dragging')) {
\t\t\treturn;
\t\t}

\t\tthis.leave('dragging');
\t\tthis.trigger('dragged');
\t};

\t/**
\t * Gets absolute position of the closest item for a coordinate.
\t * @todo Setting `freeDrag` makes `closest` not reusable. See #165.
\t * @protected
\t * @param {Number} coordinate - The coordinate in pixel.
\t * @param {String} direction - The direction to check for the closest item. Ether `left` or `right`.
\t * @return {Number} - The absolute position of the closest item.
\t */
\tOwl.prototype.closest = function(coordinate, direction) {
\t\tvar position = -1,
\t\t\tpull = 30,
\t\t\twidth = this.width(),
\t\t\tcoordinates = this.coordinates();

\t\tif (!this.settings.freeDrag) {
\t\t\t// check closest item
\t\t\t\$.each(coordinates, \$.proxy(function(index, value) {
\t\t\t\t// on a left pull, check on current index
\t\t\t\tif (direction === 'left' && coordinate > value - pull && coordinate < value + pull) {
\t\t\t\t\tposition = index;
\t\t\t\t// on a right pull, check on previous index
\t\t\t\t// to do so, subtract width from value and set position = index + 1
\t\t\t\t} else if (direction === 'right' && coordinate > value - width - pull && coordinate < value - width + pull) {
\t\t\t\t\tposition = index + 1;
\t\t\t\t} else if (this.op(coordinate, '<', value)
\t\t\t\t\t&& this.op(coordinate, '>', coordinates[index + 1] || value - width)) {
\t\t\t\t\tposition = direction === 'left' ? index + 1 : index;
\t\t\t\t}
\t\t\t\treturn position === -1;
\t\t\t}, this));
\t\t}

\t\tif (!this.settings.loop) {
\t\t\t// non loop boundries
\t\t\tif (this.op(coordinate, '>', coordinates[this.minimum()])) {
\t\t\t\tposition = coordinate = this.minimum();
\t\t\t} else if (this.op(coordinate, '<', coordinates[this.maximum()])) {
\t\t\t\tposition = coordinate = this.maximum();
\t\t\t}
\t\t}

\t\treturn position;
\t};

\t/**
\t * Animates the stage.
\t * @todo #270
\t * @public
\t * @param {Number} coordinate - The coordinate in pixels.
\t */
\tOwl.prototype.animate = function(coordinate) {
\t\tvar animate = this.speed() > 0;

\t\tthis.is('animating') && this.onTransitionEnd();

\t\tif (animate) {
\t\t\tthis.enter('animating');
\t\t\tthis.trigger('translate');
\t\t}

\t\tif (\$.support.transform3d && \$.support.transition) {
\t\t\tthis.\$stage.css({
\t\t\t\ttransform: 'translate3d(' + coordinate + 'px,0px,0px)',
\t\t\t\ttransition: (this.speed() / 1000) + 's'
\t\t\t});
\t\t} else if (animate) {
\t\t\tthis.\$stage.animate({
\t\t\t\tleft: coordinate + 'px'
\t\t\t}, this.speed(), this.settings.fallbackEasing, \$.proxy(this.onTransitionEnd, this));
\t\t} else {
\t\t\tthis.\$stage.css({
\t\t\t\tleft: coordinate + 'px'
\t\t\t});
\t\t}
\t};

\t/**
\t * Checks whether the carousel is in a specific state or not.
\t * @param {String} state - The state to check.
\t * @returns {Boolean} - The flag which indicates if the carousel is busy.
\t */
\tOwl.prototype.is = function(state) {
\t\treturn this._states.current[state] && this._states.current[state] > 0;
\t};

\t/**
\t * Sets the absolute position of the current item.
\t * @public
\t * @param {Number} [position] - The new absolute position or nothing to leave it unchanged.
\t * @returns {Number} - The absolute position of the current item.
\t */
\tOwl.prototype.current = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._current;
\t\t}

\t\tif (this._items.length === 0) {
\t\t\treturn undefined;
\t\t}

\t\tposition = this.normalize(position);

\t\tif (this._current !== position) {
\t\t\tvar event = this.trigger('change', { property: { name: 'position', value: position } });

\t\t\tif (event.data !== undefined) {
\t\t\t\tposition = this.normalize(event.data);
\t\t\t}

\t\t\tthis._current = position;

\t\t\tthis.invalidate('position');

\t\t\tthis.trigger('changed', { property: { name: 'position', value: this._current } });
\t\t}

\t\treturn this._current;
\t};

\t/**
\t * Invalidates the given part of the update routine.
\t * @param {String} [part] - The part to invalidate.
\t * @returns {Array.<String>} - The invalidated parts.
\t */
\tOwl.prototype.invalidate = function(part) {
\t\tif (\$.type(part) === 'string') {
\t\t\tthis._invalidated[part] = true;
\t\t\tthis.is('valid') && this.leave('valid');
\t\t}
\t\treturn \$.map(this._invalidated, function(v, i) { return i });
\t};

\t/**
\t * Resets the absolute position of the current item.
\t * @public
\t * @param {Number} position - The absolute position of the new item.
\t */
\tOwl.prototype.reset = function(position) {
\t\tposition = this.normalize(position);

\t\tif (position === undefined) {
\t\t\treturn;
\t\t}

\t\tthis._speed = 0;
\t\tthis._current = position;

\t\tthis.suppress([ 'translate', 'translated' ]);

\t\tthis.animate(this.coordinates(position));

\t\tthis.release([ 'translate', 'translated' ]);
\t};

\t/**
\t * Normalizes an absolute or a relative position of an item.
\t * @public
\t * @param {Number} position - The absolute or relative position to normalize.
\t * @param {Boolean} [relative=false] - Whether the given position is relative or not.
\t * @returns {Number} - The normalized position.
\t */
\tOwl.prototype.normalize = function(position, relative) {
\t\tvar n = this._items.length,
\t\t\tm = relative ? 0 : this._clones.length;

\t\tif (!this.isNumeric(position) || n < 1) {
\t\t\tposition = undefined;
\t\t} else if (position < 0 || position >= n + m) {
\t\t\tposition = ((position - m / 2) % n + n) % n + m / 2;
\t\t}

\t\treturn position;
\t};

\t/**
\t * Converts an absolute position of an item into a relative one.
\t * @public
\t * @param {Number} position - The absolute position to convert.
\t * @returns {Number} - The converted position.
\t */
\tOwl.prototype.relative = function(position) {
\t\tposition -= this._clones.length / 2;
\t\treturn this.normalize(position, true);
\t};

\t/**
\t * Gets the maximum position for the current item.
\t * @public
\t * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
\t * @returns {Number}
\t */
\tOwl.prototype.maximum = function(relative) {
\t\tvar settings = this.settings,
\t\t\tmaximum = this._coordinates.length,
\t\t\titerator,
\t\t\treciprocalItemsWidth,
\t\t\telementWidth;

\t\tif (settings.loop) {
\t\t\tmaximum = this._clones.length / 2 + this._items.length - 1;
\t\t} else if (settings.autoWidth || settings.merge) {
\t\t\titerator = this._items.length;
\t\t\treciprocalItemsWidth = this._items[--iterator].width();
\t\t\telementWidth = this.\$element.width();
\t\t\twhile (iterator--) {
\t\t\t\treciprocalItemsWidth += this._items[iterator].width() + this.settings.margin;
\t\t\t\tif (reciprocalItemsWidth > elementWidth) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tmaximum = iterator + 1;
\t\t} else if (settings.center) {
\t\t\tmaximum = this._items.length - 1;
\t\t} else {
\t\t\tmaximum = this._items.length - settings.items;
\t\t}

\t\tif (relative) {
\t\t\tmaximum -= this._clones.length / 2;
\t\t}

\t\treturn Math.max(maximum, 0);
\t};

\t/**
\t * Gets the minimum position for the current item.
\t * @public
\t * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
\t * @returns {Number}
\t */
\tOwl.prototype.minimum = function(relative) {
\t\treturn relative ? 0 : this._clones.length / 2;
\t};

\t/**
\t * Gets an item at the specified relative position.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
\t */
\tOwl.prototype.items = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._items.slice();
\t\t}

\t\tposition = this.normalize(position, true);
\t\treturn this._items[position];
\t};

\t/**
\t * Gets an item at the specified relative position.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
\t */
\tOwl.prototype.mergers = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._mergers.slice();
\t\t}

\t\tposition = this.normalize(position, true);
\t\treturn this._mergers[position];
\t};

\t/**
\t * Gets the absolute positions of clones for an item.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @returns {Array.<Number>} - The absolute positions of clones for the item or all if no position was given.
\t */
\tOwl.prototype.clones = function(position) {
\t\tvar odd = this._clones.length / 2,
\t\t\teven = odd + this._items.length,
\t\t\tmap = function(index) { return index % 2 === 0 ? even + index / 2 : odd - (index + 1) / 2 };

\t\tif (position === undefined) {
\t\t\treturn \$.map(this._clones, function(v, i) { return map(i) });
\t\t}

\t\treturn \$.map(this._clones, function(v, i) { return v === position ? map(i) : null });
\t};

\t/**
\t * Sets the current animation speed.
\t * @public
\t * @param {Number} [speed] - The animation speed in milliseconds or nothing to leave it unchanged.
\t * @returns {Number} - The current animation speed in milliseconds.
\t */
\tOwl.prototype.speed = function(speed) {
\t\tif (speed !== undefined) {
\t\t\tthis._speed = speed;
\t\t}

\t\treturn this._speed;
\t};

\t/**
\t * Gets the coordinate of an item.
\t * @todo The name of this method is missleanding.
\t * @public
\t * @param {Number} position - The absolute position of the item within `minimum()` and `maximum()`.
\t * @returns {Number|Array.<Number>} - The coordinate of the item in pixel or all coordinates.
\t */
\tOwl.prototype.coordinates = function(position) {
\t\tvar multiplier = 1,
\t\t\tnewPosition = position - 1,
\t\t\tcoordinate;

\t\tif (position === undefined) {
\t\t\treturn \$.map(this._coordinates, \$.proxy(function(coordinate, index) {
\t\t\t\treturn this.coordinates(index);
\t\t\t}, this));
\t\t}

\t\tif (this.settings.center) {
\t\t\tif (this.settings.rtl) {
\t\t\t\tmultiplier = -1;
\t\t\t\tnewPosition = position + 1;
\t\t\t}

\t\t\tcoordinate = this._coordinates[position];
\t\t\tcoordinate += (this.width() - coordinate + (this._coordinates[newPosition] || 0)) / 2 * multiplier;
\t\t} else {
\t\t\tcoordinate = this._coordinates[newPosition] || 0;
\t\t}

\t\tcoordinate = Math.ceil(coordinate);

\t\treturn coordinate;
\t};

\t/**
\t * Calculates the speed for a translation.
\t * @protected
\t * @param {Number} from - The absolute position of the start item.
\t * @param {Number} to - The absolute position of the target item.
\t * @param {Number} [factor=undefined] - The time factor in milliseconds.
\t * @returns {Number} - The time in milliseconds for the translation.
\t */
\tOwl.prototype.duration = function(from, to, factor) {
\t\tif (factor === 0) {
\t\t\treturn 0;
\t\t}

\t\treturn Math.min(Math.max(Math.abs(to - from), 1), 6) * Math.abs((factor || this.settings.smartSpeed));
\t};

\t/**
\t * Slides to the specified item.
\t * @public
\t * @param {Number} position - The position of the item.
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.to = function(position, speed) {
\t\tvar current = this.current(),
\t\t\trevert = null,
\t\t\tdistance = position - this.relative(current),
\t\t\tdirection = (distance > 0) - (distance < 0),
\t\t\titems = this._items.length,
\t\t\tminimum = this.minimum(),
\t\t\tmaximum = this.maximum();

\t\tif (this.settings.loop) {
\t\t\tif (!this.settings.rewind && Math.abs(distance) > items / 2) {
\t\t\t\tdistance += direction * -1 * items;
\t\t\t}

\t\t\tposition = current + distance;
\t\t\trevert = ((position - minimum) % items + items) % items + minimum;

\t\t\tif (revert !== position && revert - distance <= maximum && revert - distance > 0) {
\t\t\t\tcurrent = revert - distance;
\t\t\t\tposition = revert;
\t\t\t\tthis.reset(current);
\t\t\t}
\t\t} else if (this.settings.rewind) {
\t\t\tmaximum += 1;
\t\t\tposition = (position % maximum + maximum) % maximum;
\t\t} else {
\t\t\tposition = Math.max(minimum, Math.min(maximum, position));
\t\t}

\t\tthis.speed(this.duration(current, position, speed));
\t\tthis.current(position);

\t\tif (this.\$element.is(':visible')) {
\t\t\tthis.update();
\t\t}
\t};

\t/**
\t * Slides to the next item.
\t * @public
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.next = function(speed) {
\t\tspeed = speed || false;
\t\tthis.to(this.relative(this.current()) + 1, speed);
\t};

\t/**
\t * Slides to the previous item.
\t * @public
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.prev = function(speed) {
\t\tspeed = speed || false;
\t\tthis.to(this.relative(this.current()) - 1, speed);
\t};

\t/**
\t * Handles the end of an animation.
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onTransitionEnd = function(event) {

\t\t// if css2 animation then event object is undefined
\t\tif (event !== undefined) {
\t\t\tevent.stopPropagation();

\t\t\t// Catch only owl-stage transitionEnd event
\t\t\tif ((event.target || event.srcElement || event.originalTarget) !== this.\$stage.get(0)) {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tthis.leave('animating');
\t\tthis.trigger('translated');
\t};

\t/**
\t * Gets viewport width.
\t * @protected
\t * @return {Number} - The width in pixel.
\t */
\tOwl.prototype.viewport = function() {
\t\tvar width;
\t\tif (this.options.responsiveBaseElement !== window) {
\t\t\twidth = \$(this.options.responsiveBaseElement).width();
\t\t} else if (window.innerWidth) {
\t\t\twidth = window.innerWidth;
\t\t} else if (document.documentElement && document.documentElement.clientWidth) {
\t\t\twidth = document.documentElement.clientWidth;
\t\t} else {
\t\t\tconsole.warn('Can not detect viewport width.');
\t\t}
\t\treturn width;
\t};

\t/**
\t * Replaces the current content.
\t * @public
\t * @param {HTMLElement|jQuery|String} content - The new content.
\t */
\tOwl.prototype.replace = function(content) {
\t\tthis.\$stage.empty();
\t\tthis._items = [];

\t\tif (content) {
\t\t\tcontent = (content instanceof jQuery) ? content : \$(content);
\t\t}

\t\tif (this.settings.nestedItemSelector) {
\t\t\tcontent = content.find('.' + this.settings.nestedItemSelector);
\t\t}

\t\tcontent.filter(function() {
\t\t\treturn this.nodeType === 1;
\t\t}).each(\$.proxy(function(index, item) {
\t\t\titem = this.prepare(item);
\t\t\tthis.\$stage.append(item);
\t\t\tthis._items.push(item);
\t\t\tthis._mergers.push(item.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t}, this));

\t\tthis.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0);

\t\tthis.invalidate('items');
\t};

\t/**
\t * Adds an item.
\t * @todo Use `item` instead of `content` for the event arguments.
\t * @public
\t * @param {HTMLElement|jQuery|String} content - The item content to add.
\t * @param {Number} [position] - The relative position at which to insert the item otherwise the item will be added to the end.
\t */
\tOwl.prototype.add = function(content, position) {
\t\tvar current = this.relative(this._current);

\t\tposition = position === undefined ? this._items.length : this.normalize(position, true);
\t\tcontent = content instanceof jQuery ? content : \$(content);

\t\tthis.trigger('add', { content: content, position: position });

\t\tcontent = this.prepare(content);

\t\tif (this._items.length === 0 || position === this._items.length) {
\t\t\tthis._items.length === 0 && this.\$stage.append(content);
\t\t\tthis._items.length !== 0 && this._items[position - 1].after(content);
\t\t\tthis._items.push(content);
\t\t\tthis._mergers.push(content.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t} else {
\t\t\tthis._items[position].before(content);
\t\t\tthis._items.splice(position, 0, content);
\t\t\tthis._mergers.splice(position, 0, content.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t}

\t\tthis._items[current] && this.reset(this._items[current].index());

\t\tthis.invalidate('items');

\t\tthis.trigger('added', { content: content, position: position });
\t};

\t/**
\t * Removes an item by its position.
\t * @todo Use `item` instead of `content` for the event arguments.
\t * @public
\t * @param {Number} position - The relative position of the item to remove.
\t */
\tOwl.prototype.remove = function(position) {
\t\tposition = this.normalize(position, true);

\t\tif (position === undefined) {
\t\t\treturn;
\t\t}

\t\tthis.trigger('remove', { content: this._items[position], position: position });

\t\tthis._items[position].remove();
\t\tthis._items.splice(position, 1);
\t\tthis._mergers.splice(position, 1);

\t\tthis.invalidate('items');

\t\tthis.trigger('removed', { content: null, position: position });
\t};

\t/**
\t * Preloads images with auto width.
\t * @todo Replace by a more generic approach
\t * @protected
\t */
\tOwl.prototype.preloadAutoWidthImages = function(images) {
\t\timages.each(\$.proxy(function(i, element) {
\t\t\tthis.enter('pre-loading');
\t\t\telement = \$(element);
\t\t\t\$(new Image()).one('load', \$.proxy(function(e) {
\t\t\t\telement.attr('src', e.target.src);
\t\t\t\telement.css('opacity', 1);
\t\t\t\tthis.leave('pre-loading');
\t\t\t\t!this.is('pre-loading') && !this.is('initializing') && this.refresh();
\t\t\t}, this)).attr('src', element.attr('src') || element.attr('data-src') || element.attr('data-src-retina'));
\t\t}, this));
\t};

\t/**
\t * Destroys the carousel.
\t * @public
\t */
\tOwl.prototype.destroy = function() {

\t\tthis.\$element.off('.owl.core');
\t\tthis.\$stage.off('.owl.core');
\t\t\$(document).off('.owl.core');

\t\tif (this.settings.responsive !== false) {
\t\t\twindow.clearTimeout(this.resizeTimer);
\t\t\tthis.off(window, 'resize', this._handlers.onThrottledResize);
\t\t}

\t\tfor (var i in this._plugins) {
\t\t\tthis._plugins[i].destroy();
\t\t}

\t\tthis.\$stage.children('.cloned').remove();

\t\tthis.\$stage.unwrap();
\t\tthis.\$stage.children().contents().unwrap();
\t\tthis.\$stage.children().unwrap();

\t\tthis.\$element
\t\t\t.removeClass(this.options.refreshClass)
\t\t\t.removeClass(this.options.loadingClass)
\t\t\t.removeClass(this.options.loadedClass)
\t\t\t.removeClass(this.options.rtlClass)
\t\t\t.removeClass(this.options.dragClass)
\t\t\t.removeClass(this.options.grabClass)
\t\t\t.attr('class', this.\$element.attr('class').replace(new RegExp(this.options.responsiveClass + '-\\\\S+\\\\s', 'g'), ''))
\t\t\t.removeData('owl.carousel');
\t};

\t/**
\t * Operators to calculate right-to-left and left-to-right.
\t * @protected
\t * @param {Number} [a] - The left side operand.
\t * @param {String} [o] - The operator.
\t * @param {Number} [b] - The right side operand.
\t */
\tOwl.prototype.op = function(a, o, b) {
\t\tvar rtl = this.settings.rtl;
\t\tswitch (o) {
\t\t\tcase '<':
\t\t\t\treturn rtl ? a > b : a < b;
\t\t\tcase '>':
\t\t\t\treturn rtl ? a < b : a > b;
\t\t\tcase '>=':
\t\t\t\treturn rtl ? a <= b : a >= b;
\t\t\tcase '<=':
\t\t\t\treturn rtl ? a >= b : a <= b;
\t\t\tdefault:
\t\t\t\tbreak;
\t\t}
\t};

\t/**
\t * Attaches to an internal event.
\t * @protected
\t * @param {HTMLElement} element - The event source.
\t * @param {String} event - The event name.
\t * @param {Function} listener - The event handler to attach.
\t * @param {Boolean} capture - Wether the event should be handled at the capturing phase or not.
\t */
\tOwl.prototype.on = function(element, event, listener, capture) {
\t\tif (element.addEventListener) {
\t\t\telement.addEventListener(event, listener, capture);
\t\t} else if (element.attachEvent) {
\t\t\telement.attachEvent('on' + event, listener);
\t\t}
\t};

\t/**
\t * Detaches from an internal event.
\t * @protected
\t * @param {HTMLElement} element - The event source.
\t * @param {String} event - The event name.
\t * @param {Function} listener - The attached event handler to detach.
\t * @param {Boolean} capture - Wether the attached event handler was registered as a capturing listener or not.
\t */
\tOwl.prototype.off = function(element, event, listener, capture) {
\t\tif (element.removeEventListener) {
\t\t\telement.removeEventListener(event, listener, capture);
\t\t} else if (element.detachEvent) {
\t\t\telement.detachEvent('on' + event, listener);
\t\t}
\t};

\t/**
\t * Triggers a public event.
\t * @todo Remove `status`, `relatedTarget` should be used instead.
\t * @protected
\t * @param {String} name - The event name.
\t * @param {*} [data=null] - The event data.
\t * @param {String} [namespace=carousel] - The event namespace.
\t * @param {String} [state] - The state which is associated with the event.
\t * @param {Boolean} [enter=false] - Indicates if the call enters the specified state or not.
\t * @returns {Event} - The event arguments.
\t */
\tOwl.prototype.trigger = function(name, data, namespace, state, enter) {
\t\tvar status = {
\t\t\titem: { count: this._items.length, index: this.current() }
\t\t}, handler = \$.camelCase(
\t\t\t\$.grep([ 'on', name, namespace ], function(v) { return v })
\t\t\t\t.join('-').toLowerCase()
\t\t), event = \$.Event(
\t\t\t[ name, 'owl', namespace || 'carousel' ].join('.').toLowerCase(),
\t\t\t\$.extend({ relatedTarget: this }, status, data)
\t\t);

\t\tif (!this._supress[name]) {
\t\t\t\$.each(this._plugins, function(name, plugin) {
\t\t\t\tif (plugin.onTrigger) {
\t\t\t\t\tplugin.onTrigger(event);
\t\t\t\t}
\t\t\t});

\t\t\tthis.register({ type: Owl.Type.Event, name: name });
\t\t\tthis.\$element.trigger(event);

\t\t\tif (this.settings && typeof this.settings[handler] === 'function') {
\t\t\t\tthis.settings[handler].call(this, event);
\t\t\t}
\t\t}

\t\treturn event;
\t};

\t/**
\t * Enters a state.
\t * @param name - The state name.
\t */
\tOwl.prototype.enter = function(name) {
\t\t\$.each([ name ].concat(this._states.tags[name] || []), \$.proxy(function(i, name) {
\t\t\tif (this._states.current[name] === undefined) {
\t\t\t\tthis._states.current[name] = 0;
\t\t\t}

\t\t\tthis._states.current[name]++;
\t\t}, this));
\t};

\t/**
\t * Leaves a state.
\t * @param name - The state name.
\t */
\tOwl.prototype.leave = function(name) {
\t\t\$.each([ name ].concat(this._states.tags[name] || []), \$.proxy(function(i, name) {
\t\t\tthis._states.current[name]--;
\t\t}, this));
\t};

\t/**
\t * Registers an event or state.
\t * @public
\t * @param {Object} object - The event or state to register.
\t */
\tOwl.prototype.register = function(object) {
\t\tif (object.type === Owl.Type.Event) {
\t\t\tif (!\$.event.special[object.name]) {
\t\t\t\t\$.event.special[object.name] = {};
\t\t\t}

\t\t\tif (!\$.event.special[object.name].owl) {
\t\t\t\tvar _default = \$.event.special[object.name]._default;
\t\t\t\t\$.event.special[object.name]._default = function(e) {
\t\t\t\t\tif (_default && _default.apply && (!e.namespace || e.namespace.indexOf('owl') === -1)) {
\t\t\t\t\t\treturn _default.apply(this, arguments);
\t\t\t\t\t}
\t\t\t\t\treturn e.namespace && e.namespace.indexOf('owl') > -1;
\t\t\t\t};
\t\t\t\t\$.event.special[object.name].owl = true;
\t\t\t}
\t\t} else if (object.type === Owl.Type.State) {
\t\t\tif (!this._states.tags[object.name]) {
\t\t\t\tthis._states.tags[object.name] = object.tags;
\t\t\t} else {
\t\t\t\tthis._states.tags[object.name] = this._states.tags[object.name].concat(object.tags);
\t\t\t}

\t\t\tthis._states.tags[object.name] = \$.grep(this._states.tags[object.name], \$.proxy(function(tag, i) {
\t\t\t\treturn \$.inArray(tag, this._states.tags[object.name]) === i;
\t\t\t}, this));
\t\t}
\t};

\t/**
\t * Suppresses events.
\t * @protected
\t * @param {Array.<String>} events - The events to suppress.
\t */
\tOwl.prototype.suppress = function(events) {
\t\t\$.each(events, \$.proxy(function(index, event) {
\t\t\tthis._supress[event] = true;
\t\t}, this));
\t};

\t/**
\t * Releases suppressed events.
\t * @protected
\t * @param {Array.<String>} events - The events to release.
\t */
\tOwl.prototype.release = function(events) {
\t\t\$.each(events, \$.proxy(function(index, event) {
\t\t\tdelete this._supress[event];
\t\t}, this));
\t};

\t/**
\t * Gets unified pointer coordinates from event.
\t * @todo #261
\t * @protected
\t * @param {Event} - The `mousedown` or `touchstart` event.
\t * @returns {Object} - Contains `x` and `y` coordinates of current pointer position.
\t */
\tOwl.prototype.pointer = function(event) {
\t\tvar result = { x: null, y: null };

\t\tevent = event.originalEvent || event || window.event;

\t\tevent = event.touches && event.touches.length ?
\t\t\tevent.touches[0] : event.changedTouches && event.changedTouches.length ?
\t\t\t\tevent.changedTouches[0] : event;

\t\tif (event.pageX) {
\t\t\tresult.x = event.pageX;
\t\t\tresult.y = event.pageY;
\t\t} else {
\t\t\tresult.x = event.clientX;
\t\t\tresult.y = event.clientY;
\t\t}

\t\treturn result;
\t};

\t/**
\t * Determines if the input is a Number or something that can be coerced to a Number
\t * @protected
\t * @param {Number|String|Object|Array|Boolean|RegExp|Function|Symbol} - The input to be tested
\t * @returns {Boolean} - An indication if the input is a Number or can be coerced to a Number
\t */
\tOwl.prototype.isNumeric = function(number) {
\t\treturn !isNaN(parseFloat(number));
\t};

\t/**
\t * Gets the difference of two vectors.
\t * @todo #261
\t * @protected
\t * @param {Object} - The first vector.
\t * @param {Object} - The second vector.
\t * @returns {Object} - The difference.
\t */
\tOwl.prototype.difference = function(first, second) {
\t\treturn {
\t\t\tx: first.x - second.x,
\t\t\ty: first.y - second.y
\t\t};
\t};

\t/**
\t * The jQuery Plugin for the Owl Carousel
\t * @todo Navigation plugin `next` and `prev`
\t * @public
\t */
\t\$.fn.owlCarousel = function(option) {
\t\tvar args = Array.prototype.slice.call(arguments, 1);

\t\treturn this.each(function() {
\t\t\tvar \$this = \$(this),
\t\t\t\tdata = \$this.data('owl.carousel');

\t\t\tif (!data) {
\t\t\t\tdata = new Owl(this, typeof option == 'object' && option);
\t\t\t\t\$this.data('owl.carousel', data);

\t\t\t\t\$.each([
\t\t\t\t\t'next', 'prev', 'to', 'destroy', 'refresh', 'replace', 'add', 'remove'
\t\t\t\t], function(i, event) {
\t\t\t\t\tdata.register({ type: Owl.Type.Event, name: event });
\t\t\t\t\tdata.\$element.on(event + '.owl.carousel.core', \$.proxy(function(e) {
\t\t\t\t\t\tif (e.namespace && e.relatedTarget !== this) {
\t\t\t\t\t\t\tthis.suppress([ event ]);
\t\t\t\t\t\t\tdata[event].apply(this, [].slice.call(arguments, 1));
\t\t\t\t\t\t\tthis.release([ event ]);
\t\t\t\t\t\t}
\t\t\t\t\t}, data));
\t\t\t\t});
\t\t\t}

\t\t\tif (typeof option == 'string' && option.charAt(0) !== '_') {
\t\t\t\tdata[option].apply(data, args);
\t\t\t}
\t\t});
\t};

\t/**
\t * The constructor for the jQuery Plugin
\t * @public
\t */
\t\$.fn.owlCarousel.Constructor = Owl;

})(window.Zepto || window.jQuery, window, document);

/**
 * AutoRefresh Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the auto refresh plugin.
\t * @class The Auto Refresh Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar AutoRefresh = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Refresh interval.
\t\t * @protected
\t\t * @type {number}
\t\t */
\t\tthis._interval = null;

\t\t/**
\t\t * Whether the element is currently visible or not.
\t\t * @protected
\t\t * @type {Boolean}
\t\t */
\t\tthis._visible = null;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoRefresh) {
\t\t\t\t\tthis.watch();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, AutoRefresh.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoRefresh.Defaults = {
\t\tautoRefresh: true,
\t\tautoRefreshInterval: 500
\t};

\t/**
\t * Watches the element.
\t */
\tAutoRefresh.prototype.watch = function() {
\t\tif (this._interval) {
\t\t\treturn;
\t\t}

\t\tthis._visible = this._core.\$element.is(':visible');
\t\tthis._interval = window.setInterval(\$.proxy(this.refresh, this), this._core.settings.autoRefreshInterval);
\t};

\t/**
\t * Refreshes the element.
\t */
\tAutoRefresh.prototype.refresh = function() {
\t\tif (this._core.\$element.is(':visible') === this._visible) {
\t\t\treturn;
\t\t}

\t\tthis._visible = !this._visible;

\t\tthis._core.\$element.toggleClass('owl-hidden', !this._visible);

\t\tthis._visible && (this._core.invalidate('width') && this._core.refresh());
\t};

\t/**
\t * Destroys the plugin.
\t */
\tAutoRefresh.prototype.destroy = function() {
\t\tvar handler, property;

\t\twindow.clearInterval(this._interval);

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.AutoRefresh = AutoRefresh;

})(window.Zepto || window.jQuery, window, document);

/**
 * Lazy Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the lazy plugin.
\t * @class The Lazy Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Lazy = function(carousel) {

\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Already loaded items.
\t\t * @protected
\t\t * @type {Array.<jQuery>}
\t\t */
\t\tthis._loaded = [];

\t\t/**
\t\t * Event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel change.owl.carousel resized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (!e.namespace) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (!this._core.settings || !this._core.settings.lazyLoad) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ((e.property && e.property.name == 'position') || e.type == 'initialized') {
\t\t\t\t\tvar settings = this._core.settings,
\t\t\t\t\t\tn = (settings.center && Math.ceil(settings.items / 2) || settings.items),
\t\t\t\t\t\ti = ((settings.center && n * -1) || 0),
\t\t\t\t\t\tposition = (e.property && e.property.value !== undefined ? e.property.value : this._core.current()) + i,
\t\t\t\t\t\tclones = this._core.clones().length,
\t\t\t\t\t\tload = \$.proxy(function(i, v) { this.load(v) }, this);

\t\t\t\t\twhile (i++ < n) {
\t\t\t\t\t\tthis.load(clones / 2 + this._core.relative(position));
\t\t\t\t\t\tclones && \$.each(this._core.clones(this._core.relative(position)), load);
\t\t\t\t\t\tposition++;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set the default options
\t\tthis._core.options = \$.extend({}, Lazy.Defaults, this._core.options);

\t\t// register event handler
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tLazy.Defaults = {
\t\tlazyLoad: false
\t};

\t/**
\t * Loads all resources of an item at the specified position.
\t * @param {Number} position - The absolute position of the item.
\t * @protected
\t */
\tLazy.prototype.load = function(position) {
\t\tvar \$item = this._core.\$stage.children().eq(position),
\t\t\t\$elements = \$item && \$item.find('.owl-lazy');

\t\tif (!\$elements || \$.inArray(\$item.get(0), this._loaded) > -1) {
\t\t\treturn;
\t\t}

\t\t\$elements.each(\$.proxy(function(index, element) {
\t\t\tvar \$element = \$(element), image,
\t\t\t\turl = (window.devicePixelRatio > 1 && \$element.attr('data-src-retina')) || \$element.attr('data-src');

\t\t\tthis._core.trigger('load', { element: \$element, url: url }, 'lazy');

\t\t\tif (\$element.is('img')) {
\t\t\t\t\$element.one('load.owl.lazy', \$.proxy(function() {
\t\t\t\t\t\$element.css('opacity', 1);
\t\t\t\t\tthis._core.trigger('loaded', { element: \$element, url: url }, 'lazy');
\t\t\t\t}, this)).attr('src', url);
\t\t\t} else {
\t\t\t\timage = new Image();
\t\t\t\timage.onload = \$.proxy(function() {
\t\t\t\t\t\$element.css({
\t\t\t\t\t\t'background-image': 'url(\"' + url + '\")',
\t\t\t\t\t\t'opacity': '1'
\t\t\t\t\t});
\t\t\t\t\tthis._core.trigger('loaded', { element: \$element, url: url }, 'lazy');
\t\t\t\t}, this);
\t\t\t\timage.src = url;
\t\t\t}
\t\t}, this));

\t\tthis._loaded.push(\$item.get(0));
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tLazy.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this.handlers) {
\t\t\tthis._core.\$element.off(handler, this.handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Lazy = Lazy;

})(window.Zepto || window.jQuery, window, document);

/**
 * AutoHeight Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the auto height plugin.
\t * @class The Auto Height Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar AutoHeight = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight) {
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight && e.property.name == 'position'){
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'loaded.owl.lazy': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight
\t\t\t\t\t&& e.element.closest('.' + this._core.settings.itemClass).index() === this._core.current()) {
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, AutoHeight.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoHeight.Defaults = {
\t\tautoHeight: false,
\t\tautoHeightClass: 'owl-height'
\t};

\t/**
\t * Updates the view.
\t */
\tAutoHeight.prototype.update = function() {
\t\tvar start = this._core._current,
\t\t\tend = start + this._core.settings.items,
\t\t\tvisible = this._core.\$stage.children().toArray().slice(start, end),
\t\t\theights = [],
\t\t\tmaxheight = 0;

\t\t\$.each(visible, function(index, item) {
\t\t\theights.push(\$(item).height());
\t\t});

\t\tmaxheight = Math.max.apply(null, heights);

\t\tthis._core.\$stage.parent()
\t\t\t.height(maxheight)
\t\t\t.addClass(this._core.settings.autoHeightClass);
\t};

\tAutoHeight.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.AutoHeight = AutoHeight;

})(window.Zepto || window.jQuery, window, document);

/**
 * Video Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the video plugin.
\t * @class The Video Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Video = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Cache all video URLs.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._videos = {};

\t\t/**
\t\t * Current playing item.
\t\t * @protected
\t\t * @type {jQuery}
\t\t */
\t\tthis._playing = null;

\t\t/**
\t\t * All event handlers.
\t\t * @todo The cloned content removale is too late
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis._core.register({ type: 'state', name: 'playing', tags: [ 'interacting' ] });
\t\t\t\t}
\t\t\t}, this),
\t\t\t'resize.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.video && this.isInFullScreen()) {
\t\t\t\t\te.preventDefault();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.is('resizing')) {
\t\t\t\t\tthis._core.\$stage.find('.cloned .owl-video-frame').remove();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'position' && this._playing) {
\t\t\t\t\tthis.stop();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (!e.namespace) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar \$element = \$(e.content).find('.owl-video');

\t\t\t\tif (\$element.length) {
\t\t\t\t\t\$element.css('display', 'none');
\t\t\t\t\tthis.fetch(\$element, \$(e.content));
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Video.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);

\t\tthis._core.\$element.on('click.owl.video', '.owl-video-play-icon', \$.proxy(function(e) {
\t\t\tthis.play(e);
\t\t}, this));
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tVideo.Defaults = {
\t\tvideo: false,
\t\tvideoHeight: false,
\t\tvideoWidth: false
\t};

\t/**
\t * Gets the video ID and the type (YouTube/Vimeo/vzaar only).
\t * @protected
\t * @param {jQuery} target - The target containing the video data.
\t * @param {jQuery} item - The item containing the video.
\t */
\tVideo.prototype.fetch = function(target, item) {
\t\t\tvar type = (function() {
\t\t\t\t\tif (target.attr('data-vimeo-id')) {
\t\t\t\t\t\treturn 'vimeo';
\t\t\t\t\t} else if (target.attr('data-vzaar-id')) {
\t\t\t\t\t\treturn 'vzaar'
\t\t\t\t\t} else {
\t\t\t\t\t\treturn 'youtube';
\t\t\t\t\t}
\t\t\t\t})(),
\t\t\t\tid = target.attr('data-vimeo-id') || target.attr('data-youtube-id') || target.attr('data-vzaar-id'),
\t\t\t\twidth = target.attr('data-width') || this._core.settings.videoWidth,
\t\t\t\theight = target.attr('data-height') || this._core.settings.videoHeight,
\t\t\t\turl = target.attr('href');

\t\tif (url) {

\t\t\t/*
\t\t\t\t\tParses the id's out of the following urls (and probably more):
\t\t\t\t\thttps://www.youtube.com/watch?v=:id
\t\t\t\t\thttps://youtu.be/:id
\t\t\t\t\thttps://vimeo.com/:id
\t\t\t\t\thttps://vimeo.com/channels/:channel/:id
\t\t\t\t\thttps://vimeo.com/groups/:group/videos/:id
\t\t\t\t\thttps://app.vzaar.com/videos/:id

\t\t\t\t\tVisual example: https://regexper.com/#(http%3A%7Chttps%3A%7C)%5C%2F%5C%2F(player.%7Cwww.%7Capp.)%3F(vimeo%5C.com%7Cyoutu(be%5C.com%7C%5C.be%7Cbe%5C.googleapis%5C.com)%7Cvzaar%5C.com)%5C%2F(video%5C%2F%7Cvideos%5C%2F%7Cembed%5C%2F%7Cchannels%5C%2F.%2B%5C%2F%7Cgroups%5C%2F.%2B%5C%2F%7Cwatch%5C%3Fv%3D%7Cv%5C%2F)%3F(%5BA-Za-z0-9._%25-%5D*)(%5C%26%5CS%2B)%3F
\t\t\t*/

\t\t\tid = url.match(/(http:|https:|)\\/\\/(player.|www.|app.)?(vimeo\\.com|youtu(be\\.com|\\.be|be\\.googleapis\\.com)|vzaar\\.com)\\/(video\\/|videos\\/|embed\\/|channels\\/.+\\/|groups\\/.+\\/|watch\\?v=|v\\/)?([A-Za-z0-9._%-]*)(\\&\\S+)?/);

\t\t\tif (id[3].indexOf('youtu') > -1) {
\t\t\t\ttype = 'youtube';
\t\t\t} else if (id[3].indexOf('vimeo') > -1) {
\t\t\t\ttype = 'vimeo';
\t\t\t} else if (id[3].indexOf('vzaar') > -1) {
\t\t\t\ttype = 'vzaar';
\t\t\t} else {
\t\t\t\tthrow new Error('Video URL not supported.');
\t\t\t}
\t\t\tid = id[6];
\t\t} else {
\t\t\tthrow new Error('Missing video URL.');
\t\t}

\t\tthis._videos[url] = {
\t\t\ttype: type,
\t\t\tid: id,
\t\t\twidth: width,
\t\t\theight: height
\t\t};

\t\titem.attr('data-video', url);

\t\tthis.thumbnail(target, this._videos[url]);
\t};

\t/**
\t * Creates video thumbnail.
\t * @protected
\t * @param {jQuery} target - The target containing the video data.
\t * @param {Object} info - The video info object.
\t * @see `fetch`
\t */
\tVideo.prototype.thumbnail = function(target, video) {
\t\tvar tnLink,
\t\t\ticon,
\t\t\tpath,
\t\t\tdimensions = video.width && video.height ? 'style=\"width:' + video.width + 'px;height:' + video.height + 'px;\"' : '',
\t\t\tcustomTn = target.find('img'),
\t\t\tsrcType = 'src',
\t\t\tlazyClass = '',
\t\t\tsettings = this._core.settings,
\t\t\tcreate = function(path) {
\t\t\t\ticon = '<div class=\"owl-video-play-icon\"></div>';

\t\t\t\tif (settings.lazyLoad) {
\t\t\t\t\ttnLink = '<div class=\"owl-video-tn ' + lazyClass + '\" ' + srcType + '=\"' + path + '\"></div>';
\t\t\t\t} else {
\t\t\t\t\ttnLink = '<div class=\"owl-video-tn\" style=\"opacity:1;background-image:url(' + path + ')\"></div>';
\t\t\t\t}
\t\t\t\ttarget.after(tnLink);
\t\t\t\ttarget.after(icon);
\t\t\t};

\t\t// wrap video content into owl-video-wrapper div
\t\ttarget.wrap('<div class=\"owl-video-wrapper\"' + dimensions + '></div>');

\t\tif (this._core.settings.lazyLoad) {
\t\t\tsrcType = 'data-src';
\t\t\tlazyClass = 'owl-lazy';
\t\t}

\t\t// custom thumbnail
\t\tif (customTn.length) {
\t\t\tcreate(customTn.attr(srcType));
\t\t\tcustomTn.remove();
\t\t\treturn false;
\t\t}

\t\tif (video.type === 'youtube') {
\t\t\tpath = \"//img.youtube.com/vi/\" + video.id + \"/hqdefault.jpg\";
\t\t\tcreate(path);
\t\t} else if (video.type === 'vimeo') {
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: '//vimeo.com/api/v2/video/' + video.id + '.json',
\t\t\t\tjsonp: 'callback',
\t\t\t\tdataType: 'jsonp',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tpath = data[0].thumbnail_large;
\t\t\t\t\tcreate(path);
\t\t\t\t}
\t\t\t});
\t\t} else if (video.type === 'vzaar') {
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: '//vzaar.com/api/videos/' + video.id + '.json',
\t\t\t\tjsonp: 'callback',
\t\t\t\tdataType: 'jsonp',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tpath = data.framegrab_url;
\t\t\t\t\tcreate(path);
\t\t\t\t}
\t\t\t});
\t\t}
\t};

\t/**
\t * Stops the current video.
\t * @public
\t */
\tVideo.prototype.stop = function() {
\t\tthis._core.trigger('stop', null, 'video');
\t\tthis._playing.find('.owl-video-frame').remove();
\t\tthis._playing.removeClass('owl-video-playing');
\t\tthis._playing = null;
\t\tthis._core.leave('playing');
\t\tthis._core.trigger('stopped', null, 'video');
\t};

\t/**
\t * Starts the current video.
\t * @public
\t * @param {Event} event - The event arguments.
\t */
\tVideo.prototype.play = function(event) {
\t\tvar target = \$(event.target),
\t\t\titem = target.closest('.' + this._core.settings.itemClass),
\t\t\tvideo = this._videos[item.attr('data-video')],
\t\t\twidth = video.width || '100%',
\t\t\theight = video.height || this._core.\$stage.height(),
\t\t\thtml;

\t\tif (this._playing) {
\t\t\treturn;
\t\t}

\t\tthis._core.enter('playing');
\t\tthis._core.trigger('play', null, 'video');

\t\titem = this._core.items(this._core.relative(item.index()));

\t\tthis._core.reset(item.index());

\t\tif (video.type === 'youtube') {
\t\t\thtml = '<iframe width=\"' + width + '\" height=\"' + height + '\" src=\"//www.youtube.com/embed/' +
\t\t\t\tvideo.id + '?autoplay=1&rel=0&v=' + video.id + '\" frameborder=\"0\" allowfullscreen></iframe>';
\t\t} else if (video.type === 'vimeo') {
\t\t\thtml = '<iframe src=\"//player.vimeo.com/video/' + video.id +
\t\t\t\t'?autoplay=1\" width=\"' + width + '\" height=\"' + height +
\t\t\t\t'\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
\t\t} else if (video.type === 'vzaar') {
\t\t\thtml = '<iframe frameborder=\"0\"' + 'height=\"' + height + '\"' + 'width=\"' + width +
\t\t\t\t'\" allowfullscreen mozallowfullscreen webkitAllowFullScreen ' +
\t\t\t\t'src=\"//view.vzaar.com/' + video.id + '/player?autoplay=true\"></iframe>';
\t\t}

\t\t\$('<div class=\"owl-video-frame\">' + html + '</div>').insertAfter(item.find('.owl-video'));

\t\tthis._playing = item.addClass('owl-video-playing');
\t};

\t/**
\t * Checks whether an video is currently in full screen mode or not.
\t * @todo Bad style because looks like a readonly method but changes members.
\t * @protected
\t * @returns {Boolean}
\t */
\tVideo.prototype.isInFullScreen = function() {
\t\tvar element = document.fullscreenElement || document.mozFullScreenElement ||
\t\t\t\tdocument.webkitFullscreenElement;

\t\treturn element && \$(element).parent().hasClass('owl-video-frame');
\t};

\t/**
\t * Destroys the plugin.
\t */
\tVideo.prototype.destroy = function() {
\t\tvar handler, property;

\t\tthis._core.\$element.off('click.owl.video');

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Video = Video;

})(window.Zepto || window.jQuery, window, document);

/**
 * Animate Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the animate plugin.
\t * @class The Navigation Plugin
\t * @param {Owl} scope - The Owl Carousel
\t */
\tvar Animate = function(scope) {
\t\tthis.core = scope;
\t\tthis.core.options = \$.extend({}, Animate.Defaults, this.core.options);
\t\tthis.swapping = true;
\t\tthis.previous = undefined;
\t\tthis.next = undefined;

\t\tthis.handlers = {
\t\t\t'change.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name == 'position') {
\t\t\t\t\tthis.previous = this.core.current();
\t\t\t\t\tthis.next = e.property.value;
\t\t\t\t}
\t\t\t}, this),
\t\t\t'drag.owl.carousel dragged.owl.carousel translated.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.swapping = e.type == 'translated';
\t\t\t\t}
\t\t\t}, this),
\t\t\t'translate.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn)) {
\t\t\t\t\tthis.swap();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\tthis.core.\$element.on(this.handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAnimate.Defaults = {
\t\tanimateOut: false,
\t\tanimateIn: false
\t};

\t/**
\t * Toggles the animation classes whenever an translations starts.
\t * @protected
\t * @returns {Boolean|undefined}
\t */
\tAnimate.prototype.swap = function() {

\t\tif (this.core.settings.items !== 1) {
\t\t\treturn;
\t\t}

\t\tif (!\$.support.animation || !\$.support.transition) {
\t\t\treturn;
\t\t}

\t\tthis.core.speed(0);

\t\tvar left,
\t\t\tclear = \$.proxy(this.clear, this),
\t\t\tprevious = this.core.\$stage.children().eq(this.previous),
\t\t\tnext = this.core.\$stage.children().eq(this.next),
\t\t\tincoming = this.core.settings.animateIn,
\t\t\toutgoing = this.core.settings.animateOut;

\t\tif (this.core.current() === this.previous) {
\t\t\treturn;
\t\t}

\t\tif (outgoing) {
\t\t\tleft = this.core.coordinates(this.previous) - this.core.coordinates(this.next);
\t\t\tprevious.one(\$.support.animation.end, clear)
\t\t\t\t.css( { 'left': left + 'px' } )
\t\t\t\t.addClass('animated owl-animated-out')
\t\t\t\t.addClass(outgoing);
\t\t}

\t\tif (incoming) {
\t\t\tnext.one(\$.support.animation.end, clear)
\t\t\t\t.addClass('animated owl-animated-in')
\t\t\t\t.addClass(incoming);
\t\t}
\t};

\tAnimate.prototype.clear = function(e) {
\t\t\$(e.target).css( { 'left': '' } )
\t\t\t.removeClass('animated owl-animated-out owl-animated-in')
\t\t\t.removeClass(this.core.settings.animateIn)
\t\t\t.removeClass(this.core.settings.animateOut);
\t\tthis.core.onTransitionEnd();
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tAnimate.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this.handlers) {
\t\t\tthis.core.\$element.off(handler, this.handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Animate = Animate;

})(window.Zepto || window.jQuery, window, document);

/**
 * Autoplay Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the autoplay plugin.
\t * @class The Autoplay Plugin
\t * @param {Owl} scope - The Owl Carousel
\t */
\tvar Autoplay = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * The autoplay timeout.
\t\t * @type {Timeout}
\t\t */
\t\tthis._timeout = null;

\t\t/**
\t\t * Indicates whenever the autoplay is paused.
\t\t * @type {Boolean}
\t\t */
\t\tthis._paused = false;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'settings') {
\t\t\t\t\tif (this._core.settings.autoplay) {
\t\t\t\t\t\tthis.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.stop();
\t\t\t\t\t}
\t\t\t\t} else if (e.namespace && e.property.name === 'position') {
\t\t\t\t\t//console.log('play?', e);
\t\t\t\t\tif (this._core.settings.autoplay) {
\t\t\t\t\t\tthis._setAutoPlayInterval();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, this),
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoplay) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'play.owl.autoplay': \$.proxy(function(e, t, s) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.play(t, s);
\t\t\t\t}
\t\t\t}, this),
\t\t\t'stop.owl.autoplay': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.stop();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'mouseover.owl.autoplay': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.pause();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'mouseleave.owl.autoplay': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'touchstart.owl.core': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.pause();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'touchend.owl.core': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Autoplay.Defaults, this._core.options);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoplay.Defaults = {
\t\tautoplay: false,
\t\tautoplayTimeout: 5000,
\t\tautoplayHoverPause: false,
\t\tautoplaySpeed: false
\t};

\t/**
\t * Starts the autoplay.
\t * @public
\t * @param {Number} [timeout] - The interval before the next animation starts.
\t * @param {Number} [speed] - The animation speed for the animations.
\t */
\tAutoplay.prototype.play = function(timeout, speed) {
\t\tthis._paused = false;

\t\tif (this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\tthis._core.enter('rotating');

\t\tthis._setAutoPlayInterval();
\t};

\t/**
\t * Gets a new timeout
\t * @private
\t * @param {Number} [timeout] - The interval before the next animation starts.
\t * @param {Number} [speed] - The animation speed for the animations.
\t * @return {Timeout}
\t */
\tAutoplay.prototype._getNextTimeout = function(timeout, speed) {
\t\tif ( this._timeout ) {
\t\t\twindow.clearTimeout(this._timeout);
\t\t}
\t\treturn window.setTimeout(\$.proxy(function() {
\t\t\tif (this._paused || this._core.is('busy') || this._core.is('interacting') || document.hidden) {
\t\t\t\treturn;
\t\t\t}
\t\t\tthis._core.next(speed || this._core.settings.autoplaySpeed);
\t\t}, this), timeout || this._core.settings.autoplayTimeout);
\t};

\t/**
\t * Sets autoplay in motion.
\t * @private
\t */
\tAutoplay.prototype._setAutoPlayInterval = function() {
\t\tthis._timeout = this._getNextTimeout();
\t};

\t/**
\t * Stops the autoplay.
\t * @public
\t */
\tAutoplay.prototype.stop = function() {
\t\tif (!this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\twindow.clearTimeout(this._timeout);
\t\tthis._core.leave('rotating');
\t};

\t/**
\t * Stops the autoplay.
\t * @public
\t */
\tAutoplay.prototype.pause = function() {
\t\tif (!this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\tthis._paused = true;
\t};

\t/**
\t * Destroys the plugin.
\t */
\tAutoplay.prototype.destroy = function() {
\t\tvar handler, property;

\t\tthis.stop();

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.autoplay = Autoplay;

})(window.Zepto || window.jQuery, window, document);

/**
 * Navigation Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {
\t'use strict';

\t/**
\t * Creates the navigation plugin.
\t * @class The Navigation Plugin
\t * @param {Owl} carousel - The Owl Carousel.
\t */
\tvar Navigation = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Indicates whether the plugin is initialized or not.
\t\t * @protected
\t\t * @type {Boolean}
\t\t */
\t\tthis._initialized = false;

\t\t/**
\t\t * The current paging indexes.
\t\t * @protected
\t\t * @type {Array}
\t\t */
\t\tthis._pages = [];

\t\t/**
\t\t * All DOM elements of the user interface.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._controls = {};

\t\t/**
\t\t * Markup for an indicator.
\t\t * @protected
\t\t * @type {Array.<String>}
\t\t */
\t\tthis._templates = [];

\t\t/**
\t\t * The carousel element.
\t\t * @type {jQuery}
\t\t */
\t\tthis.\$element = this._core.\$element;

\t\t/**
\t\t * Overridden methods of the carousel.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._overrides = {
\t\t\tnext: this._core.next,
\t\t\tprev: this._core.prev,
\t\t\tto: this._core.to
\t\t};

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.push('<div class=\"' + this._core.settings.dotClass + '\">' +
\t\t\t\t\t\t\$(e.content).find('[data-dot]').addBack('[data-dot]').attr('data-dot') + '</div>');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'added.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.splice(e.position, 0, this._templates.pop());
\t\t\t\t}
\t\t\t}, this),
\t\t\t'remove.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.splice(e.position, 1);
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name == 'position') {
\t\t\t\t\tthis.draw();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && !this._initialized) {
\t\t\t\t\tthis._core.trigger('initialize', null, 'navigation');
\t\t\t\t\tthis.initialize();
\t\t\t\t\tthis.update();
\t\t\t\t\tthis.draw();
\t\t\t\t\tthis._initialized = true;
\t\t\t\t\tthis._core.trigger('initialized', null, 'navigation');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._initialized) {
\t\t\t\t\tthis._core.trigger('refresh', null, 'navigation');
\t\t\t\t\tthis.update();
\t\t\t\t\tthis.draw();
\t\t\t\t\tthis._core.trigger('refreshed', null, 'navigation');
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Navigation.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t * @todo Rename `slideBy` to `navBy`
\t */
\tNavigation.Defaults = {
\t\tnav: false,
\t\tnavText: [ 'prev', 'next' ],
\t\tnavSpeed: false,
\t\tnavElement: 'div',
\t\tnavContainer: false,
\t\tnavContainerClass: 'owl-nav',
\t\tnavClass: [ 'owl-prev', 'owl-next' ],
\t\tslideBy: 1,
\t\tdotClass: 'owl-dot',
\t\tdotsClass: 'owl-dots',
\t\tdots: true,
\t\tdotsEach: false,
\t\tdotsData: false,
\t\tdotsSpeed: false,
\t\tdotsContainer: false
\t};

\t/**
\t * Initializes the layout of the plugin and extends the carousel.
\t * @protected
\t */
\tNavigation.prototype.initialize = function() {
\t\tvar override,
\t\t\tsettings = this._core.settings;

\t\t// create DOM structure for relative navigation
\t\tthis._controls.\$relative = (settings.navContainer ? \$(settings.navContainer)
\t\t\t: \$('<div>').addClass(settings.navContainerClass).appendTo(this.\$element)).addClass('disabled');

\t\tthis._controls.\$previous = \$('<' + settings.navElement + '>')
\t\t\t.addClass(settings.navClass[0])
\t\t\t.html(settings.navText[0])
\t\t\t.prependTo(this._controls.\$relative)
\t\t\t.on('click', \$.proxy(function(e) {
\t\t\t\tthis.prev(settings.navSpeed);
\t\t\t}, this));
\t\tthis._controls.\$next = \$('<' + settings.navElement + '>')
\t\t\t.addClass(settings.navClass[1])
\t\t\t.html(settings.navText[1])
\t\t\t.appendTo(this._controls.\$relative)
\t\t\t.on('click', \$.proxy(function(e) {
\t\t\t\tthis.next(settings.navSpeed);
\t\t\t}, this));

\t\t// create DOM structure for absolute navigation
\t\tif (!settings.dotsData) {
\t\t\tthis._templates = [ \$('<div>')
\t\t\t\t.addClass(settings.dotClass)
\t\t\t\t.append(\$('<span>'))
\t\t\t\t.prop('outerHTML') ];
\t\t}

\t\tthis._controls.\$absolute = (settings.dotsContainer ? \$(settings.dotsContainer)
\t\t\t: \$('<div>').addClass(settings.dotsClass).appendTo(this.\$element)).addClass('disabled');

\t\tthis._controls.\$absolute.on('click', 'div', \$.proxy(function(e) {
\t\t\tvar index = \$(e.target).parent().is(this._controls.\$absolute)
\t\t\t\t? \$(e.target).index() : \$(e.target).parent().index();

\t\t\te.preventDefault();

\t\t\tthis.to(index, settings.dotsSpeed);
\t\t}, this));

\t\t// override public methods of the carousel
\t\tfor (override in this._overrides) {
\t\t\tthis._core[override] = \$.proxy(this[override], this);
\t\t}
\t};

\t/**
\t * Destroys the plugin.
\t * @protected
\t */
\tNavigation.prototype.destroy = function() {
\t\tvar handler, control, property, override;

\t\tfor (handler in this._handlers) {
\t\t\tthis.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (control in this._controls) {
\t\t\tthis._controls[control].remove();
\t\t}
\t\tfor (override in this.overides) {
\t\t\tthis._core[override] = this._overrides[override];
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t/**
\t * Updates the internal state.
\t * @protected
\t */
\tNavigation.prototype.update = function() {
\t\tvar i, j, k,
\t\t\tlower = this._core.clones().length / 2,
\t\t\tupper = lower + this._core.items().length,
\t\t\tmaximum = this._core.maximum(true),
\t\t\tsettings = this._core.settings,
\t\t\tsize = settings.center || settings.autoWidth || settings.dotsData
\t\t\t\t? 1 : settings.dotsEach || settings.items;

\t\tif (settings.slideBy !== 'page') {
\t\t\tsettings.slideBy = Math.min(settings.slideBy, settings.items);
\t\t}

\t\tif (settings.dots || settings.slideBy == 'page') {
\t\t\tthis._pages = [];

\t\t\tfor (i = lower, j = 0, k = 0; i < upper; i++) {
\t\t\t\tif (j >= size || j === 0) {
\t\t\t\t\tthis._pages.push({
\t\t\t\t\t\tstart: Math.min(maximum, i - lower),
\t\t\t\t\t\tend: i - lower + size - 1
\t\t\t\t\t});
\t\t\t\t\tif (Math.min(maximum, i - lower) === maximum) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\tj = 0, ++k;
\t\t\t\t}
\t\t\t\tj += this._core.mergers(this._core.relative(i));
\t\t\t}
\t\t}
\t};

\t/**
\t * Draws the user interface.
\t * @todo The option `dotsData` wont work.
\t * @protected
\t */
\tNavigation.prototype.draw = function() {
\t\tvar difference,
\t\t\tsettings = this._core.settings,
\t\t\tdisabled = this._core.items().length <= settings.items,
\t\t\tindex = this._core.relative(this._core.current()),
\t\t\tloop = settings.loop || settings.rewind;

\t\tthis._controls.\$relative.toggleClass('disabled', !settings.nav || disabled);

\t\tif (settings.nav) {
\t\t\tthis._controls.\$previous.toggleClass('disabled', !loop && index <= this._core.minimum(true));
\t\t\tthis._controls.\$next.toggleClass('disabled', !loop && index >= this._core.maximum(true));
\t\t}

\t\tthis._controls.\$absolute.toggleClass('disabled', !settings.dots || disabled);

\t\tif (settings.dots) {
\t\t\tdifference = this._pages.length - this._controls.\$absolute.children().length;

\t\t\tif (settings.dotsData && difference !== 0) {
\t\t\t\tthis._controls.\$absolute.html(this._templates.join(''));
\t\t\t} else if (difference > 0) {
\t\t\t\tthis._controls.\$absolute.append(new Array(difference + 1).join(this._templates[0]));
\t\t\t} else if (difference < 0) {
\t\t\t\tthis._controls.\$absolute.children().slice(difference).remove();
\t\t\t}

\t\t\tthis._controls.\$absolute.find('.active').removeClass('active');
\t\t\tthis._controls.\$absolute.children().eq(\$.inArray(this.current(), this._pages)).addClass('active');
\t\t}
\t};

\t/**
\t * Extends event data.
\t * @protected
\t * @param {Event} event - The event object which gets thrown.
\t */
\tNavigation.prototype.onTrigger = function(event) {
\t\tvar settings = this._core.settings;

\t\tevent.page = {
\t\t\tindex: \$.inArray(this.current(), this._pages),
\t\t\tcount: this._pages.length,
\t\t\tsize: settings && (settings.center || settings.autoWidth || settings.dotsData
\t\t\t\t? 1 : settings.dotsEach || settings.items)
\t\t};
\t};

\t/**
\t * Gets the current page position of the carousel.
\t * @protected
\t * @returns {Number}
\t */
\tNavigation.prototype.current = function() {
\t\tvar current = this._core.relative(this._core.current());
\t\treturn \$.grep(this._pages, \$.proxy(function(page, index) {
\t\t\treturn page.start <= current && page.end >= current;
\t\t}, this)).pop();
\t};

\t/**
\t * Gets the current succesor/predecessor position.
\t * @protected
\t * @returns {Number}
\t */
\tNavigation.prototype.getPosition = function(successor) {
\t\tvar position, length,
\t\t\tsettings = this._core.settings;

\t\tif (settings.slideBy == 'page') {
\t\t\tposition = \$.inArray(this.current(), this._pages);
\t\t\tlength = this._pages.length;
\t\t\tsuccessor ? ++position : --position;
\t\t\tposition = this._pages[((position % length) + length) % length].start;
\t\t} else {
\t\t\tposition = this._core.relative(this._core.current());
\t\t\tlength = this._core.items().length;
\t\t\tsuccessor ? position += settings.slideBy : position -= settings.slideBy;
\t\t}

\t\treturn position;
\t};

\t/**
\t * Slides to the next item or page.
\t * @public
\t * @param {Number} [speed=false] - The time in milliseconds for the transition.
\t */
\tNavigation.prototype.next = function(speed) {
\t\t\$.proxy(this._overrides.to, this._core)(this.getPosition(true), speed);
\t};

\t/**
\t * Slides to the previous item or page.
\t * @public
\t * @param {Number} [speed=false] - The time in milliseconds for the transition.
\t */
\tNavigation.prototype.prev = function(speed) {
\t\t\$.proxy(this._overrides.to, this._core)(this.getPosition(false), speed);
\t};

\t/**
\t * Slides to the specified item or page.
\t * @public
\t * @param {Number} position - The position of the item or page.
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t * @param {Boolean} [standard=false] - Whether to use the standard behaviour or not.
\t */
\tNavigation.prototype.to = function(position, speed, standard) {
\t\tvar length;

\t\tif (!standard && this._pages.length) {
\t\t\tlength = this._pages.length;
\t\t\t\$.proxy(this._overrides.to, this._core)(this._pages[((position % length) + length) % length].start, speed);
\t\t} else {
\t\t\t\$.proxy(this._overrides.to, this._core)(position, speed);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Navigation = Navigation;

})(window.Zepto || window.jQuery, window, document);

/**
 * Hash Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {
\t'use strict';

\t/**
\t * Creates the hash plugin.
\t * @class The Hash Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Hash = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Hash index for the items.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._hashes = {};

\t\t/**
\t\t * The carousel element.
\t\t * @type {jQuery}
\t\t */
\t\tthis.\$element = this._core.\$element;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.startPosition === 'URLHash') {
\t\t\t\t\t\$(window).trigger('hashchange.owl.navigation');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tvar hash = \$(e.content).find('[data-hash]').addBack('[data-hash]').attr('data-hash');

\t\t\t\t\tif (!hash) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tthis._hashes[hash] = e.content;
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'position') {
\t\t\t\t\tvar current = this._core.items(this._core.relative(this._core.current())),
\t\t\t\t\t\thash = \$.map(this._hashes, function(item, hash) {
\t\t\t\t\t\t\treturn item === current ? hash : null;
\t\t\t\t\t\t}).join();

\t\t\t\t\tif (!hash || window.location.hash.slice(1) === hash) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\twindow.location.hash = hash;
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Hash.Defaults, this._core.options);

\t\t// register the event handlers
\t\tthis.\$element.on(this._handlers);

\t\t// register event listener for hash navigation
\t\t\$(window).on('hashchange.owl.navigation', \$.proxy(function(e) {
\t\t\tvar hash = window.location.hash.substring(1),
\t\t\t\titems = this._core.\$stage.children(),
\t\t\t\tposition = this._hashes[hash] && items.index(this._hashes[hash]);

\t\t\tif (position === undefined || position === this._core.current()) {
\t\t\t\treturn;
\t\t\t}

\t\t\tthis._core.to(this._core.relative(position), false, true);
\t\t}, this));
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tHash.Defaults = {
\t\tURLhashListener: false
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tHash.prototype.destroy = function() {
\t\tvar handler, property;

\t\t\$(window).off('hashchange.owl.navigation');

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Hash = Hash;

})(window.Zepto || window.jQuery, window, document);

/**
 * Support Plugin
 *
 * @version 2.1.0
 * @author Vivid Planet Software GmbH
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\tvar style = \$('<support>').get(0).style,
\t\tprefixes = 'Webkit Moz O ms'.split(' '),
\t\tevents = {
\t\t\ttransition: {
\t\t\t\tend: {
\t\t\t\t\tWebkitTransition: 'webkitTransitionEnd',
\t\t\t\t\tMozTransition: 'transitionend',
\t\t\t\t\tOTransition: 'oTransitionEnd',
\t\t\t\t\ttransition: 'transitionend'
\t\t\t\t}
\t\t\t},
\t\t\tanimation: {
\t\t\t\tend: {
\t\t\t\t\tWebkitAnimation: 'webkitAnimationEnd',
\t\t\t\t\tMozAnimation: 'animationend',
\t\t\t\t\tOAnimation: 'oAnimationEnd',
\t\t\t\t\tanimation: 'animationend'
\t\t\t\t}
\t\t\t}
\t\t},
\t\ttests = {
\t\t\tcsstransforms: function() {
\t\t\t\treturn !!test('transform');
\t\t\t},
\t\t\tcsstransforms3d: function() {
\t\t\t\treturn !!test('perspective');
\t\t\t},
\t\t\tcsstransitions: function() {
\t\t\t\treturn !!test('transition');
\t\t\t},
\t\t\tcssanimations: function() {
\t\t\t\treturn !!test('animation');
\t\t\t}
\t\t};

\tfunction test(property, prefixed) {
\t\tvar result = false,
\t\t\tupper = property.charAt(0).toUpperCase() + property.slice(1);

\t\t\$.each((property + ' ' + prefixes.join(upper + ' ') + upper).split(' '), function(i, property) {
\t\t\tif (style[property] !== undefined) {
\t\t\t\tresult = prefixed ? property : true;
\t\t\t\treturn false;
\t\t\t}
\t\t});

\t\treturn result;
\t}

\tfunction prefixed(property) {
\t\treturn test(property, true);
\t}

\tif (tests.csstransitions()) {
\t\t/* jshint -W053 */
\t\t\$.support.transition = new String(prefixed('transition'))
\t\t\$.support.transition.end = events.transition.end[ \$.support.transition ];
\t}

\tif (tests.cssanimations()) {
\t\t/* jshint -W053 */
\t\t\$.support.animation = new String(prefixed('animation'))
\t\t\$.support.animation.end = events.animation.end[ \$.support.animation ];
\t}

\tif (tests.csstransforms()) {
\t\t/* jshint -W053 */
\t\t\$.support.transform = new String(prefixed('transform'));
\t\t\$.support.transform3d = tests.csstransforms3d();
\t}

})(window.Zepto || window.jQuery, window, document);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "lib/owlcarousel/owl.carousel.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Owl Carousel v2.2.1
 * Copyright 2013-2017 David Deutsch
 * Licensed under  ()
 */
/**
 * Owl carousel
 * @version 2.1.6
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 * @todo Lazy Load Icon
 * @todo prevent animationend bubling
 * @todo itemsScaleUp
 * @todo Test Zepto
 * @todo stagePadding calculate wrong active classes
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates a carousel.
\t * @class The Owl Carousel.
\t * @public
\t * @param {HTMLElement|jQuery} element - The element to create the carousel for.
\t * @param {Object} [options] - The options
\t */
\tfunction Owl(element, options) {

\t\t/**
\t\t * Current settings for the carousel.
\t\t * @public
\t\t */
\t\tthis.settings = null;

\t\t/**
\t\t * Current options set by the caller including defaults.
\t\t * @public
\t\t */
\t\tthis.options = \$.extend({}, Owl.Defaults, options);

\t\t/**
\t\t * Plugin element.
\t\t * @public
\t\t */
\t\tthis.\$element = \$(element);

\t\t/**
\t\t * Proxied event handlers.
\t\t * @protected
\t\t */
\t\tthis._handlers = {};

\t\t/**
\t\t * References to the running plugins of this carousel.
\t\t * @protected
\t\t */
\t\tthis._plugins = {};

\t\t/**
\t\t * Currently suppressed events to prevent them from beeing retriggered.
\t\t * @protected
\t\t */
\t\tthis._supress = {};

\t\t/**
\t\t * Absolute current position.
\t\t * @protected
\t\t */
\t\tthis._current = null;

\t\t/**
\t\t * Animation speed in milliseconds.
\t\t * @protected
\t\t */
\t\tthis._speed = null;

\t\t/**
\t\t * Coordinates of all items in pixel.
\t\t * @todo The name of this member is missleading.
\t\t * @protected
\t\t */
\t\tthis._coordinates = [];

\t\t/**
\t\t * Current breakpoint.
\t\t * @todo Real media queries would be nice.
\t\t * @protected
\t\t */
\t\tthis._breakpoint = null;

\t\t/**
\t\t * Current width of the plugin element.
\t\t */
\t\tthis._width = null;

\t\t/**
\t\t * All real items.
\t\t * @protected
\t\t */
\t\tthis._items = [];

\t\t/**
\t\t * All cloned items.
\t\t * @protected
\t\t */
\t\tthis._clones = [];

\t\t/**
\t\t * Merge values of all items.
\t\t * @todo Maybe this could be part of a plugin.
\t\t * @protected
\t\t */
\t\tthis._mergers = [];

\t\t/**
\t\t * Widths of all items.
\t\t */
\t\tthis._widths = [];

\t\t/**
\t\t * Invalidated parts within the update process.
\t\t * @protected
\t\t */
\t\tthis._invalidated = {};

\t\t/**
\t\t * Ordered list of workers for the update process.
\t\t * @protected
\t\t */
\t\tthis._pipe = [];

\t\t/**
\t\t * Current state information for the drag operation.
\t\t * @todo #261
\t\t * @protected
\t\t */
\t\tthis._drag = {
\t\t\ttime: null,
\t\t\ttarget: null,
\t\t\tpointer: null,
\t\t\tstage: {
\t\t\t\tstart: null,
\t\t\t\tcurrent: null
\t\t\t},
\t\t\tdirection: null
\t\t};

\t\t/**
\t\t * Current state information and their tags.
\t\t * @type {Object}
\t\t * @protected
\t\t */
\t\tthis._states = {
\t\t\tcurrent: {},
\t\t\ttags: {
\t\t\t\t'initializing': [ 'busy' ],
\t\t\t\t'animating': [ 'busy' ],
\t\t\t\t'dragging': [ 'interacting' ]
\t\t\t}
\t\t};

\t\t\$.each([ 'onResize', 'onThrottledResize' ], \$.proxy(function(i, handler) {
\t\t\tthis._handlers[handler] = \$.proxy(this[handler], this);
\t\t}, this));

\t\t\$.each(Owl.Plugins, \$.proxy(function(key, plugin) {
\t\t\tthis._plugins[key.charAt(0).toLowerCase() + key.slice(1)]
\t\t\t\t= new plugin(this);
\t\t}, this));

\t\t\$.each(Owl.Workers, \$.proxy(function(priority, worker) {
\t\t\tthis._pipe.push({
\t\t\t\t'filter': worker.filter,
\t\t\t\t'run': \$.proxy(worker.run, this)
\t\t\t});
\t\t}, this));

\t\tthis.setup();
\t\tthis.initialize();
\t}

\t/**
\t * Default options for the carousel.
\t * @public
\t */
\tOwl.Defaults = {
\t\titems: 3,
\t\tloop: false,
\t\tcenter: false,
\t\trewind: false,

\t\tmouseDrag: true,
\t\ttouchDrag: true,
\t\tpullDrag: true,
\t\tfreeDrag: false,

\t\tmargin: 0,
\t\tstagePadding: 0,

\t\tmerge: false,
\t\tmergeFit: true,
\t\tautoWidth: false,

\t\tstartPosition: 0,
\t\trtl: false,

\t\tsmartSpeed: 250,
\t\tfluidSpeed: false,
\t\tdragEndSpeed: false,

\t\tresponsive: {},
\t\tresponsiveRefreshRate: 200,
\t\tresponsiveBaseElement: window,

\t\tfallbackEasing: 'swing',

\t\tinfo: false,

\t\tnestedItemSelector: false,
\t\titemElement: 'div',
\t\tstageElement: 'div',

\t\trefreshClass: 'owl-refresh',
\t\tloadedClass: 'owl-loaded',
\t\tloadingClass: 'owl-loading',
\t\trtlClass: 'owl-rtl',
\t\tresponsiveClass: 'owl-responsive',
\t\tdragClass: 'owl-drag',
\t\titemClass: 'owl-item',
\t\tstageClass: 'owl-stage',
\t\tstageOuterClass: 'owl-stage-outer',
\t\tgrabClass: 'owl-grab'
\t};

\t/**
\t * Enumeration for width.
\t * @public
\t * @readonly
\t * @enum {String}
\t */
\tOwl.Width = {
\t\tDefault: 'default',
\t\tInner: 'inner',
\t\tOuter: 'outer'
\t};

\t/**
\t * Enumeration for types.
\t * @public
\t * @readonly
\t * @enum {String}
\t */
\tOwl.Type = {
\t\tEvent: 'event',
\t\tState: 'state'
\t};

\t/**
\t * Contains all registered plugins.
\t * @public
\t */
\tOwl.Plugins = {};

\t/**
\t * List of workers involved in the update process.
\t */
\tOwl.Workers = [ {
\t\tfilter: [ 'width', 'settings' ],
\t\trun: function() {
\t\t\tthis._width = this.\$element.width();
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tcache.current = this._items && this._items[this.relative(this._current)];
\t\t}
\t}, {
\t\tfilter: [ 'items', 'settings' ],
\t\trun: function() {
\t\t\tthis.\$stage.children('.cloned').remove();
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar margin = this.settings.margin || '',
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\trtl = this.settings.rtl,
\t\t\t\tcss = {
\t\t\t\t\t'width': 'auto',
\t\t\t\t\t'margin-left': rtl ? margin : '',
\t\t\t\t\t'margin-right': rtl ? '' : margin
\t\t\t\t};

\t\t\t!grid && this.\$stage.children().css(css);

\t\t\tcache.css = css;
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar width = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
\t\t\t\tmerge = null,
\t\t\t\titerator = this._items.length,
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\twidths = [];

\t\t\tcache.items = {
\t\t\t\tmerge: false,
\t\t\t\twidth: width
\t\t\t};

\t\t\twhile (iterator--) {
\t\t\t\tmerge = this._mergers[iterator];
\t\t\t\tmerge = this.settings.mergeFit && Math.min(merge, this.settings.items) || merge;

\t\t\t\tcache.items.merge = merge > 1 || cache.items.merge;

\t\t\t\twidths[iterator] = !grid ? this._items[iterator].width() : width * merge;
\t\t\t}

\t\t\tthis._widths = widths;
\t\t}
\t}, {
\t\tfilter: [ 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar clones = [],
\t\t\t\titems = this._items,
\t\t\t\tsettings = this.settings,
\t\t\t\t// TODO: Should be computed from number of min width items in stage
\t\t\t\tview = Math.max(settings.items * 2, 4),
\t\t\t\tsize = Math.ceil(items.length / 2) * 2,
\t\t\t\trepeat = settings.loop && items.length ? settings.rewind ? view : Math.max(view, size) : 0,
\t\t\t\tappend = '',
\t\t\t\tprepend = '';

\t\t\trepeat /= 2;

\t\t\twhile (repeat--) {
\t\t\t\t// Switch to only using appended clones
\t\t\t\tclones.push(this.normalize(clones.length / 2, true));
\t\t\t\tappend = append + items[clones[clones.length - 1]][0].outerHTML;
\t\t\t\tclones.push(this.normalize(items.length - 1 - (clones.length - 1) / 2, true));
\t\t\t\tprepend = items[clones[clones.length - 1]][0].outerHTML + prepend;
\t\t\t}

\t\t\tthis._clones = clones;

\t\t\t\$(append).addClass('cloned').appendTo(this.\$stage);
\t\t\t\$(prepend).addClass('cloned').prependTo(this.\$stage);
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar rtl = this.settings.rtl ? 1 : -1,
\t\t\t\tsize = this._clones.length + this._items.length,
\t\t\t\titerator = -1,
\t\t\t\tprevious = 0,
\t\t\t\tcurrent = 0,
\t\t\t\tcoordinates = [];

\t\t\twhile (++iterator < size) {
\t\t\t\tprevious = coordinates[iterator - 1] || 0;
\t\t\t\tcurrent = this._widths[this.relative(iterator)] + this.settings.margin;
\t\t\t\tcoordinates.push(previous + current * rtl);
\t\t\t}

\t\t\tthis._coordinates = coordinates;
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar padding = this.settings.stagePadding,
\t\t\t\tcoordinates = this._coordinates,
\t\t\t\tcss = {
\t\t\t\t\t'width': Math.ceil(Math.abs(coordinates[coordinates.length - 1])) + padding * 2,
\t\t\t\t\t'padding-left': padding || '',
\t\t\t\t\t'padding-right': padding || ''
\t\t\t\t};

\t\t\tthis.\$stage.css(css);
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tvar iterator = this._coordinates.length,
\t\t\t\tgrid = !this.settings.autoWidth,
\t\t\t\titems = this.\$stage.children();

\t\t\tif (grid && cache.items.merge) {
\t\t\t\twhile (iterator--) {
\t\t\t\t\tcache.css.width = this._widths[this.relative(iterator)];
\t\t\t\t\titems.eq(iterator).css(cache.css);
\t\t\t\t}
\t\t\t} else if (grid) {
\t\t\t\tcache.css.width = cache.items.width;
\t\t\t\titems.css(cache.css);
\t\t\t}
\t\t}
\t}, {
\t\tfilter: [ 'items' ],
\t\trun: function() {
\t\t\tthis._coordinates.length < 1 && this.\$stage.removeAttr('style');
\t\t}
\t}, {
\t\tfilter: [ 'width', 'items', 'settings' ],
\t\trun: function(cache) {
\t\t\tcache.current = cache.current ? this.\$stage.children().index(cache.current) : 0;
\t\t\tcache.current = Math.max(this.minimum(), Math.min(this.maximum(), cache.current));
\t\t\tthis.reset(cache.current);
\t\t}
\t}, {
\t\tfilter: [ 'position' ],
\t\trun: function() {
\t\t\tthis.animate(this.coordinates(this._current));
\t\t}
\t}, {
\t\tfilter: [ 'width', 'position', 'items', 'settings' ],
\t\trun: function() {
\t\t\tvar rtl = this.settings.rtl ? 1 : -1,
\t\t\t\tpadding = this.settings.stagePadding * 2,
\t\t\t\tbegin = this.coordinates(this.current()) + padding,
\t\t\t\tend = begin + this.width() * rtl,
\t\t\t\tinner, outer, matches = [], i, n;

\t\t\tfor (i = 0, n = this._coordinates.length; i < n; i++) {
\t\t\t\tinner = this._coordinates[i - 1] || 0;
\t\t\t\touter = Math.abs(this._coordinates[i]) + padding * rtl;

\t\t\t\tif ((this.op(inner, '<=', begin) && (this.op(inner, '>', end)))
\t\t\t\t\t|| (this.op(outer, '<', begin) && this.op(outer, '>', end))) {
\t\t\t\t\tmatches.push(i);
\t\t\t\t}
\t\t\t}

\t\t\tthis.\$stage.children('.active').removeClass('active');
\t\t\tthis.\$stage.children(':eq(' + matches.join('), :eq(') + ')').addClass('active');

\t\t\tif (this.settings.center) {
\t\t\t\tthis.\$stage.children('.center').removeClass('center');
\t\t\t\tthis.\$stage.children().eq(this.current()).addClass('center');
\t\t\t}
\t\t}
\t} ];

\t/**
\t * Initializes the carousel.
\t * @protected
\t */
\tOwl.prototype.initialize = function() {
\t\tthis.enter('initializing');
\t\tthis.trigger('initialize');

\t\tthis.\$element.toggleClass(this.settings.rtlClass, this.settings.rtl);

\t\tif (this.settings.autoWidth && !this.is('pre-loading')) {
\t\t\tvar imgs, nestedSelector, width;
\t\t\timgs = this.\$element.find('img');
\t\t\tnestedSelector = this.settings.nestedItemSelector ? '.' + this.settings.nestedItemSelector : undefined;
\t\t\twidth = this.\$element.children(nestedSelector).width();

\t\t\tif (imgs.length && width <= 0) {
\t\t\t\tthis.preloadAutoWidthImages(imgs);
\t\t\t}
\t\t}

\t\tthis.\$element.addClass(this.options.loadingClass);

\t\t// create stage
\t\tthis.\$stage = \$('<' + this.settings.stageElement + ' class=\"' + this.settings.stageClass + '\"/>')
\t\t\t.wrap('<div class=\"' + this.settings.stageOuterClass + '\"/>');

\t\t// append stage
\t\tthis.\$element.append(this.\$stage.parent());

\t\t// append content
\t\tthis.replace(this.\$element.children().not(this.\$stage.parent()));

\t\t// check visibility
\t\tif (this.\$element.is(':visible')) {
\t\t\t// update view
\t\t\tthis.refresh();
\t\t} else {
\t\t\t// invalidate width
\t\t\tthis.invalidate('width');
\t\t}

\t\tthis.\$element
\t\t\t.removeClass(this.options.loadingClass)
\t\t\t.addClass(this.options.loadedClass);

\t\t// register event handlers
\t\tthis.registerEventHandlers();

\t\tthis.leave('initializing');
\t\tthis.trigger('initialized');
\t};

\t/**
\t * Setups the current settings.
\t * @todo Remove responsive classes. Why should adaptive designs be brought into IE8?
\t * @todo Support for media queries by using `matchMedia` would be nice.
\t * @public
\t */
\tOwl.prototype.setup = function() {
\t\tvar viewport = this.viewport(),
\t\t\toverwrites = this.options.responsive,
\t\t\tmatch = -1,
\t\t\tsettings = null;

\t\tif (!overwrites) {
\t\t\tsettings = \$.extend({}, this.options);
\t\t} else {
\t\t\t\$.each(overwrites, function(breakpoint) {
\t\t\t\tif (breakpoint <= viewport && breakpoint > match) {
\t\t\t\t\tmatch = Number(breakpoint);
\t\t\t\t}
\t\t\t});

\t\t\tsettings = \$.extend({}, this.options, overwrites[match]);
\t\t\tif (typeof settings.stagePadding === 'function') {
\t\t\t\tsettings.stagePadding = settings.stagePadding();
\t\t\t}
\t\t\tdelete settings.responsive;

\t\t\t// responsive class
\t\t\tif (settings.responsiveClass) {
\t\t\t\tthis.\$element.attr('class',
\t\t\t\t\tthis.\$element.attr('class').replace(new RegExp('(' + this.options.responsiveClass + '-)\\\\S+\\\\s', 'g'), '\$1' + match)
\t\t\t\t);
\t\t\t}
\t\t}

\t\tthis.trigger('change', { property: { name: 'settings', value: settings } });
\t\tthis._breakpoint = match;
\t\tthis.settings = settings;
\t\tthis.invalidate('settings');
\t\tthis.trigger('changed', { property: { name: 'settings', value: this.settings } });
\t};

\t/**
\t * Updates option logic if necessery.
\t * @protected
\t */
\tOwl.prototype.optionsLogic = function() {
\t\tif (this.settings.autoWidth) {
\t\t\tthis.settings.stagePadding = false;
\t\t\tthis.settings.merge = false;
\t\t}
\t};

\t/**
\t * Prepares an item before add.
\t * @todo Rename event parameter `content` to `item`.
\t * @protected
\t * @returns {jQuery|HTMLElement} - The item container.
\t */
\tOwl.prototype.prepare = function(item) {
\t\tvar event = this.trigger('prepare', { content: item });

\t\tif (!event.data) {
\t\t\tevent.data = \$('<' + this.settings.itemElement + '/>')
\t\t\t\t.addClass(this.options.itemClass).append(item)
\t\t}

\t\tthis.trigger('prepared', { content: event.data });

\t\treturn event.data;
\t};

\t/**
\t * Updates the view.
\t * @public
\t */
\tOwl.prototype.update = function() {
\t\tvar i = 0,
\t\t\tn = this._pipe.length,
\t\t\tfilter = \$.proxy(function(p) { return this[p] }, this._invalidated),
\t\t\tcache = {};

\t\twhile (i < n) {
\t\t\tif (this._invalidated.all || \$.grep(this._pipe[i].filter, filter).length > 0) {
\t\t\t\tthis._pipe[i].run(cache);
\t\t\t}
\t\t\ti++;
\t\t}

\t\tthis._invalidated = {};

\t\t!this.is('valid') && this.enter('valid');
\t};

\t/**
\t * Gets the width of the view.
\t * @public
\t * @param {Owl.Width} [dimension=Owl.Width.Default] - The dimension to return.
\t * @returns {Number} - The width of the view in pixel.
\t */
\tOwl.prototype.width = function(dimension) {
\t\tdimension = dimension || Owl.Width.Default;
\t\tswitch (dimension) {
\t\t\tcase Owl.Width.Inner:
\t\t\tcase Owl.Width.Outer:
\t\t\t\treturn this._width;
\t\t\tdefault:
\t\t\t\treturn this._width - this.settings.stagePadding * 2 + this.settings.margin;
\t\t}
\t};

\t/**
\t * Refreshes the carousel primarily for adaptive purposes.
\t * @public
\t */
\tOwl.prototype.refresh = function() {
\t\tthis.enter('refreshing');
\t\tthis.trigger('refresh');

\t\tthis.setup();

\t\tthis.optionsLogic();

\t\tthis.\$element.addClass(this.options.refreshClass);

\t\tthis.update();

\t\tthis.\$element.removeClass(this.options.refreshClass);

\t\tthis.leave('refreshing');
\t\tthis.trigger('refreshed');
\t};

\t/**
\t * Checks window `resize` event.
\t * @protected
\t */
\tOwl.prototype.onThrottledResize = function() {
\t\twindow.clearTimeout(this.resizeTimer);
\t\tthis.resizeTimer = window.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate);
\t};

\t/**
\t * Checks window `resize` event.
\t * @protected
\t */
\tOwl.prototype.onResize = function() {
\t\tif (!this._items.length) {
\t\t\treturn false;
\t\t}

\t\tif (this._width === this.\$element.width()) {
\t\t\treturn false;
\t\t}

\t\tif (!this.\$element.is(':visible')) {
\t\t\treturn false;
\t\t}

\t\tthis.enter('resizing');

\t\tif (this.trigger('resize').isDefaultPrevented()) {
\t\t\tthis.leave('resizing');
\t\t\treturn false;
\t\t}

\t\tthis.invalidate('width');

\t\tthis.refresh();

\t\tthis.leave('resizing');
\t\tthis.trigger('resized');
\t};

\t/**
\t * Registers event handlers.
\t * @todo Check `msPointerEnabled`
\t * @todo #261
\t * @protected
\t */
\tOwl.prototype.registerEventHandlers = function() {
\t\tif (\$.support.transition) {
\t\t\tthis.\$stage.on(\$.support.transition.end + '.owl.core', \$.proxy(this.onTransitionEnd, this));
\t\t}

\t\tif (this.settings.responsive !== false) {
\t\t\tthis.on(window, 'resize', this._handlers.onThrottledResize);
\t\t}

\t\tif (this.settings.mouseDrag) {
\t\t\tthis.\$element.addClass(this.options.dragClass);
\t\t\tthis.\$stage.on('mousedown.owl.core', \$.proxy(this.onDragStart, this));
\t\t\tthis.\$stage.on('dragstart.owl.core selectstart.owl.core', function() { return false });
\t\t}

\t\tif (this.settings.touchDrag){
\t\t\tthis.\$stage.on('touchstart.owl.core', \$.proxy(this.onDragStart, this));
\t\t\tthis.\$stage.on('touchcancel.owl.core', \$.proxy(this.onDragEnd, this));
\t\t}
\t};

\t/**
\t * Handles `touchstart` and `mousedown` events.
\t * @todo Horizontal swipe threshold as option
\t * @todo #261
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragStart = function(event) {
\t\tvar stage = null;

\t\tif (event.which === 3) {
\t\t\treturn;
\t\t}

\t\tif (\$.support.transform) {
\t\t\tstage = this.\$stage.css('transform').replace(/.*\\(|\\)| /g, '').split(',');
\t\t\tstage = {
\t\t\t\tx: stage[stage.length === 16 ? 12 : 4],
\t\t\t\ty: stage[stage.length === 16 ? 13 : 5]
\t\t\t};
\t\t} else {
\t\t\tstage = this.\$stage.position();
\t\t\tstage = {
\t\t\t\tx: this.settings.rtl ?
\t\t\t\t\tstage.left + this.\$stage.width() - this.width() + this.settings.margin :
\t\t\t\t\tstage.left,
\t\t\t\ty: stage.top
\t\t\t};
\t\t}

\t\tif (this.is('animating')) {
\t\t\t\$.support.transform ? this.animate(stage.x) : this.\$stage.stop()
\t\t\tthis.invalidate('position');
\t\t}

\t\tthis.\$element.toggleClass(this.options.grabClass, event.type === 'mousedown');

\t\tthis.speed(0);

\t\tthis._drag.time = new Date().getTime();
\t\tthis._drag.target = \$(event.target);
\t\tthis._drag.stage.start = stage;
\t\tthis._drag.stage.current = stage;
\t\tthis._drag.pointer = this.pointer(event);

\t\t\$(document).on('mouseup.owl.core touchend.owl.core', \$.proxy(this.onDragEnd, this));

\t\t\$(document).one('mousemove.owl.core touchmove.owl.core', \$.proxy(function(event) {
\t\t\tvar delta = this.difference(this._drag.pointer, this.pointer(event));

\t\t\t\$(document).on('mousemove.owl.core touchmove.owl.core', \$.proxy(this.onDragMove, this));

\t\t\tif (Math.abs(delta.x) < Math.abs(delta.y) && this.is('valid')) {
\t\t\t\treturn;
\t\t\t}

\t\t\tevent.preventDefault();

\t\t\tthis.enter('dragging');
\t\t\tthis.trigger('drag');
\t\t}, this));
\t};

\t/**
\t * Handles the `touchmove` and `mousemove` events.
\t * @todo #261
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragMove = function(event) {
\t\tvar minimum = null,
\t\t\tmaximum = null,
\t\t\tpull = null,
\t\t\tdelta = this.difference(this._drag.pointer, this.pointer(event)),
\t\t\tstage = this.difference(this._drag.stage.start, delta);

\t\tif (!this.is('dragging')) {
\t\t\treturn;
\t\t}

\t\tevent.preventDefault();

\t\tif (this.settings.loop) {
\t\t\tminimum = this.coordinates(this.minimum());
\t\t\tmaximum = this.coordinates(this.maximum() + 1) - minimum;
\t\t\tstage.x = (((stage.x - minimum) % maximum + maximum) % maximum) + minimum;
\t\t} else {
\t\t\tminimum = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum());
\t\t\tmaximum = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum());
\t\t\tpull = this.settings.pullDrag ? -1 * delta.x / 5 : 0;
\t\t\tstage.x = Math.max(Math.min(stage.x, minimum + pull), maximum + pull);
\t\t}

\t\tthis._drag.stage.current = stage;

\t\tthis.animate(stage.x);
\t};

\t/**
\t * Handles the `touchend` and `mouseup` events.
\t * @todo #261
\t * @todo Threshold for click event
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onDragEnd = function(event) {
\t\tvar delta = this.difference(this._drag.pointer, this.pointer(event)),
\t\t\tstage = this._drag.stage.current,
\t\t\tdirection = delta.x > 0 ^ this.settings.rtl ? 'left' : 'right';

\t\t\$(document).off('.owl.core');

\t\tthis.\$element.removeClass(this.options.grabClass);

\t\tif (delta.x !== 0 && this.is('dragging') || !this.is('valid')) {
\t\t\tthis.speed(this.settings.dragEndSpeed || this.settings.smartSpeed);
\t\t\tthis.current(this.closest(stage.x, delta.x !== 0 ? direction : this._drag.direction));
\t\t\tthis.invalidate('position');
\t\t\tthis.update();

\t\t\tthis._drag.direction = direction;

\t\t\tif (Math.abs(delta.x) > 3 || new Date().getTime() - this._drag.time > 300) {
\t\t\t\tthis._drag.target.one('click.owl.core', function() { return false; });
\t\t\t}
\t\t}

\t\tif (!this.is('dragging')) {
\t\t\treturn;
\t\t}

\t\tthis.leave('dragging');
\t\tthis.trigger('dragged');
\t};

\t/**
\t * Gets absolute position of the closest item for a coordinate.
\t * @todo Setting `freeDrag` makes `closest` not reusable. See #165.
\t * @protected
\t * @param {Number} coordinate - The coordinate in pixel.
\t * @param {String} direction - The direction to check for the closest item. Ether `left` or `right`.
\t * @return {Number} - The absolute position of the closest item.
\t */
\tOwl.prototype.closest = function(coordinate, direction) {
\t\tvar position = -1,
\t\t\tpull = 30,
\t\t\twidth = this.width(),
\t\t\tcoordinates = this.coordinates();

\t\tif (!this.settings.freeDrag) {
\t\t\t// check closest item
\t\t\t\$.each(coordinates, \$.proxy(function(index, value) {
\t\t\t\t// on a left pull, check on current index
\t\t\t\tif (direction === 'left' && coordinate > value - pull && coordinate < value + pull) {
\t\t\t\t\tposition = index;
\t\t\t\t// on a right pull, check on previous index
\t\t\t\t// to do so, subtract width from value and set position = index + 1
\t\t\t\t} else if (direction === 'right' && coordinate > value - width - pull && coordinate < value - width + pull) {
\t\t\t\t\tposition = index + 1;
\t\t\t\t} else if (this.op(coordinate, '<', value)
\t\t\t\t\t&& this.op(coordinate, '>', coordinates[index + 1] || value - width)) {
\t\t\t\t\tposition = direction === 'left' ? index + 1 : index;
\t\t\t\t}
\t\t\t\treturn position === -1;
\t\t\t}, this));
\t\t}

\t\tif (!this.settings.loop) {
\t\t\t// non loop boundries
\t\t\tif (this.op(coordinate, '>', coordinates[this.minimum()])) {
\t\t\t\tposition = coordinate = this.minimum();
\t\t\t} else if (this.op(coordinate, '<', coordinates[this.maximum()])) {
\t\t\t\tposition = coordinate = this.maximum();
\t\t\t}
\t\t}

\t\treturn position;
\t};

\t/**
\t * Animates the stage.
\t * @todo #270
\t * @public
\t * @param {Number} coordinate - The coordinate in pixels.
\t */
\tOwl.prototype.animate = function(coordinate) {
\t\tvar animate = this.speed() > 0;

\t\tthis.is('animating') && this.onTransitionEnd();

\t\tif (animate) {
\t\t\tthis.enter('animating');
\t\t\tthis.trigger('translate');
\t\t}

\t\tif (\$.support.transform3d && \$.support.transition) {
\t\t\tthis.\$stage.css({
\t\t\t\ttransform: 'translate3d(' + coordinate + 'px,0px,0px)',
\t\t\t\ttransition: (this.speed() / 1000) + 's'
\t\t\t});
\t\t} else if (animate) {
\t\t\tthis.\$stage.animate({
\t\t\t\tleft: coordinate + 'px'
\t\t\t}, this.speed(), this.settings.fallbackEasing, \$.proxy(this.onTransitionEnd, this));
\t\t} else {
\t\t\tthis.\$stage.css({
\t\t\t\tleft: coordinate + 'px'
\t\t\t});
\t\t}
\t};

\t/**
\t * Checks whether the carousel is in a specific state or not.
\t * @param {String} state - The state to check.
\t * @returns {Boolean} - The flag which indicates if the carousel is busy.
\t */
\tOwl.prototype.is = function(state) {
\t\treturn this._states.current[state] && this._states.current[state] > 0;
\t};

\t/**
\t * Sets the absolute position of the current item.
\t * @public
\t * @param {Number} [position] - The new absolute position or nothing to leave it unchanged.
\t * @returns {Number} - The absolute position of the current item.
\t */
\tOwl.prototype.current = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._current;
\t\t}

\t\tif (this._items.length === 0) {
\t\t\treturn undefined;
\t\t}

\t\tposition = this.normalize(position);

\t\tif (this._current !== position) {
\t\t\tvar event = this.trigger('change', { property: { name: 'position', value: position } });

\t\t\tif (event.data !== undefined) {
\t\t\t\tposition = this.normalize(event.data);
\t\t\t}

\t\t\tthis._current = position;

\t\t\tthis.invalidate('position');

\t\t\tthis.trigger('changed', { property: { name: 'position', value: this._current } });
\t\t}

\t\treturn this._current;
\t};

\t/**
\t * Invalidates the given part of the update routine.
\t * @param {String} [part] - The part to invalidate.
\t * @returns {Array.<String>} - The invalidated parts.
\t */
\tOwl.prototype.invalidate = function(part) {
\t\tif (\$.type(part) === 'string') {
\t\t\tthis._invalidated[part] = true;
\t\t\tthis.is('valid') && this.leave('valid');
\t\t}
\t\treturn \$.map(this._invalidated, function(v, i) { return i });
\t};

\t/**
\t * Resets the absolute position of the current item.
\t * @public
\t * @param {Number} position - The absolute position of the new item.
\t */
\tOwl.prototype.reset = function(position) {
\t\tposition = this.normalize(position);

\t\tif (position === undefined) {
\t\t\treturn;
\t\t}

\t\tthis._speed = 0;
\t\tthis._current = position;

\t\tthis.suppress([ 'translate', 'translated' ]);

\t\tthis.animate(this.coordinates(position));

\t\tthis.release([ 'translate', 'translated' ]);
\t};

\t/**
\t * Normalizes an absolute or a relative position of an item.
\t * @public
\t * @param {Number} position - The absolute or relative position to normalize.
\t * @param {Boolean} [relative=false] - Whether the given position is relative or not.
\t * @returns {Number} - The normalized position.
\t */
\tOwl.prototype.normalize = function(position, relative) {
\t\tvar n = this._items.length,
\t\t\tm = relative ? 0 : this._clones.length;

\t\tif (!this.isNumeric(position) || n < 1) {
\t\t\tposition = undefined;
\t\t} else if (position < 0 || position >= n + m) {
\t\t\tposition = ((position - m / 2) % n + n) % n + m / 2;
\t\t}

\t\treturn position;
\t};

\t/**
\t * Converts an absolute position of an item into a relative one.
\t * @public
\t * @param {Number} position - The absolute position to convert.
\t * @returns {Number} - The converted position.
\t */
\tOwl.prototype.relative = function(position) {
\t\tposition -= this._clones.length / 2;
\t\treturn this.normalize(position, true);
\t};

\t/**
\t * Gets the maximum position for the current item.
\t * @public
\t * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
\t * @returns {Number}
\t */
\tOwl.prototype.maximum = function(relative) {
\t\tvar settings = this.settings,
\t\t\tmaximum = this._coordinates.length,
\t\t\titerator,
\t\t\treciprocalItemsWidth,
\t\t\telementWidth;

\t\tif (settings.loop) {
\t\t\tmaximum = this._clones.length / 2 + this._items.length - 1;
\t\t} else if (settings.autoWidth || settings.merge) {
\t\t\titerator = this._items.length;
\t\t\treciprocalItemsWidth = this._items[--iterator].width();
\t\t\telementWidth = this.\$element.width();
\t\t\twhile (iterator--) {
\t\t\t\treciprocalItemsWidth += this._items[iterator].width() + this.settings.margin;
\t\t\t\tif (reciprocalItemsWidth > elementWidth) {
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tmaximum = iterator + 1;
\t\t} else if (settings.center) {
\t\t\tmaximum = this._items.length - 1;
\t\t} else {
\t\t\tmaximum = this._items.length - settings.items;
\t\t}

\t\tif (relative) {
\t\t\tmaximum -= this._clones.length / 2;
\t\t}

\t\treturn Math.max(maximum, 0);
\t};

\t/**
\t * Gets the minimum position for the current item.
\t * @public
\t * @param {Boolean} [relative=false] - Whether to return an absolute position or a relative position.
\t * @returns {Number}
\t */
\tOwl.prototype.minimum = function(relative) {
\t\treturn relative ? 0 : this._clones.length / 2;
\t};

\t/**
\t * Gets an item at the specified relative position.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
\t */
\tOwl.prototype.items = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._items.slice();
\t\t}

\t\tposition = this.normalize(position, true);
\t\treturn this._items[position];
\t};

\t/**
\t * Gets an item at the specified relative position.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @return {jQuery|Array.<jQuery>} - The item at the given position or all items if no position was given.
\t */
\tOwl.prototype.mergers = function(position) {
\t\tif (position === undefined) {
\t\t\treturn this._mergers.slice();
\t\t}

\t\tposition = this.normalize(position, true);
\t\treturn this._mergers[position];
\t};

\t/**
\t * Gets the absolute positions of clones for an item.
\t * @public
\t * @param {Number} [position] - The relative position of the item.
\t * @returns {Array.<Number>} - The absolute positions of clones for the item or all if no position was given.
\t */
\tOwl.prototype.clones = function(position) {
\t\tvar odd = this._clones.length / 2,
\t\t\teven = odd + this._items.length,
\t\t\tmap = function(index) { return index % 2 === 0 ? even + index / 2 : odd - (index + 1) / 2 };

\t\tif (position === undefined) {
\t\t\treturn \$.map(this._clones, function(v, i) { return map(i) });
\t\t}

\t\treturn \$.map(this._clones, function(v, i) { return v === position ? map(i) : null });
\t};

\t/**
\t * Sets the current animation speed.
\t * @public
\t * @param {Number} [speed] - The animation speed in milliseconds or nothing to leave it unchanged.
\t * @returns {Number} - The current animation speed in milliseconds.
\t */
\tOwl.prototype.speed = function(speed) {
\t\tif (speed !== undefined) {
\t\t\tthis._speed = speed;
\t\t}

\t\treturn this._speed;
\t};

\t/**
\t * Gets the coordinate of an item.
\t * @todo The name of this method is missleanding.
\t * @public
\t * @param {Number} position - The absolute position of the item within `minimum()` and `maximum()`.
\t * @returns {Number|Array.<Number>} - The coordinate of the item in pixel or all coordinates.
\t */
\tOwl.prototype.coordinates = function(position) {
\t\tvar multiplier = 1,
\t\t\tnewPosition = position - 1,
\t\t\tcoordinate;

\t\tif (position === undefined) {
\t\t\treturn \$.map(this._coordinates, \$.proxy(function(coordinate, index) {
\t\t\t\treturn this.coordinates(index);
\t\t\t}, this));
\t\t}

\t\tif (this.settings.center) {
\t\t\tif (this.settings.rtl) {
\t\t\t\tmultiplier = -1;
\t\t\t\tnewPosition = position + 1;
\t\t\t}

\t\t\tcoordinate = this._coordinates[position];
\t\t\tcoordinate += (this.width() - coordinate + (this._coordinates[newPosition] || 0)) / 2 * multiplier;
\t\t} else {
\t\t\tcoordinate = this._coordinates[newPosition] || 0;
\t\t}

\t\tcoordinate = Math.ceil(coordinate);

\t\treturn coordinate;
\t};

\t/**
\t * Calculates the speed for a translation.
\t * @protected
\t * @param {Number} from - The absolute position of the start item.
\t * @param {Number} to - The absolute position of the target item.
\t * @param {Number} [factor=undefined] - The time factor in milliseconds.
\t * @returns {Number} - The time in milliseconds for the translation.
\t */
\tOwl.prototype.duration = function(from, to, factor) {
\t\tif (factor === 0) {
\t\t\treturn 0;
\t\t}

\t\treturn Math.min(Math.max(Math.abs(to - from), 1), 6) * Math.abs((factor || this.settings.smartSpeed));
\t};

\t/**
\t * Slides to the specified item.
\t * @public
\t * @param {Number} position - The position of the item.
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.to = function(position, speed) {
\t\tvar current = this.current(),
\t\t\trevert = null,
\t\t\tdistance = position - this.relative(current),
\t\t\tdirection = (distance > 0) - (distance < 0),
\t\t\titems = this._items.length,
\t\t\tminimum = this.minimum(),
\t\t\tmaximum = this.maximum();

\t\tif (this.settings.loop) {
\t\t\tif (!this.settings.rewind && Math.abs(distance) > items / 2) {
\t\t\t\tdistance += direction * -1 * items;
\t\t\t}

\t\t\tposition = current + distance;
\t\t\trevert = ((position - minimum) % items + items) % items + minimum;

\t\t\tif (revert !== position && revert - distance <= maximum && revert - distance > 0) {
\t\t\t\tcurrent = revert - distance;
\t\t\t\tposition = revert;
\t\t\t\tthis.reset(current);
\t\t\t}
\t\t} else if (this.settings.rewind) {
\t\t\tmaximum += 1;
\t\t\tposition = (position % maximum + maximum) % maximum;
\t\t} else {
\t\t\tposition = Math.max(minimum, Math.min(maximum, position));
\t\t}

\t\tthis.speed(this.duration(current, position, speed));
\t\tthis.current(position);

\t\tif (this.\$element.is(':visible')) {
\t\t\tthis.update();
\t\t}
\t};

\t/**
\t * Slides to the next item.
\t * @public
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.next = function(speed) {
\t\tspeed = speed || false;
\t\tthis.to(this.relative(this.current()) + 1, speed);
\t};

\t/**
\t * Slides to the previous item.
\t * @public
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t */
\tOwl.prototype.prev = function(speed) {
\t\tspeed = speed || false;
\t\tthis.to(this.relative(this.current()) - 1, speed);
\t};

\t/**
\t * Handles the end of an animation.
\t * @protected
\t * @param {Event} event - The event arguments.
\t */
\tOwl.prototype.onTransitionEnd = function(event) {

\t\t// if css2 animation then event object is undefined
\t\tif (event !== undefined) {
\t\t\tevent.stopPropagation();

\t\t\t// Catch only owl-stage transitionEnd event
\t\t\tif ((event.target || event.srcElement || event.originalTarget) !== this.\$stage.get(0)) {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tthis.leave('animating');
\t\tthis.trigger('translated');
\t};

\t/**
\t * Gets viewport width.
\t * @protected
\t * @return {Number} - The width in pixel.
\t */
\tOwl.prototype.viewport = function() {
\t\tvar width;
\t\tif (this.options.responsiveBaseElement !== window) {
\t\t\twidth = \$(this.options.responsiveBaseElement).width();
\t\t} else if (window.innerWidth) {
\t\t\twidth = window.innerWidth;
\t\t} else if (document.documentElement && document.documentElement.clientWidth) {
\t\t\twidth = document.documentElement.clientWidth;
\t\t} else {
\t\t\tconsole.warn('Can not detect viewport width.');
\t\t}
\t\treturn width;
\t};

\t/**
\t * Replaces the current content.
\t * @public
\t * @param {HTMLElement|jQuery|String} content - The new content.
\t */
\tOwl.prototype.replace = function(content) {
\t\tthis.\$stage.empty();
\t\tthis._items = [];

\t\tif (content) {
\t\t\tcontent = (content instanceof jQuery) ? content : \$(content);
\t\t}

\t\tif (this.settings.nestedItemSelector) {
\t\t\tcontent = content.find('.' + this.settings.nestedItemSelector);
\t\t}

\t\tcontent.filter(function() {
\t\t\treturn this.nodeType === 1;
\t\t}).each(\$.proxy(function(index, item) {
\t\t\titem = this.prepare(item);
\t\t\tthis.\$stage.append(item);
\t\t\tthis._items.push(item);
\t\t\tthis._mergers.push(item.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t}, this));

\t\tthis.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0);

\t\tthis.invalidate('items');
\t};

\t/**
\t * Adds an item.
\t * @todo Use `item` instead of `content` for the event arguments.
\t * @public
\t * @param {HTMLElement|jQuery|String} content - The item content to add.
\t * @param {Number} [position] - The relative position at which to insert the item otherwise the item will be added to the end.
\t */
\tOwl.prototype.add = function(content, position) {
\t\tvar current = this.relative(this._current);

\t\tposition = position === undefined ? this._items.length : this.normalize(position, true);
\t\tcontent = content instanceof jQuery ? content : \$(content);

\t\tthis.trigger('add', { content: content, position: position });

\t\tcontent = this.prepare(content);

\t\tif (this._items.length === 0 || position === this._items.length) {
\t\t\tthis._items.length === 0 && this.\$stage.append(content);
\t\t\tthis._items.length !== 0 && this._items[position - 1].after(content);
\t\t\tthis._items.push(content);
\t\t\tthis._mergers.push(content.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t} else {
\t\t\tthis._items[position].before(content);
\t\t\tthis._items.splice(position, 0, content);
\t\t\tthis._mergers.splice(position, 0, content.find('[data-merge]').addBack('[data-merge]').attr('data-merge') * 1 || 1);
\t\t}

\t\tthis._items[current] && this.reset(this._items[current].index());

\t\tthis.invalidate('items');

\t\tthis.trigger('added', { content: content, position: position });
\t};

\t/**
\t * Removes an item by its position.
\t * @todo Use `item` instead of `content` for the event arguments.
\t * @public
\t * @param {Number} position - The relative position of the item to remove.
\t */
\tOwl.prototype.remove = function(position) {
\t\tposition = this.normalize(position, true);

\t\tif (position === undefined) {
\t\t\treturn;
\t\t}

\t\tthis.trigger('remove', { content: this._items[position], position: position });

\t\tthis._items[position].remove();
\t\tthis._items.splice(position, 1);
\t\tthis._mergers.splice(position, 1);

\t\tthis.invalidate('items');

\t\tthis.trigger('removed', { content: null, position: position });
\t};

\t/**
\t * Preloads images with auto width.
\t * @todo Replace by a more generic approach
\t * @protected
\t */
\tOwl.prototype.preloadAutoWidthImages = function(images) {
\t\timages.each(\$.proxy(function(i, element) {
\t\t\tthis.enter('pre-loading');
\t\t\telement = \$(element);
\t\t\t\$(new Image()).one('load', \$.proxy(function(e) {
\t\t\t\telement.attr('src', e.target.src);
\t\t\t\telement.css('opacity', 1);
\t\t\t\tthis.leave('pre-loading');
\t\t\t\t!this.is('pre-loading') && !this.is('initializing') && this.refresh();
\t\t\t}, this)).attr('src', element.attr('src') || element.attr('data-src') || element.attr('data-src-retina'));
\t\t}, this));
\t};

\t/**
\t * Destroys the carousel.
\t * @public
\t */
\tOwl.prototype.destroy = function() {

\t\tthis.\$element.off('.owl.core');
\t\tthis.\$stage.off('.owl.core');
\t\t\$(document).off('.owl.core');

\t\tif (this.settings.responsive !== false) {
\t\t\twindow.clearTimeout(this.resizeTimer);
\t\t\tthis.off(window, 'resize', this._handlers.onThrottledResize);
\t\t}

\t\tfor (var i in this._plugins) {
\t\t\tthis._plugins[i].destroy();
\t\t}

\t\tthis.\$stage.children('.cloned').remove();

\t\tthis.\$stage.unwrap();
\t\tthis.\$stage.children().contents().unwrap();
\t\tthis.\$stage.children().unwrap();

\t\tthis.\$element
\t\t\t.removeClass(this.options.refreshClass)
\t\t\t.removeClass(this.options.loadingClass)
\t\t\t.removeClass(this.options.loadedClass)
\t\t\t.removeClass(this.options.rtlClass)
\t\t\t.removeClass(this.options.dragClass)
\t\t\t.removeClass(this.options.grabClass)
\t\t\t.attr('class', this.\$element.attr('class').replace(new RegExp(this.options.responsiveClass + '-\\\\S+\\\\s', 'g'), ''))
\t\t\t.removeData('owl.carousel');
\t};

\t/**
\t * Operators to calculate right-to-left and left-to-right.
\t * @protected
\t * @param {Number} [a] - The left side operand.
\t * @param {String} [o] - The operator.
\t * @param {Number} [b] - The right side operand.
\t */
\tOwl.prototype.op = function(a, o, b) {
\t\tvar rtl = this.settings.rtl;
\t\tswitch (o) {
\t\t\tcase '<':
\t\t\t\treturn rtl ? a > b : a < b;
\t\t\tcase '>':
\t\t\t\treturn rtl ? a < b : a > b;
\t\t\tcase '>=':
\t\t\t\treturn rtl ? a <= b : a >= b;
\t\t\tcase '<=':
\t\t\t\treturn rtl ? a >= b : a <= b;
\t\t\tdefault:
\t\t\t\tbreak;
\t\t}
\t};

\t/**
\t * Attaches to an internal event.
\t * @protected
\t * @param {HTMLElement} element - The event source.
\t * @param {String} event - The event name.
\t * @param {Function} listener - The event handler to attach.
\t * @param {Boolean} capture - Wether the event should be handled at the capturing phase or not.
\t */
\tOwl.prototype.on = function(element, event, listener, capture) {
\t\tif (element.addEventListener) {
\t\t\telement.addEventListener(event, listener, capture);
\t\t} else if (element.attachEvent) {
\t\t\telement.attachEvent('on' + event, listener);
\t\t}
\t};

\t/**
\t * Detaches from an internal event.
\t * @protected
\t * @param {HTMLElement} element - The event source.
\t * @param {String} event - The event name.
\t * @param {Function} listener - The attached event handler to detach.
\t * @param {Boolean} capture - Wether the attached event handler was registered as a capturing listener or not.
\t */
\tOwl.prototype.off = function(element, event, listener, capture) {
\t\tif (element.removeEventListener) {
\t\t\telement.removeEventListener(event, listener, capture);
\t\t} else if (element.detachEvent) {
\t\t\telement.detachEvent('on' + event, listener);
\t\t}
\t};

\t/**
\t * Triggers a public event.
\t * @todo Remove `status`, `relatedTarget` should be used instead.
\t * @protected
\t * @param {String} name - The event name.
\t * @param {*} [data=null] - The event data.
\t * @param {String} [namespace=carousel] - The event namespace.
\t * @param {String} [state] - The state which is associated with the event.
\t * @param {Boolean} [enter=false] - Indicates if the call enters the specified state or not.
\t * @returns {Event} - The event arguments.
\t */
\tOwl.prototype.trigger = function(name, data, namespace, state, enter) {
\t\tvar status = {
\t\t\titem: { count: this._items.length, index: this.current() }
\t\t}, handler = \$.camelCase(
\t\t\t\$.grep([ 'on', name, namespace ], function(v) { return v })
\t\t\t\t.join('-').toLowerCase()
\t\t), event = \$.Event(
\t\t\t[ name, 'owl', namespace || 'carousel' ].join('.').toLowerCase(),
\t\t\t\$.extend({ relatedTarget: this }, status, data)
\t\t);

\t\tif (!this._supress[name]) {
\t\t\t\$.each(this._plugins, function(name, plugin) {
\t\t\t\tif (plugin.onTrigger) {
\t\t\t\t\tplugin.onTrigger(event);
\t\t\t\t}
\t\t\t});

\t\t\tthis.register({ type: Owl.Type.Event, name: name });
\t\t\tthis.\$element.trigger(event);

\t\t\tif (this.settings && typeof this.settings[handler] === 'function') {
\t\t\t\tthis.settings[handler].call(this, event);
\t\t\t}
\t\t}

\t\treturn event;
\t};

\t/**
\t * Enters a state.
\t * @param name - The state name.
\t */
\tOwl.prototype.enter = function(name) {
\t\t\$.each([ name ].concat(this._states.tags[name] || []), \$.proxy(function(i, name) {
\t\t\tif (this._states.current[name] === undefined) {
\t\t\t\tthis._states.current[name] = 0;
\t\t\t}

\t\t\tthis._states.current[name]++;
\t\t}, this));
\t};

\t/**
\t * Leaves a state.
\t * @param name - The state name.
\t */
\tOwl.prototype.leave = function(name) {
\t\t\$.each([ name ].concat(this._states.tags[name] || []), \$.proxy(function(i, name) {
\t\t\tthis._states.current[name]--;
\t\t}, this));
\t};

\t/**
\t * Registers an event or state.
\t * @public
\t * @param {Object} object - The event or state to register.
\t */
\tOwl.prototype.register = function(object) {
\t\tif (object.type === Owl.Type.Event) {
\t\t\tif (!\$.event.special[object.name]) {
\t\t\t\t\$.event.special[object.name] = {};
\t\t\t}

\t\t\tif (!\$.event.special[object.name].owl) {
\t\t\t\tvar _default = \$.event.special[object.name]._default;
\t\t\t\t\$.event.special[object.name]._default = function(e) {
\t\t\t\t\tif (_default && _default.apply && (!e.namespace || e.namespace.indexOf('owl') === -1)) {
\t\t\t\t\t\treturn _default.apply(this, arguments);
\t\t\t\t\t}
\t\t\t\t\treturn e.namespace && e.namespace.indexOf('owl') > -1;
\t\t\t\t};
\t\t\t\t\$.event.special[object.name].owl = true;
\t\t\t}
\t\t} else if (object.type === Owl.Type.State) {
\t\t\tif (!this._states.tags[object.name]) {
\t\t\t\tthis._states.tags[object.name] = object.tags;
\t\t\t} else {
\t\t\t\tthis._states.tags[object.name] = this._states.tags[object.name].concat(object.tags);
\t\t\t}

\t\t\tthis._states.tags[object.name] = \$.grep(this._states.tags[object.name], \$.proxy(function(tag, i) {
\t\t\t\treturn \$.inArray(tag, this._states.tags[object.name]) === i;
\t\t\t}, this));
\t\t}
\t};

\t/**
\t * Suppresses events.
\t * @protected
\t * @param {Array.<String>} events - The events to suppress.
\t */
\tOwl.prototype.suppress = function(events) {
\t\t\$.each(events, \$.proxy(function(index, event) {
\t\t\tthis._supress[event] = true;
\t\t}, this));
\t};

\t/**
\t * Releases suppressed events.
\t * @protected
\t * @param {Array.<String>} events - The events to release.
\t */
\tOwl.prototype.release = function(events) {
\t\t\$.each(events, \$.proxy(function(index, event) {
\t\t\tdelete this._supress[event];
\t\t}, this));
\t};

\t/**
\t * Gets unified pointer coordinates from event.
\t * @todo #261
\t * @protected
\t * @param {Event} - The `mousedown` or `touchstart` event.
\t * @returns {Object} - Contains `x` and `y` coordinates of current pointer position.
\t */
\tOwl.prototype.pointer = function(event) {
\t\tvar result = { x: null, y: null };

\t\tevent = event.originalEvent || event || window.event;

\t\tevent = event.touches && event.touches.length ?
\t\t\tevent.touches[0] : event.changedTouches && event.changedTouches.length ?
\t\t\t\tevent.changedTouches[0] : event;

\t\tif (event.pageX) {
\t\t\tresult.x = event.pageX;
\t\t\tresult.y = event.pageY;
\t\t} else {
\t\t\tresult.x = event.clientX;
\t\t\tresult.y = event.clientY;
\t\t}

\t\treturn result;
\t};

\t/**
\t * Determines if the input is a Number or something that can be coerced to a Number
\t * @protected
\t * @param {Number|String|Object|Array|Boolean|RegExp|Function|Symbol} - The input to be tested
\t * @returns {Boolean} - An indication if the input is a Number or can be coerced to a Number
\t */
\tOwl.prototype.isNumeric = function(number) {
\t\treturn !isNaN(parseFloat(number));
\t};

\t/**
\t * Gets the difference of two vectors.
\t * @todo #261
\t * @protected
\t * @param {Object} - The first vector.
\t * @param {Object} - The second vector.
\t * @returns {Object} - The difference.
\t */
\tOwl.prototype.difference = function(first, second) {
\t\treturn {
\t\t\tx: first.x - second.x,
\t\t\ty: first.y - second.y
\t\t};
\t};

\t/**
\t * The jQuery Plugin for the Owl Carousel
\t * @todo Navigation plugin `next` and `prev`
\t * @public
\t */
\t\$.fn.owlCarousel = function(option) {
\t\tvar args = Array.prototype.slice.call(arguments, 1);

\t\treturn this.each(function() {
\t\t\tvar \$this = \$(this),
\t\t\t\tdata = \$this.data('owl.carousel');

\t\t\tif (!data) {
\t\t\t\tdata = new Owl(this, typeof option == 'object' && option);
\t\t\t\t\$this.data('owl.carousel', data);

\t\t\t\t\$.each([
\t\t\t\t\t'next', 'prev', 'to', 'destroy', 'refresh', 'replace', 'add', 'remove'
\t\t\t\t], function(i, event) {
\t\t\t\t\tdata.register({ type: Owl.Type.Event, name: event });
\t\t\t\t\tdata.\$element.on(event + '.owl.carousel.core', \$.proxy(function(e) {
\t\t\t\t\t\tif (e.namespace && e.relatedTarget !== this) {
\t\t\t\t\t\t\tthis.suppress([ event ]);
\t\t\t\t\t\t\tdata[event].apply(this, [].slice.call(arguments, 1));
\t\t\t\t\t\t\tthis.release([ event ]);
\t\t\t\t\t\t}
\t\t\t\t\t}, data));
\t\t\t\t});
\t\t\t}

\t\t\tif (typeof option == 'string' && option.charAt(0) !== '_') {
\t\t\t\tdata[option].apply(data, args);
\t\t\t}
\t\t});
\t};

\t/**
\t * The constructor for the jQuery Plugin
\t * @public
\t */
\t\$.fn.owlCarousel.Constructor = Owl;

})(window.Zepto || window.jQuery, window, document);

/**
 * AutoRefresh Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the auto refresh plugin.
\t * @class The Auto Refresh Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar AutoRefresh = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Refresh interval.
\t\t * @protected
\t\t * @type {number}
\t\t */
\t\tthis._interval = null;

\t\t/**
\t\t * Whether the element is currently visible or not.
\t\t * @protected
\t\t * @type {Boolean}
\t\t */
\t\tthis._visible = null;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoRefresh) {
\t\t\t\t\tthis.watch();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, AutoRefresh.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoRefresh.Defaults = {
\t\tautoRefresh: true,
\t\tautoRefreshInterval: 500
\t};

\t/**
\t * Watches the element.
\t */
\tAutoRefresh.prototype.watch = function() {
\t\tif (this._interval) {
\t\t\treturn;
\t\t}

\t\tthis._visible = this._core.\$element.is(':visible');
\t\tthis._interval = window.setInterval(\$.proxy(this.refresh, this), this._core.settings.autoRefreshInterval);
\t};

\t/**
\t * Refreshes the element.
\t */
\tAutoRefresh.prototype.refresh = function() {
\t\tif (this._core.\$element.is(':visible') === this._visible) {
\t\t\treturn;
\t\t}

\t\tthis._visible = !this._visible;

\t\tthis._core.\$element.toggleClass('owl-hidden', !this._visible);

\t\tthis._visible && (this._core.invalidate('width') && this._core.refresh());
\t};

\t/**
\t * Destroys the plugin.
\t */
\tAutoRefresh.prototype.destroy = function() {
\t\tvar handler, property;

\t\twindow.clearInterval(this._interval);

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.AutoRefresh = AutoRefresh;

})(window.Zepto || window.jQuery, window, document);

/**
 * Lazy Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the lazy plugin.
\t * @class The Lazy Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Lazy = function(carousel) {

\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Already loaded items.
\t\t * @protected
\t\t * @type {Array.<jQuery>}
\t\t */
\t\tthis._loaded = [];

\t\t/**
\t\t * Event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel change.owl.carousel resized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (!e.namespace) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (!this._core.settings || !this._core.settings.lazyLoad) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif ((e.property && e.property.name == 'position') || e.type == 'initialized') {
\t\t\t\t\tvar settings = this._core.settings,
\t\t\t\t\t\tn = (settings.center && Math.ceil(settings.items / 2) || settings.items),
\t\t\t\t\t\ti = ((settings.center && n * -1) || 0),
\t\t\t\t\t\tposition = (e.property && e.property.value !== undefined ? e.property.value : this._core.current()) + i,
\t\t\t\t\t\tclones = this._core.clones().length,
\t\t\t\t\t\tload = \$.proxy(function(i, v) { this.load(v) }, this);

\t\t\t\t\twhile (i++ < n) {
\t\t\t\t\t\tthis.load(clones / 2 + this._core.relative(position));
\t\t\t\t\t\tclones && \$.each(this._core.clones(this._core.relative(position)), load);
\t\t\t\t\t\tposition++;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set the default options
\t\tthis._core.options = \$.extend({}, Lazy.Defaults, this._core.options);

\t\t// register event handler
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tLazy.Defaults = {
\t\tlazyLoad: false
\t};

\t/**
\t * Loads all resources of an item at the specified position.
\t * @param {Number} position - The absolute position of the item.
\t * @protected
\t */
\tLazy.prototype.load = function(position) {
\t\tvar \$item = this._core.\$stage.children().eq(position),
\t\t\t\$elements = \$item && \$item.find('.owl-lazy');

\t\tif (!\$elements || \$.inArray(\$item.get(0), this._loaded) > -1) {
\t\t\treturn;
\t\t}

\t\t\$elements.each(\$.proxy(function(index, element) {
\t\t\tvar \$element = \$(element), image,
\t\t\t\turl = (window.devicePixelRatio > 1 && \$element.attr('data-src-retina')) || \$element.attr('data-src');

\t\t\tthis._core.trigger('load', { element: \$element, url: url }, 'lazy');

\t\t\tif (\$element.is('img')) {
\t\t\t\t\$element.one('load.owl.lazy', \$.proxy(function() {
\t\t\t\t\t\$element.css('opacity', 1);
\t\t\t\t\tthis._core.trigger('loaded', { element: \$element, url: url }, 'lazy');
\t\t\t\t}, this)).attr('src', url);
\t\t\t} else {
\t\t\t\timage = new Image();
\t\t\t\timage.onload = \$.proxy(function() {
\t\t\t\t\t\$element.css({
\t\t\t\t\t\t'background-image': 'url(\"' + url + '\")',
\t\t\t\t\t\t'opacity': '1'
\t\t\t\t\t});
\t\t\t\t\tthis._core.trigger('loaded', { element: \$element, url: url }, 'lazy');
\t\t\t\t}, this);
\t\t\t\timage.src = url;
\t\t\t}
\t\t}, this));

\t\tthis._loaded.push(\$item.get(0));
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tLazy.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this.handlers) {
\t\t\tthis._core.\$element.off(handler, this.handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Lazy = Lazy;

})(window.Zepto || window.jQuery, window, document);

/**
 * AutoHeight Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the auto height plugin.
\t * @class The Auto Height Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar AutoHeight = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight) {
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight && e.property.name == 'position'){
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'loaded.owl.lazy': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoHeight
\t\t\t\t\t&& e.element.closest('.' + this._core.settings.itemClass).index() === this._core.current()) {
\t\t\t\t\tthis.update();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, AutoHeight.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoHeight.Defaults = {
\t\tautoHeight: false,
\t\tautoHeightClass: 'owl-height'
\t};

\t/**
\t * Updates the view.
\t */
\tAutoHeight.prototype.update = function() {
\t\tvar start = this._core._current,
\t\t\tend = start + this._core.settings.items,
\t\t\tvisible = this._core.\$stage.children().toArray().slice(start, end),
\t\t\theights = [],
\t\t\tmaxheight = 0;

\t\t\$.each(visible, function(index, item) {
\t\t\theights.push(\$(item).height());
\t\t});

\t\tmaxheight = Math.max.apply(null, heights);

\t\tthis._core.\$stage.parent()
\t\t\t.height(maxheight)
\t\t\t.addClass(this._core.settings.autoHeightClass);
\t};

\tAutoHeight.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.AutoHeight = AutoHeight;

})(window.Zepto || window.jQuery, window, document);

/**
 * Video Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the video plugin.
\t * @class The Video Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Video = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Cache all video URLs.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._videos = {};

\t\t/**
\t\t * Current playing item.
\t\t * @protected
\t\t * @type {jQuery}
\t\t */
\t\tthis._playing = null;

\t\t/**
\t\t * All event handlers.
\t\t * @todo The cloned content removale is too late
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis._core.register({ type: 'state', name: 'playing', tags: [ 'interacting' ] });
\t\t\t\t}
\t\t\t}, this),
\t\t\t'resize.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.video && this.isInFullScreen()) {
\t\t\t\t\te.preventDefault();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.is('resizing')) {
\t\t\t\t\tthis._core.\$stage.find('.cloned .owl-video-frame').remove();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'position' && this._playing) {
\t\t\t\t\tthis.stop();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (!e.namespace) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tvar \$element = \$(e.content).find('.owl-video');

\t\t\t\tif (\$element.length) {
\t\t\t\t\t\$element.css('display', 'none');
\t\t\t\t\tthis.fetch(\$element, \$(e.content));
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Video.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);

\t\tthis._core.\$element.on('click.owl.video', '.owl-video-play-icon', \$.proxy(function(e) {
\t\t\tthis.play(e);
\t\t}, this));
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tVideo.Defaults = {
\t\tvideo: false,
\t\tvideoHeight: false,
\t\tvideoWidth: false
\t};

\t/**
\t * Gets the video ID and the type (YouTube/Vimeo/vzaar only).
\t * @protected
\t * @param {jQuery} target - The target containing the video data.
\t * @param {jQuery} item - The item containing the video.
\t */
\tVideo.prototype.fetch = function(target, item) {
\t\t\tvar type = (function() {
\t\t\t\t\tif (target.attr('data-vimeo-id')) {
\t\t\t\t\t\treturn 'vimeo';
\t\t\t\t\t} else if (target.attr('data-vzaar-id')) {
\t\t\t\t\t\treturn 'vzaar'
\t\t\t\t\t} else {
\t\t\t\t\t\treturn 'youtube';
\t\t\t\t\t}
\t\t\t\t})(),
\t\t\t\tid = target.attr('data-vimeo-id') || target.attr('data-youtube-id') || target.attr('data-vzaar-id'),
\t\t\t\twidth = target.attr('data-width') || this._core.settings.videoWidth,
\t\t\t\theight = target.attr('data-height') || this._core.settings.videoHeight,
\t\t\t\turl = target.attr('href');

\t\tif (url) {

\t\t\t/*
\t\t\t\t\tParses the id's out of the following urls (and probably more):
\t\t\t\t\thttps://www.youtube.com/watch?v=:id
\t\t\t\t\thttps://youtu.be/:id
\t\t\t\t\thttps://vimeo.com/:id
\t\t\t\t\thttps://vimeo.com/channels/:channel/:id
\t\t\t\t\thttps://vimeo.com/groups/:group/videos/:id
\t\t\t\t\thttps://app.vzaar.com/videos/:id

\t\t\t\t\tVisual example: https://regexper.com/#(http%3A%7Chttps%3A%7C)%5C%2F%5C%2F(player.%7Cwww.%7Capp.)%3F(vimeo%5C.com%7Cyoutu(be%5C.com%7C%5C.be%7Cbe%5C.googleapis%5C.com)%7Cvzaar%5C.com)%5C%2F(video%5C%2F%7Cvideos%5C%2F%7Cembed%5C%2F%7Cchannels%5C%2F.%2B%5C%2F%7Cgroups%5C%2F.%2B%5C%2F%7Cwatch%5C%3Fv%3D%7Cv%5C%2F)%3F(%5BA-Za-z0-9._%25-%5D*)(%5C%26%5CS%2B)%3F
\t\t\t*/

\t\t\tid = url.match(/(http:|https:|)\\/\\/(player.|www.|app.)?(vimeo\\.com|youtu(be\\.com|\\.be|be\\.googleapis\\.com)|vzaar\\.com)\\/(video\\/|videos\\/|embed\\/|channels\\/.+\\/|groups\\/.+\\/|watch\\?v=|v\\/)?([A-Za-z0-9._%-]*)(\\&\\S+)?/);

\t\t\tif (id[3].indexOf('youtu') > -1) {
\t\t\t\ttype = 'youtube';
\t\t\t} else if (id[3].indexOf('vimeo') > -1) {
\t\t\t\ttype = 'vimeo';
\t\t\t} else if (id[3].indexOf('vzaar') > -1) {
\t\t\t\ttype = 'vzaar';
\t\t\t} else {
\t\t\t\tthrow new Error('Video URL not supported.');
\t\t\t}
\t\t\tid = id[6];
\t\t} else {
\t\t\tthrow new Error('Missing video URL.');
\t\t}

\t\tthis._videos[url] = {
\t\t\ttype: type,
\t\t\tid: id,
\t\t\twidth: width,
\t\t\theight: height
\t\t};

\t\titem.attr('data-video', url);

\t\tthis.thumbnail(target, this._videos[url]);
\t};

\t/**
\t * Creates video thumbnail.
\t * @protected
\t * @param {jQuery} target - The target containing the video data.
\t * @param {Object} info - The video info object.
\t * @see `fetch`
\t */
\tVideo.prototype.thumbnail = function(target, video) {
\t\tvar tnLink,
\t\t\ticon,
\t\t\tpath,
\t\t\tdimensions = video.width && video.height ? 'style=\"width:' + video.width + 'px;height:' + video.height + 'px;\"' : '',
\t\t\tcustomTn = target.find('img'),
\t\t\tsrcType = 'src',
\t\t\tlazyClass = '',
\t\t\tsettings = this._core.settings,
\t\t\tcreate = function(path) {
\t\t\t\ticon = '<div class=\"owl-video-play-icon\"></div>';

\t\t\t\tif (settings.lazyLoad) {
\t\t\t\t\ttnLink = '<div class=\"owl-video-tn ' + lazyClass + '\" ' + srcType + '=\"' + path + '\"></div>';
\t\t\t\t} else {
\t\t\t\t\ttnLink = '<div class=\"owl-video-tn\" style=\"opacity:1;background-image:url(' + path + ')\"></div>';
\t\t\t\t}
\t\t\t\ttarget.after(tnLink);
\t\t\t\ttarget.after(icon);
\t\t\t};

\t\t// wrap video content into owl-video-wrapper div
\t\ttarget.wrap('<div class=\"owl-video-wrapper\"' + dimensions + '></div>');

\t\tif (this._core.settings.lazyLoad) {
\t\t\tsrcType = 'data-src';
\t\t\tlazyClass = 'owl-lazy';
\t\t}

\t\t// custom thumbnail
\t\tif (customTn.length) {
\t\t\tcreate(customTn.attr(srcType));
\t\t\tcustomTn.remove();
\t\t\treturn false;
\t\t}

\t\tif (video.type === 'youtube') {
\t\t\tpath = \"//img.youtube.com/vi/\" + video.id + \"/hqdefault.jpg\";
\t\t\tcreate(path);
\t\t} else if (video.type === 'vimeo') {
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: '//vimeo.com/api/v2/video/' + video.id + '.json',
\t\t\t\tjsonp: 'callback',
\t\t\t\tdataType: 'jsonp',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tpath = data[0].thumbnail_large;
\t\t\t\t\tcreate(path);
\t\t\t\t}
\t\t\t});
\t\t} else if (video.type === 'vzaar') {
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: '//vzaar.com/api/videos/' + video.id + '.json',
\t\t\t\tjsonp: 'callback',
\t\t\t\tdataType: 'jsonp',
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tpath = data.framegrab_url;
\t\t\t\t\tcreate(path);
\t\t\t\t}
\t\t\t});
\t\t}
\t};

\t/**
\t * Stops the current video.
\t * @public
\t */
\tVideo.prototype.stop = function() {
\t\tthis._core.trigger('stop', null, 'video');
\t\tthis._playing.find('.owl-video-frame').remove();
\t\tthis._playing.removeClass('owl-video-playing');
\t\tthis._playing = null;
\t\tthis._core.leave('playing');
\t\tthis._core.trigger('stopped', null, 'video');
\t};

\t/**
\t * Starts the current video.
\t * @public
\t * @param {Event} event - The event arguments.
\t */
\tVideo.prototype.play = function(event) {
\t\tvar target = \$(event.target),
\t\t\titem = target.closest('.' + this._core.settings.itemClass),
\t\t\tvideo = this._videos[item.attr('data-video')],
\t\t\twidth = video.width || '100%',
\t\t\theight = video.height || this._core.\$stage.height(),
\t\t\thtml;

\t\tif (this._playing) {
\t\t\treturn;
\t\t}

\t\tthis._core.enter('playing');
\t\tthis._core.trigger('play', null, 'video');

\t\titem = this._core.items(this._core.relative(item.index()));

\t\tthis._core.reset(item.index());

\t\tif (video.type === 'youtube') {
\t\t\thtml = '<iframe width=\"' + width + '\" height=\"' + height + '\" src=\"//www.youtube.com/embed/' +
\t\t\t\tvideo.id + '?autoplay=1&rel=0&v=' + video.id + '\" frameborder=\"0\" allowfullscreen></iframe>';
\t\t} else if (video.type === 'vimeo') {
\t\t\thtml = '<iframe src=\"//player.vimeo.com/video/' + video.id +
\t\t\t\t'?autoplay=1\" width=\"' + width + '\" height=\"' + height +
\t\t\t\t'\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
\t\t} else if (video.type === 'vzaar') {
\t\t\thtml = '<iframe frameborder=\"0\"' + 'height=\"' + height + '\"' + 'width=\"' + width +
\t\t\t\t'\" allowfullscreen mozallowfullscreen webkitAllowFullScreen ' +
\t\t\t\t'src=\"//view.vzaar.com/' + video.id + '/player?autoplay=true\"></iframe>';
\t\t}

\t\t\$('<div class=\"owl-video-frame\">' + html + '</div>').insertAfter(item.find('.owl-video'));

\t\tthis._playing = item.addClass('owl-video-playing');
\t};

\t/**
\t * Checks whether an video is currently in full screen mode or not.
\t * @todo Bad style because looks like a readonly method but changes members.
\t * @protected
\t * @returns {Boolean}
\t */
\tVideo.prototype.isInFullScreen = function() {
\t\tvar element = document.fullscreenElement || document.mozFullScreenElement ||
\t\t\t\tdocument.webkitFullscreenElement;

\t\treturn element && \$(element).parent().hasClass('owl-video-frame');
\t};

\t/**
\t * Destroys the plugin.
\t */
\tVideo.prototype.destroy = function() {
\t\tvar handler, property;

\t\tthis._core.\$element.off('click.owl.video');

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Video = Video;

})(window.Zepto || window.jQuery, window, document);

/**
 * Animate Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the animate plugin.
\t * @class The Navigation Plugin
\t * @param {Owl} scope - The Owl Carousel
\t */
\tvar Animate = function(scope) {
\t\tthis.core = scope;
\t\tthis.core.options = \$.extend({}, Animate.Defaults, this.core.options);
\t\tthis.swapping = true;
\t\tthis.previous = undefined;
\t\tthis.next = undefined;

\t\tthis.handlers = {
\t\t\t'change.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name == 'position') {
\t\t\t\t\tthis.previous = this.core.current();
\t\t\t\t\tthis.next = e.property.value;
\t\t\t\t}
\t\t\t}, this),
\t\t\t'drag.owl.carousel dragged.owl.carousel translated.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.swapping = e.type == 'translated';
\t\t\t\t}
\t\t\t}, this),
\t\t\t'translate.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn)) {
\t\t\t\t\tthis.swap();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\tthis.core.\$element.on(this.handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAnimate.Defaults = {
\t\tanimateOut: false,
\t\tanimateIn: false
\t};

\t/**
\t * Toggles the animation classes whenever an translations starts.
\t * @protected
\t * @returns {Boolean|undefined}
\t */
\tAnimate.prototype.swap = function() {

\t\tif (this.core.settings.items !== 1) {
\t\t\treturn;
\t\t}

\t\tif (!\$.support.animation || !\$.support.transition) {
\t\t\treturn;
\t\t}

\t\tthis.core.speed(0);

\t\tvar left,
\t\t\tclear = \$.proxy(this.clear, this),
\t\t\tprevious = this.core.\$stage.children().eq(this.previous),
\t\t\tnext = this.core.\$stage.children().eq(this.next),
\t\t\tincoming = this.core.settings.animateIn,
\t\t\toutgoing = this.core.settings.animateOut;

\t\tif (this.core.current() === this.previous) {
\t\t\treturn;
\t\t}

\t\tif (outgoing) {
\t\t\tleft = this.core.coordinates(this.previous) - this.core.coordinates(this.next);
\t\t\tprevious.one(\$.support.animation.end, clear)
\t\t\t\t.css( { 'left': left + 'px' } )
\t\t\t\t.addClass('animated owl-animated-out')
\t\t\t\t.addClass(outgoing);
\t\t}

\t\tif (incoming) {
\t\t\tnext.one(\$.support.animation.end, clear)
\t\t\t\t.addClass('animated owl-animated-in')
\t\t\t\t.addClass(incoming);
\t\t}
\t};

\tAnimate.prototype.clear = function(e) {
\t\t\$(e.target).css( { 'left': '' } )
\t\t\t.removeClass('animated owl-animated-out owl-animated-in')
\t\t\t.removeClass(this.core.settings.animateIn)
\t\t\t.removeClass(this.core.settings.animateOut);
\t\tthis.core.onTransitionEnd();
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tAnimate.prototype.destroy = function() {
\t\tvar handler, property;

\t\tfor (handler in this.handlers) {
\t\t\tthis.core.\$element.off(handler, this.handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Animate = Animate;

})(window.Zepto || window.jQuery, window, document);

/**
 * Autoplay Plugin
 * @version 2.1.0
 * @author Bartosz Wojciechowski
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\t/**
\t * Creates the autoplay plugin.
\t * @class The Autoplay Plugin
\t * @param {Owl} scope - The Owl Carousel
\t */
\tvar Autoplay = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * The autoplay timeout.
\t\t * @type {Timeout}
\t\t */
\t\tthis._timeout = null;

\t\t/**
\t\t * Indicates whenever the autoplay is paused.
\t\t * @type {Boolean}
\t\t */
\t\tthis._paused = false;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'settings') {
\t\t\t\t\tif (this._core.settings.autoplay) {
\t\t\t\t\t\tthis.play();
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.stop();
\t\t\t\t\t}
\t\t\t\t} else if (e.namespace && e.property.name === 'position') {
\t\t\t\t\t//console.log('play?', e);
\t\t\t\t\tif (this._core.settings.autoplay) {
\t\t\t\t\t\tthis._setAutoPlayInterval();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}, this),
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.autoplay) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'play.owl.autoplay': \$.proxy(function(e, t, s) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.play(t, s);
\t\t\t\t}
\t\t\t}, this),
\t\t\t'stop.owl.autoplay': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tthis.stop();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'mouseover.owl.autoplay': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.pause();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'mouseleave.owl.autoplay': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'touchstart.owl.core': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause && this._core.is('rotating')) {
\t\t\t\t\tthis.pause();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'touchend.owl.core': \$.proxy(function() {
\t\t\t\tif (this._core.settings.autoplayHoverPause) {
\t\t\t\t\tthis.play();
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// register event handlers
\t\tthis._core.\$element.on(this._handlers);

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Autoplay.Defaults, this._core.options);
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tAutoplay.Defaults = {
\t\tautoplay: false,
\t\tautoplayTimeout: 5000,
\t\tautoplayHoverPause: false,
\t\tautoplaySpeed: false
\t};

\t/**
\t * Starts the autoplay.
\t * @public
\t * @param {Number} [timeout] - The interval before the next animation starts.
\t * @param {Number} [speed] - The animation speed for the animations.
\t */
\tAutoplay.prototype.play = function(timeout, speed) {
\t\tthis._paused = false;

\t\tif (this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\tthis._core.enter('rotating');

\t\tthis._setAutoPlayInterval();
\t};

\t/**
\t * Gets a new timeout
\t * @private
\t * @param {Number} [timeout] - The interval before the next animation starts.
\t * @param {Number} [speed] - The animation speed for the animations.
\t * @return {Timeout}
\t */
\tAutoplay.prototype._getNextTimeout = function(timeout, speed) {
\t\tif ( this._timeout ) {
\t\t\twindow.clearTimeout(this._timeout);
\t\t}
\t\treturn window.setTimeout(\$.proxy(function() {
\t\t\tif (this._paused || this._core.is('busy') || this._core.is('interacting') || document.hidden) {
\t\t\t\treturn;
\t\t\t}
\t\t\tthis._core.next(speed || this._core.settings.autoplaySpeed);
\t\t}, this), timeout || this._core.settings.autoplayTimeout);
\t};

\t/**
\t * Sets autoplay in motion.
\t * @private
\t */
\tAutoplay.prototype._setAutoPlayInterval = function() {
\t\tthis._timeout = this._getNextTimeout();
\t};

\t/**
\t * Stops the autoplay.
\t * @public
\t */
\tAutoplay.prototype.stop = function() {
\t\tif (!this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\twindow.clearTimeout(this._timeout);
\t\tthis._core.leave('rotating');
\t};

\t/**
\t * Stops the autoplay.
\t * @public
\t */
\tAutoplay.prototype.pause = function() {
\t\tif (!this._core.is('rotating')) {
\t\t\treturn;
\t\t}

\t\tthis._paused = true;
\t};

\t/**
\t * Destroys the plugin.
\t */
\tAutoplay.prototype.destroy = function() {
\t\tvar handler, property;

\t\tthis.stop();

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.autoplay = Autoplay;

})(window.Zepto || window.jQuery, window, document);

/**
 * Navigation Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {
\t'use strict';

\t/**
\t * Creates the navigation plugin.
\t * @class The Navigation Plugin
\t * @param {Owl} carousel - The Owl Carousel.
\t */
\tvar Navigation = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Indicates whether the plugin is initialized or not.
\t\t * @protected
\t\t * @type {Boolean}
\t\t */
\t\tthis._initialized = false;

\t\t/**
\t\t * The current paging indexes.
\t\t * @protected
\t\t * @type {Array}
\t\t */
\t\tthis._pages = [];

\t\t/**
\t\t * All DOM elements of the user interface.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._controls = {};

\t\t/**
\t\t * Markup for an indicator.
\t\t * @protected
\t\t * @type {Array.<String>}
\t\t */
\t\tthis._templates = [];

\t\t/**
\t\t * The carousel element.
\t\t * @type {jQuery}
\t\t */
\t\tthis.\$element = this._core.\$element;

\t\t/**
\t\t * Overridden methods of the carousel.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._overrides = {
\t\t\tnext: this._core.next,
\t\t\tprev: this._core.prev,
\t\t\tto: this._core.to
\t\t};

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.push('<div class=\"' + this._core.settings.dotClass + '\">' +
\t\t\t\t\t\t\$(e.content).find('[data-dot]').addBack('[data-dot]').attr('data-dot') + '</div>');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'added.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.splice(e.position, 0, this._templates.pop());
\t\t\t\t}
\t\t\t}, this),
\t\t\t'remove.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.dotsData) {
\t\t\t\t\tthis._templates.splice(e.position, 1);
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name == 'position') {
\t\t\t\t\tthis.draw();
\t\t\t\t}
\t\t\t}, this),
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && !this._initialized) {
\t\t\t\t\tthis._core.trigger('initialize', null, 'navigation');
\t\t\t\t\tthis.initialize();
\t\t\t\t\tthis.update();
\t\t\t\t\tthis.draw();
\t\t\t\t\tthis._initialized = true;
\t\t\t\t\tthis._core.trigger('initialized', null, 'navigation');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'refreshed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._initialized) {
\t\t\t\t\tthis._core.trigger('refresh', null, 'navigation');
\t\t\t\t\tthis.update();
\t\t\t\t\tthis.draw();
\t\t\t\t\tthis._core.trigger('refreshed', null, 'navigation');
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Navigation.Defaults, this._core.options);

\t\t// register event handlers
\t\tthis.\$element.on(this._handlers);
\t};

\t/**
\t * Default options.
\t * @public
\t * @todo Rename `slideBy` to `navBy`
\t */
\tNavigation.Defaults = {
\t\tnav: false,
\t\tnavText: [ 'prev', 'next' ],
\t\tnavSpeed: false,
\t\tnavElement: 'div',
\t\tnavContainer: false,
\t\tnavContainerClass: 'owl-nav',
\t\tnavClass: [ 'owl-prev', 'owl-next' ],
\t\tslideBy: 1,
\t\tdotClass: 'owl-dot',
\t\tdotsClass: 'owl-dots',
\t\tdots: true,
\t\tdotsEach: false,
\t\tdotsData: false,
\t\tdotsSpeed: false,
\t\tdotsContainer: false
\t};

\t/**
\t * Initializes the layout of the plugin and extends the carousel.
\t * @protected
\t */
\tNavigation.prototype.initialize = function() {
\t\tvar override,
\t\t\tsettings = this._core.settings;

\t\t// create DOM structure for relative navigation
\t\tthis._controls.\$relative = (settings.navContainer ? \$(settings.navContainer)
\t\t\t: \$('<div>').addClass(settings.navContainerClass).appendTo(this.\$element)).addClass('disabled');

\t\tthis._controls.\$previous = \$('<' + settings.navElement + '>')
\t\t\t.addClass(settings.navClass[0])
\t\t\t.html(settings.navText[0])
\t\t\t.prependTo(this._controls.\$relative)
\t\t\t.on('click', \$.proxy(function(e) {
\t\t\t\tthis.prev(settings.navSpeed);
\t\t\t}, this));
\t\tthis._controls.\$next = \$('<' + settings.navElement + '>')
\t\t\t.addClass(settings.navClass[1])
\t\t\t.html(settings.navText[1])
\t\t\t.appendTo(this._controls.\$relative)
\t\t\t.on('click', \$.proxy(function(e) {
\t\t\t\tthis.next(settings.navSpeed);
\t\t\t}, this));

\t\t// create DOM structure for absolute navigation
\t\tif (!settings.dotsData) {
\t\t\tthis._templates = [ \$('<div>')
\t\t\t\t.addClass(settings.dotClass)
\t\t\t\t.append(\$('<span>'))
\t\t\t\t.prop('outerHTML') ];
\t\t}

\t\tthis._controls.\$absolute = (settings.dotsContainer ? \$(settings.dotsContainer)
\t\t\t: \$('<div>').addClass(settings.dotsClass).appendTo(this.\$element)).addClass('disabled');

\t\tthis._controls.\$absolute.on('click', 'div', \$.proxy(function(e) {
\t\t\tvar index = \$(e.target).parent().is(this._controls.\$absolute)
\t\t\t\t? \$(e.target).index() : \$(e.target).parent().index();

\t\t\te.preventDefault();

\t\t\tthis.to(index, settings.dotsSpeed);
\t\t}, this));

\t\t// override public methods of the carousel
\t\tfor (override in this._overrides) {
\t\t\tthis._core[override] = \$.proxy(this[override], this);
\t\t}
\t};

\t/**
\t * Destroys the plugin.
\t * @protected
\t */
\tNavigation.prototype.destroy = function() {
\t\tvar handler, control, property, override;

\t\tfor (handler in this._handlers) {
\t\t\tthis.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (control in this._controls) {
\t\t\tthis._controls[control].remove();
\t\t}
\t\tfor (override in this.overides) {
\t\t\tthis._core[override] = this._overrides[override];
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t/**
\t * Updates the internal state.
\t * @protected
\t */
\tNavigation.prototype.update = function() {
\t\tvar i, j, k,
\t\t\tlower = this._core.clones().length / 2,
\t\t\tupper = lower + this._core.items().length,
\t\t\tmaximum = this._core.maximum(true),
\t\t\tsettings = this._core.settings,
\t\t\tsize = settings.center || settings.autoWidth || settings.dotsData
\t\t\t\t? 1 : settings.dotsEach || settings.items;

\t\tif (settings.slideBy !== 'page') {
\t\t\tsettings.slideBy = Math.min(settings.slideBy, settings.items);
\t\t}

\t\tif (settings.dots || settings.slideBy == 'page') {
\t\t\tthis._pages = [];

\t\t\tfor (i = lower, j = 0, k = 0; i < upper; i++) {
\t\t\t\tif (j >= size || j === 0) {
\t\t\t\t\tthis._pages.push({
\t\t\t\t\t\tstart: Math.min(maximum, i - lower),
\t\t\t\t\t\tend: i - lower + size - 1
\t\t\t\t\t});
\t\t\t\t\tif (Math.min(maximum, i - lower) === maximum) {
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\tj = 0, ++k;
\t\t\t\t}
\t\t\t\tj += this._core.mergers(this._core.relative(i));
\t\t\t}
\t\t}
\t};

\t/**
\t * Draws the user interface.
\t * @todo The option `dotsData` wont work.
\t * @protected
\t */
\tNavigation.prototype.draw = function() {
\t\tvar difference,
\t\t\tsettings = this._core.settings,
\t\t\tdisabled = this._core.items().length <= settings.items,
\t\t\tindex = this._core.relative(this._core.current()),
\t\t\tloop = settings.loop || settings.rewind;

\t\tthis._controls.\$relative.toggleClass('disabled', !settings.nav || disabled);

\t\tif (settings.nav) {
\t\t\tthis._controls.\$previous.toggleClass('disabled', !loop && index <= this._core.minimum(true));
\t\t\tthis._controls.\$next.toggleClass('disabled', !loop && index >= this._core.maximum(true));
\t\t}

\t\tthis._controls.\$absolute.toggleClass('disabled', !settings.dots || disabled);

\t\tif (settings.dots) {
\t\t\tdifference = this._pages.length - this._controls.\$absolute.children().length;

\t\t\tif (settings.dotsData && difference !== 0) {
\t\t\t\tthis._controls.\$absolute.html(this._templates.join(''));
\t\t\t} else if (difference > 0) {
\t\t\t\tthis._controls.\$absolute.append(new Array(difference + 1).join(this._templates[0]));
\t\t\t} else if (difference < 0) {
\t\t\t\tthis._controls.\$absolute.children().slice(difference).remove();
\t\t\t}

\t\t\tthis._controls.\$absolute.find('.active').removeClass('active');
\t\t\tthis._controls.\$absolute.children().eq(\$.inArray(this.current(), this._pages)).addClass('active');
\t\t}
\t};

\t/**
\t * Extends event data.
\t * @protected
\t * @param {Event} event - The event object which gets thrown.
\t */
\tNavigation.prototype.onTrigger = function(event) {
\t\tvar settings = this._core.settings;

\t\tevent.page = {
\t\t\tindex: \$.inArray(this.current(), this._pages),
\t\t\tcount: this._pages.length,
\t\t\tsize: settings && (settings.center || settings.autoWidth || settings.dotsData
\t\t\t\t? 1 : settings.dotsEach || settings.items)
\t\t};
\t};

\t/**
\t * Gets the current page position of the carousel.
\t * @protected
\t * @returns {Number}
\t */
\tNavigation.prototype.current = function() {
\t\tvar current = this._core.relative(this._core.current());
\t\treturn \$.grep(this._pages, \$.proxy(function(page, index) {
\t\t\treturn page.start <= current && page.end >= current;
\t\t}, this)).pop();
\t};

\t/**
\t * Gets the current succesor/predecessor position.
\t * @protected
\t * @returns {Number}
\t */
\tNavigation.prototype.getPosition = function(successor) {
\t\tvar position, length,
\t\t\tsettings = this._core.settings;

\t\tif (settings.slideBy == 'page') {
\t\t\tposition = \$.inArray(this.current(), this._pages);
\t\t\tlength = this._pages.length;
\t\t\tsuccessor ? ++position : --position;
\t\t\tposition = this._pages[((position % length) + length) % length].start;
\t\t} else {
\t\t\tposition = this._core.relative(this._core.current());
\t\t\tlength = this._core.items().length;
\t\t\tsuccessor ? position += settings.slideBy : position -= settings.slideBy;
\t\t}

\t\treturn position;
\t};

\t/**
\t * Slides to the next item or page.
\t * @public
\t * @param {Number} [speed=false] - The time in milliseconds for the transition.
\t */
\tNavigation.prototype.next = function(speed) {
\t\t\$.proxy(this._overrides.to, this._core)(this.getPosition(true), speed);
\t};

\t/**
\t * Slides to the previous item or page.
\t * @public
\t * @param {Number} [speed=false] - The time in milliseconds for the transition.
\t */
\tNavigation.prototype.prev = function(speed) {
\t\t\$.proxy(this._overrides.to, this._core)(this.getPosition(false), speed);
\t};

\t/**
\t * Slides to the specified item or page.
\t * @public
\t * @param {Number} position - The position of the item or page.
\t * @param {Number} [speed] - The time in milliseconds for the transition.
\t * @param {Boolean} [standard=false] - Whether to use the standard behaviour or not.
\t */
\tNavigation.prototype.to = function(position, speed, standard) {
\t\tvar length;

\t\tif (!standard && this._pages.length) {
\t\t\tlength = this._pages.length;
\t\t\t\$.proxy(this._overrides.to, this._core)(this._pages[((position % length) + length) % length].start, speed);
\t\t} else {
\t\t\t\$.proxy(this._overrides.to, this._core)(position, speed);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Navigation = Navigation;

})(window.Zepto || window.jQuery, window, document);

/**
 * Hash Plugin
 * @version 2.1.0
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {
\t'use strict';

\t/**
\t * Creates the hash plugin.
\t * @class The Hash Plugin
\t * @param {Owl} carousel - The Owl Carousel
\t */
\tvar Hash = function(carousel) {
\t\t/**
\t\t * Reference to the core.
\t\t * @protected
\t\t * @type {Owl}
\t\t */
\t\tthis._core = carousel;

\t\t/**
\t\t * Hash index for the items.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._hashes = {};

\t\t/**
\t\t * The carousel element.
\t\t * @type {jQuery}
\t\t */
\t\tthis.\$element = this._core.\$element;

\t\t/**
\t\t * All event handlers.
\t\t * @protected
\t\t * @type {Object}
\t\t */
\t\tthis._handlers = {
\t\t\t'initialized.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && this._core.settings.startPosition === 'URLHash') {
\t\t\t\t\t\$(window).trigger('hashchange.owl.navigation');
\t\t\t\t}
\t\t\t}, this),
\t\t\t'prepared.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace) {
\t\t\t\t\tvar hash = \$(e.content).find('[data-hash]').addBack('[data-hash]').attr('data-hash');

\t\t\t\t\tif (!hash) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tthis._hashes[hash] = e.content;
\t\t\t\t}
\t\t\t}, this),
\t\t\t'changed.owl.carousel': \$.proxy(function(e) {
\t\t\t\tif (e.namespace && e.property.name === 'position') {
\t\t\t\t\tvar current = this._core.items(this._core.relative(this._core.current())),
\t\t\t\t\t\thash = \$.map(this._hashes, function(item, hash) {
\t\t\t\t\t\t\treturn item === current ? hash : null;
\t\t\t\t\t\t}).join();

\t\t\t\t\tif (!hash || window.location.hash.slice(1) === hash) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\twindow.location.hash = hash;
\t\t\t\t}
\t\t\t}, this)
\t\t};

\t\t// set default options
\t\tthis._core.options = \$.extend({}, Hash.Defaults, this._core.options);

\t\t// register the event handlers
\t\tthis.\$element.on(this._handlers);

\t\t// register event listener for hash navigation
\t\t\$(window).on('hashchange.owl.navigation', \$.proxy(function(e) {
\t\t\tvar hash = window.location.hash.substring(1),
\t\t\t\titems = this._core.\$stage.children(),
\t\t\t\tposition = this._hashes[hash] && items.index(this._hashes[hash]);

\t\t\tif (position === undefined || position === this._core.current()) {
\t\t\t\treturn;
\t\t\t}

\t\t\tthis._core.to(this._core.relative(position), false, true);
\t\t}, this));
\t};

\t/**
\t * Default options.
\t * @public
\t */
\tHash.Defaults = {
\t\tURLhashListener: false
\t};

\t/**
\t * Destroys the plugin.
\t * @public
\t */
\tHash.prototype.destroy = function() {
\t\tvar handler, property;

\t\t\$(window).off('hashchange.owl.navigation');

\t\tfor (handler in this._handlers) {
\t\t\tthis._core.\$element.off(handler, this._handlers[handler]);
\t\t}
\t\tfor (property in Object.getOwnPropertyNames(this)) {
\t\t\ttypeof this[property] != 'function' && (this[property] = null);
\t\t}
\t};

\t\$.fn.owlCarousel.Constructor.Plugins.Hash = Hash;

})(window.Zepto || window.jQuery, window, document);

/**
 * Support Plugin
 *
 * @version 2.1.0
 * @author Vivid Planet Software GmbH
 * @author Artus Kolanowski
 * @author David Deutsch
 * @license The MIT License (MIT)
 */
;(function(\$, window, document, undefined) {

\tvar style = \$('<support>').get(0).style,
\t\tprefixes = 'Webkit Moz O ms'.split(' '),
\t\tevents = {
\t\t\ttransition: {
\t\t\t\tend: {
\t\t\t\t\tWebkitTransition: 'webkitTransitionEnd',
\t\t\t\t\tMozTransition: 'transitionend',
\t\t\t\t\tOTransition: 'oTransitionEnd',
\t\t\t\t\ttransition: 'transitionend'
\t\t\t\t}
\t\t\t},
\t\t\tanimation: {
\t\t\t\tend: {
\t\t\t\t\tWebkitAnimation: 'webkitAnimationEnd',
\t\t\t\t\tMozAnimation: 'animationend',
\t\t\t\t\tOAnimation: 'oAnimationEnd',
\t\t\t\t\tanimation: 'animationend'
\t\t\t\t}
\t\t\t}
\t\t},
\t\ttests = {
\t\t\tcsstransforms: function() {
\t\t\t\treturn !!test('transform');
\t\t\t},
\t\t\tcsstransforms3d: function() {
\t\t\t\treturn !!test('perspective');
\t\t\t},
\t\t\tcsstransitions: function() {
\t\t\t\treturn !!test('transition');
\t\t\t},
\t\t\tcssanimations: function() {
\t\t\t\treturn !!test('animation');
\t\t\t}
\t\t};

\tfunction test(property, prefixed) {
\t\tvar result = false,
\t\t\tupper = property.charAt(0).toUpperCase() + property.slice(1);

\t\t\$.each((property + ' ' + prefixes.join(upper + ' ') + upper).split(' '), function(i, property) {
\t\t\tif (style[property] !== undefined) {
\t\t\t\tresult = prefixed ? property : true;
\t\t\t\treturn false;
\t\t\t}
\t\t});

\t\treturn result;
\t}

\tfunction prefixed(property) {
\t\treturn test(property, true);
\t}

\tif (tests.csstransitions()) {
\t\t/* jshint -W053 */
\t\t\$.support.transition = new String(prefixed('transition'))
\t\t\$.support.transition.end = events.transition.end[ \$.support.transition ];
\t}

\tif (tests.cssanimations()) {
\t\t/* jshint -W053 */
\t\t\$.support.animation = new String(prefixed('animation'))
\t\t\$.support.animation.end = events.animation.end[ \$.support.animation ];
\t}

\tif (tests.csstransforms()) {
\t\t/* jshint -W053 */
\t\t\$.support.transform = new String(prefixed('transform'));
\t\t\$.support.transform3d = tests.csstransforms3d();
\t}

})(window.Zepto || window.jQuery, window, document);
", "lib/owlcarousel/owl.carousel.js", "C:\\Users\\Eya\\projet\\templates\\lib\\owlcarousel\\owl.carousel.js");
    }
}
