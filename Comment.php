
<!DOCTYPE html>

<html>
<head>
    <style>
        
        body {
        background-image: url("img/commentbg.jpg");
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
        
    </style>
    
	<title>Comment Section!</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <script>
    function empty() {
    var x;
    x = document.getElementById("guestname").value;
    if (x == "") {
        alert("Enter a Valid Name!");
        return false;
    }
        var y;
        y=document.getElementById("inputcomment").value;
        if (y == "") {
        alert("Enter Valid Comments!");
        return false;
    }
        ;
}
    </script>
    </head>
    
<body>
    <div class="ui-widget pageWidget">
        
        <div class="form-style-6">
            <form action="loadcomment.php" method="post" id="usrform">
  Your Name: <input type="text" name="usrname" id="guestname">
 

<br>
                <br>
                <br>
            <div id="resizable">
<textarea rows="25" cols="60" name="comment" form="usrform" placeholder="Post your comments here..." id="inputcomment">
</textarea>
                </div>
             <input type="submit" value="submit" onclick="return empty()">
                
                </form>
            <br>
            <span><a href="ordercustomer.php"><button>Home</button></a></span>
           
            

            
        </div>
    </div>
</body>
</html>
