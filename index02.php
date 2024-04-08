<?php


require('psw.php');

do {
    $psw = readline('inserisci la tua psw:  ');
} while (!checkPsw($psw));
//! -> stiamo negando la funzione, se il risult6ato e falso sara true altrimenti il contrario
echo "la tua psw e corretta \n";
check($psw);