<!DOCTYPE html>
<?php

session_start();

?>
<html lang="en">
<style>
table {
    width: 30%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Money</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<style>
* {
    box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
    /*height: 300px;  Should be removed. Only for demonstration */
}

.left,right {
  width: 25%;
}

.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<style>
.transparent_btn {
	display: inline-block;
	padding: 10px 14px;
	
	color: #FFFF00; 
	
	border: 1px solid #FFFF00;
	width:300px;
	text-decoration: none;
	font-size: 25px;
	line-height: 120%;
	background-color: rgba(255,255,255, 0);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background-color 300ms ease;
	-moz-transition: background-color 300ms ease;
	transition: background-color 300ms ease;
	cursor: pointer;
}
.transparent_btn:hover {
	background-color: rgba(255,255,255, 0.3);
	color: #000000;
}

body{
    height: 100%;
    width:100%;
    margin: 0;
}

.bg {
    /* The image used */"Images/Logo.png");

    /* Full height */
    height: 100%;
    width:100%;
	
	background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/cps1.png" alt="Canteen Management System" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="purchase.php">
                                <i class="fa fa-cart-plus"></i>Purchase</a>
                        </li>
                        <li>
                            <a href="food_menu.php">
                                <i class="fa fa-table"></i>Menu</a>
                        </li>
                        <li>
                            <a href="orders.php">
                                <i class="far fa-clock"></i>Orders</a>
                        </li>
                        <li>
                            <a href="notifications.php">
                                <i class="far fa-bell"></i>Notifications</a>
                        </li>
                       
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
	
		
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                               
							<div class="title-3" align='right'>
					
	<!-- Php codes -->
                            
<?php
    include('Connection.php');
    if($_SESSION["id"]) 
    {
        $user=$_SESSION["id"];
        $pass=$_SESSION["pwd"];
        $balance=0;
        $sql="select * from users ;";
        $result=mysqli_query($con,$sql);

        for($i=0;$i<mysqli_num_rows($result);$i++)
        {
            //  $use[]=mysqli_result($result,$i,"UserId");
            //  $pas[]=mysqli_result($result,$i,"Password");
            //  $phot[]=mysqli_result($result,$i,"Photo");
            //  $mail[]=mysqli_result($result,$i,"Mail");
         
         $row = mysqli_fetch_array($result);

        
        if(($user==$row['User_Id']) && ($pass==$row['Password']))
        {
            $photo="profile.jpg";
            $email=$row['Mail'] ;
            $balance=$row["Wallet"];
        }    
        }
    }

     
    // echo "$user $balance uploads/$photo $email"; 
                                                
                echo "  <input class='au-input' type='text' value='Balance: ₹ $balance' readonly/>
                            </div>
                            <div>
                                <div class='account-wrap'>
                                    <div class='account-item clearfix js-item-menu'>
                                       
                                        <div class='content'>
                                            <a class='js-acc-btn' href='#'>$user</a>
                                        </div>
                                        <div class='account-dropdown js-dropdown'>
                                            <div class='info clearfix'>
                                            
                                            </div>";
 ?>


                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="recover.php">
                                                        <i class="zmdi zmdi-settings"></i>Change Password</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="AddMoney.php">
                                                        <i class="zmdi zmdi-money-box"></i>Add Money</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            
            <!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <center><br><br><br>
                    <?php
                    include('Connection.php');
                    if($_SESSION["id"]) 
                    {
                        $user=$_SESSION["id"];
                        $pass=$_SESSION["pwd"];
                    }
                    echo "<form name='addmoney' action='add.php' method='POST'>";
                    echo "<table>";                       
                    echo "<tr align='center'>";
                    echo "<th > Add Money </th></tr>";
                    
                    echo "<tr align='center' ><td><input style='width:100%;' type='number' name='add' placeholder='Money to Wallet'></td></tr>";
                    
                    echo "</table>";
                    
                     // Initialize a variable
                     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $add = $_POST['add']; // Access the form variable
                        if (is_numeric($add)) {
                            $balance += $add; // Add the value to the wallet
                    
                            // Assuming you have a connection established in $con
                            $query = "UPDATE canteen.users SET Wallet = $balance WHERE User_Id = '$user'";
                            if (mysqli_query($con, $query)) {
                                echo "Balance updated successfully.";
                            } else {
                                echo "Error updating balance: " . mysqli_error($con);
                            }
                        } else {
                            echo "Please enter a valid number.";
                        }
                    }

                    mysqli_close($con);
                    ?>
                    <br>
                    <input type='submit' class='btn btn-success' value='Add Money'>
                    <input type='reset' class='btn btn-danger' value='Cancel' >
                    
                    </form>
                    </div>
                </center>
                </div>
            </div>
            <!-- END MAIN CONTENT-->";
            
            <!-- END PAGE CONTAINER-->
        </div>
		

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

<script type="text/javascript">

</script>

</body>

</html>
<!-- end document-->