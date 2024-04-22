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

/* Front/TabFormation.html.twig */
class __TwigTemplate_01ad81659f625a5d1735d6d284369cca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/TabFormation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/TabFormation.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>AdminLTE 2 | Data Tables</title>
\t\t<meta
\t\tcontent='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
\t\t<!-- Bootstrap 3.3.2 -->
\t\t<link
\t\thref=\"../../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Ionicons -->
\t\t<link
\t\thref=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- DATA TABLES -->
\t\t<link
\t\thref=\"../../plugins/datatables/dataTables.bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Theme style -->
\t\t<link
\t\thref=\"../../dist/css/AdminLTE.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- AdminLTE Skins. Choose a skin from the css/skins 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t         folder instead of downloading all of them to reduce the load. -->
\t\t<link href=\"../../dist/css/skins/_all-skins.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <![endif]-->
\t</head>
\t<body class=\"skin-blue\">
\t\t<div class=\"wrapper\">

\t\t\t<header class=\"main-header\">
\t\t\t\t<a href=\"../../index2.html\" class=\"logo\">
\t\t\t\t\t<b>Admin</b>LTE</a>
\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-static-top\" role=\"navigation\">
\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav navbar-nav\">
\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">4</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 4 messages</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupport Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdminLTE Design Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDevelopers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSales Department
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tReviewers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">See All Messages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">10</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 10 notifications</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-aqua\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t5 new members joined today
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-warning text-yellow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tVery long description here that may not fit into the page and may cause design problems
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t5 new members joined
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart text-green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t25 sales made
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tYou changed your username
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Tasks: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown tasks-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">9</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 9 tasks</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDesign some buttons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">20%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate a nice theme
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">40% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSome task I need to do
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">60% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMake beautiful transitions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">80%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">80% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all tasks</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce - Web Developer
\t\t\t\t\t\t\t\t\t\t\t<small>Member since Nov. 2012</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Body -->
\t\t\t\t\t\t\t\t\t<li class=\"user-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Followers</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Sales</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Friends</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- Left side column. contains the logo and sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar\">
\t\t\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t\t\t<section
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel -->
\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t<div class=\"pull-left image\">
\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-left info\">
\t\t\t\t\t\t\t<p>Alexander Pierce</p>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle text-success\"></i>
\t\t\t\t\t\t\t\tOnline</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search form -->
\t\t\t\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<!-- /.search form -->
\t\t\t\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t<li class=\"header\">MAIN NAVIGATION</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../../index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tDashboard v1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../../index2.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tDashboard v2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\"></i>
\t\t\t\t\t\t\t\t<span>Layout Options</span>
\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/top-nav.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tTop Navigation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/boxed.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tBoxed</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/fixed.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tFixed</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/collapsed-sidebar.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tCollapsed Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../widgets.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t<span>Widgets</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-green\">new</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>
\t\t\t\t\t\t\t\t<span>Charts</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/morris.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tMorris</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/flot.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tFlot</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/inline.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tInline charts</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/general.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tGeneral</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/icons.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tIcons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/buttons.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tButtons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/sliders.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tSliders</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/timeline.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tTimeline</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/modals.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tModals</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t <a href=\"";
        // line 466
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Categorie");
        echo "\"
