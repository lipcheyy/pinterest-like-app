<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="auth.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
    <form action="includes/signup.php" method="post" class="auth-form" enctype="multipart/form-data">
        <label for="">FULL NAME</label>
        <input type="text" name="fullName" placeholder="Your full name" required>
        <label for="">Login</label>
        <input type="text" name="login" placeholder="Your account login" required>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Your email" required>
        <label for="">Password</label>
        <input type="password" name="pass" placeholder="Write your password" required >
        <label for="">Repeat password</label>
        <input type="password" name="pass-rep" placeholder="repeat your password" required >
        <label for="">Choose your avatar(not requiered)</label>
        <input type="file" name="avatar">
        <input type="submit" name="sign-up" value="sign up" class="sign-up sign-in">
        <div>
           Already have an account - <a href="index.php" style="color: blue">Sign in!</a>
        </div>
    </form>
</div>
</body>
</html>
