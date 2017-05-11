<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 11/05/2017
 * Time: 2:42 PM
 */
$app->get('/products',function(){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name ="test";

    $conn = new mysqli($host,$user,$pass,$db_name );

    $queryy = "select * from my_products order by id";


    if($result= $conn->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;

        }
        echo"good";
    }


});

