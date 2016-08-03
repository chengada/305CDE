<?php 
include ("mysqli_conn_inc.php");

$method= $_SERVER["REQUEST_METHOD"];
switch ($method){
    case 'PUT':
    	parse_str(file_get_contents("php://input"),$data);
		$user_id = $data["user_id"];
		$password = $data["password"];
		$sql = "UPDATE users SET password='$password' WHERE user_id =$user_id";
		$result = mysqli_query($dbcon,$sql)or die("Could not issue update query");
		if ($result)
		{
			echo 'updated';	
		}
		else
		{
			echo 'error';
		}
	break;
    // Login check
    case 'GET':
        $userid = "0";
        $username= $_GET["username"];
        $email= $_GET["email"];
//        echo "username: ".$username;
        $result= mysqli_query($dbcon,"SELECT * from users WHERE usname='$username'and email='$email'") or die("Could not issue MySQL query");
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