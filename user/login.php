<?php
session_start();
    // Login Handler
    
    include('../includes/connection.php');

    if(isset($_POST['submit'])){
        $uname= $_POST['uname'];
        $upassword = $_POST['upassword'];
        $result = mysqli_query($con, "SELECT * FROM users WHERE user_username='$uname' and user_password= '$upassword';");
        
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            session_start();
            $_SESSION['uname'] = $result_array['user_username'];
            $_SESSION['upassword']=$result_array['user_password'];
            header('Location: newcomplain.php');
        }
        else{
            $message = 'Wrong Credentials'; 
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

    <form method="POST">
        <h3>USER Login</h3>
        <br>

        <input type="text" class="input" placeholder="     Username" name="uname" required>
        <br>
        <input type="password" class="input" placeholder="    Password" name="upassword" required>
        <br>
        <center>
            <?php
        if(isset($message)){
            echo '<p style="color:red;">'.$message.'</p>';
        }
    ?>
        </center>
       
        <br>
        <button class="btn" name="submit" type="submit">Login</button>
        <br>
        <center>Not a Member <a href="register.php">Register</a></center>
        <br>

    </form>

    <footer>
        <div class="footer">
            <p>All Right Reversed &copy; 2021</p>

        </div>
    </footer>
</body>

</html>