<?php
session_start();
if(isset($_SESSION['firstName'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Jackson's Office Emporium!</title>
</head>
<link rel="stylesheet" ; type="text/css" ; href="style.css" ; />

<body>
    <h1><img src="Logo.png" height="128"><br><br>Welcome to Jackson's Office Emporium, <?php echo $_SESSION['firstName'];?>!</h1>
    <h2>
        <a href="/homepage.php">
            <button>Home</button></a>
        <a href="/store.html">
            <button>Store</button></a>
        <a href="/cart.html">
            <button>Cart</button></a>
        <a href="/about.html">
            <button>About</button></a>
        <a href="/login.php">
            <button>Login/Registration</button></a>
    </h2>
    <hr>
    Welcome to <b>Jackson's Office Emporium</b> <?php echo $_SESSION['firstName'];?>, where you can find all of your office needs!<br><br>
    We only sell <u>the best</u> office products that are garunteed to keep you and your customers happy!<br><br>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</body>

</html>
<?php 
}
else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Welcome to Jackson's Office Emporium!</title>
    </head>
    <link rel="stylesheet" ; type="text/css" ; href="style.css" ; />
    
    <body>
        <h1><img src="Logo.png" height="128"><br><br>Welcome to Jackson's Office Emporium!</h1>
        <h2>
            <a href="/homepage.php">
                <button>Home</button></a>
            <a href="/store.html">
                <button>Store</button></a>
            <a href="/cart.html">
                <button>Cart</button></a>
            <a href="/about.html">
                <button>About</button></a>
            <a href="/login.php">
                <button>Login/Registration</button></a>
        </h2>
        <hr>
        Welcome to <b>Jackson's Office Emporium</b>, where you can find all of your office needs!<br><br>
        We only sell <u>the best</u> office products that are garunteed to keep you and your customers happy!<br><br>
    </body>
    
    </html>
<?php
}