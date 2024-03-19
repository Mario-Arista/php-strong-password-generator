<?php

// Dichiaro variable vuota per la password
$password = "";

// se utente scrive una lunghezza accettata
if (isset($_GET['lengthUser']) && $_GET['lengthUser'] != "") {

    // Mi salvo la lunghezza richiesta nel campo di input
    $lengthRequested = $_GET['lengthUser'];

    function passwordGeneratorAll($length) {

        // Genero la password casuale 
        // con la lunghezza richiesta come parametro

        return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ|!"£$%&/()=?^abcdefghijklmnopqrstuvwyz'), 1, $length);
    }

    // password uguale a funzione
    $password = passwordGeneratorAll($lengthRequested);    

} else {

    // se l'utente non dichiara una lunghezza accettata e preme il bottone
    // password è uguale a messaggio di alert
    $password = "Inserisci una lunghezza valida per la password prima di premere GENERA";
}


?>