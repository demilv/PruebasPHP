<?php
$datos = file_get_contents('roomData.json');

$rooms = json_decode($datos, true);

echo "<ol>";

foreach ($rooms as $room) {
    echo "<li>";
    echo "BedType: " . $room["bedType"] . "<br>";
    echo "Number: " . $room["number"] . "<br>";
    echo "Price: " . $room["price"] . "<br>";
    echo "Discount: " . $room["offer"] . "<br><br>";
    echo "</li>";
}

echo "</ol>"

?>