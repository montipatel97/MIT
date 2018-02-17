<html>
<head>
<title>Classconnect</title>
<link rel="stylesheet" type="text/css" href="index.css"
</head>
<body>
	<div id="bi">
	<div id="hero-overlay"></div>
		</div>
	<div class="header">
	<h1 align="center">MIT-ClassConnect</h1>
	<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>
  </div>
 
  <ul>
    <a href="index.php"><li>Home </li></a>
   <a href="au.html"> <li>About Us</li></a>
	<a href="cont.php"><li>Contact Us</li></a>
  </ul>
</div>
<script>
function toggleSidebar(){
  document.getElementById("sidebar").classList.toggle('active');
}
</script>
	</div>
	<div class="content">
<?php

require_once ('connect.php');

$conn= mysqli_connect('localhost', 'root', '', 'mit');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (($_POST['submit'])=='Sign Up')
{
    $username = ($_POST['username']);
    $password1 = ($_POST['password1']);
    $password2 = ($_POST['password2']);
    $type=$_POST['type'];
            
     
              $query="INSERT INTO class(username,password1,type) VALUES ('$username','$password','$type')";
          
           // Confirm success with the user
          echo '<p>Your New account has been successfullly created</p>';
            
        $execute=mysqli_query($conn,$query)or die(mysqli_error($conn));
        echo "<script>alert('User Registered Successfully');</script>";
}
?>
<style>
    p{
        color:red;
    }
</style>

<h2>Please enter your username and desired password to sign up to MIT-CONNECT.</h2>
<form method="POST" action="signup.php">
    <fieldset>
      <legend>Registration Info</legend>
      <label for="username">Email:</label>
      <input type="email" id="username" name="username" placeholder="Enter Email ID"><br>
      <label for="password1">Password:</label>
      <input type="password" id="password1" name="password1" placeholder="Enter Password"><br />
      <label for="password2">Password (retype):</label>
      <input type="password" id="password2" name="password2" placeholder="Again Enter Password"><br />
      <label for="password2">Type</label>
     <input type="radio" name="type" value="Teacher">Teacher<br>
      <input type="radio" name="type" value="STUDENT">STUDENT<br>
      
    </fieldset>
   <a href="lay.php"> <input type="submit" value="Sign Up" name="submit" /></a>
  </form>
</div>
<div class="footer"><h2 align="middle" >Powered by MIT-ADT UNIVERSITY</h2></div>


</body>
</html>