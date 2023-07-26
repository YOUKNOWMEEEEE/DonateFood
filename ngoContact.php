<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','foodcontact');

// get the post records
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$MessageHere = $_POST['MessageHere'];

// database insert SQL code
$sql = "INSERT INTO `mycontact` (`Id`, `fIdName`, `fIdEmail`, `fldMessage`) VALUES ('0', '$Name', '$Email', '$MessageHere')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>