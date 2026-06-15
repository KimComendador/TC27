<?php
session_start();

// Save colors from first page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['colors'] = [
        $_POST['c1'],
        $_POST['c2'],
        $_POST['c3'],
        $_POST['c4'],
        $_POST['c5']
    ];
}

// Default background
$bgColor = "white";

// If user clicked a color button
if (isset($_POST['color'])) {
    $bgColor = htmlspecialchars($_POST['color']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: 
            <?php echo htmlspecialchars($bgColor); ?>;
        }
        .box {
            background: white;
            padding: 20px;
            width: 400px;
            margin: 50px auto;
            border-radius: 10px;
        }
        button {
            padding: 10px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">

<h2>Click a color</h2>

<?php
// Display buttons safely
if (isset($_SESSION['colors'])) {
    foreach ($_SESSION['colors'] as $color) {

        if (!empty($color)) {

            // ✅ sanitize output
            $safeColor = htmlspecialchars($color);

            echo "<form method='post' style='display:inline;'>
                    <input type='hidden' name='color' value='$safeColor'>
                    <button style='background:$safeColor;'>$safeColor</button>
                  </form>";
        }
    }
}
?>

<br><br>
<a href="favorite_colors.php">Go Back</a>

</div>

</body>
</html>
