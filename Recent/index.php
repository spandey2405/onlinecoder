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
<Usertoken id="<?php echo $token; ?>"></Usertoken>
<div class="header">
    < / > OnlineCoder < / >
    <input type="button" id="show" value="Run Code">
    <a href="http://onlinecoder.in/colors.php" target="_blank" title="Show Colors">Color </a>

</div>
<div class="side-menu" id="side-menu">
    <a href="../DashBoard">DashBoard</a>
    <a href="../Favourite">MyFav</a>
    <a href="../Recent">Recent</a>
    <a href="../PHPEditor">PHP Editor </a>
    <a href="../HTMLEditor">HTML Editor </a>
    <a href="../Logout">Logout</a>
</div>
<div class="mainbody">

    <h1>Favourite Files</h1>
    <center>
        <table>
            <?php
            include '../src/lib/login_check.php';
            $Data = file_get_contents("http://localhost/onlinecoder/api/views/fileview.php?Token=".$token);
            $Data = json_decode($Data,true);
            $Data = $Data['Payloads'];

            if($Data != "NoData"){
            foreach($Data as $FileData) {

                $File = $FileData['File'];
                $Filename = $FileData['Filename'];
                $Fav = $FileData['Fav'];
                $Time = $FileData['Time'];
                $Type = $FileData['Type'];

                if ($Fav == '0') {
                    $FavText = "Set Favourite";$triggerFav = "1"; $fav = "";
                }
                else {
                    $FavText = "Remove From Favourite";$triggerFav = "0"; $fav = "ActiveFav";
                }

                echo "<tr>";
                echo "<td width='30%'><div id='$File' style='width:100%;height: 100%;' class='$fav'>$Filename</div></td>";
                echo "<td width='15%' ><a href='../codebase/$File' download>Download File</a></td>";
                echo "<td width='10%' id='view' name='$File'>View</td>";
                echo "<td width='15%' >$Time</td>";
                echo "<td width='20%' id='Fav' name='$File' class='$triggerFav' style='cursor: pointer;'>$FavText</td>";
            }

            } else {
                echo "<tr> <td>No Files , Make One</td></tr>";
            }
            ?>

        </table>
    </center>
</div>
<script src="../src/lib/sidebar.js" type="text/javascript"></script>
<script src="Rename.js" type="text/javascript"></script>
</body>
</html>
