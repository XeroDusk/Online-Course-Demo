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
    <title>Academy Aisle | Courses</title>
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
                            <div class="_mycoursesdiv"> My Profile</div>
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
        <div style="position:relative; width: 100%; background-color: #FAF9F6; margin: auto;">
            <div style="background-color: rgba(195, 253, 184, 0.6);">
                <h1
                    style="font-family:Verdana, Geneva, Tahoma, sans-serif; margin: 5px; padding: 25px; font-weight: bold;">
                    Our Courses:
                </h1>
            </div>
            <hr>
            <hr>
            <h2 style=" font-family:'Courier New', Courier, monospace; margin: 5px; font-weight: 400; padding: 25px; ">
                Become A
                Web Developer:</h2>
            <hr>
            <div class="row gx-3"
                style="margin-left: 20px; margin-right: 20px; padding-top: 10px; background-color: #F0FFF0; ">

                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">

                        <img class="card-img-top" src="pics/chash.svg" alt="Learn C#: Introduction" height="250px"
                            width="300px" style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Learn C#: Introduction</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Dive into C#, a scalable programming language that is easy to read and maintain.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: WEB0121</li>
                            <li class="list-group-item">Duration: 6 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">
                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">

                        <img class="card-img-top" src="pics/css3html.svg"
                            alt="Build a Website with HTML, CSS, and GitHub Pages" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Build a Website with HTML, CSS, and GitHub Pages</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn the basics of web development to build your own website.

                                Includes HTML, CSS, Responsive Design, Flexbox, CSS Transitions, GitHub Pages, and more.
                            </p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: WEB0110</li>
                            <li class="list-group-item">Duration: 3 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/fsd.avif" alt="Fullstack Web
                        Development" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Fullstack Web
                                Development</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Discover
                                how to build data-driven, server-side web
                                apps that can grow to accommodate hundreds of thousands of users and work with any
                                front-end.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: WEB1111</li>
                            <li class="list-group-item">Duration: 8 Months</li>
                            <li class="list-group-item">Skill Level: Intermediate</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <br>
            <h2 style=" font-family:'Courier New', Courier, monospace; margin: 5px; font-weight: 400; padding: 25px; ">
                Introductory
                Courses:</h2>
            <hr>
            <div class="row gx-3"
                style="margin-left: 20px; margin-right: 20px; padding-top: 10px; background-color: #F0FFF0; ">

                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/p3.svg" alt="Learn Python 3" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Learn Python 3</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn the basics of Python 3, one of the most powerful, versatile, and in-demand
                                programming languages today.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: PYT3012</li>
                            <li class="list-group-item">Duration: 3-6 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">
                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">

                        <img class="card-img-top" src="pics/kalilin.png" alt="Introduction to Cybersecurity" height="250px"
                            width="300px" style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Introduction to Cybersecurity</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn about the fast-growing field of cybersecurity and how to protect your data and
                                information from digital attacks.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: CYS3310</li>
                            <li class="list-group-item">Duration: 2-4 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/java.svg" alt="Introduction to JAVA" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Introduction
                                to Java Programming</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Hello
                                from the world of Java programming!
                                Learn the knowledge and skills programmers need to build applications, websites, and
                                data
                                analysis.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: JAV0425</li>
                            <li class="list-group-item">Duration: 6 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <h2 style=" font-family:'Courier New', Courier, monospace; margin: 5px; font-weight: 400; padding: 25px; ">
                Data Science and
                Artificial Intelligence:</h2>
            <hr>
            <div class="row gx-3"
                style="margin-left: 20px; margin-right: 20px; padding-top: 10px; background-color: #F0FFF0; ">

                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/sql-database-generic.svg" alt="Analyze Data with SQL"
                            height="250px" width="300px" style="padding: 10px 10px 10px 0; width: 95%;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Analyze Data with SQL</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn to analyze data with SQL and prepare for technical interviews.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: SQL0421</li>
                            <li class="list-group-item">Duration: 3 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/ai.avif" alt="Aritificial Intelligence Workshop" height="250px"
                            width="300px" style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Artificial Intelligence Workshop</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn the basic blocks
                                of
                                creating your own neural network: Python,
                                NumPy,
                                Pandas, Matplotlib, PyTorch, and Linear Algebra.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: DAS5271</li>
                            <li class="list-group-item">Duration: 4 Months</li>
                            <li class="list-group-item">Skill Level: Beginner</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/tensorflow.svg" alt="Build Deep Learning Models with TensorFlow"
                            height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Build Deep Learning Models with TensorFlow</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Discover
                                how to build data-driven, server-side web
                                apps that can grow to accommodate hundreds of thousands of users and work with any
                                front-end.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: TSF2313</li>
                            <li class="list-group-item">Duration: 6 Months</li>
                            <li class="list-group-item">Skill Level: Intermediate</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <h2 style=" font-family:'Courier New', Courier, monospace; margin: 5px; font-weight: 400; padding: 25px; ">
                Choose A Career
                Path:</h2>
            <hr>
            <div class="row gx-3"
                style="margin-left: 20px; margin-right: 20px; padding-top: 10px; background-color: #F0FFF0; ">

                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/ds.avif" alt="Data Scientist: Inference Specialist"
                            height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Data Scientist: Inference Specialist</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Inference Data Scientists run A/B tests, do root-cause analysis, and conduct
                                experiments. They use Python, SQL, and R to analyze data.

                                Includes Python 3, SQL, R, pandas, scikit-learn, NumPy, Matplotlib, and more.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: DSI0153</li>
                            <li class="list-group-item">Duration: 12 Months</li>
                            <li class="list-group-item">Skill Level: -</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/ad.avif" alt="iOS Developer" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                iOS Developer</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Learn how to use Swift and SwiftUI to build iOS applications.

                                Includes iOS, Mobile Development, Swift, Firebase, SwiftUI, Xcode, Interview Prep,
                                Backend Development, Git, Algorithms, Data Structures, and more.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: IOS5473</li>
                            <li class="list-group-item">Duration: 12 Months</li>
                            <li class="list-group-item">Skill Level: -</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-white bg-gradient text-left" style="width: 25rem; height: 47.5rem;">
                        <img class="card-img-top" src="pics/be.avif" alt="Back-End Engineer" height="250px" width="300px"
                            style="padding: 10px 10px 10px 0; width: 95%; margin-left: 15px;">
                        <div class="card-body">
                            <p class="card-text">
                            <p
                                style="margin-left:40px; font-weight: bold; text-align: start; font-size: 1.25rem; max-width: 300px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                                Back-End Engineer</p>
                            <hr>
                            <p
                                style="margin-left:40px; max-width: 300px; font-family: Arial, Helvetica, sans-serif; text-align: start;">
                                Back-end developers deal with the hidden processes that run behind the scenes, building
                                APIs and databases that power the front-end.

                                Includes Node.JS, Express.JS, PostgreSQL, Back-End, SQL, Security, and more.</p>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Course ID: BDE4312</li>
                            <li class="list-group-item">Duration: 8 Months</li>
                            <li class="list-group-item">Skill Level: -</li>
                        </ul>
                        <div class="card-body">

                            <a href="SignUp.php" class="card-link"><button class="btn" id="signup">Sign Up</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
        </div>
    </div>
</body>


</html>