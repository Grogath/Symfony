<?php

/* PortfolioPortfolioBundle:Portfolio:admin.html.twig */
class __TwigTemplate_cf4b867f0a5c50a91b157d2e14dafe9cbd4dd7c1a7179172ef28cf2e64f37a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PortfolioPortfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PortfolioPortfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Portfolio - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"row\">
\t\t<p></p>
\t\t<div class=\"col-md-12\">
\t\t\t<form class=\"img-thumbnail col-md-10 form\" name=\"addArticle\" action=\"/Symfony/web/app_dev.php/addArticle\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t<center><h2>New article<h2/></center><br/>
\t\t\t\t<div class=\"upload col-md-4s\">
\t\t\t\t\t<input type=\"file\" name=\"files\" multiple=\"multiple\" class=\"form-control\"><br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-4\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<input id=\"title\" name=\"title\" type=\"text\" class=\"form-control\" placeholder=\"Title\"> <br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-4\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<input id=\"autor\" name=\"autor\" type=\"text\" class=\"form-control\" placeholder=\"Autor\"> <br/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls-group col-md-10\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<textarea id=\"description\" name=\"description\" class=\"form-control\" placeholder=\"Description\" rows=\"3\"></textarea><br/>
\t\t\t\t\t\t<textarea id=\"content\" name=\"content\" class=\"form-control\" placeholder=\"Content\" rows=\"5\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"position: absolute; bottom: 10px; right: 0;\" class=\"controls-group col-md-6\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<button id=\"contact-submit\" type=\"submit\" class=\"btn btn-primary pull-right\">Send</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div >
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "PortfolioPortfolioBundle:Portfolio:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  81 => 23,  53 => 15,  113 => 36,  97 => 42,  77 => 38,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 49,  119 => 49,  102 => 32,  71 => 23,  67 => 15,  63 => 30,  59 => 17,  38 => 13,  94 => 28,  89 => 48,  85 => 40,  75 => 36,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 27,  46 => 12,  27 => 9,  44 => 12,  31 => 8,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 51,  117 => 44,  105 => 40,  91 => 41,  62 => 17,  49 => 12,  24 => 4,  25 => 6,  19 => 2,  79 => 18,  72 => 16,  69 => 33,  47 => 14,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 18,  55 => 16,  52 => 17,  50 => 10,  43 => 10,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 37,  112 => 42,  109 => 44,  106 => 11,  103 => 43,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 23,  57 => 15,  54 => 10,  51 => 15,  48 => 14,  45 => 11,  42 => 8,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}