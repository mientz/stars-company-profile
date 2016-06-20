<?php
$app->group('/product', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select * from product")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand")
        ]);
    })->setName('product');
})->add($front_category);
