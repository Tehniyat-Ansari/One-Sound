<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php
         include("connection.php"); 
         ?>
      <div>
      <div class="weeks-top-area mb-100" style="background-color:#f5f9fa;border:2px solid #d8d8d8;">
         <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
            <h2>Other Artist</h2>
            <?php 
               if(isset($_GET["id"]))
               {
               $id = $_GET["id"]; 
               $query = "SELECT DISTINCT(artist_name) as artist_name, id, year, a_m, genre, language, picture, song_title, myfile FROM songs GROUP by artist_name;";
               $ab = mysqli_query($con, $query);
               
               while($row = mysqli_fetch_assoc($ab)){
               ?>
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
               <div class="thumbnail">
                  <img src="img/<?php  echo $row["picture"]; ?>" alt="" width="70px" height="70px">
               </div>
               <div class="content-" style="float: left;margin-top: 20px;">
                  <h6><?php echo $row["artist_name"];?></h6>
               </div>
            </div>
            <?php
               }}
               ?>
         </div>
      </div>
   </body>
</html>