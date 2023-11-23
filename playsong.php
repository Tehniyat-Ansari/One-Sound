<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php 
         include "connection.php";
         include "header.php";
         
              ?>
      <div style="height: 200px;width: 100%"></div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <?php 
                  if(isset($_GET["id"]))
                  {
                  $id = $_GET["id"]; 
                  $query = "select * from songs where song_title='".$id."'";
                  $ab = mysqli_query($con, $query);
                  
                  while($row = mysqli_fetch_assoc($ab)){
                  ?>
               <img src="img/<?php  echo $row["picture"]; ?>" alt="">
            </div>
            <div class="col-md-6">
               <h4><?php echo $row["song_title"];?></h4>
               <br>
               <h5>Artist:</h5>
               <h6><?php echo $row["artist_name"];?></h6>
               <hr style="border-color: black;">
               <h5>From:</h5>
               <h6><?php echo $row["a_m"];?></h6>
               <hr style="border-color: black;">
               <h5>Release Year:</h5>
               <h6><?php echo $row["year"];?></h6>
               <hr style="border-color: black;">
               <h5>Language:</h5>
               <h6><?php echo $row["language"];?></h6>
               <hr style="border-color: black;">
               <audio preload="auto" controls>
                  <source src="audio/<?php echo $row["myfile"];?>">
               </audio>
            </div>
            <?php } ?>
         </div>
         <div style="height: 200px;width: 100%"></div>
         <div class="col-md-8">
            <h2 style="padding: 10px;background-color: #e0e0d2;">Similar Melodies</h2>
            <?php 
               if(isset($_GET["id"]))
               {
               $id = $_GET["id"]; 
               $query = "select * from songs limit 6";
               $ab = mysqli_query($con, $query);
               
               while($row = mysqli_fetch_assoc($ab)){
               ?>
            <h6>
               <li>
                  <?php echo $row["song_title"];?> By 
                  <p><?php echo $row["artist_name"];?></p>
               </li>
            </h6>
            <?php } ?>
         </div>
      </div>
      <?php }} include("footer.php"); ?>
   </body>
</html>