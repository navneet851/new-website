<?php
   include "config.php";
  $username=mysqli_real_escape_string($conn,$_POST['username']);
 
  $password=mysqli_real_escape_string($conn,sha1($_POST['passwd']));

  $sql="SELECT username,user_id,firstname,lastname,password1
  FROM register Where username='{$username}' and password1='{$password}'";
  $result=mysqli_query($conn,$sql) or die("query failed:login");
 

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{
session_start();
 $_SESSION["username"] ="{$row['username']}";
$_SESSION["user_id"] ="{$row['user_id']}";
$_SESSION["firstname"] ="{$row['firstname']}";
$_SESSION["lastname"] ="{$row['lastname']}";

}

header('Location: http://localhost:8080/new-website/main.php');

}
else
{
  echo "Username and password are incorrect";
}



?>