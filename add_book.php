<?php
	require ('db_credentials.php');
	require ('web_utils.php');
	
	$stylesheet = 'taskmanager.css';
	


	$Name = $_POST['Name'] ;
    $Author = $_POST['Author'] ? $_POST['Author']: "None";
	$Price= $_POST['Price'];
    $Stock = $_POST['Stock']  ;
	

    $x=$_POST['table'];
    print $x;
	
	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->connect_error), $stylesheet);
		exit;
	}
	
	$Name = $mysqli->real_escape_string($Name);
	$Author = $mysqli->real_escape_string($Author);
	$Price = $mysqli->real_escape_string($Price);
	$Stock = $mysqli->real_escape_string($Stock);

	$sql = "INSERT INTO ".$x." (Name, Author, Price, Stock) VALUES ('$Name', '$Author', '$Price','$Stock')";
	
	$result = $mysqli->query($sql);
	if ($result) {
		// insert successfull, redirect browser to index.php to see list of tasks
		redirect("back.php");
	} else {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->error . " using SQL: $sql"), $stylesheet);
		exit;
	}
	
	
	function generateErrorPageHTML($error) {
	$html = <<<EOT
<h1>Tasks</h1>
<p>An error occurred: $error</p>
<p><a class='taskButton' href='task_form.html'>Add Task</a><a class='taskButton' href='view_tasks.php'>View Tasks</a></p>
EOT;

	return $html;
	}
?>