<?php
$app->group('/product', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select * from product p, brand b, material m, color cl  where b.brand_id=p.brand_id and p.material_id=m.material_id and p.color_id=cl.color_id")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name")
        ]);
    })->setName('product');
    $this->get('/category/{category_id}', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("
            select
                b.brand_name, p.product_code, cl.color_name, p.product_id, p.product_image,
                p.product_ispopular, m.material_name, p.product_name, p.product_price,
                p.product_size_min, p.product_size_max, p.product_view
            from
                product p, product_category pc, category c, brand b, material m, color cl
            where
                p.product_id=pc.product_id and pc.category_id=c.category_id and
                p.brand_id=b.brand_id and p.material_id=m.material_id and p.color_id=cl.color_id  and
                c.category_id='".$args["category_id"]."'
            GROUP BY
                p.product_id")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name")
        ]);
    })->setName('product-with-category');
    $this->get('/brand/{brand}', function ($req, $res, $args) {
        return $this->view->render($res, 'product.html', [
            'products'=>$this->db->query("select * from product p, brand b, material m, color cl  where b.brand_id=p.brand_id and p.material_id=m.material_id and p.color_id=cl.color_id and p.brand_id='".$args["brand"]."'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name")
        ]);
    })->setName('product-with-brand');
    $this->get('/detail/{product_id}', function ($req, $res, $args) {
        return $this->view->render($res, 'product-detail.html', [
            'product'=>$this->db->query("select * from product p, brand b, material m, color c where p.brand_id=b.brand_id and p.material_id=m.material_id and p.color_id=c.color_id and p.product_id='".$args["product_id"]."'")->fetch(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name")
        ]);
    })->setName('product-detail');
})->add($front_category);
