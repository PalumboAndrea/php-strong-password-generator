    <?php
    include_once __DIR__ . '/functions.php';
    include_once __DIR__ . '/psw.php';
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">


    <title>php-strong-password-generator</title>
</head>
<body>

    <main>

        <h1 class="mt-5">
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>

        <div id="form-wrapper" class="container w-75 rounded pb-5 pt-2 px-4 my-4 d-flex flex-column align-items-center">
            <div class="w-50">
                <h3 class="my-4 text-center">
                    Inserisci le seguenti informazioni:
                </h3>
                <div>
                    <form action="./index.php" method="GET" class="d-flex flex-column">
                        <input type="number" name="passwordLength" placeholder="Lunghezza password" class="mb-2 w-50">
                        <div>
                            <input type="checkbox" id="repeat" name="repeat" value="repeat">
                            <label for="repeat"> Consenti ripetizioni di uno o più caratteri</label>
                        </div>
                        <div>
                            <input type="checkbox" id="letter" name="letter" value="letter">
                            <label for="letter"> Lettere</label>
                        </div>
                        <div>
                            <input type="checkbox" id="number" name="number" value="number">
                            <label for="number"> Numeri</label>
                        </div>
                        <div>
                            <input type="checkbox" id="symbol" name="symbol" value="symbol">
                            <label for="symbol"> Simboli</label>
                        </div>
                        <div>
                            <button type="submit" class="my-2 w-25 btn btn-dark">Invia</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

        <div id="password-container" class="container rounded w-75 d-flex align-items-center">
            <h3>
                La password generata è:  <span id="password" class="ms-2"> <?php echo $_SESSION['password']; ?> </span>
            </h3>
        </div>

    </main>

</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="./styles/style.css">
</html>