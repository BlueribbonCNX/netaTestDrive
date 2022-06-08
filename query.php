<?php 
	
switch($_GET['type']){
	
	case 'connect':

		$mysql_host = 'localhost';
		$mysql_username = 'root'; //user
		$mysql_pass = 'mickey00';
		$mysql_db='simssolu_docar';

		$link = mysql_connect($mysql_host, $mysql_username, $mysql_pass);
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}

		if (!mysql_select_db($mysql_db, $link)) {
			echo 'Could not select database';
			exit;
		}

		echo $str;
		
	break;

	case 'registered':

		$u_id = $_GET['u_id'];
		$sql = 'SELECT * FROM customer WHERE c_user_id = "'.$u_id.'" limit 1';
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		if($row['c_user_id'] != ""){
			echo true;
		}else{
			echo false;
		}

	break;

	

}
	
	





?>
