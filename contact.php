
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/fcti-soft-side.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotact-FCTI SOFTWARE</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/button-style.css">
    <!-- font-awesome cdn -->
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">

</head>

<body>

 <section class="main-content-active-block">
			<!-- contact content start -->
				<section class="contact-content-form">
					<div class="contact-content-form-container">
							<div class="contact-content-form-row">
									<div class="main-card-contact-part">
										<div class="sub-card-content">
											<div class="sub-content">
												<div class="sub-content-head">
													<h2>Leave A Message Here</h2>
													<p>You can send a message here. We are ready for any of your IT cooperation. Thank you for contacting us. I wish you well</p>
												</div>
												<div class="sub-contact-details">
													<h2>Contact Details</h2>
													<ol>
														<li><a href="https://goo.gl/maps/eT58b2X4Z1J7nCoU8" target="blank"><i class="fas fa-map-marker"></i>Old Bus Stand,3rd Floor,Madaripur</a></li>
														<li><a href="tel:+8801928248173" target="blank"><i class="fa fa-phone"></i>+8801928248173</a></li>
														<li><a href="mailto:fctisoftware@gmail.com" target="blank"><i class="fa fa-envelope"></i>fctisoftware@gmail.com</a></li>
														<li><a href="#"><i class="fa fa-clock"></i>Sat-Thu(9:00 AM-8:00 PM)</a></li>
													</ol>
												</div>
											</div>

										</div>
										<div class="sub-card-form">
											<div class="contact-form-box">
											   <label style="color:#e91e63;padding:0px 15px;"><?php if(isset($successmessage)){echo $successmessage; }?></label>
                                                <label style="color:#000000;padding:0px 15px;"><?php if(isset($failmessage)){echo $failmessage; }?></label>

												<form  method="POST">
													<div class="form-in-main">
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="text" class="<?php if(isset($error['sender_name'])){echo 'error_contact';}?>"  id="" placeholder="Enter Your Name" name="sender_name" value="">
																	<i class="fa fa-user"></i>
																</div>
																<div class="input-field-01">
																	<input type="tel" class="<?php if(isset($error['mobile'])){echo 'error_contact';}?>" id="" placeholder="Enter Your Mobile" name="mobile" value="">
																	<i class="fa fa-phone"></i>
																</div>
															</div>
														</div>

														<div class="input-form-group">
														<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class="<?php if(isset($error['email'])){echo 'error_contact';}?>" id="" placeholder="Enter Your Email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="<?php if(isset($error['subject'])){echo 'error_contact';}?>" id="" placeholder="Enter Your Subject" name="subject" value="">
																	<i class="fa fa-envelope-open"></i>
																</div>
															</div>

														</div>

														<div class="input-textarea-part">
														<textarea cols="80" rows="6" class="textarea-field <?php if(isset($error['message'])){echo 'error_contact';}?>" placeholder="Write a message....." name="message" value=""></textarea>
														</div>
														<div class="send-message-btn">
															<input class="submit-btn" type="submit" value="Send Message" name="send_btn">
														</div>
													</div>

														
												</form>
											</div>
										</div>
										
									</div>
							</div>
					</div>

				</section>

		

			<!-- contact content end -->

			<!-- map section start -->
				<section class="contact-page-map">
					
				<iframe style="width:100%; height:600px;border:0;margin-bottom:-7px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.085550363402!2d90.19593031535575!3d23.167077516724394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37556fbd2c70d4cd%3A0x7c31ac942b6ff595!2sFCTI%20SOFTWARE!5e0!3m2!1sen!2sbd!4v1663152032856!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
				</section>

				<!-- map section end -->


</section>


    <!-- main content End part -->
   
	


  

  
   <script src="./js/script.js"></script>
</body>

</html>