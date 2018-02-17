<?php
//database connection
error_reporting(~E_DEPRECATED & ~E_NOTICE);
 
  $DBHOST='localhost';
  $DBUSER='root';
  $DBPASS='';
  $DBNAME='mit';

  $conn=mysqli_connect($DBHOST,$DBUSER,$DBPASS);
  $dbcon=mysqli_select_db($conn,$DBNAME);


  if(!$conn)
  {
    die("Connection Failed".mysqli_error($conn));
  }
  if(!$dbcon)
  {
    die("Database Connection Failed".mysqli_error($conn));
  }
?>
