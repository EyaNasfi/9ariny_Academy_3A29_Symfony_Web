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

/* base-back.html.twig */
class __TwigTemplate_c891e94307d426f553c59c7cec15d7e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">


    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        yield "\" />

    <style>
        /* Googlefont Poppins CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar{
            position: fixed;
            height: 100%;
            width: 240px;
            background: #0A2558;
            transition: all 0.5s ease;
        }
        .sidebar.active{
            width: 60px;
        }
        .sidebar .logo-details{
            height: 80px;
            display: flex;
            align-items: center;
        }
        .sidebar .logo-details i{
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            min-width: 60px;
            text-align: center
        }
        .sidebar .logo-details .logo_name{
            color: #fff;
            font-size: 24px;
            font-weight: 500;
        }
        .sidebar .nav-links{
            margin-top: 10px;
        }
        .sidebar .nav-links li{
            position: relative;
            list-style: none;
            height: 50px;
        }
        .sidebar .nav-links li a{
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li a.active{
            background: #081D45;
        }
        .sidebar .nav-links li a:hover{
            background: #081D45;
        }
        .sidebar .nav-links li i{
            min-width: 60px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }
        .sidebar .nav-links li a .links_name{
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
        }
        .sidebar .nav-links .log_out{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .home-section{
            position: relative;
            background: #f5f5f5;
            min-height: 100vh;
            width: calc(100% - 240px);
            left: 240px;
            transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section{
            width: calc(100% - 60px);
            left: 60px;
        }
        .home-section nav{
            display: flex;
            justify-content: space-between;
            height: 80px;
            background: #fff;
            display: flex;
            align-items: center;
            position: fixed;
            width: calc(100% - 240px);
            left: 240px;
            z-index: 100;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section nav{
            left: 60px;
            width: calc(100% - 60px);
        }
        .home-section nav .sidebar-button{
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 500;
        }
        nav .sidebar-button i{
            font-size: 35px;
            margin-right: 10px;
        }
        .home-section nav .search-box{
            position: relative;
            height: 50px;
            max-width: 550px;
            width: 100%;
            margin: 0 20px;
        }
        nav .search-box input{
            height: 100%;
            width: 100%;
            outline: none;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            font-size: 18px;
            padding: 0 15px;
        }
        nav .search-box .bx-search{
            position: absolute;
            height: 40px;
            width: 40px;
            background: #2697FF;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 4px;
            line-height: 40px;
            text-align: center;
            color: #fff;
            font-size: 22px;
            transition: all 0.4 ease;
        }
        .home-section nav .profile-details{
            display: flex;
            align-items: center;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            height: 50px;
            min-width: 190px;
            padding: 0 15px 0 2px;
        }
        nav .profile-details img{
            height: 40px;
            width: 40px;
            border-radius: 6px;
            object-fit: cover;
        }
        nav .profile-details .admin_name{
            font-size: 15px;
            font-weight: 500;
            color: #333;
            margin: 0 10px;
            white-space: nowrap;
        }
        nav .profile-details i{
            font-size: 25px;
            color: #333;
        }
        .home-section .home-content{
            position: relative;
            padding-top: 104px;
        }
        .home-content .overview-boxes{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px;
            margin-bottom: 26px;
        }
        .overview-boxes .box{
            display: flex;
            align-items: center;
            justify-content: center;
            width: calc(100% / 4 - 15px);
            background: #fff;
            padding: 15px 14px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        .overview-boxes .box-topic{
            font-size: 20px;
            font-weight: 500;
        }
        .home-content .box .number{
            display: inline-block;
            font-size: 35px;
            margin-top: -6px;
            font-weight: 500;
        }
        .home-content .box .indicator{
            display: flex;
            align-items: center;
        }
        .home-content .box .indicator i{
            height: 20px;
            width: 20px;
            background: #8FDACB;
            line-height: 20px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            margin-right: 5px;
        }
        .box .indicator i.down{
            background: #e87d88;
        }
        .home-content .box .indicator .text{
            font-size: 12px;
        }
        .home-content .box .cart{
            display: inline-block;
            font-size: 32px;
            height: 50px;
            width: 50px;
            background: #cce5ff;
            line-height: 50px;
            text-align: center;
            color: #66b0ff;
            border-radius: 12px;
            margin: -15px 0 0 6px;
        }
        .home-content .box .cart.two{
            color: #2BD47D;
            background: #C0F2D8;
        }
        .home-content .box .cart.three{
            color: #ffc233;
            background: #ffe8b3;
        }
        .home-content .box .cart.four{
            color: #e05260;
            background: #f7d4d7;
        }
        .home-content .total-order{
            font-size: 20px;
            font-weight: 500;
        }
        .home-content .sales-boxes{
            display: flex;
            justify-content: space-between;
            /* padding: 0 20px; */
        }

        /* left box */
        .home-content .sales-boxes .recent-sales{
            width: 65%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .home-content .sales-boxes .sales-details{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sales-boxes .box .title{
            font-size: 24px;
            font-weight: 500;
            /* margin-bottom: 10px; */
        }
        .sales-boxes .sales-details li.topic{
            font-size: 20px;
            font-weight: 500;
        }
        .sales-boxes .sales-details li{
            list-style: none;
            margin: 8px 0;
        }
        .sales-boxes .sales-details li a{
            font-size: 18px;
            color: #333;
            font-size: 400;
            text-decoration: none;
        }
        .sales-boxes .box .button{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
        .sales-boxes .box .button a{
            color: #fff;
            background: #0A2558;
            padding: 4px 12px;
            font-size: 15px;
            font-weight: 400;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .sales-boxes .box .button a:hover{
            background:  #0d3073;
        }

        /* Right box */
        .home-content .sales-boxes .top-sales{
            width: 35%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px 0 0;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .sales-boxes .top-sales li{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
        }
        .sales-boxes .top-sales li a img{
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 12px;
            margin-right: 10px;
            background: #333;
        }
        .sales-boxes .top-sales li a{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .sales-boxes .top-sales li .product,
        .price{
            font-size: 17px;
            font-weight: 400;
            color: #333;
        }
        /* Responsive Media Query */
        @media (max-width: 1240px) {
            .sidebar{
                width: 60px;
            }
            .sidebar.active{
                width: 220px;
            }
            .home-section{
                width: calc(100% - 60px);
                left: 60px;
            }
            .sidebar.active ~ .home-section{
                left: 220px;
                width: calc(100% - 220px);
                overflow: hidden;
            }
            .home-section nav{
                width: calc(100% - 60px);
                left: 60px;
            }
            .sidebar.active ~ .home-section nav{
                width: calc(100% - 220px);
                left: 220px;
            }
        }
        @media (max-width: 1150px) {
            .home-content .sales-boxes{
                flex-direction: column;
            }
            .home-content .sales-boxes .box{
                width: 100%;
                overflow-x: scroll;
                margin-bottom: 30px;
            }
            .home-content .sales-boxes .top-sales{
                margin: 0;
            }
        }
        @media (max-width: 1000px) {
            .overview-boxes .box{
                width: calc(100% / 2 - 15px);
                margin-bottom: 15px;
            }
        }
        @media (max-width: 700px) {
            nav .sidebar-button .dashboard,
            nav .profile-details .admin_name,
            nav .profile-details i{
                display: none;
            }
            .home-section nav .profile-details{
                height: 50px;
                min-width: 40px;
            }
            .home-content .sales-boxes .sales-details{
                width: 560px;
            }
        }
        @media (max-width: 550px) {
            .overview-boxes .box{
                width: 100%;
                margin-bottom: 15px;
            }
            .sidebar.active ~ .home-section nav .profile-details{
                display: none;
            }
        }
        @media (max-width: 400px) {
            .sidebar{
                width: 0;
            }
            .sidebar.active{
                width: 60px;
            }
            .home-section{
                width: 100%;
                left: 0;
            }
            .sidebar.active ~ .home-section{
                left: 60px;
                width: calc(100% - 60px);
            }
            .home-section nav{
                width: 100%;
                left: 0;
            }
            .sidebar.active ~ .home-section nav{
                left: 60px;
                width: calc(100% - 60px);
            }
        }

    </style>
    <!-- Boxicons CDN Link -->
    <link href=\"https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css\" rel=\"stylesheet\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

</head>
<body>
<div class=\"sidebar\">
    <div class=\"logo-details\">
        <img src=\"";
        // line 466
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/logo/log.png"), "html", null, true);
        yield "\">9ariny-Academy</img>
    </div>
    <ul class=\"nav-links\">

        <li>
            <a href=\"";
        // line 471
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index_admin");
        yield "\">
                <i class=\"fa-solid fa-user\"></i>
                <span class=\"links_name\">Account</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 477
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_myprofile_admin");
        yield "\">
                <i class=\"fa-solid fa-user\"></i>
                <span class=\"links_name\">Profile</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 483
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                <i class=\"bx bx-log-out\"></i>
                <span class=\"links_name\">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class=\"home-section\">
    <nav>
        <div class=\"sidebar-button\">
            <i class=\"bx bx-menu sidebarBtn\"></i>
            <span class=\"dashboard\">Dashboard</span>
        </div>
        <div class=\"search-box\">
            <input type=\"text\" placeholder=\"Search...\" />
            <i class=\"bx bx-search\"></i>
        </div>
        <div class=\"profile-details\">
            <img src=\"";
        // line 501
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "user", [], "any", false, false, false, 501), "image", [], "any", false, false, false, 501))), "html", null, true);
        yield "\" alt=\"\" />
            <span class=\"admin_name\">";
        // line 502
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502), "nom", [], "any", false, false, false, 502), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502), "prenom", [], "any", false, false, false, 502), "html", null, true);
        yield "</span>
            <i class=\"bx bx-chevron-down\"></i>
            <div class=\"dropdown-menu\">
            </div>
        </div>
    </nav>

    <div class=\"home-content\">
        ";
        // line 510
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 512
        yield "    </div>
