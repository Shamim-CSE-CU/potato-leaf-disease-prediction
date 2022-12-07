<?php
use LDAP\Result;

session_start();
include 'config.php';
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Potato Leaf Disease Prediction </title>
    <!-- css file -->
    <link rel="stylesheet" href="main_style.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
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
        margin: 40px auto;
        padding-bottom: initial;
    }

    footer .copyright {
        text-align: center;
        float: left;
        padding-bottom: 0%;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">

            <iconify-icon icon="bx:leaf"></iconify-icon>
            <span class="logo_name">PLDP</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active default_bg">
                    <i class="bx bx-home"></i>
                    <span class="links_name">Home</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-user"></i>

                    <span class="links_name">My Profile</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <iconify-icon class="iconify_diagnose" icon="bx:folder-plus"></iconify-icon>
                    <span class="links_name">Diagnose</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">More</span>
                </a>
            </li>
            <li>
                <a href="#app" class="default_bg">
                    <i class="bx bx-camera"></i>
                    <span class="links_name">Capcha Image</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out" class="default_bg">
                <a href="logout.php">
                    <i class="bx bx-log-out"></i>
                    <span id="button-out" class="links_name">Log out</span>
                </a>
            </li>

            <script>
            document.getElementById("button-out").addEventListener("click", () => {
                alert('You are Successfully  Logged out');

                window.location.href = 'logout.php';


            })
            </script>
        </ul>
    </div>

    <section class="home-section">

        <section class="nav">

            <div class="healthy">
                <h1>Potato Leaf Disease Prediction</h1>
                <p>Health is Wealth</p>

            </div>

            <nav>

                <div class="sidebar-button">
                    <div id="box_menu">
                        <i class="bx bx-menu sidebarBtn"></i>
                        <span class="dashboard">Potato Leaf Disease Prediction</span>
                    </div>


                    <div class="search-box">
                        <input type="text" placeholder="Search..." />
                        <i class="bx bx-search"></i>
                    </div>
                </div>


            </nav>
        </section>











        <!-- change on button background color onClick and revert previously clicked button to default background   start javascript code  -->

        <script>
        var buttons = document.querySelectorAll('.default_bg');

        for (i in buttons) {
            buttons[i].onclick = function() {
                console.log('test')
                buttons.forEach(function(btn) {
                    btn.classList.remove('highlight');
                })
                this.classList.add('highlight');
            }
        }
        </script>
        <!-- change on button background color onClick and revert previously clicked button to default background   end javascript code  -->





        <footer id="footer">

            <div class="container py-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
                </div>
            </div>


        </footer>

    </section>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
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
    </script>
</body>

</html>