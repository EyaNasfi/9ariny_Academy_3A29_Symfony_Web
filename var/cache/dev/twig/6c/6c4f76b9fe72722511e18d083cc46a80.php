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

/* back/user/index.html.twig */
class __TwigTemplate_81efc40480c7992e563e6f453feb3d70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "back/user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <!-- row -->
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">User List </h4>
                    </div>
                    <div id=\"div_chart\"></div>

                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script type=\"text/javascript\">
                        ";
        // line 18
        yield $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 18, $this->source); })()), "div_chart");
        yield "
                    </script>


                    <div class=\"card-body\">
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_user_admin");
        yield "\" class=\"btn btn-secondary\">Ajouter Utilisateur</a>

                        <div class=\"table-responsive\">
                            <div id=\"divs\">
                                <input class=\"form-control\" type=\"text\" id=\"search\" placeholder=\"🔍\">
                                <a style=\"color:#FF0000;\" class=\"tg-btn\" href=\"\" id=\"idup\">UP ⬆️</a>
                                <a style=\"color:#25DD28;\" class=\"tg-btn\" href=\"\" id=\"iddown\">DOWN ⬇️</a>
                            </div>

                            <table class=\"table table-sm mb-0 table-striped\" id=\"t\">
                                <thead>
                                <tr>
                                    <th class=\"py-3\">Image</th>
                                    <th class=\"py-3\">Nom et Prenom</th>
                                    <th class=\"py-3\">Email</th>
                                    <th class=\"py-3\">Address</th>
                                    <th class=\"py-3\">Role</th>
                                    <th class=\"py-3\">Etat</th>
                                    <th class=\"py-3\">Actions</th>
                                </tr>
                                </thead>
                               
                                <tbody id=\"search\"></tbody>
                            </table>
                    </div>
                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#divs\").keyup(function (e) {
                var value = \$(\"#search\").val();
                if (value.length >= 1 || value.length == 0) {
                    \$.ajax({
                        url: \"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        yield "\",
                        type: 'GET',
                        data: {
                            'searchValue': value
                        },
                        success: function (response) {
                            // Check if response is not empty
                            if (response) {
                                // Clear previous search results
                                \$('#t tbody#search').empty();
                                // Parse JSON response
                                var users = JSON.parse(response);
                                // Iterate over etablissements and append rows to table
                                \$.each(users, function (i, user) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append(
                                        '<tr class=\"btn-reveal-trigger\">' +
                                        '<td class=\"p-3\"><img src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
        yield "' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                        '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                        '<td class=\"py-2\">' + user.email + '</td>' +
                                        '<td class=\"py-2\">' + user.address + '</td>' +
                                        '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                        '<td class=\"py-2\">' +
                                        '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                        '</td>' +
                                        '<td>' +
                                        '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                        (user.roles[0] !== 'ADMIN' ?
                                            (user.status === 'active' ?
                                                '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                                '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                            '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                            '') +
                                        '</td>' +
                                        '</tr>'
                                    );
                                });
                            } else {
                                // Handle empty response
                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');
                            }
                        }
                    });
                    return false;
                }
            });

            \$(\"#idup\").click(function (e) {
                var value = \$(\"#search\").val();
                var value3 = \"ASC\";

                \$.ajax({
                    url: \"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        yield "\",
                    type: 'GET',
                    data: {
                        'searchValue': value,
                        'orderid': value3
                    },
                    success: function (response) {
                        // Check if response is not empty
                        if (response) {
                            // Clear previous search results
                            \$('#t tbody#search').empty();
                            // Parse JSON response
                            var users = JSON.parse(response);
                            // Iterate over etablissements and append rows to table
                            \$.each(users, function (i, user) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    '<tr class=\"btn-reveal-trigger\">' +
                                    '<td class=\"p-3\"><img src=\"";
        // line 132
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
        yield "' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                    '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                    '<td class=\"py-2\">' + user.email + '</td>' +
                                    '<td class=\"py-2\">' + user.address + '</td>' +
                                    '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                    '<td class=\"py-2\">' +
                                    '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                    (user.roles[0] !== 'ADMIN' ?
                                        (user.status === 'active' ?
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                        '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                        '') +
                                    '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            // Handle empty response
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    }
                });
                return false;

            });

            \$(\"#iddown\").click(function (e) {
                var value = \$(\"#search\").val();
                var value3 = \"DESC\";

                \$.ajax({
                    url: \"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_user");
        yield "\",
                    type: 'GET',
                    data: {
                        'searchValue': value,
                        'orderid': value3
                    },
                    success: function (response) {
                        // Check if response is not empty
                        if (response) {
                            // Clear previous search results
                            \$('#t tbody#search').empty();
                            var users = JSON.parse(response);
                            \$.each(users, function (i, user) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    '<tr class=\"btn-reveal-trigger\">' +
                                    '<td class=\"p-3\"><img src=\"";
        // line 185
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
        yield "' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                    '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                    '<td class=\"py-2\">' + user.email + '</td>' +
                                    '<td class=\"py-2\">' + user.address + '</td>' +
                                    '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                    '<td class=\"py-2\">' +
                                    '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                    (user.roles[0] !== 'ADMIN' ?
                                        (user.status === 'active' ?
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                        '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                        '') +
                                    '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            // Handle empty response
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    }
                });
                return false;

            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/user/index.html.twig";
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
        return array (  293 => 185,  274 => 169,  234 => 132,  213 => 114,  173 => 77,  153 => 60,  113 => 23,  105 => 18,  90 => 5,  80 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}User List{% endblock %}
{% block body %}
    <!-- row -->
    <div class=\"container-fluid\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">User List </h4>
                    </div>
                    <div id=\"div_chart\"></div>

                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                    <script type=\"text/javascript\">
                        {{ gc_draw(piechart, 'div_chart') }}
                    </script>


                    <div class=\"card-body\">
                        <a href=\"{{ path('app_add_user_admin') }}\" class=\"btn btn-secondary\">Ajouter Utilisateur</a>

                        <div class=\"table-responsive\">
                            <div id=\"divs\">
                                <input class=\"form-control\" type=\"text\" id=\"search\" placeholder=\"🔍\">
                                <a style=\"color:#FF0000;\" class=\"tg-btn\" href=\"\" id=\"idup\">UP ⬆️</a>
                                <a style=\"color:#25DD28;\" class=\"tg-btn\" href=\"\" id=\"iddown\">DOWN ⬇️</a>
                            </div>

                            <table class=\"table table-sm mb-0 table-striped\" id=\"t\">
                                <thead>
                                <tr>
                                    <th class=\"py-3\">Image</th>
                                    <th class=\"py-3\">Nom et Prenom</th>
                                    <th class=\"py-3\">Email</th>
                                    <th class=\"py-3\">Address</th>
                                    <th class=\"py-3\">Role</th>
                                    <th class=\"py-3\">Etat</th>
                                    <th class=\"py-3\">Actions</th>
                                </tr>
                                </thead>
                               
                                <tbody id=\"search\"></tbody>
                            </table>
                    </div>
                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#divs\").keyup(function (e) {
                var value = \$(\"#search\").val();
                if (value.length >= 1 || value.length == 0) {
                    \$.ajax({
                        url: \"{{ path('search_user') }}\",
                        type: 'GET',
                        data: {
                            'searchValue': value
                        },
                        success: function (response) {
                            // Check if response is not empty
                            if (response) {
                                // Clear previous search results
                                \$('#t tbody#search').empty();
                                // Parse JSON response
                                var users = JSON.parse(response);
                                // Iterate over etablissements and append rows to table
                                \$.each(users, function (i, user) {
                                    \$('#t tbody#all').hide();
                                    \$('#t tbody#search').append(
                                        '<tr class=\"btn-reveal-trigger\">' +
                                        '<td class=\"p-3\"><img src=\"{{ asset('uploads/images/') }}' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                        '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                        '<td class=\"py-2\">' + user.email + '</td>' +
                                        '<td class=\"py-2\">' + user.address + '</td>' +
                                        '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                        '<td class=\"py-2\">' +
                                        '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                        '</td>' +
                                        '<td>' +
                                        '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                        (user.roles[0] !== 'ADMIN' ?
                                            (user.status === 'active' ?
                                                '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                                '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                            '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                            '') +
                                        '</td>' +
                                        '</tr>'
                                    );
                                });
                            } else {
                                // Handle empty response
                                \$('#t tbody#all').show();
                                \$('#t tbody#search').empty();
                                \$('#t tbody#search').fadeIn('fast');
                            }
                        }
                    });
                    return false;
                }
            });

            \$(\"#idup\").click(function (e) {
                var value = \$(\"#search\").val();
                var value3 = \"ASC\";

                \$.ajax({
                    url: \"{{ path('search_user') }}\",
                    type: 'GET',
                    data: {
                        'searchValue': value,
                        'orderid': value3
                    },
                    success: function (response) {
                        // Check if response is not empty
                        if (response) {
                            // Clear previous search results
                            \$('#t tbody#search').empty();
                            // Parse JSON response
                            var users = JSON.parse(response);
                            // Iterate over etablissements and append rows to table
                            \$.each(users, function (i, user) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    '<tr class=\"btn-reveal-trigger\">' +
                                    '<td class=\"p-3\"><img src=\"{{ asset('uploads/images/') }}' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                    '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                    '<td class=\"py-2\">' + user.email + '</td>' +
                                    '<td class=\"py-2\">' + user.address + '</td>' +
                                    '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                    '<td class=\"py-2\">' +
                                    '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                    (user.roles[0] !== 'ADMIN' ?
                                        (user.status === 'active' ?
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                        '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                        '') +
                                    '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            // Handle empty response
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    }
                });
                return false;

            });

            \$(\"#iddown\").click(function (e) {
                var value = \$(\"#search\").val();
                var value3 = \"DESC\";

                \$.ajax({
                    url: \"{{ path('search_user') }}\",
                    type: 'GET',
                    data: {
                        'searchValue': value,
                        'orderid': value3
                    },
                    success: function (response) {
                        // Check if response is not empty
                        if (response) {
                            // Clear previous search results
                            \$('#t tbody#search').empty();
                            var users = JSON.parse(response);
                            \$.each(users, function (i, user) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(
                                    '<tr class=\"btn-reveal-trigger\">' +
                                    '<td class=\"p-3\"><img src=\"{{ asset('uploads/images/') }}' + user.image + '\" alt=\"\" style=\"width: 50px; height: 50px; border-radius: 50%;\"></td>' +
                                    '<td class=\"p-3\">' + user.nom + ' ' + user.prenom + '</td>' +
                                    '<td class=\"py-2\">' + user.email + '</td>' +
                                    '<td class=\"py-2\">' + user.address + '</td>' +
                                    '<td class=\"py-2\">' + user.roles[0] + '</td>' +
                                    '<td class=\"py-2\">' +
                                    '<div class=\"'+(user.status === 'active' ? 'text-success':'text-danger')+'\">' + user.status + '</div>' +
                                    '</td>' +
                                    '<td>' +
                                    '<a href=\"/user/profile/' + user.id + '\" class=\"btn btn-sm btn-primary\"><i class=\"la la-eye\"></i></a>' +
                                    (user.roles[0] !== 'ADMIN' ?
                                        (user.status === 'active' ?
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-warning\"><i class=\"la la-user-times\"></i></button></form>' :
                                            '<form method=\"post\" action=\"/user/admin/' + user.id + '/edit\"><button type=\"submit\" class=\"btn btn-sm btn-success\" title=\"Mettre en actif\"><i class=\"la la-user-plus\"></i></button></form>') +
                                        '<a href=\"/user/' + user.id + '/user\" type=\"submit\" class=\"btn btn-sm btn-danger\"><i class=\"la la-trash\"></i></a>' :
                                        '') +
                                    '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            // Handle empty response
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    }
                });
                return false;

            });
        });
    </script>
{% endblock %}

", "back/user/index.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\back\\user\\index.html.twig");
    }
}
