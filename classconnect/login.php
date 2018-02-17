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
	
	<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>
  </div>
 
  <ul>
    <li>Home </li>
   <a href ="au.html"> <li>About Us</li></a>
	<li>Contact Us</li> 
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
  require_once('connect.php');

  // Start the session
  session_start();

  // Clear the error message
  $error_msg = "";

  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      // Connect to the database
     
      // Grab the user-entered log-in data
     $username2 = ($_POST['username']);
     $password2 = ($_POST['password']);

      
     
      
      
      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT * FROM class WHERE username = '$username2' AND password = SHA('$password2')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['username'] = $row['username'];
          setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
          header('Location: ' . $home_url);
        }
        else {
          // The username/password are incorrect so set an error message
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        // The username/password weren't entered so set an error message
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }

  
  // If the session var is empty, show any error message and the log-in form; otherwise confirm the log-in
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <legend>Log In</legend>
      <label for="username">Email:</label>
      <input type="email" name="username2" value="<?php if (!empty($user_username)) echo $user_username2; ?>" /><br />
      <label for="password">Password:</label>
      <input type="password" name="password2" />
    </fieldset>
   <a href="lay.php"> <input type="submit" value="Log In" name="submit" /></a>
  </form>

<?php
  }
  else {
    // Confirm the successful log-in
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>
</div>
<div class="footer"><h2 align="middle" >Powered by MIT-ADT UNIVERSITY</h2></div>


</body>
</html>
