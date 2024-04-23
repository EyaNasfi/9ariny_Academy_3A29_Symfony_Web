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

/* scss/bootstrap/scss/_card.scss */
class __TwigTemplate_6e684d0cbcdc3079d451ac166b7a6a9052cd732492c2499f4a14ad35f9040196 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_card.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_card.scss"));

        // line 1
        echo "//
// Base styles
//

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0; // See https://github.com/twbs/bootstrap/pull/22740#issuecomment-305868106
  height: \$card-height;
  word-wrap: break-word;
  background-color: \$card-bg;
  background-clip: border-box;
  border: \$card-border-width solid \$card-border-color;
  @include border-radius(\$card-border-radius);

  > hr {
    margin-right: 0;
    margin-left: 0;
  }

  > .list-group {
    border-top: inherit;
    border-bottom: inherit;

    &:first-child {
      border-top-width: 0;
      @include border-top-radius(\$card-inner-border-radius);
    }

    &:last-child  {
      border-bottom-width: 0;
      @include border-bottom-radius(\$card-inner-border-radius);
    }
  }

  // Due to specificity of the above selector (`.card > .list-group`), we must
  // use a child selector here to prevent double borders.
  > .card-header + .list-group,
  > .list-group + .card-footer {
    border-top: 0;
  }
}

.card-body {
  // Enable `flex-grow: 1` for decks and groups so that card blocks take up
  // as much space as possible, ensuring footers are aligned to the bottom.
  flex: 1 1 auto;
  padding: \$card-spacer-y \$card-spacer-x;
  color: \$card-color;
}

.card-title {
  margin-bottom: \$card-title-spacer-y;
}

