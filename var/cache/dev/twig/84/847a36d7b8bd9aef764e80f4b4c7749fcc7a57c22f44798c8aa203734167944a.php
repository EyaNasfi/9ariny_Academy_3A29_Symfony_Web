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

/* lib/easing/easing.js */
class __TwigTemplate_0337f1a58abfa54ba5aea5558961080cd98318ccd8a3babdd2abdb31a339193d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lib/easing/easing.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lib/easing/easing.js"));

        // line 1
        echo "/*
 * jQuery Easing v1.4.1 - http://gsgd.co.uk/sandbox/jquery/easing/
 * Open source under the BSD License.
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * https://raw.github.com/gdsmith/jquery-easing/master/LICENSE
*/

(function (factory) {
\tif (typeof define === \"function\" && define.amd) {
\t\tdefine(['jquery'], function (\$) {
\t\t\treturn factory(\$);
\t\t});
\t} else if (typeof module === \"object\" && typeof module.exports === \"object\") {
\t\texports = factory(require('jquery'));
\t} else {
\t\tfactory(jQuery);
\t}
})(function(\$){

// Preserve the original jQuery \"swing\" easing as \"jswing\"
if (typeof \$.easing !== 'undefined') {
\t\$.easing['jswing'] = \$.easing['swing'];
}

var pow = Math.pow,
\tsqrt = Math.sqrt,
\tsin = Math.sin,
\tcos = Math.cos,
\tPI = Math.PI,
\tc1 = 1.70158,
\tc2 = c1 * 1.525,
\tc3 = c1 + 1,
\tc4 = ( 2 * PI ) / 3,
\tc5 = ( 2 * PI ) / 4.5;

// x is the fraction of animation progress, in the range 0..1
function bounceOut(x) {
\tvar n1 = 7.5625,
\t\td1 = 2.75;
\tif ( x < 1/d1 ) {
\t\treturn n1*x*x;
\t} else if ( x < 2/d1 ) {
\t\treturn n1*(x-=(1.5/d1))*x + .75;
\t} else if ( x < 2.5/d1 ) {
\t\treturn n1*(x-=(2.25/d1))*x + .9375;
\t} else {
\t\treturn n1*(x-=(2.625/d1))*x + .984375;
\t}
}

\$.extend( \$.easing,
{
\tdef: 'easeOutQuad',
\tswing: function (x) {
\t\treturn \$.easing[\$.easing.def](x);
\t},
\teaseInQuad: function (x) {
\t\treturn x * x;
\t},
\teaseOutQuad: function (x) {
\t\treturn 1 - ( 1 - x ) * ( 1 - x );
\t},
\teaseInOutQuad: function (x) {
\t\treturn x < 0.5 ?
\t\t\t2 * x * x :
\t\t\t1 - pow( -2 * x + 2, 2 ) / 2;
\t},
\teaseInCubic: function (x) {
\t\treturn x * x * x;
\t},
\teaseOutCubic: function (x) {
\t\treturn 1 - pow( 1 - x, 3 );
\t},
\teaseInOutCubic: function (x) {
\t\treturn x < 0.5 ?
\t\t\t4 * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 3 ) / 2;
\t},
\teaseInQuart: function (x) {
\t\treturn x * x * x * x;
\t},
\teaseOutQuart: function (x) {
\t\treturn 1 - pow( 1 - x, 4 );
\t},
\teaseInOutQuart: function (x) {
\t\treturn x < 0.5 ?
\t\t\t8 * x * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 4 ) / 2;
\t},
\teaseInQuint: function (x) {
\t\treturn x * x * x * x * x;
\t},
\teaseOutQuint: function (x) {
\t\treturn 1 - pow( 1 - x, 5 );
\t},
\teaseInOutQuint: function (x) {
\t\treturn x < 0.5 ?
\t\t\t16 * x * x * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 5 ) / 2;
\t},
\teaseInSine: function (x) {
\t\treturn 1 - cos( x * PI/2 );
\t},
\teaseOutSine: function (x) {
\t\treturn sin( x * PI/2 );
\t},
\teaseInOutSine: function (x) {
\t\treturn -( cos( PI * x ) - 1 ) / 2;
\t},
\teaseInExpo: function (x) {
\t\treturn x === 0 ? 0 : pow( 2, 10 * x - 10 );
\t},
\teaseOutExpo: function (x) {
\t\treturn x === 1 ? 1 : 1 - pow( 2, -10 * x );
\t},
\teaseInOutExpo: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 : x < 0.5 ?
\t\t\tpow( 2, 20 * x - 10 ) / 2 :
\t\t\t( 2 - pow( 2, -20 * x + 10 ) ) / 2;
\t},
\teaseInCirc: function (x) {
\t\treturn 1 - sqrt( 1 - pow( x, 2 ) );
\t},
\teaseOutCirc: function (x) {
\t\treturn sqrt( 1 - pow( x - 1, 2 ) );
\t},
\teaseInOutCirc: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( 1 - sqrt( 1 - pow( 2 * x, 2 ) ) ) / 2 :
\t\t\t( sqrt( 1 - pow( -2 * x + 2, 2 ) ) + 1 ) / 2;
\t},
\teaseInElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 :
\t\t\t-pow( 2, 10 * x - 10 ) * sin( ( x * 10 - 10.75 ) * c4 );
\t},
\teaseOutElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 :
\t\t\tpow( 2, -10 * x ) * sin( ( x * 10 - 0.75 ) * c4 ) + 1;
\t},
\teaseInOutElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 : x < 0.5 ?
\t\t\t-( pow( 2, 20 * x - 10 ) * sin( ( 20 * x - 11.125 ) * c5 )) / 2 :
\t\t\tpow( 2, -20 * x + 10 ) * sin( ( 20 * x - 11.125 ) * c5 ) / 2 + 1;
\t},
\teaseInBack: function (x) {
\t\treturn c3 * x * x * x - c1 * x * x;
\t},
\teaseOutBack: function (x) {
\t\treturn 1 + c3 * pow( x - 1, 3 ) + c1 * pow( x - 1, 2 );
\t},
\teaseInOutBack: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( pow( 2 * x, 2 ) * ( ( c2 + 1 ) * 2 * x - c2 ) ) / 2 :
\t\t\t( pow( 2 * x - 2, 2 ) *( ( c2 + 1 ) * ( x * 2 - 2 ) + c2 ) + 2 ) / 2;
\t},
\teaseInBounce: function (x) {
\t\treturn 1 - bounceOut( 1 - x );
\t},
\teaseOutBounce: bounceOut,
\teaseInOutBounce: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( 1 - bounceOut( 1 - 2 * x ) ) / 2 :
\t\t\t( 1 + bounceOut( 2 * x - 1 ) ) / 2;
\t}
});

});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "lib/easing/easing.js";
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
        return new Source("/*
 * jQuery Easing v1.4.1 - http://gsgd.co.uk/sandbox/jquery/easing/
 * Open source under the BSD License.
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * https://raw.github.com/gdsmith/jquery-easing/master/LICENSE
*/

(function (factory) {
\tif (typeof define === \"function\" && define.amd) {
\t\tdefine(['jquery'], function (\$) {
\t\t\treturn factory(\$);
\t\t});
\t} else if (typeof module === \"object\" && typeof module.exports === \"object\") {
\t\texports = factory(require('jquery'));
\t} else {
\t\tfactory(jQuery);
\t}
})(function(\$){

// Preserve the original jQuery \"swing\" easing as \"jswing\"
if (typeof \$.easing !== 'undefined') {
\t\$.easing['jswing'] = \$.easing['swing'];
}

var pow = Math.pow,
\tsqrt = Math.sqrt,
\tsin = Math.sin,
\tcos = Math.cos,
\tPI = Math.PI,
\tc1 = 1.70158,
\tc2 = c1 * 1.525,
\tc3 = c1 + 1,
\tc4 = ( 2 * PI ) / 3,
\tc5 = ( 2 * PI ) / 4.5;

// x is the fraction of animation progress, in the range 0..1
function bounceOut(x) {
\tvar n1 = 7.5625,
\t\td1 = 2.75;
\tif ( x < 1/d1 ) {
\t\treturn n1*x*x;
\t} else if ( x < 2/d1 ) {
\t\treturn n1*(x-=(1.5/d1))*x + .75;
\t} else if ( x < 2.5/d1 ) {
\t\treturn n1*(x-=(2.25/d1))*x + .9375;
\t} else {
\t\treturn n1*(x-=(2.625/d1))*x + .984375;
\t}
}

\$.extend( \$.easing,
{
\tdef: 'easeOutQuad',
\tswing: function (x) {
\t\treturn \$.easing[\$.easing.def](x);
\t},
\teaseInQuad: function (x) {
\t\treturn x * x;
\t},
\teaseOutQuad: function (x) {
\t\treturn 1 - ( 1 - x ) * ( 1 - x );
\t},
\teaseInOutQuad: function (x) {
\t\treturn x < 0.5 ?
\t\t\t2 * x * x :
\t\t\t1 - pow( -2 * x + 2, 2 ) / 2;
\t},
\teaseInCubic: function (x) {
\t\treturn x * x * x;
\t},
\teaseOutCubic: function (x) {
\t\treturn 1 - pow( 1 - x, 3 );
\t},
\teaseInOutCubic: function (x) {
\t\treturn x < 0.5 ?
\t\t\t4 * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 3 ) / 2;
\t},
\teaseInQuart: function (x) {
\t\treturn x * x * x * x;
\t},
\teaseOutQuart: function (x) {
\t\treturn 1 - pow( 1 - x, 4 );
\t},
\teaseInOutQuart: function (x) {
\t\treturn x < 0.5 ?
\t\t\t8 * x * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 4 ) / 2;
\t},
\teaseInQuint: function (x) {
\t\treturn x * x * x * x * x;
\t},
\teaseOutQuint: function (x) {
\t\treturn 1 - pow( 1 - x, 5 );
\t},
\teaseInOutQuint: function (x) {
\t\treturn x < 0.5 ?
\t\t\t16 * x * x * x * x * x :
\t\t\t1 - pow( -2 * x + 2, 5 ) / 2;
\t},
\teaseInSine: function (x) {
\t\treturn 1 - cos( x * PI/2 );
\t},
\teaseOutSine: function (x) {
\t\treturn sin( x * PI/2 );
\t},
\teaseInOutSine: function (x) {
\t\treturn -( cos( PI * x ) - 1 ) / 2;
\t},
\teaseInExpo: function (x) {
\t\treturn x === 0 ? 0 : pow( 2, 10 * x - 10 );
\t},
\teaseOutExpo: function (x) {
\t\treturn x === 1 ? 1 : 1 - pow( 2, -10 * x );
\t},
\teaseInOutExpo: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 : x < 0.5 ?
\t\t\tpow( 2, 20 * x - 10 ) / 2 :
\t\t\t( 2 - pow( 2, -20 * x + 10 ) ) / 2;
\t},
\teaseInCirc: function (x) {
\t\treturn 1 - sqrt( 1 - pow( x, 2 ) );
\t},
\teaseOutCirc: function (x) {
\t\treturn sqrt( 1 - pow( x - 1, 2 ) );
\t},
\teaseInOutCirc: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( 1 - sqrt( 1 - pow( 2 * x, 2 ) ) ) / 2 :
\t\t\t( sqrt( 1 - pow( -2 * x + 2, 2 ) ) + 1 ) / 2;
\t},
\teaseInElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 :
\t\t\t-pow( 2, 10 * x - 10 ) * sin( ( x * 10 - 10.75 ) * c4 );
\t},
\teaseOutElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 :
\t\t\tpow( 2, -10 * x ) * sin( ( x * 10 - 0.75 ) * c4 ) + 1;
\t},
\teaseInOutElastic: function (x) {
\t\treturn x === 0 ? 0 : x === 1 ? 1 : x < 0.5 ?
\t\t\t-( pow( 2, 20 * x - 10 ) * sin( ( 20 * x - 11.125 ) * c5 )) / 2 :
\t\t\tpow( 2, -20 * x + 10 ) * sin( ( 20 * x - 11.125 ) * c5 ) / 2 + 1;
\t},
\teaseInBack: function (x) {
\t\treturn c3 * x * x * x - c1 * x * x;
\t},
\teaseOutBack: function (x) {
\t\treturn 1 + c3 * pow( x - 1, 3 ) + c1 * pow( x - 1, 2 );
\t},
\teaseInOutBack: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( pow( 2 * x, 2 ) * ( ( c2 + 1 ) * 2 * x - c2 ) ) / 2 :
\t\t\t( pow( 2 * x - 2, 2 ) *( ( c2 + 1 ) * ( x * 2 - 2 ) + c2 ) + 2 ) / 2;
\t},
\teaseInBounce: function (x) {
\t\treturn 1 - bounceOut( 1 - x );
\t},
\teaseOutBounce: bounceOut,
\teaseInOutBounce: function (x) {
\t\treturn x < 0.5 ?
\t\t\t( 1 - bounceOut( 1 - 2 * x ) ) / 2 :
\t\t\t( 1 + bounceOut( 2 * x - 1 ) ) / 2;
\t}
});

});
", "lib/easing/easing.js", "C:\\Users\\Eya\\projet\\templates\\lib\\easing\\easing.js");
    }
}
