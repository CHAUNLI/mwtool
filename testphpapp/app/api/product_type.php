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