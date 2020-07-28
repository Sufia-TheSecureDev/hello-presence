<?php include("php/linkAndscript.php"); ?>
 <!--Menu bar-->         
<?php include("php/navbar.php"); ?>

        

<!--img for contact-->
<div class="contact-bg bg-height">
	<div class="container">
		<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="contact-bg-text ">
			<h1>Contact</h1>
			<p>hellooPresence@gmail.com</p>
		</div>
	</div>
    </div>
</div>
</div>

<!--contact-->
<div class="row p-5">
	<div class="col-12 "><h2><strong> Get in Touch</strong></h2></div>
		
		
	<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mr-5">
		<form class="" action="" method="POST" accept-charset="utf-8">
			<div class="row">
				<div class="col-12 ">
					<div class="form-group">
						<textarea class="form-control w-100" name="contact_msg" cols="30" rows="7" id="message" placeholder="Enter Message"></textarea>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12  m-0 p-0">
					<div class="form-group">
						<input class=" wd p-3" type="text" name="contact_user_name" placeholder="Enter your Name.">
				    </div>
				</div>
				<div class="col-md-6 col-sm-12  m-0 p-0">
					<div class="form-group">
					<input class=" p-3 w-100" type="email" name="contact_user_mail" placeholder="Enter your email">
					 </div>
				</div>
				<div class="col-12">
					<div class="form-group">
					<input class="w-100 p-3 mb-3" type="text" name="contact_user_sub" placeholder="Subject">
					 </div>
				</div>
				<div class="col-2 mb-5  m-0 p-0">
				     <input class="btn btn-danger search-button" type="submit" name="btn" value="Send" >
			  </div>
			</div>

			
		</form>
		</div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 m-0 p-0">
		<div class="media contact-info">
			 <span class="contct-info-icn">
				<i class="fas fa-home"></i>
			</span>
			<div class="media-bdy">
				<h5>ctg,Bangladesh</h5>
				<p class="media-bdy-p">jail road,kotowali.</p>
			</div>
		</div>
		<div class="media contact-info">
			<span class="contct-info-icn">
				<i class="fas fa-phone"></i>
			</span>
			<div class="media-bdy">
				<h5>+8801822414574</h5>
				<p class="media-bdy-p">Sun to Sat 10am to 6pm</p>
			</div>
		</div>
		<div class="media contact-info">
			<span class="contct-info-icn">
				<i class="fas fa-envelope"></i>
			</span>
			<div class="media-bdy">
				<h5>hellooPresence@gmail.com</h5>
				<p class="media-bdy-p">Send us your query anytime!</p>
			</div>
		</div>
	</div>
	
	
</div>

<!-- footer-->
<?php  include('php/footer.php'); ?>

<!--modal for login and signup-->
<?php  include('php/modal(loginAndReg).php'); ?>