<!DOCTYPE html>
<html>
<head>
    <title>Personal Info Input</title>
    <style>
        body { 
            font-family: Arial; 
            background-color: #b8e5f3;
        }
        .container { 
            width: 400px; margin: auto; 
        }
        input { 
            width: 100%; margin: 5px 0; padding: 5px; 
        }
        .error { 
            color: red; 
        }
        button {
            width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer;

        }
       button:hover {
            background-color: #408b44;
        }

    </style>
</head>
<body>

<div class="container">
<h2>Personal Info</h2>

<form method="get">
    First Name:
    <input type="text" name="fname" value="<?= $_GET['fname'] ?? '' ?>"><br>

    Middle Name:
    <input type="text" name="mname" value="<?= $_GET['mname'] ?? '' ?>"><br>

    Last Name:
    <input type="text" name="lname" value="<?= $_GET['lname'] ?? '' ?>"><br>

    Date of Birth:
    <input type="text" name="dob" value="<?= $_GET['dob'] ?? '' ?>"><br>

    Address:
    <input type="text" name="address" value="<?= $_GET['address'] ?? '' ?>"><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['fname'])) {

    function validate($data, $pattern) {
        return preg_match($pattern, $data);
    }

    $fname = $_GET['fname'];
    $mname = $_GET['mname'];
    $lname = $_GET['lname'];
    $dob = $_GET['dob'];
    $address = $_GET['address'];

    //validation patterns
    $namePattern = "/^[a-zA-Z. ]+$/";       
    $dobPattern = "/^[a-zA-Z0-9, ]+$/";      
    $addressPattern = "/^[a-zA-Z0-9\- ]+$/"; 

    echo "<h3>Output:</h3>";

    if (validate($fname,$namePattern) &&
        validate($mname,$namePattern) &&
        validate($lname,$namePattern) &&
        validate($dob,$dobPattern) &&
        validate($address,$addressPattern)) {

        echo "First Name: $fname <br>";
        echo "Middle Name: $mname <br>";
        echo "Last Name: $lname <br>";
        echo "Date of Birth: $dob <br>";
        echo "Address: $address <br>";
    } else {
        echo "<p class='error'>Invalid input. Please check your entries.</p>";
    }
}
?>

</div>
</body>
</html>