<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dental Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section start -->
    <header class="header fixed-top">
      <nav>
        <div class="navbarsec">
          <h1>
            <a href="#home" class="logo">Klinik <span>Gigi</span></a>
          </h1>
          <div class="menu">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
          </div>
          <div id="menu-btn" class="fas fa-bars"></div>
        </div>
      </nav>
    </header>
    <!-- header section ends -->

    <!-- home section stars -->
    <section class="home" id="home">
      <div class="container">
        <div class="row min-vh-100 align-items-center">
          <div class="content text-md-left">
            <h3>Cerahkan senyumanmu bersama kami</h3>
            <p>Dapatkan perawatan gigi dengan teknologi canggih dan pelayanan ramah. Kamu bisa konsultasikan gigimu dengan dokter terbaik kami, sekarang.</p>
            <a href="#contact" class="link-btn">Buat jadwal temu</a>
          </div>
        </div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section start -->
    <section class="about" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 image">
            <img src="img/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg" alt="" class="w-100 mb-5 mb-md-0" />
          </div>
          <div class="col-md-6 content">
            <span>About us</span>
            <h3>Treat your teeth with care</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint obcaecati quo, provident porro repellendus aliquid magni ex modi tempore, libero reprehenderit inventore velit nemo similique reiciendis? Amet architecto labore
              consequatur?
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- about section end -->

    <!-- service section start -->

    <section class="services" id="services">
      <h1 class="heading">our services</h1>
      <div class="box-container container">
        <div class="box">
          <img src="img/icon-1.svg" alt="" />
          <h3>Alignment Specialist</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
        <div class="box">
          <img src="img/icon-2.svg" alt="" />
          <h3>Cosmetic dentistry</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
        <div class="box">
          <img src="img/icon-3.svg" alt="" />
          <h3>Oral hygiene experts</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
        <div class="box">
          <img src="img/icon-4.svg" alt="" />
          <h3>Root canal specialist</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
        <div class="box">
          <img src="img/icon-5.svg" alt="" />
          <h3>Live dental advisory</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
        <div class="box">
          <img src="img/icon-6.svg" alt="" />
          <h3>Cavity inspection</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse.</p>
        </div>
      </div>
    </section>
    <!-- service section end -->

    <!-- process section start -->
    <section class="process">
      <h1 class="heading">work process</h1>
      <div class="box-container container">
        <div class="box">
          <img src="img/process-1.png" alt="" />
          <h3>Cosmetic Dentistry</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, expedita.</p>
        </div>
        <div class="box">
          <img src="img/process-2.png" alt="" />
          <h3>Pediatric Dentistry</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, expedita.</p>
        </div>
        <div class="box">
          <img src="img/process-3.png" alt="" />
          <h3>Dental implants</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, expedita.</p>
        </div>
      </div>
    </section>
    <!-- process section end -->

    <!-- reviews section starts -->
    <section class="reviews" id="reviews">
      <h1 class="heading">satisfied clients</h1>
      <div class="box-container container">
        <div class="box">
          <img src="img/pic-1.png" alt="" />
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, obcaecati! Amet mollitia dolorem sint. Nostrum.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h3>Saripudin</h3>
          <span>satisfied client</span>
        </div>
        <div class="box">
          <img src="img/pic-2.png" alt="" />
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, obcaecati! Amet mollitia dolorem sint. Nostrum.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <h3>Sinta</h3>
          <span>satisfied client</span>
        </div>
        <div class="box">
          <img src="img/pic-3.png" alt="" />
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, obcaecati! Amet mollitia dolorem sint. Nostrum.</p>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-alt"></i>
          </div>
          <h3>Joko</h3>
          <span>satisfied client</span>
        </div>
      </div>
    </section>

    <!-- reviews section end -->

    <!-- contact section start -->
    <section class="contact" id="contact">
      <h1 class="heading">make appointment</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form> 
    </section>

    <!-- contact section end -->

    <!-- footer section start -->
    <section class="footer">
      <div class="box-container container">
        <div class="box">
          <i class="fas fa-phone"></i>
          <h3>phone number</h3>
          <p>+62 8964-4645-321</p>
        </div>
        <div class="box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Address</h3>
          <p>Tangerang, Indonesia</p>
        </div>
        <div class="box">
          <i class="fas fa-envelope"></i>
          <h3>email</h3>
          <p>klinikgigi321@gmail.com</p>
        </div>
        <div class="box">
          <i class="fas fa-clock"></i>
          <h3>working hour</h3>
          <p>09:00 AM to 08:00 PM</p>
        </div>
      </div>

      <div class="credit"> &copy; copyright  <?php echo date ('Y'); ?> by <span>Jody Nur Cahyadi</span></div>

    </section>
    <!-- footer section end -->

    <script src="script.js"></script>
  </body>
</html>
