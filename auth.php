<?php 
if(!empty($_POST["login"]) && $_POST["email"]!=''&& $_POST["loginPass"]!='') {	
	$email = $_POST['email'];
	$password = $_POST['loginPass'];
	$password = md5($password);
	$sqlQuery = "SELECT username FROM members WHERE email='".$email."' AND password='".$password."'";
	$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
	$isValidLogin = mysqli_num_rows($resultSet);	
	if($isValidLogin){
		$userDetails = mysqli_fetch_assoc($resultSet);
		$_SESSION["user"] = $userDetails['username'];
		$otp = rand(100000, 999999);
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: support@webdamn.com' . "\r\n";
		$messageBody = "One Time Password for login authentication is:

" . $otp;
		$messageBody = wordwrap($messageBody,70);
		$subject = "OTP to Login";
		$mailStatus = mail($email, $subject, $messageBody, $headers);		
		if($mailStatus == 1) {
			$insertQuery = "INSERT INTO authentication(otp,	expired, created) VALUES ('".$otp."', 0, '".date("Y-m-d H:i:s")."')";
			$result = mysqli_query($conn, $insertQuery);
			$insertID = mysqli_insert_id($conn);
			if(!empty($insertID)) {
				header("Location:verify.php");
			}
		}				
	} else {		
		$errorMessage = "Invalid login!";		 
	}
} else if(!empty($_POST["email"])){
	$errorMessage = "Enter Both user and password!";	
}	
?>