<?php
// Inclure le fichier de connexion
include("connexion.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $sexe = $_POST['sexe'];

    // Vérifier que les champs sont bien remplis
    if (empty($nom) || empty($prenom) || empty($date_naissance) || empty($adresse) || empty($telephone) || empty($sexe)) {
        die("❌ Tous les champs sont obligatoires !");
    }

    // Requête SQL d'insertion
    $sql = "INSERT INTO patient (Nom, Prénom, Date_Naissance, Adresse, Téléphone, Sexe)
            VALUES (?, ?, ?, ?, ?, ?)";

    // Préparer la requête
    $stmt = $conn->prepare($sql);

    // Vérifier si la préparation a échoué
    if ($stmt === false) {
        die("❌ Erreur de préparation de la requête : " . $conn->error);
    }

    // Lier les paramètres à la requête
    $stmt->bind_param("ssssss", $nom, $prenom, $date_naissance, $adresse, $telephone, $sexe);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "✅ Patient ajouté avec succès.";
    } else {
        echo "❌ Erreur lors de l'ajout du patient : " . $stmt->error;
    }

    // Fermer la déclaration et la connexion
    $stmt->close();
    $conn->close();
}
?>