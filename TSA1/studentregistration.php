<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }
        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        h2 {
            background: #4CAF50;
            color: white;
            padding: 10px;
        }
        button {
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
<form method="POST" action="">

<h2>Student Registration</h2>

Last Name: <input type="text" name="lname"><br>
First Name: <input type="text" name="fname"><br>
Middle Initial: <input type="text" name="mi"><br>

Student ID: <input type="text" name="student_id"><br>
Age: <input type="number" name="age"><br>

Gender:
<select name="gender">
    <option>Male</option>
    <option>Female</option>
</select>

Citizenship: <input type="text" name="citizenship"><br>

<h2>Contact Info</h2>
Guardian Name: <input type="text" name="guardian"><br>
Email: <input type="email" name="email"><br>
Cellphone No: <input type="text" name="cellphone no."><br>
Home Address: <input type="text" name="address"><br>
Country: <input type="text" name="country"><br>

<h2>Academic Info</h2>
Program: <input type="text" name="program"><br>
Year Level: <input type="text" name="year"><br>
Semester: <input type="text" name="semester"><br>
Academic Year: <input type="text" name="acad_year"><br>

Enrollment Status:
<select name="status">
    <option>Regular</option>
    <option>Irregular</option>
</select>

Student Type:
<select name="type">
    <option>New</option>
    <option>Transferee</option>
    <option>Returning</option>
</select>

Scholarship:
<select name="scholar">
    <option value="Y">Yes</option>
    <option value="N">No</option>
</select>

<h2>Educational Background</h2>
Previous School: <input type="text" name="school"><br>
Year Graduated: <input type="text" name="grad"><br>
GPA: <input type="text" name="gpa"><br>

<br>
<button type="submit" name="submit">Register</button>

</form>

<?php
if(isset($_POST['submit'])){

    // ✅ Variables
    $lname = strtoupper($_POST['lname']); // uppercase
    $fname = ucfirst($_POST['fname']);   // capitalize first letter
    $mi = strtoupper($_POST['mi']);

    $student_id = $_POST['student_id'];
    $age = (int) $_POST['age'];
    $gender = $_POST['gender'];
    $citizenship = $_POST['citizenship'];

    $guardian = ucwords($_POST['guardian']); 
    $email = $_POST['email'];
    $cp = $_POST['cp'];
    $address = $_POST['address'];
    $country = strtoupper($_POST['country']);

    $program = ucwords($_POST['program']);
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $acad_year = $_POST['acad_year'];

    $status = $_POST['status'];
    $type = $_POST['type'];
    $scholar = $_POST['scholar'];

    $school = ucwords($_POST['school']);
    $grad = $_POST['grad'];
    $gpa = number_format($_POST['gpa'], 2); 

}

?>

</div>
</body>
</html>