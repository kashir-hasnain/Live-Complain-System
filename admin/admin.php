<?php
    // Login Handler
    include('../includes/connection.php');

    if(isset($_POST['submit'])){
        $admin_id= $_POST['admin_id'];
        $admin_password = $_POST['admin_password'];
        $result = mysqli_query($con, "SELECT * FROM Admin WHERE admin_id='$admin_id' and admin_password= '$admin_password';");
        
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            session_start();
            $_SESSION = $result_array;
            header('Location: users.php');
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
    <script>
    function show() {
        var x = document.getElementById("nav");
        if (x.className === "wrap") {
            x.className += " unwrap";
        } else {
            x.className = "wrap";
        }
    }
    </script>
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
    <header class="header">
        <a href="../index.php" class="logo">Welcome</a>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">
            <div class="header-right">

                <a href="../user/login.php">User Login</a>
                <a href="../government/gov.php">Government Login</a>
                <a href="../contactus.php">Contact Us</a>

                <a href="../about.php">About Us</a>
                <a href="admin.php">Admin</a>
            </div>
        </nav>

    </header>
    <div class="form">
        <form method="POST">
            <h3>Admin</h3>
            <br>

            <input type="text" class="input" placeholder="     Enter Your Admin id" name="admin_id" required>
            <br>
            <input type="password" class="input" placeholder="    Password" name="admin_password" required>
            <br>
            <center>
                <?php
        if(isset($message)){
            echo '<p style="color:red;">'.$message.'</p>';
        }
    ?>
            </center>
            <br>
            <button class="btn" type="submit" name="submit">Admin Login</button>
            <br>

            <br>

        </form>
    </div>
    <footer class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </footer>
</body>

</html>
