<?php

/* ::layout.html.twig */
class __TwigTemplate_5f92a25fbc3699e9587670cad73f01690bae178b03f6aff873a5fcb3d59fc6f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <style>
        #footer {
            bottom: 0;
            /*width: 100%;*/
            /* Set the fixed height of the footer here */
            height: 80px;
            background-color: #2c3e50;
        }

        body {
            background: url(\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/img/mochaGrunge.png"), "html", null, true);
        echo "\");
        }

        .nav-tabs.nav-stacked {
            border-bottom: 0;
        }

        .nav-tabs.nav-stacked > li > a {
            border: 1px solid #ddd;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }

        .nav-tabs.nav-stacked > li{
            margin-bottom: 0;
            margin-top: 0;
        }

        .nav-tabs.nav-stacked > li:first-child > a {
            -webkit-border-top-right-radius: 4px;
            border-top-right-radius: 4px;
            -webkit-border-top-left-radius: 4px;
            border-top-left-radius: 4px;
            -moz-border-radius-topright: 4px;
            -moz-border-radius-topleft: 4px;
        }

        .nav-tabs.nav-stacked > li:last-child > a {
            -webkit-border-bottom-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-border-bottom-left-radius: 4px;
            border-bottom-left-radius: 4px;
            -moz-border-radius-bottomright: 4px;
            -moz-border-radius-bottomleft: 4px;
        }

        .nav-tabs.nav-stacked > li > a:hover,
        .nav-tabs.nav-stacked > li > a:focus {
            z-index: 2;
            border-color: #ddd;
        }
    </style>

</head>
<body>
    <div class=\"container\">
        <div class=\"container\" style=\"background-color: #ffffff; box-shadow: 2px 3px 3px; padding: 0\">
            <div class=\"navbar navbar-default\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"><span class=\"glyphicon glyphicon-home\"></span> CAMES</a>
                </div>
                <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <!--<li class=\"active\"><a href=\"#\">Active</a></li>
                        <li><a href=\"#\">Link</a></li>-->
                        <!--<li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li class=\"dropdown-header\">Dropdown header</li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>-->
                    </ul>
                    <<form class=\"navbar-form navbar-left\">
                        <input class=\"form-control col-lg-8\" placeholder=\"Search\" type=\"text\">
                    </form>

                    <div class=\"\"
                    <!--<ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
            </div>

            <hr style=\"margin: 5px; height: 2px; color: #000000\"/>
            <div class=\"jumbotron\" style=\"margin-left: 8px; margin-right: 8px;\" id=\"banner\">
                <h2>CAMES / e-PRED</h2>
                <p>Un code doit être littéraire puisque, selon le langage, les informations nécessaires ne peuvent pas toutes être
                    exprimées clairement par le seul code. </p>
                <p><a class=\"btn btn-primary\">En savoir plus</a></p>
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        ";
        // line 147
        echo "                        <h4><span class=\"glyphicon glyphicon-list-alt\"></span> MENU</h4>
                        ";
        // line 148
        $this->displayBlock('sidebar', $context, $blocks);
        // line 156
        echo "                    </div>

                    <div class=\"col-md-9\">
                        <div class=\"panel panel-primary\" style=\"min-height: 300px;\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Panel primary</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 165
        echo "                                ";
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo "                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id=\"footer\" style=\"text-align: center;\">
                <p style=\"color: #ffffff; font-size: 0.8em; padding-top: 15px;\"> <a href=\"#\">&copy; 2014 CAMES</a>  | tous droits réservés <br/>
                </p>
                <p style=\"color: #ffffff; font-size: 0.8em; padding-top: 5px;\">
                    <a href=\"\"> Cames </a>&nbsp; | &nbsp;<a href=\"\"> Actualités </a>&nbsp; | &nbsp;<a href=\"\"> Contact </a>&nbsp; | &nbsp;<a href=\"\">Pays Membres</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 202
        $this->displayBlock('javascripts', $context, $blocks);
        // line 205
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap-flatly.css"), "html", null, true);
        echo "\" type=\"text/css\" >

        <!-- Favicons -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../docs/assets/ico/apple-touch-icon-144-precomposed.png\">
        <link rel=\"shortcut icon\" href=\"../docs/assets/ico/favicon.ico\">
    ";
    }

    // line 148
    public function block_sidebar($context, array $blocks = array())
    {
        // line 149
        echo "                        <ul class=\"nav nav-tabs nav-stacked\">
                            <li><a href=\"\"><span style=\"color: #2c3e50;\" class=\"glyphicon glyphicon-hand-right\"></span>&nbsp; Nouvelle Tache</a></li>
                            <li><a href=\"\"><span style=\"color: #2c3e50;\" class=\"glyphicon glyphicon-hand-right\"></span>&nbsp; Contact </a></li>
                            <li><a href=\"\"><span style=\"color: #2c3e50;\" class=\"glyphicon glyphicon-hand-right\"></span>&nbsp; A propos </a></li>
                            <li><a href=\"\"><span style=\"color: #2c3e50;\" class=\"glyphicon glyphicon-hand-right\"></span>&nbsp; Aide </a></li>
                        </ul>
                        ";
    }

    // line 165
    public function block_body($context, array $blocks = array())
    {
        // line 166
        echo "                                    <h3>Paragraphe 1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                    <h3>Paragraphe 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                ";
    }

    // line 202
    public function block_javascripts($context, array $blocks = array())
    {
        // line 203
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/dist/css/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/css\" ></script>
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 202,  251 => 166,  248 => 165,  225 => 12,  218 => 9,  215 => 8,  161 => 147,  53 => 29,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 11,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 203,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 149,  235 => 148,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 182,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 18,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 202,  196 => 90,  183 => 82,  171 => 61,  166 => 156,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 7,  29 => 3,  209 => 7,  203 => 205,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 165,  173 => 65,  168 => 72,  164 => 148,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 7,);
    }
}
