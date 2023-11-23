<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Add New Song
      </title>
   </head>
   <body>
      <!-- ##### Header Area Include ##### -->
      <?php 
         include("connection.php");
         include "header.php";
         if(isset($_POST["btn"])){
           $artist = $_POST["artist"];
           $a_m = $_POST["a_m"];
           $year = $_POST["year"];
           $songtitle = $_POST["songtitle"];
           $genre = $_POST["genre"];
           $language = $_POST["language"];
           $picture = $_POST["picture"];
           $myfile = $_POST["myfile"];
         
           $query = "insert into songs(artist_name,a_m,year,song_title,genre,language,picture,myfile) values(
           '".$artist."','".$a_m."','".$year."','".$songtitle."','".$genre."','".$language."','".$picture."',
           '".$myfile."')";
         
           $ins = mysqli_query($con,$query);
         
           if($ins)
                 {
                 echo "<script>alert('Song is Sucessfully uploaded')</script>";
                 }
             
                 else{
                 echo "<script>alert('You can not upload sog this time please try later')</script>";
                }
         }
         
         
              ?>
      <!-- ##### Header Area end ##### -->
      <!-- ##### Breadcumb Area Start ##### -->
      <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
         <div class="bradcumbContent">
            <p>Let's Play</p>
            <h2>Welcome Back</h2>
         </div>
      </section>
      <!-- ##### Breadcumb Area End ##### -->
      <section class="login-area section-padding-100">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-8">
                  <div class="login-content">
                     <h3>Upload Songs</h3>
                     <!-- Login Form -->
                     <div class="login-form">
                        <form action="#" method="post">
                           <div class="form-group">
                              <label for="exampleInputName1">Artist:</label>
                              <input type="text" class="form-control" name="artist" aria-describedby="nameHelp" placeholder="Enter Artist Name">
                           </div>
                           <div class="form-group">
                              <labe>
                              Movie/Album:</label>
                              <input type="text" class="form-control" name="a_m" aria-describedby="emailHelp" placeholder="Enter Movie/Album">
                           </div>
                           <div class="form-group">
                              <label f>Year:</label>
                              <input type="text" class="form-control" name="year" placeholder="Enter Year">
                           </div>
                           <div class="form-group">
                              <label >Song Title: </label>
                              <input type="text" class="form-control" name="songtitle" aria-describedby="contact1Help" placeholder="Enter Songs Title">              
                           </div>
                           <div class="form-group">
                              <label >Genre: </label>
                              <input type="text" class="form-control" name="genre" aria-describedby="contact1Help" placeholder="Enter Genre">              
                           </div>
                           <div class="form-group">
                              <label >Language: </label>
                              <input type="text" class="form-control" name="language" aria-describedby="contact1Help" placeholder="Enter language">              
                           </div>
                           <div class="form-group">
                              <label >Display Picture: </label>
                              <input type="file" class="form-control" name="picture" aria-describedby="contact1Help" placeholder="Enter Display Picture">              
                           </div>
                           <div class="form-group">
                              <label >Song File: </label>
                              <input type="file" class="form-control" name="myfile" aria-describedby="contact1Help" placeholder="Enter Songs File">              
                           </div>
                           <button type="submit" name="btn" class="btn oneMusic-btn mt-30">Add Songs </button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### song upload Area End ##### -->
      <?php
         include "footer.php";
         ?>