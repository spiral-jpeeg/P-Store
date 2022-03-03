<!DOCTYPE html>
<html>
<head>
<title> P-Store </title>
</head>
<?php include('navigators.php'); ?>
<style>
     .logins {
  	width: 100px;
  	background-color: lemonchiffon;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: auto auto auto auto;
    border-radius: 12px;
    align-content: right;
    margin-bottom: 5%;
    margin-right: 5%;
    }
    .login {
  	width: 500px;
  	background-color: #fff192;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 120px auto;
    border-radius: 12px;
    }
    .login input {
        margin-bottom: 5%;
        align-content: left;
        margin-right: 30%;
    }
 
    .pars p {
        width: 100%;
        margin-left: 10%;
    }

  .login form input[type="text"] {
    width: 310px;
    height: 100px;
    border: 1px solid #dee0e4;
    margin-bottom: 60px;
    margin-left: 8%;
    padding: 1 15px;
    margin-top: 0%;
    }
 </style>
<body>
<div class="login">
			<h1>Confirm Your Identity</h1></br>
            <p style="text-align:center">Please Upload a  copy of government-issued photo ID </br>
             so we can confirm the information on your account</p></br> <p>&ensp;&ensp;&ensp;&ensp; <b>Your ID</b></p>
			<form  method="post" enctype="multipart/form-data"> 
            <input type="file" name="file" /> 
            <div class="pars">
            <p><b> Additional Info </b></p>
            <input type="text" name="moreinfo" placeholder="Enter additional information if applicable" id="moreinfo" required>
            </div>  <button class="logins" type="submit" name="upload">Send</button>
			</form>

		</div>
</body>
</html>
<?php include('admi
n/partials/footer.php'); ?>	

<?php
include_once 'database.php';
if(isset($_POST['upload']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysqli_query($conn,$sql);
  
 
  echo "File sucessfully upload";
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>