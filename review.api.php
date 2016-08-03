<?php 
include ("mysqli_conn_inc.php");

$method= $_SERVER["REQUEST_METHOD"];
switch ($method){
    case 'GET':
        $drug_id= $_GET["drug_id"];
        $result= mysqli_query($dbcon,"SELECT * FROM review WHERE drug_FDA_id='$drug_id' ORDER BY date DESC") or die("Could not issue select query");
        $data = array();
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    break; 
	case 'POST':
		$data = json_decode(file_get_contents('php://input'));
		$comment = $data -> comment;
		$username = $data -> username;
		$drug_name = $data -> drug_name;
		$drug_id = $data -> drug_id;
		$sql = "INSERT INTO `review`(`usname`,`drug_FDA_id`,`drug_name`,`comment`)VALUES('$username','$drug_id','$drug_name','$comment')";
		$result = mysqli_query($dbcon,$sql)or die("Could not issue insert query");
		if ($result)
		{
			echo 'inserted';	
		}
		else
		{
			echo 'error';
		}
	break;
	case 'DELETE':
    	parse_str(file_get_contents("php://input"),$data);
		$review_id = $data["review_id"];
		$sql = "DELETE FROM review WHERE review_id=$review_id";
		//echo $sql;
		$result = mysqli_query($dbcon,$sql)or die("Could not issue delete query");
		if ($result)
		{
			echo 'deleted';	
		}
		else
		{
			echo 'error';
		}
	break;
	case 'PUT':
    	parse_str(file_get_contents("php://input"),$data);
		$review_id = $data["review_id"];
		$comment = $data["comment"];
		$sql = "UPDATE review SET comment='$comment' WHERE review_id =$review_id";
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
		
	default:
		echo('default');
	break;

}
mysqli_close($dbcon);

?>