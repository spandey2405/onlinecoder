<?php
$FileName = uniqid().".php";
include '../src/lib/login_check.php';

if(isset($_GET['file']))
{
    $filename = "../codebase/".$_GET['file'];
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $FileName = $_GET['file'];

    }
    else {
        $content = false;
        $filename = "";

    }
}
else {
    $content = false;
    $filename = "";

}
include '../src/Template/header.php';
?>
<html>
<head>
    <title>
        PHP Editor
    </title>
    <link href="../src/Template/css/header.css" rel="stylesheet" type="text/css">
    <link href="../src/css/editor.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="../src/js/jquery-1.10.2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">

</head>
<body>
<Usertoken id="<?php echo $token; ?>"></Usertoken>
<?php DisplayHeader() ?>

<div class="DisplayBody">

    <div class="fileinfo" id ="<?php echo $FileName; ?>">File Name : <?php echo $FileName; ?></div>

    <div class="codeEditor">
        <textarea class="Content display" id="PHPContent" placeholder="Php code code ...."><?php echo $content; ?></textarea>
    </div>


    <iframe cols="40%" class="displayresult" id="displayresult" style="<?php echo $filename; ?>"></iframe>

</div>
<script src="editorDesign.js"></script>
<script src="runPHP.js"></script>
</body>
</html>