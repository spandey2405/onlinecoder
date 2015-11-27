<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 10:57 PM
 */
function UserGetRequestValidator($Payloads) {

    if(!$Payloads ['Token'] ) {
        Return "False" ;
    }
    return "True";

}
?>