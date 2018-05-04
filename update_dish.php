<?php
	require ('db_credentials.php');
	require ('web_utils.php');
	
	$stylesheet = 'taskmanager.css';
	
	

    $x=$_POST['table'];
    $y=$_POST['book'];
    $z=$_POST['change'];
    
	
	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->connect_error), $stylesheet);
		exit;
	}
	
	$x = $mysqli->real_escape_string($x);
	$y = $mysqli->real_escape_string($y);
    $z = $mysqli->real_escape_string($z);

    $sql="UPDATE ".$x." SET Price=".$z." WHERE id=".$y." ";
	
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