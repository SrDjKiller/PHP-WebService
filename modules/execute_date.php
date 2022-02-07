<?php


function ExecuteMethodN($pMethod,$pP1, $pP2, $pP3){
    $err=0;
    global $res;

    switch ($pMethod){
        case "date":
            $res = date($pP1)
            break;
    }
    return $err;
}


if ($err==0){
    $err= ExecuteMethodN($method, $p1, $p2, $p3);
}

?>