\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t<span>Categorie</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/general.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tGeneral Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/advanced.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tAdvanced Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/editors.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tEditors</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview active\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"simple.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tSimple tables</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"data.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tData tables</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../calendar.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Calendar</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-red\">3</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../mailbox/mailbox.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-yellow\">12</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\"></i>
\t\t\t\t\t\t\t\t<span>Examples</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/invoice.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tInvoice</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/login.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLogin</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/register.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tRegister</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/lockscreen.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLockscreen</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/404.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t404 Error</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/500.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t500 Error</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/blank.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tBlank Page</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i>
\t\t\t\t\t\t\t\t<span>Multilevel</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLevel Two</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLevel Two
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../../documentation/index.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\tDocumentation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header\">LABELS</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\tImportant</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-warning\"></i>
\t\t\t\t\t\t\t\tWarning</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-info\"></i>
\t\t\t\t\t\t\t\tInformation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Right side column. Contains the navbar and content of the page -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tData Tables
\t\t\t\t\t\t<small>advanced tables</small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\tHome</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Tables</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Data tables</li>
\t\t\t\t\t</ol>
\t\t\t\t</section>

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Hover Data Table</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\"></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"example2\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom de Formation</th>
                                                                    <th>Description</th>
                                                                     <th>Durée</th>
                                                                     <th>Niveau</th>
                                                                      <th>Date_Deb</th>
                                                                       <th>Date_Fin</th>
                                                                       <th>cout</th>
                                                                        <th>nomCategorie</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Supprimer </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Modifier </th>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 704
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Formation"]) || array_key_exists("Formation", $context) ? $context["Formation"] : (function () { throw new RuntimeError('Variable "Formation" does not exist.', 704, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 705
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 707
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "getIidDeFormation", [], "method", false, false, false, 707), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 710
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "nomDeFormation", [], "any", false, false, false, 710), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                        <td>";
            // line 712
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "description", [], "any", false, false, false, 712), "html", null, true);
            echo "</td>
                                                                        <td>";
            // line 713
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "duree", [], "any", false, false, false, 713), "html", null, true);
            echo "</td>
                                                                        <td>";
            // line 714
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "niveau", [], "any", false, false, false, 714), "html", null, true);
            echo "</td>
                                                                       <td>";
            // line 715
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "dateDeb", [], "any", false, false, false, 715), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 717
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "dateFin", [], "any", false, false, false, 717), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 719
            echo "                                                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "cout", [], "any", false, false, false, 719), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>";
            // line 720
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "getCategorie", [], "method", false, false, false, 720), "html", null, true);
            echo "</td>
                                                                       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-red\" onclick=\"window.location.href = '";
            // line 723
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletef", ["idDeFormation" => twig_get_attribute($this->env, $this->source, $context["f"], "getIidDeFormation", [], "method", false, false, false, 723)]), "html", null, true);
            echo "'\">supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" onclick=\"window.location.href = '";
            // line 726
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editf", ["idDeFormation" => twig_get_attribute($this->env, $this->source, $context["f"], "getIidDeFormation", [], "method", false, false, false, 726)]), "html", null, true);
            echo "'\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 732
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<!-- /.content -->
\t\t\t\t\t\t\t\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Front/TabFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 732,  808 => 726,  802 => 723,  796 => 720,  791 => 719,  786 => 717,  782 => 715,  778 => 714,  774 => 713,  770 => 712,  765 => 710,  759 => 707,  755 => 705,  751 => 704,  510 => 466,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>AdminLTE 2 | Data Tables</title>
\t\t<meta
\t\tcontent='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
\t\t<!-- Bootstrap 3.3.2 -->
\t\t<link
\t\thref=\"../../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Font Awesome Icons -->
\t\t<link
\t\thref=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Ionicons -->
\t\t<link
\t\thref=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- DATA TABLES -->
\t\t<link
\t\thref=\"../../plugins/datatables/dataTables.bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- Theme style -->
\t\t<link
\t\thref=\"../../dist/css/AdminLTE.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<!-- AdminLTE Skins. Choose a skin from the css/skins 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t         folder instead of downloading all of them to reduce the load. -->
\t\t<link href=\"../../dist/css/skins/_all-skins.min.css\" rel=\"stylesheet\" type=\"text/css\"/>

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <![endif]-->
\t</head>
\t<body class=\"skin-blue\">
\t\t<div class=\"wrapper\">

