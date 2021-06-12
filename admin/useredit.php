<?php
include('../includes/connection.php');
$id = $_GET['id'];

$record=$con->query("SELECT * FROM users WHERE user_id='$id'");
if($record->num_rows > 0){

$q=$record->fetch_assoc();
$name=$q['user_username'];
$email=$q['user_email'];
$address=$q['user_address'];
$cnic=$q['user_cnic'];
$uphone=$q['uphone_no'];
}
else{
    echo "Unable to Edit Record";
}
if(isset($_POST['update'])) // when click on Update button
{
    $name=$_POST['uname'];
$email=$_POST['email'];
$address=$_POST['address'];
$cnic=$_POST['cnic'];
$uphone=$_POST['phone_no'];
	
    $edit = mysqli_query($con,"UPDATE users set user_username='$name', user_email='$email',user_adress='$address',user_cnic='$cnic', uphone_no='$uphone' where user_id='$id'");
	
    if($edit)
    {
        // Close connection
        header("location:users.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Compalin System</title>

    <link rel="stylesheet" href="../css/index.css">
    <script>
    function show() {
        var x = document.getElementById("nav");
        if (x.className === "wrap") {
            x.className += " unwrap";
        } else {
            x.className = "wrap";
        }
    }
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
</head>

<body>
<header class="header">
        <a href="../index.php" class="logo">Welcome!</a>

        <div class="header-right">



            <a href="../index.php">Logout</a>

        </div>
        <br>
        <br>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
            <a href="users.php">Total Users</a>
               
               <a href="complains.php">Total complains</a>
               
               <a href="websitebugs.php">Website Bugs</a>
            </div>
    </header>


    <div class="new-complain">
        <form class="complainform">
            <center>
                <h3>Profile</h3>
            </center>
            <br>
            <center>
                
            </center>
            <input type="text" class="input" placeholder="" value="<?php echo $name ?>"    name="uname" required>
            <br>
            <input type="text" class="input"  name="email" required  value="<?php echo $email ?>">
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $address ?>"    name="adress" required >
            <br>

            <input type="text" class="input" placeholder="" value="<?php echo $cnic ?>"     name="cnic" required >
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $uphone ?>"     name="phone_no" required >
            <br>


            <br>
            <button class="btn" name="update" type="submit">Update Profile</button>
            <br>

            <br>

        </form>
    </div>
    </div>

</body>

</html>