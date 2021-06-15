<?php
session_start();
include('../includes/connection.php');
$id = $_GET['id'];
 

$record=$con->query("SELECT * FROM complains WHERE complain_id='$id'");
if($record->num_rows > 0){

$q=$record->fetch_assoc();
$id=$q['complain_id'];
$ctitle=$q['complain_title'];
$cmatter=$q['complain_matter'];
$cprogress=$q['progress_name'];
$cremarks=$q['remarks'];

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
        <div class="dropdown-content">
                <a href="checkcomplain.php">Check Complain</a>
               
                
                <a href="govprofile.php">Profile</a>


            </div>
        <div class="header-right">



            <a href="../index.php">Logout</a>

        </div>
        <br>
        <br>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

       
            
    </header>


    <div class="new-complain">
        <form class="complainform" method="POST">
            <center>
                <h3>Modify Complain</h3>
            </center>
            <br>
            <center>
                
            </center><input type="number" class="input" placeholder="" value="<?php echo $id ?>"    name="complainid"  readonly>
            <br>
            <input type="text" class="input" placeholder="" value="<?php echo $ctitle ?>"    name="complaintitle" readonly >
            <br>
            <input type="text" class="input"  name="complainmatter" required  value="<?php echo $cmatter ?>" readonly>
            <br>
            
            <p>Yha Progress wala drop down banana h</p>

            <input type="text" class="input" placeholder="Remarks" value="<?php echo $cremarks ?>"     name="complainremarks"  >
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