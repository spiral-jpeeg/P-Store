<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>P-Store</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="unav.css" rel="stylesheet" type="text/css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 	
	</head>
<body>
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style >
        /* The sidenav */
        .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
        }

        /* Page content */
        .main {
        margin-left: 200px; /* Same as the width of the sidenav */
        }
     </style>
     <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">open</span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
    ...
    </div>
