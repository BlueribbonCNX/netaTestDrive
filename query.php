<?php 
	
switch($_GET['type']){
	
	case 'connect':

		$mysql_host = 'localhost';
		$mysql_username = 'mastersi'; //user
		$mysql_pass = 'montfort47';
		$mysql_db='mastersi_netacnxlineOA';

		$link = mysql_connect($mysql_host, $mysql_username, $mysql_pass);
		if (!$link) {
			die('Could not connect: ' . mysql_error());
			echo 'Could not select database1';
		}

		if (!mysql_select_db($mysql_db, $link)) {
			echo 'Could not select database2';
			exit;
		}

		echo "success";
		
	break;

	case 'registered':

		$u_id = $_GET['u_id'];
		$sql = 'SELECT * FROM customer WHERE c_id = "1" limit 1';
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		echo $row['c_user_id'];

	break;

	

}
	
	





?>
