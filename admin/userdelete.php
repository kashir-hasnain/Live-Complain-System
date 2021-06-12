<?php
include('../includes/connection.php');
$id=$_GET['id'];
$result = $con->query("DELETE FROM users where user_id= '$id'");


if($result){
header('Location:users.php');
}

else{
    echo "Unable to delete";
}