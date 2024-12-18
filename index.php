<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\accueil.css"/>
        <title>Port folio</title>
    </head>
    <body>
            <div class="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="php/Compétence.php">Compétences</a></li>
            <li><a href="php/Formation.php">Formation</a></li>
            <li><a href="php/Réalisations.php">Réalisation</a></li>
            <li><a href="php/Contact.php">Contact</a></li>
        </ul>
    </div>
    </body>
    <img src="assets\Capturetete.PNG" alt="Description de l'image" class="mon-image">
</html>

<?php
echo "nimpote"; 
require_once("yaml\yaml.php");
$data=yaml_parse_file('fichieryaml/Acceuil.yaml');

echo "<h2>Présentation</h2>\n";
$Accueil=$data["Accueil"] ;
echo "<p>".ucfirst($Accueil["prenom"])."  ".$Accueil["nom"]."</p>\n";
echo "<p>".ucfirst($Accueil["accroche"])." ".ucfirst($Accueil["présentation"])."</p>\n";

?>