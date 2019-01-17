<?php
   if(isset($_POST['coming'])){
      $firstName = $_POST["fname"];
      $lastName = $_POST["lname"];
      $number = $_POST["number"];
      
      // Setting Up Email

      $matilTo = "akshaymemail@gmail.com";
      $subject = "Good News Shashi, ".$firstName." ".$lastName." is ready to attain your marriage anniversary";

      $headers = 'From: '.$number."\r\n".
      'Reply-To: '.$number."\r\n" .
      'X-Mailer: PHP/' . phpversion();
      
      if(@mail($email_to, $email_subject, $email_message, $headers)){
         echo "<script>alert('Email Sent')</script>";
      }else{
         echo "<script>alert('There was an error!')</script>";
      }
   }

   if(isset($_POST['notComing'])){
      $firstName = $_POST["fname"];
      $lastName = $_POST["lname"];
      $number = $_POST["number"];
      echo "<script>alert(0)</script>";
   }
?>

<!DOCTYPE html>
<html>
<title>Singh's Wedding Invitation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
   body,h1,h2{font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    p {line-height: 2}
    .bgimg, .bgimg2 {
    min-height: 100%;
    background-position: center;
    background-size: cover;
    }
    .bgimg {background-image: url("image2.jpeg")}
    .bgimg2 {background-image: url("flowers.jpg")}
    @media(min-width:768px){
      .bgimg{
        background-image: url('backgroundCoverImage.jpg');
      }
    }
  </style>

<body>

   <!-- Header / Home-->
   <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
      <div class="w3-display-middle w3-text-dark w3-center">
         <h1 class="w3-jumbo">Shashi & Minu</h1>
         <h2>Are getting married</h2>
         <h2><b>09.02.2019</b></h2>
      </div>
   </header>

   <!-- Navbar (sticky bottom) -->
   <div class="w3-bottom w3-hide-small">
      <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
         <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
         <a href="#us" style="width:25%" class="w3-bar-item w3-button">Shashi & Minu</a>
         <a href="#wedding" style="width:25%" class="w3-bar-item w3-button">Wedding</a>
         <a href="#rsvp" style="width:25%" class="w3-bar-item w3-button w3-hover-teal">Inform Us</a>
      </div>
   </div>

   <!-- About / Shashi And Minu -->
   <div class="w3-container w3-padding-64 about-background w3-grayscale-min" id="us">
      <div class="w3-content">
         <h1 class="w3-center w3-text-grey"><b>Shashi & Minu</b></h1>
         <img class="w3-round " src="images/image1.jpeg" style="width:100%;margin:32px 0">
         <p style="text-align:center"><i>You All Know Us. And We All Know You. We Are Getting Married.</i></p>
         <p style="text-align:center" class="quote"><cite>A successful marriage requires falling in love many times,
               always with the same person.</cite></p>
         <br>
         <p class="w3-center"><a href="#wedding" class="w3-button w3-black w3-round w3-padding-large w3-large">Wedding
               Details</a></p>
      </div>
   </div>

   <!-- Background photo -->
   <div class="w3-display-container bgimg2">
      <div class="w3-display-middle w3-text-dark w3-center">
         <h1 class="w3-jumbo">You Are Invited</h1><br>
         <h2>Of course..</h2>
      </div>
   </div>

   <!-- Wedding information -->
   <div class="w3-container w3-padding-64 w3-grayscale-min w3-center" id="wedding">
      <div class="w3-content">
         <h1 class="w3-text-grey"><b>THE WEDDING</b></h1>
         <!-- <img class="w3-round-large w3-grayscale-min" src="/w3images/wedding_location.jpg" style="width:100%;margin:64px 0"> -->
         <div class="w3-row">
            <!-- <div class="w3-half">
          <h2>When</h2>
          <p>Wedding Ceremony - 09-02-2019 Night</p>
          <p>Reception & Dinner - 5:00pm</p>
        </div> -->
            <div>
               <h2>When & Where</h2>
               <p>Wedding Ceremony - 09-02-2019 Night</p>
               <p>Ismile Chowk Near Govind Chowk , Sonepur</p>
               <hr class="dotted">
               <p>Reception & Dinner - 5:00pm</p>
               <cite>Shivnagry Near Jay Prakash University NH 19, Chapra</cite>
            </div>
         </div>
      </div>
   </div>

   <!-- Invitation section -->
   <div class="w3-container w3-padding-64 inform-us-bg w3-center w3-wide" id="rsvp">
      <h1>HOPE YOU CAN MAKE IT!</h1>
      <p class="w3-large">Kindly Respond By January, 2019</p>
      <p class="w3-xlarge">
         <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-black w3-opacity w3-hover-opacity-off"
            style="padding:8px 60px">Inform Us!</button>
      </p>
   </div>

   <!-- Invitation modal -->
   <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
         <div class="w3-container w3-white w3-center">
            <span style="float:right" class="c-button">X</span>
            <h1 class="w3-wide">Your Confirmation Is Important To Us!</h1>
            <p>We really hope you can make it.</p>
            <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
               <input class="w3-input w3-border input-margin" type="text" name="fname" id="fname" placeholder="First Name">
               <input class="w3-input w3-border input-margin" type="text" name="lname" id="lname" placeholder="Last Name">
               <input class="w3-input w3-border input-margin" type="tel" name="number" id="number" placeholder="Contact Number">
               <p><i>Sincerely, Shashi &amp; Minu</i></p>
               <div class="w3-row">
                  <div class="w3-half">
                     <button onclick="document.getElementById('id01').style.display='none'" type="submit" name="coming" class="w3-button w3-block w3-green" id="yes" disabled>I'm
                        Coming</button>
                  </div>
                  <div class="w3-half">
                     <button onclick="document.getElementById('id01').style.display='none'" type="submit" name="notComing" class="w3-button w3-block w3-red" id="no" disabled>Can't
                        come</button>
                  </div>
               </div>
            </form>

         </div>
      </div>
   </div>

   <!-- Footer -->
   <footer class="w3-center w3-black w3-padding-16">
      <p>Designed By <a style="text-decoration:none" href="https://akshaymemail.github.io/mycv" target="_blank" class="w3-hover-text-green">
            Akshay Singh</a></p>
   </footer>
   <div class="w3-hide-small" style="margin-bottom:32px">&nbsp;</div>

   <!-- MyCustomJavaScript -->
   <script src="javascript.js"></script>
</body>

</html>