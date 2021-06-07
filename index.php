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
        <a href="index.php" class="logo">Welcome!   Register Your Internet Complains</a>
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
    <div class="banner">
        <img src="images/banner1.jpg" height="400px" width="100%">
    </div>
    <br>
    <br>
    <section id="contact">
        <div class="container">
            <div class="box">

                <h3>News</h3>
                <p>System is Newly Made.</p>
                <p> Version is 1.0.0</p>
                <p>I do hereby solemnly affirm:
                    a. That the facts mentioned in this complaint are correct to the best of my knowledge and belief.
                    b. That no complaint on this subject has previously been lodged with Agency by me, or on my behalf.
                </p>
            </div>
            <div class="box">

                <h3>Social Media</h3>
                <img src="images/facebook.webp" width="10%" height="10%"><img src="images/linkedin.webp" width="10%"
                    height="10%"><img src="images/whatsapp.webp" width="10%" height="10%">
            </div>
            <div class="box">

                <h3>Location</h3>
                <p>House No XYZ ABC ROAD ATTOCK</p>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <footer class="footer">
        <p>All Right Reversed &copy; 2021</p>
    </footer>
</body>

</html>