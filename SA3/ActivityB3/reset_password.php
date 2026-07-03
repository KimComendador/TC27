<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost","root","","registration_db");

$id = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];
$confirmPassword = $_POST['confirm_password'];

if($currentPassword != $user['password']){

    echo "
    <script>
    alert('Current password is incorrect!');
    window.location='home.php';
    </script>
    ";
    exit();
}

if($newPassword != $confirmPassword){

    echo "
    <script>
    alert('New Password and Confirm Password do not match!');
    window.location='home.php';
    </script>
    ";
    exit();
}

$update = "UPDATE users
           SET password='$newPassword'
           WHERE id='$id'";

if($conn->query($update)){

    echo "
    <script>
    alert('Password successfully changed!');
    window.location='home.php';
    </script>
    ";

}else{

    echo "
    <script>
    alert('Failed to update password!');
    window.location='home.php';
    </script>
    ";
}
?>