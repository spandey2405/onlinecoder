<?php
$FileName = uniqid().".html";
include '../src/lib/login_check.php';

?>
<html>
<head>
    <title>
        HTML Editor
    </title>
    <link href="../src/css/editor.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
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
        <div class="tab-box" id="tabarea">
            <a href="javascript:;" class="tabLink activeLink" name ="HTMLContent" id="HTMLTab">HTML Code</a>
            <a href="javascript:;" class="tabLink " name ="CSSContent"  id="CSSTab">CSS Style</a>
            <a href="javascript:;" class="tabLink " name ="JSContent"  id="JSTab">Java Script</a>
        </div>

        <textarea class="Content display" id="HTMLContent" placeholder="
HTML code ....
<html><body></body></html> is already added ,
Just Put Up Your Content Over Here
        "></textarea>

        <textarea class="Content" id="CSSContent" placeholder="
CSS Script Here.....
This Will Be Added To Your Main File HTML
        "></textarea>

        <textarea class="Content" id="JSContent" placeholder="
JavaScript Script Here.....
This Will Be Added To Your Main File HTML"
        ></textarea>


    </div>


    <iframe cols="40%" class="displayresult" id="displayresult" style=""></iframe>

</div>
<script src="editorDesign.js"></script>
<script src="runHtml.js"></script>
</body>
</html>