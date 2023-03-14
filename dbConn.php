<?php
$sname="fdb29.awardspace.net";
$uname="4175161_emporiummaster";
$pass="password"; //Place holder pass
$dbname="4175161_emporiummaster";
$conn = mysqli_connect($sname,$uname,$pass,$dbname);
if(!$conn) {
    echo "Connection Failure";
}