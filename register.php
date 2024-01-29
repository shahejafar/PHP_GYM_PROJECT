<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Gym</title>
</head>
<body>
     
    <div class="navbar">
        <a href="#" class="logo"> F <b>A</b>.</a>
        <div class="toggle" onclick="navToggle();">

        </div>
        <ol>
            <li><a href="home.html" onclick="navToggle();">Home</a></li>
            <li><a href="about.html" onclick="navToggle();">About</a></li>
            <li><a href="workout.html" onclick="navToggle();">Workout</a></li>
            <li><a href="trainer.html" onclick="navToggle();">Trainer</a></li>
            <li><a href="diet.html" onclick="navToggle();">Diet</a></li>
            <li><a href="register.php" onclick="navToggle();">Register</a></li>
        </ol>
    </div>

    
    <!-- booking section start  -->
     
    <section class="booking ">
        <div class="main">
        <h2 class="header-title"><span>R</span>egister <span>N</span>ow</h2>
        
        <!-- <h3> WHY JOIN THE GYM ? </h3>
        <p> If you're looking to join a supportive,welcoming gym community,
        with people of all fitness levels who want to see you succeed,you've come to the right place.</p> -->
</div>
        <form action="./register_data.php" method="post" class="book-form">
          <div class="flex">
              <div class="inputbox">
                  <span>Name :</span>
                  <input type="text" placeholder="Enter your name" name=" name">
              </div>
              <div class="inputbox">
                  <span>Email :</span>
                  <input type="email" placeholder="Enter your email" name=" email">
              </div>
              <div class="inputbox">
                  <span>Phone :</span>
                  <input type="number" placeholder="Enter your phone no." name=" phone">
              </div>
              <div class="inputbox">
                  <span>Address :</span>
                  <input type="text" placeholder="Enter your address" name="address">
              </div>
              <div class="inputbox">
                  <span>Age :</span>
                  <input type="number" placeholder="Enter Age" name=" age">
              </div>
              <div class="inputbox">
                  <span>Weight:</span>
                  <input type="text" placeholder=" Enter Weight" name="weight">
              </div>
              <div class="inputbox">
                  <span> Height:</span>
                  <input type="text" placeholder=" Enter height" name="height">
              </div>
              <div class="inputbox">
                  <span>Package:</span>
                  <input type="text" placeholder=" Enter package in month" name="package">
              </div>
          </div>
         <input type="submit" value="submit" class="btne" name="send">
        </form>
    </section>
    
    
    
    
    







    <!-- copy right -->

<section class="copyright">
    &copy;  copyright <a href="#">vp-student</a> 2022 | All Right Reserved
 </section>
 
 <!-- javascript  -->
 <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
 <script>
     window.addEventListener('scroll',function(){
         const navbar=document.querySelector('.navbar');
         navbar.classList.toggle("sticky", window.scrollY > 50);
       
     });
     const togglebar=document.querySelector('.toggle');
     const menu=document.querySelector('ol');
 
     function navToggle(){
         togglebar.classList.toggle("active");
         menu.classList.toggle("active");
 
     };

     let loadMoreBtn = document.querySelector('.workout .load-more .btn');
let currentItem = 6;
loadMoreBtn.onclick = () =>{
  let boxes = [...document.querySelectorAll('.workout .content .frame')];
  for(var i = currentItem; i < currentItem + 3; i++){
    boxes[i].style.display = 'inline-block';
  };
  currentItem +=3;
  if(currentItem >= boxes.length){
    loadMoreBtn.style.display = 'none';
  }
}
 </script>
 
 </body>
 </html>