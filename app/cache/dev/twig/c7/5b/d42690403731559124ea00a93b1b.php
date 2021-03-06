<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_c75bd42690403731559124ea00a93b1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1322 => 382,  1296 => 377,  1271 => 376,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1188 => 343,  1185 => 342,  1177 => 338,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1053 => 292,  1048 => 290,  1036 => 284,  1032 => 283,  1029 => 282,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  889 => 224,  881 => 220,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  729 => 155,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  459 => 69,  450 => 64,  442 => 62,  428 => 59,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  350 => 26,  308 => 13,  271 => 374,  260 => 363,  245 => 335,  225 => 298,  186 => 239,  146 => 181,  295 => 275,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  340 => 145,  328 => 139,  296 => 121,  293 => 6,  290 => 5,  276 => 381,  806 => 488,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  698 => 469,  690 => 467,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  645 => 460,  630 => 455,  625 => 453,  616 => 450,  602 => 449,  547 => 93,  527 => 91,  520 => 406,  515 => 85,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  342 => 23,  338 => 135,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  248 => 336,  90 => 27,  178 => 59,  175 => 58,  118 => 49,  113 => 40,  100 => 36,  353 => 149,  332 => 20,  318 => 111,  306 => 107,  303 => 122,  291 => 102,  288 => 4,  265 => 105,  263 => 365,  161 => 202,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 383,  1321 => 367,  1319 => 381,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 375,  1266 => 374,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 369,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 346,  1193 => 345,  1190 => 344,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 337,  1172 => 336,  1169 => 313,  1166 => 332,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 308,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 299,  1059 => 272,  1056 => 293,  1054 => 270,  1051 => 291,  1043 => 265,  1040 => 285,  1038 => 263,  1035 => 262,  1027 => 281,  1024 => 280,  1021 => 256,  1019 => 255,  1016 => 276,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 260,  976 => 259,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 253,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 225,  890 => 199,  887 => 198,  878 => 219,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 484,  776 => 165,  769 => 171,  767 => 170,  762 => 160,  759 => 159,  741 => 158,  739 => 156,  736 => 156,  727 => 151,  724 => 154,  721 => 153,  715 => 151,  713 => 146,  708 => 145,  705 => 144,  702 => 470,  696 => 140,  694 => 138,  686 => 466,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 461,  647 => 123,  641 => 121,  638 => 118,  636 => 119,  633 => 118,  623 => 114,  621 => 452,  618 => 451,  610 => 108,  607 => 107,  604 => 106,  601 => 105,  599 => 104,  596 => 106,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 414,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 410,  528 => 75,  525 => 408,  516 => 69,  514 => 68,  511 => 67,  505 => 65,  499 => 63,  497 => 62,  493 => 78,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  467 => 72,  458 => 45,  456 => 68,  447 => 41,  441 => 196,  439 => 195,  433 => 60,  412 => 26,  389 => 160,  369 => 14,  366 => 33,  357 => 123,  351 => 141,  348 => 140,  346 => 4,  343 => 146,  335 => 21,  333 => 550,  327 => 114,  325 => 129,  323 => 128,  320 => 127,  317 => 542,  315 => 131,  310 => 529,  302 => 125,  299 => 8,  297 => 276,  292 => 498,  289 => 113,  287 => 488,  284 => 487,  282 => 462,  279 => 461,  277 => 440,  274 => 110,  272 => 434,  266 => 366,  261 => 427,  256 => 96,  251 => 409,  249 => 395,  244 => 136,  239 => 379,  234 => 365,  231 => 83,  226 => 84,  222 => 297,  215 => 280,  212 => 279,  210 => 270,  202 => 266,  197 => 249,  194 => 248,  192 => 269,  172 => 57,  167 => 234,  152 => 46,  134 => 161,  127 => 35,  124 => 132,  114 => 111,  104 => 90,  97 => 74,  482 => 4,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  424 => 161,  421 => 29,  418 => 28,  416 => 158,  401 => 172,  395 => 23,  391 => 149,  383 => 19,  377 => 37,  375 => 141,  371 => 35,  367 => 155,  363 => 32,  359 => 132,  356 => 328,  352 => 129,  349 => 126,  347 => 125,  344 => 24,  339 => 316,  334 => 141,  331 => 140,  329 => 131,  326 => 138,  324 => 113,  321 => 135,  319 => 105,  316 => 16,  313 => 15,  311 => 14,  307 => 128,  304 => 96,  300 => 121,  281 => 388,  262 => 98,  259 => 103,  257 => 84,  255 => 353,  253 => 342,  250 => 341,  236 => 378,  233 => 304,  216 => 79,  213 => 78,  211 => 61,  200 => 72,  191 => 246,  188 => 90,  185 => 66,  174 => 217,  165 => 83,  110 => 38,  84 => 41,  242 => 75,  232 => 88,  207 => 269,  195 => 66,  190 => 76,  184 => 233,  181 => 232,  155 => 47,  153 => 77,  150 => 55,  137 => 171,  129 => 148,  126 => 147,  76 => 31,  70 => 19,  77 => 25,  53 => 11,  65 => 17,  34 => 5,  23 => 3,  81 => 40,  58 => 15,  20 => 1,  480 => 75,  474 => 161,  469 => 49,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 167,  437 => 61,  435 => 36,  430 => 34,  427 => 162,  423 => 57,  413 => 157,  409 => 25,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 144,  379 => 143,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 516,  298 => 120,  294 => 505,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 428,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 247,  169 => 210,  140 => 58,  132 => 156,  128 => 30,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 410,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 64,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 53,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 13,  201 => 92,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 53,  158 => 80,  156 => 195,  151 => 188,  142 => 177,  138 => 34,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  38 => 5,  26 => 3,  87 => 26,  31 => 5,  25 => 3,  28 => 3,  24 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 28,  78 => 24,  46 => 10,  44 => 8,  27 => 7,  79 => 32,  72 => 18,  69 => 13,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 214,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 35,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 265,  193 => 53,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 176,  141 => 175,  133 => 32,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 32,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 20,  54 => 15,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
