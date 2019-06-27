<?php
		$mysqli = new mysqli("localhost", "krzywka4_con", "27091990", "krzywka4_sportlive"); 
		$mysqli->set_charset("utf8");
		
		$relations_id = $_POST['id']; 
		
		$sql = "SELECT status FROM relations WHERE id = '$relations_id'";
		
		if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}

while ($actor = $result->fetch_assoc()) {	
	echo "
      ".$actor['status']."";
}
?>