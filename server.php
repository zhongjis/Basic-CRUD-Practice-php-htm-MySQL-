<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	session_start();
	$id = 0;
	$event = "";
	$note = "";
	$due = "";
	$status = false;

	//connect to dataabse
	$db = mysqli_connect('localhost:8889', 'root', 'root', 'crud');

	//make sure connection is established
	if (!$db) {
		echo "ERROR: unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	}

	// read
	$results = mysqli_query($db, "SELECT * FROM todo");

	// save
	if (isset($_POST['save'])) {
		$event = $_POST['event'];
		$note = $_POST['note'];
		$due = $_POST['due'];

		$query = "INSERT INTO todo (event, note, duedate) VALUES ('$event', '$note', '$due')";
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Address Saved";
		header("location: index.php");
	}
 ?>