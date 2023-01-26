    <?php function generateRandomString($passwordLength, $ifLetter, $ifNumber, $ifSymbol) {
            if ($ifLetter == 0 && $ifNumber == 0 && $ifSymbol == 0){
                $ifLetter = 'letter';
                $ifNumber = 'number';
                $ifSymbol = 'symbol';
            }
            $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numbers = '0123456789';
            $symbols = '|\!"$%&/()=?^[]+*@#,;.:-_<>';
            $characters = ($ifLetter == 'letter' ? $letters : '') . ($ifNumber == 'number' ? $numbers : '') . ($ifSymbol == 'symbol' ? $symbols : '');
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $passwordLength; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


