<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img1.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>1. Facility to choose from a wide range of books on different subjects</p>
         <p>2. Facility to choose from books written by both; novice as well as established authors</p>
         <p>3. 100% original books</p>
         <p>4. Books available at affordable prices</p>
         <p>5. Facility of comparing the book price with the market value</p>
         <p>6. Cash on Delivery facility available</p>
         <p>7. Free Home Delivery facility available</p>
         <p>8. 100% Secure and Safe Shopping</p>
         <p>9. Books available for individuals of all age groups ranging from toddlers and youngsters to the aged.</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Anim.jpg" alt="">
         <p>Great selection of Bengali books, easy to use interface. Highly recommend.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anim</h3>
      </div>

      <div class="box">
         <img src="images/Shanto.jpg" alt="">
         <p>Best book store. Almost all Bengali books are available. Resanoble prices.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shanto</h3>
      </div>

      <div class="box">
         <img src="images/Junayed.jpg" alt="">
         <p>A wide variety of Bengali books. Prices are reasonable. It is a nice online book store.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Junayed</h3>
      </div>

      <div class="box">
         <img src="images/Fahim.jpg" alt="">
         <p>This is the best place to purchase the all Bengali books at one place at very affordable price.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fahim</h3>
      </div>

      <div class="box">
         <img src="images/Omor.jpg" alt="">
         <p>Smooth and easy to use, with a great collection of Bengali books. And also prices are reasonable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Omor</h3>
      </div>

      <div class="box">
         <img src="images/Raj.jpg" alt="">
         <p>Amazing online bookstore. I found my favourite book here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raj</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/zafar.jpg" alt="">
         <h3>Muhammed Zafar Iqbal</h3>
      </div>

      <div class="box">
         <img src="images/bibu3.jpg" alt="">
         <h3>Bibhutibhushan Bandopadhyay</h3>
      </div>

      <div class="box">
         <img src="images/r.jpg" alt="">
         <h3>Rabindranath Tagore</h3>
      </div>

      <div class="box">
         <img src="images/s.jpg" alt="">
         <h3>Sarat Chandra Chattopadhyay</h3>
      </div>


      <div class="box">
         <img src="images/sha.jpg" alt="">
         <h3>Shamsur Rahman</h3>
      </div>
      <div class="box">
         <img src="images/hum.jpg" alt="">
         <h3> Humayun Ahmed</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>