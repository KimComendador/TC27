<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking Program</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
        }

        header, footer {
            background: #2f6f2f;
            color: white;
            text-align: center;
            padding: 15px;
        }

        .container {
            width: 850px;
            margin: 30px auto;
            background: #fff;
            border: 2px solid #9acd8d;
            padding: 30px;
        }

        .name-box {
            border: 2px solid #9acd8d;
            padding: 10px;
            width: fit-content;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .output {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .box {
            border: 2px solid #9acd8d;
            width: 130px;
            height: 120px;
            text-align: center;
            font-size: 20px;
            padding-top: 30px;
        }

        .picture {
            border: 2px solid #9acd8d;
            width: 150px;
            height: 150px;
            font-size: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

<header>
    <h1>Grade Ranking Program</h1>
</header>

<div class="container">

<?php
    $name = $_GET['name'] ?? "First Name MI. Lastname";
    $grade = $_GET['grade'] ?? 95;

    if ($grade >= 93 && $grade <= 100) {
        $rank = "A";
        $emoji = "🏆";
    }
    elseif ($grade >= 90 && $grade <= 92) {
        $rank = "A-";
        $emoji = "🎉";
    }
    elseif ($grade >= 87 && $grade <= 89) {
        $rank = "B+";
        $emoji = "😊";
    }
    elseif ($grade >= 83 && $grade <= 86) {
        $rank = "B";
        $emoji = "🙂";
    }
    elseif ($grade >= 80 && $grade <= 82) {
        $rank = "B-";
        $emoji = "👍";
    }
    elseif ($grade >= 77 && $grade <= 79) {
        $rank = "C+";
        $emoji = "👌";
    }
    elseif ($grade >= 73 && $grade <= 76) {
        $rank = "C";
        $emoji = "✏️";
    }
    elseif ($grade >= 70 && $grade <= 72) {
        $rank = "C-";
        $emoji = "📘";
    }
    elseif ($grade >= 67 && $grade <= 69) {
        $rank = "D+";
        $emoji = "😐";
    }
    elseif ($grade >= 63 && $grade <= 66) {
        $rank = "D";
        $emoji = "😕";
    }
    elseif ($grade >= 60 && $grade <= 62) {
        $rank = "D-";
        $emoji = "😟";
    }
    else {
        $rank = "F";
        $emoji = "😭";
    }
?>

    <div class="name-box">
        Name: <?php echo $name; ?>
    </div>

    <div class="output">
        <div class="box">
            Rank:<br><br>
            <strong><?php echo $rank; ?></strong>
        </div>

        <div class="box">
            Grade:<br><br>
            <strong><?php echo $grade; ?></strong>
        </div>

        <div class="picture">
            <?php echo $emoji; ?>
        </div>
    </div>

</div>

<footer>
    <p>&copy; 2026 Grade Ranking Program</p>
</footer>

</body>
</html>