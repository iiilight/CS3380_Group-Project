<?php

// http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
// http://php.net/manual/en/control-structures.foreach.php
// http://php.net/manual/en/language.operators.string.php
// https://www.w3schools.com/php/php_arrays.asp
// http://php.net/manual/en/language.types.array.php
// http://php.net/manual/en/function.array-push.php
// http://kb.ifastnet.com/index.php?/article/AA-00207/34/Free-Hosting/Page-errors-Misc/blank-white-page-500-error.html
// https://www.w3schools.com/html/html_tables.asp

// connect to DBMS
$servername = "sql304.epizy.com";
$username = "	epiz_21517305";
$password = "mysqlpassword";
$dbname = "epiz_21517305_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$tasks = array();
	while($row = $result->fetch_assoc()) {
        array_push($tasks, $row);
    }

    $taskTableHTML = generateTaskTableHTML($tasks);
    print generatePageHTML($taskTableHTML);
}

function generateTaskTableHTML($tasks) {
	$html = "<table>\n";
	$html .= "<tr><th>ID</th><th>Title</th><th>Description</th></tr>\n";

	foreach ($tasks as $task) {
		$html .= "<tr><td>{$task['id']}</td><td>{$task['title']}</td><td>{$task['description']}</td></tr>\n";
	}
	$html .= "</table>\n";

	return $html;
}

function generatePageHTML($body) {
	$html = <<<EOT
<!DOCTYPE html>
<html>
<head>
<title>Tasks</title>
</head>
<body>
$body

</body>
</html>
EOT;

	return $html;
}

?>
