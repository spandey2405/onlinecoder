<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 12:45 PM
 */

function AddUserValidateRequest($Payloads) {

    if(!$Payloads ['Email'] || !$Payloads ['Password'] || !$Payloads ['Email'] ) {
        Return "False" ;
    }

    Return "True";
}

