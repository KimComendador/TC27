<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Operations</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf1a8;
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
            background-color: #f0b1b1;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Array Operations Output</h2>

<?php

$numbers = [15, 28, 46, 59, 60, 34, 8, 101, 95, 74];

$sum = 0;
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

foreach ($numbers as $index => $num) {

    $sum += $num;

    $product *= $num;

    if ($index != 0) {
        $difference -= $num;
    }

    if ($index != 0 && $num != 0) {
        $quotient /= $num;
    }
}
?>

<table>
    <tr>
        <th colspan="2">
            Array List:
            <?php echo implode(", ", $numbers); ?>
        </th>
    </tr>

    <tr>
        <td><strong>Addition</strong></td>
        <td><?php echo $sum; ?></td>
    </tr>

    <tr>
        <td><strong>Subtraction</strong></td>
        <td><?php echo $difference; ?></td>
    </tr>

    <tr>
        <td><strong>Multiplication</strong></td>
        <td><?php echo $product; ?></td>
    </tr>

    <tr>
        <td><strong>Division</strong></td>
        <td><?php echo $quotient; ?></td>
    </tr>

</table>

</body>
</html>
