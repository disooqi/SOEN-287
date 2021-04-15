<?php
session_start();

$file = "visitors.log";
$file_content = file_get_contents($file);
$unser_content = unserialize($file_content);

if(!is_array($unser_content))
    $unser_content = [];

if(!array_key_exists(session_id(), $unser_content))
    $unser_content[session_id()] = 55;

echo "Your session id is ".session_id();
echo "<br>There are ".count($unser_content)." unique visitors";

$ids_ser = serialize($unser_content);

file_put_contents($file, $ids_ser);




