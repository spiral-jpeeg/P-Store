

<!DOCTYPE html>
<html>
<head>
  <title>P-Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  
</head>
<body >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
     body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
 	 }
     p {font-size: 16px;}
	  .margin {margin-bottom: 45px;}
	  .bg-1 { 
	    background-color: #fff192; /* pastel yellow */
	    color: #474e5d;
	  }
	  .bg-2 { 
	    background-color: #474e5d; /* Dark Blue */
	    color: #ffffff;
	  }
	  .bg-3 { 
	    background-color: #ffffff; /* White */
	    color: #555555;
	  }
    footer {
      text-align: center;
      padding: 10px;
      background-color: #474e5d;
      color: white;
    }
    </style>

<?php include('admin/partials/indexnav.php');?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">What Am I?</h3>
  <img src="images/storepic.jpg" class="img-circle"  alt="store" width="200 px" height="200 px">
  <h3>P-Store your online, convenient and comfortable grocery store.</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Who Am I?</h3>
  <p>P-store is an online store establish and inspired from a sari-sari store. P-Sotre aims to provide easy and comfortable 
    access to a grocery shop through online. It is created due to the lack of opportunities in purchasing goods from a grocery shop in times of pandemic.
    With this, customers especially to those unlucky ones will have a chance to survive in the wild.
  </p>
  
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Facebook</p>
      <img src="birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Twitter</p>
      <img src="birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Instagram</p>
      <img src="birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p>© 2021 P-Store made by Team Raketship</p> 
</footer>

</body>
</html>