<!DOCTYPE html>
<html lang="en">
   <head>
      <title></title>
   </head>
   <body>
      <!-- ##### Header Area Include ##### -->
      <?php 
         include "connection.php";
         include "header.php";
         
         ob_start();
         
             /*if (isset($_POST['login'])) 
             {
              header('Location: index.php');
             }
         else{
               header('Location: logout.php');
         }
         */
         
              ?>
      <!-- ##### Hero Area Start ##### -->
      <section class="hero-area">
         <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
               <!-- Slide Img -->
               <div class="slide-img bg-img" style="background-image: url(img/2.jpg);"></div>
               <!-- Slide Content -->
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="hero-slides-content text-center">
                           <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                           <h2 data-animation="fadeInUp" data-delay="300ms">Beyond Time <span>Beyond Time</span></h2>
                           <a data-animation="fadeInUp" data-delay="500ms" href="letsplay.php" class="btn oneMusic-btn mt-50">Let's Play <i class="fa fa-angle-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
               <!-- Slide Img -->
               <div class="slide-img bg-img" style="background-image: url(img/3.webp);"></div>
               <!-- Slide Content -->
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="hero-slides-content text-center">
                           <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                           <h2 data-animation="fadeInUp" data-delay="300ms">One Sound<span>One Sound</span></h2>
                           <a data-animation="fadeInUp" data-delay="500ms" href="letsplay.php" class="btn oneMusic-btn mt-50">Let's Play <i class="fa fa-angle-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Buy Now Area Start ##### -->
      <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <div class="section-heading style-2">
                     <p>See what’s new</p>
                     <h2>Latest Albums</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- Single Album Area -->
               <?php 
                  $query = "SELECT DISTINCT(artist_name) as artist_name, id, year, a_m, genre, language, picture, song_title, myfile FROM songs GROUP by artist_name;";
                  
                  $ab = mysqli_query($con, $query);
                  
                  while($row = mysqli_fetch_assoc($ab))
                  {
                      //echo $row["artist_name"];
                  
                  
                  ?>
               <style>
                  .single-album:hover{box-shadow: 8px 8px 8px grey;}
               </style>
               <a href="song-detail.php?id=<?php  echo $row["artist_name"]; ?>">
                  <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                     <div class="single-album">
                        <img src="img/<?php  echo $row["picture"]; ?>" alt="">
                        <div class="album-info">
               <a href="#">
               <h5><?php  echo $row["artist_name"]; ?></h5>
               </a>
               <p><?php  echo $row["a_m"]; ?></p>
               </div>
               </div>
               </div>
               </a>
               <?php } ?>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="load-more-btn text-center mt-70">
                     <a href="addsongs.php" class="btn oneMusic-btn">Add More Song's<i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <!-- ##### Buy Now Area End ##### -->
      <!-- ##### Featured Artist Area Start ##### -->
      <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
         <div class="container">
            <div class="row align-items-end">
               <div class="col-12 col-md-5 col-lg-4">
                  <div class="featured-artist-thumb">
                     <?php 
                        $date = date('Y');
                            $query = "select * from songs where year='".$date."'";
                            $ab = mysqli_query($con,$query);
                            $row = mysqli_fetch_assoc($ab);
                            if($row){
                            ?>
                     <img src="img/<?php echo $row["picture"] ;?>"> 
                  </div>
               </div>
               <div class="col-12 col-md-7 col-lg-8">
                  <div class="featured-artist-content">
                     <!-- Section Heading -->
                     <div class="section-heading white text-left mb-30">
                        <h2><?php echo $row["artist_name"];  ?></h2>
                     </div>
                     <p>There are many artists who have gained popularity for posting a brand new completed work of art daily and they’ve managed to keep this up for years. While it’s an incredibly impressive feat and this recognition of their talent is often well deserved, this is not a realistic expectation for many artists. Don’t pressure or overwork yourself to be this prolific if you simply can’t make new pieces this quickly due to time constraints, the labor-intensive nature of your work, the cost of materials, something else, or a combination of reasons.</p>
                     <div class="song-play-area">
                        <div class="song-name">
                           <p><?php echo $row["song_title"] ;?></p>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/<?php echo $row["myfile"] ;?>">
                        </audio>
                        <?php 
                           }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Featured Artist Area End ##### -->
      <!-- ##### Miscellaneous Area Start ##### -->
      <section class="miscellaneous-area section-padding-100-0">
         <div class="container">
            <div class="row">
               <!-- ***** Weeks Top ***** -->
               <div class="col-12 col-lg-4">
                  <div class="weeks-top-area mb-100">
                     <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>This week’s top</h2>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t1.webp" alt="">
                        </div>
                        <div class="content-">
                           <h6>Neha Kakkaar</h6>
                           <p>Singer</p>
                        </div>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t2.jpg" alt="">
                        </div>
                        <div class="content-">
                           <h6>Sunakha Jawai</h6>
                           <p>Pop Song's</p>
                        </div>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t3.jpg" alt="">
                        </div>
                        <div class="content-">
                           <h6>Str8 Vibin</h6>
                           <p>My Music</p>
                        </div>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t4.webp" alt="">
                        </div>
                        <div class="content-">
                           <h6>Arijit Singh</h6>
                           <p>Singer</p>
                        </div>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t5.webp" alt="">
                        </div>
                        <div class="content-">
                           <h6>Kaka</h6>
                           <p>Singer</p>
                        </div>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t6.webp" alt="">
                        </div>
                        <div class="content-">
                           <h6>B Praak</h6>
                           <p>Pop Songs</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ***** New Hits Songs ***** -->
               <div class="col-12 col-lg-4">
                  <div class="new-hits-area mb-100">
                     <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>New Hits</h2>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t1.webp" alt="">
                           </div>
                           <div class="content-">
                              <h6>Sam Smith</h6>
                              <p>Underground</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t2.jpg" alt="">
                           </div>
                           <div class="content-">
                              <h6>Power Play</h6>
                              <p>In my mind</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t2.jpg" alt="">
                           </div>
                           <div class="content-">
                              <h6>Cristinne Smith</h6>
                              <p>My Music</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t3.jpg" alt="">
                           </div>
                           <div class="content-">
                              <h6>The Music Band</h6>
                              <p>Underground</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t4.webp" alt="">
                           </div>
                           <div class="content-">
                              <h6>Creative Lyrics</h6>
                              <p>Songs and stuff</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                     <!-- Single Top Item -->
                     <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                        <div class="first-part d-flex align-items-center">
                           <div class="thumbnail">
                              <img src="img/bg-img/t5.webp" alt="">
                           </div>
                           <div class="content-">
                              <h6>The Culture</h6>
                              <p>Pop Songs</p>
                           </div>
                        </div>
                        <audio preload="auto" controls>
                           <source src="audio/dummy-audio.mp3">
                        </audio>
                     </div>
                  </div>
               </div>
               <!-- ***** Popular Artists ***** -->
               <div class="col-12 col-lg-4">
                  <div class="popular-artists-area mb-100">
                     <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>Popular Artist</h2>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/t6.webp" alt="">
                        </div>
                        <div class="content-">
                           <p>Sam Smith</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa2.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>William Parker</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa3.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>Jessica Walsh</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa4.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>Tha Stoves</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa5.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>DJ Ajay</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa6.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>Radio Vibez</p>
                        </div>
                     </div>
                     <!-- Single Artist -->
                     <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
                        <div class="thumbnail">
                           <img src="img/bg-img/pa7.jpg" alt="">
                        </div>
                        <div class="content-">
                           <p>Music 4u</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Miscellaneous Area End ##### -->
      <!-- ##### Contact Area Start ##### -->
      <?php
         include "connection.php";
         
         
         
         if(isset($_POST['btn'])){
         
             $name = $_POST['name'];
             $email = $_POST['email'];
             $subject = $_POST['subject'];
             $message = $_POST['message'];
         
             $query = "insert into contact_tb(name, email, subject, message)values('".$name."','".$email."','".$subject."','".$message."')";
             $insert = mysqli_query($con,$query);
             if ($insert) {
                 echo "Thank You For Contact ";
             }
         else{
         echo "Contact Fails";
         }
         
         }
         
         
         
         ?>
      <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                     <p>See what’s new</p>
                     <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <!-- Contact Form Area -->
                  <div class="contact-form-area">
                     <form action="#" method="post">
                        <div class="row">
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="name" placeholder="Name">
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <input type="email" class="form-control" name="email" placeholder="E-mail">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="subject" placeholder="Subject">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                              </div>
                           </div>
                           <div class="col-12 text-center">
                              <button class="btn oneMusic-btn mt-30"  name="btn" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Contact Area End ##### -->
      <?php
         include "footer.php";
         ob_flush();
         ob_end_clean();
         ?>
      <!-- ##### All Javascript Script ##### -->
      <!-- jQuery-2.2.4 js -->
      <script src="js/jquery/jquery-2.2.4.min.js"></script>
      <!-- Popper js -->
      <script src="js/bootstrap/popper.min.js"></script>
      <!-- Bootstrap js -->
      <script src="js/bootstrap/bootstrap.min.js"></script>
      <!-- All Plugins js -->
      <script src="js/plugins/plugins.js"></script>
      <!-- Active js -->
      <script src="js/active.js"></script>
   </body>
</html>