<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:48 AM
 */
function FileGetRequestValidator($Payloads) {

    if(!$Payloads ['Token'] ) {
        Return "False" ;
    }
    return "True";

}
?>