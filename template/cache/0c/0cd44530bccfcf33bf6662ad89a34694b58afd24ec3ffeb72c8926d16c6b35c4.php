<?php

/* home.html */
class __TwigTemplate_76f6afd5333269cc6015c2d244d17550593b520a8307a08277e40f224b57a924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "home.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Home
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("header.html", "home.html", 6)->display($context);
        // line 7
        echo "<section id=\"slider\">
    <!--slider-->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 15
            echo "                        <li data-target=\"#slider-carousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" class=\"\"></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </ol>

                    <div class=\"carousel-inner\">
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 21
            echo "                        <div class=\"item\">
                            <div class=\"col-sm-12\">
                                <center><img src=\"public/data/banner/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "carousel_image", array()), "html", null, true);
            echo "\" style=\"max-height:300px; height:300px;\"></center>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </div>

                    <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\"></i>
                    </a>
                    <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
                        <i class=\"fa fa-angle-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 44
        $this->loadTemplate("sidebar.html", "home.html", 44)->display($context);
        // line 45
        echo "            <div class=\"col-sm-9 padding-right\">
                <div class=\"features_items\">
                    <!--features_items-->
                    <h2 class=\"title text-center\">Paling Populer</h2>
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["procut"]) {
            // line 50
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"product-image-wrapper\">
                            <div class=\"single-products\">
                                <a>
                                    <div class=\"productinfo text-center\"><img src=\"public/data/product/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_image", array()), "html", null, true);
            echo "\">
                                        <h2>Rp. ";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["procut"], "product_price", array()), 0, ",", "."), "html", null, true);
            echo ",-</h2>
                                        <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_brand", array()), "html", null, true);
            echo "</p>
                                        <p><b>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_name", array()), "html", null, true);
            echo "</b></p>
                                    </div>
                                    <div class=\"product-overlay\">
                                        <div class=\"overlay-content\">
                                            <p>Kode : ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_code", array()), "html", null, true);
            echo "</p>
                                            <p>Bahan : ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_material", array()), "html", null, true);
            echo "</p>
                                            <p>Warna : ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_color", array()), "html", null, true);
            echo "</p>
                                            <p>Ukuran : ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["procut"], "product_size", array()), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"choose\">
                                <ul class=\"nav nav-pills nav-justified\">
                                    <li><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("product-detail", array("product_id" => $this->getAttribute($context["procut"], "product_id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-expand\"></i>Detil Produk</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['procut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </div>
                <!--features_items-->

                <div class=\"category-tab shop-details-tab\">
                    <!--category-tab-->
                    <div class=\"col-sm-12\" style=\"margin-bottom: -3.59678%;\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#satu\" data-toggle=\"tab\">Berita</a></li>
                            <li><a href=\"#dua\" data-toggle=\"tab\">Promo</a></li>
                        </ul>
                    </div>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade active in\" id=\"satu\">
                            <div class=\"col-md-12 col-sm-12\" style=\"margin-top:2%\">
                                <div class=\"col-md-6 col-sm-6\">
                                    <ul class=\"media-list\">
                                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 94
            echo "                                        <li class=\"media\">
                                            <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("news"), "html", null, true);
            echo "\">
                                                <div class=\"media-left media-middle\">
                                                    <div style=\"width:64px;height:64px;background:url(";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
            echo "public/data/article/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "article_image", array()), "html", null, true);
            echo ") no-repeat center center; background-size:cover;\"></div>
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4 class=\"media-heading\" style=\"margin:0;\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "article_title", array()), "html", null, true);
            echo "</h4>
                                                    <p class=\"text-capitalize\" style=\"margin:0;\">";
            // line 101
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["news"], "article_text", array())), 0, 100);
            echo "</p>
                                                </div>
                                            </a>
                                        </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                    </ul>
                                </div>
                                <div class=\"col-md-6 col-sm-6\">
                                    <center>
                                        <div class=\"col-md-12\" style=\"background:black;height:259px\">
                                            <h1 style=\"color:white;margin-top:80px\"><span class=\"glyphicon glyphicon-facetime-video\"></span></h1>
                                            <h1 style=\"color:white;\">Video</h1>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade\" id=\"dua\">
                            <div class=\"col-md-12 col-sm-12\" style=\"margin-top:2%\">
                                <div class=\"col-md-6 col-sm-6\">
                                    <ul class=\"media-list\">
                                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promo"]) ? $context["promo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 123
            echo "                                        <li class=\"media\">
                                            <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("promo"), "html", null, true);
            echo "\">
                                                <div class=\"media-left media-middle\">
                                                    <div style=\"width:64px;height:64px;background:url(";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
            echo "public/data/article/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "article_image", array()), "html", null, true);
            echo ") no-repeat center center; background-size:cover;\"></div>
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4 class=\"media-heading\" style=\"margin:0;\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "article_title", array()), "html", null, true);
            echo "</h4>
                                                    <p style=\"margin:0;\">";
            // line 130
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["news"], "article_text", array())), 0, 100);
            echo "</p>
                                                </div>
                                            </a>
                                        </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                    </ul>
                                </div>
                                <div class=\"col-md-6 col-sm-6\">
                                    <center>
                                        <div class=\"col-md-12\" style=\"background:black;height:259px\">
                                            <h1 style=\"color:white;margin-top:80px\"><span class=\"glyphicon glyphicon-facetime-video\"></span></h1>
                                            <h1 style=\"color:white;\">Video</h1>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 153
        $this->loadTemplate("footer.html", "home.html", 153)->display($context);
    }

    // line 155
    public function block_js($context, array $blocks = array())
    {
        // line 156
        $this->displayParentBlock("js", $context, $blocks);
        echo "
<script>
    \$(document).ready(function (){
        \$('.carousel-inner .item:first-child').addClass('active');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 156,  329 => 155,  325 => 153,  305 => 135,  294 => 130,  290 => 129,  282 => 126,  277 => 124,  274 => 123,  270 => 122,  252 => 106,  241 => 101,  237 => 100,  229 => 97,  224 => 95,  221 => 94,  217 => 93,  199 => 77,  187 => 71,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  158 => 57,  154 => 56,  150 => 55,  146 => 54,  140 => 50,  136 => 49,  130 => 45,  128 => 44,  109 => 27,  99 => 23,  95 => 21,  91 => 20,  86 => 17,  69 => 15,  52 => 14,  43 => 7,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* {% block title %}*/
/* Home*/
/* {% endblock %}*/
/* {% block content %}*/
/* {% include 'header.html' %}*/
/* <section id="slider">*/
/*     <!--slider-->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div id="slider-carousel" class="carousel slide" data-ride="carousel">*/
/*                     <ol class="carousel-indicators">*/
/*                         {% for banner in banners %}*/
/*                         <li data-target="#slider-carousel" data-slide-to="{{loop.index0}}" class=""></li>*/
/*                         {% endfor %}*/
/*                     </ol>*/
/* */
/*                     <div class="carousel-inner">*/
/*                         {% for banner in banners %}*/
/*                         <div class="item">*/
/*                             <div class="col-sm-12">*/
/*                                 <center><img src="public/data/banner/{{banner.carousel_image}}" style="max-height:300px; height:300px;"></center>*/
/*                             </div>*/
/*                         </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">*/
/*                         <i class="fa fa-angle-left"></i>*/
/*                     </a>*/
/*                     <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">*/
/*                         <i class="fa fa-angle-right"></i>*/
/*                     </a>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <section>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {% include 'sidebar.html' %}*/
/*             <div class="col-sm-9 padding-right">*/
/*                 <div class="features_items">*/
/*                     <!--features_items-->*/
/*                     <h2 class="title text-center">Paling Populer</h2>*/
/*                     {% for procut in products %}*/
/*                     <div class="col-sm-4">*/
/*                         <div class="product-image-wrapper">*/
/*                             <div class="single-products">*/
/*                                 <a>*/
/*                                     <div class="productinfo text-center"><img src="public/data/product/{{procut.product_image}}">*/
/*                                         <h2>Rp. {{procut.product_price|number_format(0, ',', '.')}},-</h2>*/
/*                                         <p>{{procut.product_brand}}</p>*/
/*                                         <p><b>{{procut.product_name}}</b></p>*/
/*                                     </div>*/
/*                                     <div class="product-overlay">*/
/*                                         <div class="overlay-content">*/
/*                                             <p>Kode : {{procut.product_code}}</p>*/
/*                                             <p>Bahan : {{procut.product_material}}</p>*/
/*                                             <p>Warna : {{procut.product_color}}</p>*/
/*                                             <p>Ukuran : {{procut.product_size}}</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="choose">*/
/*                                 <ul class="nav nav-pills nav-justified">*/
/*                                     <li><a href="{{ path_for('product-detail', {'product_id': procut.product_id}) }}"><i class="fa fa-expand"></i>Detil Produk</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <!--features_items-->*/
/* */
/*                 <div class="category-tab shop-details-tab">*/
/*                     <!--category-tab-->*/
/*                     <div class="col-sm-12" style="margin-bottom: -3.59678%;">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active"><a href="#satu" data-toggle="tab">Berita</a></li>*/
/*                             <li><a href="#dua" data-toggle="tab">Promo</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane fade active in" id="satu">*/
/*                             <div class="col-md-12 col-sm-12" style="margin-top:2%">*/
/*                                 <div class="col-md-6 col-sm-6">*/
/*                                     <ul class="media-list">*/
/*                                         {% for news in news %}*/
/*                                         <li class="media">*/
/*                                             <a href="{{ path_for('news') }}">*/
/*                                                 <div class="media-left media-middle">*/
/*                                                     <div style="width:64px;height:64px;background:url({{ path_for('home') }}public/data/article/{{news.article_image}}) no-repeat center center; background-size:cover;"></div>*/
/*                                                 </div>*/
/*                                                 <div class="media-body">*/
/*                                                     <h4 class="media-heading" style="margin:0;">{{news.article_title}}</h4>*/
/*                                                     <p class="text-capitalize" style="margin:0;">{{news.article_text|striptags|slice(0,100)|raw }}</p>*/
/*                                                 </div>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="col-md-6 col-sm-6">*/
/*                                     <center>*/
/*                                         <div class="col-md-12" style="background:black;height:259px">*/
/*                                             <h1 style="color:white;margin-top:80px"><span class="glyphicon glyphicon-facetime-video"></span></h1>*/
/*                                             <h1 style="color:white;">Video</h1>*/
/*                                         </div>*/
/*                                     </center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane fade" id="dua">*/
/*                             <div class="col-md-12 col-sm-12" style="margin-top:2%">*/
/*                                 <div class="col-md-6 col-sm-6">*/
/*                                     <ul class="media-list">*/
/*                                         {% for news in promo %}*/
/*                                         <li class="media">*/
/*                                             <a href="{{ path_for('promo') }}">*/
/*                                                 <div class="media-left media-middle">*/
/*                                                     <div style="width:64px;height:64px;background:url({{ path_for('home') }}public/data/article/{{news.article_image}}) no-repeat center center; background-size:cover;"></div>*/
/*                                                 </div>*/
/*                                                 <div class="media-body">*/
/*                                                     <h4 class="media-heading" style="margin:0;">{{news.article_title}}</h4>*/
/*                                                     <p style="margin:0;">{{news.article_text|striptags|slice(0,100)|raw }}</p>*/
/*                                                 </div>*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="col-md-6 col-sm-6">*/
/*                                     <center>*/
/*                                         <div class="col-md-12" style="background:black;height:259px">*/
/*                                             <h1 style="color:white;margin-top:80px"><span class="glyphicon glyphicon-facetime-video"></span></h1>*/
/*                                             <h1 style="color:white;">Video</h1>*/
/*                                         </div>*/
/*                                     </center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% include 'footer.html' %}*/
/* {% endblock %}*/
/* {% block js %}*/
/* {{ parent() }}*/
/* <script>*/
/*     $(document).ready(function (){*/
/*         $('.carousel-inner .item:first-child').addClass('active');*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
