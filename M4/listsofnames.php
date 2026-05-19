<!DOCTYPE html>
<html>
<head>
    <title>String Functions in PHP</title>

    <style>
        body {
            font-family: Arial;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #e77373;
        }

        tr:nth-child(even) {
            background-color: #f8f88f;
        }
    </style>
</head>

<body>

<h2>List of Names</h2>

<?php
// Array with 20 names
$names = [
    "chrisa", "john doe", "maria clara", "alex smith", "anna belle",
    "david lee", "james bond", "harry potter", "lara croft", "peter parker",
    "tony stark", "bruce wayne", "clark kent", "diana prince", "barry allen",
    "wanda maximoff", "scott lang", "steve rogers", "natasha romanoff", "nick fury"
];

// Function: replace vowels with @
function replaceVowels($name) {
    return str_replace(
        ['a','e','i','o','u','A','E','I','O','U'],
        '@',
        $name
    );
}

// Start table
echo "<table>";
echo "<tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of 'a'</th>
        <th>Reverse Name</th>
      </tr>";

// Loop through array
foreach ($names as $name) {

    // 1. Count characters (including spaces)
    $length = strlen($name);

    // 2. Uppercase first character
    $uppercase = ucfirst($name);

    // 3. Replace vowels
    $replaced = replaceVowels($name);

    // 4. Position of letter 'a'
    $position = strpos(strtolower($name), 'a');
    $position = ($position !== false) ? $position + 1 : "Not found";

    // 5. Reverse name
    $reverse = strrev($name);

    echo "<tr>
            <td>$name</td>
            <td>$length</td>
            <td>$uppercase</td>
            <td>$replaced</td>
            <td>$position</td>
            <td>$reverse</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>