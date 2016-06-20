<?php
$app->group('/gallery', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'gallery.html', [
            'galleries'=>$this->db->query("select * from gallery")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand"),
        ]);
    })->setName('gallery');
})->add($front_category);
