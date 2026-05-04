<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            margin: 30px;
        }

        .output-box {
            border: 1px solid #000;
            padding: 15px;
            width: 800px;
            line-height: 1.6;
            font-size: 32px;
            text-align: center;
            width: 800px;
        
        }

    </style>
</head>

<body>

<div class="output-box">
<?php
    for ($tens = 0; $tens <= 9; $tens++) {
        for ($ones = 0; $ones <= 9; $ones++) {

            if ($tens == 9 && $ones == 9) {
                echo $tens . $ones;
            } else {
                echo $tens . $ones . ", ";
            }

            if ($ones == 9) {
                echo "<br>";
            }
        }
    }
?>
</div>

</body>
</html>