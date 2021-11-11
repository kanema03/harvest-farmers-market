<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style >
    
    
    }
	input {
		background: rgb(255, 253, 253);
		color: rgb(17, 16, 16);
        
	}
	
	form {
		text-align: center;
        width: 100%;
        float: center;
     	padding: 20px;
	

}
		
		
	}
	legend {
		text-align: center;

	}
	fieldset {
        width: 50%;
		display: inline-block;
		align-content: center;
		
	}
    body {
       
        background-image: url("image/front pro b.jpg");
         background-size: cover;
         background-attachment: fixed;
         margin-top: 20px;
         color:white;
    }
    }
    .input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
button {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: blue;
	border: none;
	border-radius: 5px;
}
h1{
    background: blue;
    width: 90%;
	margin: 50px auto 0px;
	color: white;
	background:#495ac0;
	text-align: center;
	border: 1px solid #3871bb;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
</style>
<body>
    <a href="harvest.php"></a>
   
<form action="home page.php" method="POST">
  
<?php
		if (isset($_POST['submit'])) {
			$conn=mysqli_connect('localhost','root','','úser');
			if (!$conn) {  
				echo mysqli_error();
			}
			$name=$_POST['name'];
			$number=$_POST['number'];
            $address=$_POST['address'];
            $DOB=$_POST['DOB'];
            $email=$_POST['email'];
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            $query="INSERT INTO `users` VALUES ('','$name','$number','$address','$DOB','$email','$uname','$pass')";
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
        <div >
<fieldset>
<h1>sign up</h1>
<legend>
<img src="js (1).png" alt="avatar" class="avatar" width="120px" height="100px">

</legend>


<p>
<div class="input-group">
    <label>
        full name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <input type="text" placeholder="Enter your Full names examplem(Joshua kanema)...."  name="name" required="required">
</p>
    </div>
   <br> 
   
<p>
<div class="input-group">
    <label>
        number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </label>
    <input type="text" placeholder="Enter your phone number.." name="number"  required="required">
    </div>
</p>
    <br> 
    <p>  
    <div class="input-group">
    <label>
        address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <input type="text" placeholder="Current location.."  name="address" required="required">
    </div>
 </p>

    <br>
  <P>
  <div class="input-group">
    <label>
        Date of birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <input type="text"  placeholder="Enter your date of birth DD/MM/YY.." name="DOB" required="required">
    </div>
</P>
    <br>
    <p>
    <div class="input-group">
    <label>
        Email address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
    <input type="emile" placeholder="Enter your email.."  name="email" required="required">
    </div>
</p>
  <br>
  <p>
  <div class="input-group">
    <label>
        user name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </label>
    <input type="text" placeholder="choose a user name you want to use on this platform.."  name="uname" required="required">
    <br> 
    </div>           
</p>
<br>
<p>
<div class="input-group">
     <label>
   	   	  	     PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp; 
   	   	  	     <input type="password" placeholder=" Enter your password..................." name="password" id ="myInput"required="required">
				<br>
			</div>
			<label>
			Show Password:&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="checkbox" onclick="myFunction()">
				<br>
				</label>
				

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>		 
               
				</label>
            
</p>
<br>
<p>
<div class="input-group">
    
<div class="input-group">
<br>
    <br>
    <input  type="submit" name="submit" value="SIGN UP">
    </div>   
    <br>
 
  
    </fieldset>
</fieldset>
<br>
   </form>
    </div>
    <div>
   <center> <h2>Already a member?</h2>   <a href="login.php"><button>Sign in</button></a>
    </center>
</div>
</body>
</html>