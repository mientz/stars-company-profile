<?php

/* sidebar.html */
class __TwigTemplate_44c2463b671190dd53bd01defc58eede6abfbd2f89615d7bf43ed14cb873d162 extends Twig_Template
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
        echo "<div class=\"col-sm-3\">
    <div class=\"left-sidebar\">
        <h2>Kategori</h2>
        <div class=\"panel-group category-products\" id=\"accordian\">
            <!--category-productsr-->
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#for";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "\">
                            <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"for";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                    <div class=\"panel-body\">
                        <ul>
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "category_child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 20
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("product-with-category", array("category_id" => $this->getAttribute($context["child"], "category_id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "category_name", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                        </ul>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        <div class=\"brands_products\"><!--brands_products-->
            <h2>Merek</h2>
            <div class=\"brands-name\">
                <ul class=\"nav nav-pills nav-stacked\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 33
            echo "                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("product-with-brand", array("brand" => $this->getAttribute($context["brand"], "product_brand", array()))), "html", null, true);
            echo "\">
                            <span class=\"pull-right\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "count", array()), "html", null, true);
            echo "</span>
                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "product_brand", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </ul>
            </div>
        </div>
        <!--/category-products-->
        <div class=\"price-range\">
            <!--price-range-->
            <h2>Berita</h2>
        </div>
        <!--/price-range-->

        <div class=\"shipping text-center\">
            <!--shipping-->
            <img src=\"public/assets/front/img/shipping.jpg\" alt=\"\">
        </div>
        <!--/shipping-->

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  100 => 36,  96 => 35,  92 => 34,  89 => 33,  85 => 32,  78 => 27,  68 => 22,  57 => 20,  53 => 19,  47 => 16,  40 => 12,  35 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="col-sm-3">*/
/*     <div class="left-sidebar">*/
/*         <h2>Kategori</h2>*/
/*         <div class="panel-group category-products" id="accordian">*/
/*             <!--category-productsr-->*/
/*             {% for category in categories %}*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="panel-title">*/
/*                         <a data-toggle="collapse" data-parent="#accordian" href="#for{{category.category_name}}">*/
/*                             <span class="badge pull-right"><i class="fa fa-plus"></i></span>*/
/*                             {{category.category_name}}*/
/*                         </a>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div id="for{{category.category_name}}" class="panel-collapse collapse">*/
/*                     <div class="panel-body">*/
/*                         <ul>*/
/*                             {% for child in category.category_child %}*/
/*                             <li><a href="{{ path_for('product-with-category', {'category_id': child.category_id}) }}">{{child.category_name}}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="brands_products"><!--brands_products-->*/
/*             <h2>Merek</h2>*/
/*             <div class="brands-name">*/
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     {% for brand in brands %}*/
/*                     <li>*/
/*                         <a href="{{ path_for('product-with-brand', {'brand': brand.product_brand}) }}">*/
/*                             <span class="pull-right">{{brand.count}}</span>*/
/*                             {{brand.product_brand}}*/
/*                         </a>*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!--/category-products-->*/
/*         <div class="price-range">*/
/*             <!--price-range-->*/
/*             <h2>Berita</h2>*/
/*         </div>*/
/*         <!--/price-range-->*/
/* */
/*         <div class="shipping text-center">*/
/*             <!--shipping-->*/
/*             <img src="public/assets/front/img/shipping.jpg" alt="">*/
/*         </div>*/
/*         <!--/shipping-->*/
/* */
/*     </div>*/
/* </div>*/
/* */
