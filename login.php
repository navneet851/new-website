

<?php
include "config.php";
session_start();

if(isset( $_SESSION["username"] ))
{
    header('Location: http://localhost:8080/new-website/main.php');
}
if(isset($_GET['id'])=="356a192b7913b04c54574d18c28d46e6395428ab")
{

    echo '<script>alert("Successfully Registered")</script>';

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
            margin-top: 60px;
            margin: 10px;
        }
        form a{
            color: #5097e7;
            text-decoration : none;
            font-size : 13px;
        }
        
        @media screen and (max-width:500px) {
            form{
                border: none;
            }
        }
    </style>
</head>
<body>
    <form   action="enter-login.php" method="post">
        <p>
        <img src="images/blogo.png" alt="" height="55">
        </p><br><br><br> 
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="passwd" placeholder="Password" required><br>

        <button type="submit" value="login">Login</button>
        <a href="index.php">Sign up</a>
    </form>

    
 
    


</body>
</html>