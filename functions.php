<?php

$lengthRequested = $_GET['lengthUser'];

function passwordGeneratorAll($length) {
    return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ|!"£$%&/()=?^abcdefghijklmnopqrstuvwyz'), 1, $length);
}

?>