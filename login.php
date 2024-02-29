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
            margin: 60px;
        }
    </style>
</head>
<body>
    <form>
        <p>
            <img src="./logo.jpg" alt="" height="70">
        </p><br><br><br> 
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="passwd" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="main.php">already have account?</a>
    </form>
</body>
</html>