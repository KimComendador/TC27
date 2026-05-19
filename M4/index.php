<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biography Stories</title>

<style>
body {
    font-family: Arial;
    background-color: #88cdeb;
    text-align: center;
}

.title {
    margin: 20px;
}

.container {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.box {
    width: 200px;
    height: 300px;
    border: 2px solid #555;
    background-color: #ec9aef;

    display: flex;
    justify-content: center;
    align-items: center;

    color: blue;
    font-weight: bold;
}

</style>
</head>

<body>

<h1 class="title">Biography Stories</h1>

<?php require("header.php"); ?>

<h2>Select Biography</h2>

<!-- ✅ IMPORTANT: Boxes must be INSIDE container -->
<div class="container">

    <a href="bio1.php" class="box">Biography 1</a>
    <a href="bio2.php" class="box">Biography 2</a>
    <a href="bio3.php" class="box">Biography 3</a>
    <a href="bio4.php" class="box">Biography 4</a>
    <a href="bio5.php" class="box">Biography 5</a>

</div>

<?php include("footer.php"); ?>

</body>
</html>
