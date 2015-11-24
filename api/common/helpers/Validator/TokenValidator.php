<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 10:57 PM
 */
function GetTokenValidateRequest($Payloads) {

    if(!$Payloads ['Email'] || !$Payloads ['Password'] ) {
        Return "False" ;
    }
    return "True";

}
?>