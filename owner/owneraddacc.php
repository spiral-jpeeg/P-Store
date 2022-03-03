<?php include('navigators.php'); ?>
<?php
session_start();
if(count($_POST)>0){
	if($_SESSION['OTP']==$_POST['otp']){
		$message="Veified Successfully !";
	}
	else{
		$message="Invalid OTP!";
	}
}
?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="reg.css" rel="stylesheet" type="text/css">
<div class="register">
			<h1>Business Owner Sign Up Form</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label for="firstname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="firstname" placeholder="First Name" id="firstname" required>
				<label for="lastname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="lastname" placeholder="Lastname" id="lastname" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<label for="mobile">
					<i class="fas fa-phone"></i>
				</label>
				<input type="text" name="text" placeholder="Mobile Number" id="phone" required>
				<label for="password">
					<i class="fas fa-user-circle"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required><label for="password">
					<i class="fas fa-user-circle"></i>
				</label>
				<input type="password" name="confirmpassword" placeholder="ConfirmPassword" id="conpassword" required>
				<label for="birthday">
				<i class="fas fa-calendar-alt"></i>
				</label>
				<input type="text" id="birthdate" name="birthdate" placeholder="Birthdate" autocomplete="off">
				<label for="storename">
					<i class="far fa-money-bill-alt"></i>
				</label>
				<input type="text" name="storename" placeholder="Name of the Store" id="storename" required>
				<label for="address">
					<i class="fas fa-address-card"></i>
				</label>
				<input type="text" name="address" placeholder="Home Address" id="address" required>
				<input type="submit" value="Register" id="Signup">
			</form>
		</div>
		<script>
			var submit = document.getElementsByTagName('input')[0];
				submit.onclick = 
                    function myFunction() {
                    window.location.href="accReq.php";  
                    }		
		</script>
		
  <?php include('admin/partials/footer.php'); ?>