<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        input {
            padding: 5px;
            margin-bottom: 10px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        bouton {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        .container {
            background-color : #f0f0f0;
            padding: 20px;
        }
    </style>
    

</head>
<body>
<section class="container">
    <h1>Ajouter un nouveau patient</h1>

    <form method="POST" action="traitement_patient.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="number" name="date_naissance" id="date_naissance" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required><br><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" id="telephone" required><br><br>

        <label for="sexe">Sexe :</label>
        <input type="text" name="sexe" id="sexe" required><br><br>

        <input type="submit" value="Ajouter le patient">
    </form>
</section>
</body>
</html>

