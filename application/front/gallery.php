<?php
$app->group('/gallery', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'gallery.html', [
            'galleries'=>$this->db->query("select * from gallery")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name")
        ]);
    })->setName('gallery');
})->add($front_category);
