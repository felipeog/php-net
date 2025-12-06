<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form</title>
</head>

<body>
    <form action="action.php" method="post">
        <label for="name">Your name:</label>
        <input name="name" id="name" type="text" required>

        <br />

        <label for="age">Your age:</label>
        <input name="age" id="age" type="number" required>

        <br />

        <button type="submit">Submit</button>
    </form>
</body>

</html>