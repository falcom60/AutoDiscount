<?php

$dsn = 'mysql:host=localhost;dbname=AutodiscountBDD';
$username = 'user_php3';
$password = '221077momo';

try {
   $pdo = new PDO($dsn, $username, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // Récupérer les utilisateurs
   $query = "SELECT * FROM employees";
   $stmt = $pdo->query($query);
   $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

   // Afficher les utilisateurs
   foreach($employees as $employee) {
    echo "ID : " . $employee['idEmployee'] . "<br>";
    echo "email : " . $employee['email'] . "<br>";
    echo "<br>";

   }
} catch (PDOException $e) {
   echo "Erreur de connexion à la base de donnée : " . $e->getMessage();
}


?>