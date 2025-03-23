_**Ce repository regroupe des tp reposant sur du PHP , SQL et HTML.**_

Tout les fichiers sont des bases de données que l'on peut modifier à l'aide de form HTML, CSS et PHP fait en ligne.
Les bases de données sont host sur myphpadmin avec XAMPP, toute les consignes sont dans le TP 1 dnas TPCONNEXION1
Les fichiers dans ce repository sont mes fichiers avec **MES** modifications, si vous souhaitez reproduire la même chose
suivez ces instructions :

<h1> TP N1 </h1>

_**Consignes afin de reproduire la même chose / ou utiliser mes fichiers :**_

Connexion à une Base de Données MySQL en PHP

L’objectif est d’apprendre à établir une connexion entre une application PHP et une base
de données MySQL. Vous allez :

• Installer et configurer MySQL et PHP.
• Créer une base de données et une table.
• Établir une connexion à MySQL avec PHP.
• Effectuer des opérations simples (insertion, affichage).

_**Matériel requis :**_

• Serveur local (XAMPP, WAMP ou MAMP)
• Éditeur de texte (VS Code, Sublime Text, Notepad++, etc.)
• Navigateur Web

N.B : tous les fichiers crées doivent être enregistrés dans Xampp/htdocs/TPConnexion

_**Étape 1 : Création de la Base de Données et d’une Table**_
1. Ouvrir phpMyAdmin depuis votre serveur local.
2. Créer une base de données nommée tp_database.
3. Exécuter la requête SQL suivante dans l’onglet SQL pour créer une table utilisateurs :
![code](https://github.com/user-attachments/assets/131bd42c-5d68-41cf-9309-064fac8b5160)

_**Étape 2 : Connexion à la Base de Données en PHP**_
Créez un fichier connexion.php et ajoutez le code suivant :

![code](https://github.com/user-attachments/assets/f182fff7-22ad-4b7f-ab3b-dec833cdd937)

Explication :
On utilise PDO pour se connecter à MySQL.
• En cas d’échec, un message d’erreur s’affiche.

_**Étape 3 : Insérer des Données dans la Table**_
Créez un fichier ajouter_utilisateur.php :

![code](https://github.com/user-attachments/assets/963260dc-5a1a-4eed-8642-21e40078db92)

Explication :
• prepare() et execute() protègent contre les injections SQL.
• On insère un utilisateur dans la table.

_**Étape 4 : Afficher les Données**_
Créez un fichier afficher_utilisateurs.php :

![code](https://github.com/user-attachments/assets/7ab7c4c3-2279-4769-b222-8842c9e9b11c)

Explication :
• query() exécute une requête SELECT.
• fetch(PDO::FETCH_ASSOC) récupère les résultats sous forme de tableau associatif.

_**Étape 5 : Tester et Vérifier**_

1. Démarrer votre serveur local (XAMPP/WAMP).
  
2. Ouvrir http://localhost/connexion.php :
Vous devez voir "Connexion réussie à la base de données."

3. Ouvrir http://localhost/ajouter_utilisateur.php :
Ajoute un utilisateur à la base de données.

4. Ouvrir http://localhost/afficher_utilisateurs.php :
Affiche la liste des utilisateurs ajoutés.

Voici, maintenant, une version améliorée avec un formulaire HTML pour ajouter des
utilisateurs dynamiquement via un formulaire web.

_**Étape 6: Ajouter un Utilisateur avec un Formulaire**_
Crée un fichier form_ajouter_utilisateur.php

![code](https://github.com/user-attachments/assets/a2414719-1c87-4c6f-80ba-65e961eeeb26)

Explication :
• Formulaire HTML permettant de saisir un nom, un email , un âge et un mot de passe.
• Méthode POST pour envoyer les données à traitement_ajouter_utilisateur.php.
• Optionnel : Style CSS intégré pour un affichage propre.

Traitement du Formulaire et Ajout à la Base de Données
 Crée un fichier traitement_ajouter_utilisateur.php :

![code](https://github.com/user-attachments/assets/e3660af7-11e4-4470-a056-67beb3e6c570)

 Explication :
• Récupération des données POST (nom, email, age).
• Protection des données :

htmlspecialchars() → protège contre les attaques XSS.
filter_var() → nettoie l'email.
intval() → convertit age en entier.

• Insertion sécurisée avec prepare() et execute().
• Affichage des messages de succès ou d'erreur.

<h1> TP N2 </h1>
