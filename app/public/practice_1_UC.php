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

if(isset($_SESSION['views'])){
    $_SESSION['views'] += 1;

    if($_SESSION['views'] > 10)
        $_SESSION['views'] = 1;

} else {
    $_SESSION['views'] = 1;

}

echo "<p>".$_SESSION['views']."</p>";


?>


</body>
</html>