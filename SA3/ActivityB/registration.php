<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "registration_db";

$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if ($password != $confirm) {

        $message = "<span class='error'>Password and Confirm Password are not the same.</span>";

    } else {

        $sql = "INSERT INTO users
                (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
                VALUES
                ('$fname','$mname','$lname','$username','$password','$birthday','$email','$contact')";

        if ($conn->query($sql) === TRUE) {

            $message = "<span class='success'>Registration Successfully Saved!</span>";

        } else {

            $message = "<span class='error'>Error: " . $conn->error . "</span>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Module</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f3f3f3;
        }

        .container{
            width:400px;
            margin:30px auto;
        }

        h3{
            font-weight:normal;
        }

        label{
            display:block;
            margin-top:8px;
            color:#333;
        }

        input{
            width:100%;
            padding:8px;
            border:1px solid #999;
            box-sizing:border-box;
            font-size:15px;
        }

        .btn{
            width:100%;
            padding:10px;
            margin-top:20px;
            cursor:pointer;
        }

        .success{
            color:green;
            font-weight:bold;
        }

        .error{
            color:red;
            font-weight:bold;
        }

        .footer{
            margin-top:10px;
        }

        .note{
            margin-top:15px;
            font-size:15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h3>My Personal Information</h3>

    <form method="POST">

        <label>First Name</label>
        <input type="text" name="fname" required>

        <label>Middle Name</label>
        <input type="text" name="mname">

        <label>Last Name</label>
        <input type="text" name="lname" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30 1993" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <input type="submit" value="Submit" class="btn">

    </form>

    <div class="footer">
        © Crix Brix
    </div>

    <div class="note">
        <b>Note:</b> the Password and Confirm Password should be the same before it show the result otherwise show
        "password and confirm password are not the same".
        <br><br>
        <b>Note:</b> You will be using this form registration to input data then save to the database.
    </div>

    <br>

    <?php echo $message; ?>

</div>

</body>
</html>