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
    <title>Academy Aisle | Login</title>
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
                            <a href="Home.php"><button class="btn" id="login">Log Out</button></a>
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
            if($_SESSION['logged']!="none"){
                echo "<h2>Logged in Already</h2>";
            }
            elseif(isset($_POST['login'])){
                login();
            }
            else{
                login_form();
            }
            function login_form(){
                ?>
                <form action="" method="post">
                        <div style="border:2px solid black; padding: 10px 45px 40px 45px; border-radius: 2%; background-color: rgba(241, 223, 223, 0.75);">
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
                            <div class="form-check">
                                <input name="admin" class="form-check-input" type="checkbox" value="yes" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.5rem; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Admin</label>
                            </div>
                        <br>    
                        <input name="login" type="submit"
                            style="padding: 0px     15px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size:25px;"
                            value="Login">
                        </div>
                </form>

                <?php
            }
            function login(){
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "miniproject";
                $conn = mysqli_connect($host, $user, $pass, $db);
                if(!$conn)
                    die("Connection Failed: ".mysqli_connect_error());
                $sql = "SELECT email,password FROM registration";
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $result = mysqli_query($conn,$sql);
                if($result->num_rows>0){
                    $found = False;
                    while($rows = $result->fetch_assoc()){
                        if($rows['email']==$email){
                            $found = True;
                        }
                        if($found==True){
                            if($rows['password']==$pass){
                                if(!isset($_POST['admin'])){
                                    echo "Logged in Successfully";
                                    $_SESSION['logged'] = "user";
                                }
                                else{
                                    echo "Welcome Admin";
                                    $_SESSION['logged']= "admin";
                                }
                                go_home();
                            }
                            else{
                                echo "Wrong Password<br>";
                                cantlogin();
                            }
                            break;
                        }
                    }
                    if($found==False){
                        echo "User Not Found<br>";
                        cantlogin();
                    }
                }
                mysqli_close($conn);
            }
            function cantlogin(){
                ?>
            <button ><a href="Login.php">Try Again</a></button>
            <?php
            }
            function go_home(){
                ?>
                <button ><a href="rf.php">Reviews</a></button>
                <?php
            }
            if($_SESSION['logged']=="none"){ ?>
            <div>
                    <p><br>Don't have an Account ?
                        <a href="SignUp.php"><button class="btn" id="login">Sign Up</button></a>
                    </p>
            </div>
            </div>
            <?php } ?>
    </div>

</html>