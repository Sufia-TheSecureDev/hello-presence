<?php include("php/linkAndscript.php"); ?>
 <!--Menu bar-->         
<?php include("php/navbar.php"); ?>

<!-- slider-->		
<div class="row"> 
	<div id="mainSlider" class="carousel slide col-12 slider-height " data-ride="carousel" data-interval="2000"> <!--slide cls diei right to left e pic gula jabe so ami jdi ei slider take r o sundor krte cai tahle ei slide class k modify korbo  -->


       <ol class="carousel-indicators">
       	<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
       	<li data-target="#mainSlider" data-slide-to="1"></li>
       </ol>



		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/bard-road.jpg" class="w-100" height="500" alt="Road">
				<div class="carousel-caption">
					<h3>Road of the BARD</h3>
					<p>This road goes to nilachol pahar .</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/garden.jpg" class="w-100" height="500" alt="Garden">	
				<div class="carousel-caption">
					<h3>Garden of the BARD</h3>
					<p>This garden state in front of BARD .</p>
				</div>			
			</div>
		</div>


		<a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#mainSlider" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

</div>
</div>

<!--search part-->
<div class="row"style="text-align: center;">
	
		<div  class="col-xl-6 col-lg-6 col-md-12 col-sm-12 header-height bg-search-post search-div-1">
			<span class="">Where you want to go?</span>
		</div>
		  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 header-height bg-search-post search-div-2">
			<form action="" method="POST" accept-charset="utf-8">
				
					<select class="division-select" name="divi_select" id="Division_name">
						<option value="">----------Select Division name----------</option>
						<option value="dhaka">Dhaka</option>
						<option value="ctg">Chittagong</option>
						<option value="raj">Rajshahi</option>
						<option value="barishal">Barishal</option>
						<option value="khulna ">Khulna</option>
						<option value="rangpur">Rangpur</option>
						<option value="sylhet">Sylhet</option>
						<option value="mymon">Mymonsingh</option>
					</select>
			
				
            	 <input class="btn btn-danger search-button" type="submit" name="btn" value="Search" >
              
			</form>
		</div>
	
</div>

<!--popular destination-->
<div class="popular-destination-area">
	<div class="container">
		<div class="row popular-destination-center">
			<div class="col-xl-6">
				<div class="text-center mb-62">
					<h2>Popular Places</h2>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-lg-4 col-md-6">
				<div class="card  mb-5">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		        </div>	
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		       </div>	
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		         </div>	
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		         </div>	
		</div>
			<div class="col-lg-4 col-md-6">
				<div class="card">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		 		 </div>	
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card">

					<img class="card-img-top" src="img/garden.jpg" alt="garden">
					
					<div class="card-body">
						<h4 class="card-title">Garden of the BARD</h4>
						<p class="card-text">some content goes here.some content goes here.some content goes here.</p>
						<a href="" class="btn btn-success">Read more....</a>
					</div>

		       </div>	
			</div>
			<div class="col-lg-12 col-md-12">
				<div class="more-place-btn txt-cntr">
					<a href="destinatiion.html" class="btn  h-w">More Places</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--post part -->
<div class="row" style="text-align: center;" >
	
		<div  class="col-xl-6 col-lg-6 col-md-12 col-sm-12 header-height bg-search-post search-div-1">
			<span class="">Post about new places to discover !</span>
		</div>
		  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 header-height bg-search-post search-div-2">
			<form action="" method="POST" accept-charset="utf-8">
				
					
				<input class="check-email " style="color: white;" type="email"  name="email_check_for_post" placeholder="Enter your email .">
			
				
            	 <input class="btn btn-danger search-button" type="submit" name="btn" value="Continue" >
              
			</form>
		</div>
	
</div>

<!--ukti -->
 <section class="add-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-sm-12">
   					<div class="carousel slide" data-ride="carousel" data-interval="1500">
   						<div class="carousel-inner">

   							<div class="carousel-item  carousel-item-padding active">
   								<h3> </h3>
   								<h3 class="home-ukti">Let's enjoy the wonders of nature !</h3>
   							</div>
   						<!-- 	<div class="carousel-item carousel-item-padding">
   								<h3> ukti</h3>
   								<h3>this also a heading</h3>
   							</div>
   							<div class="carousel-item carousel-item-padding ">
   								<h3> this is heading</h3>
   								<h3>this also a heading</h3>
   							</div> -->
   							
   						</div>

   					</div>
   				</div>
   			</div>
   		</div>	

   </section>	


<!-- footer-->
<?php  include('php/footer.php'); ?>

<!--modal for login and signup-->
<?php  include('php/modal(loginAndReg).php'); ?>

