<?php
$serveur = "localhost";
$utilisateur = "root"; // Identifiant (par défaut : root sous XAMPP/WAMP)
$motDePasse = ""; // Mot de passe vide sous XAMPP/WAMP
$baseDeDonnees = "tp_database";

try {
    // Connexion à MySQL avec PDO
    $pdo = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees;charset=utf8", $utilisateur, $motDePasse);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à la base de données.";
} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}
?>

