<?php

function estMajeur(int $yearBirth){
    if (2025 - $yearBirth >= 18) {
        return true;
    } else {
        return false;
    }
}

?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: rgb(255, 240, 125);
    }

</style>
