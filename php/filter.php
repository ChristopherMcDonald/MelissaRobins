<?php
	include 'pagebase.php';

	$monthyear = $_GET['monthyear'];
	$type = $_GET['type'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	if($monthyear == "") {
		$sql = "SELECT * FROM `Post` WHERE Type LIKE '%$type%'";
	} else {
		$sql = "SELECT * FROM `Post` WHERE Month(Date) = '" . substr($monthyear, 5) ."' 
									AND YEAR(Date) = '" . substr($monthyear,0,4) . "' " .
									"AND Type LIKE '%" . $type . "%';";
	}
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $toEcho = 
	        '<div class="post"><div class="title"> ' .$row['Title'].
	        ' </div><div class="date"> '.$row['Date'].
	        ' </div><div class="content"><p>'.$row['Content'].
	        '</p></div><div class="links"><a>'.$row['Link'].'</a></div></div>';
	        echo $toEcho;
	    }
	} else {
	    $toEcho = 
	        '<div class="post"><div class="title"> ' ."We are not quite done working on this one.".
	        ' </div><div class="date"> '.'Please check back later for these pieces.';
	        echo $toEcho;
	}
	$conn->close();
?>