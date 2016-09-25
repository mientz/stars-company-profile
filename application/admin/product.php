<?php
$app->group('/admin/product', function () {
    $select_product = function ($req, $res, $next) {
        $route = $req->getAttribute('route');
        $category = $route->getArgument('category');

        $query = "
            select
            b.brand_name, p.product_code, cl.color_name, p.product_id, p.product_image,
            p.product_ispopular, m.material_name, p.product_name, p.product_price, p.product_size_min, p.product_size_max,
            p.product_view, GROUP_CONCAT(DISTINCT c.category_name SEPARATOR ', ') 'product_category'
            from
            product p, product_category pc, category c, brand b, material m, color cl
            where
            p.product_id=pc.product_id and c.category_id=pc.category_id and
            p.material_id = m.material_id and b.brand_id=p.brand_id and cl.color_id=p.color_id
            ".($category != null ? "and c.category_id='".$category."'" : "")."
            ".(isset($_POST["search"]) ? "
            and p.product_name like CONCAT('%', '".$_POST["search"]."', '%') or
            p.product_code like CONCAT('%', '".$_POST["search"]."', '%') or
            p.product_brand like CONCAT('%', '".$_POST["search"]."', '%')
            " : '')."
            group by p.product_id
            ";
        $select = $this->db->prepare($query);
        if($select->execute()){
            $req = $req->withAttribute('products', $select->fetchALL(PDO::FETCH_ASSOC));
            if($select->rowCount() == 0){
                $req = $req->withAttribute('found', true);
            }else{
                $req = $req->withAttribute('found', false);
            }
        }

        $search_param = [];
        if($category != null){
            $child = $this->db->query("select * from category where category_id='".$category."'")->fetch(PDO::FETCH_ASSOC);
            $parrent = $this->db->query("select * from category where category_id='".$child["category_parent_id"]."'")->fetch(PDO::FETCH_ASSOC);
            array_push($search_param, ["title"=>$parrent["category_name"], "id"=>$parrent["category_id"]]);
            array_push($search_param, ["title"=>$child["category_name"], "id"=>$child["category_id"]]);
        }

        if(isset($_POST['search'])){
            array_push($search_param, ["title"=>$_POST['search'], "id"=>""]);
        }
        $req = $req->withAttribute('search_param', $search_param);
        $res = $next($req, $res);
        return $res;
    };

    $detail_product = function ($req, $res, $next) {
        $route = $req->getAttribute('route');
        $product_id = $route->getArgument('product_id');

        $query = "
            select
                p.brand_id, p.product_code, p.color_id, p.product_id, p.product_image,
                p.product_ispopular, p.material_id, p.product_name, p.product_price, p.product_size_min, p.product_size_max,
                p.product_view, GROUP_CONCAT(DISTINCT c.category_name SEPARATOR ', ') 'product_category'
            from
                product p, product_category pc, category c
            where
                p.product_id=pc.product_id and c.category_id=pc.category_id and
                p.material_id = m.material_id and b.brand_id=p.brand_id and cl.color_id=p.color_id and
                p.product_id = '".$product_id."'
                group by p.product_id
            ";
        $select = $this->db->prepare($query);
        if($select->execute()){
            $req = $req->withAttribute('product_detail', $select->fetch(PDO::FETCH_ASSOC));
            if($select->rowCount() == 0){
                $req = $req->withAttribute('found', true);
            }else{
                $req = $req->withAttribute('found', false);
            }
        }
        $res = $next($req, $res);
        return $res;
    };

    $select_category = function ($req, $res, $next) {
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

    $this->map(['GET', 'POST'], '/view[/{category}]', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/product.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'products'=>$req->getAttribute('products'),
            'categories'=>$req->getAttribute('categories'),
            'search_param'=>$req->getAttribute('search_param')
        ]);
    })->setName('admin-product')->add($select_product)->add($select_category);

    $this->get('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/product-add.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'categories'=>$req->getAttribute('categories'),
            'brands'=>$this->db->query("select * from brand")->fetchAll(PDO::FETCH_ASSOC),
            'materials'=>$this->db->query("select * from material")->fetchAll(PDO::FETCH_ASSOC),
            'colors'=>$this->db->query("select * from color")->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-product-add')->add($select_category);

    $this->post('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        if(isset($_FILES["product_image"]) && $_FILES['product_image']['tmp_name'] != ""){
            if ($_FILES["product_image"]["type"] == "image/bmp" || $_FILES["product_image"]["type"] == "image/png" || $_FILES["product_image"]["type"] == "image/jpeg"){
                $user_id = $this->session->user_id;
                $product_name = $_POST['product_name'];
                $product_code = $_POST['product_code'];
                $product_material = $_POST['product_material'];
                $product_color = $_POST['product_color'];
                $product_size_min = $_POST['product_size_min'];
                $product_size_max = $_POST['product_size_max'];
                $product_price = $_POST['product_price'];
                $product_category_parent = $_POST['product_category_parent'];
                $product_category_children = $_POST['product_category_children'];
                $product_brand = $_POST['product_brand'];

                $ext = end((explode(".", $_FILES['product_image']['name'])));
                $sourcePath = $_FILES['product_image']['tmp_name'];
                $file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $product_name);
                $file = 'product-'.$file."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                $targetPath = "public/data/product/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                insert into product
                values('', :product_code, :product_name, :product_brand, :product_material, :product_color, :product_size_min, :product_size_max, :product_price,  '0', '0', :product_image)
                ");
                $insert->bindParam(':product_name', $product_name, PDO::PARAM_STR);
                $insert->bindParam(':product_code', $product_code, PDO::PARAM_INT);
                $insert->bindParam(':product_brand', $product_brand, PDO::PARAM_INT);
                $insert->bindParam(':product_material', $product_material, PDO::PARAM_INT);
                $insert->bindParam(':product_color', $product_color, PDO::PARAM_INT);
                $insert->bindParam(':product_size_min', $product_size_min, PDO::PARAM_INT);
                $insert->bindParam(':product_size_max', $product_size_max, PDO::PARAM_INT);
                $insert->bindParam(':product_price', $product_price, PDO::PARAM_STR);
                $insert->bindParam(':product_image', $file, PDO::PARAM_STR);
                if($insert->execute()){
                    $product_id = $this->db->lastInsertId();
                    $this->db->exec("insert into do_product values('', '".$user_id."', '".$product_id."', 'add', '".date('Y-m-d h:i:s', time())."')");
                    $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_parent."')");
                    $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_children."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
                }else{
                    return $c['response']->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
            }
        }
    });

    $this->get('/edit/{product_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/product-edit.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'categories'=>$req->getAttribute('categories'),
            'product_detail'=>$req->getAttribute('product_detail'),
            'brands'=>$this->db->query("select * from brand")->fetchAll(PDO::FETCH_ASSOC),
            'materials'=>$this->db->query("select * from material")->fetchAll(PDO::FETCH_ASSOC),
            'colors'=>$this->db->query("select * from color")->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-product-edit')->add($detail_product)->add($select_category);

    $this->post('/edit', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $user_id = $this->session->user_id;
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $product_material = $_POST['product_material'];
        $product_color = $_POST['product_color'];
        $product_size = $_POST['product_size'];
        $product_price = $_POST['product_price'];
        $product_category_parent = $_POST['product_category_parent'];
        $product_category_children = $_POST['product_category_children'];
        $product_brand = $_POST['product_brand'];
        $product_ispopular = $_POST['product_ispopular'];
        if(isset($_FILES["product_image"]) && $_FILES['product_image']['tmp_name'] != ""){
            if ($_FILES["product_image"]["type"] == "image/bmp" || $_FILES["product_image"]["type"] == "image/png" || $_FILES["product_image"]["type"] == "image/jpeg"){


                $ext = end((explode(".", $_FILES['product_image']['name'])));
                $sourcePath = $_FILES['product_image']['tmp_name'];
                $file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $product_name);
                $file = 'product-'.$file."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                $targetPath = "public/data/product/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                update product
                set
                    product_code=:product_code,
                    product_name=:product_name,
                    product_brand=:product_brand,
                    product_material=:product_material,
                    product_color=:product_color,
                    product_size=:product_size,
                    product_price=:product_price,
                    product_ispopular=:product_ispopular,
                    product_image=:product_image

                where
                    product_id=:product_id
                ");
                $insert->bindParam(':product_id', $product_id, PDO::PARAM_STR);
                $insert->bindParam(':product_name', $product_name, PDO::PARAM_STR);
                $insert->bindParam(':product_code', $product_code, PDO::PARAM_INT);
                $insert->bindParam(':product_brand', $product_brand, PDO::PARAM_STR);
                $insert->bindParam(':product_material', $product_material, PDO::PARAM_STR);
                $insert->bindParam(':product_color', $product_color, PDO::PARAM_STR);
                $insert->bindParam(':product_size', $product_size, PDO::PARAM_STR);
                $insert->bindParam(':product_price', $product_price, PDO::PARAM_STR);
                $insert->bindParam(':product_image', $file, PDO::PARAM_STR);
                $insert->bindParam(':product_ispopular', $product_ispopular, PDO::PARAM_INT);
                if($insert->execute()){
                    $this->db->exec("insert into do_product values('', '".$user_id."', '".$product_id."', 'edit', '".date('Y-m-d h:i:s', time())."')");
                    $this->db->exec("delete from product_category where product_id='".$product_id."'");
                    $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_parent."')");
                    $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_children."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
                }else{
                    return $c['response']->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
            }
        }else{
            $insert = $this->db->prepare("
               update product
                set
                    product_code=:product_code,
                    product_name=:product_name,
                    product_brand=:product_brand,
                    product_material=:product_material,
                    product_color=:product_color,
                    product_size=:product_size,
                    product_price=:product_price,
                    product_ispopular=:product_ispopular

                where
                    product_id=:product_id
                ");
            $insert->bindParam(':product_id', $product_id, PDO::PARAM_STR);
            $insert->bindParam(':product_name', $product_name, PDO::PARAM_STR);
            $insert->bindParam(':product_code', $product_code, PDO::PARAM_INT);
            $insert->bindParam(':product_brand', $product_brand, PDO::PARAM_STR);
            $insert->bindParam(':product_material', $product_material, PDO::PARAM_STR);
            $insert->bindParam(':product_color', $product_color, PDO::PARAM_STR);
            $insert->bindParam(':product_size', $product_size, PDO::PARAM_STR);
            $insert->bindParam(':product_price', $product_price, PDO::PARAM_STR);
            $insert->bindParam(':product_ispopular', $product_ispopular, PDO::PARAM_INT);
            if($insert->execute()){
                $this->db->exec("insert into do_product values('', '".$user_id."', '".$product_id."', 'edit', '".date('Y-m-d h:i:s', time())."')");;
                $this->db->exec("delete from product_category where product_id='".$product_id."'");
                $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_parent."')");
                $this->db->exec("insert into product_category values('', '".$product_id."', '".$product_category_children."')");
                return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
            }else{
                return $c['response']->withStatus(500)
                    ->withHeader('Content-Type', 'text/html')
                    ->write('Something went wrong!');
            }
        }
    })->setName('admin-product-edit-post');

    $this->get('/delete/{product_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $this->db->exec("delete from do_product where product_id='".$args['product_id']."'");
        $this->db->exec("delete from product_category where product_id='".$args['product_id']."'");
        $delete = $this->db->prepare("delete from product where product_id='".$args['product_id']."'");
        if($delete->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }else{
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }
    })->setName('admin-product-delete');

    /*Master Helper*/

