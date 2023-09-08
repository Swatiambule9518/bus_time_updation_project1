<?php 
define("server","localhost:3308");
define("username","root");
define("password","");
define("dbname","bus_update");

$con= mysqli_connect(server,username,password) OR die(mysqli_error());
mysqli_select_db($con, dbname) OR die(mysqli_error());

?>
