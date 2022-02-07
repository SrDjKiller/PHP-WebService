<?php

function erroresWS($err){
    switch($err){
        case 200:
            return 'OK';
            break;
        case 400:
            return 'MISSING PARAMETER 1';
            break;
        case 401:
            return 'MISSING PARAMETER 2';
            break;
        case 402:
            return 'MISSING CONTENT';
            break;
        case 403:
            return 'METHOD NOT ALLOWED';
            break;
        case 404:
            return 'VALIDATION ERROR';
            break;
    }
}



$error_descr = erroresWS($err);
?>