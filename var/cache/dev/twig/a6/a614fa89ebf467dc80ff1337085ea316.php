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

/* Front/EditFormation.html.twig */
class __TwigTemplate_479cd405fad922bef15672da863c1fd0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/EditFormation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/EditFormation.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Responsiive Admin Dashboard | 9ariny-Academy</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <meta charset=\"UTF-8\">
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

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
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
  </head>
  <body>
    <div class=\"sidebar\">
      <div class=\"logo-details\">
        <img src=\"/looo.png\">9ariny-Academy</img>
      </div>
         <ul class=\"nav-links\">
      
        <li>
         <a href=\"\"  class=\"active\">
 <i class=\"fa-solid fa-school-circle-exclamation\"></i>            
 <span class=\"links_name\">Reclamations</span>
          </a>
        </li>
        <li>
       <a href=\"\" >
           <i class=\"fa-solid fa-file-circle-question\"></i>
            <span class=\"links_name\">Quiz</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
           <i class=\"fa-solid fa-calendar-check\"></i>        
            <span class=\"links_name\">Evenements</span>
          </a>
        </li>
        <li>
           <a href=\"";
        // line 508
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Categorie");
        echo "\">
           <i class=\"fa-solid fa-puzzle-piece\"></i>        
            <span class=\"links_name\">Categorie</span>
          </a>
        </li>
        <li>
          <a href=\"#\"
                                                                        
          >
            <i class=\"fa-solid fa-book-open-reader\"></i>
            <span class=\"links_name\">Cours</span>
          </a>
        </li>
         <li>
          <a href=\"";
        // line 522
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_Formation");
        echo "\">
<i class=\"fa-solid fa-list\"></i>
            <span class=\"links_name\">Formations</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
<i class=\"fa-solid fa-landmark\"></i>
            <span class=\"links_name\" >Salles</span>
          </a>
         
        </li>
        <li>
          <a href=\"#\">
<i class=\"fa-solid fa-wrench\"></i>
            <span class=\"links_name\" >Equipements</span>
          </a>
         
        </li>
         <li>
          <a href=\"#\">
<i class=\"fas fa-shopping-cart\"></i>
            <span class=\"links_name\">Paiements</span>
          </a>
        </li>
         <li>
          <a href=\"#\">
<i class=\"fa-solid fa-user\"></i>
            <span class=\"links_name\">Account</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
            <i class=\"bx bx-map\"></i>
            <span class=\"links_name\">Map</span>
          </a>
        </li>
       <li>
          <a href=\"#\">
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
          <img src=\"/profile.png\" alt=\"\" />
          <span class=\"admin_name\">Abidi Aziz</span>
          <i class=\"bx bx-chevron-down\"></i>
        </div>
      </nav>

      <div class=\"home-content\">
      
\t<!-- Main content -->
\t\t\t
 


 ";
        // line 591
        $this->displayBlock('body', $context, $blocks);
        // line 642
        echo "






  
