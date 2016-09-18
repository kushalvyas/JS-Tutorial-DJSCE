<?php 
	include("conn.php");
	mysql_select_db('djsce', $conn);
	if(isset($_POST)){
		extract($_POST);
		var_dump($_POST);
		$x =  intval($id);
		echo "primary_id php".$id;
		$q = "DELETE FROM `prioritylist` WHERE `id`='$x'";
		$sqlretr = mysql_query($q);
		echo $q;
		// if($sqlretr){
		// 	echo json_encode(array('success' => 1));;
		// }else{
		// 	echo json_encode(array('error'=> 0));
		// }
	}
 ?>