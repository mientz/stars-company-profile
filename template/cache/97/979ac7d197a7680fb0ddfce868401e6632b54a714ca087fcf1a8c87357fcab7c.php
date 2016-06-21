<?php

/* admin/navigation.html */
class __TwigTemplate_118586dc8ac2e887fde981a57f815c62a1f868a7d3bbccbf4c21b1ce9ed38ae4 extends Twig_Template
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
        echo "<div class=\"col-md-2\" style=\"\">
    <div class=\"section thick\" data-spy=\"affix\" data-offset-top=\"50\">
        <div class=\"box box-sidebar hidden-sm hidden-xs row\">
            <div class=\"col-xs-12  text-center\" style=\"background-color: #f7f7f7; padding-top:20px;\">
                <img src=\"public/data/user/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_detail"]) ? $context["user_detail"] : null), "image", array()), "html", null, true);
        echo "\" style=\"max-width:50%;width:50%;height:auto;\">
                <h3 class=\"text-capitalize\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_detail"]) ? $context["user_detail"] : null), "fullname", array()), "html", null, true);
        echo "</h3>
                <h5 class=\"text-uppercase\"><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_detail"]) ? $context["user_detail"] : null), "permission", array()), "html", null, true);
        echo "</strong></h5>
            </div>
            <hr>
            <div class=\"col-sm-12\" style=\"padding: 5px\">
                <div class=\"list-group\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product"), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["active"]) ? $context["active"] : null) == "product")) {
            echo " active ";
        }
        echo "\">
                        Product
                    </a>
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-article"), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["active"]) ? $context["active"] : null) == "article")) {
            echo " active ";
        }
        echo "\">
                        Artikel
                    </a>
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-banner"), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["active"]) ? $context["active"] : null) == "banner")) {
            echo " active ";
        }
        echo "\">
                        Banner
                    </a>
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-gallery"), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["active"]) ? $context["active"] : null) == "gallery")) {
            echo " active ";
        }
        echo "\">
                        Gallery
                    </a>
                    ";
        // line 24
        if (($this->getAttribute((isset($context["user_detail"]) ? $context["user_detail"] : null), "permission", array()) == "admin")) {
            // line 25
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-users"), "html", null, true);
            echo "\" class=\"list-group-item ";
            if (((isset($context["active"]) ? $context["active"] : null) == "user")) {
                echo " active ";
            }
            echo "\">
                        Pengguna
                    </a>
                    ";
        }
        // line 29
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-contact"), "html", null, true);
        echo "\" class=\"list-group-item ";
        if (((isset($context["active"]) ? $context["active"] : null) == "contact")) {
            echo " active ";
        }
        echo "\">
                        Pesan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  83 => 25,  81 => 24,  71 => 21,  61 => 18,  51 => 15,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="col-md-2" style="">*/
/*     <div class="section thick" data-spy="affix" data-offset-top="50">*/
/*         <div class="box box-sidebar hidden-sm hidden-xs row">*/
/*             <div class="col-xs-12  text-center" style="background-color: #f7f7f7; padding-top:20px;">*/
/*                 <img src="public/data/user/{{ user_detail.image }}" style="max-width:50%;width:50%;height:auto;">*/
/*                 <h3 class="text-capitalize">{{ user_detail.fullname }}</h3>*/
/*                 <h5 class="text-uppercase"><strong>{{ user_detail.permission }}</strong></h5>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="col-sm-12" style="padding: 5px">*/
/*                 <div class="list-group">*/
/*                     <a href="{{ path_for('admin-product') }}" class="list-group-item {% if active == 'product' %} active {% endif %}">*/
/*                         Product*/
/*                     </a>*/
/*                     <a href="{{ path_for('admin-article') }}" class="list-group-item {% if active == 'article' %} active {% endif %}">*/
/*                         Artikel*/
/*                     </a>*/
/*                     <a href="{{ path_for('admin-banner') }}" class="list-group-item {% if active == 'banner' %} active {% endif %}">*/
/*                         Banner*/
/*                     </a>*/
/*                     <a href="{{ path_for('admin-gallery') }}" class="list-group-item {% if active == 'gallery' %} active {% endif %}">*/
/*                         Gallery*/
/*                     </a>*/
/*                     {% if user_detail.permission == 'admin' %}*/
/*                     <a href="{{ path_for('admin-users') }}" class="list-group-item {% if active == 'user' %} active {% endif %}">*/
/*                         Pengguna*/
/*                     </a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path_for('admin-contact') }}" class="list-group-item {% if active == 'contact' %} active {% endif %}">*/
/*                         Pesan*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
