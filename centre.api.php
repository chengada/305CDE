<?php 
include ("mysqli_conn_inc.php");

$method= $_SERVER["REQUEST_METHOD"];
switch ($method){
    case 'GET':
        $result= mysqli_query($dbcon,"SELECT * FROM centre ORDER BY ctr_district") or die("Could not issue MySQL query");
        $data = array();
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    break;  
}

mysqli_close($dbcon);
?>