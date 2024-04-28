<?php
include "config.php";

if (isset($_GET['user_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = "SELECT * FROM register WHERE user_id = {$user_id}";
    $result = mysqli_query($conn, $sql) or die("Query failed");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Output the user's profile details
        echo "Username: " . $row['username'] . "<br>";
        echo "Name: " . ucfirst($row['firstname']) . " " . ucfirst($row['lastname']);
    }
}
?>