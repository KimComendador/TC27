<?php
$conn = new mysqli("localhost", "root", "", "dog_registry");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $add = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dog_db (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
            VALUES ('$name', '$breed', '$age', '$add', '$color', '$height', '$weight')";

    $conn->query($sql);
}

// display
$sql = "SELECT * FROM dog_db";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row["d_name"] . "<br>";
    echo $row["d_breed"] . "<br>";
    echo $row["d_age"] . "<br>";
    echo $row["d_add"] . "<br>";
    echo $row["d_color"] . "<br>";
    echo $row["d_height"] . "<br>";
    echo $row["d_weight"] . "<br>";
}

$conn->close();
?>
