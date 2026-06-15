<!DOCTYPE html>
<html>
<head>
    <title>Personal Info Output</title>
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
   
   </style>
</head>
<body>

<div class="container">
<h2>Personal Info</h2>

<form method="post">
    First Name: <input type="text" name="fname"><br>

    Middle Name: <input type="text" name="mname"><br>

    Last Name: <input type="text" name="lname"><br>

    Date of Birth: <input type="text" name="dob"><br>

    Address: <input type="text" name="address"><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function validate($data, $pattern) {
        return preg_match($pattern, $data);
    }

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    // Validation patterns
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
