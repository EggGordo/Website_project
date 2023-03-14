<?php
$sname="fdb29.awardspace.net";
$uname="4175161_emporiummaster";
$pass="OMITTED";
$dbname="4175161_emporiummaster";
$conn = mysqli_connect($sname,$uname,$pass,$dbname);
if (!$conn) {
    echo "failure!";
}