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
        .frame {
            grid-template-columns: 1fr 4.5fr;
        }

        .menu-top {
            display: none;
        }

        #hover2 {
            background-color: transparent;
            font-weight: normal;
            border-radius: 0;
        }

        #hover7 {
            background-color: rgb(247, 244, 247);
            font-weight: 700;
            border-radius: 0px 12px 12px 0px;
        }

        .profile {
            width: 600px;
            margin-top: 60px;
        }
        
        .profile-container,
        ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .profile-container img {
            height: 140px;
            border-radius: 50%;
        }

        .profile-credits {
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        ul {
            justify-content: space-between;
            width: 300px;
        }

        ul li {
            list-style: none;
        }

        .posts {
            width: 700px;
            height: 100%;
            position: relative;
            margin-top: 10px;
            padding-top: 40px;
            background-color: rgb(241, 244, 255);
            border-radius: 10px;
        }

        .posts img {
            height: 235px;
        }

        .tag {
            position: absolute;
            width: 100%;
            top: 6px;
            text-align: center;
            font-weight: bold;
            background-color: rgb(241, 244, 255);
        }

        @media only screen and (max-width:950px) {
            .posts {
                width: 600px;
            }
            .posts img{
                width: 100%;
                height: auto;
            }

        }
        @media only screen and (max-width:800px) and (min-width:500px) {

            .posts,.profile{
                width: 500px;
            }
            .menu2,
            .text {
                display: none;
            }

            .menu0 {
                align-items: center;
            }

            #logo {
                content: url("./images/instagram-short.png");
                height: 32px;
            }

            .frame {
                grid-template-columns: auto auto;
            }
        }
        @media only screen and (max-width:630px) {
            .menu{
                border: none;
            }
        }

        @media screen and (max-width:500px) {
            .frame {
                grid-template-columns: auto;
            }
            .posts,.profile{
                width: 100%;
            }
            #logo {
                margin: 0px 10px;
            }

            .menu-top {
                position: fixed;
                top: 0;
                background: white;
                display: grid;
                align-items: center;
                text-align: left;
                grid-template-columns: 2fr 0.3fr 0.3fr;
                width: 100vw;
                z-index: 100;
            }

            .menu-top img {
                height: 23px;
                margin: 10px 0px;
            }

            .profile {
                width: 100%;
            }

            .profile-container img {
                height: 90px;
            }
            .posts{
                margin-top: 70px;
                padding-bottom: 60px;
            }

            ul {
                width: 250px;
                margin: 6px 0px;
            }

            ul li {
                text-align: center;
            }

            #hover7 {
                border-radius: 20px;
            }
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
            <a class="postman" href="search.php">
                <div id="hover2" class="menu-bar find">
                    <div><img src="./images/search.png" alt="search"></div>
                    <div class="text">Search</div>
                </div>
            </a>
            <div id="hover3" class="menu-bar">
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
            </div>
            <a class="postman" href="create.php">
                <div id="hover6" class="menu-bar">
                    <div><img src="./images/story.png" alt="add"></div>
                    <div class="text">Create</div>
                </div>
            </a>
            <div id="hover7" class="menu-bar">
                <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
                <div class="text">Profile</div>
            </div>
            <div class="menu-bar bottom">
                <div><img src="./images/menu.png" alt="menu"></div>
                <div class="text">More</div>
            </div>
        </div>

        <div class="search">
            <div class="profile">
                <div class="profile-container">
                    <img src="images/3~2.jpg" alt="">
                    <div class="profile-credits">
                        <h2>_navi_0048</h2>
                            <ul>
                                <li>0 Posts</li>
                                <li>500 followers</li>
                                <li>100 following</li>
                            </ul>
                            <h4>Navneet Yadav</h4>
                            <p>#spacious</p>
                    </div>
                </div>
            </div>

            <div class="posts">
                <div class="tag">POSTS</div>
                <img src="https://source.unsplash.com/random/1080x1080/?cars" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?animals" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?quotes" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?sky" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?space" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?planets" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?nature" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?mountains" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?citys" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?skyscrapers" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?coding" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?robot" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?spacex" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?internet" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?men" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?boy" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?puppies" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?women" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?girl" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?college" alt="">
                <img src="https://source.unsplash.com/random/1080x1080/?books" alt="">
            </div>
        </div>

        <div class="menu-top">
            <div><img id="logo" src="./images/Instagram.png" alt="logo"></div>
            <div><img src="./images/heart.png" alt="notification"></div>
            <div><img src="./images/messenger.png" alt="chat"></div>
        </div>
        <div class="menu-bottom">
            <a class="postman" href="index.html">
                <div id="hover1" class="menu-bar home">
                    <div><img src="./images/home.jpg" alt="home"></div>
                </div>
            </a>
            <div id="hover2" class="menu-bar find">
                <div><img src="./images/search.png" alt="search"></div>
            </div>

            <div id="hover4" class="menu-bar">
                <div><img src="./images/story.png" alt="add"></div>
            </div>
            <div id="hover6" class="menu-bar">
                <div><img src="./images/instagram-reels.png" alt="reels"></div>
            </div>
            <div id="hover7" class="menu-bar">
                <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
            </div>
        </div>
    </div>

</body>

</html>