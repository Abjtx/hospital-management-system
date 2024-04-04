<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','hospital');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtSubj = $_POST['subject'];
$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `hospitalquery` (`name`, `email`, `subject`, `message`) VALUES ('$txtName', '$txtEmail', '$txtSubj', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
