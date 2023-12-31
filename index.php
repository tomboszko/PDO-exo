<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colyseum</title>
</head>
<body>
   
<?php
//Exercice 1
//Afficher tous les clients.

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query('SELECT * FROM clients');

//     while ($row = $stmt->fetch()) {
//         echo $row['lastName'] . ', ' . $row['firstName'] . ', ' . $row['birthDate'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Exercice 2
// Afficher tous les types de spectacles possibles.


// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query('SELECT type FROM showTypes');

//     while ($row = $stmt->fetch()) {
//         echo $row['type'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Exercice 3
// Afficher les 20 premiers clients.


// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query('SELECT * FROM clients LIMIT 20');

//     while ($row = $stmt->fetch()) {
//         echo $row['lastName'] . ', ' . $row['firstName'] . ', ' . $row['birthDate'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Exercice 4
// N'afficher que les clients possédant une carte de fidélité.


// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query('SELECT * FROM clients WHERE card = 1');

//     while ($row = $stmt->fetch()) {
//         echo $row['lastName'] . ', ' . $row['firstName'] . ', ' . $row['birthDate'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Exercice 5
// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query("SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%'");

//     while ($row = $stmt->fetch()) {
//         echo $row['lastName'] . ', ' . $row['firstName'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Les afficher comme ceci :

// Nom : *Nom du client*
// Prénom : *Prénom du client*
// Trier les noms par ordre alphabétique.


// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query("SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%'");

//     while ($row = $stmt->fetch()) {
//         echo 'Nom : ' . $row['lastName'] . '<br>';
//         echo 'Prénom : ' . $row['firstName'] . '<br><br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }

// Exercice 6
// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query("SELECT title, performer, date, startTime FROM shows ORDER BY title ASC");

//     while ($row = $stmt->fetch()) {
        
//         echo $row['title'] . ' par ' . $row['performer'] . ', le ' . $row['date'] . ' à ' . $row['startTime'] . '<br>';
//     }
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }


// Exercice 7
// Afficher tous les clients comme ceci :
// Nom : *Nom de famille du client*
// Prénom : *Prénom du client*
// Date de naissance : *Date de naissance du client*
// Carte de fidélité : *Oui (Si le client en possède une) ou Non (s'il n'en possède pas)*
// Numéro de carte : *Numéro de la carte fidélité du client s'il en possède une.*

try {
    $pdo = new PDO('mysql:host=localhost;dbname=colyseum', 'toms', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT lastName, firstName, birthDate, card, cardNumber FROM clients");

    while ($row = $stmt->fetch()) {
        echo 'Nom : ' . $row['lastName'] . '<br>';
        echo 'Prénom : ' . $row['firstName'] . '<br>';
        echo 'Date de naissance : ' . $row['birthDate'] . '<br>';
        echo 'Carte de fidélité : ' . ($row['card'] ? 'Oui' : 'Non') . '<br>';
        if ($row['card']) {
            echo 'Numéro de carte : ' . $row['cardNumber'] . '<br>';
        }
        echo '<br>';
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



?>
</body>
</html>