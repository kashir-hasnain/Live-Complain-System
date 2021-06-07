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
    </header>
    <div class="aboutus">
        <h1>Welcome to Complain Cell</h1>

        <h1>Thanks For Visiting this site</h1>
    </div>
</body>

</html>