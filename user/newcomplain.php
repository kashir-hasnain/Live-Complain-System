<?php

session_start();
if(!$_SESSION['uname'])
{
    header('location:login.php');
}
include('../includes/connection.php');
if(isset($_POST['submit'])){
    $complain_title=$_POST['complain_title'];
    $matter=$_POST['matter'];
    $fetch_id="SELECT user_id from users WHERE user_username='$_SESSION[uname]'";
    $sql=mysqli_query($con,$fetch_id);
    $ids=mysqli_fetch_assoc($sql);
    $print=$ids['user_id'];
    
    $my="INSERT INTO complains VALUES('','$complain_title','$matter','Initiated','$print')";
    $is_exe = mysqli_query($con,$my);


    

    $message = $is_exe?'Complain Registered Sucessfully': 'Complain Registered Failed';

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



        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
                <a href="newcomplain.php">New Complain</a>
                <a href="trackcomplain.php">Track Complain</a>
                <a href="totalcomplains.php">Your Complains</a>
                <a href="profile.php">Profile</a>

            </div>
            <div class="header-right">



                <a href="logout.php">Logout</a>

            </div>
    </header>




    <div class="new-complain">
        <form class="complainform" method="POST">
            <center>
                <h3>Register New Complain</h3>
            </center>
            <br>




            <br>




            <input type="text" class="input" placeholder="     Complain Title" name="complain_title" required>
            <br>
            <input type="text" class="input" placeholder="     Complain Descriptions" name="matter" required>
            <br>

            <br>
            <button class="btn" name="submit" type="submit">Register New complain</button>
            <br>
            <center>
            <?php
        if(isset($message)){
            echo '<p style="color:orange;">'.$message.'</p>';
            }
        ?>
        </center>

            <br>

        </form>
    </div>
    </div>

</body>

</html>