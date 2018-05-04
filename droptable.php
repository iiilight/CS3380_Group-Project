

<!DOCTYPE html>



<html>

<head>

	<title>Drop table</title>

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

$cname=$_POST["Book"];



if ($connect->connect_error) {

    die("Connection failed: " . $connect->connect_error);

} 



$sql = "DROP TABLE ".$cname;

if (mysqli_query($connect, $sql)) {

    echo "<h2>"."Table Deleted successfully"."</h2>";

} else {

    echo "Error deleting table: " . mysqli_error($connect);

}



?>

       

    <a href="adminindex.php"><p>Back to the Home page!</p></a>

       

        

        

        

        

        

    </div>

    

</body>

</html>

