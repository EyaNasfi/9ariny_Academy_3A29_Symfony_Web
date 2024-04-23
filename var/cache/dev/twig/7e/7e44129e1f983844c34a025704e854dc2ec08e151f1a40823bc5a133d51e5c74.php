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

/* reclamation/back/affiche.html.twig */
class __TwigTemplate_aafbcb59030039988179a8d5c2b2a96cc5d6f8161f8c1a51db410ace4ac6f84d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/back/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/back/affiche.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
  <head>
  
    <meta charset=\"UTF-8\" />
    <title>Responsiive Admin Dashboard | 9ariny-Academy</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
  font-size: 15px;
  font-weight: 400;
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
     <img src=\"/log.png\" ></img>

      </div>
         <ul class=\"nav-links\">
      
        <li>
         <a href=\"";
        // line 469
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherreclamation");
        echo "\"  class=\"active\">
 <i class=\"fa-solid fa-school-circle-exclamation\"></i>            
 <span class=\"links_name\">Reclamations</span>
          </a>
        </li>
        <li>
       <a href=\"";
        // line 475
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz");
        echo "\" >
           <i class=\"fa-solid fa-file-circle-question\"></i>
            <span class=\"links_name\">Quiz</span>
          </a>
        </li>
             <li>
          <a href=\"";
        // line 481
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        echo "\" >
           <i class=\"fa-solid fa-calendar-check\"></i>        
            <span class=\"links_name\">Evenements</span>
          </a>
        </li>
        <li>
                    <a href=\"";
        // line 487
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_club");
        echo "\" >
           <i class=\"fa-solid fa-puzzle-piece\"></i>        
            <span class=\"links_name\">Clubs</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
            <i class=\"fa-solid fa-book-open-reader\"></i>
            <span class=\"links_name\">Cours</span>
          </a>
        </li>
         <li>
          <a href=\"#\">
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
          <form action=\"";
        // line 551
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        echo "\" method=\"GET\">

          <input type=\"text\" name=\"q\" placeholder=\"Search...\" />
              <button type=\"submit\"><i class=\"bx bx-search\"></i></button>
  </form>


