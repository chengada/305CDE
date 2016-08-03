<?php
header("Access-Control-Allow-Origin: *");
$dbhostname = "fdb3.biz.ht";
$dbusername = "2172603_aids";
$dbpassword = "A09200518da";
$dbname = "2172603_aids";
$dbcon = mysqli_connect($dbhostname, $dbusername, $dbpassword,$dbname) or die("Could not open connection to database");
//$dbcon = mysqli_connect("127.0.0.1","root", "root","aids") or die("Could not open connection to database");
mysqli_set_charset($dbcon, 'utf8');
?>