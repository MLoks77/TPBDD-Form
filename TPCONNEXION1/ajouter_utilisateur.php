<?php
require_once "connexion.php"; // Inclusion de la connexion
// Données à insérer
$nom = "Jean Dupont" ;
$email= "jean.dupont@example.com";
$age = 25;
try {
$sql = "INSERT INTO utilisateurs (nom, email, age, mdp) VALUES (:nom, :email, :age, :mdp)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
': nom' => $nom,
' email' => $email,
': age' => $age
': mdp' => $mdp
]);
echo "Y Utilisateur ajouté avec succès !";
} catch (PDOException $e) {
die("X Erreur lors de l'insertion : " . $e->getMessage());

}
?>