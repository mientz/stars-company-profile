<?php

/* admin/header.html */
class __TwigTemplate_3b7ff45e2cd1831040a3964f9649e93965485d6cb4c84bdb9129fa7a22df704b extends Twig_Template
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
        // line 1
        echo "<div class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\" style=\"width:10%;\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-ex-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-login"), "html", null, true);
        echo "\" class=\"navbar-brand\"><img height=\"20\" alt=\"Brand\" src=\"public/assets/admin/img/logo.png\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbar-ex-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li style=\"padding-top:10px;\">
                    <img src=\"public/data/user/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_detail"]) ? $context["user_detail"] : null), "image", array()), "html", null, true);
        echo "\" width=\"30\" height=\"30\">
                </li>
                <li class=\"active\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-account"), "html", null, true);
        echo "\">Akun</a>
                </li>
                <li>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-logout"), "html", null, true);
        echo "\">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  44 => 18,  38 => 15,  30 => 10,  19 => 1,);
    }
}
/* <div class="navbar navbar-default navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header" style="width:10%;">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a href="{{ path_for('admin-login') }}" class="navbar-brand"><img height="20" alt="Brand" src="public/assets/admin/img/logo.png"></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="navbar-ex-collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li style="padding-top:10px;">*/
/*                     <img src="public/data/user/{{ user_detail.image }}" width="30" height="30">*/
/*                 </li>*/
/*                 <li class="active">*/
/*                     <a href="{{ path_for('admin-account') }}">Akun</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path_for('admin-logout') }}">Logout</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
