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
        <form class="complainform" method="POST">


            <center>
                <h3>Users</h3>
            </center>
            <?php
            
    
            $sql="SELECT * FROM users";
                        $query=mysqli_query($con,$sql);
                        $count=mysqli_num_rows($query);
                        ?>
            <table style="width:100%">
                <tr>


                    <th>User ID</th>
                    <th>User Name</th>
                    <th>CNIC</th>
                    <th>Email</th>
                    <th>Adress</th>
                    <th>Phone No</th>
                    <th>Actions</th>
                    
                </tr>
                <?php
                
                    while($row=mysqli_fetch_assoc($query))
                    {
                        ?>
                  <tbody>
      <td><?php echo $row['user_id'];?> </td>
      <td><?php echo $row['user_username'];?></td>
      <td><?php echo $row['user_cnic']; ?></td>
      <td><?php echo $row['user_email'];?></td>
     <td> <?php echo $row['user_address'];?> </td>
      <td><?php echo $row['uphone_no'];?></td>
      <td><a href="useredit.php?id=<?php echo $row['user_id'];?>" class="link">Edit</a> | <a href="userdelete.php?id=<?php echo $row['user_id'];?>" class="link">Delete</a>
                    </td>
       
      </tbody>
                        
<?php
                    }
                    ?>


                

           
            </table>
                <br>
        </form>
    </div>
    </div>

</body>

</html>