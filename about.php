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
    
    <title>About-Hotel Samir International</title>

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
<div class="about-section">
                  <div class="about-row">

				  </div>
                    <div class="col">
                      <img src="images/mission.jpg" alt="">
                    </div>
                  
                    <div class="col">
                   
                      <h2>WELCOME TO HOTEL SAMIR</h2>
                     
                      <p>My mission is to make the hotel system of Bangladesh world class. So that we can keep pace with developed countries. Our main objective is to modernize the hotel business in Madaripur district. So that people from far away can come to Madaripur district and get good service</p>
                   

                    
                  </div>
 <div class="about-section">
                  <div class="about-row">
                  
                    <div class="col">
                   
                      <h2>OUR MISSION & VISSION</h2>
                     
                      <p>My mission is to make the hotel system of Bangladesh world class. So that we can keep pace with developed countries. Our main objective is to modernize the hotel business in Madaripur district. So that people from far away can come to Madaripur district and get good service</p>
                   

                    </div>
                    <div class="col">
                      <img src="images/mission.jpg" alt="">
                    </div>
                    
                  </div>
				  

<!-- content part end -->

	<?php require('footer.php');?>

  <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );








   <script src="./js/script.js"></script>
</body>

</html>