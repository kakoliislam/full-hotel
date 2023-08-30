<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Global site tag (gtag.js) - Google Analytics -->


<!-- this link for tittle favicon-->
	<link rel="shortcut icon" href="./images/site-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/jquery.dataTables.min.css">
	<!--This link is stylesheet-->
	<link rel="stylesheet" type="text/css" href="./css/style.css" media="all" />
   <link rel="stylesheet" href="./css/slider.css">
   <link rel="stylesheet" href="./css/corner-slider.css">
   <link rel="stylesheet" href="css/about.css">
	<!-- gallery_lightbox_cdn -->
	<link rel="stylesheet" type="text/css" href="./css/lightbox.css" media="all" />
	<!--Font Awesome CDN here-->
	<script src="https://use.fontawesome.com/1f84390ee1.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/1f84390ee1.css">
	<!--google font link for this-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Noto+Sans+Bengali&family=Oswald:wght@600&family=Poppins:wght@300;400&family=Roboto:wght@100&family=Tiro+Bangla&display=swap" rel="stylesheet">
	<!--google font link for this-->
    <!-- jquery datatable style cdn -->
  <link rel="stylesheet" href="./css/jquery.dataTables.css">
    
    <title>Home-Hotel Samir International</title>

</head>

<body>

   <!-- header top section Start-->
	<?php
	 require('header_top.php');
	?>
	<!-- header top section End-->

<?php 
require('navbar.php');
?>
<!-- content part start -->
<section class="home" id="home">


  

	  <div class="box swiper-slide">
		 <img src="images/home-img-1.jpg" alt="">
		 <div class="content"> 
			<h1>Fully enjoy your stay with us</h1>
			<a href="" class="btn">Booking Now</a>
		 </div>
	  </div>

	  
   



</section>
<!-- content part end -->

	<?php require('footer.php');?>

  <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

  </script>

   <script src="./js/script.js"></script>
   <script src="./js/custom.slider.js"></script>
</body>

</html>