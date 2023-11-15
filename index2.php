<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Exercice 1
Créer un formulaire permettant d'ajouter un client dans la base de données. Il devra comporter les champs : nom, prénom, date de naissance, carte de fidélité (case à cocher) et numéro de carte de fidélité.
A l'aide de ce formulaire, ajouter à la liste des clients Alicia Moore née le 8 septembre 1979 et ne possédant pas de carte de fidélité.
<form action="index2.php" method="post">
    Nom: <input type="text" name="lastName"><br>
    Prénom: <input type="text" name="firstName"><br>
    Date de naissance: <input type="date" name="birthDate"><br>
    Carte de fidélité: <input type="checkbox" name="card" value="1"><br>
    Numéro de carte de fidélité: <input type="text" name="cardNumber"><br>
    <input type="submit" value="Ajouter">
</form> -->

 <?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $lastName = $_POST["lastName"];
//     $firstName = $_POST["firstName"];
//     $birthDate = $_POST["birthDate"];
//     $card = isset($_POST["card"]) ? 1 : 0;
//     $cardNumber = $card ? $_POST["cardNumber"] : NULL;

//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $stmt = $pdo->prepare("INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber) VALUES (?, ?, ?, ?, ?)");
//         $stmt->execute([$lastName, $firstName, $birthDate, $card, $cardNumber]);

//         if ($stmt->rowCount() > 0) {
//             echo "Client ajouté avec succès.";
//         } else {
//             echo "Aucun client n'a été ajouté.";
//         }
//     } catch (PDOException $e) {
//         echo 'Connection failed: ' . $e->getMessage();
//     }
// }
?> 

<!-- Exercice 2
Créer un formulaire permettant d'ajouter un client dans la base de données. Ajouter à ce formulaire les champs permettant de créer une carte de fidélité : numéro de carte et type de carte.
Ajouter, grâce à ce formulaire, Louise Ciccone née le 16 août 1958 et possédant une carte de fidélité. Ajouter sa carte de fidélité n°7125. C'est une carte de type 2. -->
<!DOCTYPE html>
<html>
<body>

<!-- <form action="index2.php" method="post">
    Nom: <input type="text" name="lastName"><br>
    Prénom: <input type="text" name="firstName"><br>
    Date de naissance: <input type="date" name="birthDate"><br>
    Carte de fidélité: <input type="checkbox" name="card" value="1"><br>
    Numéro de carte de fidélité: <input type="text" name="cardNumber"><br>
    Type de carte: <input type="text" name="cardType"><br>
    Discount: <input type="text" name="discount"><br>
    <input type="submit" value="Ajouter">
</form> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $lastName = $_POST["lastName"];
//     $firstName = $_POST["firstName"];
//     $birthDate = $_POST["birthDate"];
//     $card = isset($_POST["card"]) ? 1 : 0;
//     $cardNumber = $card ? $_POST["cardNumber"] : NULL;
//     $cardType = $card ? $_POST["cardType"] : NULL;
//     $discount = $card ? $_POST["discount"] : NULL;

//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         if ($card) {
//             $stmt = $pdo->prepare("INSERT INTO cardTypes (type, discount) VALUES (?, ?)");
//             $stmt->execute([$cardType, $discount]);
//             $cardTypeId = $pdo->lastInsertId();
//         } else {
//             $cardTypeId = NULL;
//         }

//         $stmt = $pdo->prepare("INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber, cardTypeId) VALUES (?, ?, ?, ?, ?, ?)");
//         $stmt->execute([$lastName, $firstName, $birthDate, $card, $cardNumber, $cardTypeId]);

//         echo "Client ajouté avec succès.";
//     } catch (PDOException $e) {
//         echo 'Connection failed: ' . $e->getMessage();
//     }
// }
?>

</body>
</html>



<!-- Exercice 3
Créer un formulaire permettant d'ajouter un spectacle. Il contiendra les champs : titre, artiste, date, type de spectacle, genre 1, genre 2, durée, heure de début.
Ajouter le spectacle "I love techno" de David Guetta qui a lieu le 20 septembre 2019. C'est un concert (showTypesId : 1) de musique électronique (firstGenresId : 4) et clubbing (secondGenreId : 10) qui dure 3 heures et qui commence à 21h.


<!DOCTYPE html>
<html>
<body>

<form action="index2.php" method="post">
    Titre: <input type="text" name="title"><br>
    Artiste: <input type="text" name="artist"><br>
    Date: <input type="date" name="date"><br>
    Type de spectacle: <input type="text" name="showType"><br>
    Genre 1: <input type="text" name="genre1"><br>
    Genre 2: <input type="text" name="genre2"><br>
    Durée: <input type="text" name="duration"><br>
    Heure de début: <input type="time" name="startTime"><br>
    <input type="submit" value="Ajouter">
</form> -->
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $title = $_POST["title"];
//     $performer = $_POST["performer"];
//     $date = $_POST["date"];
//     $showType = $_POST["showType"];
//     $genre1 = $_POST["genre1"];
//     $genre2 = $_POST["genre2"];
//     $duration = $_POST["duration"];
//     $startTime = $_POST["startTime"];

