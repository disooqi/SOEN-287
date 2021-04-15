<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial 10: Practice 2</title>
</head>
<body>
<?php
function most_freq($str_arr){
    $freq_arr = array_count_values($str_arr);
//    foreach ()

    return $freq_arr['a'] ;

}
$arr = array("a", "a", "b", "c", "b", "b");
echo most_freq($arr);
?>
</body>
</html>
