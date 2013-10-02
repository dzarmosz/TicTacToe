<?php

/* ::base.html.twig */
class __TwigTemplate_99c170cf8ea58870d88fe6ac6a501e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Tic Tac Toe</title>
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    </head>

    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">
                            <li class=\"active\">
                                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("chat");
        echo "\">Game</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("show_profile");
        echo "\">Show profile</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("edit_profile");
        echo "\">Edit profile</a>
                            </li>
                            <li class=\"last\">
                                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div style=\"margin: 60px 0 0 0;\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 39,  53 => 23,  65 => 21,  34 => 8,  23 => 4,  81 => 40,  58 => 17,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 35,  67 => 15,  63 => 20,  59 => 26,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 28,  89 => 35,  85 => 27,  75 => 17,  68 => 21,  56 => 9,  38 => 6,  26 => 12,  87 => 29,  31 => 7,  25 => 3,  28 => 6,  24 => 7,  21 => 2,  19 => 2,  93 => 27,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 6,  79 => 18,  72 => 16,  69 => 25,  47 => 20,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 27,  66 => 24,  55 => 15,  52 => 21,  50 => 16,  43 => 11,  41 => 17,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 36,  86 => 28,  82 => 32,  80 => 19,  73 => 37,  64 => 14,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 14,  42 => 9,  39 => 7,  36 => 10,  33 => 4,  30 => 2,);
    }
}
