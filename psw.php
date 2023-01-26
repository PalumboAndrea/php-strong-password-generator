    <?php 
    include_once __DIR__ . '/../php-strong-password-generator/functions.php';
    session_start();
    $passwordLength = (isset($_GET['passwordLength']) ? ($_GET['passwordLength']) : 0);
    $ifLetter = (isset($_GET['letter']) ? ($_GET['letter']) : 0);
    $ifNumber = (isset($_GET['number']) ? ($_GET['number']) : 0);
    $ifSymbol = (isset($_GET['symbol']) ? ($_GET['symbol']) : 0);
    $_SESSION['password'] = generateRandomString($passwordLength, $ifLetter, $ifNumber, $ifSymbol);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        
    </body>
</html>