

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>P-Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      <link href="style.css" rel="stylesheet" type="text/css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

     
   </head>
  
   <body >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style >
     body {
       font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
          font-size: 14px;
          line-height: 1.42857143;
       color: #333;
          background-color: #ffffff;
      }
   footer {
      text-align: center;
      padding: 10px;
      background-color: #2f2f2f;
      color: white;
    }

   
   .header {
     grid-area: header;
     padding: 30px;
     text-align: center;
     font-size: 35px;
   }

   /* The grid container */
   
   /* Style the left column */
   .left {
    float: left;
    width: 30%;
    padding: 100px;
    border-radius: 30px;
    margin-left: 400px;
    margin-bottom: 200px;
    margin-top: 75px;
    margin-right: 50px;
   }

   .right {
    float: right;
    width: 30%;
    padding: 100px;
    border-radius: 30px;
    margin-bottom: 200px;
    margin-top: 75px;
    margin-right: 400px;
    margin-left: 50px;
   }
   .grid-container {
  position: relative;

  display: grid;
  align-content: center;
  grid-gap: 20px 1px;
  grid-auto-rows: auto;
  grid-template-columns: auto auto;
  justify-content: space-evenly;
  margin-bottom: 100px;
  padding: 10px;
}
.bg{
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 10px;
}


     </style>


</head>
<body>
<?php include('navigators.php');?>
<div class="header">
    <h2>Sign Up Starts Here</h2>
  </div>
<div class="grid-container" item xs="auto">
  
  <div class="bg" style="background-color:#fff192;">
 
  <div > <label for="customer">
  <a href="registration.php" id="bottle" > <img src="images/customer.png" class="w3-hover-sepia" alt="customer" height="180px";
    width= "150px"> </a></br>
          <div class="bg">Customer</div>
				</label> </div>
  </div>

  <div class="bg" style="background-color:#fff192;">
  <div class="bg"> <label for="owner">
  <a href="owneraddacc.php" id="bottle" ><img src="images/owner.png" class="w3-hover-sepia" alt="customer" height="180px";
    width= "150px"> </a></br>
          <div class="bg">Owner</div>
				</label> </div>
  </div>
  

</div>

</body>
<footer class="container-fluid bg-4 text-center">
  <p>Made By Team Raketship</p> 
</footer>

</html>

