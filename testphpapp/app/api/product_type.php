<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 11/05/2017
 * Time: 2:42 PM
 */
$app->get('/products',function(){

    require_once ("dbconnect.php");

    $queryy = "select * from mw_products order by id";



    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

    if($result= $conn->query($queryy)) {

       while ($row = $result->fetch_assoc()) {
           $data[] = $row;
       }
    }
    mysqli_close($conn);
    if(isset($data)){
        header("Content-Type: application/json");
        echo json_encode($data);
    }

});


$app->get('/products/{id}', function($request){
    require_once ("dbconnect.php");

    $id=$request->getAttribute('id');
    $query ="select * from mw_products where id=$id";
    $result= $conn->query($query);
    $data[]=$result->fetch_assoc();
    header("Content-Type: application/json");
    echo json_encode($data);

});

