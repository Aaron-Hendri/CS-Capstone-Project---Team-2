<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="loginPage.css" />
</head>
<body>
    <div class="formContainer">
        <span class="borderLine"></span>
        <form method="post" action="login.php" >
            <h2>Login</h2>
            <div class="inputBox">
                <input type="text" id="username" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="Password" id="password" name="password"required="required">
                <span>Password</span>
                <i></i>
            </div>
            <button type="submit" name="Login">Login</button>
        </form>
    </div>
</body>
</html>