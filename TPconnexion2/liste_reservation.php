<?php
require_once "connexion.php";

$SQL = "select * from reservation"
$stmt = $pdo->query($sql);
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> Liste des réservations </title>
    </head>
<body>
    <h2> Liste des réservations </h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Date d'arrivée</th>
            <th>Date de départ</th>
        </tr>
        <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?= htmlspecialchars($reservation["id"]) ?></td>
                <td><?= htmlspecialchars($reservation["nom"]) ?></td>
                <td><?= htmlspecialchars($reservation["email"]) ?></td>
                <td><?= htmlspecialchars($reservation["date_arrivee"]) ?></td>
                <td><?= htmlspecialchars($reservation["date_depart"]) ?></td>
        </tr>
    <?php endforeach; ?>
        </table>
        </body>
        </html>