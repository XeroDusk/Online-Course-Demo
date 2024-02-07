<?php 
session_start();
$_SESSION['logged']="none";
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    <title>Academy Aisle | Home</title>
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

                </div>
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
        <div class="main" style=" background-color: rgba(195, 253, 184, 0.6);">
            <h1
                style=" display: flex; position: absolute; justify-content: flex-start; font-family: 'Courier New', Courier, monospace; font-size: 2rem; margin: 5px; padding: 25px;">
                Embrace the
                Journey, Unlock
                Your Potential
            </h1>
            <hr>
            <p
                style=" display:flex; align-items: center; font-family: 'Courier New', Courier, monospace;  top: 10px; position: relative; margin: 10px; margin-left: 15%; font-size: 1.25rem;">
                Academy Aisle is a versatile online learning platform that aims to provide an exceptional
                educational
                experience for learners of all ages and backgrounds. With a vast array of courses, interactive
                lessons,
                and expert instructors, Academy Aisle is dedicated to fostering a lifelong love of learning and
                helping
                students achieve their academic and professional goals.</p>
        </div>
        <div style="position: absolute; top: 20rem; width: 100%; background-color: rgba(255, 248, 231, 0.9);">
            <h1 style="margin-left: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif; margin: 5px; padding: 25px;">
                Our Courses:
            </h1>
            <div class="row g-3" style="margin-left: 20px; padding-top: 10px;">

                <div class="col-4">
                    <img src="pics/java.svg" alt="" height="250px" width="300px"
                        style="margin-left: 45px; margin-top: 10px;">
                    <hr style="max-width: 325px; margin-left: 35px;">
                    <p
                        style="margin-left:40px; font-weight: bold; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        Introduction
                        to Java Programming</p>
                    <p style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif;"> Hello
                        from the world of Java programming!
                        Learn the knowledge and skills programmers need to build applications, websites, and data
                        analysis.</p>
                </div>
                <div class="col-4">
                    <img src="pics/ai.avif" alt="" height="250px" width="300px" style="margin-left: 25px; margin-top: 10px;">
                    <hr style="max-width: 350px;">
                    <p
                        style="font-weight: bold;font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        Artificial Intelligence Workshop
                    </p>
                    <p style="max-width: 300px; font-family: Arial, Helvetica, sans-serif;"> Learn the basic blocks
                        of
                        creating your own neural network: Python,
                        NumPy,
                        Pandas, Matplotlib, PyTorch, and Linear Algebra.</p>
                </div>
                <div class="col-4">
                    <img src="pics/fsd.avif" alt="" height="250px" width="300px"
                        style="margin-left: 25px; margin-top: 10px;">
                    <hr style="max-width: 350px;">
                    <p
                        style="margin-left:5px; font-weight: bold; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        Fullstack Web
                        Development
                    </p>
                    <p style="margin-left:5px; max-width: 300px; font-family: Arial, Helvetica, sans-serif;">
                        Discover
                        how to build data-driven, server-side web
                        apps that can grow to accommodate hundreds of thousands of users and work with any
                        front-end.
                    </p>
                </div>
            </div>
            <br>
            <div style="display: flex; justify-content: flex-end;">
                <div>
                    <a href="Courses.html"><button class="btn" id="hell"> View Courses >></button></a>
                </div>
            </div>
            <br>
        </div>
        <div class="Sign" style="background-color: azure;">
            <div>
                <h1 style="font-weight: bold;">Start for Free:</h1>
                <br>
                <p style="font-size: 1.5rem; max-width: 250px;">Sign up and take the first step towards your goal. Enjoy
                    Learning!</p>
            </div>
            <br>
            <a href="SignUp.php"><button class="btn" id="signup" style="height: 4rem; width: 8rem; padding: 10px;"> Get
                    Started>></button></a>
            <hr>
        </div>
    </div>
</body>

</html>