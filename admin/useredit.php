<?php
session_start();
include('../includes/connection.php');
$id = $_GET['id'];
 

$record=$con->query("SELECT * FROM users WHERE user_id='$id'");
if($record->num_rows > 0){

$q=$record->fetch_assoc();
$id=$q['user_id'];
$name=$q['user_username'];
$email=$q['user_email'];
$address=$q['user_address'];
$cnic=$q['user_cnic'];
$uphone=$q['uphone_no'];
}
else{
    echo "Unable to Edit Record";
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
        <form class="complainform" method="POST" action="usereditaction.php">
            <center>
                <h3>Profile</h3>
            </center>
            <br>
            <center>
                
            </center><input type="number" class="input" placeholder="" value="<?php echo $id ?>"    name="uid"  readonly>
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $name ?>"    name="uname" >
            <br>
            <input type="text" class="input"  name="email" required  value="<?php echo $email ?>">
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $address ?>"    name="address"  >
            <br>

            <input type="text" class="input" placeholder="" value="<?php echo $cnic ?>"     name="cnic"  >
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $uphone ?>"     name="phone_no"  >
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