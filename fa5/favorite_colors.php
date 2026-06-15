<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <style>
        body { 
            font-family: Arial; text-align: center; 
        }
        .box {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }
        input { 
            margin: 5px; padding: 5px; width: 90%; 
        }
    </style>
</head>
<body>

<div class="box">
<h2>Enter your favorite colors</h2>

<form method="post" action="colors_results.php">
    <input type="text" name="c1" placeholder="Favorite color 1"><br>
    <input type="text" name="c2" placeholder="Favorite color 2"><br>
    <input type="text" name="c3" placeholder="Favorite color 3"><br>
    <input type="text" name="c4" placeholder="Favorite color 4"><br>
    <input type="text" name="c5" placeholder="Favorite color 5"><br>
    <input type="submit" value="Send Colors">
</form>

</div>

</body>
</html>