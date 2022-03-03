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
?> <?php include('navigators.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OTP Verification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <style>
     .logins {
  	width: 100px;
  	background-color: lemonchiffon;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: auto auto;
    border-radius: 12px;
    align-content: center;
    margin-bottom: 20%;
}
 </style>
</head>
<body>
<div class="login">
			<h1>Enter Code</h1></br>
            <p style="text-align:center">Enter the confirmation code that has </br> been sent to your phone</p>
			<form action="authenticate.php" method="post" >
                <input type="text" id="otp" name="otp" placeholder="Code" maxlength="6" style="text-align:center" >

					<div class="container-login100-form-btn">
						<button class="logins" id="otp_submit">
							Confirm
						</button>
					</div><div class="container-login100-form-btn">
						<button class="logins" id="otp_resend">
							Resend
						</button>
					</div>
			</form>

		</div>


  <?php include('admin/partials/footer.php'); ?>	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>
	<script>
	$("#verify").click(function(){
		if($('#phone').val()!=''){
			$("#verifyModal").modal('show');
			$.ajax({
						type: "POST",
						url: "otpsms.php",
						data:{
							type: 1,
							phone: $('#phone').val()
						},
						success: function(dataResult){
							/*var dataResult = JSON.parse(dataResult);*/
							if(dataResult.statusCode==200){
								
							}
						}
			});
		}
		else{
			alert("Mobile number can not be blank !");
		}
	});
	$("#otp_submit").click(function(){
		$.ajax({
					type: "POST",
					url: "otpsms.php",
					data:{
						type: 2,
						otp: $('#otp').val()
					},
					success: function(dataResult){
						var dataResult = JSON.parse(dataResult);
						if(dataResult.statusCode==200){
							$("#verifyModal").modal('hide');
							$("#verify").hide();
							$("#verified").show();
							$('#Signup').removeAttr("disabled");
						}
						else{
							alert("Invalid OTP");
							$("#error_msg").html('Invalid OTP !');
						}
					}
		});
	});
	$("#otp_resend").click(function(){
		$.ajax({
					type: "POST",
					url: "otpsms.php",
					data:{
						type: 3,
						phone: $('#phone').val()
					},
					success: function(dataResult){
						var dataResult = JSON.parse(dataResult);
						if(dataResult.statusCode==200){
							$("#resend_msg").html('OTP Resend Successfully !');
						}
					}
		});
	});
	</script>
</body>
</html>