<?php
$FileName = uniqid().".html";
include '../src/lib/login_check.php';
if(isset($_GET['file']))
{
    $filename = "../codebase/".$_GET['file'];
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $HTML = $content;
        $FileName = $_GET['file'];

    }
    else {
        $content = false;
        $filename = "";
        $JS = "";
        $CSS = "";
        $HTML = "";
    }
}
else {
    $content = false;
    $filename = "";
    $JS = "";
    $CSS = "";
    $HTML = "";
}
include '../src/Template/header.php';
?>
<html>
<head>
    <title>
        HTML Editor
    </title>
    <link href="../src/Template/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/editor.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<Usertoken id="<?php echo $token; ?>"></Usertoken>
<?php DisplayHeader() ?>

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
        "><?php echo $HTML; ?></textarea>

        <textarea class="Content" id="CSSContent" placeholder="
CSS Script Here.....
This Will Be Added To Your Main File HTML
        "><?php echo $CSS; ?></textarea>

        <textarea class="Content" id="JSContent" placeholder="
JavaScript Script Here.....
This Will Be Added To Your Main File HTML"
        ><?php echo $JS; ?></textarea>


    </div>


    <iframe cols="40%" class="displayresult" id="displayresult" style="" src="<?php echo $filename; ?>"></iframe>

</div>
<script src="editorDesign.js"></script>
<script src="runHtml.js"></script>
</body>
</html>