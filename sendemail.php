<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'C:/xampp/htdocs/PHPMailer-master/PHPMailer-master/src/Exception.php';
 require 'C:/xampp/htdocs/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
 require 'C:/xampp/htdocs/PHPMailer-master/PHPMailer-master/src/SMTP.php';
 require 'C:/xampp/htdocs/PHPMailer-master/PHPMailer-master/src/OAuth.php';
 require 'C:\xampp\phpMyadmin\vendor\autoload.php';


$mail = new PHPMailer(TRUE);
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    if ($_POST['day']==0 or $_POST['month']==0 or $_POST['year']==0){
        echo "Please Complete the Birthday Selection";
        }
        else{
           
            $m=$_POST['month'];
            $d=$_POST['day'];
            $y=$_POST['year'];
            $date=$y.'-'.$m.'-'.$d;
         }
       $token = md5($_POST['email']).rand(10,9999);
       $conn = mysqli_connect("localhost","root","","psdb");
        mysqli_query($conn, "INSERT INTO customer(firstname, lastname, email, phone, password,birthdate, monthlyIncome, address, email_verification_link) VALUES('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . md5($_POST['password']) . "','$date','" . $_POST['monthlyIncome'] . "', '" . $_POST['address'] . "','" . $token . "')");
        $mail->Mailer   = "smtp";
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        $mail->SMTPAuth = true;                  
        $mail->Username = "arquide16@gmail.com";
        $mail->Password = "pistengyawa";
        $mail->SMTPSecure = "ssl";  
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "465";
        $mail->From='arquide16@gmail.com';
        $mail->FromName='P-Store';

        include "database.php";
        require_once('C:\xampp\phpMyadmin\vendor\autoload.php');
        $stmt = mysqli_query("SELECT firstname, email FROM customer WHERE birthdate=$date ");
        $fetch = mysql_fetch_array($stmt);
        $mail->addAddress($stmt); 
        $sql = "SELECT * FROM customer";
        if($res = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($res) <= 0){
     
        $row= mysqli_num_rows($res);
        
      
            $fetch = mysql_fetch_array($stmt);
            $mail->Body    = $body;
            $test_patt ="/(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
                //comapare using preg_match_all() method 
                preg_match_all($test_patt, $Email, $valid);
                
                //display list of emails
                foreach($valid[0] as $Email){
                echo $Email."<br> ";
                }
            $mail->addAddress($stmt); 


            if(!$mail->send())
                echo "There has been a mail error sending to " . $row["email"] . "<br>";
                else  
                echo "Email Sent successfully!";
        }
      }
    }
?>