 <!-- Section: Header -->
 <header class="header" >
      <section class="container-menu-top">
         <div class="wrapper">
               <div class="logo-part">
                  <div class="logo-img" id="main-logo"><img width="400" height="80" src="./images/brand-logo.png" alt=""></div>
                 
                
               </div>
           
            <button type="button" class="burger" id="burger">
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
            </button>
            <span class="overlay" id="overlay"></span>
            <nav class="navbar" id="navbar">
               <button type="button" class="closed-menu" >
                  <i id="closed-menu"  class="fa fa-times" ></i>
               </button>
               <ul class="menu">
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">HOME</a></li>
				  
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active-page';}?>" href="about">ABOUT</a></li>
                  

                   <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='se.php'){echo 'active-page';}?>" href="services">SERVICES</a></li>
				   
                  <li class="menu-item menu-item-child">
                     <a href="#" data-toggle="sub-menu">ROOMS<i class="expand"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="index.php?page=photo_gallery"> Deulxe King</a></li>
                        <li class="menu-item"><a href="index.php?page=video_gallery"> Deulx Twin</a></li>
                      
                     </ul>
                  </li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='notice.php'){echo 'active-page';}?>" href="booking">BOOKING</a></li>
                  
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='contact'){echo 'active-page';}?>" href="index.php?page=contact">CONTACT</a></li>
                  
                 
                
                
               </ul>
            </nav>
         </div>
      </section>
   </header>
   <!-- header section end -->

