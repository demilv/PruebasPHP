<?php
$datos = file_get_contents('roomData.json');
$rooms = json_decode($datos, true);

echo "<pre>";
print_r($rooms);
echo "</pre>";

?>