<?php
require_once "connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $date_arrivee = $_POST["date_arrivee"];
    $date_depart = $_POST["date_depart"];

    $sql = "INSERT INTO reservations (nom, email, date_arrivee, date_depart) VALUES (:nom, :email, :date_arrivee, :date_depart)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':email' => $email,
        ':date_arrivee' => $date_arrivee,
        ':date_depart' => $date_depart
    ]);

echo "Réservation effectuée avec succès !";

}
?>