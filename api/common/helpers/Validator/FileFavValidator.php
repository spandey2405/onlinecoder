<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:49 AM
 */
function FileFavRequestValidator($Payloads) {

    if(!$Payloads ['Token'] || !$Payloads ['File'] || !$Payloads ['Fav']) {
        Return "False" ;
    }
    return "True";

}
?>