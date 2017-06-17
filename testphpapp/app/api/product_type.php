<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 11/05/2017
 * Time: 2:42 PM
 */


$app->get('/hello/{name}', function (Request $request, Response $response) {

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});



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
        //echo "good";

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
       $row = $result->fetch_assoc();
            $data = $row;

    }

    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data,JSON_FORCE_OBJECT);

    }else{
        echo "error";
    }

    mysqli_close($db);

});

$app->get('/products_codes/{id}', function($request){
    $db=new db();
    $db = $db->connect();
    $id=$request->getAttribute('id');
    $query ="select * from mw_product_code where series_id=$id";
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
        echo "error123123123";
    }

    mysqli_close($db);

});

$app->get('/custom_index',function($request){
    $db=new db();
    $db = $db->connect();
    $queryy = "select * from mw_custom_trailer order by id";
    if($result= $db->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);
        //echo "good";

    }


});

$app->get('/custom_canopy',function($request){
    $db=new db();
    $db = $db->connect();
    $queryy = "select * from mw_custom_canopy order by id";
    if($result= $db->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);
        //echo "good";

    }


});

$app->get('/custom_toolbox',function($request){
    $db=new db();
    $db = $db->connect();
    $queryy = "select * from mw_custom_toolbox order by id";
    if($result= $db->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    mysqli_close($db);
    if(isset($data)){
        header("Content-Type: application/json;charset=utf-8");
        echo json_encode($data);
        //echo "good";

    }


});


$app->post('/products/accessory',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Accessory' ";
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

$app->post('/products/jackoff',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Standard Canopy' ";
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


$app->post('/products/floor',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Canopy with Floor' ";
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

$app->post('/products/nofloor',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Canopy without Floor' ";
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


$app->post('/products/enclosed',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Enclosed Trailer' ";
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

$app->post('/products/open',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Open Trailer' ";
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

$app->post('/products/cover',function($request){
    if ($request->hasHeader('Accept')) {
        $test="right";

        $db=new db();
        $db = $db->connect();
        $query ="select * from mw_series WHERE product_title = 'Trailer Cover' ";
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



});