<?php
//this handles user logins, and ensures that the user is authenticated through the db
//db connection is handled through dbConn.php
//registration is handled on regScript.php
//notes are mostly for myself, because i keep getting lost in this, php does not read as well as python :/
session_start();
include("dbConn.php");
if(isset($_POST["uname"]) && isset($_POST["password"])) { //clean inputs
    function validate($data) {
        $data = trim($data); //trim data and rewrite
        $data = stripslashes($data); //strip slashes and rewrite
        $data = htmlspecialchars($data); //remove special characters, prevent messes
        return $data; //send it back
    }
}
//run our user and pass through the cleaning function and apply them to their own variables
$uname = validate($_POST["uname"]);
$pass = validate($_POST["password"]);
//these will check and make sure that the fields are not empty
if(empty($uname)) {
    header ("location: login.php?error=Username is Required!"); //uname failure
    exit();
}
elseif(empty($pass)) {
    header ("location: login.php?error=Password is Required!"); //password failure
    exit();
}
//check login information
$sql = "SELECT * FROM userLoginInfo WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1) {  //if good, send information to homepage to be displayed
    $row = mysqli_fetch_assoc($result);
    if($row["username"] === $uname && $row["password"] === $pass) {
        $_SESSION['firstName'] = $row['firstName'];
        header("location: homepage.php"); //display first name on home page
        exit();
    }
    else{ //bad user or pass
        header("location: login.php?error=Incorrect Username or Password");
        exit();
    }
}
else{ //send them back to login page if nothing happened at all or some weird error happened (catch all)
    header("location: login.php");
    exit();
}