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
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="../src/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/style.css" rel="stylesheet" type="text/css">
    <link href="../src/css/register.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
</head>
<body>
<div class="header">
    &lt; &gt; HTML Code Editor
    <input type="button" id="show" value="Run Code">
    <a href="../Colors" title="Show Colors">Color </a>
    <a href="../HTML Editor">PHP Editor </a>
    <a href="../PHPEditor">PHP Editor </a>
    <a href="../PythonEditor">Python Editor </a>

</div>
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

