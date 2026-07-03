<?php
session_start();

$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' 
            AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();

    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }

        .login-box{
            width:320px;
            margin:100px auto;
            border:2px solid #444;
            border-radius:12px;
            padding:20px;
            background:#f8f8f8;
        }

        h3{
            margin-top:0;
            font-weight:normal;
        }

        label{
            display:block;
            margin-top:10px;
        }

        input[type=text],
        input[type=password]{
            width:100%;
            padding:8px;
            border:1px solid #999;
            box-sizing:border-box;
            margin-top:5px;
        }

        .btn{
            width:100%;
            margin-top:20px;
            padding:10px;
            font-size:16px;
            cursor:pointer;
        }

        .footer{
            text-align:center;
            margin-top:25px;
        }

        .error{
            color:red;
            text-align:center;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h3>Log-In Form</h3>

    <?php
    if($message!=""){
        echo "<div class='error'>$message</div>";
    }
    ?>

    <form method="POST">

        <label>Username</label>
        <input type="text" name="username" placeholder="chris_tio" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login" class="btn">

    </form>

    <div class="footer">
        © Sei Cassui
    </div>

</div>

</body>
</html>