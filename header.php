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
   <!--<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>THE NEXT GENERATION OF GAMING</h1>
      <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, debitis!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>--><!-- End Hero -->
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

</body>
</html>