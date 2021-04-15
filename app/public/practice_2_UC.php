<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial 10: Practice 2 - UC</title>
</head>
<body>

<?php

function most_freq($str_arr){

    $str_arr = array_map("strtolower", $str_arr);

    $freq_arr = array_count_values($str_arr);
    $max = 0;
    $e = "Nothing";
    foreach ($freq_arr as $k => $v){

        if($v > $max) {
            $max = $v;
            $e = $k;
        }
    }
    echo $e . " occurs " . $max . " times <br>";
    return $e;
}

$a = array("a", "a", "b", "b", "c", "B");
echo "The most frequent element in the array is " . most_freq($a);

?>

</body>
</html>