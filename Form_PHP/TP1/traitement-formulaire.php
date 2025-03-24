<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du formulaire</title>

    <style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: rgb(255, 240, 125);
    }

    a {
        margin-right : 2%;
        margin-left : 2%;
        background-color: white;
        display: block;
        margin-top: 20px;
        border : 1px solid black;
        padding: 10px;
        text-align: center;
    }

    .textephp {
        text-align: center;
        margin-right : 2%;
        margin-left : 2%;
        background-color: white;
        margin-top: 20px;
        border : 1px solid black;
        padding: 10px;
    }
    </style>

</head>
<body>

<section class="textephp">
<?php

include "fonction.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = htmlspecialchars($_POST["lastname"]);
    $name = htmlspecialchars($_POST["name"]);
    $yearBirth = (int)$_POST["age"];
    $email = htmlspecialchars($_POST["email"]);
}

if (estMajeur($yearBirth)) {
    $maj = "majeur(e)";
} else {
    $maj = "mineur(e)";
}

if (!empty($lastname) && !empty($name) && !empty($email) && !empty($yearBirth)) {
    echo "Bonjour, $name $lastname, votre email est $email, vous êtes né(e) en $yearBirth, vous êtes donc $maj.";
} else {
    echo "Veuillez saisir tous les champs.";
}
?>
</section>

<a href="inscription.html">Retour au formulaire</a>

</body>
</html>