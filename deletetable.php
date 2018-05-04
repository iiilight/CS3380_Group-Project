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
	<title>Delete table!</title>
    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	<link href="app.css" rel="stylesheet" type="text/css">
    
    
    
        
        <style>
        
        body {
        background-image: url("img/delete.jpg");
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
      
        <h2>Delete a Category!</h2>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        
        <form action="droptable.php" method="POST">
            
           
                <label for="name" >Category name:</label>
                <input type="text"  name="Book" class="ui-widget-content ui-corner-all" value="">
            
            
            
                <input type="submit" value="Confirm">
           
        </form>
        
        
    </div>
    
</body>
</html>