//     try {
//         $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         $stmt = $pdo->prepare("INSERT INTO shows (title, performer, date, showType, genre1, genre2, duration, startTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"); // Changed 'artist' to 'performer'
//         $stmt->execute([$title, $performer, $date, $showType, $genre1, $genre2, $duration, $startTime]);

//         echo "Spectacle ajouté avec succès.";
//     } catch (PDOException $e) {
//         echo 'Connection failed: ' . $e->getMessage();
//     }
// }
?>

</body>
</html>




<!-- Exercice 4
Créer un formulaire comprenant les champs : nom, prénom, date de naissance, carte de fidélité (case à cocher) et numéro de carte de fidélité. Ce formulaire devra permettre de modifier un client.
Dans ce formulaire, afficher les information de Gabriel Perry. Modifier sa date de naissance : il est né le 9 avril 1994. -->


<!-- <!DOCTYPE html>
<html>
<body> -->


<?php
// $selectedClient = null;
// $clients = [];

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->prepare("SELECT id, lastName, firstName FROM clients ORDER BY lastName");
//     $stmt->execute();
//     $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clientId"])) {
//         $stmt = $pdo->prepare("SELECT * FROM clients WHERE id = ?");
//         $stmt->execute([$_POST["clientId"]]);
//         $selectedClient = $stmt->fetch(PDO::FETCH_ASSOC);
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>

<!-- <form action="index2.php" method="post">
    Client: 
    <select name="clientId" onchange="this.form.submit()">
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id'] ?>"><?= $client['lastName'] . ' ' . $client['firstName'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Nom: <input type="text" name="lastName" value="<?= $selectedClient ? $selectedClient['lastName'] : '' ?>"><br>
    Prénom: <input type="text" name="firstName" value="<?= $selectedClient ? $selectedClient['firstName'] : '' ?>"><br>
    Date de naissance: <input type="date" name="birthDate" value="<?= $selectedClient ? $selectedClient['birthDate'] : '' ?>"><br>
    Carte de fidélité: <input type="checkbox" name="card" value="1" <?= $selectedClient && $selectedClient['card'] ? 'checked' : '' ?>><br>
    Numéro de carte de fidélité: <input type="text" name="cardNumber" value="<?= $selectedClient && $selectedClient['card'] ? $selectedClient['cardNumber'] : '' ?>"><br>
    <input type="submit" value="Modifier">
</form>
</body>
</html> -->



<!-- Exercice 5
Créer un formulaire permettant de modifier un spectacle. 
Afficher les informations de Vestibulum accumsan. 
Modifier la date du spectacle : il est repoussé au 1er janvier 2017 à 21h. -->


<!-- <!DOCTYPE html>
<html>
<body> -->

<?php
// $selectedShow = null;
// $shows = [];

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->prepare("SELECT id, title, performer, date, startTime FROM shows ORDER BY title");
//     $stmt->execute();
//     $shows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["showId"])) {
//         $stmt = $pdo->prepare("SELECT * FROM shows WHERE id = ?");
//         $stmt->execute([$_POST["showId"]]);
//         $selectedShow = $stmt->fetch(PDO::FETCH_ASSOC);
//     }

//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["title"])) {
//         $title = $_POST["title"];
//         $performer = $_POST["performer"];
//         $date = $_POST["date"];
//         $startTime = $_POST["startTime"];
//         $showId = $_POST["showId"];

//         $stmt = $pdo->prepare("UPDATE shows SET title = ?, performer = ?, date = ?, startTime = ? WHERE id = ?");
//         $stmt->execute([$title, $performer, $date, $startTime, $showId]);

//         echo "Spectacle modifié avec succès.";
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>

