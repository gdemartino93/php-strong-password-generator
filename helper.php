<?php
    $lunghezza = $_GET["length"] ?? 0;
    $filterLetter = $_GET["lettere"] ? true : false;
    $filterNumber = $_GET["numeri"] ? true : false;
    $filterSymbol = $_GET["simboli"] ? true : false;
 
    // funzione per generare random password:
    function generateRanPwd($length){

    $allChars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~'));
    $lettersChars = array_merge(range('a', 'z'), range('A', 'Z'));
    $numbersChars = array_merge(range(0, 9));
    $symbolsChars = array_merge( range('!', '/'));
    
    foreach ($allChars as $char){ 
        $characters .= $char;
    }
    foreach ($lettersChars as $letter){ 
        $letters .= $letter;
    }
    foreach ($numbersChars as $onlyChar){ 
        $numbers .= $onlyChar;
    }
    foreach ($symbolsChars as $symbol){ 
        $symbols .= $symbol;
    }
    $lunghezzaCharacters = strlen($characters);

        if (($filterLetter == false) && ($filterNumber == false) && ($filterSymbol == false)) {
            for ($i = 0; $i < $length; $i++) {
                $randomPwd .= $allChars[rand(0, $lunghezzaCharacters - 1)];
                }
            return $randomPwd;

        };
    }
        
 
    
    

    ?>

