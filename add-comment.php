<?php
include "config.php";






// session_start();
//  $Uid=$_SESSION["username"];
// $user_id=$_SESSION["user_id"];

$post_id=mysqli_real_escape_string($conn,$_POST['pid']);
$username=mysqli_real_escape_string($conn,$_POST['uname']);
$user_comment=mysqli_real_escape_string($conn,$_POST['user-comment']);


$sql="INSERT INTO user_comment(username,post_id,user_comment)
VALUES ('{$username}','{$post_id}','{$user_comment}')";

if(mysqli_multi_query($conn,$sql)){

    header('Location: http://localhost:8080/new-website/main.php');
}
else{
    echo  "query failed";
}






?>