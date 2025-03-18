<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline:opsz,wght@10..72,100..900&family=Didact+Gothic&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Source Code Pro", monospace;
            background: radial-gradient(circle, #0d1b2a, #1b263b, #415a77);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        h2 {
            margin-bottom: 20px;
            color: white;
            text-transform: uppercase;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-family: "Source Code Pro", monospace;
            width: 100%;
            text-align: left;
            font-style: italic;
            margin-top: 15px;
            color: white;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
        }

        input:focus {
            border-color: #00aaff;
            box-shadow: 0 0 10px #00aaff;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            background: linear-gradient(135deg, #002244, #0055aa);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
            width: 100%;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 0 15px rgba(0, 85, 170, 0.6);
        }

        button::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(0, 170, 255, 0.6), transparent);
            transition: 0.3s ease-out;
            transform: translate(-50%, -50%) scale(0);
            opacity: 0;
        }

        button:hover::before {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        button:hover {
            background: linear-gradient(135deg, #004488, #0099ff);
            box-shadow: 0 0 25px rgba(0, 170, 255, 0.9);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Ajouter un utilisateur</h2>
    <form action="traitement_ajouter_utilisateur.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required>

        <label for="age">Mot de passe :</label>
        <input type="text" id="mdp" name="mdp" required>

        <button type="submit">Ajouter</button>
    </form>
</div>

</body>
</html>