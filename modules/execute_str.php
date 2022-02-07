<?php


// echo "<br>---------------------- Module Execute STRING";

function ExecuteMethodS($pMethod,$pP1, $pP2, $pP3){
    $err=200;
    global $res;

    switch ($pMethod){
        case "lcase":
            $res=strtolower($pP1);
            break;
        case "ucase":
            $res=strtoupper($pP1);
            break;
        case "reverse":
            $res=strrev($pP1);
            break;
        case "equals":
            $res=ucwords($pP1);
            break;
        case "lenght":
            $res=strlen($pP1);
            break;
        case "instr":
            if(str_contains($pP1,$pP2)){
                $res = 'la palabra existe';
                }
                else{$res = 'la palabra no existe';}
            break;
    }
    return $err;
}


if ($err==200){
    $err= ExecuteMethodS($method, $p1, $p2, $p3);
}

?>