
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
   <a href="index.php"> <li>Home </li></a>
   <a href ="au.html"> <li>About Us</li></a>
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
	
		<a href="signup.php"><center><img src="signup.png"></center></a>
	</div>
	<div class="log">
	<a href="login.php"><center><img src="log.png"></center></a>
</div>
	<div class="footer"><h2 align="middle" >Powered by MIT-ADT UNIVERSITY</h2></div>


</body>
</html>