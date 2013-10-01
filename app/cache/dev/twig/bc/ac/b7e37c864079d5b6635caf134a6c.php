<?php

/* ErunnerTicTacToeBundle:Message:chat.html.twig */
class __TwigTemplate_bcacb7e37c864079d5b6635caf134a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"span4\">
            <div class=\"hero-unit\">
                ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                    <a><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "user"), "userName", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getCreated", array(), "method"), "H:i d-m-Y"), "html", null, true);
            echo " </b><br> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "getText", array(), "method"), "html", null, true);
            echo "</a>
                    ";
            // line 9
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 10
                echo "                        <a class=\"btn btn-primary btn-large\" href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_message", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                echo ">delete</a>
                    ";
            }
            // line 12
            echo "                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                <br>
                <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("chat");
        echo " \" method=\"POST\" novalidate ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    ";
        // line 16
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 17
            echo "                        <div class=\"alert\">
                            <strong>Warning!</strong>";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 21
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
            </div>
        </div>
        <div class=\"span8\">...</div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ErunnerTicTacToeBundle:Message:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  77 => 29,  65 => 33,  34 => 8,  23 => 3,  81 => 25,  58 => 17,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 20,  59 => 29,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 9,  94 => 28,  89 => 20,  85 => 27,  75 => 17,  68 => 21,  56 => 9,  38 => 6,  26 => 12,  87 => 29,  31 => 4,  25 => 3,  28 => 3,  24 => 7,  21 => 2,  19 => 1,  93 => 27,  88 => 6,  78 => 18,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 34,  47 => 20,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 27,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 11,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 32,  80 => 30,  73 => 16,  64 => 14,  60 => 6,  57 => 12,  54 => 16,  51 => 10,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
