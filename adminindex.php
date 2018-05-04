<?php


	// A user has to have logged in order to have this 'username' cookie
	$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

	// If the cookie isn't there, send them back to the login
	if (!$username) {
		header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>

<html>
<head>
	<title>Online Book Order System!</title>
    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	<link href="app.css" rel="stylesheet" type="text/css">




        <style>

        body {
        background-image: url("img/admin.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size:cover;
        }

            .form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
                border-radius: 5px;
}

            #home{
                text-align: center;
            }
            h1{
                font-family: 'Cabin Sketch', cursive;
                font-size:40px;
            }

            p{
                font-family: 'Macondo Swash Caps', cursive;
                font-size: 28px;
            }

        </style>
</head>
<body>

    <div id="loginWidget" class="form-style-6">
 <p>Current Books in the database:</p>


        <form action="index.php" method="POST">
        <?php

require ('db_credentials.php');

$connect = mysqli_connect($servername,$username,$password,$dbname);


$sql = "SHOW TABLES FROM epiz_21517305_WorldBook";
$result = $connect->query($sql);

            if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h1>".$row["Tables_in_epiz_21517305_WorldBook"]."</h1>"."   ";


    }
} else {
    echo "0 results";
}
echo "<br>"
?>



    <label >Choose:</label>
                <input type="text" name="Category" placeholder="example: Arts"  value="" >

            <input type="submit" value="Confirm">

        </form>
        <br>
        <a href="createnewtable.php"><button>Create a New Book Table!</button></a>
        <span><a href="deletetable.php"><button>Delete a Book Table!</button></a></span>
         <a href="logout.php"><p>Logout!</p></a>
    </div>

</body>
</html>
