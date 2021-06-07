<?php
session_start();

include('../includes/connection.php');

$id = $_SESSION["gov_id"];


if(! $id)
{
    header('location:gov.php');
} else {

    $query="SELECT * FROM government WHERE government_id='$id'";
    $db=mysqli_query($con,$query);
    $q=mysqli_fetch_assoc($db);
    $name=$q['gov_name'];
    $email=$q['email'];
    $cnic=$q['gov_cnic'];
    $recognition=$q['recognition'];
    $phoneno=$q['phone no'];
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
        <a href="../index.php" class="logo">Welcome!</a>



        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
                <a href="checkcomplain.php">Check Complain</a>
               
                
                <a href="govprofile.php">Profile</a>


            </div>
            <div class="header-right">



                <a href="logout.php">Logout</a>

            </div>
    </header>



    <div class="new-complain">
        <form class="complainform">
            <center>
                <h3>Government Profile</h3>
            </center>
            <br>

            <input type="text" class="input" value="<?php echo $name ?>" name="name" required readonly>
            <br>
            <input type="text" class="input" value="<?php echo $email ?>" name="email" required readonly>
            <br>
            <input type="text" class="input"  value="<?php echo $recognition ?>"  name="recognition" required readonly>
            <br>

            <input type="text" class="input"value="<?php echo $cnic ?>"  name="cnic" required readonly>
            <br>
            <input type="text" class="input" value="<?php echo $phoneno ?>" name="phoneno" required readonly>
            <br>


            <br>
            <button class="btn" onclick="window.location.href=govprofile.php'" type="submit">Ok</button>
            <br>

            <br>

        </form>
    </div>
    </div>

</body>

</html>