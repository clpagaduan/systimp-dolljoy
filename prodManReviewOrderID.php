
<?php
require_once('../mysql_connect.php');
$orderID = $_GET['id'];
$sql = "";

 if(isset($_POST['approve'])){
        $id = $_POST['approve'];
        $query = "UPDATE Orders 
                  SET OrderStatus = 'Approved', 
                      ManufacturingStatus = 'Pending', 
                      OPaymentStatus = 'Unpaid', 
                      OShipmentStatus = 'Not shipped' 

                  WHERE OrderID = '{$id}' ";

        mysqli_query($dbc, $query);
    }

if(isset($_POST['reject'])){
    $id = $_POST['reject'];
    $query = "UPDATE Orders SET OrderStatus = 'Rejected' WHERE OrderID = '{$id}' ";
    mysqli_query($dbc, $query);
}

if (!empty($sql)){
    $qu = mysqli_query($dbc, $sql);
}


  
?>

<!doctype html>



    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Review Orders — Order #
            <?php echo $orderID; ?>
        </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet" />

        <!--  Paper Dashboard core CSS    -->
        <link href="assets/css/paper-dashboard.css" rel="stylesheet" />

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/themify-icons.css" rel="stylesheet">

    </head>

    <body>
        
          <form action="prodManCurrentOrders.php" method="post">
           
            <div class="wrapper">
                <div class="sidebar" data-background-color="white" data-active-color="info">

                    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

                    <div class="sidebar-wrapper">
                        <div class="logo">
                            <a href="websiteHome.php" class="simple-text">
                    Dolljoy
                </a>
                        </div>

                        <ul class="nav">
                            <li>
                                <a href="prodManDashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManAccountRequests.php">
                        <i class="ti-user"></i>
                        <p>Account Requests</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManAccountActivations.php">
                        <i class="ti-unlock"></i>
                        <p>Account Activations</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManAddEmployees.php">
                        <i class="ti-id-badge"></i>
                        <p>Add Employees</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManViewAccounts.php">
                        <i class="ti-eye"></i>
                        <p>View Accounts</p>
                    </a>
                            </li>
                            <li class="active">
                                <a href="prodManReviewOrders.php">
                        <i class="ti-search"></i>
                        <p>Review Orders</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManCurrentOrders.php">
                        <i class="ti-layers-alt"></i>
                        <p>Current Orders</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManPaymentShipment.php">
                        <i class="ti-new-window"></i>
                        <p>Payment and Shipment</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManCompletedOrders.php">
                        <i class="ti-agenda"></i>
                        <p>Completed Orders</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManSupplyOrders.php">
                        <i class="ti-shopping-cart-full"></i>
                        <p>Supply Orders</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManAddSuppliers.php">
                        <i class="ti-package"></i>
                        <p>Add Suppliers</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManInventoryManagement.php">
                        <i class="ti-archive"></i>
                        <p>Inventory Management</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManSalesReport.php">
                        <i class="ti-stats-up"></i>
                        <p>Sales Report</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManDollCreation.php">
                        <i class="ti-wand"></i>
                        <p>Doll Creation</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManDollSpecification.php">
                        <i class="ti-paint-bucket"></i>
                        <p>Doll Specification</p>
                    </a>
                            </li>
                            <li>
                                <a href="prodManSpecificationChoices.php">
                        <i class="ti-menu-alt"></i>
                        <p>Specifcation Choices</p>
                    </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="main-panel">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                                <a class="navbar-brand" href="prodManReviewOrders.php">Review Orders</a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-link"></i>
									<p>Website</p>
									<b class="caret"></b>
                              </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="websiteHome.php">Homepage</a></li>
                                            <li><a href="websiteGalleryLoggedIn.php">Gallery</a></li>
                                            <li><a href="websiteServicesLoggedIn.php">Services</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="websiteHome.php">
								<i class="ti-shift-right"></i>
								<p>Logout</p>
                            </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>


                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title"><b>Order #<?php echo $orderID; ?></b> </h4>
                                        </div>
                                        <div class="content table-responsive table-full-width">

                                            <table class="table table-hover">
                                                <?php

require_once('../mysql_connect.php');

if(isset($_POST['approve'])){
        $id = $_POST['approve'];
        $query = "UPDATE Orders 
                  SET OrderStatus = 'Approved', 
                      ManufacturingStatus = 'Pending', 
                      OPaymentStatus = 'Unpaid', 
                      OShipmentStatus = 'Not shipped' 

                  WHERE OrderID = '{$id}' ";

        mysqli_query($dbc, $query);
    }

echo '<font size="2pt">
<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">

<tr>
<td width="10%"><div align="center"><b>Type</div></b></td>
<td width="10%"><div align="center"><b>Description</div></b></td>
<td width="10%"><div align="center"><b>Image</div></b></td>


</tr>';
$queryproduct="SELECT OProductID 
               FROM Orders 
               WHERE OrderID=$orderID";
