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
            

            <div class="container">
               <h2 style="text-align: center; margin:10px; paddng:10px;">Order Request</h2>
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
