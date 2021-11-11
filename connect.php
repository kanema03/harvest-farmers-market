<?php
$conn=mysqli_connect('localhost','root','','user');
if (!$conn) {
	echo "You are not connected to the database";
}
if (isset($_POST['submit'])) {
	$conn=mysqli_connect('localhost','root','','user');
	if (!$conn) {  
		echo mysqli_error();
	}
	$uname=$_POST['uname'];
	$number=$_POST['number'];

	$query="INSERT INTO `student` VALUES ('','$name','$password')";
	if ($query_run=mysqli_query($conn,$query)) {
		echo "Registration sucess";
	}
	else
	{
		echo "Sorry Try again";
	}
}
else
{
	echo "All field are required";
}
?>