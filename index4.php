<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $datos = file_get_contents('roomData.json');
    $rooms = json_decode($datos, true);
    $roomExists = null;

    foreach ($rooms as $room) {
        if ($room['id'] == $id) {
            $roomExists = $room;
            break;
        }
    }

    if ($roomExists) {
        echo "<h2>Esta es la habitacion que invocaste</h2>";
        echo "BedType: " . $room["bedType"] . "<br>";
        echo "Number: " . $room["number"] . "<br>";
        echo "Price: " . $room["price"] . "<br>";
        echo "Discount: " . $room["offer"] . "<br><br>";
    } else {
        echo "No se encontró ninguna habitación con el ID que has proporcionado: " . $id;
    }
} else {
    echo "Por favor, proporciona un ID en la URL";
}
?>
