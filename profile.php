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

    .posts #profile_post_img_container {
      height: 235px;
      width: 100%;
      object-fit: fill;
      overflow: hidden;
      align-content: center;
      background-color: black;
      border: 1px solid white;
    }

    .posts img {
      width: 100%;
      height: auto;
    }

    .tag {
      position: absolute;
      width: 100%;
      top: 6px;
      text-align: center;
      font-weight: bold;
      background-color: rgb(241, 244, 255);
    }

    input {
      position: relative;
      margin: 10px 0px;
      height: 80px;
      border-radius: 8px;
    }

    input[type=file] {
      width: 300px;
    }

    #image-preview {
      width: 150px;
      height: 150px;
      margin: 10px;
      border-radius: 50%;
      background-color: rgb(214, 214, 215);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .profile-container img {
      max-width: 150px;
      width: auto;
      max-height: 150px;
      height: auto;
    }


    label {
      height: 25px;
      width: 130px;
      margin: 0px 15px;
      color: white;
      background-color: rgb(39, 154, 248);
      border-radius: 7px;
      text-align: center;
    }

    button {
      height: 25px;
      width: 130px;
      margin: 0px 15px;
      color: white;
      background-color: rgb(39, 154, 248);
      border-radius: 7px;
      border: none;
    }

    .profile-container-edit{
      flex-direction: column;
      height: 480px;
    }

    #edit-profile {
      height: 100vh;
      width: 100vw;
      display: none;
      align-items: center;
      justify-content: center;
      position: absolute;
      backdrop-filter: blur(2px);
    }

    .edit-inner-profile {
      background: #0d4493;
      margin: 10px;
      padding: 30px;
      height: 480px;
      border-radius: 20px;
    }

    .edit-profile-credits{
      height: 290px;
      align-items: center;
    }









    @media only screen and (max-width:950px) {
      .posts {
        width: 600px;
      }

      .posts img {
        width: 100%;
        height: auto;
      }

    }

    @media only screen and (max-width:800px) and (min-width:500px) {

      .posts,
      .profile {
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
      input{
        width: 280px;
      }
    }

    @media only screen and (max-width:630px) {
      .menu {
        border: none;
      }

      /* .edit-inner-profile {
        width: 90%;
      } */
    }

    @media screen and (max-width:500px) {
      .frame {
        grid-template-columns: auto;
      }

      .posts,
      .profile {
        width: 100%;
      }

      #logo {
        margin: 0px 10px;
      }
      
      .edit-inner-profile {
        width: 100vw;
      }

      button{
        width: 90px;
      }
      input{
        width: 200px;
      }
      .menu-top {
        position: fixed;
        top: 0;
        background: white;
        display: grid;
        align-items: center;
        text-align: left;
        grid-template-columns: 2fr 0.2fr;
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

      .posts {
        margin-top: 70px;
        padding-bottom: 60px;
      }

      /* .posts #profile_post_img_container{
              height: 150px;

            } */
      /* .posts img{
              height: 200px;
            } */

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
      <div id="hover7" class="menu-bar">
        <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
        <div class="text">Profile</div>
      </div>
      <div id="hover4" class="menu-bar">
        <div><img src="./images/menu.png" alt="menu"></div>
        <div class="text">More</div>
      </div>
    </div>

    <div class="search">
      <div class="profile">
        <div class="profile-container">
          <img src="images/3~2.jpg" alt="">
          <div class="profile-credits">
            <div style="display: flex; align-items: center;">
  
                   
              <h2>_navi_0048</h2><button id="edit-profile-button" type="submit"  >Edit Profile</button>
  


           
            </div>
            <ul>
              <li><span style="font-weight: bold">0</span> Posts</li>
              <li><span style="font-weight: bold">500</span> followers</li>
              <li><span style="font-weight: bold">100</span> following</li>
            </ul>
            <h4>Navneet Yadav</h4>
            <p>#spacious</p>
          </div>
        </div>
      </div>
      <?php
      include "config.php";
      //session_start();
      $user_id = $_SESSION["user_id"];
      $sql = "select * from posts where user_id='{$user_id}' ORDER BY post_id DESC";

      $result = mysqli_query($conn, $sql) or die("Query failed");
      if (mysqli_num_rows($result) > 0) {




        ?>
        <div class="posts">
          <div class="tag">POSTS</div>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div id="profile_post_img_container"><img src="post-images/<?php echo $row["post_img"]; ?>" alt=""></div>

            <?php
          }
          ?>
        </div>
      </div>
      <?php

      } else {
        echo "<h1>No post<?h1>";
      }

  
include "config.php";
$userid=   $_SESSION["user_id"];
$sql = "SELECT user_id, firstname, lastname, username, password1
        FROM register 
        WHERE user_id='{$userid}'";
$result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
if(mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
      ?>

    <!-- Edit Profile -->
    <div id="edit-profile">
      <div style="margin-top: 0;" class="profile edit-inner-profile">
        <div class="profile-container profile-container-edit">
          <div id="image-preview">
            <img style="height: 150px" id="preview" alt="">
          </div>
          <form action="">
          <div class="profile-credits edit-profile-credits">
            <input id="choose-file" type="file" name="fileToUpload" accept="image/*" onchange="previewImage(event)"
              hidden />
            <label for="choose-file">Update Image</label>
            <input type="text" name="caption" placeholder="change Username" value="gfg">
            <input type="text" name="caption" placeholder="change Firstname" value="gfnf">
            <input type="text" name="caption" placeholder="change Lastname">
            <input type="text" name="loc" placeholder="update bio">
            <div style="display: flex; align-items: center;">
            <button id="edit-cancel-button" type="cancel">cancel</button><button type="submit">Update</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <?php
       }}
    ?>
 
    <div class="menu-top">
      <div><img id="logo" src="./images/Instagram.png" alt="logo"></div>
      <!-- <div><img src="./images/heart.png" alt="notification"></div> -->
      <div><img src="./images/menu.png" alt="menu"></div>
    </div>



    <div class="menu-bottom">
      <a class="postman" href="main.php">
        <div id="hover1" class="menu-bar home">
          <div><img src="./images/home.jpg" alt="home"></div>
        </div>
      </a>
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
      <div id="hover7" class="menu-bar">
        <div><img id="profile" src="./images/3~2.jpg" alt="profile"></div>
      </div>
    </div>
  </div>

  <script>
    function previewImage(event) {
      var input = event.target;
      var image = document.getElementById('preview');
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          image.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
 

    let edit_profile = document.getElementById("edit-profile-button")
    let edit_profile_div = document.getElementById("edit-profile")
    let edit_cancel_button =document.getElementById("edit-cancel-button")

    edit_profile.addEventListener("click", () => {
      edit_profile_div.style.display = "flex"
      
    })

    edit_cancel_button.addEventListener("click", () => {
      edit_profile_div.style.display = "none"
    })



  </script>

</body>

</html>