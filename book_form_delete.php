<?php
	require ('db_credentials.php');

    $connect= mysqli_connect($servername,$username,$password ,$dbname);
     $x=$_POST['table'];
    $query = "SELECT * FROM ".$x;
    
    $result1 = mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Task Manager</title>
<link rel="stylesheet" type="text/css" href="taskmanager.css">
</head>
<body>

<h1><?php print $x; ?></h1>
<p>Please choose a book to delete</p>


 <form action="delete_book.php" method="post">
   

 <select name="book">

        <?php $i=1;while($row1 = mysqli_fetch_array($result1)):;?>
        <option value="<?php echo $row1[id]; ?>"><?php echo $row1[Name]; ?></option>
        <?php endwhile; ?>

</select>
     <input type="hidden" name="table" value='<?php print $x; ?>'>
     <input type="submit" value="Submit">
    </form>
</body>
</html>