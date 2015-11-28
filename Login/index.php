<?php
//$cookie_name = "OnlineCoder";
//if(isset($_COOKIE[$cookie_name])) {
//    header("location:../DashBoard/");
//}
//
$cookie_name = "OnlineCoder";
if(!isset($_COOKIE[$cookie_name])) {

}
else {
    header("location:../DashBoard/");
}
include '../src/Template/header.php';
?>
<html>
<head>
    <title>Login</title>
    <link href="../src/Template/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/register.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
</head>
<body>
<?php DisplayHeader('Sign-in') ?>
<h1 class="register-title" id="register-title">Welcome</h1>
<div class="register" id="register">
    <div class="status" id="status"></div>
    <input type="button" value="Login" class="register-button" id="Login" style="display:none;">

    <form id="signupform">

        <input type="email" class="register-input" name = "Email" id = "Email" placeholder="Email address">
        <input type="password" class="register-input" Name="Password" id="Password" placeholder="Password">

        <input type="button" value="Login" class="register-button" id="Submit">
        <br> Dont Have An Account ?
        <input type="button" value="Register" class="register-button" onclick="location.href='../Signup'">
        <script src="validatorSignin.js"></script>
</form>
</div>
</body>
</html>

