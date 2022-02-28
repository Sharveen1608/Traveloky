<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>LoginPage</title>
<link href="login.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet"/>



</head>

<body>
<div id="wrapper">
<div id="login-container">
	<div id="login-header">Welcome<br/>
	Back</div>
	<div id="form">
	<form action = "" method = "post">
		<label for="Username">TP Number</label></p>
			<input type="text" name="username" maxlength="20" size="100"  required/></p>

		<label for="password">Password </label></p>
			<input type="password" name="password" size="100" maxlength="40" required /><br/><br/><br/>

</p>

		<input type = "submit" value = " Submit "/>
	</form>
	</div>
</div>


<div id="register-container"></div>
	<div id="register-background-layer">
	<a name="register" href ="Register.html#popup"class="register">Register</a>
	<div id="register-header" >New to here?</div></p>
	<div id="register-caption">Register here to start your journey with us.</div>
</div>
</body>

</html>
