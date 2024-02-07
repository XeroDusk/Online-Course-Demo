<?php 
session_start();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <title>Academy Aisle | Submit Your Query</title>
</head>

<body id="confusion">
    <div class="_outerouter">
        <header class="_header">
            <div class="_outermost">
                <div class="ln">
                    <div class="_logo">
                        <a href="Home.php" class="imglink">
                            <img alt="AcademyAisle Logo" src="pics/logo.jpg" width=" 300px" height="50px">
                        </a>
                    </div>

                    <nav class="top_nav">
                        <a href="Profile.php" class="_mycourses">
                            <div class="_mycoursesdiv"> My Courses</div>
                        </a>
                        <a href="Courses.php" class="_courses">
                            <div class="_coursesdiv">Courses</div>
                        </a>
                        <a href="rf.php" class="_revfaqs">
                            <div class="_revfaqsdiv"> Reviews and FAQs</div>
                        </a>
                    </nav>

                    <div class="shell">
                        <div class="sls">
                            <div class="searchcont">
                                <div class="search">
                                    <input type="text" role="searchbox" placeholder="Search" id="searchb">
                                </div>
                            </div>
                            <?php
                        if(isset($_SESSION['logged']) and $_SESSION['logged']=="admin"){
                            ?>
                            <div class="sign_log">
                            <a href="SignUp.php"><button class="btn" id="signup">Userbase</button></a>
                            </div>
                            <?php
                            
                        }
                        elseif(isset($_SESSION['logged']) and $_SESSION['logged']=="user"){
                            ?>
                            <div class="sign_log">
                            <a href="Home.php"><button class="btn" id="login">Logout</button></a>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="sign_log">
                            <a href="SignUp.php"><button class="btn" id="signup"> Sign Up</button></a>
                            <a href="Login.php"><button class="btn" id="login"> Login</button></a>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
        </header>

        <main style="position: absolute; top:5rem; margin-left: 25%;">
        <?php 
            if(isset($_SESSION['logged']) and $_SESSION['logged']=="admin"){
                echo "<h1>U r Admin</h1><br>This is no complete";
            }
            elseif(isset($_SESSION['logged']) and $_SESSION['logged']=="user"){
                echo "<h1>Hello User</h1><br> this is not complete";
            }
            else{
                echo "U are not logged in. Please login to view profile.<br>";
                ?>
                <div class="sign_log">
                    <button id="signup"> <a href="Login.php">Login</a></button>
                </div>
                <?php

            }
        ?>
        
    </div>
</html>