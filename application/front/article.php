<?php
$app->group('/article', function () {
    $this->get('/promo', function ($req, $res, $args) {
        return $this->view->render($res, 'article.html', [
            'articles'=>$this->db->query("select * from article where article_type='promo'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name"),
            'what_title'=>'PROMO TERBARU'
        ]);
    })->setName('promo');

    $this->get('/news', function ($req, $res, $args) {
        return $this->view->render($res, 'article.html', [
            'articles'=>$this->db->query("select * from article where article_type='news'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(p.product_id) 'count', b.brand_name, b.brand_id from product p, brand b where p.brand_id=b.brand_id group by b.brand_name ORDER BY b.brand_name"),
            'what_title'=>'BERITA TERBARU'
        ]);
    })->setName('news');
})->add($front_category);
