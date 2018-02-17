<html>
<head>
<title>Classconnect</title>
<link rel="stylesheet" type="text/css" href="stu.css"
</head>
<body>
	<div id="bi">
	<div id="hero-overlay"></div>
		</div>
	<div class="header">
	
	<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>
  </div>
 
  <ul>
   <a href="index.php"> <li>Home </li></a>
    <a href ="au.html"><li>About Us</li></a>
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
        <div class="licn">
            <a href=""><img src="share.png" id="i"></a>
        </div>
        <div class="ricn">
            <a href=""><img src="ask.png" ></a>
        </div>
	
	</div>
	<div class="footer"><h2 align="middle" >Powered by MIT-ADT UNIVERSITY</h2></div>


</body>
</html>