</section>

<script>
    let sidebar = document.querySelector(\".sidebar\");
    let sidebarBtn = document.querySelector(\".sidebarBtn\");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle(\"active\");
        if (sidebar.classList.contains(\"active\")) {
            sidebarBtn.classList.replace(\"bx-menu\", \"bx-menu-alt-right\");
        } else sidebarBtn.classList.replace(\"bx-menu-alt-right\", \"bx-menu\");
    };
</script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 510
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 511
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base-back.html.twig";
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
        return array (  641 => 511,  631 => 510,  611 => 6,  585 => 512,  583 => 510,  570 => 502,  566 => 501,  545 => 483,  536 => 477,  527 => 471,  519 => 466,  61 => 11,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}  {% endblock %}</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">


    <link rel=\"stylesheet\" href=\"{{ asset('back/css/style.css') }}\" />

    <style>
        /* Googlefont Poppins CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar{
            position: fixed;
            height: 100%;
            width: 240px;
            background: #0A2558;
            transition: all 0.5s ease;
        }
        .sidebar.active{
            width: 60px;
        }
        .sidebar .logo-details{
            height: 80px;
            display: flex;
            align-items: center;
        }
        .sidebar .logo-details i{
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            min-width: 60px;
            text-align: center
        }
        .sidebar .logo-details .logo_name{
            color: #fff;
            font-size: 24px;
            font-weight: 500;
        }
        .sidebar .nav-links{
            margin-top: 10px;
        }
        .sidebar .nav-links li{
            position: relative;
            list-style: none;
            height: 50px;
        }
        .sidebar .nav-links li a{
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
        }
        .sidebar .nav-links li a.active{
            background: #081D45;
        }
        .sidebar .nav-links li a:hover{
            background: #081D45;
        }
        .sidebar .nav-links li i{
            min-width: 60px;
            text-align: center;
            font-size: 18px;
            color: #fff;
        }
        .sidebar .nav-links li a .links_name{
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
        }
        .sidebar .nav-links .log_out{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .home-section{
            position: relative;
            background: #f5f5f5;
            min-height: 100vh;
            width: calc(100% - 240px);
            left: 240px;
            transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section{
            width: calc(100% - 60px);
            left: 60px;
        }
        .home-section nav{
            display: flex;
            justify-content: space-between;
            height: 80px;
            background: #fff;
            display: flex;
            align-items: center;
            position: fixed;
            width: calc(100% - 240px);
            left: 240px;
            z-index: 100;
            padding: 0 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section nav{
            left: 60px;
            width: calc(100% - 60px);
        }
        .home-section nav .sidebar-button{
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 500;
        }
        nav .sidebar-button i{
            font-size: 35px;
            margin-right: 10px;
        }
        .home-section nav .search-box{
            position: relative;
            height: 50px;
            max-width: 550px;
            width: 100%;
            margin: 0 20px;
        }
        nav .search-box input{
            height: 100%;
            width: 100%;
            outline: none;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            font-size: 18px;
            padding: 0 15px;
        }
        nav .search-box .bx-search{
            position: absolute;
            height: 40px;
            width: 40px;
            background: #2697FF;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 4px;
            line-height: 40px;
            text-align: center;
            color: #fff;
            font-size: 22px;
            transition: all 0.4 ease;
        }
        .home-section nav .profile-details{
            display: flex;
            align-items: center;
            background: #F5F6FA;
            border: 2px solid #EFEEF1;
            border-radius: 6px;
            height: 50px;
            min-width: 190px;
            padding: 0 15px 0 2px;
        }
        nav .profile-details img{
            height: 40px;
            width: 40px;
            border-radius: 6px;
            object-fit: cover;
        }
        nav .profile-details .admin_name{
            font-size: 15px;
            font-weight: 500;
            color: #333;
            margin: 0 10px;
            white-space: nowrap;
        }
        nav .profile-details i{
            font-size: 25px;
            color: #333;
        }
        .home-section .home-content{
            position: relative;
            padding-top: 104px;
        }
        .home-content .overview-boxes{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 20px;
            margin-bottom: 26px;
        }
        .overview-boxes .box{
            display: flex;
            align-items: center;
            justify-content: center;
            width: calc(100% / 4 - 15px);
            background: #fff;
            padding: 15px 14px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        .overview-boxes .box-topic{
            font-size: 20px;
            font-weight: 500;
        }
        .home-content .box .number{
            display: inline-block;
            font-size: 35px;
            margin-top: -6px;
            font-weight: 500;
        }
        .home-content .box .indicator{
            display: flex;
            align-items: center;
        }
        .home-content .box .indicator i{
            height: 20px;
            width: 20px;
            background: #8FDACB;
            line-height: 20px;
            text-align: center;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            margin-right: 5px;
        }
        .box .indicator i.down{
            background: #e87d88;
        }
        .home-content .box .indicator .text{
            font-size: 12px;
        }
        .home-content .box .cart{
            display: inline-block;
            font-size: 32px;
            height: 50px;
            width: 50px;
            background: #cce5ff;
            line-height: 50px;
            text-align: center;
            color: #66b0ff;
            border-radius: 12px;
            margin: -15px 0 0 6px;
        }
        .home-content .box .cart.two{
            color: #2BD47D;
            background: #C0F2D8;
        }
        .home-content .box .cart.three{
            color: #ffc233;
            background: #ffe8b3;
        }
        .home-content .box .cart.four{
            color: #e05260;
            background: #f7d4d7;
        }
        .home-content .total-order{
            font-size: 20px;
            font-weight: 500;
        }
        .home-content .sales-boxes{
            display: flex;
            justify-content: space-between;
            /* padding: 0 20px; */
        }

        /* left box */
        .home-content .sales-boxes .recent-sales{
            width: 65%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .home-content .sales-boxes .sales-details{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sales-boxes .box .title{
            font-size: 24px;
            font-weight: 500;
            /* margin-bottom: 10px; */
        }
        .sales-boxes .sales-details li.topic{
            font-size: 20px;
            font-weight: 500;
        }
        .sales-boxes .sales-details li{
            list-style: none;
            margin: 8px 0;
        }
        .sales-boxes .sales-details li a{
            font-size: 18px;
            color: #333;
            font-size: 400;
            text-decoration: none;
        }
        .sales-boxes .box .button{
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
        .sales-boxes .box .button a{
            color: #fff;
            background: #0A2558;
            padding: 4px 12px;
            font-size: 15px;
            font-weight: 400;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .sales-boxes .box .button a:hover{
            background:  #0d3073;
        }

        /* Right box */
        .home-content .sales-boxes .top-sales{
            width: 35%;
            background: #fff;
            padding: 20px 30px;
            margin: 0 20px 0 0;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        .sales-boxes .top-sales li{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
        }
        .sales-boxes .top-sales li a img{
            height: 40px;
            width: 40px;
            object-fit: cover;
            border-radius: 12px;
            margin-right: 10px;
            background: #333;
        }
        .sales-boxes .top-sales li a{
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .sales-boxes .top-sales li .product,
        .price{
            font-size: 17px;
            font-weight: 400;
            color: #333;
        }
        /* Responsive Media Query */
        @media (max-width: 1240px) {
            .sidebar{
                width: 60px;
            }
            .sidebar.active{
                width: 220px;
            }
            .home-section{
                width: calc(100% - 60px);
                left: 60px;
            }
            .sidebar.active ~ .home-section{
                left: 220px;
                width: calc(100% - 220px);
                overflow: hidden;
            }
            .home-section nav{
                width: calc(100% - 60px);
                left: 60px;
            }
            .sidebar.active ~ .home-section nav{
                width: calc(100% - 220px);
                left: 220px;
            }
        }
        @media (max-width: 1150px) {
            .home-content .sales-boxes{
                flex-direction: column;
            }
            .home-content .sales-boxes .box{
                width: 100%;
                overflow-x: scroll;
                margin-bottom: 30px;
            }
            .home-content .sales-boxes .top-sales{
                margin: 0;
            }
        }
        @media (max-width: 1000px) {
            .overview-boxes .box{
                width: calc(100% / 2 - 15px);
                margin-bottom: 15px;
            }
        }
        @media (max-width: 700px) {
            nav .sidebar-button .dashboard,
            nav .profile-details .admin_name,
            nav .profile-details i{
                display: none;
            }
            .home-section nav .profile-details{
                height: 50px;
                min-width: 40px;
            }
            .home-content .sales-boxes .sales-details{
                width: 560px;
            }
        }
        @media (max-width: 550px) {
            .overview-boxes .box{
                width: 100%;
                margin-bottom: 15px;
            }
            .sidebar.active ~ .home-section nav .profile-details{
                display: none;
            }
        }
        @media (max-width: 400px) {
            .sidebar{
                width: 0;
            }
            .sidebar.active{
                width: 60px;
            }
            .home-section{
                width: 100%;
                left: 0;
            }
            .sidebar.active ~ .home-section{
                left: 60px;
                width: calc(100% - 60px);
            }
            .home-section nav{
                width: 100%;
                left: 0;
            }
            .sidebar.active ~ .home-section nav{
                left: 60px;
                width: calc(100% - 60px);
            }
        }

    </style>
    <!-- Boxicons CDN Link -->
    <link href=\"https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css\" rel=\"stylesheet\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>

</head>
<body>
<div class=\"sidebar\">
    <div class=\"logo-details\">
        <img src=\"{{ asset('front/logo/log.png') }}\">9ariny-Academy</img>
    </div>
    <ul class=\"nav-links\">

        <li>
            <a href=\"{{ path('app_users_index_admin') }}\">
                <i class=\"fa-solid fa-user\"></i>
                <span class=\"links_name\">Account</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_myprofile_admin') }}\">
                <i class=\"fa-solid fa-user\"></i>
                <span class=\"links_name\">Profile</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_logout') }}\">
                <i class=\"bx bx-log-out\"></i>
                <span class=\"links_name\">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class=\"home-section\">
    <nav>
        <div class=\"sidebar-button\">
            <i class=\"bx bx-menu sidebarBtn\"></i>
            <span class=\"dashboard\">Dashboard</span>
        </div>
        <div class=\"search-box\">
            <input type=\"text\" placeholder=\"Search...\" />
            <i class=\"bx bx-search\"></i>
        </div>
        <div class=\"profile-details\">
            <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"\" />
            <span class=\"admin_name\">{{ app.user.nom }} {{ app.user.prenom }}</span>
            <i class=\"bx bx-chevron-down\"></i>
            <div class=\"dropdown-menu\">
            </div>
        </div>
    </nav>

    <div class=\"home-content\">
        {% block body %}
        {% endblock %}
    </div>
</section>

<script>
    let sidebar = document.querySelector(\".sidebar\");
    let sidebarBtn = document.querySelector(\".sidebarBtn\");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle(\"active\");
        if (sidebar.classList.contains(\"active\")) {
            sidebarBtn.classList.replace(\"bx-menu\", \"bx-menu-alt-right\");
        } else sidebarBtn.classList.replace(\"bx-menu-alt-right\", \"bx-menu\");
    };
</script>
</body>
</html>
", "base-back.html.twig", "C:\\Users\\khouloud\\Desktop\\PiUser\\templates\\base-back.html.twig");
    }
}
