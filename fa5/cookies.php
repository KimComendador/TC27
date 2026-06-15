<?php
// Set cookies only if not yet set
if (!isset($_COOKIE['start'])) {
    setcookie("start", time(), time() + 35);

    // Cookies for names (based on your requirement)
    setcookie("fname", "Kim Arianne", time() + 30);   
    setcookie("mname", "Lapitan", time() + 30); 
    setcookie("lname", "Comendador", time() + 30);     
    setcookie("age", "20", time() + 10);
    setcookie("birthday", "February 8, 2006", time() + 10);
    setcookie("degree", "BSIT - Cybersecurity", time() + 20);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Timer Webpage</title>

    <!-- Refresh every 1 second -->
    <meta http-equiv="refresh" content="1">

    <style>
        body {
            font-family: Arial;
            background: #9bc2f5;
            text-align: center;
        }
        .container {
            background: #63a7e7;
            padding: 20px;
            width: 350px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            margin-bottom: 10px;
        }
        p {
            margin: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Personal Information</h2>

    <?php

    if (isset($_COOKIE['fname'])) {
        echo "<p>First Name: " . $_COOKIE['fname'] . "</p>";
    }
    if (isset($_COOKIE['mname'])) {
        echo "<p>Middle Name: " . $_COOKIE['mname'] . "</p>";
    }
    if (isset($_COOKIE['lname'])) {
        echo "<p>Last Name: " . $_COOKIE['lname'] . "</p>";
    }

    // ✅ Timed disappearance of other details
    if (isset($_COOKIE['start'])) {
        $elapsed = time() - $_COOKIE['start'];

        // 0–10 sec → show age and birthday
        if ($elapsed < 10) {
            if (isset($_COOKIE['age'])) {
                echo "<p>Age: " . $_COOKIE['age'] . "</p>";
            }
            if (isset($_COOKIE['birthday'])) {
                echo "<p>Birthday: " . $_COOKIE['birthday'] . "</p>";
            }
        }

        // 0–20 sec → show degree
        if ($elapsed < 20) {
            if (isset($_COOKIE['degree'])) {
                echo "<p>Degree: " . $_COOKIE['degree'] . "</p>";
            }
        }

    }
    ?>
    </div>

</body>
</html>
