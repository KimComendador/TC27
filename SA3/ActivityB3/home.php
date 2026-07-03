<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost","root","","registration_db");

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>User Information Form</title>

<style>

        body{
            font-family:Arial,sans-serif;
            background:#f0f0f0;
        }

        .container{
            width:700px;
            margin:30px auto;
            background:white;
            border:2px solid #444;
            border-radius:15px;
            padding:20px;
        }

        .logout{
            float:right;
        }

        .info{
            line-height:2;
        }

        table{
            width:100%;
        }

        td{
            padding:5px;
        }

        .password-box{
            position:relative;
        }

        .password-box input{
            width:100%;
            padding:8px 35px 8px 8px;
            box-sizing:border-box;
        }

        .password-box span{
            position:absolute;
            right:10px;
            top:8px;
            cursor:pointer;
        }

        .center{
            text-align:center;
            margin-top:20px;
        }

        button{
            width:250px;
            padding:10px;
        }

        .footer{
            text-align:center;
            margin-top:30px;
            font-size:28px;
        }

        hr{
            margin:20px 0;
        }
</style>

</head>
<body>

<div class="container">

<h1>User Information Form</h1>

<a href="logout.php" class="logout">Log-out</a>

<div class="info">

<b>Welcome</b>
<?php
echo $user['first_name']." ".
     $user['middle_name']." ".
     $user['last_name'];
?>

<br>

<b>Birthday:</b>
<?php echo $user['birthday']; ?>

<br>

<b>Contact Details</b>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;
<b>Email:</b>
<?php echo $user['email']; ?>

<br>

&nbsp;&nbsp;&nbsp;&nbsp;
<b>Contact:</b>
<?php echo $user['contact no.']; ?>

</div>

<hr>

<h2>RESET PASSWORD</h2>

<table>

<tr>
<td>Enter Current Password:</td>

<td>
<div class="password-box">
<input type="password" id="current" name="current_password" required>

<span onclick="togglePass('current')">👁️</span>
</div>
</td>
</tr>

<tr>
<td>Enter New Password:</td>

<td>
<div class="password-box">
<input type="password" id="new" name="new_password" required>

<span onclick="togglePass('new')">👁️</span>
</div>
</td>
</tr>

<tr>
<td>Re-Enter New Password:</td>

<td>
<div class="password-box">
<input type="password"
id="confirm"
name="confirm_password"
required>

<span onclick="togglePass('confirm')">👁️</span>
</div>
</td>
</tr>

</table>

<div class="center">
<button type="submit">Reset Password</button>
</div>

</form>

<div class="footer">© Sei Cassui</div>

</div>

<script>
function togglePass(id){

    let x = document.getElementById(id);

    if(x.type==="password"){
        x.type="text";
    }else{
        x.type="password";
    }
}
</script>

</body>
</html>