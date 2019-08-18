<?php
		$mysqli = new mysqli("localhost", "krzywka4_con", "27091990", "krzywka4_sportlive"); 
		$mysqli->set_charset("utf8");
		
		$relations_id = $_POST['id']; 
		
		$sql = "SELECT id, icon, time, text FROM posts WHERE relations_id = '$relations_id' ORDER BY created_at DESC";
		
		if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}
	echo '<br />';
while ($actor = $result->fetch_assoc()) {	
	echo "
	<div class='row'>
      <div class='col-2'>
			<span style='font-size: 18px; color: #808080; font-family: Calibri;'>".$actor['time']."</span>
	  </div>
	  <div class='col-1'>
			<img src=".$actor['icon']." />
	  </div>
	  <div class='col-9'>
			".$actor['text']."
	  </div>
	</div>
	<div class='row'>
		<div class='col-12'>
			<hr>
		</div>
	 </div>";
}
?>