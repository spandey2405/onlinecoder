<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 22/11/15
 * Time: 11:45 PM
 */

if($_POST) {

$filename = $_POST['File'];
$htmlcode = $_POST['HTML'];
$csscode = $_POST['CSS'];
$jscode = $_POST['JS'];

$file = "../../codebase/".$filename;
$fileout = "../codebase/".$filename;

$myfile = fopen($file, "w") or die("Unable to open file!");


$code = "<html>\n<head>\n".
    "<script>\n$jscode\n</script>\n".
    "</head>\n".
    "<body>\n$htmlcode\n</body>\n<style>\n$csscode\n</style>\n</html>";

fwrite($myfile, $code);
fclose($myfile);

echo $fileout;
}

?>


