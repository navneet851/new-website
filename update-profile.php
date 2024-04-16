<?php
session_start();
include "config.php"; // Include your database connection script


$userid = $_SESSION["user_id"];
$username = mysqli_real_escape_string($conn, $_POST['username']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$bio = mysqli_real_escape_string($conn, $_POST['bio']);

if (isset($_FILES['fileToUpload'])) {

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];


    $target = "images/" . $newname;
    ;
    // $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
        echo "File uploaded successfully!";  

    } else {
        echo "Sorry, file not uploaded, please try again!";
    }

}



$sql = "UPDATE register SET username='{$username}', firstname='{$firstname}', lastname='{$lastname}', bio='{$bio}', profile_img='{$file_name}' WHERE user_id={$userid}";

if (mysqli_query($conn, $sql)) {
    header('Location: http://localhost:8080/new-website/profile.php'); // Redirect back to the profile page
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>