<?php
// Initialize variables
$errors = [];
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get and sanitize inputs
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $birthday = htmlspecialchars($_POST['birthday']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);

    // Validation
    if (empty($fname) || empty($lname) || empty($username) || empty($password) || empty($confirm_password)) {
        $errors[] = "Please fill in all required fields.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Password and confirm password are not the same.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // If no errors, prepare result
    if (empty($errors)) {
        $fullName = $fname . " " . $mname . " " . $lname;

        $result = "
        <div class='result'>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Username:</strong> $username</p>
            <p><strong>Password:</strong> $password</p>
            <p><strong>Birthday:</strong> $birthday</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact Number:</strong> $contact</p>
        </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f8eca8;
        }
        .container {
            width: 400px;
            margin: auto;
            background: #f7b56e;
            padding: 20px;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 5px 0 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #98fb8d;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #249746;
        }
        .error {
            color: red;
        }
        .result {
            margin-top: 20px;
            background: #7fe97a;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>My Personal Information</h2>

    <!-- Show Errors -->
    <?php
    if (!empty($errors)) {
        echo "<div class='error'>";
        foreach ($errors as $e) {
            echo "<p>$e</p>";
        }
        echo "</div>";
    }
    ?>

    <!-- Form -->
    <form method="POST">
        First Name:
        <input type="text" name="fname" required>

        Middle Name:
        <input type="text" name="mname">

        Last Name:
        <input type="text" name="lname" required>

        Username:
        <input type="text" name="username" required>

        Password:
        <input type="password" name="password" required>

        Confirm Password:
        <input type="password" name="confirm_password" required>

        Birthday:
        <input type="text" name="birthday" placeholder="January 30 1993">

        Email:
        <input type="text" name="email">

        Contact Number:
        <input type="text" name="contact">

        <button type="submit">Submit</button>
    </form>

    <?php echo $result; ?>
</div>

</body>
</html>