<?php
session_start();
include "config.php";

if(empty($_FILES['new-image']['name'])){
    $newname=$_POST['old_image'];
}
else{
    $errors=array();
    $file_name=$_FILES['new-image']['name'];
       $file_size=$_FILES['new-image']['size'];
       $file_tmp=$_FILES['new-image']['tmp_name'];
       $file_type=$_FILES['new-image']['type'];
     //  $file_ext=end(explode('.',$file_name));
      // $extensions=array("jpeg","jpg","png");
//        if(in_array($file_ext,$extensions)===false)
//    {
//        $errors[]="this file not allowed,please choose a jpeg or jpg or png";
//    }
//    if($file_size>2097152)
//    {
//        $errors[]="file size must be 2mb or lower";
//    }
   $newname= time()."-".basename($file_name);
   $target="upload/".$newname;
   $image_name=$newname;
// if(empty($errors)==true)
// {
//     move_uploaded_file($file_tmp,$target);
// }
   if(empty($errors)==true)
   {
       move_uploaded_file($file_tmp,"upload/".$target);
   }
   else{
       print_r($errors);
       die();
   }
}
$user_id=$_SESSION["user_id"];

$sql="UPDATE register SET username='{$_POST['username']}',firstname='{$_POST['firstname']}',lastname='{$_POST['lastname']}',profile_img='{$image_name}',bio='{$_POST['bio']}'
WHERE user_id={$user_id}";
// if($_POST['old_category'] != $_POST["category"]){
//     $sql .="UPDATE category SET post= post - 1 WHERE category_id={$_POST['old_category']};";
//     $sql .="UPDATE category SET post= post + 1 WHERE category_id={$_POST['category']};";
// }

 $result=mysqli_query($conn,$sql) or die("query failed");
 if($result)
 {
    header('Location: http://localhost:8080/new-website/profile.php');
 }
?>