    <?php include_once __DIR__ . '/functions.php'
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>

    <main>
        <form action="./index.php" method="GET">
            <input type="number" name="passwordLength" placeholder="Lunghezza password">
            <button type="submit">Invia</button>
        </form>

        <p> <?php echo generateRandomString($_GET['passwordLength']) ?> </p>
    </main>

</body>
</html>