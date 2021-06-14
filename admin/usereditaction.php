<?php 
session_start();

include('../includes/connection.php');

if(isset($_POST['update'])) // when click on Update button
{
    $id=$_POST['uid'];
    $name=$_POST['uname'];
$email=$_POST['email'];
$address=$_POST['address'];
$cnic=$_POST['cnic'];
$uphone=$_POST['phone_no'];
	
    $edit = mysqli_query($con,"UPDATE users set user_username='$name', user_email='$email',user_address='$address',user_cnic='$cnic', uphone_no='$uphone' where user_id='$id'");
	
    if($edit)
    {

        $con ->close();

        // Close connection
        unset($_SESSION["user_id"]);
        header("Location:users.php"); // redirects to all records page
        
    }
    else{
        echo "Unable to Update Your Record";
    }
      	
}
else
{
    echo "Failed";
}
?>