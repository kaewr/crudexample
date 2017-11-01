<?php
	require_once 'db_config.php';
	
		
	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);
	//var_dump($result);
	$output = [];
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		//echo $row['id'] . " / " . $row['fname'] . " : " . $row['lname']. " : " . $row['contact'] . "<br>";
		$output['data'][]=array($row['id'],$row['fname'],$row['lname'],$row['contact']);
	}
	//echo "<br>";
	//var_dump($data);
	//echo json_encode($output);
	$conn->close();
?>