<!DOCTYPE html>
<html lang="en">
   <head>
      <title></title>
   </head>
   <body>
      <!-- ##### Header Area Include ##### -->
      <?php 
         session_start();
         include "connection.php";
         include "header.php";
         session_start();
         if(isset($_SESSION["user"]))
         {
             header("Location:index.php");
         }
         else
         {
         ?>
      <!-- ##### Breadcumb Area Start ##### -->
      <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
         <div class="bradcumbContent">
            <p>See whats new</p>
            <h2>Login</h2>
         </div>
      </section>
      <!-- ##### Breadcumb Area End ##### -->
      <?php
         if(isset($_POST['login'])) {
             $email = $_POST['email'];
             $pass = $_POST['pass'];
             $n_pass = md5($pass);
         
         $select_query = "select * from signup_tb where email='".$email."' and password = '".$n_pass."' ";
         
             $role = "";
             $well = mysqli_query($con, $select_query);
             while($row = mysqli_fetch_assoc($well))
             {
                 $role = $row["role"];
                 $done = mysqli_num_rows($well);
         
             if ($done>=1 && $role==0) 
             {
                 $_SESSION['user']= $email;
                 //echo "Welcome Admin";
                 header('Location: addsongs.php');
             }
             else if ($done>=1 && $role==1) 
             {
                 $_SESSION['user']= $email;
                 //echo "Welcome User";
                 header('Location: index.php');
             }
         else{
             echo "eror";
         }
         }
         }
         ?>
      <!-- ##### Login Area Start ##### -->
      <section class="login-area section-padding-100">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-8">
                  <div class="login-content">
                     <h3>Welcome Back</h3>
                     <!-- Login Form -->
                     <div class="login-form">
                        <form method="post">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail">
                              <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="pass" placeholder="Password">
                           </div>
                           <button type="submit" name="login" class="btn oneMusic-btn mt-30">Login</button>
                           <br/>
                           <br/>
                           <a href="register.php" style="float: left;">Don't have an account</a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ##### Login Area End ##### -->
      <?php
         include "footer.php";
         }
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