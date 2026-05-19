<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
        }

        table {
            width: 60%;
            margin: 40px auto;
            border-collapse: collapse;
            background-color: #eee;
        }

        th, td {
            border: 2px solid #666;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ccc;
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
// ✅ USER-DEFINED FUNCTIONS

function cube($s) {
    return $s * $s * $s;
}

function rectangularPrism($l, $w, $h) {
    return $l * $w * $h;
}

function cylinder($r, $h) {
    return pi() * $r * $r * $h;
}

function cone($r, $h) {
    return (1/3) * pi() * $r * $r * $h;
}

function sphere($r) {
    return (4/3) * pi() * $r * $r * $r;
}
?>

<table>
    <tr>
        <th colspan="3" class="title">Volume of Shapes</th>
    </tr>
    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <!-- Cube -->
    <tr>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo cube(5); ?></td>
    </tr>

    <!-- Rectangular Prism -->
    <tr>
        <td>l = 4, w = 3, h = 2</td>
        <td>V = l × w × h</td>
        <td><?php echo rectangularPrism(4, 3, 2); ?></td>
    </tr>

    <!-- Cylinder -->
    <tr>
        <td>r = 3, h = 5</td>
        <td>V = πr²h</td>
        <td><?php echo number_format(cylinder(3, 5), 2); ?></td>
    </tr>

    <!-- Cone -->
    <tr>
        <td>r = 3, h = 5</td>
        <td>V = 1/3 πr²h</td>
        <td><?php echo number_format(cone(3, 5), 2); ?></td>
    </tr>

    <!-- Sphere -->
    <tr>
        <td>r = 3</td>
        <td>V = 4/3 πr³</td>
        <td><?php echo number_format(sphere(3), 2); ?></td>
    </tr>

</table>

</body>
</html>
