<!DOCTYPE html>

<html>
<head>
	<title>Online Book Ordering System!</title>
    <link href="https://fonts.googleapis.com/css?family=Macondo+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	<link href="app.css" rel="stylesheet" type="text/css">
    
    
    
        
        <style>
        
        body {
        background-image: url("img/First.jpg");
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
            h2{
                font-family: 'Macondo Swash Caps', cursive;
                font-size:20px;
            }  
            
        </style>
</head>
<body>
    <div id="loginWidget" class="form-style-6">
        <h1>Online Book Ordering System!</h1>
        <h2>Login as an admin!</h2>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username" >Admin ID:</label>
                <input type="text" id="username" name="username" placeholder="example: admin" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password" >Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all" placeholder="example: pass">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>
        <p><a href='ordercustomer.php'>If you are a Customer, Click here.</a></p>
        
    </div>
    
</body>
</html>