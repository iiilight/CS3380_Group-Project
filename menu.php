



<!DOCTYPE html>



<html>

<head>

	<title>Menu</title>

    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">

	<link href="app.css" rel="stylesheet" type="text/css">

    

    

    

        

        <style>

        

        body {

            background-image: url("img/pic/whitebg.jpg");

            background-repeat: no-repeat;

            -webkit-background-size: cover;

            -moz-background-size: cover;

            -o-background-size: cover;

            background-size:cover;

        

        }

            

            .form-style-6{

                

    font: 95% Arial, Helvetica, sans-serif;

    max-width:750px;

    background: #F7F7F0;

    border-radius: 15px;

                border: 1px dashed black;

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

            #china{

                position: absolute;

                left:20px;

                

            }

            #Italia{

                position: absolute;

                left:780px;

                

            }

            #Japan{

                position: absolute;

                top:370px;

                left: 20px;

            }

            #Thailand{

                position: absolute;

                top:340px;

                left: 850px;

            }

            #Vietnam{

                position: absolute;

                top:370px;

                left: 630px;

                font: 95% Arial, Helvetica, sans-serif;

                max-width:200px;

                background: #F7F7F0;

                border-radius: 15px;

                 border: 1px dashed black;

                text-align: center;

            }

            

            .sqr{

          

            position: fixed;

            width: 70px;

            height: 70px;

            transition: all 0.5s ease;

                filter: grayscale(100%);

                border-radius: 50%;

        }

            #cn{

            bottom:0;

            right: 150px;

        }

        

        #tl{

            bottom:0;

            right: 75px;

        }

            #home{

            bottom:0;

            right: 0;

        }

       

        

        .sqr:hover{



                width: 100px;

                height: 100px;

                filter: grayscale(0%);

            }

            

            

        </style>

</head>

<body>

     <div>

    <div id="Fiction" class="form-style-6">

 <p>Arts books :</p>

     

        

        

        <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);





$sql = "SELECT * FROM Arts";

$result = $connect->query($sql);

            

            if (mysqli_num_rows($result) > 0) {

   

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo " Name: ".$row["Name"]." Author: ".$row["Author"]." Price: $".$row["Price"]."<br>";

    

        

    }

} else {

    echo "0 results";

}

echo "<br>"

?>



            

    

        <br>

        

    </div>

    <div id="Biographies" class="form-style-6">

 <p>Biographies Books:</p>

     

        

        

        <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);





$sql = "SELECT * FROM Biographies";

$result = $connect->query($sql);

            

            if (mysqli_num_rows($result) > 0) {

   

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo " Name: ".$row["Name"]." Author: ".$row["Author"]." Price: $".$row["Price"]."<br>";

    

        

    }

} else {

    echo "0 results";

}

echo "<br>"

?>



            

    

        

        

    </div>

         <div id="Business" class="form-style-6">

 <p>Business Books:</p>

     

        

        

        <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);





$sql = "SELECT * FROM Business";

$result = $connect->query($sql);

            

            if (mysqli_num_rows($result) > 0) {

   

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo " Name: ".$row["Name"]." Author: ".$row["Author"]." Price: $".$row["Price"]."<br>";

    

        

    }

} else {

    echo "0 results";

}

echo "<br>"

?>



            

    

        <br>

        

    </div>

         <div id="Comics" class="form-style-6">

 <p>Comic Books:</p>

     

        

        

        <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);





$sql = "SELECT * FROM Comics";

$result = $connect->query($sql);

            

            if (mysqli_num_rows($result) > 0) {

   

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo " Name: ".$row["Name"]." Author: ".$row["Author"]." Price: $".$row["Price"]."<br>";

    

        

    }

} else {

    echo "0 results";

}

echo "<br>"

?>



            

    

        <br>

        

    </div>

         <div id="Literature">

 <p>Literature Books:</p>

     

        

        

        <?php

require ('db_credentials.php');



$connect = mysqli_connect($servername,$username,$password,$dbname);





$sql = "SELECT * FROM Literature";

$result = $connect->query($sql);

            

            if (mysqli_num_rows($result) > 0) {

   

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo " Name: ".$row["Name"]." Author: ".$row["Author"]." Price: $".$row["Price"]."<br>";

    

        

    }

} else {

    echo "0 results";

}

echo "<br>"

?>



            

    

        <br>

        

    </div>

         </div>

    <div id="boxes">

    

    <img src="img/pic2.jpg" alt="sq1" id="cn" class="sqr"  onclick="window.location.href='picture1.html'">

    

    <img src="img/pic3.jpg" alt="sq4" id="tl" class="sqr"  onclick="window.location.href='Comment.php'">

    

            <img src="img/pic/home.png" alt="home" id="home" class="sqr"  onclick="window.location.href='ordercustomer.php'">

    

    </div>

</body>

</html>

