<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Action</title>
</head>

<body>
    <p>Hi <?php echo htmlspecialchars($_POST['name']); ?>.</p>
    <p>You are <?php echo (int) $_POST['age']; ?> years old.</p>
</body>

</html>