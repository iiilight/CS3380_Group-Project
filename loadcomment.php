
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
    <style>
        
        body {
        background-image: url("img/pic/commentbg1.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size:cover;
        }
        #comment{
            text-align: center;
            background-color: white;
            color:black;
            font-family: 'Quattrocento', serif;
            width: 600px;
            height: 200px;
            font-size: 30px;
            position: absolute;
            top:200px;
            left:450px;
            border-radius: 10px;
        } 
        #head{
            position: absolute;
            top:100px;
            left:450px;
            color:aliceblue;
            font-family: 'Quattrocento', serif;
            
        }
        #logout{
            position: absolute;
            top:400px;
            left:700px;
            color:aliceblue;
        }
        #homepage{
            position: absolute;
            top:410px;
            left:700px;
            text-align: center;
            
        }
        
    </style>
    </head>
<body>
    <h1 id="head">Your comments are submitted as below!</h1>
<div id="comment">
    
        
 You as (<?php echo $_POST["usrname"]; ?>) leaves a message:

<br>
    
<?php echo $_POST["comment"]; ?>
      
    </div>
    <div id="homepage">
     <a href='ordercustomer.php'><button>Home Page</button></a>
        </div>
    
<?php
$my_file = 'file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = $_POST["usrname"].$_POST["comment"];
fwrite($handle, $data);
?>
</body>
</html>