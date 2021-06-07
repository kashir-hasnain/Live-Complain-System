<?php
include('../includes/connection.php');
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
        <a href="../index.php" class="logo">Welcome</a>
        <div class="header-right">
            <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
            <nav id='nav' class="wrap">
                <a href="login.php">User Login</a>
                <a href="../government/gov.php">Government Login</a>
                <a href="../contactus.php">Contact Us</a>

                <a href="../about.php">About Us</a>
                <a href="../admin/admin.php">Admin</a>
        </div>
    </header>

    <form class="form" method="POST">
        <h3>User Register</h3>
        <br>

        <input type="text" class="input" placeholder="     Username" name="uname" required>
        <br>
        <input type="text" class="input" placeholder="     Email" name="email" required>

        <br>


        <input type="text" class="input" placeholder="     CNIC" name="cnic" required>

        <br>
        <input type="text" class="input" placeholder="     Adress" name="address" required>
        <br>
        <input type="text" class="input" placeholder="     Phone No" name="phone" required>
        <br>
        <input type="password" class="input" placeholder="    Password" name="psw" required>
        <br>
        <input type="password" class="input" placeholder="    Confirm Password" name="cpsw" required>
        <br>

        <br>
        <button class="btn" name="register" type="submit" onclick="window.location.href='login.php'">Register User</button>
        <br>
        <center>Not a Member <a href="login.php">Login Here</a></center>
        <br>

    </form>
    <?php
if(isset($_POST['register']))
{
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $cnic=$_POST['cnic'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $psw=$_POST['psw'];
    $cpsw=$_POST['cpsw'];
    $query="INSERT INTO users VALUES('','$name','$cnic','$email','$address','$phone','$psw','$cpsw')";
    $inserted=mysqli_query($con,$query);
    if($inserted)
    {
        ?>
        <script type="text/javascript">
            alert('User Registered Successfully');
        </script>
        <?php
    }
}
?>
    <br>
    <br>
    </div>
    <footer class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </footer>
</body>
