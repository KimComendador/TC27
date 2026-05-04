<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Program Menu</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 6px;
            text-align: center;
        }

        .menu a {
            display: block;
            margin: 15px 0;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 4px;
        }

        .menu a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<header>
    <h1>Menu</h1>
</header>

<div class="container">

    <h2>Select a Program</h2>

    <div class="menu">
        <a href="conversions.php">Length Conversion Chart</a>
        <a href="graderanking.php">Grade Ranking Program</a>
        <a href="decimalcombination.php">Decimal Combinations</a>
    </div>

</div>

</body>
</html>
