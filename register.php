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
         session_start();
         ?>
      <!-- ##### Header Area end ##### -->
      <!-- ##### Breadcumb Area Start ##### -->
      <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
         <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>SignUp</h2>
         </div>
      </section>
      <!-- ##### Breadcumb Area End ##### -->
      <!-- ##### Signup Area Start ##### -->
      <?php
         if (isset($_POST['signup'])) {
             $name = $_POST['name'];
             $email = $_POST['email'];
             $password = $_POST['password'];
             $new_pass = md5($password);
             $contact = $_POST['contact'];
             $abc = "select * from signup_tb where email='".$email."'";
             $xyz = mysqli_query($con,$abc);
             $num = mysqli_num_rows($xyz);
         if($num>0){
              echo '<script>alert("This email is alredy exist please enter another one");</script>';
             }
         else{
          $query = "insert into signup_tb(name,email,password,contact, role)
          values('".$name."','".$email."','".$new_pass."','".$contact."', '1')";
          $do = mysqli_query($con,$query);
          $_SESSION["user"] = $email;
         if ($do)
          header("Location:login.php");
          //echo "<script>alert('Registration Successfully');</script>";
         else
          echo "<script>alert('Error');</script>";
         }
         }
         ?>
      <section class="login-area section-padding-100">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-8">
                  <div class="login-content">
                     <h3>Welcome Back</h3>
                     <!-- Login Form -->
                     <div class="login-form">
                        <form action="#" method="post">
                           <div class="form-group">
                              <label for="exampleInputName1">Your Name</label>
                              <input type="name" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Your Email </label>
                              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail">
                              <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Your Password</label>
                              <input type="password" class="form-control" name="password" placeholder="Password">
                              <small id="passHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputContact1">Your Contact </label>
                              <input type="contact" class="form-control" name="contact" aria-describedby="contact1Help" placeholder="Enter Contact">
                           </div>
                           <button type="submit" name="signup" class="btn oneMusic-btn mt-30">Signup</button>
                           <br/>
                           <br/>
                           <a href="login.php" style="float: left;">already have an account</a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### signup Area End ##### -->
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