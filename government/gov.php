<?php
session_start();
    // Login Handler
    
    include('../includes/connection.php');
  
    if(isset($_POST['submit'])){
        $gov_id = $_POST['gov_id'];
        $govpassword = $_POST['govpassword'];
        $result = mysqli_query($con, "SELECT * FROM government WHERE government_id='$gov_id' and gpassword = '$govpassword';");
       
        $result_array = mysqli_fetch_assoc($result);
        
        if($result_array){
            $_SESSION["gov_id"] = $gov_id;
            header('Location: govprofile.php');
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
    
    </script>
</head>

<body>
    <header class="header">
        <a href="../index.php" class="logo">Welcome</a>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">
            <div class="header-right">

                <a href="../user/login.php">User Login</a>
                <a href="gov.php">Government Login</a>
                <a href="../contactus.php">Contact Us</a>

                <a href="../about.php">About Us</a>
                <a href="../admin/admin.php">Admin</a>
            </div>
        </nav>
    </header>
    <div class="form" >
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>Government Login</h3>
            <br>

            <input type="text" class="input" placeholder="     Enter Your Government ID" name="gov_id" required>
            <br>
            <input type="password" class="input" placeholder="    Password" name="govpassword" required>
            <br>
            <center>
            <?php
        if(isset($message)){
            echo '<p style="color:red;">'.$message.'</p>';
        }
    ?>
        </center>
            <br>
            <button class="btn" name="submit" type="submit" >Login</button>
            <br>

            <br>

        </form>
    </div>
    <footer class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </footer>
</body>

</html>