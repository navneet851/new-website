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
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&display=swap" rel="stylesheet">
</head>

<body>

    <div class="frame">
        <div class="menu menu0">
            <div id="logo-div"><img id="logo" src="./images/Instagram.png" alt="logo"></div>


            <div id="hover1" class="menu-bar home">
                <div><img src="./images/home.jpg" alt="home"></div>
                <div class="text">Home</div>
            </div>
            <a class="postman" href="search.php">
                <div id="hover2" class="menu-bar find">
                    <div><img src="./images/search.png" alt="search"></div>
                    <div class="text">Search</div>
                </div>
            </a>
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
            <a class="postman" href="profile.php">
                <div id="hover7" class="menu-bar">
                    <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
                    <div class="text">Profile</div>
                </div>
            </a>
            <form action="Logout.php" method="post">
                <button style="width: 100%; color: black;" type="submit" value="Logout">
                    <div id="hover4" class="menu-bar">
                        <div><img src="./images/logout.png" alt="logout"></div>
                        <div class="text">Logout</div>
                    </div>
                </button>
            </form>

        </div>
        <div class="menu-top">
            <div><img id="logo" src="./images/Instagram.png" alt="logo"></div>
            <!-- <div><img src="./images/menu.png" alt="menu"></div> -->
            <div>
                <form action="Logout.php" method="post">
                    <button type="submit" value="Logout"><img src="./images/logout.png" alt="menu"></button>
                </form>

            </div>

        </div>
        <div class="main menu menu1">
            <div class="story-outer">

                <div class="story">
                    <div class="id" id="svg"><img src="./images/3~2.jpg" alt="">
                        <svg id="sv" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>your story</p>
                    </div>
                    <div class="id" id="svg2"><img src="https://source.unsplash.com/random/360x360/?coding" alt="">
                        <svg id="sv2" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>code_hub</p>
                    </div>
                    <div class="id" id="svg3"><img src="https://source.unsplash.com/random/360x360/?women" alt="">
                        <svg id="sv3" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>stacy grand</p>
                    </div>
                    <div class="id" id="svg4"><img src="https://source.unsplash.com/random/360x360/?men" alt="">
                        <svg id="sv4" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>otus</p>
                    </div>
                    <div class="id" id="svg5"><img src="https://source.unsplash.com/random/360x360/?nasa" alt="">
                        <svg id="sv5" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>nasa</p>
                    </div>
                    <div class="id" id="svg6"><img src="https://source.unsplash.com/random/360x360/?gtr" alt="">
                        <svg id="sv6" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>Gtr</p>
                    </div>
                    <div class="id" id="svg7"><img src="https://source.unsplash.com/random/360x360/?quotes" alt="">
                        <svg id="sv7" height="70" width="70">
                            <circle cx="35" cy="35" r="32" fill="none">
                        </svg>
                        <p>Q_Lines</p>
                    </div>
                </div>
            </div>




            <!-- post loop starting -->
            <?php
            include "config.php";
            $sql = "select * from posts ORDER BY post_id DESC";
            // $result = mysqli_query($conn,$sql) or die("Query failed");
            $result = mysqli_query($conn, $sql) or die('Invalid query: ' . mysqli_error($conn));

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                    <div class="post">

                        <div class="posthead">
                            <?php
                            include "config.php";
                            $profile_sql = "select profile_img from register where user_id={$row["user_id"]}";
                            $profile_result = mysqli_query($conn, $profile_sql) or die("Query failed");
                            if (mysqli_num_rows($profile_result) > 0) {
                                while($profile_row = mysqli_fetch_assoc($profile_result)){
                                    ?>
                                    <div class="profile-icon"><img src="post-images/<?php echo $profile_row['profile_img']; ?>" alt=""
                                            height="40"></div>
                                            <?php
                                }
                                mysqli_free_result($profile_result);
                            } else {
                                echo '<h4>profile</h4>' ;
                            }
                            ?>
                            


                            <div>
                                <li style="font-size: 15px; display: flex; align-items: center">
                                    <pr style="margin-right: 3px; font-weight: 600;">
                                        <?php echo $row["uid1"]; ?>
                                    </pr><img src="./images/pinpng.com-instagram-symbol-png-102490.png" height="14" alt="">
                                </li>
                                <li class="profile-loc">
                                    <?php echo $row["location1"]; ?>
                                </li>
                            </div>

                            <div><img id="three-dot-opener" src="./images/dots-three-vertical-3601841-3003583.png" alt=""
                                    height="22"></div>
                            <ul id="three-dot-options">
                                <li>Remove Post</li>
                                <li>gfgf</li>
                            </ul>
                        </div>
                        <div id="dbl-ani1" class="post-anim">
                            <img id="ani1" src="./images/whiteh.png" alt="">
                            <img class="pic" loading="lazy" src="post-images/<?php echo $row["post_img"]; ?>" alt="">
                        </div>
                        <div class="postbottom">
                            <div class="bottom_menu">
                                <div><img id="heart1" src="./images/heart.png" alt="" height="24"></div>
                                <div id="comment-button-<?php echo $row['post_id']; ?>" class="open-comments"><img
                                        id="open-comments" src="./images/bubble-chat.png" alt="" height="25"></div>
                                <!-- <div><img src="./images/send.png" alt="" height="22"></div> -->
                                <div><img src="./images/bookmark-white.png" alt="" height="21"></div>
                            </div>

                            <?php
                            include "config.php";
                            $likes_sql = "select likes
                                    from posts 
                                    where  post_id={$row["post_id"]} ";
                            $likes_count_result = mysqli_query($conn, $likes_sql) or die("Query failed");

                            if (mysqli_num_rows($likes_count_result) > 0) {
                                $likes_row = mysqli_fetch_assoc($likes_count_result);
                                $likes = $likes_row['likes'];
                            } else {
                                $likes = 0;
                            }
                            ?>
                            <div class="bottom-menu-margin" id="number1" style="font-size: 15px; font-weight: 700;">
                                <?php echo $likes ?> likes
                            </div>
                            <div class="bottom-menu-margin" style="font-size: 15px;">
                                <pr style="margin-right: 5px; font-weight: 700;">
                                    <?php echo $_SESSION["username"]; ?>
                                </pr>
                                <?php echo $row["caption"]; ?>
                            </div>

                            <?php
                            include "config.php";
                            $count_sql = "select *
                                    from user_comment 
                                    where  post_id={$row["post_id"]} Order by comment_id DESC";
                            $comment_count_result = mysqli_query($conn, $count_sql) or die("Query failed");

                            if (mysqli_num_rows($comment_count_result) > 0) {
                                $i = mysqli_num_rows($comment_count_result);
                            } else {
                                $i = 0;
                            }
                            ?>

                            <div class="bottom-menu-margin" style="font-size: 15px; opacity: 0.7;"><?php echo $i ?> comments
                            </div>

                            <form action="add-comment.php" method="post">
                                <input type="hidden" placeholder="Add a comment" name="pid"
                                    value="<?php echo $row["post_id"]; ?>">
                                <input type="hidden" placeholder="Add a comment" name="uname"
                                    value="<?php echo $_SESSION["username"]; ?>">

                                <div class="bottom-menu-margin"
                                    style="font-size: 15px; opacity: 0.7; margin-right: 8px; display: flex; justify-content: space-between;">
                                    <input type="text" placeholder="Add a comment" name="user-comment"><button
                                        type="submit">Add</button>

                                </div>
                            </form>


                        </div>

                        <!-- post comments count -->



                        <!-- post comments -->
                        <div class="post-comments" id="comment-block-<?php echo $row['post_id']; ?>">


                            <?php
                            include "config.php";
                            $comment_sql = "select *
                                             from user_comment 
                                            where  post_id={$row["post_id"]} Order by comment_id DESC";
                            $comment_result = mysqli_query($conn, $comment_sql) or die("Query failed");
                            if (mysqli_num_rows($comment_result) > 0) {

                                while ($comment_row = mysqli_fetch_assoc($comment_result)) {
                                    ?>



                                    <ul class="posthead">
                                        <li class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?gtr" alt=""
                                                height="25"></li>
                                        <li>
                                            <div style="font-size: 15px;  font-weight: bold;">
                                                <?php echo $comment_row["username"]; ?>
                                            </div>
                                        </li>
                                        <li style="font-size: 14px; margin-left: 5px; "><?php echo $comment_row["user_comment"]; ?></li>
                                    </ul>


                                    <?php
                                }
                            } else {
                                echo "<li>No comments found.</li>";
                            }
                            ?>
                        </div>

                        <script>
                            document.getElementById('comment-button-<?php echo $row['post_id']; ?>').addEventListener('click', function () {
                                var commentBlock = document.getElementById('comment-block-<?php echo $row['post_id']; ?>');
                                commentBlock.style.display = commentBlock.style.display === 'none' ? 'block' : 'none';
                            });
                        </script>

                    </div>


                    <!-- post loop end -->
                    <?php
                }
            }
            ?>


        </div>

        <div class="menu-bottom">
            <div id="hover1" class="menu-bar home">
                <div><img src="./images/home.jpg" alt="home"></div>
            </div>
            <a class="postman" href="search.php">
                <div id="hover2" class="menu-bar find">
                    <div><img src="./images/search.png" alt="search"></div>
                </div>
            </a>
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
                    <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
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
                                    height="40"></div>
                            <div>
                                <li style="font-size: 15px;"><?php echo $users_row["username"]; ?></li>
                                <li class="profile-loc">
                                    <?php echo ucfirst($users_row["firstname"]) . " " . ucfirst($users_row["lastname"]); ?></li>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            }
            ?>



        </div>

    </div>


    <script src="script.js"></script>
</body>

</html>