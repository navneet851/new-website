<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
    header('Location: http://localhost:8080/new-website/login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="search.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&display=swap" rel="stylesheet">

    <style>
        #search-form {
            display: flex;
            
        }
        #search-button{

        }

    </style>
</head>

<body>

    <div class="frame">
        <div class="menu menu0">
            <div><img id="logo" src="./images/Instagram.png" alt="logo"></div>


            <a class="postman" href="index.php">
                <div id="hover1" class="menu-bar home">
                    <div><img src="./images/home.jpg" alt="home"></div>
                    <div class="text">Home</div>
                </div>
            </a>
            <div id="hover2" class="menu-bar find">
                <div><img src="./images/search.png" alt="search"></div>
                <div class="text">Search</div>
            </div>
            <!-- <div id="hover3" class="menu-bar">
                <div><img src="./images/heart.png" alt="notification"></div>
                <div class="text">Notifications</div>
            </div>
            <div id="hover4" class="menu-bar">
                <div><img src="./images/messenger.png" alt="chat"></div>
                <div class="text">Messages</div>
            </div>
            <div id="hover5" class="menu-bar">
                <div><img src="./images/instagram-reels.png" alt="reels"></div>
                <div class="text">Reels</div>
            </div> -->
            <a class="postman" href="create.php">
                <div id="hover6" class="menu-bar">
                    <div><img src="./images/story.png" alt="add"></div>
                    <div class="text">Create</div>
                </div>
            </a>
            <?php
            include "config.php";
            $session_sql = "select * from register where user_id={$_SESSION['user_id']}";
            $session_result = mysqli_query($conn, $session_sql) or die("Query failed");
            if (mysqli_num_rows($session_result) > 0) {
                $session_row = mysqli_fetch_assoc($session_result);
            }
            ?>
            <a class="postman" href="profile.php">
                <div id="hover7" class="menu-bar">
                    <div><img id="profile" src="post-images/<?php echo $session_row['profile_img']; ?>" alt="profile">
                    </div>
                    <div class="text">Profile</div>
                </div>
            </a>
            <!-- <div id="hover4" class="menu-bar">
                <div><img src="./images/menu.png" alt="menu"></div>
                <div class="text">More</div>
            </div> -->
        </div>

        <div class="search">
            <!-- HTML form for username search -->
            <form id="search-form" method="post">
                <input type="text" name="username" placeholder="Search username">
                <button id="search-button" type="submit" value="Search"><img  src="./images/search.png" alt="search" height="25"></button>
            </form>

            <div class="profiles">
                <div style="padding: 10px; border-top: 1px solid lightgray; font-size: 15px; color: gray;">search result
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Get the submitted username
                    $username = $_POST['username'];

                    // Connect to the database
                    include "config.php";

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }


                    // Create a prepared statement
                    $stmt = $conn->prepare("SELECT * FROM register WHERE LOWER(username) LIKE LOWER(?) OR LOWER(firstname) LIKE LOWER(?) OR LOWER(lastname) LIKE LOWER(?)");


                    // Bind parameters
                    $searchTerm = "%" . $username . "%";
                    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);


                    // Execute the statement
                    $stmt->execute();

                    // Get the result
                    $result = $stmt->get_result();

                    // Start the profiles div
                

                    // Fetch all rows and display them
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <div class="posthead suggestions">
                            <div class="profile-icon"><img src="post-images/<?php echo $row['profile_img']; ?>" alt=""
                                    height="40" width="40"></div>
                            <div>
                                <li style="font-size: 15px;"><?php echo $row["username"]; ?></li>
                                <li class="profile-loc">
                                    <?php echo ucfirst($row["firstname"]) . " " . ucfirst($row["lastname"]); ?>
                                </li>
                            </div>
                        </div>


                    <?php }

                    // End the profiles div
                

                    // Close the statement and the connection
                    $stmt->close();
                    $conn->close();
                }
                ?>

            </div>
            <div class="profiles">
                <div style="padding: 10px; border-top: 1px solid lightgray; font-size: 15px; color: gray;">suggestions
                </div>
                <?php
                include "config.php";
                $users_sql = "select * from register ORDER BY user_id DESC";
                // $result = mysqli_query($conn,$sql) or die("Query failed");
                $users_result = mysqli_query($conn, $users_sql) or die('Invalid query: ' . mysqli_error($conn));

                if (mysqli_num_rows($users_result) > 0) {
                    while ($users_row = mysqli_fetch_assoc($users_result)) {
                        ?>

                        <a href="account.php?user_id=<?php echo $users_row['user_id']; ?>">
                            <div class="posthead suggestions">
                                <div class="profile-icon"><img src="post-images/<?php echo $users_row['profile_img']; ?>" alt=""
                                        height="40" width="40"></div>
                                <div>
                                    <li style="font-size: 15px;"><?php echo $users_row["username"]; ?></li>
                                    <li class="profile-loc">
                                        <?php echo ucfirst($users_row["firstname"]) . " " . ucfirst($users_row["lastname"]); ?>
                                    </li>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- <div class="posts">
                <img src="https://source.unsplash.com/random/360x360/?cars" alt="">
                <img src="https://source.unsplash.com/random/360x360/?animals" alt="">
                <img src="https://source.unsplash.com/random/360x360/?quotes" alt="">
                <img src="https://source.unsplash.com/random/360x360/?sky" alt="">
                <img src="https://source.unsplash.com/random/360x360/?space" alt="">
                <img src="https://source.unsplash.com/random/360x360/?planets" alt="">
                <img src="https://source.unsplash.com/random/360x360/?nature" alt="">
                <img src="https://source.unsplash.com/random/360x360/?mountains" alt="">
                <img src="https://source.unsplash.com/random/360x360/?citys" alt="">
                <img src="https://source.unsplash.com/random/360x360/?skyscrapers" alt="">
                <img src="https://source.unsplash.com/random/360x360/?coding" alt="">
                <img src="https://source.unsplash.com/random/360x360/?robot" alt="">
                <img src="https://source.unsplash.com/random/360x360/?spacex" alt="">
                <img src="https://source.unsplash.com/random/360x360/?internet" alt="">
                <img src="https://source.unsplash.com/random/360x360/?men" alt="">
                <img src="https://source.unsplash.com/random/360x360/?boy" alt="">
                <img src="https://source.unsplash.com/random/360x360/?puppies" alt="">
                <img src="https://source.unsplash.com/random/360x360/?women" alt="">
                <img src="https://source.unsplash.com/random/360x360/?girl" alt="">
                <img src="https://source.unsplash.com/random/360x360/?college" alt="">
                <img src="https://source.unsplash.com/random/360x360/?books" alt="">
            </div> -->
        </div>
        <div class="menu-bottom">
            <a class="postman" href="main.php">
                <div id="hover1" class="menu-bar home">
                    <div><img src="./images/home.jpg" alt="home"></div>
                </div>
            </a>
            <div id="hover2" class="menu-bar find">
                <div><img src="./images/search.png" alt="search"></div>
            </div>

            <a class="postman" href="create.php">
                <div id="hover4" class="menu-bar">
                    <div><img src="./images/story.png" alt="add"></div>
                </div>
            </a>
            <!-- <div id="hover6" class="menu-bar">
                <div><img src="./images/instagram-reels.png" alt="reels"></div>
            </div> -->
            <a class="postman" href="profile.php">
                <div id="hover7" class="menu-bar">
                    <div><img id="profile" src="post-images/<?php echo $session_row['profile_img']; ?>" alt="profile">
                    </div>
                </div>
            </a>
        </div>
        <div class="menu menu2">
            <?php
            include "config.php";
            $session_sql = "select * from register where user_id={$_SESSION['user_id']}";
            $session_result = mysqli_query($conn, $session_sql) or die("Query failed");
            if (mysqli_num_rows($session_result) > 0) {
                $session_row = mysqli_fetch_assoc($session_result);
            }
            ?>

            <div class="posthead profile-main">
                <div class="profile-icon"><img src="post-images/<?php echo $session_row['profile_img']; ?>" alt=""
                        height="55"></div>
                <div>
                    <li style="font-size: 15px;">
                        <?php echo $session_row["username"]; ?>
                    </li>
                    <li class="profile-loc">
                        <?php echo ucfirst($session_row["firstname"]) . " " . ucfirst($session_row["lastname"]); ?>
                    </li>
                </div>
                <div>
                    <form action="Logout.php" method="post">
                        <button id="logout" type="submit" value="Logout">Logout</button>
                    </form>
                </div>
            </div>
            <div>Discover</div>
            <div class="posts">
                <img src="https://source.unsplash.com/random/360x360/?cars" alt="">
                <img src="https://source.unsplash.com/random/360x360/?animals" alt="">
                <img src="https://source.unsplash.com/random/360x360/?quotes" alt="">
                <img src="https://source.unsplash.com/random/360x360/?sky" alt="">
                <img src="https://source.unsplash.com/random/360x360/?space" alt="">
                <img src="https://source.unsplash.com/random/360x360/?planets" alt="">
                <img src="https://source.unsplash.com/random/360x360/?nature" alt="">
                <img src="https://source.unsplash.com/random/360x360/?mountains" alt="">
                <img src="https://source.unsplash.com/random/360x360/?citys" alt="">
                <img src="https://source.unsplash.com/random/360x360/?skyscrapers" alt="">
                <img src="https://source.unsplash.com/random/360x360/?coding" alt="">
                <img src="https://source.unsplash.com/random/360x360/?robot" alt="">
                <img src="https://source.unsplash.com/random/360x360/?spacex" alt="">
                <img src="https://source.unsplash.com/random/360x360/?internet" alt="">
                <img src="https://source.unsplash.com/random/360x360/?men" alt="">
                <img src="https://source.unsplash.com/random/360x360/?boy" alt="">
                <img src="https://source.unsplash.com/random/360x360/?puppies" alt="">
                <img src="https://source.unsplash.com/random/360x360/?women" alt="">
                <img src="https://source.unsplash.com/random/360x360/?girl" alt="">
                <img src="https://source.unsplash.com/random/360x360/?college" alt="">
                <img src="https://source.unsplash.com/random/360x360/?books" alt="">
            </div>



        </div>

    </div>
    <script>
        let follow1 = document.getElementById('follow1')
        follow1.addEventListener("click", () => {
            follow1.innerHTML = "Followed"
            follow1.style.backgroundColor = "rgb(247, 244, 247)"
            follow1.style.border = "1px solid rgb(171, 170, 170)"
            follow1.style.color = "black"
        })
        let follow2 = document.getElementById('follow2')
        follow2.addEventListener("click", () => {
            follow2.innerHTML = "Followed"
            follow2.style.backgroundColor = "rgb(247, 244, 247)"
            follow2.style.border = "1px solid rgb(171, 170, 170)"
            follow2.style.color = "black"
        })
        let follow3 = document.getElementById('follow3')
        follow3.addEventListener("click", () => {
            follow3.innerHTML = "Followed"
            follow3.style.backgroundColor = "rgb(247, 244, 247)"
            follow3.style.border = "1px solid rgb(171, 170, 170)"
            follow3.style.color = "black"
        })
        let follow4 = document.getElementById('follow4')
        follow4.addEventListener("click", () => {
            follow4.innerHTML = "Followed"
            follow4.style.backgroundColor = "rgb(247, 244, 247)"
            follow4.style.border = "1px solid rgb(171, 170, 170)"
            follow4.style.color = "black"
        })
        let follow5 = document.getElementById('follow5')
        follow5.addEventListener("click", () => {
            follow5.innerHTML = "Followed"
            follow5.style.backgroundColor = "rgb(247, 244, 247)"
            follow5.style.border = "1px solid rgb(171, 170, 170)"
            follow5.style.color = "black"
        })
    </script>
</body>

</html>