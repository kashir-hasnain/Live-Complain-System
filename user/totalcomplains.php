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
        <form class="complainform" method="gets">
            <center>
                <h3>Complains</h3>
            </center>
            
            <br>
            <?php
            $fetch_id="SELECT user_id from users WHERE user_username='$_SESSION[uname]'";
    $sql=mysqli_query($con,$fetch_id);
    $ids=mysqli_fetch_assoc($sql);
    $print=$ids['user_id'];
    $sql="SELECT * FROM complains  INNER JOIN progess on complains.progress_id=progess.progress_id WHERE user_id='$print'";
                $query=mysqli_query($con,$sql);
                
                $count=mysqli_num_rows($query);
                if($count>0)
                {

                    ?>
                    <table style="width:100%">
                <tr>


                    <th>Complain ID</th>
                    <th>Complain Title</th>
                    <th>Complain Matter</th>
                    <th>Complain Progress</th>
                    <th>Remarks</th>
                </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($query))
                    {
                        
                        
                  echo"<tbody>";
      echo"<td>"; echo $row['complain_id']; echo"</td>";
      echo"<td>"; echo $row['complain_title']; echo"</td>";
      echo"<td>"; echo $row['complain_matter']; echo"</td>";
      echo"<td>"; echo $row['progress_name']; echo"</td>";
      echo"<td>"; echo $row['remarks']; echo"</td>";
      echo"</tbody>";
                        

                    }


                }

            ?>
        </table>
            
            <br>
            <br>

        </form>
    </div>
</nav>
</body>
<?php
            

?>
</html>