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

/* scss/bootstrap/scss/_tables.scss */
class __TwigTemplate_a10c27f921afc28889bbf7f3c7a9443684be62520d0a5fe804ecf56d825c02fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_tables.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_tables.scss"));

        // line 1
        echo "//
// Basic Bootstrap table
//

.table {
  --#{\$variable-prefix}table-bg: #{\$table-bg};
  --#{\$variable-prefix}table-striped-color: #{\$table-striped-color};
  --#{\$variable-prefix}table-striped-bg: #{\$table-striped-bg};
  --#{\$variable-prefix}table-active-color: #{\$table-active-color};
  --#{\$variable-prefix}table-active-bg: #{\$table-active-bg};
  --#{\$variable-prefix}table-hover-color: #{\$table-hover-color};
  --#{\$variable-prefix}table-hover-bg: #{\$table-hover-bg};

  width: 100%;
  margin-bottom: \$spacer;
  color: \$table-color;
  vertical-align: \$table-cell-vertical-align;
  border-color: \$table-border-color;

  // Target th & td
  // We need the child combinator to prevent styles leaking to nested tables which doesn't have a `.table` class.
  // We use the universal selectors here to simplify the selector (else we would need 6 different selectors).
  // Another advantage is that this generates less code and makes the selector less specific making it easier to override.
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    padding: \$table-cell-padding-y \$table-cell-padding-x;
    background-color: var(--#{\$variable-prefix}table-bg);
    border-bottom-width: \$table-border-width;
    box-shadow: inset 0 0 0 9999px var(--#{\$variable-prefix}table-accent-bg);
  }

  > tbody {
    vertical-align: inherit;
  }

  > thead {
    vertical-align: bottom;
  }

  // Highlight border color between thead, tbody and tfoot.
  > :not(:last-child) > :last-child > * {
    border-bottom-color: \$table-group-separator-color;
  }
}


//
// Change placement of captions with a class
//

.caption-top {
  caption-side: top;
}


//
// Condensed table w/ half padding
//

.table-sm {
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    padding: \$table-cell-padding-y-sm \$table-cell-padding-x-sm;
  }
}


// Border versions
//
// Add or remove borders all around the table and between all the columns.
//
// When borders are added on all sides of the cells, the corners can render odd when
// these borders do not have the same color or if they are semi-transparent.
// Therefor we add top and border bottoms to the `tr`s and left and right borders
// to the `td`s or `th`s

.table-bordered {
  > :not(caption) > * {
    border-width: \$table-border-width 0;

    // stylelint-disable-next-line selector-max-universal
    > * {
      border-width: 0 \$table-border-width;
    }
  }
}

.table-borderless {
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    border-bottom-width: 0;
  }
}

// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody > tr:nth-of-type(#{\$table-striped-order}) {
    --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-striped-bg);
    color: var(--#{\$variable-prefix}table-striped-color);
  }
}

// Active table
//
// The `.table-active` class can be added to highlight rows or cells

.table-active {
  --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-active-bg);
  color: var(--#{\$variable-prefix}table-active-color);
}

// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody > tr:hover {
    --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-hover-bg);
    color: var(--#{\$variable-prefix}table-hover-color);
  }
}


// Table variants
//
// Table variants set the table cell backgrounds, border colors
// and the colors of the striped, hovered & active tables

@each \$color, \$value in \$table-variants {
  @include table-variant(\$color, \$value);
}

// Responsive tables
//
// Generate series of `.table-responsive-*` classes for configuring the screen
// size of where your table will overflow.

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

  @include media-breakpoint-down(\$breakpoint) {
    .table-responsive#{\$infix} {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
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
        return "scss/bootstrap/scss/_tables.scss";
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
// Basic Bootstrap table
//

.table {
  --#{\$variable-prefix}table-bg: #{\$table-bg};
  --#{\$variable-prefix}table-striped-color: #{\$table-striped-color};
  --#{\$variable-prefix}table-striped-bg: #{\$table-striped-bg};
  --#{\$variable-prefix}table-active-color: #{\$table-active-color};
  --#{\$variable-prefix}table-active-bg: #{\$table-active-bg};
  --#{\$variable-prefix}table-hover-color: #{\$table-hover-color};
  --#{\$variable-prefix}table-hover-bg: #{\$table-hover-bg};

  width: 100%;
  margin-bottom: \$spacer;
  color: \$table-color;
  vertical-align: \$table-cell-vertical-align;
  border-color: \$table-border-color;

  // Target th & td
  // We need the child combinator to prevent styles leaking to nested tables which doesn't have a `.table` class.
  // We use the universal selectors here to simplify the selector (else we would need 6 different selectors).
  // Another advantage is that this generates less code and makes the selector less specific making it easier to override.
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    padding: \$table-cell-padding-y \$table-cell-padding-x;
    background-color: var(--#{\$variable-prefix}table-bg);
    border-bottom-width: \$table-border-width;
    box-shadow: inset 0 0 0 9999px var(--#{\$variable-prefix}table-accent-bg);
  }

  > tbody {
    vertical-align: inherit;
  }

  > thead {
    vertical-align: bottom;
  }

  // Highlight border color between thead, tbody and tfoot.
  > :not(:last-child) > :last-child > * {
    border-bottom-color: \$table-group-separator-color;
  }
}


//
// Change placement of captions with a class
//

.caption-top {
  caption-side: top;
}


//
// Condensed table w/ half padding
//

.table-sm {
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    padding: \$table-cell-padding-y-sm \$table-cell-padding-x-sm;
  }
}


// Border versions
//
// Add or remove borders all around the table and between all the columns.
//
// When borders are added on all sides of the cells, the corners can render odd when
// these borders do not have the same color or if they are semi-transparent.
// Therefor we add top and border bottoms to the `tr`s and left and right borders
// to the `td`s or `th`s

.table-bordered {
  > :not(caption) > * {
    border-width: \$table-border-width 0;

    // stylelint-disable-next-line selector-max-universal
    > * {
      border-width: 0 \$table-border-width;
    }
  }
}

.table-borderless {
  // stylelint-disable-next-line selector-max-universal
  > :not(caption) > * > * {
    border-bottom-width: 0;
  }
}

// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody > tr:nth-of-type(#{\$table-striped-order}) {
    --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-striped-bg);
    color: var(--#{\$variable-prefix}table-striped-color);
  }
}

// Active table
//
// The `.table-active` class can be added to highlight rows or cells

.table-active {
  --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-active-bg);
  color: var(--#{\$variable-prefix}table-active-color);
}

// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody > tr:hover {
    --#{\$variable-prefix}table-accent-bg: var(--#{\$variable-prefix}table-hover-bg);
    color: var(--#{\$variable-prefix}table-hover-color);
  }
}


// Table variants
//
// Table variants set the table cell backgrounds, border colors
// and the colors of the striped, hovered & active tables

@each \$color, \$value in \$table-variants {
  @include table-variant(\$color, \$value);
}

// Responsive tables
//
// Generate series of `.table-responsive-*` classes for configuring the screen
// size of where your table will overflow.

@each \$breakpoint in map-keys(\$grid-breakpoints) {
  \$infix: breakpoint-infix(\$breakpoint, \$grid-breakpoints);

  @include media-breakpoint-down(\$breakpoint) {
    .table-responsive#{\$infix} {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
}
", "scss/bootstrap/scss/_tables.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_tables.scss");
    }
}
