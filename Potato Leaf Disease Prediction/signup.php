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
    <!-- <link href="/Content/logos/favicon.png" rel="icon">
    <link href="/Content/logos/favicon.png" rel="apple-touch-icon"> -->

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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    </link>


    <style>
    #registered-body {
        background-color: #2D25A0;
    }
    </style>
</head>


<body id="registered-body">


    <div>
        <center>
            <div id="d">
                <div class="container">
                    <div class="wrapper">
                        <div class="title"><span>SIGN-UP</span></div>
                        <form action="signup.php" method="post">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <input name="name" type="text" placeholder="Name" required />
                            </div>
                            <div class="row">
                                <i class="fa fa-envelope"></i>
                                <input name="email" type="text" placeholder="Email" required />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input name="pass" type="password" placeholder="Password" required />
                            </div>
                            <div class="row">
                                <i class="fas fa-lock"></i>
                                <input name="cpass" type="password" placeholder="Cpassword" required />
                            </div>

                            <div class="row button">
                                <input name="signup" type="submit" value="Sign-up" />
                            </div>
                            <div class="signup-link">
                                Already Sign-In? <a href="login.php">login</a>
                            </div>
                        </form>
                    </div>
                </div>





                <?php


                if (isset($_POST['signup'])) {

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $cpass = $_POST['cpass'];



                    if ($pass == $cpass) {

                        $query = "select*from user where email='$email'";
                        $query_run = mysqli_query($con, $query);
                        if ($query_run) {

                            if (mysqli_num_rows($query_run) > 0) {

                                echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";


                            } else {

                                $insertion = "insert into user values('','$name','$email','$pass')";


                                $insertion_run = mysqli_query($con, $insertion);

                                if ($insertion_run) {

                                    echo "
		<script>
		alert('Registration Successful ');
		window.location.href='login.php';
		</script>
		";

                                } else {

                                    echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='signup.php';
		</script>
		";
                                }


                            }



                        } else {
                            echo "
		<script>
		alert('Database Problem');
		window.location.href='signup.php';
		</script>
		";

                        }


                    } else {
                        echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='signup.php';
		</script>
		";
                    }


                } else {


                }


                ?>

            </div>
        </center>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>

</html>