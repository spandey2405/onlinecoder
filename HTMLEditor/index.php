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
include '../docs/csstags.php';
include '../docs/htmltags.php';
include '../docs/colors.php';
include '../docs/javascripttags.php';
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
    <style>
        #CSSTags table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        #CSSTags table tr td {
            border: 1px solid #cdcdcd;
            font-family: Arial;
            padding:5px;
            font-size: 12px;
            background: linear-gradient(to bottom, #fafafa 0%,#efefef 100%);
        }

        #HTMLTags table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        #HTMLTags table tr td {
            border: 1px solid #cdcdcd;
            font-family: Arial;
            padding:5px;
            font-size: 12px;
            background: linear-gradient(to bottom, #fafafa 0%,#efefef 100%);
        }
        #JSTags table {
            display: table;
            border-collapse: separate;
            border-spacing: 2px;
            border-color: grey;
        }
        #JSTags table tr td {
            border: 1px solid #cdcdcd;
            font-family: Arial;
            padding:5px;
            font-size: 12px;
            background: linear-gradient(to bottom, #fafafa 0%,#efefef 100%);
        }
        #colors table td {
            width:20px;
            height:20px;
        }
    </style>
</head>
<body>
<Usertoken id="<?php echo $token; ?>"></Usertoken>
<?php DisplayHeader() ?>

<div class="DisplayBody">

    <div class="fileinfo" id ="<?php echo $FileName; ?>">File Name : <?php echo $FileName; ?></div>

    <div class="codeEditor">
        <div class="tab-box" id="tabarea">
            <a href="javascript:;" class="tabLink activeLink" name ="HTMLContent" id="HTMLTab">< /HTML ></a>
            <a href="javascript:;" class="tabLink " name ="CSSContent"  id="CSSTab">< /CSS ></a>
            <a href="javascript:;" class="tabLink " name ="JSContent"  id="JSTab">< /Java Script></a>
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

    <div class="displayResult">
        <div class="tab-box1" id="tabarea1">
            <a href="javascript:;" class="tabLink1 activeLink" name ="Result" id="ResultTab">Result</a>
            <a href="javascript:;" class="tabLink1 " name ="CSSTags"  id="CSStagTab">CSSTags</a>
            <a href="javascript:;" class="tabLink1 " name ="HTMLTags"  id="HTMltagTab">HTMLTags</a>
            <a href="javascript:;" class="tabLink1 " name ="JSTags"  id="JStagTab">JS Tags</a>
            <a href="javascript:;" class="tabLink1 " name ="colors"  id="colorsTab">Colors</a>

        </div>


            <iframe class="Content1 display" id="Result" src="<?php echo $filename; ?>"></iframe>
            <div class="Content1" id="CSSTags" src="">
                <table>
                    <?php

                    foreach ($CSStags as $tag=>$value) {
                        print "<tr width='100%'>";
                        print "<td width='20%' valign='top' id='css_tag' style='cursor: pointer;'>".
                            $tag.
                            "</td><td width='80%'>".$value."</td>";
                        print "</tr>";
                    }

                    ?>
                </table>
            </div>
            <div class="Content1" id="HTMLTags" src="">
                <table>
                <?php

                foreach ($HTMLTags as $tag=>$value) {
                    print "<tr width='100%'>";
                    print "<td width='20%' valign='top' id='html_tag' style='cursor: pointer;'>".
                        $tag.
                        "</td><td width='80%'>".$value."</td>";
                    print "</tr>";
                }

                ?>
                    </table>
            </div>

            <div class="Content1" id="colors" src="">
                <table>
                <?php echo $colors; ?>
                </table>
            </div>

            <div class="Content1" id="JSTags" src="">
                <table>
                    <?php

                    foreach ($JSTags as $tag=>$value) {
                        print "<tr width='100%'>";
                        print "<td width='20%' valign='top' id='js_tag' style='cursor: pointer;'>".
                            $tag.
                            "</td><td width='80%'>".$value."</td>";
                        print "</tr>";
                    }

                    ?>
                </table>
            </div>

    </div>



</div>
<script src="editorDesign.js"></script>
<script src="runHtml.js"></script>
<script src="tagsscript.js"></script>
</body>
</html>