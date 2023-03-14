<html>

<head>
    <title>Login/Registration</title>
</head>
<link rel="stylesheet" ; type="text/css" ; href="style.css" ; />

<body>
    <h1><img src="Logo.png" height="128"><br><br>Login/Registration</h1>
    <h2>
        <a href="/homepage.php">
            <button>Home</button>
        </a>
        <a href="/store.html">
            <button>Store</button>
        </a>
        <a href="/cart.html">
            <button>Cart</button>
        </a>
        <a href="/about.html">
            <button>About</button>
        </a>
        <a href="/login.php">
            <button>Login/Registration</button></a>
    </h2>
    <hr>
    <br>
    <form action="regScript.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?> <!--error check-->
        <lable>Username</lable>
        <br>
        <input name="uname" type="text">
        <br>
        <lable>Password</lable>
        <br>
        <input name="password" type="password">
        <br>
        <lable>Confirm Password</lable>
        <br>
        <input name="confPassword" type="password">
        <br>
        <lable>First Name</lable>
        <br>
        <input name="firstName" type="text">   
        <br>
        <lable>Last Name</lable>
        <br>
        <input name="lastName" type="text">
        <br>
        <label>Phone Number</label>
        <br>
        <input name="phoneNum" type="text">
        <br>
        <label>Email</label>
        <br>
        <input name="email" type="text">
        <br>
        <label>Age</label>
        <br>
        <input name="age" type="text">
        <br>
        <button type="submit">Register</button>
        <br>
    </form>
    <a href="login.php">
            <button>Back to Login</button>
        </a>
</body>
</html>