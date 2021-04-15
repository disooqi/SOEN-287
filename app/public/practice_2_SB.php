<!DOCTYPE html>
<html>
<head><title>Practice 2 - SB</title></head>
<body>
<?php
function MostFrequent($ar_str){
    for($i=0; $i<count($ar_str); $i++){
        $ar_str[$i] = strtolower($ar_str[$i]);
    }
    $tmp = array_count_values($ar_str);
    $max = 0;
    $city = "";
    foreach ($tmp as $k => $v){
        if($v > $max){
            $max = $v;
            $city = $k;
        }
    }

    return $city;
}

$a = Array("Montreal", "Cairo", "Istanbul", "London", "Montreal", "Istanbul", "istanbul");
//echo MostFrequent($a);

function uppercaseFirst($str){
//    return $str;
    return ucwords($str);
}

$my_str = "you can edit PHP code";
//echo uppercaseFirst($my_str);


function splitSort($str){
    $word_array = explode(" ", $str);
    sort($word_array);
    return $word_array;
}

$arr_sorted = splitSort("and view the result in your browser");
foreach ($arr_sorted as $word)
    print $word."<br>";
?>
</body>
</html>
