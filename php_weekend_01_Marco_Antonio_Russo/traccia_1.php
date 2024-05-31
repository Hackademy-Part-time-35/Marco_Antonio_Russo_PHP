<?php




function checkPassword($password){  //TODO True se tutte le altre funzioni sono true
    
    return checkUpper($password) && checkLength($password) && checkNumeric($password) && checkSpecialChar($password);   

}

function checkUpper($stringa){  //TODO True se la password contiene almeno un carattere maiuscolo
    
    $array = str_split($stringa);  //! metodo 1
    foreach($array as $char){
        if(ctype_upper($char)){
            return true;
        }
    }
    return false;

    // return strtolower($stringa) === $stringa;    //! metodo 2
    // return preg_match("/[A-Z]/", $stringa); // regex per verificare presenza di lettere maiuscole nell'intervallo A-Z //! metodo 3
}

function checkNumeric($stringa){    //TODO True se la password contiene almeno un numero

    $array = str_split($stringa);  // metodo 1
    foreach($array as $char){
        if(is_numeric($char)){
            return true;
        }
    }
    return false;

    // return preg_match("/[0-9]/", $stringa); //! metodo 2
}



function checkLength($stringa){ //TODO True se la password è maggiore o uguale ad 8

    return strlen($stringa) >= 8;

}

function checkSpecialChar($stringa){    //TODO True se la password contiene almeno un carattere speciale

    return preg_match('/[!"£$%&\/()=?^@]/',$stringa); //? regex per verificare presenza di almeno un simbolo fra ! " £ $ % & \ / ( ) = ? ^ @
}



$password = readline("la password deve contenere almeno un numero, almeno una lettera maiuscola, almeno 8 caratteri ed almeno un simbolo: ");

var_dump(checkPassword($password));
