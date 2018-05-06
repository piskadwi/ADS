<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="body_login">
    <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
       <form name="login" method="post" action="proses_login.php">
        <fieldset class="rounded_3">
            <div>
                <label for="username">Username</label>                        
                <input type="text" name="email" />
                </div>
            <div>
                <label for="password">Password</label>                       
                <input type="password" name="password" />
                </div>
            <div>
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <input class="right" type="submit" name="login" value="Login" />    
        </form>
        </form><a href="#" class="forgot-password">Forgot your password?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html> 