";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) || array_key_exists("Reclamations", $context) ? $context["Reclamations"] : (function () { throw new RuntimeError('Variable "Reclamations" does not exist.', 558, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 559
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 561
        echo "        </div>
               <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\">
       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-pill label-danger count\" style=\"border-radius:10px;\"></span> <span class=\"glyphicon glyphicon-bell\" style=\"font-size:18px;\"></span></a>
       <ul class=\"dropdown-menu\">
        ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) || array_key_exists("Reclamations", $context) ? $context["Reclamations"] : (function () { throw new RuntimeError('Variable "Reclamations" does not exist.', 566, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 567
            echo "                ";
            $context["traite"] = false;
            // line 568
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Reponses"]) || array_key_exists("Reponses", $context) ? $context["Reponses"] : (function () { throw new RuntimeError('Variable "Reponses" does not exist.', 568, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 569
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idrec", [], "any", false, false, false, 569), "idrec", [], "any", false, false, false, 569) == twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 569))) {
                    // line 570
                    echo "                        ";
                    $context["traite"] = true;
                    // line 571
                    echo "                    ";
                }
                // line 572
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 573
            echo "                ";
            if ( !(isset($context["traite"]) || array_key_exists("traite", $context) ? $context["traite"] : (function () { throw new RuntimeError('Variable "traite" does not exist.', 573, $this->source); })())) {
                echo "                
              <li><a href=\"";
                // line 574
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouterreponsee", ["id" => twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 574)]), "html", null, true);
                echo "\" class=\"dropdown-item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rec"], "iduser", [], "any", false, false, false, 574), "email", [], "any", false, false, false, 574), "html", null, true);
                echo " a envoyé une reclamation sous le titre ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 574), "html", null, true);
                echo " </a></li>
               ";
            }
            // line 576
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        echo "
     </ul>
           </li>

        <div class=\"profile-details\">
          <img src=\"/profile.png\" alt=\"\" />
          <span class=\"admin_name\">Nasfi Eya</span>
        </div>
        
      </nav>

            <div class=\"home-content\">
        <div class=\"overview-boxes\">
         <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Reponses</div>
              <div class=\"number\">";
        // line 593
        echo twig_escape_filter($this->env, twig_round((isset($context["pourcentageReponses"]) || array_key_exists("pourcentageReponses", $context) ? $context["pourcentageReponses"] : (function () { throw new RuntimeError('Variable "pourcentageReponses" does not exist.', 593, $this->source); })())), "html", null, true);
        echo "%</div>
              <div class=\"box-topic\">";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["totalrep"]) || array_key_exists("totalrep", $context) ? $context["totalrep"] : (function () { throw new RuntimeError('Variable "totalrep" does not exist.', 594, $this->source); })()), "html", null, true);
        echo " sur ";
        echo twig_escape_filter($this->env, (isset($context["totalrec"]) || array_key_exists("totalrec", $context) ? $context["totalrec"] : (function () { throw new RuntimeError('Variable "totalrec" does not exist.', 594, $this->source); })()), "html", null, true);
        echo "</div>
              <div  class=\"text\">ont été répondues.</div>
              <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bxs-cart-add cart two\"></i>
          </div>
          <div class=\"box\">
    <div class=\"right-side\">
        <div class=\"box-topic\">Totales Quiz</div>
        <div class=\"number\">";
        // line 606
        echo twig_escape_filter($this->env, (isset($context["totalQuizzes"]) || array_key_exists("totalQuizzes", $context) ? $context["totalQuizzes"] : (function () { throw new RuntimeError('Variable "totalQuizzes" does not exist.', 606, $this->source); })()), "html", null, true);
        echo "</div>
        <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>        </div>
            <i class=\"bx bx-cart-alt cart\"></i>
          </div>
         
          <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Totales questions </div>
              <div class=\"number\">";
        // line 617
        echo twig_escape_filter($this->env, (isset($context["totalquest"]) || array_key_exists("totalquest", $context) ? $context["totalquest"] : (function () { throw new RuntimeError('Variable "totalquest" does not exist.', 617, $this->source); })()), "html", null, true);
        echo "  </div>
              <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bx-cart cart three\"></i>
          </div>
          <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Pourcentage des questions dans quizs</div>
              <div class=\"number\">";
        // line 628
        echo twig_escape_filter($this->env, twig_round((isset($context["pourcentagequest"]) || array_key_exists("pourcentagequest", $context) ? $context["pourcentagequest"] : (function () { throw new RuntimeError('Variable "pourcentagequest" does not exist.', 628, $this->source); })())), "html", null, true);
        echo "%</div>
              <div class=\"indicator\">
                <i class=\"bx bx-down-arrow-alt down\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bxs-cart-download cart four\"></i>
          </div>
        </div>

        <div class=\"sales-boxes\">
        <div class=\"recent-sales box\">
    <div class=\"title\">Les listes des Reclamations</div>
    <div class=\"sales-details\">
        <ul class=\"details\">
            <li class=\"topic\">Utilisateur</li>
            ";
        // line 644
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) || array_key_exists("Reclamations", $context) ? $context["Reclamations"] : (function () { throw new RuntimeError('Variable "Reclamations" does not exist.', 644, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 645
            echo "                ";
            $context["traite"] = false;
            // line 646
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Reponses"]) || array_key_exists("Reponses", $context) ? $context["Reponses"] : (function () { throw new RuntimeError('Variable "Reponses" does not exist.', 646, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 647
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idrec", [], "any", false, false, false, 647), "idrec", [], "any", false, false, false, 647) == twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 647))) {
                    // line 648
                    echo "                        ";
                    $context["traite"] = true;
                    // line 649
                    echo "                    ";
                }
                // line 650
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 651
            echo "                ";
            if ( !(isset($context["traite"]) || array_key_exists("traite", $context) ? $context["traite"] : (function () { throw new RuntimeError('Variable "traite" does not exist.', 651, $this->source); })())) {
                echo "                
                    <li><a href=\"#\">";
                // line 652
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rec"], "iduser", [], "any", false, false, false, 652), "email", [], "any", false, false, false, 652), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 654
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 655
        echo "            </ul>
        <ul class=\"details\">

            <li class=\"topic\">Titre</li>
            ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) || array_key_exists("Reclamations", $context) ? $context["Reclamations"] : (function () { throw new RuntimeError('Variable "Reclamations" does not exist.', 659, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 660
            echo "                ";
            $context["traite"] = false;
            // line 661
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Reponses"]) || array_key_exists("Reponses", $context) ? $context["Reponses"] : (function () { throw new RuntimeError('Variable "Reponses" does not exist.', 661, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 662
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idrec", [], "any", false, false, false, 662), "idrec", [], "any", false, false, false, 662) == twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 662))) {
                    // line 663
                    echo "                        ";
                    $context["traite"] = true;
                    // line 664
                    echo "                    ";
                }
                // line 665
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 666
            echo "                ";
            if ( !(isset($context["traite"]) || array_key_exists("traite", $context) ? $context["traite"] : (function () { throw new RuntimeError('Variable "traite" does not exist.', 666, $this->source); })())) {
                echo "                
                    <li><a href=\"#\">";
                // line 667
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 667), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 669
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
        echo "            </ul>
        <ul class=\"details\">

            <li class=\"topic\">État</li>
            ";
        // line 674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Reclamations"]) || array_key_exists("Reclamations", $context) ? $context["Reclamations"] : (function () { throw new RuntimeError('Variable "Reclamations" does not exist.', 674, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 675
            echo "                ";
            $context["traite"] = false;
            // line 676
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Reponses"]) || array_key_exists("Reponses", $context) ? $context["Reponses"] : (function () { throw new RuntimeError('Variable "Reponses" does not exist.', 676, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 677
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idrec", [], "any", false, false, false, 677), "idrec", [], "any", false, false, false, 677) == twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 677))) {
                    // line 678
                    echo "                        ";
                    $context["traite"] = true;
                    // line 679
                    echo "                    ";
                }
                // line 680
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 681
            echo "                ";
            if ( !(isset($context["traite"]) || array_key_exists("traite", $context) ? $context["traite"] : (function () { throw new RuntimeError('Variable "traite" does not exist.', 681, $this->source); })())) {
                // line 682
                echo "                    <li>
                        <a href=\"";
                // line 683
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajouterreponsee", ["id" => twig_get_attribute($this->env, $this->source, $context["rec"], "idrec", [], "any", false, false, false, 683)]), "html", null, true);
                echo "\"><i class=\"fas fa-reply\"></i></a>
                        Non traité
                    </li>
                ";
            }
            // line 687
            echo "               
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 689
        echo "        </ul>
     </div>
    <div class=\"button\">
        <a href=\"";
        // line 692
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_afficherreponsetraite");
        echo "\">Les reclamations traités</a>
        
    </div>
</div>
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





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/back/affiche.html.twig";
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
        return array (  917 => 692,  912 => 689,  905 => 687,  898 => 683,  895 => 682,  892 => 681,  886 => 680,  883 => 679,  880 => 678,  877 => 677,  872 => 676,  869 => 675,  865 => 674,  859 => 670,  853 => 669,  848 => 667,  843 => 666,  837 => 665,  834 => 664,  831 => 663,  828 => 662,  823 => 661,  820 => 660,  816 => 659,  810 => 655,  804 => 654,  799 => 652,  794 => 651,  788 => 650,  785 => 649,  782 => 648,  779 => 647,  774 => 646,  771 => 645,  767 => 644,  748 => 628,  734 => 617,  720 => 606,  703 => 594,  699 => 593,  681 => 577,  675 => 576,  666 => 574,  661 => 573,  655 => 572,  652 => 571,  649 => 570,  646 => 569,  641 => 568,  638 => 567,  634 => 566,  627 => 561,  621 => 559,  617 => 558,  607 => 551,  540 => 487,  531 => 481,  522 => 475,  513 => 469,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang=\"en\" dir=\"ltr\">
  <head>
  
    <meta charset=\"UTF-8\" />
    <title>Responsiive Admin Dashboard | 9ariny-Academy</title>
    <script src=\"https://kit.fontawesome.com/7e57645445.js\" crossorigin=\"anonymous\"></script>
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
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
  font-size: 15px;
  font-weight: 400;
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
     <img src=\"/log.png\" ></img>

      </div>
         <ul class=\"nav-links\">
      
        <li>
         <a href=\"{{ path('app_afficherreclamation')}}\"  class=\"active\">
 <i class=\"fa-solid fa-school-circle-exclamation\"></i>            
 <span class=\"links_name\">Reclamations</span>
          </a>
        </li>
        <li>
       <a href=\"{{ path('app_quiz')}}\" >
           <i class=\"fa-solid fa-file-circle-question\"></i>
            <span class=\"links_name\">Quiz</span>
          </a>
        </li>
             <li>
          <a href=\"{{path('app_event')}}\" >
           <i class=\"fa-solid fa-calendar-check\"></i>        
            <span class=\"links_name\">Evenements</span>
          </a>
        </li>
        <li>
                    <a href=\"{{path('app_club')}}\" >
           <i class=\"fa-solid fa-puzzle-piece\"></i>        
            <span class=\"links_name\">Clubs</span>
          </a>
        </li>
        <li>
          <a href=\"#\">
            <i class=\"fa-solid fa-book-open-reader\"></i>
            <span class=\"links_name\">Cours</span>
          </a>
        </li>
         <li>
          <a href=\"#\">
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
          <form action=\"{{ path('app_search') }}\" method=\"GET\">

          <input type=\"text\" name=\"q\" placeholder=\"Search...\" />
              <button type=\"submit\"><i class=\"bx bx-search\"></i></button>
  </form>


{% for rec in Reclamations %}
    {# Display your search results here #}
{% endfor %}
        </div>
               <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\">
       <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"label label-pill label-danger count\" style=\"border-radius:10px;\"></span> <span class=\"glyphicon glyphicon-bell\" style=\"font-size:18px;\"></span></a>
       <ul class=\"dropdown-menu\">
        {% for rec in Reclamations %}
                {% set traite = false %}
                {% for r in Reponses %}
                    {% if r.idrec.idrec == rec.idrec %}
                        {% set traite = true %}
                    {% endif %}
                {% endfor %}
                {% if not traite %}                
              <li><a href=\"{{ path('app_ajouterreponsee', {'id': rec.idrec}) }}\" class=\"dropdown-item\">{{ rec.iduser.email}} a envoyé une reclamation sous le titre {{ rec.titre}} </a></li>
               {% endif %}
            {% endfor %}

     </ul>
           </li>

        <div class=\"profile-details\">
          <img src=\"/profile.png\" alt=\"\" />
          <span class=\"admin_name\">Nasfi Eya</span>
        </div>
        
      </nav>

            <div class=\"home-content\">
        <div class=\"overview-boxes\">
         <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Reponses</div>
              <div class=\"number\">{{ pourcentageReponses | round }}%</div>
              <div class=\"box-topic\">{{ totalrep}} sur {{totalrec}}</div>
              <div  class=\"text\">ont été répondues.</div>
              <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bxs-cart-add cart two\"></i>
          </div>
          <div class=\"box\">
    <div class=\"right-side\">
        <div class=\"box-topic\">Totales Quiz</div>
        <div class=\"number\">{{totalQuizzes}}</div>
        <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>        </div>
            <i class=\"bx bx-cart-alt cart\"></i>
          </div>
         
          <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Totales questions </div>
              <div class=\"number\">{{totalquest}}  </div>
              <div class=\"indicator\">
                <i class=\"bx bx-up-arrow-alt\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bx-cart cart three\"></i>
          </div>
          <div class=\"box\">
            <div class=\"right-side\">
              <div class=\"box-topic\">Pourcentage des questions dans quizs</div>
              <div class=\"number\">{{pourcentagequest| round}}%</div>
              <div class=\"indicator\">
                <i class=\"bx bx-down-arrow-alt down\"></i>
                <span class=\"text\">Mise a jour aujourd'hui</span>
              </div>
            </div>
            <i class=\"bx bxs-cart-download cart four\"></i>
          </div>
        </div>

        <div class=\"sales-boxes\">
        <div class=\"recent-sales box\">
    <div class=\"title\">Les listes des Reclamations</div>
    <div class=\"sales-details\">
        <ul class=\"details\">
            <li class=\"topic\">Utilisateur</li>
            {% for rec in Reclamations %}
                {% set traite = false %}
                {% for r in Reponses %}
                    {% if r.idrec.idrec == rec.idrec %}
                        {% set traite = true %}
                    {% endif %}
                {% endfor %}
                {% if not traite %}                
                    <li><a href=\"#\">{{ rec.iduser.email }}</a></li>
                {% endif %}
            {% endfor %}
            </ul>
        <ul class=\"details\">

            <li class=\"topic\">Titre</li>
            {% for rec in Reclamations %}
                {% set traite = false %}
                {% for r in Reponses %}
                    {% if r.idrec.idrec == rec.idrec %}
                        {% set traite = true %}
                    {% endif %}
                {% endfor %}
                {% if not traite %}                
                    <li><a href=\"#\">{{ rec.titre }}</a></li>
                {% endif %}
            {% endfor %}
            </ul>
        <ul class=\"details\">

            <li class=\"topic\">État</li>
            {% for rec in Reclamations %}
                {% set traite = false %}
                {% for r in Reponses %}
                    {% if r.idrec.idrec == rec.idrec %}
                        {% set traite = true %}
                    {% endif %}
                {% endfor %}
                {% if not traite %}
                    <li>
                        <a href=\"{{ path('app_ajouterreponsee', {'id': rec.idrec}) }}\"><i class=\"fas fa-reply\"></i></a>
                        Non traité
                    </li>
                {% endif %}
               
            {% endfor %}
        </ul>
     </div>
    <div class=\"button\">
        <a href=\"{{ path('app_afficherreponsetraite')}}\">Les reclamations traités</a>
        
    </div>
</div>
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





", "reclamation/back/affiche.html.twig", "C:\\Users\\Eya\\projet\\templates\\reclamation\\back\\affiche.html.twig");
    }
}