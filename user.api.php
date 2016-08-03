<?php 
include ("mysqli_conn_inc.php");

$method= $_SERVER["REQUEST_METHOD"];
switch ($method){
    // User Register
    case 'POST':
		$username= $_POST["username"];
        $fname= $_POST["fname"];
        $lname= $_POST["lname"];
        $email= $_POST["email"];
		$password= $_POST["password"];
        $result= mysqli_query($dbcon,"SELECT * from users WHERE usname='$username'") or die("Could not issue MySQL query");
        $records= $result -> num_rows;
        if($records>0){
            echo('Duplicate');
            return;
        }else {
            $sqlstring="insert into users (usname,fname,lname,email,`password`) values ('$username','$fname','$lname','$email','$password')";
            $result = mysqli_query($dbcon,$sqlstring) or die("Could not issue insert user query");
            $userid = mysqli_insert_id($dbcon);
            echo $userid;
        }
	break;
    // User Login check
    case 'GET':
        $userid = "0";
        $username= $_GET["username"];
        $password= $_GET["password"];
//        echo "username: ".$username;
        $result= mysqli_query($dbcon,"SELECT * from users WHERE usname='$username'and password='$password'") or die("Could not issue MySQL query");
        if(mysqli_num_rows($result))
        {
            while ($row = mysqli_fetch_array($result))
            {
                $userid = $row["user_id"];
            }
        }
        else
        {
            //$userid = "0";
        }
        echo $userid;
    break;
}
mysqli_close($dbcon);


?>