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
    <title>Academy Aisle | Sign Up</title>
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
                            <a href="Queries.php"><button class="btn" id="signup">Queries</button></a>
                            </div>
                            <?php
                        }
                        elseif(isset($_SESSION['logged']) and $_SESSION['logged']=="user"){
                            ?>
                            <div class="sign_log">
                            <a href="Queries.php"><button class="btn" id="signup">Queries</button></a>
                            </div>
                            <div class="sign_log">
                            <a href="Home.php"><button class="btn" id="login">Log Out</button></a>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="sign_log">
                            <a href="SignUp.php"><button class="btn" id="signup"> Sign Up</button></a>
                            <a href="Login.php"><button class="btn" id="login">Login</button></a>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
        </header>

        <main style="position: absolute; top:5rem; margin-left: 25%; ">
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
                    $sql = "SELECT userid,name,email,courseid,password FROM registration;";
                    $result = mysqli_query($conn, $sql);
                    if($result->num_rows>0){
                        echo "<table border = 1><tr><th>User ID</th><th>Name</th><th>Email</th><th>Course ID</th><th>Password</th></tr>";
                        while($row = $result->fetch_assoc()){
                        echo "<tr><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['courseid']."</td><td>".$row['password']."</td></tr>";
                        }
                        echo "</table>";
                    }
                }
                elseif($_SESSION['logged']=="user"){
                    echo "Already logged in";
                }
                elseif(isset($_POST['submit'])){
                    register();
                }
                else{
                    signup_form();
                }
                function signup_form(){
                    ?>
                    <form action="" method="post">
                    <fieldset>

                        <div
                        style="border:2px solid black; padding: 10px 45px 40px 45px; border-radius: 2%; background-color: rgba(241, 223, 223, 0.75) ;">
                        <div>
                            <label for="name"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Name
                            </label><br>
                            <span>

                                <input name="name" type="text" id="name" placeholder="Name"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="em"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Email
                                ID </label><br>
                            <span>

                                <input name="email" type="email" id="em" placeholder="E-Mail"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="me"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Password
                            </label><br>
                            <span>
                                <input name="pass" type="password" id="me" placeholder="Enter Password"
                                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
                            </span>
                        </div>
                        <br>
                        <div>
                            <label for="cid"
                                style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Course ID
                            </label><br>
                            <span>

                                <input name="courseid" type="text" id="cid" placeholder="Course ID"
                                    style="font-family: Arial, Helvetica, sans-serif;" required>
                            </span>
                        </div>
                        <br>
                        <input name="submit" type="submit"
                            style="padding: 0 15px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px;"
                            value="Sign Up">
                        </fieldset>
                </form>
                    <?php
                }
                function register(){
                    //Define database parameter
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
                    //Get all fields from form and store them in variable
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $course = $_POST['courseid'];
                    $pass = $_POST['pass'];
                    //Submit data
                    $exists=False;
                    $sql = "SELECT email FROM registration;";
                    $result = mysqli_query($conn,$sql);
                    while($user= $result->fetch_assoc()){
                        if($user['email']==$email){
                            $exists = True;
                        }
                    }
                    if($exists){
                        echo "Email Already Registered<br>";
                        go_back_to_sign();
                    }
                    else{
                        $sql = "INSERT INTO registration (name, email, courseid, password) VALUES ('$name','$email','$course','$pass');";
                        $res = mysqli_query($conn,$sql);
                        echo "Registered<br>";
                        go_back();}
                    mysqli_close($conn);
                }
                function go_back(){
                    ?>
                    <button ><a href="Home.php">Home</a></button>
                    <?php
                }
                function go_back_to_sign(){
                    ?>
                    <button ><a href="SignUp.php">Go Back</a></button>
                    <?php
                }
                ?>
                <br>
                <?php
                if($_SESSION['logged']=="none"){
                ?>
                <div>
                    <p>Already Have An Account?
                        <a href="Login.php"><button class="btn" id="login">Login</button></a>
                    </p>
                </div>
                <?php
                }
                ?>
            </div>
    </div>

</html>