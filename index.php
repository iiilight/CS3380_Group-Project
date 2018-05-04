<?php


	// A user has to have logged in order to have this 'username' cookie
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
	// If the cookie isn't there, send them back to the login
	if (!$username) {
		header("Location: login.php");
		exit;
	}
?>
<?php

	require ('db_credentials.php');
	require ('web_utils.php');
	
	$stylesheet = 'taskmanager.css';
	



	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($mysqli->connect_error) {
		print generatePageHTML("Tasks (Error)", generateErrorPageHTML($mysqli->connect_error), $stylesheet);
		exit;
	}

$x=$_POST["Category"];




	$sql = "SELECT * FROM ".$x;
	$result = $mysqli->query($sql);
	$tasks = array();
 //  echo $arrlength;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($tasks, $row);
		}
	}
	
	print generatePageHTML("Tasks", generateTaskTableHTML($tasks,$x), $stylesheet);
	
	
	
	function generateTaskTableHTML($tasks,$x) {
        
        if (count($tasks) < 0) {
			$html .= "<p>No books in this category!</p>\n<p><a class='taskButton' href='createnewtable.php'>+ Add type</a></p>\n";
			return $html;
		}
		$html ="<h1>".$x."</h1>\n";
            
   
		
		$html .= "<p>Here you can add, delete and update books </p>\n";
	

		$html .= "<table>\n";
		$html .= "<tr><th>id</th><th>Name</th><th>Author</th><th>Price</th><th>Stock</th></tr>\n";
	
		foreach ($tasks as $task) {


			$id = $task['id'];
			$Name = $task['Name'];

			$Author= $task['Author'];
        $Price = ($task['Price'])? $task['Price'] : '';
			$Stock = $task['Stock'] ;//? $task['Stock'] : '';

			$html .= "<tr><td>$id</td><td>$Name</td><td>$Author</td><td>$Price</td><td>$Stock</td></tr>\n";
		}
		$html .= "</table>\n";
        
        
	
		return $html;
	}
	
	function generateErrorPageHTML($error) {
	$html = <<<EOT
<h1>Tasks</h1>
<p>An error occurred: $error</p>
EOT;

	return $html;
	}

?>
<!DOCTYPE html>

<html>
<head></head>
<body>
    <form action='book_form.php' method='POST'><input type='hidden' name='table' value='<?php print $x; ?>'><input type='submit' value='ADD Books'></form>
    <form action='book_form_delete.php' method='POST'><input type='hidden' name='table' value='<?php print $x; ?>'><input type='submit' value='DELETE Books'></form>
    <form action='book_form_update.php' method='POST'><input type='hidden' name='table' value='<?php print $x; ?>'><input type='submit' value='UPDATE Books'></form>
    <a href="adminindex.php">Back</a>
</body>
</html>