<?php
$FileName = uniqid().".php";
include '../src/lib/login_check.php';

?>
<html>
<head>
    <title>
        PHP Editor
    </title>
    <link href="../src/css/editor.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">

</head>
<body>
<Usertoken id="<?php echo $token; ?>"></Usertoken>
<div class="header">
    &lt; / &gt; HTML Code Editor
    <input type="button" id="show" value="Run Code">
    <a href="../">Home</a>
    <a href="../Colors" title="Show Colors">Colors</a>
    <a href="../PHPEditor">PHP Editor </a>
    <a href="../PythonEditor">Python Editor </a>
</div>

<div class="DisplayBody">

    <div class="fileinfo" id ="<?php echo $FileName; ?>">File Name : <?php echo $FileName; ?></div>

    <div class="codeEditor">
        <textarea class="Content display" id="PHPContent" placeholder="Php code code ...."></textarea>
    </div>


    <iframe cols="40%" class="displayresult" id="displayresult" style=""></iframe>

</div>
<script src="editorDesign.js"></script>
<script src="runPHP.js"></script>
</body>
</html>