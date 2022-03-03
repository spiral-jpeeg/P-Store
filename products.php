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
        <link rel="stylesheet" href="side.css">
    </head>
    <body>
        <header>
            <ul style="margin: 10px;padding: 10px;">
                <li style="display:inline;margin-right: 60%;font-size: 30px;"><a href="">P-STORE</a></li>
                <li style="display:inline;margin: 10px;padding: 10px;"><a href="">Notification</a></li>
                <li style="display:inline;margin: 10px;padding: 10px;"><a href="">Message</a></li>
                <li style="display:inline;margin: 10px;padding: 10px;"><a href="">Logout</a></li>
            </ul>
        </header>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Name of Store</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                            <li><a href="orderReq.php">Order Request</a></li>
                            <li><a href="order.php">List of Orders</a></li>
                            <li><a href="deliveryInfo.php">Delivery Information</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li><a href="payments.php">Payments</a></li>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            
            <style>
                
                /* Create four equal columns that floats next to each other */
                .inside-container{
                    background-color: #fff192;
                    margin: 10px;
                    padding: 10px;
                }

    

                .container h2{
                    padding: 10px;
                    margin-left: 10px;
                    text-align: center;
                }
                .container ul{
                    padding-top: 10px;
                }

                .container li{
                    display: inline;
                }

                .container .allproduct{
                    font-size: 25px;
                    font-style: bold;
                    font-family: Sans-serif;
                }

                .container .button{
                    float: right;
                    padding-right: 20px;
                    padding-left: 20px;
                    margin-right: 10px;
                    padding-top: 4px;
                    border: 2px solid white;
                    text-align; center;
                    background-color: orange;
                    padding-bottom: 2px;
                    color: black;
                }
                
                .container #delete{
                    background-color: red;
                }

                .container .column {
                float: left;
                width: 50%;
                padding: 10px;
                height: 300px; /* Should be removed. Only for demonstration */
                border: 2px solid white; /*Should be removed.Only for demonstration*/
                }

                /* Clear floats after the columns */
                .container .row:after {
                content: "";
                display: table;
                clear: both;
                }
            </style>

            <div class="container">
                <h2>Product</h2>

                <div class="inside-container">
                    <ul>
                        <li><a class="allproduct" href="">All Products</a></li>
                        <li><a class="button" id="delete" href="">Delete</a></li>
                        <li><a class="button" href="">Edit</a></li>
                        <li><a class="button" href="">Add</a></li>    
                    </ul>

                <div class="row">
                    <div class="column">
                        <h2>black</<h2>
                    </div>

                    <div class="column">
                        <h2>blue</h2>
                    </div>
                </div>
                </div>
            </div>
                
        </div>


        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
