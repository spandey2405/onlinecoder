<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:49 AM
 */
function FileAddRequestValidator($Payloads) {

    if(!isset($Payloads ['Token']) || !isset($Payloads ['File']) || !isset($Payloads ['Type'])) {
        Return "False" ;
    }
    return "True";

}
?>