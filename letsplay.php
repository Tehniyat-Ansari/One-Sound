<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>songs</title>
   </head>
   <style>
      .row{margin-top: 200px;}
      .back{width: 100%;height: 100px;background-color: #f5f9fa;border:2px solid #d8d8d8;transition: 0.5s;margin-top: 10px;}
      .back:hover{background-color: #dee9ed;box-shadow: 8px 8px 8px gray;}
      .back img{width: 70px;height: 70px;margin-top: -30px;margin-left: 8px;border-radius: 50px;}
      .back audio{height: 55px;width: 730px;}
      .back audio source{background-color: green;}
      .back p{margin-left: 10px;}
   </style>
   <body>
      <?php 
         include "connection.php";
         include "header.php";
          ?>
      <div style="height: 70px;width: 100%"></div>
      <div class="container">
      <div class="row">
         <div class="col-md-9">
            <?php 
               $query = "select * from songs";
               $ab = mysqli_query($con, $query);
               while($row = mysqli_fetch_assoc($ab)){
               ?>
            <a href="playsong.php?id=<?php  echo $row["song_title"]; ?>">
               <div class="back">
                  <img src="img/<?php  echo $row["picture"]; ?>" alt="">
                  <audio preload="auto" controls>
                     <source src="audio/<?php echo $row["myfile"];?>">
                  </audio>
                  <p><b><?php echo $row["song_title"];?>
                     &nbsp;By&nbsp;
                     <?php echo $row["artist_name"];?></b>
                  </p>
               </div>
            </a>
            <?php
               }
               ?>
         </div>
         <div class="col-md-3">
         </div>
      </div>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <div style="height: 200px;width: 100%"></div>
      <?php
         include "footer.php";
         ?>
   </body>
</html>