<?php


function ExecuteMethodN($pMethod,$pP1, $pP2){
    $err=200;
    global $res;

    switch ($pMethod){
        case "suma":
            $res = $pP1 + $pP2;
            break;
        case "resta":
            $res = $pP1 - $pP2;
            break;
        case "multip":
            $res = $pP1 * $pP2;
            break;
        case "divid":
            $res = $pP1 / $pP2;
            break;
    }
    return $err;
}


if ($err==200){
    $err= ExecuteMethodN($method, $p1, $p2);
}

?>