<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.html" class="logo">Comfort Corners</a>

   <nav class="navbar">
      <a href="home.html">home</a>
      <a href="about.html">about</a>
      <a href="package.html">package</a>
      <a href="book.html">book</a>
      <a href="contact.html">Contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/mandalas.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Make A Reservation</h1>

   <form action="connection.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" maxlength="30" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" maxlength="50" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" maxlength="10" min="0" max="9999999999" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" maxlength="50" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" min="1" max="99" maxlength="2" placeholder="number of guests" name="guest">
         </div>
         <div class="inputBox">
            <span>Playing Area :</span>
            <input type="text" placeholder="place you want to visit" name="destination" maxlength="50">
         </div>
         <!--<div class="inputBox">
            <span>arrival :</span>
            <input type="date" name="arrival">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div> -->
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!--footer section begins-->
<section class="footer">
   <div class="box-container">
       <div class="box">
           <h3>Quick Links</h3>
           <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
           <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
           <a href="activity.php"><i class="fas fa-angle-right"></i>Activities</a>
           <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
           <a href="contact.php"><i class="fas fa-angle-right"></i>Contact</a>
       </div>
       <div class="box">
           <h3>Extra Links</h3>
           <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
           <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
           <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
           <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
       </div>
       <div class="box">
           <h3>Contact Info</h3>
           <a href="#"><i class="fas fa-phone"></i>+254703109743</a>
           <a href="#"><i class="fas fa-envelope"></i>omondi@gmail.com</a>
           <a href="#"><i class="fas fa-map"></i>Gachie, Kiambu-Kenya</a>
       </div>
       <div class="box">
           <h3>Social Links</h3>
           <a href="https://web.facebook.com/Rhitamonroe"><i class="fab fa-facebook"></i>Facebook</a>
           <a href="https://x.com/theririway"><i class="fab fa-twitter"></i>Twitter</a>
           <a href="https://www.instagram.com/rita_omondi/"><i class="fab fa-instagram"></i>Instagram</a>
       </div>
   </div>
   <div class="credit" > created by <span>au~some.tech</span> | all rights reserved</div>
 </section>
 <!--footer section ends-->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>