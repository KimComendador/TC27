<!DOCTYPE html>
<html>
<head>
    <title>Dog Information</title>
    <style>
        body {
            font-family: Arial;
            background: #baa2e6;
        }
        .container {
            width: 400px;
            margin: auto;
            background: #8cb2ec;
            padding: 20px;
            border-radius: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #120000;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #8cedb8;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Information</h2>

    <form method="POST" action="dog_view.php">

        Name:
        <input type="text" name="name" required>

        Breed:
        <input type="text" name="breed" required>

        Age:
        <input type="text" name="age" required>

        Address:
        <input type="text" name="address" required>

        Color:
        <input type="text" name="color" required>

        Height:
        <input type="text" name="height" required>

        Weight:
        <input type="text" name="weight" required>

        <button type="submit">Save</button>
    </form>

</div>

</body>
</html>
