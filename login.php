<?php
include 'setup.php';
include 'server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GWSC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f87064e2901b920769365bd/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/xtra.css" rel="stylesheet">

</head>

<body style="background-color: #f0ad4e;overflow-y:hidden">

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- <i class="fab fa-github fa-2x mx-3 ps-1"></i> -->
                <h3 class="GWSC"><a href="index.php" class="logo-text">GWSC</a></h3>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Availability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workshop.php">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Attractions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="featured.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./event-management/event-management/login.php">Booking</a>
                    </li>
                </ul>

                <div class="dropdown drop-cont">
                    <button class="btn btn-info dropdown-toggle m-3 " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><a href="viewProfile.php" class="drop-item">View Profile</a></button>
                        <button class="dropdown-item" type="button"><a href="editProfile.php" class="drop-item">Edit Profile</a></button>
                        <button class="dropdown-item" type="button"><a href="logout.php" class="drop-item">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>

        <form class="me-3">
                    <div class="form-white input-group" style="width: 250px;">
                        <input type="search" class="form-control rounded" placeholder="search favorite" aria-label="Search" aria-describedby="search-addon" />
                    </div>
                </form>
    </nav>

    <div>
        <form action="" name="frmUser" method="post">

            <div class="container">
                <div class="row" style="display: flex;justify-content:center;margin-top:150px">
                    <div class="col-sm-6">

                        <h1 style="color: white;display: flex;justify-content:center">Login</h1>
                        <P style="color: white;display: flex;justify-content:center">Fill up the form with correct values.</P>
                        <hr class="mb-3">
                        <div class="message" style="color: red;display: flex;justify-content:center">
                            <?php if ($message != "") {
                                echo $message;
                            } ?></div>

                        <label for="username"><b>Username</b></label>
                        <input class="form-control" id="username" type="text" name="user_name" required>


                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>
                        <hr class="mb-3">

                        <?php if (isset($failed_login_attempt) && $failed_login_attempt >= 3) { ?>
                            <div>
                                <input name="captcha_code" type="text">
                                <hr />
                                <img src="captcha_code.php" />
                                <hr />
                            </div>
                        <?php } ?>
                        <div style="display: flex;justify-content:center;align-items:center;">
                            <input type="submit" class="btn btn-primary" id="login" name="submit" value="Login">
                        </div>


                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="js/jquery-3.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/new-bootstrap4.js"></script>
</body>

</html>