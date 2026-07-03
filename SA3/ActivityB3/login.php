<?php
session_start();

$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
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

    $row = $result->fetch_assoc();

   $_SESSION['username'] = $row['username'];

    header("Location: home.php");
    exit();
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>

<style>
        body{
            font-family:Arial, sans-serif;
            background:#f5f5f5;
        }

        .container{
            width:350px;
            margin:100px auto;
            padding:20px;
            background:white;
            border:2px solid #444;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-bottom:10px;
            box-sizing:border-box;
        }

        .password-box{
            position:relative;
        }

        .password-box span{
            position:absolute;
            right:10px;
            top:10px;
            cursor:pointer;
        }

        button{
            width:100%;
            padding:10px;
        }

        .error{
            color:red;
            text-align:center;
        }
    </style>

</head>
<body>

<div class="container">

<h2>Log-In Form</h2>

<?php
if($message!=""){
    echo "<p class='error'>$message</p>";
}
?>

        <form method="POST">

        <input type="text"
        name="username"
        placeholder="Username"
        required>

        <div class="password-box">

        <input type="password"
        id="password"
        name="password"
        placeholder="Password"
        required>

        <span onclick="togglePassword()">👁️</span>

        </div>

        <button type="submit">Login</button>

        </form>

</div>

<script>
function togglePassword(){

    let pass = document.getElementById("password");

    if(pass.type==="password"){
        pass.type="text";
    }else{
        pass.type="password";
    }
}
</script>

</body>
</html>