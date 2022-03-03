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



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Dashboard</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                            <li><a href="orderReq.php">Request</a></li>
                            <li><a href="order.php">List of Vendor</a></li>
                            <li><a href="deliveryInfo.php">List of Customers</a></li>
                            <li><a href="products.php">Payments</a></li>
                            <li><a href="products.php">Orders</a></li>
                            <li><a href="payments.php">List of Stores</a></li>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <h3> Products </h3>
                    </div>
                </nav>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Add</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Edit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Delete</a>
                            </li>
                        </ul>
                    </div>
                <h2>HADDDDUUUKKKKEEEEENNN</h2>

                <div class="line"></div>

                <h2>HAAAKKKKKDDDDOOOOOOG</h2>
                <div class="line"></div>

                <h2>FIIIISSSSSHHHHHBBBAAAALLLLL</h2>
                <div class="line"></div>

                <h3>KWWWWWEEEEEEKKKKKKKWWWWWEEEEEEKKK</h3>
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
