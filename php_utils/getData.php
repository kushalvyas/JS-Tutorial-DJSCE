<?php 
	include('conn.php');
	mysql_select_db('djsce', $conn);
	$sqldata = mysql_query("SELECT * FROM `prioritylist` ORDER BY `plevel` DESC");
	$rows = array();
	$count=0;
	while($r = mysql_fetch_assoc($sqldata)){
		$rows[$count++] = $r;
	}
	echo json_encode($rows);

 ?>