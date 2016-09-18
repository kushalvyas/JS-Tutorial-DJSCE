<?php 
	include("conn.php");
	mysql_select_db('djsce', $conn);
	if(isset($_POST)){
		extract($_POST);
		$sqlretr = mysql_query("TRUNCATE TABLE  `prioritylist`");
		if($sqlretr){
			return json_encode(array('success' => 1));;
		}else{
			return json_encode(array('error'=> 0));
		}
	}
 ?>