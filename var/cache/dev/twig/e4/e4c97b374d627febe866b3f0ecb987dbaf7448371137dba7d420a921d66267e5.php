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

/* scss/bootstrap/scss/_variables.scss */
class __TwigTemplate_95827112c4d3d8593604772193006a9760ed260b360b92c26af8e10ec9b1a1e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_variables.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scss/bootstrap/scss/_variables.scss"));

        // line 1
        echo "// Variables
//
// Variables should follow the `\$component-state-property-size` formula for
// consistent naming. Ex: \$nav-link-disabled-color and \$modal-content-box-shadow-xs.

// Color system

// scss-docs-start gray-color-variables
\$white:    #fff !default;
\$gray-100: #f8f9fa !default;
\$gray-200: #e9ecef !default;
\$gray-300: #dee2e6 !default;
\$gray-400: #ced4da !default;
\$gray-500: #adb5bd !default;
\$gray-600: #6c757d !default;
\$gray-700: #495057 !default;
\$gray-800: #343a40 !default;
\$gray-900: #212529 !default;
\$black:    #000 !default;
// scss-docs-end gray-color-variables

// fusv-disable
// scss-docs-start gray-colors-map
\$grays: (
  \"100\": \$gray-100,
  \"200\": \$gray-200,
  \"300\": \$gray-300,
  \"400\": \$gray-400,
  \"500\": \$gray-500,
  \"600\": \$gray-600,
  \"700\": \$gray-700,
  \"800\": \$gray-800,
  \"900\": \$gray-900
) !default;
// scss-docs-end gray-colors-map
// fusv-enable

// scss-docs-start color-variables
\$blue:    #0d6efd !default;
\$indigo:  #6610f2 !default;
\$purple:  #6f42c1 !default;
\$pink:    #d63384 !default;
\$red:     #dc3545 !default;
\$orange:  #fd7e14 !default;
\$yellow:  #ffc107 !default;
\$green:   #198754 !default;
\$teal:    #20c997 !default;
\$cyan:    #0dcaf0 !default;
// scss-docs-end color-variables

// scss-docs-start colors-map
\$colors: (
  \"blue\":       \$blue,
  \"indigo\":     \$indigo,
  \"purple\":     \$purple,
  \"pink\":       \$pink,
  \"red\":        \$red,
  \"orange\":     \$orange,
  \"yellow\":     \$yellow,
  \"green\":      \$green,
  \"teal\":       \$teal,
  \"cyan\":       \$cyan,
  \"white\":      \$white,
  \"gray\":       \$gray-600,
  \"gray-dark\":  \$gray-800
) !default;
// scss-docs-end colors-map

// scss-docs-start theme-color-variables
\$primary:       \$blue !default;
\$secondary:     \$gray-600 !default;
\$success:       \$green !default;
\$info:          \$cyan !default;
\$warning:       \$yellow !default;
\$danger:        \$red !default;
\$light:         \$gray-100 !default;
\$dark:          \$gray-900 !default;
// scss-docs-end theme-color-variables

// scss-docs-start theme-colors-map
\$theme-colors: (
  \"primary\":    \$primary,
  \"secondary\":  \$secondary,
  \"success\":    \$success,
  \"info\":       \$info,
  \"warning\":    \$warning,
  \"danger\":     \$danger,
  \"light\":      \$light,
  \"dark\":       \$dark
) !default;
// scss-docs-end theme-colors-map

// The contrast ratio to reach against white, to determine if color changes from \"light\" to \"dark\". Acceptable values for WCAG 2.0 are 3, 4.5 and 7.
// See https://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast
\$min-contrast-ratio:   4.5 !default;

// Customize the light and dark text colors for use in our color contrast function.
\$color-contrast-dark:      \$black !default;
\$color-contrast-light:     \$white !default;

// fusv-disable
\$blue-100: tint-color(\$blue, 80%) !default;
\$blue-200: tint-color(\$blue, 60%) !default;
\$blue-300: tint-color(\$blue, 40%) !default;
\$blue-400: tint-color(\$blue, 20%) !default;
\$blue-500: \$blue !default;
\$blue-600: shade-color(\$blue, 20%) !default;
\$blue-700: shade-color(\$blue, 40%) !default;
\$blue-800: shade-color(\$blue, 60%) !default;
\$blue-900: shade-color(\$blue, 80%) !default;

\$indigo-100: tint-color(\$indigo, 80%) !default;
\$indigo-200: tint-color(\$indigo, 60%) !default;
\$indigo-300: tint-color(\$indigo, 40%) !default;
\$indigo-400: tint-color(\$indigo, 20%) !default;
\$indigo-500: \$indigo !default;
\$indigo-600: shade-color(\$indigo, 20%) !default;
\$indigo-700: shade-color(\$indigo, 40%) !default;
\$indigo-800: shade-color(\$indigo, 60%) !default;
\$indigo-900: shade-color(\$indigo, 80%) !default;

\$purple-100: tint-color(\$purple, 80%) !default;
\$purple-200: tint-color(\$purple, 60%) !default;
\$purple-300: tint-color(\$purple, 40%) !default;
\$purple-400: tint-color(\$purple, 20%) !default;
\$purple-500: \$purple !default;
\$purple-600: shade-color(\$purple, 20%) !default;
\$purple-700: shade-color(\$purple, 40%) !default;
\$purple-800: shade-color(\$purple, 60%) !default;
\$purple-900: shade-color(\$purple, 80%) !default;

\$pink-100: tint-color(\$pink, 80%) !default;
\$pink-200: tint-color(\$pink, 60%) !default;
\$pink-300: tint-color(\$pink, 40%) !default;
\$pink-400: tint-color(\$pink, 20%) !default;
\$pink-500: \$pink !default;
\$pink-600: shade-color(\$pink, 20%) !default;
\$pink-700: shade-color(\$pink, 40%) !default;
\$pink-800: shade-color(\$pink, 60%) !default;
\$pink-900: shade-color(\$pink, 80%) !default;

\$red-100: tint-color(\$red, 80%) !default;
\$red-200: tint-color(\$red, 60%) !default;
\$red-300: tint-color(\$red, 40%) !default;
\$red-400: tint-color(\$red, 20%) !default;
\$red-500: \$red !default;
\$red-600: shade-color(\$red, 20%) !default;
\$red-700: shade-color(\$red, 40%) !default;
\$red-800: shade-color(\$red, 60%) !default;
\$red-900: shade-color(\$red, 80%) !default;

\$orange-100: tint-color(\$orange, 80%) !default;
\$orange-200: tint-color(\$orange, 60%) !default;
\$orange-300: tint-color(\$orange, 40%) !default;
\$orange-400: tint-color(\$orange, 20%) !default;
\$orange-500: \$orange !default;
\$orange-600: shade-color(\$orange, 20%) !default;
\$orange-700: shade-color(\$orange, 40%) !default;
\$orange-800: shade-color(\$orange, 60%) !default;
\$orange-900: shade-color(\$orange, 80%) !default;

\$yellow-100: tint-color(\$yellow, 80%) !default;
\$yellow-200: tint-color(\$yellow, 60%) !default;
\$yellow-300: tint-color(\$yellow, 40%) !default;
\$yellow-400: tint-color(\$yellow, 20%) !default;
\$yellow-500: \$yellow !default;
\$yellow-600: shade-color(\$yellow, 20%) !default;
\$yellow-700: shade-color(\$yellow, 40%) !default;
\$yellow-800: shade-color(\$yellow, 60%) !default;
\$yellow-900: shade-color(\$yellow, 80%) !default;

\$green-100: tint-color(\$green, 80%) !default;
\$green-200: tint-color(\$green, 60%) !default;
\$green-300: tint-color(\$green, 40%) !default;
\$green-400: tint-color(\$green, 20%) !default;
\$green-500: \$green !default;
\$green-600: shade-color(\$green, 20%) !default;
\$green-700: shade-color(\$green, 40%) !default;
\$green-800: shade-color(\$green, 60%) !default;
\$green-900: shade-color(\$green, 80%) !default;

\$teal-100: tint-color(\$teal, 80%) !default;
\$teal-200: tint-color(\$teal, 60%) !default;
\$teal-300: tint-color(\$teal, 40%) !default;
\$teal-400: tint-color(\$teal, 20%) !default;
\$teal-500: \$teal !default;
\$teal-600: shade-color(\$teal, 20%) !default;
\$teal-700: shade-color(\$teal, 40%) !default;
\$teal-800: shade-color(\$teal, 60%) !default;
\$teal-900: shade-color(\$teal, 80%) !default;

\$cyan-100: tint-color(\$cyan, 80%) !default;
\$cyan-200: tint-color(\$cyan, 60%) !default;
\$cyan-300: tint-color(\$cyan, 40%) !default;
\$cyan-400: tint-color(\$cyan, 20%) !default;
\$cyan-500: \$cyan !default;
\$cyan-600: shade-color(\$cyan, 20%) !default;
\$cyan-700: shade-color(\$cyan, 40%) !default;
\$cyan-800: shade-color(\$cyan, 60%) !default;
\$cyan-900: shade-color(\$cyan, 80%) !default;
// fusv-enable

