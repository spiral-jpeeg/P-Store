<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'hakdog';
$DATABASE_NAME = 'psdb';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['confirmpassword'], $_POST['birthdate'], $_POST['monthlyIncome'], $_POST['address'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])|| empty($_POST['confirmpassword'])|| empty($_POST['birthdate'])|| empty($_POST['monthlyIncome'])|| empty($_POST['address'])  ) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
//Check for the email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

//Check for Character Length
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT cust_id, password FROM customer WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Email already exists, please choose another!';
	} else {
		// Email doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO customer (firstname,lastname,email, phone,password,birthdate,monthlyIncome,address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['email'], $password, $_POST['email']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
	$from    = 'noreply@yourdomain.com';
	$subject = 'Account Activation Required';
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	// Update the activation variable below
	$activate_link = 'http://yourdomain.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
	$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
	mail($_POST['email'], $subject, $message, $headers);
	echo 'Please check your email to activate your account!';
	header("Location: accReq.php?status=success");
	} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
		}
	}


	

$con->close();}
?>