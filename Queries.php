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
        <div>
                <?php
                    if($_SESSION['logged']=="admin"){
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "miniproject";
                        // Create a connection object using MySQLi
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check if the connection is successful
                        if (!$conn){
                        die("Connection failed: ".mysqli_connect_error());
                        }
                        $sql = "SELECT * FROM query;";
                        $result = mysqli_query($conn, $sql);
                        if($result->num_rows>0){
                            echo "<table border = 1><tr><th>Query ID</th><th>Name</th><th>Number</th><th>Email</th><th>Query</th></tr>";
                            while($row = $result->fetch_assoc()){
                            echo "<tr><td>".$row['queryId']."</td><td>".$row['name']."</td><td>".$row['number']."</td><td>".$row['email']."</td><td>".$row['query']."</td></tr>";
                        }
                            echo "</table>";
                        }
                    }

                    elseif(isset($_POST['post_query'])){
                        post_query();
                    }
                    else{
                        query_form();
                    }
                    function query_form(){
                        ?>
                        <form action="" method="post">
                        <div
                        style="border:2px solid black; padding: 10px 45px 40px 45px; border-radius: 2%; background-color: rgba(241, 223, 223, 0.75);">
                        <legend>
                            <h3
                                style="font-weight: 400; font-size: 1.75rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Sumbit Your Query</h3>
                        </legend>
                        <div>
                            <label for="name"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Name
                            </label><br><br>
                            <span>

                                <input name="name" type="text" id="name" placeholder="Name"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="con"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Contact
                                Number</label><br><br>
                            <span>
                                <input name="numbr" type="number" id="con" placeholder="Mobile Number"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="em"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Email
                                ID </label><br><br>
                            <span>

                                <input name="email" type="email" id="rem" placeholder="E-Mail"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="me"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Query
                            </label><br><br>
                            <span>
                                <textarea name="query" id="me" cols="42" rows="10"
                                    style="font-family: Arial, Helvetica, sans-serif;"
                                    placeholder="Write Your Queries Here:"></textarea>
                            </span>
                        </div>
                        <br>
                        <input name="post_query" type="submit"
                            style="padding: 0 15px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;"
                            value="SUBMIT">
                        </div>
                </form>
                        <?php
                    }
                    function post_query(){
                        //Define database parameter
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "miniproject";

                        // Create a connection object using MySQLi
                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        // Check if the connection is successful
                        if (mysqli_connect_error()) {
                        die("Connection failed: " . mysqli_connect_error());
                        }

                        //Get all fields from form and store them in variable
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $number = $_POST['numbr'];
                        $query = $_POST['query'];   
                        //Submit data
                        $sql = "INSERT INTO query (name,number,email,query) VALUES ('$name','$number','$email','$query')";
                        $res = mysqli_query($conn , $sql);
                        echo "Successfully registered!";
                        go_back();
                        
                        // Close the connection
                        mysqli_close($conn);
                    }
                    function go_back(){
                        ?>
                            <div class="sign_log">
                                <button id="signup"> <a href="rf.php">Go Back!</a></button>
                            </div>
                    <?php
                    }
                ?>
            </div>
    </div>
</html>