
<?php
	 require_once "linkcss.php";
?>
</head>
<body>
	 <?php
	 require_once "nav1.php";
	 ?>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 box">
	 <?php
	 require_once "header.php";
	 ?>
	 </div>
	 <div class="col-lg-9 col-md-9 mainbox">
	 	<div class="row">
	 		<div class="col-lg-12 col-md-12">
	 			<h3 class="my-3 mx-4">Employees</h3>


	 			 	<div class="row my-5">
	 		<div class="col-lg-5 col-md-5 mx-5 bg-white">
	 			<div class="row main-pi">
	 				<div class="col-lg-6 pset">
	 					<h5 class="my-3 mx-3">370</h5>
	 					<p class="my-3 mx-3">Total Employees</p>

	 				</div>
	 				<div class="col-lg-6 iset">
	 					<i class="fa fa-user my-5"></i>

	 				</div>
	 			</div>

	 			</div>

	 			
             </div>

             <div class="row">
             	<div class="col-lg-12 col-md-12">
             		<form method="post" enctype="multipart/form-data">
             			<div class="row">
             				<div class="col-lg-8 col-md-8 ">
             			<input type="text" name="name" placeholder="Name" class="form-control">
             			<br>
             		        </div>
             	        </div>
             	        <div class="row">
             	        	<div class="col-lg-6 col-md-6">
             			<input type="email" name="email" placeholder="Email" class="form-control">
             			 <br>
             			 </div>
             			 <div class="col-lg-6 col-md-6">
             			<input type="text" name="pass" placeholder="Password" class="form-control">
             		    <br>
             		     </div>
             	       </div>
             	       <div class="row">
             	       	 <div class="col-lg-4 col-md-4">
             			<input type="number" name="contact" placeholder="Phone" class="form-control">
             			<br>
             		     </div>
             	       	 <div class="col-lg-8 col-md-8">
             			<input type="text" name="address" placeholder="address" class="form-control">

             		    </div>
             		</div>
             		<div class="row">
             		<div class="col-lg-3 col-md-3">
             			<input type="text" name="city" placeholder="city" class="form-control">
             			<br> 
             			</div>
             		</div>

             		<input type="submit" class="btn btn-info" name="btn" value="Send">
             		</form>

             	</div>
             </div>

             
	 		</div>

	 </div>
	 </div>


	</div>

</div>




<?php
	 require_once "linkjs.php";
?>
