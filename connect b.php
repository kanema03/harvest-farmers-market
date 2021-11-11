<?php
$conn=mysqli_connect('localhost','root','','harvest');
if (!$conn) {
	echo "You are not connected to the database";
}
<?php
				if (isset($_POST['login'])) {
					if (!$_POST['name']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter your name</h4>";
					}
					elseif (!$_POST['password']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter password</h4>";
					}
					else
					{
						session_start();
						$_SESSION['name']=$_POST['name'];
						$name=$_POST['name'];
						$password=$_POST['number'];
						$result=mysqli_query($conn,"SELECT * FROM users WHERE name='$name' AND Password='$password'");
						if ($row=mysqli_fetch_array($result)) {
							header('Location:home page.php');
						}
						else
						{
							echo "<h4 style='color:#FF4300;' class='alert' >Wrong name or password</h4>";
						}
					}
				
				
				?>
?>