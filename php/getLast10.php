<?php
	include 'pagebase.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM `Post` ORDER BY Date DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $toEcho = 
	        '<div class="post">
	        	<div class="title"> ' .$row['Title'].'</div>
	        	<div class="type"> a ' . strtolower($row['Type']).'</div>
	        	<div class="date"> '.$row['Date'].'</div>
	        	<div class="content"><p>'.$row['Content'].'</p></div>
	        	<div class="links"><a>'.$row['Link'].'</a></div></div>';
	        echo $toEcho;
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>