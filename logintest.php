<?php
$sname="fdb29.awardspace.net";
$uname="4175161_emporiummaster";
$pass="xgQN9SYc7v:+x1s3";
$dbname="4175161_emporiummaster";
$conn = mysqli_connect($sname,$uname,$pass,$dbname);
if (!$conn) {
    echo "failure!";
}