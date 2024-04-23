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

/* scss/bootstrap/scss/mixins/_grid.scss */
class __TwigTemplate_933300934a0981a798083e366d07755fd51063029badefec99f04bc11eb84ccb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_grid.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/mixins/_grid.scss"));

        // line 1
        echo "/// Grid system
//
// Generate semantic grid columns with these mixins.

@mixin make-row(\$gutter: \$grid-gutter-width) {
  --#{\$variable-prefix}gutter-x: #{\$gutter};
  --#{\$variable-prefix}gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(var(--#{\$variable-prefix}gutter-y) * -1); // stylelint-disable-line function-disallowed-list
  margin-right: calc(var(--#{\$variable-prefix}gutter-x) / -2); // stylelint-disable-line function-disallowed-list
  margin-left: calc(var(--#{\$variable-prefix}gutter-x) / -2); // stylelint-disable-line function-disallowed-list
}

@mixin make-col-ready(\$gutter: \$grid-gutter-width) {
  // Add box sizing if only the grid is loaded
  box-sizing: if(variable-exists(include-column-box-sizing) and \$include-column-box-sizing, border-box, null);
  // Prevent columns from becoming too narrow when at smaller grid tiers by
  // always setting `width: 100%;`. This works because we set the width
  // later on to override this initial width.
  flex-shrink: 0;
  width: 100%;
  max-width: 100%; // Prevent `.col-auto`, `.col` (& responsive variants) from breaking out the grid
  padding-right: calc(var(--#{\$variable-prefix}gutter-x) / 2); // stylelint-disable-line function-disallowed-list
  padding-left: calc(var(--#{\$variable-prefix}gutter-x) / 2); // stylelint-disable-line function-disallowed-list
  margin-top: var(--#{\$variable-prefix}gutter-y);
}

@mixin make-col(\$size: false, \$columns: \$grid-columns) {
  @if \$size {
    flex: 0 0 auto;
    width: percentage(\$size / \$columns);
  } @else {
    flex: 1 1 0;
    max-width: 100%;
  }
}

@mixin make-col-auto() {
  flex: 0 0 auto;
  width: auto;
}

@mixin make-col-offset(\$size, \$columns: \$grid-columns) {
  \$num: \$size / \$columns;
  margin-left: if(\$num == 0, 0, percentage(\$num));
}

// Row columns
//
// Specify on a parent element(e.g., .row) to force immediate children into NN
// numberof columns. Supports wrapping to new lines, but does not do a Masonry
// style grid.
@mixin row-cols(\$count) {
  > * {
    flex: 0 0 auto;
    width: 100% / \$count;
  }
}

// Framework grid generation
//
// Used only by Bootstrap to generate the correct number of grid classes given
// any value of `\$grid-columns`.

@mixin make-grid-columns(\$columns: \$grid-columns, \$gutter: \$grid-gutter-width, \$breakpoints: \$grid-breakpoints) {
  @each \$breakpoint in map-keys(\$breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$breakpoints);

    @include media-breakpoint-up(\$breakpoint, \$breakpoints) {
      // Provide basic `.col-{bp}` classes for equal-width flexbox columns
      .col#{\$infix} {
        flex: 1 0 0%; // Flexbugs #4: https://github.com/philipwalton/flexbugs#flexbug-4
      }

      .row-cols#{\$infix}-auto > * {
        @include make-col-auto();
      }

      @if \$grid-row-columns > 0 {
        @for \$i from 1 through \$grid-row-columns {
          .row-cols#{\$infix}-#{\$i} {
            @include row-cols(\$i);
          }
        }
      }

      .col#{\$infix}-auto {
        @include make-col-auto();
      }

      @if \$columns > 0 {
        @for \$i from 1 through \$columns {
          .col#{\$infix}-#{\$i} {
            @include make-col(\$i, \$columns);
          }
        }

        // `\$columns - 1` because offsetting by the width of an entire row isn't possible
        @for \$i from 0 through (\$columns - 1) {
          @if not (\$infix == \"\" and \$i == 0) { // Avoid emitting useless .offset-0
            .offset#{\$infix}-#{\$i} {
              @include make-col-offset(\$i, \$columns);
            }
          }
        }
      }

      // Gutters
      //
      // Make use of `.g-*`, `.gx-*` or `.gy-*` utilities to change spacing between the columns.
      @each \$key, \$value in \$gutters {
        .g#{\$infix}-#{\$key},
        .gx#{\$infix}-#{\$key} {
          --#{\$variable-prefix}gutter-x: #{\$value};
        }

        .g#{\$infix}-#{\$key},
        .gy#{\$infix}-#{\$key} {
          --#{\$variable-prefix}gutter-y: #{\$value};
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
        return "scss/bootstrap/scss/mixins/_grid.scss";
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
        return new Source("/// Grid system
//
// Generate semantic grid columns with these mixins.

@mixin make-row(\$gutter: \$grid-gutter-width) {
  --#{\$variable-prefix}gutter-x: #{\$gutter};
  --#{\$variable-prefix}gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(var(--#{\$variable-prefix}gutter-y) * -1); // stylelint-disable-line function-disallowed-list
  margin-right: calc(var(--#{\$variable-prefix}gutter-x) / -2); // stylelint-disable-line function-disallowed-list
  margin-left: calc(var(--#{\$variable-prefix}gutter-x) / -2); // stylelint-disable-line function-disallowed-list
}

@mixin make-col-ready(\$gutter: \$grid-gutter-width) {
  // Add box sizing if only the grid is loaded
  box-sizing: if(variable-exists(include-column-box-sizing) and \$include-column-box-sizing, border-box, null);
  // Prevent columns from becoming too narrow when at smaller grid tiers by
  // always setting `width: 100%;`. This works because we set the width
  // later on to override this initial width.
  flex-shrink: 0;
  width: 100%;
  max-width: 100%; // Prevent `.col-auto`, `.col` (& responsive variants) from breaking out the grid
  padding-right: calc(var(--#{\$variable-prefix}gutter-x) / 2); // stylelint-disable-line function-disallowed-list
  padding-left: calc(var(--#{\$variable-prefix}gutter-x) / 2); // stylelint-disable-line function-disallowed-list
  margin-top: var(--#{\$variable-prefix}gutter-y);
}

@mixin make-col(\$size: false, \$columns: \$grid-columns) {
  @if \$size {
    flex: 0 0 auto;
    width: percentage(\$size / \$columns);
  } @else {
    flex: 1 1 0;
    max-width: 100%;
  }
}

@mixin make-col-auto() {
  flex: 0 0 auto;
  width: auto;
}

@mixin make-col-offset(\$size, \$columns: \$grid-columns) {
  \$num: \$size / \$columns;
  margin-left: if(\$num == 0, 0, percentage(\$num));
}

// Row columns
//
// Specify on a parent element(e.g., .row) to force immediate children into NN
// numberof columns. Supports wrapping to new lines, but does not do a Masonry
// style grid.
@mixin row-cols(\$count) {
  > * {
    flex: 0 0 auto;
    width: 100% / \$count;
  }
}

// Framework grid generation
//
// Used only by Bootstrap to generate the correct number of grid classes given
// any value of `\$grid-columns`.

@mixin make-grid-columns(\$columns: \$grid-columns, \$gutter: \$grid-gutter-width, \$breakpoints: \$grid-breakpoints) {
  @each \$breakpoint in map-keys(\$breakpoints) {
    \$infix: breakpoint-infix(\$breakpoint, \$breakpoints);

    @include media-breakpoint-up(\$breakpoint, \$breakpoints) {
      // Provide basic `.col-{bp}` classes for equal-width flexbox columns
      .col#{\$infix} {
        flex: 1 0 0%; // Flexbugs #4: https://github.com/philipwalton/flexbugs#flexbug-4
      }

      .row-cols#{\$infix}-auto > * {
        @include make-col-auto();
      }

      @if \$grid-row-columns > 0 {
        @for \$i from 1 through \$grid-row-columns {
          .row-cols#{\$infix}-#{\$i} {
            @include row-cols(\$i);
          }
        }
      }

      .col#{\$infix}-auto {
        @include make-col-auto();
      }

      @if \$columns > 0 {
        @for \$i from 1 through \$columns {
          .col#{\$infix}-#{\$i} {
            @include make-col(\$i, \$columns);
          }
        }

        // `\$columns - 1` because offsetting by the width of an entire row isn't possible
        @for \$i from 0 through (\$columns - 1) {
          @if not (\$infix == \"\" and \$i == 0) { // Avoid emitting useless .offset-0
            .offset#{\$infix}-#{\$i} {
              @include make-col-offset(\$i, \$columns);
            }
          }
        }
      }

      // Gutters
      //
      // Make use of `.g-*`, `.gx-*` or `.gy-*` utilities to change spacing between the columns.
      @each \$key, \$value in \$gutters {
        .g#{\$infix}-#{\$key},
        .gx#{\$infix}-#{\$key} {
          --#{\$variable-prefix}gutter-x: #{\$value};
        }

        .g#{\$infix}-#{\$key},
        .gy#{\$infix}-#{\$key} {
          --#{\$variable-prefix}gutter-y: #{\$value};
        }
      }
    }
  }
}
", "scss/bootstrap/scss/mixins/_grid.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\mixins\\_grid.scss");
    }
}
