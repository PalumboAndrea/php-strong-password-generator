<?php
    function generateRandomString($passwordLength, $ifLetter, $ifNumber, $ifSymbol, $ifRepeat) {
        if ($ifLetter === false && $ifNumber === false && $ifSymbol === false){
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
        while (strlen($randomString) < $passwordLength){
            $random = $characters[rand(0, $charactersLength - 1)];
            if (str_contains($randomString, $random) && $ifRepeat === false){
                $random = '';
            }
            $randomString .= $random;
        }
        return $randomString;
    }
?>
