<?php

/* admin/product.html */
class __TwigTemplate_b83cc2896ec97a021460ff4d097c2a306b91c3cf69ffa2219a9dc27a90fc0be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html", "admin/product.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Product
";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("admin/header.html", "admin/product.html", 4)->display($context);
        // line 5
        echo "<div class=\"section first\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $this->loadTemplate("admin/navigation.html", "admin/product.html", 8)->display(array_merge($context, array("active" => "product")));
        // line 9
        echo "            <div class=\"col-md-10\">
                <div class=\"section thick  hidden-sm hidden-xs\">
                    <div class=\"row box box-search\">
                        <form method=\"post\" class=\"col-md-12 hidden-sm hidden-xs no-padding-left no-padding-right no-padding-bottom\">
                            <div class=\"form-group col-md-11  no-padding-bottom no-margin-bottom\">
                                <div class=\"col-md-12 no-padding-left no-padding-right\">
                                    <div class=\"input-group no-radius\">
                                        <span class=\"input-group-addon no-radius\"><i class=\"mdi mdi-magnify\"></i></span>
                                        <input type=\"text\" id=\"product_search\" name=\"search\" class=\"form-control no-radius\" />
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-1 no-padding-left\">
                                <input type=\"button\" class=\"form-control no-radius btn btn-primary\" id=\"search\" value=\"Cari\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"section thick\">
                    <div class=\"row\">
                        <div style=\"float:left; padding-right:10px;\">
                            <div class=\"btn-group btn-group-sm btn-short-by\">
                                <a class=\"btn btn-primary\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product-add"), "html", null, true);
        echo "\"> Tambah Produk</a>
                            </div>
                        </div>
                        <div style=\"width:100%;\" class=\"\">
                            <ul class=\"breadcrumb no-margin-bottom\">
                                ";
        // line 36
        if ((isset($context["search_param"]) ? $context["search_param"] : null)) {
            // line 37
            echo "                                <li>Pencarian</li>
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search_param"]) ? $context["search_param"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
                // line 39
                echo "                                <li class=\"active hidden-sm hidden-xs text-black\">
                                    ";
                // line 40
                if (($this->getAttribute($context["search"], "id", array()) && $this->getAttribute($context["search"], "title", array()))) {
                    // line 41
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "id", array()), "html", null, true);
                    echo "\">
                                        ";
                }
                // line 43
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "title", array()), "html", null, true);
                echo "
                                        ";
                // line 44
                if ($this->getAttribute($context["search"], "id", array())) {
                    // line 45
                    echo "                                    </a>
                                    ";
                }
                // line 47
                echo "                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                                <li class=\"pull-right\">
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product"), "html", null, true);
            echo "\">Tampilkan Semua Produk</a>
                                </li>
                                ";
        } else {
            // line 53
            echo "                                <li>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product"), "html", null, true);
            echo "\">Semua Produk</a>
                                </li>
                                ";
        }
        // line 57
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"section\" style=\"margin-top:20px;\">
                    <div class=\"row \">
                        <div class=\"col-md-10 box box-cards\">
                            <ul class=\"media-list\">
                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "                                <li class=\"media media-cards\">
                                    <a class=\"pull-left\" style=\"display: block; cursor: pointer;\" data-img=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_image", array()), "html", null, true);
            echo "\" data-type=\"image\" data-toggle=\"modal\" data-target=\"#preview\">
                                        <img src=\"public/data/product/";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_image", array()), "html", null, true);
            echo "\" width=\"100\">
                                    </a>
                                    <div class=\"media-body row\">
                                        <div class=\"col-md-6\" style=\"height:110px;\">
                                            <h4 class=\"media-heading text-uppercase\"><b>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_name", array()), "html", null, true);
            echo "</b></h4>
                                            <h5 class=\"media-heading\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_code", array()), "html", null, true);
            echo "</h5>
                                            <h5 class=\"media-heading\"><b>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_brand", array()), "html", null, true);
            echo "</b></h5>
                                            <h5 class=\"media-heading\"><i class=\"mdi mdi-star\" ";
            // line 75
            if ($this->getAttribute($context["product"], "product_ispopular", array())) {
                echo "style=\"color:gold;\"";
            }
            echo "></i></h5>
                                            <h5 style=\"position: absolute;bottom: 0;word-wrap: break-word;\"><b>Rp. ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_price", array()), "html", null, true);
            echo ",-</b></h5>
                                        </div>
                                        <div class=\"col-md-4 text-right\" style=\"height:130px;\">
                                            <h5 class=\"media-heading\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_material", array()), "html", null, true);
            echo " <i class=\"mdi mdi-format-list-bulleted\"></i></h5>
                                            <h5 class=\"media-heading\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_color", array()), "html", null, true);
            echo " <i class=\"mdi mdi-invert-colors\"></i></h5>
                                            <h5 class=\"media-heading\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_size", array()), "html", null, true);
            echo " <i class=\"mdi mdi-move-resize-variant\"></i></h5>
                                            <h5 class=\"media-heading\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_category", array()), "html", null, true);
            echo " <i class=\"mdi mdi-marker-check text-success\"></i></h5>
                                            <h5 class=\"media-heading\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_view", array()), "html", null, true);
            echo " <i class=\"mdi mdi-eye\"></i></h5>
                                        </div>
                                        <div class=\"col-md-2 text-right no-padding-right no-margin-right\" style=\"height:130px;\">
                                            <div class=\"[ form-group ]\">
                                                <div class=\"[ btn-group btn-group-xs ]\">
                                                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product-edit", array("product_id" => $this->getAttribute($context["product"], "product_id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs no-margin-right\" style=\"float:right; width:60px;\">Edit</a>
                                                    <a href=\"#\" class=\"btn btn-danger btn-xs no-margin-right\" style=\"float:right; width:60px;\" data-toggle=\"modal\" data-target=\"#delete\" style=\"cursor: pointer;\" data-name=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_name", array()), "html", null, true);
            echo "\" data-code=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_code", array()), "html", null, true);
            echo "\" data-brand=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_brand", array()), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_image", array()), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product-delete", array("product_id" => $this->getAttribute($context["product"], "product_id", array()))), "html", null, true);
            echo "\">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            echo "                                <div class=\"col-md-12 text-center\">
                                    <h2>Produk Tidak tersedia</h2>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </ul>
                        </div>
                        <div class=\"col-md-2\" style=\"\">
                            <div class=\"section\">
                                <div class=\"box hidden-sm hidden-xs row\">
                                    <div class=\"col-sm-12\" style=\"padding: 5px\">
                                        <center><b>Kategori</b></center>
                                        <div class=\"list-group\">
                                            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 109
            echo "                                            <a class=\"list-group-item\" role=\"button\" data-toggle=\"collapse\" href=\"#for";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"for";
            echo twig_escape_filter($this->env, (isset($context["category_name"]) ? $context["category_name"] : null), "html", null, true);
            echo "\">
                                                <span class=\"badge\"><i class=\" mdi mdi-plus\"></i></span> ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "
                                            </a>
                                            <div class=\"list-group collapse\" id=\"for";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_name", array()), "html", null, true);
            echo "\">
                                                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "category_child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_child"]) {
                // line 114
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("admin-product"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category_child"], "category_id", array()), "html", null, true);
                echo "\" class=\"list-group-item \" style=\"background:#f5f5f5\">
                                                    ";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["category_child"], "category_name", array()), "html", null, true);
                echo "
                                                </a>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                        </div>
                                    </div>
                                    <!--                                            <a class=\"btn btn-primary col-md-12\" data-toggle=\"modal\" data-target=\"#category\">Edit Kategori</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"preview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Apakah anda yakin untuk menghapus produk ini?</h4>
            </div>
            <div class=\"modal-body\">

            </div>
        </div>
    </div>
</div>
";
    }

    // line 158
    public function block_js($context, array $blocks = array())
    {
        // line 159
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        // line 179
        echo "
<script id=\"delete-template\" type=\"x-tmpl-mustache\">
<ul class=\"media-list\">
    <li class=\"media media-cards\">
        <img class=\"pull-left\" src=\"public/data/product/{{product_image}}\" width=\"100\">
        <div class=\"media-body row\">
            <div class=\"col-md-6\" style=\"height:110px;\">
                <h4 class=\"media-heading\"><b>{{product_name}}</b></h4>
                <h5 class=\"media-heading\">{{product_code}}</h5>
                <h5 class=\"media-heading\"><b>{{product_brand}}</b></h5>
            </div>
        </div>
    </li>
</ul>
<div class=\"modal-footer\">
    <a href=\"{{path}}\" type=\"button\" class=\"btn btn-danger\">Delete</a>
    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
</div>
</script>
";
        echo "
<script>
    \$(function () {
        var \$affixElement = \$('div[data-spy=\"affix\"]');
        \$affixElement.width(\$affixElement.parent().width());

    });
    \$('#preview').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget);
        var img = button.data('img');
        var modal = \$(this);
        modal.find('.modal-body').html('<img src=\"public/data/product/' + img + '\" width=\"100%\">');
    });
    \$('#delete').on('show.bs.modal', function (event) {
        var button = \$(event.relatedTarget);
        var modal = \$(this);
        var template = \$('#delete-template').html();
        Mustache.parse(template);   // optional, speeds up future uses
        var rendered = Mustache.render(template, {
            product_name:button.data('name'),
            product_code:button.data('code'),
            product_brand:button.data('brand'),
            product_image:button.data('image'),
            path:button.data('path')
        });
        modal.find('.modal-body').html(rendered);

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 179,  350 => 159,  347 => 158,  306 => 120,  299 => 118,  290 => 115,  283 => 114,  279 => 113,  275 => 112,  270 => 110,  263 => 109,  259 => 108,  249 => 100,  240 => 96,  220 => 89,  216 => 88,  208 => 83,  204 => 82,  200 => 81,  196 => 80,  192 => 79,  186 => 76,  180 => 75,  176 => 74,  172 => 73,  168 => 72,  161 => 68,  157 => 67,  154 => 66,  149 => 65,  139 => 57,  133 => 54,  130 => 53,  124 => 50,  121 => 49,  114 => 47,  110 => 45,  108 => 44,  103 => 43,  95 => 41,  93 => 40,  90 => 39,  86 => 38,  83 => 37,  81 => 36,  73 => 31,  49 => 9,  47 => 8,  42 => 5,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "admin/base.html" %}*/
/* {% block title %}Product*/
/* {% endblock %} {% block body %}*/
/* {% include 'admin/header.html' %}*/
/* <div class="section first">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {% include 'admin/navigation.html' with {'active': 'product' } %}*/
/*             <div class="col-md-10">*/
/*                 <div class="section thick  hidden-sm hidden-xs">*/
/*                     <div class="row box box-search">*/
/*                         <form method="post" class="col-md-12 hidden-sm hidden-xs no-padding-left no-padding-right no-padding-bottom">*/
/*                             <div class="form-group col-md-11  no-padding-bottom no-margin-bottom">*/
/*                                 <div class="col-md-12 no-padding-left no-padding-right">*/
/*                                     <div class="input-group no-radius">*/
/*                                         <span class="input-group-addon no-radius"><i class="mdi mdi-magnify"></i></span>*/
/*                                         <input type="text" id="product_search" name="search" class="form-control no-radius" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-1 no-padding-left">*/
/*                                 <input type="button" class="form-control no-radius btn btn-primary" id="search" value="Cari">*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="section thick">*/
/*                     <div class="row">*/
/*                         <div style="float:left; padding-right:10px;">*/
/*                             <div class="btn-group btn-group-sm btn-short-by">*/
/*                                 <a class="btn btn-primary" href="{{ path_for('admin-product-add') }}"> Tambah Produk</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div style="width:100%;" class="">*/
/*                             <ul class="breadcrumb no-margin-bottom">*/
/*                                 {% if search_param %}*/
/*                                 <li>Pencarian</li>*/
/*                                 {% for search in search_param %}*/
/*                                 <li class="active hidden-sm hidden-xs text-black">*/
/*                                     {% if search.id and search.title %}*/
/*                                     <a href="{{ path_for('admin-product') }}/{{search.id}}">*/
/*                                         {% endif %}*/
/*                                         {{search.title}}*/
/*                                         {% if search.id %}*/
/*                                     </a>*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 {% endfor %}*/
/*                                 <li class="pull-right">*/
/*                                     <a href="{{ path_for('admin-product') }}">Tampilkan Semua Produk</a>*/
/*                                 </li>*/
/*                                 {% else %}*/
/*                                 <li>*/
/*                                     <a href="{{ path_for('admin-product') }}">Semua Produk</a>*/
/*                                 </li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="section" style="margin-top:20px;">*/
/*                     <div class="row ">*/
/*                         <div class="col-md-10 box box-cards">*/
/*                             <ul class="media-list">*/
/*                                 {% for product in products %}*/
/*                                 <li class="media media-cards">*/
/*                                     <a class="pull-left" style="display: block; cursor: pointer;" data-img="{{product.product_image}}" data-type="image" data-toggle="modal" data-target="#preview">*/
/*                                         <img src="public/data/product/{{product.product_image}}" width="100">*/
/*                                     </a>*/
/*                                     <div class="media-body row">*/
/*                                         <div class="col-md-6" style="height:110px;">*/
/*                                             <h4 class="media-heading text-uppercase"><b>{{product.product_name}}</b></h4>*/
/*                                             <h5 class="media-heading">{{product.product_code}}</h5>*/
/*                                             <h5 class="media-heading"><b>{{product.product_brand}}</b></h5>*/
/*                                             <h5 class="media-heading"><i class="mdi mdi-star" {% if product.product_ispopular %}style="color:gold;"{% endif %}></i></h5>*/
/*                                             <h5 style="position: absolute;bottom: 0;word-wrap: break-word;"><b>Rp. {{product.product_price}},-</b></h5>*/
/*                                         </div>*/
/*                                         <div class="col-md-4 text-right" style="height:130px;">*/
/*                                             <h5 class="media-heading">{{product.product_material}} <i class="mdi mdi-format-list-bulleted"></i></h5>*/
/*                                             <h5 class="media-heading">{{product.product_color}} <i class="mdi mdi-invert-colors"></i></h5>*/
/*                                             <h5 class="media-heading">{{product.product_size}} <i class="mdi mdi-move-resize-variant"></i></h5>*/
/*                                             <h5 class="media-heading">{{product.product_category}} <i class="mdi mdi-marker-check text-success"></i></h5>*/
/*                                             <h5 class="media-heading">{{product.product_view}} <i class="mdi mdi-eye"></i></h5>*/
/*                                         </div>*/
/*                                         <div class="col-md-2 text-right no-padding-right no-margin-right" style="height:130px;">*/
/*                                             <div class="[ form-group ]">*/
/*                                                 <div class="[ btn-group btn-group-xs ]">*/
/*                                                     <a href="{{ path_for('admin-product-edit', {'product_id': product.product_id}) }}" class="btn btn-primary btn-xs no-margin-right" style="float:right; width:60px;">Edit</a>*/
/*                                                     <a href="#" class="btn btn-danger btn-xs no-margin-right" style="float:right; width:60px;" data-toggle="modal" data-target="#delete" style="cursor: pointer;" data-name="{{product.product_name}}" data-code="{{product.product_code}}" data-brand="{{product.product_brand}}" data-image="{{product.product_image}}" data-path="{{ path_for('admin-product-delete', {'product_id': product.product_id}) }}">Hapus</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 {% else %}*/
/*                                 <div class="col-md-12 text-center">*/
/*                                     <h2>Produk Tidak tersedia</h2>*/
/*                                 </div>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="col-md-2" style="">*/
/*                             <div class="section">*/
/*                                 <div class="box hidden-sm hidden-xs row">*/
/*                                     <div class="col-sm-12" style="padding: 5px">*/
/*                                         <center><b>Kategori</b></center>*/
/*                                         <div class="list-group">*/
/*                                             {% for category in categories %}*/
/*                                             <a class="list-group-item" role="button" data-toggle="collapse" href="#for{{category.category_name}}" aria-expanded="false" aria-controls="for{{category_name}}">*/
/*                                                 <span class="badge"><i class=" mdi mdi-plus"></i></span> {{category.category_name}}*/
/*                                             </a>*/
/*                                             <div class="list-group collapse" id="for{{category.category_name}}">*/
/*                                                 {% for category_child in category.category_child %}*/
/*                                                 <a href="{{ path_for('admin-product') }}/{{category_child.category_id}}" class="list-group-item " style="background:#f5f5f5">*/
/*                                                     {{category_child.category_name}}*/
/*                                                 </a>*/
/*                                                 {% endfor %}*/
/*                                                 </div>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!--                                            <a class="btn btn-primary col-md-12" data-toggle="modal" data-target="#category">Edit Kategori</a>-->*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title">Apakah anda yakin untuk menghapus produk ini?</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block js %}*/
/* {{ parent() }}*/
/* {% verbatim %}*/
/* <script id="delete-template" type="x-tmpl-mustache">*/
/* <ul class="media-list">*/
/*     <li class="media media-cards">*/
/*         <img class="pull-left" src="public/data/product/{{product_image}}" width="100">*/
/*         <div class="media-body row">*/
/*             <div class="col-md-6" style="height:110px;">*/
/*                 <h4 class="media-heading"><b>{{product_name}}</b></h4>*/
/*                 <h5 class="media-heading">{{product_code}}</h5>*/
/*                 <h5 class="media-heading"><b>{{product_brand}}</b></h5>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/* </ul>*/
/* <div class="modal-footer">*/
/*     <a href="{{path}}" type="button" class="btn btn-danger">Delete</a>*/
/*     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* </div>*/
/* </script>*/
/* {% endverbatim %}*/
/* <script>*/
/*     $(function () {*/
/*         var $affixElement = $('div[data-spy="affix"]');*/
/*         $affixElement.width($affixElement.parent().width());*/
/* */
/*     });*/
/*     $('#preview').on('show.bs.modal', function (event) {*/
/*         var button = $(event.relatedTarget);*/
/*         var img = button.data('img');*/
/*         var modal = $(this);*/
/*         modal.find('.modal-body').html('<img src="public/data/product/' + img + '" width="100%">');*/
/*     });*/
/*     $('#delete').on('show.bs.modal', function (event) {*/
/*         var button = $(event.relatedTarget);*/
/*         var modal = $(this);*/
/*         var template = $('#delete-template').html();*/
/*         Mustache.parse(template);   // optional, speeds up future uses*/
/*         var rendered = Mustache.render(template, {*/
/*             product_name:button.data('name'),*/
/*             product_code:button.data('code'),*/
/*             product_brand:button.data('brand'),*/
/*             product_image:button.data('image'),*/
/*             path:button.data('path')*/
/*         });*/
/*         modal.find('.modal-body').html(rendered);*/
/* */
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
