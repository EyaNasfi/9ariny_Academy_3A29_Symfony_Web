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

/* scss/bootstrap/scss/_images.scss */
class __TwigTemplate_27eef2c244047e8ca16dd5fe164fcfdc8c452927c450af5955cb39a27c90ff12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_images.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_images.scss"));

        // line 1
        echo "// Responsive images (ensure images don't scale beyond their parents)
//
// This is purposefully opt-in via an explicit class rather than being the default for all `<img>`s.
// We previously tried the \"images are responsive by default\" approach in Bootstrap v2,
// and abandoned it in Bootstrap v3 because it breaks lots of third-party widgets (including Google Maps)
// which weren't expecting the images within themselves to be involuntarily resized.
// See also https://github.com/twbs/bootstrap/issues/18178
.img-fluid {
  @include img-fluid();
}


// Image thumbnails
.img-thumbnail {
  padding: \$thumbnail-padding;
  background-color: \$thumbnail-bg;
  border: \$thumbnail-border-width solid \$thumbnail-border-color;
  @include border-radius(\$thumbnail-border-radius);
  @include box-shadow(\$thumbnail-box-shadow);

  // Keep them at most 100% wide
  @include img-fluid();
}

//
// Figures
//

.figure {
  // Ensures the caption's text aligns with the image.
  display: inline-block;
}

.figure-img {
  margin-bottom: \$spacer / 2;
  line-height: 1;
}

.figure-caption {
  @include font-size(\$figure-caption-font-size);
  color: \$figure-caption-color;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_images.scss";
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
        return new Source("// Responsive images (ensure images don't scale beyond their parents)
//
// This is purposefully opt-in via an explicit class rather than being the default for all `<img>`s.
// We previously tried the \"images are responsive by default\" approach in Bootstrap v2,
// and abandoned it in Bootstrap v3 because it breaks lots of third-party widgets (including Google Maps)
// which weren't expecting the images within themselves to be involuntarily resized.
// See also https://github.com/twbs/bootstrap/issues/18178
.img-fluid {
  @include img-fluid();
}


// Image thumbnails
.img-thumbnail {
  padding: \$thumbnail-padding;
  background-color: \$thumbnail-bg;
  border: \$thumbnail-border-width solid \$thumbnail-border-color;
  @include border-radius(\$thumbnail-border-radius);
  @include box-shadow(\$thumbnail-box-shadow);

  // Keep them at most 100% wide
  @include img-fluid();
}

//
// Figures
//

.figure {
  // Ensures the caption's text aligns with the image.
  display: inline-block;
}

.figure-img {
  margin-bottom: \$spacer / 2;
  line-height: 1;
}

.figure-caption {
  @include font-size(\$figure-caption-font-size);
  color: \$figure-caption-color;
}
", "scss/bootstrap/scss/_images.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_images.scss");
    }
}
