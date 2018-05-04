

<!DOCTYPE html>



<html>

<head>

	<title>Online Book Ordering System!</title>

    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

	<link href="app.css" rel="stylesheet" type="text/css">

    

    

    

        

        <style>

        

        body {

        background-image: url("img/food1.jpg");

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

            

            h2{

                font-family: 'Macondo Swash Caps', cursive;

                font-size:20px;

            }  

            

        </style>

</head>

<body>

    <div id="loginWidget" class="form-style-6">

      <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);

$cname=$_POST["CategoryName"];



if ($connect->connect_error) {

    die("Connection failed: " . $connect->connect_error);

} 



$sql = "CREATE TABLE ".$cname." (

 id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
 Name varchar(35) NOT NULL,
 Author varchar(256) NOT NULL,
 Price int(11) DEFAULT NULL,
 Stock int(35) DEFAULT NULL

)";// ENGINE=MyISAM DEFAULT CHARSET=latin1;";

if (mysqli_query($connect, $sql)) {

    echo "<h2>"."Table MyGuests created successfully"."</h2>";

} else {

    echo "Error creating table: " . mysqli_error($connect);

}



?>

       

    <a href="adminindex.php"><p>Back to the Home page!</p></a>

        

        

        

        

        

    </div>

    

</body>

</html>