.card-subtitle {
  margin-top: -\$card-title-spacer-y / 2;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link {
  &:hover {
    text-decoration: none;
  }

  + .card-link {
    margin-left: \$card-spacer-x;
  }
}

//
// Optional textual caps
//

.card-header {
  padding: \$card-cap-padding-y \$card-cap-padding-x;
  margin-bottom: 0; // Removes the default margin-bottom of <hN>
  color: \$card-cap-color;
  background-color: \$card-cap-bg;
  border-bottom: \$card-border-width solid \$card-border-color;

  &:first-child {
    @include border-radius(\$card-inner-border-radius \$card-inner-border-radius 0 0);
  }
}

.card-footer {
  padding: \$card-cap-padding-y \$card-cap-padding-x;
  color: \$card-cap-color;
  background-color: \$card-cap-bg;
  border-top: \$card-border-width solid \$card-border-color;

  &:last-child {
    @include border-radius(0 0 \$card-inner-border-radius \$card-inner-border-radius);
  }
}


//
// Header navs
//

.card-header-tabs {
  margin-right: -\$card-cap-padding-x / 2;
  margin-bottom: -\$card-cap-padding-y;
  margin-left: -\$card-cap-padding-x / 2;
  border-bottom: 0;

  @if \$nav-tabs-link-active-bg != \$card-bg {
    .nav-link.active {
      background-color: \$card-bg;
      border-bottom-color: \$card-bg;
    }
  }
}

.card-header-pills {
  margin-right: -\$card-cap-padding-x / 2;
  margin-left: -\$card-cap-padding-x / 2;
}

// Card image
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: \$card-img-overlay-padding;
  @include border-radius(\$card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%; // Required because we use flexbox and this inherently applies align-self: stretch
}

.card-img,
.card-img-top {
  @include border-top-radius(\$card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  @include border-bottom-radius(\$card-inner-border-radius);
}


//
// Card groups
//

.card-group {
  // The child selector allows nested `.card` within `.card-group`
  // to display properly.
  > .card {
    margin-bottom: \$card-group-margin;
  }

  @include media-breakpoint-up(sm) {
    display: flex;
    flex-flow: row wrap;
    // The child selector allows nested `.card` within `.card-group`
    // to display properly.
    > .card {
      // Flexbugs #4: https://github.com/philipwalton/flexbugs#flexbug-4
      flex: 1 0 0%;
      margin-bottom: 0;

      + .card {
        margin-left: 0;
        border-left: 0;
      }

      // Handle rounded corners
      @if \$enable-rounded {
        &:not(:last-child) {
          @include border-end-radius(0);

          .card-img-top,
          .card-header {
            // stylelint-disable-next-line property-disallowed-list
            border-top-right-radius: 0;
          }
          .card-img-bottom,
          .card-footer {
            // stylelint-disable-next-line property-disallowed-list
            border-bottom-right-radius: 0;
          }
        }

        &:not(:first-child) {
          @include border-start-radius(0);

          .card-img-top,
          .card-header {
            // stylelint-disable-next-line property-disallowed-list
            border-top-left-radius: 0;
          }
          .card-img-bottom,
          .card-footer {
            // stylelint-disable-next-line property-disallowed-list
            border-bottom-left-radius: 0;
          }
        }
      }
    }
  }
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
        return "scss/bootstrap/scss/_card.scss";
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
        return new Source("//
// Base styles
//

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0; // See https://github.com/twbs/bootstrap/pull/22740#issuecomment-305868106
  height: \$card-height;
  word-wrap: break-word;
  background-color: \$card-bg;
  background-clip: border-box;
  border: \$card-border-width solid \$card-border-color;
  @include border-radius(\$card-border-radius);

  > hr {
    margin-right: 0;
    margin-left: 0;
  }

  > .list-group {
    border-top: inherit;
    border-bottom: inherit;

    &:first-child {
      border-top-width: 0;
      @include border-top-radius(\$card-inner-border-radius);
    }

    &:last-child  {
      border-bottom-width: 0;
      @include border-bottom-radius(\$card-inner-border-radius);
    }
  }

  // Due to specificity of the above selector (`.card > .list-group`), we must
  // use a child selector here to prevent double borders.
  > .card-header + .list-group,
  > .list-group + .card-footer {
    border-top: 0;
  }
}

.card-body {
  // Enable `flex-grow: 1` for decks and groups so that card blocks take up
  // as much space as possible, ensuring footers are aligned to the bottom.
  flex: 1 1 auto;
  padding: \$card-spacer-y \$card-spacer-x;
  color: \$card-color;
}

.card-title {
  margin-bottom: \$card-title-spacer-y;
}

.card-subtitle {
  margin-top: -\$card-title-spacer-y / 2;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link {
  &:hover {
    text-decoration: none;
  }

  + .card-link {
    margin-left: \$card-spacer-x;
  }
}

//
// Optional textual caps
//

.card-header {
  padding: \$card-cap-padding-y \$card-cap-padding-x;
  margin-bottom: 0; // Removes the default margin-bottom of <hN>
  color: \$card-cap-color;
  background-color: \$card-cap-bg;
  border-bottom: \$card-border-width solid \$card-border-color;

  &:first-child {
    @include border-radius(\$card-inner-border-radius \$card-inner-border-radius 0 0);
  }
}

.card-footer {
  padding: \$card-cap-padding-y \$card-cap-padding-x;
  color: \$card-cap-color;
  background-color: \$card-cap-bg;
  border-top: \$card-border-width solid \$card-border-color;

  &:last-child {
    @include border-radius(0 0 \$card-inner-border-radius \$card-inner-border-radius);
  }
}


//
// Header navs
//

.card-header-tabs {
  margin-right: -\$card-cap-padding-x / 2;
  margin-bottom: -\$card-cap-padding-y;
  margin-left: -\$card-cap-padding-x / 2;
  border-bottom: 0;

  @if \$nav-tabs-link-active-bg != \$card-bg {
    .nav-link.active {
      background-color: \$card-bg;
      border-bottom-color: \$card-bg;
    }
  }
}

.card-header-pills {
  margin-right: -\$card-cap-padding-x / 2;
  margin-left: -\$card-cap-padding-x / 2;
}

// Card image
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: \$card-img-overlay-padding;
  @include border-radius(\$card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%; // Required because we use flexbox and this inherently applies align-self: stretch
}

.card-img,
.card-img-top {
  @include border-top-radius(\$card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  @include border-bottom-radius(\$card-inner-border-radius);
}


//
// Card groups
//

.card-group {
  // The child selector allows nested `.card` within `.card-group`
  // to display properly.
  > .card {
    margin-bottom: \$card-group-margin;
  }

  @include media-breakpoint-up(sm) {
    display: flex;
    flex-flow: row wrap;
    // The child selector allows nested `.card` within `.card-group`
    // to display properly.
    > .card {
      // Flexbugs #4: https://github.com/philipwalton/flexbugs#flexbug-4
      flex: 1 0 0%;
      margin-bottom: 0;

      + .card {
        margin-left: 0;
        border-left: 0;
      }

      // Handle rounded corners
      @if \$enable-rounded {
        &:not(:last-child) {
          @include border-end-radius(0);

          .card-img-top,
          .card-header {
            // stylelint-disable-next-line property-disallowed-list
            border-top-right-radius: 0;
          }
          .card-img-bottom,
          .card-footer {
            // stylelint-disable-next-line property-disallowed-list
            border-bottom-right-radius: 0;
          }
        }

        &:not(:first-child) {
          @include border-start-radius(0);

          .card-img-top,
          .card-header {
            // stylelint-disable-next-line property-disallowed-list
            border-top-left-radius: 0;
          }
          .card-img-bottom,
          .card-footer {
            // stylelint-disable-next-line property-disallowed-list
            border-bottom-left-radius: 0;
          }
        }
      }
    }
  }
}
", "scss/bootstrap/scss/_card.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_card.scss");
    }
}
