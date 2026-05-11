<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>
        body {
            margin: 0;
            background-color: #ddd;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        h1 {
            font-size: 60px;
            margin: 20px 0;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            border: 2px solid gray;

            text-align: center;
            vertical-align: middle;

            font-size: 30px;   /* ✅ ONLY CHANGE: bigger numbers */
            font-weight: bold;
            color: black;
        }

        .yellow {
            background-color: yellow;
        }

        .red {
            background-color: red;
        }
    </style>
</head>

<body>

<h1>Multiplication Table</h1>

<table>

<?php for ($row = 0; $row <= 10; $row++) { ?>
<tr>

<?php for ($col = 0; $col <= 10; $col++) { ?>

<?php
$value = $row * $col;

if (($row + $col) % 2 == 0) {
    $color = "yellow";
} else {
    $color = "red";
}
?>

<td class="<?php echo $color; ?>">
    <?php echo $value; ?>
</td>

<?php } ?>

</tr>
<?php } ?>

</table>

</body>
</html>