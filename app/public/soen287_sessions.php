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
$_SESSION["course"] = "SOEN287";
$_SESSION["day"] = "Tuesday";
$_SESSION["location"] = "Montreal";

?>
<a href="use_sessions.php">Get SESSION Variables</a>


</body>
</html>