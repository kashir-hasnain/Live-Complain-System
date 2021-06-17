<?php
session_start();
include('../includes/connection.php');
if(!$_SESSION['uname'])
{
    header('location:login.php');
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
                <h3>Track Your Complain</h3>
            </center>
            <br>
            <center><label>Enter Your Complain</label></center>
            <br>
            <input type="text" class="input" placeholder="     Track Your Complain" name="complain" required>
            <br>


            <br>
            <button class="btn" name="submit" type="submit">Track</button>
            <br>

            <br>
            <h3>Your Complain Status</h3>
            <?php
                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['complain'];
    /*$q3="SELECT * FROM complains WHERE complain_id LIKE '%$name%'";*/
    $q3="SELECT progess.progress_name,complains.remarks,complains.complain_id,users.user_email,complains.progress_id,users.user_id,complains.user_id,users.user_username FROM complains INNER JOIN users ON complains.user_id=users.user_id INNER JOIN progess on progess.progress_id=complains.progress_id WHERE complains.complain_id LIKE '%$name%'";
    $final=mysqli_query($con,$q3);
    
    $display=mysqli_num_rows($final);
    if($display==1)
    {
    ?>
            <table style="width:100%">
                <thead>
                <tr>
                    <th>Complain ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Complain Progress</th>
                    <th>Remarks</th>
                </tr>
            </thead>
                    <?php
    while($r=mysqli_fetch_assoc($final))
    {
        echo"<tbody>";
      echo"<td>"; echo $r['complain_id']; echo"</td>";
      echo"<td>"; echo $r['user_username']; echo"</td>";
      echo"<td>"; echo $r['user_email']; echo"</td>";
      echo"<td>"; echo $r['progress_name']; echo"</td>";
      echo"<td>"; echo $r['remarks']; echo"</td>";
      echo"</tbody>";


    }
}
else
{
    echo"<h3 class='text-center text-danger'>No Track Complain ID Found</h3>";
}
                    } 
                    ?>

                    <tr>

                    </tr>
            </table>

        </form>




    </div>
    </div>

</body>

</html>