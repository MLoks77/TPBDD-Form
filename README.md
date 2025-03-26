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

<h2>Étape 1 : Création de la Base de Données et d’une Table</h2>
1. Ouvrir phpMyAdmin depuis votre serveur local.
2. Créer une base de données nommée tp_database.
3. Exécuter la requête SQL suivante dans l’onglet SQL pour créer une table utilisateurs :
![code](https://github.com/user-attachments/assets/131bd42c-5d68-41cf-9309-064fac8b5160)

<h2>Étape 2 : Connexion à la Base de Données en PHP</h2>
Créez un fichier connexion.php et ajoutez le code suivant :

![code](https://github.com/user-attachments/assets/f182fff7-22ad-4b7f-ab3b-dec833cdd937)

Explication :
On utilise PDO pour se connecter à MySQL.
• En cas d’échec, un message d’erreur s’affiche.

<h2>Étape 3 : Insérer des Données dans la Table</h2>
Créez un fichier ajouter_utilisateur.php :

![code](https://github.com/user-attachments/assets/963260dc-5a1a-4eed-8642-21e40078db92)

Explication :
• prepare() et execute() protègent contre les injections SQL.
• On insère un utilisateur dans la table.

<h2>Étape 4 : Afficher les Données</h2>
Créez un fichier afficher_utilisateurs.php :

![code](https://github.com/user-attachments/assets/7ab7c4c3-2279-4769-b222-8842c9e9b11c)

Explication :
• query() exécute une requête SELECT.
• fetch(PDO::FETCH_ASSOC) récupère les résultats sous forme de tableau associatif.

<h2>Étape 5 : Tester et Vérifier</h2>

1. Démarrer votre serveur local (XAMPP/WAMP).
  
2. Ouvrir http://localhost/connexion.php :
Vous devez voir "Connexion réussie à la base de données."

3. Ouvrir http://localhost/ajouter_utilisateur.php :
Ajoute un utilisateur à la base de données.

4. Ouvrir http://localhost/afficher_utilisateurs.php :
Affiche la liste des utilisateurs ajoutés.

Voici, maintenant, une version améliorée avec un formulaire HTML pour ajouter des
utilisateurs dynamiquement via un formulaire web.

<h2>Étape 6: Ajouter un Utilisateur avec un Formulaire</h2>
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

Le TP N2 reprend les mêmes instructions :

<h2>Etape 1 :</h2>

Étape 1 : Créer la base de données

![code](https://github.com/user-attachments/assets/47a92b1b-2f45-49a8-a0e9-8c40396098b6)


<h2>Etape 2 :</h2>

Connexion à la base de données en PHP
Créez un fichier connexion.php pour établir la connexion à MySQL :

![code](https://github.com/user-attachments/assets/fd498355-a0dd-4809-9c48-43348521464f)

<h2>Etape 3 :</h2>

Formulaire d'ajout de reservation
Créez un fichier reservation.php avec un formulaire HTML :

![code](https://github.com/user-attachments/assets/783b9e20-8e0d-4b90-9182-2666e16721ee)

<h2>Etape 4 :</h2>

Insertion des données en PHP
Créez un fichier ajouter_reservation.php pour enregistrer une réservation dans la base de données :

![code](https://github.com/user-attachments/assets/463b1bec-9d4b-4d72-8d52-050cd7bcba2a)


<h2>Etape 5 :</h2>

Affichage des reservations
Créez un fichier liste_reservations.php pour afficher toutes les réservations :

![code](https://github.com/user-attachments/assets/c82641f7-1460-45f2-8d1a-fdd119de9b67)

<h1>Form en php + html sans base de donnée </h1>

TP Création d’un formulaire d’inscription en php

Objectifs : 
Créer un formulaire en html
Récupérer et afficher les données en PHP
Valider les entrées utilisateur
Créer un fonction

Requis :
Vscode
Xampp / autre

Préparation environnement
Lancer un serveur local (xampp ou wamp). Créer un dossier TP1 dans xampp/htdocs ou wamp/www

<h2>Partie 1 : Création du formulaire HTML</h2>

Créer dans un dossier TP1 un fichier inscription.html.
Créez un formulaire d’inscription contenant le nom, prénom et l’email.

![code](https://github.com/user-attachments/assets/b12467f1-4a8e-4e14-8b3c-a78868d0ceb8)

Conseil: pensez à mettre le bouton de soumission (input type="submit")

Afficher votre formulaire avec un navigateur sur :
localhost/TP1/inscription.html 

<h2>Partie 2 : Traitement des données en PHP</h2>

Créer un fichier traitement-formulaire.php où vous récupérez les informations pour l’afficher.

Vérifiez que vous êtes en Post, que le formulaire est saisi : 
// Dans traitement-formulaire.php

![code](https://github.com/user-attachments/assets/52473907-5db6-4923-a32e-16be62b91fa7)


Dans la partie code récupérez d’abord les informations soumises dans des variables que vous utiliserez pour afficher : 

$lastname = $_POST['lastname'];

// récupérez aussi le prénom (firstname) et l’email (email)

Objectif : afficher les informations saisies depuis le formulaire : 

"Bonjour Nom Prénom, voici votre email : test@gmail.com"

Conseil : en php on utilise le point . pour concaténer les variables et chaines de caractères, exemple : "Bonjour " . $variable;
echo permet d’afficher du html en PHP. exemple : echo "Texte affiché en html, on peut également mettre des <b>balises</b> html";

<h2>Partie 3 : Vérifiez les informations utilisateur</h2>

Si vous validez le formulaire sans saisir tous les champs, des informations seront manquantes. exemple : 



Nous allons vérifier si tous les champs sont présents, sinon nous informons l’utilisateur avec un lien de redirection vers le formulaire.

Conseils : pour vérifer si une variable est vide on utilise la fonction empty (ou !empty si ce n'est pas vide)
Exemple, si tous les champs sont renseignés (non vides) on affiche notre message précédent, sinon le message "Veuillez saisir tous les champ. Lien vers le formulaire"

![code](https://github.com/user-attachments/assets/b7fba83b-2406-434e-b6c9-7d5844c21948)

// && signifie ET en programmation 
// il faut que toutes les conditions soient remplies pour entrer dans if (si nom n'est pas vide ET prénom n'est pas vide ET email n'est pas vide) 
// le && (ET) et || (OU) sont souvent utilisés, ils existent aussi en "and" et "or"

Résultat si on ne saisit pas tous les champs : 



<h2>Partie 4 : Ajouter la majorité</h2>
Nous allons ajouter l’année de naissance sur le formulaire dans un champ input type text (name="year-of-birth")
Côté PHP, on met dans une variable 

$yearBirth = $_POST['year-of-birth'];

Dans le message ajoutez l’année de naissance et sa majorité : 
"Bonjour Nom Prénom, voici votre email : test@gmail.com. Vous êtes né(e) le 2001. Vous êtes majeur."
"Bonjour Nom Prénom, voici votre email : test@gmail.com. Vous êtes né(e) le 2015. Vous êtes mineur."

Aide : Si l’année actuelle moins l’année de naissance est supérieure ou égale à 18, il/elle est majeur(e), sinon il/elle est mineur(e).

![code](https://github.com/user-attachments/assets/04103d4d-7685-432f-9076-045add61ee54)


<h2>Partie 5 : Créer une fonction pour vérifier la majorité</h2>

Créer une fonction estMajeur() que vous utiliserez : if (estMajeur($yearBirth) == true)
Aide : la fonction returnera un booléen (true ou false)

Aller plus loin 
Placer la fonction dans un fichier à part que vous incluez :
include "fonction.php";
OU
require "fonction.php";
// require va arrêter le script s'il ne trouve pas le fichier contrairement à include 

<h1> TP connexion N3 </h1>

utilisez **h__pital** et renommez le **hôpital**

Exo : Gestion des Patients dans un Hôpital avec PHP et MySQL
Fichier connexion.php (Connexion à la base de données)
Ce fichier contient la logique de connexion à la base de données MySQL.

![image](https://github.com/user-attachments/assets/dca425cc-0ca2-4021-a878-dad0238d8bc8)

Fichier ajouter_patient.html (Formulaire pour ajouter un patient) Ce fichier contient le formulaire HTML permettant à l'utilisateur d'ajouter un patient. 

![image](https://github.com/user-attachments/assets/346c0481-3594-4cef-81c9-0aaed0b35d4e)

Fichier traitement_patient.php (Traitement de l'ajout d'un patient) Ce fichier reçoit les données du formulaire et les insère dans la table Patient. 

![image](https://github.com/user-attachments/assets/09026455-3da8-4ead-9d43-80cfeb69f3cf)
