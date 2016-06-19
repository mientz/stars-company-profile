<?php
$front_category = function ($req, $res, $next) {
    $select = $this->db->prepare("select * from category where category_parent_id IS NULL");
    $select->execute();
    $result = array();
    foreach($select->fetchAll(PDO::FETCH_ASSOC) as $row){

        $select_child1 = $this->db->prepare("select * from category where category_parent_id='".$row["category_id"]."'");
        $select_child1->execute();
        $result_child1 = array();
        foreach($select_child1->fetchAll(PDO::FETCH_ASSOC) as $row_child1){

            $select_child2 = $this->db->prepare("select * from category where category_parent_id='".$row_child1["category_id"]."'");
            $select_child2->execute();
            $result_child2 = array();
            foreach($select_child2->fetchAll(PDO::FETCH_ASSOC) as $row_child2){

                array_push($result_child2, array(
                    "category_id"=>$row_child2["category_id"],
                    "category_name"=>$row_child2["category_name"],
                    "category_parent_id"=>$row_child2["category_parent_id"]
                ));
            }

            array_push($result_child1, array(
                "category_id"=>$row_child1["category_id"],
                "category_name"=>$row_child1["category_name"],
                "category_parent_id"=>$row_child1["category_parent_id"],
                "category_child"=>$result_child2
            ));
        }

        array_push($result, array(
            "category_id"=>$row["category_id"],
            "category_name"=>$row["category_name"],
            "category_parent_id"=>$row["category_parent_id"],
            "category_child"=>$result_child1
        ));
    }

    $req = $req->withAttribute('categories', $result);
    $res = $next($req, $res);
    return $res;
};

$app->get('/', function ($req, $res, $args) {
    return $this->view->render($res, 'home.html', [
        'banners'=>$select = $this->db->query("select * from carousel where carousel_status='visible'")->fetchAll(PDO::FETCH_ASSOC),
        'categories'=>$req->getAttribute('categories'),
        'products'=>$select = $this->db->query("select * from product limit 6")->fetchAll(PDO::FETCH_ASSOC),
        'news'=>$select = $this->db->query("select * from article where article_type='news' order by article_date desc limit 6")->fetchAll(PDO::FETCH_ASSOC),
        'promo'=>$select = $this->db->query("select * from article where article_type='promo' order by article_date desc limit 6")->fetchAll(PDO::FETCH_ASSOC),
    ]);
})->setName('home')->add($front_category);
