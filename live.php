<?php
include ("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esports-Live</title>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<style>
    iframe{
        width: 100%;
        height: 625px;
        border-radius: 2rem;
    }
</style>
<body>
    <?php include('header.php'); ?>
    <section id="counts" class="counts">
        <div class="container" style="text-align:center;">

            <h1 style="font-weight: bold;
    font-size: 4rem;">LIVE</h1>
        </div>
    </section>
    <section class="section latest-game" aria-label="latest game">
      <div class="container">
      <div class="swiffy-slider">
    <ul class="slider-container">
    <?Php 
$sql = "SELECT * FROM live";
$result = mysqli_query($con, $sql);
while ($rows = $result->fetch_assoc()) {
?>
        <li>
       <!-- <iframe src="https://www.youtube.com/embed/Ar_0MsoBnTs?si=O5qHvawWdyy5koLc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

        </iframe>--><?php echo $rows['embedded']; ?>
        </li><?php } ?>
        <!--<li><img src="loginbg.png" style="max-width: 100%;height: auto;"></li>
        <li><img src="loginbg.png" style="max-width: 100%;height: auto;"></li>
        <li><img src="https://source.unsplash.com/E9ZwWcMGzj8/1600x900" style="max-width: 100%;height: auto;"></li>-->
    </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

   <!-- <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>-->
</div>
        
      </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>