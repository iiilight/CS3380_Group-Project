
<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <style>
        
        body {
        background-image: url("img/customer.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size:cover;
        }
        .sqr{
          
            position: relative;
            width: 150px;
            height: 150px;
            transition: all 0.5s ease;
                filter: grayscale(100%);
            border-radius: 50%;
        }
        
        
        #it{
            top:500px;
            left: 450px;
        }
        #jp{
            top:450px;
            left: 550px;
        }
        #tl{
            top:500px;
            left: 650px;
        }
       
        
        .sqr:hover{

                width: 170px;
                height: 170px;
                filter: grayscale(0%);
            }
        
        
        h1{
            font-size: 80px;
            font-family: 'Amatic SC', cursive;
            color: white;
            }
        #words{
            text-align: right;
        }
        #logindiv{
            position: fixed;
            right: 0;
            bottom: 0;
            
        }
        #login{
            width:70px;
            height: 70px;
            filter: grayscale(100%);
        }
        #login:hover{
            filter: grayscale(0%);
        }
        
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<title>Customer Order Menu</title>
    </head>
    
<body>
<div id="boxes">
    
    <img src="img/pic1.jpg" alt="sq2" id="it" class="sqr" onmouseover="showwords('Menu')" onclick="window.location.href='menu.php'">
    <img src="img/pic2.jpg" alt="sq3" id="jp" class="sqr" onmouseover="showwords('Pictures')" onclick="window.location.href='picture1.html'">
    <img src="img/pic3.jpg" alt="sq4" id="tl" class="sqr" onmouseover="showwords('Comment')" onclick="window.location.href='Comment.php'">
    
    </div>
    <div id="words">
    
    </div>
    <div id="logindiv"><img src="img/Login-icon.png" alt="login" id="login"  onclick="window.location.href='login.php'"></div>
    
    <script>
    function showwords(x){
        if(x=="Menu"){
            $( "#words" ).empty();
            var wd=document.createElement('h1');
    wd.appendChild(document.createTextNode("Menu"))
    document.getElementById("words"). appendChild(wd);
        }
     if(x=="Pictures"){
             $( "#words" ).empty();
            var wd=document.createElement('h1');
    wd.appendChild(document.createTextNode("Picture"))
    document.getElementById("words"). appendChild(wd);
        }
     if(x=="Comment"){
            $( "#words" ).empty();
            var wd=document.createElement('h1');
    wd.appendChild(document.createTextNode("Comment"))
    document.getElementById("words"). appendChild(wd);
        }
    }
    
    </script>

</body>
</html>
