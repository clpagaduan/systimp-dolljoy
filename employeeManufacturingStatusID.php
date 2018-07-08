<?php
require_once('../mysql_connect.php');
$orderID = $_GET['id'];
$sql = "";

if(isset($_POST['reject'])){
    $id = $_POST['reject'];
    $query = "UPDATE Orders SET OrderStatus = 'Rejected' WHERE OrderID = '{$id}' ";
    mysqli_query($dbc, $query);
}
if (!empty($sql))
    $qu = mysqli_query($dbc, $sql);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Manufacturing Status</title>

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
                    <a href="employeeDashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="employeeManufacturingStatuses.php">
                        <i class="ti-paint-roller"></i>
                        <p>Manufacturing Status</p>
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
                    <a class="navbar-brand" href="employeeManufacturingStatuses.php">Manufacturing Status</a>
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
                                <h4 class="title"><b>Order #<?php echo $orderID; ?> </b></h4>
                            </div>
                            <br>
                                <div class="content table-responsive table-full-width">
                                
                                <?php

require_once('../mysql_connect.php');


echo '<font size="2pt">
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">

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

                                
                                echo "<h5><center><b>Doll specifications</b></h5>";

                                while ($row5=mysqli_fetch_array($result50)){
                                $category = $row5['attname'];
                                $value = $row5['valname'];
                                $image = $row5['valimage'];
                                $display = $row5['prodImage'];
                                    echo "<tr>
                                    <td width=\"10%\"><div align=\"center\">$category</div></td>

                                    <td width=\"10%\"><div align=\"center\">$value</div></td>";
                                
 
                            
                            


?>
<td width=50%><div align=center><img src=<?php  echo '"data:image/jpeg;base64,'.base64_encode( $image ).'" '; ?></div></td>

<?php
}
                                echo "</table>
                                <br><br>";
?>
    <h5><center><b>Reference Image</b></center></h5>
<?php
  if ($display) {
    
  }
  else{
  
  }
?>
<td width=50%><div align=center><img src=<?php  echo '"data:image/jpeg;base64,'.base64_encode( $display ).'" '; ?></div></td>
</tr>
<?php

?>
</table>


                                  
                        <br><br>

                        <h5><b>Order details</b></h5>

<?php

require_once('../mysql_connect.php');


echo '<font size="2pt">
<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">

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
    $query = "SELECT *, FORMAT(OTotalAmount, 2) AS tamt, FORMAT(OPrice, 2) AS prc,      FORMAT(OQuantity, 0) AS qty 
              FROM   Orders WHERE orderID = '".$id."'; ";
    $result=mysqli_query($dbc,$query);
    $row = mysqli_fetch_array($result);


    $query1 = "SELECT *
              FROM   ClientAccount WHERE CompanyID = '{$row['OCompanyID']}'; ";
    $result1 = mysqli_query($dbc,$query1);
    $rowC = mysqli_fetch_array($result1);
    $odate= date_format(date_create($row['OOrderedDate']), 'F d, Y');
    $rdate= date_format(date_create($row['ORequiredDate']), 'F d, Y');



    echo "<tr>
    <td width=\"10%\"><div align=\"center\">{$rowC['CName']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['qty']}</div></td>

    <td width=\"10%\"><div align=\"center\">{$row['prc']}</div></td>

    <td width=\"10%\"><div align=\"center\">PHP{$row['tamt']}</div></td>

    <td width=\"10%\"><div align=\"center\">$odate</div></td>

    <td width=\"10%\"><div align=\"center\">$rdate</div></td>

    </tr>";
}


echo '</table>';

?>

<br><br>


<a href="employeeManufacturingStatuses.php"><button type="submit" class="btn btn-default btn-fill pull-right">Back</button></a>


<br><br><br>


                            </div>
                        </div>
                    </div>


        </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> designed by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>


    </div>
</div>


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
