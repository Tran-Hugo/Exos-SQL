<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=test','root','root',$pdo_options);
//$sql = 'SELECT * FROM users';
$sql = 'SELECT UPPER(nom) AS nom_maj, prix FROM jeux_video';
$requete = $db->query($sql); 
while ($news = $requete->fetch()){
    echo $news['nom_maj']." : ".$news['prix']."<br>";
};

?> 
</body>
</html>