<?php

$app->get('/', function ($req, $res, $args) {
    return $this->view->render($res, 'home.html', [
        'banners'=>$select = $this->db->query("select * from carousel where carousel_status='visible'")->fetchAll(PDO::FETCH_ASSOC),
        'categories'=>$req->getAttribute('categories'),
        'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand"),
        'products'=>$select = $this->db->query("select * from product limit 6")->fetchAll(PDO::FETCH_ASSOC),
        'news'=>$select = $this->db->query("select * from article where article_type='news' order by article_date desc limit 6")->fetchAll(PDO::FETCH_ASSOC),
        'promo'=>$select = $this->db->query("select * from article where article_type='promo' order by article_date desc limit 6")->fetchAll(PDO::FETCH_ASSOC),
    ]);
})->setName('home')->add($front_category);
