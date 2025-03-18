<?php
require_once "connexion.php"; // Inclusion de la connexion

$message = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $age = intval($_POST["age"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

    // Vérifier que les champs ne sont pas vides
    if (!empty($nom) && !empty($email) && !empty($age) && !empty($mdp)) {
        try {
            $sql = "INSERT INTO utilisateurs (nom, email, age, mdp) VALUES (:nom, :email, :age, :mdp)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $nom,
                ':email' => $email,
                ':age' => $age,
                ':mdp' => $mdp
            ]);

            $message = "✅ Utilisateur ajouté avec succès !";
            $success = true;
        } catch (PDOException $e) {
            $message = "❌ Erreur lors de l'insertion : " . $e->getMessage();
        }
    } else {
        $message = "❌ Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Utilisateur</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Source Code Pro", monospace;
            background: radial-gradient(circle, #0d1b2a, #1b263b, #415a77);
            background-size: cover;
            color: white;
            text-align: center;
            margin: 0;
            padding: 20px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Effet étoilé */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/stardust.png');
            opacity: 0.2;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 500px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .message {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
            box-shadow: 0 0 15px rgba(0, 170, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .success {
            color: #00ff99;
            border: 2px solid #00ff99;
        }

        .error {
            color: #ff4444;
            border: 2px solid #ff4444;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: linear-gradient(135deg, #002244, #0055aa);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 15px rgba(0, 85, 170, 0.6);
        }

        .btn:hover {
            background: linear-gradient(135deg, #004488, #0099ff);
            box-shadow: 0 0 25px rgba(0, 170, 255, 0.9);
        }
    </style>
</head>
<body>

<div class="container">
    <?php if (!empty($message)) : ?>
        <p class="message <?= $success ? 'success' : 'error' ?>"><?= $message ?></p>
    <?php endif; ?>
    
    <a href="form_ajouter_utilisateur.php" class="btn">Retour</a>
</div>

</body>
</html>