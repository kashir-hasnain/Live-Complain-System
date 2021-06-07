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
                <h3>All Complains registered by user</h3>
            </center>
            <br>

            <p>Zero Complains.Here New complains are shown here</p>

        </form>
    </div>
    </div>

</body>

</html>