<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','food');

// get the post records
$restaurantname = $_POST['restaurantname'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$fooddescription = $_POST['fooddescription'];
$quantity = $_POST['quantity'];
$pickuptime = $_POST['pickuptime'];

// database insert SQL code
$sql = "INSERT INTO `new1_contact` (`Id`, `flrestaurantname`, `flcity`, `flpincode`, `flfooddescription`,`flquantity`,`flpickuptime`) VALUES ('0', '$restaurantname', '$city', '$pincode', '$fooddescription','$quantity','$pickuptime')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>