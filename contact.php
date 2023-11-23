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
           ?>
<!-- ##### Header Area End ##### -->
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
   <div class="bradcumbContent">
      <p>See what’s new</p>
      <h2>Contact</h2>
   </div>
</section>
<br><br><br><br>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Contact Area Start ##### -->
<?php
   if(isset($_POST['btn'])){
   
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];
   
       $to = "tehniyatansari36@mail.com";
   
       $header = "Name: $name \n\n Email: $email \n\n Message:$msg";
   
       mail($to, $subject, $header);
   
       $query = "insert into contact_tb(name, email, subject, message)values('".$name."','".$email."','".$subject."','".$message."')";
       $insert = mysqli_query($con,$query);
       if ($insert) {
           echo "<script>alert('Thank you for contacting us; we appreciate it. :)')</script>";
       }
   else{
   echo "<script>alert('We apologise but we are not reachable at this time. Please try again soon as possible.')</script>";
   }
   
   }
   
   
   
   ?>
<section class="contact-area section-padding-0-100">
   <div class="container">
      <div class="row">
         <div class="col-12">
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
   if(isset($_POST['btn'])){
   
   }
   
   ?>
<!-- ##### Contact Map Start ##### -->
<section class="contact-area section-padding-100-0">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-3">
            <div class="contact-content mb-100">
               <!-- Title -->
               <div class="contact-title mb-50">
                  <h5>Contact Info</h5>
               </div>
               <!-- Single Contact Info -->
               <div class="single-contact-info d-flex align-items-center">
                  <div class="icon mr-30">
                     <span class="icon-placeholder"></span>
                  </div>
                  <p>Karachi , Pakistan</p>
               </div>
               <!-- Single Contact Info -->
               <div class="single-contact-info d-flex align-items-center">
                  <div class="icon mr-30">
                     <span class="icon-smartphone"></span>
                  </div>
                  <p>+92 03698741</p>
               </div>
               <!-- Single Contact Info -->
               <div class="single-contact-info d-flex align-items-center">
                  <div class="icon mr-30">
                     <span class="icon-mail"></span>
                  </div>
                  <p>example@gmail.com</p>
               </div>
               <!-- Contact Social Info -->
               <div class="contact-social-info mt-50">
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-9">
            <!-- ##### Google Maps ##### -->
            <div class="map-area mb-100">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0645632725!2d66.59490461653718!3d25.192146184365377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1669319898820!5m2!1sen!2s" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ##### Contact Map End ##### -->
<?php
   include "footer.php";
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
$dbname = "sound";
$con = mysqli_connect($hostname,$user,$pass,$dbname) or die('error in connection');
?>