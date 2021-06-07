<?php
session_start();
if(!$_SESSION['uname'])
{
    header('location:login.php');
}
include('../includes/connection.php');
$query="SELECT * FROM users WHERE user_username='$_SESSION[uname]'";
$db=mysqli_query($con,$query);
$q=mysqli_fetch_assoc($db);
$name=$q['user_username'];
$email=$q['user_email'];
$address=$q['user_address'];
$cnic=$q['user_cnic'];
$uphone=$q['uphone_no'];
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



        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
                <a href="newcomplain.php">New Complain</a>
                <a href="trackcomplain.php">Track Complain</a>
                <a href="totalcomplains.php">Your Complaains</a>
                <a href="profile.php">Profile</a>

            </div>
            <div class="header-right">



                <a href="logout.php">Logout</a>

            </div>
    </header>

    <div class="new-complain">
        <form class="complainform">
            <center>
                <h3>Profile</h3>
            </center>
            <br>
            <center>
                <p>*You cannot change anything</p>
            </center>
            <input type="text" class="input" placeholder="" value="<?php echo $name ?>"    name="uname" required readonly>
            <br>
            <input type="text" class="input" placeholder="     Email" name="Email" required readonly value="<?php echo $email ?>">
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $address ?>"    name="adress" required readonly>
            <br>

            <input type="text" class="input" placeholder="" value="<?php echo $cnic ?>"     name="cnic" required readonly>
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $uphone ?>"     name="phone no" required readonly>
            <br>


            <br>
            <button class="btn"  type="submit">OK</button>
            <br>

            <br>

        </form>
    </div>
    </div>

</body>

</html>