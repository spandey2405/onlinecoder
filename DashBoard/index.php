<?php
include '../src/lib/login_check.php';
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <link href="../src/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/style.css" rel="stylesheet" type="text/css">
    <link href="../src/css/sidemenu.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
    < / > OnlineCoder < / >
    <input type="button" id="show" value="Run Code">
    <a href="../Colors" title="Show Colors">Color </a>

</div>
<div class="side-menu" id="side-menu">
    <a href="">DashBoard</a>
    <a href="../Favourite">MyFav</a>
    <a href="../Recent">Recent</a>
    <a href="../Logout">Logout</a>
</div>
<div class="mainbody">
    <h1>
        Online HTML Editor
    </h1>
    <p> With this dynamic <i><b>HTML Editor</b></i> you can get you can code online.<br>
        Its too simple , Just write down the code and press control + Enter ! Enjoy Coding.
        <br><br> <input type="button" value="Go To HTML Editor" onclick="location.href='../HTMLEditor/';">
    </p>
    <h1>
        Online PHP Editor
    </h1>
    <p> With this dynamic <i><b>PHP Editor</b></i> you can get you can code online.<br>
        Its too simple , Just write down the code and press control + Enter ! Enjoy Coding.
        <br><br> <input type="button" value="Go To PHP Editor" onclick="location.href='../PHPEditor/';">
    </p>
<!--    <h1>-->
<!--        Online Python Editor-->
<!--    </h1>-->
<!--    <p> With this dynamic <i><b>Python Editor</b></i> you can get you can code online.<br>-->
<!--        Its too simple , Just write down the code and press control + Enter ! Enjoy Coding.-->
<!--        <br><br> <input type="button" value="Go To Python Editor" onclick="location.href='../PythonEditor/';">-->
<!--    </p>-->
    <h1>
        HTML Colors
    </h1>
    <p> With this dynamic <i><b>HTML color table</b></i> you can get HTML codes for all basic colors been used today.<br>
        Its too simple , click on any color square to get its HTML color code copied ! Use it anywhere.
        <br><br>
        <input type="button" value="Watch This" onclick="window.open('http://onlinecoder.in/Colors/', '_blank');">

    </p>
        </table>
    </center>
</div>
<script src="../src/lib/sidebar.js" type="text/javascript"></script>
</body>
</html>
