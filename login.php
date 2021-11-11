<?php
require("connect.php");
?>

<html>
 <head>
        <title>
            joshs 
        </title>
    </head>
    <style>
     input {
		background: rgb(255, 253, 253);
		color: rgb(17, 16, 16);
		
	}
	
    button{
    font-family: Arial, Helvetica, sans-serif;
    float: center;
    font-size:19px;
    background-color:white ;
    background-attachment: fixed;
}
	form {
		text-align: center;
		width: 100%;
        float: center;
     	padding: 20px;
		
		
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
         background-color: tomato;
         color:white

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
	background: #3871bb;
	border: none;
	border-radius: 5px;
	color: white;
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
h4{
		color:white;
		font: bold; 
		font-size:17;			
				}
    </style>
<body>
<div class="card">
<form action="harvest.php" method="POST">
 
   	
        <br>
         <br>
         <br>
          <br>
            <br>
             <br>
              <br>
               <br>
               <br>
               <br>
            <br>
           <br>
        <fieldset class="box">
              <br>
              <br>
              
             <legend>
             <img src="image/js (1).png" alt="avatar" class="avatar" width="120px" height="100px">
              </legend> 
			  <h1>login</h1>
			  <p>
             <br> 
			 <div class="input-group">
				 <p>
					 <h4><b>Enter your login details to processed</b></h4>
			</p>
			<br>
        <br>
        <br>
        <br>
         	   	  <label>NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
   	   	  	 <input type="text"  placeholder=" Enter user name................."name="name" required="required">
			</div>
			</P>
   	   	  </label>
                <br>
                <br>
   	   	  <p>
				<div class="input-group">
   	   	         <label>
   	   	  	     PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp; 
   	   	  	     <input type="password" placeholder=" Enter your password..................." name="number" id ="myInput"required="required">
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
        <p>
			
		<div >
		      <br>
              <br>
            <button><input type="submit" name="login"  value="LOGIN"></input > </button>   
   	   
			</p>	
			</div>
		</fieldset>
         
   </form>

    <center> 
	<h2>OPPs!!!!!! did you forget password</h2>   
	<a href="image/contact us.html"><button>FORGOT PASSWORD</button></a>
    </center>
</div>
</body>
</html>
