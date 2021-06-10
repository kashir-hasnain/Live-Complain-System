<?php
session_start();

include('../includes/connection.php');

$id = $_SESSION["admin_id"];


if(! $id)
{
    header('location:admin.php');
}
else{

}
?><!DOCTYPE html>
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
        <a href="../index.php" class="logo">Welcome!</a>

        <div class="header-right">



            <a href="../index.php">Logout</a>

        </div>
        <br>
        <br>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
                <a href="users.php">Total Users</a>
               
                <a href="complains.php">Total complains</a>
                
                <a href="websitebugs.php">Website Bugs</a>
            </div>
    </header>


    <div class="new-complain">
       <form class="complainform">
       <center> 
            <h2>Complains</h2>
</center>
        <?php
            
    
            $sql="SELECT * FROM complains";
                        $query=mysqli_query($con,$sql);
                        $count=mysqli_num_rows($query);
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


                

            ?>
        </table>
            <br>
            <br>

        </form>
    </div>
    </div>

</body>

</html>