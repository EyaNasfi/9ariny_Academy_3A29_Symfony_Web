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

/* js/main.js */
class __TwigTemplate_bdc650db6e7370a5de4dee32d07edb2a62e9c5b4467bb482a07cb251068ffb4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/main.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/main.js"));

        // line 1
        echo "(function (\$) {
    \"use strict\";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if (\$('#spinner').length > 0) {
                \$('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    \$(window).scroll(function () {
        if (\$(this).scrollTop() > 300) {
            \$('.sticky-top').css('top', '0px');
        } else {
            \$('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Dropdown on mouse hover
    const \$dropdown = \$(\".dropdown\");
    const \$dropdownToggle = \$(\".dropdown-toggle\");
    const \$dropdownMenu = \$(\".dropdown-menu\");
    const showClass = \"show\";
    
    \$(window).on(\"load resize\", function() {
        if (this.matchMedia(\"(min-width: 992px)\").matches) {
            \$dropdown.hover(
            function() {
                const \$this = \$(this);
                \$this.addClass(showClass);
                \$this.find(\$dropdownToggle).attr(\"aria-expanded\", \"true\");
                \$this.find(\$dropdownMenu).addClass(showClass);
            },
            function() {
                const \$this = \$(this);
                \$this.removeClass(showClass);
                \$this.find(\$dropdownToggle).attr(\"aria-expanded\", \"false\");
                \$this.find(\$dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            \$dropdown.off(\"mouseenter mouseleave\");
        }
    });
    
    
    // Back to top button
    \$(window).scroll(function () {
        if (\$(this).scrollTop() > 300) {
            \$('.back-to-top').fadeIn('slow');
        } else {
            \$('.back-to-top').fadeOut('slow');
        }
    });
    \$('.back-to-top').click(function () {
        \$('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    \$(\".header-carousel\").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class=\"bi bi-chevron-left\"></i>',
            '<i class=\"bi bi-chevron-right\"></i>'
        ]
    });


    // Testimonials carousel
    \$(\".testimonial-carousel\").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "js/main.js";
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
        return new Source("(function (\$) {
    \"use strict\";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if (\$('#spinner').length > 0) {
                \$('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    \$(window).scroll(function () {
        if (\$(this).scrollTop() > 300) {
            \$('.sticky-top').css('top', '0px');
        } else {
            \$('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Dropdown on mouse hover
    const \$dropdown = \$(\".dropdown\");
    const \$dropdownToggle = \$(\".dropdown-toggle\");
    const \$dropdownMenu = \$(\".dropdown-menu\");
    const showClass = \"show\";
    
    \$(window).on(\"load resize\", function() {
        if (this.matchMedia(\"(min-width: 992px)\").matches) {
            \$dropdown.hover(
            function() {
                const \$this = \$(this);
                \$this.addClass(showClass);
                \$this.find(\$dropdownToggle).attr(\"aria-expanded\", \"true\");
                \$this.find(\$dropdownMenu).addClass(showClass);
            },
            function() {
                const \$this = \$(this);
                \$this.removeClass(showClass);
                \$this.find(\$dropdownToggle).attr(\"aria-expanded\", \"false\");
                \$this.find(\$dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            \$dropdown.off(\"mouseenter mouseleave\");
        }
    });
    
    
    // Back to top button
    \$(window).scroll(function () {
        if (\$(this).scrollTop() > 300) {
            \$('.back-to-top').fadeIn('slow');
        } else {
            \$('.back-to-top').fadeOut('slow');
        }
    });
    \$('.back-to-top').click(function () {
        \$('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    \$(\".header-carousel\").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class=\"bi bi-chevron-left\"></i>',
            '<i class=\"bi bi-chevron-right\"></i>'
        ]
    });


    // Testimonials carousel
    \$(\".testimonial-carousel\").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

", "js/main.js", "C:\\Users\\Eya\\projet\\templates\\js\\main.js");
    }
}
