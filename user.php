<?php
    include "config.php";

  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,sha1($_POST['passwd']));

  $sql="SELECT username,password1
    FROM register Where username='{$username}' and password1='{$password}'";
  $result=mysqli_query($conn,$sql) or die("query failed:");
if(mysqli_num_rows($result)>0)
{
echo "Username and password already exist";
}
else{
$sql1 = "INSERT INTO register (Fullname,username,Email,password1)
VALUES ('{$name}', '{$username}', '{$email}','{$password}')";
    // $result1= or die("query failed: insert");

if(mysqli_query($conn,$sql1))
{
echo '<script>alert("Username and password has been created")</script>';

header('Location: http://localhost/new-website/login.php');
}
else{
  echo "Query failed";
}

}
mysqli_close($conn);
    
    

    
    ?>