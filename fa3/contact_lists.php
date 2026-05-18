<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Department's Contact List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b2c1f5;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #bcf3ca;
        }

        th, td {
            border: 1px solid #72a2a8;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #9ff5e7;
        }

        img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        tr:nth-child(even) {
            background-color: #7cd693;
        }
    </style>

</head>
<body>

<h2>Company Department's Contact List</h2>

<?php

$people = [
    ["Mark", "Pictures\Yanqin.jpg", 21, "Jan 5, 2005", "09123456789"],
    ["Anna", "https://www.sigstick.com/pack/mP4KQMrviQA8NH915AMv-%E5%8D%83%E5%92%B2chisa", 20, "Feb 12, 2006", "09234567891"],
    ["John", "https://medibang.com/picture/pb2309190244357630025245669/", 22, "Mar 10, 2004", "09345678912"],
    ["Bella", "https://www.amazon.co.uk/LINGUYBR-Wuthering-Yangyang-Jianxin-Tinplate/dp/B0D6G221ZF", 19, "Apr 22, 2007", "09456789123"],
    ["Chris", "https://www.pinterest.com/pin/31032684922072611/", 23, "May 15, 2003", "09567891234"],
    ["Diana", "https://x.com/iunodaily/status/1966353578949488794", 21, "Jun 18, 2005", "09678912345"],
    ["Ethan", "https://x.com/misacchi04/status/1831293809889513783", 24, "Jul 8, 2002", "09789123456"],
    ["Fiona", "https://www.pinterest.com/pin/749004981812069467/", 20, "Aug 30, 2006", "09891234567"],
    ["George", "https://www.pinterest.com/kalliyanphy/hsr-chibis/", 22, "Sep 14, 2004", "09982345678"],
    ["Helen", "https://mx.pinterest.com/pin/1150317929822158552/", 23, "Oct 3, 2003", "09111234567"]
];

usort($people, function($a, $b) {
    return strcmp($a[0], $b[0]);
});
?>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

    <?php
    $no = 1;

    foreach ($people as $person) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$person[0]."</td>";   
        echo "<td><img src='".$person[1]."'></td>"; 
        echo "<td>".$person[2]."</td>";   
        echo "<td>".$person[3]."</td>";   
        echo "<td>".$person[4]."</td>";   
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