// Characters which are escaped by the escape-svg function
\$escaped-characters: (
  (\"<\", \"%3c\"),
  (\">\", \"%3e\"),
  (\"#\", \"%23\"),
  (\"(\", \"%28\"),
  (\")\", \"%29\"),
) !default;

// Options
//
// Quickly modify global styling by enabling or disabling optional features.

\$enable-caret:                true !default;
\$enable-rounded:              true !default;
\$enable-shadows:              false !default;
\$enable-gradients:            false !default;
\$enable-transitions:          true !default;
\$enable-reduced-motion:       true !default;
\$enable-smooth-scroll:        true !default;
\$enable-grid-classes:         true !default;
\$enable-button-pointers:      true !default;
\$enable-rfs:                  true !default;
\$enable-validation-icons:     true !default;
\$enable-negative-margins:     false !default;
\$enable-deprecation-messages: true !default;
\$enable-important-utilities:  true !default;

// Prefix for :root CSS variables

\$variable-prefix:             bs- !default;

// Gradient
//
// The gradient which is added to components if `\$enable-gradients` is `true`
// This gradient is also added to elements with `.bg-gradient`
// scss-docs-start variable-gradient
\$gradient: linear-gradient(180deg, rgba(\$white, .15), rgba(\$white, 0)) !default;
// scss-docs-end variable-gradient

// Spacing
//
// Control the default styling of most Bootstrap elements by modifying these
// variables. Mostly focused on spacing.
// You can add more entries to the \$spacers map, should you need more variation.

// scss-docs-start spacer-variables-maps
\$spacer: 1rem !default;
\$spacers: (
  0: 0,
  1: \$spacer / 4,
  2: \$spacer / 2,
  3: \$spacer,
  4: \$spacer * 1.5,
  5: \$spacer * 3,
) !default;

\$negative-spacers: if(\$enable-negative-margins, negativify-map(\$spacers), null) !default;
// scss-docs-end spacer-variables-maps

// Position
//
// Define the edge positioning anchors of the position utilities.

// scss-docs-start position-map
\$position-values: (
  0: 0,
  50: 50%,
  100: 100%
) !default;
// scss-docs-end position-map

// Body
//
// Settings for the `<body>` element.

\$body-bg:                   \$white !default;
\$body-color:                \$gray-900 !default;
\$body-text-align:           null !default;


// Links
//
// Style anchor elements.

\$link-color:                              \$primary !default;
\$link-decoration:                         underline !default;
\$link-shade-percentage:                   20% !default;
\$link-hover-color:                        shift-color(\$link-color, \$link-shade-percentage) !default;
\$link-hover-decoration:                   null !default;

\$stretched-link-pseudo-element:           after !default;
\$stretched-link-z-index:                  1 !default;

// Paragraphs
//
// Style p element.

\$paragraph-margin-bottom:   1rem !default;


// Grid breakpoints
//
// Define the minimum dimensions at which your layout will change,
// adapting to different screen sizes, for use in media queries.

// scss-docs-start grid-breakpoints
\$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
) !default;
// scss-docs-end grid-breakpoints

@include _assert-ascending(\$grid-breakpoints, \"\$grid-breakpoints\");
@include _assert-starts-at-zero(\$grid-breakpoints, \"\$grid-breakpoints\");


// Grid containers
//
// Define the maximum width of `.container` for different screen sizes.

// scss-docs-start container-max-widths
\$container-max-widths: (
  sm: 540px,
  md: 720px,
  lg: 960px,
  xl: 1140px,
  xxl: 1320px
) !default;
// scss-docs-end container-max-widths

@include _assert-ascending(\$container-max-widths, \"\$container-max-widths\");


// Grid columns
//
// Set the number of columns and specify the width of the gutters.

\$grid-columns:                12 !default;
\$grid-gutter-width:           1.5rem !default;
\$grid-row-columns:            6 !default;

\$gutters: \$spacers !default;

// Container padding

\$container-padding-x: \$grid-gutter-width / 2 !default;


// Components
//
// Define common padding and border radius sizes and more.

// scss-docs-start border-variables
\$border-width:                1px !default;
\$border-widths: (
  1: 1px,
  2: 2px,
  3: 3px,
  4: 4px,
  5: 5px
) !default;

\$border-color:                \$gray-300 !default;
// scss-docs-end border-variables

// scss-docs-start border-radius-variables
\$border-radius:               .25rem !default;
\$border-radius-sm:            .2rem !default;
\$border-radius-lg:            .3rem !default;
\$border-radius-pill:          50rem !default;
// scss-docs-end border-radius-variables

// scss-docs-start box-shadow-variables
\$box-shadow:                  0 .5rem 1rem rgba(\$black, .15) !default;
\$box-shadow-sm:               0 .125rem .25rem rgba(\$black, .075) !default;
\$box-shadow-lg:               0 1rem 3rem rgba(\$black, .175) !default;
\$box-shadow-inset:            inset 0 1px 2px rgba(\$black, .075) !default;
// scss-docs-end box-shadow-variables

\$component-active-color:      \$white !default;
\$component-active-bg:         \$primary !default;

// scss-docs-start caret-variables
\$caret-width:                 .3em !default;
\$caret-vertical-align:        \$caret-width * .85 !default;
\$caret-spacing:               \$caret-width * .85 !default;
// scss-docs-end caret-variables

\$transition-base:             all .2s ease-in-out !default;
\$transition-fade:             opacity .15s linear !default;
// scss-docs-start collapse-transition
\$transition-collapse:         height .35s ease !default;
// scss-docs-end collapse-transition

// stylelint-disable function-disallowed-list
// scss-docs-start aspect-ratios
\$aspect-ratios: (
  \"1x1\": 100%,
  \"4x3\": calc(3 / 4 * 100%),
  \"16x9\": calc(9 / 16 * 100%),
  \"21x9\": calc(9 / 21 * 100%)
) !default;
// scss-docs-end aspect-ratios
// stylelint-enable function-disallowed-list

// Typography
//
// Font, line-height, and color for body text, headings, and more.

// scss-docs-start font-variables
// stylelint-disable value-keyword-case
\$font-family-sans-serif:      system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" !default;
\$font-family-monospace:       SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace !default;
// stylelint-enable value-keyword-case
\$font-family-base:            var(--#{\$variable-prefix}font-sans-serif) !default;
\$font-family-code:            var(--#{\$variable-prefix}font-monospace) !default;

// \$font-size-root effects the value of `rem`, which is used for as well font sizes, paddings and margins
// \$font-size-base effects the font size of the body text
\$font-size-root:              null !default;
\$font-size-base:              1rem !default; // Assumes the browser default, typically `16px`
\$font-size-sm:                \$font-size-base * .875 !default;
\$font-size-lg:                \$font-size-base * 1.25 !default;

\$font-weight-lighter:         lighter !default;
\$font-weight-light:           300 !default;
\$font-weight-normal:          400 !default;
\$font-weight-bold:            700 !default;
\$font-weight-bolder:          bolder !default;

\$font-weight-base:            \$font-weight-normal !default;

\$line-height-base:            1.5 !default;
\$line-height-sm:              1.25 !default;
\$line-height-lg:              2 !default;

\$h1-font-size:                \$font-size-base * 2.5 !default;
\$h2-font-size:                \$font-size-base * 2 !default;
\$h3-font-size:                \$font-size-base * 1.75 !default;
\$h4-font-size:                \$font-size-base * 1.5 !default;
\$h5-font-size:                \$font-size-base * 1.25 !default;
\$h6-font-size:                \$font-size-base !default;
// scss-docs-end font-variables

// scss-docs-start font-sizes
\$font-sizes: (
  1: \$h1-font-size,
  2: \$h2-font-size,
  3: \$h3-font-size,
  4: \$h4-font-size,
  5: \$h5-font-size,
  6: \$h6-font-size
) !default;
// scss-docs-end font-sizes

// scss-docs-start headings-variables
\$headings-margin-bottom:      \$spacer / 2 !default;
\$headings-font-family:        null !default;
\$headings-font-style:         null !default;
\$headings-font-weight:        500 !default;
\$headings-line-height:        1.2 !default;
\$headings-color:              null !default;
// scss-docs-end headings-variables

// scss-docs-start display-headings
\$display-font-sizes: (
  1: 5rem,
  2: 4.5rem,
  3: 4rem,
  4: 3.5rem,
  5: 3rem,
  6: 2.5rem
) !default;

\$display-font-weight: 300 !default;
\$display-line-height: \$headings-line-height !default;
// scss-docs-end display-headings

// scss-docs-start type-variables
\$lead-font-size:              \$font-size-base * 1.25 !default;
\$lead-font-weight:            300 !default;

\$small-font-size:             .875em !default;

\$sub-sup-font-size:           .75em !default;

\$text-muted:                  \$gray-600 !default;

\$initialism-font-size:        \$small-font-size !default;

\$blockquote-margin-y:         \$spacer !default;
\$blockquote-font-size:        \$font-size-base * 1.25 !default;
\$blockquote-footer-color:     \$gray-600 !default;
\$blockquote-footer-font-size: \$small-font-size !default;

\$hr-margin-y:                 \$spacer !default;
\$hr-color:                    inherit !default;
\$hr-height:                   \$border-width !default;
\$hr-opacity:                  .25 !default;

\$legend-margin-bottom:        .5rem !default;
\$legend-font-size:            1.5rem !default;
\$legend-font-weight:          null !default;

\$mark-padding:                .2em !default;

\$dt-font-weight:              \$font-weight-bold !default;

\$nested-kbd-font-weight:      \$font-weight-bold !default;

\$list-inline-padding:         .5rem !default;

\$mark-bg:                     #fcf8e3 !default;
// scss-docs-end type-variables


// Tables
//
// Customizes the `.table` component with basic values, each used across all table variations.

// scss-docs-start table-variables
\$table-cell-padding-y:        .5rem !default;
\$table-cell-padding-x:        .5rem !default;
\$table-cell-padding-y-sm:     .25rem !default;
\$table-cell-padding-x-sm:     .25rem !default;

\$table-cell-vertical-align:   top !default;

\$table-color:                 \$body-color !default;
\$table-bg:                    transparent !default;

\$table-th-font-weight:        null !default;

\$table-striped-color:         \$table-color !default;
\$table-striped-bg-factor:     .05 !default;
\$table-striped-bg:            rgba(\$black, \$table-striped-bg-factor) !default;

\$table-active-color:          \$table-color !default;
\$table-active-bg-factor:      .1 !default;
\$table-active-bg:             rgba(\$black, \$table-active-bg-factor) !default;

\$table-hover-color:           \$table-color !default;
\$table-hover-bg-factor:       .075 !default;
\$table-hover-bg:              rgba(\$black, \$table-hover-bg-factor) !default;

\$table-border-factor:         .1 !default;
\$table-border-width:          \$border-width !default;
\$table-border-color:          \$border-color !default;

\$table-striped-order:         odd !default;

\$table-group-separator-color: currentColor !default;

\$table-caption-color:         \$text-muted !default;

\$table-bg-scale:              -80% !default;
// scss-docs-end table-variables

// scss-docs-start table-loop
\$table-variants: (
  \"primary\":    shift-color(\$primary, \$table-bg-scale),
  \"secondary\":  shift-color(\$secondary, \$table-bg-scale),
  \"success\":    shift-color(\$success, \$table-bg-scale),
  \"info\":       shift-color(\$info, \$table-bg-scale),
  \"warning\":    shift-color(\$warning, \$table-bg-scale),
  \"danger\":     shift-color(\$danger, \$table-bg-scale),
  \"light\":      \$light,
  \"dark\":       \$dark,
) !default;
// scss-docs-end table-loop


// Buttons + Forms
//
// Shared variables that are reassigned to `\$input-` and `\$btn-` specific variables.

// scss-docs-start input-btn-variables
\$input-btn-padding-y:         .375rem !default;
\$input-btn-padding-x:         .75rem !default;
\$input-btn-font-family:       null !default;
\$input-btn-font-size:         \$font-size-base !default;
\$input-btn-line-height:       \$line-height-base !default;

\$input-btn-focus-width:         .25rem !default;
\$input-btn-focus-color-opacity: .25 !default;
\$input-btn-focus-color:         rgba(\$component-active-bg, \$input-btn-focus-color-opacity) !default;
\$input-btn-focus-blur:          0 !default;
\$input-btn-focus-box-shadow:    0 0 \$input-btn-focus-blur \$input-btn-focus-width \$input-btn-focus-color !default;

\$input-btn-padding-y-sm:      .25rem !default;
\$input-btn-padding-x-sm:      .5rem !default;
\$input-btn-font-size-sm:      \$font-size-sm !default;

\$input-btn-padding-y-lg:      .5rem !default;
\$input-btn-padding-x-lg:      1rem !default;
\$input-btn-font-size-lg:      \$font-size-lg !default;

\$input-btn-border-width:      \$border-width !default;
// scss-docs-end input-btn-variables


// Buttons
//
// For each of Bootstrap's buttons, define text, background, and border color.

// scss-docs-start btn-variables
\$btn-padding-y:               \$input-btn-padding-y !default;
\$btn-padding-x:               \$input-btn-padding-x !default;
\$btn-font-family:             \$input-btn-font-family !default;
\$btn-font-size:               \$input-btn-font-size !default;
\$btn-line-height:             \$input-btn-line-height !default;
\$btn-white-space:             null !default; // Set to `nowrap` to prevent text wrapping

\$btn-padding-y-sm:            \$input-btn-padding-y-sm !default;
\$btn-padding-x-sm:            \$input-btn-padding-x-sm !default;
\$btn-font-size-sm:            \$input-btn-font-size-sm !default;

\$btn-padding-y-lg:            \$input-btn-padding-y-lg !default;
\$btn-padding-x-lg:            \$input-btn-padding-x-lg !default;
\$btn-font-size-lg:            \$input-btn-font-size-lg !default;

\$btn-border-width:            \$input-btn-border-width !default;

\$btn-font-weight:             \$font-weight-normal !default;
\$btn-box-shadow:              inset 0 1px 0 rgba(\$white, .15), 0 1px 1px rgba(\$black, .075) !default;
\$btn-focus-width:             \$input-btn-focus-width !default;
\$btn-focus-box-shadow:        \$input-btn-focus-box-shadow !default;
\$btn-disabled-opacity:        .65 !default;
\$btn-active-box-shadow:       inset 0 3px 5px rgba(\$black, .125) !default;

\$btn-link-color:              \$link-color !default;
\$btn-link-hover-color:        \$link-hover-color !default;
\$btn-link-disabled-color:     \$gray-600 !default;

// Allows for customizing button radius independently from global border radius
\$btn-border-radius:           \$border-radius !default;
\$btn-border-radius-sm:        \$border-radius-sm !default;
\$btn-border-radius-lg:        \$border-radius-lg !default;

\$btn-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;

\$btn-hover-bg-shade-amount:       15% !default;
\$btn-hover-bg-tint-amount:        15% !default;
\$btn-hover-border-shade-amount:   20% !default;
\$btn-hover-border-tint-amount:    10% !default;
\$btn-active-bg-shade-amount:      20% !default;
\$btn-active-bg-tint-amount:       20% !default;
\$btn-active-border-shade-amount:  25% !default;
\$btn-active-border-tint-amount:   10% !default;
// scss-docs-end btn-variables


// Forms

// scss-docs-start form-text-variables
\$form-text-margin-top:                  .25rem !default;
\$form-text-font-size:                   \$small-font-size !default;
\$form-text-font-style:                  null !default;
\$form-text-font-weight:                 null !default;
\$form-text-color:                       \$text-muted !default;
// scss-docs-end form-text-variables

// scss-docs-start form-label-variables
\$form-label-margin-bottom:              .5rem !default;
\$form-label-font-size:                  null !default;
\$form-label-font-style:                 null !default;
\$form-label-font-weight:                null !default;
\$form-label-color:                      null !default;
// scss-docs-end form-label-variables

// scss-docs-start form-input-variables
\$input-padding-y:                       \$input-btn-padding-y !default;
\$input-padding-x:                       \$input-btn-padding-x !default;
\$input-font-family:                     \$input-btn-font-family !default;
\$input-font-size:                       \$input-btn-font-size !default;
\$input-font-weight:                     \$font-weight-base !default;
\$input-line-height:                     \$input-btn-line-height !default;

\$input-padding-y-sm:                    \$input-btn-padding-y-sm !default;
\$input-padding-x-sm:                    \$input-btn-padding-x-sm !default;
\$input-font-size-sm:                    \$input-btn-font-size-sm !default;

\$input-padding-y-lg:                    \$input-btn-padding-y-lg !default;
\$input-padding-x-lg:                    \$input-btn-padding-x-lg !default;
\$input-font-size-lg:                    \$input-btn-font-size-lg !default;

\$input-bg:                              \$white !default;
\$input-disabled-bg:                     \$gray-200 !default;
\$input-disabled-border-color:           null !default;

\$input-color:                           \$body-color !default;
\$input-border-color:                    \$gray-400 !default;
\$input-border-width:                    \$input-btn-border-width !default;
\$input-box-shadow:                      \$box-shadow-inset !default;

\$input-border-radius:                   \$border-radius !default;
\$input-border-radius-sm:                \$border-radius-sm !default;
\$input-border-radius-lg:                \$border-radius-lg !default;

\$input-focus-bg:                        \$input-bg !default;
\$input-focus-border-color:              tint-color(\$component-active-bg, 50%) !default;
\$input-focus-color:                     \$input-color !default;
\$input-focus-width:                     \$input-btn-focus-width !default;
\$input-focus-box-shadow:                \$input-btn-focus-box-shadow !default;

\$input-placeholder-color:               \$gray-600 !default;
\$input-plaintext-color:                 \$body-color !default;

\$input-height-border:                   \$input-border-width * 2 !default;

\$input-height-inner:                    add(\$input-line-height * 1em, \$input-padding-y * 2) !default;
\$input-height-inner-half:               add(\$input-line-height * .5em, \$input-padding-y) !default;
\$input-height-inner-quarter:            add(\$input-line-height * .25em, \$input-padding-y / 2) !default;

\$input-height:                          add(\$input-line-height * 1em, add(\$input-padding-y * 2, \$input-height-border, false)) !default;
\$input-height-sm:                       add(\$input-line-height * 1em, add(\$input-padding-y-sm * 2, \$input-height-border, false)) !default;
\$input-height-lg:                       add(\$input-line-height * 1em, add(\$input-padding-y-lg * 2, \$input-height-border, false)) !default;

\$input-transition:                      border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;
// scss-docs-end form-input-variables

// scss-docs-start form-check-variables
\$form-check-input-width:                  1em !default;
\$form-check-min-height:                   \$font-size-base * \$line-height-base !default;
\$form-check-padding-start:                \$form-check-input-width + .5em !default;
\$form-check-margin-bottom:                .125rem !default;
\$form-check-label-color:                  null !default;
\$form-check-label-cursor:                 null !default;
\$form-check-transition:                   null !default;

\$form-check-input-active-filter:          brightness(90%) !default;

\$form-check-input-bg:                     \$input-bg !default;
\$form-check-input-border:                 1px solid rgba(\$black, .25) !default;
\$form-check-input-border-radius:          .25em !default;
\$form-check-radio-border-radius:          50% !default;
\$form-check-input-focus-border:           \$input-focus-border-color !default;
\$form-check-input-focus-box-shadow:       \$input-btn-focus-box-shadow !default;

\$form-check-input-checked-color:          \$component-active-color !default;
\$form-check-input-checked-bg-color:       \$component-active-bg !default;
\$form-check-input-checked-border-color:   \$form-check-input-checked-bg-color !default;
\$form-check-input-checked-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='#{\$form-check-input-checked-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/></svg>\") !default;
\$form-check-radio-checked-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='2' fill='#{\$form-check-input-checked-color}'/></svg>\") !default;

\$form-check-input-indeterminate-color:          \$component-active-color !default;
\$form-check-input-indeterminate-bg-color:       \$component-active-bg !default;
\$form-check-input-indeterminate-border-color:   \$form-check-input-indeterminate-bg-color !default;
\$form-check-input-indeterminate-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='#{\$form-check-input-indeterminate-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/></svg>\") !default;

\$form-check-input-disabled-opacity:        .5 !default;
\$form-check-label-disabled-opacity:        \$form-check-input-disabled-opacity !default;
\$form-check-btn-check-disabled-opacity:    \$btn-disabled-opacity !default;

\$form-check-inline-margin-end:    1rem !default;
// scss-docs-end form-check-variables

// scss-docs-start form-switch-variables
\$form-switch-color:               rgba(0, 0, 0, .25) !default;
\$form-switch-width:               2em !default;
\$form-switch-padding-start:       \$form-switch-width + .5em !default;
\$form-switch-bg-image:            url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-color}'/></svg>\") !default;
\$form-switch-border-radius:       \$form-switch-width !default;
\$form-switch-transition:          background-position .15s ease-in-out !default;

\$form-switch-focus-color:         \$input-focus-border-color !default;
\$form-switch-focus-bg-image:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-focus-color}'/></svg>\") !default;

\$form-switch-checked-color:       \$component-active-color !default;
\$form-switch-checked-bg-image:    url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-checked-color}'/></svg>\") !default;
\$form-switch-checked-bg-position: right center !default;
// scss-docs-end form-switch-variables

// scss-docs-start input-group-variables
\$input-group-addon-padding-y:           \$input-padding-y !default;
\$input-group-addon-padding-x:           \$input-padding-x !default;
\$input-group-addon-font-weight:         \$input-font-weight !default;
\$input-group-addon-color:               \$input-color !default;
\$input-group-addon-bg:                  \$gray-200 !default;
\$input-group-addon-border-color:        \$input-border-color !default;
// scss-docs-end input-group-variables

// scss-docs-start form-select-variables
\$form-select-padding-y:             \$input-padding-y !default;
\$form-select-padding-x:             \$input-padding-x !default;
\$form-select-font-family:           \$input-font-family !default;
\$form-select-font-size:             \$input-font-size !default;
\$form-select-indicator-padding:     \$form-select-padding-x * 3 !default; // Extra padding for background-image
\$form-select-font-weight:           \$input-font-weight !default;
\$form-select-line-height:           \$input-line-height !default;
\$form-select-color:                 \$input-color !default;
\$form-select-bg:                    \$input-bg !default;
\$form-select-disabled-color:        null !default;
\$form-select-disabled-bg:           \$gray-200 !default;
\$form-select-disabled-border-color: \$input-disabled-border-color !default;
\$form-select-bg-position:           right \$form-select-padding-x center !default;
\$form-select-bg-size:               16px 12px !default; // In pixels because image dimensions
\$form-select-indicator-color:       \$gray-800 !default;
\$form-select-indicator:             url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path fill='none' stroke='#{\$form-select-indicator-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/></svg>\") !default;

\$form-select-feedback-icon-padding-end: \$form-select-padding-x * 2.5 + \$form-select-indicator-padding !default;
\$form-select-feedback-icon-position:    center right \$form-select-indicator-padding !default;
\$form-select-feedback-icon-size:        \$input-height-inner-half \$input-height-inner-half !default;

\$form-select-border-width:        \$input-border-width !default;
\$form-select-border-color:        \$input-border-color !default;
\$form-select-border-radius:       \$border-radius !default;
\$form-select-box-shadow:          \$box-shadow-inset !default;

\$form-select-focus-border-color:  \$input-focus-border-color !default;
\$form-select-focus-width:         \$input-focus-width !default;
\$form-select-focus-box-shadow:    0 0 0 \$form-select-focus-width \$input-btn-focus-color !default;

\$form-select-padding-y-sm:        \$input-padding-y-sm !default;
\$form-select-padding-x-sm:        \$input-padding-x-sm !default;
\$form-select-font-size-sm:        \$input-font-size-sm !default;

\$form-select-padding-y-lg:        \$input-padding-y-lg !default;
\$form-select-padding-x-lg:        \$input-padding-x-lg !default;
\$form-select-font-size-lg:        \$input-font-size-lg !default;
// scss-docs-end form-select-variables

// scss-docs-start form-range-variables
\$form-range-track-width:          100% !default;
\$form-range-track-height:         .5rem !default;
\$form-range-track-cursor:         pointer !default;
\$form-range-track-bg:             \$gray-300 !default;
\$form-range-track-border-radius:  1rem !default;
\$form-range-track-box-shadow:     \$box-shadow-inset !default;

\$form-range-thumb-width:                   1rem !default;
\$form-range-thumb-height:                  \$form-range-thumb-width !default;
\$form-range-thumb-bg:                      \$component-active-bg !default;
\$form-range-thumb-border:                  0 !default;
\$form-range-thumb-border-radius:           1rem !default;
\$form-range-thumb-box-shadow:              0 .1rem .25rem rgba(\$black, .1) !default;
\$form-range-thumb-focus-box-shadow:        0 0 0 1px \$body-bg, \$input-focus-box-shadow !default;
\$form-range-thumb-focus-box-shadow-width:  \$input-focus-width !default; // For focus box shadow issue in Edge
\$form-range-thumb-active-bg:               tint-color(\$component-active-bg, 70%) !default;
\$form-range-thumb-disabled-bg:             \$gray-500 !default;
\$form-range-thumb-transition:              background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;
// scss-docs-end form-range-variables

// scss-docs-start form-file-variables
\$form-file-button-color:          \$input-color !default;
\$form-file-button-bg:             \$input-group-addon-bg !default;
\$form-file-button-hover-bg:       shade-color(\$form-file-button-bg, 5%) !default;
// scss-docs-end form-file-variables

// scss-docs-start form-floating-variables
\$form-floating-height:            add(3.5rem, \$input-height-border) !default;
\$form-floating-padding-x:         \$input-padding-x !default;
\$form-floating-padding-y:         1rem !default;
\$form-floating-input-padding-t:   1.625rem !default;
\$form-floating-input-padding-b:   .625rem !default;
\$form-floating-label-opacity:     .65 !default;
\$form-floating-label-transform:   scale(.85) translateY(-.5rem) translateX(.15rem) !default;
\$form-floating-transition:        opacity .1s ease-in-out, transform .1s ease-in-out !default;
// scss-docs-end form-floating-variables

// Form validation

// scss-docs-start form-feedback-variables
\$form-feedback-margin-top:          \$form-text-margin-top !default;
\$form-feedback-font-size:           \$form-text-font-size !default;
\$form-feedback-font-style:          \$form-text-font-style !default;
\$form-feedback-valid-color:         \$success !default;
\$form-feedback-invalid-color:       \$danger !default;

\$form-feedback-icon-valid-color:    \$form-feedback-valid-color !default;
\$form-feedback-icon-valid:          url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'><path fill='#{\$form-feedback-icon-valid-color}' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/></svg>\") !default;
\$form-feedback-icon-invalid-color:  \$form-feedback-invalid-color !default;
\$form-feedback-icon-invalid:        url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='#{\$form-feedback-icon-invalid-color}'><circle cx='6' cy='6' r='4.5'/><path stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/><circle cx='6' cy='8.2' r='.6' fill='#{\$form-feedback-icon-invalid-color}' stroke='none'/></svg>\") !default;
// scss-docs-end form-feedback-variables

// scss-docs-start form-validation-states
\$form-validation-states: (
  \"valid\": (
    \"color\": \$form-feedback-valid-color,
    \"icon\": \$form-feedback-icon-valid
  ),
  \"invalid\": (
    \"color\": \$form-feedback-invalid-color,
    \"icon\": \$form-feedback-icon-invalid
  )
) !default;
// scss-docs-end form-validation-states

// Z-index master list
//
// Warning: Avoid customizing these values. They're used for a bird's eye view
// of components dependent on the z-axis and are designed to all work together.

// scss-docs-start zindex-stack
\$zindex-dropdown:                   1000 !default;
\$zindex-sticky:                     1020 !default;
\$zindex-fixed:                      1030 !default;
\$zindex-modal-backdrop:             1040 !default;
\$zindex-offcanvas:                  1050 !default;
\$zindex-modal:                      1060 !default;
\$zindex-popover:                    1070 !default;
\$zindex-tooltip:                    1080 !default;
// scss-docs-end zindex-stack


// Navs

// scss-docs-start nav-variables
\$nav-link-padding-y:                .5rem !default;
\$nav-link-padding-x:                1rem !default;
\$nav-link-font-size:                null !default;
\$nav-link-font-weight:              null !default;
\$nav-link-color:                    \$link-color !default;
\$nav-link-hover-color:              \$link-hover-color !default;
\$nav-link-transition:               color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out !default;
\$nav-link-disabled-color:           \$gray-600 !default;

\$nav-tabs-border-color:             \$gray-300 !default;
\$nav-tabs-border-width:             \$border-width !default;
\$nav-tabs-border-radius:            \$border-radius !default;
\$nav-tabs-link-hover-border-color:  \$gray-200 \$gray-200 \$nav-tabs-border-color !default;
\$nav-tabs-link-active-color:        \$gray-700 !default;
\$nav-tabs-link-active-bg:           \$body-bg !default;
\$nav-tabs-link-active-border-color: \$gray-300 \$gray-300 \$nav-tabs-link-active-bg !default;

\$nav-pills-border-radius:           \$border-radius !default;
\$nav-pills-link-active-color:       \$component-active-color !default;
\$nav-pills-link-active-bg:          \$component-active-bg !default;
// scss-docs-end nav-variables


// Navbar

// scss-docs-start navbar-variables
\$navbar-padding-y:                  \$spacer / 2 !default;
\$navbar-padding-x:                  null !default;

\$navbar-nav-link-padding-x:         .5rem !default;

\$navbar-brand-font-size:            \$font-size-lg !default;
// Compute the navbar-brand padding-y so the navbar-brand will have the same height as navbar-text and nav-link
\$nav-link-height:                   \$font-size-base * \$line-height-base + \$nav-link-padding-y * 2 !default;
\$navbar-brand-height:               \$navbar-brand-font-size * \$line-height-base !default;
\$navbar-brand-padding-y:            (\$nav-link-height - \$navbar-brand-height) / 2 !default;
\$navbar-brand-margin-end:           1rem !default;

\$navbar-toggler-padding-y:          .25rem !default;
\$navbar-toggler-padding-x:          .75rem !default;
\$navbar-toggler-font-size:          \$font-size-lg !default;
\$navbar-toggler-border-radius:      \$btn-border-radius !default;
\$navbar-toggler-focus-width:        \$btn-focus-width !default;
\$navbar-toggler-transition:         box-shadow .15s ease-in-out !default;
// scss-docs-end navbar-variables

// scss-docs-start navbar-theme-variables
\$navbar-dark-color:                 rgba(\$white, .55) !default;
\$navbar-dark-hover-color:           rgba(\$white, .75) !default;
\$navbar-dark-active-color:          \$white !default;
\$navbar-dark-disabled-color:        rgba(\$white, .25) !default;
\$navbar-dark-toggler-icon-bg:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{\$navbar-dark-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>\") !default;
\$navbar-dark-toggler-border-color:  rgba(\$white, .1) !default;

\$navbar-light-color:                rgba(\$black, .55) !default;
\$navbar-light-hover-color:          rgba(\$black, .7) !default;
\$navbar-light-active-color:         rgba(\$black, .9) !default;
\$navbar-light-disabled-color:       rgba(\$black, .3) !default;
\$navbar-light-toggler-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{\$navbar-light-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>\") !default;
\$navbar-light-toggler-border-color: rgba(\$black, .1) !default;

\$navbar-light-brand-color:                \$navbar-light-active-color !default;
\$navbar-light-brand-hover-color:          \$navbar-light-active-color !default;
\$navbar-dark-brand-color:                 \$navbar-dark-active-color !default;
\$navbar-dark-brand-hover-color:           \$navbar-dark-active-color !default;
// scss-docs-end navbar-theme-variables


// Dropdowns
//
// Dropdown menu container and contents.

// scss-docs-start dropdown-variables
\$dropdown-min-width:                10rem !default;
\$dropdown-padding-x:                0 !default;
\$dropdown-padding-y:                .5rem !default;
\$dropdown-spacer:                   .125rem !default;
\$dropdown-font-size:                \$font-size-base !default;
\$dropdown-color:                    \$body-color !default;
\$dropdown-bg:                       \$white !default;
\$dropdown-border-color:             rgba(\$black, .15) !default;
\$dropdown-border-radius:            \$border-radius !default;
\$dropdown-border-width:             \$border-width !default;
\$dropdown-inner-border-radius:      subtract(\$dropdown-border-radius, \$dropdown-border-width) !default;
\$dropdown-divider-bg:               \$dropdown-border-color !default;
\$dropdown-divider-margin-y:         \$spacer / 2 !default;
\$dropdown-box-shadow:               \$box-shadow !default;

\$dropdown-link-color:               \$gray-900 !default;
\$dropdown-link-hover-color:         shade-color(\$gray-900, 10%) !default;
\$dropdown-link-hover-bg:            \$gray-200 !default;

\$dropdown-link-active-color:        \$component-active-color !default;
\$dropdown-link-active-bg:           \$component-active-bg !default;

\$dropdown-link-disabled-color:      \$gray-500 !default;

\$dropdown-item-padding-y:           \$spacer / 4 !default;
\$dropdown-item-padding-x:           \$spacer !default;

\$dropdown-header-color:             \$gray-600 !default;
\$dropdown-header-padding:           \$dropdown-padding-y \$dropdown-item-padding-x !default;
// scss-docs-end dropdown-variables

// scss-docs-start dropdown-dark-variables
\$dropdown-dark-color:               \$gray-300 !default;
\$dropdown-dark-bg:                  \$gray-800 !default;
\$dropdown-dark-border-color:        \$dropdown-border-color !default;
\$dropdown-dark-divider-bg:          \$dropdown-divider-bg !default;
\$dropdown-dark-box-shadow:          null !default;
\$dropdown-dark-link-color:          \$dropdown-dark-color !default;
\$dropdown-dark-link-hover-color:    \$white !default;
\$dropdown-dark-link-hover-bg:       rgba(\$white, .15) !default;
\$dropdown-dark-link-active-color:   \$dropdown-link-active-color !default;
\$dropdown-dark-link-active-bg:      \$dropdown-link-active-bg !default;
\$dropdown-dark-link-disabled-color: \$gray-500 !default;
\$dropdown-dark-header-color:        \$gray-500 !default;
// scss-docs-end dropdown-dark-variables


// Pagination

// scss-docs-start pagination-variables
\$pagination-padding-y:              .375rem !default;
\$pagination-padding-x:              .75rem !default;
\$pagination-padding-y-sm:           .25rem !default;
\$pagination-padding-x-sm:           .5rem !default;
\$pagination-padding-y-lg:           .75rem !default;
\$pagination-padding-x-lg:           1.5rem !default;

\$pagination-color:                  \$link-color !default;
\$pagination-bg:                     \$white !default;
\$pagination-border-width:           \$border-width !default;
\$pagination-border-radius:          \$border-radius !default;
\$pagination-margin-start:           -\$pagination-border-width !default;
\$pagination-border-color:           \$gray-300 !default;

\$pagination-focus-color:            \$link-hover-color !default;
\$pagination-focus-bg:               \$gray-200 !default;
\$pagination-focus-box-shadow:       \$input-btn-focus-box-shadow !default;
\$pagination-focus-outline:          0 !default;

\$pagination-hover-color:            \$link-hover-color !default;
\$pagination-hover-bg:               \$gray-200 !default;
\$pagination-hover-border-color:     \$gray-300 !default;

\$pagination-active-color:           \$component-active-color !default;
\$pagination-active-bg:              \$component-active-bg !default;
\$pagination-active-border-color:    \$pagination-active-bg !default;

\$pagination-disabled-color:         \$gray-600 !default;
\$pagination-disabled-bg:            \$white !default;
\$pagination-disabled-border-color:  \$gray-300 !default;

\$pagination-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;

\$pagination-border-radius-sm:       \$border-radius-sm !default;
\$pagination-border-radius-lg:       \$border-radius-lg !default;
// scss-docs-end pagination-variables


// Cards

// scss-docs-start card-variables
\$card-spacer-y:                     \$spacer !default;
\$card-spacer-x:                     \$spacer !default;
\$card-title-spacer-y:               \$spacer / 2 !default;
\$card-border-width:                 \$border-width !default;
\$card-border-radius:                \$border-radius !default;
\$card-border-color:                 rgba(\$black, .125) !default;
\$card-inner-border-radius:          subtract(\$card-border-radius, \$card-border-width) !default;
\$card-cap-padding-y:                \$card-spacer-y / 2 !default;
\$card-cap-padding-x:                \$card-spacer-x !default;
\$card-cap-bg:                       rgba(\$black, .03) !default;
\$card-cap-color:                    null !default;
\$card-height:                       null !default;
\$card-color:                        null !default;
\$card-bg:                           \$white !default;
\$card-img-overlay-padding:          \$spacer !default;
\$card-group-margin:                 \$grid-gutter-width / 2 !default;
// scss-docs-end card-variables

// Accordion

// scss-docs-start accordion-variables
\$accordion-padding-y:                     1rem !default;
\$accordion-padding-x:                     1.25rem !default;
\$accordion-color:                         \$body-color !default;
\$accordion-bg:                            \$body-bg !default;
\$accordion-border-width:                  \$border-width !default;
\$accordion-border-color:                  rgba(\$black, .125) !default;
\$accordion-border-radius:                 \$border-radius !default;
\$accordion-inner-border-radius:           subtract(\$accordion-border-radius, \$accordion-border-width) !default;

\$accordion-body-padding-y:                \$accordion-padding-y !default;
\$accordion-body-padding-x:                \$accordion-padding-x !default;

\$accordion-button-padding-y:              \$accordion-padding-y !default;
\$accordion-button-padding-x:              \$accordion-padding-x !default;
\$accordion-button-color:                  \$accordion-color !default;
\$accordion-button-bg:                     \$accordion-bg !default;
\$accordion-transition:                    \$btn-transition, border-radius .15s ease !default;
\$accordion-button-active-bg:              tint-color(\$component-active-bg, 90%) !default;
\$accordion-button-active-color:           shade-color(\$primary, 10%) !default;

\$accordion-button-focus-border-color:     \$input-focus-border-color !default;
\$accordion-button-focus-box-shadow:       \$btn-focus-box-shadow !default;

\$accordion-icon-width:                    1.25rem !default;
\$accordion-icon-color:                    \$accordion-color !default;
\$accordion-icon-active-color:             \$accordion-button-active-color !default;
\$accordion-icon-transition:               transform .2s ease-in-out !default;
\$accordion-icon-transform:                rotate(-180deg) !default;

\$accordion-button-icon:         url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$accordion-icon-color}'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>\") !default;
\$accordion-button-active-icon:  url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$accordion-icon-active-color}'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>\") !default;
// scss-docs-end accordion-variables

// Tooltips

// scss-docs-start tooltip-variables
\$tooltip-font-size:                 \$font-size-sm !default;
\$tooltip-max-width:                 200px !default;
\$tooltip-color:                     \$white !default;
\$tooltip-bg:                        \$black !default;
\$tooltip-border-radius:             \$border-radius !default;
\$tooltip-opacity:                   .9 !default;
\$tooltip-padding-y:                 \$spacer / 4 !default;
\$tooltip-padding-x:                 \$spacer / 2 !default;
\$tooltip-margin:                    0 !default;

\$tooltip-arrow-width:               .8rem !default;
\$tooltip-arrow-height:              .4rem !default;
\$tooltip-arrow-color:               \$tooltip-bg !default;
// scss-docs-end tooltip-variables

// Form tooltips must come after regular tooltips
// scss-docs-start tooltip-feedback-variables
\$form-feedback-tooltip-padding-y:     \$tooltip-padding-y !default;
\$form-feedback-tooltip-padding-x:     \$tooltip-padding-x !default;
\$form-feedback-tooltip-font-size:     \$tooltip-font-size !default;
\$form-feedback-tooltip-line-height:   null !default;
\$form-feedback-tooltip-opacity:       \$tooltip-opacity !default;
\$form-feedback-tooltip-border-radius: \$tooltip-border-radius !default;
// scss-docs-start tooltip-feedback-variables


// Popovers

// scss-docs-start popover-variables
\$popover-font-size:                 \$font-size-sm !default;
\$popover-bg:                        \$white !default;
\$popover-max-width:                 276px !default;
\$popover-border-width:              \$border-width !default;
\$popover-border-color:              rgba(\$black, .2) !default;
\$popover-border-radius:             \$border-radius-lg !default;
\$popover-inner-border-radius:       subtract(\$popover-border-radius, \$popover-border-width) !default;
\$popover-box-shadow:                \$box-shadow !default;

\$popover-header-bg:                 shade-color(\$popover-bg, 6%) !default;
\$popover-header-color:              \$headings-color !default;
\$popover-header-padding-y:          .5rem !default;
\$popover-header-padding-x:          \$spacer !default;

\$popover-body-color:                \$body-color !default;
\$popover-body-padding-y:            \$spacer !default;
\$popover-body-padding-x:            \$spacer !default;

\$popover-arrow-width:               1rem !default;
\$popover-arrow-height:              .5rem !default;
\$popover-arrow-color:               \$popover-bg !default;

\$popover-arrow-outer-color:         fade-in(\$popover-border-color, .05) !default;
// scss-docs-end popover-variables


// Toasts

// scss-docs-start toast-variables
\$toast-max-width:                   350px !default;
\$toast-padding-x:                   .75rem !default;
\$toast-padding-y:                   .5rem !default;
\$toast-font-size:                   .875rem !default;
\$toast-color:                       null !default;
\$toast-background-color:            rgba(\$white, .85) !default;
\$toast-border-width:                1px !default;
\$toast-border-color:                rgba(0, 0, 0, .1) !default;
\$toast-border-radius:               \$border-radius !default;
\$toast-box-shadow:                  \$box-shadow !default;
\$toast-spacing:                     \$container-padding-x !default;

\$toast-header-color:                \$gray-600 !default;
\$toast-header-background-color:     rgba(\$white, .85) !default;
\$toast-header-border-color:         rgba(0, 0, 0, .05) !default;
// scss-docs-end toast-variables


// Badges

// scss-docs-start badge-variables
\$badge-font-size:                   .75em !default;
\$badge-font-weight:                 \$font-weight-bold !default;
\$badge-color:                       \$white !default;
\$badge-padding-y:                   .35em !default;
\$badge-padding-x:                   .65em !default;
\$badge-border-radius:               \$border-radius !default;
// scss-docs-end badge-variables


// Modals

// scss-docs-start modal-variables
\$modal-inner-padding:               \$spacer !default;

\$modal-footer-margin-between:       .5rem !default;

\$modal-dialog-margin:               .5rem !default;
\$modal-dialog-margin-y-sm-up:       1.75rem !default;

\$modal-title-line-height:           \$line-height-base !default;

\$modal-content-color:               null !default;
\$modal-content-bg:                  \$white !default;
\$modal-content-border-color:        rgba(\$black, .2) !default;
\$modal-content-border-width:        \$border-width !default;
\$modal-content-border-radius:       \$border-radius-lg !default;
\$modal-content-inner-border-radius: subtract(\$modal-content-border-radius, \$modal-content-border-width) !default;
\$modal-content-box-shadow-xs:       \$box-shadow-sm !default;
\$modal-content-box-shadow-sm-up:    \$box-shadow !default;

\$modal-backdrop-bg:                 \$black !default;
\$modal-backdrop-opacity:            .5 !default;
\$modal-header-border-color:         \$border-color !default;
\$modal-footer-border-color:         \$modal-header-border-color !default;
\$modal-header-border-width:         \$modal-content-border-width !default;
\$modal-footer-border-width:         \$modal-header-border-width !default;
\$modal-header-padding-y:            \$modal-inner-padding !default;
\$modal-header-padding-x:            \$modal-inner-padding !default;
\$modal-header-padding:              \$modal-header-padding-y \$modal-header-padding-x !default; // Keep this for backwards compatibility

\$modal-sm:                          300px !default;
\$modal-md:                          500px !default;
\$modal-lg:                          800px !default;
\$modal-xl:                          1140px !default;

\$modal-fade-transform:              translate(0, -50px) !default;
\$modal-show-transform:              none !default;
\$modal-transition:                  transform .3s ease-out !default;
\$modal-scale-transform:             scale(1.02) !default;
// scss-docs-end modal-variables


// Alerts
//
// Define alert colors, border radius, and padding.

// scss-docs-start alert-variables
\$alert-padding-y:               \$spacer !default;
\$alert-padding-x:               \$spacer !default;
\$alert-margin-bottom:           1rem !default;
\$alert-border-radius:           \$border-radius !default;
\$alert-link-font-weight:        \$font-weight-bold !default;
\$alert-border-width:            \$border-width !default;
\$alert-bg-scale:                -80% !default;
\$alert-border-scale:            -70% !default;
\$alert-color-scale:             40% !default;
\$alert-dismissible-padding-r:   \$alert-padding-x * 3 !default; // 3x covers width of x plus default padding on either side
// scss-docs-end alert-variables


// Progress bars

// scss-docs-start progress-variables
\$progress-height:                   1rem !default;
\$progress-font-size:                \$font-size-base * .75 !default;
\$progress-bg:                       \$gray-200 !default;
\$progress-border-radius:            \$border-radius !default;
\$progress-box-shadow:               \$box-shadow-inset !default;
\$progress-bar-color:                \$white !default;
\$progress-bar-bg:                   \$primary !default;
\$progress-bar-animation-timing:     1s linear infinite !default;
\$progress-bar-transition:           width .6s ease !default;
// scss-docs-end progress-variables


// List group

// scss-docs-start list-group-variables
\$list-group-color:                  \$gray-900 !default;
\$list-group-bg:                     \$white !default;
\$list-group-border-color:           rgba(\$black, .125) !default;
\$list-group-border-width:           \$border-width !default;
\$list-group-border-radius:          \$border-radius !default;

\$list-group-item-padding-y:         \$spacer / 2 !default;
\$list-group-item-padding-x:         \$spacer !default;
\$list-group-item-bg-scale:          -80% !default;
\$list-group-item-color-scale:       40% !default;

\$list-group-hover-bg:               \$gray-100 !default;
\$list-group-active-color:           \$component-active-color !default;
\$list-group-active-bg:              \$component-active-bg !default;
\$list-group-active-border-color:    \$list-group-active-bg !default;

\$list-group-disabled-color:         \$gray-600 !default;
\$list-group-disabled-bg:            \$list-group-bg !default;

\$list-group-action-color:           \$gray-700 !default;
\$list-group-action-hover-color:     \$list-group-action-color !default;

\$list-group-action-active-color:    \$body-color !default;
\$list-group-action-active-bg:       \$gray-200 !default;
// scss-docs-end list-group-variables


// Image thumbnails

// scss-docs-start thumbnail-variables
\$thumbnail-padding:                 .25rem !default;
\$thumbnail-bg:                      \$body-bg !default;
\$thumbnail-border-width:            \$border-width !default;
\$thumbnail-border-color:            \$gray-300 !default;
\$thumbnail-border-radius:           \$border-radius !default;
\$thumbnail-box-shadow:              \$box-shadow-sm !default;
// scss-docs-end thumbnail-variables


// Figures

// scss-docs-start figure-variables
\$figure-caption-font-size:          \$small-font-size !default;
\$figure-caption-color:              \$gray-600 !default;
// scss-docs-end figure-variables


// Breadcrumbs

// scss-docs-start breadcrumb-variables
\$breadcrumb-font-size:              null !default;
\$breadcrumb-padding-y:              0 !default;
\$breadcrumb-padding-x:              0 !default;
\$breadcrumb-item-padding-x:         .5rem !default;
\$breadcrumb-margin-bottom:          1rem !default;
\$breadcrumb-bg:                     null !default;
\$breadcrumb-divider-color:          \$gray-600 !default;
\$breadcrumb-active-color:           \$gray-600 !default;
\$breadcrumb-divider:                quote(\"/\") !default;
\$breadcrumb-divider-flipped:        \$breadcrumb-divider !default;
\$breadcrumb-border-radius:          null !default;
// scss-docs-end breadcrumb-variables

// Carousel

// scss-docs-start carousel-variables
\$carousel-control-color:             \$white !default;
\$carousel-control-width:             15% !default;
\$carousel-control-opacity:           .5 !default;
\$carousel-control-hover-opacity:     .9 !default;
\$carousel-control-transition:        opacity .15s ease !default;

\$carousel-indicator-width:           30px !default;
\$carousel-indicator-height:          3px !default;
\$carousel-indicator-hit-area-height: 10px !default;
\$carousel-indicator-spacer:          3px !default;
\$carousel-indicator-opacity:         .5 !default;
\$carousel-indicator-active-bg:       \$white !default;
\$carousel-indicator-active-opacity:  1 !default;
\$carousel-indicator-transition:      opacity .6s ease !default;

\$carousel-caption-width:             70% !default;
\$carousel-caption-color:             \$white !default;
\$carousel-caption-padding-y:         1.25rem !default;
\$carousel-caption-spacer:            1.25rem !default;

\$carousel-control-icon-width:        2rem !default;

\$carousel-control-prev-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$carousel-control-color}'><path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>\") !default;
\$carousel-control-next-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$carousel-control-color}'><path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/></svg>\") !default;

\$carousel-transition-duration:       .6s !default;
\$carousel-transition:                transform \$carousel-transition-duration ease-in-out !default; // Define transform transition first if using multiple transitions (e.g., `transform 2s ease, opacity .5s ease-out`)

\$carousel-dark-indicator-active-bg:  \$black !default;
\$carousel-dark-caption-color:        \$black !default;
\$carousel-dark-control-icon-filter:  invert(1) grayscale(100) !default;
// scss-docs-end carousel-variables


// Spinners

// scss-docs-start spinner-variables
\$spinner-width:           2rem !default;
\$spinner-height:          \$spinner-width !default;
\$spinner-vertical-align:  -.125em !default;
\$spinner-border-width:    .25em !default;
\$spinner-animation-speed: .75s !default;

\$spinner-width-sm:        1rem !default;
\$spinner-height-sm:       \$spinner-width-sm !default;
\$spinner-border-width-sm: .2em !default;
// scss-docs-end spinner-variables


// Close

// scss-docs-start close-variables
\$btn-close-width:            1em !default;
\$btn-close-height:           \$btn-close-width !default;
\$btn-close-padding-x:        .25em !default;
\$btn-close-padding-y:        \$btn-close-padding-x !default;
\$btn-close-color:            \$black !default;
\$btn-close-bg:               url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$btn-close-color}'><path d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/></svg>\") !default;
\$btn-close-focus-shadow:     \$input-btn-focus-box-shadow !default;
\$btn-close-opacity:          .5 !default;
\$btn-close-hover-opacity:    .75 !default;
\$btn-close-focus-opacity:    1 !default;
\$btn-close-disabled-opacity: .25 !default;
\$btn-close-white-filter:     invert(1) grayscale(100%) brightness(200%) !default;
// scss-docs-end close-variables


// Offcanvas

// scss-docs-start offcanvas-variables
\$offcanvas-padding-y:               \$modal-inner-padding !default;
\$offcanvas-padding-x:               \$modal-inner-padding !default;
\$offcanvas-horizontal-width:        400px !default;
\$offcanvas-vertical-height:         30vh !default;
\$offcanvas-transition-duration:     .3s !default;
\$offcanvas-border-color:            \$modal-content-border-color !default;
\$offcanvas-border-width:            \$modal-content-border-width !default;
\$offcanvas-title-line-height:       \$modal-title-line-height !default;
\$offcanvas-bg-color:                \$modal-content-bg !default;
\$offcanvas-color:                   \$modal-content-color !default;
\$offcanvas-box-shadow:              \$modal-content-box-shadow-xs !default;
// scss-docs-end offcanvas-variables

// Code

\$code-font-size:                    \$small-font-size !default;
\$code-color:                        \$pink !default;

\$kbd-padding-y:                     .2rem !default;
\$kbd-padding-x:                     .4rem !default;
\$kbd-font-size:                     \$code-font-size !default;
\$kbd-color:                         \$white !default;
\$kbd-bg:                            \$gray-900 !default;

\$pre-color:                         null !default;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "scss/bootstrap/scss/_variables.scss";
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
        return new Source("// Variables
//
// Variables should follow the `\$component-state-property-size` formula for
// consistent naming. Ex: \$nav-link-disabled-color and \$modal-content-box-shadow-xs.

// Color system

// scss-docs-start gray-color-variables
\$white:    #fff !default;
\$gray-100: #f8f9fa !default;
\$gray-200: #e9ecef !default;
\$gray-300: #dee2e6 !default;
\$gray-400: #ced4da !default;
\$gray-500: #adb5bd !default;
\$gray-600: #6c757d !default;
\$gray-700: #495057 !default;
\$gray-800: #343a40 !default;
\$gray-900: #212529 !default;
\$black:    #000 !default;
// scss-docs-end gray-color-variables

// fusv-disable
// scss-docs-start gray-colors-map
\$grays: (
  \"100\": \$gray-100,
  \"200\": \$gray-200,
  \"300\": \$gray-300,
  \"400\": \$gray-400,
  \"500\": \$gray-500,
  \"600\": \$gray-600,
  \"700\": \$gray-700,
  \"800\": \$gray-800,
  \"900\": \$gray-900
) !default;
// scss-docs-end gray-colors-map
// fusv-enable

// scss-docs-start color-variables
\$blue:    #0d6efd !default;
\$indigo:  #6610f2 !default;
\$purple:  #6f42c1 !default;
\$pink:    #d63384 !default;
\$red:     #dc3545 !default;
\$orange:  #fd7e14 !default;
\$yellow:  #ffc107 !default;
\$green:   #198754 !default;
\$teal:    #20c997 !default;
\$cyan:    #0dcaf0 !default;
// scss-docs-end color-variables

// scss-docs-start colors-map
\$colors: (
  \"blue\":       \$blue,
  \"indigo\":     \$indigo,
  \"purple\":     \$purple,
  \"pink\":       \$pink,
  \"red\":        \$red,
  \"orange\":     \$orange,
  \"yellow\":     \$yellow,
  \"green\":      \$green,
  \"teal\":       \$teal,
  \"cyan\":       \$cyan,
  \"white\":      \$white,
  \"gray\":       \$gray-600,
  \"gray-dark\":  \$gray-800
) !default;
// scss-docs-end colors-map

// scss-docs-start theme-color-variables
\$primary:       \$blue !default;
\$secondary:     \$gray-600 !default;
\$success:       \$green !default;
\$info:          \$cyan !default;
\$warning:       \$yellow !default;
\$danger:        \$red !default;
\$light:         \$gray-100 !default;
\$dark:          \$gray-900 !default;
// scss-docs-end theme-color-variables

// scss-docs-start theme-colors-map
\$theme-colors: (
  \"primary\":    \$primary,
  \"secondary\":  \$secondary,
  \"success\":    \$success,
  \"info\":       \$info,
  \"warning\":    \$warning,
  \"danger\":     \$danger,
  \"light\":      \$light,
  \"dark\":       \$dark
) !default;
// scss-docs-end theme-colors-map

// The contrast ratio to reach against white, to determine if color changes from \"light\" to \"dark\". Acceptable values for WCAG 2.0 are 3, 4.5 and 7.
// See https://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast
\$min-contrast-ratio:   4.5 !default;

// Customize the light and dark text colors for use in our color contrast function.
\$color-contrast-dark:      \$black !default;
\$color-contrast-light:     \$white !default;

// fusv-disable
\$blue-100: tint-color(\$blue, 80%) !default;
\$blue-200: tint-color(\$blue, 60%) !default;
\$blue-300: tint-color(\$blue, 40%) !default;
\$blue-400: tint-color(\$blue, 20%) !default;
\$blue-500: \$blue !default;
\$blue-600: shade-color(\$blue, 20%) !default;
\$blue-700: shade-color(\$blue, 40%) !default;
\$blue-800: shade-color(\$blue, 60%) !default;
\$blue-900: shade-color(\$blue, 80%) !default;

\$indigo-100: tint-color(\$indigo, 80%) !default;
\$indigo-200: tint-color(\$indigo, 60%) !default;
\$indigo-300: tint-color(\$indigo, 40%) !default;
\$indigo-400: tint-color(\$indigo, 20%) !default;
\$indigo-500: \$indigo !default;
\$indigo-600: shade-color(\$indigo, 20%) !default;
\$indigo-700: shade-color(\$indigo, 40%) !default;
\$indigo-800: shade-color(\$indigo, 60%) !default;
\$indigo-900: shade-color(\$indigo, 80%) !default;

\$purple-100: tint-color(\$purple, 80%) !default;
\$purple-200: tint-color(\$purple, 60%) !default;
\$purple-300: tint-color(\$purple, 40%) !default;
\$purple-400: tint-color(\$purple, 20%) !default;
\$purple-500: \$purple !default;
\$purple-600: shade-color(\$purple, 20%) !default;
\$purple-700: shade-color(\$purple, 40%) !default;
\$purple-800: shade-color(\$purple, 60%) !default;
\$purple-900: shade-color(\$purple, 80%) !default;

\$pink-100: tint-color(\$pink, 80%) !default;
\$pink-200: tint-color(\$pink, 60%) !default;
\$pink-300: tint-color(\$pink, 40%) !default;
\$pink-400: tint-color(\$pink, 20%) !default;
\$pink-500: \$pink !default;
\$pink-600: shade-color(\$pink, 20%) !default;
\$pink-700: shade-color(\$pink, 40%) !default;
\$pink-800: shade-color(\$pink, 60%) !default;
\$pink-900: shade-color(\$pink, 80%) !default;

\$red-100: tint-color(\$red, 80%) !default;
\$red-200: tint-color(\$red, 60%) !default;
\$red-300: tint-color(\$red, 40%) !default;
\$red-400: tint-color(\$red, 20%) !default;
\$red-500: \$red !default;
\$red-600: shade-color(\$red, 20%) !default;
\$red-700: shade-color(\$red, 40%) !default;
\$red-800: shade-color(\$red, 60%) !default;
\$red-900: shade-color(\$red, 80%) !default;

\$orange-100: tint-color(\$orange, 80%) !default;
\$orange-200: tint-color(\$orange, 60%) !default;
\$orange-300: tint-color(\$orange, 40%) !default;
\$orange-400: tint-color(\$orange, 20%) !default;
\$orange-500: \$orange !default;
\$orange-600: shade-color(\$orange, 20%) !default;
\$orange-700: shade-color(\$orange, 40%) !default;
\$orange-800: shade-color(\$orange, 60%) !default;
\$orange-900: shade-color(\$orange, 80%) !default;

\$yellow-100: tint-color(\$yellow, 80%) !default;
\$yellow-200: tint-color(\$yellow, 60%) !default;
\$yellow-300: tint-color(\$yellow, 40%) !default;
\$yellow-400: tint-color(\$yellow, 20%) !default;
\$yellow-500: \$yellow !default;
\$yellow-600: shade-color(\$yellow, 20%) !default;
\$yellow-700: shade-color(\$yellow, 40%) !default;
\$yellow-800: shade-color(\$yellow, 60%) !default;
\$yellow-900: shade-color(\$yellow, 80%) !default;

\$green-100: tint-color(\$green, 80%) !default;
\$green-200: tint-color(\$green, 60%) !default;
\$green-300: tint-color(\$green, 40%) !default;
\$green-400: tint-color(\$green, 20%) !default;
\$green-500: \$green !default;
\$green-600: shade-color(\$green, 20%) !default;
\$green-700: shade-color(\$green, 40%) !default;
\$green-800: shade-color(\$green, 60%) !default;
\$green-900: shade-color(\$green, 80%) !default;

\$teal-100: tint-color(\$teal, 80%) !default;
\$teal-200: tint-color(\$teal, 60%) !default;
\$teal-300: tint-color(\$teal, 40%) !default;
\$teal-400: tint-color(\$teal, 20%) !default;
\$teal-500: \$teal !default;
\$teal-600: shade-color(\$teal, 20%) !default;
\$teal-700: shade-color(\$teal, 40%) !default;
\$teal-800: shade-color(\$teal, 60%) !default;
\$teal-900: shade-color(\$teal, 80%) !default;

\$cyan-100: tint-color(\$cyan, 80%) !default;
\$cyan-200: tint-color(\$cyan, 60%) !default;
\$cyan-300: tint-color(\$cyan, 40%) !default;
\$cyan-400: tint-color(\$cyan, 20%) !default;
\$cyan-500: \$cyan !default;
\$cyan-600: shade-color(\$cyan, 20%) !default;
\$cyan-700: shade-color(\$cyan, 40%) !default;
\$cyan-800: shade-color(\$cyan, 60%) !default;
\$cyan-900: shade-color(\$cyan, 80%) !default;
// fusv-enable

// Characters which are escaped by the escape-svg function
\$escaped-characters: (
  (\"<\", \"%3c\"),
  (\">\", \"%3e\"),
  (\"#\", \"%23\"),
  (\"(\", \"%28\"),
  (\")\", \"%29\"),
) !default;

// Options
//
// Quickly modify global styling by enabling or disabling optional features.

\$enable-caret:                true !default;
\$enable-rounded:              true !default;
\$enable-shadows:              false !default;
\$enable-gradients:            false !default;
\$enable-transitions:          true !default;
\$enable-reduced-motion:       true !default;
\$enable-smooth-scroll:        true !default;
\$enable-grid-classes:         true !default;
\$enable-button-pointers:      true !default;
\$enable-rfs:                  true !default;
\$enable-validation-icons:     true !default;
\$enable-negative-margins:     false !default;
\$enable-deprecation-messages: true !default;
\$enable-important-utilities:  true !default;

// Prefix for :root CSS variables

\$variable-prefix:             bs- !default;

// Gradient
//
// The gradient which is added to components if `\$enable-gradients` is `true`
// This gradient is also added to elements with `.bg-gradient`
// scss-docs-start variable-gradient
\$gradient: linear-gradient(180deg, rgba(\$white, .15), rgba(\$white, 0)) !default;
// scss-docs-end variable-gradient

// Spacing
//
// Control the default styling of most Bootstrap elements by modifying these
// variables. Mostly focused on spacing.
// You can add more entries to the \$spacers map, should you need more variation.

// scss-docs-start spacer-variables-maps
\$spacer: 1rem !default;
\$spacers: (
  0: 0,
  1: \$spacer / 4,
  2: \$spacer / 2,
  3: \$spacer,
  4: \$spacer * 1.5,
  5: \$spacer * 3,
) !default;

\$negative-spacers: if(\$enable-negative-margins, negativify-map(\$spacers), null) !default;
// scss-docs-end spacer-variables-maps

// Position
//
// Define the edge positioning anchors of the position utilities.

// scss-docs-start position-map
\$position-values: (
  0: 0,
  50: 50%,
  100: 100%
) !default;
// scss-docs-end position-map

// Body
//
// Settings for the `<body>` element.

\$body-bg:                   \$white !default;
\$body-color:                \$gray-900 !default;
\$body-text-align:           null !default;


// Links
//
// Style anchor elements.

\$link-color:                              \$primary !default;
\$link-decoration:                         underline !default;
\$link-shade-percentage:                   20% !default;
\$link-hover-color:                        shift-color(\$link-color, \$link-shade-percentage) !default;
\$link-hover-decoration:                   null !default;

\$stretched-link-pseudo-element:           after !default;
\$stretched-link-z-index:                  1 !default;

// Paragraphs
//
// Style p element.

\$paragraph-margin-bottom:   1rem !default;


// Grid breakpoints
//
// Define the minimum dimensions at which your layout will change,
// adapting to different screen sizes, for use in media queries.

// scss-docs-start grid-breakpoints
\$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
) !default;
// scss-docs-end grid-breakpoints

@include _assert-ascending(\$grid-breakpoints, \"\$grid-breakpoints\");
@include _assert-starts-at-zero(\$grid-breakpoints, \"\$grid-breakpoints\");


// Grid containers
//
// Define the maximum width of `.container` for different screen sizes.

// scss-docs-start container-max-widths
\$container-max-widths: (
  sm: 540px,
  md: 720px,
  lg: 960px,
  xl: 1140px,
  xxl: 1320px
) !default;
// scss-docs-end container-max-widths

@include _assert-ascending(\$container-max-widths, \"\$container-max-widths\");


// Grid columns
//
// Set the number of columns and specify the width of the gutters.

\$grid-columns:                12 !default;
\$grid-gutter-width:           1.5rem !default;
\$grid-row-columns:            6 !default;

\$gutters: \$spacers !default;

// Container padding

\$container-padding-x: \$grid-gutter-width / 2 !default;


// Components
//
// Define common padding and border radius sizes and more.

// scss-docs-start border-variables
\$border-width:                1px !default;
\$border-widths: (
  1: 1px,
  2: 2px,
  3: 3px,
  4: 4px,
  5: 5px
) !default;

\$border-color:                \$gray-300 !default;
// scss-docs-end border-variables

// scss-docs-start border-radius-variables
\$border-radius:               .25rem !default;
\$border-radius-sm:            .2rem !default;
\$border-radius-lg:            .3rem !default;
\$border-radius-pill:          50rem !default;
// scss-docs-end border-radius-variables

// scss-docs-start box-shadow-variables
\$box-shadow:                  0 .5rem 1rem rgba(\$black, .15) !default;
\$box-shadow-sm:               0 .125rem .25rem rgba(\$black, .075) !default;
\$box-shadow-lg:               0 1rem 3rem rgba(\$black, .175) !default;
\$box-shadow-inset:            inset 0 1px 2px rgba(\$black, .075) !default;
// scss-docs-end box-shadow-variables

\$component-active-color:      \$white !default;
\$component-active-bg:         \$primary !default;

// scss-docs-start caret-variables
\$caret-width:                 .3em !default;
\$caret-vertical-align:        \$caret-width * .85 !default;
\$caret-spacing:               \$caret-width * .85 !default;
// scss-docs-end caret-variables

\$transition-base:             all .2s ease-in-out !default;
\$transition-fade:             opacity .15s linear !default;
// scss-docs-start collapse-transition
\$transition-collapse:         height .35s ease !default;
// scss-docs-end collapse-transition

// stylelint-disable function-disallowed-list
// scss-docs-start aspect-ratios
\$aspect-ratios: (
  \"1x1\": 100%,
  \"4x3\": calc(3 / 4 * 100%),
  \"16x9\": calc(9 / 16 * 100%),
  \"21x9\": calc(9 / 21 * 100%)
) !default;
// scss-docs-end aspect-ratios
// stylelint-enable function-disallowed-list

// Typography
//
// Font, line-height, and color for body text, headings, and more.

// scss-docs-start font-variables
// stylelint-disable value-keyword-case
\$font-family-sans-serif:      system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\" !default;
\$font-family-monospace:       SFMono-Regular, Menlo, Monaco, Consolas, \"Liberation Mono\", \"Courier New\", monospace !default;
// stylelint-enable value-keyword-case
\$font-family-base:            var(--#{\$variable-prefix}font-sans-serif) !default;
\$font-family-code:            var(--#{\$variable-prefix}font-monospace) !default;

// \$font-size-root effects the value of `rem`, which is used for as well font sizes, paddings and margins
// \$font-size-base effects the font size of the body text
\$font-size-root:              null !default;
\$font-size-base:              1rem !default; // Assumes the browser default, typically `16px`
\$font-size-sm:                \$font-size-base * .875 !default;
\$font-size-lg:                \$font-size-base * 1.25 !default;

\$font-weight-lighter:         lighter !default;
\$font-weight-light:           300 !default;
\$font-weight-normal:          400 !default;
\$font-weight-bold:            700 !default;
\$font-weight-bolder:          bolder !default;

\$font-weight-base:            \$font-weight-normal !default;

\$line-height-base:            1.5 !default;
\$line-height-sm:              1.25 !default;
\$line-height-lg:              2 !default;

\$h1-font-size:                \$font-size-base * 2.5 !default;
\$h2-font-size:                \$font-size-base * 2 !default;
\$h3-font-size:                \$font-size-base * 1.75 !default;
\$h4-font-size:                \$font-size-base * 1.5 !default;
\$h5-font-size:                \$font-size-base * 1.25 !default;
\$h6-font-size:                \$font-size-base !default;
// scss-docs-end font-variables

// scss-docs-start font-sizes
\$font-sizes: (
  1: \$h1-font-size,
  2: \$h2-font-size,
  3: \$h3-font-size,
  4: \$h4-font-size,
  5: \$h5-font-size,
  6: \$h6-font-size
) !default;
// scss-docs-end font-sizes

// scss-docs-start headings-variables
\$headings-margin-bottom:      \$spacer / 2 !default;
\$headings-font-family:        null !default;
\$headings-font-style:         null !default;
\$headings-font-weight:        500 !default;
\$headings-line-height:        1.2 !default;
\$headings-color:              null !default;
// scss-docs-end headings-variables

// scss-docs-start display-headings
\$display-font-sizes: (
  1: 5rem,
  2: 4.5rem,
  3: 4rem,
  4: 3.5rem,
  5: 3rem,
  6: 2.5rem
) !default;

\$display-font-weight: 300 !default;
\$display-line-height: \$headings-line-height !default;
// scss-docs-end display-headings

// scss-docs-start type-variables
\$lead-font-size:              \$font-size-base * 1.25 !default;
\$lead-font-weight:            300 !default;

\$small-font-size:             .875em !default;

\$sub-sup-font-size:           .75em !default;

\$text-muted:                  \$gray-600 !default;

\$initialism-font-size:        \$small-font-size !default;

\$blockquote-margin-y:         \$spacer !default;
\$blockquote-font-size:        \$font-size-base * 1.25 !default;
\$blockquote-footer-color:     \$gray-600 !default;
\$blockquote-footer-font-size: \$small-font-size !default;

\$hr-margin-y:                 \$spacer !default;
\$hr-color:                    inherit !default;
\$hr-height:                   \$border-width !default;
\$hr-opacity:                  .25 !default;

\$legend-margin-bottom:        .5rem !default;
\$legend-font-size:            1.5rem !default;
\$legend-font-weight:          null !default;

\$mark-padding:                .2em !default;

\$dt-font-weight:              \$font-weight-bold !default;

\$nested-kbd-font-weight:      \$font-weight-bold !default;

\$list-inline-padding:         .5rem !default;

\$mark-bg:                     #fcf8e3 !default;
// scss-docs-end type-variables


// Tables
//
// Customizes the `.table` component with basic values, each used across all table variations.

// scss-docs-start table-variables
\$table-cell-padding-y:        .5rem !default;
\$table-cell-padding-x:        .5rem !default;
\$table-cell-padding-y-sm:     .25rem !default;
\$table-cell-padding-x-sm:     .25rem !default;

\$table-cell-vertical-align:   top !default;

\$table-color:                 \$body-color !default;
\$table-bg:                    transparent !default;

\$table-th-font-weight:        null !default;

\$table-striped-color:         \$table-color !default;
\$table-striped-bg-factor:     .05 !default;
\$table-striped-bg:            rgba(\$black, \$table-striped-bg-factor) !default;

\$table-active-color:          \$table-color !default;
\$table-active-bg-factor:      .1 !default;
\$table-active-bg:             rgba(\$black, \$table-active-bg-factor) !default;

\$table-hover-color:           \$table-color !default;
\$table-hover-bg-factor:       .075 !default;
\$table-hover-bg:              rgba(\$black, \$table-hover-bg-factor) !default;

\$table-border-factor:         .1 !default;
\$table-border-width:          \$border-width !default;
\$table-border-color:          \$border-color !default;

\$table-striped-order:         odd !default;

\$table-group-separator-color: currentColor !default;

\$table-caption-color:         \$text-muted !default;

\$table-bg-scale:              -80% !default;
// scss-docs-end table-variables

// scss-docs-start table-loop
\$table-variants: (
  \"primary\":    shift-color(\$primary, \$table-bg-scale),
  \"secondary\":  shift-color(\$secondary, \$table-bg-scale),
  \"success\":    shift-color(\$success, \$table-bg-scale),
  \"info\":       shift-color(\$info, \$table-bg-scale),
  \"warning\":    shift-color(\$warning, \$table-bg-scale),
  \"danger\":     shift-color(\$danger, \$table-bg-scale),
  \"light\":      \$light,
  \"dark\":       \$dark,
) !default;
// scss-docs-end table-loop


// Buttons + Forms
//
// Shared variables that are reassigned to `\$input-` and `\$btn-` specific variables.

// scss-docs-start input-btn-variables
\$input-btn-padding-y:         .375rem !default;
\$input-btn-padding-x:         .75rem !default;
\$input-btn-font-family:       null !default;
\$input-btn-font-size:         \$font-size-base !default;
\$input-btn-line-height:       \$line-height-base !default;

\$input-btn-focus-width:         .25rem !default;
\$input-btn-focus-color-opacity: .25 !default;
\$input-btn-focus-color:         rgba(\$component-active-bg, \$input-btn-focus-color-opacity) !default;
\$input-btn-focus-blur:          0 !default;
\$input-btn-focus-box-shadow:    0 0 \$input-btn-focus-blur \$input-btn-focus-width \$input-btn-focus-color !default;

\$input-btn-padding-y-sm:      .25rem !default;
\$input-btn-padding-x-sm:      .5rem !default;
\$input-btn-font-size-sm:      \$font-size-sm !default;

\$input-btn-padding-y-lg:      .5rem !default;
\$input-btn-padding-x-lg:      1rem !default;
\$input-btn-font-size-lg:      \$font-size-lg !default;

\$input-btn-border-width:      \$border-width !default;
// scss-docs-end input-btn-variables


// Buttons
//
// For each of Bootstrap's buttons, define text, background, and border color.

// scss-docs-start btn-variables
\$btn-padding-y:               \$input-btn-padding-y !default;
\$btn-padding-x:               \$input-btn-padding-x !default;
\$btn-font-family:             \$input-btn-font-family !default;
\$btn-font-size:               \$input-btn-font-size !default;
\$btn-line-height:             \$input-btn-line-height !default;
\$btn-white-space:             null !default; // Set to `nowrap` to prevent text wrapping

\$btn-padding-y-sm:            \$input-btn-padding-y-sm !default;
\$btn-padding-x-sm:            \$input-btn-padding-x-sm !default;
\$btn-font-size-sm:            \$input-btn-font-size-sm !default;

\$btn-padding-y-lg:            \$input-btn-padding-y-lg !default;
\$btn-padding-x-lg:            \$input-btn-padding-x-lg !default;
\$btn-font-size-lg:            \$input-btn-font-size-lg !default;

\$btn-border-width:            \$input-btn-border-width !default;

\$btn-font-weight:             \$font-weight-normal !default;
\$btn-box-shadow:              inset 0 1px 0 rgba(\$white, .15), 0 1px 1px rgba(\$black, .075) !default;
\$btn-focus-width:             \$input-btn-focus-width !default;
\$btn-focus-box-shadow:        \$input-btn-focus-box-shadow !default;
\$btn-disabled-opacity:        .65 !default;
\$btn-active-box-shadow:       inset 0 3px 5px rgba(\$black, .125) !default;

\$btn-link-color:              \$link-color !default;
\$btn-link-hover-color:        \$link-hover-color !default;
\$btn-link-disabled-color:     \$gray-600 !default;

// Allows for customizing button radius independently from global border radius
\$btn-border-radius:           \$border-radius !default;
\$btn-border-radius-sm:        \$border-radius-sm !default;
\$btn-border-radius-lg:        \$border-radius-lg !default;

\$btn-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;

\$btn-hover-bg-shade-amount:       15% !default;
\$btn-hover-bg-tint-amount:        15% !default;
\$btn-hover-border-shade-amount:   20% !default;
\$btn-hover-border-tint-amount:    10% !default;
\$btn-active-bg-shade-amount:      20% !default;
\$btn-active-bg-tint-amount:       20% !default;
\$btn-active-border-shade-amount:  25% !default;
\$btn-active-border-tint-amount:   10% !default;
// scss-docs-end btn-variables


// Forms

// scss-docs-start form-text-variables
\$form-text-margin-top:                  .25rem !default;
\$form-text-font-size:                   \$small-font-size !default;
\$form-text-font-style:                  null !default;
\$form-text-font-weight:                 null !default;
\$form-text-color:                       \$text-muted !default;
// scss-docs-end form-text-variables

// scss-docs-start form-label-variables
\$form-label-margin-bottom:              .5rem !default;
\$form-label-font-size:                  null !default;
\$form-label-font-style:                 null !default;
\$form-label-font-weight:                null !default;
\$form-label-color:                      null !default;
// scss-docs-end form-label-variables

// scss-docs-start form-input-variables
\$input-padding-y:                       \$input-btn-padding-y !default;
\$input-padding-x:                       \$input-btn-padding-x !default;
\$input-font-family:                     \$input-btn-font-family !default;
\$input-font-size:                       \$input-btn-font-size !default;
\$input-font-weight:                     \$font-weight-base !default;
\$input-line-height:                     \$input-btn-line-height !default;

\$input-padding-y-sm:                    \$input-btn-padding-y-sm !default;
\$input-padding-x-sm:                    \$input-btn-padding-x-sm !default;
\$input-font-size-sm:                    \$input-btn-font-size-sm !default;

\$input-padding-y-lg:                    \$input-btn-padding-y-lg !default;
\$input-padding-x-lg:                    \$input-btn-padding-x-lg !default;
\$input-font-size-lg:                    \$input-btn-font-size-lg !default;

\$input-bg:                              \$white !default;
\$input-disabled-bg:                     \$gray-200 !default;
\$input-disabled-border-color:           null !default;

\$input-color:                           \$body-color !default;
\$input-border-color:                    \$gray-400 !default;
\$input-border-width:                    \$input-btn-border-width !default;
\$input-box-shadow:                      \$box-shadow-inset !default;

\$input-border-radius:                   \$border-radius !default;
\$input-border-radius-sm:                \$border-radius-sm !default;
\$input-border-radius-lg:                \$border-radius-lg !default;

\$input-focus-bg:                        \$input-bg !default;
\$input-focus-border-color:              tint-color(\$component-active-bg, 50%) !default;
\$input-focus-color:                     \$input-color !default;
\$input-focus-width:                     \$input-btn-focus-width !default;
\$input-focus-box-shadow:                \$input-btn-focus-box-shadow !default;

\$input-placeholder-color:               \$gray-600 !default;
\$input-plaintext-color:                 \$body-color !default;

\$input-height-border:                   \$input-border-width * 2 !default;

\$input-height-inner:                    add(\$input-line-height * 1em, \$input-padding-y * 2) !default;
\$input-height-inner-half:               add(\$input-line-height * .5em, \$input-padding-y) !default;
\$input-height-inner-quarter:            add(\$input-line-height * .25em, \$input-padding-y / 2) !default;

\$input-height:                          add(\$input-line-height * 1em, add(\$input-padding-y * 2, \$input-height-border, false)) !default;
\$input-height-sm:                       add(\$input-line-height * 1em, add(\$input-padding-y-sm * 2, \$input-height-border, false)) !default;
\$input-height-lg:                       add(\$input-line-height * 1em, add(\$input-padding-y-lg * 2, \$input-height-border, false)) !default;

\$input-transition:                      border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;
// scss-docs-end form-input-variables

// scss-docs-start form-check-variables
\$form-check-input-width:                  1em !default;
\$form-check-min-height:                   \$font-size-base * \$line-height-base !default;
\$form-check-padding-start:                \$form-check-input-width + .5em !default;
\$form-check-margin-bottom:                .125rem !default;
\$form-check-label-color:                  null !default;
\$form-check-label-cursor:                 null !default;
\$form-check-transition:                   null !default;

\$form-check-input-active-filter:          brightness(90%) !default;

\$form-check-input-bg:                     \$input-bg !default;
\$form-check-input-border:                 1px solid rgba(\$black, .25) !default;
\$form-check-input-border-radius:          .25em !default;
\$form-check-radio-border-radius:          50% !default;
\$form-check-input-focus-border:           \$input-focus-border-color !default;
\$form-check-input-focus-box-shadow:       \$input-btn-focus-box-shadow !default;

\$form-check-input-checked-color:          \$component-active-color !default;
\$form-check-input-checked-bg-color:       \$component-active-bg !default;
\$form-check-input-checked-border-color:   \$form-check-input-checked-bg-color !default;
\$form-check-input-checked-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='#{\$form-check-input-checked-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/></svg>\") !default;
\$form-check-radio-checked-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='2' fill='#{\$form-check-input-checked-color}'/></svg>\") !default;

\$form-check-input-indeterminate-color:          \$component-active-color !default;
\$form-check-input-indeterminate-bg-color:       \$component-active-bg !default;
\$form-check-input-indeterminate-border-color:   \$form-check-input-indeterminate-bg-color !default;
\$form-check-input-indeterminate-bg-image:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='#{\$form-check-input-indeterminate-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/></svg>\") !default;

\$form-check-input-disabled-opacity:        .5 !default;
\$form-check-label-disabled-opacity:        \$form-check-input-disabled-opacity !default;
\$form-check-btn-check-disabled-opacity:    \$btn-disabled-opacity !default;

\$form-check-inline-margin-end:    1rem !default;
// scss-docs-end form-check-variables

// scss-docs-start form-switch-variables
\$form-switch-color:               rgba(0, 0, 0, .25) !default;
\$form-switch-width:               2em !default;
\$form-switch-padding-start:       \$form-switch-width + .5em !default;
\$form-switch-bg-image:            url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-color}'/></svg>\") !default;
\$form-switch-border-radius:       \$form-switch-width !default;
\$form-switch-transition:          background-position .15s ease-in-out !default;

\$form-switch-focus-color:         \$input-focus-border-color !default;
\$form-switch-focus-bg-image:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-focus-color}'/></svg>\") !default;

\$form-switch-checked-color:       \$component-active-color !default;
\$form-switch-checked-bg-image:    url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='#{\$form-switch-checked-color}'/></svg>\") !default;
\$form-switch-checked-bg-position: right center !default;
// scss-docs-end form-switch-variables

// scss-docs-start input-group-variables
\$input-group-addon-padding-y:           \$input-padding-y !default;
\$input-group-addon-padding-x:           \$input-padding-x !default;
\$input-group-addon-font-weight:         \$input-font-weight !default;
\$input-group-addon-color:               \$input-color !default;
\$input-group-addon-bg:                  \$gray-200 !default;
\$input-group-addon-border-color:        \$input-border-color !default;
// scss-docs-end input-group-variables

// scss-docs-start form-select-variables
\$form-select-padding-y:             \$input-padding-y !default;
\$form-select-padding-x:             \$input-padding-x !default;
\$form-select-font-family:           \$input-font-family !default;
\$form-select-font-size:             \$input-font-size !default;
\$form-select-indicator-padding:     \$form-select-padding-x * 3 !default; // Extra padding for background-image
\$form-select-font-weight:           \$input-font-weight !default;
\$form-select-line-height:           \$input-line-height !default;
\$form-select-color:                 \$input-color !default;
\$form-select-bg:                    \$input-bg !default;
\$form-select-disabled-color:        null !default;
\$form-select-disabled-bg:           \$gray-200 !default;
\$form-select-disabled-border-color: \$input-disabled-border-color !default;
\$form-select-bg-position:           right \$form-select-padding-x center !default;
\$form-select-bg-size:               16px 12px !default; // In pixels because image dimensions
\$form-select-indicator-color:       \$gray-800 !default;
\$form-select-indicator:             url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path fill='none' stroke='#{\$form-select-indicator-color}' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/></svg>\") !default;

\$form-select-feedback-icon-padding-end: \$form-select-padding-x * 2.5 + \$form-select-indicator-padding !default;
\$form-select-feedback-icon-position:    center right \$form-select-indicator-padding !default;
\$form-select-feedback-icon-size:        \$input-height-inner-half \$input-height-inner-half !default;

\$form-select-border-width:        \$input-border-width !default;
\$form-select-border-color:        \$input-border-color !default;
\$form-select-border-radius:       \$border-radius !default;
\$form-select-box-shadow:          \$box-shadow-inset !default;

\$form-select-focus-border-color:  \$input-focus-border-color !default;
\$form-select-focus-width:         \$input-focus-width !default;
\$form-select-focus-box-shadow:    0 0 0 \$form-select-focus-width \$input-btn-focus-color !default;

\$form-select-padding-y-sm:        \$input-padding-y-sm !default;
\$form-select-padding-x-sm:        \$input-padding-x-sm !default;
\$form-select-font-size-sm:        \$input-font-size-sm !default;

\$form-select-padding-y-lg:        \$input-padding-y-lg !default;
\$form-select-padding-x-lg:        \$input-padding-x-lg !default;
\$form-select-font-size-lg:        \$input-font-size-lg !default;
// scss-docs-end form-select-variables

// scss-docs-start form-range-variables
\$form-range-track-width:          100% !default;
\$form-range-track-height:         .5rem !default;
\$form-range-track-cursor:         pointer !default;
\$form-range-track-bg:             \$gray-300 !default;
\$form-range-track-border-radius:  1rem !default;
\$form-range-track-box-shadow:     \$box-shadow-inset !default;

\$form-range-thumb-width:                   1rem !default;
\$form-range-thumb-height:                  \$form-range-thumb-width !default;
\$form-range-thumb-bg:                      \$component-active-bg !default;
\$form-range-thumb-border:                  0 !default;
\$form-range-thumb-border-radius:           1rem !default;
\$form-range-thumb-box-shadow:              0 .1rem .25rem rgba(\$black, .1) !default;
\$form-range-thumb-focus-box-shadow:        0 0 0 1px \$body-bg, \$input-focus-box-shadow !default;
\$form-range-thumb-focus-box-shadow-width:  \$input-focus-width !default; // For focus box shadow issue in Edge
\$form-range-thumb-active-bg:               tint-color(\$component-active-bg, 70%) !default;
\$form-range-thumb-disabled-bg:             \$gray-500 !default;
\$form-range-thumb-transition:              background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;
// scss-docs-end form-range-variables

// scss-docs-start form-file-variables
\$form-file-button-color:          \$input-color !default;
\$form-file-button-bg:             \$input-group-addon-bg !default;
\$form-file-button-hover-bg:       shade-color(\$form-file-button-bg, 5%) !default;
// scss-docs-end form-file-variables

// scss-docs-start form-floating-variables
\$form-floating-height:            add(3.5rem, \$input-height-border) !default;
\$form-floating-padding-x:         \$input-padding-x !default;
\$form-floating-padding-y:         1rem !default;
\$form-floating-input-padding-t:   1.625rem !default;
\$form-floating-input-padding-b:   .625rem !default;
\$form-floating-label-opacity:     .65 !default;
\$form-floating-label-transform:   scale(.85) translateY(-.5rem) translateX(.15rem) !default;
\$form-floating-transition:        opacity .1s ease-in-out, transform .1s ease-in-out !default;
// scss-docs-end form-floating-variables

// Form validation

// scss-docs-start form-feedback-variables
\$form-feedback-margin-top:          \$form-text-margin-top !default;
\$form-feedback-font-size:           \$form-text-font-size !default;
\$form-feedback-font-style:          \$form-text-font-style !default;
\$form-feedback-valid-color:         \$success !default;
\$form-feedback-invalid-color:       \$danger !default;

\$form-feedback-icon-valid-color:    \$form-feedback-valid-color !default;
\$form-feedback-icon-valid:          url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'><path fill='#{\$form-feedback-icon-valid-color}' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/></svg>\") !default;
\$form-feedback-icon-invalid-color:  \$form-feedback-invalid-color !default;
\$form-feedback-icon-invalid:        url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='#{\$form-feedback-icon-invalid-color}'><circle cx='6' cy='6' r='4.5'/><path stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/><circle cx='6' cy='8.2' r='.6' fill='#{\$form-feedback-icon-invalid-color}' stroke='none'/></svg>\") !default;
// scss-docs-end form-feedback-variables

// scss-docs-start form-validation-states
\$form-validation-states: (
  \"valid\": (
    \"color\": \$form-feedback-valid-color,
    \"icon\": \$form-feedback-icon-valid
  ),
  \"invalid\": (
    \"color\": \$form-feedback-invalid-color,
    \"icon\": \$form-feedback-icon-invalid
  )
) !default;
// scss-docs-end form-validation-states

// Z-index master list
//
// Warning: Avoid customizing these values. They're used for a bird's eye view
// of components dependent on the z-axis and are designed to all work together.

// scss-docs-start zindex-stack
\$zindex-dropdown:                   1000 !default;
\$zindex-sticky:                     1020 !default;
\$zindex-fixed:                      1030 !default;
\$zindex-modal-backdrop:             1040 !default;
\$zindex-offcanvas:                  1050 !default;
\$zindex-modal:                      1060 !default;
\$zindex-popover:                    1070 !default;
\$zindex-tooltip:                    1080 !default;
// scss-docs-end zindex-stack


// Navs

// scss-docs-start nav-variables
\$nav-link-padding-y:                .5rem !default;
\$nav-link-padding-x:                1rem !default;
\$nav-link-font-size:                null !default;
\$nav-link-font-weight:              null !default;
\$nav-link-color:                    \$link-color !default;
\$nav-link-hover-color:              \$link-hover-color !default;
\$nav-link-transition:               color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out !default;
\$nav-link-disabled-color:           \$gray-600 !default;

\$nav-tabs-border-color:             \$gray-300 !default;
\$nav-tabs-border-width:             \$border-width !default;
\$nav-tabs-border-radius:            \$border-radius !default;
\$nav-tabs-link-hover-border-color:  \$gray-200 \$gray-200 \$nav-tabs-border-color !default;
\$nav-tabs-link-active-color:        \$gray-700 !default;
\$nav-tabs-link-active-bg:           \$body-bg !default;
\$nav-tabs-link-active-border-color: \$gray-300 \$gray-300 \$nav-tabs-link-active-bg !default;

\$nav-pills-border-radius:           \$border-radius !default;
\$nav-pills-link-active-color:       \$component-active-color !default;
\$nav-pills-link-active-bg:          \$component-active-bg !default;
// scss-docs-end nav-variables


// Navbar

// scss-docs-start navbar-variables
\$navbar-padding-y:                  \$spacer / 2 !default;
\$navbar-padding-x:                  null !default;

\$navbar-nav-link-padding-x:         .5rem !default;

\$navbar-brand-font-size:            \$font-size-lg !default;
// Compute the navbar-brand padding-y so the navbar-brand will have the same height as navbar-text and nav-link
\$nav-link-height:                   \$font-size-base * \$line-height-base + \$nav-link-padding-y * 2 !default;
\$navbar-brand-height:               \$navbar-brand-font-size * \$line-height-base !default;
\$navbar-brand-padding-y:            (\$nav-link-height - \$navbar-brand-height) / 2 !default;
\$navbar-brand-margin-end:           1rem !default;

\$navbar-toggler-padding-y:          .25rem !default;
\$navbar-toggler-padding-x:          .75rem !default;
\$navbar-toggler-font-size:          \$font-size-lg !default;
\$navbar-toggler-border-radius:      \$btn-border-radius !default;
\$navbar-toggler-focus-width:        \$btn-focus-width !default;
\$navbar-toggler-transition:         box-shadow .15s ease-in-out !default;
// scss-docs-end navbar-variables

// scss-docs-start navbar-theme-variables
\$navbar-dark-color:                 rgba(\$white, .55) !default;
\$navbar-dark-hover-color:           rgba(\$white, .75) !default;
\$navbar-dark-active-color:          \$white !default;
\$navbar-dark-disabled-color:        rgba(\$white, .25) !default;
\$navbar-dark-toggler-icon-bg:       url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{\$navbar-dark-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>\") !default;
\$navbar-dark-toggler-border-color:  rgba(\$white, .1) !default;

\$navbar-light-color:                rgba(\$black, .55) !default;
\$navbar-light-hover-color:          rgba(\$black, .7) !default;
\$navbar-light-active-color:         rgba(\$black, .9) !default;
\$navbar-light-disabled-color:       rgba(\$black, .3) !default;
\$navbar-light-toggler-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{\$navbar-light-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>\") !default;
\$navbar-light-toggler-border-color: rgba(\$black, .1) !default;

\$navbar-light-brand-color:                \$navbar-light-active-color !default;
\$navbar-light-brand-hover-color:          \$navbar-light-active-color !default;
\$navbar-dark-brand-color:                 \$navbar-dark-active-color !default;
\$navbar-dark-brand-hover-color:           \$navbar-dark-active-color !default;
// scss-docs-end navbar-theme-variables


// Dropdowns
//
// Dropdown menu container and contents.

// scss-docs-start dropdown-variables
\$dropdown-min-width:                10rem !default;
\$dropdown-padding-x:                0 !default;
\$dropdown-padding-y:                .5rem !default;
\$dropdown-spacer:                   .125rem !default;
\$dropdown-font-size:                \$font-size-base !default;
\$dropdown-color:                    \$body-color !default;
\$dropdown-bg:                       \$white !default;
\$dropdown-border-color:             rgba(\$black, .15) !default;
\$dropdown-border-radius:            \$border-radius !default;
\$dropdown-border-width:             \$border-width !default;
\$dropdown-inner-border-radius:      subtract(\$dropdown-border-radius, \$dropdown-border-width) !default;
\$dropdown-divider-bg:               \$dropdown-border-color !default;
\$dropdown-divider-margin-y:         \$spacer / 2 !default;
\$dropdown-box-shadow:               \$box-shadow !default;

\$dropdown-link-color:               \$gray-900 !default;
\$dropdown-link-hover-color:         shade-color(\$gray-900, 10%) !default;
\$dropdown-link-hover-bg:            \$gray-200 !default;

\$dropdown-link-active-color:        \$component-active-color !default;
\$dropdown-link-active-bg:           \$component-active-bg !default;

\$dropdown-link-disabled-color:      \$gray-500 !default;

\$dropdown-item-padding-y:           \$spacer / 4 !default;
\$dropdown-item-padding-x:           \$spacer !default;

\$dropdown-header-color:             \$gray-600 !default;
\$dropdown-header-padding:           \$dropdown-padding-y \$dropdown-item-padding-x !default;
// scss-docs-end dropdown-variables

// scss-docs-start dropdown-dark-variables
\$dropdown-dark-color:               \$gray-300 !default;
\$dropdown-dark-bg:                  \$gray-800 !default;
\$dropdown-dark-border-color:        \$dropdown-border-color !default;
\$dropdown-dark-divider-bg:          \$dropdown-divider-bg !default;
\$dropdown-dark-box-shadow:          null !default;
\$dropdown-dark-link-color:          \$dropdown-dark-color !default;
\$dropdown-dark-link-hover-color:    \$white !default;
\$dropdown-dark-link-hover-bg:       rgba(\$white, .15) !default;
\$dropdown-dark-link-active-color:   \$dropdown-link-active-color !default;
\$dropdown-dark-link-active-bg:      \$dropdown-link-active-bg !default;
\$dropdown-dark-link-disabled-color: \$gray-500 !default;
\$dropdown-dark-header-color:        \$gray-500 !default;
// scss-docs-end dropdown-dark-variables


// Pagination

// scss-docs-start pagination-variables
\$pagination-padding-y:              .375rem !default;
\$pagination-padding-x:              .75rem !default;
\$pagination-padding-y-sm:           .25rem !default;
\$pagination-padding-x-sm:           .5rem !default;
\$pagination-padding-y-lg:           .75rem !default;
\$pagination-padding-x-lg:           1.5rem !default;

\$pagination-color:                  \$link-color !default;
\$pagination-bg:                     \$white !default;
\$pagination-border-width:           \$border-width !default;
\$pagination-border-radius:          \$border-radius !default;
\$pagination-margin-start:           -\$pagination-border-width !default;
\$pagination-border-color:           \$gray-300 !default;

\$pagination-focus-color:            \$link-hover-color !default;
\$pagination-focus-bg:               \$gray-200 !default;
\$pagination-focus-box-shadow:       \$input-btn-focus-box-shadow !default;
\$pagination-focus-outline:          0 !default;

\$pagination-hover-color:            \$link-hover-color !default;
\$pagination-hover-bg:               \$gray-200 !default;
\$pagination-hover-border-color:     \$gray-300 !default;

\$pagination-active-color:           \$component-active-color !default;
\$pagination-active-bg:              \$component-active-bg !default;
\$pagination-active-border-color:    \$pagination-active-bg !default;

\$pagination-disabled-color:         \$gray-600 !default;
\$pagination-disabled-bg:            \$white !default;
\$pagination-disabled-border-color:  \$gray-300 !default;

\$pagination-transition:              color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out !default;

\$pagination-border-radius-sm:       \$border-radius-sm !default;
\$pagination-border-radius-lg:       \$border-radius-lg !default;
// scss-docs-end pagination-variables


// Cards

// scss-docs-start card-variables
\$card-spacer-y:                     \$spacer !default;
\$card-spacer-x:                     \$spacer !default;
\$card-title-spacer-y:               \$spacer / 2 !default;
\$card-border-width:                 \$border-width !default;
\$card-border-radius:                \$border-radius !default;
\$card-border-color:                 rgba(\$black, .125) !default;
\$card-inner-border-radius:          subtract(\$card-border-radius, \$card-border-width) !default;
\$card-cap-padding-y:                \$card-spacer-y / 2 !default;
\$card-cap-padding-x:                \$card-spacer-x !default;
\$card-cap-bg:                       rgba(\$black, .03) !default;
\$card-cap-color:                    null !default;
\$card-height:                       null !default;
\$card-color:                        null !default;
\$card-bg:                           \$white !default;
\$card-img-overlay-padding:          \$spacer !default;
\$card-group-margin:                 \$grid-gutter-width / 2 !default;
// scss-docs-end card-variables

// Accordion

// scss-docs-start accordion-variables
\$accordion-padding-y:                     1rem !default;
\$accordion-padding-x:                     1.25rem !default;
\$accordion-color:                         \$body-color !default;
\$accordion-bg:                            \$body-bg !default;
\$accordion-border-width:                  \$border-width !default;
\$accordion-border-color:                  rgba(\$black, .125) !default;
\$accordion-border-radius:                 \$border-radius !default;
\$accordion-inner-border-radius:           subtract(\$accordion-border-radius, \$accordion-border-width) !default;

\$accordion-body-padding-y:                \$accordion-padding-y !default;
\$accordion-body-padding-x:                \$accordion-padding-x !default;

\$accordion-button-padding-y:              \$accordion-padding-y !default;
\$accordion-button-padding-x:              \$accordion-padding-x !default;
\$accordion-button-color:                  \$accordion-color !default;
\$accordion-button-bg:                     \$accordion-bg !default;
\$accordion-transition:                    \$btn-transition, border-radius .15s ease !default;
\$accordion-button-active-bg:              tint-color(\$component-active-bg, 90%) !default;
\$accordion-button-active-color:           shade-color(\$primary, 10%) !default;

\$accordion-button-focus-border-color:     \$input-focus-border-color !default;
\$accordion-button-focus-box-shadow:       \$btn-focus-box-shadow !default;

\$accordion-icon-width:                    1.25rem !default;
\$accordion-icon-color:                    \$accordion-color !default;
\$accordion-icon-active-color:             \$accordion-button-active-color !default;
\$accordion-icon-transition:               transform .2s ease-in-out !default;
\$accordion-icon-transform:                rotate(-180deg) !default;

\$accordion-button-icon:         url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$accordion-icon-color}'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>\") !default;
\$accordion-button-active-icon:  url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$accordion-icon-active-color}'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>\") !default;
// scss-docs-end accordion-variables

// Tooltips

// scss-docs-start tooltip-variables
\$tooltip-font-size:                 \$font-size-sm !default;
\$tooltip-max-width:                 200px !default;
\$tooltip-color:                     \$white !default;
\$tooltip-bg:                        \$black !default;
\$tooltip-border-radius:             \$border-radius !default;
\$tooltip-opacity:                   .9 !default;
\$tooltip-padding-y:                 \$spacer / 4 !default;
\$tooltip-padding-x:                 \$spacer / 2 !default;
\$tooltip-margin:                    0 !default;

\$tooltip-arrow-width:               .8rem !default;
\$tooltip-arrow-height:              .4rem !default;
\$tooltip-arrow-color:               \$tooltip-bg !default;
// scss-docs-end tooltip-variables

// Form tooltips must come after regular tooltips
// scss-docs-start tooltip-feedback-variables
\$form-feedback-tooltip-padding-y:     \$tooltip-padding-y !default;
\$form-feedback-tooltip-padding-x:     \$tooltip-padding-x !default;
\$form-feedback-tooltip-font-size:     \$tooltip-font-size !default;
\$form-feedback-tooltip-line-height:   null !default;
\$form-feedback-tooltip-opacity:       \$tooltip-opacity !default;
\$form-feedback-tooltip-border-radius: \$tooltip-border-radius !default;
// scss-docs-start tooltip-feedback-variables


// Popovers

// scss-docs-start popover-variables
\$popover-font-size:                 \$font-size-sm !default;
\$popover-bg:                        \$white !default;
\$popover-max-width:                 276px !default;
\$popover-border-width:              \$border-width !default;
\$popover-border-color:              rgba(\$black, .2) !default;
\$popover-border-radius:             \$border-radius-lg !default;
\$popover-inner-border-radius:       subtract(\$popover-border-radius, \$popover-border-width) !default;
\$popover-box-shadow:                \$box-shadow !default;

\$popover-header-bg:                 shade-color(\$popover-bg, 6%) !default;
\$popover-header-color:              \$headings-color !default;
\$popover-header-padding-y:          .5rem !default;
\$popover-header-padding-x:          \$spacer !default;

\$popover-body-color:                \$body-color !default;
\$popover-body-padding-y:            \$spacer !default;
\$popover-body-padding-x:            \$spacer !default;

\$popover-arrow-width:               1rem !default;
\$popover-arrow-height:              .5rem !default;
\$popover-arrow-color:               \$popover-bg !default;

\$popover-arrow-outer-color:         fade-in(\$popover-border-color, .05) !default;
// scss-docs-end popover-variables


// Toasts

// scss-docs-start toast-variables
\$toast-max-width:                   350px !default;
\$toast-padding-x:                   .75rem !default;
\$toast-padding-y:                   .5rem !default;
\$toast-font-size:                   .875rem !default;
\$toast-color:                       null !default;
\$toast-background-color:            rgba(\$white, .85) !default;
\$toast-border-width:                1px !default;
\$toast-border-color:                rgba(0, 0, 0, .1) !default;
\$toast-border-radius:               \$border-radius !default;
\$toast-box-shadow:                  \$box-shadow !default;
\$toast-spacing:                     \$container-padding-x !default;

\$toast-header-color:                \$gray-600 !default;
\$toast-header-background-color:     rgba(\$white, .85) !default;
\$toast-header-border-color:         rgba(0, 0, 0, .05) !default;
// scss-docs-end toast-variables


// Badges

// scss-docs-start badge-variables
\$badge-font-size:                   .75em !default;
\$badge-font-weight:                 \$font-weight-bold !default;
\$badge-color:                       \$white !default;
\$badge-padding-y:                   .35em !default;
\$badge-padding-x:                   .65em !default;
\$badge-border-radius:               \$border-radius !default;
// scss-docs-end badge-variables


// Modals

// scss-docs-start modal-variables
\$modal-inner-padding:               \$spacer !default;

\$modal-footer-margin-between:       .5rem !default;

\$modal-dialog-margin:               .5rem !default;
\$modal-dialog-margin-y-sm-up:       1.75rem !default;

\$modal-title-line-height:           \$line-height-base !default;

\$modal-content-color:               null !default;
\$modal-content-bg:                  \$white !default;
\$modal-content-border-color:        rgba(\$black, .2) !default;
\$modal-content-border-width:        \$border-width !default;
\$modal-content-border-radius:       \$border-radius-lg !default;
\$modal-content-inner-border-radius: subtract(\$modal-content-border-radius, \$modal-content-border-width) !default;
\$modal-content-box-shadow-xs:       \$box-shadow-sm !default;
\$modal-content-box-shadow-sm-up:    \$box-shadow !default;

\$modal-backdrop-bg:                 \$black !default;
\$modal-backdrop-opacity:            .5 !default;
\$modal-header-border-color:         \$border-color !default;
\$modal-footer-border-color:         \$modal-header-border-color !default;
\$modal-header-border-width:         \$modal-content-border-width !default;
\$modal-footer-border-width:         \$modal-header-border-width !default;
\$modal-header-padding-y:            \$modal-inner-padding !default;
\$modal-header-padding-x:            \$modal-inner-padding !default;
\$modal-header-padding:              \$modal-header-padding-y \$modal-header-padding-x !default; // Keep this for backwards compatibility

\$modal-sm:                          300px !default;
\$modal-md:                          500px !default;
\$modal-lg:                          800px !default;
\$modal-xl:                          1140px !default;

\$modal-fade-transform:              translate(0, -50px) !default;
\$modal-show-transform:              none !default;
\$modal-transition:                  transform .3s ease-out !default;
\$modal-scale-transform:             scale(1.02) !default;
// scss-docs-end modal-variables


// Alerts
//
// Define alert colors, border radius, and padding.

// scss-docs-start alert-variables
\$alert-padding-y:               \$spacer !default;
\$alert-padding-x:               \$spacer !default;
\$alert-margin-bottom:           1rem !default;
\$alert-border-radius:           \$border-radius !default;
\$alert-link-font-weight:        \$font-weight-bold !default;
\$alert-border-width:            \$border-width !default;
\$alert-bg-scale:                -80% !default;
\$alert-border-scale:            -70% !default;
\$alert-color-scale:             40% !default;
\$alert-dismissible-padding-r:   \$alert-padding-x * 3 !default; // 3x covers width of x plus default padding on either side
// scss-docs-end alert-variables


// Progress bars

// scss-docs-start progress-variables
\$progress-height:                   1rem !default;
\$progress-font-size:                \$font-size-base * .75 !default;
\$progress-bg:                       \$gray-200 !default;
\$progress-border-radius:            \$border-radius !default;
\$progress-box-shadow:               \$box-shadow-inset !default;
\$progress-bar-color:                \$white !default;
\$progress-bar-bg:                   \$primary !default;
\$progress-bar-animation-timing:     1s linear infinite !default;
\$progress-bar-transition:           width .6s ease !default;
// scss-docs-end progress-variables


// List group

// scss-docs-start list-group-variables
\$list-group-color:                  \$gray-900 !default;
\$list-group-bg:                     \$white !default;
\$list-group-border-color:           rgba(\$black, .125) !default;
\$list-group-border-width:           \$border-width !default;
\$list-group-border-radius:          \$border-radius !default;

\$list-group-item-padding-y:         \$spacer / 2 !default;
\$list-group-item-padding-x:         \$spacer !default;
\$list-group-item-bg-scale:          -80% !default;
\$list-group-item-color-scale:       40% !default;

\$list-group-hover-bg:               \$gray-100 !default;
\$list-group-active-color:           \$component-active-color !default;
\$list-group-active-bg:              \$component-active-bg !default;
\$list-group-active-border-color:    \$list-group-active-bg !default;

\$list-group-disabled-color:         \$gray-600 !default;
\$list-group-disabled-bg:            \$list-group-bg !default;

\$list-group-action-color:           \$gray-700 !default;
\$list-group-action-hover-color:     \$list-group-action-color !default;

\$list-group-action-active-color:    \$body-color !default;
\$list-group-action-active-bg:       \$gray-200 !default;
// scss-docs-end list-group-variables


// Image thumbnails

// scss-docs-start thumbnail-variables
\$thumbnail-padding:                 .25rem !default;
\$thumbnail-bg:                      \$body-bg !default;
\$thumbnail-border-width:            \$border-width !default;
\$thumbnail-border-color:            \$gray-300 !default;
\$thumbnail-border-radius:           \$border-radius !default;
\$thumbnail-box-shadow:              \$box-shadow-sm !default;
// scss-docs-end thumbnail-variables


// Figures

// scss-docs-start figure-variables
\$figure-caption-font-size:          \$small-font-size !default;
\$figure-caption-color:              \$gray-600 !default;
// scss-docs-end figure-variables


// Breadcrumbs

// scss-docs-start breadcrumb-variables
\$breadcrumb-font-size:              null !default;
\$breadcrumb-padding-y:              0 !default;
\$breadcrumb-padding-x:              0 !default;
\$breadcrumb-item-padding-x:         .5rem !default;
\$breadcrumb-margin-bottom:          1rem !default;
\$breadcrumb-bg:                     null !default;
\$breadcrumb-divider-color:          \$gray-600 !default;
\$breadcrumb-active-color:           \$gray-600 !default;
\$breadcrumb-divider:                quote(\"/\") !default;
\$breadcrumb-divider-flipped:        \$breadcrumb-divider !default;
\$breadcrumb-border-radius:          null !default;
// scss-docs-end breadcrumb-variables

// Carousel

// scss-docs-start carousel-variables
\$carousel-control-color:             \$white !default;
\$carousel-control-width:             15% !default;
\$carousel-control-opacity:           .5 !default;
\$carousel-control-hover-opacity:     .9 !default;
\$carousel-control-transition:        opacity .15s ease !default;

\$carousel-indicator-width:           30px !default;
\$carousel-indicator-height:          3px !default;
\$carousel-indicator-hit-area-height: 10px !default;
\$carousel-indicator-spacer:          3px !default;
\$carousel-indicator-opacity:         .5 !default;
\$carousel-indicator-active-bg:       \$white !default;
\$carousel-indicator-active-opacity:  1 !default;
\$carousel-indicator-transition:      opacity .6s ease !default;

\$carousel-caption-width:             70% !default;
\$carousel-caption-color:             \$white !default;
\$carousel-caption-padding-y:         1.25rem !default;
\$carousel-caption-spacer:            1.25rem !default;

\$carousel-control-icon-width:        2rem !default;

\$carousel-control-prev-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$carousel-control-color}'><path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>\") !default;
\$carousel-control-next-icon-bg:      url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$carousel-control-color}'><path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/></svg>\") !default;

\$carousel-transition-duration:       .6s !default;
\$carousel-transition:                transform \$carousel-transition-duration ease-in-out !default; // Define transform transition first if using multiple transitions (e.g., `transform 2s ease, opacity .5s ease-out`)

\$carousel-dark-indicator-active-bg:  \$black !default;
\$carousel-dark-caption-color:        \$black !default;
\$carousel-dark-control-icon-filter:  invert(1) grayscale(100) !default;
// scss-docs-end carousel-variables


// Spinners

// scss-docs-start spinner-variables
\$spinner-width:           2rem !default;
\$spinner-height:          \$spinner-width !default;
\$spinner-vertical-align:  -.125em !default;
\$spinner-border-width:    .25em !default;
\$spinner-animation-speed: .75s !default;

\$spinner-width-sm:        1rem !default;
\$spinner-height-sm:       \$spinner-width-sm !default;
\$spinner-border-width-sm: .2em !default;
// scss-docs-end spinner-variables


// Close

// scss-docs-start close-variables
\$btn-close-width:            1em !default;
\$btn-close-height:           \$btn-close-width !default;
\$btn-close-padding-x:        .25em !default;
\$btn-close-padding-y:        \$btn-close-padding-x !default;
\$btn-close-color:            \$black !default;
\$btn-close-bg:               url(\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{\$btn-close-color}'><path d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/></svg>\") !default;
\$btn-close-focus-shadow:     \$input-btn-focus-box-shadow !default;
\$btn-close-opacity:          .5 !default;
\$btn-close-hover-opacity:    .75 !default;
\$btn-close-focus-opacity:    1 !default;
\$btn-close-disabled-opacity: .25 !default;
\$btn-close-white-filter:     invert(1) grayscale(100%) brightness(200%) !default;
// scss-docs-end close-variables


// Offcanvas

// scss-docs-start offcanvas-variables
\$offcanvas-padding-y:               \$modal-inner-padding !default;
\$offcanvas-padding-x:               \$modal-inner-padding !default;
\$offcanvas-horizontal-width:        400px !default;
\$offcanvas-vertical-height:         30vh !default;
\$offcanvas-transition-duration:     .3s !default;
\$offcanvas-border-color:            \$modal-content-border-color !default;
\$offcanvas-border-width:            \$modal-content-border-width !default;
\$offcanvas-title-line-height:       \$modal-title-line-height !default;
\$offcanvas-bg-color:                \$modal-content-bg !default;
\$offcanvas-color:                   \$modal-content-color !default;
\$offcanvas-box-shadow:              \$modal-content-box-shadow-xs !default;
// scss-docs-end offcanvas-variables

// Code

\$code-font-size:                    \$small-font-size !default;
\$code-color:                        \$pink !default;

\$kbd-padding-y:                     .2rem !default;
\$kbd-padding-x:                     .4rem !default;
\$kbd-font-size:                     \$code-font-size !default;
\$kbd-color:                         \$white !default;
\$kbd-bg:                            \$gray-900 !default;

\$pre-color:                         null !default;
", "scss/bootstrap/scss/_variables.scss", "C:\\Users\\Eya\\projet\\templates\\scss\\bootstrap\\scss\\_variables.scss");
    }
}
