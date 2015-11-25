<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:49 AM
 */
function FileRenameRequestValidator($Payloads) {

    if(!isset($Payloads ['Token']) || !isset($Payloads ['File']) || !isset($Payloads ['Filename'])) {
        Return "False" ;
    }
    return "True";

}
?>