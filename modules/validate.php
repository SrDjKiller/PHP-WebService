<?php
// echo "<br>---------------------- Modulo VALIDATE";

/* Validar si el método existe */

function _ValidateMethodExists($pMethod){

    $method_list = array('lcase','ucase','reverse','equals','capitalize','lenght','instr','suma','resta','multip','divid','type');

    if (in_array($pMethod, $method_list, TRUE)) {
        return 200;
    } else {
        // echo "<br>Metodo NO Valido";
        return 403;
    };
};
///////////////////////////////////////////////////////////////
function _ValidateParamsForThisMethod($pMethod, $pP1,$pP2){
    $err=404;
    switch ($pMethod){
        case "lcase":
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case "ucase";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case "reverse";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case "equals";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;    
        case "capitalize";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case "lenght";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case "instr";
            $err=ValidString($pP1);
            // echo "<br>Metodo Valido";
            break;
        case'suma':
            // echo "<br>Metodo Valido";
            return ValidateNumbers($pP1,$pP2);
            break;
        case'resta':
            // echo "<br>Metodo Valido";
            return ValidateNumbers($pP1,$pP2);
            break;
        case'multip':
            // echo "<br>Metodo Valido";
            return ValidateNumbers($pP1,$pP2);
            break;
        case'divid':
            // echo "<br>Metodo Valido";
            return ValidateNumbers($pP1,$pP2);
            break;
    }
    return $err;

};
///////////////////////////////////////////////////////////////
$err= _ValidateMethodExists($method);

if ($err==200){
    $err= _ValidateParamsForThisMethod($method,$p1,$p2);
}
?>