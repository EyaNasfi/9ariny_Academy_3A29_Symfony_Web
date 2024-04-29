<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_6ca3274da53b300b85f4ab77721d3eef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "totals", [], "any", false, false, false, 4), "calls", [], "any", false, false, false, 4) > 0)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/cache.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "totals", [], "any", false, false, false, 7), "calls", [], "any", false, false, false, 7), "html", null, true);
                yield "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
                // line 10
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "totals", [], "any", false, false, false, 10), "time", [], "any", false, false, false, 10) * 1000)), "html", null, true);
                yield "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            yield "        ";
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
                // line 17
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "totals", [], "any", false, false, false, 17), "calls", [], "any", false, false, false, 17), "html", null, true);
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
                // line 21
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "totals", [], "any", false, false, false, 21), "time", [], "any", false, false, false, 21) * 1000)), "html", null, true);
                yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
                // line 25
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hits", [], "any", false, false, false, 25), "html", null, true);
                yield " / ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "reads", [], "any", false, false, false, 25), "html", null, true);
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25))) {
                    yield " (";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25), "html", null, true);
                    yield "%)";
                }
                yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "totals", [], "any", false, false, false, 29), "writes", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
        </div>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            yield "
        ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 33, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        yield "    <span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "totals", [], "any", false, false, false, 38), "calls", [], "any", false, false, false, 38) == 0)) ? ("disabled") : (""));
        yield "\">
    <span class=\"icon\">
        ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/cache.svg");
        yield "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        yield "    <h2>Cache</h2>

    ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "totals", [], "any", false, false, false, 49), "calls", [], "any", false, false, false, 49) == 0)) {
            // line 50
            yield "        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "totals", [], "any", false, false, false, 56), "calls", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "totals", [], "any", false, false, false, 60), "time", [], "any", false, false, false, 60) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "totals", [], "any", false, false, false, 65), "reads", [], "any", false, false, false, 65), "html", null, true);
            yield "</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 69, $this->source); })()), "totals", [], "any", false, false, false, 69), "writes", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 73
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "totals", [], "any", false, false, false, 73), "deletes", [], "any", false, false, false, 73), "html", null, true);
            yield "</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "totals", [], "any", false, false, false, 78), "hits", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "totals", [], "any", false, false, false, 82), "misses", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    ";
            // line 87
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", true, true, false, 87) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", false, false, false, 87)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "totals", [], "any", false, true, false, 87), "hit_read_ratio", [], "any", false, false, false, 87), "html", null, true)) : (yield 0));
            yield " <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "calls", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 96
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 97
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                yield " <span class=\"badge\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "statistics", [], "any", false, false, false, 97), $context["name"], [], "array", false, false, false, 97), "calls", [], "any", false, false, false, 97), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        ";
                // line 100
                if ((Twig\Extension\CoreExtension::lengthFilter($this->env, $context["calls"]) == 0)) {
                    // line 101
                    yield "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 102
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                    yield " pool.</p>
                            </div>
                        ";
                } else {
                    // line 105
                    yield "                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                ";
                    // line 107
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "statistics", [], "any", false, false, false, 107), $context["name"], [], "array", false, false, false, 107));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 108
                        yield "                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            ";
                        // line 110
                        if (($context["key"] == "time")) {
                            // line 111
                            yield "                                                ";
                            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (1000 * $context["value"])), "html", null, true);
                            yield " <span class=\"unit\">ms</span>
                                            ";
                        } elseif ((                        // line 112
$context["key"] == "hit_read_ratio")) {
                            // line 113
                            yield "                                                ";
                            (((array_key_exists("value", $context) &&  !(null === $context["value"]))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true)) : (yield 0));
                            yield " <span class=\"unit\">%</span>
                                            ";
                        } else {
                            // line 115
                            yield "                                                ";
                            yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
                            yield "
                                            ";
                        }
                        // line 117
                        yield "                                        </span>
                                        <span class=\"label\">";
                        // line 118
                        ((($context["key"] == "hit_read_ratio")) ? (yield "Hits/reads") : (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::capitalizeStringFilter($this->env, $context["key"]), "html", null, true)));
                        yield "</span>
                                    </div>
                                    ";
                        // line 120
                        if ((($context["key"] == "time") || ($context["key"] == "deletes"))) {
                            // line 121
                            yield "                                        <div class=\"metric-divider\"></div>
                                    ";
                        }
                        // line 123
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    yield "                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["calls"]);
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 138
                        yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 139
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 139), "html", null, true);
                        yield "</td>
                                        <td class=\"nowrap\">";
                        // line 140
                        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, false, 140) - CoreExtension::getAttribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, false, 140)) * 1000)), "html", null, true);
                        yield " ms</td>
                                        <td class=\"nowrap\">";
                        // line 141
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, false, 141), "html", null, true);
                        yield "()</td>
                                        <td>";
                        // line 142
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, false, 142), "result", [], "any", false, false, false, 142), 2);
                        yield "</td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                                </tbody>
                            </table>
                        ";
                }
                // line 148
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/cache.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  432 => 151,  424 => 148,  419 => 145,  402 => 142,  398 => 141,  394 => 140,  390 => 139,  387 => 138,  370 => 137,  355 => 124,  349 => 123,  345 => 121,  343 => 120,  338 => 118,  335 => 117,  329 => 115,  323 => 113,  321 => 112,  316 => 111,  314 => 110,  310 => 108,  306 => 107,  302 => 105,  296 => 102,  293 => 101,  291 => 100,  283 => 97,  278 => 96,  274 => 95,  263 => 87,  255 => 82,  248 => 78,  240 => 73,  233 => 69,  226 => 65,  218 => 60,  211 => 56,  207 => 54,  201 => 50,  199 => 49,  195 => 47,  185 => 46,  169 => 40,  163 => 38,  153 => 37,  139 => 33,  136 => 32,  130 => 29,  116 => 25,  109 => 21,  102 => 17,  98 => 15,  95 => 14,  88 => 10,  82 => 7,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
    <span class=\"icon\">
        {{ include('@WebProfiler/Icon/cache.svg') }}
    </span>
    <strong>Cache</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.calls }}</span>
                <span class=\"label\">Total calls</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.totals.time * 1000) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Total time</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.reads }}</span>
                <span class=\"label\">Total reads</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.writes }}</span>
                <span class=\"label\">Total writes</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.deletes }}</span>
                <span class=\"label\">Total deletes</span>
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.hits }}</span>
                <span class=\"label\">Total hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.totals.misses }}</span>
                <span class=\"label\">Total misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">
                    {{ collector.totals.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {% for name, calls in collector.calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            <div class=\"metrics\">
                                {% for key, value in collector.statistics[name] %}
                                    <div class=\"metric\">
                                        <span class=\"value\">
                                            {% if key == 'time' %}
                                                {{ '%0.2f'|format(1000 * value) }} <span class=\"unit\">ms</span>
                                            {% elseif key == 'hit_read_ratio' %}
                                                {{ value ?? 0 }} <span class=\"unit\">%</span>
                                            {% else %}
                                                {{ value }}
                                            {% endif %}
                                        </span>
                                        <span class=\"label\">{{ key == 'hit_read_ratio' ? 'Hits/reads' : key|capitalize }}</span>
                                    </div>
                                    {% if key == 'time' or key == 'deletes' %}
                                        <div class=\"metric-divider\"></div>
                                    {% endif %}
                                {% endfor %}
                            </div>

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/cache.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\cache.html.twig");
    }
}
