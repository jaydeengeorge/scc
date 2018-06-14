
<?php

include 'includes/header.php'; ?>
	
	<h1 class="text-center" style="font-weight: bolder;"> <br/>Customer Complaint Management System.</h1>
	<center>
	
	<div class="index">
		<br><button onclick="document.getElementById('id01').style.display='block'" style="width:10;">Login</button></br>
		
		<br><p1>
			No account? Create Your Safaricom Account.</p1></br>
		<center>
		<br>
		<button onclick="document.getElementById('id02').style.display='block'" style="width:10;">Register</button></center></br>
		
	</div>
	</center>
	<div id="id01" class="modal">
	  <div class="modal-dialog modal-dialog-centered">
	  	<form class="modal-content animate" action="login.php" method="POST">
		<div class="imgcontainer" style="padding: 5px;">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		</div>

		<div class="container">
			<div class="form-group">
				<label class="control-label" for="username">
					<b>Username</b>
				</label>
		  		<input id="username" class="form-control" type="text" placeholder="Enter Username" name="uname" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="password">
					<b>Password</b>
				</label>
	  			<input id="password" class="form-control" type="password" placeholder="Enter Password" name="pass" required>
			</div>

		
		
		</div>

		<div class="form-group text-right pr-2">
		  <button class="btn btn-secondary" type="reset">Reset</button>
		  <button class="btn btn-success" type="submit">Login</button>
		</div>
	  </form>
	  </div>
	  
	</div>
	
	<div id="id02" class="modal">
		<div class="modal-dialog modal-dialog-centered">
		<form class="modal-content animate" action="registration.php" method="POST">
			<div class="imgcontainer" style="padding: 5px;">
			  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>
		<fieldset>
			<center>
			<legend>
				<h1>Easy Registration</h1></legend>
			</center>
			<div class="container">
				<label><b>First Name</b></label> 
				<input type="text" name="f_name" required>
				
				<label><b>Second Name</b></label> 
				<input type="text" name="s_name" required>
				
				<label><b>Email</b></label>
				<input type="text" name="mail" required>
				
				<label><b>Phone Number</b></label>
				<input type="text" name="number" required>
				
				<label><b>Password</b></label>
				<input type="password" name="pass" required>
				<div class="form-group text-right">
					<button class="btn btn-secondary" type="reset" value="RESET">Reset</button>
					<button class="btn btn-success" type="submit" value="SUBMIT">Register</button>
				</div>		
			</div>
			</fieldset>
		</form>
	</div>
	  
	</div>
<?php include 'includes/footer.php';?>
