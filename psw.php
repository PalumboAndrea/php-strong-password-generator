    <?php 
    include_once __DIR__ . '/../php-strong-password-generator/functions.php';
    session_start();
    $_SESSION['password'] = generateRandomString($_GET['passwordLength']);
    
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