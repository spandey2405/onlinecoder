<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 6:27 PM
 */


define ('EMAIL_ALREADY_EXISTS',301,True);
define ('USER_NAME_EXIST',302,True);


define ('EMAIL_DOES_NOT_EXISTS',401,True);
define ('WRONG_PASSWORD',402,True);
define ('DATA_EXISTS',403,True);


define ('ERROR_ALREADY_EXISTS', 901);
define ('ERROR_DUP_NAME', 902);
define ('ERROR_DATA_NOT_FOUND', 903);

define ('TYPE_NOT_SPECIFIED', 801);
define ('PAYLOAD_MISSING', 802);
define ('COULD_NOT_UPDATE',803);

define ('SUCCESS',200,True);
define ('FILE_ADDED_SUCCESSFULLY', 201);
define ('DATA_SUCCESSFULLY_UPDATED', 202);



function ReturnResponse($Code) {
    if ($Code == ERROR_DUP_NAME) {
        $Response["Message"] = "Data Already Exists";
        $Response["Status"] = "False";
    }
    else if ($Code == ERROR_DATA_NOT_FOUND) {
        $Response['Message'] = "No Found";
        $Response["Status"] = "False";
    }
    else if ($Code == PAYLOAD_MISSING) {
        $Response['Message'] = "Payload Missing";
        $Response["Status"] = "False";
    }
    else if ($Code == FILE_ADDED_SUCCESSFULLY) {
        $Response['Message'] = "File Added Successfully";
        $Response["Status"] = "True";
    }
    else if ($Code == DATA_SUCCESSFULLY_UPDATED) {
        $Response['Message'] = "Record Updated Successfully";
        $Response["Status"] = "True";
    }
    else if ($Code == COULD_NOT_UPDATE) {
        $Response['Message'] = "Record Updated Successfully";
        $Response["Status"] = "True";
    }
    else {
        $Response['Message'] = "Something Went Wrong";
        $Response['Status'] = "False";
    }
    return $Response;
}


?>