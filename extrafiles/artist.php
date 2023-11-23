<!DOCTYPE html>
<html lang="en">
   <head>
   </head>
   <body>
      <!-- ##### Header Area Include ##### -->
      <?php 
         include "connection.php";
         include "header.php";
         
              ?>
      <!-- ##### Breadcumb Area Start ##### -->
      <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
         <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Artist's</h2>
         </div>
      </section>
      <!-- ##### Breadcumb Area End ##### -->
      <?php 
         $query = "select * from songs";
         
         $ab = mysqli_query($con, $query);
         
         while($row = mysqli_fetch_assoc($ab))
         {
         
         
         ?>
      <!-- ##### Artist Area Start ##### -->
      <a href="song-detail.php?id=<?php  echo $row["id"]; ?>">
         <section class="events-area section-padding-100">
            <div class="container">
               <div class="row">
                  <!-- Single Event Area -->
                  <div class="col-12 col-md-6 col-lg-4">
                     <div class="single-event-area mb-30">
                        <div class="event-thumbnail">
                           <img src="img/<?php  echo $row["picture"]; ?>" alt="">
                        </div>
                        <div class="event-text">
                           <h4><?php  echo $row["artist_name"]; ?></h4>
                           <div class="event-meta-data">
                              <p><?php  echo $row["a_m"]; ?></p>
                           </div>
      <a href="#" class="btn see-more-btn">See Artist</a>
      </div>
      </div>
      </div>
      </a>
      <?php
         }
         
         ?>
      </div>
      </div>
      </section>
      <!-- ##### Artist Area End ##### -->
   </body>
</html>