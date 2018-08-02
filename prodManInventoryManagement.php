<?php
require_once('../mysql_connect.php');
$sql = "";
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');
if (isset($_POST['accept'])){
	$id=$_POST['id'];
	$sql = "UPDATE Supplies SET DateReceived = '".$date."' WHERE SupplyID = " . $_POST['id'];
    echo "<div class='alert alert-success' align='center'>
  <strong>Product Recieved!</strong></div>
    ";
}

if (!empty($sql))
	$qu = mysqli_query($dbc, $sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Inventory Management</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<form action ="prodManInventoryManagement.php" method="post">
<<<<<<< HEAD
    <div class="modal fade" id="receiveModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inventory Management</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> Confirm RECEIVE supply?
      </div>
      <div class="modal-footer">
          <button type="submit" name="accept" onclick="Alert()" class="btn btn-secondary">CONFIRM</button>
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
=======

     <div class="modal fade" id="receiveModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content">
     
      <div class="modal-body"> 
            Confirm RECEIVE supply?
      </div>
      <div class="modal-footer">
          
            <button type="submit" name="accept" onclick="Alert()" class="btn btn-secondary">  CONFIRM
            </button>
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">   CANCEL
            </button>
>>>>>>> a7bf82600c17491d3a03282ba2ec6e2278226c3d
      </div>
    </div>
  </div>
</div>
<<<<<<< HEAD
=======

>>>>>>> a7bf82600c17491d3a03282ba2ec6e2278226c3d
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
                <li>
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
                <li class="active">
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
                    <button type="button"  class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="prodManInventoryManagement.php">Inventory Management</a>
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
                        </li><li>
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
                        
                            <p class="category">   Select a button to do a specific task</p>


            <button type = "submit" name = "receiveSupplies" class = "btn btn-info">Receive Supplies</button>
            <button type = "submit" name = "viewStocks" class = "btn btn-info">View Stocks</button>

            <button type = "submit" name = "viewInventory" class = "btn btn-info">Order List</button>



                                <br>

                           

                            <div class="content table-responsive table-full-width">
                                <table id="myTable" class="table table-hover">

                                  <?php  
    
                                    if (isset($_POST['receiveSupplies']))
    
                                    { echo "  <center><p class=\"category\"><b>Listed below are UNRECEIVED stock supplies DOLLJOY has ordered. 
                                <br> Click on RECEIVE once
                             supply has been accumulated.</b></p></center>";



                           
                            $query="SELECT SupplyID, SupplyType, DateOrdered,SupplierCountry, SupplyQuantity, Suppliers.SupplierName AS 'Supplier', SupplierContactNum FROM Supplies S INNER JOIN Suppliers ON S.SupplierID=Suppliers.SupplierID WHERE `DateReceived` IS NULL";
                            $result=mysqli_query($dbc,$query);
                            
                            
                            $query2="SELECT SupplyID FROM Supplies WHERE `DateReceived` IS NULL";
                            $result2=mysqli_query($dbc,$query2);
                            $result3 = $result2->num_rows;
                            


                            if ($result3 >=0){
                            echo 

                             "<input id=\"myInput\" type=\"search\" onkeyup=\"search();\" name = \"searchSupply\" class=\"form-control col-sm-2\" placeholder=\"Looking for...\"> </div>
                                    <tr>
                                        <th onclick=\"sortTable(0)\"><p class=\"category\"><div align=\"center\"><b>ITEM SUPPLIED</b></p></div></th>
                                        <th onclick=\"sortTable(1)\"><p class=\"category\"><div align=\"center\"><b>DATE ORDERED</b></p></div></th>
                                        <th onclick=\"sortTable(2)\"><p class=\"category\"><div align=\"center\"><b>SUPPLIER NAME</b></p></div></th>
                                        <th onclick=\"sortTable(3)\"><p class=\"category\"><div align=\"center\"><b>SUPPLIER SOURCE</b></p></div></th>
                                        <th onclick=\"sortTable(4)\"><p class=\"category\"><div align=\"center\"><b>QUANTITY IN KG</b></p></div></th>
                                        <th onclick=\"sortTable(5)\"><p class=\"category\"><div align=\"center\"><b>CONTACT NUMBER</b></p></div></th>
                                        <th><p class=\"category\"><div align=\"center\"><b>ACTION</b></p></div></th>

                                    </tr>
                                    ";
                            
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $id=$row['SupplyID'];

                                
                            echo "<tr>
                            <td><div align=\"center\"><b>{$row['SupplyType']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['DateOrdered']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['Supplier']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplierCountry']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplyQuantity']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplierContactNum']}</b></div></td>
                            <td><div align=\"center\">
                            <form action=\"prodManInventoryManagement.php\" method=\"post\">
                            <input type = \"button\"  class=\"btn btn-fill btn-success\" value=\"RECEIVE\" data-toggle=\"modal\" data-target=\"#receiveModal\">
                            <input type = \"hidden\" name =\"id\" class=\"\" value=\"".$id."\">
                            </form></div></td>
                            </tr>";
                            }

                          //  echo '</table>';
                            }
                            
                            
                            else if ($result3==0){
                                echo "<center><b>No orders to be received!</b></center>";
                            }
                        }// end if isset receive supplies

                        elseif (isset($_POST['viewInventory']))
    
                                    { echo"

                                <center><p class=\"category\"><b>You are viewing Inventory Count based on Product Orders. </b></p>
     
                                   
                                   
                                    <input id=\"myInput\" type=\"search\" onkeyup=\"search();\" name = \"searchInventory\" class=\"form-control col-sm-2\" placeholder=\"Looking for...\"> </div>
                                    <tr>
                                        <th onclick=\"sortTable(0)\"><div align=\"center\"><p class=\"category\"><b>PRODUCT NAME</b></p></div></th>
                                        <th onclick=\"sortTable(1)\"><div align=\"center\"><p class=\"category\"><b>PRODUCT TYPE</b></p></div></th>
                                        <th onclick=\"sortTable(2)\"><div align=\"center\"><p class=\"category\"><b>PRODUCT SIZE</b></p></div></th>
                                        <th onclick=\"sortTable(3)\"><div align=\"center\"><p class=\"category\"><b>PRODUCT PRICE</b></p></div></th>
                                        <th onclick=\"sortTable(4)\"><div align=\"center\"><p class=\"category\"><b>ORDER QUANTITY</b></p></div></th>
                                    
                                    </tr>
                                    </thead>";



                                      
                                                         

                            $query = "SELECT `ProductID`, `ProductType`, `ProductName`, `ProductSize`, `ProductPrice`, SUM(orders.OQuantity) AS OQuantity
                                FROM product
                                JOIN orders 
                                ON product.ProductID = orders.OProductID
                                GROUP BY ProductName";
                            
                  
                                $result=mysqli_query($dbc,$query);
                  
              
                
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                echo 
                                            "
                                            <tbody>
                                            <tr>

                                            <td><div align=\"center\"><b>{$row['ProductName']}</b></div></td>

                                            <td><div align=\"center\"><b>{$row['ProductType']}</b></div></td>

                                            <td><div align=\"center\"><b>{$row['ProductSize']}</b></div></td>

                                            <td><div align=\"center\"><b>{$row['ProductPrice']}</b></div></td>

                                            <td><div align=\"center\"><b>{$row['OQuantity']}</b></div></td>

                                           


                                            </tr>
                                            </tbody>
                                            "; 
                                        
                                    } // end while MYSQLI
                  
                             }   // end else

                     elseif (isset($_POST['viewStocks']))
                     {
                            echo "  <center><p class=\"category\"><b>Listed below are RECEIVED stock supplies DOLLJOY has ordered. 
                                <br>";



                           
                            $query="SELECT SupplyID, SupplyType, DateOrdered, DateReceived, SupplierCountry, SupplyQuantity, Suppliers.SupplierName AS 'Supplier', SupplierContactNum FROM Supplies S INNER JOIN Suppliers ON S.SupplierID=Suppliers.SupplierID WHERE `DateReceived` IS NOT NULL";
                            $result=mysqli_query($dbc,$query);
                            
                            
                            $query2="SELECT SupplyID FROM Supplies WHERE `DateReceived` IS NULL";
                            $result2=mysqli_query($dbc,$query2);
                            $result3 = $result2->num_rows;
                            


                            if ($result3>=0){
                            echo 

                             "<input id=\"myInput\" type=\"search\" onkeyup=\"search();\" name = \"searchSupply\" class=\"form-control col-sm-2\" placeholder=\"Looking for...\"> </div>
                                    <tr>

                                        <th onclick=\"sortTable(0)\"><p class=\"category\"><div align=\"center\"><b>DATE RECEIVED</b></p></div></th>
                                        <th onclick=\"sortTable(1)\"><p class=\"category\"><div align=\"center\"><b>DATE ORDERED</b></p></div></th>
                                        <th onclick=\"sortTable(2)\"><p class=\"category\"><div align=\"center\"><b>ITEM</b></p></div></th>
                                        <th onclick=\"sortTable(3)\"><p class=\"category\"><div align=\"center\"><b>FROM </b></p></div></th>
                                        <th onclick=\"sortTable(4)\"><p class=\"category\"><div align=\"center\"><b>SOURCE</b></p></div></th>
                                        <th onclick=\"sortTable(5)\"><p class=\"category\"><div align=\"center\"><b>QUANTITY IN KG</b></p></div></th>

                                    </tr>
                                    ";
                            
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            $id=$row['SupplyID'];

                                
                            echo "

                            <tr>

                            <td><div align=\"center\"><b>{$row['DateReceived']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['DateOrdered']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplyType']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['Supplier']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplierCountry']}</b></div></td>
                            <td><div align=\"center\"><b>{$row['SupplyQuantity']}</b></div></td>
                          
                            </tr>";
                            }

                          //  echo '</table>';
                            }

                     }
    
                                    
                ?> 
                                
                            </div>
                            </div>
                                <div class="content table-responsive table-full-width">
                                
                                </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

    
</div>
</div>
</div>
    
<<<<<<< HEAD
    
=======
  
>>>>>>> a7bf82600c17491d3a03282ba2ec6e2278226c3d
     
                
            
</form>

 
    
            

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
    
    function search() {
        // Declare variables 
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            for (var j = 0; j < th.length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>
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
