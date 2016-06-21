<?php

/* base.html */
class __TwigTemplate_af617d714fe841d341f54f59de076f2e9f5a3cfe2e0d7c67f1dcc0275ca4d683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('js', $context, $blocks);
        // line 40
        echo "    </body>

</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <base href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"shortcut icon\" href=\"images/ico/favicon.ico\">
        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo " | Stars.co.id</title>
        <link href=\"public/assets/front/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/prettyPhoto.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/price-range.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/animate.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/main.css\" rel=\"stylesheet\">
        <link href=\"public/assets/front/css/responsive.css\" rel=\"stylesheet\">
        <style>
        </style>
        <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
        <script src=\"js/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "        ";
    }

    // line 32
    public function block_js($context, array $blocks = array())
    {
        // line 33
        echo "        <script src=\"public/assets/front/js/jquery.js\"></script>
        <script src=\"public/assets/front/js/bootstrap.min.js\"></script>
        <script src=\"public/assets/front/js/jquery.scrollUp.min.js\"></script>
        <script src=\"public/assets/front/js/price-range.js\"></script>
        <script src=\"public/assets/front/js/jquery.prettyPhoto.js\"></script>
        <script src=\"public/assets/front/js/main.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  92 => 32,  88 => 30,  85 => 29,  62 => 12,  52 => 6,  49 => 5,  42 => 40,  40 => 32,  37 => 31,  35 => 29,  31 => 27,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/*     <head>*/
/*         {% block head %}*/
/*         <base href="{{ path_for('home') }}">*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="shortcut icon" href="images/ico/favicon.ico">*/
/*         <title>{% block title %}{% endblock %} | Stars.co.id</title>*/
/*         <link href="public/assets/front/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/prettyPhoto.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/price-range.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/animate.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/main.css" rel="stylesheet">*/
/*         <link href="public/assets/front/css/responsive.css" rel="stylesheet">*/
/*         <style>*/
/*         </style>*/
/*         <!--[if lt IE 9]>*/
/*         <script src="js/html5shiv.js"></script>*/
/*         <script src="js/respond.min.js"></script>*/
/*         <![endif]-->*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block content %}*/
/*         {% endblock %}*/
/* */
/*         {% block js %}*/
/*         <script src="public/assets/front/js/jquery.js"></script>*/
/*         <script src="public/assets/front/js/bootstrap.min.js"></script>*/
/*         <script src="public/assets/front/js/jquery.scrollUp.min.js"></script>*/
/*         <script src="public/assets/front/js/price-range.js"></script>*/
/*         <script src="public/assets/front/js/jquery.prettyPhoto.js"></script>*/
/*         <script src="public/assets/front/js/main.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
/* */
