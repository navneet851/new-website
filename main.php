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
            <div id="hover4" class="menu-bar">
                <div><img src="./images/menu.png" alt="chat"></div>
                <div class="text">More</div>
            </div>
        </div>
        <div class="menu-top">
            <div><img id="logo" src="./images/Instagram.png" alt="logo"></div>
            <!-- <div><img src="./images/menu.png" alt="menu"></div> -->
            <div><img src="./images/menu.png" alt="menu"></div>

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
            <?php
            include "config.php";

            $sql = "select * from posts ORDER BY post_id DESC";

            $result = mysqli_query($conn, $sql) or die("Query failed");



            if (mysqli_num_rows($result) > 0) {



                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="post">
                        <div class="posthead">
                            <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?gtr" alt=""
                                    height="40"></div>
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

                            <div><img src="./images/dots-three-vertical-3601841-3003583.png" alt="" height="22"></div>
                        </div>
                        <div id="dbl-ani1" class="post-anim">
                            <img id="ani1" src="./images/whiteh.png" alt="">
                            <img class="pic" src="post-images/<?php echo $row["post_img"]; ?>" alt="">
                        </div>
                        <div class="postbottom">
                            <div class="bottom_menu">
                                <div><img id="heart1" src="./images/heart.png" alt="" height="24"></div>
                                <div><img src="./images/bubble-chat.png" alt="" height="25"></div>
                                <!-- <div><img src="./images/send.png" alt="" height="22"></div> -->
                                <div><img src="./images/bookmark-white.png" alt="" height="21"></div>
                            </div>
                            <div class="bottom-menu-margin" id="number1" style="font-size: 15px; font-weight: 700;">2,99,792
                                likes</div>
                            <div class="bottom-menu-margin" style="font-size: 15px;">
                                <pr style="margin-right: 5px; font-weight: 700;">
                                    <?php echo $_SESSION["username"]; ?>
                                </pr>
                                <?php echo $row["caption"]; ?>
                            </div>
                            <div class="bottom-menu-margin" style="font-size: 15px; opacity: 0.7; cursor: pointer;">View all
                                1.1M comments</div>
                            <div class="bottom-menu-margin" style="font-size: 15px; opacity: 0.7; cursor: pointer;">Add a
                                comment</div>
                        </div>
                    </div>
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



            <div class="posthead profile-main">
                <div class="profile-icon"><img src="./images/3~2.jpg" alt="" height="55"></div>
                <div>
                    <li style="font-size: 15px;">
                        <?php echo $_SESSION["username"]; ?>
                    </li>
                    <li class="profile-loc">
                        <?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?>
                    </li>
                </div>
                <div>
                    <form action="Logout.php" method="post">
                        <button id="logout" type="submit" value="Logout">Logout</button>
                    </form>
                </div>
            </div>
            <div class="posthead">
                <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?women/australian" alt=""
                        height="40"></div>
                <div>
                    <li style="font-size: 15px;">nolechick17</li>
                    <li class="profile-loc">Followed by eden_cat</li>
                </div>

                <div><a id="follow1" href="#">Follow</a></div>
            </div>
            <div class="posthead">
                <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?men/china" alt=""
                        height="40"></div>
                <div>
                    <li style="font-size: 15px;">salondeban_ebisu</li>
                    <li class="profile-loc">Followed by 海外か来</li>
                </div>

                <div><a id="follow2" href="#">Follow</a></div>
            </div>
            <div class="posthead">
                <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?men/american" alt=""
                        height="40"></div>
                <div>
                    <li style="font-size: 15px;">freephaller</li>
                    <li class="profile-loc">New to Instagram</li>
                </div>

                <div><a id="follow3" href="#">Follow</a></div>
            </div>
            <div class="posthead">
                <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?city/streets" alt=""
                        height="40"></div>
                <div>
                    <li style="font-size: 15px;">lukeselby</li>
                    <li class="profile-loc">Followed by Q_Lines</li>
                </div>

                <div><a id="follow4" href="#">Follow</a></div>
            </div>
            <div class="posthead">
                <div class="profile-icon"><img src="https://source.unsplash.com/random/360x360/?women/american" alt=""
                        height="40"></div>
                <div>
                    <li style="font-size: 15px;">rachael_cons</li>
                    <li class="profile-loc">New to Instagram</li>
                </div>

                <div><a id="follow5" href="#">Follow</a></div>
            </div>
        </div>

    </div>


    <script src="script.js"></script>
</body>

</html>