\t\t\t<header class=\"main-header\">
\t\t\t\t<a href=\"../../index2.html\" class=\"logo\">
\t\t\t\t\t<b>Admin</b>LTE</a>
\t\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-static-top\" role=\"navigation\">
\t\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"nav navbar-nav\">
\t\t\t\t\t\t\t<!-- Messages: style can be found in dropdown.less-->
\t\t\t\t\t\t\t<li class=\"dropdown messages-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">4</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 4 messages</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- start message -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupport Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 mins</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end message -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdminLTE Design Team
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hours</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDevelopers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tToday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSales Department
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYesterday</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tReviewers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Why not buy a new awesome theme?</p>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">See All Messages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Notifications: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown notifications-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">10</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 10 notifications</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-aqua\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t5 new members joined today
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-warning text-yellow\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tVery long description here that may not fit into the page and may cause design problems
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-users text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t5 new members joined
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart text-green\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t25 sales made
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user text-red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tYou changed your username
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- Tasks: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown tasks-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">9</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"header\">You have 9 tasks</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- inner menu: contains the actual data -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDesign some buttons
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">20%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate a nice theme
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">40%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">40% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSome task I need to do
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">60%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">60% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Task item -->
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMake beautiful transitions
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right\">80%</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">80% Complete</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- end task item -->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">View all tasks</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- User Account: style can be found in dropdown.less -->
\t\t\t\t\t\t\t<li class=\"dropdown user user-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Alexander Pierce</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\tclass=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<!-- User image -->
\t\t\t\t\t\t\t\t\t<li class=\"user-header\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tAlexander Pierce - Web Developer
\t\t\t\t\t\t\t\t\t\t\t<small>Member since Nov. 2012</small>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Body -->
\t\t\t\t\t\t\t\t\t<li class=\"user-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Followers</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Sales</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Friends</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- Menu Footer-->
\t\t\t\t\t\t\t\t\t<li class=\"user-footer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
\t\t\t<!-- Left side column. contains the logo and sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar\">
\t\t\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t\t\t<section
\t\t\t\t\tclass=\"sidebar\">
\t\t\t\t\t<!-- Sidebar user panel -->
\t\t\t\t\t<div class=\"user-panel\">
\t\t\t\t\t\t<div class=\"pull-left image\">
\t\t\t\t\t\t\t<img src=\"../../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-left info\">
\t\t\t\t\t\t\t<p>Alexander Pierce</p>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle text-success\"></i>
\t\t\t\t\t\t\t\tOnline</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- search form -->
\t\t\t\t\t<form action=\"#\" method=\"get\" class=\"sidebar-form\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<!-- /.search form -->
\t\t\t\t\t<!-- sidebar menu: : style can be found in sidebar.less -->
\t\t\t\t\t<ul class=\"sidebar-menu\">
\t\t\t\t\t\t<li class=\"header\">MAIN NAVIGATION</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../../index.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tDashboard v1</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../../index2.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tDashboard v2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-files-o\"></i>
\t\t\t\t\t\t\t\t<span>Layout Options</span>
\t\t\t\t\t\t\t\t<span class=\"label label-primary pull-right\">4</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/top-nav.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tTop Navigation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/boxed.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tBoxed</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/fixed.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tFixed</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../layout/collapsed-sidebar.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tCollapsed Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../widgets.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t<span>Widgets</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-green\">new</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>
\t\t\t\t\t\t\t\t<span>Charts</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/morris.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tMorris</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/flot.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tFlot</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../charts/inline.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tInline charts</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop\"></i>
\t\t\t\t\t\t\t\t<span>UI Elements</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/general.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tGeneral</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/icons.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tIcons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/buttons.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tButtons</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/sliders.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tSliders</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/timeline.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tTimeline</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../UI/modals.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tModals</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t <a href=\"{{ path('list_Categorie') }}\"
\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t<span>Categorie</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/general.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tGeneral Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/advanced.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tAdvanced Elements</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../forms/editors.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tEditors</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview active\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t<span>Tables</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"simple.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tSimple tables</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"data.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tData tables</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../calendar.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Calendar</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-red\">3</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../mailbox/mailbox.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span>Mailbox</span>
\t\t\t\t\t\t\t\t<small class=\"label pull-right bg-yellow\">12</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-folder\"></i>
\t\t\t\t\t\t\t\t<span>Examples</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/invoice.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tInvoice</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/login.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLogin</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/register.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tRegister</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/lockscreen.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLockscreen</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/404.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t404 Error</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/500.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t500 Error</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"../examples/blank.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tBlank Page</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"treeview\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-share\"></i>
\t\t\t\t\t\t\t\t<span>Multilevel</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLevel Two</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tLevel Two
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-left pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"treeview-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tLevel Three</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o\"></i>
\t\t\t\t\t\t\t\t\t\tLevel One</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"../../documentation/index.html\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\tDocumentation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"header\">LABELS</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-danger\"></i>
\t\t\t\t\t\t\t\tImportant</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-warning\"></i>
\t\t\t\t\t\t\t\tWarning</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-circle-o text-info\"></i>
\t\t\t\t\t\t\t\tInformation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Right side column. Contains the navbar and content of the page -->
\t\t\t<div
\t\t\t\tclass=\"content-wrapper\">
\t\t\t\t<!-- Content Header (Page header) -->
\t\t\t\t<section class=\"content-header\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tData Tables
\t\t\t\t\t\t<small>advanced tables</small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-dashboard\"></i>
\t\t\t\t\t\t\t\tHome</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Tables</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Data tables</li>
\t\t\t\t\t</ol>
\t\t\t\t</section>

\t\t\t\t<!-- Main content -->
\t\t\t\t<section class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\">Hover Data Table</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t<section class=\"content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"box-title\"></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box-header -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"example2\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom de Formation</th>
                                                                    <th>Description</th>
                                                                     <th>Durée</th>
                                                                     <th>Niveau</th>
                                                                      <th>Date_Deb</th>
                                                                       <th>Date_Fin</th>
                                                                       <th>cout</th>
                                                                        <th>nomCategorie</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Supprimer </th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Modifier </th>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for f in Formation %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{f.getIidDeFormation()}}</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{f.nomDeFormation}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                        <td>{{f.description}}</td>
                                                                        <td>{{f.duree}}</td>
                                                                        <td>{{f.niveau}}</td>
                                                                       <td>{{ f.dateDeb|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# Format date as 'Y-m-d' #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ f.dateFin|date('Y-m-d') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# Format date as 'Y-m-d' #}
                                                                        <td>{{f.cout}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <td>{{f.getCategorie()}}</td>
                                                                       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn bg-red\" onclick=\"window.location.href = '{{ path('deletef', { idDeFormation: f.getIidDeFormation() }) }}'\">supprimer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" onclick=\"window.location.href = '{{ path('editf', { idDeFormation: f.getIidDeFormation() }) }}'\">Edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box-body -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /.box -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /.col -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- /.row -->
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<!-- /.content -->
\t\t\t\t\t\t\t\t</html>
", "Front/TabFormation.html.twig", "C:\\Users\\HP\\Desktop\\testt Med aziz abidi\\templates\\Front\\TabFormation.html.twig");
    }
}
