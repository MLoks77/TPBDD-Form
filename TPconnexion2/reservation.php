<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Vacances</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color : rgb(255, 253, 161);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            width: 300px;
        }
        h2 {
            color: #007BFF;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        input {
            display: block;
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 auto;
            text-align: center;
        }
        button {
            background: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
            margin-top: 10px;
        }
        button:hover {
            background: #0056b3;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Faire une réservation</h2>
        <form id="reservationForm" action="ajouter_reservation.php" method="post">
            <label>Nom :</label>
            <input type="text" name="nom" required>

            <label>Email :</label>
            <input type="email" name="email" required>

            <label>Date d'arrivée :</label>
            <input type="date" id="date_arrivee" name="date_arrivee" required>

            <label>Date de départ :</label>
            <input type="date" id="date_depart" name="date_depart" required>

            <button type="submit">Réserver</button>
        </form>
    </div>

    <script>
        document.getElementById("reservationForm").addEventListener("submit", function(event) {
            let dateArrivee = new Date(document.getElementById("date_arrivee").value);
            let dateDepart = new Date(document.getElementById("date_depart").value);
            let today = new Date();
            
            if (dateArrivee < today) {
                alert("La date d'arrivée ne peut pas être dans le passé.");
                event.preventDefault();
            } else if (dateDepart <= dateArrivee) {
                alert("La date de départ doit être après la date d'arrivée.");
                event.preventDefault();
            }
        });
    </script>
</body>
</html>