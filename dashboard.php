<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>P-Store</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="">

        <style>
            * {box-sizing: border-box}

            body {font-family: Arial, Helvetica, sans-serif;}

            .navbar {
            width: 100%;
            background-color: #fff192;
            overflow: auto;
            }

            .navbar a {
            float: right;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
            color: black;
            align: right;
            }

            .navbar a:last-child{
                float: left;
            }

            .navbar a:hover {
            background-color: #FDE600;
            }

        }

        </style>
    </head>
    
    <body>
        <div id="container">
           
            <?php include('admin/partials/ownernav.php'); ?>
            


        </div>
    </body>
</html>
