<?php
   include "link.php";
   ob_start();
   ?>
<body>
   <!-- ##### Header Area Start ##### -->
   <!-- Preloader 
      <div class="preloader d-flex align-items-center justify-content-center">
          <div class="lds-ellipsis">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div> -->
   <header class="header-area">
      <!-- Navbar Area -->
      <div class="oneMusic-main-menu">
         <div class="classy-nav-container breakpoint-off">
            <div class="container">
               <!-- Menu -->
               <nav class="classy-navbar justify-content-between" id="oneMusicNav">
                  <!-- Nav brand -->
                  <a href="index.php" class="nav-brand mr-10"><img src="img/core-img/logo.png" alt=""></a>
                  <div class="main">
                     <input type="search" name="" placeholder="Search" >
                     <!--<a href="#"><i class="fa fa-search"style="color: white; font-size: 20px;"></i></a>-->
                  </div>
                  <!-- Navbar Toggler -->
                  <div class="classy-navbar-toggler">
                     <span class="navbarToggler"><span></span><span></span><span></span></span>
                  </div>
                  <!-- Menu -->
                  <div class="classy-menu">
                     <!-- Close Button -->
                     <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                     </div>
                     <!-- Nav Start -->
                     <div class="classynav">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li>
                              <a href="#">Categories</a>
                              <ul class="dropdown">
                                 <li>
                                    <a href="albums-store.php">Year</a>
                                    <ul class="dropdown">
                                       <?php 
                                          $query = "SELECT DISTINCT(year) from songs order by year desc limit 6";
                                                          $ab = mysqli_query($con, $query);
                                                          while($row = mysqli_fetch_assoc($ab))
                                                           {
                                                         ?>
                                       <li><a href="categories.php?id=<?php  echo $row["year"]; ?>"><?php  echo $row["year"]; ?></h5></a></li>
                                       <?php } ?>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="event.php">Language</a>
                                    <ul class="dropdown">
                                       <?php 
                                          $query = "SELECT DISTINCT(language) from songs order by language desc limit 6";
                                            $ab = mysqli_query($con, $query);
                                          while($row = mysqli_fetch_assoc($ab))
                                             {
                                             ?>
                                       <li><a href="categories.php?id=<?php  echo $row["language"]; ?>"><?php  echo $row["language"]; ?></h5></a></li>
                                       <?php } ?>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="#">Genre</a>
                                    <ul class="dropdown">
                                       <?php 
                                          $query = "SELECT DISTINCT(genre) from songs order by genre desc limit 6";
                                            $ab = mysqli_query($con, $query);
                                          while($row = mysqli_fetch_assoc($ab))
                                             {
                                             ?>
                                       <li><a href="categories.php?id=<?php  echo $row["genre"]; ?>"><?php  echo $row["genre"]; ?></h5></a></li>
                                       <?php } ?>
                                    </ul>
                                 </li>
                              </ul>
                              <!----catagory closed-->
                           </li>
                           <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <!-- Login/Register --> 
                        <ul class="nav mr-80">
                           <li class="nav-item">
                              <?php
                                 if(isset($_SESSION["user"]))
                                 {
                                     echo '<a class="nav-link" data-bs-toggle="dropdown" href="login.php">Login</a>';
                                 }
                                 else {
                                 echo '<a class="nav-link" data-bs-toggle="dropdown" href="login.php">Login</a>
                                 </li>
                                 <li><a href="register.php">SignUp</a></li>';
                                 }
                                 ?>
                        </ul>
                        <!--<div class="login-register-cart-button d-flex align-items-center">-->
                        <!-- Login/Register -->
                        <!--<div class="login-register-btn mr-80">
                           <a href="login.php" id="loginBtn">Login Register</a>
                           </div>-->
                        <!-- Cart Button -->
                        <!-- <div class="cart-btn">
                           <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                           </div>
                           </div>-->
                     </div>
                     <!-- Nav End -->
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>