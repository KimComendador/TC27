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
            text-align:center;
            background:#f2f2f2;
        }

        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        a{
            text-decoration:none;
            background:red;
            color:white;
            padding:10px;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Welcome!</h2>

    <h3><?php echo $_SESSION['username']; ?></h3>

    <p>You have successfully logged in.</p>

   <a href = logout.php>LogOut</a>

</div>

</body>
</html>