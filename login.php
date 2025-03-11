<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" href="cssfile/header.css">
    <title>Document</title>
</head>
<body>
    <div class="main_header">
        <div class="leftsection">
            <div class="logo"><img src="" alt=""></div>
            <div class="menu_choice">
                <a href="landingpage.html">Home</a>
                <a href="AboutUs.html">About Us</a>
                <a href="Course.html">Course</a>
                <a href="contactUs.html">Contact Us</a>
            </div>
        </div>
        <div class="rightsection">
            <a href="login.php">Sign In</a>
            <a href="register.html">Create Account</a>
            <a href="frequencyAskQuestions.html">FAQ</a>
        </div>
    </div>
    <div class="main">
        <div class="left"><img src="" alt=""></div>
        <div class="right" >
            <div class="login">
                <form action="includes/loginFunction.php" method="POST" >
                    <span>Username</span>
                    <input type="text"  name="U_Username" id="U_Username" placeholder="Username" required>
                    <span>Password</span>
                    <input type="password" name="U_Password" id="U_Password" placeholder="Password" required>
                    <div class="link">
                    <a href="forgotPassword.php">Forgot Password?</a>
                    <a href="register.html">Register</a>
                    </div>
                    <button type="submit">login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>