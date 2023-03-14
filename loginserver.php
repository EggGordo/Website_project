//this file logins to the php server
<?php
$sname="fdb29.awardspace.net";
$uname="4175161_emporiummaster";
$pass="password"; //reminder to change the old password
$dbname="4175161_emporiummaster";
$conn = mysqli_connect($sname,$uname,$pass,$dbname);
if (!$conn) {
    echo "failure!";
}