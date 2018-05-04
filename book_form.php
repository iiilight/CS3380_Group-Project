<?php
    $x=$_POST['table'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Task Manager</title>
<link rel="stylesheet" type="text/css" href="taskmanager.css">
</head>
<body>

<h1><?php print $x; ?></h1>
<form action="add_book.php" method="post">
    <p>Name<br />
  <input type="text" name="Name" value="" placeholder="Book Name" maxlength="20" size="20"></p>
    <p>Author<br />
  <input type="text" name="Author" value="" placeholder="Author Name" maxlength="20" size="50"></p>
    <p>Price<br />
  <input type="number" name="Price" value="" placeholder="Book Price" maxlength="20" size="50"></p>
  <p>Stock<br/>
   <input type="number" name="Stock" value="" placeholder="Number of Stock" maxlength="20" size="50"></p>
    <input type="hidden" name="table" value="<?php print $x; ?>">
    <input type="submit" value="Submit">
</form>

</body>
</html>