\t\t\t
  </body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 591
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 592
        echo "    <div class=\"d-flex justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center\">Ajouter une formation</h1>

            ";
        // line 596
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"form-group\">
                ";
        // line 598
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 598, $this->source); })()), "nomDeFormation", [], "any", false, false, false, 598), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Nom de la Formation"]);
        echo "
                ";
        // line 599
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 599, $this->source); })()), "nomDeFormation", [], "any", false, false, false, 599), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de Formation"]]);
        echo "
                ";
        // line 600
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 600, $this->source); })()), "nomDeFormation", [], "any", false, false, false, 600), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 603
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 603, $this->source); })()), "description", [], "any", false, false, false, 603), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Description"]);
        echo "
                ";
        // line 604
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "description", [], "any", false, false, false, 604), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
                ";
        // line 605
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 605, $this->source); })()), "description", [], "any", false, false, false, 605), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 608, $this->source); })()), "duree", [], "any", false, false, false, 608), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Durée"]);
        echo "
                ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "duree", [], "any", false, false, false, 609), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Durée"]]);
        echo "
                ";
        // line 610
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()), "duree", [], "any", false, false, false, 610), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 613
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "niveau", [], "any", false, false, false, 613), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Niveau"]);
        echo "
                ";
        // line 614
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "niveau", [], "any", false, false, false, 614), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Niveau"]]);
        echo "
                ";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "niveau", [], "any", false, false, false, 615), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 618
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 618, $this->source); })()), "dateDeb", [], "any", false, false, false, 618), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Date de début"]);
        echo "
                ";
        // line 619
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 619, $this->source); })()), "dateDeb", [], "any", false, false, false, 619), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 620
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 620, $this->source); })()), "dateDeb", [], "any", false, false, false, 620), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 623
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 623, $this->source); })()), "dateFin", [], "any", false, false, false, 623), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Date de fin"]);
        echo "
                ";
        // line 624
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "dateFin", [], "any", false, false, false, 624), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 625
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "dateFin", [], "any", false, false, false, 625), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 628
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), "cout", [], "any", false, false, false, 628), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Coût"]);
        echo "
                ";
        // line 629
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 629, $this->source); })()), "cout", [], "any", false, false, false, 629), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Coût"]]);
        echo "
                ";
        // line 630
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "cout", [], "any", false, false, false, 630), 'errors');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 633
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 633, $this->source); })()), "nomCategorie", [], "any", false, false, false, 633), 'label', ["label_attr" => ["class" => "form-control-label"], "label" => "Nom de la Catégorie"]);
        echo "
                ";
        // line 634
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), "nomCategorie", [], "any", false, false, false, 634), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la Catégorie"]]);
        echo "
                ";
        // line 635
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 635, $this->source); })()), "nomCategorie", [], "any", false, false, false, 635), 'errors');
        echo "
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
            ";
        // line 638
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 638, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Front/EditFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 638,  794 => 635,  790 => 634,  786 => 633,  780 => 630,  776 => 629,  772 => 628,  766 => 625,  762 => 624,  758 => 623,  752 => 620,  748 => 619,  744 => 618,  738 => 615,  734 => 614,  730 => 613,  724 => 610,  720 => 609,  716 => 608,  710 => 605,  706 => 604,  702 => 603,  696 => 600,  692 => 599,  688 => 598,  683 => 596,  677 => 592,  667 => 591,  644 => 642,  642 => 591,  570 => 522,  553 => 508,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Responsiive Admin Dashboard | 9ariny-Academy</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
    <meta charset=\"UTF-8\">
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

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"style.css\" />
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
  </head>
  <body>
    <div class=\"sidebar\">
      <div class=\"logo-details\">
        <img src=\"/looo.png\">9ariny-Academy</img>
      </div>
         <ul class=\"nav-links\">
      
        <li>
         <a href=\"\"  class=\"active\">
 <i class=\"fa-solid fa-school-circle-exclamation\"></i>            
 <span class=\"links_name\">Reclamations</span>
          </a>
        </li>
        <li>
       <a href=\"\" >
           <i class=\"fa-solid fa-file-circle-question\"></i>
            <span class=\"links_name\">Quiz</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
           <i class=\"fa-solid fa-calendar-check\"></i>        
            <span class=\"links_name\">Evenements</span>
          </a>
        </li>
        <li>
           <a href=\"{{ path('list_Categorie') }}\">
           <i class=\"fa-solid fa-puzzle-piece\"></i>        
            <span class=\"links_name\">Categorie</span>
          </a>
        </li>
        <li>
          <a href=\"#\"
                                                                        
          >
            <i class=\"fa-solid fa-book-open-reader\"></i>
            <span class=\"links_name\">Cours</span>
          </a>
        </li>
         <li>
          <a href=\"{{ path('list_Formation') }}\">
<i class=\"fa-solid fa-list\"></i>
            <span class=\"links_name\">Formations</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
<i class=\"fa-solid fa-landmark\"></i>
            <span class=\"links_name\" >Salles</span>
          </a>
         
        </li>
        <li>
          <a href=\"#\">
<i class=\"fa-solid fa-wrench\"></i>
            <span class=\"links_name\" >Equipements</span>
          </a>
         
        </li>
         <li>
          <a href=\"#\">
<i class=\"fas fa-shopping-cart\"></i>
            <span class=\"links_name\">Paiements</span>
          </a>
        </li>
         <li>
          <a href=\"#\">
<i class=\"fa-solid fa-user\"></i>
            <span class=\"links_name\">Account</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
            <i class=\"bx bx-map\"></i>
            <span class=\"links_name\">Map</span>
          </a>
        </li>
       <li>
          <a href=\"#\">
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
          <img src=\"/profile.png\" alt=\"\" />
          <span class=\"admin_name\">Abidi Aziz</span>
          <i class=\"bx bx-chevron-down\"></i>
        </div>
      </nav>

      <div class=\"home-content\">
      
\t<!-- Main content -->
\t\t\t
 


 {% block body %}
    <div class=\"d-flex justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center\">Ajouter une formation</h1>

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
                {{ form_label(form.nomDeFormation, 'Nom de la Formation', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.nomDeFormation, {'attr': {'class': 'form-control', 'placeholder': 'Nom de Formation'}}) }}
                {{ form_errors(form.nomDeFormation) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Description'}}) }}
                {{ form_errors(form.description) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.duree, 'Durée', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.duree, {'attr': {'class': 'form-control', 'placeholder': 'Durée'}}) }}
                {{ form_errors(form.duree) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.niveau, 'Niveau', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.niveau, {'attr': {'class': 'form-control', 'placeholder': 'Niveau'}}) }}
                {{ form_errors(form.niveau) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.dateDeb, 'Date de début', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.dateDeb, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.dateDeb) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.dateFin, 'Date de fin', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.dateFin) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.cout, 'Coût', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.cout, {'attr': {'class': 'form-control', 'placeholder': 'Coût'}}) }}
                {{ form_errors(form.cout) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.nomCategorie, 'Nom de la Catégorie', {'label_attr': {'class': 'form-control-label'}}) }}
                {{ form_widget(form.nomCategorie, {'attr': {'class': 'form-control', 'placeholder': 'Nom de la Catégorie'}}) }}
                {{ form_errors(form.nomCategorie) }}
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}







  
\t\t\t
  </body>
</html>


", "Front/EditFormation.html.twig", "C:\\Users\\HP\\Desktop\\testt Med aziz abidi\\templates\\Front\\EditFormation.html.twig");
    }
}
