<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title> Ubuntu </title>
     <link rel="icon" type="image/ico" href="images/u_logo.png"/>
    <link rel="stylesheet" href="css/main.css">
  </head>

  <!-- start of site body -->
  <body>


    <header class="contact-header">

      <!-- navigation links -->
      <nav>
        <ul>
          <a class="logo" href="#"> Ubuntu </a>
          <li><a href="contact.php"> Contact </a> </li>
          <li><a href="shop.php"> Shop </a></li>
          <li><a href="index.php"> Home </a></li>
        </ul>
      </nav>
    </header>


    <section>

      <div class="">
        <h2 style="color : #732323; text-align: center; font-size: 35px;"> Contact Us </h2>
      </div>
      <div class="container">

        <!-- google maps image -->
        <div class="contact">
          <img src="images/map.png" alt="maps">
        </div>

        <div class="contact">

          <!-- main contact us form -->
          <form class="" action="" method="POST">
            <label for=""> First Name </label> <br>
            <input type="text" name="firstname"><br>
            <br>
            <label for=""> Last Name </label><br>
            <input type="text" name="lastname"><br>
            <br>
            <label for=""> Email </label><br>
            <input type="text" name="email"><br>
            <br>
            <label for=""> Phone Number </label><br>
            <input type="text" name="phone"><br>
            <br>
            <input type="submit" name="submit" value= "Submit">
          </form>

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

// Attempt insert query execution
if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO contact (Firstname, Lastname, Email, Phone) 
    VALUES ('$firstname', '$lastname', '$email', '$phone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

 ?>
