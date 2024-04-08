<?php


function checkLenght($string){
    if (strlen($string) >= 8) {
        return true;
    }
    return false;
}




//? numeri
function checkNumber($string){
    for ($i=0; $i < strlen($string); $i++) {
        if(is_numeric($string[$i])){
            echo "la tua psw contiene un numero \n";
            return true;
        }
    }
    return false;
}

// $number = checkNumber($psw);



//? Maiuscola

function checkUpper($string){
    for ($i=0; $i < strlen($string); $i++) {
        if(ctype_upper($string[$i])){
            echo "la tua psw contiene una maiuscola \n";
            return true;
        }
    }
    return false;
}






function checkSpecChars($string){
    $specialChars = ['&' , '!' , '?' , '@' , '#' , '*' , '%' , '$' , 'ˆ'];

    for ($i=0; $i < strlen($string); $i++) { 
       if(in_array($string[$i] , $specialChars)){
            return true;
       }
    }
    return false;
}




// checkPsw($psw);
// checkPsw($psw2);

function check($string){
    $dataPsw = ["SonFede&"];
    if(in_array($string , $dataPsw)){
        echo "La tua psw e corretta, corrisponde \n";
        return true;
    }
    echo "La tua psw rispetta le nostre regole, ma non e presente nel nostro Database.\n";
}


function checkPsw($string)
{
    $errorFlag = 0;

    if (checkLenght($string) == false) {
        echo "stringa troppo corta\n";
        $errorFlag++;
    }
    if (checkNumber($string) == false) {
        echo "stringa non contenente numero\n";
        $errorFlag++;
    }
    if (checkUpper($string) == false) {
        echo "stringa non contenente maiuscola\n";
        $errorFlag++;
    }
    if (checkSpecChars($string) == false) {
        echo "stringa non contenente carattere speciale\n";
        $errorFlag++;
    }

    if ($errorFlag!=0){
        checkPsw(readline('inserisci la tua psw: '));
    }else{
        echo "Password inserita con successo!\n";
    }
}

checkPsw(readline('inserisci la tua psw: '));

