<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complain_system";

 $con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con) {
    die('Could not connect: ' . mysql_error());
}
// echo 'Connected!! <br />';

?>