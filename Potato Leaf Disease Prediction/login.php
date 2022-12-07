<?php
session_start();
include 'config.php';

?>

<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Potato Leaf Disease Prediction</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/Content/logos/favicon.png" rel="icon">
    <link href="/Content/logos/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="/Content/client_side_assets/css/google_font.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/Content/client_side_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="/Content/client_side_assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <!-- <link href="/Content/client_side_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/Content/client_side_assets/css/style.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- php css -->
    <link rel="stylesheet" href="main_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    </link>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <style>
    #registered-body {
        background-color: #2D25A0;
    }

    #footer {
        background: rgb(218, 201, 201);
        padding: 15px 0 15px 0;
        color: #212529;
        font-size: 14px;
        background: #fef8f5;
    }

    .container {
        max-width: 440px;
        padding: 0 20px;
        /* margin: 40px auto; */
        padding-bottom: 0px;
    }

    footer .copyright {
        text-align: center;
        float: left;
        padding-bottom: 0%;
    }
    </style>
</head>


<body id="registered-body">


    <div>
        <center>
            <div id="d">
                <div class="container">
                    <div class="wrapper">
                        <div class="title"><span>ADMIN LOGIN</span></div>
                        <form action="login.php" method="post">

                            <div class="row">
                                <i class="fa fa-envelope"></i>
                                <input name="email" type="text" placeholder="Email" required />
                            </div>

                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input name="pass" type="password" placeholder="Password" required />
                            </div>
                            <div class="pass"><a href="#">Forgot password?</a></div>
                            <div class="row button">
                                <input name="login" type="submit" value="Login" />
                            </div>
                            <div class="signup-link">
                                Not a member? <a href="signup.php">Signup now</a>
                            </div>
                        </form>
                    </div>
                </div>

                <?php

                if (isset($_POST['login'])) {

                    $email = $_POST['email'];
                    $pass = $_POST['pass'];

                    $check = "select*from user where email='$email' AND pass ='$pass'";
                    $check_work = mysqli_query($con, $check);

                    if ($check_work) {
                        if (mysqli_num_rows($check_work) > 0) {
                            $_SESSION['email'] = $email;
                            echo "
    <script>
    alert('You are Successfully  Logged in');
    window.location.href='index.php';
    </script>
    ";

                        } else {

                            echo "
    <script>
    alert('Password or Email not Found ');
    window.location.href('login.php');
    </script>
    ";
                        }


                    } else {


                        echo "
    <script>
    alert('Database Error  ');
    window.location.href('signup.php');
    </script>
    ";
                    }



                } else {


                }

                ?>

            </div>
        </center>
    </div>
    <footer id="footer">


        <div class="container ">
            <div class="copyright">
                &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");

    sidebarBtn
        .onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            } else

                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        }
    </script> -->


</body>

</html>