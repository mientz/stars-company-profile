<?php
$app->group('/article', function () {
    $this->get('/promo', function ($req, $res, $args) {
        return $this->view->render($res, 'article.html', [
            'articles'=>$this->db->query("select * from article where article_type='promo'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand"),
            'what_title'=>'PROMO TERBARU'
        ]);
    })->setName('promo');

    $this->get('/news', function ($req, $res, $args) {
        return $this->view->render($res, 'article.html', [
            'articles'=>$this->db->query("select * from article where article_type='news'")->fetchAll(PDO::FETCH_ASSOC),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select count(product_id) 'count', product_brand from product group by product_brand ORDER BY product_brand"),
            'what_title'=>'BERITA TERBARU'
        ]);
    })->setName('news');
})->add($front_category);
