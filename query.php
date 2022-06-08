<?php 
	
require("connect.php");

switch($_GET['type']){
	
	case 'registered':

		$user_id = $_GET['user_id'];
		$sql = 'SELECT * FROM customer WHERE c_id = "1" limit 1';
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		echo $row['c_user_id'];

	break;

	

}
	
	





?>
