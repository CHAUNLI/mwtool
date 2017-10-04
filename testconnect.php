<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 21/06/2017
 * Time: 11:06 AM
 */


//Step1
 $db = mysqli_connect('localhost','mwtoolbo_admin1','123123','mwtoolbo_test')
 or die('Error connecting to MySQL server.');
?>

<html>
<head>
</head>
<body>
<h1>PHP connect to MySQL</h1>

<?php
//Step2
$query = "select * from mw_series order by id";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
    echo $row['product_series'] . ' ' . $row['product_title'] . ': ' . $row['product_series'] . ' ' . $row['product_series'] .'<br />';
}
//Step 4
mysqli_close($db);
?>

</body>
</html>