$resultproduct = mysqli_query($dbc, $queryproduct);
if ($row=mysqli_fetch_array($resultproduct)){
    $productID = $row['OProductID'];
}

                            
                                $query40 = "SELECT p.ProductID, 
                                                  av.ValueName as 'valname', 
                                                  av.ValueImage as 'valimage', 
                                                  a.AttributeName as 'attname', 
                                                  pd.ProductName as 'prodname', 
                                                  pd.ProductType as 'prodtype',
                                                  pd.ProductImage as 'prodImage' 
                                           FROM Product_has_Attribute p 
                                           JOIN AttributeValues av on p.AttributeValueID = av.ValueID 
                                           JOIN Attribute a        on av.AttributeTypeID = a.AttributeID 
                                           JOIN Product pd         on pd.ProductID = p.ProductID 
                                           WHERE p.ProductID = $productID 
                                           ORDER BY a.AttributeName desc";
                                    
                                $result50=mysqli_query($dbc,$query40);

                                echo "<h5><center>Doll specifications</center></h5>";

                                while ($row5=mysqli_fetch_array($result50)){
                                $category = $row5['attname'];
                                $value = $row5['valname'];
                                $image = $row5['valimage'];
                                $display = $row5['prodImage'];
                                    echo "<tr>
                                    <td width=\"10%\"><div align=\"center\">$category</div></td>

                                    <td width=\"10%\"><div align=\"center\">$value</div></td>";
                                
 
                            
                            


?>
                                                    <td width=50%>
                                                        <div align=center><img src=<?php echo '"data:image/jpeg;base64,'.base64_encode( $image ). '" '; ?></div>
                                                    </td>

                                                    <?php
}
                                echo "</table>
                                <br><br>";
?>
                                                        <h5>
                                                            <center>Reference Image</center></h5>
                                                        <?php
  if ($display) {
    
  }
  else{
  
  }
?>
                                                            <td width=50%>
                                                                <div align=center><img src=<?php echo '"data:image/jpeg;base64,'.base64_encode( $display ). '" '; ?></div>
                                                            </td>
                                                            </tr>
                                                            <?php

?>
                                            </table>



                                            <br><br>

                                            <h5>Order details</h5>

                                            <?php

require_once('../mysql_connect.php');


echo '<font size="2pt">
<table width="80%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">

<tr>
<td width="10%"><div align="center"><b>Company</div></b></td>
<td width="10%"><div align="center"><b>Quantity</div></b></td>
<td width="10%"><div align="center"><b>Price</div></b></td>
<td width="10%"><div align="center"><b>Total</div></b></td>
<td width="10%"><div align="center"><b>Date Ordered</div></b></td>
<td width="10%"><div align="center"><b>Date Required</div></b></td>


</tr>';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT *
              FROM   Orders WHERE orderID = '".$id."'; ";
    $result=mysqli_query($dbc,$query);
    $row = mysqli_fetch_array($result);


    $query1 = "SELECT *
              FROM   ClientAccount WHERE CompanyID = '{$row['OCompanyID']}'; ";
    $result1 = mysqli_query($dbc,$query1);
    $rowC = mysqli_fetch_array($result1);



    echo "<tr>
    <td width=\"10%\"><div align=\"center\">{$rowC['CName']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['OQuantity']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['OPrice']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['OTotalAmount']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['OOrderedDate']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['ORequiredDate']}</div></td>

    </tr>";
}


echo '</table>';

?>

                                                <br><br>

                                                <?php


$query="SELECT * from Orders O, ClientAccount C WHERE OrderStatus = 'Pending' AND CompanyID = OCompanyID";
$result=mysqli_query($dbc,$query);


$id=$row['OrderID'];

echo 
"

<button data-toggle=\"modal\" data-target=\"#exampleModal\" type = \"button\"  class=\"btn btn-success btn-fill pull-left\" value=\"".$id."\">APPROVE</button>
<input type = \"hidden\" name =\"id\" class=\"\" value=\"".$id."\">

";
?>


                                                    <?php 
echo 
"
<button data-toggle=\"modal\" data-target=\"#exampleModal1\" type = \"button\" class=\"btn btn-danger btn-fill pull-left\" value=\"".$id."\">REJECT</button>
<input type = \"hidden\" name =\"id\" class=\"\" value=\"".$id."\">


</div></td>
</tr>"; ?>


                                                    <a href="prodManReviewOrders.php"><button type="submit" class="btn btn-default btn-fill pull-right">Back to Review</button></a>


                                                    <br><br><br>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="copyright pull-right">
                                &copy;
                                <script>
                                    document.write(new Date().getFullYear())

                                </script> designed by <a href="http://www.creative-tim.com">Creative Tim</a>
                            </div>
                        </div>
                    </footer>


                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body"> Confirm Order Activation?
                        </div>
                        <div class="modal-footer">

                            
                            
                           <?php


$query="SELECT * from Orders O, ClientAccount C WHERE OrderStatus = 'Pending' AND CompanyID = OCompanyID";
$result=mysqli_query($dbc,$query);


$id=$row['OrderID'];

echo 
"

<button type = \"submit\" name = \"approve\" class=\"btn btn-secondary\" value=\"".$id."\">Confirm</button>
<input type = \"hidden\" name =\"id\" class=\"\" value=\"".$id."\">

";
?> 
                    
                           
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body"> Confirm Order Rejection?
                        </div>
                        <div class="modal-footer">
                       
                            
                            
                              <?php


$query="SELECT * from Orders O, ClientAccount C WHERE OrderStatus = 'Pending' AND CompanyID = OCompanyID";
$result=mysqli_query($dbc,$query);


$id=$row['OrderID'];

echo 
"

<button type = \"submit\" name = \"reject\" class=\"btn btn-secondary\" value=\"".$id."\">Confirm</button>
<input type = \"hidden\" name =\"id\" class=\"\" value=\"".$id."\">

";
?> 
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


    </html>
