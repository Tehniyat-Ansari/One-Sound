
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
	 			<h3 class="my-3 mx-4">Bags Wallets Product</h3>


	 			 	<div class="row my-5">
	 		<div class="col-lg-5 col-md-5 mx-5 bg-white">
	 			<div class="row main-pi">
	 				<div class="col-lg-6 pset">
	 					<h5 class="my-3 mx-3">370</h5>
	 					<p class="my-3 mx-3">Total Product</p>

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
             			<input type="text" name="product" placeholder="Product Name" class="form-control">
             			<br>
             		        </div>
             	        </div>
             	        <div class="row">
             	        	<div class="col-lg-6 col-md-6">
             			<input type="text" name="category" disabled value="Bags & Wallets" class="form-control">
             			 <br>
             			 </div>
             			 <div class="col-lg-6 col-md-6">
             			<select class="form-control">
                                    <option >Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                              </select>
             		    <br>
             		     </div>
             	       </div>
             	       <div class="row">
             	       	 <div class="col-lg-4 col-md-4">
             			<input type="number" name="qty" placeholder="Quantity" class="form-control">
             			<br>
             		     </div>
             	       	 <div class="col-lg-4 col-md-4">
             			<select class="form-control">
                                    <option >Select Size</option>
                                    <option>Red</option>
                                    <option>Blue</option>
                              </select>

             		    </div>
                            <div class="col-lg-4 col-md-4">
                              <select class="form-control">
                                    <option >Select Color</option>
                                    <option>Red</option>
                                    <option>Blue</option>
                              </select>

                            </div>
             		</div>
             		<div class="row">
             		<div class="col-lg-3 col-md-3">
             			<input type="text" name="Pri" placeholder="Price" class="form-control">
             			<br> 
             			</div>
                              <div class="col-lg-4 col-md-4">
                              <input type="text" name="brand" placeholder="Brand" class="form-control">
                              <br> 
                              </div>
                        
                              <div class="col-lg-5 col-md-5">
                                    <input type="file" name="filename" class="form-control">
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
