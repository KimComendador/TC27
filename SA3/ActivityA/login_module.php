<?php
// Cookie variables
$username = "";
$password = "";

// Load saved cookies
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

if (isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
}

// Save cookies when form is submitted and Remember Me is checked
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {

        // Cookies will last for 30 days
        setcookie("username", $username, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");

    } else {

        // Delete cookies if Remember Me was not checked
        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Module</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
        }

        .container{
            width: 380px;
            margin: 80px auto;
        }

        .header{
            background:#fff;
            padding:15px 20px;
            border-radius:3px;
            box-shadow:0px 2px 5px rgba(0,0,0,0.1);
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:35px;
        }

        .logo{
            font-size:30px;
            font-weight:bold;
        }

        .menu{
            font-size:28px;
            color:#888;
            border:1px solid #e1a6a6;
            padding:3px 10px;
            border-radius:4px;
        }

        label{
            display:block;
            margin-bottom:5px;
            font-weight:bold;
            color:#333;
        }

        input[type=text],
        input[type=password]{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:3px;
            margin-bottom:15px;
            box-sizing:border-box;
            font-size:15px;
        }

        .remember-area{
            margin-top:5px;
            display:flex;
            align-items:center;
            gap:8px;
        }

        .btn{
            padding:8px 15px;
            border:none;
            background:#e5e5e5;
            border-radius:4px;
            cursor:pointer;
        }

        .btn:hover{
            background:#d5d5d5;
        }

        .footer{
            text-align:center;
            color:green;
            margin-top:25px;
            font-size:22px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div class="logo">◉</div>
        <div class="menu">☰</div>
    </div>

    <form method="POST">

        <label>Username</label>
        <input type="text"
               name="username"
               value="<?php echo $username; ?>"
               placeholder="user123"
               required>

        <label>Password</label>
        <input type="password"
               name="password"
               value="<?php echo $password; ?>"
               placeholder="*****"
               required>

        <div class="remember-area">
            <span>Remember Me</span>
            <input type="checkbox" name="remember">

            <button type="submit" class="btn">
                Submit
            </button>
        </div>

    </form>

    <div class="footer">
        © KIM ARIANNE L. COMENDADOR
    </div>

</div>

</body>
</html>