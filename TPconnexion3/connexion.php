<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // Serveur MySQL
$username = "root";        // Nom d'utilisateur MySQL (par défaut : root)
$password = "";            // Mot de passe MySQL (par défaut : vide sur XAMPP)
$database = "hôpital";     // Nom de la base de données

// Connexion à MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("❌ Connexion échouée : " . $conn->connect_error);
}
echo "Connexion réussie à la base de données !";
?>
