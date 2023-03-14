<html>
    <!--this was otiginally a html document, made it into a php file so I dont go mad-->
    <head>
        <title>Login/Registration</title>
    </head>
    <link rel="stylesheet"; type="text/css"; href="style.css";/>
    <body>        
        <h1><img src="/Images/Logo.png" height="128"><br><br>Login/Registration</h1>
        <h2>
            <a href="/homepage.php">
                <button>Home</button></a> 
            <a href="/store.php">
                <button >Store</button></a>
            <a href="/cart.html">
                <button>Cart</button></a> 
            <a href="/about.html">
                <button>About</button></a>
            <a href="/login.php">
                <button>Login/Registration</button></a>
        </h2>
        <hr>
        <br>
        <form action="loginScript.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?> <!--error check-->
            <label>Username</label>
            <input name="uname" type="text">
            <br>
            <label>Password</label>
            <input name="password" type="password">
            <br>
            <button type="submit">Login</button>
            <br>
            <br>
        </form>
        <a href="registration.php">
                <button>Registration Page</button>
            </a>
    </body>
</html>