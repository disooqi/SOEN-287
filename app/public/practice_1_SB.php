<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><title>Practice 1 - SB</title></head>
<body>
<?php
if(!isset($_SESSION["views"])){
    $_SESSION["views"] = 0;
}

$_SESSION["views"] += 1;
if($_SESSION["views"] > 10){
    $_SESSION["views"] = 1;
}
echo "You have visited this page ".$_SESSION["views"]." times";

?>


</body>
</html>

