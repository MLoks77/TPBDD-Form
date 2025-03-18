<?php
    require_once "connexion.php"; // Inclusion de la connexion

    try {
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $pdo->query($sql);
    } catch (PDOException $e) {
        die("<div class='error'>Erreur lors de la récupération des données : " . $e->getMessage() . "</div>");
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
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
            max-width: 800px;
            margin: 50px auto;
            position: relative;
            z-index: 1;
        }

        h2 {
            margin-bottom: 20px;
            text-transform: uppercase;
            color: white;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-list li {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 170, 255, 0.4);
            transition: 0.3s ease-in-out;
        }

        .user-list li:hover {
            background: rgba(0, 170, 255, 0.2);
            box-shadow: 0 0 20px rgba(0, 170, 255, 0.6);
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Liste des utilisateurs</h2>
        <ul class="user-list">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <li>
                    <b>ID:</b> <?= htmlspecialchars($row['id']) ?> - 
                    <b>Nom:</b> <?= htmlspecialchars($row['nom']) ?> - 
                    <b>Email:</b> <?= htmlspecialchars($row['email']) ?> - 
                    <b>Âge:</b> <?= htmlspecialchars($row['age']) ?>
                    <b>MDP:</b> <?= htmlspecialchars($row['mdp']) ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>