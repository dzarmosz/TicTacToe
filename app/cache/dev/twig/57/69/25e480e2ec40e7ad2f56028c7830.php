<?php

/* BcBootstrapBundle:Menu:menu.html.twig */
class __TwigTemplate_576925e480e2ec40e7ad2f56028c7830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('list', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('dropdownList', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('listList', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('children', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('item', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('linkElement', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('dropdownElement', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('dividerElement', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('spanElement', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 20
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => 0));
        // line 21
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass") == "current"))) {
            // line 22
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentClass" => "active"));
        }
        // line 24
        echo "
";
        // line 25
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 26
        $this->displayBlock("list", $context, $blocks);
    }

    // line 29
    public function block_list($context, array $blocks = array())
    {
        // line 30
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 31
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " nav"))));
            // line 32
            echo "
    ";
            // line 33
            $context["listClass"] = "";
            // line 34
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "tabs"))) {
                // line 35
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 36
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "pills"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "stacked_tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "stacked_pills"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 44
                echo "    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "right"))) {
                // line 47
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . " pull-right"));
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "left"))) {
                // line 49
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . "pull-left"));
                // line 50
                echo "    ";
            }
            // line 51
            echo "
    ";
            // line 52
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))))));
            // line 53
            echo "
    <ul";
            // line 54
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 55
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 60
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 63
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " dropdown-menu"))));
            // line 64
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 65
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_listList($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 74
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_children($context, array $blocks = array())
    {
        // line 81
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 82
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 84
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 85
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 87
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") + 1)));
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 93
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 96
    public function block_item($context, array $blocks = array())
    {
        // line 97
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 99
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 100
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")))) {
                // line 101
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")))) {
                // line 103
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 105
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 106
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 108
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 109
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 111
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list")) || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 112
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "nav-header"));
            } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 114
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
            }
            // line 117
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 119
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider")))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))) {
                // line 120
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
                // line 122
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider"));
            }
            // line 125
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 126
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 129
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 130
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
            } elseif (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))) {
                // line 132
                echo "        ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((array_key_exists("matcher", $context) && (!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 134
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && (!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 136
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 138
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 141
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 142
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 143
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 144
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list") || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 145
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 147
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 149
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 151
            echo "    </li>
";
        }
    }

    // line 155
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 157
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes");
        // line 160
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class"), "")) : ("")) . " dropdown-toggle"))));
        // line 161
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("data-toggle" => "dropdown"));
        // line 162
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => (isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 167
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 173
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
        } else {
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BcBootstrapBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 4,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  424 => 161,  421 => 160,  418 => 159,  416 => 158,  401 => 155,  395 => 151,  391 => 149,  383 => 145,  377 => 142,  375 => 141,  371 => 138,  367 => 136,  363 => 134,  359 => 132,  356 => 130,  352 => 129,  349 => 126,  347 => 125,  344 => 122,  339 => 119,  334 => 114,  331 => 112,  329 => 111,  326 => 109,  324 => 108,  321 => 106,  319 => 105,  316 => 103,  313 => 101,  311 => 100,  307 => 97,  304 => 96,  300 => 93,  281 => 89,  262 => 87,  259 => 85,  257 => 84,  255 => 82,  253 => 81,  250 => 79,  236 => 72,  233 => 71,  216 => 63,  213 => 62,  211 => 61,  200 => 55,  191 => 52,  188 => 51,  185 => 50,  174 => 46,  165 => 43,  110 => 21,  242 => 75,  232 => 73,  207 => 68,  195 => 66,  190 => 64,  184 => 62,  181 => 61,  155 => 52,  153 => 39,  150 => 38,  137 => 46,  129 => 44,  126 => 43,  76 => 165,  70 => 25,  84 => 171,  77 => 29,  65 => 33,  34 => 9,  23 => 3,  81 => 170,  58 => 17,  20 => 1,  480 => 3,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 167,  437 => 166,  435 => 146,  430 => 144,  427 => 162,  423 => 142,  413 => 157,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 147,  384 => 121,  381 => 144,  379 => 143,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 120,  337 => 117,  322 => 101,  314 => 99,  312 => 98,  309 => 99,  305 => 95,  298 => 92,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 88,  258 => 81,  252 => 80,  247 => 78,  241 => 74,  229 => 73,  220 => 71,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 30,  107 => 36,  61 => 95,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 73,  235 => 74,  230 => 82,  227 => 81,  224 => 65,  221 => 77,  219 => 64,  217 => 70,  208 => 60,  204 => 72,  179 => 48,  159 => 41,  143 => 48,  135 => 53,  119 => 25,  102 => 32,  71 => 156,  67 => 24,  63 => 20,  59 => 79,  201 => 92,  196 => 54,  183 => 82,  171 => 45,  166 => 55,  163 => 54,  158 => 67,  156 => 40,  151 => 63,  142 => 59,  138 => 34,  136 => 33,  121 => 26,  117 => 44,  105 => 15,  91 => 32,  62 => 23,  49 => 60,  94 => 28,  89 => 173,  85 => 30,  75 => 17,  68 => 21,  56 => 78,  38 => 6,  26 => 12,  87 => 29,  31 => 8,  25 => 3,  28 => 6,  24 => 4,  21 => 2,  19 => 2,  93 => 9,  88 => 31,  78 => 18,  46 => 59,  44 => 29,  27 => 4,  79 => 166,  72 => 16,  69 => 155,  47 => 20,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 39,  108 => 20,  101 => 32,  98 => 11,  96 => 10,  83 => 25,  74 => 157,  66 => 154,  55 => 19,  52 => 21,  50 => 10,  43 => 13,  41 => 28,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 53,  189 => 71,  187 => 63,  182 => 49,  176 => 47,  173 => 65,  168 => 44,  164 => 59,  162 => 42,  154 => 58,  149 => 51,  147 => 37,  144 => 36,  141 => 35,  133 => 32,  130 => 31,  125 => 29,  122 => 42,  116 => 24,  112 => 22,  109 => 38,  106 => 37,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 172,  82 => 29,  80 => 30,  73 => 26,  64 => 96,  60 => 6,  57 => 12,  54 => 71,  51 => 70,  48 => 12,  45 => 14,  42 => 9,  39 => 15,  36 => 14,  33 => 8,  30 => 2,);
    }
}
