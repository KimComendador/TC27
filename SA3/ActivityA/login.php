<?php
session_start();

// Static username and password
$validUsername = "admin";
$validPassword = "12345";

$message = "";

if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $validUsername && $password == $validPassword){

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
    <title>Login Page</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .container{
            width:350px;
            margin:100px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
        }

        label{
            font-weight:bold;
            display:block;
            margin-top:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:10px;
            margin-top:15px;
            background:#4CAF50;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#45a049;
        }

        .error{
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Login Module</h2>

    <?php
    if($message!=""){
        echo "<p class='error'>$message</p>";
    }
    ?>

    <form method="post">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>

    </form>

</div>

</body>
</html>