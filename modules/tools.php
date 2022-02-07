<?php

function ValidString($pValue){
    if (strlen($pValue)<1){
        return 402;
    }else{
        return 200;
    };
};

function ValidateNumbers($p1,$p2){
    if(!is_numeric($p1)&&is_numeric($p2)){
        return 400;
    }
    elseif(!is_numeric($p2)&& is_numeric($p1)){
        return 401;
    }
    else{return 200;}
}

?>