//    for brand
    $this->get('/brand', function ($req, $res, $args) {
        $brand = $this->db->query("select brand_id 'id', brand_name 'name' from brand where deleted='0'")->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($brand);
    })->setName('admin-brand');

    $this->post('/brand/add', function ($req, $res, $args) {
        $name = $_POST['name'];
        $insert = $this->db->prepare("
                insert into
                brand(brand_name, deleted)
                values (:brand_name, '0')
                ");
        $insert->bindParam(':brand_name', $name, PDO::PARAM_STR);
        $insert->execute();
    })->setName('admin-brand-add');

    $this->post('/brand/edit', function ($req, $res, $args) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update brand
                set brand_name = :brand_name
                where brand_id = :id
                ");
        $insert->bindParam(':brand_name', $name, PDO::PARAM_STR);
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-brand-edit');

    $this->post('/brand/delete', function ($req, $res, $args) {
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update brand
                set deleted = '1'
                where brand_id = :id
                ");
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-brand-delete');

//    for material
    $this->get('/material', function ($req, $res, $args) {
        $brand = $this->db->query("select material_id 'id', material_name 'name' from material where deleted='0'")->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($brand);
    })->setName('admin-material');

    $this->post('/material/add', function ($req, $res, $args) {
        $name = $_POST['name'];
        $insert = $this->db->prepare("
                insert into
                material(material_name, deleted)
                values (:material_name, '0')
                ");
        $insert->bindParam(':material_name', $name, PDO::PARAM_STR);
        $insert->execute();
    })->setName('admin-material-add');

    $this->post('/material/edit', function ($req, $res, $args) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update material
                set material_name = :material_name
                where material_id = :id
                ");
        $insert->bindParam(':material_name', $name, PDO::PARAM_STR);
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-brand-edit');

    $this->post('/material/delete', function ($req, $res, $args) {
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update material
                set deleted = '1'
                where material_id = :id
                ");
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-material-delete');

//    for color
    $this->get('/color', function ($req, $res, $args) {
        $brand = $this->db->query("select color_id 'id', color_name 'name' from color where deleted='0'")->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($brand);
    })->setName('admin-color');

    $this->post('/color/add', function ($req, $res, $args) {
        $name = $_POST['name'];
        $insert = $this->db->prepare("
                insert into
                color(color_name, deleted)
                values (:color_name, '0')
                ");
        $insert->bindParam(':color_name', $name, PDO::PARAM_STR);
        $insert->execute();
    })->setName('admin-color-add');

    $this->post('/color/edit', function ($req, $res, $args) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update color
                set color_name = :color_name
                where color_id = :id
                ");
        $insert->bindParam(':color_name', $name, PDO::PARAM_STR);
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-color-edit');

    $this->post('/color/delete', function ($req, $res, $args) {
        $id = $_POST['id'];
        $insert = $this->db->prepare("
                update color
                set deleted = '1'
                where color_id = :id
                ");
        $insert->bindParam(':id', $id, PDO::PARAM_INT);
        $insert->execute();
    })->setName('admin-color-delete');

})->add($user_detail);
