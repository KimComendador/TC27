<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parameter Values</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6cedf7;
        }

        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #777;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #a0b7f5;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Parameter Values</h2>

<?php

function my_function($param1, $param2, $param3) {

    $sum = $param1 + $param2 + $param3;
    $difference = $param1 - $param2 - $param3;
    $product = $param1 * $param2 * $param3;

    if ($param2 != 0 && $param3 != 0) {
        $quotient = $param1 / $param2 / $param3;
    } else {
        $quotient = "Undefined";
    }

    return [$sum, $difference, $product, $quotient];
}

$p1 = 25;
$p2 = 13;
$p3 = 6;

$result = my_function($p1, $p2, $p3);

?>

<table>
    <tr>
        <th colspan="2">
            My Parameter values: <?php echo "$p1, $p2, $p3"; ?>
        </th>
    </tr>

    <tr>
        <td><strong>Addition</strong></td>
        <td><?php echo $result[0]; ?></td>
    </tr>

    <tr>
        <td><strong>Subtraction</strong></td>
        <td><?php echo $result[1]; ?></td>
    </tr>

    <tr>
        <td><strong>Multiplication</strong></td>
        <td><?php echo $result[2]; ?></td>
    </tr>

    <tr>
        <td><strong>Division</strong></td>
        <td><?php echo $result[3]; ?></td>
    </tr>
</table>

</body>
</html>
