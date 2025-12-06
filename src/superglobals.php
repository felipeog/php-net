<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Superglobals</title>
</head>

<body>
    <h1>Superglobals</h1>

    <h2>$GLOBALS</h2>
    <pre>
        <?php echo var_dump($GLOBALS); ?>
    </pre>

    <h2>$_SERVER</h2>
    <pre>
        <?php echo var_dump($_SERVER); ?>
    </pre>

    <h2>$_GET</h2>
    <pre>
        <?php echo var_dump($_GET); ?>
    </pre>

    <h2>$_POST</h2>
    <pre>
        <?php echo var_dump($_POST); ?>
    </pre>

    <h2>$_FILES</h2>
    <pre>
        <?php echo var_dump($_FILES); ?>
    </pre>

    <h2>$_COOKIE</h2>
    <pre>
        <?php echo var_dump($_COOKIE); ?>
    </pre>

    <h2>$_SESSION</h2>
    <pre>
        <?php echo var_dump($_SESSION); ?>
    </pre>

    <h2>$_REQUEST</h2>
    <pre>
        <?php echo var_dump($_REQUEST); ?>
    </pre>

    <h2>$_ENV</h2>
    <pre>
        <?php echo var_dump($_ENV); ?>
    </pre>
</body>

</html>