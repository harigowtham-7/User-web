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