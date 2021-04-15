<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SOEN287 Tutorial 10</title>
</head>
<body>
<?php

$_SESSION['day'] = "My lucky day";


echo "I take ".$_SESSION['course'] . " on " . $_SESSION['day']. "<br>";

unset($_SESSION['day']);

print_r($_SESSION)

?>


</body>
</html>