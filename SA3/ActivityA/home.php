<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:20px;
            text-align:center;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            color:#333;
        }

        a{
            text-decoration:none;
            color:white;
            background:red;
            padding:10px 15px;
            border-radius:5px;
        }

    </style>
</head>
<body>

<div class="container">

    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

    <p>You are successfully logged in.</p>

    <a href = logout.php>LogOut</a >

</div>

</body>
</html>