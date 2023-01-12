<?php
    $lunghezza = $_GET["length"] ?? 0;
    

    // funzione per generare random password:
    function generateRanPwd($length){

    $allChars = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9), range('!', '/'), range(':', '@'), range('[', '`'), range('{', '~'));
    
    foreach ($allChars as $char){ 
        $characters .= $char;
    }
    $lunghezzaCharacters = strlen($characters);

       for ($i = 0; $i < $length; $i++) {
        $randomPwd .= $characters[rand(0, $lunghezzaCharacters - 1)];
        }
    return $randomPwd;
    };
    
     generateRanPwd($lunghezza);
    ?>