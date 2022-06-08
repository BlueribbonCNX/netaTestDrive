<?php

$dbhost='localhost';
$dbuser ='mastersi_netacnxlineOA';
$dbpassword ='mickey00';
$dbdatabase= 'mastersi_netacnxlineOA';

define("line_token","T0uzXNkzrWlxXhSY37phS7XwOcH9o8dTjBe6n2fkS0h"); //
define("line_token_test",""); //

define("KEY",'simssolution');

date_default_timezone_set("Asia/Bangkok");

$mysqli = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// $mysqli->query("SET character_set_results=utf8");
// $mysqli->query("SET collation_connection=utf8_general_ci");
// $mysqli->query("SET character_set_client=utf8");
// $mysqli->query("SET NAMES utf8");

?>