<?php
    $lunghezza = $_GET["length"] ?? 0;
    $filterLetter = $_GET["lettere"] ?? false;
    $filterNumber = $_GET["numeri"] ?? false;
    $filterSymbol = $_GET["simboli"] ?? false;
    var_dump($filterLetter);

    // funzione per generare random password:
    function generateRanPwd($length){

    $allChars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~'));
    $lettersChars = array_merge(range('a', 'z'), range('A', 'Z'));
    $numbersChars = array_merge(range(0, 9));
    $symbolsChars = array_merge( range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~'));
    
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

        }

    };
    
     generateRanPwd($lunghezza);
    ?>


<!-- // prima condizione: (stampiamo tutti gli elementi se il filtro non è attivao) oppure seconda condizione( se il filtro è attivo deve esserci anche il valore settato su parking)
            if ($vote >= $filterVote && (!$filterParking || ($filterParking && $parking))){ -->