<?php 
session_start();
include("dbconfig.php");
//if (isset($_SESSION["user"])) { ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eSPORTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="assets/img/gaming.png" rel="icon">
  <link href="assets/img/gaming.png" rel="gaming">

    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- font awsome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"></link>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

 <style>

  .dblogo{
    
    width: 8rem;
    
    height: 3.9rem;
    
    background: url(/esports/<?php $sql = "SELECT * FROM tbl_logo Where status=1";
            $result = mysqli_query($con, $sql);
            $rows = $result->fetch_assoc(); 
            echo $rows["logo"];;?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
       /*background:url(row2.png);*/
  }
 </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
      <div class="dblogo"></div>
        <!--<div class="logo">
          <h1 class="text-light"><a href="index.php"><span></span>E-SPORTS</a></h1>
          
          Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>-->
    
        <nav id="navbar" class="navbar">
          <ul>  
          <?php $sql="SELECT * from tbl_menu";
          $result= mysqli_query($con,$sql);
        
          while($rows=$result->fetch_assoc()){
                $menuid=$rows['ID'];
                $sql1="SELECT * from tbl_sub where menu_id=$menuid ";
                $result1= mysqli_query($con,$sql1);
                //$row1=$result1->fetch_assoc();
                //print_r($result1); ?>
              <?php
                if($result1->num_rows>0){ ?>
                  <li class="dropdown"><a href="<?php echo $rows['link'];?>"><span><?php echo $rows['menu']; ?></span> <i class="bi bi-chevron-down"></i></a>            
                    <ul>

                    <?php
                    while($row1=$result1->fetch_assoc()){
                    ///print_r($row1);?>
                    
                    
                        <li><a href="clive.php?item=<?php echo $row1['item']; ?>"><?php echo $row1['item']; ?></a></li>
                    <?php } ?>
                    </ul>
                  </li>
                  <?php
                  //echo $row1['item1'];
                  
                }else{ ?>
                  <li><a class="nav-link" href="<?php echo $rows['link'];?>"><?php echo $rows['menu']; ?></a></li>
                  <?php
                }

           } ?>
              <!--<li><a class="nav-link scrollto" href="#header"><?php ///echo $rows['menu']; ?></a></li>-->
           
            
            <li><?php if (isset($_SESSION["uname"])) {?><a href="logout.php" class="getstarted scrollto">Logout</a>
              <?php }else{?> <a class="getstarted scrollto" href="login.php" id="log">Login</a><?php } ?></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>THE NEXT GENERATION OF GAMING</h1>
      <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, debitis!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="row2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="row4.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="roe3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
            <img src="roe3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
            <img src="roe3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
            <img src="roe3.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>
    
    <section class="section latest-game" aria-label="latest game">
      <div class="container">

        <p class="section-subtitle">Upcoming Tournaments</p>

        <h2 class="h2 section-title">
          Register & <span class="span">Play</span>
        </h2>

        <ul class="has-scrollbar" style="display:flex;flex-wrap:wrap;">

        <?php
    
    $sql = "SELECT * FROM tournament";
$result = mysqli_query($con,$sql);

if($result->num_rows>0){
   while($rows = $result->fetch_assoc()){


?>


          <li class="scrollbar-item">
            <!--<div class="card">
              <img src="/esports/<?php echo $rows['image']; ?>" alt="sryyyy">
              <div class="card-content">
                <h2 class="card-title"><span><i class="fa-solid fa-calendar-days" style="color: #63E6BE;"></i></span><?php echo $rows['owner']; ?></h2>
                <h2 class="card-title"><?php echo $rows['start']; ?></h2>
                <h2 class="card-title"><?php echo $rows['end']; ?></h2>
                <a href="login.html" class="register-button">Register</a>
              </div>
            </div>--><div class="card" style="width: 18rem;">
  <img src="/esports/<?php echo $rows['image']; ?>" class="card-img-top" alt="..." style="width: 18.4rem;height: 9rem;">
  <div class="card-body">
    <h5 class="card-title" style="height:auto;text-align: center;"><?php echo $rows['name']; ?></h5>
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Game:  <?php echo $rows['gamename']; ?></li>
  <li class="list-group-item">Type:  <?php echo $rows['type']; ?></li>
    <li class="list-group-item">By:  <?php echo $rows['owner']; ?></li>
    <li class="list-group-item st"><i class="fa-solid fa-calendar-days"></i> Reg Open: <?php echo $rows['start']; ?></li>
    <li class="list-group-item en"><i class="fa-solid fa-calendar-days"></i> Reg Close: <?php echo $rows['end']; ?></li>
    <!--<li class="list-group-item"><button id="mybut" <?php if($disable == true ){echo 'disabled';}?>>Click</button></li>-->
  </ul>
  <div class="card-body">
  <?php if(isset($_SESSION['uname'])){ ?><a href="entry.php?id=<?php echo$rows['ID']?>" class="register-button" onclick="tym()">Register</a><?php }else{ ?>
    <a href="login.php" class="register-button" onclick="tym()">Register</a><?php } ?>
    
  </div>
</div>
          </li>
          <?PHP } }?>

          <!--<li class="scrollbar-item">
            <div class="card">
              <img src="card13.jpg" alt="Placeholder Image">
              <div class="card-content">
                <h2 class="card-title">BGMI</h2>
                <a href="#" class="register-button">Register</a>
              </div>
            </div>
          </li>
          
          <li class="scrollbar-item">
            <div class="card">
              <img src="card14.jpg" style="height: 530px;" alt="Placeholder Image">
              <div class="card-content">
                <h2 class="card-title">FREE FIRE</h2>
                <a href="#" class="register-button">Register</a>
              </div>
            </div>
          </li>-->
          
         

        </ul>

      </div>
    </section>




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>eSPORTS</h3>
            <p>
              No 2, Alagar Nagar, K.Pudur <br>
              Madurai, 625-007<br>
              Tamilnadu India. <br><br>
              <strong>Phone:</strong> +91 90900-90900<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <?php $sql="SELECT * FROM tbl_menu";
 
$result = mysqli_query($con, $sql);
while ($rows = $result->fetch_assoc()) { ?>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo $rows['menu']; ?></a></li><?php } ?>
         <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Live</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Leader Board</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Shop</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Upcoming Tournaments</a></li>-->
        </ul>
      </div>

          <!--<div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>-->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, pariatur?</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>eSPORTS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="#">Hariharan</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  
   
    
  

</body>
<?php
           $sql = "SELECT * FROM tournament";
           $result = mysqli_query($con,$sql);
           $dt = $result->fetch_assoc();
           $end = $dt['end'];
           $disable = false;
           $today = date("Y-m-d");
           if($today>$end){
            $disable = true;
           }
 
          ?>  

</html>