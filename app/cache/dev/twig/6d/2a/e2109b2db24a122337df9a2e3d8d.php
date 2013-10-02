<?php

/* BcBootstrapBundle:Pagination:pagination.html.twig */
class __TwigTemplate_6d2ae2109b2db24a122337df9a2e3d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("style", $context))) {
            // line 4
            echo "    ";
            $context["style"] = "pagination";
        }
        // line 6
        echo "
";
        // line 7
        if ((!array_key_exists("prev_label", $context))) {
            // line 8
            echo "    ";
            $context["prev_label"] = "Previous";
        }
        // line 10
        if ((!array_key_exists("next_label", $context))) {
            // line 11
            echo "    ";
            $context["next_label"] = "Next";
        }
        // line 13
        if ((!array_key_exists("first_label", $context))) {
            // line 14
            echo "    ";
            $context["first_label"] = "First";
        }
        // line 16
        if ((!array_key_exists("last_label", $context))) {
            // line 17
            echo "    ";
            $context["last_label"] = "Last";
        }
        // line 19
        echo "

";
        // line 21
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 22
            echo "    ";
            if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "pagination")) {
                // line 23
                echo "        ";
                $context["orientation_class"] = "";
                // line 24
                echo "        ";
                if (array_key_exists("alignment", $context)) {
                    // line 25
                    echo "            ";
                    if (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "center")) {
                        // line 26
                        echo "                ";
                        $context["orientation_class"] = " pagination-centered";
                        // line 27
                        echo "            ";
                    } elseif (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "right")) {
                        // line 28
                        echo "                ";
                        $context["orientation_class"] = " pagination-right";
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        <div class=\"pagination";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["orientation_class"]) ? $context["orientation_class"] : $this->getContext($context, "orientation_class")), "html", null, true);
                echo "\">
            <ul>
            ";
                // line 34
                if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) ? $context["first_label"] : $this->getContext($context, "first_label"));
                    echo "</a></li>
            ";
                }
                // line 37
                echo "
            ";
                // line 38
                if (array_key_exists("previous", $context)) {
                    // line 39
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                }
                // line 41
                echo "
            ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 43
                    echo "                ";
                    if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                        // line 44
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 46
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 48
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
            ";
                // line 51
                if (array_key_exists("next", $context)) {
                    // line 52
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) ? $context["last_label"] : $this->getContext($context, "last_label"));
                    echo "</a></li>
            ";
                }
                // line 58
                echo "            </ul>
        </div>
    ";
            } else {
                // line 61
                echo "        ";
                if ((!array_key_exists("aligned", $context))) {
                    // line 62
                    echo "            ";
                    $context["aligned"] = false;
                    // line 63
                    echo "        ";
                }
                // line 64
                echo "        <ul class=\"pager\">
            ";
                // line 65
                if (array_key_exists("previous", $context)) {
                    // line 66
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</span></li>
            ";
                }
                // line 70
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 71
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 73
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</span></li>
            ";
                }
                // line 75
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BcBootstrapBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  232 => 73,  207 => 68,  195 => 66,  190 => 64,  184 => 62,  181 => 61,  155 => 52,  153 => 51,  150 => 50,  137 => 46,  129 => 44,  126 => 43,  76 => 27,  70 => 25,  77 => 39,  53 => 23,  65 => 14,  34 => 8,  23 => 3,  81 => 40,  58 => 17,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 71,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 70,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 48,  135 => 53,  119 => 41,  102 => 32,  71 => 35,  67 => 24,  63 => 13,  59 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 55,  163 => 54,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 32,  62 => 23,  49 => 16,  94 => 28,  89 => 35,  85 => 30,  75 => 17,  68 => 15,  56 => 9,  38 => 6,  26 => 12,  87 => 26,  31 => 7,  25 => 3,  28 => 6,  24 => 4,  21 => 2,  19 => 2,  93 => 27,  88 => 31,  78 => 21,  46 => 14,  44 => 12,  27 => 4,  79 => 28,  72 => 16,  69 => 25,  47 => 10,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 35,  96 => 34,  83 => 25,  74 => 18,  66 => 24,  55 => 19,  52 => 21,  50 => 10,  43 => 13,  41 => 7,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 65,  189 => 71,  187 => 63,  182 => 66,  176 => 58,  173 => 65,  168 => 56,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 42,  116 => 41,  112 => 42,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 36,  86 => 28,  82 => 29,  80 => 19,  73 => 26,  64 => 23,  60 => 6,  57 => 12,  54 => 11,  51 => 17,  48 => 12,  45 => 14,  42 => 13,  39 => 11,  36 => 6,  33 => 8,  30 => 2,);
    }
}
