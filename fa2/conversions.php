<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Measure Conversion Chart – Lengths (UK)</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            margin: 0;
        }

        header, footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        .container {
            length: 100%;
            width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        td {
            border: 1px solid #888;
            padding: 6px;
            font-size: 14px;
        }

        .section-title {
            background: #ffe800;
            font-weight: bold;
            text-align: center;
        }

        .center {
            text-align: center;
            width: 40px;
        }
    </style>
</head>

<body>

<header>
    <h1>LENGTH CONVERSION CHART – LENGTHS (UK)</h1>
</header>

<div class="container">

<!-- ===== METRIC CONVERSIONS ===== -->
<table>
    <tr><td colspan="6" class="section-title">METRIC CONVERSIONS</td></tr>

    <?php
        $cm = 1;
        $mm = $cm * 10;

        $dm = 1;
        $cm2 = $dm * 10;

        $m = 1;
        $cm3 = $m * 100;

        $km = 1;
        $m2 = $km * 1000;
    ?>

    <tr>
        <td>1 centimetre</td><td class="center">=</td><td><?php echo $mm; ?> millimetres</td>
        <td>1 cm</td><td class="center">=</td><td><?php echo $mm; ?> mm</td>
    </tr>
    <tr>
        <td>1 decimetre</td><td class="center">=</td><td><?php echo $cm2; ?> centimetres</td>
        <td>1 dm</td><td class="center">=</td><td><?php echo $cm2; ?> cm</td>
    </tr>
    <tr>
        <td>1 metre</td><td class="center">=</td><td><?php echo $cm3; ?> centimetres</td>
        <td>1 m</td><td class="center">=</td><td><?php echo $cm3; ?> cm</td>
    </tr>
    <tr>
        <td>1 kilometre</td><td class="center">=</td><td><?php echo $m2; ?> metres</td>
        <td>1 km</td><td class="center">=</td><td><?php echo $m2; ?> m</td>
    </tr>
</table>

<!-- ===== IMPERIAL CONVERSIONS ===== -->
<table>
    <tr><td colspan="6" class="section-title">IMPERIAL CONVERSIONS</td></tr>

    <?php
        $ft = 1;
        $in = $ft * 12;

        $yd = 1;
        $ft2 = $yd * 3;

        $mile = 1;
        $yd2 = $mile * 1760;
    ?>

    <tr>
        <td>1 foot</td><td class="center">=</td><td><?php echo $in; ?> inches</td>
        <td>1 ft</td><td class="center">=</td><td><?php echo $in; ?> in</td>
    </tr>
    <tr>
        <td>1 yard</td><td class="center">=</td><td><?php echo $ft2; ?> feet</td>
        <td>1 yd</td><td class="center">=</td><td><?php echo $ft2; ?> ft</td>
    </tr>
    <tr>
        <td>1 mile</td><td class="center">=</td><td><?php echo $yd2; ?> yards</td>
        <td>1 mi</td><td class="center">=</td><td><?php echo $yd2; ?> yd</td>
    </tr>
</table>

<!-- ===== METRIC → IMPERIAL ===== -->
<table>
    <tr><td colspan="6" class="section-title">METRIC → IMPERIAL CONVERSIONS</td></tr>

    <?php
        $mm1 = 1;
        $in1 = $mm1 * 0.03937;

        $m1 = 1;
        $ft3 = $m1 * 3.28084;

        $km1 = 1;
        $mi1 = $km1 * 0.621371;
    ?>

    <tr>
        <td>1 millimetre</td><td class="center">=</td><td><?php echo $in1; ?> inches</td>
        <td>1 mm</td><td class="center">=</td><td><?php echo $in1; ?> in</td>
    </tr>
    <tr>
        <td>1 metre</td><td class="center">=</td><td><?php echo $ft3; ?> feet</td>
        <td>1 m</td><td class="center">=</td><td><?php echo $ft3; ?> ft</td>
    </tr>
    <tr>
        <td>1 kilometre</td><td class="center">=</td><td><?php echo $mi1; ?> miles</td>
        <td>1 km</td><td class="center">=</td><td><?php echo $mi1; ?> mi</td>
    </tr>
</table>

<!-- ===== IMPERIAL → METRIC ===== -->
<table>
    <tr><td colspan="6" class="section-title">IMPERIAL → METRIC CONVERSIONS</td></tr>

    <?php
        $in2 = 1;
        $cm4 = $in2 * 2.54;

        $mi2 = 1;
        $km2 = $mi2 * 1.609344;
    ?>

    <tr>
        <td>1 inch</td><td class="center">=</td><td><?php echo $cm4; ?> centimetres</td>
        <td>1 in</td><td class="center">=</td><td><?php echo $cm4; ?> cm</td>
    </tr>
    <tr>
        <td>1 mile</td><td class="center">=</td><td><?php echo $km2; ?> kilometres</td>
        <td>1 mi</td><td class="center">=</td><td><?php echo $km2; ?> km</td>
    </tr>
</table>

</div>

<footer>
    <p>&copy; 2026 Length Conversion Chart | PHP Operators</p>
</footer>

</body>
</html>