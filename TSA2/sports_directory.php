<?php
// Sports Directory Array (at least 10 sports, alphabetical)
$sports = [
    [
        "name" => "Badminton",
        "image" => "images\badminton.jpg",
        "description" => "Indoor racquet sport",
        "facts" => "Badminton is played using a shuttlecock and is one of the fastest racquet sports."
    ],
    [
        "name" => "Basketball",
        "image" => "images\basketball.jpg",
        "description" => "Team ball sport",
        "facts" => "Basketball was invented by James Naismith in 1891."
    ],
    [
        "name" => "Boxing",
        "image" => "images\boxing.jpg",
        "description" => "Combat sport",
        "facts" => "Boxing has been a part of the Olympic Games since 1904."
    ],
    [
        "name" => "Cricket",
        "image" => "images\cricket.jpg",
        "description" => "Bat-and-ball sport",
        "facts" => "Cricket matches can last from a few hours to five days."
    ],
    [
        "name" => "Football",
        "image" => "images\football.jpg",
        "description" => "Popular team sport",
        "facts" => "Football, also called soccer, is the most popular sport worldwide."
    ],
    [
        "name" => "Golf",
        "image" => "images\golf.jpg",
        "description" => "Precision sport",
        "facts" => "Golf is played on a course with 18 holes."
    ],
    [
        "name" => "Swimming",
        "image" => "images\swimming.jpg",
        "description" => "Water sport",
        "facts" => "Swimming is both an individual and team sport."
    ],
    [
        "name" => "Table Tennis",
        "image" => "images\tabletennis.jpg",
        "description" => "Indoor sport",
        "facts" => "Table Tennis is also known as ping-pong."
    ],
    [
        "name" => "Tennis",
        "image" => "images\tennis.jpg",
        "description" => "Racquet sport",
        "facts" => "Tennis can be played in singles or doubles formats."
    ],
    [
        "name" => "Volleyball",
        "image" => "images\volleyball.jpg",
        "description" => "Team net sport",
        "facts" => "Volleyball was invented in 1895 in the USA."
    ]
];

// Sort alphabetically by sport name
usort($sports, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sports Directory</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            background: #9aecaf;
            padding: 20px;
            border: 2px solid #8df0f0;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #999;
        }

        th {
            background-color: #7fa6d6;
        }

        td, th {
            padding: 10px;
            text-align: center;
        }

        img {
            width: 120px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Sports Directory</h2>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php foreach ($sports as $sport): ?>
        <tr>
            <td><img src="<?php echo $sport['image']; ?>" alt="<?php echo $sport['name']; ?>"></td>
            <td><?php echo $sport['name']; ?></td>
            <td><?php echo $sport['description']; ?></td>
            <td><?php echo $sport['facts']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>
