<?php
include('includes/connection.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    

    $is_exe = mysqli_query($con, "INSERT INTO bugs (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");




    $message1 = $is_exe?'Bug Submission Sucessfully': 'Bug Submission Failed';

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Compalin System</title>

    <link rel="stylesheet" href="css/index.css">
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
        <a href="index.php" class="logo">Welcome</a>
        <img src="images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">
            <div class="header-right">

                <a href="user/login.php">User Login</a>
                <a href="government/gov.php">Government Login</a>
                <a href="contactus.php">Contact Us</a>

                <a href="about.php">About Us</a>
                <a href="admin/admin.php">Admin</a>
            </div>
        </nav>
        </div>
    </header>

    <form method="POST">
        <h3>Register Your bugs Here</h3>
        <br>

        <input type="text" class="input" placeholder="     Name" name="name" required>
        <br>
        <input type="text" class="input" placeholder="    Email" name="email" required>
        <br>
        <input type="text" class="input" placeholder="    Write Your message Here" name="message" required>
        <br>
        <br>
        <button class="btn" name="submit" type="submit">Submit</button>
        <br>
        <center>
            <?php
        if(isset($message1)){
            echo '<p style="color:orange;">'.$message1.'</p>';
            }
        ?>
        </center>
        <br>

    </form>
    </div>
    <footer class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </footer>
</body>

</html>