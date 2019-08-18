<?php
		$mysqli = new mysqli("localhost", "krzywka4_con", "27091990", "krzywka4_sportlive"); 
		$mysqli->set_charset("utf8");
		
		$relations_id = $_POST['id']; 
		$teamhome = $_POST['teamhome'];
		$teamaway = $_POST['teamaway'];
		
		$sql = "SELECT time, playeron, playeroff, team FROM changes WHERE relation_id = '$relations_id' ORDER BY created_at ASC";
		
		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}

		echo "<br /><div class='row'><div class='col-lg-6'>";
		
		if ($result = $mysqli->query($sql)) {

			/* fetch associative array */
			while ($row = $result->fetch_assoc()) {
				
				if($row['team'] == $teamhome)
				{
					echo "
					<div class='row'><div class='col-lg-2'>
					<span style='font-size: 18px; color: #808080; font-family: Calibri;'>".$row['time']."</span>
					</div>
					<div class='col-lg-2'>
					<img src='/images/change.png' />
					</div>
					<div class='col-lg-8'>
						<b><span style='color: red;'>".$row['playeroff']."</span></b><br /><b><span style='color: green;'>".$row['playeron']."</span></b>
					</div>
					<div class='col-lg-12'>
						<hr>
					</div></div>
					"; 
				}
			}
			echo "</div>";
			/* free result set */
			$result->free();
		}
		
		$sql = "SELECT time, playeron, playeroff, team FROM changes WHERE relation_id = '$relations_id' ORDER BY created_at ASC";
		
		echo "<div class='col-lg-6'>";
		
		if ($result = $mysqli->query($sql)) {

			/* fetch associative array */
			while ($row = $result->fetch_assoc()) {
				
				if($row['team'] == $teamaway)
				{
					echo "<div class='row'><div class='col-lg-2'>
					<span style='font-size: 18px; color: #808080; font-family: Calibri;'>".$row['time']."</span>
					</div>
					<div class='col-lg-2'>
					<img src='/images/change.png' />
					</div>
					<div class='col-lg-8'>
						<b><span style='color: red;'>".$row['playeroff']."</span></b><br /><b><span style='color: green;'>".$row['playeron']."</span></b>
					</div>
					<div class='col-lg-12'>
						<hr>
					</div></div>
					"; 
				}
			}
			echo "</div></div>";
			/* free result set */
			$result->free();
		}

		/* close connection */
		$mysqli->close();
?>