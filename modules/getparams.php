<?php

// echo "<br>---------------------- Module GETPARAMS";

$method="";
$p1="";
$p2="";
$p3="";
$date=date('Y-m-d h:i:s a', time());

$res="UNDEFINED";

$err=0;
$err_desc="";

/////////////////////////////////////////////
if(isset($_GET["method"])){
    $method=$_GET["method"];
}

if(isset($_GET["p1"])){
    $p1=$_GET["p1"];
}

if(isset($_GET["p2"])){
    $p2=$_GET["p2"];
}

/////////////////////////////////////////////

// echo "<br>_____________________";
// echo "<br>method=".$method;
// echo "<br>p1=".$p1;
// echo "<br>p2=".$p2;
// echo "<br>".$date;


?>