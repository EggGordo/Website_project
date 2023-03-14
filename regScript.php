<?php
//this one was a pain, not the best at sql insert statements
//
//like loginScript, we will use dbConn to connect to the db
session_start();
include("dbConn.php");
//ensure passwords match
if ($_POST["password"] === $_POST["confPassword"]) {
    true;
} 
else {
    header("Location: registration.php?error=Passwords do not match!"); //failure message
    exit();
}
//do data validation again like the login script
function validate($data){
    $data = trim($data); //trim data and rewrite
    $data = stripslashes($data); //strip slashes and rewrite
    $data = htmlspecialchars($data); //remove special characters, prevent messes
    return $data; //send it back as an output
}
//run the function for all inputs
$fname = validate($_POST["firstName"]);
$lname = validate($_POST["lastName"]);
$uname = validate($_POST["uname"]);
$pass = validate($_POST["password"]);
$email = validate($_POST["email"]);
$num = validate($_POST["phoneNum"]);
$age = validate($_POST["age"]);
//table will not accept null values, check for them
if(empty($uname)) { //I could have done an or statement, but I want a individualized response for each error so the user can correct properly
    header("location: registration.php?error=Username is Required");
    exit();
}
elseif (empty($pass)) {
    header("location: registration.php?error=Password is Required");
    exit();
}
elseif (empty($fname)) {
    header("location: registration.php?error=First name is Required");
    exit();
} 
elseif (empty($lname)) {
    header("location: registration.php?error=Last name is Required");
    exit();
} 
elseif (empty($num)) {
    header("location: registration.php?error=Email is Required");
    exit();
}
elseif(empty($email)) {
    header("location: registration.php?error=Phone number is Required");
    exit();
}
elseif(empty($age)){
    header("location: registration.php?error=Age is Required");
    exit();
}
//check if username is unique
if ($stmt = $conn->prepare('SELECT id, password FROM userLoginInfo WHERE username = ?')) { //search function for sql    
    $stmt->bind_param('s', $uname); //bind username from input
    $stmt->execute(); //run
    $stmt->store_result(); //return result and append to $stmt
    if ($stmt->num_rows > 0) { //check if table returns a match (more than 0 returns)
        header("Location: registration.php?error=Username is already taken"); //failure message
        exit();
    } //write to table if passsed 
    else{
        $sql ="INSERT INTO `userLoginInfo`(`id`, `username`, `password`, `firstName`, `lastName`, `email`, `age`, `phoneNumber`) VALUES (NULL,'$uname','$pass','$fname','$lname','$email','$age','$num')";
        mysqli_query($conn, $sql); //execute
        header("location: login.php?error=Registration successful, please log in now"); //send them to the login page and confrim acount creation
    }
}