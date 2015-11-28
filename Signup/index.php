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
?>
<html>
<head>
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="../src/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/style.css" rel="stylesheet" type="text/css">
    <link href="../src/css/register.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
</head>
<body>
<div class="header">
    &lt; &gt; HTML Code Editor
    <a href="http://onlinecoder.in/Colors" title="Show Colors">Color </a>
    <a href="http://onlinecoder.in/HTMLEditor">HTML Editor </a>
    <a href="http://onlinecoder.in/PHPEditor">PHP Editor </a>
    <a href="http://onlinecoder.in/PythonEditor">Python Editor </a>

</div>
<h1 class="register-title" id="register-title">Welcome</h1>
<div class="register" id="register">
    <div class="status" id="status"></div>
    <input type="button" value="Login" class="register-button" id="Login" style="display:none;">

    <form id="signupform">

        <input type="email" class="register-input" name = "Email" id = "Email" placeholder="Email address">
        <input type="text" class="register-input" name = "Username" id="Username" placeholder="Username">
        <input type="password" class="register-input" Name="Password" id="Password" placeholder="Password">

        <input type="button" value="Create Account" class="register-button" id="Submit">
        <br> Have An Account ?
        <input type="button" value="Login" class="register-button" onclick="location.href='../Login'">
        <script src="../src/js/signup.js"></script>
        <script src="validatorSignup.js"></script>
        <script src="checkusername.js"></script>
</form>
</div>
</body>
</html>

