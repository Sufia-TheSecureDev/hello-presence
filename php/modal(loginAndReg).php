<!--modal for login and signup-->
<div class="modal fade" id="loginModal">
					<div class="modal-dialog modal-md" >
						<div class="modal-content">
							<div class="modal-header">
								<h3>LogIn Form </h3>
								<button onclick="really()" id="crs"  type="button" class="close" data-dismiss="modal">
									&Cross;
								</button>
							</div>
							<div class="modal-body">
								
						<form action="index_submit" method="POST" accept-charset="utf-8">
				
		
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" name="email">

									</div>
									
						            <div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password">

									</div>
									 <div class="form-group">
            	                        <input class="btn btn-success btn-block" type="submit" name="btn" value="submit" >
                                   </div>

						</form>			

							</div>
							<div class="modal-footer">
								<button onclick="really()" id="crs" type="button" class=" btn btn-warning" data-dismiss="modal">Close</button>
							</div>
		</div>
	</div>
</div>

        <div class="modal fade" id="signUpModal">
					<div class="modal-dialog modal-md" >
						<div class="modal-content">
							<div class="modal-header">
								<h3>signUp Form </h3>
								<button onclick="really()" id="crs" type="button" class="close" data-dismiss="modal">
									&Cross;
								</button>
							</div>
							<div class="modal-body">
								
						<form action="index_submit" method="POST" accept-charset="utf-8">
				
									<div class="form-group">
										<label>First Name</label>
										<input class="form-control" type="text" name="first_name">

									</div>
									<div class="form-group">
										<label>Last Name</label>
										<input class="form-control" type="text" name="lastt_name">

									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" name="email">

									</div>
									
						            <div class="form-group">
										<label>Password</label>
										<input class="form-control" type="password" name="password">

									</div>
									<div class="form-group">
										<label>phone Number</label>
										<input class="form-control" type="number" name="phn_num">

									</div>
									 <div class="form-group">
            	                        <input class="btn btn-success btn-block" type="submit" name="btn" value="submit" >
                                   </div>

						</form>			

							</div>
							<div class="modal-footer">
								<button onclick="really()" id="crs" type="button" class=" btn btn-warning" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>