<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 11/05/2017
 * Time: 2:42 PM
 */
$app->get('/products',function(){
    $db=new db();
    $db = $db->connect();
    $queryy = "select * from mw_products order by id";
    if($result= $db->query($queryy)) {
       while ($row = $result->fetch_assoc()) {
           $data[] = $row;
       }
    }
    mysqli_close($db);
    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);

    }

});


$app->get('/products/{id}', function($request){
    $db=new db();
    $db = $db->connect();
    $id=$request->getAttribute('id');
    $query ="select * from mw_products where id=$id";
    $result= $db->query($query);
    $data[]=$result->fetch_assoc();
    header("Content-Type: application/json;charset=utf-8");
    echo json_encode($data);

    mysqli_close($db);

});

$app->post('/products/series',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series order by id";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_top',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Top Opening' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_side',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Side Opening' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_under',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Underbody' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_drawers',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Site Box' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_tray',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Sliding Tray' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});

$app->post('/products/series_coated',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Power Coated' ";
        if($result= $db->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        mysqli_close($db);
        if(isset($data)){
            header("Content-Type: application/json;charset=utf-8");
            echo json_encode($data);

        }

    }else{
        echo "error";
    }
    /* foreach($allcalls as $key => $values){
         echo "".$key.": ".implode(",",$values);
     }
     //*/


});


$app->get('/products_name/{id}', function($request){
    $db=new db();
    $db = $db->connect();
    $id=$request->getAttribute('id');
    $query ="select product_series from mw_series where id=$id";
    $result= $db->query($query);
    $data=$result->fetch_assoc();
    header("Content-Type: application/json;charset=utf-8");
    echo $data['product_series'];

    mysqli_close($db);

});


$app->get('/products_features/{id}', function($request){
    $db=new db();
    $db = $db->connect();
    $id=$request->getAttribute('id');
    $query ="select * from mw_features where product_series_id=$id";
    $result= $db->query($query);

    if($result= $db->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);

    }else{
        echo "error";
    }

    mysqli_close($db);

});