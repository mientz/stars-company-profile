<?php

/* admin/base.html */
class __TwigTemplate_6395849117d6d2942b462ffb7c959383429bbd98ddd5ce9421dd1f1e7cfcca4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        <!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"public/assets/js/html5shiv.js\"></script>
<script src=\"public/assets/js/respond.js\"></script>
<![endif]-->
        ";
        // line 22
        $this->displayBlock('js', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <base href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\">
        <!--[if lte IE 6]></base><![endif]-->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - Admin Web PT.STARS Internasional</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"public/assets/admin/css/bootstrap.css\">
        <link href=\"public/assets/admin/css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"public/assets/admin/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_js($context, array $blocks = array())
    {
        // line 23
        echo "        <script type=\"text/javascript\" src=\"public/assets/admin/js/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"public/assets/admin/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"public/assets/admin/js/mustache.min.js\"></script>
        <script type=\"text/javascript\" src=\"public/assets/admin/js/bootstrap3-typeahead.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "admin/base.html";
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  80 => 22,  75 => 17,  61 => 9,  53 => 5,  50 => 4,  44 => 28,  42 => 22,  36 => 18,  34 => 17,  30 => 15,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block head %}*/
/*         <base href="{{ path_for('home') }}">*/
/*         <!--[if lte IE 6]></base><![endif]-->*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>{% block title %}{% endblock %} - Admin Web PT.STARS Internasional</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="public/assets/admin/css/bootstrap.css">*/
/*         <link href="public/assets/admin/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">*/
/*         <link href="public/assets/admin/css/main.css" rel="stylesheet" type="text/css">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         <!--[if lt IE 9]>*/
/* <script type="text/javascript" src="public/assets/js/html5shiv.js"></script>*/
/* <script src="public/assets/js/respond.js"></script>*/
/* <![endif]-->*/
/*         {% block js %}*/
/*         <script type="text/javascript" src="public/assets/admin/js/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="public/assets/admin/js/bootstrap.min.js"></script>*/
/*         <script type="text/javascript" src="public/assets/admin/js/mustache.min.js"></script>*/
/*         <script type="text/javascript" src="public/assets/admin/js/bootstrap3-typeahead.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
