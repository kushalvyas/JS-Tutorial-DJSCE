<?php 
	include("conn.php");
	mysql_select_db('djsce', $conn);
	if(isset($_POST)){
		extract($_POST);
		$sqlretr = mysql_query("INSERT INTO `prioritylist`(`id`, `task`, `plevel`) VALUES (NULL, '$task', '$plevel')");
		if($sqlretr){
			// return array('success' => 1);;
			return "true";
		}else{
			return array('error'=> 0);
		}
	}
 ?>