<?php
$app->group('/product', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select * from product")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand")
        ]);
    })->setName('product');
    $this->get('/category/{category_id}', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select p.product_brand, p.product_code, p.product_color, p.product_id, p.product_image,
            p.product_ispopular, p.product_material, p.product_name, p.product_price, p.product_size,
            p.product_view from product p, product_category pc, category c where p.product_id=pc.product_id and pc.category_id=c.category_id GROUP BY p.product_id and c.category_id='".$args["category_id"]."'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand")
        ]);
    })->setName('product-with-category');
    $this->get('/brand/{brand}', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select * from product where product_brand='".$args["category_id"]."'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand")
        ]);
    })->setName('product-with-brand');
})->add($front_category);
