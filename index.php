<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Ubuntu </title>
    <link rel="icon" type="image/ico" href="images/u_logo.png"/>

    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div>

      <!-- page header navigation -->
      <header class="home-header">
        <nav>
          <ul>
            <a class="logo" href="#"> Ubuntu </a>
            <li><a href="contact.php"> Contact </a> </li>
            <li><a href="shop.php"> Shop </a></li>
            <li><a href="index.php"> Home </a></li>
          </ul>
        </nav>
      </header>

      <!-- room booking form and page main title -->
      <div class="intro-section">
        <div class="container">

          <!-- page main title -->
          <h3 style="font-size: 50px;"> Ubuntu Luxury Hotels</h3>

          <!-- room booking form -->
          <form class="hotel-form" action="" method="POST">
            <input type="text" name="checkIn" value="" placeholder="  Check In - e.g 2019/04/21">
            <input type="text" name="checkOut" value="" placeholder="  Check Out - e.g 2019/04/27">
            <input type="text" name="children" value="" placeholder="  Children - e.g 1">
            <input type="text" name="adults" value="" placeholder="  Adults - e.g 1">
            <input type="text" name="rooms" value="" placeholder="  Rooms - e.g single">
            <input type="submit" name="submit" value= "submit">
          </form>
        </div>
      </div>
    </div>

<!-- hotel rooms -->
 <section  class="home-rooms">

   <div class="container">

    rooms<!--  section title -->
     <h2 style="color : #732323; text-align: center; font-size: 35px;"> Our Rooms </h2>

     <!-- room one -->
     <div style="font-family: sans-serif;" class="home-room">
       <img src="images/img_1.jpg" alt="room">
       <h4 style="text-align: center; font-size: 18px;"> STANDARD ROOM </h4>
       <p style="text-align: center; color: gray"> From $190 per Night</p>
     </div>

     <!-- room two -->
     <div style="font-family: sans-serif;" class="home-room">
       <img src="images/img_2.jpg" alt="room">
       <h4 style="text-align: center; font-size: 18px;"> FAMILY ROOM </h4>
       <p style="text-align: center; color: gray"> From $300 per Night</p>
     </div>

     <!-- room three -->
     <div style="font-family: sans-serif;" class="home-room">
       <img src="images/img_3.jpg" alt="room">
       <h4 style="text-align: center; font-size: 18px; "> SINGLE ROOM </h4>
       <p style="text-align: center; color: gray"> From $250 per Night</p>
     </div>

   </div>
 </section>

 <!-- hotel gallery section -->
 <section class="gallery-section">
   <div class="small-container">

    <!-- section title -->
     <h2 style="color : #732323; text-align: center; font-size: 35px;"> Our Gallery </h2>

     <!-- image one -->
     <div class="gallery">
       <a target="_blank" href="images/hr6.jpg">
         <img src="images/hr6.jpg" alt="Cinque Terre">
       </a>
     </div>

     <!-- image two -->
     <div class="gallery">
       <a target="_blank" href="images/hr2.jpg">
         <img src="images/hr2.jpg" alt="Forest">
       </a>
     </div>

     <!-- image three -->
     <div class="gallery">
       <a target="_blank" href="images/hr3.jpg">
        <img src="images/hr3.jpg" alt="Northern Lights">
       </a>
     </div>

     <!-- image four -->
     <div class="gallery">
       <a target="_blank" href="images/hr5.jpg">
         <img src="images/hr5.jpg" alt="Mountains">
       </a>
     </div>

 </section>

<!-- about us section -->
<section class="aboutus-section">
  <div class="container">

    <!-- about us section title -->
    <h2 style="color : #732323; text-align: center; font-size: 35px;"> Our Story </h2>

    <!-- insert image -->
    <div class="aboutus">
      <img src="images/hero_2.jpg" alt="image">
    </div>

    <!-- about us description -->
    <div style="font-family: sans-serif;" class="aboutus">

      <!-- mini section title -->
      <h3 style="color : #732323;"> Who We Are</h3>
      <p style="text-align: left; font-size: 15px;">
        Ubuntu Hotel and Resort is the leading hospitality Company in Rwanda and Across East Africa. We seek to not only ensure our customers have an unforgetable experience, but also allow them to purchase what they need at the comfort of their hotel rooms.
      </p>

      <!-- read more -->
      <a style="color : #732323; " href="#"> Read More </a>
    </div>

  </div>
</section>

<!-- events section -->
<section class="upcoming-events">

  <div class="container">

    <!-- main section title -->
    <h2 style="color : #732323; text-align: center; font-size: 35px;"> Upcoming Events </h2>
    
    <!-- barbecue -->
    <div style="font-family: sans-serif;" class="home-room">
      <img src="images/bbq.jpg" alt="room">

      <h4 style="font-size: 18px;"> Barbecue Night </h4>
      <p style="text-align: left; font-size: 15px;">
         Come enjoy cool music as you feast on your favorite piece of grilled meat, served with lemon and hot pepper.
      </p>
      <a style="color : #732323; " href="#"> Read More </a>
    </div>

    <!-- kids festival -->
    <div style="font-family: sans-serif;" class="home-room">
      <img src="images/kids.jpg" alt="room">
      <h4 style="font-size: 18px;"> Kids Festival </h4>
      <p style="text-align: left; font-size: 15px;">
         Bring your kids to experience a day packed with fun. There will be comedians as well as clowns to keep your kids happy. There will be food!
      </p>
      <a style="color : #732323; " href="#"> Read More </a>
    </div>

    <!-- Fashion Show -->
    <div style="font-family: sans-serif;" class="home-room">
      <img src="images/fashion.jpg" alt="room">
      <h4 style="font-size: 18px;"> Fashion Show </h4>
      <p style="text-align: left; font-size: 15px;">
         Dress in your best African print and come and meet more stylish people! It's time to show the drip that you've got!
      </p>
      <a style="color : #732323; " href="#"> Read More </a>
    </div>


  </div>
</section>


  <!-- page footer -->
  <div class="footer" style="background-color: #732323; text-align: left; height: 150px;">
    <footer>
      <nav >
          <ul style="margin-top: 50px;">
            
            <li><a href="contact.php"> Contact </a> </li>
            <li><a href="shop.php"> Shop </a></li>
            <li><a href="index.php"> Home </a></li>

            <li style="margin-right: 700px;"><a class="logo2" href="#"> Ubuntu </a> </li>

          </ul>
        </nav>
    </footer>

  </div>

  </body>
</html>




<?php 
$severname = "localhost";
$user = "root";
$password = "";
$database = "hotel_database";

$link = mysqli_connect($severname, $user, $password, $database) or die("failed to connect");

// echo "string";
if(isset($_POST['submit'])){
  $checkin = $_POST['checkIn'];
  $checkout = $_POST['checkOut'];
  $children = $_POST['children'];
  $adult= $_POST['adults'];
  $rooms = $_POST['rooms'];
  $sql = "INSERT INTO reservations (check_in, check_out, children, adults, rooms) 
    VALUES ('$checkin', '$checkout', '$children', '$adult','$rooms')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

 ?>