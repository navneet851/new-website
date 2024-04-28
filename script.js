let svg = document.getElementById("svg");
let sv = document.getElementById("sv");
svg.addEventListener("click", function () {
  // e.preventDefault;
  // svg.classList.remove("id");
  // void svg.offsetWidth;
  // svg.classList.add("id")
  sv.style.animation = "dash 3s ease-out 1 forwards";
});
let svg2 = document.getElementById("svg2");
svg2.addEventListener("click", function () {
  sv2.style.animation = "dash 3s ease-out 1 forwards";
});
let svg3 = document.getElementById("svg3");
svg3.addEventListener("click", function () {
  sv3.style.animation = "dash 3s ease-out 1 forwards";
});
let svg4 = document.getElementById("svg4");
svg4.addEventListener("click", function () {
  sv4.style.animation = "dash 3s ease-out 1 forwards";
});
let svg5 = document.getElementById("svg5");
svg5.addEventListener("click", function () {
  sv5.style.animation = "dash 3s ease-out 1 forwards";
});
let svg6 = document.getElementById("svg6");
svg6.addEventListener("click", function () {
  sv6.style.animation = "dash 3s ease-out 1 forwards";
});
let svg7 = document.getElementById("svg7");
svg7.addEventListener("click", function () {
  sv7.style.animation = "dash 3s ease-out 1 forwards";
});

let follow1 = document.getElementById("follow1");
follow1.addEventListener("click", () => {
  follow1.innerHTML = "Followed";
  follow1.style.backgroundColor = "rgb(247, 244, 247)";
  follow1.style.border = "1px solid rgb(171, 170, 170)";
  follow1.style.color = "black";
});
let follow2 = document.getElementById("follow2");
follow2.addEventListener("click", () => {
  follow2.innerHTML = "Followed";
  follow2.style.backgroundColor = "rgb(247, 244, 247)";
  follow2.style.border = "1px solid rgb(171, 170, 170)";
  follow2.style.color = "black";
});
let follow3 = document.getElementById("follow3");
follow3.addEventListener("click", () => {
  follow3.innerHTML = "Followed";
  follow3.style.backgroundColor = "rgb(247, 244, 247)";
  follow3.style.border = "1px solid rgb(171, 170, 170)";
  follow3.style.color = "black";
});
let follow4 = document.getElementById("follow4");
follow4.addEventListener("click", () => {
  follow4.innerHTML = "Followed";
  follow4.style.backgroundColor = "rgb(247, 244, 247)";
  follow4.style.border = "1px solid rgb(171, 170, 170)";
  follow4.style.color = "black";
});
let follow5 = document.getElementById("follow5");
follow5.addEventListener("click", () => {
  follow5.innerHTML = "Followed";
  follow5.style.backgroundColor = "rgb(247, 244, 247)";
  follow5.style.border = "1px solid rgb(171, 170, 170)";
  follow5.style.color = "black";
});

// let home = document.getElementsByClassName("home")[0]
// let find = document.getElementsByClassName("find")[0]
// let main = document.getElementsByClassName("main")[0]
// let search = document.getElementsByClassName("search")[0]

let heart1 = document.getElementById("heart1");
let number1 = document.getElementById("number1");
let ani_1 = document.getElementById("dbl-ani1");
let ani1 = document.getElementById("ani1");

ani_1.addEventListener("dblclick", () => {
  ani1.style.animation = "heart 0.7s ease forwards";
  ani1.style.opacity = "1";
  if (heart1.src.match("heart")) {
    heart1.src = "./images/redheart.png";
    number1.innerHTML = "2,99,793 likes";
  }
});
heart1.addEventListener("click", () => {
  ani1.style.animation = "heart 0.7s ease forwards";
  ani1.style.opacity = "1";
  if (heart1.src.match("heart")) {
    heart1.src = "./images/redheart.png";
    number1.innerHTML = "2,99,793 likes";
  } else {
    heart1.src = "./images/heart.png";
    number1.innerHTML = "2,99,792 likes";
  }
});

//open comments

// let open_comments = document.getElementById("open-comments");
// let post_comments = document.getElementById("post-comments");

// open_comments.addEventListener("click", () => {
//     if(post_comments.style.display == "none"){
//         post_comments.style.display = "block";
//     }
//     else{
//         post_comments.style.display = "none";
//     }
  
// })




//open post menu

let three_dot_opener = document.getElementById("three-dot-opener");
let three_dot_options = document.getElementById("three-dot-options");

three_dot_opener.addEventListener("click", () => {
    if(three_dot_options.style.display == "none"){
        three_dot_options.style.display = "block";
    }
    else{
        three_dot_options.style.display = "none";
    }
  
})

// function bookmark() {
// 	let Image = document.getElementById('bkmark');
// 	if (Image.src.match("bookmark-white")) {
// 		Image.src = "./images/blackbookmark.png";
// 	}
// 	else {
// 		Image.src = "./images/bookmark-white.png";
// 	}
// }

// let heart2 = document.getElementById('heart2')
// let number2 = document.getElementById("number2")
// let ani_2 = document.getElementById("dbl-ani2")
// let ani2 = document.getElementById("ani2")
// ani_2.addEventListener("dblclick", () => {
//     ani2.style.animation = "heart 0.7s ease forwards"
//     ani2.style.opacity = '1'
//     if (heart2.src.match("heart")) {
//         heart2.src = "./images/redheart.png";
//         number2.innerHTML = "76,793 likes";
//     }
// })
// heart2.addEventListener("click", () => {
//     ani2.style.animation = "heart 0.7s ease forwards"
//     ani2.style.opacity = '1'
//     if (heart2.src.match("heart")) {
//         heart2.src = "./images/redheart.png";
//         number2.innerHTML = "76,793 likes";
//     }
// })

// let heart3 = document.getElementById('heart3')
// let number3 = document.getElementById("number3")
// let ani_3 = document.getElementById("dbl-ani3")
// let ani3 = document.getElementById("ani3")
// ani_3.addEventListener("dblclick", () => {
//     ani3.style.animation = "heart 0.7s ease forwards"
//     ani3.style.opacity = '1'
//     if (heart3.src.match("heart")) {
//         heart3.src = "./images/redheart.png";
//         number3.innerHTML = "9,99,793 likes";
//     }
// })
// heart3.addEventListener("click", () => {
//     ani3.style.animation = "heart 0.7s ease forwards"
//     ani3.style.opacity = '1'
//     if (heart3.src.match("heart")) {
//         heart3.src = "./images/redheart.png";
//         number3.innerHTML = "9,99,793 likes";
//     }
// })

// let heart4 = document.getElementById('heart4')
// let number4 = document.getElementById("number4")
// let ani_4 = document.getElementById("dbl-ani4")
// let ani4 = document.getElementById("ani4")
// ani_4.addEventListener("dblclick", () => {
//     ani4.style.animation = "heart 0.7s ease forwards"
//     ani4.style.opacity = '1'
//     if (heart4.src.match("heart")) {
//         heart4.src = "./images/redheart.png";
//         number4.innerHTML = "24,057 likes";
//     }
// })
// heart4.addEventListener("click", () => {
//     ani4.style.animation = "heart 0.7s ease forwards"
//     ani4.style.opacity = '1'
//     if (heart4.src.match("heart")) {
//         heart4.src = "./images/redheart.png";
//         number4.innerHTML = "24,057 likes";
//     }
// })
