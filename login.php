


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="assets/ncss/style.css" rel="stylesheet">
    </head>
    
    <body>
    <div class="box">
    <div class="login-left">
    <h1>Login</h1>
            <form id="contact-form" method="post" action="validation.php">
        Enter First Name
        <input type="text" name="first_name" class="form-control"><br>
        Password
        <input type="text" name="password" class="form-control"><br>
        <button class="form-control submit" >Login</button>
    </form>
    </div>
   
    <div class="login-right">
    <h1>Register</h1>
            <form id="contact-form" method="post" action="registration.php">
        Enter First Name
        <input type="text" name="first_name" class="form-control"><br>
        Enter Last Name
        <input type="text" name="last_name" class="form-control"><br>
        Enter Password
        <input type="text" name="password" class="form-control"><br>
        Enter Email
        <input type="text" name="email" class="form-control"><br>
        Enter Phone Number
        <input type="text" name="phn" class="form-control"><br>
        <input type="submit" name="Submit" value="Register" class="form-control submit">
    </form>
</div>
    </div>
    </body>
</html>