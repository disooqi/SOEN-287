<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial 10: Practice 1 - UC</title>
</head>
<body>

<?php

function uppercaseFirst($str){
    return ucwords($str);
//    foreach(explode(" ", $str) as $word){
//        print strtoupper($word[0]). substr($word, 1) . " ";
//    }
}
echo uppercaseFirst("central bank of canada");


function splitSort($str){
    $list = explode(" ", $str);
    for($i=0; $i < count($list); $i++){
        $aarr[$i] = strtolower($list[$i]);
    }
    asort($aarr, SORT_STRING);

    $list_sorted = array();
    foreach (array_keys($aarr) as $key)
        array_push($list_sorted, $list[$key]);

    return $list_sorted;
}

//$sorted = splitSort("b a c a A VV AA aaa");
//
//foreach ($sorted as $word) {
//    print $word . "<br>";
//}

?>


</body>
</html>