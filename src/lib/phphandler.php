<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 22/11/15
 * Time: 11:45 PM
 */

if($_POST) {

    $filename = $_POST['File'];
    $code = $_POST['PHP'];
    $file = "../../codebase/".$filename;
    $fileout = "../codebase/".$filename;
    $myfile = fopen($file, "w") or die("Unable to open file!");
    fwrite($myfile, $code);
    fclose($myfile);
    echo $fileout;
}

?>