<!-- <form action="index2.php" method="post">
    Spectacle: 
    <select name="showId" onchange="this.form.submit()">
        <?php foreach ($shows as $show): ?>
            <option value="<?= $show['id'] ?>"><?= $show['title'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Titre: <input type="text" name="title" value="<?= $selectedShow ? $selectedShow['title'] : '' ?>"><br>
    Performer: <input type="text" name="performer" value="<?= $selectedShow ? $selectedShow['performer'] : '' ?>"><br>
    Date: <input type="date" name="date" value="<?= $selectedShow ? $selectedShow['date'] : '' ?>"><br>
    Heure de début: <input type="time" name="startTime" value="<?= $selectedShow ? $selectedShow['startTime'] : '' ?>"><br>
    <input type="submit" value="Modifier">
</form>

</body>
</html> -->



<!-- Exercice 6
Créer un formulaire permettant de modifier un client. 
Afficher les informations du client n°5. Modifier son nom et son prénom : il s'appellera Nicolas Monteiro. -->


<?php
// $selectedClient = null;
// $clients = [];

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->prepare("SELECT id, lastName, firstName FROM clients ORDER BY lastName");
//     $stmt->execute();
//     $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clientId"])) {
//         $stmt = $pdo->prepare("SELECT * FROM clients WHERE id = ?");
//         $stmt->execute([$_POST["clientId"]]);
//         $selectedClient = $stmt->fetch(PDO::FETCH_ASSOC);
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>
<!-- <form action="index2.php" method="post">
    Client: 
    <select name="clientId" onchange="this.form.submit()">
    <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id'] ?>"><?= $client['lastName'] . ' ' . $client['firstName'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Nom: <input type="text" name="lastName" value="<?= $selectedClient ? $selectedClient['lastName'] : '' ?>"><br>
    Prénom: <input type="text" name="firstName" value="<?= $selectedClient ? $selectedClient['firstName'] : '' ?>"><br>
    Date de naissance: <input type="date" name="birthDate" value="<?= $selectedClient ? $selectedClient['birthDate'] : '' ?>"><br>
    Carte de fidélité: <input type="checkbox" name="card" value="1" <?= $selectedClient && $selectedClient['card'] ? 'checked' : '' ?>><br>
    Numéro de carte de fidélité: <input type="text" name="cardNumber" value="<?= $selectedClient && $selectedClient['card'] ? $selectedClient['cardNumber'] : '' ?>"><br>
    <input type="submit" value="Modifier">
</form>
</body>
</html> -->



<!-- Exercice 7
Créer deux formulaires contenant tous les champs nécessaires à la création ou modification des clients. 
Afficher les informations des clients n°24 et 25. 
Les supprimer grâce à un bouton supprimer que vous aurez ajouté. 
(Voir image fournie) -->



<!-- <form action="index2.php" method="post">
    <h2>Créer un client</h2>
    Nom: <input type="text" name="name"><br>
    Prénom: <input type="text" name="firstName"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Créer">
</form> -->

<?php
// $selectedClient = null;
// $clients = [];

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Fetch all clients
//     $stmt = $pdo->prepare("SELECT id, name, firstName, email FROM clients ORDER BY name");
//     $stmt->execute();
//     $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Handle client creation
//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
//         $name = $_POST["name"];
//         $firstName = $_POST["firstName"];
//         $email = $_POST["email"];

//         $stmt = $pdo->prepare("INSERT INTO clients (name, firstName, email) VALUES (?, ?, ?)");
//         $stmt->execute([$name, $firstName, $email]);

//         echo "Client créé avec succès.";
//     }

//     // Handle client modification
//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["clientId"])) {
//         $stmt = $pdo->prepare("SELECT * FROM clients WHERE id = ?");
//         $stmt->execute([$_POST["clientId"]]);
//         $selectedClient = $stmt->fetch(PDO::FETCH_ASSOC);

//         if (isset($_POST["name"])) {
//             $name = $_POST["name"];
//             $firstName = $_POST["firstName"];
//             $email = $_POST["email"];

//             $stmt = $pdo->prepare("UPDATE clients SET name = ?, firstName = ?, email = ? WHERE id = ?");
//             $stmt->execute([$name, $firstName, $email, $_POST["clientId"]]);

//             echo "Client modifié avec succès.";
//         }
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>
<!-- <form action="index2.php" method="post">
    <h2>Modifier un client</h2>
    Client: 
    <select name="clientId" onchange="this.form.submit()">
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['id'] ?>"><?= $client['name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    Nom: <input type="text" name="name" value="<?= $selectedClient ? $selectedClient['name'] : '' ?>"><br>
    Prénom: <input type="text" name="firstName" value="<?= $selectedClient ? $selectedClient['firstName'] : '' ?>"><br>
    Email: <input type="email" name="email" value="<?= $selectedClient ? $selectedClient['email'] : '' ?>"><br>
    <input type="submit" value="Modifier">
</form> -->



<!-- Exercice 8
Afficher autant de formulaires que de réservations dont l'id client est 24 ou 25. 
Après les formulaires, ajouter un bouton supprimer et supprimer toutes ces réservations. 
(Voir image fournie) -->

<?php
// $bookings = [];

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Fetch all bookings for clients with ID 24 or 25
//     $stmt = $pdo->prepare("SELECT * FROM bookings WHERE clientId = 24 OR clientId = 25");
//     $stmt->execute();
//     $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Handle booking deletion
//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
//         $stmt = $pdo->prepare("DELETE FROM bookings WHERE clientId = 24 OR clientId = 25");
//         $stmt->execute();

//         echo "Réservations supprimées avec succès.";
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>

<!-- Display a form for each booking -->
<?php foreach ($bookings as $booking): ?>
    <!-- <form action="index2.php" method="post">
        <h2>Réservation <?= $booking['id'] ?></h2>
        Client ID: <input type="number" name="clientId" value="<?= $booking['clientId'] ?>"><br>
    </form> -->
<?php endforeach; ?>


<!-- <form action="index2.php" method="post">
    <input type="submit" name="delete" value="Supprimer toutes les réservations">
</form> -->


Exercice 9
Afficher autant de formulaires que de billets appartenant aux réservations 24 ou 25. Après les formulaires, ajouter un bouton supprimer et supprimer tous ces billets. (Voir image fournie)



</body>
</html>