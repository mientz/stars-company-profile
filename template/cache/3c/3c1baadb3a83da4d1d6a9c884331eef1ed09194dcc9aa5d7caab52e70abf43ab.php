<?php

/* header.html */
class __TwigTemplate_bcd3bc3d12a79b950c52f4e3cc626acfb34c079c162c6286a3e4a76575554436 extends Twig_Template
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
        echo "<header id=\"header\">
    <!--header-->
    <div class=\"header_top\">
        <!--header_top-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"contactinfo\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"#\"><i class=\"fa fa-phone-square\"></i> (031) 879 2478 </a></li>
                            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("contact"), "html", null, true);
        echo "\"><i class=\"fa fa-envelope\"></i> marketing@stars.co.id</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"social-icons pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class=\"header-middle\">
        <!--header-middle-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"logo pull-left\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\"><img src=\"public/assets/front/img/logo.png\" alt=\"\" /></a>
                    </div>
                </div>
                <div class=\"col-sm-8\">
                    <div class=\"shop-menu pull-right\">
                        <ul class=\"nav navbar-nav collapse navbar-collapse\">
                            <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("product"), "html", null, true);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> Produk</a></li>
                            <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("promo"), "html", null, true);
        echo "\"><i class=\"fa fa-gift\"></i> Promo</a></li>
                            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("news"), "html", null, true);
        echo "\"><i class=\"fa fa-book\"></i> Berita</a></li>
                            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("gallery"), "html", null, true);
        echo "\"><i class=\"fa fa-camera-retro\"></i> Galeri</a></li>
                            <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("contact"), "html", null, true);
        echo "\"><i class=\"fa fa-phone\"></i> Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 47,  81 => 46,  77 => 45,  73 => 44,  69 => 43,  60 => 37,  31 => 11,  19 => 1,);
    }
}
/* <header id="header">*/
/*     <!--header-->*/
/*     <div class="header_top">*/
/*         <!--header_top-->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="contactinfo">*/
/*                         <ul class="nav nav-pills">*/
/*                             <li><a href="#"><i class="fa fa-phone-square"></i> (031) 879 2478 </a></li>*/
/*                             <li><a href="{{ path_for('contact') }}"><i class="fa fa-envelope"></i> marketing@stars.co.id</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     <div class="social-icons pull-right">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/*                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>*/
/*                             <li><a href="#"><i class="fa fa-dribbble"></i></a></li>*/
/*                             <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!--/header_top-->*/
/* */
/*     <div class="header-middle">*/
/*         <!--header-middle-->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-4">*/
/*                     <div class="logo pull-left">*/
/*                         <a href="{{ path_for('home') }}"><img src="public/assets/front/img/logo.png" alt="" /></a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-8">*/
/*                     <div class="shop-menu pull-right">*/
/*                         <ul class="nav navbar-nav collapse navbar-collapse">*/
/*                             <li><a href="{{ path_for('product') }}"><i class="fa fa-shopping-cart"></i> Produk</a></li>*/
/*                             <li><a href="{{ path_for('promo') }}"><i class="fa fa-gift"></i> Promo</a></li>*/
/*                             <li><a href="{{ path_for('news') }}"><i class="fa fa-book"></i> Berita</a></li>*/
/*                             <li><a href="{{ path_for('gallery') }}"><i class="fa fa-camera-retro"></i> Galeri</a></li>*/
/*                             <li><a href="{{ path_for('contact') }}"><i class="fa fa-phone"></i> Kontak</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
