<?php
    $lunghezza = $_GET["length"] ?? 0;
    

    // funzione per generare random password:
    function generateRanPwd($length){
    
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()-+={[}]:;@#|<,>.?/';
    $lunghezzaCharacters = strlen($characters);

       for ($i = 0; $i < $length; $i++) {
        $randomPwd .= $characters[rand(0, $lunghezzaCharacters - 1)];
        }
    return $randomPwd;
    };
    
     generateRanPwd($lunghezza);
    ?>