<?php
		$mysqli = new mysqli("localhost", "krzywka4_con", "27091990", "krzywka4_sportlive"); 
		$mysqli->set_charset("utf8");
		
		$relations_id = $_POST['id']; 
		
		$sql = "SELECT nick, text, DATE_FORMAT(created_at, '%H:%i') AS nowa_data FROM chat_posts WHERE relations_id = '$relations_id' ORDER BY created_at DESC LIMIT 7";
		
		if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}

while ($actor = $result->fetch_assoc()) {	
	echo "
      <div class='col-lg-2'>
			<span style='font-size: 14px; color: #808080; font-family: Calibri;'>".$actor['nowa_data']."</span>
	  </div>
	  <div class='col-lg-2'>
			<span style='font-size: 14px; font-family: Calibri;'><b>".$actor['nick']."</b></span>
	  </div>
	  <div class='col-lg-8'>
			<span style='font-size: 14px; font-family: Calibri;'>".$actor['text']."</span>
	  </div>";
}
?>