<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="..\css\Réalisation.css"/>
        <title>Présentation</title>
    </head>
    <body>
            <div class="menu">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="..\php/Compétence.php">Compétences</a></li>
			<li><a href="..\php/Formation.php">Formation</a></li>
			<li><a href="..\php/Réalisations.php">Réalisation</a></li>
            <li><a href="..\php/Contact.php">Contact</a></li>
        </ul>
    </div>
    </body>
    <link rel="index.html" href="C:\xampp\htdocs\portfolio\index.html"/>
</html>

<?php

require_once("..\yaml\yaml.php");
$data=yaml_parse_file('..\fichieryaml/Réalisation.yaml');

echo "<h2>Réalisation</h2>\n";
$Réalisation=$data["Réalisation"] ;
echo "<p>".ucfirst($Réalisation["Projets"])."</p>\n";

?>