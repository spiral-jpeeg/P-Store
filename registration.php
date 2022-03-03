<?php include('admin/partials/indexnav.php'); ?>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script> <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="reg.css" rel="stylesheet" type="text/css">
<style> 
.date{
	width: 100px;
    border: 0px none transparent;
}
input,
label {
    margin: .4rem 0;
}
</style>
<div class="register">
			<h1>Sign-up for a new Account</h1>
			<form action="sendemail.php" method="post" autocomplete="off">
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
				<input type="text" name="phone" placeholder="Mobile Number" id="phone" required>
				<label for="password">
					<i class="fas fa-user-circle"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required><label for="password">
					<i class="fas fa-user-circle"></i>
				</label>
				<input type="password" name="confirmpassword" placeholder="ConfirmPassword" id="conpassword" required>
				<label for="birthdate">
				<i class="fas fa-calendar-alt"></i>
				</label>
										<select name="month">
							<option value="0">Select Month</option>
							<?php
								for( $m = 1; $m <= 12; $m++ ) {
									$num = str_pad( $m, 2, 0, STR_PAD_LEFT );
									$month =  date("F", mktime(0, 0, 0, $m, 1));
									?>
										<option value="<?php echo $num; ?>"><?php echo $month; ?></option>
									<?php
								}
							?>
							</select>
							<select name="day">
							<option value="0">Select Day</option>
							<?php
								for( $a = 1; $a <= 31; $a++ ) {
									?>
										<option value="<?php echo $a; ?>"><?php echo $a; ?></option>
									<?php
								}
							?>
							</select>
							<select name="year">
							<option value="0">Select Year</option>
							<?php
								for( $y = 1990; $y <= 2100; $y++ ) {
									?>
										<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
									<?php
								}
							?>
							</select>
							<br><br>
						
				<label for="monthlyIncome">
				<i class="far fa-money-bill-alt"></i>
				</label>
				<input type="text" name="monthlyIncome" placeholder="monthlyIncome" id="monthlyIncome" required>
				<label for="address">
				<i class="fas fa-address-card"></i>
				</label>
				<input type="text" name="address" placeholder="Address" id="address" required>
				<input type="submit" name="password-reset-token">
			</form>
		</div>
		<script>
			var submit = document.getElementsByTagName('submit')[0];
				submit.onclick = 
                    function myFunction() {
                    window.location.href="accReq.php";  
                    }		
		</script>
	
  <?php include('admin/partials/footer.php'); ?>