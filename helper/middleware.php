<?php
$app->add(new \Slim\Middleware\Session([
    'name' => 'stars',
    'autorefresh' => true,
    'lifetime' => '1 hour'
]));

// user detail middleware
$user_detail = function ($req, $res, $next) {
    $user_id = $this->session->user_id;
    $select = $this->db->prepare("select * from user where user_id=:user_id");
    $select->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $select->execute();
    $req = $req->withAttribute('user_detail', $select->fetch(PDO::FETCH_ASSOC));

    $user_count = $this->db->query("select count(user_id) from user")->fetchColumn();
    $req = $req->withAttribute('user_count', $user_count);
    $response = $next($req, $res);
    return $response;
};

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
