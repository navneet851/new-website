
           
   
<?php
include "config.php";
session_start();

if(isset( $_SESSION["username"] ))
{
    header('Location: http://localhost:8080/new-website/main.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form,body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        body{
            height: 100vh;
        }
        form{
            height: 650px;
            width: 400px;
            border: 1px solid gainsboro;
            border-radius: 10px;
            
        }
        input,button{
            height: 35px;
            width: 300px;
            border: none;
            border-radius: 5px;
            background-color: rgb(240, 240, 240);
            padding-left: 15px;
        }
        button{
            background-color: #5097e7;
            color: white;
            font-weight: bold;
            margin-top : 60px;
        }
        form a{
            color: #5097e7;
            text-decoration : none;
            font-size : 13px;
        }
    </style>
</head>
<body>
   

    <form action="user.php" method="post">
        <p>
            <img src="./logo.jpg" alt="" height="70">
        </p><br><br><br> 
        <input type="email" name="email" placeholder="E mail"><br>
        <input type="text" name="name" placeholder="Full Name"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="passwd" placeholder="Password"><br>

        <button type="submit">sign in</button>
        <a href="login.php">already have account?</a>
    </form>
    
</body>
</html>