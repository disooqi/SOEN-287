<?php
session_start();

$file = "visitors.log";

$my_id = session_id();
$file_content = file_get_contents($file);
$ids = unserialize($file_content);

if(!is_array($ids)){
    $ids = [];
}
// ids = [3535423523 => 3, 5523421 => 40, 2341111 => 1]
if(!array_key_exists($my_id, $ids))
    $ids[$my_id] = 1;
else $ids[$my_id]++;

file_put_contents($file, serialize($ids));

echo "Your session id is ".$my_id."<br />";
echo "Number of unique visitors are ".count($ids);
echo "<br />";
print_r($ids);
?>